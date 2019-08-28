<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Sidebar.php');

class User extends sidebar {
	public function __construct() 
	{
		parent::__construct();	
		$this->load->model('module_model');
		$this->load->model('User_model');
	}
	public function index()
	{	
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}
	public  function add(){
		if($this->session->userdata('h_details'))
		{
			$data['r_list']=$this->User_model->get_active_roles_list();
			$this->load->view('role/adduser',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public  function edit(){
		if($this->session->userdata('h_details'))
		{
			$u_id=base64_decode($this->uri->segment(3));
			$data['r_list']=$this->User_model->get_active_roles_list();
			$data['u']=$this->User_model->get_user_details($u_id);
			$data['r_n']=$this->User_model->get_role_details($u_id);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('role/edituser',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public  function lists(){
		if($this->session->userdata('h_details'))
		{
			$l_data=$this->session->userdata('h_details');
			$data['u_list']=$this->User_model->get_active_user_list($l_data['a_id']);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('role/userlist',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public  function rights(){
		if($this->session->userdata('h_details'))
		{
			$l_data=$this->session->userdata('h_details');
			$data['u_list']=$this->User_model->get_active_users_list($l_data['a_id']);
			$data['m_list']=$this->User_model->get_active_module_list();
			//echo '<pre>';print_r($data);exit;
			$this->load->view('role/user-rights',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public  function roles(){
		if($this->session->userdata('h_details'))
		{
			$data['m_list']=$this->module_model->get_module();
			$this->load->view('admin/roles',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function roleedit()
	{
		if($this->session->userdata('h_details'))
		{
			$r_id=base64_decode($this->uri->segment(3));
			$data['r']=$this->User_model->get_rolename_details($r_id);
			$data['m_list']=$this->module_model->get_module();
			$data['op_list']=$this->User_model->get_option_list($data['r']['m_id']);
			//echo '<pre>';print_r($data);exit;
			$this->load->view('role/edit',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public  function roleslist(){
		if($this->session->userdata('h_details'))
		{
			$data['r_list']=$this->User_model->get_roles_list();
			//echo '<pre>';print_r($data);exit;
			$this->load->view('role/list',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function addrights(){
		if($this->session->userdata('h_details'))
		{
				$post=$this->input->post();
				//echo '<pre>';print_r($post);
				$l_data=$this->session->userdata('h_details');
				$r_ids=$this->User_model->get_module_role_details($post['a_id'],$post['m_name']);
				foreach($r_ids as $lis){
					if (in_array($lis['m_m_id'], $post['role_options']))
						  {
							$in[]=$lis['m_m_id'];
						  }else{
							$out[]=$lis['u_r_p_id'];
						  }
				}
				if(isset($out) && count($out)>0){
						foreach($out as $li){
							$this->User_model->delete_role_options_list($li);
						}
					}
				$diff_result = array_diff($post['role_options'], $in);
				//echo '<pre>';print_r($out);
				//echo '<pre>';print_r($diff_result);exit;
				if(isset($diff_result) && count($diff_result)>0){
					foreach($diff_result as $li){
						$d=array(
						'm_id'=>isset($post['m_name'])?$post['m_name']:'',
						'u_id'=>isset($post['a_id'])?$post['a_id']:'',
						'm_m_id'=>isset($li)?$li:'',
						'created_at'=>date('Y-m-d H:i:s'),
						'created_by'=>isset($l_data['a_id'])?$l_data['a_id']:'',
						);
						$this->User_model->save_user_privileges($d);
					}
				}
				$this->session->set_flashdata('success',"User rights updated successfully");
				redirect('user/rights');			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function editpost(){
		if($this->session->userdata('h_details'))
		{
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit;
			$l_data=$this->session->userdata('h_details');
			$u=$this->User_model->get_user_details($post['a_id']);
			if($u['email']!=$post['email'] || $u['mobile']!=$post['mobile']){
				$check=$this->User_model->check_email($post['email'],$post['mobile']);
				if(count($check)>0){
					$this->session->set_flashdata('error',"Email /Mobile already exists. Please try again");
					redirect('user/edit/'.base64_encode($post['a_id']));
				}
			}
			$u_a=array(
				'name'=>isset($post['name'])?$post['name']:'',
				'email'=>isset($post['email'])?$post['email']:'',
				'mobile'=>isset($post['mobile'])?$post['mobile']:'',
				'code'=>isset($post['code'])?$post['code']:'',
				'updated_at'=>date('Y-m-d H:i:s'),
				);
			$update=$this->User_model->update_user($post['a_id'],$u_a);
			if(count($update)>0){
				$this->User_model->delete_privileges($post['a_id']);
				foreach($post['role_name'] as $lis){
					$p_li=$this->User_model->get_role_option_names($lis);
					foreach($p_li as $li){
						$rp=array(
						'm_id'=>isset($li['m_id'])?$li['m_id']:'',
						'u_id'=>isset($post['a_id'])?$post['a_id']:'',
						'r_n_id'=>isset($lis)?$lis:'',
						'm_m_id'=>isset($li['r_option_id'])?$li['r_option_id']:'',
						'created_at'=>date('Y-m-d H:i:s'),
						'created_by'=>isset($l_data['a_id'])?$l_data['a_id']:'',
						);
						$this->User_model->save_user_privileges($rp);
					}
					
				}
				$this->session->set_flashdata('success',"User updated successfully");
				redirect('user/lists');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('user/edit/'.base64_encode($post['a_id']));
			}
			echo '<pre>';print_r($u);exit;			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
			
	public function addpost(){
		if($this->session->userdata('h_details'))
		{
			$post=$this->input->post();
			$l_data=$this->session->userdata('h_details');
			$check=$this->User_model->check_email($post['email'],$post['mobile']);
			if(count($check)>0){
				$this->session->set_flashdata('error',"Email /Mobile already exists. Please try again");
				redirect('user/add');
			}
			$add=array(
			'role_id'=>2,
			'name'=>isset($post['name'])?$post['name']:'',
			'email'=>isset($post['email'])?$post['email']:'',
			'mobile'=>isset($post['mobile'])?$post['mobile']:'',
			'code'=>isset($post['code'])?$post['code']:'',
			'pwd'=>isset($post['confirmpwd'])?md5($post['confirmpwd']):'',
			'org_pwd'=>isset($post['confirmpwd'])?$post['confirmpwd']:'',
			'created_by'=>isset($l_data['a_id'])?$l_data['a_id']:'',
			);
			$save=$this->User_model->save_user($add);
			if(count($save)>0){
				foreach($post['role_name'] as $lis){
					$p_li=$this->User_model->get_role_option_names($lis);
					//echo '<pre>';print_r($p_li);exit;
					foreach($p_li as $li){
						$rp=array(
						'u_id'=>isset($save)?$save:'',
						'm_id'=>isset($li['m_id'])?$li['m_id']:'',
						'r_n_id'=>isset($lis)?$lis:'',
						'm_m_id'=>isset($li['r_option_id'])?$li['r_option_id']:'',
						'created_at'=>date('Y-m-d H:i:s'),
						'created_by'=>isset($l_data['a_id'])?$l_data['a_id']:'',
						);
						$this->User_model->save_user_privileges($rp);
					}
					
				}
				$this->session->set_flashdata('success',"User added successfully");
				redirect('user/lists');
				
				
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('user/add');
			}
			//echo '<pre>';print_r($post);exit;
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function rolespost(){
		if($this->session->userdata('h_details'))
		{
			$post=$this->input->post();
			$l_data=$this->session->userdata('h_details');
			$check=$this->User_model->check_role_name($post['m_name'],$post['role_name']);
			if(count($check)>0){
				$this->session->set_flashdata('error',"Role name already exists. Please use another name");
				redirect('user/roles');
			}
			$add=array(
			'm_id'=>isset($post['m_name'])?$post['m_name']:'',
			'role_name'=>isset($post['role_name'])?$post['role_name']:'',
			'created_at'=>date('Y-m-d H:i:s'),
			'created_by'=>isset($l_data['a_id'])?$l_data['a_id']:'',
			);
			$save=$this->User_model->save_role($add);
			if(count($save)>0){
				foreach($post['role_option'] as $li){
					$d=array(
					'r_n_id'=>isset($save)?$save:'',
					'r_option_id'=>isset($li)?$li:'',
					'created_at'=>date('Y-m-d H:i:s'),
					'created_by'=>isset($l_data['a_id'])?$l_data['a_id']:'',
					);
					$this->User_model->save_role_options($d);
				}
				$this->session->set_flashdata('success',"Role added successfully");
				redirect('user/roleslist');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('user/roles');
			}
			//echo '<pre>';print_r($post);exit;
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function roleseditpost(){
		if($this->session->userdata('h_details'))
		{
			$post=$this->input->post();
			$l_data=$this->session->userdata('h_details');
			$r=$this->User_model->get_rolename_details($post['r_n_id']);
			//echo '<pre>';print_r($r);exit;
			if($r['m_id']!=$post['m_name'] || $r['role_name']!=$post['role_name'] ){
				$check=$this->User_model->check_role_name($post['m_name'],$post['role_name']);
				if(count($check)>0){
					$this->session->set_flashdata('error',"Role name already exists. Please use another name");
					redirect('user/roleedit/'.base64_encode($post['r_n_id']));
				}
			}
			$add=array(
			'm_id'=>isset($post['m_name'])?$post['m_name']:'',
			'role_name'=>isset($post['role_name'])?$post['role_name']:'',
			'updated_at'=>date('Y-m-d H:i:s'),
			);
			$update=$this->User_model->update_role($post['r_n_id'],$add);
			if(count($update)>0){
				$r_ids=$this->User_model->get_roleoption($post['r_n_id']);
				foreach($r_ids as $lis){
					if (in_array($lis['r_option_id'], $post['role_option']))
						  {
							$in[]=$lis['r_option_id'];
						  }else{
							$out[]=$lis['r_option_id'];
						  }
					}
					if(isset($out) && count($out)>0){
						foreach($out as $li){
							$this->User_model->delete_role_options($post['r_n_id'],$li);
						}
					}
				$diff_result = array_diff($post['role_option'], $in);
				if(isset($diff_result) && count($diff_result)>0){
					foreach($diff_result as $li){
						$d=array(
						'r_n_id'=>isset($post['r_n_id'])?$post['r_n_id']:'',
						'r_option_id'=>isset($li)?$li:'',
						'created_at'=>date('Y-m-d H:i:s'),
						'created_by'=>isset($l_data['a_id'])?$l_data['a_id']:'',
						);
						$this->User_model->save_role_options($d);
					}
				}
				$this->session->set_flashdata('success',"Role updated successfully");
				redirect('user/roleslist');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('user/roles');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public  function status(){
		if($this->session->userdata('h_details'))
		{
			$m_id=base64_decode($this->uri->segment(3));
			$statu=base64_decode($this->uri->segment(4));
			if($statu==1){
				$st=0;	
			}else{
				$st=1;
			}
			$u_data=array(
			'status'=>$st,
			'updated_at'=>date('Y-m-d H:i:s')
			);
			$update=$this->User_model->update_user($m_id,$u_data);
			if(count($update)>0){
				if($statu=1){
					$this->session->set_flashdata('success',"User activated successfully");
				}else{
					$this->session->set_flashdata('success',"User deactivated successfully");
				}
				redirect('user/lists');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('user/lists');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public  function delete(){
		if($this->session->userdata('h_details'))
		{
			$m_id=base64_decode($this->uri->segment(3));
			$u_data=array(
			'status'=>2,
			'updated_at'=>date('Y-m-d H:i:s')
			);
			$update=$this->User_model->update_user($m_id,$u_data);
			if(count($update)>0){
				$this->session->set_flashdata('success',"User deleted successfully");
				redirect('user/lists');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('user/lists');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public  function rolestatus(){
		if($this->session->userdata('h_details'))
		{
			$m_id=base64_decode($this->uri->segment(3));
			$statu=base64_decode($this->uri->segment(4));
			if($statu==1){
				$st=0;	
			}else{
				$st=1;
			}
			$u_data=array(
			'status'=>$st,
			'updated_at'=>date('Y-m-d H:i:s')
			);
			$update=$this->User_model->update_rolename($m_id,$u_data);
			if(count($update)>0){
				if($statu=1){
					$this->session->set_flashdata('success',"Role name activated successfully");
				}else{
					$this->session->set_flashdata('success',"Role nam deactivated successfully");
				}
				redirect('user/roleslist');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('user/roleslist');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public  function roledelete(){
		if($this->session->userdata('h_details'))
		{
			$m_id=base64_decode($this->uri->segment(3));
			$u_data=array(
			'status'=>2,
			'updated_at'=>date('Y-m-d H:i:s')
			);
			$update=$this->User_model->update_rolename($m_id,$u_data);
			if(count($update)>0){
				$this->session->set_flashdata('success',"Role name deleted successfully");
				redirect('user/roleslist');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('user/roleslist');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function get_module_options(){
		if($this->session->userdata('h_details'))
		{
			$post=$this->input->post();
			$menulist=$this->module_model->get_module_menu($post['m_id']);
			if(count($menulist) > 0)
			{
				$data['msg']=1;
				$data['list']=$menulist;
			}else{
				$data['msg']=0;
				$data['list']=array();
			}
			echo json_encode($data);exit;
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	public function get_menu_options(){
		if($this->session->userdata('h_details'))
		{
			$post=$this->input->post();
			$l_data=$this->session->userdata('h_details');
			$data['menulist']=$this->User_model->get_module_menu($post['m_id'],$post['a_id']);
			$data['m_list']=$this->User_model->get_menu_module_menu($post['m_id']);
			$this->load->view('role/userright_assign',$data);
			
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Sidebar.php');

class Doctor extends sidebar {
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Doctor_model');
		$this->load->model('User_model');
	}
	public function index()
	{	
		if($this->session->userdata('h_details'))
			{
				$l_data=$this->session->userdata('h_details');
				$data['d_list']=$this->Doctor_model->d_list($l_data['a_id']);
				//echo '<pre>';print_r($data);exit;
				$this->load->view('doctor/list',$data);
				$this->load->view('admin/footer');
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public function add()
	{	
		if($this->session->userdata('h_details'))
			{
				$data['s_list']=$this->Doctor_model->s_list();
				$this->load->view('doctor/add',$data);
				$this->load->view('admin/footer');
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	
	
	public function edit()
	{
		if($this->session->userdata('h_details'))
		{
			$d_id=base64_decode($this->uri->segment(3));
			$data['d']=$this->Doctor_model->details($d_id);
			$data['s_list']=$this->Doctor_model->s_list();
			//echo '<pre>';print_r($data);exit;
			$this->load->view('doctor/edit',$data);
			$this->load->view('admin/footer');
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	
	public  function addpost(){
		if($this->session->userdata('h_details'))
			{
			$l_data=$this->session->userdata('h_details');
			$post=$this->input->post();
			//echo '<pre>';print_r($post);exit; 
			$check=$this->User_model->check_email($post['email'],$post['mobile']);
			if(count($check)>0){
				$this->session->set_flashdata('error',"Email /Mobile already exists. Please try again");
				redirect('doctor/add');
			}
			if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
				$temp = explode(".", $_FILES["image"]["name"]);
				$image = round(microtime(true)) . '.' . end($temp);
				move_uploaded_file($_FILES['image']['tmp_name'], "assets/profile_pic/" . $image);
			}
			$add=array(
				'role_id'=>3,
				'name'=>isset($post['name'])?$post['name']:'',
				'email'=>isset($post['email'])?$post['email']:'',
				'mobile'=>isset($post['mobile'])?$post['mobile']:'',
				'address'=>isset($post['address'])?$post['address']:'',
				'pwd'=>isset($post['confirmpwd'])?md5($post['confirmpwd']):'',
				'org_pwd'=>isset($post['confirmpwd'])?$post['confirmpwd']:'',
				'profile_pic'=>isset($image)?$image:'',
				'created_by'=>isset($l_data['a_id'])?$l_data['a_id']:'',
				);
				$save=$this->User_model->save_user($add);
				if(count($save)>0){
					$d_add=array(
						'a_id'=>isset($save)?$save:'',
						'name'=>isset($post['name'])?$post['name']:'',
						'email'=>isset($post['email'])?$post['email']:'',
						'speciality'=>isset($post['speciality'])?$post['speciality']:'',
						'free_days'=>isset($post['free_days'])?$post['free_days']:'',
						'mobile'=>isset($post['mobile'])?$post['mobile']:'',
						'address'=>isset($post['address'])?$post['address']:'',
						'c_fee'=>isset($post['c_fee'])?$post['c_fee']:'',
						'f_time'=>isset($post['f_time'])?$post['f_time']:'',
						't_time'=>isset($post['t_time'])?$post['t_time']:'',
						'profile_pic'=>isset($image)?$image:'',
						'created_at'=>date('Y-m-d H:i:s'),
						'created_by'=>isset($l_data['a_id'])?$l_data['a_id']:'',
					);
					$this->Doctor_model->save($d_add);
					$this->session->set_flashdata('success',"Doctor added successfully");
					redirect('doctor');	
				}else{
					$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
					redirect('doctor/add');
				}
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	
	public  function editpost(){
	if($this->session->userdata('h_details'))
		{
			$post=$this->input->post();
			$d=$this->Doctor_model->details($post['d_id']);
			if($d['email']!=$post['email'] || $d['mobile']!=$post['mobile']){
				$check=$this->User_model->check_email($post['email'],$post['mobile']);
				if(count($check)>0){
					$this->session->set_flashdata('error',"Email /Mobile already exists. Please try again");
					redirect('doctor/edit/'.base64_encode($post['d_id']));
				}
			}
			if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
						unlink('assets/profile_pic/'.$d['profile_pic']);
							$temp = explode(".", $_FILES["image"]["name"]);
							$image = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['image']['tmp_name'], "assets/profile_pic/" . $image);
						}else{
							$image=$d['profile_pic'];
						}
			$u_a=array(
				'name'=>isset($post['name'])?$post['name']:'',
				'email'=>isset($post['email'])?$post['email']:'',
				'mobile'=>isset($post['mobile'])?$post['mobile']:'',
				'address'=>isset($post['address'])?$post['address']:'',
				'profile_pic'=>isset($image)?$image:'',
				'updated_at'=>date('Y-m-d H:i:s'),
				);
			$update=$this->User_model->update_user($post['a_id'],$u_a);;
			if(count($update)>0){
					$d_add=array(
						'name'=>isset($post['name'])?$post['name']:'',
						'email'=>isset($post['email'])?$post['email']:'',
						'speciality'=>isset($post['speciality'])?$post['speciality']:'',
						'free_days'=>isset($post['free_days'])?$post['free_days']:'',
						'mobile'=>isset($post['mobile'])?$post['mobile']:'',
						'address'=>isset($post['address'])?$post['address']:'',
						'c_fee'=>isset($post['c_fee'])?$post['c_fee']:'',
						'f_time'=>isset($post['f_time'])?$post['f_time']:'',
						't_time'=>isset($post['t_time'])?$post['t_time']:'',
						'profile_pic'=>isset($image)?$image:'',
						'updated_at'=>date('Y-m-d H:i:s'),
					);
					$this->Doctor_model->update($post['d_id'],$d_add);
					$this->session->set_flashdata('success',"Doctor details updated successfully");
					redirect('doctor');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('doctor/edit/'.base64_encode($post['d_id']));
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}			
	}
	
	public  function status(){
		if($this->session->userdata('h_details'))
		{
			$d_id=base64_decode($this->uri->segment(3));
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
			$update=$this->Doctor_model->update($d_id,$u_data);
			if(count($update)>0){
				$d=$this->Doctor_model->get_d_b_details($d_id);
				$this->Doctor_model->d_update($d['a_id'],$u_data);
				if($statu=1){
					$this->session->set_flashdata('success',"Doctor activated successfully");
				}else{
					$this->session->set_flashdata('success',"Doctor deactivated successfully");
				}
				redirect('doctor');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('doctor');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	
	public  function delete(){
		if($this->session->userdata('h_details'))
		{
			$d_id=base64_decode($this->uri->segment(3));
			$u_data=array(
			'status'=>2,
			'updated_at'=>date('Y-m-d H:i:s')
			);
			$update=$this->Doctor_model->update($d_id,$u_data);
			if(count($update)>0){
				$d=$this->Doctor_model->get_d_b_details($d_id);
				$this->Doctor_model->d_update($d['a_id'],$u_data);
				$this->session->set_flashdata('success',"Doctor deleted successfully");
				redirect('doctor');
			}else{
				$this->session->set_flashdata('error',"Doctor problem will occured. Please try again");
				redirect('doctor');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	
}

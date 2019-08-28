<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Sidebar.php');

class Department extends sidebar {
	public function __construct() 
	{
		parent::__construct();	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('security');
		$this->load->model('Admin_model');
		$this->load->model('Department_model');
	}
	public function index()
	{	
		if($this->session->userdata('h_details'))
			{
				$l_data=$this->session->userdata('h_details');
				$data['d_list']=$this->Department_model->d_list($l_data['a_id']);
				$this->load->view('dept/list',$data);
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
				$l_data=$this->session->userdata('h_details');
				$this->load->view('dept/add');
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
			$data['d']=$this->Department_model->details($d_id);
			$this->load->view('dept/edit',$data);
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
				foreach($post['d_name'] as $li){
					$check=$this->Department_model->check($li);
					if(count($check)>0){
						$this->session->set_flashdata('error',"Department already exists. Please another department.");
						redirect('department/add');
					}
				}
				foreach($post['d_name'] as $li){
					if($li!=''){
						$add=array(
						'name'=>isset($li)?$li:'',
						'created_at'=>date('Y-m-d H:i:s'),
						'created_by'=>isset($l_data['a_id'])?$l_data['a_id']:'',
						);
						$save=$this->Department_model->save($add);
					}
				}
				if(count($save)>0){
					$this->session->set_flashdata('success',"Department added successfully");
					redirect('department');
				}else{
					$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
					redirect('department/add');
				}
				//echo '<pre>';print_r($post);exit;
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	
	public  function editpost(){
	if($this->session->userdata('h_details'))
		{
			$post=$this->input->post();
			$d=$this->Department_model->details($post['d_id']);
			if($d['name']!=$post['d_name']){
				$check=$this->Department_model->check($post['d_name']);
				if(count($check)>0){
					$this->session->set_flashdata('error',"Module already exists. Please another module.");
					redirect('department/edit/'.base64_encode($post['d_id']));
				}
			}
			$u_data=array(
				'name'=>isset($post['d_name'])?$post['d_name']:'',
				'updated_at'=>date('Y-m-d H:i:s'),
				);
			$update=$this->Department_model->update($post['d_id'],$u_data);
			if(count($update)>0){
				$this->session->set_flashdata('success',"Department updated successfully");
				redirect('department');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('department/edit/'.base64_encode($post['d_id']));
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
			$update=$this->Department_model->update($d_id,$u_data);
			if(count($update)>0){
				if($statu=1){
					$this->session->set_flashdata('success',"Department activated successfully");
				}else{
					$this->session->set_flashdata('success',"Department deactivated successfully");
				}
				redirect('department');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('department');
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
			$update=$this->Department_model->update($d_id,$u_data);
			if(count($update)>0){
				$this->session->set_flashdata('success',"Department deleted successfully");
				redirect('department');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('department');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	
}

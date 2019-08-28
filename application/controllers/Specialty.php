<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Sidebar.php');

class Specialty extends sidebar {
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('Specialty_model');
	}
	public function index()
	{	
		if($this->session->userdata('h_details'))
			{
				$l_data=$this->session->userdata('h_details');
				$data['s_list']=$this->Specialty_model->s_list($l_data['a_id']);
				$this->load->view('specialty/list',$data);
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
				$this->load->view('specialty/add');
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
			$s_id=base64_decode($this->uri->segment(3));
			$data['s']=$this->Specialty_model->details($s_id);
			$this->load->view('specialty/edit',$data);
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
				foreach($post['s_name'] as $li){
					$check=$this->Specialty_model->check($li);
					if(count($check)>0){
						$this->session->set_flashdata('error',"Specialty already exists. Please another specialty.");
						redirect('specialty/add');
					}
				}
				foreach($post['s_name'] as $li){
					if($li!=''){
						$add=array(
						'name'=>isset($li)?$li:'',
						'created_at'=>date('Y-m-d H:i:s'),
						'created_by'=>isset($l_data['a_id'])?$l_data['a_id']:'',
						);
						$save=$this->Specialty_model->save($add);
					}
				}
				if(count($save)>0){
					$this->session->set_flashdata('success',"Specialty added successfully");
					redirect('specialty');
				}else{
					$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
					redirect('specialty/add');
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
			$s=$this->Specialty_model->details($post['s_id']);
			if($s['name']!=$post['s_name']){
				$check=$this->Specialty_model->check($post['s_name']);
				if(count($check)>0){
					$this->session->set_flashdata('error',"Specialty already exists. Please another specialty.");
					redirect('specialty/edit/'.base64_encode($post['s_id']));
				}
			}
			$u_data=array(
				'name'=>isset($post['s_name'])?$post['s_name']:'',
				'updated_at'=>date('Y-m-d H:i:s'),
				);
			$update=$this->Specialty_model->update($post['s_id'],$u_data);
			if(count($update)>0){
				$this->session->set_flashdata('success',"Specialty updated successfully");
				redirect('specialty');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('specialty/edit/'.base64_encode($post['s_id']));
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}			
	}
	
	public  function status(){
		if($this->session->userdata('h_details'))
		{
			$s_id=base64_decode($this->uri->segment(3));
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
			$update=$this->Specialty_model->update($s_id,$u_data);
			if(count($update)>0){
				if($statu=1){
					$this->session->set_flashdata('success',"Specialty activated successfully");
				}else{
					$this->session->set_flashdata('success',"Specialty deactivated successfully");
				}
				redirect('specialty');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('specialty');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	
	public  function delete(){
		if($this->session->userdata('h_details'))
		{
			$s_id=base64_decode($this->uri->segment(3));
			$u_data=array(
			'status'=>2,
			'updated_at'=>date('Y-m-d H:i:s')
			);
			$update=$this->Specialty_model->update($s_id,$u_data);
			if(count($update)>0){
				$this->session->set_flashdata('success',"Specialty deleted successfully");
				redirect('specialty');
			}else{
				$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
				redirect('specialty');
			}
		}else{
			$this->session->set_flashdata('error','Please login to continue');
			redirect('admin');
		}
	}
	
}

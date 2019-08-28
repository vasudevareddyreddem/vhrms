<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Sidebar.php');
class Hospital extends sidebar {

	public function __construct() 
	{
		parent::__construct();	
	}
	
	public function index()
	{	
		if($this->session->userdata('h_details'))
			{	
				$data['h_detail']=$this->Admin_model->get_hospital_details(1);
				//echo '<pre>';print_r($data);exit;
				$this->load->view('clinic/hospital-info',$data);
				$this->load->view('admin/footer');
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	public function addhospital_d_post()
	{		if($this->session->userdata('h_details'))
			{	
				$post=$this->input->post();
				//echo '<pre>';print_r($post);exit;
				$hdetails=$this->Admin_model->get_hospital_details(1);
				if(isset($_FILES['image']['name']) && $_FILES['image']['name']!=''){
						unlink('assets/logo/'.$userdetails['profile_pic']);
							$temp = explode(".", $_FILES["image"]["name"]);
							$image = round(microtime(true)) . '.' . end($temp);
							move_uploaded_file($_FILES['image']['tmp_name'], "assets/logo/" . $image);
						}else{
							$image=$hdetails['logo'];
						}
					$u=array(
					'website'=>isset($post['website'])?$post['website']:'',
					'name'=>isset($post['name'])?$post['name']:'',
					'email'=>isset($post['email'])?$post['email']:'',
					'mobile'=>isset($post['mobile'])?$post['mobile']:'',
					'address'=>isset($post['address'])?$post['address']:'',
					'logo'=>$image,
					'updated_at'=>date('Y-m-d H:i:s'),
					);
					$update=$this->Admin_model->update_h_details(1,$u);
					if(count($update)>0){
						$this->session->set_flashdata('success',"Hospital details updated successfully");
						redirect('hospital');
					}else{
						$this->session->set_flashdata('error',"Technical problem will occured. Please try again");
						redirect('hospital');
					}
			}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}
	
	
	
	
}

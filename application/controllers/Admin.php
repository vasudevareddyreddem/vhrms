<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		}
	public function index()
	{	
		if(!$this->session->userdata('h_details'))
		{
			$this->load->view('admin/index');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	public function loginpost()
	{
		if(!$this->session->userdata('h_details'))
		{
			$post=$this->input->post();
			$login_deta=array('email'=>$post['email'],'pwd'=>md5($post['pwd']));
			$check_login=$this->Admin_model->login_details($login_deta);
			if(count($check_login)>0){
				$login_details=$this->Admin_model->get_admin_details($check_login['a_id']);
				$this->session->set_userdata('h_details',$login_details);
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('error',"Invalid Email Address or Password!");
				redirect('admin');
			}
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	public function forgotpassword()
	{
		if(!$this->session->userdata('h_details'))
		{
			$this->load->view('admin/forgot-password');
		}else{
			$this->session->set_flashdata('error',"you don't have permission to access");
			redirect('dashboard');
		}
	}
	public function forgotpost(){
			$post=$this->input->post();
			$check_email=$this->Admin_model->check_email_exits($post['email']);
			if(count($check_email)>0){
				$this->load->library('email');
				$this->email->set_newline("\r\n");
				$this->email->set_mailtype("html");
				$this->email->from($post['email']);
				$this->email->to('admin@hospil.com');
				$this->email->subject('forgot - password');
				$body = "Your login password is : ".$check_email['org_pwd'];
				$this->email->message($body);
				$this->email->send();
				$this->session->set_flashdata('success','Check Your Email to reset your password!');
				redirect('admin');

			}else{
				$this->session->set_flashdata('error','The email you entered is not a registered email. Please try again. ');
				redirect('admin');	
			}
		
	}
	
	
	
}

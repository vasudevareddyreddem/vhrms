<?php
defined('BASEPATH') OR exit('No direct script access allowed');
@include_once( APPPATH . 'controllers/Sidebar.php');

class Dashboard extends sidebar {
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
		if($this->session->userdata('w_details'))
		{
			$this->load->view('admin/dashboard');
			$this->load->view('admin/footer');
		}else{
				$this->session->set_flashdata('error','Please login to continue');
				redirect('admin');
			}
	}	
	public  function logout(){
		$admindetails=$this->session->userdata('w_details');
		$userinfo = $this->session->userdata('w_details');
        $this->session->unset_userdata($userinfo);
		$this->session->sess_destroy('w_details');
		$this->session->unset_userdata('w_details');
        redirect('admin');
	}
}

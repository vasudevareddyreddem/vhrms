<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doctor_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public  function save($d){
		$this->db->insert('doctors',$d);
        return $this->db->insert_id();	
	}
	public  function check($nam){
		$this->db->select('d_id')->from('doctors');
		$this->db->where('name',$nam);
		$this->db->where('status !=',2);
		return $this->db->get()->row_array();
	}
	public  function d_list($id){
		$this->db->select('d.d_id,d.name,d.email,d.mobile,s.name as s_name,d.c_fee,d.free_days,d.f_time,d.t_time,d.status,d.created_at')->from('doctors as d');
		$this->db->join('specialty as s','s.s_id=d.speciality','left');
		$this->db->where('d.created_by',$id);
		$this->db->where('d.status !=',2);
		return $this->db->get()->result_array();
	}
	public  function details($id){
		$this->db->select('d.d_id,d.a_id,d.name,d.email,d.mobile,d.c_fee,d.free_days,d.f_time,d.t_time,d.status,d.speciality,d.address,d.free_days,d.ip_c_fee,d.c_doctor,d.s_fee,d.no_of_visits,d.created_at,d.profile_pic')->from('doctors as d');
		$this->db->where('d_id',$id);
		return $this->db->get()->row_array();
	}
	public  function get_d_b_details($id){
		$this->db->select('d.d_id,d.a_id')->from('doctors as d');
		$this->db->where('d_id',$id);
		return $this->db->get()->row_array();
	}
	public  function update($id,$data){
		$this->db->where('d_id',$id);
		return $this->db->update('doctors',$data);
	}	
	public  function s_list(){
		$this->db->select('s_id,name')->from('specialty');
		$this->db->where('status',1);
		return $this->db->get()->result_array();
	}
	public  function d_update($id,$data){
		$this->db->where('a_id',$id);
		return $this->db->update('admin',$data);
	}
	
	
	
}
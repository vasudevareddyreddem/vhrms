<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Specialty_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public  function save($d){
		$this->db->insert('specialty',$d);
        return $this->db->insert_id();	
	}
	public  function check($nam){
		$this->db->select('s_id')->from('specialty');
		$this->db->where('name',$nam);
		$this->db->where('status !=',2);
		return $this->db->get()->row_array();
	}
	public  function s_list($id){
		$this->db->select('s_id,name,status,created_at')->from('specialty');
		$this->db->where('created_by',$id);
		$this->db->where('status !=',2);
		return $this->db->get()->result_array();
	}
	public  function details($id){
		$this->db->select('s_id,name,status,created_at')->from('specialty');
		$this->db->where('s_id',$id);
		return $this->db->get()->row_array();
	}
	public  function update($id,$data){
		$this->db->where('s_id',$id);
		return $this->db->update('specialty',$data);
	}
	
	
	
}
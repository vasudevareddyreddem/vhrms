<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Department_model extends CI_Model 

{
	function __construct() 
	{
		parent::__construct();
		$this->load->database("default");
	}
	public  function save($d){
		$this->db->insert('department',$d);
        return $this->db->insert_id();	
	}
	public  function check($nam){
		$this->db->select('d_id')->from('department');
		$this->db->where('name',$nam);
		$this->db->where('status !=',2);
		return $this->db->get()->row_array();
	}
	public  function d_list($id){
		$this->db->select('d_id,name,status,created_at')->from('department');
		$this->db->where('created_by',$id);
		$this->db->where('status !=',2);
		return $this->db->get()->result_array();
	}
	public  function details($id){
		$this->db->select('d_id,name,status,created_at')->from('department');
		$this->db->where('d_id',$id);
		return $this->db->get()->row_array();
	}
	public  function update($id,$data){
		$this->db->where('d_id',$id);
		return $this->db->update('department',$data);
	}
	
	
	
}
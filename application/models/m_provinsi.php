<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_provinsi extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function save($data)
	{
		$query = $this->db->insert('master.m_provinsi',$data);
		return $query;
	}
	
	public function getData(){
		$data = $this->db->query('Select * from master.m_provinsi');
		return $data;
	}

}
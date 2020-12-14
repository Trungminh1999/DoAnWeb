<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminPage_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function GetUser() {
		$this->db->select('*');
		return $this->db->get('user')->result_array();
 	}
 	public function GetAo() {
		$this->db->select('*');
		return $this->db->get('ao')->result_array();
 	}
 	public function GetLoaiAo() {
		$this->db->select('*');
		return $this->db->get('loaiao')->result_array();
 	}
 	public function GetSizeAo() {
		$this->db->select('*');
		return $this->db->get('loaisizeAo')->result_array();
 	}
 	public function GetMau() {
		$this->db->select('*');
		return $this->db->get('loaiMau')->result_array();
 	}
 	public function GetCTHoaDon() {
		$this->db->select('*');
		return $this->db->get('chitiethoadon')->result_array();
 	}
}

/* End of file AdminPage_model.php */
/* Location: ./application/models/AdminPage_model.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomePage_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function GetAo() {
		$this->db->select('*');
		return $this->db->get('ao')->result_array();
 	}
 	public function GetLoaiAo() {
		$this->db->select('*');
		return $this->db->get('loaiao')->result_array();
 	}
 	public function GetAoTheoLoai($idloai)
 	{
 		return $this->db->query("SELECT * FROM ao WHERE idloaiao ='$idloai'")->result_array();
 	}
 	public function GetAoTheoTen($name)
 	{
 		return $this->db->query("SELECT * FROM ao WHERE ten LIKE'%$name%'")->result_array();
 	}
}

/* End of file HomePage_model.php */
/* Location: ./application/models/HomePage_model.php */
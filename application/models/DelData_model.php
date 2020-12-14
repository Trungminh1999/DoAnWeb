<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DelData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function DeleteDataById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('ao');

	}
	public function DeleteUserById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('user');
	}
	public function DeleteLoaiAoById($id)
	{
		$this->db->where('idloaiao', $id);
		return $this->db->delete('loaiao');
	}
	public function DeleteLoaiMauById($id)
	{
		$this->db->where('idmau', $id);
		return $this->db->delete('loaiMau');
	}
	public function DeleteLoaiSizeAoById($id)
	{
		$this->db->where('idsizeao', $id);
		return $this->db->delete('loaisizeAo');
	}
}

/* End of file DelData_model.php */
/* Location: ./application/models/DelData_model.php */
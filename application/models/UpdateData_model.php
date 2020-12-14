<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UpdateData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function UpdateData($id,$ten,$mota,$gia,$hinh,$size,$mau)
	{
		$dataupdate= array(
			'id' => $id,
			'ten' => $ten,
			'mota' => $mota,
			'gia' => $gia,
			'hinh' => $hinh,
			'idloaisize' => $size,
			'idloaimau' => $mau
		);
		$this->db->where('id', $id);	
		return $this->db->update('ao', $dataupdate);
	}
	public function UpdateUser($id,$ten,$mk)
	{
		$dataupdate= array(
			'id' => $id,
			'tentaikhoan' => $ten,
			'matkhau' => $mk
		);
		$this->db->where('id', $id);	
		return $this->db->update('user', $dataupdate);
	}
	public function UpdateLoaiAo($id,$ten)
	{
		$dataupdate= array(
			'idloaiao' => $id,
			'tenloaiao' => $ten
		);
		$this->db->where('idloaiao', $id);	
		return $this->db->update('loaiao', $dataupdate);
	}
	public function UpdateLoaiMau($id,$ten)
	{
		$dataupdate= array(
			'idmau' => $id,
			'tenmau' => $ten
		);
		$this->db->where('idmau', $id);	
		return $this->db->update('loaiMau', $dataupdate);
	}
	public function UpdateLoaiSizeAo($id,$ten)
	{
		$dataupdate= array(
			'idsizeao' => $id,
			'tensizeao' => $ten
		);
		$this->db->where('idsizeao', $id);	
		return $this->db->update('loaisizeAo', $dataupdate);
	}

}

/* End of file UpdateData_model.php */
/* Location: ./application/models/UpdateData_model.php */
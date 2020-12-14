<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function Insert($name,$pw)
 	{
 		$data = array('tentaikhoan'=>$name , 'matkhau'=>$pw);
 		$this->db->insert('user', $data);
 		return $this->db->insert_id();
 	}
 	public function InsertAo($name,$mota,$gia,$hinh,$maloaiao,$maloaisize,$maloaimau)
 	{
 		$data = array('ten'=>$name,'mota'=>$mota,'gia'=>$gia,'hinh'=>$hinh,'idloaiao'=>$maloaiao,'idloaisize'=>$maloaisize,'idloaimau'=>$maloaimau);
 		$this->db->insert('ao', $data);
 		return $this->db->insert_id();
 	}
 	public function InsertLoaiAo($name)
 	{
 		$data = array('tenloaiao'=>$name);
 		$this->db->insert('loaiao', $data);
 		return $this->db->insert_id();
 	}
 	public function InsertLoaiMau($name)
 	{
 		$data = array('tenmau'=>$name);
 		$this->db->insert('loaiMau', $data);
 		return $this->db->insert_id();
 	}
 	public function InsertLoaiSizeAo($name)
 	{
 		$data = array('tensizeao'=>$name);
 		$this->db->insert('loaisizeAo', $data);
 		return $this->db->insert_id();
 	}
 	public function InsertHoaDon($tenuser)
 	{
 		$data = array('tenuser'=>$tenuser);
 		$this->db->insert('hoadon', $data);
 		return $this->db->insert_id();
 	}
 	public function Insertchitiethd($idhd,$idao)
 	{
 		$data = array('idhd'=>$idhd,'idao'=>$idao);
 		$this->db->insert('chitiethoadon', $data);
 		return $this->db->insert_id();
 	}

}

/* End of file AddData_model.php */
/* Location: ./application/models/AddData_model.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class RepairData_model extends CI_Model {
	
		public $variable;
	
		public function __construct()
		{
			parent::__construct();
			
		}
		public function RepairDataById($id)
		{
			$this->db->select('*');
			$this->db->where('id', $id);
			return $this->db->get('ao')->result_array();
		}
		public function RepairUserById($id)
		{
			$this->db->select('*');
			$this->db->where('id', $id);
			return $this->db->get('user')->result_array();
		}
		public function RepairLoaiAoById($id)
		{
			$this->db->select('*');
			$this->db->where('idloaiao', $id);
			return $this->db->get('loaiao')->result_array();
		}
		public function RepairLoaiMauById($id)
		{
			$this->db->select('*');
			$this->db->where('idmau', $id);
			return $this->db->get('loaiMau')->result_array();
		}
		public function RepairLoaiSizeAoById($id)
		{
			$this->db->select('*');
			$this->db->where('idsizeao', $id);
			return $this->db->get('loaisizeAo')->result_array();
		}
	}
	
	/* End of file RepairData_model.php */
	/* Location: ./application/models/RepairData_model.php */	
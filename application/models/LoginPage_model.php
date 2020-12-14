<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginPage_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}	
	public function GetUserByUserName($name)
	{
		$this->db->where('tentaikhoan',$name);
		return $this->db->get('user')->row_array();
	}
}

/* End of file LoginPage_model.php */
/* Location: ./application/models/LoginPage_model.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginPage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if(!$this->session->userdata('accout'))
		{
			$this->load->view('LoginPage_view');
		}
		else{
			redirect('HomePage','refresh');
		}
	}
	public function InsertUser() {
		$uname = $this->input->post('nameuser');
		$pw =$this->input->post('pwuser');
		$pw2 =$this->input->post('pwuser2');
		if ($pw != $pw2) {
			$this->load->view('LoginPage_view');
		}
		$this->load->model('AddData_model');

		if($this->AddData_model->insert($uname,md5($pw)))
		{
			$accout['tentaikhoan'] = $uname;
			$accout['matkhau'] = md5($pw);
			$accout = array('accout' => $accout);
			$this->session->set_userdata($accout);
			redirect('HomePage','refresh');
		}
		else echo "khong thanh cong";
	}
	public function LoginUser()
	{
		$user = $this->input->post('txtName');
		$pw = $this->input->post('txtPW');
		if($this->CheckLogin($user,$pw))
		{ 
			$this->load->model('LoginPage_model');
			$accout = $this->LoginPage_model->GetUserByUserName($user);
			$accout = array('accout' => $accout);
			$this->session->set_userdata($accout);
			redirect('HomePage','refresh');
		}
		else{
			redirect('HomePage','refresh');
		}
	}
	public function CheckLogin($user,$pw)
	{
		$this->load->model('LoginPage_model');
		$data = $this->LoginPage_model->GetUserByUserName($user);
		if($data){
			$pw = md5($pw);
			if($pw == $data['matkhau'])
				return true;
		}
		return false;
	}
	public function LogOut()
	{
		$this->session->sess_destroy();
		redirect('HomePage','refresh');

	}
	public function DeleteUser($id)
	{
		$this->load->model('DelData_model');
				if($this->DelData_model->DeleteUserById($id)){
					$this->load->view('ThanhCong2_view');
				}
	}
	public function RepairUser($id)
	{
			$this->load->model('RepairData_model');
			$data = $this->RepairData_model->RepairUserById($id);
			$arResult = array('arKetqua'=>$data);
			$this->load->view('RepairUserPage_view',$arResult,FALSE);
	}
	public function UpdateUser()
		{
			$this->load->model('UpdateData_model');
			$id = $this->input->post('txtid');
			$ten = $this->input->post('txtNameUser');
			$mk = $this->input->post('txtPW');
			if($this->UpdateData_model->UpdateUser($id,$ten,$mk)){
				$this->load->view('ThanhCong2_view');
			}
		}	
}

/* End of file LoginPage.php */
/* Location: ./application/controllers/LoginPage.php */
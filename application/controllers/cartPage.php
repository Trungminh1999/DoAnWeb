<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
				
class CartPage extends CI_Controller {
				
public function __construct()
	{
	parent::__construct();
	}		
	public function index()
	{
		$this->load->model('AdminPage_model');
		$this->load->model('CartPage_model');
		$arAo = $this->AdminPage_model->GetAo();
		$arLoaiAo = $this->AdminPage_model->GetLoaiAo();
		$arSizeAo = $this->AdminPage_model->GetSizeAo();
		$arMau = $this->AdminPage_model->GetMau();	
		$user = $this->session->userdata('accout')['tentaikhoan'];
		$arCT = $this->CartPage_model->GetAoTuChitietDonHang($user);
		$tong = 0;
			foreach ($arCT as $key => $value) {
				$tong += $value['gia'];
			}
 		$aritems = array( 'arAo' => $arAo , 'arLoaiAo' => $arLoaiAo,  'arSizeAo' => $arSizeAo ,  'arMau' => $arMau, 'arCT'=>$arCT,'arTong'=>$tong);
		$this->load->view('cartPage_view',$aritems,FALSE);
	}
	public function LoginUser()
	{
		$user = $this->input->post('txtName');
		$pw = $this->input->post('txtPW');
		if($this->CheckLogin($user,$pw))
		{
			$accout['tentaikhoan'] = $user;
			$accout['matkhau'] = md5($pw);
			$accout = array('accout' => $accout);
			$this->session->set_userdata($accout);
			redirect('CartPage','refresh');
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
	public function ThanhToan($idhd)
	{
		$data['status'] = 1;
		$this->load->model('CartPage_model');
		$this->CartPage_model->FinnishDH($idhd,$data);
		redirect('HomePage','refresh');
	}

}
				

/* End of file cartPage.php */
/* Location: ./application/controllers/cartPage.php */
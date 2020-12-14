<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class IDLOAI extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('HomePage_model');
		$arao = $this->HomePage_model->GetAo();
		$arLoaiao = $this->HomePage_model->GetLoaiAo();
		$artheoloaiao = $this->HomePage_model->GetAoTheoLoai();
		$aritems = array('arao' => $arao,'arLoaiao'=>$arLoaiao,'artheoloaiao'=>$artheoloaiao);
		$this->load->view('HomePageIDloai_view',$aritems, FALSE);
	}
	public function TaoDonHang($id)
	{
		$tenuser = $this->session->userdata('accout')['tentaikhoan'];
		$this->load->model('AddData_model');
		$this->load->model('CartPage_model');
		if($tenuser){
			$NowHD=$this->CartPage_model->GetHoaDonByUser($tenuser);
			if($NowHD)
			{
				$arCTDH = $this->AddData_model->Insertchitiethd($NowHD['idhd'],$id);
				redirect('HomePage','refresh');
			}
			else{
				$arDH = $this->AddData_model->InsertHoaDon($tenuser);
				$arCTDH = $this->AddData_model->Insertchitiethd($arDH,$id);	
				redirect('HomePage','refresh');
			}
		}
	}
}

/* End of file IDLOAI.php */
/* Location: ./application/controllers/IDLOAI.php */
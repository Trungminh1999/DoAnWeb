<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomePage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('HomePage_model');
		$arao = $this->HomePage_model->GetAo();
		$arLoaiao = $this->HomePage_model->GetLoaiAo();
		// $artheoloaiao = $this->HomePage_model->GetAoTheoLoai();//'artheoloaiao'=>$artheoloaiao
		$aritems = array('arao' => $arao,'arLoaiao'=>$arLoaiao);
		$this->load->view('homePage_view',$aritems, FALSE);
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
	public function IDLOAI($id){
		$this->load->model('HomePage_model');
		$arao = $this->HomePage_model->GetAo();
		$arLoaiao = $this->HomePage_model->GetLoaiAo();
		$artheoloaiao = $this->HomePage_model->GetAoTheoLoai($id);
		$aritems = array('arao' => $arao,'arLoaiao'=>$arLoaiao,'artheoloaiao'=>$artheoloaiao);
		$this->load->view('HomePageIDloai_view', $aritems, FALSE);
	}
	public function SearchTxt()
	{
		$txtSearch = $this->input->post('txtSearch');
		$this->load->model('HomePage_model');
		$arao = $this->HomePage_model->GetAo();
		$arLoaiao = $this->HomePage_model->GetLoaiAo();
		$arSearchItems = $this->HomePage_model->GetAoTheoTen($txtSearch);
		$aritems = array('arao' => $arao,'arLoaiao'=>$arLoaiao , 'arSearchItems'=>$arSearchItems);
		$this->load->view('HomePageSearch_view', $aritems, FALSE);
	}
}

/* End of file HomePage.php */
/* Location: ./application/controllers/HomePage.php */
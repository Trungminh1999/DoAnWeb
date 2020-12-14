<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminPageitems extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
		$this->load->model('AdminPage_model');
		$arAo = $this->AdminPage_model->GetAo();
		$arLoaiAo = $this->AdminPage_model->GetLoaiAo();
		$arSizeAo = $this->AdminPage_model->GetSizeAo();
		$arMau = $this->AdminPage_model->GetMau();
 		$aritems = array( 'arAo' => $arAo , 'arLoaiAo' => $arLoaiAo, 'arSizeAo' => $arSizeAo ,  'arMau' => $arMau);
		$this->load->view('AdminPageItems_view',$aritems, FALSE);
	}
	public function InsertAo() {
		$nameao = $this->input->post('txtnameAo');
		$mota = $this->input->post('txtMoTa');
		$gia = $this->input->post('txtGia');
		$hinh = $this->input->post('txtHinh');
		$loaiao = $this->input->post('loaiao');
		$loaisize = $this->input->post('loaisize');
		$loaimau = $this->input->post('loaimau');
		$this->load->model('AddData_model');
		if($this->AddData_model->InsertAo($nameao,$mota,$gia,$hinh,$loaiao,$loaisize,$loaimau)){
			$this->load->view('ThanhCong_view');
		}
		else echo "khong thanh cong";
		}	
	public function DeleteData($id)
		{
				$this->load->model('DelData_model');
				if($this->DelData_model->DeleteDataById($id)){
					$this->load->view('ThanhCong_view');
				}

		}
	public function RepairData($id)
		{
			$this->load->model('AdminPage_model');
			$this->load->model('RepairData_model');
			$data = $this->RepairData_model->RepairDataById($id);
			$arSizeAo = $this->AdminPage_model->GetSizeAo();
			$arMau = $this->AdminPage_model->GetMau();
			$arResult = array('arKetqua'=>$data,'arSizeAo'=>$arSizeAo,'arMau'=>$arMau);
			$this->load->view('RepairitemsPage_view',$arResult,FALSE);
			
				
		}
	public function UpdateData()
		{
			$this->load->model('UpdateData_model');
			$id = $this->input->post('txtid');
			$ten = $this->input->post('txtName');
			$mota = $this->input->post('txtMoTa');
			$gia = $this->input->post('txtGia');
			$hinh = $this->input->post('txtHinh');
			$size = $this->input->post('loaisize');
			$mau = $this->input->post('loaimau');
			if($this->UpdateData_model->UpdateData($id,$ten,$mota,$gia,$hinh,$size,$mau)){
				$this->load->view('ThanhCong_view');
			}
		}	
	public function InsertLoaiAo() {
		$tenloaiao = $this->input->post('txtnameLoaiAo');
		$this->load->model('AddData_model');
		if($this->AddData_model->InsertLoaiAo($tenloaiao)){
			$this->load->view('ThanhCong_view');
		}
		else echo "khong thanh cong";
		}
	public function DeleteLoaiAo($id)
		{
				$this->load->model('DelData_model');
				if($this->DelData_model->DeleteLoaiAoById($id)){
					$this->load->view('ThanhCong_view');
				}
		}
	public function RepairLoaiAo($id)
		{
			$this->load->model('RepairData_model');
			$data = $this->RepairData_model->RepairLoaiAoById($id);
			$arResult = array('arKetqua'=>$data);
			$this->load->view('RepairLoaiAo_view',$arResult,FALSE);	
		}
	public function UpdateLoaiAo()
		{
			$this->load->model('UpdateData_model');
			$id = $this->input->post('txtidloaiao');
			$ten = $this->input->post('txtNameloaiAo');
			if($this->UpdateData_model->UpdateLoaiAo($id,$ten)){
				$this->load->view('ThanhCong_view');
			}else echo "1";
		}
	public function InsertLoaiMau() {
		$tenloaimau = $this->input->post('txtnameMau');
		$this->load->model('AddData_model');
		if($this->AddData_model->InsertLoaiMau($tenloaimau)){
			$this->load->view('ThanhCong_view');
		}
		else echo "khong thanh cong";
		}
	public function DeleteLoaiMau($id)
		{
				$this->load->model('DelData_model');
				if($this->DelData_model->DeleteLoaiMauById($id)){
					$this->load->view('ThanhCong_view');
				}

		}
	public function RepairLoaiMau($id)
		{
			$this->load->model('RepairData_model');
			$data = $this->RepairData_model->RepairLoaiMauById($id);
			$arResult = array('arKetqua'=>$data);
			$this->load->view('RepairLoaiMau_view',$arResult,FALSE);	
		}
	public function UpdateLoaiMau()
		{
			$this->load->model('UpdateData_model');
			$id = $this->input->post('txtidloaimau');
			$ten = $this->input->post('txtNameloaiMau');
			if($this->UpdateData_model->UpdateLoaiMau($id,$ten)){
				$this->load->view('ThanhCong_view');
			}else echo "1";
		}
	public function InsertLoaiSizeAo() {
		$tenloaisizeao = $this->input->post('txtnameSizeAo');
		$this->load->model('AddData_model');
		if($this->AddData_model->InsertLoaiSizeAo($tenloaisizeao)){
			$this->load->view('ThanhCong_view');
		}
		else echo "khong thanh cong";
		}
	public function DeleteLoaiSizeAo($id)
		{
			$this->load->model('DelData_model');
			if($this->DelData_model->DeleteLoaiSizeAoById($id)){
				$this->load->view('ThanhCong_view');
				}

		}
	public function RepairLoaiSizeAo($id)
		{
			$this->load->model('RepairData_model');
			$data = $this->RepairData_model->RepairLoaiSizeAoById($id);
			$arResult = array('arKetqua'=>$data);
			$this->load->view('RepairLoaiSizeAo_view',$arResult,FALSE);	
		}
	public function UpdateLoaiSizeAo()
		{
			$this->load->model('UpdateData_model');
			$id = $this->input->post('txtidloaisizeao');
			$ten = $this->input->post('txtNameloaiSizeAo');
			if($this->UpdateData_model->UpdateLoaiSizeAo($id,$ten)){
				$this->load->view('ThanhCong_view');
			}else echo "1";
		}	
}

/* End of file AdminPageitems.php */
/* Location: ./application/controllers/AdminPageitems.php */
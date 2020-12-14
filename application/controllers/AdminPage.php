<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdminPage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if($this->session->userdata('accout') && $this->session->userdata('accout')['isADmin']==1){
			$this->load->model('AdminPage_model');
			$aruser = $this->AdminPage_model->GetUser();
	 		$aritems = array('aruser' => $aruser );
			$this->load->view('AdminPage_view',$aritems, FALSE);
		}else{
			redirect('loginpage','refresh');
		}
		
	}
	
}

/* End of file AdminPage.php */
/* Location: ./application/controllers/AdminPage.php */
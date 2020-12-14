<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DetailItemsPage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('dtitemsPage_view');
	}

}

/* End of file DetailItems.php */
/* Location: ./application/controllers/DetailItems.php */
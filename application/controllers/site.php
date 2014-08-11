<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("utilities");
	}

	public function index()
	{
		$data = $this->utilities->get_page_data();
		$this->load->view("template/loader", $data);
	}

}

/* End of file site.php */
/* Location: ./application/controllers/site.php */
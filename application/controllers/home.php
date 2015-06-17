<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// construct
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('layout/template');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function dashboard()
	{
		$this->load->view('dashboard');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
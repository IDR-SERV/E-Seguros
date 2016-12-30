<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function loginb(){
		$this->load->library('imports');
		$this->load->view('header');
		$this->load->view('backend/login_b');
		$this->load->view('footer');
	}

	public function log_ejecutivo(){
		$this->load->library('imports');
		$this->load->view('header');
		$this->load->view('backend/desktop_ejec');
		$this->load->view('backend/_desktop_eject');
		$this->load->view('footer');
	}
}
?>
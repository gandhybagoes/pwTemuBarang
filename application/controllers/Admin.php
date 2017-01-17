<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

		function __construct(){
			parent::__construct();		
			$this->load->model('modelmu');
			$this->load->library('session');

		}

	public function index()
	{
		$this->load->view('pages/admin');
	}

	public function kliklogin()
	{
		
	}
}

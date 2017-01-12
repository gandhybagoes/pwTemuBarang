<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('pages/login');
	}

	public function kliklogin()
	{
		$username = $this->post->username;
		$password = $this->post->password;
	}
}

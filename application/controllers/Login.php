<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

		function __construct(){
			parent::__construct();		
			$this->load->model('modelmu');
			$this->load->library('session');

		}

	public function index()
	{
		$this->load->view('pages/login');
	}

	public function kliklogin()
	{
		if(null !== $this->input->post('lgnbtn')){
			$username =  $this->input->post('username');
			$password = $this->input->post('password');

			$data = array(
				'nama_user' => $username,
				'password_user' => $password
				);
			$q = $this->modelmu->select($data, 'login');
			if(null !== $q){
				$this->session->start();
				$this->session_set_userdata('tipe_user' => $q['type_user']);
				if($q['type_user'] == 1){

				}
				else if($q['type_user'] == 0){

				}
				else {
					echo "<script>alert('Access Denied!')</script>";
				}
			}

		}	
		else if(null !== $this->input->post('lgnfb'))
		{
			echo "iki fb";
			//api login fb
		}
		else if(null !== $this->input->post('lgntwt'))
		{
			echo "iki twitter";
			//api login fb
		}
		else if(null !== $this->input->post('fgtbtn')){
			echo "iki forget pass";
			//iki ngirim email
		}
		else {
			echo "?????";
		}
	}
}

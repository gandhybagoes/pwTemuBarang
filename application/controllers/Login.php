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
		$err = $this->input->get('err');
		switch ($err) {
			case 'ups':
			$data['teror'] = "Username / Password Salah";
				break;
			case 'upk':
			$data['teror'] = "Username / Password Kosong";
				break;
			case 'ad':
			$data['teror'] = "Access Denied";
				break;
			default:
			$data['teror'] = "";
				break;
		}
			if ($this->session->userdata('tipe_user') == null)
			{
				$this->load->view('pages/login', $data);
			}
			else if ($this->session->userdata('tipe_user') == 1){
				redirect('admin?id='.$this->session->userdata('id_user'));
			}
			else {
				redirect('siswa?id='.$this->session->userdata('id_user'));
			}
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
				$this->session->set_userdata('tipe_user', $q['type_user']);
				$this->session->set_userdata('id_user', $q['id_user']);
				if($q['type_user'] == 1){
					redirect('admin?id='.$q['id_user']);
				}
				else if($q['type_user'] == 0){
					redirect('siswa?id='.$q['id_user']);
				}
				else if($q['type_user']==3){
					redirect('cs?id='.$q['id_user']);
				}
				else {
					echo "<script>alert('Access Denied!')</script>";
					redirect('login?err=ad');
				}
			}
			else {
				$this->error = "<script>alert('Username/Password Salah');</script>";
				redirect('login?err=ups');
				// echo $this->error;
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
			$this->error = "<script>alert('Username/Password Kosong');</script>";
			redirect('login?err=upk');
		}
	}

	public function routeAdmin($userid)
	{
		redirect('admin/'+$userid);
	}

	public function logout()
	{
		$this->session->unset_userdata('tipe_user');
		$this->session->unset_userdata('id_user');
		$this->session->sess_destroy();
		redirect('login');
	}
}

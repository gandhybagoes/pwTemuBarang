<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->library('session');
			$this->load->helper('array');
			$this->load->model('modelmu');
		}

	public function index()
	{
		if($this->session->userdata('id_user') != null || $this->session->userdata('tipe_user') == 1){
				$id = $this->input->get('id');
				$this->load->model('modelmu');
				$data = array('id_user' => $id,);
				$q = $this->modelmu->select($data, 'login');
				if($q == null || $q['type_user'] != 1){
					redirect('login');
				}
				else{
					$q = $this->modelmu->select($data, 'profile');
					$this->session->set_userdata('profile', array($q));
					// $data['profile'] = array($q);
					// print_r($data['profile']);
					$data['content'] = $this->load->view('pages/content/admin', '' , TRUE);
					$this->load->view('pages/base', $data);
				}
		}
		else {
				redirect('login?err=ad');
		}
		
	}

	public function listBarang()
	{
		$dota['listbrg'] = $this->modelmu->selectStatus();
		$data['content'] = $this->load->view('pages/content/list_barang', $dota , TRUE);
		$this->load->view("pages/base", $data);
	}

	function coba(){
		$this->load->view('pages/content/list_barang');
	}
}

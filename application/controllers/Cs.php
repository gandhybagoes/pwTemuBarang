<?php 
/**
* 
*/
class Cs extends CI_Controller
{
		function __construct(){
		parent::__construct();
			$this->load->library('session');
			$this->load->helper('array');
			$this->load->model('modelmu');
		}
	
	function index()
	{
				if($this->session->userdata('id_user') != null || $this->session->userdata('tipe_user') == 2){
				$id = $this->input->get('id');
				$this->load->model('modelmu');
				$data = array('id_user' => $id,);
				$q = $this->modelmu->select($data, 'login');
				if($q == null || $q['type_user'] != 2){
					redirect('login');
				}
				else{
					$q = $this->modelmu->select($data, 'profile');
					$this->session->set_userdata('profile', array($q));
					// $data['profile'] = array($q);
					// print_r($data['profile']);
					$data['content'] = $this->load->view('pages/content/cs/tambah_barang', '' , TRUE);
					$this->load->view('pages/baseCS', $data);
				}
		}
		else {
				redirect('login?err=ad');
		}
	}

	function editprof()
	{
		if($this->session->userdata('tipe_user') == 2){
		$data['content'] = $this->load->view('pages/content/cs/edit_profile', '' , TRUE);
		$this->load->view('pages/baseCS', $data);
		}
		else {
			redirect('login');
		}
	}
}
 ?>
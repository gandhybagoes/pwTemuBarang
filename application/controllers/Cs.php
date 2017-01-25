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

		$url = $this->do_upload();
		//$foto = $this->input->post('pic');
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$nomortlp = $this->input->post('nomortlp');
		//$foto = $this->input->post('gantifoto');
		$id_user = $this->input->post('iduser');
		$password = $this->input->post('password');
		$typeuser = $this->input->post('typeuser');
		$kosong = "";

		$profile = $this->session->userdata('profile');
		if($url == null){
			$url = $profile['0']['foto_user'];
		}
		/*else{
			$foto = $url;
		}*/

		$data = array(
			'nama_user' => $nama,
			'username_user' => $username,
			'notelp_user' => $nomortlp,
			'foto_user' => $url,
			'kelas_user' => $kosong,
			'noabsen_user' => $kosong,
			'id_user' => $id_user
			);
		$where = array('id_profile' => $id);

		$datalog = array(
			'nama_user' => $username,
			'password_user' => $password,
			'type_user' => $typeuser,
			);
		$dimana = array('id_user' => $id_user);

		$this->modelmu->updatedata($where,$data,'profile');
		$this->modelmu->updatedatalog($dimana,$datalog,'login');
		redirect('cs');
	}

	function do_upload(){
    	 $type = explode('.', $_FILES["pic"]["name"]);
    	$type = $type[count($type)-1];
    	$url = uniqid(rand()).'.'.$type;
    	if(in_array($type, array("jpg","jpeg","gif","png")))
    		if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
    			if(move_uploaded_file($_FILES["pic"]["tmp_name"],"./assets/img/pp/".$url))
    				return $url;
    	return "";
    }

	function tampiledit(){
		if($this->session->userdata('tipe_user') == 2){
		$where = array ('profile.id_user' => $this->session->userdata('id_user'),
						);
		$dataprof['dtprof'] = $this->modelmu->ambilpass($where);
		$data['content'] = $this->load->view('pages/content/cs/edit_profile', $dataprof , TRUE);
		$this->load->view('pages/baseCS', $data);
		}
		else {
			redirect('login');
		}

		/*$dataprof['dtprof'] = $this->modelmu->ambilpass();
		$data['content'] = $this->load->view('pages/content/cs/edit_profile', $dataprof , TRUE);
						$this->load->view("pages/baseCS", $data);*/
	}
}
 ?>
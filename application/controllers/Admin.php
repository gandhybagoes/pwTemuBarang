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
		 		if($this->session->userdata('id_user') != null && $this->session->userdata('tipe_user') == 1){
						$dota['listbrg'] = $this->modelmu->selectStatus();
						$data['content'] = $this->load->view('pages/content/admin/list_barang', $dota , TRUE);
						$this->load->view("pages/base", $data);
						if($this->input->get('act')=="delbrg"){
							$id_brg = $this->input->get('id_brg');
							$this->modelmu->delete($id_brg);
						}
						else if($this->input->get('act')=="take"){
							$id_brg = $this->input->get('id_brg');
							$dota['kmbl'] = $this->modelmu->kembaliBarang($id_brg);
							$data['content'] = $this->load->view('pages/content/admin/kembali_barang', $dota , TRUE);
							$this->load->view("pages/base", $data);
						}
		 		}
		 		else {
		 		redirect('login?err=ad');
		 }
	}

	public function listUser()
	{
		 		if($this->session->userdata('id_user') != null && $this->session->userdata('tipe_user') == 1){
<<<<<<< HEAD
						$dota['listusr'] = $this->modelmu->selectAllUser();
						//var_dump($dota);
						$data['content'] = $this->load->view('pages/content/admin/list_user', $dota , TRUE);
=======
						$dota['listusr'] = $this->modelmu->selectStatus();
						$data['content'] = $this->load->view('pages/content/admin/list_barang', $dota , TRUE);
>>>>>>> 0806aec992a8934fc2bcfba559f84acc3e397a99
						$this->load->view("pages/base", $data);
						if($this->input->get('act')=="deluser"){
							$id_user = $this->input->get('id_user');
							$this->modelmu->delete($id_user);
						}
		 		}
		 		else {
		 		redirect('login?err=ad');
		 }
	}

	public function tambah_barang()
	{
		if($this->session->userdata('id_user') != null && $this->session->userdata('tipe_user') == 1){
			$dota['judul'] = "Tambah Barang";
			$data['content'] = $this->load->view('pages/content/admin/tambah_barang', $dota , TRUE);
						$this->load->view("pages/base", $data);
			if($this->input->get('act')=="kliktambah"){
				
				/*id_barang*/
				$jenis = $this->input->post('jenis_barang');
				$last_id = $this->modelmu->hitungid($jenis);
				$idbrg = $jenis.($last_id+1);
				/*id_barang end*/

				/*nama_barang*/
				$nama = $this->input->post('nama_barang');
				/*nama_barang end*/

				/*ket_barang*/
				$keterangan = $this->input->post('ket_barang');
				/*ket_barang end*/

				/*jenis_barang*/
				$txtjenis = "";
				if($this->input->post('jenis_barang') == 'crg'){
					$txtjenis = "Charger";
				}
				elseif ($this->input->post('jenis_barang') == 'lpt') {
					$txtjenis = "Laptop";
				}
				elseif ($this->input->post('jenis_barang') == 'hp') {
					$txtjenis = "HP";
				}
				elseif ($this->input->post('jenis_barang') == 'kci') {
					$txtjenis = "Kunci";
				}
				elseif ($this->input->post('jenis_barang') == 'spd') {
					$txtjenis = "Sepeda";
				}
				elseif ($this->input->post('jenis_barang') == 'fd') {
					$txtjenis = "Flash Disk";
				}
				elseif ($this->input->post('jenis_barang') == 'hdd') {
					$txtjenis = "Hard Disk";
				}
				elseif ($this->input->post('jenis_barang') == 'dmpt') {
					$txtjenis = "Dompet";
				}
				elseif ($this->input->post('jenis_barang') == 'prhsn') {
					$txtjenis = "Perhiasan";
				}
				elseif ($this->input->post('jenis_barang') == 'dll') {
					$txtjenis = "Lain-lain";
				}
				else{
					$txtjenis = "Kosong";
				}
				/*jenis_barang end*/

				/*lokasi_barang*/
				$lokasi = $this->input->post('lokasi_barang');
				/*lokasi_barang end*/

				/*foto_barang*/
				$foto = $this->do_upload_barang();
				/*foto_barang end*/

				/*id_status*/
				$id_status = "st1";
				/*confirmA*/
				$conA = 0;
				/*confirmB*/
				$conB = 0;
				$data = array(
				'id_barang' => $idbrg,
				'nama_barang' => $nama,
				'ket_barang' => $keterangan,
				'jenis_barang' => $txtjenis,
				'lokasi_barang' => $lokasi,
				'foto_barang' => $foto,
				'id_status' => $id_status,
				'confirmA' => $conA,
				'confirmB' => $conB
				);

				if($foto == null){
					echo "
					<script>
		 			alert('Ambil Gambar Barang');
					</script>";
				}
				else{
				$this->modelmu->inputbarang($data, 'barang');
				redirect('admin/listBarang');
				echo "
					<script>
		 			alert('Data Berhasil Ditambahkan');
					</script>";
				}	

			}
		}
		else {
			redirect('login?err=ad');
		}

	}

	public function tambah_user()
	{
		if($this->session->userdata('id_user') != null && $this->session->userdata('tipe_user') == 1){
			$dota['judul'] = "Tambah User";
			$data['content'] = $this->load->view('pages/content/admin/tambah_user', $dota , TRUE);
						$this->load->view("pages/base", $data);
			if($this->input->get('act')=="kliktambah"){	
				
					$nama = $this->input->post('nama_user');
					$username = $this->input->post('user_name');
					$password = $this->input->post('password');
					$conpass = $this->input->post('con_password');
					$tlp = $this->input->post('telepon');
					$tipe = $this->input->post('tipe_user');
					$kelas = $this->input->post('kelas');
					$absen = $this->input->post('no_absen');
					$foto = $this->upload_pp();
					$a = $this->modelmu->hitungidlogin();
					$id_user = ($a+1);
					$b = $this->modelmu->hitungidprofile();
					$id_profile = ($b+1);

					if($tipe == '1'){
						$kelas = "";
						$absen = "";
					}elseif($tipe == '2'){
						$kelas = "";
						$absen = "";
					}else{
						$kelas;
						$absen;
					}

					if($foto == null){
						$foto = "avatar.png";
					}

					if($tipe == null){
						echo "<script>
						alert('Tipe User Belum Dipilih')
						</script>";
					}else{

					if($password != $conpass){
						echo "<script>
						alert('Password tidak sama')
						</script>";
					}else{

					$data = array(
						'id_profile' => $id_profile,
						'nama_user' => $nama,
						'username_user' => $username,
						'notelp_user' => $tlp,
						'foto_user' => $foto,
						'kelas_user' => $kelas,
						'noabsen_user' => $absen,
						'id_user' => $id_user);

					$datalog = array(
						'id_user' => $id_user,
						'nama_user' => $username,
						'password_user' => $password,
						'type_user' => $tipe
						);

					$this->modelmu->inputuser($data, 'profile');
					$this->modelmu->inputuser($datalog, 'login');
					redirect(base_url('admin/listuser'));
				}
			}
			}
		}
		else {
			redirect('login?err=ad');
		}

	}

	function upload_pp(){
    	 $type = explode('.', $_FILES["pic"]["name"]);
    	$type = $type[count($type)-1];
    	$url = uniqid(rand()).'.'.$type;
    	if(in_array($type, array("jpg","jpeg","gif","png")))
    		if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
    			if(move_uploaded_file($_FILES["pic"]["tmp_name"],"./assets/img/pp/".$url))
    				return $url;
    	return "";
    }


	public function edit_barang()
	{
		if($this->session->userdata('id_user') != null && $this->session->userdata('tipe_user') == 1){
			$id_brg = $this->input->get('id_brg');
			$where = array('id_barang' => $id_brg,);
			$q = $this->modelmu->select($where, 'barang');
			$dota['isine'] = array($q);
			$dota['judul'] = "Edit Barang";
			$data['content'] = $this->load->view('pages/content/admin/tambah_barang', $dota , TRUE);
						$this->load->view("pages/base", $data);
			if($this->input->get('act')=="klikedit"){
				$id_barang = $this->input->post('id_barang');
				$where = array('id_barang' => $id_barang,);
				$q = $this->modelmu->select($where, 'barang');
				$dota['isine'] = array($q);
			
				$nama_barang = $this->input->post('nama_barang');
				$ket_barang = $this->input->post('ket_barang');
				//$jenis_barang = $this->innput->post('jenis_barang');
				$txtjenis = $this->input->post('ket_barang');
				if($this->input->post('jenis_barang') == 'crg'){
					$txtjenis = "Charger";
				}
				elseif ($this->input->post('jenis_barang') == 'lpt') {
					$txtjenis = "Laptop";
				}
				elseif ($this->input->post('jenis_barang') == 'hp') {
					$txtjenis = "HP";
				}
				elseif ($this->input->post('jenis_barang') == 'kci') {
					$txtjenis = "Kunci";
				}
				elseif ($this->input->post('jenis_barang') == 'spd') {
					$txtjenis = "Sepeda";
				}
				elseif ($this->input->post('jenis_barang') == 'fd') {
					$txtjenis = "Flash Disk";
				}
				elseif ($this->input->post('jenis_barang') == 'hdd') {
					$txtjenis = "Hard Disk";
				}
				elseif ($this->input->post('jenis_barang') == 'dmpt') {
					$txtjenis = "Dompet";
				}
				elseif ($this->input->post('jenis_barang') == 'prhsn') {
					$txtjenis = "Perhiasan";
				}
				elseif ($this->input->post('jenis_barang') == 'dll') {
					$txtjenis = "Lain-lain";
				}
				else{
					$txtjenis = "Kosong";
				}
				$lokasi_barang = $this->input->post('lokasi_barang');
				$foto = $this->do_upload_barang();
				if($foto == null){
					$foto = $dota['isine']['0']['foto_barang'];
				}
				else{
					$foto;
				}
				$status = $dota['isine']['0']['id_status'];
				$conA = $dota['isine']['0']['confirmA'];
				$conB = $dota['isine']['0']['confirmB'];

				// var_dump($dota['isine']);
				$data = array(
					'nama_barang' => $nama_barang,
					'ket_barang' => $ket_barang,
					'jenis_barang' => $txtjenis,
					'lokasi_barang' => $lokasi_barang,
					'foto_barang' => $foto,
					'id_status' => $status,
					'confirmA' => $conA,
					'confirmB' => $conB
					);
				//var_dump($data);
				$where = array('id_barang' => $id_barang);

				$this->modelmu->updatedatabrg($where,$data,'barang');
				redirect('admin/listBarang');
			}
		}
		else {
			redirect('login?err=ad');
		}
	}

	public function edit_user()
	{
		if($this->session->userdata('id_user') != null && $this->session->userdata('tipe_user') == 1){
			$id_usr = $this->input->get('id_usr');
			$where = array('id_profile' => $id_usr,);
			$q = $this->modelmu->select($where, 'barang');
			$dota['isine'] = array($q);
			$dota['judul'] = "Edit Barang";
			$data['content'] = $this->load->view('pages/content/admin/tambah_barang', $dota , TRUE);
						$this->load->view("pages/base", $data);
			if($this->input->get('act')=="klikedit"){
				$id_barang = $this->input->post('id_barang');
				$where = array('id_barang' => $id_barang,);
				$q = $this->modelmu->select($where, 'barang');
				$dota['isine'] = array($q);
			
				$nama_barang = $this->input->post('nama_barang');
				$ket_barang = $this->input->post('ket_barang');
				//$jenis_barang = $this->innput->post('jenis_barang');
				$txtjenis = $this->input->post('ket_barang');
				if($this->input->post('jenis_barang') == 'crg'){
					$txtjenis = "Charger";
				}
				elseif ($this->input->post('jenis_barang') == 'lpt') {
					$txtjenis = "Laptop";
				}
				elseif ($this->input->post('jenis_barang') == 'hp') {
					$txtjenis = "HP";
				}
				elseif ($this->input->post('jenis_barang') == 'kci') {
					$txtjenis = "Kunci";
				}
				elseif ($this->input->post('jenis_barang') == 'spd') {
					$txtjenis = "Sepeda";
				}
				elseif ($this->input->post('jenis_barang') == 'fd') {
					$txtjenis = "Flash Disk";
				}
				elseif ($this->input->post('jenis_barang') == 'hdd') {
					$txtjenis = "Hard Disk";
				}
				elseif ($this->input->post('jenis_barang') == 'dmpt') {
					$txtjenis = "Dompet";
				}
				elseif ($this->input->post('jenis_barang') == 'prhsn') {
					$txtjenis = "Perhiasan";
				}
				elseif ($this->input->post('jenis_barang') == 'dll') {
					$txtjenis = "Lain-lain";
				}
				else{
					$txtjenis = "Kosong";
				}
				$lokasi_barang = $this->input->post('lokasi_barang');
				$foto = $this->do_upload_barang();
				if($foto == null){
					$foto = $dota['isine']['0']['foto_barang'];
				}
				else{
					$foto;
				}
				$status = $dota['isine']['0']['id_status'];
				$conA = $dota['isine']['0']['confirmA'];
				$conB = $dota['isine']['0']['confirmB'];

				// var_dump($dota['isine']);
				$data = array(
					'nama_barang' => $nama_barang,
					'ket_barang' => $ket_barang,
					'jenis_barang' => $txtjenis,
					'lokasi_barang' => $lokasi_barang,
					'foto_barang' => $foto,
					'id_status' => $status,
					'confirmA' => $conA,
					'confirmB' => $conB
					);
				//var_dump($data);
				$where = array('id_barang' => $id_barang);

				$this->modelmu->updatedatabrg($where,$data,'barang');
				redirect('admin/listBarang');
			}
		}
		else {
			redirect('login?err=ad');
		}
	}


	function do_upload_barang(){
    	 $type = explode('.', $_FILES["pic"]["name"]);
    	$type = $type[count($type)-1];
    	$url = uniqid(rand()).'.'.$type;
    	if(in_array($type, array("jpg","jpeg","gif","png")))
    		if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
    			if(move_uploaded_file($_FILES["pic"]["tmp_name"],"./assets/img/brg/".$url))
    				return $url;
    	return "";
    }


	public function confirmTake($id){
		$check = $this->modelmu->select(array('id_barang' => $id), 'barang');
		$profile = $this->session->userdata('profile');
		$nama_usr = $profile['0']['username_user'];
		if(strpos($nama_usr, 'Suko') !== false){
			//jika nama mengandung suko
			if($check['confirmB'] == '1' && $check['confirmA'] == '0'){
			$data = array('confirmA' => '1', 
						  'id_status' => 'st3');
			$this->modelmu->updatedata('barang', $data, array('id_barang' => $id));
			echo "Konfirmasi Sukses!,Suko";
			}
			else if($check['confirmB'] == '0' && $check['confirmA'] == '0'){
			echo "Konfirmasi Pak Emil terlebih dulu";
			}
		}
		else if(strpos($nama_usr, 'Emil') !== false){
			//jika nama mengandung emil
			if($check['confirmA'] == '1' && $check['confirmB'] == '0'){
			echo "Kesalahan Data, Konfirmasi Gagal";
			}
			else if($check['confirmA'] == '0' && $check['confirmB'] == '0'){
			$data = array('confirmB' => '1', 
						  'id_status' => 'st2');
			$this->modelmu->updatedata('barang', $data, array('id_barang' => $id));
			echo "Konfirmasi Sukses!,Emil";
			}
			} //confirmTake untuk konfirmasi ambil barang
		}



}

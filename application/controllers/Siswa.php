<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	function index()
	{
		$dota['user'] = $this->modelmu->selectAll('barang');
		$data['content'] = $this->load->view('pages/content/siswa', $dota, TRUE);
		$this->load->view('pages/baseSiswa', $data);
	}

	function profile()
	{
		//code for profil siswa
		$data['content'] = $this->load->view('pages/content/siswa/profile', '', TRUE);
		$this->load->view('pages/baseSiswa', $data);
	}

}
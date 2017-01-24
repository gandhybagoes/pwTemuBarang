<?php 
/**
* 
*/
class Cs extends CI_Controller
{
	
	function index()
	{
		$this->load->view('pages/content/cs/atas');
		$this->load->view('pages/content/cs/tambah_barang');
		$this->load->view('pages/content/cs/bawah');
	}
}
 ?>
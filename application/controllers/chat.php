<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

		function __construct(){
			parent::__construct();
			$this->load->library('session');
			$this->load->helper('array');
			$this->load->model('modelmu');
		}


	public function index()
	{
		$data['content'] = $this->load->view('chat/chat3', '', TRUE);
		$this->load->view('pages/base', $data);
	}

	public function send()
	{
		var_dump($this->input->post());
		// $msg = $this->input->post();
		// $timestamp = ;
		// $content
		// $this->modelmu->insert_entry('');
	}

}

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
		$profile = $this->session->userdata('profile');
		$where = array('chatlist.id_user' => $profile['0']['id_user']);
		$dota['chatlist'] = $this->modelmu->showChatList($where);
		$dota['chatroom'] = $this->load->view('chat/template/default', '', TRUE);
		$data['content'] = $this->load->view('chat/chat3', $dota, TRUE);
		$this->load->view('pages/base', $data);
	}

	public function send()
	{
		$profile = $this->session->userdata('profile');
		$time = $this->input->get('time');
		$msg = $this->input->get('msg');
		$user = $this->input->get('user');
		$id_user = $profile['0']['nama_user'];
		// $json = $this->input->post();
		// $a = "a";
		// echo '<script>console.log("'.$json.'")</script>';
		// $msg = $this->input->post();
		// $timestamp = ;
		// $content
		// $this->modelmu->insert_entry('');
	}

	public function loadChatroom(){
		$a = $this->load->view('chat/template/clicked', '', TRUE);
		echo $a;
		return true;

			} //loadChatroom untuk load chatroom

}

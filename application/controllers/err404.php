<?php 
class err404 extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 
    } 

    public function index() 
    { 
        $this->output->set_status_header('404'); 
        $data['content'] = 'error_404'; // View name 
        $this->load->view('err404',$data);//loading in my template 
        header('Refresh: 5; URL='.base_url('login'));
    } 
    } 
    ?>
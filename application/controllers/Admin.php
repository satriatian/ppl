<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('AdminModels');
    }

	public function index()
	{
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		if($this->session->logged_in==1)
		{
			$this->load->view('admin/dashboard',$data);
		}
		else
		{
			$this->load->view('admin/login',$data);
		}
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$admin = $this->AdminModels->login($username,$password);
		if($admin)
		{
			$this->session->logged_in=1;
			$this->session->set_userdata($admin);
		}
		else {
			redirect('index');
		}
	}
}

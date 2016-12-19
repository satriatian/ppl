<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('AdminModels');
        $this->load->database();
    }

	public function index()
	{
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		echo $this->session->logged_in;
		if($this->session->logged_in==1)
		{
			redirect('admin/dashboard');
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
		#echo $username;
		$admin = $this->AdminModels->login($username,$password);
		print_r($admin);
		if($admin)
		{
			echo 'admin';
			$this->session->logged_in=1;
			$this->session->admin = $admin[0]->id;
		}
		redirect('admin');
	}

	public function dashboard()
	{
		#$this->session->sess_destroy();
		if($this->session->logged_in==0){
			redirect('admin/');
		}
		#print_r($this->session->userdata());
		$data['pembayaran'] = $this->AdminModels->getData();
		#print_r($data['pembayaran']);
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('admin/dashboard',$data);
	}

	public function struk($id){
		
		$admin = $this->session->admin;
		#print_r($this->session->admin);
		$update = $this->AdminModels->updateData($id,$admin);
		$data['pembayaran'] = $this->AdminModels->strukData($id);
		$tipe = $data['pembayaran'][0]->transaksi_pilihan;
		$id_transaksi = $data['pembayaran'][0]->id_transaksi;
		#echo $tipe;
		if($tipe == 1)
		{
			$tipe = 'transaksi_pulsa';
		}
		else
		{
			$tipe = 'transaksi_listrik';
		}
		
		$data['transaksi'] = $this->AdminModels->transaksiData($id_transaksi, $tipe);

		#print_r($data['transaksi']);

		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);

		if ( $tipe=='transaksi_pulsa' )
		{
			$this->load->view('admin/strukpulsa',$data);
		}
		else if ( $tipe=='transaksi_listrik') {
			$this->load->view('admin/struklistrik',$data);
		}

	}
}

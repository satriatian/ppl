<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Token extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('TransaksiModels');
        $this->load->model('TokenModels');
    }

	public function index(){
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('token/token',$data);
	}

	public function nominal()
	{
		$nomor = $this->input->post('nomor');
		#echo $nomor."<br>";
		#echo $operator."<br>";
		$token = array(
	        'nomor' 	=> $nomor,
		);

		$this->session->set_userdata($token);
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('token/nominal',$data);

		#$data = $this->session->userdata();
		#print_r($data);
	}

	private function nomorKode()
	{
		$kode_unik = "";
		for ($i=0; $i < 20; $i++) { 
			$min = ($i == 0) ? 1:0;
    		$kode_unik .= mt_rand($min,9);
		}
		return $kode_unik;
	}

	public function konfirmasi($nominal){
		$nominal =$nominal*1000;
		$jumlah_bayar = $nominal+1000;
		$nomor = $this->session->userdata('nomor');
		$kode = $this->nomorKode();

		$token = array(
	        'nomor' 	=> $nomor,
	        'nominal' 	=> $nominal,
	        'jumlah_bayar' 	=> $jumlah_bayar,
	        'kode_unik' 	=> $kode
		);

		$this->session->set_userdata($token);

		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('token/konfirmasi',$data);

	}

	public function pembayaran(){
		print_r($this->session->userdata());
		$transaksi = $this->TransaksiModels->insertTransaksi(2);
		$token = $this->TokenModels->insert($transaksi,$this->session->userdata());
		#echo $transaksi;

		redirect('pembayaran?type=token&id='.$transaksi);
	}

}

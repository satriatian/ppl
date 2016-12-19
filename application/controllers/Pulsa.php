<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pulsa extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('session');
    }

	public function index(){
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('pulsa/pulsa',$data);
	}

	private function cekOperator($nomor){

		$telkomsel = array("0811", "0812", "0813", "0821", "0822", "0823", "0852", "0853", "0851");
		$indosat = array("0855", "0856", "0857", "0858", "0814", "0815", "0816");
		$xl = array("0817", "0818", "0819", "0859", "0877", "0878");
		$three = array("0896", "0897", "0898", "0899");
		$smart = array("0881", "0882", "0883", "0884", "0885", "0886", "0887");
		$fren = array("0888", "0889");


		$check = substr($nomor, 0, 4); 
		#echo $check."<br>";
		if (in_array($check, $telkomsel))
		{
			return 'telkomsel';
		}
		else if (in_array($check, $indosat))
		{
			return 'indosat';
		}
		else if (in_array($check, $xl))
		{
			return 'xl';
		}
		else if (in_array($check, $three))
		{
			return 'three';
		}
		else if (in_array($check, $smart))
		{
			return 'smart';
		}
		else if (in_array($check, $fren))
		{
			return 'fren';
		}
		else
		{
			return 0;
		}
	}

	public function nominal()
	{
		$nomor = $this->input->post('nomor');
		$operator = $this->cekOperator($nomor);
		#echo $nomor."<br>";
		#echo $operator."<br>";
		$pulsa = array(
	        'nomor' 	=> $nomor,
	        'operator' 	=> $operator
		);


		if(!$operator)
		{
			$this->session->set_flashdata('message', 'Nomor Tidak Dikenali Mohon Masukkan Nomor Kembali');
			redirect('pulsa');
		}

		$this->session->set_userdata($pulsa);
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('pulsa/nominal',$data);

		#$data = $this->session->userdata();
		#print_r($data);
	}

	public function konfirmasi($nominal){
		$nominal =$nominal*1000;
		$jumlah_bayar = $nominal+1000;
		$nomor = $this->session->userdata('nomor');
		$operator = $this->session->userdata('operator');

		$pulsa = array(
	        'nomor' 	=> $nomor,
	        'operator' 	=> $operator,
	        'nominal' 	=> $nominal,
	        'jumlah_bayar' 	=> $jumlah_bayar
		);

		$this->session->set_userdata($pulsa);

		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);
		$this->load->view('pulsa/konfirmasi',$data);

	}

}

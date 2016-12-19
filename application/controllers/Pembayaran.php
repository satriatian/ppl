<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('PembayaranModels');
    }

	public function index(){

		$type=$this->input->get('type');
		$id =$this->input->get('id');
		$id=$this->PembayaranModels->insert($id,$this->session->userdata());

		$data['id'] = $id;
		$data['header']=$this->load->view('parts/header','',true);
		$data['navbar']=$this->load->view('parts/navbar','',true);
		$data['footer']=$this->load->view('parts/footer','',true);

		#PULSA
		if ( $type=='pulsa' )
		{
			$this->load->view('pembayaran/billpulsa',$data);
		}
	}
}

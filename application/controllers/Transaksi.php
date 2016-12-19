<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function showMenuTransaksi($transaksi)
	{
		if($transaksi=='pulsa'){
			redirect ('pulsa');
		}
		else if($transaksi=='token'){
			redirect ('token');
		}
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class PembayaranModels extends CI_Model
  {
   	function __construct(){
      	parent::__construct();
    }
    public function insert($transaksi,$data){
    	$query = "
			INSERT INTO pembayaran (id_transaksi,jumlah_pembayaran)
			values (".$transaksi.",".$data['jumlah_bayar'].");
		";
		#echo $query;
		$change = $this->db->query ($query);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}
	
  }
 ?>
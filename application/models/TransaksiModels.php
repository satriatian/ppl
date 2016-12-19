<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class TransaksiModels extends CI_Model
  {
   	function __construct(){
      	parent::__construct();
    }
    public function insertTransaksi($transaksi){
    	$query = "
			INSERT INTO transaksi (transaksi_pilihan,flag_done,tanggal_transaksi)
			values (".$transaksi.",0,CURRENT_TIMESTAMP);
		";
		#echo $query;
		$change = $this->db->query ($query);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}
	
  }
 ?>
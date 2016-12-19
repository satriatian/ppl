<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class PulsaModels extends CI_Model
  {
   	function __construct(){
      	parent::__construct();
    }
    public function insert($transaksi,$data){
    	$query = "
			INSERT INTO transaksi_pulsa (id_transaksi,nominal,operator,nomor_tujuan)
			values (".$transaksi.",".$data['nominal'].",'".$data['operator']."','".$data['nomor']."');
		";
		#echo $query;
		$change = $this->db->query ($query);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}
	
  }
 ?>
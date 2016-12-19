<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class TokenModels extends CI_Model
  {
   	function __construct(){
      	parent::__construct();
    }
    public function insert($transaksi,$data){
    	$query = "
			INSERT INTO transaksi_listrik (id_transaksi,nominal,kode_unik)
			values (".$transaksi.",".$data['nominal'].",'".$data['kode_unik']."');
		";
		#echo $query;
		$change = $this->db->query ($query);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}
	
  }
 ?>
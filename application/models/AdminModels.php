<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  Class AdminModels extends CI_Model
  {
   	function __construct(){
      	parent::__construct();
    }
    public function login($username,$password){
    	$password = hash('sha256', $password);
    	$query = "
			SELECT id from admin where username='".$username."' and password = '".$password."';
		";
		#echo $query;
		$change = $this->db->query ($query);
    return $change->result();
	  }

    public function getData(){
      $query = "
      SELECT * FROM pembayaran WHERE id_admin IS NULL;
    ";
    #echo $query;
    $change = $this->db->query ($query);
      return $change->result();
    }

    public function updateData($id,$admin){
      $query = "
      UPDATE pembayaran p, transaksi t SET
      p.`tanggal_pembayaran` = CURRENT_TIMESTAMP,
      t.`flag_done` = 1,
      t.`tanggal_done` = CURRENT_TIMESTAMP,
      p.`id_admin` = ".$admin."
      WHERE p.`id` = ".$id." AND t.`id` = p.`id_transaksi`
    ";
    #echo $query;
    $change = $this->db->query ($query);
      return 1;
    }

    public function strukData($id)
    {
      $query ="
        SELECT * from pembayaran p, admin a, transaksi t
        where p.id_transaksi = t.id and p.id_admin = a.id
        and p.id = ".$id."
      ";
    #echo $query;
    $change = $this->db->query ($query);
      return $change->result();
    }
	
    public function transaksiData($id, $tipe)
    {
      $query ="
        SELECT * from ".$tipe." where 
        id_transaksi = ".$id."
      ";
    #echo $query;
    $change = $this->db->query ($query);
      return $change->result();
    }
  }
 ?>
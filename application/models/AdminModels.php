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
			SELECT * from admin where username='".$username."' and password = '".$password."';
		";
		#echo $query;
		$change = $this->db->query ($query);
		return $change->result();
	}
	
  }
 ?>
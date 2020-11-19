<?php
defined ('BASEPATH') OR exit ('no directscript access allowed');

class login extends CI_Model {
	
	public function index(){
	$this->load->view('login');
	}
	public function ambillogin($email,$password){
        $this->db->where('email',$email);
        $this->db->where('password',$password);
	}
}
?>
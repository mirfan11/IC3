<?php

class login extends CI_Controller {
	
	public function index(){
	$this->load->view('login');
	}
	public function ceklogin(){
		$email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->load->model('model_login');
        $this->model_login->ambillogin($email,$password);
	}
}
?>
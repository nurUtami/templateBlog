<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if(!$this->session->userdata('username')){
			redirect("login");
		}
	}
 
	function index(){
		$d['title'] = 'login';
		$d['judul'] = 'login Admin';
		$d['username'] = $this->session->userdata('username');
		$this->load->view('login/v_admin', $d);
	}
}
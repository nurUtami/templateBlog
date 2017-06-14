<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function index()
	{
		$d['title']='Signup';
		$d['judul']='Form Sign up';
		$this->load->view('home/h_Admin');
		$this->load->view('member/formSignUp');
	}

	public function create()
	{
		$this->form_validation->set_rules('username','Username','required|max_length[15]|is_unique[admin.username]');
		$this->form_validation->set_rules('password','Password','required|max_length[15]');
		$this->form_validation->set_rules('password2','Password Confirm','required|matches[password]');
		$this->form_validation->set_rules('namaLngkap','Nama Lengkap','required|max_length[30]|is_unique[admin.namaLngkap]');
		$this->form_validation->set_rules('email','Email','required|max_length[20]|is_unique[admin.email]');
		if ($this->form_validation->run() === FALSE) {			
			$this->load->view('member/formSignUp');
		}else{
			$this->M_signup->registration();
			
			redirect('login/masuk');
		}
	}
}

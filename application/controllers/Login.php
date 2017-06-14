<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	//index login
	public function index(){
		$d['title']='Login';
		$d['judul']='Masukkan Username dan Password';
		$this->load->view('home/header');
		$this->load->view('login/v_login', $d);
		}

	function masuk(){
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() === FALSE) {
			$this->load->view('login/v_login');
		}else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$member_id = $this->M_login->cek($username,$password);
			// login admin
			if ($member_id == 1) {
				$member_data = array(	'Id' => $member_id,
										'username' => $username,
										'logged_in' => true
				 );
			$this->session->set_userdata('member_data');
			redirect('form');
			}
			// login member
			elseif ($member_id >= 1) {
				$member_data = array(	'Id' => $member_id,
										'username' => $username,
										'logged_in' => true
				 );
			$this->session->set_userdata('member_data');
			redirect('homeMember');
			}else{
				$this->session->set_flashdata('pesan', 'username or password FALSE !!!');
				redirect('login');
			}
		}

	} 

	function keluar(){
		/*$this->session->session_destroy();
		redirect('Login');*/
		$this->session->unset_userdata('member_data');

		redirect('login');
	}
	}

?>

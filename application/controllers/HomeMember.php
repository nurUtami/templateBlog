<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeMember extends CI_Controller {

	
	public function index()
	{
		$this->load->view('home/h_member');
		$this->load->view('member/contenMember');
	}
}

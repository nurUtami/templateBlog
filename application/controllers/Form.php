<?php

class Form extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('home/h_Admin');
                        $this->load->view('Admin/formValidasi');
                }
                else
                {
                        $this->load->view('Admin/formSukses');
                }
        }
}
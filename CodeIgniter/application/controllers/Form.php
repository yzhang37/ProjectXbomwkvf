<?php

class Form extends CI_Controller {

    public function index()
    {
        $this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'User Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('email', 'E-mail', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('myform');
            
        }
        else
        {
            $this->load->view('formsuccess');
        }
    }
}
<?php

class User extends CI_Controller
{
	public function index()
	{
		$this->benchmark->mark('code_start');		
		$this->load->database();
		$this->benchmark->mark('code_end');
		echo $this->benchmark->elapsed_time('code_start', 'code_end');
	}
	public function config()
	{
		
	}
}
?>
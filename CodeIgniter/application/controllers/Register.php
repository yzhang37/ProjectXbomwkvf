<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller
{
	
	public function index()
	{
		$this->load->helper(array('url', 'form'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('reg_email', '注册用户邮箱', 'required', 
										array('required' => '必须输入用户邮箱以用于注册'));
		$this->form_validation->set_rules('reg_password', '密码', 'required', 
										array('required' => '密码不能为空'));
		$this->form_validation->set_rules('reg_passconf', '确认密码', 'required|matches[reg_password]', 
										array('required' => '请输入密码确认',
											  'matches' => '必须和上面输入的密码一致'));
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('register');
		}
		else
		{
			
		}
		
	}
	private function view_check()
	{
		
	}
}
?>
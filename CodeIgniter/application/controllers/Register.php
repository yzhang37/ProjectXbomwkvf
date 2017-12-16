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
			$hits->load->database();
			$query_str = 'INSERT INTO user (uid, unickname, upassword, uemail, ugender, ustatus, usys)';
		}
		
	}
	private function email_check($username)
	{
		$this->load->database();
		$username = strtolower($username);
		$query_str = 'SELECT uid, uemail FROM user WHERE LOWER(uemail) = ?';
		$query_obj = $this->db->query($query_str, array($username));
		
		if ($query_obj->num_rows() == 0)
		{
			
		}
		else
		{
			$this->form_validation->set_message('email_check', 'lang:existed_user');
			return FALSE;
		}
	}
}
?>
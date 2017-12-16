<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	
	public function index()
	{
		$this->load->helper(array('url', 'form'));
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('log_email', 'lang:login_email', 
										'required|valid_email|callback_user_check['.$this->input->post('log_pwd').']',
										 array('required' => 'lang:login_email_required_message'));
		$this->form_validation->set_rules('log_pwd', 'lang:login_password', 'required', 
										 array('required' => 'lang:login_password_required'));
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login');
		}
		else
		{
			echo '用户ID:'.$this->session->userid;
			//TODO: 接下来要
		}
	}
	
	public function user_check($username, $password)
	{
		$this->load->database();
		$username = strtolower($username);
		$query_str = 'SELECT uid, uemail, usys FROM user WHERE LOWER(uemail) = ? AND upassword = ?';
		$query_obj = $this->db->query($query_str, array($username, $password));
		
		if ($query_obj->num_rows() == 1)
		{
			//TODO: 如果用户自己修改 SESSION 如何避免这种问题
			//应该使用 SESSION_ID 和 加密的密码进行合并，进行存储 => 令牌，每次都要检测令牌
			$userinfo = $query_obj->row();
			$userdata = array
			('userid' => $userinfo->uid,
			'useremail' => $userinfo -> uemail,
			'token' => 0, //加密合并
			'usersys' => $userinfo->usys,
			'logged_in' => TRUE,
			);
			$this->session->set_userdata($userdata);
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('user_check', 'lang:wrong_user_or_password_message');
			return FALSE;
		}
	}
}
?>
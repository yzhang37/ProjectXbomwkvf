<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller
{	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	
	public function index()
	{
		if ( ! $this->session->has_userdata('userid') ||
			 ! $this->session->has_userdata('logged_in') ||
			 $this->session->logged_in === FALSE)
			 echo "用户未登录";
		else
		{
			echo '用户ID:'.$this->session->userid;?>
			<br />
<?php			
		}
	}
	public function config()
	{
		
	}
}
?>
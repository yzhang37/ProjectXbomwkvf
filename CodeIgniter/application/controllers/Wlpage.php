<?php

class Wlpage extends CI_Controller
{
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper('smiley');
		
		$segment = array('news', 'local', '曹董');
		echo site_url($segment);
	}
	public function content($id)
	{
		//TODO: 如果 id 被省略了，怎么处理
		//TODO: 如果参数太多，怎么处理？
	}
}

?>
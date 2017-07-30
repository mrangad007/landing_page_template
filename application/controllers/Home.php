<?php
class Home extends CI_Controller
{
	function __contruct()
	{
		parent::__contruct();
	}
	function index()
	{
		$this->load->view('home_view');
	}
	function developerProfile()
	{
		$this->load->view('developer_profile_view');
	}
}
?>
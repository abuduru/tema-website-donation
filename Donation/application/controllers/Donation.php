<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donation extends CI_Controller {
		public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('url','form'));
		
	}
	
	public function index()
	{
		$this->load->view('home');
	}
	public function chat()
	{
		$this->load->view('coba-fitur-chat');
	}
}

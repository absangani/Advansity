<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Kolkata');
	}

	public function index()
	{
		// $this->load->view('Home');

		$this->load->view('about');
	} 
	
	// public function About()
	// {
	// 	$this->load->view('About');
	// }
}


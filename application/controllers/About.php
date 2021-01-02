<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('about');
	}

	// public function about(){
	// 	$this->load->view('about');
	// 	// $this->load->library('../controllers/whathever');
	// }
}
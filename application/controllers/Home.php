<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct()
	{
			parent::__construct();
			// Your own constructor code
			echo "hello this is Home page";
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function about(){
		// require('About.php');
		// $About = new About();
        // $About->index();
		// $this->load->view('about');
		// $this->load->library('../controllers/whathever');
		
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContactUs extends CI_Controller {
	
	public function index()
	{
		$this->load->view('template/head',array('title'=>'Ait | Contact Us'));
	   	$this->load->view('template/header');
	   	$this->load->view('contactUs');
	   	$this->load->view('template/footer');
	}
	
}
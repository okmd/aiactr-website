<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faqs extends CI_Controller {

	
	public function index()
	{
		$this->load->view('template/head',array('title'=>'Ait | FAQs'));
	   	$this->load->view('template/header');
	   	$this->load->view('faqs');
	   	$this->load->view('template/footer');
	}
	
}
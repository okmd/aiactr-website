<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scholarships extends CI_Controller {

	
	public function index()
	{
		$this->load->view('template/head',array('title'=>'Ait | Scholarships'));
	   	$this->load->view('template/header');
	   	$this->load->view('scholarships');
	   	$this->load->view('template/footer');
	}
}
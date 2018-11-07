<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notice extends CI_Controller {

	
	public function index()
	{
		
	}
	#
	public function news($course=''){
		$this->load->view('template/head',array('title'=>'Ait | Latest News'));
	   	$this->load->view('template/header');
	   	$this->load->view('notice');
	   	$this->load->view('template/footer');
	}
}
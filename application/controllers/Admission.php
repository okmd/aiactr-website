<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admission extends CI_Controller {

	
	public function index()
	{
		
	}
	#
	public function course($course=''){
		$this->load->view('template/head',array('title'=>'Ait | Admission'));
	   	$this->load->view('template/header');
	   	$this->load->view('admission');
	   	$this->load->view('template/footer');
	}
	
}
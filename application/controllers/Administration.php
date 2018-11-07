<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administration extends CI_Controller {

	
	public function index()
	{
		$this->principal_desk();
	}
	#
	public function principal_desk(){
		$this->load->view('template/head',array('title'=>'Ait | Principal Desk'));
	   	$this->load->view('template/header');
	   	$this->load->view('principal_desk');
	   	$this->load->view('template/footer');
	}
	public function faculty($hod=''){
		$this->load->view('template/head',array('title'=>'Ait | Faculty'));
	   	$this->load->view('template/header');
	   	$this->load->view('faculty');
	   	$this->load->view('template/footer');
	}
	
}
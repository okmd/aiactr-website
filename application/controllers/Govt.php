<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Govt extends CI_Controller {

	
	public function index()
	{	
		$this->load->view('template/head',array('title'=>'Ait | Governments-RTIs'));
	   	$this->load->view('template/header');
	   	$this->load->view('govt');
	   	$this->load->view('template/footer');
	}
	
}
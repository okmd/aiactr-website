<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AntiAit extends CI_Controller {

	
	public function index()
	{
		$this->load->view('template/head',array('title'=>'Ait | Anti Ragging'));
	   	$this->load->view('template/header');
	   	$this->load->view('antiAit');
	   	$this->load->view('template/footer');
	}
	
}
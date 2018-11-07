<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Examination extends CI_Controller {

	
	public function index()
	{
		$this->load->view('template/head',array('title'=>'Ait | Scholarships'));
	   	$this->load->view('template/header');
	   	$this->load->view('examination');
	   	$this->load->view('template/footer');
	}
	public function datesheet()
	{
		$this->load->view('template/head',array('title'=>'Ait | Scholarships'));
	   	$this->load->view('template/header');
	   	$this->load->view('datesheet');
	   	$this->load->view('template/footer');
	}
	public function results()
	{
		$this->load->view('template/head',array('title'=>'Ait | Scholarships'));
	   	$this->load->view('template/header');
	   	$this->load->view('results');
	   	$this->load->view('template/footer');
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clife extends CI_Controller {

	
	public function index()
	{
		 
	}
	public function events($val='')
	{
		$this->load->view('template/head',array('title'=>'Ait | Scholarships'));
	   	$this->load->view('template/header');
	   	$this->load->view('workshops');
	   	$this->load->view('template/footer');
	}
	public function festivals()
	{
		$this->load->view('template/head',array('title'=>'Ait | Scholarships'));
	   	$this->load->view('template/header');
	   	$this->load->view('festivals');
	   	$this->load->view('template/footer');
	}
	public function sprojects()
	{
		$this->load->view('template/head',array('title'=>'Ait | Scholarships'));
	   	$this->load->view('template/header');
	   	$this->load->view('sprojects');
	   	$this->load->view('template/footer');
	}
	public function gallery()
	{
		$this->load->view('template/head',array('title'=>'Ait | Scholarships'));
	   	$this->load->view('template/header');
	   	$this->load->view('gallery');
	   	$this->load->view('template/footer');
	}
	public function saffairs()
	{
		$this->load->view('template/head',array('title'=>'Ait | Students Affairs'));
	   	$this->load->view('template/header');
	   	$this->load->view('saffairs');
	   	$this->load->view('template/footer');
	}
	public function alumini()
	{
		$this->load->view('template/head',array('title'=>'Ait | Students Affairs'));
	   	$this->load->view('template/header');
	   	$this->load->view('alumini');
	   	$this->load->view('template/footer');
	}
}
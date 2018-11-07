<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Academics extends CI_Controller {

	
	public function index()
	{
		
	}
	#
	public function syllabus($course=''){
		$this->load->view('template/head',array('title'=>'Ait | Admission'));
	   	$this->load->view('template/header');
	   	$this->load->view('syllabus');
	   	$this->load->view('template/footer');
	}
	public function feeStructure(){
		$this->load->view('template/head',array('title'=>'Ait | Admission'));
	   	$this->load->view('template/header');
	   	$this->load->view('feeStructure');
	   	$this->load->view('template/footer');
	}
	public function callender(){
		$this->load->view('template/head',array('title'=>'Ait | Admission'));
	   	$this->load->view('template/header');
	   	$this->load->view('callender');
	   	$this->load->view('template/footer');
	}
	
}
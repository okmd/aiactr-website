<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AitTeam extends CI_Controller {

	
	public function index()
	{
		$this->load->view('template/head',array('title'=>'Ait | Web Team'));
	   	$this->load->view('template/header');
	   	$this->load->view('aitTeam.php');
	   	$this->load->view('template/footer');
	}
	
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Placements extends CI_Controller {

	
	public function index()
		{
			$this->intro();
		}
	public function intro()
		{
			$this->load->view('template/head',array('title'=>'Ait | Previous Placements'));
		   	$this->load->view('template/header');
		   	$this->load->view('placements/intro');
		   	$this->load->view('template/footer');
		}
	public function previousPlacements()
		{
			$this->load->view('template/head',array('title'=>'Ait | Previous Placements'));
		   	$this->load->view('template/header');
		   	$this->load->view('placements/previous_placements');
		   	$this->load->view('template/footer');
		}
	/* companies*/
	public function companies()
		{
			$this->load->view('template/head',array('title'=>'Ait | Previous Placements'));
		   	$this->load->view('template/header');
		   	$this->load->view('placements/Hiring_companies');
		   	$this->load->view('template/footer');
		}
}

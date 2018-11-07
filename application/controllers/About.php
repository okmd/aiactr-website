<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function __construct(){
		parent::__construct();

	}
	public function index()
	{	
		$this->intro();
	}
	public function intro(){
		$this->load->view('template/head',array('title'=>'Ait | Departments'));
	   	$this->load->view('template/header');
	   	$this->load->view('about/intro');
	   	$this->load->view('template/footer');
	}
	public function departments()
	{	
		$this->load->view('template/head',array('title'=>'Ait | Departments'));
	   	$this->load->view('template/header');
	   	$this->load->view('departments_v');
	   	$this->load->view('template/footer');
	}
	public function mandatoryDisclosers()
	{	
		#$this->load->view('organization_setup');
	}
	public function library()
	{	
		$this->load->view('template/head',array('title'=>'Ait | Library'));
	   	$this->load->view('template/header');
	   	$this->load->view('library_v');
	   	$this->load->view('template/footer');
	}
	public function sports()
	{	
		$this->load->view('template/head',array('title'=>'Ait | Sports'));
	   	$this->load->view('template/header');
	   	$this->load->view('sports_v');
	   	$this->load->view('template/footer');
	}
	public function location()
	{	
		#$this->load->view('organization_setup');
	}
	public function canteen()
	{	
		$this->load->view('template/head',array('title'=>'Ait | Students Canteen'));
	   	$this->load->view('template/header');
	   	$this->load->view('canteen_v');
	   	$this->load->view('template/footer');
	}
	function infrastructure($type=''){
		$this->load->view('template/head',array('title'=>'Ait | Infrastructure'));
	   	$this->load->view('template/header');
	   	$this->load->view('infrastructure');
	   	$this->load->view('template/footer');
	}
	function socities(){
		$this->load->view('template/head',array('title'=>'Ait | Socities'));
	   	$this->load->view('template/header');
	   	$this->load->view('socities');
	   	$this->load->view('template/footer');
	}
}

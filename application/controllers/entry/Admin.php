<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/* Admin constructor*/
    public function __construct(){
        parent::__construct();
        $this->load->helper(array('html','url','form'));
	}
	/* Admin index*/
	public function index(){
		$this->login();
	}
	/* Admin Login*/
	public function login(){
		$this->load->library('form_validation');
		$this->load->view('admin/head',array('title'=>'Ait | Administrator'));
		$this->load->view('admin/login',array('head'=>'Administrator Login'));
		$this->load->view('admin/footer');
	}
	/* Admin signup*/
	public function signup(){

	}
	/* Admin dashboard*/
	public function dashboard(){

	}
}
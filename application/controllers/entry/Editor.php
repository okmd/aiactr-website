<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Editor extends CI_Controller {

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
		$this->load->view('manager/template/head',array('title'=>'Ait | Editors'));
		$this->load->view('manager/template/login',array('head'=>'Editors Login'));
		$this->load->view('manager/template/footer');
	}
	/* Admin signup*/
	public function signup(){

	}
	/* Admin dashboard*/
	public function dashboard(){

	}
}
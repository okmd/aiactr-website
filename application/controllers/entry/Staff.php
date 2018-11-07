<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

/*Constructor function*/
  public function __construct(){
      parent::__construct();
      $this->load->helper(array('html','url','form'));
  }
  /*Index function*/
  public function index(){
    $this->login();
  }
  /*Login function*/
  public function login(){
      if(isset($_SESSION['email'])){
         redirect('staff/dashboard', 'refresh');
      }
      else{
          $this->load->view('entry/head');
          $this->load->view('entry/header');

          $this->load->library('form_validation');
          $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
          $this->form_validation->set_rules('pwd', 'Password', 'required|min_length[6]|max_length[20]');
          if ($this->form_validation->run())
          {
              $this->load->model('staff/StfModel');
              if($this->StfModel->validate_staff(set_value('email'),set_value('pwd'))){
                  $_SESSION['email']=set_value('email');
                  redirect('staff/dashboard', 'refresh');
              }
              else
                  $this->load->view('entry/login',array('cls'=>'alert-danger','er' => 'Invalid Username or Password','link'=>'entry/staff','panel_heading'=>'Staff login'));
          }
          else
              $this->load->view('entry/login',array('link'=>'entry/staff','panel_heading'=>'Staff login'));    
          $this->load->view('entry/footer');
      }
  }
  /*Signup function*/
  public function signup(){
      $this->load->view('entry/head');
      $this->load->view('entry/header');
      $this->load->library('form_validation');
      $config = array(
                array(
                      'field' => 'name',
                      'label' => 'Name',
                      'rules' => 'required'
                ),
                array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'required|valid_email|is_unique[temp_user.email]'
                ),
                array(
                        'field' => 'pwd',
                        'label' => 'Password',
                        'rules' => 'required|min_length[8]|max_length[20]'
                ),
                array(
                        'field' => 'rpwd',
                        'label' => 'Password Conformation',
                        'rules' => 'required|matches[pwd]'
                ));
      $this->form_validation->set_rules($config);

      if ($this->form_validation->run())
      {
          $this->load->model('staff/StfModel');
          if($this->StfModel->add_temp_user()){
              if($this->StfModel->sendMail())
                $this->load->view('entry/signup',array('link'=>'entry/staff','panel_heading'=>'Staff signup','mes'=>'Plase verify your email!','cls'=>'alert-success'));
              else
                $this->load->view('entry/signup',array('link'=>'entry/staff','panel_heading'=>'Staff signup','mes'=>'Try Again!','cls'=>'alert-success'));
          }
          else
              $this->load->view('entry/signup',array('link'=>'entry/staff','panel_heading'=>'Staff signup','mes'=>'Account could not be created!','cls'=>'alert-danger'));
      }
      else
          $this->load->view('entry/signup',array('link'=>'entry/staff','panel_heading'=>'Staff signup'));
      $this->load->view('entry/footer');
  }
  /*confirmuser function*/
  public function confirmUser($key){
    $this->load->model('staff/StfModel');
    if($this->StfModel->confirmSignup($key)){
      redirect('staff/login', 'refresh');
    }
    
  }
  /*dashboard function*/ 
  public function dashboard(){
      $this->load->view('staff/dashboard');
  }
  /*logout function*/
  public function logout(){
      if(session_destroy())
      redirect('staff', 'refresh');
  }

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

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
         redirect('entry/student/dashboard', 'refresh');
      }
      else{
          $this->load->view('entry/head');
          $this->load->view('entry/header');

          $this->load->library('form_validation');
          $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
          $this->form_validation->set_rules('pwd', 'Password', 'required|min_length[6]|max_length[20]');
          if ($this->form_validation->run())
          {
              $this->load->model('students/StdModel');
              if($this->StdModel->validate_student(set_value('email'),set_value('pwd'))){
                  $_SESSION['email']=set_value('email');
                  redirect('entry/student/dashboard', 'refresh');
              }
              else
                  $this->load->view('entry/login',array('cls'=>'alert-danger','er' => 'Invalid Username or Password','link'=>'entry/student','panel_heading'=>'Student login'));
          }
          else
              $this->load->view('entry/login',array('link'=>'entry/student','panel_heading'=>'Student login'));    
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
          $this->load->model('students/StdModel');
          if($this->StdModel->add_temp_user()){
              if($this->StdModel->sendMail())
                $this->load->view('entry/signup',array('link'=>'entry/student','panel_heading'=>'Student signup','mes'=>'Plase verify your email!','cls'=>'alert-success'));
              else
                $this->load->view('entry/signup',array('link'=>'entry/student','panel_heading'=>'Student signup','mes'=>'Try Again!','cls'=>'alert-success'));
          }
          else
              $this->load->view('entry/signup',array('link'=>'entry/student','panel_heading'=>'Student signup','mes'=>'Account could not be created!','cls'=>'alert-danger'));
      }
      else
          $this->load->view('entry/signup',array('link'=>'entry/student','panel_heading'=>'Student signup'));
      $this->load->view('entry/footer');
  }
  /*confirmuser function*/
  public function confirmUser($key){
    $this->load->model('Students/StdModel');
    if($this->StdModel->confirmSignup($key)){
      redirect('student/login', 'refresh');
    }
    
  }
  /*dashboard function*/ 
  public function dashboard(){
      if(isset($_SESSION['email'])){
      $this->load->view('student/dashboard');
    }
    else{
      redirect('entry/student', 'refresh');
    }
  }
  /*logout function*/
  public function logout(){
      if(session_destroy())
      redirect('entry/student', 'refresh');
  }

}
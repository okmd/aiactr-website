<?php
class StdModel extends CI_Model {

	/*Validate student to check student exist or not*/
	public function validate_student($email,$pwd){
		$query = $this->db->get_where('students', array('email' => $email,'password'=>$pwd));
		
		if($query->num_rows()==1){
			return true;
		}
		else return false;
	}
	/*add user to to student table confirm registration*/
	public function add_user($key){
			$query = $this->db->get_where('temp_user', array('validation_key' => $key));
			$row = $query->row();
			$n=$row->name;
			$e=$row->email;
			$p=$row->password;
			$data = array(
		        'name' =>$n,
		        'email' => $e,
		        'password' =>$p,
		        'validation_key' =>$key
				);
			if($this->db->insert('students', $data)){
				if($this->db->delete('temp_user', array('validation_key' => $key))){
					return true;
				}
			}
			else return false;
	}
	/*Generate randome unique key*/
	public function genrateKey(){
		return md5(uniqid(rand(), true));
	}
	/*Add temporaty user to temp_user table*/
	public function add_temp_user(){
		$data = array(
        'name' =>$this->input->post('name'),
        'email' => $this->input->post('email'),
        'password' =>$this->input->post('pwd'),
        'validation_key'=>$this->genrateKey()
		);
		if($this->db->insert('temp_user', $data)){
			return true;
		}
		else return false;
	}
	/*send mail to confirm signup*/
	public function sendMail(){/*
		$this->load->library('email');
		$this->email->from('danishahmad616@gmail.com', 'Ait Online Portal');
		$this->email->to('danishahmad616');
		$this->email->cc('another@another-example.com');
		$this->email->bcc('them@their-example.com');
		$this->email->subject('Email verification');
		$this->email->message('Testing the email class.');
		$this->email->send();*/
	
		return true;
    }
    /*Confirm signip*/
    public function confirmSignup($key){
    	$query = $this->db->get_where('temp_user', array('validation_key' => $key));
    	if($query->num_rows()==1){
    		if($this->add_user($key)){
    			return true;
    		}
    	}
    }
}
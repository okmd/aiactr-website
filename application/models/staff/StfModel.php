<?php
class StfModel extends CI_Model {
	public function validate_staff($email,$pwd){
		$query = $this->db->get_where('staff', array('email' => $email,'password'=>$pwd));
		
		if($query->num_rows()==1){
			return true;
		}
		else return false;
	}
	public function add_user(){
		$data = array(
        'name' =>$this->input->post('name'),
        'email' => $this->input->post('email'),
        'password' =>$this->input->post('pwd')
		);
		if($this->db->insert('staff', $data)){
			return true;
		}
		else return false;
	}
}
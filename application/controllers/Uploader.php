<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploader extends CI_Controller {

	public function __construct(){
		parent::__construct();
		 $this->load->helper('url');
		 $this->load->helper('form');
	}
	public function index()
	{
		 $this->load->view('test', array('error' => ' ' ));
	}
	
	public function uploadImage()
	{
		$config['upload_path']          = './images/upload';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 15000;
        $config['max_width']            = 2800;
        $config['max_height']           = 2800;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
			$this->load->view('test', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
			$this->load->view('upload_success', $data);
        }
	}	
}
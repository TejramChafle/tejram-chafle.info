<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function index()
	{
		$this->load->view('welcome_message.html');
	}

	public function contact()
	{
		$input_data = $this->input->post();
        $this->load->model('Welcome_model');
        $resp = $this->Welcome_model->contact($input_data);
        echo json_encode($resp);
	}
}

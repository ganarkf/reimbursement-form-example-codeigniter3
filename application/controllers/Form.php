<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Form Page';
        $this->load->view('form', $data);
	}
}

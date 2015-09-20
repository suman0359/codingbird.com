<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	public function index(){
		$data = array();
        $data['header'] = $this->load->view('includes/header', $data);

        $data['checkout'] = $this->load->view('order', $data);

        $data['footer'] = $this->load->view('includes/footer', $data);

        $this->load->view('index', $data);
	}
}
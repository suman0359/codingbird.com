<?php 

class Products Extends CI_Controller{

	public function index(){
		$this->load->view('index');
	}
	
	public function facebook_cover(){
		$this->load->view("facebook-cover");
	}
}
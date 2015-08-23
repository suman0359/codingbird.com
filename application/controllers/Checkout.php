<?php 
class Checkout Extends CI_Controller{
	public function index(){
            $data=array();
            $data['header']=$this->load->view('includes/header', $data);
            
            $data['checkout']=$this->load->view('includes/checkout', $data);
            
            $data['footer']=$this->load->view('includes/footer', $data);
            
            $this->load->view('index', $data);
	}
}
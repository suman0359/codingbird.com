<?php 

/**
* 
*/
class Cart extends CI_Controller{
	
	public function index(){
            
            $data=array();
            
            $data['header']=$this->load->view('includes/header', $data);
            
            $data['cart']=$this->load->view('includes/cart', $data);
            
            $data['footer']=$this->load->view('includes/footer', $data);
            
            $this->load->view('index', $data);
	}
}
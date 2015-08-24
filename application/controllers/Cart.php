<?php 

/**
* 
*/
class Cart extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        $this->load->library('cart');
    }

        public function index(){
            
            $data=array();
            
            $data['header']=$this->load->view('includes/header', $data);
            
            $data['cart']=$this->load->view('includes/cart', $data);
            
            $data['footer']=$this->load->view('includes/footer', $data);
            
            $this->load->view('index', $data);
	}
        
        public function add_cart($product_id){
            $data=array();
            
            $data['header']=$this->load->view('includes/header', $data);
            
            $data['cart']=$this->load->view('includes/cart', $data);
            
            $data['footer']=$this->load->view('includes/footer', $data);
            
            $this->load->view('index', $data);
        }
}
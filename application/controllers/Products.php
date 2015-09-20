<?php

class Products Extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('product_model');
    }

    public function index() {
        
        $data['all_product']=  $this->product_model->findALL();
        
//        echo print_r($data['all_product']);
//        exit();
        
        $this->load->view('includes/header');
        
        $this->load->view('includes/products', $data);
        
        $this->load->view('includes/footer');
        //$this->load->view('index');
    }

    public function facebook_cover() {
        $this->load->view("facebook-cover");
    }

}

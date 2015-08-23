<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of my_account
 *
 * @author tasfir
 */
class My_Account extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $user_id = $this->session->userdata('user_id');
        if ($user_id == NULL) {
            $security_msg = array();
            $userdata=array();
            //$userdata['my_account']= "Demo"; //'<a href="">My Account</a>';
            $security_msg['message'] = "Please Login First";
            // $this->session->set_userdata($userdata);

            // redirect('user_login');
        }
    }

    //put your code here
    public function index(){
        $data = array();
        
        $user_id = $this->session->userdata('user_id');
            if(!empty($user_id)){
            $data['user_id']= '<a href="">My Account</a>';
            $data['logout']=  $user_id;//'<a href="">Log Out</a>';
            }

        $data['header']=$this->load->view('includes/header', $data);
        
        $data['my_account']=$this->load->view('includes/my-account', $data);
        
        $data['footer']=$this->load->view('includes/footer', $data);
        
        $this->load->view('index', $data);
    }
}

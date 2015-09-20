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
        $this->load->model('my_account_model');
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
            
        $data['user_info'] = $this->my_account_model->select_user_info($user_id);
        $data['billing_address'] = $this->my_account_model->select_billing_address_info($user_id);
        
//        print_r($data['user_info']);
//        exit();

        $data['header']=$this->load->view('includes/header', $data);
        
        $data['my_account']=$this->load->view('includes/my-account', $data);
        
        $data['footer']=$this->load->view('includes/footer', $data);
        
        $this->load->view('index', $data);
    }
    
    public function update_my_account(){
        $data = array();
        
        $user_id = $this->session->userdata('user_id');
        
        $data['first_name'] = $this->input->post('first_name', TRUE);
        $data['last_name'] = $this->input->post('last_name', TRUE);
        $data['email_address'] = $this->input->post('email', TRUE);
        $data['date_of_birth'] = $this->input->post('date', TRUE);
        $data['phone_no'] = $this->input->post('phone', TRUE);
        
        $this->my_account_model->update_my_account($data, $user_id);
        
        
        $alert_message=array();
        $this->session->set_userdata($alert_message);
        $alert_message['successfull']="Successfully Updated Your Account";
        redirect('my_account');
    }
    
    public function update_billing_address_info(){
        $data = array();
        
        $user_id = $this->session->userdata('user_id');
        
        $data['country']=$this->input->post('country', TRUE);
        $data['first_name'] = $this->input->post('first_name', TRUE);
        $data['last_name'] = $this->input->post('last_name', TRUE);
        $data['company_name']=$this->input->post('company_name', TRUE);
        $data['address']=$this->input->post('address', TRUE);
        $data['optional_address']=  $this->input->post('optional_address');
        $data['city_state']=  $this->input->post('city_state', TRUE);
        $data['zip_code']=  $this->input->post('zip_code', TRUE);
        $data['email_address'] = $this->input->post('email', TRUE);
        $data['phone']=  $this->input->post('phone', TRUE);
        
        
        $this->my_account_model->update_billing_address_info($data, $user_id);
        
        
        $alert_message=array();
        $this->session->set_userdata($alert_message);
        $alert_message['successfull']="Successfully Updated Your Billing Address";
        redirect('my_account');
    }
}

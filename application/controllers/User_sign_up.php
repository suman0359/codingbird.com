<?php

/**
 * 
 */
class User_sign_up extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_management_model');
    }

    public function index() {
        $this->load->view('login');
    }

    public function register() {
        $data = array();
        $alert_message = array();
        $email_address = $data['email_address'] = $this->input->post('email_address', TRUE);
        $password = $data['password'] = md5($this->input->post('password', TRUE));
        $confirm_password = md5($this->input->post('confirm_password', TRUE));

        $check_email_address = $this->user_management_model->check_exist_email($email_address);
        

        if ($check_email_address !== NULL) {
            
            $alert_message['message'] = "Your Email Address is already exist. Please try different email address.";
            $this->session->set_userdata($alert_message);
            redirect('user_login');
        }
        
        if($password!==$confirm_password){
            $alert_message['message'] = "Your Password and Confirm Password Doesn't Match";
            $this->session->set_userdata($alert_message);
            redirect('user_login');
        }

        $this->user_management_model->save_user_info($data);

        
        $alert_message['message'] = "Successfully Register";
        $this->session->set_userdata($alert_message);
        
        

        redirect('home');
    }

}

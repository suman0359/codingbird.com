<?php

/**
 * 
 */
class User_sign_up extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_management_model');
        $this->load->model('user_login_model');
        $this->load->model('my_account_model');
    }

    public function index() {
        $this->load->view('login');
    }

    public function register() {
        $data = array();
        $alert_message = array();
        $user_email = $this->input->post('email_address', TRUE);
        $email_address = $data['email_address'] = $this->input->post('email_address', TRUE);
        $password = $data['password'] = md5($this->input->post('password', TRUE));
        $confirm_password = md5($this->input->post('confirm_password', TRUE));

        $check_email_address = $this->user_management_model->check_exist_email($email_address);


        if ($check_email_address !== NULL) {

            $alert_message['message'] = "Your Email Address is already exist. Please try different email address.";
            $this->session->set_userdata($alert_message);
            redirect('user_login');
        }

        if ($password !== $confirm_password) {
            $alert_message['message'] = "Your Password and Confirm Password Doesn't Match";
            $this->session->set_userdata($alert_message);
            redirect('user_login');
        }

        $this->user_management_model->save_user_info($data);

        //Login 

        $result = $this->user_login_model->check_login_register($user_email);

        $login_msg = array();
        if ($result) {
            $login_msg['user_id'] = $result->user_id;
            $login_msg['email_address'] = $result->email_address;
            $login_msg['first_name'] = $result->first_name;
            $login_msg['last_name'] = $result->last_name;

            $this->session->set_userdata($login_msg);
            
            $billing_data=array();

            $billing_data['user_id'] = $result->user_id;
            $billing_data['email_address'] = $result->email_address;

            $billing_data['first_name'] = $result->first_name;
            $billing_data['last_name'] = $result->last_name;


            $this->my_account_model->create_billing_address($billing_data);
        }



        $alert_message['message'] = "Successfully Register";
        $this->session->set_userdata($alert_message);



        redirect('home');
    }

    

}

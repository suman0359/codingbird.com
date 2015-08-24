<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_login extends CI_Controller {

    public function __construct() {
        parent:: __construct();
        $this->load->model('user_login_model');
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $this->load->view('login');
    }

    public function check_user_login() {
        $user_email = $this->input->post('email', true);
        $user_password = $this->input->post('password', true);

        $result = $this->user_login_model->check_login_info($user_email, $user_password);
        // print_r($result);
        // exit();
        $login_msg = array();
        if ($result) {
            $login_msg['user_id'] = $result->user_id;
            $login_msg['email_address'] = $result->email_address;
            $login_msg['first_name'] = $result->first_name;
            $login_msg['last_name'] = $result->last_name;
            $this->session->set_userdata($login_msg);
            
            $alert_message = array();
            $alert_message['message'] = "Successfully Loged In";
            $this->session->set_userdata($alert_message);
            
            redirect('home');
        } else {
            $alert_message = array();
            $alert_message['message'] = "Your Email Address or Password Dosn't Match";
            $this->session->set_userdata($alert_message);
            redirect('user_login');
        }
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('email_address');
        $this->session->unset_userdata('first_name');
        $this->session->unset_userdata('last_name');
        $logout_msg = array();
        $logout_msg['message'] = "You are Successfully Loged out";
        $this->session->set_userdata($logout_msg);
        redirect('home', 'refresh');
    }

}

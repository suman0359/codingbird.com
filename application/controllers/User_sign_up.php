<?php 

/**
* 
*/

class User_sign_up extends CI_Controller{

	public function __construct() {
        parent::__construct();
        $this->load->model('user_management_model');
    }

	public function index(){
		$this->load->view('login');
	}

	public function register(){
		$data = array();
		$data['email_address']=$this->input->post('email_address', TRUE);
		$data['password']=md5($this->input->post('password', TRUE));

		$this->user_management_model->save_user_info($data);

		$sdata = array();
        $sdata['successfull'] = "Successfully Create a New Menu";
        $this->session->set_userdata($sdata);
        
        redirect('home');
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data=array();

		$user_id = $this->session->userdata('user_id');
		if(!empty($user_id)){
		$data['user_id']= '<a href="">My Account</a>';
		$data['logout']=  $user_id;//'<a href="">Log Out</a>';
		}
		
		$data['header']=$this->load->view('includes/header', $data);
                $data['hero_slider']=$this->load->view('includes/hero-slider', $data);
                $data['how_its_works']=$this->load->view('includes/how-its-works', $data);
                $data['pricing_plan']=$this->load->view('includes/pricing-plan', $data);
                $data['faq']=$this->load->view('includes/faq', $data);
                $data['feedback']=$this->load->view('includes/feedback', $data);
                $data['contacts']=$this->load->view('includes/contacts', $data);
                
                $data['footer']=$this->load->view('includes/footer', $data);


		$this->load->view('index', $data);
	}
}

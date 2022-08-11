<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function __construct(){
        parent::__construct();
		$this->load->view('Backend/Header');	  
		$this->load->model('DashboardModal');		
      }
	//Check user login activity 
	//fucn - logged_in()
	// private function logged_in()
    // {
    //     if( ! $this->session->userdata('authenticated')){
    //         redirect('DashboardController/login');
    //     }
    // } 

	
	
	//Login mathod 
	public function index()
	{
		if($this->session->userdata('authenticated')){
            redirect('admin');
        }	
		$USERNAME = $this->input->post('U_USERNAME');
		$PASSWORD = $this->input->post('U_PASSWORD');

		$user = $this->DashboardModal->login($USERNAME,$PASSWORD);
		if(!empty($user)){
                $userdata = array(
                    'U_ID' => $user->U_ID,
                    'U_USERNAME' => $user->U_USERNAME,
                    'U_PASSWORD' => $user->U_PASSWORD,
                    'authenticated' => TRUE
                );                
                $this->session->set_userdata($userdata);                
                redirect('admin');
            }

        $this->load->view('Backend/Auth/LoginView');
		$this->load->view('Backend/Footer');  
	}
	//Log Out mathod
	
	public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/Login');
    }
	
}
?>

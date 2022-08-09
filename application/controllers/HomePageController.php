<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomePageController extends CI_Controller
{



    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('FrontEnd/header');
        $this->load->view('FrontEnd/index.php');
        $this->load->view('FrontEnd/footer');

    }

    
    //END  VIEW DATA  
    //site user view
}

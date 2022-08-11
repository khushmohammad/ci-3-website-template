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
        $this->load->view('FrontEnd/Header');
        $this->load->view('FrontEnd/index.php');
        $this->load->view('FrontEnd/Footer');

    }

    
    //END  VIEW DATA  
    //site user view
}

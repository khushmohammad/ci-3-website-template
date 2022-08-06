<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{



    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('FrontEnd/HomeView');
    }
    public function View($page = null)
    {
        if (!file_exists(APPPATH . 'views/FrontEnd/Pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $this->load->view('FrontEnd/header');
        $this->load->view('FrontEnd/pages/' . $page);
        $this->load->view('FrontEnd/footer');


        //END  VIEW DATA  
        //site user view
    }
}

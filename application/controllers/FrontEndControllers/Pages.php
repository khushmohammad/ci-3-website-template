<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{



    function __construct()
    {
        parent::__construct();
        $this->load->helper('captcha');
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

        // $this->load->view('FrontEnd/header');
        // $this->load->view('FrontEnd/pages/' . $page);
        // $this->load->view('FrontEnd/footer');


        //END  VIEW DATA  
        //site user view

        if ($page == "contact-us") {


            $vals = array(
                //'word'          => 'Randdfdom word',
                'img_path'      => './captcha-images/',
                'img_url'       => base_url() . 'captcha-images/',
                'font_path'     => './path/to/fonts/Poppins-Regular.ttf',
                'img_width'     => 200,
                'img_height'    => 40,
                'expiration'    => 500,
                'word_length'   => 4,
                'font'     => true,
                'font_size'     => 29,
                'img_id'        => 'Imageid',
                'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

                // White background and border, black text and red grid
                'colors'        => array(
                    'background' => array(255, 255, 255),
                    'border' => array(255, 255, 255),
                    'text' => array(0, 0, 0),
                    'grid' => array(255, 40, 40)
                )
            );

            $cap = create_captcha($vals);
            $image = $cap['image'];
            $captchaword = $cap['word'];
            $this->session->set_userdata('captchaword', $captchaword);
            //	$this->load->view('index',['captcha_image'=>$image]);


            $this->load->view('FrontEnd/header');
            $this->load->view('FrontEnd/pages/contact-us', ['captcha_image' => $image]);
            $this->load->view('FrontEnd/footer');
        } else {
            $this->load->view('FrontEnd/header');
            $this->load->view('FrontEnd/pages/' . $page);
            $this->load->view('FrontEnd/footer');
        }
    }

    public function SubmitContactForm()
    {
        // echo "khush";
        // echo "<pre>";
        // echo print_r($_POST);
        // echo "</pre>";


        $captcha = $this->input->post('captcha');
        $captcha_answer = $this->session->userdata('captchaword');

        ///check both captcha
        // echo "<pre>";
        // echo print_r($_POST);
        // echo print_r($captcha_answer);
        // echo "</pre>";
        // die();



        if ($captcha == $captcha_answer) {
            $config = array(
                array(
                    'field' => 'DealerName',
                    'label' => 'Dealer Name',
                    'rules' => 'required'
                ),

                array(
                    'field' => 'PhoneNumber',
                    'label' => 'Phone Number',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'Email',
                    'label' => 'Email',
                    'rules' => 'required|valid_email'
                ),
                array(
                    'field' => 'PhoneNumber',
                    'label' => 'Phone Number',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'LicenseNo',
                    'label' => 'License No',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'IssueDate',
                    'label' => 'Issue Date',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'ExpiryDate',
                    'label' => 'Expiry Date',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'LicenseIssueBy',
                    'label' => 'License Issue By',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'Address',
                    'label' => 'Address',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'Pincode',
                    'label' => 'Pincode',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'State',
                    'label' => 'State',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'District',
                    'label' => 'ExpiryDate',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'City',
                    'label' => 'City',
                    'rules' => 'required'
                )

            );

            $this->form_validation->set_rules($config);
            if ($this->form_validation->run() == FALSE) {

                $errors = validation_errors();

                echo json_encode(['error' => $errors]);
            } else {




                $data = array(
                    'Dealer_Name' => $this->input->post('DealerName'),
                    'Address' => $this->input->post('Address'),
                    'City' => $this->input->post('City'),
                    'District' => $this->input->post('District'),
                    'State' => $this->input->post('State'),
                    'Phone_Number' => $this->input->post('PhoneNumber'),
                    'Email' => $this->input->post('Email'),
                    'License_No' => $this->input->post('LicenseNo'),
                    'Issue_Date' => $this->input->post('IssueDate'),
                    'Expiry_Date' => $this->input->post('ExpiryDate'),
                    'License_Issue_by' => $this->input->post('LicenseIssueBy'),
                    'Pincode' => $this->input->post('Pincode')
                );

                if ($this->db->insert('dealer_con', $data)) {
                    echo json_encode(['success' => 'Record added successfully.']);
                } else {
                    echo json_encode(['error' => 'error']);
                }
            }
        } else {
            echo json_encode(['error' => 'Captcha does not match.']);
            $this->session->set_flashdata('error', '<div class="alert alert-danger"></div>');           
        }
    }
}

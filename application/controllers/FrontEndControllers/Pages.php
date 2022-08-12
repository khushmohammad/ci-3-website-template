<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{



    function __construct()
    {
        parent::__construct();
        $this->load->helper('captcha');

        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'smtpout.secureserver.net',
            'smtp_port' => 465,
            'smtp_timeout' => 5,
            'smtp_user' => 'info@avenuepoultech.com', // change it to yours
            'smtp_pass' => 'e5bY8eR=C&', // change it to yours
            'mailtype' => 'html',
            'smtp_auth' => true,
            'smtp_crypto' => 'ssl',
            'charset' => 'UTF-8',
            'wordwrap' => TRUE,

        );
        // $this->load->library('email');
        $this->email->initialize($config);
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
                'font_path'     => './path/to/fonts/texb.ttf',
                'img_width'     => 200,
                'img_height'    => 40,
                'expiration'    => 1000,
                'word_length'   => 4,
                'font_size'     => 29,
                'img_id'        => 'Imageid',
                'pool'          => '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',

                // White background and border, black text and red grid
                'colors'        => array(
                    'background' => array(255, 255, 255),
                    'border' => array(206, 212, 218),
                    'text' => array(0, 0, 0),
                    'grid' => array(255, 192, 192)
                )
            );

            $cap = create_captcha($vals);
            $image = $cap['image'];
            $captchaword = $cap['word'];
            $this->session->set_userdata('captchaword', $captchaword);
            //	$this->load->view('index',['captcha_image'=>$image]);


            $cap1 = create_captcha($vals);
            $image1 = $cap1['image'];
            $captchaword1 = $cap1['word'];

            $this->session->set_userdata('captchaword1', $captchaword1);


            $this->load->view('FrontEnd/Header');
            $this->load->view('FrontEnd/Pages/contact-us', ['captcha_image' => $image, 'enquery_captcha_image' => $image1]);
            $this->load->view('FrontEnd/Footer');
        } else {
            $this->load->view('FrontEnd/Header');
            $this->load->view('FrontEnd/Pages/' . $page);
            $this->load->view('FrontEnd/Footer');
        }
    }

    public function SubmitRegisterDealer()
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
                    'field' => 'DealerName',
                    'label' => 'Dealer Name',
                    'rules' => 'required|is_unique[dealer_con.Dealer_Name]'
                ),
                array(
                    'field' => 'Email',
                    'label' => 'Email',
                    'rules' => 'required|valid_email|is_unique[dealer_con.Email]'
                ),
                array(
                    'field' => 'PhoneNumber',
                    'label' => 'Phone Number',
                    'rules' => 'required|is_unique[dealer_con.Phone_Number]'
                ),
                array(
                    'field' => 'LicenseNo',
                    'label' => 'License No',
                    'rules' => 'required|is_unique[dealer_con.License_No]'
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

    public function getAddress()
    {
        $pincode = $_POST['pincode'];
        $data = file_get_contents('http://postalpincode.in/api/pincode/' . $pincode);
        $data = json_decode($data);
        // echo "<pre>";
        // echo print_r($data->PostOffice);
        // die();
        if (isset($data->PostOffice['0'])) {
            $arr['City'] = $data->PostOffice['0']->Taluk;
            $arr['District'] = $data->PostOffice['0']->District;
            $arr['State'] = $data->PostOffice['0']->State;
            $arr['VillageList'] = $data->PostOffice;
            echo json_encode($arr);
        } else {
            echo 'no';
        }
    }


    public function SubmitEnqueryForm()
    {
        // echo "khush";
        // echo "<pre>";
        // echo print_r($_POST);
        // echo "</pre>";
        // die();


        $captcha = $this->input->post('captcha');
        $captcha_answer = $this->session->userdata('captchaword1');

        ///check both captcha
        // echo "<pre>";
        // echo print_r($_POST);
        // echo print_r($captcha_answer);
        // echo "</pre>";
        // die();



        if ($captcha == $captcha_answer) {
            $config = array(
                array(
                    'field' => 'Name',
                    'label' => 'Name',
                    'rules' => 'required'
                ),

                array(
                    'field' => 'Email',
                    'label' => 'Email',
                    'rules' => 'required|valid_email|is_unique[enquery.email]'
                ),
                array(
                    'field' => 'PhoneNumber',
                    'label' => 'Phone Number',
                    'rules' => 'required|is_unique[enquery.contact]'
                )

            );

            $this->form_validation->set_rules($config);
            if ($this->form_validation->run() == FALSE) {

                $errors = validation_errors();

                echo json_encode(['error' => $errors]);
            } else {




                $data = array(
                    'name' => $this->input->post('Name'),
                    'contact' => $this->input->post('PhoneNumber'),
                    'email' => $this->input->post('Email'),
                    'message' => $this->input->post('Message'),


                );

                if ($this->db->insert('enquery', $data)) {
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



    public  function email_send()
    {
        $this->email->from('info@avenuepoultech.com', 'test email');
        $this->email->to('xifreuhessaula-3142@yopmail.com');
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');
        $this->email->send();


        $errors = $this->email->print_debugger();
        print_r($errors);
    }
}

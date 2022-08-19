<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{



    function __construct()
    {
        parent::__construct();
        $this->load->helper('captcha');
        $config = array(
            'charset' => 'utf-8',
            'wordwrap' => TRUE,
            'mailtype' => 'html'
        );

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
        if ($captcha == $captcha_answer) {
            $config = array(
              
                array(
                    'field' => 'DealerName',
                    'label' => 'Dealer Name',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'Contact_Person_Name',
                    'label' => 'Contact Person Name',
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

                $query = $this->db->query("SELECT MAX(id) as LastId FROM dealer_con");
                $LastId = $query->row_array();


                $data = array(
                    'Dealer_Name' => $this->input->post('DealerName'),
                    'Contact_Person_Name' => $this->input->post('Contact_Person_Name'),
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
                    'Pincode' => $this->input->post('Pincode'),
                    'Certificate_No' => "AP/" . date("Y-d") . "/" . sprintf("%04d", $LastId['LastId'] + 1)
                );
                //$this->sendEnqueryEmail($data['Email'], $data, 'RegisterDealerFormEmailTemp', 'Thank you for registering as Dealer with us');

                if ($this->db->insert('dealer_con', $data)) {
                    echo json_encode(['success' => 'Thank you for getting in touch with us. We received your message and will respond to your inquiry.']);
                    $this->sendEnqueryEmail($data['Email'], $data, 'RegisterDealerFormEmailTemp', 'Thank you for registering as Dealer with us');
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
                ),
                array(
                    'field' => 'Message',
                    'label' => 'Message',
                    'rules' => 'required'
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
                    echo json_encode(['success' => 'Thank you for getting in touch with us. We received your message and will respond to your inquiry.']);
                    $this->sendEnqueryEmail($data['email'], $data, 'EnqueyFormEmailTemp', 'Thank you for getting in touch with us');
                } else {
                    echo json_encode(['error' => 'error']);
                }
            }
        } else {
            echo json_encode(['error' => 'Captcha does not match.']);
            $this->session->set_flashdata('error', '<div class="alert alert-danger"></div>');
        }
    }

    public function sendEnqueryEmail($to, $postData = "", $template = "", $subject = "")
    {
        // echo "<pre>";
        // echo print_r($postData);

        // echo  $to;
        // echo  $template;
        // echo  $subject;
        // die();




        $data['UserData'] = $postData;
        // $this->load->view('Email/' . $template, $data);


        $emailTemp = $this->load->view('Email/' . $template,  $data, true);
        $from = FROMEMAIL;
        // $to =  $postData['email'];
        $cc =  CCEMAIL;
        $subject =  $subject;
        //$message =  $postData['message'] ? $postData['message'] : $emailTemp;

        $this->email->from($from, 'Avenue Poultech');
        $this->email->to($to);
        $this->email->cc($cc);
        $this->email->subject($subject);
        $this->email->message($emailTemp);
        if (!$this->email->send()) {

            return false;
        } else {
            return true;
        }
    }

    public  function email_send()
    {
        // $this->email->from('info@avenuepoultech.com', 'test email');
        // $this->email->to('xifreuhessaula-3142@yopmail.com');
        // $this->email->subject('Email Test');
        // $this->email->message('Testing the email class.');
        // if (!$this->email->send()) {
        //     $errors = $this->email->print_debugger();
        //     print_r($errors);
        // } else {
        //     echo "success";
        // }

        // $msg = "First line of text\nSecond line of text";

        // // use wordwrap() if lines are longer than 70 characters
        // $msg = wordwrap($msg, 70);

        // // send email
        // if(mail("khush311407@gmail.com", "My subject", $msg)){
        //     echo "success";
        // }
        // else{
        //     echo "success";

        // }
        $to = "xifreuhessaula-3142@yopmail.com";
        $subject = "My subject";
        $txt = "Hello world!";
        $headers = "From:" . FROMEMAIL . "\r\n" .
            "CC: khush311407@gmail.com";

        mail($to, $subject, $txt, $headers);
        if (mail($to, $subject, $txt, $headers)) {
            echo "success";
        } else {
            echo "success";
        }
    }

    public  function email_send1()
    {
        $this->email->from('info@avenuepoultech.com', 'test email');
        $this->email->to('xifreuhessaula-3142@yopmail.com');
        $this->email->subject('Email Test');
        $this->email->message('Testing the email class.');
        if (!$this->email->send()) {
            $errors = $this->email->print_debugger();
            print_r($errors);
        } else {
            echo "success";
        }
    }
    public  function testView()
    {
        // echo "khush";
        // echo "<pre>";
        // echo print_r($_POST);
        // echo "</pre>";
        // die();
        // $this->load->view('TestView');
        // $this->load->view('Email/EnqueyFormEmailTemp');
        //  $this->load->view('Email/RegisterDealerFormEmailTemp');
        $this->load->view('Email/DealerCertificate');

        // $query = $this->db->query("SELECT MAX(id) as LastId FROM dealer_con");
        // $LastId = $query->row_array();
        // echo "<pre>";
        // echo print_r($LastId['LastId']);
    }
    public  function testViewEmail()
    {
        echo "khush";
        echo "<pre>";
        echo print_r($_POST);
        echo "</pre>";
        $emailTemp = $this->load->view('Email/EnqueyFormEmailTemp', '', true);
        $from =  $this->input->post("from") ? $this->input->post("from") : 'info@avenuepoultech.com';
        $to =  $this->input->post("to") ? $this->input->post("to") : 'xifreuhessaula-3142@yopmail.com';
        $cc =  $this->input->post("cc") ? $this->input->post("cc") : 'info@avenuepoultech.com';
        $subject =  $this->input->post("subject") ? $this->input->post("subject") : 'test Email enquery';
        $message =  $this->input->post("message") ? $this->input->post("message") : $emailTemp;
        //$extra =  $this->input->post("extra") ? $this->input->post("extra") : 'info@avenuepoultech.com';
        //  $extra1 =  $this->input->post("extra1") ? $this->input->post("extra1") : 'info@avenuepoultech.com';

        //$this->load->view('Email/EnqueyFormEmailTemp', $data);



        $this->email->from($from, 'Avenue Poultech');

        $this->email->to($to);
        $this->email->cc($cc);
        $this->email->subject($subject);
        $this->email->message($message);
        if (!$this->email->send()) {
            $errors = $this->email->print_debugger();
            print_r($errors);
        } else {
            echo "success";
        }
    }
}

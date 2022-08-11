<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmailController extends CI_Controller
{



    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo "email";
    }

    function send()
    {


        $this->load->config('email');


        $from = $this->email->from('your@example.com', 'Your Name');
        $to = $this->input->post('to');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send(FALSE);
        // $this->email->print_debugger(array('headers'));
        echo print_r("dd");
        // 
        // if ($this->email->send()) {
        //     echo 'Your Email has successfully been sent.';

        // } else {
        //     show_error($this->email->print_debugger());
        // }
    }


    // $config = Array(
    //     'protocol' => 'smtp',
    //     'smtp_host' =>"gmail" ,
    //     'smtp_port' => 132,
    //     'smtp_user' => "abc@email.com", // change it to yours
    //     'smtp_pass' => "pass", // change it to yours
    //     'mailtype' => 'html',
    //     'smtp_auth' => true,
    //     'smtp_crypto' => 'ssl',
    //     'charset' => 'UTF-8',
    //     'wordwrap' => TRUE
    // );
    // $this->load->library('email');
   // $this->email->initialize($config);

//    function email_send($path= "", $data= "", $email= "", $subject= "") {
//     $body = "dd";//$this->load->view($path, $data, true);
//     $this->email->from("abc@email.com", 'Sedar');
//     $this->email->to($email); // change it to yours
//     $this->email->subject($subject);
//     $this->email->message($body);
//     $this->email->attach('http://example.com/filename.pdf');
//     $this->email->send();
// }
    //END  VIEW DATA  
    //site user view
}

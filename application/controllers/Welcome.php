<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	function GeneratePdf1()
	{
		//load dompdf library
		$data["user"] = array("user" => "khush");


		$this->load->library('Pdf');
		$objPHPPdf = new Pdf();





		$this->load->view('generatepdf', $data);
		$html = $this->output->get_output();
		$objPHPPdf->loadHtml($html, 'UTF-8');



		// (Optional) Setup the paper size and orientation landscape portrait
		$objPHPPdf->setPaper('A4', 'portrait');
		// Render the HTML as PDF
		$objPHPPdf->render();
		$pdf = $objPHPPdf->output();
		$pdfName = date("m-d H-i-s") . ".pdf";


		//$objPHPPdf->stream("html_contents.pdf", array("Attachment" => 0));

		$this->email->from('info@avenuepoultech.com', 'test email');
		$this->email->to('khush311407@gmail.com');
		$this->email->subject('Email Test attachment');
		$this->email->message('Testing the email class.');
		$this->email->attach($pdf, 'application/pdf', "" . $pdfName . ".pdf", false);
		if (!$this->email->send()) {
			$errors = $this->email->print_debugger();
			print_r($errors);
		} else {
			echo "success";
		}




		// $r = $this->email->send();
		// if (!$r) {
		// 	// "Failed to send email:" . $this->email->print_debugger(array("header")));
		// } else {
		// 	// "Email sent"
		// }
		//file_put_contents('public/mypap.pdf', $pdfName);
	}

	function GeneratePdf()
	{
		$data["user"] = array("user" => "khush");
		$this->load->view('generatepdf', $data);
		$html = $this->output->get_output();
		// Load pdf library
		$this->load->library('pdf');
		$this->pdf->loadHtml($html);
		$this->pdf->setPaper('A4', 'potrait');
		$this->pdf->render();
		// Output the generated PDF (1 = download and 0 = preview)
		$this->pdf->stream("html_contents.pdf", array("Attachment" => 1));
		//file_put_contents('mypap.pdf', $file);
	}
}

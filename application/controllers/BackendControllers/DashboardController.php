<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{

	private $userId;

	function __construct()
	{
		parent::__construct();

		$this->load->model('DashboardModal');
		$this->logged_in();
		$this->userId = $this->session->userdata('U_USERNAME');
		$userId = $this->session->userdata('U_USERNAME');
		$this->load->helper('captcha');
	}
	// check log in  function  
	private function logged_in()
	{
		if (!$this->session->userdata('authenticated')) {
			redirect('admin/Login');
		}
	}

	//dashboard view function

	public function index()
	{
		$this->load->view('Backend/DashHeader');
		$this->load->view('Backend/Pages/DashboardView');
		$this->load->view('Backend/Footer');
	}

	//START  VIEW DATA  
	//site user view
	//*use this for json  header('Content-Type: application/json');*/
	public function Users()
	{

		$data['user']  =  $this->db->get('dash_users')->result_array();
		$this->load->view('Backend/DashHeader');
		$this->load->view('Backend/Pages/UsersView', $data);
		$this->load->view('Backend/Footer');
	}

	public function Dealer()
	{

		$data['dealer']  =  $this->db->get('dealer_con')->result_array();
		$this->load->view('Backend/DashHeader');
		$this->load->view('Backend/Pages/DealerView', $data);
		$this->load->view('Backend/Footer');
	}
	public function enquiries()
	{

		$data['dealer']  =  $this->db->get('enquery')->result_array();
		$this->load->view('Backend/DashHeader');
		$this->load->view('Backend/Pages/EnqueryView', $data);
		$this->load->view('Backend/Footer');
	}

	public function AddEditDealer($id = "")
	{


		$query = $this->db->get_where('dealer_con', array('id' => $id));

		$data['dealer']  = $query->row_array();

		// echo "<pre>";
		// echo print_r($query->row_array());
		// echo print_r($id);		
		// echo "</pre>";
		//die();

		$vals = array(
			//'word'          => 'Randdfdom word',
			'img_path'      => './captcha-images/',
			'img_url'       => base_url() . 'captcha-images/',
			'font_path'     => './path/to/fonts/texb.ttf',
			'img_width'     => 200,
			'img_height'    => 40,
			'expiration'    => 500,
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

		$dataGroup = array(
			"dealerData" => $data,
			'captcha_image' => $image
		);

		$this->load->view('Backend/DashHeader');
		$this->load->view('Backend/Pages/DealerAddEdit', $dataGroup);
		$this->load->view('Backend/Footer');
	}
	public function UpdateRegisterDealer($id = "")
	{
		// echo "khush";
		// echo "<pre>";
		// echo print_r($_POST);
		// echo "</pre>";
		// die();

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

				$this->db->where('id', $this->input->post('id'));
				//$this->db->update('dealer_con', $data);

				if ($this->db->update('dealer_con', $data)) {
					echo json_encode(['success' => 'Record update successfully.']);
				} else {
					echo json_encode(['error' => 'error']);
				}
			}
		} else {
			echo json_encode(['error' => 'Captcha does not match.']);
			$this->session->set_flashdata('error', '<div class="alert alert-danger"></div>');
		}
	}


	public function DeleteDealer()
	{

		// echo "<pre>";
		// echo print_r($_POST);
		// echo print_r($this->input->post('id'));
		// echo "</pre>";
		//die();
		if ($this->input->post('ID') != "") {
			$this->db->where('id', $this->input->post('ID'));
			$this->db->delete('dealer_con');
			echo json_encode(['success' => "success"]);
		} else {
			echo json_encode(['error' => "error"]);
		}
	}


	public function SendFormDtoDealer()
	{

		$id = $this->input->post('ID');
		$query = $this->db->get_where('dealer_con', array('id' => $id));
		$data['dealer']  = $query->row_array();



		//die();
		// send Form-o with attached email 

		$this->load->library('Pdf');


		$objPHPPdf = new Pdf();
		$html = $this->output->get_output($this->load->view('generatepdf', $data));
		$objPHPPdf->loadHtml($html, 'UTF-8');



		// (Optional) Setup the paper size and orientation landscape portrait
		$objPHPPdf->setPaper('A4', 'portrait');
		$objPHPPdf->render();
		$pdf = $objPHPPdf->output();
		$pdfName = $data['dealer']['Dealer_Name'] . date("m-d H-i-s") . ".pdf";
		// Render the HTML as PDF
		//echo json_encode(['success' => 'Form=O Certificate sent successfully']);

		//$objPHPPdf->stream("html_contents.pdf", array("Attachment" => 0));

		//$emailTemp = $this->load->view('Email/DealerCertificate',  $data, true);
		$this->email->from(FROMEMAIL, 'Avenue Poultech');
		$this->email->to($data['dealer']['Email']);
		$this->email->cc(CCEMAIL);
		$this->email->subject('Principal Certificate - Brite Bio PROM O-Form');
		$this->email->attach($pdf, 'application/pdf', "" . $pdfName . ".pdf", false);
		$this->email->message($this->load->view('Email/DealerCertificate',  $data, true));
		//$this->email->message('Testing the email class.');
		if (!$this->email->send()) {
			http_response_code(500);
			echo json_encode(['error' => 'Something went wrong']);
			// $errors = $this->email->print_debugger();
			// print_r($errors);
		} else {
			http_response_code(200);
			echo json_encode(['success' => 'Form-O Certificate sent successfully']);
		}
	}



	public function AddEditEnquery($id = "")
	{


		$query = $this->db->get_where('enquery', array('id' => $id));

		$data['enquery']  = $query->row_array();

		// echo "<pre>";
		// echo print_r($query->row_array());
		// echo print_r($id);		
		// echo "</pre>";
		//die();

		$vals = array(
			//'word'          => 'Randdfdom word',
			'img_path'      => './captcha-images/',
			'img_url'       => base_url() . 'captcha-images/',
			'font_path'     => './path/to/fonts/texb.ttf',
			'img_width'     => 200,
			'img_height'    => 40,
			'expiration'    => 500,
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
		$this->session->set_userdata('captchaword1', $captchaword);

		$dataGroup = array(
			"EnqueryData" => $data,
			'enquery_captcha_image' => $image
		);

		$this->load->view('Backend/DashHeader');
		$this->load->view('Backend/Pages/EnqueryAddEdit', $dataGroup);
		$this->load->view('Backend/Footer');
	}

	public function UpdateEnquery($id = "")
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
					'rules' => 'required|valid_email'
				),
				array(
					'field' => 'PhoneNumber',
					'label' => 'Phone Number',
					'rules' => 'required'
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

				$this->db->where('id', $this->input->post('id'));
				//$this->db->update('dealer_con', $data);

				if ($this->db->update('enquery', $data)) {
					echo json_encode(['success' => 'Record update successfully.']);
					//redirect('/admin/enquiries', 'refresh');
				} else {
					echo json_encode(['error' => 'error']);
				}
			}
		} else {
			echo json_encode(['error' => 'Captcha does not match.']);
			$this->session->set_flashdata('error', '<div class="alert alert-danger"></div>');
		}
	}

	public function DeleteEnquery()
	{

		// echo "<pre>";
		// echo print_r($_POST);
		// echo print_r($this->input->post('id'));
		// echo "</pre>";
		//die();
		if ($this->input->post('ID') != "") {
			$this->db->where('id', $this->input->post('ID'));
			$this->db->delete('enquery');
			echo json_encode(['success' => "success"]);
		} else {
			echo json_encode(['error' => "error"]);
		}
	}

	public function AddEdiUser($id = "")
	{
		$query = $this->db->get_where('dash_users', array('U_ID' => $id));
		$data['users']  = $query->row_array();

		// echo "<pre>";
		// echo print_r($query->row_array());
		// echo print_r($id);		
		// echo "</pre>";
		//die();
		$this->load->view('Backend/DashHeader');
		$this->load->view('Backend/Pages/UserAddEdit', $data);
		$this->load->view('Backend/Footer');
	}

	public function SubmitUserFormAddEdit($id = "")
	{
		// echo "khush";
		// echo "<pre>";
		// echo print_r($_POST);
		// echo "</pre>";
		// die();



		//check both captcha
		// echo "<pre>";
		// echo print_r($_POST);

		// echo "</pre>";
		// die();


		$id = $this->input->post('id');
		if (isset($id)) {
			$config = array(

				array(
					'field' => 'U_EMAIL',
					'label' => 'Email',
					'rules' => 'required|valid_email'
				),
				array(
					'field' => 'U_CONTACT',
					'label' => 'Phone Number',
					'rules' => 'required'
				),

			);
		} else {
			$config = array(
				array(
					'field' => 'U_USERNAME',
					'label' => 'User Name',
					'rules' => 'required|is_unique[dash_users.U_USERNAME]'
				),

				array(
					'field' => 'U_EMAIL',
					'label' => 'Email',
					'rules' => 'required|valid_email|is_unique[dash_users.U_EMAIL]'
				),
				array(
					'field' => 'U_CONTACT',
					'label' => 'Phone Number',
					'rules' => 'required'
				),
				array(
					'field' => 'U_PASSWORD',
					'label' => 'Password',
					'rules' => 'required'
				)

			);
		}

		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == FALSE) {

			$errors = validation_errors();

			echo json_encode(['error' => $errors]);
		} else {

			$data = array(
				'U_USERNAME' => $this->input->post('U_USERNAME'),
				'U_CONTACT' => $this->input->post('U_CONTACT'),
				'U_EMAIL' => $this->input->post('U_EMAIL'),
				'U_PASSWORD' => $this->input->post('U_PASSWORD'),
				'U_ACTIVE' => $this->input->post('U_ACTIVE'),
			);

			if (isset($id)) {
				$this->db->where('U_ID', $this->input->post('id'));
				//$this->db->update('dealer_con', $data);

				if ($this->db->update('dash_users', $data)) {
					echo json_encode(['success' => 'Record update successfully.']);
					//redirect('/admin/enquiries', 'refresh');
				} else {
					echo json_encode(['error' => 'error']);
				}
			} else {

				if ($this->db->insert('dash_users', $data)) {
					echo json_encode(['success' => 'Record Insert successfully.']);
					//redirect('/admin/enquiries', 'refresh');
				} else {
					echo json_encode(['error' => 'error']);
				}
			}
		}
	}

	public function DeleteUser()
	{

		// echo "<pre>";
		// echo print_r($_POST);
		// echo print_r($this->input->post('id'));
		// echo "</pre>";
		//die();
		if ($this->input->post('ID') != "") {
			$this->db->where('U_ID', $this->input->post('ID'));
			$this->db->delete('dash_users');
			echo json_encode(['success' => "success"]);
		} else {
			echo json_encode(['error' => "error"]);
		}
	}

	//END  VIEW DATA  
	//site user view
}

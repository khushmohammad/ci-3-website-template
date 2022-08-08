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

		$data['user']  =  $this->db->get('dash_users')->result_array();
		$this->load->view('Backend/DashHeader');
		$this->load->view('Backend/Pages/DealerView', $data);
		$this->load->view('Backend/Footer');
	}

	public function InsertDealer()
	{
		echo "Deaer";
	}


	//END  VIEW DATA  
	//site user view



}

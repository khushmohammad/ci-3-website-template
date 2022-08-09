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

		$data['dealer']  =  $this->db->get('dealer_con')->result_array();
		$this->load->view('Backend/DashHeader');
		$this->load->view('Backend/Pages/DealerView', $data);
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
		$this->load->view('Backend/DashHeader');
		$this->load->view('Backend/Pages/DealerAddEdit', $data);
		$this->load->view('Backend/Footer');
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


	//END  VIEW DATA  
	//site user view



}

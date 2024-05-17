<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
class About_tab_controller extends CI_Controller {  
	public function __construct()
	{
		parent::__construct();
		$this->load->model('About_tab_model','services');
		$this->load->model('User_model');
		$this->load->library(array("form_validation","session"));
	}

	public function index()
	{
		if($this->session->userdata('admin_username') != ''){	
			$this->load->helper('url');
			$rows['menu_name'] = array('name' => 'about_tab', 'about_tab' => 'main');
			// $rows['rows_values'] = $this->User_model->selectdata_asc('tbl_shipping_type');
			$this->load->view('back-end/about-tab',$rows); 
		}else{
				redirect(base_url('admin-login'));
		}
	}

	public function ajax_list()
	{
		$list = $this->services->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $person) { 
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $person->title;
			$row[] = $person->desig;
			 
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$person->id."'".')">Edit</a>
				';
		
			$data[] = $row;
		}
// <a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$person->id."'".')">Delete</a>
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->services->count_all(),
						"recordsFiltered" => $this->services->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}

	public function ajax_edit($id) 
	{
		$data = $this->services->get_by_id($id);

		//$data->dob = ($data->dob == '0000-00-00') ? '' : $data->dob; // if 0000-00-00 set tu empty for datepicker compatibility
		echo json_encode($data);
	}


	public function ajax_add()
	{
		
		$this->_validate();
		$data = array(
				'title' => $this->input->post('title'),
				'desig' => $this->input->post('desig'),
			);

		$insert = $this->services->save($data);
		echo json_encode(array("status" => TRUE));
	
	}

	public function ajax_update()
	{
		

		$this->_validate();
		$data = array(
				'title' => $this->input->post('title'),
				'desig' => $this->input->post('desig'),
				
			);
		$this->services->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	
	}

	public function ajax_delete($id)
	{
		$this->services->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('title') == '')
		{
			$data['inputerror'][] = 'title';
			$data['error_string'][] = 'Title is required';
			$data['status'] = FALSE;
		}
		if($this->input->post('desig') == '')
		{
			$data['inputerror'][] = 'desig';
			$data['error_string'][] = 'Designation is required';
			$data['status'] = FALSE;
		}
		
		
		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}


}
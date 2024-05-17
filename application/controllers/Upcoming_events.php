<?php   
defined('BASEPATH') OR exit('No direct script access allowed');
class Upcoming_events extends CI_Controller {  
	public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Upcoming_events_model','slider');
		$this->load->model('User_model') ;
		$this->load->library(array("form_validation","session"));
	}
	public function index()
	{
		if($this->session->userdata('admin_username') != ''){	 
			$this->load->helper('url'); 
			$rows['menu_name'] = array('name' => 'upcoming-events', 'sub_name' => 'main');  
			// $rows['rows_values'] = $this->User_model->selectdata_asc('tbl_shipping_type');
			$this->load->view('back-end/upcoming-events',$rows); 
		}else{
				redirect(site_url('admin-login'));
		}
	}
	public function ajax_list()
	{
		$this->load->helper('url');
		$list = $this->slider->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $person) {
			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $person->sub_title;	
			$row[] = $person->title;
			// $row[] = $person->desig;	
			$row[] = $person->desig;	
			if($person->image) 
				$row[] = '<div class="col-sm-6"><a href="'.base_url('upload/our-mission/'.$person->image).'" target="_blank"><img src="'.base_url('upload/our-mission/'.$person->image).'"  width="150" height="150" /></a></div>';
			else
				$row[] = '(No photo)';
			//add html for action
			$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
				  ';
			$data[] = $row;
		}
// 		<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$person->id."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>
		$output = array(
						"draw" => $_POST['draw'],
						"recordsTotal" => $this->slider->count_all(),
						"recordsFiltered" => $this->slider->count_filtered(),
						"data" => $data,
				);
		//output to json format
		echo json_encode($output);
	}
	public function ajax_edit($id)
	{
		$data = $this->slider->get_by_id($id);
		
		echo json_encode($data);
	}
	public function ajax_add()
	{
		$this->_validate();
		$data = array(
				'sub_title' => $this->input->post('sub_title'),
				'title' => $this->input->post('title'),
				'desig' => $this->input->post('desig'),
				'age' => $this->input->post('age'),
				'open_for' => $this->input->post('open_for'),
				'venue' => $this->input->post('venue'),
				'stime' => $this->input->post('stime'),
				'etime' => $this->input->post('etime'),
				'fdate' => $this->input->post('fdate'),
				'tdate' => $this->input->post('tdate'),
				'audition' => $this->input->post('audition'),
				
				
			);
		if(!empty($_FILES['photo']['name']))
		{
			$upload = $this->_do_upload();
			$data['image'] = $upload;
		}
		$insert = $this->slider->save($data);
		echo json_encode(array("status" => TRUE));
	}
	public function ajax_update()
	{
		$this->_validate();
		$data = array(
				'sub_title' => $this->input->post('sub_title'),
				'title' => $this->input->post('title'),
				'desig' => $this->input->post('desig'),
				'age' => $this->input->post('age'),
				'open_for' => $this->input->post('open_for'),
				'venue' => $this->input->post('venue'),
				'venue' => $this->input->post('venue'),
				'stime' => $this->input->post('stime'),
				'etime' => $this->input->post('etime'),
				'fdate' => $this->input->post('fdate'),
				'tdate' => $this->input->post('tdate'),
				'audition' => $this->input->post('audition'),
				
			);
		if($this->input->post('remove_photo')) // if remove photo checked
		{
			if(file_exists('upload/our-mission/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
				unlink('upload/our-mission/'.$this->input->post('remove_photo'));
			$data['image'] = '';
		}
		if(!empty($_FILES['photo']['name']))
		{
			$upload = $this->_do_upload();
			//delete file
			$person = $this->slider->get_by_id($this->input->post('id'));
			if(file_exists('upload/our-mission/'.$person->image) && $person->image)
				unlink('upload/our-mission/'.$person->image);
			$data['image'] = $upload;
		}
		$this->slider->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}
	public function ajax_delete($id)
	{
		//delete file
		$person = $this->slider->get_by_id($id);
		if(file_exists('upload/our-mission/'.$person->image) && $person->image)
			unlink('upload/our-mission/'.$person->image);
		$this->slider->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}
	private function _do_upload()
	{ 
		$config['upload_path']          = 'upload/our-mission/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|webp';
        $config['max_size']             = 100000; //set max size allowed in Kilobyte
        $config['max_width']            = 200000; // set max width image allowed
        $config['max_height']           = 200000; // set max height allowed
        $config['file_name']            = round(microtime(true) * 1000); //just milisecond timestamp fot unique name

        $this->load->library('upload', $config);
        if(!$this->upload->do_upload('photo')) //upload and validate
        {
            $data['inputerror'][] = 'photo';
			$data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
			$data['status'] = FALSE;
			echo json_encode($data); 
			exit();
		}
		return $this->upload->data('file_name');
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
			$data['error_string'][] = 'desig is required';
			$data['status'] = FALSE;
		}
		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}
}
 
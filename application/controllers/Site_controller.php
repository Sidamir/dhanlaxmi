<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_controller extends CI_Controller {

	public function __construct(){  
		parent::__construct(); 
		$this->load->helper("url");
		$this->load->library(array("form_validation","session"));
		$this->load->model('User_model');
		$this->load->library('pagination');
		$this->load->library('email');
	} 

	
	public function index()
	{
		$rows['menu'] = array('name' => 'home');
		$rows['title'] = "Sanskrutik Mahotsav";
		// $rows['banner'] = $this->User_model->selectdata_asc('tbl_banner_area');
		// $rows['events'] = $this->User_model->selectdata_asc('tbl_events');
		// $rows['upcoming_events'] = $this->User_model->selectdata_asc('tbl_upcoming_events');
		// print_r($rows['events']);
		$this->load->view('front/index', $rows);
	}

	public function pass_generate($id)
	{
		$rows['menu'] = array('name' => 'home');
		$rows['title'] = "Pass Generate | Sanskrutik Mahotsav";
		$rows['pass'] = $this->User_model->get_record('tbl_generatepass as ne','ne.id="'.$id.'"');
		// print_r($rows['pass']);
		$this->load->view('front/pass-generate', $rows);
	}

	public function contact_submit()
	{
		$data = array(
			'name' => $this->input->post('name'),
			'phone' => $this->input->post('phone'),
			'subject' => $this->input->post('subject'),
			'email' => $this->input->post('email'),
			'message' => $this->input->post('message'),
		);
		// print_r($data);
		// exit();

			// print_r($data);exit();

		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$to = 'padmavatieventsandfilms@gmail.com';
			// $subject = 'Message from Contact Form';
			// $name = $_POST['your_name'];
			// $number = $_POST['your_number'];

			// $email = $_POST['your_email'];
			// $message = $_POST['your_message'];

			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$number = $this->input->post('phone');
			$message = $this->input->post('message');



			$emailContent .= 
			'
			<!DOCTYPE html>
			<html>
			<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title></title>
			</head>
			<body>

			<table style="font-family: Arial, Times New Roman;width: 600px; border-collapse: collapse;border: 1px solid #1d2a4d;padding: 8px;" align="center">
			<thead style="border: 1px solid #1d2a4d;">
			<tr style="color: #fff; text-align: center;">
			<th colspan="2" style="padding: 10px 5px; font-weight: bold; background: #1d2a4d;color: #fff; font-size: 28px;">kalaaanisanskrutikmahotsav</th>

			</tr>
			</thead style="border: 1px solid #1d2a4d;">
			<tbody>
			<tr>
			<th style="text-align: left; padding: 8px; width: 120px;">Name</th>
			<td style="border: 1px solid #1d2a4d; padding: 8px;">'.$name.'</td>
			</tr>

			<tr style="border: 1px solid #1d2a4d;">
			<th style="text-align: left; padding: 8px;">Email</th>
			<td style="border: 1px solid #1d2a4d; padding: 8px;">'.$email.'</td>
			</tr>

			<tr style="border: 1px solid #1d2a4d;">
			<th style="text-align: left; padding: 8px;">Phone</th>
			<td style="border: 1px solid #1d2a4d; padding: 8px;">'.$number.'</td>
			</tr>

			<tr style="border: 1px solid #1d2a4d;">
			<th style="text-align: left; padding: 8px;">Subject</th>
			<td style="border: 1px solid #1d2a4d; padding: 8px;">'.$subject.'</td>
			</tr>

			<tr style="border: 1px solid #1d2a4d;">
			<th style="text-align: left; padding: 8px;">Message</th>
			<td style="border: 1px solid #1d2a4d; padding: 8px;">'.$message.'</td>
			</tr>
			
			</tbody>
			</table>

			</body>
			</html>
			';

			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			// More headers
			$headers .= 'From: '.$email;



			if (mail($to, $subject, $emailContent, $headers)) {
				$this->User_model->insertdata('tbl_contect',$data);
				$this->session->set_flashdata('success_contact', 'Contact Submitted Successfully.');
				redirect(base_url());
			}
		}

        // $this->User_model->insertdata('tbl_contect',$data);
		// $this->session->set_flashdata('success_contact', 'Contact Submitted Successfully.');
		// redirect(base_url());
        // echo "Success";
		}

		public function generate_pass(){
		// if($this->session->userdata('maan_username') != ''){

			$email_check=$this->User_model->email_check($this->input->post('email'));
			$mobile_check=$this->User_model->mobile_no_check($this->input->post('phone'));

			include('phpqrcode/qrlib.php');

			if($mobile_check){
				if($email_check){

			// $n = 6;
			// $g_otp = $this->generateNumericOTP($n);
					$mobile_number = $this->input->post('phone');    
					$data = array(
						'name' => $this->input->post('name'),
						'phone' => $this->input->post('phone'),
						'age' => $this->input->post('age'),
						'email' => $this->input->post('email'),
						'profession' => $this->input->post('profession'),
						'message' => $this->input->post('message'),
					);

					$this->session->set_userdata($data);

					$product_id = $this->User_model->insert_pro($data);

					$pcode = $product_id;


		// $url = 'http://localhost/sanskrutik-mahotsav/pass-generate/'.$product_id;
					$url = 'https://kalaaanisanskrutikmahotsav.in/pass-generate/'.$product_id;

		$details = $url; // Combine the details with a delimiter '|'
		$roots = './upload/qr_code/';
		$file = $roots . uniqid() . ".png";
		$rqcode = uniqid() . ".png";

		$ecc = 'L';
		$pixel_Size = 10;
		$frame_Size = 10;
		error_reporting(E_ALL);

		QRcode::png($details, $file, $ecc, $pixel_Size, $frame_Size);

		$updateqr = array(
			'qrImage' => $file	
		);

			// redirect(base_url('user-otp'));

		$this->User_model->updatedata('tbl_generatepass',$updateqr,$product_id);
		redirect(base_url('pass-generate/'. $product_id));



	}else{
		$this->session->set_flashdata('error_msg', 'This Email ID already Register,Try again.');
		redirect(base_url());
	}
}else{
	$this->session->set_flashdata('error_msg', 'This Mobile Number already Register,Try again.');
	redirect(base_url());
} 

		// }else{
		// 	redirect(base_url('login'));
		// }
}

	/*
    public function generate_pass()
	{

		include('phpqrcode/qrlib.php');

		$data = array(
			'name' => $this->input->post('name'),
			'phone' => $this->input->post('phone'),
			'age' => $this->input->post('age'),
			'email' => $this->input->post('email'),
			'profession' => $this->input->post('profession'),
			'message' => $this->input->post('message'),
		);
	

		$product_id = $this->User_model->insert_pro($data);
		


		
		$pcode = $product_id;
		// $pqnt = $this->input->post('total_stock');

		// $url = 'http://localhost/sanskrutik-mahotsav/pass-generate/'.$product_id;
		$url = 'https://kalaaanisanskrutikmahotsav.in/pass-generate/'.$product_id;
		

		$details = $url; // Combine the details with a delimiter '|'
		$roots = './upload/qr_code/';
		$file = $roots . uniqid() . ".png";
		$rqcode = uniqid() . ".png";

		$ecc = 'L';
		$pixel_Size = 10;
		$frame_Size = 10;
		error_reporting(E_ALL);

		QRcode::png($details, $file, $ecc, $pixel_Size, $frame_Size);

		$updateqr = array(
			'qrImage' => $file	
		);

		// print_r($updateqr);
		// exit();


		// mail($to,$subject,$txt,$headers);
        $this->User_model->updatedata('tbl_generatepass',$updateqr,$product_id);
		$this->session->set_flashdata('success_pass', 'Pass Generate Successfully.');
		redirect(base_url('pass-generate/'. $product_id));
        // echo "Success";
    }
    */
}
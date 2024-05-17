<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Authenticate extends CI_Controller {
	
	public function __construct(){  
		parent::__construct(); 
		$this->load->helper("url");
		$this->load->library(array("form_validation","session"));
		$this->load->model(array('User_model'));
		$this->load->library('pagination');
	} 

	public function index()
	{
		// .... Admin Login Section 
		if ( ! $this->session->userdata('admin_logged_in'))
		{ 
			redirect(base_url('admin-login'));
		}else{
			if($this->session->userdata('admin_usertype')==1 || $this->session->userdata('admin_usertype')==3 )
			{
				$rows['menu_name'] = array('name' => 'dashboard');
				$rows['register_customer'] = $this->User_model->selectdata('tbl_contect');
				$rows['register_admin'] = $this->User_model->selectdata('tbl_admin');
				$this->load->view('back-end/dashboard',$rows);

			}else{ 

			}
		}
		
		// .... End Admin Login Section

		// .... Start User Login Section 

	}

	public function login_form(){
			$this->load->view('back-end/signin');
	}
	
	public function user_login_form(){
			$this->load->view('main_site/login');
	}
	

	public function login_submit(){ 
			$check_data = array(
				array(
					'field' => 'username',
					'label' => 'UserName',
					'rules' => 'required'
				),
				array(
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'required'
				)
			); 
			$this->form_validation->set_rules($check_data);
			if($this->form_validation->run()==FALSE){
				$this->login_form();
			}else{
				$username = $this->input->post('username');
				$password = md5($this->input->post('password'));
				$check_login = $this->User_model->get_admin($username,$password);

				if($check_login<>'')
				{
					if($check_login[0]['status']==1){
						if($check_login[0]['usertype']==1){
							$data = array(
								'admin_logged_in'  =>  TRUE,
								'admin_username' => $check_login[0]['username'],
								'admin_usertype' => $check_login[0]['usertype'],
								'admin_userid' => $check_login[0]['id']
							);
							$this->session->set_userdata($data);
							redirect(base_url('admin-dashboard'));
						}
						elseif($check_login[0]['usertype']==3){
							$data = array(
								'sub_admin_logged_in'  =>  TRUE,
								'sub_admin_username' => $check_login[0]['username'],
								'sub_admin_usertype' => $check_login[0]['usertype'],
								'sub_admin_userid' => $check_login[0]['id']
							);
							$this->session->set_userdata($data);
							redirect('/admin-dashboard');
						} 
						else{
							$this->session->set_flashdata('login_error', 'Sorry, you cant login right now.', 300);
							redirect(base_url().'admin-login');
						}

					}
					else{
						$this->session->set_flashdata('login_error', 'Sorry, your account is blocked.', 300);
						redirect(base_url().'admin-login');
					}

				}
				else{
					$this->session->set_flashdata('login_error', 'Please check your username or password and try again.', 300);
					redirect(base_url().'admin-login');
				}

			} 
		} 




	public function dashboard(){
		$rows['menu_name'] = array('name' => 'dashboard');
		// $rows['rows_values'] = $this->User_model->selectdata_asc('tbl_shipping_type');
		$this->load->view('back-end/dashboard',$rows);
	}

	public function logout(){

		$this->session->userdata('admin_username');

			$users = $this->session->userdata('admin_usertype');
			if($users == 1){
	            $this->session->unset_userdata('admin_username');
	            $this->session->sess_destroy();
    			redirect(base_url('admin-login'));
	        }
	}
	
	// Suraj code start

	// career
	public function CareerBack(){
	    if($this->session->userdata('admin_username') != ''){
	    $rows['career_det'] = $this->User_model->CareerData();
		$rows['basic_product_values'] = $this->User_model->basic_product();
		// print_r($rows);exit;
		$rows['menu_name'] = array('name' => 'career');
		$rows['rows_values'] = $this->User_model->selectdata_asc('tbl_shipping_type');
		$this->load->view('back-end/career',$rows);
	}else{
			redirect(base_url('admin-login'));
		} 
	}

	 public function CareerDelete($id){
 			if($this->session->userdata('admin_username') != ''){
			 							
					
					$this->User_model->DeleteCareerData($id);
					redirect(base_url('Authenticate/CareerBack'));
 		}else{
						redirect(base_url('admin-login'));
		}
 	}

 	// contact

 		public function admin_pass_details(){
		    if($this->session->userdata('admin_username') != ''){
		    $rows['contact_data'] = $this->User_model->selectdata('tbl_generatepass');
			$rows['menu_name'] = array('name' => 'pass-details');
			$rows['dates'] = array('start'=>'','end'=>'');
			$this->load->view('back-end/pass-details',$rows);
		}else{
				redirect(base_url('admin-login'));
			} 
		} 

		public function ContactBack(){
		    if($this->session->userdata('admin_username') != ''){
		    $rows['contact_data'] = $this->User_model->ContactData();
			$rows['menu_name'] = array('name' => 'contact');
			$rows['dates'] = array('start'=>'','end'=>'');
			$this->load->view('back-end/contact',$rows);
		}else{
				redirect(base_url('admin-login'));
			} 
		} 

		public function ContactDelete($id){
	 			if($this->session->userdata('admin_username') != ''){
				$this->User_model->DeleteContactData($id);
				redirect(base_url('Authenticate/ContactBack'));
	 		}else{
				redirect(base_url('admin-login'));
			}
 		} 
 		public function ContactFilter(){
		    if($this->session->userdata('admin_username') != ''){
		    // $rows['contact_data'] = $this->User_model->ContactData();

		    $start_date = $this->input->post('from_date');
		    $end_date = $this->input->post('to_date');
		    $rows['contact_data'] = $this->User_model->dateFilter('tbl_contect',$start_date,$end_date);
		    $rows['dates'] = array('start'=>$start_date,'end'=>$end_date);
			$rows['menu_name'] = array('name' => 'contact');
			$this->load->view('back-end/contact',$rows);
		}else{
				redirect(base_url('admin-login'));
			} 
		} 

 	
 	
 	// coupon
 	public function CouponBack(){
		    if($this->session->userdata('admin_username') != ''){
		    $rows['coupon_data'] = $this->User_model->CouponData();
			// $rows['basic_product_values'] = $this->User_model->basic_product();
			// print_r($rows);exit;
			$rows['menu_name'] = array('name' => 'coupon-code');
			// $rows['rows_values'] = $this->User_model->selectdata_asc('tbl_shipping_type');
			$this->load->view('back-end/coupon',$rows);
		}else{
				redirect(base_url('admin-login'));
			} 
		}

		public function Add_Coupon(){
	 			if($this->session->userdata('admin_username') != ''){
				$rows['menu_name'] = array('name' => 'coupon-code');
				$this->load->view('back-end/add-coupon',$rows);
	 		}else{
				redirect(base_url('admin-login'));
			}
 	}

 	 public function submit_CouponData(){

        $cou_code = $this->input->post('cou_code');
        $cou_type = $this->input->post('cou_type');
        $disc = $this->input->post('disc');
        $cou_status = $this->input->post('cou_status');

        $items = array(
            'coupon_code' => $cou_code,
            'coupon_type' => $cou_type,
            'discount_per' => $disc,
            'status' => $cou_status  
        );

        $this->User_model->Insert_coupon($items); 

        redirect(site_url('Authenticate/CouponBack'));
    }


 	public function update_display_coupon($id){
		    if($this->session->userdata('admin_username') != ''){
		    $rows['user_values'] = $this->User_model->getValueById($id); 
		    // print_r($rows);exit;
			$rows['menu_name'] = array('name' => 'coupon-code');
			$this->load->view('back-end/edit-coupon',$rows);
		}else{
				redirect(base_url('admin-login'));
			} 
		}

		public function Updated_CouponData(){

        $cou_code = $this->input->post('cou_code');
        $cou_type = $this->input->post('cou_type');
        $disc = $this->input->post('disc');
        $cou_status = $this->input->post('cou_status');
        $id = $this->input->post('id');

        $item = array(
            'coupon_code' => $cou_code,
            'coupon_type' => $cou_type,
            'discount_per' => $disc,
            'status' => $cou_status  
        );

        $this->User_model->update_coup_data($id,$item);

        redirect(site_url('Authenticate/CouponBack'));
    }
					

		 public function CouponDelete($id){
	 			if($this->session->userdata('admin_username') != ''){
				$this->User_model->DeleteCoponData($id);
				redirect(base_url('Authenticate/CouponBack'));
	 		}else{
				redirect(base_url('admin-login'));
			}
 	}

 	// Suraj code end


	

	// Products
	public function topics(){
	    if($this->session->userdata('admin_username') != ''){
		 $rows['get_val']=$this->User_model->selectdata_asc('tbl_courses');
		// print_r($rows);exit;
		$rows['menu_name'] = array('name' => 'topics');
		// $rows['rows_values'] = $this->User_model->selectdata_asc('tbl_shipping_type');
		$this->load->view('back-end/topics',$rows);
	}else{
			redirect(base_url('admin-login'));
		} 
	}
	public function Add_topics($id)
	{
	    if($this->session->userdata('admin_username') != ''){
	    $rows['menu_name'] = array('name' => 'topics');
	    $rows['get_record'] = $this->User_model->get_record('tbl_courses as ne','ne.id="'.$id.'"');
	    // $rows['get_val']=$this->User_model->selectdata('tbl_courses');
	    // $rows['rows_values'] = $this->User_model->selectdata_asc('tbl_shipping_type');
	    // $rows['get_val1']=$this->User_model->selectdata_asc('tbl_pro_weight');
	    $this->session->set_flashdata("added_topic","topics add successfully....!");
		$this->load->view('back-end/add-topics',$rows);
	    }else{
			redirect(base_url('admin-login'));
		}
	}

	public function edit_topics($id)
	{
	    if($this->session->userdata('admin_username') != ''){
	    $rows['menu_name'] = array('name' => 'topics');
	    $rows['get_val'] = $this->User_model->get_record_by_id('tbl_topic_head as ne','ne.course_id="'.$id.'"');
	    // $rows['get_val']=$this->User_model->selectdata('tbl_topic_head');
	    // $rows['rows_values'] = $this->User_model->selectdata_asc('tbl_shipping_type');
	    // $rows['get_val1']=$this->User_model->selectdata_asc('tbl_pro_weight');
		$this->load->view('back-end/edit-topics',$rows);
	    }else{
			redirect(base_url('admin-login'));
		}
	}

	public function productsView($id){
	if($this->session->userdata('admin_username') != ''){
		$rows['get_record'] = $this->User_model->get_record('products as ne','ne.pro_id="'.$id.'"');
		$rows['menu_name'] = array('name' => 'products');
		$rows['rows_values'] = $this->User_model->selectdata_asc('tbl_shipping_type');
		$this->load->view('back-end/product-view',$rows);
	}else{
			redirect(base_url('admin-login'));
		}
	} 

	public function topic_submit(){
	    if($this->session->userdata('admin_username') != ''){
        
		$data = array(
			'course_id' => $this->input->post('c_id'),
			'topic_head' => $this->input->post('topic_head')
			
		);

		$product_id=$this->User_model->insert_basic_product($data);
		
// multipul product add

		$count = count($this->input->post('title'));

//Getting post values

$title=$this->input->post('title');
	
if($count >= 1)
{
	for($i=0; $i<$count; $i++)
	{
		// echo $pro_weight[$i].'<br/>';
		$products_val = array(
			'head_id' => $product_id,
			'topic_points' => $title[$i],
			
		);
		
		
		 		$this->User_model->insertdata('tbl_topic_body',$products_val);
		  }
	$this->session->set_flashdata("success_msg","topics add successfully....!");
	redirect(base_url('topics'));


//echo "<script>alert('Skills inserted successfully');</script>"; 

}

	    }else{
			redirect(base_url('admin-login'));
		}
		
	} 

	

	public function editTopicsBody($id)
	{
	    if($this->session->userdata('admin_username') != ''){

	    $rows['menu_name'] = array('name' => 'topics');
	    
	    $rows['get_record'] = $this->User_model->get_record('tbl_topic_head as ne','ne.id="'.$id.'"');

		$this->load->view('back-end/update-topics',$rows);
	    }else{
			redirect(base_url('admin-login'));
		}
	}

	public function product_update(){
    if($this->session->userdata('admin_username') != ''){
			
		$id = $this->input->post('p_id');

		$course_id = $this->input->post('c_id');
				


		
			
			$data = array(
			'course_id' => $this->input->post('c_id'),
			'topic_head' => $this->input->post('topic_head')
			
		);
			
			
			// exit();
			// echo '<pre>';
			// print_r($data);
			$this->User_model->updatedata('tbl_topic_head',$data,$id);

			// multipul product add

		$count = count($this->input->post('title'));

//Getting post values

$title=$this->input->post('title');
$pid = $this->input->post('pid');
	


if($count >= 1)
{
	for($i=0; $i<$count; $i++)
	{
		// echo $pro_weight[$i].'<br/>';
		$u_pid = $pid[$i];
		$products_val = array(
			'head_id' => $id,
			'topic_points' => $title[$i],
		);

		// echo '<pre>';
		// 	print_r($products_val);
		
		 $product_weight_check=$this->User_model->product_weight_check($pid[$i],$id);

		 if($product_weight_check){
		 	if($title[$i] != ""){
		 	 // echo 'add value';
		 	$this->User_model->insertdata('tbl_topic_body',$products_val);
		 }else{
		 	 // echo 'Ignore';
		 }
		  		
		 		
		  }else{

		  	 // echo 'Update value';
		  $this->User_model->update_basic_product($u_pid,$products_val);
		
		 		
		  }	
		 	
		  	
		 		
		 

		 
	}


		}	
			 
			// exit();
 

		$this->session->set_flashdata('success_msg', 'Product Update successfully.');
		redirect(base_url('edit-topics/'.$course_id));
	    }else{
			redirect(base_url('admin-login'));
		}
	}
 
 public function product_single_delete($id){
 			if($this->session->userdata('admin_username') != ''){
			 							
					
					$this->User_model->deletedata('tbl_topic_body',$id);
					
							
					echo json_encode(array("status" => TRUE));
 		}else{
						redirect(base_url('admin-login'));
		}
 	}
// public function product_delete($id){
//  			if($this->session->userdata('admin_username') != ''){
// 			 		$person = $this->User_model->get_by_id($id);
// 					if(file_exists('upload/products/'.$person->image1) && $person->image1)
// 						unlink('upload/products/'.$person->image1);
// 					if(file_exists('upload/products/'.$person->image2) && $person->image2)
// 						unlink('upload/products/'.$person->image2);
// 					if(file_exists('upload/products/'.$person->image3) && $person->image3)
// 						unlink('upload/products/'.$person->image3);
					
					
// 					$this->User_model->deletedata('tbl_products',$id);
// 					// $this->User_model->deletedata_product('tbl_products',$id);
					
							
// 					echo json_encode(array("status" => TRUE));
//  		}else{
// 						redirect(base_url('admin-login'));
// 		}
//  	}

 	public function delete_pass_details($id){

 		$this->User_model->deletedata('tbl_generatepass',$id);
 		echo json_encode(array("status" => TRUE));
 		
 	}

 	public function delete_contact($id){

 		$this->User_model->deletedata('tbl_contect',$id);
 		echo json_encode(array("status" => TRUE));
 		
 	}

 	public function topic_head_delete($id){
 			if($this->session->userdata('admin_username') != ''){
			 		
					
					$this->User_model->deletedata('tbl_topic_head',$id);
					$this->User_model->deletedata_product('tbl_topic_body',$id);
					
							
					echo json_encode(array("status" => TRUE));
 		}else{
						redirect(base_url('admin-login'));
		}
 	}

 	

 	// public function product_image_delete($id){
 	// 		if($this->session->userdata('admin_username') != ''){
	// 		 		$person = $this->User_model->get_by_id($id);
	// 				if(file_exists('upload/product_images/'.$person->image) && $person->image)
	// 					unlink('upload/product_images/'.$person->image);
					
	// 				$data = array('image' => '');
	// 				$this->User_model->deletedataimage('basic_product',$data,$id);
					
					
							
	// 				echo json_encode(array("status" => TRUE));
 	// 	}else{
	// 					redirect(base_url('admin-login'));
	// 	}
 	// }

 	// public function product_image_delete2($id){
 	// 		if($this->session->userdata('admin_username') != ''){
	// 		 		$person = $this->User_model->get_by_id($id);
	// 				if(file_exists('upload/product_images/'.$person->image2) && $person->image2)
	// 					unlink('upload/product_images/'.$person->image2);
					
	// 				$data = array('image2' => '');
	// 				$this->User_model->deletedataimage('basic_product',$data,$id);
					
					
							
	// 				echo json_encode(array("status" => TRUE));
 	// 	}else{
	// 					redirect(base_url('admin-login'));
	// 	}
 	// }
 	// public function product_image_delete3($id){
 	// 		if($this->session->userdata('admin_username') != ''){
	// 		 		$person = $this->User_model->get_by_id($id);
	// 				if(file_exists('upload/product_images/'.$person->image3) && $person->image3)
	// 					unlink('upload/product_images/'.$person->image3);
					
	// 				$data = array('image3' => '');
	// 				$this->User_model->deletedataimage('basic_product',$data,$id);
					
					
							
	// 				echo json_encode(array("status" => TRUE));
 	// 	}else{
	// 					redirect(base_url('admin-login'));
	// 	}
 	// }

 	public function product_image_delete4($id){
 			if($this->session->userdata('admin_username') != ''){
			 		$person = $this->User_model->get_by_id($id);
					if(file_exists('upload/product_images/'.$person->image4) && $person->image4)
						unlink('upload/product_images/'.$person->image4);
					
					$data = array('image4' => '');
					$this->User_model->deletedataimage('basic_product',$data,$id);
					
					
							
					echo json_encode(array("status" => TRUE));
 		}else{
						redirect(base_url('admin-login'));
		}
 	}



 	// Basic Products
	// public function basic_products(){
	//     if($this->session->userdata('admin_username') != ''){ 
	// 	$rows['basic_product_values'] = $this->User_model->basic_product();
	// 	// print_r($rows);exit;
	// 	$rows['menu_name'] = array('name' => 'products');
	// 	$this->load->view('back-end/products/all-products',$rows);
	// }else{
	// 		redirect(base_url('admin-login'));
	// 	}
	// }
	// public function add_basic_products()
	// {
	//     if($this->session->userdata('admin_username') != ''){
	//     $rows['menu_name'] = array('name' => 'products');
	//     $rows['get_val']=$this->User_model->selectdata('basic_product');
	// 	$this->load->view('back-end/products/add_basic_products',$rows);
	//     }else{ 
	// 		redirect(base_url('admin-login'));
	// 	}
	// }
	// public function basic_product_submit(){
        
 //        $product_id = $this->input->post('pro_id');
 //        $pro_weight	= $this->input->post('pro_weight');	

	// 	$data = array(
	// 		'pro_id' => $this->input->post('pro_id'),
	// 		'pro_weight' => $this->input->post('pro_weight'),
	// 		'pro_price' => $this->input->post('pro_price'),
	// 		'mrp_price' => $this->input->post('pro_mrp'),
	// 		'stocks' => $this->input->post('stock'),
	// 		'gst' => $this->input->post('gst'),
	// 	);

	// 	 $product_weight_check=$this->User_model->product_weight_check($pro_weight,$product_id);

	// 	 if($product_weight_check){
	// 	 		$this->User_model->insertdata('products',$data);
	// 	 		$this->session->set_flashdata("success_msg","Product add successfully....!");
	// 			redirect(base_url('products'));
	// 	 }else{
	// 	 		$this->session->set_flashdata("error","Product is already add into ".$pro_weight." , Please Check....!");
	// 			redirect(base_url('products'));
		 		
	// 	 }	
		

		
		
	// }
	// public function fetch_basic_product($id)
	// {
	//     if($this->session->userdata('admin_username') != ''){
	//    	$rows['single_user'] = $this->User_model->getPoductValueById($id); 
	//    	 $rows['get_val']=$this->User_model->selectdata('basic_product');
	// 	$rows['menu_name'] = array('name' => 'basic-products');
	// 	$this->load->view('back-end/products/edit_product',$rows);
	//     }else{
	// 		redirect(base_url('admin-login'));
	// 	}
	// }
	// public function update_basic_product(){
			
	// 		$id = $this->input->post('id');
						
	// 		$data = array(
	// 		'pro_id' => $this->input->post('pro_id'),
	// 		'pro_weight' => $this->input->post('pro_weight'),
	// 		'pro_price' => $this->input->post('pro_price'),
	// 		'mrp_price' => $this->input->post('pro_mrp'),
	// 		'stocks' => $this->input->post('stock'),
	// 		'gst' => $this->input->post('gst'),
	// 	);

	// 	$this->User_model->update_basic_product($id,$data);
	// 	$this->session->set_flashdata("success_msg","Product add successfully....!");
	// 	redirect(base_url('Authenticate/basic_products'));

	// }
	// public function delete_basic_product($id)
	// 	{  

	// 	 $this->User_model->delete_basic_product($id);
	// 	 $this->session->set_flashdata("error","Product delete successfully....!");
	// 	 redirect(base_url('Authenticate/basic_products'));
	// 	}

/*
	public function offer(){
		 if($this->session->userdata('admin_username') != ''){
		
		$rows['menu_name'] = array('name' => 'offer');
		$rows['offer_values'] = $this->User_model->offer();
		$this->load->view('back-end/offer/offer', $rows);
	    }  else{
			redirect(base_url('admin-login'));
		}
		
	}
	public function Add_offer()
	{
	    if($this->session->userdata('admin_username') != ''){
	    $rows['menu_name'] = array('name' => 'offer');
	    $rows['get_offer']=$this->User_model->selectdata('offer');
	    // $rows['get_val1']=$this->User_model->selectdata('tbl_sub_category');
		$this->load->view('back-end/offer/add_offer',$rows);
	    }else{
			redirect(base_url('admin-login'));
		}
	}


	public function offer_submit(){
	    if($this->session->userdata('admin_username') != ''){
        
	    	$_FILES['photo']['name'];
		
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['max_size'] = '2000';
				$config['upload_path'] = './main_site_assets/upload/product_images/';
				$new_name = time().'_'.$_FILES["photo"]['name'];
				$config['file_name'] = $new_name;
				$this->load->library("upload",$config);
				if($this->upload->do_upload("photo")){
					$resume = $this->upload->data();
					$path = $resume['file_name'];
				}else{
					$path = '';
				}



		$data = array(
			'image' => $path,
			'category' => $this->input->post('offerscategory'),
			'id' => $this->input->post('id'),
		);

		$this->User_model->insertdata('offer',$data);
		$this->session->set_flashdata('success_msg', 'Product add successfully.');
		redirect(base_url('offer'));
	    }else{
			redirect(base_url('admin-login'));
		}
		
	}*/
function fetch_sub_cat()
 {
  if($this->input->post('country_id'))
  {
   echo $this->User_model->fetch_sub($this->input->post('country_id'));
  }
 } 


public function user_login_submit(){ 
			$check_data = array(
				array(
					'field' => 'username',
					'label' => 'UserName',
					'rules' => 'required'
				),
				array(
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'required'
				)
			);
			$this->form_validation->set_rules($check_data);
			if($this->form_validation->run()==FALSE){
				$this->user_login_form();
			}else{
				$username = $this->input->post('username');
				$password = md5($this->input->post('password'));
				$check_login = $this->User_model->get_admin($username,$password);

				if($check_login<>'')
				{
					if($check_login[0]['status']==1){
						if($check_login[0]['usertype']==2){
							$data = array(
								'main_logged_in'  =>  TRUE,
								'main_username' => $check_login[0]['username'],
								'main_usertype' => $check_login[0]['usertype'],
								'main_userid' => $check_login[0]['id']
							);
							$this->session->set_userdata($data);
							redirect('/');
						}else{
							$this->session->set_flashdata('login_error', 'Sorry, you cant login right now.', 300);
							redirect(base_url().'login');
						}

					}
					else{
						$this->session->set_flashdata('login_error', 'Sorry, your account is blocked.', 300);
						redirect(base_url().'admin-login');
					}

				}
				else{
					$this->session->set_flashdata('login_error', 'Please check your username or password and try again.', 300);
					redirect(base_url().'login');
				}

			} 
		}
		public function userLogout(){

		$this->session->userdata('main_username');

			$users = $this->session->userdata('main_usertype');
			if($users == 2){
	            $this->session->unset_userdata('main_username');
	            $this->session->unset_userdata('main_logged_in');
	            $this->session->unset_userdata('main_usertype');
	            $this->session->unset_userdata('main_userid');
	            //$this->session->sess_destroy();
    			redirect(base_url(''));
	        }
	}

	function fetch_product_price(){
  		if($this->input->post('country_id')){
   			echo $this->User_model->fetch_price($this->input->post('country_id'));
  		}
 	}

 	//.... Admin all Orders 

 	public function allOrders(){
 		 if($this->session->userdata('admin_username') != ''){
		$rows['orders_values'] = $this->User_model->selectdata('orders');
		// print_r($rows);exit;
		$rows['rows_values'] = $this->User_model->selectdata_asc('tbl_shipping_type');
		$rows['menu_name'] = array('name' => 'order', 'sub_name' => 'order');
		$this->load->view('back-end/order',$rows);
	}else{
			redirect(base_url('admin-login'));
		}  
 	}

 	public function orderAction($order_id){
 		if($this->session->userdata('admin_username') != ''){
			$rows['order_id'] =array('order_id' => $order_id);
			$rows['ov'] = $this->User_model->get_record('orders as ne','ne.id="'.$order_id.'"');
			
			// print_r($rows);exit;
			$rows['rows_values'] = $this->User_model->selectdata_asc('tbl_shipping_type');
			$rows['menu_name'] = array('name' => 'order', 'sub_name' =>'None');
			$this->load->view('back-end/order-action',$rows);
		}else{
			redirect(base_url('admin-login'));
		}	
 	} 

 	public function update_product_status()
 {
  if($this->input->post('order'))
  {
  	$data = array('order_status' => $this->input->post('order'),'notify' => 0);
    $this->User_model->update_order_status($data,$this->input->post('order_id'));
    redirect(base_url('admin-order-action/').$data,$this->input->post('order_id'));
  }
 }  

public function orderInvoice($order_id){
	if($this->session->userdata('admin_username') != ''){
		$rows['menu_name'] = array('name' => 'order', 'sub_name' => 'None');
		$rows['rows_values'] = $this->User_model->selectdata_asc('tbl_shipping_type');
	$this->load->view('back-end/invoice',$rows);
	}else{
			redirect(base_url('admin-login'));
		}
}

public function orderFilter($order_id){
 		if($this->session->userdata('admin_username') != ''){
			$rows['order_id'] =array('order_id' => $order_id);
			$rows['orders_values'] = $this->User_model->get_record_by_id('orders as ne','ne.order_status="'.$order_id.'"');
			$rows['rows_values'] = $this->User_model->selectdata_asc('tbl_shipping_type');
			// print_r($rows);exit;
			$rows['menu_name'] = array('name' => 'order', 'sub_name' => $order_id);
			$this->load->view('back-end/order-ship',$rows);
		}else{
			redirect(base_url('admin-login'));
		}	
 }

 // rating start
 public function Rating(){
 		 if($this->session->userdata('admin_username') != ''){
		$rows['rating_val'] = $this->User_model->ratingData();
		$rows['menu_name'] = array('name' => 'app', 'sub_name' => 'rating');
		// echo "<pre>";
		// print_r($rows);exit;
		$rows['rows_values'] = $this->User_model->selectdata_asc('tbl_shipping_type');
		//$rows['menu_name'] = array('name' => 'Rating');
		$this->load->view('back-end/rating',$rows);
	}else{
			redirect(base_url('admin-login'));
		}  
 	}

 	public function Update_ratings_data($id){
		    if($this->session->userdata('admin_username') != ''){
		    $rows['rating_data'] = $this->User_model->ratingDatagetValueById($id); 
		    $rows['menu_name'] = array('name' => 'app', 'sub_name' => 'rating');
		    // print_r($rows);exit;
			//$rows['menu_name'] = array('name' => 'Rating');
			$this->load->view('back-end/edit-rating',$rows);
		}else{
				redirect(base_url('admin-login'));
			} 
		}

		public function Updated_ratStatusData(){

        $rat_status = $this->input->post('status');
        $id = $this->input->post('id');

        $item = array(
            'status' => $rat_status
      );

        $this->User_model->update_rat_data($id,$item);

        redirect(site_url('Authenticate/rating'));
    }
 // rating end



    // skilocode code
    public function courses(){
	    if($this->session->userdata('admin_username') != ''){
			$rows['data'] = $this->User_model->selectdata('tbl_courses');
			// print_r($rows);exit;
			$rows['menu_name'] = array('name' => 'courses');
			$this->load->view('back-end/courses',$rows);
		}else{
				redirect(base_url('admin-login'));
			} 
		} 

	public function add_courses(){
	    if($this->session->userdata('admin_username') != ''){
			$rows['data'] = $this->User_model->selectdata('tbl_courses');
			// print_r($rows);exit;
			$rows['menu_name'] = array('name' => 'courses');
			$this->load->view('back-end/add_courses',$rows);
		}else{
				redirect(base_url('admin-login'));
			} 
		}

		public function course_submit(){

			$_FILES['photo']['name'];
		
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['max_size'] = '2000';
				$config['upload_path'] = './upload/course_images/';
				$new_name = time().$_FILES["photo"]['name'];
				$config['file_name'] = $new_name;
				$this->load->library("upload",$config);
				if($this->upload->do_upload("photo")){
					$resume = $this->upload->data();
					$path = $resume['file_name'];
				}else{
					$path = '';
				}

       $items = array(
				'course_name	' => $this->input->post('course_name'),
				'title	' => $this->input->post('course_title'),
				'kw' => $this->input->post('course_url_title'),
				'short_desc	' => $this->input->post('short_dis'),
				'long_des_tit	' => $this->input->post('long_dis_tit'),
				'long_desc	' => $this->input->post('long_des'),
				'price	' => $this->input->post('course_price'),
				'dlt_price	' => $this->input->post('del_price'),
				'left_days	' => $this->input->post('left_days'),
				'course_img	' => $path
			);
			// echo "<pre>";
			// print_r($items);
			// exit();

        $this->User_model->insertdata('tbl_courses' ,$items); 
        $this->session->set_flashdata('add_course', 'Product Update successfully.');
        redirect(site_url('Authenticate/courses'));
    }



    public function update_courses($id){
	    if($this->session->userdata('admin_username') != ''){
			$rows['data'] = $this->User_model->update_course_data($id);
			// print_r($rows);exit;
			$rows['menu_name'] = array('name' => 'courses');
			$this->load->view('back-end/update-course',$rows);
		}else{
				redirect(base_url('admin-login'));
			} 
		}

		public function update_submit(){

			$_FILES['photo']['name'];
		
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['max_size'] = '2000';
				$config['upload_path'] = './upload/course_images/';
				$new_name = time().$_FILES["photo"]['name'];
				$config['file_name'] = $new_name;
				$this->load->library("upload",$config);
				if($this->upload->do_upload("photo")){
					$resume = $this->upload->data();
					$path = $resume['file_name'];
				}else{
					$path = '';
				}

	   $id = $this->input->post('id');
	   if($_FILES['photo']['name'] != ''){
       $items = array(
				'course_name	' => $this->input->post('course_name'),
				'title	' => $this->input->post('course_title'),
				'kw' => $this->input->post('course_url_title'),
				'short_desc	' => $this->input->post('short_dis'),
				'long_des_tit	' => $this->input->post('long_dis_tit'),
				'long_desc	' => $this->input->post('long_des'),
				'price	' => $this->input->post('course_price'),
				'dlt_price	' => $this->input->post('del_price'),
				'left_days	' => $this->input->post('left_days'),
				'course_img	' => $path
			);
   }else{
   	 $items = array(
				'course_name' => $this->input->post('course_name'),
				'title	' => $this->input->post('course_title'),
				'kw' => $this->input->post('course_url_title'),
				'short_desc	' => $this->input->post('short_dis'),
				'long_des_tit	' => $this->input->post('long_dis_tit'),
				'long_desc	' => $this->input->post('long_des'),
				'price	' => $this->input->post('course_price'),
				'dlt_price	' => $this->input->post('del_price'),
				'left_days	' => $this->input->post('left_days'),
				// 'course_img	' => $path
			);
   }
			// echo "<pre>";
			// print_r($items);
			// exit();

        $this->User_model->updatedata('tbl_courses',$items,$id); 
        $this->session->set_flashdata('update_course', 'Product Update successfully.');
        redirect(site_url('Authenticate/courses'));
    }

 

		 public function course_delete($id){
	 			if($this->session->userdata('admin_username') != ''){
				$this->User_model->deletedata('tbl_courses',$id);

				$this->User_model->deletedata_course('tbl_noti',$id);
			
				$this->User_model->deletedata_course('tbl_meta',$id);

				$this->User_model->deletedata_course('tbl_instructor',$id);

				$head_id = $this->User_model->get_record_by_id('tbl_topic_head as ne','ne.course_id="'.$id.'"');
				foreach($head_id as $h){
					$this->User_model->deletedata_course3('tbl_topic_body',$h->id);
				}
				$this->User_model->deletedata_course2('tbl_topic_head',$id);
				
				 redirect(site_url('Authenticate/courses'));
	 		}else{
				redirect(base_url('admin-login'));
			}
 	}

 
	// Blog
    public function Blog(){
	    if($this->session->userdata('admin_username') != ''){
			$rows['data'] = $this->User_model->selectdata('tbl_blog');
			// print_r($rows);exit;
			$rows['menu_name'] = array('name' => 'blog');
			$this->load->view('back-end/blog-details',$rows);
		}else{
				redirect(base_url('admin-login'));
			} 
		} 

	public function add_blog(){
	    if($this->session->userdata('admin_username') != ''){
			$rows['data'] = $this->User_model->selectdata('tbl_courses');
			// print_r($rows);exit;
			$rows['menu_name'] = array('name' => 'blog');
			$this->load->view('back-end/add-blog',$rows);
		}else{
				redirect(base_url('admin-login'));
			} 
		}

		public function blog_submit(){

			$_FILES['photo']['name'];
		
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['max_size'] = '2000';
				$config['upload_path'] = './upload/course_images/';
				$new_name = time().$_FILES["photo"]['name'];
				$config['file_name'] = $new_name;
				$this->load->library("upload",$config);
				if($this->upload->do_upload("photo")){
					$resume = $this->upload->data();
					$path = $resume['file_name'];
				}else{
					$path = '';
				}

       $items = array(
				'title	' => $this->input->post('title'),
				'short_note	' => $this->input->post('short_dis'),
				'long_dis_title' => $this->input->post('long_dis_tit'),
				'content	' => $this->input->post('long_des'),
				'qout	' => $this->input->post('qout'),
				'image	' => $path
			);


        $this->User_model->insertdata('tbl_blog' ,$items); 
        $this->session->set_flashdata('add_course', 'Add Blog successfully.');
        redirect(site_url('Authenticate/Blog'));
    }



    public function update_blog($id){
	    if($this->session->userdata('admin_username') != ''){
			$rows['data'] = $this->User_model->get_record('tbl_blog as ne','ne.id="'.$id.'"');
			// print_r($rows);exit;
			$rows['menu_name'] = array('name' => 'blog');
			$this->load->view('back-end/update-blog',$rows);
		}else{
				redirect(base_url('admin-login'));
			} 
		}

		public function blog_update_submit(){

			$_FILES['photo']['name'];
		
				$config['allowed_types'] = 'jpeg|jpg|png';
				$config['max_size'] = '2000';
				$config['upload_path'] = './upload/course_images/';
				$new_name = time().$_FILES["photo"]['name'];
				$config['file_name'] = $new_name;
				$this->load->library("upload",$config);
				if($this->upload->do_upload("photo")){
					$resume = $this->upload->data();
					$path = $resume['file_name'];
				}else{
					$path = '';
				}

	   $id = $this->input->post('id');
	   if($_FILES['photo']['name'] != ''){
       $items = array(
				'title	' => $this->input->post('title'),
				'short_note	' => $this->input->post('short_dis'),
				'long_dis_title' => $this->input->post('long_dis_tit'),
				'content	' => $this->input->post('long_des'),
				'qout	' => $this->input->post('qout'),
				'image	' => $path
			);
   }else{
   	 $items = array(
				'title	' => $this->input->post('title'),
				'short_note	' => $this->input->post('short_dis'),
				'long_dis_title' => $this->input->post('long_dis_tit'),
				'content	' => $this->input->post('long_des'),
				'qout	' => $this->input->post('qout'),
				// 'image	' => $path
			);
   }
			// echo "<pre>";
			// print_r($items);
			// exit();

        $this->User_model->updatedata('tbl_blog',$items,$id); 
        $this->session->set_flashdata('update_course', 'Blog Update successfully.');
        redirect(site_url('Authenticate/blog'));
    }

    public function blog_delete($id){
    	$this->User_model->deletedata('tbl_blog',$id);
    	echo json_encode(array("status" => TRUE));
    }
		


	public function allproducts()
	{
		// .... Admin Login Section 
		
		if($this->session->userdata('admin_username') != '')
		{	
			$this->load->helper('url');
			$rows['menu_name'] = array('name' => 'products', 'sub_name' => 'main');
			// $rows['rows_values'] = $this->User_model->selectdata_asc('tbl_shipping_type');
			$rows['products'] = $this->User_model->selectdata('tbl_products');
				$rows['products_cat'] = $this->User_model->selectdata('tbl_pro_category');
			$this->load->view('back-end/products',$rows);
		}
		else
		{
				redirect(site_url('admin-login'));
		}
	}	

	public function addProducts()
	{
		if($this->session->userdata('admin_username') != '')
		{	
			$this->load->helper('url');
			$rows['menu_name'] = array('name' => 'products', 'sub_name' => 'main');
			// $rows['rows_values'] = $this->User_model->selectdata_asc('tbl_shipping_type');
			$rows['products'] = $this->User_model->selectdata('tbl_products');
			$rows['products_cat'] = $this->User_model->selectdata('tbl_pro_category');
			$rows['brand_name'] = $this->User_model->selectdata('tbl_brand_logo');
			$this->load->view('back-end/add-products',$rows);
		}
		else
		{
				redirect(site_url('admin-login'));
		}
	}

	public function addallProducts()
	{
		if($this->session->userdata('admin_username') != '')
		{	
			$pro_name = $this->input->post('pro_name');
			$title = $this->input->post('title');
      		$category_id= $this->input->post('category_id');
      		$brand_id= $this->input->post('brand_name');
			$pro_desc = $this->input->post('description');
			$pro_feature = $this->input->post('pro_feature');
			$main_feature = $this->input->post('main_feature');

			$image1 = $this->input->post('image1');
			$image2 = $this->input->post('image2');
			$image3 = $this->input->post('image3');

			if($_FILES['image1']['name'] !=''){
		
				$config['allowed_types'] = 'jpeg|jpg|png|webp';
				$config['max_size'] = '2000';
				$config['upload_path'] = './upload/products';
				$new_name = time().'_'.$_FILES["image1"]['name'];
				$config['file_name'] = $new_name;
				$this->load->library("upload",$config);
				if($this->upload->do_upload("image1")){
					$resume = $this->upload->data();
					$path1 = $resume['file_name'];
				}else{
					$path1 = '';
				}
			}else{ $path1 = ''; }

			if($_FILES['image2']['name'] !=''){
		
				$config['allowed_types'] = 'jpeg|jpg|png|webp';
				$config['max_size'] = '2000';
				$config['upload_path'] = './upload/products';
				$new_name = time().'_'.$_FILES["image2"]['name'];
				$config['file_name'] = $new_name;
				$this->load->library("upload",$config);
				if($this->upload->do_upload("image2")){
					$resume = $this->upload->data();
					$path2 = $resume['file_name'];
				}else{
					$path2 = '';
				}
			}else{ $path2 = ''; }

			if($_FILES['image3']['name'] !=''){
		
				$config['allowed_types'] = 'jpeg|jpg|png|webp';
				$config['max_size'] = '2000';
				$config['upload_path'] = './upload/products';
				$new_name = time().'_'.$_FILES["image3"]['name'];
				$config['file_name'] = $new_name;
				$this->load->library("upload",$config);
				if($this->upload->do_upload("image3")){
					$resume = $this->upload->data();
					$path3 = $resume['file_name'];
				}else{
					$path3 = '';
				}
			}else{ $path3 = ''; }


			$user_data=array(
			
	      		'name'=>$this->input->post('pro_name'),
	      		'title'=>$this->input->post('title'),
	      		'description'=>$this->input->post('description'),
	      		'pro_cat_id'=>$this->input->post('category_id'),
                'brand_id'=>$this->input->post('brand_name'),
	      		'product_feature'=>$this->input->post('pro_feature'),
	      		'main_feature'=>$this->input->post('main_feature'),
	      		
	      		'image1' => $path1, 
	      		'image2' => $path2, 
	      		'image3' => $path3, 
  			);	
			$this->User_model->insertdata('tbl_products',$user_data);
			$this->session->set_flashdata('success_msg', 'User Register successfully.');
  			redirect(base_url('admin-products'));
		}	
		else
		{
				redirect(site_url('admin-login'));
		}
	}


	public function updateProduct($id)
	{
		if($this->session->userdata('admin_username') != '')
		{
			$rows['menu_name'] = array('name' => 'products');
	    	$rows['get_val']=$this->User_model->selectdata('tbl_pro_category');
	    	$rows['get_brand'] = $this->User_model->selectdata('tbl_brand_logo');
	    	$rows['get_record'] = $this->User_model->get_record('tbl_products as ne','ne.id="'.$id.'"');
	    	// print_r($rows['get_record']); exit();
	    	$this->load->view('back-end/update-products',$rows);
		}	
		else
		{
			redirect(site_url('admin-login'));
		}
	}

	public function product_update_1()
	{
		if($this->session->userdata('admin_username') != '')
		{
			$id = $this->input->post('p_id');

			$pro_name = $this->input->post('pro_name');
			$title = $this->input->post('title');
      		$category_id= $this->input->post('category_id');
      		$brand_id= $this->input->post('brand_name');
			$pro_desc = $this->input->post('description');
			$pro_feature = $this->input->post('pro_feature');
			$main_feature = $this->input->post('main_feature');

			$image1 = $this->input->post('image1');
			$image2 = $this->input->post('image2');
			$image3 = $this->input->post('image3');
			// Image 1	    	
	    	if($_FILES['image1']['name'] !=''){
		
				$config['allowed_types'] = 'jpeg|jpg|png|webp';
				$config['max_size'] = '2000';
				$config['upload_path'] = './upload/products/';
				$new_name = time().'_'.$_FILES["image1"]['name'];
				$config['file_name'] = $new_name;
				$this->load->library("upload",$config);
				if($this->upload->do_upload("image1")){
					$resume = $this->upload->data();
					$path1 = $resume['file_name'];
				}else{
					$path1 = '';
				}

				$data = array(
					'image1' => $path1,
				);

				$this->User_model->updatedata('tbl_products',$data,$id);

			}

			if($_FILES['image2']['name'] !=''){
		
				$config['allowed_types'] = 'jpeg|jpg|png|webp';
				$config['max_size'] = '2000';
				$config['upload_path'] = './upload/products/';
				$new_name = time().'_'.$_FILES["image2"]['name'];
				$config['file_name'] = $new_name;
				$this->load->library("upload",$config);
				if($this->upload->do_upload("image2")){
					$resume = $this->upload->data();
					$path2 = $resume['file_name'];
				}else{
					$path2 = '';
				}

				$data = array(
					'image2' => $path2,
				);

				$this->User_model->updatedata('tbl_products',$data,$id);

			}

			if($_FILES['image3']['name'] !=''){
		
				$config['allowed_types'] = 'jpeg|jpg|png|webp';
				$config['max_size'] = '2000';
				$config['upload_path'] = './upload/products/';
				$new_name = time().'_'.$_FILES["image3"]['name'];
				$config['file_name'] = $new_name;
				$this->load->library("upload",$config);
				if($this->upload->do_upload("image3")){
					$resume = $this->upload->data();
					$path3 = $resume['file_name'];
				}else{
					$path3 = '';
				}

				$data = array(
					'image3' => $path3,
				);


				$this->User_model->updatedata('tbl_products',$data,$id);

			}
			$data=array(
			
	      		'name'=>$this->input->post('pro_name'),
	      		'title'=>$this->input->post('title'),
	      		'description'=>$this->input->post('description'),
	      		'pro_cat_id'=>$this->input->post('category_id'),
                'brand_id'=>$this->input->post('brand_name'),
	      		'product_feature'=>$this->input->post('pro_feature'),
	      		'main_feature'=>$this->input->post('main_feature'),
	      		
	      		// 'image1' => $path1, 
	      		// 'image2' => $path2, 
	      		// 'image3' => $path3, 
  			);	
			$this->User_model->updatedata('tbl_products',$data,$id);
			$this->session->set_flashdata('success_msg', 'Product Update successfully.');
			redirect(base_url('admin-products'));
		}	
		else
		{
			redirect(site_url('admin-login'));
		}
	}

	public function product_delete($id){
 		if($this->session->userdata('admin_username') != ''){

			 	$person = $this->User_model->get_by_id($id);
				if(file_exists('upload/products/'.$person->image1) && $person->image1)
					unlink('upload/products/'.$person->image1);
				if(file_exists('upload/products/'.$person->image2) && $person->image2)
					unlink('upload/products/'.$person->image2);
				if(file_exists('upload/products/'.$person->image3) && $person->image3)
					unlink('upload/products/'.$person->image3);
					
					
				$this->User_model->deletedata('tbl_products',$id);
				// $this->User_model->deletedata_product('tbl_pro_category',$id);
					
							
					echo json_encode(array("status" => TRUE));
 		}else{
						redirect(base_url('admin-login'));
		}
 	}
	//for single image delete
	public function product_image_delete($id){
 			if($this->session->userdata('admin_username') != ''){
			 		$person = $this->User_model->get_by_id($id);
					if(file_exists('upload/products/'.$person->image1) && $person->image1)
						unlink('upload/products/'.$person->image1);
					
					$data = array('image1' => '');
					$this->User_model->deletedataimage('tbl_products',$data,$id);
					
					
							
					echo json_encode(array("status" => TRUE));
 		}else{
						redirect(base_url('admin-login'));
		}
 	}

 	public function product_image_delete2($id){
 			if($this->session->userdata('admin_username') != ''){
			 		$person = $this->User_model->get_by_id($id);
					if(file_exists('upload/products/'.$person->image2) && $person->image2)
						unlink('upload/products/'.$person->image2);
					
					$data = array('image2' => '');
					$this->User_model->deletedataimage('tbl_products',$data,$id);
					
					
							
					echo json_encode(array("status" => TRUE));
 		}else{
						redirect(base_url('admin-login'));
		}
 	}

 	public function product_image_delete3($id){
 			if($this->session->userdata('admin_username') != ''){
			 		$person = $this->User_model->get_by_id($id);
					if(file_exists('upload/products/'.$person->image3) && $person->image3)
						unlink('upload/products/'.$person->image3);
					
					$data = array('image3' => '');
					$this->User_model->deletedataimage('tbl_products',$data,$id);
					
					
							
					echo json_encode(array("status" => TRUE));
 		}else{
						redirect(base_url('admin-login'));
		}
 	}

	public function home_about(){
		if($this->session->userdata('admin_username') != ''){
			$rows['menu_name'] = array('name' => 'home_about');
			$this->load->view('back-end/home-about',$rows);
		}else{
			redirect(base_url('admin-login'));
		}
	}

	public function home_products(){
		if($this->session->userdata('admin_username') != ''){
			$rows['menu_name'] = array('name' => 'home_products');
			$this->load->view('back-end/home-products',$rows);
		}else{
			redirect(base_url('admin-login')); 
		}
	}
	
	public function testimonials(){
		if($this->session->userdata('admin_username') != ''){
			$rows['menu_name'] = array('name' => 'testimonials');
			$this->load->view('back-end/testimonials',$rows);
		}else{
			redirect(base_url('admin-login'));
		}
	}

	public function home_about_tab(){
		if($this->session->userdata('admin_username') != ''){
			$rows['menu_name'] = array('name' => 'home_about_tab');
			$this->load->view('back-end/home-about-tab',$rows);
		}else{
			redirect(base_url('admin-login'));
		}
	}

}



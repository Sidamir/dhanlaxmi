<?php
 
 class User_model extends CI_Model
 {
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
 	 public function insertdata($table,$data)
  {
    $this->db->insert($table,$data);
  // return $this->db->insert_id();
   
  }
  public function insert($table,$data)
  {
    $this->db->insert($table,$data);
  // return $this->db->insert_id();
   
  }
  public function dataofadmiss($table,$start_date,$end_date)
  {
    $sql="SELECT * From  $table Where date_admission BETWEEN '".$start_date."' AND '".$end_date."' ";
    $query = $this->db->query($sql); 
         return $query->result();
    /*$this->db->where('id',$id);*/
  }  
  public function dateFilter($table,$start_date,$end_date)
  {
    $sql="SELECT * From  $table Where modified BETWEEN '".$start_date."' AND '".$end_date."' ";
    $query = $this->db->query($sql); 
         return $query->result();
    /*$this->db->where('id',$id);*/
  }  
  
  public function dataofpublish($table,$start_date,$end_date)
  {
    $sql="SELECT * From  $table Where entry_date BETWEEN '".$start_date."' AND '".$end_date."' ";
    $query = $this->db->query($sql); 
         return $query->result();
    /*$this->db->where('id',$id);*/
  } 

  public function dataofcontact($table,$start_date,$end_date)
  {
    $sql="SELECT * From  $table Where created BETWEEN '".$start_date."' AND '".$end_date."' ";
    $query = $this->db->query($sql); 
         return $query->result();
    /*$this->db->where('id',$id);*/
  }   
  public function updatedata($table,$data,$id)
  {
    $this->db->where('id',$id);
    $this->db->update($table,$data);

  }

  public function updateorderdata($table,$data,$id)
  {
    $this->db->where('tid',$id);
    $this->db->update($table,$data);

  }  
  public function selectdata($table)
      {
         $sql="SELECT * From  $table ORDER BY `id` DESC";
         $query = $this->db->query($sql); 
         return $query->result();
      }

        public function selectdata_offset($table,$offset)
      {
         $sql="SELECT * FROM basic_product LIMIT 12 OFFSET ".$offset;
         $query = $this->db->query($sql); 
         return $query->result();
      }  

      
  public function selectdata_asc($table)
      {
         $sql="SELECT * From  $table ORDER BY `id` ASC";
         $query = $this->db->query($sql); 
         return $query->result();
      }    
      public function selectdata_dsc($table)
      {
         $sql="SELECT * From  $table ORDER BY `id` DESC";
         $query = $this->db->query($sql); 
         return $query->result();
      }  
    /*public function selectdatacountry($table)
      {
         $sql="SELECT * From  $table ORDER BY `country_id` DESC";
         $query = $this->db->query($sql); 
         return $query->result();
      } */     
     public function selectdatastates($table)
      {
         $sql="SELECT * From  $table ORDER BY `state_id` ASC";
         $query = $this->db->query($sql); 
         return $query->result();
      } 
      public function selectdatacities($table)
      {
         $sql="SELECT * From  $table ORDER BY `city_id` ASC";
         $query = $this->db->query($sql); 
         return $query->result();
      }


       public function insert_pro($items){

    $this->db->insert('tbl_generatepass',$items);
    return $this->db->insert_id();
  }
      
      
 public function fetch_country()
 {
  $this->db->order_by("country_name", "ASC");
  
  $query = $this->db->get("country");
   /*print_r($query->result());*/
  return $query->result();
 }

 public function fetch_state($country_id)
 {
  $this->db->where('country_name', $country_id);
  $query = $this->db->get('country');
  $row = $query->row();
  $country_id = $row->country_id;     
     
  $this->db->where('country_id', $country_id);
  $this->db->order_by('state_name', 'ASC');
  $query = $this->db->get('state');
  $output = '<option value="">Select State</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->state_name.'"></option>';
  }
//   print_r($output);exit;
  return $output;
 }

 public function fetch_city($state_id)
 {
  $this->db->where('state_name', $state_id);
  $query = $this->db->get('state');
  $row = $query->row();
  $state_id = $row->state_id;
  
  $this->db->where('state_id', $state_id);
  $this->db->order_by('city_name', 'ASC');
  $query = $this->db->get('city');
  $output = '<option value="">Select City</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->city_name.'"></option>';
  }
  return $output;
 }
    public function selectdata1($table1,$table2,$table3)
      {
         $sql="SELECT * From  $table1 union SELECT * From  $table2 union SELECT * From  $table3";
         $query = $this->db->query($sql); 
         return $query->result();
      }
      

   public function deletedata($table,$id)
  {
    $this->db->where('id',$id);
    $this->db->delete($table);
  } 

  public function deletedata_course($table,$id){
    $this->db->where('page_id',$id);
    $this->db->delete($table);
  }

  public function deletedata_course2($table,$id){
    $this->db->where('course_id',$id);
    $this->db->delete($table);
  }

public function deletedata_course3($table,$id){
    $this->db->where('head_id',$id);
    $this->db->delete($table);
  }

   public function deletedata_product($table,$id)
  {
    $this->db->where('head_id',$id);
    $this->db->delete($table);
  } 

  public function get_record($table,$con){
     $sql="SELECT * from $table where $con";
          //echo $sql; exit;
     $query = $this->db->query($sql);
      return $query->row();
    } 



    public function get_record_by_id($table,$con){
     $sql="SELECT * from $table where $con";
          //echo $sql; exit;
     $query = $this->db->query($sql);
      return $query->result();
    }    
  
   public function validate_login($username,$password)
    {
    $sql='SELECT * FROM admin WHERE username = "'.$username.'" AND password="'.$password.'"';
    $query=$this->db->query($sql);
      $row = $query->row();
      $data = array(
                      
                        ' username' =>$row->username,
                      
                     );
      $this->session->set_userdata($data);
       $this->session->set_userdata('login','true');
    return $query->row();
      }
//customer login

   public function cvalidate_login($cname,$cpassword)
    {
    $sql='SELECT * FROM customreg WHERE cname = "'.$cname.'" AND cpassword="'.$cpassword.'"';
    $query=$this->db->query($sql);
      $row = $query->row();
      $data = array(
                        
                        // 'id'       => $row->id,
                      // 'mobile_no' => $row->mobile_no,
                       // 'name'     => $row->name,
                        'cname' =>$row->cname,
                        
                      // 'email_id' =>$row->email_id
                      //  'PlaceunderID' =>$row->PlaceunderID,
                      //   'JoinType' =>$row->JoinType,
                      //   'JoinDate' =>$row->JoinDate,
                      //    'activation_date' =>$row->activation_date
                     );
       $this->session->set_userdata($data);
       $this->session->set_userdata('customerLogin','true');
    return $query->row();
      }
//
      public function svalidate_login($title,$spassword)
    {

   //  echo $client_id;exit;
    $sql='SELECT * FROM studentreg WHERE title = "'.$title.'" AND  spassword="'.$spassword.'"';
   /* echo $sql;exit;*/
    $query=$this->db->query($sql);
      $row = $query->row();
      $data = array(
                         'id' =>$row->id,
                        'title' =>$row->title,
                     );
      $this->session->set_userdata($data);
      
      //echo $data;exit;
       $this->session->set_userdata('studentLogin','true');
    return $query->row();
      }
   

    
    
    
    
    public function std_view($username){
        $query = $this->db->query("SELECT * FROM studentreg WHERE title='$username'");
        return $query->result();
    }
    public function updatedata_std($table,$data,$username)
  {
    $this->db->where('title',$username);
    $this->db->update($table,$data);

  }

  public function deletedataimage($table,$data,$id){
    $this->db->where('id',$id);
    $this->db->update($table,$data);
  }

  public function get_admin($username='',$password=''){
    //$this->db->where('username',$username);
    $this->db->group_start();
    $this->db->where('username', $username)->or_where('usernumber', $username);
    $this->db->group_end();
    $this->db->where('password',$password);
    $query = $this->db->get('tbl_admin');
    if($query->num_rows() > 0){
       $result=$query->result_array();
            return $result;
    }else{
      return false;
    }
  } 

  //... Checked User email already exist or not

  public function email_check($email){
 
      $this->db->select('*');
      $this->db->from('tbl_generatepass');
      $this->db->where('email',$email);
      $query=$this->db->get();
     
      if($query->num_rows()>0){
        return false;
      }else{
        return true;
      }
  } 

public function mobile_no_check($mobile){
 
      $this->db->select('*');
      $this->db->from('tbl_generatepass');
      $this->db->where('phone',$mobile);
      $query=$this->db->get();
     
      if($query->num_rows()>0){
        return false;
      }else{
        return true;
      }
  } 

  public function insert_login($data)
    {
        $this->db->insert("tbl_admin",$data);
        return $this->db->insert_id();
    }  
  public function cat(){
    $query = $this->db->get('tbl_category');
    return $query->result();

  }
  public function basicProduct(){
    $this->db->order_by('id', 'DESC');
    $query = $this->db->get('basic_product');
    return $query->result();

  }

  public function AddProData($items){
    $this->db->insert('products',$items);
  }

   public function fetch_sub($country_id)
 {
  $this->db->where('cat_id', $country_id);
  $this->db->order_by('sub_category', 'ASC');
  $query = $this->db->get('tbl_sub_category');
  $output = '<option value="">Select Sub Category</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->id.'">'.$row->sub_category.'</option>';
  }
  return $output;
 }
 public function offer(){
    $query = $this->db->get('offer');
    return $query->result();

  }
  public function categorymenu() {
        $query = $this->db->get('tbl_category');
        return $query->result();
    }
  public function subcatmenu($id) {

     $this->db->where('cat_id', $id);
        $query = $this->db->get('tbl_sub_category');
        
        return $query->result();
    }
   public function get_by_id($id)
  {
    $this->db->from('tbl_products');
    $this->db->where('id',$id);
    $query = $this->db->get();
    return $query->row();
  } 

  // basic product
  public function basic_product(){
    $this->db->order_by('id', 'DESC');
    $query = $this->db->get('basic_product');
    return $query->result();
  }

  public function Addbasic_product($items){
    $this->db->insert('basic_products',$items);
  }
  
   public function getPoductValueById($id){
      $this->db->where('id', $id);
      $query = $this->db->get('products');
      return $query->result(); 
    }
    public function update_basic_product($id,$item){
      $this->db->where('id', $id);
      return $this->db->update('tbl_topic_body', $item);

    }
    public function delete_basic_product($id)
      {
        $this->db->where("id", $id);
      $this->db->delete("products");
      
    }

    public function product_weight_check($pro_weight,$pro_id){
 
      $this->db->select('*');
      $this->db->from('tbl_topic_body');
      $this->db->where('id',$pro_weight);
      $this->db->where('head_id',$pro_id);
      $query=$this->db->get();
     
      if($query->num_rows()>0){
        return false;
      }else{
        return true;
      }
  }

public function category(){
    $query = $this->db->get('tbl_category', 8);
    return $query->result();
  }

  public function get_count() {
        return $this->db->count_all('basic_product');
    }

    public function get_authors($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get('basic_product');

        return $query->result();
    }
    public function search($search){
          $query=$this->db->query("SELECT * FROM basic_product WHERE name like '%".$search."%'");
                return $query->result();
}

public function signleOffAsc($id){
        $this->db->where('pro_id',$id);
        $this->db->order_by("pro_id", "ASC");
       // $this->db->limit(1);
        $query = $this->db->get('products');

        return $query->result();
        //return $query->row();
    }

public function signleOffDesc($id){
        $this->db->where('pro_id',$id);
        $this->db->order_by("pro_id", "DESC");
       $this->db->limit(1);
        $query = $this->db->get('products');

        //return $query->result();
        return $query->row();
    }

public function minprice($id) {
        $this->db->where('pro_id',$id);
        $this->db->order_by("pro_weight", "ASC");
        $this->db->limit(1);
        $query = $this->db->get('products');

        //return $query->result();
        return $query->row();
    }
  public function maxprice($id) {
        $this->db->where('pro_id',$id);
        $this->db->order_by("pro_weight", "DESC");
        $this->db->limit(1);
        $query = $this->db->get('products');

        //return $query->result();
        return $query->row();
    }
  public function fetch_city_id($state_id)
 {
  $this->db->where('state_id', $state_id);
  $this->db->order_by('city_name', 'ASC');
  $query = $this->db->get('city');
  $output = '<option value="">Select City</option>';
  foreach($query->result() as $row)
  {
   $output .= '<option value="'.$row->city_id.'">'.$row->city_name.'</option>';
  }
  return $output;
 }

public function passwordCheck($pw){
 

      $this->db->select('*');
      $this->db->from('tbl_admin');
      $this->db->where('PASSWORD',$pw);
      $query=$this->db->get();
     
      return $query->num_rows();

      // if($query->num_rows()>0){
      //   return false;
      // }else{
      //   return true;
      // }
  }

  public function insert_basic_product($data)
    {
        $this->db->insert("tbl_topic_head",$data);
        return $this->db->insert_id();
    }  
     public function fetch_price($country_id)
    {
        $this->db->where('id', $country_id);
        //$this->db->order_by('sub_category', 'ASC');
        $query = $this->db->get('products');
        $output = '';
        foreach($query->result() as $row)
        { 
            $output .= '<input type="hidden" value="'.round($row->pro_price/(1- $row->off/100)).'.00'.'" name="pro_price_ajx">';
            $output .= '<input type="hidden" value="'.$row->pro_weight.'" name="pro_weight_ajx">';
            $output .= '<input type="hidden" value="'.$this->hasher->encrypt($row->id).'" name="pro_id_ajx">';
           if($row->off != 0){
            $lp =$row->pro_price - $row->off/100 * $row->pro_price;
            $output .= '<div class="quantity-cart-box d-flex align-items-center">
                            <h5>Price:</h5>
                                <div class="quantity">
                                    <span class="price-regular">'.round($lp).'.00'.'</span>
                                </div>
                            </div>
                            ';
            }else{
                $output .= '<div class="quantity-cart-box d-flex align-items-center">
                            <h5>Price:</h5>
                                <div class="quantity">
                                    <span class="price-regular">'.$row->pro_price.'</span>
                                </div>
                            </div>
                            ';
            }
            if($row->off != 0){
            $output .= '<div class="quantity-cart-box d-flex align-items-center">
                            <h5>Price:</h5>
                                <div class="quantity col-md-3">
                                    <span class="price-regular"><del>'.$row->pro_price.'</del></span>&nbsp;<span class="product-label discount" style="position: unset;">'.$row->off.'%</span>
                                </div>
                                
                            </div>
                            ';
            }
            if($row->stocks !=0){
                $output .= '<div class="availability">
                             <i class="fa fa-check-circle"></i>
                                 <span> product in stock</span>
                            </div>  <div class="action_link">
                                                
                                            </div>
                            ';
            }else{
                 $output .= '<div class="">
                             <i class="fa fa-window-close-o" aria-hidden="true" style="color: red;"></i>
                                 <span> product out of stock</span>
                            </div> <div class="action_link">
                                                
                                            </div>
                            ';
            }
        }
    return $output;
 } 
 
 // suraj model start

    // rating start
     public function selectlogo() {
        $query = $this->db->get('tbl_brand_logo', 8);
        return $query->result();
    }
    public function selectallBrands() {
        $query = $this->db->get('tbl_brand_logo');
        $this->db->order_by('ASC');
        return $query->result();
    }
        public function ratingData() {
        $query = $this->db->get('tbl_ratings');
        return $query->result();
    }
    public function ratingDatagetValueById($id){
        $this->db->where('id', $id);
        $query = $this->db->get('tbl_ratings');
        return $query->result(); 
    }
      public function update_rat_data($id,$item){
        $this->db->where('id', $id);
        return $this->db->update('tbl_ratings', $item);

    }

    public function update_ratingData($id,$item){
        $this->db->where('id', $id);
        return $this->db->update('tbl_coupon', $item);

    }
    // rating end
  public function bannerData(){
        $query = $this->db->get('tbl_main_banner');
        return $query->result();
    }
 
    public function CounterData(){
        $query = $this->db->get('tbl_counters');
        return $query->result();
    }

   public function CareerData(){
        $query = $this->db->get('tbl_career');
        return $query->result();
    }
    public function DeleteCareerData($id)
      {
        $this->db->where("id", $id);
        $this->db->delete("tbl_career");
      
    }

    public function ContactData(){
        $query = $this->db->get('tbl_contect');
        return $query->result();
    }
    public function DeleteContactData($id)
      {
        $this->db->where("id", $id);
        $this->db->delete("tbl_contect");
      
    }
    
    // coupon

    public function CouponData(){
        $query = $this->db->get('tbl_coupon');
        return $query->result();
    }
   
    public function Insert_coupon($items){

        return $this->db->insert('tbl_coupon',$items);
    }
    public function getValueById($id){
        $this->db->where('id', $id);
        $query = $this->db->get('tbl_coupon');
        return $query->result(); 
    }
    public function update_coup_data($id,$item){
        $this->db->where('id', $id);
        return $this->db->update('tbl_coupon', $item);

    }
    public function DeleteCoponData($id)
      {
        $this->db->where("id", $id);
        $this->db->delete("tbl_coupon");
      
    }

 // suraj model end

 public function user_email_check($email){
 
      $this->db->select('*');
      $this->db->from('tbl_admin');
      $this->db->where('username',$email);
      $query=$this->db->get();
     
      if($query->num_rows()>0){
        return false;
      }else{
        return true;
      }
  } 
  public function recoverPassword($email="", $password=""){
  $this->db->set('password', $password);
  $this->db->where('username', $email);
  return $query = $this->db->update('tbl_admin');   
}

public function update_order_status($data,$order_id){
     $this->db->where('id', $order_id);
      return $this->db->update('orders', $data);
}

public function Order_track_data($id){
        $this->db->where('id', $id);
        $query = $this->db->get('orders');
        return $query->result(); 
    }

public function update_course_data($id){
        $this->db->where('id', $id);
        $query = $this->db->get('tbl_courses');
        return $query->result(); 
    }
    
     public function selectdata_asc_1($table)
      {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by('id', 'desc');
        $this->db->limit(3);
        $query = $this->db->get();
        return $query->result();
      }
      
       public function selectdata_asc_4($table)
      {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by('id', 'ASC');
        $this->db->limit(4);
        $query = $this->db->get();
        return $query->result();
      }
      
       public function selectdata_asc_2($table)
      {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by('id', 'ASC');
        $this->db->limit(2);
        $query = $this->db->get();
        return $query->result();
      }
      
}
?>
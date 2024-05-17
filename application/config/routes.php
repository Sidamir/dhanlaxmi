<?php
defined('BASEPATH') OR exit('No direct script access allowed');



$route['default_controller'] = 'Site_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE; 

$route['pass-generate/(:num)'] = 'Site_controller/pass_generate/$1';

$route['about'] = 'Site_controller/about';
$route['products'] = 'Site_controller/products';
$route['contact'] = 'Site_controller/contact';
$route['terms-and-conditions'] = 'Site_controller/terms_and_conditions';
$route['privacy-policy'] = 'Site_controller/privacy_policy';
  
//Admin Panel
$route['submit-login-detail'] = 'Authenticate/login_submit';
$route['admin-login'] = 'Authenticate/login_form';
$route['admin-dashboard'] = 'Authenticate/index';
$route['dashboard'] = 'Authenticate/index';
$route['admin-contact'] = 'Authenticate/ContactBack';
$route['admin-pass-details'] = 'Authenticate/admin_pass_details';
$route['admin-logout'] = 'Authenticate/logout';

$route['admin-filter'] = 'Authenticate/ContactFilter';

//Home Page
$route['home-about'] = 'Homeabout_controller/index';
$route['home-about-tab'] = 'HomeaboutTab_controller/index';
$route['home-products'] = 'Homeproducts_controller/index'; 

//About Page 
$route['abouts'] = 'About_controller/index';   
$route['about-tab'] = 'About_tab_controller/index'; 
$route['banner-area'] = 'Banner_area_controller/index';
$route['events'] = 'Events/index';
$route['upcoming-events'] = 'Upcoming_events/index';
$route['our-mission'] = 'Our_mission_controller/index';
$route['our-mission-tab'] = 'Our_mission_tab_controller/index'; 
$route['why-choose-us'] = 'Why_choose_us_controller/index'; 
  
$route['our-vision'] = 'Our_vision_controller/index';
$route['our-vision-tab'] = 'Our_vision_tab_controller/index';  

$route['testimonials'] = 'Testimonials_controller/index'; 

 
$route['contact-submit'] = 'Site_controller/contact_submit';
$route['generate-pass'] = 'Site_controller/generate_pass'; 



// $route['home-about-tab'] = 'Authenticate/home_about_tab';



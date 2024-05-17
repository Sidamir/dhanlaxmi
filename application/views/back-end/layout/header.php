<style type="text/css">
  /* width */
.sidebar::-webkit-scrollbar {
  width: 10px;
}

/* Track */
.sidebar::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
.sidebar::-webkit-scrollbar-thumb {
  background: #7aca92; 
  border-radius: 10px;
}

/* Handle on hover */
.sidebar::-webkit-scrollbar-thumb:hover {
  background: #eac721; 
}
:not(.layout-fixed) .main-sidebar {
    height: 100vh;
    min-height: 100%;
    position: absolute;
    top: 0;
    overflow-y: hidden;
    position: fixed;
}
.sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
    background-color: #07ad31;
    color: #fff;
}
.card-primary:not(.card-outline)>.card-header {
    background-color: #f36823bf;
}
aside.main-sidebar.sidebar-dark-primary.elevation-4 {
  background-color: #07294D;
}
.order-badge {
  background: #fff;
    color: #000;
    position: absolute;
    right: 79px;
    top: 4px;
    font-size: 12px;    
}
.notification.icon {
  position: absolute;
  text-align: center;
  font-size: 1em;
  color: #FFF;
  padding: 10px;
  color: #333;
  background-color: #ebebeb;
  border: 1px solid #adadad;
  border-radius: 5px;
  height: 40px;
}
.notification.icon .notification-number {
  position: absolute;
  right: -5px;
  top: -15px;
  z-index: 1;
  background: #cc2311;
  border: 3px solid #FFF;
  border-radius: 50%;
  padding-top: 5px;
  height: 25px;
  width: 25px;
  font-family: sans-serif;
  text-align: center;
  font-size: 15px;
  font-weight: 700;
  line-height: 10px;
  color: #FFF;
  -webkit-animation: bounce 1s infinite;
}

@-webkit-keyframes bounce {
  0%, 100%, 20%, 53%, 80% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  40%, 43% {
    -webkit-transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    -webkit-transform: translate3d(0, -30px, 0);
    -ms-transform: translate3d(0, -30px, 0);
    transform: translate3d(0, -30px, 0);
  }
  70% {
    -webkit-transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    -webkit-transform: translate3d(0, -15px, 0);
    -ms-transform: translate3d(0, -15px, 0);
    transform: translate3d(0, -15px, 0);
  }
  90% {
    -webkit-transform: translate3d(0, -4px, 0);
    -ms-transform: translate3d(0, -4px, 0);
    transform: translate3d(0, -4px, 0);
  }
}
 table.table-bordered.dataTable tbody th, table.table-bordered.dataTable tbody td {
     font-size:13px;
 }
/*aside.main-sidebar.sidebar-dark-primary.elevation-4 {*/
/*	width: 210px;*/
/*}*/
/*body:not(.sidebar-mini-md) .content-wrapper, body:not(.sidebar-mini-md) .main-footer, body:not(.sidebar-mini-md) .main-header {*/
/*    transition: margin-left .3s ease-in-out;*/
/*    margin-left: 220px;*/
/*}*/
</style>
<script>
   function timedMsg(){
      var t=setTimeout("document.getElementById('myMsg').style.display='none';",5000);
    }
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="<?php echo base_url(); ?>assets/images/fevicon2.png" />

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>&nbsp;&nbsp;
          <span id="refresh_order">
          <span class="badge badge-danger navbar-badge"><?php //$notify =$this->User_model->get_record_by_id('orders as ne','ne.notify=1'); echo count($notify);?></span>
        </span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Notifications</span>
          <div class="dropdown-divider"></div>
          <!-- <a href="<?php echo base_url('admin-all-orders');?>" class="dropdown-item">
            <i class="fas fa-box mr-2"></i><span id="refresh_order1"> <?php //echo count($notify);?></span> New Orders
            <span class="float-right text-muted text-sm"></span>
          </a> -->
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
           <i class="fa fa-sign-out" aria-hidden="true"></i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">Admin Login</span>
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url('admin-logout');?>" class="dropdown-item">
            <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
            
          </a>
        </div>
      </li>
     
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('dashboard');?>" class="brand-link text-center" style="padding: 9px;">
      <!-- <img src="<?php echo base_url(); ?>main-site-assets/img/logo.png" width="200" alt="The Smart Home" > --><span style="color: #eac721; font-weight: bold; text-transform: uppercase;font-size: 30px;"><img src="<?php echo base_url('assets/front/'); ?>img/logo/sanskrutik-mahotsav-logo.png" width="150" alt=""></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" >
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>back_end_assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url('admin-dashboard'); ?>" class="nav-link <?php if($menu_name['name'] === 'dashboard'){ echo 'active'; }?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p> 
                &nbsp; Dashboard
              </p>
            </a> 
          </li>
           <li class="nav-item has-treeview">
            <a href="<?php echo base_url('banner-area'); ?>" class="nav-link <?php if($menu_name['name'] === 'banner_area'){ echo 'active'; }?>">
              <i class="fa fa-circle" aria-hidden="true"></i>
              <p>
                &nbsp; Banner
              </p>
            </a> 
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('events'); ?>" class="nav-link <?php if($menu_name['name'] === 'events'){ echo 'active'; }?>">
              <i class="fa fa-circle" aria-hidden="true"></i>
              <p>
                &nbsp; Events
              </p>
            </a> 
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('upcoming-events'); ?>" class="nav-link <?php if($menu_name['name'] === 'upcoming-events'){ echo 'active'; }?>">
              <i class="fa fa-circle" aria-hidden="true"></i>
              <p>
                &nbsp; Upcoming Events
              </p>
            </a> 
          </li>
          <!-- <li class="nav-item has-treeview">
            <a href="<?php echo base_url('home-about'); ?>" class="nav-link <?php if($menu_name['name'] === 'home_about'){ echo 'active'; }?>">
              <i class="fa fa-circle" aria-hidden="true"></i>
              <p>
                &nbsp; Home About
              </p>
            </a>  
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('home-about-tab'); ?>" class="nav-link <?php if($menu_name['name'] === 'home_about_tab'){ echo 'active'; }?>"> 
              <i class="fa fa-circle" aria-hidden="true"></i>
              <p>
                &nbsp; Home About Tab
              </p>
            </a>  
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('home-products'); ?>" class="nav-link <?php if($menu_name['name'] === 'home_products'){ echo 'active'; }?>">
              <i class="fa fa-circle" aria-hidden="true"></i>
              <p>
                &nbsp; Home Products
              </p>
            </a> 
          </li> 
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('testimonials'); ?>" class="nav-link <?php if($menu_name['name'] === 'testimonials'){ echo 'active'; }?>">
              <i class="fa fa-circle" aria-hidden="true"></i>
              <p>
                &nbsp; Testimonials 
              </p>
            </a> 
          </li>
          <hr style="border-bottom: 2px solid #fff;">
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('abouts'); ?>" class="nav-link <?php if($menu_name['name'] === 'abouts'){ echo 'active'; }?>">
              <i class="fa fa-circle" aria-hidden="true"></i>
              <p>
                &nbsp; About
              </p>
            </a> 
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('about-tab'); ?>" class="nav-link <?php if($menu_name['name'] === 'about_tab'){ echo 'active'; }?>">
              <i class="fa fa-circle" aria-hidden="true"></i>
              <p>
                &nbsp; About Tab
              </p>
            </a> 
          </li>
         
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('our-mission-tab'); ?>" class="nav-link <?php if($menu_name['name'] === 'our_mission_tab'){ echo 'active'; }?>">
              <i class="fa fa-circle" aria-hidden="true"></i>
              <p>
                &nbsp; Our Mission Tab
              </p>
            </a> 
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('our-vision'); ?>" class="nav-link <?php if($menu_name['name'] === 'our_vision'){ echo 'active'; }?>">
              <i class="fa fa-circle" aria-hidden="true"></i>
              <p>
                &nbsp; Our Vision
              </p>
            </a> 
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('our-vision-tab'); ?>" class="nav-link <?php if($menu_name['name'] === 'our_vision_tab'){ echo 'active'; }?>">
              <i class="fa fa-circle" aria-hidden="true"></i>
              <p>
                &nbsp; Our Vision Tab
              </p>
            </a> 
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('why-choose-us'); ?>" class="nav-link <?php if($menu_name['name'] === 'why_choose_us'){ echo 'active'; }?>">
              <i class="fa fa-circle" aria-hidden="true"></i>
              <p>
                &nbsp; Why Choose Us 
              </p>
            </a> 
          </li> -->
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin-pass-details'); ?>" class="nav-link <?php if($menu_name['name'] === 'pass-details'){ echo 'active'; }?>">
              <i class="fa fa-circle" aria-hidden="true"></i>
              <p>
                &nbsp; Pass Details
              </p>
            </a> 
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin-contact'); ?>" class="nav-link <?php if($menu_name['name'] === 'contact'){ echo 'active'; }?>">
              <i class="fa fa-circle" aria-hidden="true"></i>
              <p>
                &nbsp; Contact
              </p>
            </a> 
          </li>
          <br>

          

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>



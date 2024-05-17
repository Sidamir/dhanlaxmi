<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Sig In | ixiLoan</title>
  <!-- FAVICONS ICON -->
  <link href="<?php echo base_url(); ?>assets/front/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets/front/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>back_end_assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>back_end_assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>back_end_assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style type="text/css">
      body {
        background-image: linear-gradient(60deg, #c7d8e8, #fde6e7)!important;
      }
      .btn-primary {
        color: #fff;
        font-size: 14px;
        padding: 9px 25px;
        border: unset;
        background-color: #349b50;
        text-transform: capitalize;
    }
    .btn-primary:hover {
        color: #fff;
        font-size: 14px;
        padding: 9px 25px;
        border: unset;
        background-color: #26b34c;
        text-transform: capitalize;
    }
    .card-body.login-card-body {
      border-radius: 30px!important;
    }
    .login-card-body, .register-card-body {
        color: #666;
        padding: 20px;
    } 
    .main-heading-login {
        font-size: 1.5rem;
        line-height: 1.2;
        font-weight: 500;
    }
    span.fas.fa-envelope, span.fas.fa-lock {
        color: #26b34c;
    }
    .login-desk-banner {
      background: 
      url(front_end_assets/images/signin.png);background-size: inherit;background-repeat: no-repeat;background-size: cover;
    }
    input.form-control {
      background: #f2f2f2;
    }
    @media only screen and (max-width: 767px) {
      .login-desk-banner {
        background: none;
      }
      .login-mob-banner {
        background: 
        url(front_end_assets/images/mob-banner-login.png);background-size: inherit;background-repeat: no-repeat;background-size: cover;
      }
    }
  </style>
  <script>
   function timedMsg(){
      var t=setTimeout("document.getElementById('myMsg').style.display='none';",5000);
    }
</script>
</head>
<body class="hold-transition login-page login-desk-banner login-mob-banner">
<div class="login-box">
    
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <div class="text-center">
        <img src="<?php echo base_url('assets/front/'); ?>img/logo/sanskrutik-mahotsav-logo.png" width="180" alt="">
      </div>
       <p><?php if($this->session->flashdata('login_error')){ ?>
            <div class="alert alert-danger alert-dismissible" id="myMsg">
              <?php echo $this->session->flashdata('login_error'); ?>
               <script language="JavaScript" type="text/javascript">timedMsg()</script>
            </div>
      <?php }?> </p> 
      <p class="login-box-msg main-heading-login">Sign in</p>

      <form action="<?php echo base_url('submit-login-detail');?>" method="post">
        
        <div class="input-group">
          <input type="text" name="username" class="form-control" placeholder="Username">
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>

        </div>
        <div class="mb-3"><?php echo form_error('username','<span style="color: red;">','</span>');?></div>
       
        <div class="input-group">
          <input type="password" name="password" class="form-control" placeholder="Password">
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="mb-3"><?php echo form_error('password','<span  style="color: red;">','</span>');?></div>
        <div class="row">
          <div class="col-8">
            <!-- <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div> -->
          </div>
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>back_end_assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>back_end_assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>back_end_assets/dist/js/adminlte.min.js"></script>

</body>
</html>

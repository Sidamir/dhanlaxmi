<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="<?php echo base_url('assets/front/'); ?>img/logo/favicon.png">

	<link href="<?php echo base_url('assets/front/'); ?>css/bootstrap.min.css" rel="stylesheet">

	<link href="<?php echo base_url('assets/front/'); ?>css/bootstrap-icons.css" rel="stylesheet">

	<link href="<?php echo base_url('assets/front/'); ?>css/all.min.css" rel="stylesheet">

	<link href="<?php echo base_url('assets/front/'); ?>css/fontawesome.min.css" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>css/swiper-bundle.min.css">

	<link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>css/jQuery-plugin-progressbar.css">

	<link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>css/magnific-popup.css">

	<link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>css/animate.css">

	<link rel="stylesheet" href="<?php echo base_url('assets/front/'); ?>css/style.css">

	<script src="<?= base_url();?>assets/front/validation/jquery/jquery.js"></script>
<script src="<?= base_url();?>assets/front/validation/jquery/jquery.validate.js"></script>
<script src="<?= base_url();?>assets/front/validation/js/additional-methods.min.js"></script>
<script src="<?= base_url();?>assets/front/validation/js/bootstrap.min.js"></script>
<style type="text/css">
    .error{
        color: #ff4545e3!important;
    }
</style>

 <script>
     function timedMsg(){
      var t=setTimeout("document.getElementById('myMsg').style.display='none';",5000);
  }
</script>

	<style type="text/css">.contact-form form input[type=submit], .contact-form form textarea[type=submit]{max-width: 100%!important;}.modal-header{border: 0;}</style>

	<title><?php echo $title; ?></title>
</head>
<body>

<!-- <div class="preloader">
<svg id="loader" width="100%" height="100%">
<path id="corners" d="m 0 12.5 l 0 -12.5 l 50 0 l 0 50 l -50 0 l 0 -37.5" />
<path id="L" d="m 18 9 l 0 30 l 16 0" />
</svg>
</div> -->


<div class="sidebar2 sidebar">
	<div class="sidebar-scroll">
		<div class="cross">
			<i class="bi bi-plus-lg"></i>
		</div>
		<div class="logo">
			<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/front/'); ?>img/logo/sanskrutik-mahotsav-logo.png" alt=""></a>
		</div>
		<p>A charitable organization or charity is an organization whose primary objectives are philanthropy & social well-being. The legal definition of a charitable organization varies between countries and in some instances regions of the country.</p>
		<div class="instagram">
			<h3>Instagram Post</h3>
			<div class="insta-thumb">
				<a href="#"><img src="<?php echo base_url('assets/front/'); ?>img/gallery/gallery-1.jpg" alt=""></a>
				<div class="insta-inner">
					<a class="image-popup" href="<?php echo base_url('assets/front/'); ?>img/gallery/gallery-1.jpg"><i class="bi bi-search"></i></a>
				</div>
			</div>
			<div class="insta-thumb">
				<a href="#"><img src="<?php echo base_url('assets/front/'); ?>img/gallery/gallery-2.jpg" alt=""></a>
				<div class="insta-inner">
					<a class="image-popup" href="<?php echo base_url('assets/front/'); ?>img/gallery/gallery-2.jpg"><i class="bi bi-search"></i></a>
				</div>
			</div>
			<div class="insta-thumb">
				<a href="#"><img src="<?php echo base_url('assets/front/'); ?>img/gallery/gallery-3.jpg" alt=""></a>
				<div class="insta-inner">
					<a class="image-popup" href="<?php echo base_url('assets/front/'); ?>img/gallery/gallery-3.jpg"><i class="bi bi-search"></i></a>
				</div>
			</div>
			<div class="insta-thumb">
				<a href="#"><img src="<?php echo base_url('assets/front/'); ?>img/gallery/gallery-4.jpg" alt=""></a>
				<div class="insta-inner">
					<a class="image-popup" href="<?php echo base_url('assets/front/'); ?>img/gallery/gallery-4.jpg"><i class="bi bi-search"></i></a>
				</div>
			</div>
			<div class="insta-thumb">
				<a href="#"><img src="<?php echo base_url('assets/front/'); ?>img/gallery/gallery-5.jpg" alt=""></a>
				<div class="insta-inner">
					<a class="image-popup" href="<?php echo base_url('assets/front/'); ?>img/gallery/gallery-5.jpg"><i class="bi bi-search"></i></a>
				</div>
			</div>
			<div class="insta-thumb">
				<a href="#"><img src="<?php echo base_url('assets/front/'); ?>img/gallery/gallery-6.jpg" alt=""></a>
				<div class="insta-inner">
					<a class="image-popup" href="<?php echo base_url('assets/front/'); ?>img/gallery/gallery-6.jpg"><i class="bi bi-search"></i></a>
				</div>
			</div>
		</div>
		<div class="our-community">
			<h3>Join Our Community</h3>
			<ul class="social-community">
				<li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
				<li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="https://pinterest.com/"><i class="fab fa-pinterest"></i></a></li>
				<li><a href="https://instagram.com/"><i class="fab fa-instagram"></i></a></li>
			</ul>
		</div>
		<div class="copy-right">
			<span>Copyright <?php echo date('Y'); ?> <b>Sanskrutik Mahotsav</b> | Design By <a href="teztecch.com" target="_blank">Teztecch</a></span>
		</div>
	</div>
</div>

<header class="header-area-2">
	<div class="header-logo">
		<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/front/'); ?>img/logo/sanskrutik-mahotsav-logo.png" alt=""></a>
	</div>
	<div class="main-menu">
		<div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
			<div class="mobile-logo-wrap ">
				<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('assets/front/'); ?>img/logo/sanskrutik-mahotsav-logo.png" width="100" alt=""></a>
			</div>
			<div class="menu-close-btn">
				<i class="bi bi-x-lg"></i>
			</div>
		</div>
		<ul class="menu-list">
			<!-- <li class="menu-item-has-children">
				<a href="#" class="drop-down">Home</a><i class='bi bi-plus dropdown-icon'></i>
				<ul class="submenu">
					<li><a href="<?php echo base_url(); ?>">Home 1</a></li>
					<li><a href="index2.html">Home 2</a></li>
				</ul>
			</li>
			<li class="menu-item-has-children">
				<a href="#" class="drop-down">Campaigns</a><i class='bi bi-plus dropdown-icon'></i>
				<ul class="submenu">
					<li><a href="project.html">Project</a></li>
					<li><a href="project-details.html">Project Details</a></li>
					<li><a href="causes.html">Causes</a></li>
					<li><a href="causes-details.html">Causes Details</a></li>
				</ul>
			</li> -->
			<li>
				<a href="#home">Home</a>
			</li>
			<li>
				<a href="#events">Events</a>
			</li>
			<li>
				<a href="#gallery">Gallery</a>
			</li>
			<li>
				<a href="#contact-us">Connect With Us</a>
			</li>
			<li>
				<a href="#terms-and-conditions">Terms And Conditions</a>
			</li>
			<!-- <li class="menu-item-has-children">
				<a href="#">Blog</a><i class='bi bi-plus dropdown-icon'></i>
				<ul class="submenu">
					<li><a href="blog.html">Blog</a></li>
					<li><a href="blog-details.html">Blog Details</a></li>
				</ul>
			</li>
			<li class="menu-item-has-children">
				<a href="#" class="drop-down">Pages</a><i class='bi bi-plus dropdown-icon'></i>
				<ul class="submenu">
					<li><a href="event.html">Event</a></li>
					<li><a href="event-details.html">Event Details</a></li>
					<li><a href="member.html">Member</a></li>
					<li><a href="member-details.html">Member Details</a></li>
					<li><a href="team.html">Join our Team</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="faq.html">FAQs</a></li>
					<li><a href="error.html">Error</a></li>
				</ul>
			</li> -->
			
		</ul>

		<!-- <div class="d-lg-none d-block">
			<form class="mobile-menu-form">
				<div class="input-with-btn d-flex flex-column">
					<input type="text" placeholder="Search here...">
					<button type="submit" class="eg-btn btn--primary btn--sm">Search</button>
				</div>
			</form>
			<div class="hotline two">
				<div class="hotline-info">
					<span>Click To Call</span>
					<h6><a href="tel:347-274-8816">+347-274-8816</a></h6>
				</div>
			</div>
		</div> -->
	</div>
	<div class="nav-right d-flex align-items-center">
		<!-- <div class="search-btn">
			<i class="bi bi-search"></i>
		</div>
		<div class="side-menu">
			<a href="javascript:void(0)" class="side-btn">
				<span class="cross-top"></span>
				<span class="cross-middle"></span>
				<span class="cross-bottom"></span>
			</a>
		</div> -->
		<div class="hotline d-xxl-flex d-none">
			<div class="hotline-icon">
				<img src="<?php echo base_url('assets/front/'); ?>img/icons/header-phone.svg" alt="">
			</div>
			<!-- <div class="hotline-info">
				<span>Click To Call</span>
				<h6><a href="tel:347-274-8816">+347-274-8816</a></h6>
			</div> -->
		</div>
		<div class="eg-btn btn--primary header-btn">
			<a class="d-flex align-items-center" href="#introduction">Generate Pass <img src="<?php echo base_url('assets/front/'); ?>img/home-page/book.svg" width="35" alt="download"></a>
		</div>
		<div class="mobile-menu-btn d-lg-none d-block">
			<span><img src="<?php echo base_url('assets/front/'); ?>img/home-page/menu.png" width="30" alt="download"></span>
		</div>
	</div>
</header>

<div class="header-search">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="search-box">
					<form action="#" method="post">
						<label>What are you looking for ?</label>
						<input type="text" placeholder="Anything need search here ...">
					</form>
					<div class="search-cross-btn">
						<i class="bi bi-x"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="hero-style-one">
	<!-- <div class="social-media">
		<ul class="footer-social gap-4">
			<li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
			<li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
			<li><a href="https://pinterest.com/"><i class="fab fa-pinterest"></i></a></li>
			<li><a href="https://instagram.com/"><i class="fab fa-instagram"></i></a></li>
		</ul>
		<h6>Follow Us</h6>
	</div>
	<div class="banner-vectors">
		<ul>
			<li class="right-top"><img src="<?php echo base_url('assets/front/'); ?>img/hero-shapes/dot-circle.png" alt="dot-circle"></li>
			<li class="right-btm"><img src="<?php echo base_url('assets/front/'); ?>img/hero-shapes/stars.png" alt="stars"></li>
			<li class="tri-angle1"><img src="<?php echo base_url('assets/front/'); ?>img/hero-shapes/tri-angle.png" alt="tri-angle"></li>
			<li class="tri-angle2"><img src="<?php echo base_url('assets/front/'); ?>img/hero-shapes/tri-angle.png" alt="tri-angle"></li>
			<li class="left-btm"><img src="<?php echo base_url('assets/front/'); ?>img/hero-shapes/wave.png" alt="wave"></li>
		</ul>
	</div> -->

	
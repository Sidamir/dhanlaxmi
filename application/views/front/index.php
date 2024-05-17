<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <!-- amir -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/images/newl-ogo.jpg">
  <title>Dhanlaxmi Tours</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/templatemo-space-dynamic.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animated.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.css">

  <!-- validation -->
  <script src="<?= base_url();?>assets/validation/jquery/jquery.js"></script>
  <script src="<?= base_url();?>assets/validation/jquery/jquery.validate.js"></script>
  <script src="<?= base_url();?>assets/validation/js/additional-methods.min.js"></script>
  <script src="<?= base_url();?>assets/validation/js/bootstrap.min.js"></script>
  <style>
    .error{
      color: red !important;
    }
  </style>
</head>

<body>


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">    
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="" class="logo">
             <img src="<?php echo base_url(); ?>assets/images/newl-ogo.jpg" alt="">
           </a>
           <!-- ***** Logo End ***** -->
           <!-- ***** Menu Start ***** -->
           <ul class="nav">
            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
            <li class="scroll-to-section"><a href="#happy-customers"> Customers</a></li>
            <li class="scroll-to-section"><a href="#about">About</a></li> 
            <li class="scroll-to-section"><a href="#packages">Packages</a></li>
            <li class="scroll-to-section"><a href="#tours-Video">Tours Video</a></li>
            <li class="scroll-to-section"><a href="#testimonial">testimonial  </a></li> 
            <li class="scroll-to-section"><div class="main-red-button"><a href="#contact">Contact Now</a></div></li> 
          </ul>        
          <a class='menu-trigger'>
            <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>

<!-- -------------------------------------------------------------------- -->
<header class="main-header">
 <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url(); ?>assets/images/banners-bg.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="mai-h2-heading">WELCOME TO DHANLAXMI TOURS AND TRAVELS</h2>
        <h5 class="mai-h5-heading">Explore world with Leading Tour Operator</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url(); ?>assets/images/second-banner-back.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
         <h2 class="mai-h2-heading">WELCOME TO DHANLAXMI TOURS AND TRAVELS</h2>
        <h5 class="mai-h5-heading">Explore world with Leading Tour Operator</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url(); ?>assets/images/bann-theree-emeg.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h2 class="mai-h2-heading">WELCOME TO DHANLAXMI TOURS AND TRAVELS</h2>
        <h5 class="mai-h5-heading">Explore world with Leading Tour Operator</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

</header>
<!-- ----------- Happy Customers ---------- -->
<section  class="services-section ptb" id="happy-customers">
  <div class="container">
    <div class="row mt-40">
      <div class="col-md-3">
        <div class="serv-section-2">
          <div class="serv-section-2-icon"> <i class="fa fa-user" aria-hidden="true"></i></div>
          <div class="serv-section-desc">
            <h4>5000 +</h4>
            <h5>Happy Customers</h5>
          </div>
          <div class="section-heading-line-left"></div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="serv-section-2">
          <div class="serv-section-2-icon"> <i class="fa fa-industry" aria-hidden="true"></i></div>
          <div class="serv-section-desc">
            <h4>Best Price </h4>
            <h5>In Industry</h5> </div>
            <div class="section-heading-line-left"></div>

          </div>
        </div>


        <div class="col-md-3">
          <div class="serv-section-2 serv-section-2-act">
            <div class="serv-section-2-icon serv-section-2-icon-act"><i class="fa fa-clock-o" aria-hidden="true"></i>
            </div>
            <div class="serv-section-desc">
              <h4>24/7 Available </h4>
              <h5>Customer Service</h5> </div>
              <div class="section-heading-line-left"></div>

            </div>
          </div>
          <div class="col-md-3">
            <div class="serv-section-2">
              <div class="serv-section-2-icon"> <i class="fa fa-laptop" aria-hidden="true"></i> </div>
              <div class="serv-section-desc">
                <h4> Hassle Free </h4>
                <h5>Bookings</h5> </div>
                <div class="section-heading-line-left"></div>

              </div>
            </div>
          </div>
        </div>
<!-- ------------------------------ -->
</section>
<!-- ----------- Happy Customers end ---------- -->

<!-- --------- ABOUT SECTION ----------------- -->
<section class="about-sec-02" id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-6 about-content-div">
       <div>
        <h4 class="about-h4">ABOUT US </h4>
        <h2 class="about-h2">Experience The World With Dhanlaxmi Tours & Travels</h2>
        <p>Dhanlaxmi Tours & Travels has been a premier tour operator since 2000, offering a comprehensive range of travel services under one roof. <br> Our CEO, equipped with a degree in Hotel Management & Catering Technology since 1998, brings a wealth of experience in the hospitality and travel sectors. <br> We specialize in organizing domestic and international tour packages, catering to FIT, GIT group, honeymoon, and educational tours. <br> Additionally, we facilitate flight, railway, bus, and hotel bookings, ensuring a seamless travel experience for our clients.</p>
      </div>
    </div>

    <div class="col-md-6">
     <div class="banner-img"><img src="<?php echo base_url(); ?>assets/images/2.png" alt=></div>
   </div>
 </div>
</div>
</section>

<!-- ------------ ABOUT SECTION END --------------- -->

<!-- ------------ OUR PACKAGES -------------- -->

<section class="hero-section" id="packages">
  <div class="container">
    <div>
      <h4 class="our-package-h4">OUR PACKAGES </h4>
      <h2 class="our-package-h2">Domestic Destinations</h2>
    </div>
    <div class="row">


<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Kerala.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Kerala</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

 <div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/kasmeer.jpg" alt=""> 
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Kashmir</h3>
     <!-- <p class="snip__text">INR 25,500</p>  -->
 </figure>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Ladakh.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Ladakh</h3>
   </figcaption>
 </figure>
</div>

   <div class="col-md-4">
    <figure class="snip">
      <img src="<?php echo base_url(); ?>assets/images/himachalp.jpg" alt="">
      <figcaption class="snip__figcaption">
       <h3 class="snip__title">Himachal Himachal-Spiti valley</h3>
       <!-- <p class="snip__text">INR 15,500</p>  -->
     </figcaption>   
   </figure>
 </div>

  <div class="col-md-4">
      <figure class="snip">
       <img src="<?php echo base_url(); ?>assets/images/tea-garden.jpg" alt="">
       <figcaption class="snip__figcaption">
         <h4 class="snip__title">Sikkim - Darjeeling</h4>
         <!-- <h3 class="snip__text">INR 29,500</h3>  -->
       </figcaption>  
     </figure>
  </div>

    <div class="col-md-4">
      <figure class="snip">
       <img src="<?php echo base_url(); ?>assets/images/goa-images.jpg" alt="">
       <figcaption class="snip__figcaption">
         <h4 class="snip__title">GOA</h4>
         <!-- <h3 class="snip__text">INR 29,500</h3>  -->
       </figcaption>  
     </figure>
  </div>

    <div class="col-md-4">
      <figure class="snip">
       <img src="<?php echo base_url(); ?>assets/images/andaman-img.jpg" alt="">
       <figcaption class="snip__figcaption">
         <h4 class="snip__title">ANDAMAN</h4>
         <!-- <h3 class="snip__text">INR 29,500</h3>  -->
       </figcaption>  
     </figure>
  </div>

    <div class="col-md-4">
      <figure class="snip">
       <img src="<?php echo base_url(); ?>assets/images/Lakshadweep.jpg" alt="">
       <figcaption class="snip__figcaption">
         <h4 class="snip__title">Lakshaweep</h4>
         <!-- <h3 class="snip__text">INR 29,500</h3>  -->
       </figcaption>  
     </figure>
  </div>

    <div class="col-md-4">
      <figure class="snip">
       <img src="<?php echo base_url(); ?>assets/images/Arunachal.jpg" alt="">
       <figcaption class="snip__figcaption">
         <h4 class="snip__title">North-East-Assam- Meghalaya- Arunachal</h4>
         <!-- <h3 class="snip__text">INR 29,500</h3>  -->
       </figcaption>  
     </figure>
  </div>

  <div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Rajasthan.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Rajasthan</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

 <div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Gujrat.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Gujrat</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

 <div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Char-Dham.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Chardham Uttrakhand </h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>



<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Nainital.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Uttaranchal Nainital - Mussoorie</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Hyderabad.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Andrapradesh- Hyderabad - Vishakhapattanam </h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>   


<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Maharashtra.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Maharashtra- kokan  </h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>


<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Temple.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Costal Karnataka-Banglore-ooty-coorg </h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Bhuvaneshvar.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title"> Odisha Puri- Bhuvaneshvar </h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/agra.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">  Uttarpradesh- Agra- Mathura- Vrundavan  </h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Omkareshwar.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">  Ujjain- Omkareshwar ,Kanha, Pachmarhi  </h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Tirupati-Balaji.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">  Ujjain- Omkareshwar ,Kanha, Pachmarhi  </h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>



<div class="container">
  <div>

    <h2 class="our-package-International "> International Tour </h2>
  </div>
  <div class="row">



     <div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Nepal.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Nepal</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

<div class="col-md-4">
  <figure class="snip">
    <img src="<?php echo base_url(); ?>assets/images/Bhutan.jpg" alt="">
    <figcaption class="snip__figcaption">
     <h3 class="snip__title">Bhutan</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Thailand.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Thailand</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Dubai.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Dubai</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

  <div class="col-md-4">
    <figure class="snip">
     <img src="<?php echo base_url(); ?>assets/images/Maldives.jpg" alt="">
     <figcaption class="snip__figcaption">
       <h3 class="snip__title">Maldives</h3>
       <!-- <h3 class="snip__text">INR 29,500</h3>  -->
     </figcaption>
   </figure>
 </div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Singapore.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title"> Bali  Singapore- Malaysia </h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>


<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Vietnam.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Vietnam</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
   </figure>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Cambodia.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Cambodia</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Azerbaijan.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Azerbaijan </h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/South-Africa.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">South-Africa</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Europe.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Europe</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>


<div class="col-md-4">
      <figure class="snip">
       <img src="<?php echo base_url(); ?>assets/images/Australia.jpg" alt="">
       <figcaption class="snip__figcaption">
         <h3 class="snip__title">Australia</h3>
         <!-- <h3 class="snip__text">INR 22,500</h3>  -->
       </figcaption>
       <a class="snip__link" href="#"></a>
     </figure>
   </div>


 <div class="col-md-4">
  <figure class="snip">
    <img src="<?php echo base_url(); ?>assets/images/Iceland.jpg" alt="">
    <figcaption class="snip__figcaption">
     <h3 class="snip__title">Iceland</h3>
     <!-- <p class="snip__text">INR 15,500</p>  -->
   </figcaption>
 </figure>
</div>


<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/petra.jpg" alt=""> 
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Jordan</h3>
     <!-- <p class="snip__text">INR 25,500</p>  -->
   </figcaption>
 </figure>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Myanmar.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Myanmar</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Uzbekistan.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Uzbekistan</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>



<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Switzerland.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Switzerland</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>




<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Hong-Kong.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Hong Kong</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>





<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Seychelles.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Seychelles</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Mauritius.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Mauritius</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/New-Zealand.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">New Zealand</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>



<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Bali.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Bali </h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Egypt.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Egypt</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>








<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Sri-Lanka.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Sri Lanka</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>





<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Turkey.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Turkey</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>






<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Kenya.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Kenya</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/UAE.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">UAE</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/China.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">China</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Japan.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Japan</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Canada.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Canada</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>

<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/USA.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">USA</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>


<div class="col-md-4">
  <figure class="snip">
   <img src="<?php echo base_url(); ?>assets/images/Russia.jpg" alt="">
   <figcaption class="snip__figcaption">
     <h3 class="snip__title">Russia</h3>
     <!-- <p class="snip__text">INR 22,500</p>  -->
   </figcaption>
 </figure>
</div>



</div>
</div>
</section>
<!-- ------------ OUR PACKAGES SECTION END -------------- -->

<section class="img-section">
  <div class="slider">
     <img src="<?php echo base_url(); ?>assets/images/myimg.jpg" alt="">
     <img src="<?php echo base_url(); ?>assets/images/imagesslider.jpg" alt="">
     <img src="<?php echo base_url(); ?>assets/images/image1.jpg" alt="">
      <img src="<?php echo base_url(); ?>assets/images/image2.jpg" alt="">
      <img src="<?php echo base_url(); ?>assets/images/image3.jpg" alt="">
      <img src="<?php echo base_url(); ?>assets/images/image.jpg" alt="">
       <img src="<?php echo base_url(); ?>assets/images/image5.jpg" alt="">
       <img src="<?php echo base_url(); ?>assets/images/image6.jpg" alt="">
  </div>
</section>

<!-- ------------------ video section -------------------- -->
<section   class="video-section" id="tours-Video">
 <div class="feature">
  <div class="container">
    <div class="row">
      <div class="videos-heading-div">
        <h2>TOURS VIDEO</h2>

        <div class="separator"></div>
      </div>

      <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
        <div class="feature-main">
          <div class="feature-box">
           <img src="<?php echo base_url(); ?>assets/images/nepal-new.jpg" alt="">
           <div class="cover"></div>
         </div>
         <div class="feature-head">
          <h3 class="nepal-text">Nepal, India</h3>
          <a href="https://youtu.be/jV_sysZQr98">CLICK HERE<i class="fa fa-file-video-o" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
      <div class="feature-main">
        <div class="feature-box">
          <img src="<?php echo base_url(); ?>assets/images/Arunachal-Pradesh.jpg" alt="">
          <div class="cover"></div>
        </div>
        <div class="feature-head">
          <h3 class="nepal-text">Arunachal Pradesh, India</h3>
          <a href="https://www.youtube.com/embed/G2xfwKN_6mQ?si=O8B1Fx0dJnM2XBwF">CLICK HERE<i class="fa fa-file-video-o" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4">
      <div class="feature-main">
        <div class="feature-box">
          <img src="<?php echo base_url(); ?>assets/images/Bhutan-1.jpg" alt="">
          <div class="cover"></div>
        </div>
        <div class="feature-head">
          <h3 class="nepal-text">Bhutan, India</h3>
          <a href="https://www.youtube.com/embed/irauq81bCy8?si=Vovzb1UYlPuGJ3CB">CLICK HERE<i class="fa fa-file-video-o" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4 mt-5">
      <div class="feature-main">
        <div class="feature-box">
          <img src="<?php echo base_url(); ?>assets/images/lad.jpg" alt="">
          <div class="cover"></div>
        </div>
        <div class="feature-head">
          <h3 class="nepal-text">Ladakh</h3>
          <a href="https://youtu.be/aTXgBxs_LTg?si=ijlfFsC6Jemxo7Ee">CLICK HERE<i class="fa fa-file-video-o" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4 mt-5">
      <div class="feature-main">
        <div class="feature-box">
          <img src="<?php echo base_url(); ?>assets/images/beautiful.jpg" alt="">
          <div class="cover"></div>
        </div>
        <div class="feature-head">
          <h3 class="nepal-text">Best & most beautiful Places of Asia</h3>
          <a href="https://www.youtube.com/embed/nEYrrmtCis8?si=7l85yk8F-ZML5fwt">CLICK HERE<i class="fa fa-file-video-o" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4 mt-5">
      <div class="feature-main">
        <div class="feature-box">
          <img src="<?php echo base_url(); ?>assets/images/Auli-Tour.jpg" alt="">
          <div class="cover"></div>
        </div>
        <div class="feature-head">
          <h3 class="nepal-text">Auli Tour at UK</h3>
          <a href="https://www.youtube.com/embed/hVpScvo34os?si=msI4wpkonWWh9h0i">CLICK HERE<i class="fa fa-file-video-o" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4 mt-5">
      <div class="feature-main">
        <div class="feature-box">
          <img src="<?php echo base_url(); ?>assets/images/Keralanew.jpg" alt="">
          <div class="cover"></div>
        </div>
        <div class="feature-head">
          <h3 class="nepal-text">Kerala </h3>
          <a href="https://youtu.be/4PM3th72Bfw?si=-UqEnZPj86JsT7ag">CLICK HERE<i class="fa fa-file-video-o" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    
    <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4 mt-5">
      <div class="feature-main">
        <div class="feature-box">
          <img src="<?php echo base_url(); ?>assets/images/Islands.jpg" alt="">
          <div class="cover"></div>
        </div>
        <div class="feature-head">
          <h3 class="nepal-text">Andaman Nicobar Islands</h3>
          <a href="https://youtu.be/H3mTLCJ6ajo?si=OLEVvM5ZcPtopbUR">CLICK HERE<i class="fa fa-file-video-o" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>

    <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4 mt-5">
      <div class="feature-main">
        <div class="feature-box">
          <img src="<?php echo base_url(); ?>assets/images/Darjeeling1.jpg" alt="">
          <div class="cover"></div>
        </div>
        <div class="feature-head">
          <h3 class="nepal-text">Darjeeling</h3>
          <a href="https://youtu.be/Sanoa5lGwUw?si=_bU5-fZgAqtlMDp0">CLICK HERE<i class="fa fa-file-video-o" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    
    <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4 mt-5">
      <div class="feature-main">
        <div class="feature-box">
          <img src="<?php echo base_url(); ?>assets/images/Assam1.jpg" alt="">
          <div class="cover"></div>
        </div>
        <div class="feature-head">
          <h3 class="nepal-text">Assam</h3>
          <a href="https://youtu.be/ZcHBqHTlU6E?si=A0Zcqj9_lmnHVlFH">CLICK HERE<i class="fa fa-file-video-o" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    
   <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4 mt-5">
      <div class="feature-main">
        <div class="feature-box">
          <img src="<?php echo base_url(); ?>assets/images/Pahalgam.jpg" alt="">
          <div class="cover"></div>
        </div>
        <div class="feature-head">
          <h3 class="nepal-text">Pahalgam</h3>
          <a href="https://youtu.be/036LNlWtNuA?si=0SXrgonTZcaIL_fz">CLICK HERE<i class="fa fa-file-video-o" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    

    <div class="col-md-4 col-xs-12 col-sm-4 col-lg-4 mt-5">
      <div class="feature-main">
        <div class="feature-box">
          <img src="<?php echo base_url(); ?>assets/images/sikkim.jpg" alt="">
          <div class="cover"></div>
        </div>
        <div class="feature-head">
          <h3 class="nepal-text">Escape To Sikkim</h3>
          <a href="https://youtu.be/jQMTLEShpXE?si=pQQOm4jHAdO9JQLl">CLICK HERE<i class="fa fa-file-video-o" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
    



  </div>
</div>
</div>
</div>
</section>



<!-- -------------- TESTIMONIAL ---------------- --->



<section class="testimonial-section ptb" id="testimonial">
  <div class="testimonial-main-div text-center">
   <div class="testimonial-heading-div">

    <h2>CUSTOMERS LOVE US</h2>
  </div>
   <!-- <div id="video-container">
        <video autoplay loop muted>
            <source src="<?php echo base_url(); ?>assets/images/2218188_Danyang_Paragliding_Many_1280x720.mp4" type="video/mp4">
            
        </video>
      </div> -->
      <article id="slider">
        <input checked type='radio' name='slider' id='slide1'/>
        <input type='radio' name='slider' id='slide2'/>
        <input type='radio' name='slider' id='slide3'/>
        <input type='radio' name='slider' id='slide4'/>
        <input type='radio' name='slider' id='slide5'/>
        <div id="slides">
          <div id="container">
            <div class="inner">
              <article>
                <div class="review-div">

                  <div class="review-content-div">
                    <div class="row">
                      <div class="col-lg-6 client-img-main-div" >
                        <div class="client-img-div">
                          <img src="<?php echo base_url(); ?>assets/images/review-dummy-img.jpeg" alt="">
                          <div class="circle"></div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="testimonial-content-div">
                          <p class="testimonial-content-p"> 
                          Very nice organization of Dhanlaxmi tour And Travel Company. We all Very Happy to visit Bhutan tour. </p>
                          <h2> SHARAD KSHATRIYA </h2>

                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article>
                <div class="review-div">

                  <div class="review-content-div">
                    <div class="row">
                      <div class="col-lg-6 client-img-main-div" >
                        <div class="client-img-div">
                          <img src="<?php echo base_url(); ?>assets/images/dammyman.jpg" alt="">
                          <div class="circle"></div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="testimonial-content-div">
                          <p class="testimonial-content-p">Best service provided for tour planning in budget. Itinerary was perfect. Hotels and transportation services provided were very good and professional. They also took timely follow up with us and the local guide about the how the tour is going. Would definitely choose and recommend Dhanlaxmi tours and travels everytime.
                          </p>
                          <h2> AMEYA PAGORE  </h2>

                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article>
                <div class="review-div">
                  <div class="review-content-div">
                    <div class="row">
                      <div class="col-lg-6 client-img-main-div" >
                        <div class="client-img-div">
                          <img src="<?php echo base_url(); ?>assets/images/review-dummy-img.jpeg" alt="">
                          <div class="circle"></div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="testimonial-content-div">
                          <p class="testimonial-content-p">  Excellent service, superb Management and above yummy and home made food at every destination. Highly recommended Must book your holidays with Dhanlaxmi Tours and Travels.</p>
                          <h2>SHITAL BORA PADGELWAR</h2>

                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article>
                <div class="review-div">

                  <div class="review-content-div">
                    <div class="row">
                      <div class="col-lg-6 client-img-main-div" >
                        <div class="client-img-div">
                          <img src="<?php echo base_url(); ?>assets/images/dammyman.jpg" alt="">
                          <div class="circle"></div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="testimonial-content-div">
                          <p class="testimonial-content-p"> 
                          Excellent tour planner...at Kanha Resort where we had exquisite food....spacious rooms with jungle safari ..all planned up to date......Well co-ordinated and also anticipated changes when wanted...Thanx to Dhanlaxmi Travels...and Mr. MARMIK</p>
                          <h2> ASHISH KOSHY </h2>

                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>
              <article>
                <div class="review-div">

                  <div class="review-content-div">
                    <div class="row">
                      <div class="col-lg-6 client-img-main-div" >
                        <div class="client-img-div">
                          <img src="<?php echo base_url(); ?>assets/images/review-dummy-img.jpeg" alt="">
                          <div class="circle"></div>
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="testimonial-content-div">
                          <p class="testimonial-content-p"> 
                          Excellent travel planning executed by Mr.Marmik Shende owner for our family visit to Kanha National Park.</p>
                          <h2>ELISHAMA KOSHY </h2>

                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                          <i class="fa-solid fa-star" style="color: #fe3f40;font-size: 20px;"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </article>


            </div>
          </div>
        </div>
        <div id="commands">
          <label for='slide1'></label>
          <label for='slide2'></label>
          <label for='slide3'></label>
          <label for='slide4'></label>
          <label for='slide5'></label>

        </div>

        <div id="active">
          <label for='slide1'></label>
          <label for='slide2'></label>
          <label for='slide3'></label>
          <label for='slide4'></label>
          <label for='slide5'></label>
        </article>
        <button class="read-more-button"><a href="https://www.google.com/search?q=dhanlaxmi+Tours&rlz=1C1CHBD_enIN1100IN1100&oq=dhanlaxmi+Tours&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIHCAEQABiABDINCAIQLhivARjHARiABDIGCAMQRRg7MhAIBBAuGK8BGMcBGIAEGI4FMggIBRAAGBYYHjIGCAYQRRg8MgYIBxBFGEHSAQkxMTIzOGowajSoAgCwAgE&sourceid=chrome&ie=UTF-8#lrd=0x3bd4c0b967b1cfa5:0xf9f377ac05e8d640,1,,,,">REVIEW MORE</a></button> 
      </div>
    </section> 
    <!-- -------------- TESTIMONIAL ---------------- --->

    <!-- ------------- CONTACT SECTION ------------------- -->
    <section>
      <div id="contact" class="contact-us section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="section-heading">

                <img src="<?php echo base_url(); ?>assets/images/Travel Package Instagram Post (2).png" alt=>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doer ket eismod tempor incididunt ut labore et dolores</p> -->
              </div>
            </div>
            <div class="col-lg-6">
              <h2 class="main-h2">Feel Free To Send Us a Message About Your Website Needs</h2>
              <form id="contact" action="<?php echo base_url('contact-submit'); ?>" method="post">
                <div class="row">
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="name" name="name" id="name" placeholder="Name" >
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="surname" name="surname" id="surname" placeholder="Surname"  >
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="Mobile No" name="mobile" id="MobileNo" placeholder="Mobile No"  >
                    </fieldset>
                  </div>
                  <div class="col-lg-6">
                    <fieldset>
                      <input type="Destination" name="destination" id="Destination" placeholder="Destination"  >
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <input type="text" name="email" id="email" pattern="[^ @]@[^ @]" placeholder="Your Email" >
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" ></textarea>  
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" value="submit" id="form-submit" class="main-button ">Send Message</button>
                    </fieldset>
                  </div>
                </div>
                </form>
                <div class="contact-dec">
                  <img src="<?php echo base_url(); ?>assets/images/contact-decoration.png" alt="">
                </div>

              
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ----------- footer section ------------------------ --> 

    <section class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="contact-content text-center">
              <a href="#"><img src="<?php echo base_url(); ?>assets/images/newl-ogo.jpg" alt=""></a>

              <div class="hr"></div>
              <a href="https://maps.app.goo.gl/WVSLL6Hgj8RUFVRHA"> <p class="copyright-footer">Rahul Complex, Wing 1, Block No. 40 Near S.T. Stand, Ganeshpeth , Nagpur,Maharashtra - 440018</p>   </a> 
             
              <h6 class="copyright-footer"><a href="tel:+07123585276">+07123585276</a> <span>|</span> <a href="tel:+9373657272">+9373657272</a> <span>|</span> <a href="mailto:dhanlaxmitours@gmail.com">dhanlaxmitours@gmail.com</a> </h6>
              <div class="contact-social">
                <ul>
                  <li><a class="hover-target" href="https://www.facebook.com/marmikws"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a class="hover-target" href="https://www.instagram.com/marmikshende/"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="main-footer">
      <!-- --------------- footer section end ------------------------- -->


      <P  class="copyright-footer"> COPYRIGHT © 2024 –<a href="https://www.dhanlaxmitour.com/" style="color: red;"> 
      DHANLAXMITOUR </a> – DESIGNED BY <a href="https://www.teztecch.com/" style="color:red;">TEZTECCH</a></P>
    </footer>
    <script src="<?php echo base_url(); ?>assets/validation/js/js/register_form_validation.js"></script>

    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/owl-carousel.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/animation.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/imagesloaded.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/templatemo-custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script type="text/javascript">
  jQuery(document).ready(function($) {
      $('.slider').slick({
        dots: false,
        infinite: true,
        speed: 100,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: true,
        responsive: [{
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
           breakpoint: 400,
           settings: {
              arrows: false,
              slidesToShow: 1,
              slidesToScroll: 1
           }
        }]
    });
});


!function(a){"use strict";"function"==typeof define&&define.amd?define(["jquery"],a):"undefined"!=typeof exports?module.exports=a(require("jquery")):a(jQuery)}(function(a){"use strict";var b=window.Slick||{};b=function(){function c(c,d){var f,e=this;e.defaults={accessibility:!0,adaptiveHeight:!1,appendArrows:a(c),appendDots:a(c),arrows:!0,asNavFor:null,prevArrow:'<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button">Previous</button>',nextArrow:'<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button">Next</button>',autoplay:!1,autoplaySpeed:3e3,centerMode:!1,centerPadding:"50px",cssEase:"ease",customPaging:function(a,b){return'<button type="button" data-role="none" role="button" aria-required="false" tabindex="0">'+(b+1)+"</button>"},dots:!1,dotsClass:"slick-dots",draggable:!0,easing:"linear",edgeFriction:.35,fade:!1,focusOnSelect:!1,infinite:!0,initialSlide:0,lazyLoad:"ondemand",mobileFirst:!1,pauseOnHover:!0,pauseOnDotsHover:!1,respondTo:"window",responsive:null,rows:1,rtl:!1,slide:"",slidesPerRow:1,slidesToShow:1,slidesToScroll:1,speed:500,swipe:!0,swipeToSlide:!1,touchMove:!0,touchThreshold:5,useCSS:!0,variableWidth:!1,vertical:!1,verticalSwiping:!1,waitForAnimate:!0,zIndex:1e3},e.initials={animating:!1,dragging:!1,autoPlayTimer:null,currentDirection:0,currentLeft:null,currentSlide:0,direction:1,$dots:null,listWidth:null,listHeight:null,loadIndex:0,$nextArrow:null,$prevArrow:null,slideCount:null,slideWidth:null,$slideTrack:null,$slides:null,sliding:!1,slideOffset:0,swipeLeft:null,$list:null,touchObject:{},transformsEnabled:!1,unslicked:!1},a.extend(e,e.initials),e.activeBreakpoint=null,e.animType=null,e.animProp=null,e.breakpoints=[],e.breakpointSettings=[],e.cssTransitions=!1,e.hidden="hidden",e.paused=!1,e.positionProp=null,e.respondTo=null,e.rowCount=1,e.shouldClick=!0,e.$slider=a(c),e.$slidesCache=null,e.transformType=null,e.transitionType=null,e.visibilityChange="visibilitychange",e.windowWidth=0,e.windowTimer=null,f=a(c).data("slick")||{},e.options=a.extend({},e.defaults,f,d),e.currentSlide=e.options.initialSlide,e.originalSettings=e.options,"undefined"!=typeof document.mozHidden?(e.hidden="mozHidden",e.visibilityChange="mozvisibilitychange"):"undefined"!=typeof document.webkitHidden&&(e.hidden="webkitHidden",e.visibilityChange="webkitvisibilitychange"),e.autoPlay=a.proxy(e.autoPlay,e),e.autoPlayClear=a.proxy(e.autoPlayClear,e),e.changeSlide=a.proxy(e.changeSlide,e),e.clickHandler=a.proxy(e.clickHandler,e),e.selectHandler=a.proxy(e.selectHandler,e),e.setPosition=a.proxy(e.setPosition,e),e.swipeHandler=a.proxy(e.swipeHandler,e),e.dragHandler=a.proxy(e.dragHandler,e),e.keyHandler=a.proxy(e.keyHandler,e),e.autoPlayIterator=a.proxy(e.autoPlayIterator,e),e.instanceUid=b++,e.htmlExpr=/^(?:\s*(<[\w\W]+>)[^>]*)$/,e.registerBreakpoints(),e.init(!0),e.checkResponsive(!0)}var b=0;return c}(),b.prototype.addSlide=b.prototype.slickAdd=function(b,c,d){var e=this;if("boolean"==typeof c)d=c,c=null;else if(0>c||c>=e.slideCount)return!1;e.unload(),"number"==typeof c?0===c&&0===e.$slides.length?a(b).appendTo(e.$slideTrack):d?a(b).insertBefore(e.$slides.eq(c)):a(b).insertAfter(e.$slides.eq(c)):d===!0?a(b).prependTo(e.$slideTrack):a(b).appendTo(e.$slideTrack),e.$slides=e.$slideTrack.children(this.options.slide),e.$slideTrack.children(this.options.slide).detach(),e.$slideTrack.append(e.$slides),e.$slides.each(function(b,c){a(c).attr("data-slick-index",b)}),e.$slidesCache=e.$slides,e.reinit()},b.prototype.animateHeight=function(){var a=this;if(1===a.options.slidesToShow&&a.options.adaptiveHeight===!0&&a.options.vertical===!1){var b=a.$slides.eq(a.currentSlide).outerHeight(!0);a.$list.animate({height:b},a.options.speed)}},b.prototype.animateSlide=function(b,c){var d={},e=this;e.animateHeight(),e.options.rtl===!0&&e.options.vertical===!1&&(b=-b),e.transformsEnabled===!1?e.options.vertical===!1?e.$slideTrack.animate({left:b},e.options.speed,e.options.easing,c):e.$slideTrack.animate({top:b},e.options.speed,e.options.easing,c):e.cssTransitions===!1?(e.options.rtl===!0&&(e.currentLeft=-e.currentLeft),a({animStart:e.currentLeft}).animate({animStart:b},{duration:e.options.speed,easing:e.options.easing,step:function(a){a=Math.ceil(a),e.options.vertical===!1?(d[e.animType]="translate("+a+"px, 0px)",e.$slideTrack.css(d)):(d[e.animType]="translate(0px,"+a+"px)",e.$slideTrack.css(d))},complete:function(){c&&c.call()}})):(e.applyTransition(),b=Math.ceil(b),d[e.animType]=e.options.vertical===!1?"translate3d("+b+"px, 0px, 0px)":"translate3d(0px,"+b+"px, 0px)",e.$slideTrack.css(d),c&&setTimeout(function(){e.disableTransition(),c.call()},e.options.speed))},b.prototype.asNavFor=function(b){var c=this,d=c.options.asNavFor;d&&null!==d&&(d=a(d).not(c.$slider)),null!==d&&"object"==typeof d&&d.each(function(){var c=a(this).slick("getSlick");c.unslicked||c.slideHandler(b,!0)})},b.prototype.applyTransition=function(a){var b=this,c={};c[b.transitionType]=b.options.fade===!1?b.transformType+" "+b.options.speed+"ms "+b.options.cssEase:"opacity "+b.options.speed+"ms "+b.options.cssEase,b.options.fade===!1?b.$slideTrack.css(c):b.$slides.eq(a).css(c)},b.prototype.autoPlay=function(){var a=this;a.autoPlayTimer&&clearInterval(a.autoPlayTimer),a.slideCount>a.options.slidesToShow&&a.paused!==!0&&(a.autoPlayTimer=setInterval(a.autoPlayIterator,a.options.autoplaySpeed))},b.prototype.autoPlayClear=function(){var a=this;a.autoPlayTimer&&clearInterval(a.autoPlayTimer)},b.prototype.autoPlayIterator=function(){var a=this;a.options.infinite===!1?1===a.direction?(a.currentSlide+1===a.slideCount-1&&(a.direction=0),a.slideHandler(a.currentSlide+a.options.slidesToScroll)):(0===a.currentSlide-1&&(a.direction=1),a.slideHandler(a.currentSlide-a.options.slidesToScroll)):a.slideHandler(a.currentSlide+a.options.slidesToScroll)},b.prototype.buildArrows=function(){var b=this;b.options.arrows===!0&&(b.$prevArrow=a(b.options.prevArrow).addClass("slick-arrow"),b.$nextArrow=a(b.options.nextArrow).addClass("slick-arrow"),b.slideCount>b.options.slidesToShow?(b.$prevArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"),b.$nextArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"),b.htmlExpr.test(b.options.prevArrow)&&b.$prevArrow.prependTo(b.options.appendArrows),b.htmlExpr.test(b.options.nextArrow)&&b.$nextArrow.appendTo(b.options.appendArrows),b.options.infinite!==!0&&b.$prevArrow.addClass("slick-disabled").attr("aria-disabled","true")):b.$prevArrow.add(b.$nextArrow).addClass("slick-hidden").attr({"aria-disabled":"true",tabindex:"-1"}))},b.prototype.buildDots=function(){var c,d,b=this;if(b.options.dots===!0&&b.slideCount>b.options.slidesToShow){for(d='<ul class="'+b.options.dotsClass+'">',c=0;c<=b.getDotCount();c+=1)d+="<li>"+b.options.customPaging.call(this,b,c)+"</li>";d+="</ul>",b.$dots=a(d).appendTo(b.options.appendDots),b.$dots.find("li").first().addClass("slick-active").attr("aria-hidden","false")}},b.prototype.buildOut=function(){var b=this;b.$slides=b.$slider.children(b.options.slide+":not(.slick-cloned)").addClass("slick-slide"),b.slideCount=b.$slides.length,b.$slides.each(function(b,c){a(c).attr("data-slick-index",b).data("originalStyling",a(c).attr("style")||"")}),b.$slidesCache=b.$slides,b.$slider.addClass("slick-slider"),b.$slideTrack=0===b.slideCount?a('<div class="slick-track"/>').appendTo(b.$slider):b.$slides.wrapAll('<div class="slick-track"/>').parent(),b.$list=b.$slideTrack.wrap('<div aria-live="polite" class="slick-list"/>').parent(),b.$slideTrack.css("opacity",0),(b.options.centerMode===!0||b.options.swipeToSlide===!0)&&(b.options.slidesToScroll=1),a("img[data-lazy]",b.$slider).not("[src]").addClass("slick-loading"),b.setupInfinite(),b.buildArrows(),b.buildDots(),b.updateDots(),b.setSlideClasses("number"==typeof b.currentSlide?b.currentSlide:0),b.options.draggable===!0&&b.$list.addClass("draggable")},b.prototype.buildRows=function(){var b,c,d,e,f,g,h,a=this;if(e=document.createDocumentFragment(),g=a.$slider.children(),a.options.rows>1){for(h=a.options.slidesPerRow*a.options.rows,f=Math.ceil(g.length/h),b=0;f>b;b++){var i=document.createElement("div");for(c=0;c<a.options.rows;c++){var j=document.createElement("div");for(d=0;d<a.options.slidesPerRow;d++){var k=b*h+(c*a.options.slidesPerRow+d);g.get(k)&&j.appendChild(g.get(k))}i.appendChild(j)}e.appendChild(i)}a.$slider.html(e),a.$slider.children().children().children().css({width:100/a.options.slidesPerRow+"%",display:"inline-block"})}},b.prototype.checkResponsive=function(b,c){var e,f,g,d=this,h=!1,i=d.$slider.width(),j=window.innerWidth||a(window).width();if("window"===d.respondTo?g=j:"slider"===d.respondTo?g=i:"min"===d.respondTo&&(g=Math.min(j,i)),d.options.responsive&&d.options.responsive.length&&null!==d.options.responsive){f=null;for(e in d.breakpoints)d.breakpoints.hasOwnProperty(e)&&(d.originalSettings.mobileFirst===!1?g<d.breakpoints[e]&&(f=d.breakpoints[e]):g>d.breakpoints[e]&&(f=d.breakpoints[e]));null!==f?null!==d.activeBreakpoint?(f!==d.activeBreakpoint||c)&&(d.activeBreakpoint=f,"unslick"===d.breakpointSettings[f]?d.unslick(f):(d.options=a.extend({},d.originalSettings,d.breakpointSettings[f]),b===!0&&(d.currentSlide=d.options.initialSlide),d.refresh(b)),h=f):(d.activeBreakpoint=f,"unslick"===d.breakpointSettings[f]?d.unslick(f):(d.options=a.extend({},d.originalSettings,d.breakpointSettings[f]),b===!0&&(d.currentSlide=d.options.initialSlide),d.refresh(b)),h=f):null!==d.activeBreakpoint&&(d.activeBreakpoint=null,d.options=d.originalSettings,b===!0&&(d.currentSlide=d.options.initialSlide),d.refresh(b),h=f),b||h===!1||d.$slider.trigger("breakpoint",[d,h])}},b.prototype.changeSlide=function(b,c){var f,g,h,d=this,e=a(b.target);switch(e.is("a")&&b.preventDefault(),e.is("li")||(e=e.closest("li")),h=0!==d.slideCount%d.options.slidesToScroll,f=h?0:(d.slideCount-d.currentSlide)%d.options.slidesToScroll,b.data.message){case"previous":g=0===f?d.options.slidesToScroll:d.options.slidesToShow-f,d.slideCount>d.options.slidesToShow&&d.slideHandler(d.currentSlide-g,!1,c);break;case"next":g=0===f?d.options.slidesToScroll:f,d.slideCount>d.options.slidesToShow&&d.slideHandler(d.currentSlide+g,!1,c);break;case"index":var i=0===b.data.index?0:b.data.index||e.index()*d.options.slidesToScroll;d.slideHandler(d.checkNavigable(i),!1,c),e.children().trigger("focus");break;default:return}},b.prototype.checkNavigable=function(a){var c,d,b=this;if(c=b.getNavigableIndexes(),d=0,a>c[c.length-1])a=c[c.length-1];else for(var e in c){if(a<c[e]){a=d;break}d=c[e]}return a},b.prototype.cleanUpEvents=function(){var b=this;b.options.dots&&null!==b.$dots&&(a("li",b.$dots).off("click.slick",b.changeSlide),b.options.pauseOnDotsHover===!0&&b.options.autoplay===!0&&a("li",b.$dots).off("mouseenter.slick",a.proxy(b.setPaused,b,!0)).off("mouseleave.slick",a.proxy(b.setPaused,b,!1))),b.options.arrows===!0&&b.slideCount>b.options.slidesToShow&&(b.$prevArrow&&b.$prevArrow.off("click.slick",b.changeSlide),b.$nextArrow&&b.$nextArrow.off("click.slick",b.changeSlide)),b.$list.off("touchstart.slick mousedown.slick",b.swipeHandler),b.$list.off("touchmove.slick mousemove.slick",b.swipeHandler),b.$list.off("touchend.slick mouseup.slick",b.swipeHandler),b.$list.off("touchcancel.slick mouseleave.slick",b.swipeHandler),b.$list.off("click.slick",b.clickHandler),a(document).off(b.visibilityChange,b.visibility),b.$list.off("mouseenter.slick",a.proxy(b.setPaused,b,!0)),b.$list.off("mouseleave.slick",a.proxy(b.setPaused,b,!1)),b.options.accessibility===!0&&b.$list.off("keydown.slick",b.keyHandler),b.options.focusOnSelect===!0&&a(b.$slideTrack).children().off("click.slick",b.selectHandler),a(window).off("orientationchange.slick.slick-"+b.instanceUid,b.orientationChange),a(window).off("resize.slick.slick-"+b.instanceUid,b.resize),a("[draggable!=true]",b.$slideTrack).off("dragstart",b.preventDefault),a(window).off("load.slick.slick-"+b.instanceUid,b.setPosition),a(document).off("ready.slick.slick-"+b.instanceUid,b.setPosition)},b.prototype.cleanUpRows=function(){var b,a=this;a.options.rows>1&&(b=a.$slides.children().children(),b.removeAttr("style"),a.$slider.html(b))},b.prototype.clickHandler=function(a){var b=this;b.shouldClick===!1&&(a.stopImmediatePropagation(),a.stopPropagation(),a.preventDefault())},b.prototype.destroy=function(b){var c=this;c.autoPlayClear(),c.touchObject={},c.cleanUpEvents(),a(".slick-cloned",c.$slider).detach(),c.$dots&&c.$dots.remove(),c.options.arrows===!0&&(c.$prevArrow&&c.$prevArrow.length&&(c.$prevArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display",""),c.htmlExpr.test(c.options.prevArrow)&&c.$prevArrow.remove()),c.$nextArrow&&c.$nextArrow.length&&(c.$nextArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display",""),c.htmlExpr.test(c.options.nextArrow)&&c.$nextArrow.remove())),c.$slides&&(c.$slides.removeClass("slick-slide slick-active slick-center slick-visible slick-current").removeAttr("aria-hidden").removeAttr("data-slick-index").each(function(){a(this).attr("style",a(this).data("originalStyling"))}),c.$slideTrack.children(this.options.slide).detach(),c.$slideTrack.detach(),c.$list.detach(),c.$slider.append(c.$slides)),c.cleanUpRows(),c.$slider.removeClass("slick-slider"),c.$slider.removeClass("slick-initialized"),c.unslicked=!0,b||c.$slider.trigger("destroy",[c])},b.prototype.disableTransition=function(a){var b=this,c={};c[b.transitionType]="",b.options.fade===!1?b.$slideTrack.css(c):b.$slides.eq(a).css(c)},b.prototype.fadeSlide=function(a,b){var c=this;c.cssTransitions===!1?(c.$slides.eq(a).css({zIndex:c.options.zIndex}),c.$slides.eq(a).animate({opacity:1},c.options.speed,c.options.easing,b)):(c.applyTransition(a),c.$slides.eq(a).css({opacity:1,zIndex:c.options.zIndex}),b&&setTimeout(function(){c.disableTransition(a),b.call()},c.options.speed))},b.prototype.fadeSlideOut=function(a){var b=this;b.cssTransitions===!1?b.$slides.eq(a).animate({opacity:0,zIndex:b.options.zIndex-2},b.options.speed,b.options.easing):(b.applyTransition(a),b.$slides.eq(a).css({opacity:0,zIndex:b.options.zIndex-2}))},b.prototype.filterSlides=b.prototype.slickFilter=function(a){var b=this;null!==a&&(b.unload(),b.$slideTrack.children(this.options.slide).detach(),b.$slidesCache.filter(a).appendTo(b.$slideTrack),b.reinit())},b.prototype.getCurrent=b.prototype.slickCurrentSlide=function(){var a=this;return a.currentSlide},b.prototype.getDotCount=function(){var a=this,b=0,c=0,d=0;if(a.options.infinite===!0)for(;b<a.slideCount;)++d,b=c+a.options.slidesToShow,c+=a.options.slidesToScroll<=a.options.slidesToShow?a.options.slidesToScroll:a.options.slidesToShow;else if(a.options.centerMode===!0)d=a.slideCount;else for(;b<a.slideCount;)++d,b=c+a.options.slidesToShow,c+=a.options.slidesToScroll<=a.options.slidesToShow?a.options.slidesToScroll:a.options.slidesToShow;return d-1},b.prototype.getLeft=function(a){var c,d,f,b=this,e=0;return b.slideOffset=0,d=b.$slides.first().outerHeight(!0),b.options.infinite===!0?(b.slideCount>b.options.slidesToShow&&(b.slideOffset=-1*b.slideWidth*b.options.slidesToShow,e=-1*d*b.options.slidesToShow),0!==b.slideCount%b.options.slidesToScroll&&a+b.options.slidesToScroll>b.slideCount&&b.slideCount>b.options.slidesToShow&&(a>b.slideCount?(b.slideOffset=-1*(b.options.slidesToShow-(a-b.slideCount))*b.slideWidth,e=-1*(b.options.slidesToShow-(a-b.slideCount))*d):(b.slideOffset=-1*b.slideCount%b.options.slidesToScroll*b.slideWidth,e=-1*b.slideCount%b.options.slidesToScroll*d))):a+b.options.slidesToShow>b.slideCount&&(b.slideOffset=(a+b.options.slidesToShow-b.slideCount)*b.slideWidth,e=(a+b.options.slidesToShow-b.slideCount)*d),b.slideCount<=b.options.slidesToShow&&(b.slideOffset=0,e=0),b.options.centerMode===!0&&b.options.infinite===!0?b.slideOffset+=b.slideWidth*Math.floor(b.options.slidesToShow/2)-b.slideWidth:b.options.centerMode===!0&&(b.slideOffset=0,b.slideOffset+=b.slideWidth*Math.floor(b.options.slidesToShow/2)),c=b.options.vertical===!1?-1*a*b.slideWidth+b.slideOffset:-1*a*d+e,b.options.variableWidth===!0&&(f=b.slideCount<=b.options.slidesToShow||b.options.infinite===!1?b.$slideTrack.children(".slick-slide").eq(a):b.$slideTrack.children(".slick-slide").eq(a+b.options.slidesToShow),c=f[0]?-1*f[0].offsetLeft:0,b.options.centerMode===!0&&(f=b.options.infinite===!1?b.$slideTrack.children(".slick-slide").eq(a):b.$slideTrack.children(".slick-slide").eq(a+b.options.slidesToShow+1),c=f[0]?-1*f[0].offsetLeft:0,c+=(b.$list.width()-f.outerWidth())/2)),c},b.prototype.getOption=b.prototype.slickGetOption=function(a){var b=this;return b.options[a]},b.prototype.getNavigableIndexes=function(){var e,a=this,b=0,c=0,d=[];for(a.options.infinite===!1?e=a.slideCount:(b=-1*a.options.slidesToScroll,c=-1*a.options.slidesToScroll,e=2*a.slideCount);e>b;)d.push(b),b=c+a.options.slidesToScroll,c+=a.options.slidesToScroll<=a.options.slidesToShow?a.options.slidesToScroll:a.options.slidesToShow;return d},b.prototype.getSlick=function(){return this},b.prototype.getSlideCount=function(){var c,d,e,b=this;return e=b.options.centerMode===!0?b.slideWidth*Math.floor(b.options.slidesToShow/2):0,b.options.swipeToSlide===!0?(b.$slideTrack.find(".slick-slide").each(function(c,f){return f.offsetLeft-e+a(f).outerWidth()/2>-1*b.swipeLeft?(d=f,!1):void 0}),c=Math.abs(a(d).attr("data-slick-index")-b.currentSlide)||1):b.options.slidesToScroll},b.prototype.goTo=b.prototype.slickGoTo=function(a,b){var c=this;c.changeSlide({data:{message:"index",index:parseInt(a)}},b)},b.prototype.init=function(b){var c=this;a(c.$slider).hasClass("slick-initialized")||(a(c.$slider).addClass("slick-initialized"),c.buildRows(),c.buildOut(),c.setProps(),c.startLoad(),c.loadSlider(),c.initializeEvents(),c.updateArrows(),c.updateDots()),b&&c.$slider.trigger("init",[c]),c.options.accessibility===!0&&c.initADA()},b.prototype.initArrowEvents=function(){var a=this;a.options.arrows===!0&&a.slideCount>a.options.slidesToShow&&(a.$prevArrow.on("click.slick",{message:"previous"},a.changeSlide),a.$nextArrow.on("click.slick",{message:"next"},a.changeSlide))},b.prototype.initDotEvents=function(){var b=this;b.options.dots===!0&&b.slideCount>b.options.slidesToShow&&a("li",b.$dots).on("click.slick",{message:"index"},b.changeSlide),b.options.dots===!0&&b.options.pauseOnDotsHover===!0&&b.options.autoplay===!0&&a("li",b.$dots).on("mouseenter.slick",a.proxy(b.setPaused,b,!0)).on("mouseleave.slick",a.proxy(b.setPaused,b,!1))},b.prototype.initializeEvents=function(){var b=this;b.initArrowEvents(),b.initDotEvents(),b.$list.on("touchstart.slick mousedown.slick",{action:"start"},b.swipeHandler),b.$list.on("touchmove.slick mousemove.slick",{action:"move"},b.swipeHandler),b.$list.on("touchend.slick mouseup.slick",{action:"end"},b.swipeHandler),b.$list.on("touchcancel.slick mouseleave.slick",{action:"end"},b.swipeHandler),b.$list.on("click.slick",b.clickHandler),a(document).on(b.visibilityChange,a.proxy(b.visibility,b)),b.$list.on("mouseenter.slick",a.proxy(b.setPaused,b,!0)),b.$list.on("mouseleave.slick",a.proxy(b.setPaused,b,!1)),b.options.accessibility===!0&&b.$list.on("keydown.slick",b.keyHandler),b.options.focusOnSelect===!0&&a(b.$slideTrack).children().on("click.slick",b.selectHandler),a(window).on("orientationchange.slick.slick-"+b.instanceUid,a.proxy(b.orientationChange,b)),a(window).on("resize.slick.slick-"+b.instanceUid,a.proxy(b.resize,b)),a("[draggable!=true]",b.$slideTrack).on("dragstart",b.preventDefault),a(window).on("load.slick.slick-"+b.instanceUid,b.setPosition),a(document).on("ready.slick.slick-"+b.instanceUid,b.setPosition)},b.prototype.initUI=function(){var a=this;a.options.arrows===!0&&a.slideCount>a.options.slidesToShow&&(a.$prevArrow.show(),a.$nextArrow.show()),a.options.dots===!0&&a.slideCount>a.options.slidesToShow&&a.$dots.show(),a.options.autoplay===!0&&a.autoPlay()},b.prototype.keyHandler=function(a){var b=this;a.target.tagName.match("TEXTAREA|INPUT|SELECT")||(37===a.keyCode&&b.options.accessibility===!0?b.changeSlide({data:{message:"previous"}}):39===a.keyCode&&b.options.accessibility===!0&&b.changeSlide({data:{message:"next"}}))},b.prototype.lazyLoad=function(){function g(b){a("img[data-lazy]",b).each(function(){var b=a(this),c=a(this).attr("data-lazy"),d=document.createElement("img");d.onload=function(){b.animate({opacity:0},100,function(){b.attr("src",c).animate({opacity:1},200,function(){b.removeAttr("data-lazy").removeClass("slick-loading")})})},d.src=c})}var c,d,e,f,b=this;b.options.centerMode===!0?b.options.infinite===!0?(e=b.currentSlide+(b.options.slidesToShow/2+1),f=e+b.options.slidesToShow+2):(e=Math.max(0,b.currentSlide-(b.options.slidesToShow/2+1)),f=2+(b.options.slidesToShow/2+1)+b.currentSlide):(e=b.options.infinite?b.options.slidesToShow+b.currentSlide:b.currentSlide,f=e+b.options.slidesToShow,b.options.fade===!0&&(e>0&&e--,f<=b.slideCount&&f++)),c=b.$slider.find(".slick-slide").slice(e,f),g(c),b.slideCount<=b.options.slidesToShow?(d=b.$slider.find(".slick-slide"),g(d)):b.currentSlide>=b.slideCount-b.options.slidesToShow?(d=b.$slider.find(".slick-cloned").slice(0,b.options.slidesToShow),g(d)):0===b.currentSlide&&(d=b.$slider.find(".slick-cloned").slice(-1*b.options.slidesToShow),g(d))},b.prototype.loadSlider=function(){var a=this;a.setPosition(),a.$slideTrack.css({opacity:1}),a.$slider.removeClass("slick-loading"),a.initUI(),"progressive"===a.options.lazyLoad&&a.progressiveLazyLoad()},b.prototype.next=b.prototype.slickNext=function(){var a=this;a.changeSlide({data:{message:"next"}})},b.prototype.orientationChange=function(){var a=this;a.checkResponsive(),a.setPosition()},b.prototype.pause=b.prototype.slickPause=function(){var a=this;a.autoPlayClear(),a.paused=!0},b.prototype.play=b.prototype.slickPlay=function(){var a=this;a.paused=!1,a.autoPlay()},b.prototype.postSlide=function(a){var b=this;b.$slider.trigger("afterChange",[b,a]),b.animating=!1,b.setPosition(),b.swipeLeft=null,b.options.autoplay===!0&&b.paused===!1&&b.autoPlay(),b.options.accessibility===!0&&b.initADA()},b.prototype.prev=b.prototype.slickPrev=function(){var a=this;a.changeSlide({data:{message:"previous"}})},b.prototype.preventDefault=function(a){a.preventDefault()},b.prototype.progressiveLazyLoad=function(){var c,d,b=this;c=a("img[data-lazy]",b.$slider).length,c>0&&(d=a("img[data-lazy]",b.$slider).first(),d.attr("src",d.attr("data-lazy")).removeClass("slick-loading").load(function(){d.removeAttr("data-lazy"),b.progressiveLazyLoad(),b.options.adaptiveHeight===!0&&b.setPosition()}).error(function(){d.removeAttr("data-lazy"),b.progressiveLazyLoad()}))},b.prototype.refresh=function(b){var c=this,d=c.currentSlide;c.destroy(!0),a.extend(c,c.initials,{currentSlide:d}),c.init(),b||c.changeSlide({data:{message:"index",index:d}},!1)},b.prototype.registerBreakpoints=function(){var c,d,e,b=this,f=b.options.responsive||null;if("array"===a.type(f)&&f.length){b.respondTo=b.options.respondTo||"window";for(c in f)if(e=b.breakpoints.length-1,d=f[c].breakpoint,f.hasOwnProperty(c)){for(;e>=0;)b.breakpoints[e]&&b.breakpoints[e]===d&&b.breakpoints.splice(e,1),e--;b.breakpoints.push(d),b.breakpointSettings[d]=f[c].settings}b.breakpoints.sort(function(a,c){return b.options.mobileFirst?a-c:c-a})}},b.prototype.reinit=function(){var b=this;b.$slides=b.$slideTrack.children(b.options.slide).addClass("slick-slide"),b.slideCount=b.$slides.length,b.currentSlide>=b.slideCount&&0!==b.currentSlide&&(b.currentSlide=b.currentSlide-b.options.slidesToScroll),b.slideCount<=b.options.slidesToShow&&(b.currentSlide=0),b.registerBreakpoints(),b.setProps(),b.setupInfinite(),b.buildArrows(),b.updateArrows(),b.initArrowEvents(),b.buildDots(),b.updateDots(),b.initDotEvents(),b.checkResponsive(!1,!0),b.options.focusOnSelect===!0&&a(b.$slideTrack).children().on("click.slick",b.selectHandler),b.setSlideClasses(0),b.setPosition(),b.$slider.trigger("reInit",[b]),b.options.autoplay===!0&&b.focusHandler()},b.prototype.resize=function(){var b=this;a(window).width()!==b.windowWidth&&(clearTimeout(b.windowDelay),b.windowDelay=window.setTimeout(function(){b.windowWidth=a(window).width(),b.checkResponsive(),b.unslicked||b.setPosition()},50))},b.prototype.removeSlide=b.prototype.slickRemove=function(a,b,c){var d=this;return"boolean"==typeof a?(b=a,a=b===!0?0:d.slideCount-1):a=b===!0?--a:a,d.slideCount<1||0>a||a>d.slideCount-1?!1:(d.unload(),c===!0?d.$slideTrack.children().remove():d.$slideTrack.children(this.options.slide).eq(a).remove(),d.$slides=d.$slideTrack.children(this.options.slide),d.$slideTrack.children(this.options.slide).detach(),d.$slideTrack.append(d.$slides),d.$slidesCache=d.$slides,d.reinit(),void 0)},b.prototype.setCSS=function(a){var d,e,b=this,c={};b.options.rtl===!0&&(a=-a),d="left"==b.positionProp?Math.ceil(a)+"px":"0px",e="top"==b.positionProp?Math.ceil(a)+"px":"0px",c[b.positionProp]=a,b.transformsEnabled===!1?b.$slideTrack.css(c):(c={},b.cssTransitions===!1?(c[b.animType]="translate("+d+", "+e+")",b.$slideTrack.css(c)):(c[b.animType]="translate3d("+d+", "+e+", 0px)",b.$slideTrack.css(c)))},b.prototype.setDimensions=function(){var a=this;a.options.vertical===!1?a.options.centerMode===!0&&a.$list.css({padding:"0px "+a.options.centerPadding}):(a.$list.height(a.$slides.first().outerHeight(!0)*a.options.slidesToShow),a.options.centerMode===!0&&a.$list.css({padding:a.options.centerPadding+" 0px"})),a.listWidth=a.$list.width(),a.listHeight=a.$list.height(),a.options.vertical===!1&&a.options.variableWidth===!1?(a.slideWidth=Math.ceil(a.listWidth/a.options.slidesToShow),a.$slideTrack.width(Math.ceil(a.slideWidth*a.$slideTrack.children(".slick-slide").length))):a.options.variableWidth===!0?a.$slideTrack.width(5e3*a.slideCount):(a.slideWidth=Math.ceil(a.listWidth),a.$slideTrack.height(Math.ceil(a.$slides.first().outerHeight(!0)*a.$slideTrack.children(".slick-slide").length)));var b=a.$slides.first().outerWidth(!0)-a.$slides.first().width();a.options.variableWidth===!1&&a.$slideTrack.children(".slick-slide").width(a.slideWidth-b)},b.prototype.setFade=function(){var c,b=this;b.$slides.each(function(d,e){c=-1*b.slideWidth*d,b.options.rtl===!0?a(e).css({position:"relative",right:c,top:0,zIndex:b.options.zIndex-2,opacity:0}):a(e).css({position:"relative",left:c,top:0,zIndex:b.options.zIndex-2,opacity:0})}),b.$slides.eq(b.currentSlide).css({zIndex:b.options.zIndex-1,opacity:1})},b.prototype.setHeight=function(){var a=this;if(1===a.options.slidesToShow&&a.options.adaptiveHeight===!0&&a.options.vertical===!1){var b=a.$slides.eq(a.currentSlide).outerHeight(!0);a.$list.css("height",b)}},b.prototype.setOption=b.prototype.slickSetOption=function(b,c,d){var f,g,e=this;if("responsive"===b&&"array"===a.type(c))for(g in c)if("array"!==a.type(e.options.responsive))e.options.responsive=[c[g]];else{for(f=e.options.responsive.length-1;f>=0;)e.options.responsive[f].breakpoint===c[g].breakpoint&&e.options.responsive.splice(f,1),f--;e.options.responsive.push(c[g])}else e.options[b]=c;d===!0&&(e.unload(),e.reinit())},b.prototype.setPosition=function(){var a=this;a.setDimensions(),a.setHeight(),a.options.fade===!1?a.setCSS(a.getLeft(a.currentSlide)):a.setFade(),a.$slider.trigger("setPosition",[a])},b.prototype.setProps=function(){var a=this,b=document.body.style;a.positionProp=a.options.vertical===!0?"top":"left","top"===a.positionProp?a.$slider.addClass("slick-vertical"):a.$slider.removeClass("slick-vertical"),(void 0!==b.WebkitTransition||void 0!==b.MozTransition||void 0!==b.msTransition)&&a.options.useCSS===!0&&(a.cssTransitions=!0),a.options.fade&&("number"==typeof a.options.zIndex?a.options.zIndex<3&&(a.options.zIndex=3):a.options.zIndex=a.defaults.zIndex),void 0!==b.OTransform&&(a.animType="OTransform",a.transformType="-o-transform",a.transitionType="OTransition",void 0===b.perspectiveProperty&&void 0===b.webkitPerspective&&(a.animType=!1)),void 0!==b.MozTransform&&(a.animType="MozTransform",a.transformType="-moz-transform",a.transitionType="MozTransition",void 0===b.perspectiveProperty&&void 0===b.MozPerspective&&(a.animType=!1)),void 0!==b.webkitTransform&&(a.animType="webkitTransform",a.transformType="-webkit-transform",a.transitionType="webkitTransition",void 0===b.perspectiveProperty&&void 0===b.webkitPerspective&&(a.animType=!1)),void 0!==b.msTransform&&(a.animType="msTransform",a.transformType="-ms-transform",a.transitionType="msTransition",void 0===b.msTransform&&(a.animType=!1)),void 0!==b.transform&&a.animType!==!1&&(a.animType="transform",a.transformType="transform",a.transitionType="transition"),a.transformsEnabled=null!==a.animType&&a.animType!==!1},b.prototype.setSlideClasses=function(a){var c,d,e,f,b=this;d=b.$slider.find(".slick-slide").removeClass("slick-active slick-center slick-current").attr("aria-hidden","true"),b.$slides.eq(a).addClass("slick-current"),b.options.centerMode===!0?(c=Math.floor(b.options.slidesToShow/2),b.options.infinite===!0&&(a>=c&&a<=b.slideCount-1-c?b.$slides.slice(a-c,a+c+1).addClass("slick-active").attr("aria-hidden","false"):(e=b.options.slidesToShow+a,d.slice(e-c+1,e+c+2).addClass("slick-active").attr("aria-hidden","false")),0===a?d.eq(d.length-1-b.options.slidesToShow).addClass("slick-center"):a===b.slideCount-1&&d.eq(b.options.slidesToShow).addClass("slick-center")),b.$slides.eq(a).addClass("slick-center")):a>=0&&a<=b.slideCount-b.options.slidesToShow?b.$slides.slice(a,a+b.options.slidesToShow).addClass("slick-active").attr("aria-hidden","false"):d.length<=b.options.slidesToShow?d.addClass("slick-active").attr("aria-hidden","false"):(f=b.slideCount%b.options.slidesToShow,e=b.options.infinite===!0?b.options.slidesToShow+a:a,b.options.slidesToShow==b.options.slidesToScroll&&b.slideCount-a<b.options.slidesToShow?d.slice(e-(b.options.slidesToShow-f),e+f).addClass("slick-active").attr("aria-hidden","false"):d.slice(e,e+b.options.slidesToShow).addClass("slick-active").attr("aria-hidden","false")),"ondemand"===b.options.lazyLoad&&b.lazyLoad()},b.prototype.setupInfinite=function(){var c,d,e,b=this;if(b.options.fade===!0&&(b.options.centerMode=!1),b.options.infinite===!0&&b.options.fade===!1&&(d=null,b.slideCount>b.options.slidesToShow)){for(e=b.options.centerMode===!0?b.options.slidesToShow+1:b.options.slidesToShow,c=b.slideCount;c>b.slideCount-e;c-=1)d=c-1,a(b.$slides[d]).clone(!0).attr("id","").attr("data-slick-index",d-b.slideCount).prependTo(b.$slideTrack).addClass("slick-cloned");for(c=0;e>c;c+=1)d=c,a(b.$slides[d]).clone(!0).attr("id","").attr("data-slick-index",d+b.slideCount).appendTo(b.$slideTrack).addClass("slick-cloned");b.$slideTrack.find(".slick-cloned").find("[id]").each(function(){a(this).attr("id","")})}},b.prototype.setPaused=function(a){var b=this;b.options.autoplay===!0&&b.options.pauseOnHover===!0&&(b.paused=a,a?b.autoPlayClear():b.autoPlay())},b.prototype.selectHandler=function(b){var c=this,d=a(b.target).is(".slick-slide")?a(b.target):a(b.target).parents(".slick-slide"),e=parseInt(d.attr("data-slick-index"));return e||(e=0),c.slideCount<=c.options.slidesToShow?(c.setSlideClasses(e),c.asNavFor(e),void 0):(c.slideHandler(e),void 0)},b.prototype.slideHandler=function(a,b,c){var d,e,f,g,h=null,i=this;return b=b||!1,i.animating===!0&&i.options.waitForAnimate===!0||i.options.fade===!0&&i.currentSlide===a||i.slideCount<=i.options.slidesToShow?void 0:(b===!1&&i.asNavFor(a),d=a,h=i.getLeft(d),g=i.getLeft(i.currentSlide),i.currentLeft=null===i.swipeLeft?g:i.swipeLeft,i.options.infinite===!1&&i.options.centerMode===!1&&(0>a||a>i.getDotCount()*i.options.slidesToScroll)?(i.options.fade===!1&&(d=i.currentSlide,c!==!0?i.animateSlide(g,function(){i.postSlide(d)}):i.postSlide(d)),void 0):i.options.infinite===!1&&i.options.centerMode===!0&&(0>a||a>i.slideCount-i.options.slidesToScroll)?(i.options.fade===!1&&(d=i.currentSlide,c!==!0?i.animateSlide(g,function(){i.postSlide(d)}):i.postSlide(d)),void 0):(i.options.autoplay===!0&&clearInterval(i.autoPlayTimer),e=0>d?0!==i.slideCount%i.options.slidesToScroll?i.slideCount-i.slideCount%i.options.slidesToScroll:i.slideCount+d:d>=i.slideCount?0!==i.slideCount%i.options.slidesToScroll?0:d-i.slideCount:d,i.animating=!0,i.$slider.trigger("beforeChange",[i,i.currentSlide,e]),f=i.currentSlide,i.currentSlide=e,i.setSlideClasses(i.currentSlide),i.updateDots(),i.updateArrows(),i.options.fade===!0?(c!==!0?(i.fadeSlideOut(f),i.fadeSlide(e,function(){i.postSlide(e)
})):i.postSlide(e),i.animateHeight(),void 0):(c!==!0?i.animateSlide(h,function(){i.postSlide(e)}):i.postSlide(e),void 0)))},b.prototype.startLoad=function(){var a=this;a.options.arrows===!0&&a.slideCount>a.options.slidesToShow&&(a.$prevArrow.hide(),a.$nextArrow.hide()),a.options.dots===!0&&a.slideCount>a.options.slidesToShow&&a.$dots.hide(),a.$slider.addClass("slick-loading")},b.prototype.swipeDirection=function(){var a,b,c,d,e=this;return a=e.touchObject.startX-e.touchObject.curX,b=e.touchObject.startY-e.touchObject.curY,c=Math.atan2(b,a),d=Math.round(180*c/Math.PI),0>d&&(d=360-Math.abs(d)),45>=d&&d>=0?e.options.rtl===!1?"left":"right":360>=d&&d>=315?e.options.rtl===!1?"left":"right":d>=135&&225>=d?e.options.rtl===!1?"right":"left":e.options.verticalSwiping===!0?d>=35&&135>=d?"left":"right":"vertical"},b.prototype.swipeEnd=function(){var c,b=this;if(b.dragging=!1,b.shouldClick=b.touchObject.swipeLength>10?!1:!0,void 0===b.touchObject.curX)return!1;if(b.touchObject.edgeHit===!0&&b.$slider.trigger("edge",[b,b.swipeDirection()]),b.touchObject.swipeLength>=b.touchObject.minSwipe)switch(b.swipeDirection()){case"left":c=b.options.swipeToSlide?b.checkNavigable(b.currentSlide+b.getSlideCount()):b.currentSlide+b.getSlideCount(),b.slideHandler(c),b.currentDirection=0,b.touchObject={},b.$slider.trigger("swipe",[b,"left"]);break;case"right":c=b.options.swipeToSlide?b.checkNavigable(b.currentSlide-b.getSlideCount()):b.currentSlide-b.getSlideCount(),b.slideHandler(c),b.currentDirection=1,b.touchObject={},b.$slider.trigger("swipe",[b,"right"])}else b.touchObject.startX!==b.touchObject.curX&&(b.slideHandler(b.currentSlide),b.touchObject={})},b.prototype.swipeHandler=function(a){var b=this;if(!(b.options.swipe===!1||"ontouchend"in document&&b.options.swipe===!1||b.options.draggable===!1&&-1!==a.type.indexOf("mouse")))switch(b.touchObject.fingerCount=a.originalEvent&&void 0!==a.originalEvent.touches?a.originalEvent.touches.length:1,b.touchObject.minSwipe=b.listWidth/b.options.touchThreshold,b.options.verticalSwiping===!0&&(b.touchObject.minSwipe=b.listHeight/b.options.touchThreshold),a.data.action){case"start":b.swipeStart(a);break;case"move":b.swipeMove(a);break;case"end":b.swipeEnd(a)}},b.prototype.swipeMove=function(a){var d,e,f,g,h,b=this;return h=void 0!==a.originalEvent?a.originalEvent.touches:null,!b.dragging||h&&1!==h.length?!1:(d=b.getLeft(b.currentSlide),b.touchObject.curX=void 0!==h?h[0].pageX:a.clientX,b.touchObject.curY=void 0!==h?h[0].pageY:a.clientY,b.touchObject.swipeLength=Math.round(Math.sqrt(Math.pow(b.touchObject.curX-b.touchObject.startX,2))),b.options.verticalSwiping===!0&&(b.touchObject.swipeLength=Math.round(Math.sqrt(Math.pow(b.touchObject.curY-b.touchObject.startY,2)))),e=b.swipeDirection(),"vertical"!==e?(void 0!==a.originalEvent&&b.touchObject.swipeLength>4&&a.preventDefault(),g=(b.options.rtl===!1?1:-1)*(b.touchObject.curX>b.touchObject.startX?1:-1),b.options.verticalSwiping===!0&&(g=b.touchObject.curY>b.touchObject.startY?1:-1),f=b.touchObject.swipeLength,b.touchObject.edgeHit=!1,b.options.infinite===!1&&(0===b.currentSlide&&"right"===e||b.currentSlide>=b.getDotCount()&&"left"===e)&&(f=b.touchObject.swipeLength*b.options.edgeFriction,b.touchObject.edgeHit=!0),b.swipeLeft=b.options.vertical===!1?d+f*g:d+f*(b.$list.height()/b.listWidth)*g,b.options.verticalSwiping===!0&&(b.swipeLeft=d+f*g),b.options.fade===!0||b.options.touchMove===!1?!1:b.animating===!0?(b.swipeLeft=null,!1):(b.setCSS(b.swipeLeft),void 0)):void 0)},b.prototype.swipeStart=function(a){var c,b=this;return 1!==b.touchObject.fingerCount||b.slideCount<=b.options.slidesToShow?(b.touchObject={},!1):(void 0!==a.originalEvent&&void 0!==a.originalEvent.touches&&(c=a.originalEvent.touches[0]),b.touchObject.startX=b.touchObject.curX=void 0!==c?c.pageX:a.clientX,b.touchObject.startY=b.touchObject.curY=void 0!==c?c.pageY:a.clientY,b.dragging=!0,void 0)},b.prototype.unfilterSlides=b.prototype.slickUnfilter=function(){var a=this;null!==a.$slidesCache&&(a.unload(),a.$slideTrack.children(this.options.slide).detach(),a.$slidesCache.appendTo(a.$slideTrack),a.reinit())},b.prototype.unload=function(){var b=this;a(".slick-cloned",b.$slider).remove(),b.$dots&&b.$dots.remove(),b.$prevArrow&&b.htmlExpr.test(b.options.prevArrow)&&b.$prevArrow.remove(),b.$nextArrow&&b.htmlExpr.test(b.options.nextArrow)&&b.$nextArrow.remove(),b.$slides.removeClass("slick-slide slick-active slick-visible slick-current").attr("aria-hidden","true").css("width","")},b.prototype.unslick=function(a){var b=this;b.$slider.trigger("unslick",[b,a]),b.destroy()},b.prototype.updateArrows=function(){var b,a=this;b=Math.floor(a.options.slidesToShow/2),a.options.arrows===!0&&a.slideCount>a.options.slidesToShow&&!a.options.infinite&&(a.$prevArrow.removeClass("slick-disabled").attr("aria-disabled","false"),a.$nextArrow.removeClass("slick-disabled").attr("aria-disabled","false"),0===a.currentSlide?(a.$prevArrow.addClass("slick-disabled").attr("aria-disabled","true"),a.$nextArrow.removeClass("slick-disabled").attr("aria-disabled","false")):a.currentSlide>=a.slideCount-a.options.slidesToShow&&a.options.centerMode===!1?(a.$nextArrow.addClass("slick-disabled").attr("aria-disabled","true"),a.$prevArrow.removeClass("slick-disabled").attr("aria-disabled","false")):a.currentSlide>=a.slideCount-1&&a.options.centerMode===!0&&(a.$nextArrow.addClass("slick-disabled").attr("aria-disabled","true"),a.$prevArrow.removeClass("slick-disabled").attr("aria-disabled","false")))},b.prototype.updateDots=function(){var a=this;null!==a.$dots&&(a.$dots.find("li").removeClass("slick-active").attr("aria-hidden","true"),a.$dots.find("li").eq(Math.floor(a.currentSlide/a.options.slidesToScroll)).addClass("slick-active").attr("aria-hidden","false"))},b.prototype.visibility=function(){var a=this;document[a.hidden]?(a.paused=!0,a.autoPlayClear()):a.options.autoplay===!0&&(a.paused=!1,a.autoPlay())},b.prototype.initADA=function(){var b=this;b.$slides.add(b.$slideTrack.find(".slick-cloned")).attr({"aria-hidden":"true",tabindex:"-1"}).find("a, input, button, select").attr({tabindex:"-1"}),b.$slideTrack.attr("role","listbox"),b.$slides.not(b.$slideTrack.find(".slick-cloned")).each(function(c){a(this).attr({role:"option","aria-describedby":"slick-slide"+b.instanceUid+c})}),null!==b.$dots&&b.$dots.attr("role","tablist").find("li").each(function(c){a(this).attr({role:"presentation","aria-selected":"false","aria-controls":"navigation"+b.instanceUid+c,id:"slick-slide"+b.instanceUid+c})}).first().attr("aria-selected","true").end().find("button").attr("role","button").end().closest("div").attr("role","toolbar"),b.activateADA()},b.prototype.activateADA=function(){var a=this,b=a.$slider.find("*").is(":focus");a.$slideTrack.find(".slick-active").attr({"aria-hidden":"false",tabindex:"0"}).find("a, input, button, select").attr({tabindex:"0"}),b&&a.$slideTrack.find(".slick-active").focus()},b.prototype.focusHandler=function(){var b=this;b.$slider.on("focus.slick blur.slick","*",function(c){c.stopImmediatePropagation();var d=a(this);setTimeout(function(){b.isPlay&&(d.is(":focus")?(b.autoPlayClear(),b.paused=!0):(b.paused=!1,b.autoPlay()))},0)})},a.fn.slick=function(){var g,a=this,c=arguments[0],d=Array.prototype.slice.call(arguments,1),e=a.length,f=0;for(f;e>f;f++)if("object"==typeof c||"undefined"==typeof c?a[f].slick=new b(a[f],c):g=a[f].slick[c].apply(a[f].slick,d),"undefined"!=typeof g)return g;return a}});
</script>
  </body>

  </html>




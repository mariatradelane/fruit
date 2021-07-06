<?php
   if(isset($_POST['contact'])){
	   
	   $name = $_POST['fullname'];
	   $company = $_POST['company'];
	   $email = $_POST['email'];
	   $phone = $_POST['phone'];

	   $message = "\nName    : ".$name.'<br><br>';  
	   $message .= "\nCompany    : ".$company.'<br><br>';                   
	   $message .= "\nEmail   : ".$email.'<br><br>'; 
	   $message .= "\nMobile Number   : ".$phone.'<br><br>';  
	   $message .= $_POST['message'];
		   
	   $to = 'web24service@gmail.com';               
				 
	   $headers  = 'MIME-Version: 1.0' . "\r\n";
	   $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	   $subject = 'Mail from our website';
   
	   // Additional headers
	   $headers .= 'To: '.$name.' <'.$to.'>' . "\r\n";
	   $headers .= 'From: <web24service@gmail.com>' . "\r\n";  
									   
	   @mail($to, $subject, $message, $headers);  
	   
	   $message = "<div class='success'>'Your Message send sucsessfully.</div>";                                                
   }

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Bootstrap4, Multipurpose, responsive, Business, template,Shipping, Cargo, logistic, html5, css, javascript, web24service" />
    <meta name="author" content="web24service">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Title -->
    <title>W-shipping  - The World Class Bootstrap4 Multipurpose Shipping Cargo Logistic HTML5 Template</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/images/fevicon.png">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <!-- Font awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    
    <!-- OwlCarousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    
    <!-- Magnific popup CSS -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    
    <!-- chat CSS -->
    <link rel="stylesheet" href="assets/css/chat.css">
    
    <!-- Slicknav CSS -->
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    
    <!-- Date picker CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.min.css">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="style.css">
    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    
    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.3.min.js"></script>
</head>
<body>
  <!-- Main Wrapper Start --> 
  <div class="main-wrapper">
  
  <!-- skiptocontent start ( This section for blind and Google SEO, Also for page speed )-->
  <a id="skiptocontent" href="#maincontent">skip navigation</a>
  <!-- skiptocontent End -->

  <header>
    <!-- Header top area start -->
	<div class="header-top-area">
       <div class="container">
          <div class="row">
             <div class="col-12 col-lg-8">
                <div class="top-contact">
                   <a href="#"><i class="fa fa-envelope"></i> info@worldshipping.com</a>
                   <a href="#"><i class="fa fa-phone"></i> +88 01911 837404</a>
                   <a href="#"><i class="fa fa-clock-o"></i> 9:00AM to 8:00PM</a>
                </div>   
             </div>
             <div class="col-12 col-lg-4">
                <div class="top-menu">
                  <ul> 
                   <li><a href="customer-login.html"><i class="fa fa-sign-in"></i> Login</a></li>
                   <li><a href="customer-register.html"><i class="fa fa-unlock-alt"></i> Registration</a></li>
                  </ul>  
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- Header top area End -->
    
    <!-- Header area start -->
	<div class="header-area">
      <div class="container"> 
        <!-- Site logo Start --> 
        <div class="logo">
          <a href="index.html" title="W-shipping"><img src="assets/images/logo.png" alt="W-shipping"/></a>
        </div>
        <!-- Site logo end -->
        <div class="mobile-menu-wrapper"></div>
        <!-- Search Start -->
        <div class="dropdown header-search-bar">
          <form action="index.html">
            <span class="" data-toggle="dropdown"><i class="fa fa-search" aria-hidden="true"></i></span>
            <input type="search" placeholder="kyewords.." class="dropdown-menu search-box">
          </form>
        </div>
        <!-- Search End -->
        
        <!-- Main menu start -->
        <nav class="mainmenu">
          <ul id="navigation">
             <li><a href="#">Home</a>
               <ul>
                   <li><a href="index.html">Home version 1</a></li>
                   <li><a href="index2.html">Home version 2</a></li>
                   <li><a href="index3.html">Box Style</a></li>
                   <li><a href="rtl-version.html">RTL Version</a></li>
                </ul>
             </li>
             <li><a href="#">Services</a>
                <ul>
                   <li><a href="services.html">Service page</a></li>
                   <li><a href="single-services.html">Air Freight Shipping</a></li>
                   <li><a href="single-services.html">Ocean Freight Shipping</a></li>
                   <li><a href="single-services.html">Car Shipping</a></li>
                </ul>
             </li>
             <li><a href="#">Shipping</a>
                <ul>
                   <li><a href="create-shipping.html">Create New Shipment</a></li>
                   <li><a href="current-shipment.html">Current Shipment list</a></li>
                   <li><a href="shipment-history.html">Shipment History</a></li>
                </ul>
             </li>
             <li><a href="#">Tracking</a>
                <ul>
                   <li><a href="customer-login.html">Customer Login</a></li>
                   <li><a href="customer-register.html">Customer Register</a></li>
                   <li><a href="tracking.html">Tracking</a></li>
                   <li><a href="tracking-result.html">Your shipment progress</a></li>
                </ul>
             </li>
             <li><a href="#">Blog</a>
                <ul>
                   <li><a href="blog.html">Blog left sidebar</a></li>
                   <li><a href="blog-another-page.html">Blog right sidebar</a></li>
                   <li><a href="single-blog.html">Single Blog</a></li>
                </ul>
             </li>
             <li><a href="#">pages</a>
                <ul>
                   <li><a href="about.html">About Us</a></li>
                   <li><a href="media.html">Media & Publications</a></li>
                   <li><a href="freight-gallery.html">Freight Gallery</a></li>
                   <li><a href="image-gallery.html">Image Gallery</a></li>
                   <li><a href="typography.html">Typography</a></li>
                   <li><a href="button-accordion.html">Button &amp; Accordion</a></li>
                   <li><a href="community.html">Shipping Community</a></li>
                   <li><a href="404.html">Error 404</a></li>
                   <li><a href="sitemap.html">Sitemap</a></li>
                   <li><a href="coming-soon.html">Coming Soon</a></li>
                </ul>
             </li>
             <li class="nav-active"><a href="contact.html">Contuct Us</a></li>
          </ul>
        </nav>
        <!-- Main menu end -->   
      </div>
    </div>
    <!-- Header area End -->
  </header> 
  
  <!-- Breadcroumbs start -->
  <div class="wshipping-content-block wshipping-breadcroumb inner-bg-1">
    <div class="container">
      <div class="row">
         <div class="col-12 col-lg-7">
            <h1>Contact Us</h1>
            <a href="index.html" title="Home">Home</a> / Contact Us
         </div>
         <div class="col-12 col-lg-5 text-right"><h4>We freight to all over the world
The best logistic company, <span>FAST</span> and <span>SAFELY!</span></h4></div>
      </div>
    </div>
  </div>
  <!-- Breadcroumbs end --> 

  <!-- Contact Start -->
  <div class="wshipping-content-block">
    <div class="container">
      <div class="row flex-lg-row-reverse">
         <div class="col-12 col-lg-4">
            <div class="address">
               <h3>Corporate Office</h3>
               <div class="address-block">
                  <ul>
                    <li class="address-icon"><strong>Adderss:</strong><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                    <li class="phone-icon"><strong>Telephone No:</strong><br>+88 01711 123456</li>
                    <li class="fax-icon"><strong>Fax No:</strong><br>+88 01711 123456</li>
                    <li class="email-icon"><strong>Email:</strong><br><a href="mailto:web24service@gmail.com" title="">web24service@gmail.com</a></li>
                  </ul>
               </div>
            </div>
            <div class="address">
               <h3>Section Office</h3>
               <div class="address-block">
                  <ul>
                    <li class="address-icon"><strong>Adderss:</strong><br>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                    <li class="phone-icon"><strong>Telephone No:</strong><br>+88 01711 123456</li>
                    <li class="fax-icon"><strong>Fax No:</strong><br>+88 01711 123456</li>
                    <li class="email-icon"><strong>Email:</strong><br><a href="mailto:web24service@gmail.com" title="">web24service@gmail.com</a></li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="col-12 col-md-8">
            <div class="contact-text">
              <h3>We are Always with <span>you :)</span></h3>
              <img src="assets/images/contact-image.jpg" alt=""/>
            </div>
            <div class="contact-form">
               <h3 class="heading3-border text-uppercase">Quick Feedback Form</h3>
               <?php if(isset($message)) echo $message;  ?> 
               <form action="contact.html" enctype="multipart/form-data" method="post">
                  <div class="form-group">
                     <div class="row">
                       <div class="col-12 col-lg-6">
                        <input type="text" class="form-control" placeholder="Your Full Name" name="fullname" required>
                       </div> 
                       <div class="col-12 col-lg-6">
                        <input type="text" class="form-control" placeholder="Company" name="company" required>
                       </div> 
                     </div>   
                   </div>
                   <div class="form-group">
                     <div class="row">
                       <div class="col-12 col-lg-6">
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                       </div>
                       <div class="col-12 col-lg-6">  
                        <input type="text" class="form-control" placeholder="Phone Number" name="phone">
                       </div>  
                     </div>   
                   </div>
                   <div class="form-group">
                        <textarea class="form-control" placeholder="Message" name="message"></textarea>
                   </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-submit" name="contact">Submit</button>
                    </div>
                </form>
             </div>  
         </div>
      </div>
    </div>
  </div>
  <!-- Contact end -->
  
  <!-- Map start --> 
  <div class="map">
      <iframe src="https://www.google.com/maps?f=q&source=s_q&hl=en&geocode=&q=++Gulshan-1,+Dhaka-1212.&aq=&sll=23.78024,90.418081&sspn=0.01076,0.018475&ie=UTF8&hq=&hnear=1+Gulshan+Ave,+Gulshan,+Dhaka,+Dhaka+Division+1212,+Bangladesh&t=m&z=14&ll=23.780244,90.418078&output=embed"></iframe>
  </div> 
  <!-- Map end -->

  <!-- Footer start -->
  <footer class="site-footer">
    <!-- Footer Top start -->
    <div class="footer-top-area wow fadeInUp">
      <div class="container">
        <div class="row">
           <div class="col-12 col-md-6 col-lg-3">
              <div class="footer-wiz">
                 <h3 class="footer-logo"><img src="assets/images/footer-logo.png" alt="footer logo"/></h3>
                 <p>It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                 <ul class="footer-contact">
                    <li><i class="fa fa-phone"></i> +88 01911 837404</li>
                    <li><i class="fa fa-envelope"></i> info@companyname.com</li>
                    <li><i class="fa fa-fax"></i> +88 02 123456</li>
                 </ul>
              </div>
              <div class="top-social bottom-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
                <a href="#"><i class="fa fa-rss"></i></a>
             </div>
           </div>
           <div class="col-12 col-md-6 col-lg-3">
             <div class="footer-wiz footer-menu">
                 <h3 class="footer-wiz-title">Quick Links</h3>
                 <ul>
                    <li><a href="about.html">Company Overview</a></li>
                    <li><a href="services.html">Our Services</a></li>
                    <li><a href="media.html">Media &amp; Publications</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="freight-gallery.html">Freight Gallery</a></li>
                   <li><a href="image-gallery.html">Image Gallery</a></li>
                 </ul>
              </div>
           </div>
           <div class="col-12 col-md-6 col-lg-3">
              <div class="footer-wiz footer-menu">
                 <h3 class="footer-wiz-title">Usefull Links</h3>
                 <ul>
                   <li><a href="create-shipping.html">Create Shipping</a></li>
                    <li><a href="tracking.html">Tracking</a></li>
                    <li><a href="shipment-history.html">Shipment History</a></li>
                    <li><a href="typography.html">Typography</a></li>
                    <li><a href="button-accordion.html">Button Accordion</a></li>
                    <li><a href="tracking-result.html">Tracking Result</a></li>
                 </ul>
              </div> 
           </div>
           <div class="col-12 col-md-6 col-lg-3">
              <div class="footer-wiz">
                 <h3 class="footer-wiz-title">Opening Hours</h3>
                 <ul class="open-hours">
                   <li><span>Mon to Fri:</span> <span class="text-right">09:30AM to 05:30PM</span></li>
                   <li><span>Sun:</span> <span class="text-right">Closed</span></li>
                 </ul>
                 <div class="newsletter">
                    <form action="index.html">
                       <input type="text" placeholder="Enter your email" value="" class="news-input">
                       <button type="submit" value="" class="news-btn"><i class="fa fa-location-arrow"></i></button>
                    </form>
                 </div>
              </div>
           </div>
        </div>
     </div>
   </div>
   <!-- footer top end -->
   
   <!-- copyright start -->
   <div class="footer-bottom-area">
     <div class="container">
        <div class="row">
           <div class="col-12 col-lg-6">Copyright © 2017 <span>Wrold shipping</span>. All Rights Reserved</div>
           <div class="col-12 col-lg-6 text-right">Design & Development By: <a href="http://web24service.com/" title="web24service" target="_blank">web24service</a></div>
         </div>
      </div>     
    </div>
    <!-- copyright end -->
  </footer> 
  <!-- Footer end -->
  </div>
  <!-- Main Wrapper end --> 
  
  <!-- Start scroll top -->
  <div class="scrollup"><i class="fa fa-angle-up"></i></div>
  <!-- End scroll top -->
  
  <!-- Tether JS -->
  <script src="assets/js/tether.min.js"></script>
  
  <!-- Popper JS -->
  <script src="assets/js/popper.min.js"></script>
  
  <!-- Bootstrap JS -->
  <script src="assets/js/bootstrap.min.js"></script>
  
  <!-- Bootstrap datepicker -->
  <script src="assets/js/bootstrap-datepicker.min.js"></script>
  
  <!-- OwlCarousel JS -->
  <script src="assets/js/owl.carousel.min.js"></script>
  
  <!-- Magnific Popup JS -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  
  <!-- Gallery Filter -->
  <script src="assets/js/jquery.mixitup.min.js"></script>
  
  <!-- WOW JS -->
  <script src="assets/js/wow-1.3.0.min.js"></script>
  
  <!-- Step Form with validate -->
  <script src="assets/js/jquery.validate.js"></script>
  <script src="assets/js/form-step.js"></script>
  
  <!-- Chat JS -->
  <script src="assets/js/chat.js"></script>
  
  <!-- Coming Soon JS -->
  <script src="assets/js/coming-soon.js"></script>
  
  <!-- SlickNav JS -->
  <script src="assets/js/jquery.slicknav.min.js"></script>
  
  <!-- Active JS -->
  <script src="assets/js/active.js"></script>

</body>
</html>
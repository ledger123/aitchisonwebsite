<?php
	include("phpinclude/main.php");
	$title="Aitchison College Old Boys' Association (ACOBA) ";
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include_once("phpinclude/headercontrol.php");  ?>
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $title;?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>  
    <!-- Bootstrap progressbar  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css"/> 
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <!-- Lato for Title -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"> 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body> 

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->
  <!-- Start header -->
  <?php 
  	include("phpinclude/header.php");
  ?>
  <!-- End header -->
  <!-- Start login modal window -->
  <?php 
  	include("phpinclude/login_modal_window.php");
  ?>
  <!-- End login modal window -->
  <!-- BEGIN MENU -->
  <?php 
  	include("phpinclude/menuarea.php");
  ?>
  <!-- END MENU -->   
  <!-- Start single page header -->
  <section id="single-page-header">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2>ACOBA</h2>
              <p></p>
            </div>
          </div>
          <!--<div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Contact</li>
              </ol>
            </div>
          </div>-->
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->
  <!-- Start contact section  -->
  <section id="contact">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="title-area">
              <!--<h2 class="title" style="color:#000000">ACOBA</h2>
              <span class="line"></span>-->
              <p align="justify">The Aitchison College Old Boys' Association (ACOBA) is the prime body that works to retain and reinforce the spirit of fraternity amongst the alumni. It is an excellent forum for the Old Boys to unite and keep in touch. </p>
              
              <div style="margin-top: 20px;">
                <img src="img/acoba-executive-principal.jpg" alt="" class="img-responsive" style="margin-left: auto; margin-right: auto;"/>
                <span style="margin-left: auto; margin-right: auto;">ACOBA Executive and Principal</span>

                <p style="margin-top:20px;"><strong>Sitting Left to Right:</strong> Ch. Abdul Mughni, Mr. Jalal Ahsan (Treasurer), Mr. Javed Zaman Khan (Director Sports), Mr. Sahibzada Mohammad Shahzad Sultan (Vice President), Mr. Michael A. Thomson (Principal Aitchison College), Mr. Usman Haq (President), Mr. Shahjahan Ayub (FMR. President), Omer Qureshi (Gen. Secretary), Mr. Qasim Zaman Khan (Joint Secretary), Syed Hur Riahi Gardezi, Ms. Sidra Tul Montaha (Alumni Relations Officer).</p>
                <p><strong>Standing Left to Right:</strong> Mr. Ahsan Suhail Mannan, Mr. Junaid Ashraf Khawaja, Muhammad Abu Bakr Shehzad, Mr. Wajid Aziz Khan, Mr. Tahir M. Taj, Mr. Amer Munawar Siddiq, Mr. Muzaffar Shah Husnain, Mr. Amir Jahangir Elahi, Mian Khalid Misbah-ur-Rehman, Mr. Hassan Mumtaz Khan Khichi, Syed Kazim Mehdi Shah, M. Suleman Khan, Muhammad Ansab Ibrahim.</p>
              </div>
            </div>
         </div>
         <div class="col-md-12">
           <div class="cotact-area">
             <div class="row">
               <div class="col-md-4">
                 <div class="contact-area-left">
				  <?php /* ?>	 
                   <h4>Contact Info</h4>
                   <p>For any queries or suggestions, please contact us.</p>
                   <address class="single-address">
                     <p>Alumni Office, Aitchison College, Shahrah-e- Quaid-e-Azam, Lahore – 54000, Pakistan
</p>
                     <p> alumniofficer@aitchison.edu.pk</p>
                     <p>(042) 111-363-063 (427)</p>
                   </address> 
                   <div class="footer-right contact-social">
                      <a href="index.html"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div> 
					<?php */?> 
                 </div>
               </div>
               <div class="col-md-8">
                 <div class="contact-area-right">
				<?php /*?>	 
               <!--    <form action="" class="comments-form contact-form">
                    <div class="form-group">                        
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">                        
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                     <div class="form-group">                        
                      <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">                        
                      <textarea placeholder="Comment" rows="3" class="form-control"></textarea>
                    </div>
                    <button class="comment-btn">Submit Comment</button>
                  </form>-->
				  <?php */?>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
  </section>
  <!-- End contact section  -->
  <!-- Start footer -->
  <?php 
  	include("phpinclude/footer.php");
  ?>
  <!-- End footer -->
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>    
  <!-- mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
 <!-- counter -->
  <script src="assets/js/waypoints.js"></script>
  <script src="assets/js/jquery.counterup.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 
  <!-- progress bar   -->
  <script type="text/javascript" src="assets/js/bootstrap-progressbar.js"></script>  
  
 
  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
    
  </body>
</html>
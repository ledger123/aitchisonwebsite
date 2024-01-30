<?php
	include("phpinclude/main.php");
	$title="Aitchison : Where are you Now?";
	require_once('../recaptchalib.php');
	$publickey = "6Le88wYUAAAAAL2MkelJtp5OkOLWpU5-3Yw1gS5o";
	$privatekey = "6Le88wYUAAAAAHNniflCDr1OGRJn77TVoCg7ZS5J";
	if(strpos($_SERVER['HTTP_REFERER'], "aitchison.edu.pk") > 1)		
	/*$mystring="“Hello how are you” “Hello how are you” “Hello how are you” “Hello how are you” “Hello how are you” “Hello how are you” “Hello how are you” “Hello how are you” ";
	echo strip_tags($mystring)."<br>strip_tags<br>";
	echo addcslashes($mystring)."<br>addcslashes<br>";
	echo htmlspecialchars($mystring)."<br>htmlspecialchars<br>";*/
?>
<!DOCTYPE html>
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
    <style>
    	/*#recaptcha_area{
			width: 90px !important;	
		}
		.g-recaptcha>div>div{
			width: 100% !important;
			height: 78px;
			transform:scale(0.77); //the code to rescale the captcha obtained in this page
			webkit-transform:scale(0.77);
			text-align: center;
			position: relative;
		}*/
    </style>
    
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
              <h2>Share Your Story </h2>
              
            </div>
          </div>
          <!--<div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Contact</li>
              </ol>
            </div>-->
          </div>
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
              <h2 class="title" style="color:#000000">Where are you now?</h2>
              <span class="line"></span>
              <p align="justify">Did you get promoted? Published a paper? Wrote a book? We’d love to hear what you’ve been up to since you left Aitchison. Share your news and we will publish it in our newsletter. </p>
                   <p align="justify">Email us at alumniofficer@aitchison.edu.pk. </p>
                   <?php if(false) { ?>
                   <p align="justify"><a href="alumni_registration.php">Register now</a> to subscribe to our alumni newsletter.</p>
                   <?php } ?>
                   
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
<?php
	include("phpinclude/main.php");
	/*$title="ACOBA Annual Dinner 2016: Alumni enjoy grand musical evening at Aitchison";*/
	$title="Alumni Calendar 2017 - Photography Competition";
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
    <style>
    .question{
		text-align: justify; 
		font-weight: bold; 
		padding: 20 0 20 0;	
		color: #000000;
	}
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
              <h2>Alumni Calendar 2017  <em>Photography Competition</em></h2>
              
            </div>
          </div>
         
          </div>
        </div>
      </div>
      </section>
  <!-- End single page header -->
  
  <!-- Start blog archive -->
  <section id="blog-archive">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-archive-area">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="blog-archive-left">
                  <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: 401px;">
                      <img src="assets/images/upcomingevents/calendar_photography2016.jpg" width="640" alt="Alumni Calendar 2017 - Photography Competition">
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="annual_dinner2016.php"><span style="color: #000000;">Alumni Calendar 2017 - Photography Competition</span></a></h2>                      
                      <p> <span class="blog-date"><strong>DEADLINE FOR SUBMISSION: SEPTEMBER 30, 2016.</strong></span></p>
                    </div>
                    <div class="blog-news-details blog-single-details">
                      <p align="justify">Do you have an impressive photo that captures the beauty of your beloved alma mater? Then here’s your chance to get it featured on the Aitchison College Alumni Calendar 2017.</p>
                     <?php  //<p align="justify">If you would like to take some new photos, grab your cameras, visit the College, click some fantastic snaps and enter the competition!*</p> ?>
                      <p align="justify">Winning photos will be featured on the 2017 Aitchison College Calendar which will adorn the walls of alumni homes and offices. </p>
                     <?php // <p align="justify">So get ready to get those cameras clicking!</p> ?>
					<p class="question">Theme</p>
                    <p align="justify">Submit one or more photos of the beautiful campus, picturing the College in its aesthetic glory. The theme for 2017 is ‘Aitchison’s Aesthetic Allure’.</p>
                    <p  class="question">Contact </p>
                    <p align="justify">Send us your high resolution photos at alumniofficer@aitchison.edu.pk. Please send in your entries along with your name, date, contact number, e-mail, and address. You may also add a photo caption/description if you like. </p>
                    <p align="justify">*If you’d like to visit the College <?php //for photography?>, please drop us an email at alumniofficer@aitchison.edu.pk or call us on 111-363-063 (Ext. 427).</p>
                    
                    <p  class="question"><em>Competition Guidelines:</em> </p>
                  <p align="justify">
                  <ul>
             <li>Open to registered alumni only. You can register yourself at  http://aitchison.edu.pk/alumni/alumni_registration.php</li>
             <li>Photo entries must be received no later than September 30.</li>
			 <li>Submit your original photos (landscape format only) online. Please email your photo entries directly to alumniofficer@aitchison.edu.pk, along with your name, date, contact number, e-mail, and address.</li>
             <li>Only high-resolution digital photos are accepted so smart phone photos do not apply. </li>
             <li>Selections are based on content, quality, clarity and originality of photos. Winning photos and credits will appear in the 2017 Aitchison College Alumni Calendar.</li>
             <li>The College reserves the right to use submitted images in other publications and electronic communications unless otherwise notified.</li>
                 </ul>
                 </p>
                    
                    
                    
                    <p  class="question"></p>
                    <p align="justify"> </p>
                    <p align="justify"> </p>
                    
                    
                    <p align="justify"> </p>
                    
                    <p>&nbsp;<!--<img src="assets/images/annual_dinner2016.jpg" width="640" height="337" alt="image">--></p>
                    
                    <!--  <p>For pictures, visit our gallery <a href="gallery.php">click here</a></p>-->
                      
                      <div class="blog-single-bottom">
                        <div class="row">
                          <div class="col-md-8">
                            <div class="blog-single-tag">
                             <!-- <span class="fa fa-tags"></span>
                              <a href="#">Design,</a>
                              <a href="#">Photoshop,</a>
                              <a href="#">Development</a>-->
                            </div>
                          </div> 
                          <div class="col-md-4">
                            <div class="blog-single-social">
                              <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/home?status=<?php echo $title;?> <?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>&title=<?php echo $title;?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                  
  </section>
  <!-- End blog archive -->
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
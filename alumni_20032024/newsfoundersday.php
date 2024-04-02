<?php
	include("phpinclude/main.php");
	$title="130th Founders’ Day: ACOBA shares Challenge Cup with College";
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include_once("phpinclude/headercontrol.php");  ?>
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Aithison : News</title>
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
              <h2>News</h2>
              
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
                    <div class="blog-news-img">
                      <img src="assets/images/fd.jpg" alt="image">
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="newscricket.php">130th Founders’ Day</a></h2>
                      <p>ACOBA shares Challenge Cup with College</p>
                      <p><!--<span class="blog-date">|21 February 2016</span>--></p>
                    </div>
                    <div class="blog-news-details blog-single-details">
                      <p>The Academic Prize Distribution for the 130th Founders’ Day was held on the 1st of April, while the Sports Day was held on the 2nd of April.</p>
					
                    <p>Mr. Majid Jahangir Khan, an Old Aitchisonian and one of the most terrific opening batsmen in Pakistan’s cricket history, was the Chief Guest for Academic Prize Distribution Day. In his speech, Mr. Majid advised the students to endeavor for excellence in their academic and athletic pursuits, while specifically emphasizing the importance of sports in school. </p>
                    
                    <p>On the Sports Day, a good number of Old Boys turned out for the event. They participated with great zeal in the 4x100 m relay and later in the traditional Old Boys’ March Past.</p>
                    
                    <p>Amongst the four participating teams, the team of Mr. Sharjeel Khan Niazi, Mr. Muhammad Usman, Mr. Sabahat Ali and Mr. Fyez Rehman won the 4x100 m Old Boys’ Relay in 46.28 seconds’ time. </p>
                    
                    <p>The annual ACOBA sports fixtures were tied this year, so the ACOBA Challenge Cup was received jointly by ACOBA and the College Head Boy, Kamran Barcha.  </p>
                    
                    <p>The Chief Guest, Malik Muhammad Rafique Rajwana distributed prizes amongst the winners. </p>
                    
                   <p> <a href="gallery.php" target="_blank"><span style="color: #000099">Click here to view photos of the event</span> </a></p>
                    
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
                            <?php include("sociallinks.php"); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                  <!-- Start blog navigation -->
                  <?php /*?><div class="blog-navigation-area">
                    <div class="blog-navigation-prev">
                      <a href="newstent.php">
                        <p>Previous Post</p>
                      </a>
                    </div>
                    <div class="blog-navigation-next">
                      <a href="annual_dinner2016.php">
                        <p>Next Post</p>
                      </a>
                    </div>
                  </div><?php */?>
                  <!-- Start Comment box 
                  <div class="comments-box-area">
                    <h2>Leave a Comment</h2>
                    <p>Your email address will not be published.</p>
                    <form action="" class="comments-form">
                       <div class="form-group">                        
                        <input type="text" class="form-control" placeholder="Your Name">
                      </div>
                      <div class="form-group">                        
                        <input type="email" class="form-control" placeholder="Email">
                      </div>
                       <div class="form-group">                        
                        <textarea placeholder="Comment" rows="3" class="form-control"></textarea>
                      </div>
                      <button class="comment-btn">Submit Comment</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-2"></div>             
            </div>
          </div>
        </div>
      </div>
    </div>  -->
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
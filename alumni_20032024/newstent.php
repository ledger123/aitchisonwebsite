<?php
	include("phpinclude/main.php");
	$title="Aitchison Alumni News";
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
                      <img src="assets/images/newstent.jpg" alt="image">
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="newstent.php">Tent Pegging Competition</a></h2>
                      <p>Old Boys display impressive skill at tent pegging </p>
                      <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">|27 February 2016</span></p>
                    </div>
                    <div class="blog-news-details blog-single-details">
                      <p>The Old Boys’ vs. Aitchison College Team Tent Pegging Competition was held on Saturday, where the Old Boys’ performed exceptionally well, bagging most top positions.</p>
					
                    <p>In the Individual category, the first position was shared by Old Boy Hamza Mawaz and College Boy Ali Muhammad Aziz. Agha Hashim Ali Khan and Sadaad Amir Joyia secured second and third positions respectively.</p>
                    
                    <p>In the pair’s category, Syed Ali Raza and Asad Hayat stood first, while the second positionwas won by Adnan Jalil Azam and Qadeer Ashfaq. </p>
                    
                    <p>In tent pegging sections, Hamza Mawaz, Shehryar Bukhari, Adnan Jalil Azam and Qadeer Ashfaq secured first position while Syed Ali Raza, Asad Hayat, Hussain Abbas and Ali Baba Qutab Ali Shah secured second position.</p>
                    
                    <p>Principal Aitchison College Mr. Michael Alister Thomson was also present on the occasion and distributed prizes to the winners.</p>
                    
                     <!-- <p>For pictures, visit our gallery <a href="gallery.php">click here</a></p>-->
                      
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
                      <a href="newshockey.php">
                        <p>Previous Post</p>
                      </a>
                    </div>
                    <div class="blog-navigation-next">
                      <a href="newsfootball.php">
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
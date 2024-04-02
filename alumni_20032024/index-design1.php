<?php
	header('X-Frame-Options: SAMEORIGIN');
	header('X-Content-Type-Options: nosniff');
	header("X-XSS-Protection: 1");
	header("Pragma: no-cache");
	header("Cache-Control: no-cache, no-store, must-revalidate, private");
	header("strict-transport-security: max-age=0");
	if(!session_id()){
		session_start();
	}
	//include("phpinclude/main.php");
	$title="Aitchison : Alumni";
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
    <!--<link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>-->
    <link rel="shortcut icon" href="../nne_logo.ico" type="image/x-icon">
    <link rel="icon" href="../nne_logo.ico" type="image/x-icon">
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
    <!-- Progress bar  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css"/> 
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

        <!-- Open Sans for body font -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Lato for Title -->
    <link href='//fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>    
    
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
  	//include("phpinclude/login_modal_window.php");
  ?>
  <!-- End login modal window -->
  <!-- BEGIN MENU -->
  <?php 
  	include("phpinclude/menuarea.php");
  ?>
  <!-- END MENU -->
<!-- Start slider -->
  <section id="slider">
    <div class="main-slider">






        <div class="single-slide">
            <img src="assets/images/slider-1.jpg" alt="img">
            <div class="slide-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="slide-article">
                                <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">The legacy continues</h1>
                                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s">The College has a proud history of producing leaders in all walks of life</p>
                                <!-- <a class="read-more-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" href="http://aitchison.edu.pk/index.php">Read More</a>-->
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="slider-img wow fadeInUp">
                                <!--<img src="assets/images/perso.png" alt="business man">-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-slide">
            <img src="assets/images/slider-2.jpg" alt="img">
            <div class="slide-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="slide-article">
                                <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Let’s Reconnect</h1>
                                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s">Register now to stay informed about alumni events and activities</p>
                                <!--  <a class="read-more-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" href="http://aitchison.edu.pk/index.php">Read More</a>-->
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="slider-img wow fadeInUp">
                                <!--<img src="assets/images/perso.png" alt="business man">-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-slide">
            <img src="assets/images/sliders/slider4.jpg" alt="img">
            <div class="slide-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="slide-article">
                                <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Sweet Nostalgia</h1>
                                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s">Revive past memories and special ties of association</p>
                                <!--  <a class="read-more-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" href="http://aitchison.edu.pk/index.php">Read More</a>-->
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="slider-img wow fadeInUp">
                                <!--<img src="assets/images/perso.png" alt="business man">-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-slide">
            <img src="assets/images/slider-4.jpg" alt="img">
            <div class="slide-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="slide-article">
                                <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">ACOBA affairs</h1>
                                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s">The Aitchison College Old Boys’ Association is an excellent forum for the alumni to keep in touch</p>
                                <!-- <a class="read-more-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" href="http://aitchison.edu.pk/index.php">Read More</a>-->
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="slider-img wow fadeInUp">
                                <!--<img src="assets/images/perso.png" alt="business man">-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-slide">
            <img src="assets/images/slider-5.jpg" alt="img">
            <div class="slide-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="slide-article">
                                <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Join in for events</h1>
                                <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s">Re-live your College days and stay connected through alumni events and meetings</p>
                                <!--<a class="read-more-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" href="#">Read More</a>-->
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="slider-img wow fadeInUp">
                                <!--  <img src="assets/images/person2.png" alt="business man">-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
  </section>
  <!-- End slider -->
  
  
  
      <!--=========== BEGIN OUR COURSES SECTION ================-->
    <section id="ourCourses">
     <div class="container">
             <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title" style="color:#FFFFFF">Stay informed, stay connected!</h2>
            <span class="line"></span>
          			</div>
        		</div> 
            </div>
        <!-- Start Our courses content -->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="ourCourse_content">
              <ul class="course_nav">
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="img/ob_magift.jpg" alt="logo" />
                      <div class="mask">                         
                        <a href="../ac-makeagift.php" class="course_more">The Old Building Fund</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="../ac-makeagift.php">The Old Building Fund</a></h3>
                   <!--	 <p class="singCourse_price"><span>$20</span> Per One Month</p> -->
                    <p>Appeal for support from Old Boys<!-- win in years.--></p>
                    </div>
                    <div class="singCourse_author">
                      <img src="img/author.png" alt="img">
                      <p><a href="../ac-makeagift.php" style="color:#FFFFFF">Read more...</a></p>
                    </div>
                  </div>
                </li>
                
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="../newsletter/news/images/alumnus-in-focus-7536193458.jpg" alt="logo" />
                      <div class="mask">                         
                        <a href="news-testlink.php?id=132" class="course_more">ALUMNUS IN FOCUS</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="news-testlink.php?id=132">Alumnus in Focus</a></h3>
                    <p>An interview with Sameer Khosa</p>
                    </div>
                    <div class="singCourse_author">
                      <img src="img/author.png" alt="img">
                      <p><a href="news-testlink.php?id=132" style="color:#FFFFFF">Read more...</a></p>
                    </div>
                  </div>
                </li>
                
                
                <!--<li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="img/alumnusinfocus/iftikhar-ahmad-malik/iftikhar-ahmad-malik3.jpg" alt="logo" />
                      <div class="mask">                         
                        <a href="iftikhar-ahmad-malik-passed-away.php" class="course_more">ALUMNUS IN FOCUS</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="iftikhar-ahmad-malik-passed-away.php">Alumnus in Focus</a></h3>
                    <p>THE LATE IFTIKHAR AHMAD MALIK</p>
                    </div>
                    <div class="singCourse_author">
                      <img src="img/author.png" alt="img">
                      <p><a href="iftikhar-ahmad-malik-passed-away.php" style="color:#FFFFFF">Read more...</a></p>
                    </div>
                  </div>
                </li>-->
                <li>
                  <div class="single_course">
                    <div class="singCourse_imgarea">
                      <img src="img/alumni-news/alumni-registration.png" alt="logo" style="max-height:232.09px; max-width:351.39px;"/>
                      <div class="mask">
                        <a href="https://forms.gle/hTJHNyPF7i55ZpMf7" target="_blank" class="course_more">Alumni Registration</a>
                      </div>
                    </div>
                    <div class="singCourse_content">
                    <h3 class="singCourse_title"><a href="https://forms.gle/hTJHNyPF7i55ZpMf7" target="_blank">Alumni Registration</a></h3>
                    <p>Alumni e-newsletter subscription</p>
                    </div>
                    <div class="singCourse_author">
                      <img src="img/author.png" alt="img">
                      <p><a href="https://forms.gle/hTJHNyPF7i55ZpMf7" target="_blank" style="color:#FFFFFF">Read more...</a></p>
                    </div>
                  </div>
                </li>                              
              </ul>
            </div>
          </div>
        </div>
        <!-- End Our courses content -->
      </div>
    </section>
    <!--=========== END OUR COURSES SECTION ================--> 
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
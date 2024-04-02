<?php
	include("phpinclude/main.php");
	$title="Careers’ Evening 2016 :- Alumni give career and life advice to students at the first Careers’ Evening";
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include_once("phpinclude/headercontrol.php");  ?>
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Careers’ Evening, 2016 :- Alumni give career and life advice to students at the first Careers’ Evening </title>
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
              <h2>Careers’ Evening, 2016 </h2>
              
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
                    <!--<div class="blog-news-img">
                      <img src="assets/images/annual_dinner2016.jpg" width="640" height="337" alt="image">
                    </div>-->
                    <div class="blog-news-title">
                      <h2>Old Boys give career and life advice to students</h2>
                      <!--<p>Alumni enjoy grand musical evening at Aitchison</p>-->
                      <p><!--Time:<a class="blog-author" href="#"> 4 p.m.</a>--> <span class="blog-date">25 November 2016</span></p>
                    </div>
                    <div class="blog-news-details blog-single-details">
                      <p align="justify">Aitchison College held its first Careers’ Evening on 25<sup>th</sup> November, 2016 at the Senior School where Old Boys from a variety of professions were invited to share their experiences and insights with the H1 and H2 boys. The event provided the students an excellent opportunity to get tips and advice from those already working in the field. </p>
                        <p align="justify">The Careers' Evening featured 12 alumni guest speakers who spoke in parallel sessions in two time slots. The speakers included:  Mr. Mumshad Ali for Engineering, Dr. Omar Aziz Rana for Medicine/Cardiology, Dr. Imran Khalid Niazi for Medicine/Radiology, Mr. Gulzeb Khan for Accounting and Finance, Mr. Farid Malik for Economics, Mr. Jazib Zahir for Entrepreneurship, Brig. Zahid Nawaz Mann for Armed Services, DIG Shahzad Sultan for Police, Mr. Aasim Zafar Khan for Journalism, Mr. Muhammad Ali for Creative Arts, Mr. Daniyal Naeem Dar for Dental Medicine and Mr. Sameer Khosa for Law.</p>
                        <p align="justify">The speakers delivered 20-30 minute talks followed by Q&A sessions which saw active participation from the students. The boys left the sessions with a deeper understanding about their areas of interest and a clearer sense of direction.</p>
                        <p align="justify">The Old Boys were delighted to be back at their alma mater and to be able to share their knowledge and expertise with the present boys. They were highly appreciative of the students’ enthusiasm during sessions. </p>
                        <p align="justify">Interactive sessions with professionals from different fields allowed the students to acquire the guidance and inspiration they needed to succeed in their future careers. “It is a promising start of a new tradition. It will grow and develop into a regular College feature,” said College Principal Mr. Michael Thomson.</p>
                    
                    <p>&nbsp;<!--<img src="assets/images/annual_dinner2016.jpg" width="640" height="337" alt="image">--></p>
                    <div id="mixit-container" class="portfolio-container">
                    	<?php
							$small_imgtitle="Careers’ Evening 2016";
							$large_imgtitle="Alumni give career and life advice to students at the first Careers’ Evening";
							for($i=1; $i <= 8; $i++) {
						?>
                         <div class="single-portfolio single-portfolio1 mix foundersday">
                           <div class="single-item">
                             <img src="assets/images/careersevening2016-29112016/small/<?php echo $i;?>.jpg" alt="<?php echo $small_imgtitle;?>" class="myimg">
                             <div class="single-item-content single-item-content1">               
                                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/careersevening2016-29112016/<?php echo $i;?>.jpg"><i class="fa fa-search-plus"></i></a>
                                <div class="portfolio-title">
                                  <span>View</span>
                                </div>
                             </div>
                           </div>                          
                       </div>
                       <?php
							}
						?>
                       
</div>
                    
                    <!--  <p>For pictures, visit our gallery <a href="gallery.php">click here</a></p>-->
                      
                      <div class="blog-single-bottom">
                        <div class="row">
                          <div class="col-md-8">
                            <div class="blog-single-tag">
                             <!-- <span class="fa fa-tags"></span>
                              <a href="#">Design,</a>
                              <a href="#">Photoshop,</a>
                              <a href="#">Development</a>https://aitchison.edu.pk/alumni/assets/images/careersevening2016-29112016/2.jpg-->
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
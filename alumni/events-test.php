<?php
	$title="Aitchison's Alumni Events";
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
    	.borderless tr td {
			border: none !important;
			padding: 0px !important;
			font-size: inherit !important;
			font-family: inherit !important;
		}
    </style>
  </head>
  <body>
  <!--<div id="fb-root"></div>-->
<script>/*(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));*/</script>

  <!-- BEGAIN PRELOADER -->
  <!--<div id="preloader">
    <div id="status">&nbsp;</div>
  </div>-->
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
              <h2>Upcoming &nbsp;&nbsp;Events</h2>
              <p>Look out for upcoming events and mark your calendars in advance!</p>
            <!--  <p>The College organizes various events for you to reconnect with the Old Boys and the College, even long after you’ve left. <br><br>
Look out for upcoming events and mark your calendars in advance!
</p>-->
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
             <!-- <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Blog Archive</li>
              </ol> -->
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
              <div class="col-md-8">
                <div class="blog-archive-left">
                 <!-- Start blog news single -->
                 
                 <!-- Start blog news single -->
                  
                  <?php /*?>
				  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="javascript:void(0);">
                      <img src="assets/images/upcomingevents/alumni-tour-24112017.jpg" width="640" height="406" alt="Alumni College Tour" class="img-responsive"></a>
                    </div>
                    
                    <div class="blog-news-title">
                      <h2><a href="javascript:void(0);">Alumni College Tour</a></h2>
                     <p><span class="blog-date">Classes: 1976-1985</span></p>
                    </div>
                    
                    <div class="blog-news-details">
                                    <p>Old Aitchisonians belonging to the graduating classes between 1976 and 1985 are welcome to visit the College for a pleasant trip down memory lane on <strong>Saturday 30<sup>th</sup> December, 2017 at 3:00 pm.</strong></p>
                                    <div class="row">
                                        <div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-offset-1 col-sm-10">                        
                                    <div class="table-responsive">
                                    <table border="1" align="center" cellspacing="6" class="table table-striped" style="border: thin solid #ddd;">
                                        <tbody>
                                          <tr>
                                            <th colspan="2" align="left">Program</th>
                                          </tr>
                                          <tr>
                                            <td width="50%" align="center">3:00  pm - 3:15 pm</td>
                                            <td width="50%" align="center">Gathering  at the Mandir Courtyard</td>
                                          </tr>
                                          <tr>
                                            <td align="center">3:15  pm - 3:45 pm</td>
                                            <td align="center">Viewing  of the Archives Centre </td>
                                            </tr>
                                          <tr>
                                            <td align="center">3:45  pm - 4:30 pm</td>
                                            <td align="center">College  Tour</td>
                                          </tr>
                                          </tbody>
                                      </table>   
                                      
                                      </div>
                                      </div>
                                        <div class="col-lg-1 col-md-1 col-sm-1">&nbsp;</div>
                                        
                                        </div>
                                    <p><strong>Registration Process:</strong></p>
                                      <p>Old boys planning to attend the event should email the following information to <a href="mailto:archivist@aitchison.edu.pk"><span style="color: blue;">archivist@aitchison.edu.pk</span></a> </p>
                                        <p>
                                            <ul style="list-style-type: disc; padding-left: 40px;">
                                                <li>Full Name</li>
                                                <li>Father’s Name</li>
                                                <li>DOB</li>
                                                <li>Leaving Year / Class</li>
                                                <li>Mobile Number</li>
                                            </ul></p>
                                        <p><strong>Please mention ‘College Tour’ in the subject line of your email.</strong></p>                      
                                    </div>
                                    
                  </article>
                  
                  
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="news-new.php?id=235" name="countryrace">
                      <img src="assets/images/upcomingevents/cross-country-24112017.jpg" width="640" height="425" alt="Walter A. Robinson Challenge Cup for Cross Country Race " class="img-responsive"></a>
                    </div>
                    
                    <div class="blog-news-title">
                      <h2><a href="news-new.php?id=235">Walter A. Robinson Challenge Cup for Cross Country Race </a></h2>
                     <!--<p><span class="blog-date">Classes: 1976-1985</span></p>-->
                    </div>
                    
                    <div class="blog-news-details">
                    	<p>Cross Country Race of Present &amp; Old Boys (Walter A. Robinson Challenge Cup for Cross Country Race) is scheduled to be held as per following programme...</strong></p>
                        <a class="blog-more-btn" href="news-new.php?id=235">Read More <i class="fa fa-long-arrow-right"></i></a>
                                                         
                    </div>
                    
                  </article>
                  <?php */?>
                  
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="news-new.php?id=277">
                      <img src="assets/images/upcomingevents/founders-day-2018.jpg" width="640" height="406" alt="FOUNDERS' DAY 2018" class="img-responsive"></a>
                    </div>
                    
                    <div class="blog-news-title">
                      <h2><a href="news-new.php?id=277">FOUNDERS' DAY 2018</a></h2>
                     <!--<p><span class="blog-date">Saturday, 24<sup>th</sup> February 2018</span></p>-->
                    </div>
                    
                    <div class="blog-news-details">
                    	<p>This year, the Founders' Day events will be held from 8th - 10th March, 2018.</p>

						<p>The Academic Prize Distribution will be held on 8th of March, while the Main Founders' Day (Sports) will be held on 10th of March. </p>
                        <a class="blog-more-btn" href="news-new.php?id=277">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    
                    </div>      
                  </article>
                  
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="news-new.php?id=272">
                      <img src="assets/images/tent-pegging-24022018.jpg" width="640" height="406" alt="Alumni College Tour" class="img-responsive"></a>
                    </div>
                    
                    <div class="blog-news-title">
                      <h2><a href="news-new.php?id=272">Old Boys vs. College Team Tent Pegging Competition</a></h2>
                     <p><span class="blog-date">Saturday, 24<sup>th</sup> February 2018</span></p>
                    </div>
                    
                    <div class="blog-news-details">
                    	<p>Old Boys vs. College Team Tent Pegging Competition will be held on Saturday, 24<sup>th</sup> February 2018 at 02:00 pm at Aitchison College, Lahore.</p>
                        <a class="blog-more-btn" href="news-new.php?id=272">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    
                    </div>      
                  </article>
                  
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="news-new.php?id=270">
                      <img src="assets/images/upcomingevents/alumni-college-tour-classes-1991-2000.jpg" width="640" height="406" alt="Alumni College Tour" class="img-responsive"></a>
                    </div>
                    
                    <div class="blog-news-title">
                      <h2><a href="news-new.php?id=270">Alumni College Tour</a></h2>
                     <p><span class="blog-date">Classes: 1991-2000</span></p>
                    </div>
                    
                    <div class="blog-news-details">
                    	<p>Old Aitchisonians belonging to the graduating classes between 1991 and 2000 are invited to visit the College for a campus tour on<strong> Saturday 17th February, 2018 at 3 pm.</strong></p>
                        <a class="blog-more-btn" href="news-new.php?id=270">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    
                    </div>      
                  </article>
                  
                  
                   
                   
                  
                  <!-- Start blog news single --> 
                 <!-- Start blog news single -->
                  
                  
                   
                  
                  <!-- Start blog news single -->
                 
                 <!-- Start blog news single -->
                  
                   <!-- Start blog news single -->
                  <!-- Start blog news single -->
                  
                   <!-- Start blog news single -->
                  <!-- Start blog news single --><!-- Start blog news single -->
                 
                  <!-- Start blog pagination
                  <div class="blog-pagination">
                    <ul class="pagination-nav">
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">6</a></li>
                    </ul>
                  </div> -->
                </div>
              </div>
              <div class="col-md-4">
                <aside class="blog-side-bar">
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                    <!-- Start blog search
                    <form>                    
                      <div class="search-group">                        
                        <button type="button" class="blog-search-btn"><span class="fa fa-search"></span></button>
                        <input type="search" placeholder="Search">
                      </div>                    
                    </form> -->
                    <!-- End blog search -->                                
                  </div>
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                    <h4 class="widget-title">Bulletin</h4>
                    <ul class="widget-catg">                      
                      <li><a href="news.php">News</a></li>
                      <li><a href="events.php">Events</a></li>
                      <li><a href="reminiscence.php">Reminiscence</a></li>
                      <!--<li><a href="contribute.php">Contribute</a></li>-->
                      <li><a href="alumni_profiles.php">Alumni Profiles</a></li>
                      <li><a href="shareyourstory.php">Share your Story</a></li>  
                	  
                    </ul>
                  </div>
                 
                
                </aside>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section>
  <!-- End blog archive -->

  <!-- Start subscribe us
  <section id="subscribe">
    <div class="subscribe-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subscribe-area">
              <h2>Subscribe Newsletter</h2>
              <form action="" class="subscrib-form">
                <input type="text" placeholder="Enter Your E-mail..">
                <button class="subscribe-btn" type="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- End subscribe us -->
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
<?php
	include("phpinclude/main.php");
	$title="Aitchison's Alumni Events";
	//$urlredirect="news-new.php?id=573";
	//header("location: ".$urlredirect);
	//exit();
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
  <div id="fb-root"></div>
<?php /*?><script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script><?php */?>

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
          <!--No upcoming event-->




                      <div class="blog-news-title">

                        <h2>Upcoming Alumni Events 2020-21 (Tentative)</h2>

                      </div>
                    <?php /*?>
                    <div class="blog-news-details">
                    <p>PLEASE VISIT AGAIN FOR UPCOMING EVENTS.</p>
                    </div>
                    <?php */?>

            <table class="table table-bordered" style="margin-top:15px;width:100%;">
                <thead>
                  <tr style="background-color:#0F0456;color:#fff;height:auto;"><th scope="row">Events</th><th>Dates</th></tr>
                </thead>
                <tbody>
                  <tr><th scope="row">Alumni Reunion Tea and College Tour</th><td>Classes 1961-1975 on Saturday, 24<sup>th</sup> October, 2020 <br/>Time: 3:00 PM</td></tr>
                  <tr><th scope="row">Alumni College Tour</th><td>Classes 1976-1985 on Saturday, 14<sup>th</sup> November, 2020 <br/>Time: 3:00 PM</td></tr>
                  <tr><th scope="row">Donors’ Lunch</th><td>On Saturday, 28<sup>th</sup> November, 2020 <br/>Time: 1:00 PM</td></tr>
                  <tr><th scope="row">Alumni College Tour</th><td>Classes 1986-1995 on Saturday, 12<sup>th</sup> December, 2020 <br/>Time: 3:00 PM</td></tr>
                  <tr><th scope="row">Alumni College Tour</th><td>Classes 1996-2005 on Saturday, 16<sup>th</sup> January, 2021 <br/>Time: 3:00 PM</td></tr>
                  <tr><th scope="row">Pre 1960 Leavers’ Lunch</th><td>On Saturday, 6<sup>th</sup> February, 2021 <br/>Time: 1:00 PM</td></tr>
                  <tr><th scope="row">Alumni College Tour</th><td>Classes 2006-2015 on Saturday, 27<sup>th</sup> February, 2021 <br/>Time: 3:00 PM</td></tr>
                  <tr><th scope="row">Alumni College Tour</th><td>Classes 2016-2020 on Saturday, 20<sup>th</sup> March, 2021 <br/>Time: 3:00 PM</td></tr>
                </tbody>
            </table>


		  <?php /*?><article class="blog-news-single"> 
				<div class="blog-news-title">
				  <h2><a href="news-new.php?id=622">Alumni College Tour (Classes 1991 - 2000)</a></h2>
					<p><span class="blog-date">Saturday, 11<sup>th</sup> January, 2019</span></p>
				</div>

				<div class="blog-news-details">
					<p>Aitchison College is organizing a College Tour for the 1991 - 2000 classes.</p>

					<a class="blog-more-btn" href="news-new.php?id=622">Read More <i class="fa fa-long-arrow-right"></i></a>

				</div>
			</article>			
		  <article class="blog-news-single"> 
				<div class="blog-news-title">
				  <h2><a href="news-new.php?id=616">Alumni College Tour (Classes 1981 - 1990)</a></h2>
					<p><span class="blog-date">Saturday, 14<sup>th</sup> December, 2019</span></p>
				</div>

				<div class="blog-news-details">
					<p>Aitchison College is organizing a College Tour for the 1981 - 1990 classes.</p>

					<a class="blog-more-btn" href="news-new.php?id=616">Read More <i class="fa fa-long-arrow-right"></i></a>
 
				</div>
      </article><?php */?>
					
          <?php /*?> <article class="blog-news-single"> 
				<div class="blog-news-title">
				  <h2><a href="news-new.php?id=606">WALTER A. ROBINSON CHALLENGE CUP FOR CROSS COUNTRY RACE</a></h2>
					<p><span class="blog-date">Friday 17<sup>th</sup> January, 2020</span></p>
				</div>

				<div class="blog-news-details">
					<p>Cross Country Race for the Present &amp; Old Boys will be held as per the following programme:

</p>

					<a class="blog-more-btn" href="news-new.php?id=606">Read More <i class="fa fa-long-arrow-right"></i></a>
 
				</div>
      </article> <?php */?>
      
      <?php /*?>
			<article class="blog-news-single"> 
				<div class="blog-news-title">
				  <h2><a href="news-new.php?id=600">Alumni College Tour (Classes 1976 - 1980)</a></h2>
					<p><span class="blog-date">Saturday, 9<sup>th</sup> November, 2019</span></p>
				</div>

				<div class="blog-news-details">
					<p>Aitchison College is organizing a College Tour for the 1976 - 1980 classes.

</p>

					<a class="blog-more-btn" href="news-new.php?id=600">Read More <i class="fa fa-long-arrow-right"></i></a>

				</div>
			</article>			
          <article class="blog-news-single"> 
						<div class="blog-news-title">
						  <h2><a href="news-new.php?id=595">Opening of New Rifle Range 2019</a></h2>
							<p><span class="blog-date">Saturday, 26<sup>th</sup> October, 2019</span></p>
						</div>

						<div class="blog-news-details">
							<p>We are delighted to announce the Opening of New Rifle Range at Aitchison College on Saturday, 26th October, 2019. We are thankful to our ACOBA Committee members for their generous support in building this state of the art range that offers a six-lane 30m range.</p>

							<a class="blog-more-btn" href="news-new.php?id=595">Read More <i class="fa fa-long-arrow-right"></i></a>

						</div>
					</article>
          
          
					<article class="blog-news-single"> 
						<div class="blog-news-title">
						  <h2><a href="news-new.php?id=581">Alumni's Reunion at Aitchison College (Classes 1961-1975)</a></h2>
							<p><span class="blog-date">Saturday, 26<sup>th</sup> October, 2019</span></p>
						</div>

						<div class="blog-news-details">
							<p>The College is organising a Reunion Tea and College Tour for the 1961 - 1975 classes.</p>

							<a class="blog-more-btn" href="news-new.php?id=581">Read More <i class="fa fa-long-arrow-right"></i></a>

						</div>
					</article>
					
					<article class="blog-news-single"> 
						<div class="blog-news-title">
						  <h2><a href="news-new.php?id=573">Upcomming Alumni Events 2019-2020</a></h2>
						  <p><span class="blog-date"></span></p>
						</div>

						<div class="blog-news-details">
							<p><strong>Alumni Reunion and College Tour:</strong> Classes 1961-1975 on Saturday, 26 October, 2019<br/>
							<strong>Alumni College Tour</strong>	Classes 1976-1980 on Saturday, 9 November, 2019</p>

							<a class="blog-more-btn" href="news-new.php?id=573">Read More <i class="fa fa-long-arrow-right"></i></a>

						</div>
					</article><?php */?>
					
					<?php /*?>
                    <article class="blog-news-single">
						<div class="blog-news-title">
						  <h2><a href="news-new.php?id=488">ALUMNI COLLEGE TOUR (CLASSES : 2001-2010)</a></h2>
						  <p><span class="blog-date">Saturday, 6<sup>th</sup> April, 2019</span></p>
						</div>

						<div class="blog-news-details">
							<p>Aitchison College is organising a College Tour for the 2001 – 2010 classes on 6<sup>th</sup> April, 2019 at 3:00 pm. Alumni who belong to any of the graduating classes that fall within these years are welcome to visit the College for a trip down memory lane.</p>

							<a class="blog-more-btn" href="news-new.php?id=488">Read More <i class="fa fa-long-arrow-right"></i></a>

						</div>
					</article><?php */?>
					
					
					
					
					
                  <?php /*?>
				  <article class="blog-news-single">
                    <div class="blog-news-title">
                      <h2><a href="news-new.php?id=448">ALUMNI COLLEGE TOUR (CLASSES: 1986-1990)</a></h2>
                      <p><span class="blog-date">Saturday, 19<sup>th</sup> January 2019</span></p>
                    </div>
                    
                    <div class="blog-news-details">
                    	<p>Aitchison College is organising a College Tour for the 1986 - 1990 classes on 19<sup>th</sup> January, 2019 at 3:00 pm. Alumni who belong to any of the graduating classes that fall within these years are welcome to visit the College for a trip down memory lane.</strong></p>
                        <a class="blog-more-btn" href="news-new.php?id=448">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    
                    </div>
					</article>
					
					
                  
				  <article class="blog-news-single">
                    <div class="blog-news-title">
                      <h2><a href="news-testlink.php?id=406">ALUMNI MEET-UP AT AITCHISON COLLEGE (CLASSES 1961-1975)</a></h2>
                      <p><span class="blog-date">Saturday, 24<sup>th</sup> November 2018</span></p>
                    </div>
                    
                    <div class="blog-news-details">
                    	<p>The College is organising a Reunion Tea and College Tour for the 1961 - 1975 classes.</p>
                        <a class="blog-more-btn" href="news-testlink.php?id=406">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    
                    </div>
					</article>
					
					
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="news-new.php?id=405">
                      <img src="assets/images/upcomingevents/cross-country-race-05112018.jpg" width="640" height="406" alt="Cross Country Tour" class="img-responsive"></a>
                    </div>
                    
                    <div class="blog-news-title">
                      <h2><a href="news-new.php?id=405">WALTER A. ROBINSON CHALLENGE CUP FOR CROSS COUNTRY RACE</a></h2>
                     <p><span class="blog-date">Thursday, 29<sup>th</sup> November 2018</span></p>
                    </div>
                    
                    <div class="blog-news-details">
                    	<p>Cross Country Race of Present &amp; Old Boys (Walter A. Robinson Challenge Cup for Cross Country Race) is scheduled to be held as per following programme.</strong></p>
                        <a class="blog-more-btn" href="news-new.php?id=405">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    
                    </div>      
                  </article>
				
                  <article class="blog-news-single">
                    <div class="blog-news-title">
                      <h2><a href="news-testlink.php?id=374">PRE-1960 OLD BOYS' LUNCH AT AITCHISON COLLEGE</a></h2>
                      <p><span class="blog-date">Saturday, 1<sup>st</sup> DECEMBER 2018</span></p>
                    </div>
                    
                    <div class="blog-news-details">
                    	<p>Aitchison College is organising an Old Boys’ Lunch for its most senior alumni on Saturday 1<sup>st</sup> December, 2018 at 1:00 pm. Old Boys from classes up to 1960 are cordially invited to attend the event.</p>
						<p>If you belong to or know anyone from a pre-1960 graduating class, please inform the Alumni Office by 26<sup>th</sup> November, 2018 for the invites to be mailed out in time.</p>
                        <a class="blog-more-btn" href="news-testlink.php?id=374">Read More <i class="fa fa-long-arrow-right"></i></a>
                                    
                    </div>      
                  </article>
					
                  
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
                  </article><?php */?>
                  
                  
                   
                   
                  
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
<?php
	include("phpinclude/main.php");
	include_once("phpinclude/redirect.php");
	$title="Aitchison's Alumni Events";
	$section = "alumnievents";


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

        .blog-news-single {
            padding: 20px;
            box-shadow: inset 0 -3em 3em rgba(0, 0, 0, 0.1),
            0 0 0 2px rgb(255, 255, 255),
            0.3em 0.3em 1em rgba(0, 0, 0, 0.3);
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
				<?php /*?><article class="blog-news-single">
						<div class="blog-news-img" style="height: auto;">
						  
						</div>
						<div class="blog-news-title">
						  <h2><a href="news-1470-old-boys-swimming-programme">Old Boys' Swimming Programme
</a></h2>
						  <!--<p></p>-->
						  <p>During Summer Vacations 2022</p>
						  <p><!--<span class="blog-date">|4<sup>th</sup> November 2016</span>--></p>
						</div>
						<div class="blog-news-details">
						  <p align="justify">The College is happy to offer swimming for Old Boys who satisfy or adhere to the conditions set out below. No other dates than those mentioned are available and times must be strictly adhered to. Sadly, we cannot open swimming to guests or children. Please note the following conditions...</p>
							<a class="blog-more-btn" href="news-1470-old-boys-swimming-programme">Read More<i class="fa fa-long-arrow-right"></i></a>
						</div>
					  </article>
                 
            <article class="blog-news-single">
						
              <div class="blog-news-title">
              <h2><a href="./news-2083-alumni-college-tour-classes-2011-2021">Alumni College Tour Classes: 2011-2021

              </a></h2>
              <p>Aitchison College is organizing a College Tour for the 2011 – 2021 classes.</p>
              <p></p>
              </div>
              <div class="blog-news-details">
              <p align="justify"></p>
              <a class="blog-more-btn" href="./news-2083-alumni-college-tour-classes-2011-2021">Read More<i class="fa fa-long-arrow-right"></i></a>
              </div>
            </article><?php */?>	
					

                    <article class="blog-news-single">
          <div class="blog-news-title">

            <h2>Alumni Events 2023- 2024</h2>

          </div>
                    
            <table class="table table-bordered" style="margin-top:15px;width:100%;">
                <thead>
                  <tr style="background-color:#0F0456;color:#fff;height:auto;"><th scope="row">Events</th><th>Dates</th></tr>
                </thead>
                <tbody>

                  <tr>
                    <th scope="row">Alumni Tour 1981 – 1990</th>
                    <td>Saturday, 28<sup>th</sup> October 2023</td>
                  </tr>
                  <tr>
                    <th scope="row">Pre-1970 Leavers' Lunch</th>
                    <td>Saturday, 25<sup>th</sup> November 2023</td>
                  </tr>
                  <tr>
                    <th scope="row">Alumni Tour 1991 – 2000 </th>
                    <td>Saturday, 16<sup>th</sup> December 2023</td>
                  </tr>
                  <tr>
                    <th scope="row">Alumni Tour 2001 – 2010</th>
					<td>Saturday, 27<sup>th</sup> January 2024</td>
                  </tr>
                  <tr>
                    <th scope="row">Alumni Reunion and Tour (Classes 1971-1980) </th>
					<td>Saturday, 17<sup>th</sup> February 2024</td>  
                  </tr>
                  <tr>
                    <th scope="row">Alumni Tour 2011 – 2023</th>
                    <td nowrap>Saturday, 20<sup>th</sup> April, 2024</td>
                  </tr>                  
                </tbody>
            </table><br><br>
			<?php /*?><p><strong>All events subject to potential government restrictions</strong></p><?php */?>
		 </article>

                     

		  
					
          
					
		
                  
                  
                   
                   
                  
        
                 
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
                    <?php
					 include("phpinclude/bulletin.php"); 
					 ?>
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
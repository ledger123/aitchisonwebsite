<?php
	include("phpinclude/main.php");
	$title="Aitchison : Famous Aitchisonians";
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
              <h2>Famous Aitchisonians</h2>
              
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
               <!-- <li><a href="#">Home</a></li>
                <li class="active">Feature</li>-->
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->
  
  <!-- Start Feature -->
  <section id="feature">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <!--<h2 class="title"></h2>
            <span class="line"></span>-->
            <p align="justify">Aitchison College&rsquo;s focus on building character and devotion to duty shines through in success stories in almost every sphere of human activity. A brief list includes: former President Sardar Farooq Ahmad Khan Leghari, former Prime Ministers Malik Feroz Khan Noon, Mir Zafarullah Khan Jamali, current Prime Minister Imran Khan, various provincial Chief Ministers and Governors, and recent Speaker of the National Assembly, Sardar Ayaz Sadiq, new Ministerial appointments Shah Mahmood Qureshi, Pervez Khattack and Hashim Jawan Bakht. Renowned lawyers Justice Mansoor Ali Shah (Supreme Court), Tariq Khawaja Raheem, Aitzaz Ahsan and Salman Akram Raja will all vouch for the influence Aitchison had in shaping them. Celebrities like Yousuf Salahuddin (impresario extraordinaire), Nawab Iftikhar Ali Khan Pataudi (Indian Cricket Team Captain), and Ejazul Hasan (Pakistan’s leading senior artist), and Sayed Babar Ali (business leader and philanthropist) once wore the College blazer.</p>
            <p align="justify">Their example sets a high bar that serves to motivate Aitchisonians to strive for the extraordinary. It speaks volumes for the School&rsquo;s ability to draw the best out each of its students.</p>
          </div>
        </div>
      <!--  <div class="col-md-12">
          <div class="feature-content">
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <img src="assets/images/1.jpg" alt="pic" >
                  <h4 class="feat-title">Imran Khan</h4>
                  <p>Chairman of the Pakistan Tehreek-e-Insaf (PTI) political party, former cricketer, philanthropist and former chancellor of the University of Bradford.</p>
                </div>
              </div>
              
               <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <img src="assets/images/2.jpg">
                  <h4 class="feat-title">Syed Babar Ali</h4>
                  <p>Industrialist, philanthropist, former Finance Minister of Pakistan and Pro-chancellor of the Lahore University of Management Sciences.</p>
                </div>
              </div>
              
               <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <img src="assets/images/3.jpg" alt="pic" >
                  <h4 class="feat-title">Shah Mahmood Qureshi </h4>
                  <p>Politician, agriculturist and parliamentarian, currently serving as the Vice-chairman and deputy parliamentary leader of the Pakistan Tehreek-e-Insaf political party </p>
                </div>
              </div>
              
               <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <img src="assets/images/4.jpg" alt="pic" >
                  <h4 class="feat-title">Dr. Umar Saif </h4>
                  <p>Computer scientist, entrepreneur and Vice Chancellor of the Information Technology University.</p>
                </div>
              </div>
              
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <img src="assets/images/5.jpg" alt="pic" >
                  <h4 class="feat-title">Pervez Khan Khattak  </h4>
                  <p>Pakistani politician, currently serving as the Chief Minister of Khyber Pakhtunkhwa .</p>
                </div>
              </div>
              
              <div class="col-md-4 col-sm-6">
                <div class="single-feature wow zoomIn">
                  <img src="assets/images/6.jpg" alt="pic" >
                  <h4 class="feat-title">Sardar Ayaz Sadiq </h4>
                  <p>Senior leader of the PML (N) political party, speaker of the National Assembly of Pakistan.</p>
                </div>
              </div>
            </div>
          </div>
        </div>-->
      </div>
    </div>
  </section>
  <!-- End Feature -->
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
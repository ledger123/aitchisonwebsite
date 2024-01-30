<?php
	include("phpinclude/main.php");
	if(strlen($_SERVER['QUERY_STRING']) > 0){
		header("location: gallery.php");
		exit();	
	}
	$title="Aitchison Alumni: Gallery";
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
	  <style>
	  	.small_img_18122018 {
			height: auto !important;			
		}
		.single-item-content{
			padding-top: 25% !important;	  
			  
		  }

	  </style>
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
  <?php /*?><div id="preloader">
    <div id="status">&nbsp;</div>
  </div><?php */?>
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
              <h2>Gallery</h2>
            </div>
          </div>
          <!--<div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Portfolio</li>
              </ol>
            </div>
          </div>-->
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->
  
  <!-- Start portfolio -->
  <section id="portfolio">
    <div class="portfolio-area">
        <!-- portfolio menu -->
       <div class="portfolio-menu">
         <ul>
           <li class="filter" data-filter="all">All</li>
          <li class="filter" data-filter=".foundersday">founders day</li>
           <li class="filter" data-filter=".branding">Hockey Fixture</li>
           <li class="filter" data-filter=".design">Cricket Fixture</li>
           <li class="filter" data-filter=".development">Football Fixture</li>
           <li class="filter" data-filter=".photography">Tent Pegging</li>
           
         </ul>
       </div>      
       <!-- Portfolio container -->
            
          <!--photography/Founders Day-->
         <div id="mixit-container" class="portfolio-container">
         <div class="single-portfolio mix foundersday">
           <div class="single-item">
             <img src="assets/images/portfolio/small/foundersday-1.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfoundersday-1.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
         <!--photography/founders dat-->
          <!--photography/Founders Day-->
         <div class="single-portfolio mix foundersday">
           <div class="single-item">
             <img src="assets/images/portfolio/small/foundersday-2.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfoundersday-2.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
         <!--photography/founders dat-->
          <!--photography/Founders Day-->
         <div class="single-portfolio mix foundersday">
           <div class="single-item">
             <img src="assets/images/portfolio/small/foundersday-3.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfoundersday-3.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
         <!--photography/founders dat-->
          <!--photography/Founders Day-->
         <div class="single-portfolio mix foundersday">
           <div class="single-item">
             <img src="assets/images/portfolio/small/foundersday-4.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfoundersday-4.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
         <!--photography/founders dat-->
          <!--photography/Founders Day-->
         <div class="single-portfolio mix foundersday">
           <div class="single-item">
             <img src="assets/images/portfolio/small/foundersday-5.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfoundersday-5.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
         <!--photography/founders dat-->
          <!--photography/Founders Day-->
         <div class="single-portfolio mix foundersday">
           <div class="single-item">
             <img src="assets/images/portfolio/small/foundersday-6.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfoundersday-6.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
         <!--photography/founders dat-->
          <!--photography/Founders Day-->
         <div class="single-portfolio mix foundersday">
           <div class="single-item">
             <img src="assets/images/portfolio/small/foundersday-7.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfoundersday-7.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
         <!--photography/founders dat-->
          <!--photography/Founders Day-->
         <div class="single-portfolio mix foundersday">
           <div class="single-item">
             <img src="assets/images/portfolio/small/foundersday-8.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfoundersday-8.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
         <!--photography/founders dat-->
          <!--photography/Founders Day-->
         <div class="single-portfolio mix foundersday">
           <div class="single-item">
             <img src="assets/images/portfolio/small/foundersday-9.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfoundersday-9.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
         <!--photography/founders dat-->
          <!--photography/Founders Day-->
         <div class="single-portfolio mix foundersday">
           <div class="single-item">
             <img src="assets/images/portfolio/small/foundersday-10.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfoundersday-10.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
         <!--photography/founders dat-->
          <!--photography/Founders Day-->
         <div class="single-portfolio mix foundersday">
           <div class="single-item">
             <img src="assets/images/portfolio/small/foundersday-11.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfoundersday-11.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
         <!--photography/founders dat-->
          <!--photography/Founders Day-->
         <div class="single-portfolio mix foundersday">
           <div class="single-item">
             <img src="assets/images/portfolio/small/foundersday-12.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfoundersday-12.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
         <!--photography/founders dat-->
          <!--photography/Founders Day-->
         <div class="single-portfolio mix foundersday">
           <div class="single-item">
             <img src="assets/images/portfolio/small/foundersday-13.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfoundersday-13.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
         <!--photography/founders dat-->
          <!--photography/Founders Day-->
         <div class="single-portfolio mix foundersday">
           <div class="single-item">
             <img src="assets/images/portfolio/small/foundersday-14.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfoundersday-14.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
         <!--photography/founders dat-->
          <!--photography/Founders Day-->
         <div class="single-portfolio mix foundersday">
           <div class="single-item">
             <img src="assets/images/portfolio/small/foundersday-15.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfoundersday-15.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
         <!--photography/founders dat-->
          <!--photography/Founders Day-->
         <div class="single-portfolio mix foundersday">
           <div class="single-item">
             <img src="assets/images/portfolio/small/foundersday-16.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfoundersday-16.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
         <!--photography/founders dat-->
         <!--Design/Cricket-->
         
         <div class="single-portfolio mix design">
           <div class="single-item">
             <img src="assets/images/portfolio/small/cricket-1.jpg" class="img-responsive small_img_18122018" alt="img">
            <div class="single-item-content">               
              <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lcricket-1.jpg"><i class="fa fa-search-plus"></i></a>
              <div class="portfolio-title">
                <?php /*?><span>View</span><?php */?>
              </div>
             </div>
           </div>
         </div>
         <!--Design/Cricket-->
         <div class="single-portfolio mix design">
           <div class="single-item">
             <img src="assets/images/portfolio/small/cricket-2.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lcricket-2.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
         <!--Design/Cricket-->
         <div class="single-portfolio mix design">
           <div class="single-item">
             <img src="assets/images/portfolio/small/cricket-3.jpg" class="img-responsive small_img_18122018" alt="img">
            <div class="single-item-content">               
              <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lcricket-3.jpg"><i class="fa fa-search-plus"></i></a>
              <div class="portfolio-title">
                <?php /*?><span>View</span><?php */?>
              </div>
             </div>
           </div>
         </div>
                  <!--Design/Cricket-->
         <div class="single-portfolio mix design">
           <div class="single-item">
             <img src="assets/images/portfolio/small/cricket-4.jpg" class="img-responsive small_img_18122018" alt="img">
            <div class="single-item-content">               
              <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lcricket-4.jpg"><i class="fa fa-search-plus"></i></a>
              <div class="portfolio-title">
                <?php /*?><span>View</span><?php */?>
              </div>
             </div>
           </div>
         </div>
                  <!--Design/Cricket-->
         <div class="single-portfolio mix design">
           <div class="single-item">
             <img src="assets/images/portfolio/small/cricket-5.jpg" class="img-responsive small_img_18122018" alt="img">
            <div class="single-item-content">               
              <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lcricket-5.jpg"><i class="fa fa-search-plus"></i></a>
              <div class="portfolio-title">
                <?php /*?><span>View</span><?php */?>
              </div>
             </div>
           </div>
         </div>
                  <!--Design/Cricket-->
         <div class="single-portfolio mix design">
           <div class="single-item">
             <img src="assets/images/portfolio/small/cricket-6.jpg" class="img-responsive small_img_18122018" alt="img">
            <div class="single-item-content">               
              <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lcricket-6.jpg"><i class="fa fa-search-plus"></i></a>
              <div class="portfolio-title">
                <?php /*?><span>View</span><?php */?>
              </div>
             </div>
           </div>
         </div>
                  <!--Design/Cricket-->
         <div class="single-portfolio mix design">
           <div class="single-item">
             <img src="assets/images/portfolio/small/cricket-7.jpg" class="img-responsive small_img_18122018" alt="img">
            <div class="single-item-content">               
              <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lcricket-7.jpg"><i class="fa fa-search-plus"></i></a>
              <div class="portfolio-title">
                <?php /*?><span>View</span><?php */?>
              </div>
             </div>
           </div>
         </div>
                  <!--Design/Cricket-->
         <div class="single-portfolio mix design">
           <div class="single-item">
             <img src="assets/images/portfolio/small/cricket-8.jpg" class="img-responsive small_img_18122018" alt="img">
            <div class="single-item-content">               
              <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lcricket-8.jpg"><i class="fa fa-search-plus"></i></a>
              <div class="portfolio-title">
                <?php /*?><span>View</span><?php */?>
              </div>
             </div>
           </div>
         </div>
                  <!--Design/Cricket-->
         <div class="single-portfolio mix design">
           <div class="single-item">
             <img src="assets/images/portfolio/small/cricket-9.jpg" class="img-responsive small_img_18122018" alt="img">
            <div class="single-item-content">               
              <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lcricket-9.jpg"><i class="fa fa-search-plus"></i></a>
              <div class="portfolio-title">
                <?php /*?><span>View</span><?php */?>
              </div>
             </div>
           </div>
         </div>
                  <!--Design/Cricket-->
         <div class="single-portfolio mix design">
           <div class="single-item">
             <img src="assets/images/portfolio/small/cricket-10.jpg" class="img-responsive small_img_18122018" alt="img">
            <div class="single-item-content">               
              <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lcricket-10.jpg"><i class="fa fa-search-plus"></i></a>
              <div class="portfolio-title">
                <?php /*?><span>View</span><?php */?>
              </div>
             </div>
           </div>
         </div>
                  <!--Design/Cricket-->
         <div class="single-portfolio mix design">
           <div class="single-item">
             <img src="assets/images/portfolio/small/cricket-11.jpg" class="img-responsive small_img_18122018" alt="img">
            <div class="single-item-content">               
              <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lcricket-11.jpg"><i class="fa fa-search-plus"></i></a>
              <div class="portfolio-title">
                <?php /*?><span>View</span><?php */?>
              </div>
             </div>
           </div>
         </div>
                  <!--Design/Cricket-->
         <div class="single-portfolio mix design">
           <div class="single-item">
             <img src="assets/images/portfolio/small/cricket-12.jpg" class="img-responsive small_img_18122018" alt="img">
            <div class="single-item-content">               
              <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lcricket-12.jpg"><i class="fa fa-search-plus"></i></a>
              <div class="portfolio-title">
                <?php /*?><span>View</span><?php */?>
              </div>
             </div>
           </div>
         </div>
       
         <!--Branding/Hocket -->
       
         <div class="single-portfolio mix branding">
           <div class="single-item">
             <img src="assets/images/portfolio/small/hockey-1.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lhockey-1.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div> 
        <!--Branding/Hocket -->
         <div class="single-portfolio mix branding">
           <div class="single-item">
             <img src="assets/images/portfolio/small/hockey-2.jpg" class="img-responsive small_img_18122018" alt="img">
            <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lhockey-2.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
         <!--Branding/Hocket -->
         <div class="single-portfolio mix branding">
           <div class="single-item">
             <img src="assets/images/portfolio/small/hockey-3.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lhockey-3.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
        
          <!--Branding/Hocket -->
          <div class="single-portfolio mix branding">
           <div class="single-item">
             <img src="assets/images/portfolio/small/hockey-4.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lhockey-4.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
                   <!--Branding/Hocket -->
          <div class="single-portfolio mix branding">
           <div class="single-item">
             <img src="assets/images/portfolio/small/hockey-5.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lhockey-12.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
                   <!--Branding/Hocket -->
          <div class="single-portfolio mix branding">
           <div class="single-item">
             <img src="assets/images/portfolio/small/hockey-6.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lhockey-6.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
                   <!--Branding/Hocket -->
          <div class="single-portfolio mix branding">
           <div class="single-item">
             <img src="assets/images/portfolio/small/hockey-7.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lhockey-7.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
                   <!--Branding/Hocket -->
          <div class="single-portfolio mix branding">
           <div class="single-item">
             <img src="assets/images/portfolio/small/hockey-8.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lhockey-8.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
                   <!--Branding/Hocket -->
          <div class="single-portfolio mix branding">
           <div class="single-item">
             <img src="assets/images/portfolio/small/hockey-9.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lhockey-9.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
                   <!--Branding/Hocket -->
          <div class="single-portfolio mix branding">
           <div class="single-item">
             <img src="assets/images/portfolio/small/hockey-10.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lhockey-10.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
                   <!--Branding/Hocket -->
          <div class="single-portfolio mix branding">
           <div class="single-item">
             <img src="assets/images/portfolio/small/hockey-11.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lhockey-11.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
                   <!--Branding/Hocket -->
          <div class="single-portfolio mix branding">
           <div class="single-item">
             <img src="assets/images/portfolio/small/hockey-12.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lhockey-12.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
        <!--development/football -->
         <div class="single-portfolio mix development">
           <div class="single-item">
             <img src="assets/images/portfolio/small/football-1.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfootball-1.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
         <!--development/football -->
         <div class="single-portfolio mix development">
           <div class="single-item">
             <img src="assets/images/portfolio/small/football-2.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfootball-2.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
          <!--development/football -->
         <div class="single-portfolio mix development">
           <div class="single-item">
             <img src="assets/images/portfolio/small/football-3.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfootball-3.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
          <!--development/football -->
         <div class="single-portfolio mix development">
           <div class="single-item">
             <img src="assets/images/portfolio/small/football-4.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfootball-4.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
          <!--development/football -->
         <div class="single-portfolio mix development">
           <div class="single-item">
             <img src="assets/images/portfolio/small/football-5.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfootball-5.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
          <!--development/football -->
         <div class="single-portfolio mix development">
           <div class="single-item">
             <img src="assets/images/portfolio/small/football-6.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfootball-6.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
          <!--development/football -->
         <div class="single-portfolio mix development">
           <div class="single-item">
             <img src="assets/images/portfolio/small/football-7.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfootball-7.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
          <!--development/football -->
         <div class="single-portfolio mix development">
           <div class="single-item">
             <img src="assets/images/portfolio/small/football-8.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfootball-8.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
          <!--development/football -->
         <div class="single-portfolio mix development">
           <div class="single-item">
             <img src="assets/images/portfolio/small/football-9.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfootball-9.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
          <!--development/football -->
         <div class="single-portfolio mix development">
           <div class="single-item">
             <img src="assets/images/portfolio/small/football-10.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfootball-10.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
          <!--development/football -->
         <div class="single-portfolio mix development">
           <div class="single-item">
             <img src="assets/images/portfolio/small/football-11.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfootball-11.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
          <!--development/football -->
         <div class="single-portfolio mix development">
           <div class="single-item">
             <img src="assets/images/portfolio/small/football-12.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lfootball-12.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
<!--photography/Riding-->
         <div class="single-portfolio mix photography">
           <div class="single-item">
             <img src="assets/images/portfolio/small/riding-1.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lriding-1.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
         <!--photography/Riding-->
         <div class="single-portfolio mix photography">
           <div class="single-item">
             <img src="assets/images/portfolio/small/riding-2.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lriding-2.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
          <!--photography/Riding-->
         <div class="single-portfolio mix photography">
           <div class="single-item">
             <img src="assets/images/portfolio/small/riding-3.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lriding-3.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
          <!--photography/Riding-->
         <div class="single-portfolio mix photography">
           <div class="single-item">
             <img src="assets/images/portfolio/small/riding-4.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lriding-4.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
          <!--photography/Riding-->
         <div class="single-portfolio mix photography">
           <div class="single-item">
             <img src="assets/images/portfolio/small/riding-5.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lriding-5.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
          <!--photography/Riding-->
         <div class="single-portfolio mix photography">
           <div class="single-item">
             <img src="assets/images/portfolio/small/riding-6.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lriding-6.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
         <!--photography/Riding-->
         <div class="single-portfolio mix photography">
           <div class="single-item">
             <img src="assets/images/portfolio/small/riding-7.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lriding-7.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
          <!--photography/Riding-->
         <div class="single-portfolio mix photography">
           <div class="single-item">
             <img src="assets/images/portfolio/small/riding-8.jpg" class="img-responsive small_img_18122018" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/lriding-8.jpg"><i class="fa fa-search-plus"></i></a>
                <div class="portfolio-title">
                  <?php /*?><span>View</span><?php */?>
                </div>
             </div>
           </div>
         </div>
          <!--photography/Riding-->
   
         
          
       </div>        
    </div>
  </section>
  <!-- End portfolio -->
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
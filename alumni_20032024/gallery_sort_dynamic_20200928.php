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
             <li class="filter" data-filter=".events">Events</li>
          <li class="filter" data-filter=".foundersday">founders day</li>
           <li class="filter" data-filter=".hockey">Hockey Fixture</li>
           <li class="filter" data-filter=".cricket">Cricket Fixture</li>
           <li class="filter" data-filter=".football">Football Fixture</li>
           <li class="filter" data-filter=".tent-pegging">Tent Pegging</li>
           
         </ul>
       </div>      
       <!-- Portfolio container -->
            
          <!--tent-pegging/Founders Day-->
         <div id="mixit-container" class="portfolio-container">
			<?php
			 	$arr=array();
			 	$arr[]=array("mix events", "others/small/others_20200926_20.jpg", "others/others_20200926_20.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_21.jpg", "others/others_20200926_21.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_22.jpg", "others/others_20200926_22.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_23.jpg", "others/others_20200926_23.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_24.jpg", "others/others_20200926_24.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_25.jpg", "others/others_20200926_25.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_26.jpg", "others/others_20200926_26.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_27.jpg", "others/others_20200926_27.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_28.jpg", "others/others_20200926_28.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_29.jpg", "others/others_20200926_29.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_30.jpg", "others/others_20200926_30.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_31.jpg", "others/others_20200926_31.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_32.jpg", "others/others_20200926_32.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_33.jpg", "others/others_20200926_33.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_34.jpg", "others/others_20200926_34.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_35.jpg", "others/others_20200926_35.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_36.jpg", "others/others_20200926_36.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_37.jpg", "others/others_20200926_37.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_38.jpg", "others/others_20200926_38.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_39.jpg", "others/others_20200926_39.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_40.jpg", "others/others_20200926_40.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_41.jpg", "others/others_20200926_41.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_42.jpg", "others/others_20200926_42.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_43.jpg", "others/others_20200926_43.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_44.jpg", "others/others_20200926_44.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_45.jpg", "others/others_20200926_45.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_46.jpg", "others/others_20200926_46.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_47.jpg", "others/others_20200926_47.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_48.jpg", "others/others_20200926_48.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_49.jpg", "others/others_20200926_49.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_50.jpg", "others/others_20200926_50.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_51.jpg", "others/others_20200926_51.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_52.jpg", "others/others_20200926_52.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_53.jpg", "others/others_20200926_53.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_54.jpg", "others/others_20200926_54.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_55.jpg", "others/others_20200926_55.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_56.jpg", "others/others_20200926_56.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_57.jpg", "others/others_20200926_57.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_58.jpg", "others/others_20200926_58.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_59.jpg", "others/others_20200926_59.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_60.jpg", "others/others_20200926_60.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_61.jpg", "others/others_20200926_61.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_62.jpg", "others/others_20200926_62.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_63.jpg", "others/others_20200926_63.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_64.jpg", "others/others_20200926_64.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_65.jpg", "others/others_20200926_65.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_66.jpg", "others/others_20200926_66.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_67.jpg", "others/others_20200926_67.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_68.jpg", "others/others_20200926_68.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_69.jpg", "others/others_20200926_69.jpg", "View");
			  	$arr[]=array("mix events", "others/small/others_20200926_70.jpg", "others/others_20200926_70.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_71.jpg", "others/others_20200926_71.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_72.jpg", "others/others_20200926_72.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_73.jpg", "others/others_20200926_73.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_74.jpg", "others/others_20200926_74.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_75.jpg", "others/others_20200926_75.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_76.jpg", "others/others_20200926_76.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_77.jpg", "others/others_20200926_77.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_78.jpg", "others/others_20200926_78.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_79.jpg", "others/others_20200926_79.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_80.jpg", "others/others_20200926_80.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_81.jpg", "others/others_20200926_81.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_82.jpg", "others/others_20200926_82.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_83.jpg", "others/others_20200926_83.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_84.jpg", "others/others_20200926_84.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_85.jpg", "others/others_20200926_85.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_86.jpg", "others/others_20200926_86.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_4.jpg", "others/others_20200926_4.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_5.jpg", "others/others_20200926_5.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_6.jpg", "others/others_20200926_6.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_7.jpg", "others/others_20200926_7.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_9.jpg", "others/others_20200926_9.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_12.jpg", "others/others_20200926_12.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_13.jpg", "others/others_20200926_13.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_15.jpg", "others/others_20200926_15.jpg", "View");
			 	$arr[]=array("mix events", "others/small/others_20200926_17.jpg", "others/others_20200926_17.jpg", "View");
			 	$arr[]=array("mix foundersday", "foundersday-1.jpg", "lfoundersday-1.jpg", "View");
			 	$arr[]=array("mix foundersday", "foundersday-2.jpg", "lfoundersday-2.jpg", "View");
			 	$arr[]=array("mix foundersday", "foundersday-3.jpg", "lfoundersday-3.jpg", "View");
			 	$arr[]=array("mix foundersday", "foundersday-4.jpg", "lfoundersday-4.jpg", "View");
			 	$arr[]=array("mix foundersday", "foundersday-5.jpg", "lfoundersday-5.jpg", "View");
				$arr[]=array("mix foundersday", "foundersday-6.jpg", "lfoundersday-6.jpg", "View"); 	
			 	$arr[]=array("mix foundersday", "foundersday-7.jpg", "lfoundersday-7.jpg", "View"); 	
			 	$arr[]=array("mix foundersday", "foundersday-8.jpg", "lfoundersday-8.jpg", "View"); 	
			 	$arr[]=array("mix foundersday", "foundersday-9.jpg", "lfoundersday-9.jpg", "View");
			 	$arr[]=array("mix foundersday", "foundersday-10.jpg", "lfoundersday-10.jpg", "View");
				$arr[]=array("mix foundersday", "foundersday-11.jpg", "lfoundersday-11.jpg", "View");	 
			 	$arr[]=array("mix foundersday", "foundersday-12.jpg", "lfoundersday-12.jpg", "View");	 
			 	$arr[]=array("mix foundersday", "foundersday-13.jpg", "lfoundersday-13.jpg", "View");	 
			 	$arr[]=array("mix foundersday", "foundersday-14.jpg", "lfoundersday-14.jpg", "View");	 
			 	$arr[]=array("mix foundersday", "foundersday-15.jpg", "lfoundersday-15.jpg", "View");
			 	$arr[]=array("mix foundersday", "foundersday-16.jpg", "lfoundersday-16.jpg", "View");
			 	$arr[]=array("mix cricket", "cricket/small/cricket_20200926_1.jpg", "cricket/cricket_20200926_1.jpg", "View");
			 	$arr[]=array("mix cricket", "cricket/small/cricket_20200926_2.jpg", "cricket/cricket_20200926_2.jpg", "View");
			 	$arr[]=array("mix cricket", "cricket-1.jpg", "lcricket-1.jpg", "View");
			 	$arr[]=array("mix cricket", "cricket-2.jpg", "lcricket-2.jpg", "View");
			 	$arr[]=array("mix cricket", "cricket-3.jpg", "lcricket-3.jpg", "View");
			 	$arr[]=array("mix cricket", "cricket-4.jpg", "lcricket-4.jpg", "View");
			 	$arr[]=array("mix cricket", "cricket-5.jpg", "lcricket-5.jpg", "View");
			 	$arr[]=array("mix cricket", "cricket-6.jpg", "lcricket-6.jpg", "View");
			 	$arr[]=array("mix cricket", "cricket-7.jpg", "lcricket-7.jpg", "View");
			 	$arr[]=array("mix cricket", "cricket-8.jpg", "lcricket-8.jpg", "View");
			 	$arr[]=array("mix cricket", "cricket-9.jpg", "lcricket-9.jpg", "View");
			 	$arr[]=array("mix cricket", "cricket-10.jpg", "lcricket-10.jpg", "View");
			 	$arr[]=array("mix cricket", "cricket-11.jpg", "lcricket-11.jpg", "View");
			 	$arr[]=array("mix cricket", "cricket-12.jpg", "lcricket-12.jpg", "View");
			 	$arr[]=array("mix hockey", "hockey/small/hockey_20200926_1.jpg", "hockey/hockey_20200926_1.jpg", "View");
			 	$arr[]=array("mix hockey", "hockey/small/hockey_20200926_2.jpg", "hockey/hockey_20200926_2.jpg", "View");
			 	$arr[]=array("mix hockey", "hockey/small/hockey_20200926_3.jpg", "hockey/hockey_20200926_3.jpg", "View");
			 	$arr[]=array("mix hockey", "hockey/small/hockey_20200926_4.jpg", "hockey/hockey_20200926_4.jpg", "View");
			 	$arr[]=array("mix hockey", "hockey-1.jpg", "lhockey-1.jpg", "View");
			 	$arr[]=array("mix hockey", "hockey-2.jpg", "lhockey-2.jpg", "View");
			 	$arr[]=array("mix hockey", "hockey-3.jpg", "lhockey-3.jpg", "View");
			 	$arr[]=array("mix hockey", "hockey-4.jpg", "lhockey-4.jpg", "View");			 	
			 	$arr[]=array("mix hockey", "hockey-5.jpg", "lhockey-5.jpg", "View");
			 	$arr[]=array("mix hockey", "hockey-6.jpg", "lhockey-6.jpg", "View");
			 	$arr[]=array("mix hockey", "hockey-7.jpg", "lhockey-7.jpg", "View");
			 	$arr[]=array("mix hockey", "hockey-8.jpg", "lhockey-8.jpg", "View");
			 	$arr[]=array("mix hockey", "hockey-9.jpg", "lhockey-9.jpg", "View");
			 	$arr[]=array("mix hockey", "hockey-10.jpg", "lhockey-10.jpg", "View");	
			 	$arr[]=array("mix hockey", "hockey-11.jpg", "lhockey-11.jpg", "View");
			 	$arr[]=array("mix hockey", "hockey-12.jpg", "lhockey-12.jpg", "View");
			 	$arr[]=array("mix football", "football-1.jpg", "lfootball-1.jpg", "View");
			 	$arr[]=array("mix football", "football-2.jpg", "lfootball-2.jpg", "View");
			 	$arr[]=array("mix football", "football-3.jpg", "lfootball-3.jpg", "View");
			 	$arr[]=array("mix football", "football-4.jpg", "lfootball-4.jpg", "View");
			 	$arr[]=array("mix football", "football-5.jpg", "lfootball-5.jpg", "View");
			 	$arr[]=array("mix football", "football-6.jpg", "lfootball-6.jpg", "View");
			 	$arr[]=array("mix football", "football-7.jpg", "lfootball-7.jpg", "View");
			 	$arr[]=array("mix football", "football-8.jpg", "lfootball-8.jpg", "View");
			 	$arr[]=array("mix football", "football-9.jpg", "lfootball-9.jpg", "View");
			 	$arr[]=array("mix football", "football-10.jpg", "lfootball-10.jpg", "View");
			 	$arr[]=array("mix football", "football-11.jpg", "lfootball-11.jpg", "View");
			 	$arr[]=array("mix football", "football-12.jpg", "lfootball-12.jpg", "View");
			 	$arr[]=array("mix tent-pegging", "riding/small/riding_20200926_1.jpg", "riding/riding_20200926_1.jpg", "View");
			 	$arr[]=array("mix tent-pegging", "riding/small/riding_20200926_2.jpg", "riding/riding_20200926_2.jpg", "View");
			 	$arr[]=array("mix tent-pegging", "riding/small/riding_20200926_3.jpg", "riding/riding_20200926_3.jpg", "View");
			 	$arr[]=array("mix tent-pegging", "riding/small/riding_20200926_4.jpg", "riding/riding_20200926_4.jpg", "View");
			 	$arr[]=array("mix tent-pegging", "riding-1.jpg", "lriding-1.jpg", "View");
			 	$arr[]=array("mix tent-pegging", "riding-2.jpg", "lriding-2.jpg", "View");
			 	$arr[]=array("mix tent-pegging", "riding-3.jpg", "lriding-3.jpg", "View");
			 	$arr[]=array("mix tent-pegging", "riding-4.jpg", "lriding-4.jpg", "View");
			 	$arr[]=array("mix tent-pegging", "riding-5.jpg", "lriding-5.jpg", "View");
			 	$arr[]=array("mix tent-pegging", "riding-6.jpg", "lriding-6.jpg", "View");
			 /* 
             
			 */
			 ?>
             <!--miscellaneous/Others-->
			 <?php
			 	for ($i = 0; $i < count($arr); $i++) {	
			 ?>
			 	<div class="single-portfolio <?php echo $arr[$i][0];?>">
                     <div class="single-item">
                         <img src="assets/images/portfolio/<?php echo $arr[$i][1];?>" alt="img">
                         <div class="single-item-content">
                             <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/portfolio/<?php echo $arr[$i][2];?>"><i class="fa fa-search-plus"></i></a>
                             <div class="portfolio-title">
                                 <span><?php echo $arr[$i][3];?></span>
                             </div>
                         </div>
                     </div>
                 </div>
			 <?php
				}
			 ?>
          
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
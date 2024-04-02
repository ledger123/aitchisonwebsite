<?php
	include("phpinclude/main.php");
	if(strlen($_SERVER['QUERY_STRING']) > 0){
		header("location: notable.php");
		exit();	
	}
	$title="Aitchison Alumni: Notable Alumni";
	
	$data = array();
	$data["architects"][] = array("desc"=>"Kamil Khan Mumtaz", "file"=>"kamal-khan");
	$data["architects"][] = array("desc"=>"Habib Fida Ali", "file"=>"habib-fida-ali");
	
	$data["arts"][] = array("desc"=>"Yawar Hayat Khan", "file"=>"yawar-hayat-khan");
	$data["arts"][] = array("desc"=>"Sarmad Sultan Khoosat", "file"=>"sarmad-sultan-khoosat");
	$data["arts"][] = array("desc"=>"Shaan Shahid", "file"=>"shaan-shahid");
	$data["arts"][] = array("desc"=>"Ijaz ul Hassan", "file"=>"ijaz-ul-hassan");
	$data["arts"][] = array("desc"=>"Ali Aziz Sethi", "file"=>"ali-sethi");
	$data["arts"][] = array("desc"=>"Irfan Ahson", "file"=>"irfan-ahson");
	
	$data["business"][] = array("desc"=>"Syed Babar Ali", "file"=>"syed-babar-ali");
	$data["business"][] = array("desc"=>"Iqbal Z Ahmed", "file"=>"iqbal-ahmed");
	$data["business"][] = array("desc"=>"Syed Mohammad Mohsin", "file"=>"syed-mohammad-mohsin");
	$data["business"][] = array("desc"=>"Tariq Sayeed Saigol", "file"=>"tariq-sayeed-saigol");
	$data["business"][] = array("desc"=>"Omar Saeed", "file"=>"omar-saeed");
	$data["business"][] = array("desc"=>"Aamir Ibrahim", "file"=>"aamir-ibrahim");
	
	
	$data["engineering"][] = array("desc"=>"Sohail Nawaz", "file"=>"sohail-nawaz");
	$data["engineering"][] = array("desc"=>"Ali Tariq", "file"=>"ali-tariq");
	$data["engineering"][] = array("desc"=>"Malik Ahmad Khan", "file"=>"malik-ahmed-khan");
	
	$data["it"][] = array("desc"=>"Dr. Umar Saif", "file"=>"umer-saif");
	$data["it"][] = array("desc"=>"Ahmed Khan", "file"=>"ahmad-khan");
	$data["it"][] = array("desc"=>"Usman Yousaf Mobin", "file"=>"usman-yousaf-mobin");
	
	$data["law"][] = array("desc"=>"Aitzaz Ahsan", "file"=>"aitzaz-ahsan");
	$data["law"][] = array("desc"=>"Justice Mansoor Ali Shah", "file"=>"justice-mansoor");
	$data["law"][] = array("desc"=>"Justice Umar Ata Bandial", "file"=>"justice-umar-ata-bandial");
	$data["law"][] = array("desc"=>"Justice Yayha Afirdi", "file"=>"justice-yahya-afridi");
	$data["law"][] = array("desc"=>"Justice Munib Akhtar", "file"=>"justice-muneeb-akhtar");
	$data["law"][] = array("desc"=>"Salman Akram Raja", "file"=>"salman-akram-raja");
	
	
	$data["medicine"][] = array("desc"=>"Dr. Javed Akram", "file"=>"javad-akram");
	$data["medicine"][] = array("desc"=>"Dr. Amer Yar Khan", "file"=>"amer-yar-khan");
	$data["medicine"][] = array("desc"=>"Dr. Omar Chughtai", "file"=>"omar-chughtai");
	$data["medicine"][] = array("desc"=>"Dr. Umar Latif", "file"=>"dr-umar-latif");
	
	
	$data["politics"][] = array("desc"=>"Imran Khan", "file"=>"imran-khan");
	$data["politics"][] = array("desc"=>"Amir Mohammad Khan (Nawab of Kalabagh)", "file"=>"amir-mohammad-khan");
	$data["politics"][] = array("desc"=>"Aitzaz Ahsan", "file"=>"aitzaz-ahsan");
	$data["politics"][] = array("desc"=>"Farooq Leghari", "file"=>"farooq-leghari");
	$data["politics"][] = array("desc"=>"Ayaz Sadiq", "file"=>"ayaz-sadiq");
	$data["politics"][] = array("desc"=>"Fakhar Imam", "file"=>"fakhar-imam");
	
	$data["sports"][] = array("desc"=>"Hassan Sardar", "file"=>"hassan-sardar");
	$data["sports"][] = array("desc"=>"Sayed Muhammad Jafar", "file"=>"sayed-muhammad-jafar");
	$data["sports"][] = array("desc"=>"Qasim Zia", "file"=>"qasim-zia");
	$data["sports"][] = array("desc"=>"Imran Khan", "file"=>"imran-khan");
	$data["sports"][] = array("desc"=>"Majid Jahangir Khan ", "file"=>"majid-jahanger-khan");
	$data["sports"][] = array("desc"=>"Wahab Riaz", "file"=>"wahab-riaz");
	$data["sports"][] = array("desc"=>"Iftikhar Ali Khan Pataudi", "file"=>"iftikhar-ali-khan");
	$data["sports"][] = array("desc"=>"Rameez Hasan Raja", "file"=>"rameez-raja");
	$data["sports"][] = array("desc"=>"Rashid A. Malik", "file"=>"rashid-malik");
	
	
	
	//echo "<pre>"; var_dump($data); echo "</pre>";
	
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

	<link rel="canonical" href="https://www.kunkalabs.com/mixitup-multifilter/"/>
    
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

.portfolio-container {
	width: 90%;
    margin-left: 6%;
}

.single-item {
	width:90%;
}

.single-portfolio {
	background-color: unset;
	width:24%;
	margin-bottom: 30px;
}

.single-item {
	
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
}

.single-item:hover {
	
	/*-webkit-transition: filter 0.4s ease-in-out;
  -moz-transition: filter 0.4s ease-in-out;
  -o-transition: filter 0.4s ease-in-out;
  -ms-transition: filter 0.4s ease-in-out;
  transition: filter 0.4s ease-in-out;*/
  
	background-color:rgba(255,255,255,0);
    -webkit-filter: grayscale(0%);
    filter: grayscale(0%);
}


.single-item:hover .single-item-content{
	color:#FFCC36;
  background-color: rgba(255,255,255,0);
   -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -o-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
  
}


.single-item-content { 
  background-color:unset;
  -webkit-transform: scale(0);
  -moz-transform: scale(0);
  -o-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  
  -webkit-backface-visibility: hidden; /*for a smooth font */
}

.single-item-content::after {
	left: 12px;
    content: unset;
    height: unset;
    top: unset;
    width: unset;
    /*position: unset;*/
    z-index: -1;
	background: unset;
	background-color:rgba(255,255,255,0);
	
}


.single-item-content a { 
  	color:#fff;
	font-size:24px;
	text-decoration:none;
	padding-left: 6%;
	padding-right: 7%;
}



@media(max-width:991px ){ 
  .single-portfolio {
    width: 50%;
  }
  
  .single-item-content::after {  
    width: 87%;
  }
}

@media (max-width: 480px) {
	.single-portfolio {
		width: 97%;
	}
	  .single-item-content::after {
		width: 95%;
	  }
}

@media(max-width:360px ){ 
   .single-portfolio {
    width: 97%;
  }
  .single-item-content::after {
    left: 6%;
    width: 90%;
  }
}

</style>


  </head>
  <body>

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
              <h2>Notable&nbsp;&nbsp;Alumni</h2>
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
           <li class="filter" data-filter=".architects">Architects</li>
           <li class="filter" data-filter=".arts">Arts &amp; Entertainment</li>
           <li class="filter" data-filter=".business">Business</li>
           <li class="filter" data-filter=".engineering">Engineering</li>
           <li class="filter" data-filter=".it">IT</li>
           <li class="filter" data-filter=".law">Law</li>
           <li class="filter" data-filter=".medicine">Medicine</li>
           <li class="filter" data-filter=".politics">Politics</li>
           <li class="filter" data-filter=".sports">Sports</li>
         </ul>
       </div>
       
       <div class="container">
       
       <div id="mixit-container" class="portfolio-container">
       	
        <?php
        	
			foreach($data as $key => $value) { 
				
				foreach($data[$key] as $row) { 
				
		?>
         
         <div class="single-portfolio mix <?php  echo $key; ?>">
           <div class="single-item">
             <img src="assets/images/notable-alumni/<?php echo $key; ?>/small/<?php echo $row["file"]; ?>.jpg" alt="img">
             <div class="single-item-content">               
                <a class="fancybox view-icon" data-fancybox-group="gallery" href="assets/images/notable-alumni/<?php echo $key; ?>/<?php echo $row["file"]; ?>.jpg"><?php echo $row["desc"]; ?></a>
                
             </div>
           </div>
         </div>
         <?php 	}
		    } ?>
         
           
    </div>
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
  
  <script>
  	$(window).load(function () {
		
		/*jQuery(function(){
			$('.portfolioContainer').mixItUp({
				load: {
					filter: '.architects'
				}
			});
		});*/
		
		//mixer.filter('.architects');
	   
		//var mixer = mixitup('#mixit-container');
		
		//var containerEl = document.querySelector('#mixit-container');
		
		//var mixer = mixitup('#mixit-container');
		
		
		//mixitup.filter('.architects');
		
		/*
		jQuery(function(){
			$.mixitup(containerEl, {
				load: {
					filter: '.architects'
				}
			});
		});*/
		
		/*jQuery(function($) {
			jQuery(function(){$('#mixit-container').mixItUp({
					load: {
						filter: '.architects'
					}
				});
			});
		});*/
		
	});
	
	
  </script>
  
  </body>
</html>
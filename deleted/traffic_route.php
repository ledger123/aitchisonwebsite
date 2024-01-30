﻿	<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	//17070-26354
	$banner_text="";
	if(count($_SESSION['parents']) < 1){
		header("location: ac-parents-login.php");
	}
	$default_open=0;
	header('X-Frame-Options: SAMEORIGIN');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:-  Parents' Login</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <link rel="shortcut icon" href="/nne_logo.ico" type="image/x-icon">
    <link rel="icon" href="/nne_logo.ico" type="image/x-icon">	
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include_once("phpinclude/headercontrol.php");  ?>


    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link href='//fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> 
    <link rel='stylesheet' href='css/circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css"> 
    <!-- preloader 
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
    <link href="css/sidemenu.css" rel="stylesheet">
    
   
    <!-- Google fonts -->
    <link href='//fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='//fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/sidemenu.js"></script>

  </head>
  <body> 

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <?php include("phpinclude/header.php");?>
    <!--=========== END HEADER SECTION ================--> 

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner" style=" background-image: url(<?php echo $banner_image_url;?>);">
      <h2><?php echo $banner_text;?></h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->

    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row" style="min-height: 300px;">
          <!-- start course content -->
          <div class="col-lg-3 col-md-3 col-sm-3">
          <script>
				$(document).ready(function () {
			
					//active state  
					$(function () {
						$('a').click(function (e) {
							$('a').removeClass('active');
							$(this).addClass('active');
						});
					});
					$(function () {
						if (location.pathname.length > '1') {
							$('a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
						}
					});
					
					$(".submenu").hover(function () {
						if($(this).is(":visible")) {
							$(".glossymenu a").removeClass("active");
							$(this).prev().addClass("active");
						}
					},
					function(){    
						//$(this).prev().removeClass("active");            
					});
				});    
			</script>

            <?php include("phpinclude/sidmenu.php");?>
            <script type="text/javascript">            
				ddaccordion.init({
					headerclass: "submenuheader", //Shared CSS class name of headers group
					contentclass: "submenu", //Shared CSS class name of contents group
					revealtype: "mouseover", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
					mouseoverdelay: 400, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
					collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
					defaultexpanded: ["<?php echo $default_open;?>"], //index of content(s) open by default [index1, index2, etc] [] denotes no content
					onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
					animatedefault: false, //Should contents open by default be animated into view?
					persiststate: false, //persist state of opened contents within browser session?
					toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
					togglehtml: ["suffix", "<img src='img/plus.png' class='statusicon' />", "<img src='img/minus.png' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
					animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
					oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
						//do nothing
					},
					onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
						//do nothing
					}
				});
			</script>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-9">
          	<div class="aboutus_area wow fadeInLeft">
            	<?php include("phpinclude/plinks.php");?>
                <?php
                if(strtotime(date("Y-m-d")) < strtotime("2016-05-31")){
					//print_r($_SESSION);
					if($_SESSION['parents']['stuSchool'] == "JSD")
						$src_file="school_doc/js-final.jpg";
					elseif($_SESSION['parents']['stuSchool'] == "PSD")
						$src_file="school_doc/ps-final.jpg";
					elseif($_SESSION['parents']['stuSchool'] == "SSD")
						$src_file="school_doc/ss-final.jpg";
				?>
           	  <!--<h2 class="titile">Date Sheet Promotion Examination 2016</h2>
	            <img src="<?php echo $src_file;?>" width="700" height="962"  alt="Promotion Examination 2016"/>-->
<?php
				}
				?>         

               <?php 
			   		//print_r($_SESSION);
			   		if(strlen($login_msg) > 1){
					?>
              <p><span style="color: #990000"><?php echo $login_msg; ?></span></p>
                    <?php	
					}
			   ?>
               <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <h2 style="text-align: center; font-size: 26px;"><strong>Dropping Boys to School </strong></h2>
                    
                    <!--<p align="justify">Dear Parents,</p>
                    <p>August 02, 2016 </p>-->
                               <p>Dear Parents, </p>
                               <!--<div align="center"><strong>Dropping Boys to School</strong></div><br>-->
                               <p>The school year is about to commence and to facilitate the dropping-off of boys in the morning, the College gates will remain open from <strong>6:30 am to 7:30 am</strong>. Since Junior and Prep School boys will be using the Monnoo Canal gate for entrance, parents are advised to arrive before <strong>7:15 am</strong> in order to reduce traffic congestion. </p>
                               <p>For <strong>Junior School</strong>, the exit of vehicles will be through Babar Ali Gate on the Mall. The College timings are as follows:</p><br>
                               <p>Monday to Thursday; K-1, K-2 and K-3: <strong>7:40 am to 1:45 pm</strong></p>
                               <p>Fridays: <strong>7:40 am to 11:50 am</strong>  </p>
                               <p>Monday to Thursday; K-4 and K-5:  <strong>7:40 am to 2:00 pm</strong> </p>
                               <p>Fridays: <strong>7:40 am to 12:00 pm</strong> </p><br>
                               <p>The drop-off point for <strong>Prep School</strong> boys will be the Water Tank. Exit of vehicles will be through Maratib Ali Gate on the Mall. The school timings are as follows:</p><br>
                               <p>Monday to Thursday; E-1, E-2 and M-1: <strong>7:40 am to 2:20 pm</strong> </p>
                               <p>Fridays: <strong>7:40 am to 12:30 pm </strong></p>
                               <br>
                               <p>The <strong>Senior School</strong> boys will be using the New Principal Lane Gate for entrance. The Exit of the vehicles will be through Monnoo Gate on Sunderdas Road. The school timings are as follows:  </p><br>
                               <p>Monday to Thursday; M-2, C-1, C-2, H-1 and H-2: <strong>7:40 am to 2:20 pm </strong></p>
                               <p>Fridays: <strong>7:40 am to 12:20 pm </strong></p><br>
                               <p>After school, the same route will be adopted for entry and exit for all three schools. 
                    The college buses will operate as per normal routine. 
                    </p>
                              <br>
                              
                    <br>
                    Kind regards,<br><br>
                    <img src="images/signature/prince_signature_new.png" width="212" height="72" ><br>
                    Michael Thomson M.A., Dip. Ed., M.A.C.E
                    <p>Principal</p>
                    </div>
                    </div>
               
			
          </div>
          </div>
          <!-- End course content -->

          <!-- start course archive sidebar -->
          
          <!-- start course archive sidebar -->
        </div>
      </div>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN FOOTER SECTION ================-->
    <?php include("phpinclude/footer.php");?>
    <!--=========== END FOOTER SECTION ================--> 

  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    
    <!-- Preloader js file 
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script language="javascript" src='/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <?php
	if(empty($_SESSION['mynotify'])){
		$_SESSION['mynotify']="Show Me.";
    	if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')){
	?>
    		<script src="js/notifications.js"></script>
    <?php
		}
	}
	?>
    <script src="js/custom1.js"></script>
    <script src="js/menufix.js"></script>

  </body>
</html>
<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=1;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Age Guidelines for Admissions 2022-23</title>

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
    <link rel='stylesheet prefetch' href='css/circliful.css'><!-- smooth animate css file -->
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

<style>

p{margin-top:10px; margin-bottom:20px;}

</style>

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
          	<div class="aboutus_area wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
            <div class="row" style="min-height: 100px;">
                <?php /*?>
            	<div class="col-lg-12 col-md-12 col-sm-12" style="text-align: right;">
                    <a style="padding: 2px 10px;" href="newsandevents-testlink.php?id=418" rel="noopener noreferrer" class="btn btn-primary" role="button">Back</a>
                </div>
                <?php */?>
            </div>
              <div class="row">
              	
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div align="center" style="padding-bottom: 20px;">
                        <img src="./img/ac_logo.png" width="130" height="130" alt="Aitchison College, Lahore.">
                        <div>
                          <div>
                            <div align="center">
                              <h3>Age Guidelines for Admissions 2022-23</h3>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                
             </div>
			<div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12">


                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12">
                        <table class="table table-bordered" style="text-align:center">
                            <thead>
                            <tr>
                                <th style="border-bottom: 1px solid #000; background:#369; color:#FFFFFF;text-align:center;">Year Level</th>
                                <th style="border-bottom: 1px solid #000; background:#369; color:#FFFFFF;text-align:center;">Date of Birth</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Year 1 (K1)</td>
                                <td>June 1, 2016 &ndash; May 31, 2017 inclusive</td>
                            </tr>
                            <tr>
                                <td>Year 2 (K2)</td>
                                <td>June 1, 2015 &ndash; May 31, 2016 inclusive</td>
                            </tr>
                            <tr>
                                <td>Year 3 (K3)</td>
                                <td>June 1, 2014 &ndash; May 31, 2015 inclusive</td>
                            </tr>
                            <tr>
                                <td>Year 4 (K4)</td>
                                <td>June 1, 2013 &ndash; May 31, 2014 inclusive</td>
                            </tr>
                            <tr>
                                <td>Year 5 (K5)</td>
                                <td>June 1, 2012 &ndash; May 31, 2013 inclusive</td>
                            </tr>
                            <tr>
                                <td>Year 6 (K6)</td>
                                <td>June 1, 2011 &ndash; May 31, 2012 inclusive</td>
                            </tr>
                            <tr>
                                <td>Year 7 (E2)</td>
                                <td>June 1, 2010 &ndash; May 31, 2011 inclusive</td>
                            </tr>
                            <tr>
                                <td>Year 8 (M1)</td>
                                <td>June 1, 2009 &ndash; May 31, 2010 inclusive</td>
                            </tr>
                            <tr>
                                <td>Year 9 (M2)</td>
                                <td>June 1, 2008 &ndash; May 31, 2009 inclusive</td>
                            </tr>
                            <tr>
                                <td>Year 10 (C1)</td>
                                <td>June 1, 2007 &ndash; May 31, 2008 inclusive</td>
                            </tr>
                            <tr>
                                <td>Year 11 (C2)</td>
                                <td>June 1, 2006 &ndash; May 31, 2007 inclusive</td>
                            </tr>
                            <tr>
                                <td>Year 12 (H1)</td>
                                <td>June 1, 2005 &ndash; May 31, 2006 inclusive</td>
                            </tr>
                            <tr>
                                <td>Year 13 (H2)</td>
                                <td>June 1, 2004 &ndash; May 31, 2005 inclusive</td>
                            </tr>

                            </tbody>
                        </table>
                        <?php /* ?>
                        <p>&nbsp;</p>

                        <p><strong>Age Waivers</strong></p>

                        <p>Under no circumstances are age waivers given. Requests for age waivers will be ignored.</p>

                        <p><strong>Application Process</strong></p>

                        <p>The updated Guide to Syllabuses are available online, subject to available seats declared in December 2020.</p>

                        <p>Detailed guidance on the procedural matters and documentation for registration will be available on the College website from January 1, 2021.</p>

                        <p>Prospective parents who seek further advice on admissions beyond FAQ may email the Admissions office. <strong>Please do not visit the College for this purpose, as we will be unable to attend to parents/guardians personally. No approaches may be made to the Principal or any staff member regarding admissions.</strong></p>

                        <p>&nbsp;</p>

                        <?php */ ?>
                    </div>
                </div>



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
    

  </body>
</html>
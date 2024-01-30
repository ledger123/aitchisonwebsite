<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=4;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Admission 2017-2018</title>

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
              <div class="row">
              	<div class="col-lg-12 col-md-12 col-sm-12">
                    <a style="padding: 2px 10px;" href="ac-admission-info201718.php" rel="noopener noreferrer" class="btn btn-primary" role="button">Back</a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div align="center" style="padding-bottom: 20px;">
                        <img src="./img/ac_logo.png" width="130" height="130" alt="Aitchison College, Lahore.">
                        <h3><strong>AITCHISON COLLEGE, LAHORE</strong></h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-8">
                	<strong>From: The Principal</strong>
             	</div>
                <div class="col-lg-offset-9 col-lg-3 col-md-offset-9 col-md-3 col-sm-offset-4 col-sm-8" style="text-align: right;">
                	<strong>Ref. No. P- 2534</strong> <br/>
                    <strong>December 16, 2016</strong>
             	</div>
             </div>
<div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
            
                       <p>Dear Prospective Parents and Guardians,</p>
                       <p style="padding:10px 0px;"><strong>Re: Admissions to Aitchison College for the Academic Year 2017-2018 </strong></p>
                       <p>Many more boys apply for Aitchison than there are available seats. Our chief aim is to identify boys who are academically very able and most likely to benefit from either a day or boarding placement in a school with compulsory sport and co-curricular programs. Admissions are based on academic testing and interview of shortlisted candidates. We have provided a FAQ Sheet and all prospective parents and guardians should read this before emailing our Admissions Office (<a style="color:#337ab7;" href="mailto:admission2017@aitchison.edu.pk">admission2017@aitchison.edu.pk</a>) with questions.</p>

<p>Testing only takes place at Aitchison College during the Admissions period. Each boy must first sit an academic test for his nominated class. <strong>Strict age criteria apply for entrants and no age waivers are granted.</strong> Our intake years for 2017-18 are: Year 1 (K1) to Year 10 (C1) for Day and Boarding places. The College will not be admitting boys in to Year 11 (C2) or A Levels (Year 12 and 13). The largest intake is Year 2 (K2). Year 1 (K1) is reserved exclusively for boarders from rural and remote areas. In Prep School and Senior School there are a very limited number of places available. By making application to the College, you are also abiding by all its rules, processes and decision-making.</p>

<p><strong>The Admissions process begins on Friday March 24<sup>th,</sup> 2017 when Registration Forms will be available for downloading from the College website.</strong> <strong>The closing date for applications is Monday April 24<sup>th</sup>, 2017. Academic testing commences Monday May 29<sup>th</sup>, 2017 and ends Saturday June 3<sup>rd</sup>, 2017.&nbsp; </strong>Testing information and syllabus guidelines are available in our <strong>&lsquo;Guide to Admissions Testing&rsquo;</strong> booklet, which can also be downloaded from the College website. All students are tested in English, Mathematics and Urdu only. Please refer to our regulations for exemptions in Urdu.</p>

<p>Based on test results, boys are ranked according to cumulative scores in tested subjects and a &lsquo;cut-off&rsquo; applied. Those shortlisted will be called to interview with their parents. Boys will be interviewed by the Principal and other key staff. Should a boy shortlisted not be offered a place, an additional boy&rsquo;s name will be selected from the supplementary list &ndash;in strict academic rank order &ndash;until the College&rsquo;s Admissions Roll is deemed &lsquo;complete&rsquo; by the Principal.</p>

<p>I wish all candidates well in their endeavours to become Aitchisonians.</p>

                      <br>
            <br>
            Kind regards,<br><br>
            <img src="images/signature/principal_signature_new.png" width="212" height="72"><br>
            Michael Thomson M.A., Dip. Ed., M.A.C.E
            <p>Principal</p>
            </div>
            </div>          </div>
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
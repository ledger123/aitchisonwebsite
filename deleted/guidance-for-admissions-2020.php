<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=5;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Guidance for Admissions 2020</title>

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
            	<div class="col-lg-12 col-md-12 col-sm-12">
                    <a style="padding: 2px 10px;" href="newsandevents-testlink.php?id=418" rel="noopener noreferrer" class="btn btn-primary" role="button">Back</a>
                </div>
            </div>
              <div class="row">
              	
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div align="center" style="padding-bottom: 20px;">
                        <img src="./img/ac_logo.png" width="130" height="130" alt="Aitchison College, Lahore.">
                        <div>
                          <div>
                            <div align="center">
                              <h3>Guidance for Admissions 2020</h3>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                
             </div>
			<div class="row">
            
            <div class="col-lg-12 col-md-12 col-sm-12">
              <div>
                <div>
                  <div align="center">                          </div>
                </div>
              </div>

              <div>
                <ol style="padding-left: 20px; line-height: 1.8;">
                <li><p>The application forms will be available from <strong>1<sup>st</sup> January, 2020 and will not be accepted after 1<sup>st</sup> February, 2020</strong>. The completed application form and the accompanying material should be submitted as soon as possible. A Registration fee of Rs.8000/- (non-refundable) will be initially charged, plus an Application fee of Rs.10000/- (non-refundable). The Admissions tests will take place during the period 30<sup>th </sup>March, 2020 &ndash; 4<sup>th</sup> April, 2020. Interviews and the medical examination will be completed by the <strong>24<sup>th</sup> of April, 2020.</strong></p></li>
                <li><p><strong>Admission to Year 1 (K-1):</strong> For boys who will have reached the age of five years.&nbsp; <strong>Their birthday lies in the range: 1<sup>st</sup> June, 2014 &ndash; 31<sup>st</sup> May, 2015 inclusive</strong>.&nbsp; Boys seeking admission to K-1 are committed to remain as <strong>Boarders for a minimum of eight years</strong>. <strong>Boys living in Lahore or in the vicinity need not apply.</strong> Please note that withdrawal of the boy from the Boarding House will mean that he loses his place at the College.</p></li>
                <li><p><strong>Admission to Year 2 (K-2):</strong> For boys who will have reached the age of six years.&nbsp; <strong>Their birthday lies in the range: 1<sup>st</sup> June, 2013 &ndash; 31<sup>st</sup> May, 2014 inclusive</strong>.&nbsp;</p></li>
                <li><p><strong>Admission to Year 3 (K-3) to Year 5 (K5) and Year 7 (E2):</strong> The number of places offered is very limited, except for Year 7 (E2).&nbsp; The boy will be tested according to his age group. The applicant must achieve the required rank within the number of available vacancies.</p></li>
                <li><p>Boys who have been schooled in Lahore for more than 6 months are ineligible to apply for a boarding place.</p></li>
                <li><p>Attested or Original Hospital Birth Certificate along with Original NADRA Birth Certificate or Family Registration Certificate is required. Kindly also provide first post-natal medical reports if available. If the original hospital record of the applicants&rsquo; birth is not available, please obtain a duplicate copy certified by the present<strong> Medical Superintendent</strong> of the hospital where the applicant was born. <strong>The above mentioned documents should be sent with the completed application form.</strong></p></li>
                <li><p>Three recent passport size photographs of the applicant should be included.</p></li>
                <li><p>Applicant&rsquo;s most recent School Report must be attached. This report must indicate his most recent grades. <strong>Please forward the attached pro-forma to the boy&rsquo;s school, with a request to post the completed copy as soon as possible so that it is with us before the closing date for applications.</strong></p></li>
                <li><p>The number of brothers and sisters the applicant has should be stated in the relevant space on the application form. His position among the siblings (whether he is the eldest or youngest etc.) should be indicated.</p></li>
                <li><p>A Medical Questionnaire must be completed before the parents can be invited for the interview along with the candidate.</p></li>
                </ol>
              </div>
              
              <p>Aitchison College receives no financial grants from the Government. The only source of its income is the fees. Please be sure that you state your income as accurately as possible and be aware that the fees may rise annually to keep up with the inflation. The College insists that fees are paid within the specified periods.</p>

              <p><strong>The processing of the applications starts as soon as we receive your paperwork. Therefore, please send the fully completed documents to us as soon as possible rather than waiting for the deadline of submission. &nbsp;Incomplete forms will not be accepted.</strong></p>

              <p><strong>THE LAST DATE FOR RECEIPT OF APPLICATION IS: 5.00 P.M. ON SATURDAY 1<sup>st</sup> FEBRUARY, 2020</strong></p>

            
              <br />
              <img src="images/signature/principal_signature_new.png" width="212" height="72">
              <br/>               
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
    

  </body>
</html>
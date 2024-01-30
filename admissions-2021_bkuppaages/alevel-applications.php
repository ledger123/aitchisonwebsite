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
     <title>Aitchison College:- Admission to A Level and F.Sc (Pre-Medical) 2021-22</title>

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
          	<div class="aboutus_area wow fadeInLeft">
				<?php /*?><div align="right" class="col-lg-12 col-md-12 col-sm-12" style="margin-bottom: 15px;">
                    <a style="padding: 2px 10px;" href="newsandevents-testlink.php?id=418" rel="noopener noreferrer" class="btn btn-primary" role="button">Back</a>
                </div><?php */?>

                <h2 class="titile">Admission to A Level and F.Sc
                <span style="font-size: 24px;"> (Pre-Medical) 2021-22</span></h2>

                <p>Applicants must complete our <strong>Application Form</strong> together with arranging school reports for the previous 2 years, <strong>certified</strong> by your school, to reach us by <strong>May 30<sup>th</sup>, 2021</strong>. All documents will be inspected. <strong>It is mandatory that your current school sends this information directly to us before the deadline with the full name of the student</strong>. This can be done by post to Aitchison College &lsquo;attention Headmistress Senior School&rsquo; or by to email&nbsp;<a blue="" href="mailto:admission2021@aitchison.edu.pk" style="color: blue;">admission2021@aitchison.edu.pk</a>&nbsp;</p>

                <div align="center" class="table-responsive">
                    <table  cellpadding="10" class="table table-bordered">
                        <tbody>
                        <tr style="background-color:#293594;color:#FFF;">
                            <td style="width:302px; height: 44px; vertical-align: middle; text-align: center;"><strong>A- Level / F.Sc ( Pre-Medical )</strong></td>
                            <td style="width:227px; height: 44px; vertical-align: middle; text-align: center;"><strong>Important Dates to Note </strong></td>
                        </tr>
                        <tr>
                            <td style="width:302px;">
                                <p>Deadline for application submission</p>
                            </td>
                            <td style="width:227px;">
                                <p style="text-align: center;">May 30<sup>th</sup>, 2021</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:302px;">
                                <p>Interviews of shortlisted candidates and offers made to selected ones</p>
                            </td>
                            <td style="width:227px;">
                                <p style="text-align: center;">June 9<sup>th</sup> &ndash; 12<sup>th</sup></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:302px;">
                                <p>Deadline for acceptance of the offer and fee submission</p>
                            </td>
                            <td style="width:227px;">
                                <p style="text-align: center;">July 1<sup>st</sup>, 2021</p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:302px;">
                                <p>Online classes start</p>
                            </td>
                            <td style="width:227px;">
                                <p style="text-align: center;">August 2<sup>nd</sup> &ndash; 20<sup>th</sup></p>
                            </td>
                        </tr>
                        <tr>
                            <td style="width:302px;">
                                <p>Physical Classes start</p>
                            </td>
                            <td style="width:227px;">
                                <p style="text-align: center;">August 23<sup>rd</sup>, 2021</p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <p>It is a condition of applying that parents accept the College&rsquo;s decision as final. Candidates are required to attend interviews and perhaps sit further testing to secure a place.</p>

                <p>&nbsp;</p>

                <h2 class="titile" style="text-align: center;">External Admission forms 2021-22</h2>

                <p>&nbsp;</p>

                <div class="table-responsive">
                    <table style="margin: auto;">
                        <tbody>
                        <tr>
                            <td style="padding-bottom: 10px;">
                                <p><a class="btn btn-primary" href="http://aitchison.edu.pk/portal/data/2021-22/External-A-Level-admission-form-2021-22-v2.pdf" style="width:100%;" target="_blank">External Students - Applying for Admission to &lsquo;A&rsquo; Level &ndash; 2021-22</a></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><a class="btn btn-primary" href="http://aitchison.edu.pk/portal/data/2021-22/External-FSc-admission-form-2021-22-v2.pdf" target="_blank">External Students - Applying for Admission to F.Sc (Pre-Med) 2021-22</a></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
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
<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	header("location: ac-admissions202021.php");
	exit();
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
     <title>Aitchison College:- General Admission Information</title>

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
            <div class="row" style="min-height: 100px;">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <a style="padding: 2px 10px;" href="ac-admissions201819.php" rel="noopener noreferrer" class="btn btn-primary" role="button">Back</a>
                </div>
            </div>
            	<div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div align="center">
                            <img src="./img/nne_logo.png" alt="img" width="200" height="140"><br>
                            <h2 class="titlewithoutbordercenter" style="font-size: 20px; margin: auto; padding: auto; ">GENERAL ADMISSIONS INFORMATION</h2>
                        </div>                    
                    </div>
            	</div>
            	<div class="row">
                	<div class="col-lg-12 col-md-12 col-sm-12">
                    	<h3 class="titlewithoutborder-18">General Admissions</h3>
                            <p>Aitchison College provides a broad-based education. Boys who are offered places must be fully engaged with the academic, sporting and co-curricular programs throughout their whole school life. Boys gain admission through our testing and interviewing processes. The purpose of interviewing is to emphasize this requirement and to ensure that boys admitted to the College will benefit from the programme and, in the case of boarding applicants, are suited and ready for a boarding education. Some places in boarding may be offered on bursary for applicants from verifiable, remote locations, which fulfill our mission of educating a wide cross-section of boys throughout Pakistan.</p>
                        <h3 class="titlewithoutborder-18">Admissions Policy</h3>    
                            <p>“Aitchison College admits boys on the basis of academic merit and general suitability, whereby a boy who is offered a place in the College will have taken the Admission Test and been ranked accordingly by the Admissions Committee. All shortlisted candidates are interviewed individually and with parents in attendance. As the College offers both Day and Boarding places, limits are placed on the number of enrolments in each category. Application can only be made for one of the two enrolment categories. Boarding places are normally reserved for boys who reside outside Lahore. The College reserves the right to offer additional places to eligible students in boarding in order to reach full capacity.”</p>
                        <h3 class="titlewithoutborder-18">Available Enrolment Categories & Numbers for 2018 - 2019</h3>     
                        <p>
                        	
                            <table align="center" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th width="33%"><div align="center">Junior School</div></th>
                                        <th width="33%"><div align="center">Prep School</div></th>
                                        <th width="33%"><div align="center">Senior School</div></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="font-size: 12px; background-color: inherit;">
                                       		<table class="table borderless" width="100%" style="background-color: inherit; ">
                                        		<tbody>
                                    				<tr>
                                                    	<td width="80%"><strong>K1 – Boarding  places only</strong></td>
                                                        <td width="20%"><strong>(30)</strong></td>    
                                                    </tr>
                                                    <tr>
                                                    	<td>K2 – Day  &amp; Boarding places</td>
                                                        <td><strong>(140)</strong></td>
                                                    </tr>
                                                    <tr>
                                                      <td>K3 – Day  &amp; Boarding places</td>
                                                      <td><strong>(Limited)</strong></td>
                                                    </tr>
                                                    <tr>
                                                      <td>K4 – Day  &amp; Boarding places</td>
                                                      <td><strong>(Limited)</strong></td>
                                                    </tr>
                                                    <tr>
                                                      <td>K5 – Day  &amp; Boarding places</td>
                                                      <td><strong>(Limited)</strong></td>
                                                    </tr>
                                                    <tr>
                                                      <td>K6 – Day &amp; Boarding places</td>
                                                      <td><strong>(Limited)</strong></td>
                                                    </tr>
                                        		</tbody>                                                
                                            </table>
                                        
                                        <td style="font-size: 12px; background-color: inherit;"><table class="table borderless" width="100%" style="background-color: inherit; ">
                                          <tbody>
                                            <tr>
                                              <td width="80%">E2 &nbsp;– Day places</td>
                                              <td width="20%"><strong>(60)</strong></td>
                                            </tr>
                                            <tr>
                                              <td>M1 – Day &amp; Boarding places</td>
                                              <td><strong>(None)</strong></td>
                                            </tr>
                                            <tr>
                                              <td>M2 – Day &amp; Boarding places</td>
                                              <td><strong>(None)</strong></td>
                                            </tr>
                                          </tbody>
                                        </table>                                        
                                        <td style="font-size: 12px; background-color: inherit;"><table class="table borderless" width="100%" style="background-color: inherit; ">
                                          <tbody>
                                            <tr>
                                              <td width="80%">C1 –Day &amp; Boarding places </td>
                                              <td width="20%"><strong>(None)</strong></td>
                                            </tr>
                                            <tr>
                                              <td width="80%">&nbsp;</td>
                                              <td width="20%">&nbsp;</td>
                                            </tr>
                                            <tr>
                                              <td width="100%" colspan="2" align="justify">H1 -Day and Boarding places <strong>(30 approximately)</strong> This is based on external Cambridge results in early August by separate application.</td>
                                            </tr>
                                              
                                          </tbody>
                                        </table>                                        
                                    </tr>
                                 </tbody>
                            </table>
                        </p>
                      <p>* All numbers are an estimation depending on other factors.</p>
                      <p>There are 5 boarding places in C1 and H1 for international applicants who are presently studying overseas and have done so for at least 5 years. International fee inclusive of boarding charges of USD 15,000 will apply. Applicants will be selected purely on the merit of their academic results and suitability.</p>
                      <p><strong>KEY DATES</strong></p>
                      <p>
                   	  <ul style="padding-left: 50px; list-style-type: disc;">
                        	<li>APPLICATIONS FOR REGISTRATION DOWNLOAD ARE AVAILABLE FROM FEBRUARY 1<sup>st</sup>, 2018.</li>
                            <li>NO APPLICATION WILL BE ACCEPTED AFTER 5 PM MARCH 8<sup>th</sup>, 2018.</li>
                            <li>TESTING TAKES PLACE FROM APRIL 19TH TO APRIL 26<sup>th</sup>. SCHEDULE TO BE AVAILABLE SHORTLY.</li>
                        </ul>
                      </p>
                      <p><h3 class="titlewithoutborder-18">Age Guidelines for Admission 2018-19</h3></p>
                      <p><table align="center" class="table table-bordered" width="100%">
                                <thead>
                                    <tr>
                                        <th width="30%"><div align="center">Year Level</div></th>
                                      <th width="70%"><div align="center">Date of Birth</div></th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td align="center">Year    1 (K1)</td>
                                      <td align="center">June    1, 2012 – May 31, 2013 inclusive</td>                                       
                                    </tr>
                                    <tr>
                                      <td align="center">Year    2 (K2)</td>
                                      <td align="center">June    1, 2011 – May 31, 2012 inclusive</td>
                                    </tr>
                                    <tr>
                                      <td align="center">Year    3 (K3)</td>
                                      <td align="center">June    1, 2010 – May 31, 2011 inclusive</td>
                                    </tr>
                                    <tr>
                                      <td align="center">Year    4 (K4)</td>
                                      <td align="center">June    1, 2009 – May 31, 2010 inclusive</td>
                                    </tr>
                                    <tr>
                                      <td align="center">Year    5 (K5)</td>
                                      <td align="center">June    1, 2008 – May 31, 2009 inclusive</td>
                                    </tr>
                                    <tr>
                                      <td align="center">Year    6 (E1)</td>
                                      <td align="center">June    1, 2007 – May 31, 2008 inclusive</td>
                                    </tr>
                                    <tr>
                                      <td align="center">Year    7 (E2)</td>
                                      <td align="center">June    1, 2006 – May 31, 2007 inclusive</td>
                                    </tr>
                                    <?php /*?>
									<tr>
                                      <td align="center">Year    8 (M1)</td>
                                      <td align="center">June    1, 2005 – May 31, 2006 inclusive</td>
                                    </tr>
                                    <tr>
                                      <td align="center">Year    9 (M2)</td>
                                      <td align="center">June    1, 2004 – May 31, 2005 inclusive</td>
                                    </tr>
                                    <tr>
                                      <td align="center">Year    10 (C1)</td>
                                      <td align="center">June    1, 2003 – May 31, 2004 inclusive</td>
                                    </tr>
									<?php */?>
                                 </tbody>
                            </table></p>
                      <h3 class="titlewithoutborder-18">Application Process</h3>
                            <p>Detailed guidance on the procedural matters and  admissions tests, including the syllabuses for various entry years and  documentation for registration, are available on the College website from <strong>Thursday 1<sup>st</sup> February, 2018.</strong></p>
							<p>Prospective  parents who seek further advice on admissions beyond FAQ may email the  Admissions office.&nbsp; <strong>Please do not  visit the College for this purpose, as we will be unable to attend to  parents/guardians personally. No approaches may be made to the Principal or any  staff member. </strong></p>
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
<?php 
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=-1;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- AITCHISON CRICKET TO TOUR THE UK IN 2018</title>

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
          <div class="col-lg-9 col-md-9 col-sm-9" style="background-color: #f6f6f6;">
    			<div id="oxford-summer-academy" style="margin:0; padding:0; width:100%; background-color: #f6f6f6;" bgcolor="#f6f6f6">
                	
<table width="100%" align="center" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>

</tbody>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td>
<table width="750" align="center" bgcolor="#fffff0" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td><img width="750" title="Oxford Summer Academy" alt="Oxford Summer Academy" src="img/OSA_marketing_email_banner_2013-01.png" border="0"></td>
</tr>
<tr>
<td style="padding: 5px 5px 5px 5px;" bgcolor="#f15623">
<div align="center" style="color: #ffffff; font-size: 16px; font-family: Arial Narrow, Arial, Helvetica, sans-serif; font-weight: normal;"><span style="font-size: 12pt;"><a style="color: #ffffff; text-decoration: none;" href="http://mstat032.co.uk/service.php?s=click&mm=2CHO02500095000827941006710007490000041200000418141&lid=1432">www.oxfordsummer.com</a>&nbsp; • &nbsp; <a style="color: #ffffff; text-decoration: none;" href="mailto:info@oxfordsummer.com">info@oxfordsummer.com</a>&nbsp; • &nbsp;Tel: +44(0)1865 594347</span></div>
</td>
</tr>
<tr>
<td bgcolor="#fcf3d9">
<table width="750" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="padding: 20px 15px 20px 15px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td>
<div align="center" style="font-family: Helvetica, sans-serif; color: #f15623; font-size: 20px;">
<p><strong>Oxford Summer Academy 2017</strong><br><span style="font-size: 12pt;">25th June - 22nd July, held at the University of Oxford<br><span style="color: #f15623;"><a style="color: #f15623;" href="http://mstat032.co.uk/service.php?s=click&mm=2CHO02500095000827941006710007490000041200000418141&lid=1432">www.oxfordsummer.com</a></span></span></p>
</div>
<div align="left" style="font-family: Arial, Helvetica, sans-serif; color: #333333; font-size: 13px; line-height: 1.4em;">
<p><strong>Is it right for me?<br></strong>With so many summer courses to choose from, it can be hard to find the one that is right for you. The Oxford Summer Academy suits intelligent students who want to push themselves academically, to explore subjects they are considering for university, to visit some of England's most remarkable landmarks and to make new friendships with like-minded students from across the world.&nbsp;</p>
<p><strong>How does Oxford Summer Academy stand out?</strong></p>
<ul>
<li>Academic class sizes limited to just 6 students.</li>
<li>Pick any combination of our <a href="http://mstat032.co.uk/service.php?s=click&mm=2CHO02500095000827941006710007490000041200000418141&lid=1494" style="color: rgba(12,24,232,1.00);">subjects</a>, so if you like medicine and law, study both with us.</li>
<li><a href="http://mstat032.co.uk/service.php?s=click&mm=2CHO02500095000827941006710007490000041200000418141&lid=1495" style="color: rgba(12,24,232,1.00);">Extra-curricular</a>&nbsp;courses to enhance your university application, including public speaking and debate.</li>
<li>Full social, academic and <a href="http://mstat032.co.uk/service.php?s=click&mm=2CHO02500095000827941006710007490000041200000418141&lid=1479" style="color: rgba(12,24,232,1.00);">cultural</a>&nbsp;programme.</li>
<li>Live in a medieval <a href="http://mstat032.co.uk/service.php?s=click&mm=2CHO02500095000827941006710007490000041200000418141&lid=1511" style="color: rgba(12,24,232,1.00);">Oxford</a>&nbsp;University college.</li>
<li>Excellent <a href="http://mstat032.co.uk/service.php?s=click&mm=2CHO02500095000827941006710007490000041200000418141&lid=1512" style="color: rgba(12,24,232,1.00);">reviews</a>, with 100% of students saying they would recommend the course to a friend.&nbsp;</li>
<li>2 and 4 week course <a href="http://mstat032.co.uk/service.php?s=click&mm=2CHO02500095000827941006710007490000041200000418141&lid=1513" style="color: rgba(12,24,232,1.00);">options</a>.</li>
</ul>
<p>&nbsp;Applications can be made online <a href="http://mstat032.co.uk/service.php?s=click&mm=2CHO02500095000827941006710007490000041200000418141&lid=1478" style="color: rgba(12,24,232,1.00);">here</a>, but please don't&nbsp;hesitate to&nbsp;<span style="color: #333333;"><strong><a style="color: #333333;" href="mailto:gen@oxfordsummer.com">contact me</a></strong></span> if you have any questions.</p>
<p><strong>Genevieve Dear&nbsp;</strong></p>
<p>General Manager <br>Oxford Summer Academy <br>Tel: +44 (0)1865 594347 <br><span style="color: #333333;"><a style="color: #333333;" href="http://mstat032.co.uk/service.php?s=click&mm=2CHO02500095000827941006710007490000041200000418141&lid=1436">See our Website</a> </span><br><span style="color: #333333;"><a style="color: #333333;" href="http://mstat032.co.uk/service.php?s=click&mm=2CHO02500095000827941006710007490000041200000418141&lid=1461">Follow us on Facebook</a> </span><br><span style="color: #333333;"><a style="color: #333333;" href="http://mstat032.co.uk/service.php?s=click&mm=2CHO02500095000827941006710007490000041200000418141&lid=1487">Watch us on YouTube</a></span></p>
</div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table width="750" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td style="padding: 15px 15px 15px 15px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td width="173" style="padding: 0px 0px 10px 0px;">
<div align="left" style="font-family: Arial, Helvetica, sans-serif; color: #000000; font-size: 11px; line-height: 1.5em;"><strong>Two-Week Courses 2017:</strong><br> June 25 - July 8<br> July 9 - July 22</div>
</td>
<td valign="top" style="padding: 0px 15px 0px 15px;">
<div align="left" style="font-family: Arial, Helvetica, sans-serif; color: #3e53a4; font-weight: bold; font-style: italic; font-size: 11px; line-height: 1.2em;"><span style="color: #f15623;">"When I arrived at the start of the course, I had no idea how much I was going to enjoy my time in Oxford and of course, how much I was going to learn! I do feel the experience has been invaluable and the level of teaching I received was superb."</span></div>
</td>
</tr>
<tr>
<td>
<div align="left" style="font-family: Arial, Helvetica, sans-serif; color: #000000; font-size: 11px; line-height: 1.5em;"><strong>Four-Week Course 2017:</strong><br> June&nbsp;25 - July 22</div>
</td>
<td valign="top" style="padding: 0px 15px 0px 15px;">
<div align="left" style="font-family: Arial, Helvetica, sans-serif; color: #3e53a4; font-weight: bold; font-style: italic; font-size: 11px; line-height: 1.2em;"><span style="color: #f15623;">"I had a truly unforgettable time! Thank you for enabling me to gain a greater understanding of university life and what it takes to get in to the top universities like Oxford and Cambridge!"</span></div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="padding: 10px 10px 10px 10px;" bgcolor="#f15623">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td valign="top" style="border-right: 2px #FFFFFF solid; padding: 10px 10px 5px 10px;">
<div align="left" style="color: #ffffff; font-size: 13px; font-weight: bold; font-family: Arial, Helvetica, sans-serif;"><a style="color: #ffffff; text-decoration: none;" href="http://mstat032.co.uk/service.php?s=click&mm=2CHO02500095000827941006710007490000041200000418141&lid=1424" target="_blank">Oxford International College</a></div>
</td>
<td valign="top" style="border-right: 2px #FFFFFF solid; padding: 10px 10px 5px 10px;">
<div align="left" style="color: #ffffff; font-size: 13px; font-weight: bold; font-family: Arial, Helvetica, sans-serif;"><a style="color: #ffffff; text-decoration: none;" href="http://mstat032.co.uk/service.php?s=click&mm=2CHO02500095000827941006710007490000041200000418141&lid=1425" target="_blank">Oxford Science Studies</a></div>
</td>
<td valign="top" style="padding: 10px 10px 5px 10px;">
<div align="left" style="color: #ffffff; font-size: 13px; font-weight: bold; font-family: Arial, Helvetica, sans-serif;"><a style="color: #ffffff; text-decoration: none;" href="http://mstat032.co.uk/service.php?s=click&mm=2CHO02500095000827941006710007490000041200000418141&lid=1432" target="_blank"><span style="color: #ffffff; text-decoration: none;">Oxford Summer Academy</span></a></div>
</td>
</tr>
<tr>
<td width="243" valign="top" style="border-right: 2px #FFFFFF solid; padding: 0px 10px 10px 10px;">
<div align="left" style="color: #ffffff; font-size: 11px; text-align: justify; font-family: Arial, Helvetica, sans-serif;"><a style="color: #ffffff; text-decoration: none;" href="http://mstat032.co.uk/service.php?s=click&mm=2CHO02500095000827941006710007490000041200000418141&lid=1433" target="_blank" a=""><span style="color: #ffffff;">Full-time study preparing students for entry into British universities and other higher education institutions. A-Level, GCSE, IGCSE + more.</span></a></div>
</td>
<td width="243" valign="top" style="border-right: 2px #FFFFFF solid; padding: 0px 10px 10px 10px;">
<div align="left" style="color: #ffffff; font-size: 11px; text-align: justify; font-family: Arial, Helvetica, sans-serif;"><a style="color: #ffffff; text-decoration: none;" href="http://mstat032.co.uk/service.php?s=click&mm=2CHO02500095000827941006710007490000041200000418141&lid=1425" target="_blank">Revision Specialists for GCSE, IGCSE, A-Level & IB. Residential and day courses, held during UK school holidays in the centre of Oxford. </a></div>
</td>
<td width="243" valign="top" style="padding: 0px 10px 10px 10px;">
<div align="left" style="color: #ffffff; text-align: justify; font-size: 11px; font-family: Arial, Helvetica, sans-serif;"><a style="color: #ffffff; text-decoration: none;" href="http://mstat032.co.uk/service.php?s=click&mm=2CHO02500095000827941006710007490000041200000418141&lid=1432" target="_blank">A unique two and four-week educational and cultural programme for 15-19 year olds, held every July at St. Edmund Hall, University of Oxford.</a></div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
<!--<tr>
<td style="padding: 10px 0px 10px 0px;">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td>
<div align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 10px; color: #333333;">Oxford Summer Academy, 1 London Place, Oxford OX4 1BD&nbsp; Tel: +44(0)1865 594347</div>
</td>
<td width="50">
<div align="center"><a href="http://mstat032.co.uk/service.php?s=click&mm=2CHO02500095000827941006710007490000041200000418141&lid=1434" target="_blank"><img width="32" height="32" style="display: block;" src="http://mstat032.co.uk/storage/c/025/000000000095/legacy/n/6739/fb.png" border="0"></a></div>
</td>
<td width="50">
<div align="center"><a href="http://mstat032.co.uk/service.php?s=click&mm=2CHO02500095000827941006710007490000041200000418141&lid=1435" target="_blank"><img width="32" height="32" style="display: block;" src="http://mstat032.co.uk/storage/c/025/000000000095/legacy/n/6739/tw.png" border="0"></a></div>
</td>
<td width="50">
<div align="center"><img width="32" height="32" style="display: block;" src="http://mstat032.co.uk/storage/c/025/000000000095/legacy/n/6739/email.png" border="0"></div>
</td>
</tr>
<tr>
<td>
<div align="left" style="font-family: Arial, Helvetica, sans-serif; font-size: 10px; color: #333333;">If you no longer wish to receive emails from us <a style="color: #333333;" href="http://mstat032.co.uk/service.php?s=unsubscribe&mm=2CHO02500095000827941006710007490000041200000418141">click here to unsubsribe</a></div>
</td>
<td>
<div align="center" style="font-family: Arial, Helvetica, sans-serif; font-size: 10px; color: #333333;">Facebook</div>
</td>
<td>
<div align="center" style="font-family: Arial, Helvetica, sans-serif; font-size: 10px; color: #333333;">Twitter</div>
</td>
<td>
<div align="center" style="font-family: Arial, Helvetica, sans-serif; font-size: 10px; color: #333333;">Forward</div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>-->
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
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
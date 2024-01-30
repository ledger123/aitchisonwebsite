<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=4; 
	if(count($_SESSION['parents']) > 1 || count($_SESSION['boarder']) > 1 || count($_SESSION['stdportal']) > 1 || count($_SESSION['stfportal']) > 1){
		$default_open=intval($default_open)+1;
	}
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Senior School Swimming Records</title>

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
    <link rel="stylesheet" href="css/swimming_record.css"> 
   
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
          	<div class="aboutus_area wow fadeInLeft  animated" style="visibility: visible; animation-name: fadeInLeft;">
            	<div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <a style="padding: 0px 10px;" href="ac-college-records.php" rel="noopener noreferrer" class="btn btn-primary" role="button">Back</a>
                    </div>
                </div>
            	
            	<!--SETTINGS For News and Events-->
                                    
                    <!--SETTING TITLE -->
                    <div align="center">
                    <img src="./img/ac_logo.png" width="130" height="130" alt="Aitchison College, Lahore."/><br>                    <!--<h2 class="titile"></h2>-->
                    <h2 class="titlewithoutborder colorblue hrplace border-blue" style="font-size: 26px; position: relative; display: inline-block;">Senior SCHOOL SWIMMING RECORDS</h2>
                    </div>
                    <p>&nbsp;</p>
                                        <!--END SETTING TITLE-->
                    
                                        
                    <!--SETTING SUB TITLE-->
                                    	
                <!--SETTINGS For Alumni-->
                                
                
                
                <div align="center" class="row table-responsive" style="margin: auto; padding: auto; margin-top:22px; max-width: 99%; display: block; ">
                <table align="center" class="table table table-bordered table-responsive table-striped" style="width:100%">
                    <tbody>
                        <tr style="background-color: #0F0456 !important; color:#FFFFFF; vertical-align: middle;">
                            <th rowspan="2" style="width: 22%; vertical-align: middle;"><strong>Events - Junior&nbsp;</strong></th>
                            <th colspan="3" style="text-align: center !important; width: 40%;">Present&nbsp;</th>
                            <th colspan="3" style="text-align: center !important; width: 40%;">Previous&nbsp;</th>
                        </tr>
                        <tr style="background-color: #0F0456 !important; color:#FFFFFF;">
                            <th style="text-align: center !important; width: 5%;">Year</th>
                            <th style="text-align: center !important; width: 13%;">Time</th>
                            <th style="text-align: center !important; width: 21%;">Name</th>
                            <th style="text-align: center !important; width: 5%;">Year</th>
                            <th style="text-align: center !important; width: 13%;">Time</th>
                            <th style="text-align: center !important; width: 21%;">Name</th>
                        </tr>
                        <tr>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">50 M Freestyle</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">2017</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">27.96 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Azlan Khan</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">1996</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">28.19 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Faraan Ahmed Irfan</td>
                        </tr>
                        <tr>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">100 M Freestyle</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">1996</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 03.60 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Faraan Ahmed Irfan</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">1996</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;" nowrap>1 Min 03.60 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Faraan Ahmed Irfan</td>
                        </tr>
                        <tr>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">200 M Freestyle</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 27.53 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Humza Ataullah</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 27.53 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Humza Ataullah</td>
                        </tr>
                        <tr>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">400 M Freestyle</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">5 Min 21.77 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Humza Ataullah</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">5 Min 21.77 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Humza Ataullah</td>
                        </tr>
                        <tr>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">50 M Breaststroke</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">37.09 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Iftikhar Muhammad Khan</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">37.09 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Iftikhar Muhammad Khan</td>
                        </tr>
                        <tr>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">100 M Breaststroke</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;" nowrap>1 Min 21.78 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Iftikhar Muhammad Khan</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 21.78 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Iftikhar Muhammad Khan</td>
                        </tr>
                        <tr>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">200 M Breaststroke</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">2013</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;" nowrap>3 Min 07.69 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Iftikhar Muhammad Khan</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">2013</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">3 Min 07.69 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Iftikhar Muhammad Khan</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">50 M Backstroke</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2013</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">32.40 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Abdullah Bilal</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2013</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">32.40 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Abdullah Bilal</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">100 M Backstroke</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2013</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 13.34 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Abdullah Bilal</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2013</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 13.34 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Abdullah Bilal</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">200 M Backstroke</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2013</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 47.47 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Abdullah Bilal</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2013</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;" nowrap>2 Min 47.47 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Abdullah Bilal</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">50 M Butterfly</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">32.32 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Humza Ataullah</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">32.32 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Humza Ataullah</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">100 M Butterfly</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2013</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 15.47 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 11px;">Ismail Najeeb Vohra</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2013</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 15.47 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 11px;">Ismail Najeeb Vohra</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">200 M Individual Medley</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 48.13 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Humza Ataullah</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 48.13 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Humza Ataullah</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">4x50 M Medley Relay</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">1995</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 51.63 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Hali House</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">1995</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 51.63 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Hali House</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">4x50 M Freestyle Relay</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">1995</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 23.54 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Hali House</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">1995</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 23.54 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Hali House</td>
                        </tr>
                    </tbody>
                </table>
                </div>

<p>&nbsp;</p>

                <div align="center" class="row table-responsive" style="margin: auto; padding: auto;margin-top:22px; max-width: 99%; display: block; ">
                <table align="center" class="table table table-bordered table-responsive table-striped" style="width:100%">
                    <tbody>
                        <tr style="background-color: #0F0456 !important; color:#FFFFFF; vertical-align: middle;">
                            <th rowspan="2" style="width: 22%; vertical-align: middle;"><strong>Events - Senior</strong></th>
                            <th colspan="3" style="text-align: center !important; width: 40%;">Present&nbsp;</th>
                            <th colspan="3" style="text-align: center !important; width: 40%;">Previous&nbsp;</th>
                        </tr>
                        <tr style="background-color: #0F0456 !important; color:#FFFFFF;">
                            <th style="text-align: center !important; width: 5%;">Year</th>
                            <th style="text-align: center !important; width: 13%;">Time</th>
                            <th style="text-align: center !important; width: 21%;">Name</th>
                            <th style="text-align: center !important; width: 5%;">Year</th>
                            <th style="text-align: center !important; width: 13%;">Time</th>
                            <th style="text-align: center !important; width: 21%;">Name</th>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">50 M Freestyle</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">26.39 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2003</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">27.61 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Syed Usman Javed</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px; font-size: 12px;">100 M Freestyle</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">58.77 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2003</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 2.22 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Syed Usman Javed</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">200 M Freestyle</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 13.20 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2003</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 20.38 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Syed Usman Javed</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">400 M Freestyle</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;" nowrap>4 Min 50.95 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2003</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">5 Min 12.02 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Syed Usman Javed</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">800 M Freestyle</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">1994</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;" nowrap>11 Min 11.03 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Mansoor Ali Khan</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">1994</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;" nowrap>11 Min 11.03 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Mansoor Ali Khan</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">50 M Breaststroke</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">36.98 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Iftikhar Muhammad Khan</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">38.13 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ahmed Saeed</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">100 M Breaststroke</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2006</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 15.77 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Zain Tariq</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2006</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 15.77 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Zain Tariq</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">200 M Breaststroke</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">1994</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 51.50 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Bilal Hussain</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">1994</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 51.50 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Bilal Hussain</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">50 M Backstroke</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">31.09 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">32.58 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">100 M Backstroke</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 11.26 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 13.16 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">200 M Backstroke</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 34.56 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                            <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 43.41 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                        </tr>
                        <tr>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">50 M Butterfly</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">28.59 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">29.87 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                        </tr>
                        <tr>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">100 M Butterfly</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 05.77 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">2014</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">1 Min 09.13 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                        </tr>
                        <tr>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">200 M Individual Medley</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">2015</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 34.51 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ismail Najeeb Vohra</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">2003</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;" nowrap>2 Min 42.86 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Syed Usman Javed</td>
                        </tr>
                        <tr>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">4x50 M Medley Relay</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">2005</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 27.50 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ghazi House</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">2005</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 27.50 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Ghazi House</td>
                        </tr>
                        <tr>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">4x50 M Freestyle Relay</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">1997</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 4.64 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Hali House</td>
                          <td style="text-align: center; padding-left: 6px; font-size: 12px;">1997</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">2 Min 4.64 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; font-size: 12px;">Hali House</td>
                        </tr>
                    </tbody>
                </table>
                </div>
<br>
                
                <div class="row form-group" align="center">
					                </div>
                
                <!--SETTINGS For News and Events-->
                                    
                                                    
                <br>
                
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
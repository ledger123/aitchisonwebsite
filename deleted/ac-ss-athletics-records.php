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
     <title>Aitchison College:- Senior School Athletics Records</title>

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
                                        <!--<h2 class="titile"></h2>-->
                    <div align="center">
                    <img src="./img/ac_logo.png" width="130" height="130" alt="Aitchison College, Lahore."/><br>
                    <h2 class="titlewithoutborder colorblue hrplace border-blue" style="font-size: 26px; position: relative; display: inline-block;">Senior SCHOOL Athletics RECORDS</h2>
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
                        </tr>
                        <tr style="background-color: #0F0456 !important; color:#FFFFFF;">
                            <th style="text-align: center !important; width: 5%;">Year</th>
                            <th style="text-align: center !important; width: 13%;">Time/Distance</th>
                            <th style="text-align: center !important; width: 21%;">Name</th>
                        </tr>
                        <tr>
                          <td style="text-align: left; padding-left: 6px;  ">100 Metres</td>
                          <td style="text-align: center; padding-left: 6px; ">2000</td>
                          <td style="text-align: left; padding-left: 6px; ">11.22 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; ">Haris Bilal Afridi</td>
                        </tr>
                        <tr>
                          <td style="text-align: left; padding-left: 6px;  ">200 Metres</td>
                          <td style="text-align: center; padding-left: 6px; ">1987</td>
                          <td style="text-align: left; padding-left: 6px; ">23.10 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; ">Najeeb Ali Khan</td>
                        </tr>
                        <tr>
                          <td style="text-align: left; padding-left: 6px;  ">400 Metres</td>
                          <td style="text-align: center; padding-left: 6px; ">1987</td>
                          <td style="text-align: left; padding-left: 6px; ">53.70 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; ">Najeeb Ali Khan</td>
                        </tr>
                        <tr>
                          <td style="text-align: left; padding-left: 6px;  ">800 Metres</td>
                          <td style="text-align: center; padding-left: 6px; ">1987</td>
                          <td style="text-align: left; padding-left: 6px; ">2 Min 7.50 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; ">Saad Mehmood Tiwana</td>
                        </tr>
                        <tr>
                          <td style="text-align: left; padding-left: 6px;  ">1500 Metres (New Event)</td>
                          <td style="text-align: center; padding-left: 6px; ">2016</td>
                          <td style="text-align: left; padding-left: 6px; ">5 Min 17.16 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; ">Malik Aitzaz Hassan</td>
                        </tr>
                        <tr>
                          <td style="text-align: left; padding-left: 6px;  ">5000 Metres (New Event)</td>
                          <td style="text-align: center; padding-left: 6px; ">2015</td>
                          <td style="text-align: left; padding-left: 6px; " nowrap>21 Min 07.38 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; ">Ali Tahir</td>
                        </tr>
                        <tr>
                          <td style="text-align: left; padding-left: 6px;  ">4x 100 Metres Relay</td>
                          <td style="text-align: center; padding-left: 6px; ">1983</td>
                          <td style="text-align: left; padding-left: 6px; " nowrap>47.40 Sec.</td>
                          <td style="text-align: left; padding-left: 6px; ">Kelly House</td>
                        </tr>
                        <tr>
                            <td rowspan="2" style="text-align: left; padding-left: 6px;  ">4x 400 Metres Relay</td>
                            <td style="text-align: center; padding-left: 6px; ">1983</td>
                            <td style="text-align: left; padding-left: 6px; ">3 Min 47.70 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; ">Kelly House</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; padding-left: 6px; ">1987</td>
                            <td style="text-align: left; padding-left: 6px; ">3 Min 47.70 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; ">Jubilee House</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; ">8x 400 Metres Relay (Jn &amp; Sn) New Event</td>
                            <td style="text-align: center; padding-left: 6px; ">2014</td>
                            <td style="text-align: left; padding-left: 6px; ">8 Min 17.84 Sec.</td>
                            <td style="text-align: left; padding-left: 6px; ">Leslie Jones House</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; ">High Jump</td>
                            <td style="text-align: center; padding-left: 6px; ">1987</td>
                            <td style="text-align: left; padding-left: 6px; ">1.67 Metres</td>
                            <td style="text-align: left; padding-left: 6px; ">Muhammad Farooq Rana</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; ">Long Jump</td>
                            <td style="text-align: center; padding-left: 6px; ">2011</td>
                            <td style="text-align: left; padding-left: 6px; ">6.26 Metres</td>
                            <td style="text-align: left; padding-left: 6px; ">Muhmmad Mobaasil</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; ">Triple Jump</td>
                            <td style="text-align: center; padding-left: 6px; ">2011</td>
                            <td style="text-align: left; padding-left: 6px; ">12.68 Metres</td>
                            <td style="text-align: left; padding-left: 6px; ">Muhmmad Mobaasil</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; ">Cricket Ball Throw</td>
                            <td style="text-align: center; padding-left: 6px; ">1994</td>
                            <td style="text-align: left; padding-left: 6px; ">88.10 Metres</td>
                            <td style="text-align: left; padding-left: 6px; ">Muhammad Asghar Wrind</td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 6px; ">Shot Put (New Event)</td>
                            <td style="text-align: center; padding-left: 6px; ">2015</td>
                            <td style="text-align: left; padding-left: 6px; ">8.43 Metres</td>
                            <td style="text-align: left; padding-left: 6px; ">Abbas Shah Safi</td>
                        </tr>
                        <tr>
                          <td style="text-align: left; padding-left: 6px; ">Discus Throw (1.50 Kg)</td>
                          <td style="text-align: center; padding-left: 6px; ">2015</td>
                          <td style="text-align: left; padding-left: 6px; ">32.16 Metres</td>
                          <td style="text-align: left; padding-left: 6px; ">Abbas Shah Safi</td>
                        </tr>
                    </tbody>
                </table>
                </div>

<p>&nbsp;</p>

                <div align="center" class="row table-responsive" style="margin: auto; padding: auto;margin-top:22px; max-width: 99%; display: block; ">
                  
                  <table align="center" class="table table table-bordered table-responsive table-striped" style="width:100%">
                    <tbody>
                      <tr style="background-color: #0F0456 !important; color:#FFFFFF; vertical-align: middle;">
                        <th rowspan="2" style="width: 22%; vertical-align: middle;"><strong>Events - Seniors&nbsp;</strong></th>
                        <th colspan="3" style="text-align: center !important; width: 40%;">Present&nbsp;</th>
                      </tr>
                      <tr style="background-color: #0F0456 !important; color:#FFFFFF;">
                        <th style="text-align: center !important; width: 5%;">Year</th>
                        <th style="text-align: center !important; width: 13%;">Time/Distance</th>
                        <th style="text-align: center !important; width: 21%;">Name</th>
                      </tr>
                      <tr>
                        <td style="text-align: left; padding-left: 6px;  ">100 Metres</td>
                        <td style="text-align: center; padding-left: 6px; ">2016</td>
                        <td style="text-align: left; padding-left: 6px; ">10.97 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; ">Ahmad Saeed</td>
                      </tr>
                      <tr>
                        <td style="text-align: left; padding-left: 6px;  ">200 Metres</td>
                        <td style="text-align: center; padding-left: 6px; ">1967</td>
                        <td style="text-align: left; padding-left: 6px; ">22.30 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; ">Mahboob Hasan</td>
                      </tr>
                      <tr>
                        <td style="text-align: left; padding-left: 6px;  ">400 Metres</td>
                        <td style="text-align: center; padding-left: 6px; ">1984</td>
                        <td style="text-align: left; padding-left: 6px; ">50.50 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; ">Zulfiqar Ali Shah</td>
                      </tr>
                      <tr>
                        <td style="text-align: left; padding-left: 6px;  ">800 Metres</td>
                        <td style="text-align: center; padding-left: 6px; ">1980</td>
                        <td style="text-align: left; padding-left: 6px; ">2 Min 4.8 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; ">Christopher Hay Jehans</td>
                      </tr>
                      <tr>
                        <td style="text-align: left; padding-left: 6px;  ">1500 Metres</td>
                        <td style="text-align: center; padding-left: 6px; ">1993</td>
                        <td style="text-align: left; padding-left: 6px; ">4 Min 20.10 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; ">Unser Zaman Khan</td>
                      </tr>
                      <tr>
                        <td style="text-align: left; padding-left: 6px;  ">5000 Metres (New Event)</td>
                        <td style="text-align: center; padding-left: 6px; ">2015</td>
                        <td style="text-align: left; padding-left: 6px; " nowrap>19 Min 30.00 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; ">Faizan Ali</td>
                      </tr>
                      <tr>
                        <td rowspan="2" style="text-align: left; padding-left: 6px;  ">110 Metres Hurdles</td>
                        <td style="text-align: center; padding-left: 6px; ">1947</td>
                        <td style="text-align: left; padding-left: 6px; ">15.06 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; ">Nazar Muhammad</td>
                      </tr>
                      <tr>
                        <td style="text-align: center; padding-left: 6px; ">1984</td>
                        <td style="text-align: left; padding-left: 6px; ">15.06 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; ">Zulfiqar Ali Shah</td>
                      </tr>
                      <tr>
                        <td style="text-align: left; padding-left: 6px; ">200 Metres Hurdles</td>
                        <td style="text-align: center; padding-left: 6px; ">1974</td>
                        <td style="text-align: left; padding-left: 6px; ">27.10 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; ">Nazir Akhtar</td>
                      </tr>
                      <tr>
                        <td style="text-align: left; padding-left: 6px; ">4x 100 Metres Relay</td>
                        <td style="text-align: center; padding-left: 6px; ">1967</td>
                        <td style="text-align: left; padding-left: 6px; ">45.07 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; ">Jubilee House</td>
                      </tr>
                      <tr>
                        <td style="text-align: left; padding-left: 6px; ">4x 400 Metres Relay</td>
                        <td style="text-align: center; padding-left: 6px; ">1985</td>
                        <td style="text-align: left; padding-left: 6px; ">3 Min 39.70 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; ">Kelly House</td>
                      </tr>
                      <tr>
                        <td style="text-align: left; padding-left: 6px; ">8x 400 Metres Relay (Jn &amp; Sn) New Event</td>
                        <td style="text-align: center; padding-left: 6px; ">2014</td>
                        <td style="text-align: left; padding-left: 6px; ">8 Min 17.84 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; ">Jones House</td>
                      </tr>
                      <tr>
                        <td style="text-align: left; padding-left: 6px; ">High Jump</td>
                        <td style="text-align: center; padding-left: 6px; ">1960</td>
                        <td style="text-align: left; padding-left: 6px; ">1.75 Metres</td>
                        <td style="text-align: left; padding-left: 6px; ">Badruddeen</td>
                      </tr>
                      <tr>
                        <td style="text-align: left; padding-left: 6px; ">Long Jump</td>
                        <td style="text-align: center; padding-left: 6px; ">2013</td>
                        <td style="text-align: left; padding-left: 6px; ">6.70 Metres</td>
                        <td style="text-align: left; padding-left: 6px; ">Muhammad Mobaasil</td>
                      </tr>
                      <tr>
                        <td style="text-align: left; padding-left: 6px; ">Triple Jump</td>
                        <td style="text-align: center; padding-left: 6px; ">1974</td>
                        <td style="text-align: left; padding-left: 6px; ">13.24 Metres</td>
                        <td style="text-align: left; padding-left: 6px; ">Nazir Akhtar</td>
                      </tr>
                      <tr>
                        <td style="text-align: left; padding-left: 6px; ">Cricket Ball Throw</td>
                        <td style="text-align: center; padding-left: 6px; ">1964</td>
                        <td style="text-align: left; padding-left: 6px; ">110.64 Metres</td>
                        <td style="text-align: left; padding-left: 6px; ">Majid Khan</td>
                      </tr>
                      <tr>
                        <td style="text-align: left; padding-left: 6px; ">Shot Put</td>
                        <td style="text-align: center; padding-left: 6px; ">1976</td>
                        <td style="text-align: left; padding-left: 6px; ">12.52 Metres</td>
                        <td style="text-align: left; padding-left: 6px; ">Salman Iqbal Butt</td>
                      </tr>
                      <tr>
                        <td style="text-align: left; padding-left: 6px; ">Discus Throw (2 Kg)</td>
                        <td style="text-align: center; padding-left: 6px; ">1977</td>
                        <td style="text-align: left; padding-left: 6px; ">38.96 Metres</td>
                        <td style="text-align: left; padding-left: 6px; ">Salman Iqbal Butt</td>
                      </tr>
                      <tr>
                        <td style="text-align: left; padding-left: 6px; ">Pole Vault</td>
                        <td style="text-align: center; padding-left: 6px; ">1960</td>
                        <td style="text-align: left; padding-left: 6px; ">3.10 Metres</td>
                        <td style="text-align: left; padding-left: 6px; ">Badruddeen</td>
                      </tr>
                      <tr>
                        <td style="text-align: left; padding-left: 6px; ">Javelin Throw</td>
                        <td style="text-align: center; padding-left: 6px; ">1977</td>
                        <td style="text-align: left; padding-left: 6px; ">50.69 Metres</td>
                        <td style="text-align: left; padding-left: 6px; ">Salman Iqbal Butt</td>
                      </tr>
                      <tr>
                        <td style="text-align: left; padding-left: 6px; ">Cross Country Race (Old Route)</td>
                        <td style="text-align: center; padding-left: 6px; ">1992</td>
                        <td style="text-align: left; padding-left: 6px; ">32 Min 20.25 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; ">Unser Zaman Khan</td>
                      </tr>
                      <tr>
                        <td style="text-align: left; padding-left: 6px; ">Cross Country Race (new Route)</td>
                        <td style="text-align: center; padding-left: 6px; ">2012</td>
                        <td style="text-align: left; padding-left: 6px; ">34 Min 50.74 Sec.</td>
                        <td style="text-align: left; padding-left: 6px; ">Haider Abbas</td>
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
<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	header("location: /");
	exit();
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=0;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Board Of Governors</title>

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
    <link rel='stylesheet prefetch' href='css/circliful.css'>
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
      <section>
          <div class="col-lg-9 col-md-9 col-sm-9">
          	<div class="aboutus_area wow fadeInLeft">
            	<h2 class="titile">Board of governors </h2>
                <!--<div class="row" style="padding-bottom: 15px;">
                    <div class="col-lg-3, col-md-3"></div> 
                     <div class="col-lg-9, col-md-9">
                        <h4><strong>PRESIDENT BOARD OF GOVERNORS</strong> </h4>
                        <p><strong>Malik Muhammad Rafique Rajwana </strong><br>
                        Governor Punjab</p>
                    </div>
                    <div class="col-lg-3, col-md-3"></div>
                    
                </div>-->
            <div class="row" style="padding-bottom: 15px;">
            <div class="row">
            	<div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12">                	
                	<table class="table" width="100%" cellspacing="6" border="1" style="border: thin solid #ddd;">
                        <tbody>
                          <tr>
                            <td width="2%" align="center">1</td>
                            <td width="68%">Malik Muhammad Rafique Rajwana<br>Governor Punjab</td>
                            <td width="30%">President</td>
                          </tr>
                        </tbody>
                  </table>                     
            	</div>
                <div class="col-lg-2 col-md-2">&nbsp;</div>
            </div>            	
            	
            
            
          
            </div>    
            <div class="row" style="padding-bottom: 15px;">
			  <h4 align="center" style="font-weight: bold; text-transform: uppercase;">Official Members</h4>
                <div class="row">
            	<div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12">                	
                	<table class="table" width="100%" cellspacing="6" border="1" style="border: thin solid #ddd;">
                        <tbody>
                          <tr>
                            <td width="2%" align="center">2</td>
                            <td width="68%">Chief Secretary, Punjab</td>
                            <td width="30%">Ex-officio Member</td>
                          </tr>
                          <tr>
                            <td align="center">3</td>
                            <td>General Officer Commanding<br>10 Div. Lahore Area, Lahore Cantt</td>
                            <td>Ex-officio Member</td>
                          </tr>
                          <tr>
                            <td align="center">4</td>
                            <td>Secretary to Government of the Punjab<br> Finance Department</td>
                            <td>Ex-officio Member</td>
                          </tr>
                          <tr>
                            <td align="center">5</td>
                            <td>Secretary to Government of the Punjab<br> Higher Education Department</td>
                            <td>Ex-officio Member</td>
                          </tr>
                          <tr>
                            <td align="center">6</td>
                            <td>Principal, Aitchison College, Lahore</td>
                            <td>Ex-officio Member/<br>Secretary</td>
                          </tr>
                          
                        </tbody>
                      </table>                     
            	</div>
                <div class="col-lg-2 col-md-2">&nbsp;</div>
                </div>
            </div>
            <div class="row" style="padding-bottom: 15px;">
           	  <h4 align="center" style="font-weight: bold; text-transform: uppercase;"> Non-Official Members</h4>
            <div class="row">
            	<div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12">                	
               	  <table class="table" width="100%" cellspacing="6" border="1" style="border: thin solid #ddd;">
                    <tbody>
                          <tr>
                            <td width="2%" align="center">7</td>
                            <td width="68%">Syed Babar Ali</td>
                            <td width="30%">Member</td>
                          </tr>
                          <tr>
                            <td align="center">8</td>
                            <td>Dr. Ayesha Ghaus Pasha</td>
                            <td>Member</td>
                          </tr>
                          <tr>
                            <td align="center">9</td>
                            <td>Mr. Atif Bajwa</td>
                            <td>Member</td>
                          </tr>
                          <tr>
                            <td align="center">10</td>
                            <td>Mr. Arif Saeed</td>
                            <td>Member</td>
                          </tr>
                          <tr>
                            <td align="center">11</td>
                            <td>Syed Shaukat Hussain</td>
                            <td>Member</td>
                          </tr>
                          <tr>
                            <td align="center">12</td>
                            <td>Mr. Zubyr Soomro</td>
                            <td>Member</td>
                          </tr>
                          <tr>
                            <td align="center">13</td>
                            <td>Dr. Zafar Iqbal Qureshi</td>
                            <td>Member</td>
                          </tr>
                          <tr>
                            <td align="center">14</td>
                            <td>Senator Abbas Khan Afridi</td>
                            <td>Member</td>
                          </tr>
                          <tr>
                            <td align="center">15</td>
                            <td>Mr. Khalid Magsi</td>
                            <td>Member</td>
                          </tr>
                          <tr>
                            <td align="center">16</td>
                            <td>Khawaja Ahmad Hassan</td>
                            <td>Member</td>
                          </tr>
                          <tr>
                            <td align="center">17</td>
                            <td>Mr. Awais Khan Leghari</td>
                            <td>Member</td>
                          </tr>
                          <tr>
                            <td align="center">18</td>
                            <td>Senator Hadayat Ullah</td>
                            <td>Member</td>
                          </tr>
                          <tr>
                            <td align="center">19</td>
                            <td>Dr. Umar Saif</td>
                            <td>Member</td>
                          </tr>
                          <tr>
                            <td align="center">20</td>
                            <td>Makhdoom Hashim Jawan Bakht</td>
                            <td>Member</td>
                          </tr>
                          <tr>
                            <td align="center">21</td>
                            <td>Mr. Mustafa Ramday</td>
                            <td>Member</td>
                          </tr>
                          <tr>
                            <td align="center">22</td>
                            <td>Mr. Fahd Husain</td>
                            <td>Member</td>
                          </tr>
                          <tr>
                            <td align="center">23</td>
                            <td>Syeda Umme Farwa Wasiq <br>
                            M/o Syed Muhammad Wamiq Zaheer Tirmazi <br> (Rivaz Gold Medalist Winner)</td>
                            <td>Member</td>
                          </tr>
                          
                        </tbody>
                  </table>                     
            	</div>
                <div class="col-lg-2 col-md-2">&nbsp;</div>
            </div>            	
            	
            
            
          
            </div>
            
            
            
      </div>
      </div></section>
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
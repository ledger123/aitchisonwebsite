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
     <title>Aitchison College:- ADMISSIONS DATES &  REPORTING TIMINGS</title>

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
	.ptm_mtitle{
		/*background-color: #08112F;*/
		background-color: #293594;
		color: #FFF;	
		font-size: 16px;
		/*width: 25% !important;*/
	}
	.ptm_mtitle2{
		/*background-color: #08112F;*/
		background-color: #369;
		color: #FFF;	
		font-size: 16px;
		/*width: 25% !important;*/
	}
	.ptm_tborder{
		border-bottom: #121212 thick solid;
	}
	.ptm_schooltitle1{
		background-color: #1B1CB2;
		color: #F9F9F9;	
		font-size: 16px;
	}
	.ptm_row1{
		/*background-color: #E4E32D;
		background-color: #efe;
		color: #000000;*/
		background-color: #FFF;
		color: #000000;
	}
	.ptm_row2{
		background-color: #FFF;
		color: #000000;
	}
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
          	<div class="aboutus_area wow fadeInLeft">
            <h2 class="titlewithoutborder colorblue  hrplace">ADMISSIONS DATES &  REPORTING TIMINGS</h2>
           <hr class="style-eight" style="width: 82%; text-align:" align="left">
            <?php /*?><h3 class="titile" style="font-weight: bold;">2 <sup><span style="text-transform: lowercase;">nd</span></sup> Teacher Parent Meeting</h3><?php */?>
                  		<div class="table-responsive">
                	<!--<table border="1" align="center" cellspacing="6" class="table table-striped" style="border: thin solid #ddd;">-->
                    <table border="1" align="center" cellspacing="6" class="table" style="border: thin solid #CBCBCB; width: 99%;">
                        <tbody>
                          <tr>
                            <th align="center" class="ptm_mtitle" colspan="7"><div align="center"><strong>JUNIOR SCHOOL</strong></div></th>
                          </tr>
                          <tr>
                            <th width="4%" rowspan="2" align="center" class="ptm_mtitle2"><div align="center"><strong>Sr.</strong></div></th>
                            <th width="24%" rowspan="2" align="center" class="ptm_mtitle2"><div align="center"><strong>Dates</strong></div></th>
                            <th width="17%" rowspan="2" align="center" class="ptm_mtitle2"><div align="center"><strong>Age Group</strong></div></th>
                            <th width="26%" rowspan="2" align="center" class="ptm_mtitle2"><div align="center"><strong>Subject(s)</strong></div></th>
                            <th align="center" class="ptm_mtitle2" colspan="2"><div align="center"><strong>Timing</strong>s</div></th>
                            <th width="10%" rowspan="2" align="center" class="ptm_mtitle2"><div align="center"><strong>Location</strong></div></th>
                          </tr>
                          <tr>
                            <th align="center" class="ptm_mtitle2" width="8%">Reporting</th>
                            <th align="center" class="ptm_mtitle2" width="11%" nowrap>Pick-up</th>
                          </tr>
                                           
                          <tr class="ptm_row1">
                          	<td align="center">1.</td>
                            <td align="center">Friday, June 2<sup>nd</sup> &amp;<br>Saturday 3<sup>rd</sup> June, <br>
                            2017</td>
                            <td align="center"><strong>Grade 1</strong><br>(K-1)</td>
                            <td align="center" style="vertical-align: middle">&nbsp;</td>
                            
                            <td align="center" style="vertical-align: middle">8.30 am</td>
                            <td align="center" style="vertical-align: middle" nowrap>12.30 pm</td>
                            <td rowspan="8" align="center" style="vertical-align: middle"><strong>Junior<br>School</strong></td>
                          </tr>
                          <tr class="ptm_row1">
                            <td align="center">2.</td>
                            <td align="center" nowrap>Monday, June 5<sup>th</sup> ,<br>
                            2017</td>
                            <td align="center"><strong>Grade 2</strong><br>
                            (K-2)</td>
                            <td align="center" style="vertical-align: middle">Literacy A (English)</td>
                            <td align="center" style="vertical-align: middle">7.00 am</td>
                            <td align="center" style="vertical-align: middle">9.30 am</td>
                          </tr>
                          <tr class="ptm_row1">
                            <td align="center">3.</td>
                            <td align="center">Tuesday, June 6<sup>th</sup> , <br>
                            2017</td>
                            <td align="center"><strong>Grade 2</strong><br>
(K-2)</td>
                            <td align="center" style="vertical-align: middle">Numeracy (Maths) <br>Literacy B (Urdu)/Add.Eng.)</td>
                            <td align="center" style="vertical-align: middle">7.00 am</td>
                            <td align="center" style="vertical-align: middle">10.45 am</td>
                          </tr>
                          <tr class="ptm_row1">
                            <td rowspan="2" align="center">4.</td>
                            <td rowspan="2" align="center" nowrap>Wednesday,
June 7<sup>th</sup> ,<br>
2017</td>
                            <td align="center"><strong>Grade 3 to 5</strong>
(K-3 to K-5)</td>
                            <td align="center" style="vertical-align: middle">Literacy A (English)</td>
                            <td rowspan="2" align="center" style="vertical-align: middle">7.00 am</td>
                            <td rowspan="2" align="center" style="vertical-align: middle">9.15 am</td>
                          </tr>
                          <tr class="ptm_row1">
                            <td align="center"><strong>Grade 6</strong><br>
(E-1)</td>
                            <td align="center" style="vertical-align: middle">Literacy A (English)</td>
                          </tr>
                          <tr class="ptm_row1">
                            <td rowspan="2" align="center">5.</td>
                            <td rowspan="2" align="center">Thursday, June 8<sup>th</sup> , <br>
                            2017</td>
                            <td align="center" nowrap><strong>Grade 3 to 5</strong><br>
(K-3 to K-5)</td>
                            <td align="center" style="vertical-align: middle">Literacy B (Urdu/Add.Eng.)<br>
                            Numeracy (Maths) </td>
                            <td rowspan="2" align="center" style="vertical-align: middle">7.00 am</td>
                            <td rowspan="2" align="center" style="vertical-align: middle">11.00 am</td>
                          </tr>
                          <tr class="ptm_row1">
                            <td align="center"><strong>Grade 6</strong><br>
(E-1)</td>
                            <td align="center" style="vertical-align: middle">Literacy B (Urdu/Add.Eng.)<br>
                            Numeracy (Maths)</td>
                          </tr>
                          <tr>
                            <th align="center" class="ptm_mtitle" colspan="7"><div align="center"><strong>PREP SCHOOL</strong></div></th>
                          </tr>
                          <tr class="ptm_row1">
                            <td rowspan="2" align="center">6.</td>
                            <td rowspan="2" align="center">Tuesday, June 6<sup>th</sup> , <br>2017</td>
                            <td align="center"><strong>Grade 7 &amp; 8</strong><br>
(E-2 &amp; M-1)</td>
                            <td align="center" style="vertical-align: middle">English &amp; Urdu</td>
                            <td align="center" style="vertical-align: middle">7.30 am</td>
                            <td align="center" style="vertical-align: middle">11.15 am</td>
                            <td rowspan="3" align="center" style="vertical-align: middle"><strong>Prep<br>School</strong></td>
                          </tr>
                          <tr class="ptm_row1">
                            <td align="center"><strong>Grade 9</strong><br>
(M-2)</td>
                            <td align="center" style="vertical-align: middle">English &amp;  Maths</td>
                            <td align="center" style="vertical-align: middle">7.30 am</td>
                            <td align="center" style="vertical-align: middle">11.45 am</td>
                          </tr>
                          <tr class="ptm_row1">
                            <td align="center">7.</td>
                            <td align="center">Wednesday, June 7<sup>th</sup> , <br>2017</td>
                            <td align="center"><strong>Grade 7 &amp; 8</strong><br>
(E-2 &amp; M-1)</td>
                            <td align="center" style="vertical-align: middle">Maths</td>
                            <td align="center" style="vertical-align: middle">7.30 am</td>
                            <td align="center" style="vertical-align: middle">9.45 am</td>
                          </tr>
                          <tr>
                            <th align="center" class="ptm_mtitle" colspan="7"><div align="center"><strong>SENIOR SCHOOL</strong></div></th>
                          </tr>
                          <tr class="ptm_row1">
                            <td align="center">8.</td>
                            <td align="center">Tuesday, June 6<sup>th</sup> ,<br>2017</td>
                            <td align="center"><strong>Grade 10</strong><br>
(C-1)</td>
                            <td align="center" style="vertical-align: middle">English &amp; Maths</td>
                            <td align="center" style="vertical-align: middle">7.30 am</td>
                            <td align="center" style="vertical-align: middle">11.45 am</td>
                            <td align="center" style="vertical-align: middle"><strong>Senior<br>School</strong></td>
                          </tr>
                          <tr class="ptm_row1">
                            <td align="center">9.</td>
                            <td align="center">Friday, June 9<sup>th</sup> - Thursday, June 15<sup>th</sup></td>
                            <td colspan="5" align="center">Marking and checking</td>
                          </tr>
                          <tr class="ptm_row1">
                            <td align="center">10.</td>
                            <td align="center">Friday, June 16<sup>th</sup> - Saturday, June 17<sup>th</sup></td>
                            <td colspan="5" align="center">Listing Interviews and advising candidates</td>
                          </tr>
                          <tr class="ptm_row1">
                            <td align="center">11.</td>
                            <td align="center">Wednesday, June 21<sup>st</sup> - Saturday 24<sup>th</sup></td>
                            <td colspan="5" align="center">Interviews</td>
                          </tr>
                          <tr class="ptm_row1">
                            <td align="center">12.</td>
                            <td align="center">Friday, June 30<sup>th</sup></td>
                            <td colspan="5" align="center">Advise places</td>
                          </tr>
                        </tbody>
                      </table>   
                                    
            		  </div>
			
           
           
           
           <!--<div class="col-xs-12 col-md-12">
 <div class="row">
  <div class="col-xs-6 col-md-6">
  <img src="img/vp.jpg" alt="Logo" width="350" height="250" class="img-responsive">
  
  </div>
  <div class="col-xs-6 col-md-6">
  <img src="img/mafzal.jpg" alt="Logo" width="350" height="250" class="img-responsive">
  </div>
 
 </div>
</div>-->
           
           
           
           
           
           
           
            
            
          </div>
</p>
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
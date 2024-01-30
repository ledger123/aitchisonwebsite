<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	//17070-26354
	$banner_text="";
	if(count($_SESSION['parents']) < 1){
		header("location: ac-parents-login.php");
	}
	$default_open=0;
?><!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Eid Ul Azha Break</title>

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
   .borderless td, .borderless th {
    	 border: none !important;
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
            <h2 class="titile" align="center">Eid ul Azha Break</h2>
            <p>The College will be closed from 10-09-2016 to 18-09-2016 for Eid ul Azha.</p>
            <p>The instructions for Day Boys and Boarders are given below: </p>
             <table class='table borderless' width="95%">   
             	<tr>
                	<td width="25%"><div style="background-color: #9F9A9A; font-weight: bold; padding: 8px 4px 8px 4px; width: auto;">BOARDERS:</div>&nbsp;</td>
                    <td>They are allowed to leave on Friday, 9th September, 2016 after classes and will report back on Sunday, 18th September, 2016 by 5.30 P.M. </td>
                </tr>
                <tr>
                	<td width="25%"><div style="background-color: #9F9A9A; font-weight: bold; padding: 8px 4px 8px 4px; width: auto;">DAY BOYS:</div></td>
                    <td>The College will be closed from Saturday 10th September, 2016 and will re-open on Monday, 19th September, 2016 at 7.40 A.M..</td>
                </tr>
                <tr>
                  <td height="80" colspan="2" valign="bottom">Any change will be notified.</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><table class='borderless' width="95%">
                      <tr>
                        <td width="40%">&nbsp;</td>
                    <td align="center"><img src="images/signature/prince_signature_new.png" width="212" height="72" ></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td align="center">Michael Thomson M.A., Dip. Ed., M.A.C.E<br>Principal</td>
                      </tr>
                  </table></td>
                </tr>
             </table>
                

	
                
            <!--<p>The College's admission process will begin Friday 25th March, 2016 for the school year commencing September, 2016. The last date for Registration is Monday 25th April, 2016. <br><br>
            </p>-->
            <!--<p>
            <div class="row">
  <div class="col-sm-4"><a href="admission2016/principal-letter.pdf" class="c0000FF" target="_blank"><strong><p style="color:blue"><span style="color: #000099">Principal's Letter</span></strong></a></div>
            </div>
            
            <div class="row">
  <div class="col-sm-4"><a href="admission2016/general-admissions-information.pdf" class="c0000FF" target="_blank"><strong><p style="color:blue"><span style="color: #000099">General Admissions Information</span></strong></a></div>
  </div>
  <div class="row">
 <div class="col-sm-4"><a href="admission2016/request-for-registration-form.pdf" class="c0000FF" target="_blank"><strong><p style="color:blue"><span style="color: #000099">Request for Registration Form</span></strong></a></div>
  </div>
  
  <div class="row">
 <div class="col-sm-4"><a href="admission2016/school-report-declaration-form.pdf" class="c0000FF" target="_blank"><strong><p style="color:blue"><span style="color: #000099">School Report/Declaration Form</span></strong></a></div>
  </div>
  
  
   <div class="row">
 <div class="col-sm-4"><a href="admission2016/registration-application-form.pdf" class="c0000FF" target="_blank"><strong><p style="color:blue"><span style="color: #000099">Registration/Application Form</span></strong></a></div>
  </div>
  
  
  <div class="row">
 <div class="col-sm-4"><a href="admission2016/syllabuses-booklet-2016-2017.pdf" class="c0000FF" target="_blank"><strong><p style="color:blue"><span style="color: #000099">Syllabuses Booklet 2016-2017</span></strong></a></div>
  </div>
  
  <div class="row">
 <div class="col-sm-4"><a href="admission2016/notes-for-guidance.pdf" class="c0000FF" target="_blank"><strong><p style="color:blue"><span style="color: #000099">Notes for Guidance</span></strong></a></div>
  </div>
  
  
  <div class="row">
 <div class="col-sm-4"><a href="admission2016/regulations-for-admissions-testing.pdf" class="c0000FF" target="_blank"><strong><p style="color:blue"><span style="color: #000099">Regulations for Tests</span></strong></a></div>
  </div>
  
  
  
  
  
            </p>
            
            <div> <p>The College NTN is 4199854-5. </p></div>
            <h3>
              <center>
                <p><strong>Admissions Testing May/June 2016</strong></p></center></h3>-->
            
            <!--<table width="70%" class="table table-inverse" border="2" bordercolor="#2D27C0" >
  <thead>
    <tr>
      <th width="50%" bgcolor="#A6A6A6">Date of Admission Testing</th>
      <th width="50%" bgcolor="#A6A6A6">Year Levels</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">May 30th/31st</th>
      <td> K1 </td>
      </tr>
    <tr >
      <th scope="row">
        <p>&nbsp;</p>
        <p>June 1st/2nd </p></th>
      <td><p>K2; Prep E1, E2, M1;</p>
        <p>Senior School M2, C1 </p></td>
      </tr>
    <tr>
      <th scope="row">June 3rd  </th>
      <td>K3</td>
      </tr>
    <tr>
      <th scope="row">June 4th </th>
      <td>K4/K5 </td>
    </tr>
  </tbody>
</table>-->





            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
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
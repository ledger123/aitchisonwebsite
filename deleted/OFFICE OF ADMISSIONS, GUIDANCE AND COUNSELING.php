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
     <title>Aitchison College:- Re: Re-Admission into Aitchison College H2 (2016-17) under Special Consideration</title>

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

  </head>
  <style>
  .para{
		padding-bottom: 6px;  
   }
  </style>
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
          	<div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12">
                	<div align="center" style="padding-bottom: 20px;">
               	    <img src="./img/ac_logo.png" width="130" height="130" alt="Aitchison College, Lahore."/> </div>
                </div>
            </div>
          	<!--FIRST ROW :STARTED-->
          	<div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12">                
                	<div class="aboutus_area wow fadeInLeft">
                       <div align="center">
                         <h2><strong>OFFICE OF ADMISSIONS, GUIDANCE AND COUNSELING <br>
                           SENIOR SCHOOL, AITCHISON COLLEGE, LAHORE</strong></h2>
                       </div>
                       <p align="justify">Dear Parents,</p>
                       <p align="justify">We are pleased to offer a list of <a href="http://www.aitchison.edu.pk/ac-universities-deadlines-ss.php"><span style="color: #000099">University Application Deadlines</span></a> at the base of this letter. Also included in this letter are our key procedures, expectations and responsibilities. It is important that all boys and their parents read this carefully.</p>
                       <p align="justify">This is an exciting time for students planning for university, and a very busy time for the College as it seeks to help boys achieve their post schooling goals. The College has a fine record of placements in the United Kingdom, North America, Europe and, of course, nationally. Such achievements are highlighted on our website and are proof of the quality and hard work that is put into each and every application. It also reflects the trust so many top universities place in Aitchison College and our record of honesty and accuracy.</p>
                       <p align="justify">While some boys do use external counselors, we strongly recommend they process applications through the College&rsquo;s Guidance Office. In 2016-17, we are expanding the service and providing additional resources and information for students. The past three years have seen LSE, Cambridge, MIT, Princeton, UPenn, Yale, Brown, UC Berkeley, McGill, Toronto, York and several other top universities accepting our students. This year we have received $658,000 in financial aid and scholarships from US universities, $111,000 CAN from Canadian Universities and 47,500 pounds from UK universities. Students who were accepted to these and many other top schools worked solely through the school counseling services. Aitchison enhances a boy&rsquo;s chances of success and we are justified in protecting this reputation on behalf of all boys.</p>
                       <p align="justify">It is important to note that the Admission Counselor will be sending the final college essays separately along with lists of activities for all students applying to US universities to ensure transparency. All teachers&rsquo; recommendations will be sent to the counseling office for approval before they are uploaded to the Common Application Portal.</p>
                       <p align="justify">Please note that our College policy states that &ldquo;boys may only apply to 14 international universities: 9 US universities (including 1 university they may apply to in the early decision/action pool) and any 5 others from around the globe. Out of the 9 US universities, they may apply to only 3 Ivy League Universities.&rdquo;</p>
                       <p align="justify">The spirit of this letter is to stress that we are here to help our boys, but an important part of this is also protecting the reputation of Aitchison College. When we work together and with clarity, we achieve the best results.</p>
                       <p align="justify">Warm wishes,</p>
                       <p><img src="img\sig.png" ></p>
                       
                       <p>&nbsp;</p>  <a href="http://www.aitchison.edu.pk/ac-universities-deadlines-ss.php">
                       <button type="button" class="btn btn-primary btn-block">University Application Deadlines</button></a>
                    </div>               
            	</div>
          	</div>
          <!--FIRST ROW   :ENDED-->
          <!--SECOND ROW :STARTED-->
          <div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12">
                
                </div>
            </div>
          <!--SECOND ROW   :ENDED-->
          <!-- End course content -->

          <!-- start course archive sidebar -->
          
          <!-- start course archive sidebar -->
        </div>
      </div>
      <!--<div class="container" style="border: #990000 thin solid;">Akhtar rafiq</div>-->
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
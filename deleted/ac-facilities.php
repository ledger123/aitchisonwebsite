<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
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
     <title>Aitchison College:- Facilities.</title>

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
    <link rel='stylesheet prefetch' href='css/circliful.css'>  <!-- smooth animate css file -->
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
<style>
	/*@media(max-width:767px ){
		.sgallery_area a {
			width: 95%;
		}
	}*/
</style>
    
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
                    <div class="aboutus_area wow fadeInLeft">
                        <h2 class="titile">Facilities </h2>
                        <p>Aitchison enjoys many fine facilities: among these are historic buildings of national significance, boarding houses, dining halls, hospital, spacious general school buildings, science laboratories, libraries, unique college amphitheatre, equestrian centre, expansive playing fields, squash complex and hardcourt surfaces, and much more. It is a ‘city’ in itself and an environment in which a boy can reach his potential because there is always something here to inspire and motivate him. The College has its own plant nursery that underpins most of the seasonal beauty that receives so  many&nbsp;accolades. The College also has its own general store, barber, tailor and four canteens. 
                        </p>
                        <p> In 2017, the college will open its first Cricket and Swimming academies for elite training. </p><br><br>
                    </div>
                </div>                
            </div>            
            <div class="row">
            	<div class="col-lg-12  col-lg-offset-1 col-md-12 col-md-offset-1 col-sm-12 col-sm-offset-1">
                	<div id="gallerySLide" class="sgallery_area">
						<a href="img/facilities/cricket-main-pavilion.jpg" title="Cricket Pavilion">
                          <img class="gallery_img" src="img/facilities/small/cricket-main-pavilion.jpg" alt="img" />
                          <span class="view_btn">Cricket Pavilion</span>
                        </a>                
                        <a href="img/facilities/AMPHITHEATRE.jpg" title="Amphitheatre">
                          <img class="gallery_img" src="img/facilities/small/AMPHITHEATRE.jpg" alt="img" />
                          <span class="view_btn">Amphitheatre</span>
                        </a>
                        <a href="img/facilities/BASKETBALLCOURT.jpg" title="Basketball Courts">
                          <img class="gallery_img" src="img/facilities/small/BASKETBALLCOURT.jpg" alt="img" />
                          <span class="view_btn">Basketball Courts</span>
                        </a>
                        <a href="img/facilities/SYED-BABAR-ALI-LIBRARY.jpg" title="Syed Babar Ali Library">
                          <img class="gallery_img" src="img/facilities/small/SYED-BABAR-ALI-LIBRARY.jpg" alt="img" />
                          <span class="view_btn">Syed Babar Ali Library</span>
                        </a> 
                        <a href="img/facilities/tennis-court.jpg" title="Tennis Courts">
                          <img class="gallery_img" src="img/facilities/small/tennis-court.jpg" alt="img" />
                          <span class="view_btn">Tennis Courts</span>
                        </a>
                        <a href="img/facilities/HOSPITAL-MAIN-BLOCK.jpg" title="College Hospital">
                          <img class="gallery_img" src="img/facilities/small/HOSPITAL-MAIN-BLOCK.jpg" alt="img" />
                          <span class="view_btn">College Hospital</span>
                        </a>
                        <a href="img/facilities/JAFFAR-HOCKEY-GROUND8.jpg" title="Jaffar Memorial Hockey Field">
                          <img class="gallery_img" src="img/facilities/small/JAFFAR-HOCKEY-GROUND8.jpg" alt="img" />
                          <span class="view_btn">Jaffar Memorial Hockey Field</span>
                        </a>
                        <a href="img/facilities/js-computer-lab.jpg" title="Junior School Computer Lab">
                          <img class="gallery_img" src="img/facilities/small/js-computer-lab.jpg" alt="img" />
                          <span class="view_btn">Computer Lab</span>
                        </a>
                        <a href="img/facilities/JSBASKETBALL.jpg" title="Junior School Playing Area">
                          <img class="gallery_img" src="img/facilities/small/JSBASKETBALL.jpg" alt="img" />
                          <span class="view_btn">Junior School Playing Area</span>
                        </a>
                        <a href="img/facilities/JUNIOR-SCHOOL-POOL-AREA.jpg" title="Junior School Swimming Pool">
                          <img class="gallery_img" src="img/facilities/small/JUNIOR-SCHOOL-POOL-AREA.jpg" alt="img" />
                          <span class="view_btn">Junior School Swimming Pool</span>
                        </a>
                        <a href="img/facilities/sports-academy.jpg" title="Sports - Cricket Academy">
                          <img class="gallery_img" src="img/facilities/small/sports-academy.jpg" alt="img" />
                          <span class="view_btn">Sports - Cricket Academy</span>
                        </a>
                        <a href="img/facilities/RINDING-GROUND2.jpg" title="Riding Ground">
                          <img class="gallery_img" src="img/facilities/small/RINDING-GROUND2.jpg" alt="img" />
                          <span class="view_btn">Riding Ground</span>
                        </a>
                        <a href="img/facilities/js-science-lab.jpg" title="Junior School Science Lab">
                          <img class="gallery_img" src="img/facilities/small/js-science-lab.jpg" alt="img" />
                          <span class="view_btn">Junior School Science Lab</span>
                        </a>
                        <a href="img/facilities/MAIN-FOOTBALLGROUND.jpg" title="Main Football Ground">
                          <img class="gallery_img" src="img/facilities/small/MAIN-FOOTBALLGROUND.jpg" alt="img" />
                          <span class="view_btn">Main Football Ground</span>
                        </a>
                        <a href="img/facilities/MAIN-SWIMMING-POOL-COMPLEX.jpg" title="Swimming Academy">
                          <img class="gallery_img" src="img/facilities/small/MAIN-SWIMMING-POOL-COMPLEX.jpg" alt="img" />
                          <span class="view_btn">Swimming Academy</span>
                        </a>
                        <a href="img/facilities/MASJID.jpg" title="Mosque">
                          <img class="gallery_img" src="img/facilities/small/MASJID.jpg" alt="img" />
                          <span class="view_btn">Mosque</span>
                        </a>
                        <a href="img/facilities/MONNOO-SQUASH-COMPLEX.jpg" title="Monnoo Squash Complex">
                          <img class="gallery_img" src="img/facilities/small/MONNOO-SQUASH-COMPLEX.jpg" alt="img" />
                          <span class="view_btn">Monnoo Squash Complex</span>
                        </a>                        
                        <!--<a href="img/facilities/RINDING-SCHOOL.jpg" title="Riding Ground">
                          <img class="gallery_img" src="img/facilities/small/RINDING-SCHOOL.jpg" alt="img" />
                          <span class="view_btn">Riding Ground</span>
                        </a>-->
                        <a href="img/facilities/boarding.jpg" title="Boarding">
                          <img class="gallery_img" src="img/facilities/small/boarding.jpg" alt="img" />
                          <span class="view_btn">Boarding</span>
                        </a> 
                                       
            		</div>
            </div>
          </div>
          <!-- End course content -->

          <!-- start course archive sidebar -->
          
          <!-- start course archive sidebar -->
        </div>
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
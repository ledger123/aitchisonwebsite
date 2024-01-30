<?php
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=8;
	$event_day=strtotime(date("02-04-2016"))+(60*24*3600);
	if($event_day <= strtotime(date("d-m-Y"))){
		header("location: newsandevents");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>130th Founder Day (April 2, 2016) </title>

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
                        <h2 class="titile">130<sup>th</sup> Founders' SPORTS Day </h2>
                      <p>130th Founders' Sports Day was held at Aitchison College on 2nd April, 2016. His  Excellency Governor of Punjab and President Board of Governors Malik Muhammad  Rafique Rajwana was the chief guest at the occasion.</p>
                        <p><br>
                          The event started off with the Champion Houses March Past, which was  followed by the Equestrian Squad March Past; a special Founders&rsquo; Day feature of  the College.</p>
                        <p><br>
                          Competitions on the day included the 100 m run ( Senior School), 200 m run  (Prep School – Junior Division and Junior School – K5), cricket ball throw  (Senior School – Senior Division), inter-house tug of war (Senior School), tug  of war for staff (Prep School vs. Senior School), musical chairs for ladies,  egg and Spoon race for girls and the 4x100 metres relay (Senior School – Senior  Division).<br>
                          The Old Boys also participated in their 4X100 m relay and in the  traditional Old Boys&rsquo; March Past.</p>
                        <p><br>
                          It is to be noted that College boys broke two past records at this years&rsquo;  Founders&rsquo; Day. Ahmed Saeed of Class H2G broke the 1989 College record with his  impressive 10.97-second 100 m sprint, while Haider Salim Khan Tarin of Class  E1F5 broke the 2002 College record with a 25.34-second 200 m dash. </p>
                        <p><br>
                          The Chief Guest, Malik Muhammad Rafique Rajwana distributed prizes amongst  the winners.</p>
                        <p><br>
                          <br>
                      </p>
                        
                    </div>
                    <div class="row">
                    <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12" align="center">
                    <div id="gallerySLide" class="sgallery_area">
                    <?php
					$foldername="galimages/images/fday02042016/";
					$titles=array("", "Founders' Day Sports", "Founders' Day Sports", "Founders' Day Sports", "Ahmad Saeed", "Founders' Day Sports", "Founders' Day Sports", "Founders' Day Sports", "Founders' Day Sports", "Founders' Day Sports", "Founders' Day Sports");
                    for($i=1; $i <= 24; $i++){
						$cfile=$foldername.$i.".jpg";
						$filename=$i.".jpg";
						if(!file_exists($cfile)){
							//echo "Akhtar".$i."<br>";
							continue;
						}else{
                    ?>
                    <a href="<?php echo $foldername.$filename;?>" title="<?php echo strip_tags($titles[$i]);?>">
                      <img class="gallery_img" src="<?php echo $foldername."small/".$filename;?>" width="296" height="198" alt="<?php echo strip_tags($titles[$i]);?>" />
                    <span class="view_btn"><?php echo $titles[$i];?></span>
                    </a>
                    <?php
						}
                    }				
                    ?>                
                </div>
                
              </div>
              <p align="center"><a href="gallery_details.php?gal_id=8" class="">Click here to view more images</a></p>
              </div>
        
                    
                    <!-- Start slider -->
  <div class="container">
  <section id="slider">
    <div class="row" style="background-color: #FFFFFF;"></div>
  </section>
  </div>
  <!-- End slider -->

                    
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
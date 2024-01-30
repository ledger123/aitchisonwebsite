<?php 
header('X-Content-Type-Options: nosniff');
header("X-XSS-Protection: 1; mode=block;");
header("Pragma: no-cache");
header("Cache-Control: no-cache, no-store, must-revalidate, private");
header('X-Frame-Options: SAMEORIGIN');
header("strict-transport-security: max-age=0");	

	//include("standard/main.php"); 
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
     <title>Reliving Aitchison - A Modern Photographic History</title>

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
    <link href="style_29082018.css" rel="stylesheet">
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
.videos {
  margin: 0 auto;
margin-left: 13px;
margin-bottom: 40px;
}
.videos video {
  width: 75%;
  display: block;
  margin-top: 5px;
  border:2px #939393 solid;
}
.videos:before {
  content: '';
  background: #000;
  border-radius: 5px;
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
            	<h3 align="center"><strong>AITCHISON LAUNCHES NEW BOOK TO THE FAITHFUL</strong></h3>

				<h4 align="center"><strong><i>RELIVING AITCHISON - A MODERN PHOTOGRAPHIC HISTORY</i></strong></h4>

				
				<div>&nbsp;</div>

				<div class="row">
					<div class="col-sm-8">
						<p>Principal Michael Thomson welcomed Chief Guest, old boy and renowned artist Ijaz ul Hassan (Kelly House) to launch "Reliving Aitchison - A Modern Photographic History", photographed by internationally recognised photographer Zill Niazi (Kelly House). Fifty old boy stalwarts attended the event and the Principal expressed his gratitude to "familiar faces who always show the way in supporting the College with more than words." He described the book as:"The finest he had seen in any school." Ijaz Saab mentioned how he became emotional in a pre-launch viewing when he saw his old boarding house and how it rekindled many fine memories of friends. He described the book as "a work of art", and Zill Niazi as "an artist of exceptional quality."</p>

						<p>Book orders may be placed with the Bursar's office. Old boys who wish to see the book prior to purchase may contact the Alumni officer. Books subject to availability.</p>		

						<!--<p><a href="newsandevents-live.php?id=482" style="color: #0b3b6f;" target="new">How to place an order</a></p>-->

						<br />
						<div class="" style="margin-bottom: 15px;">
						Follow us on&nbsp;&nbsp;&nbsp;
						<a href="https://www.facebook.com/RelivingAitchisonOfficial" alt="Aitchison College Lahore - Facebook" target="_blank"><img src="img/facebook-icon.png" style="width:30px; height:30px;"></a>&nbsp;

						<a href="https://www.instagram.com/relivingaitchisonofficial" alt="Aitchison College Lahore - Instagram" target="_blank"><img src="img/instagram-icon.png" style="width:30px; height:30px;"></a>

					</div>
					
					</div>
					
					<div align="center" class="col-sm-4"><img id="imgHistory" alt="Photographic History" class="img-responsive" src="newsletter/news/images/photographic-history-1-469.jpg" style="cursor: pointer; width: 100%" />
						<table border="0" style="font-size: 28px;">
							<tr>
								<td style="width: 50%; text-align: left; padding-right: 5px;"><a id="arrowLeft"><i class="fa fa-arrow-left" style="color: #337ab7; cursor: pointer;"></i></a></td>
								<td style="width: 50%; text-align: right; padding-left: 5px;"><a id="arrowRight"><i class="fa fa-arrow-right" style="color: #337ab7; cursor: pointer;"></i></a></td>
							</tr>
						</table>
					</div>
				</div>
				<br />
				
				
					


				<div class="col-lg-12 col-md-12 col-sm-12 videos" align="center">
					<video controls poster="videos\videoteaser-reliving-aitchison.jpg">
						<source src="videos\videoteaser-reliving-aitchison.mp4" type="video/mp4">
						<source src="videos\videoteaser-reliving-aitchison.ogg" type="video/ogg">
						Your browser does not support HTML5 video.
					</video>
				</div>

				
				
				<br />

            </div>
            
            
			<br><br>

			<div class="row">
				<div class="row">
				  <div class="col-lg-12 col-md-12 col-sm-12" align="center">
					<div id="gallerySLide" class="sgallery_area">
						<?php
						$small_imgtitle="Reliving Aitchison";
						$large_imgtitle="A Modern Photographic History";
						for($i=4; $i <= 15; $i++) {
							if($i==7 || $i==8 || $i==10 || $i==11)
								continue;
						?>
							<a href="galimages/reliving-aitchison/<?php echo $i;?>.jpg" title="<?php echo $large_imgtitle;?>">
							  <img class="gallery_img" src="galimages/reliving-aitchison/small/<?php echo $i;?>.jpg" alt="img" />
							<span class="view_btn"> <?php echo $small_imgtitle;?> </span>
							</a>
						<?php
						}
						?>
					</div>
				  </div>
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

<script>
	var imageIndex = "1";
	
	var img1 = "newsletter/news/images/photographic-history-1-469.jpg";
	var img2 = "newsletter/news/images/photographic-history-2-469.jpg";
	
	$("#imgHistory, #arrowLeft, #arrowRight").click(function(){
		if(imageIndex == 1) {
			$('#imgHistory').attr('src', img2);
			imageIndex = 2;
		}
		else {
			$('#imgHistory').attr('src', img1);
			imageIndex = 1;
		}
	});
	
</script>

  </body>
</html>
<?php
	include("phpinclude/config.php");
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
     <title>Aitchison College:- Corporate Partners</title>

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

	#comp-logos {
		overflow-x: auto;
    	white-space: nowrap;
	}
	
	#comp-logos div {
		display: inline-block;
	}
	
	#comp-logos div img {
		max-height: 120px;
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
            <div align="center"><h2 class="titlewithoutbordercenter">Corporate Partners</h2></div>

            <div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12" style="padding:0 50px;">
                	
                    <div>
            	  		<p>The College maintains a privileged connection with companies committed to corporate responsibility and who seek to contribute to the advancement of education  by funding various projects. These partnerships enable companies to enjoy invitations to major College events along with recognition of their contribution in the alumni newsletter and on the College website. Naming rights can also be offered to those who fully fund a major capital project.</p>
						<p>If you would like to become our corporate partner or discuss giving opportunities at Aitchison, then please contact us on 111-363-063 (Ext. 333) or send an email to <span style="color:#000099">bursar@aitchison.edu.pk</span></p>
						<p>We recognise the contribution of Mr. Zubair Khaliq, CEO Multiline Engineering Company and Old Aitchisonian Mr. Faraz Khalid Shaikh, Chief Executive United Foam Industries (Pvt) Ltd. in funding the Aitchison National Junior tennis Championships for Boys and Girls.</p>
                    </div>
                   
					<?php /*?><div align="center" style="padding-top: 30px; padding-bottom: 20px;">
						<h3>PARTNER COMPANIES</h3>
					</div><?php */?>
					<div id="comp-logos" align="center">
						<div>
							<img class="img-responsive" src="img/corporate-partners/multiline.png" alt="Multiline"/>
						</div>
						<div>
							<img class="img-responsive" src="img/corporate-partners/unifoam.png" alt="Unifoam"/>
						</div>
					</div>
                   
					
                </div>
                   
           </div>
		   <div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12" style="padding:0 50px;">
				   <div align="center" style="padding-top: 30px; padding-bottom: 20px;">
					   <h3 align="center"><strong>Corporate Partners (<span style="font-size: 20px;">The Old Building Fund</span>)</strong></h2>
				   </div>
			    </div>
		   </div>
			   <div class="row">
				<div id="comp-logos" align="center">   
				<?php
				   for($i=1; $i<= 15; $i++){
				   ?>
				   <div class="col col-lg-3 col-md-4 col-sm-6 col-xs-6" align="center">
					 	<img class="img-responsive" src="img/corporate-partners/cp-oldbuilding/<?php echo $i;?>.png" alt=""/>
				   </div>
				<?php
				   }
				  ?>
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
    
    <script src="js/custom1.js"></script>


  </body>
</html>
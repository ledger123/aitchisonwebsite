<?php
	include("standard/main.php"); 
  //$banner_image_url="img/pageimages/ac-puni-placement.jpg";
  $banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=2;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Pastoral Care and Counseling</title>

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
  <body> 

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <?php include("phpinclude/header.php");?>
    <!--=========== END HEADER SECTION ================--> 
<style>
	.quote {
		color: #6792F8 !important;
    	font-size: 18px;
	}
	@media (max-width:425px ) {
		.quote {
			font-size: 14px;
		}
	}
</style>
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
				<div>
                    <div class="aboutus_area wow fadeInLeft">
                        <h2 class="titile">Pastoral care and Counseling</h2>
                        <div class="row" style="margin-left: 0; margin-right: 0;">
                        	<div class="col-lg-offset-3 col-md-offset-3 col-lg-8 col-md-8 col-sm-12 quote">
                            	<p style="line-height: 1.3em; font-weight: bold; font-style: italic;">
                            	 &ldquo;
                                 If you think in years, plant rice, <br>
                                 &nbsp;&nbsp;&nbsp;If you think in decades, plant trees, <br>
                                 &nbsp;&nbsp;If you think in centuries, educate your children.&nbsp;&rdquo;
								</p>
                                <p style="text-align: right; padding-right: 50px; ">(Chinese philosophy)</p>
                            </div>
                        </div>
                        
                        <div class="row" style="margin-left: 0; margin-right: 0;">
                        	<div class="col-lg-7 col-md-7 col-sm-12">
                            	<p style="padding-top: 3px; line-height: 1.8em;">Aitchison's dedicated teachers and medical staff are deeply committed to the welfare of our students. The College's 'Welfare Committees' in each school meet to discuss issues affecting boys and how best we can educate for positive outcomes. Two School Counselors/Psychologists also play pivotal roles both as part of this committee and independently. A strongly integrated House system promotes sound group dynamics with an equal focus on the individual, so that all pupils feel safe and valued at school. Our approach to well-being is to be proactive.</p>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-12">
                          		<?php /*?><img src="img/pcare.jpg" alt="" class="img-responsive img-rounded" style="width: 100%; height: auto;" />  <?php */?>
								<img src="img/pcare-28102019.jpg" alt="" class="img-responsive img-rounded" style="width: 100%; height: auto;" />
                            </div>
                        
                        	
						</div>
						<div class="row" style="margin-left: 0; margin-right: 0;">
							<p style="padding: 10px 15px 0"><strong>The welfare of all pupils is based on the understanding of shared values.</strong>  Our basic aim is to keep channels of communication open between students, teachers and parents so that we are able to communicate and educate with clarity. Regular Parent Gatherings and PT days assist in this.</p>
                        	<p style="padding: 0 15px;">Leadership programmes instill respect for the College and the vast array of individual talents within the cohort.</p><br>

							
						</div>
                    	<?php /*?><div class="row">
                        	<div class="col-lg-6 col-md-6 col-sm-12">
								<img src="img/pcare1.jpg" alt="" class="img-responsive img-rounded" style="width: 100%; height: auto;" />
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
								<img src="img/pcare.jpg" alt="" class="img-responsive img-rounded" style="width: 100%; height: auto;" />
                            </div>
                            
                        </div> 	<?php */?>
						<div class="row">
							<div class="col-lg-offset-3 col-lg-7 col-md-offset-3 col-md-7 col-sm-12">
								<img src="img/pcare1.jpg" alt="" class="img-responsive  img-rounded" />
							</div>	
						</div>
                         <!--<div align="center"><img src="img/pcare1.jpg" alt="" class="img-responsive  img-rounded" style="width: 60%; height: auto;" /></div>-->
          </div>
          </div>
                        
</p>
                        
                    
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
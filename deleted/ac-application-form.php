<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$rdirecturl="ac-admissions-update-202021.php";
	header("location: ".$rdirecturl);
	exit();
	$banner_text="";
	$default_open=3;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Application Form</title>

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
    <link href='//fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'> <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
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
                    	<!--<h2 class="titlewithoutborder colorblue hrplace border-blue" style="position: relative; display: inline-block; font-size:24px; line-height:32px;">Application Form</h2>
                        <br /><br />-->
                        <br />
                        <?php /*?><p style="font-size: 16px;">
                        	Application form will be available soon.
                        </p><?php */?>
                        <ul style="line-height: 2.0em; text-align: justify; padding-left: 30px !important;list-style-type: none;">
                            <li class="c0000FF"><a href="./newsandevents-testlink.php?id=260" class="c0000FF"><strong><p style="color:blue"><span style="color: #000099; font-size: 16px;">Re: International Boarding Admissions to Aitchison College 2019-20</span></strong></a></li>
							
							<li class="c0000FF"><a href="./school_doc/admission-2019/school-report-declaration.pdf" target="_blank" class="c0000FF"><strong><p style="color:blue"><span style="color: #000099; font-size: 16px;">School Report/Declaration</span></strong></a></li>
							
							<li class="c0000FF"><a href="./school_doc/admission-2019/international-boarding-application-form.pdf" target="_blank" class="c0000FF"><strong><p style="color:blue"><span style="color: #000099; font-size: 16px;">International Boarding Application Form</span></strong></a></li>
							
							<li class="c0000FF"><a href="./school_doc/admission-2019/guidance-for-admissions-2019.pdf" target="_blank" class="c0000FF"><strong><p style="color:blue"><span style="color: #000099; font-size: 16px;">Guidance for Admissions 2019</span></strong></a></li>
							
							
							<?php /*?>
                            <li class="c0000FF"><a href="./school_doc/admission-2018/international-boarding-application-form-31012018.pdf" target="_blank" class="c0000FF"><strong><p style="color:blue"><span style="color: #000099; font-size: 16px;">International Boarding Application Form</span></strong></a></li>
                            <li class="c0000FF"><a href="./school_doc/admission-2018/school-report-declaration-31012018.pdf" target="_blank" class="c0000FF"><strong><p style="color:blue"><span style="color: #000099; font-size: 16px;">School Report/Declaration</span></strong></a></li>
                            <li class="c0000FF"><a href="./school_doc/admission-2018/check-list-31012018.pdf" target="_blank" class="c0000FF"><strong><p style="color:blue"><span style="color: #000099; font-size: 16px;">Check List</span></strong></a></li>
                            <li class="c0000FF"><a href="./school_doc/admission-2018/guidance-for-admissions-2018-31012018.pdf" target="_blank" class="c0000FF"><strong><p style="color:blue"><span style="color: #000099; font-size: 16px;">Guidance for Admissions 2018</span></strong></a></li>
                            <?php */?>
	
                            <?php /*?><li class="c0000FF"><a href="ac-admission-info201819.php" class="c0000FF"><strong><p style="color:blue"><span style="color: #000099; font-size: 16px;">Admissions Guidelines</span></strong></a></li>
                            <li class="c0000FF"><a href="ac-principal-admission-letter-201819.php" class="c0000FF"><strong><p style="color:blue"><span style="color: #000099; font-size: 16px;">The Rationale for Admissions Testing (Overview)</span></strong></a></li>              	
                            <li class="c0000FF"><a href="ac-general-admission-info-201819.php" class="c0000FF"><strong><p style="color:blue"><span style="color: #000099; font-size: 16px;">General Admissions Information</span></strong></a></li>
                            <li class="c0000FF"><a href="ac-admissions-faq-201819.php" class="c0000FF"><strong><p style="color:blue"><span style="color: #000099; font-size: 16px;">FAQs on the Admissions Process</span></strong></a></li>
                            <li class="c0000FF"><a href="admission2018/guide-to-admissions-testing201819-a.pdf" class="c0000FF" target="_blank"><p style="color:blue"><strong><span style="color: #000099; font-size: 16px;">Syllabuses Booklet 2018-2019</span></strong></a></li>
                            <li class="c0000FF"><a href="current-fee-structure-31012018.php" class="c0000FF" target="_parent"><p style="color:blue"><strong><span style="color: #000099; font-size: 16px;">Present Fee Structure 2017-18</span></strong></a></li><?php */?>
                        </ul>

            		</div>
                </div>                
            </div>
            
          </div>
</div>

            </p>
            <br><br>
          </div>
          <p>&nbsp;</p>
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
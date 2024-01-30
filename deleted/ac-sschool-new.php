<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/ac-puni-placement.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=1;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Senior School</title>

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
	
	.hmjs_img{
		float:right; 
		margin: 0px 0px 2px 30px;
		width: 260px;
		height: 220px;
	}
	.hmjs_img > img{
		width: 260px;
		height: 190px;
	}
	@media(max-width:767px ){
		.hmjs_img{
			display: block;
			float: none;
			margin: auto;
			width: 100%;
			height: 100%;
			text-align: center !important;
		}
		.hmjs_img > img {
			width: 100%;
			height: 100%;
		}
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
            <h2 class="titile">senior School</h2>
            
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12" align="justify">
						
						<div class="hmjs_img">
							<img src="img/pageimages/amina.jpg" class="img-rounded" alt="" style="">
							<br>
							  <div align="center">
								<em style="font-size: 13px;">Mrs. Amina Kamran<br/>Headmistress Senior School</em>    
							  </div>
						  </div>
						
  <p>Senior School prepares boys for Cambridge IGCSE and AS/A Levels. Each boy is expected to make academics a priority. We also acknowledge and support  individuality within the broader needs of a vibrant and disciplined community, and we appreciate that boys possess different talents and interests and do our best to cater for this with an extensive sporting and co-curricular program that includes over 20 clubs and societies. Sport is compulsory. The College cares for its pupils in houses: currently fifteen of which 3 are for boarders and 12 for day boys. Each Head of House is supported by an assistant and general staff who are there to support boys and offer sound advice. This system actively underpins a positive and constructive school environment. Boys hold leadership positions as College and School prefects from which house leaders are chosen.</p>
  
  </div>
					
</div>
            <div>
             
              <p>As in other sections of the College, we educate a diverse group of students from all parts of Pakistan, which satisfies one of the College's chief aims which is to educate the DNA of the nation, bringing boys together from differing social and linguistic backgrounds.   At Senior School we offer schooling for the age range of 14 to 17+ years. The College has been a Cambridge Examination Centre since 1933 and is the only school in Pakistan with that distinction. Our teaching is aimed at preparing boys for external assessment across a wide range of Cambridge subjects, but also inspiring and challenging boys through Harkness Table sessions and Meta-Cognition tutorials run by our Adjunct faculty of distinguished old boys and visiting scholars. Part of this added curriculum includes regular visits from Balliol College graduates (Oxford University) and our Scholars in Residence Program. </p>
            </div>
            
            <div><p>Boys in Year 10 and 11 (ostensibly O Levels) may opt either for the National or International curriculum -the latter not including requisite subjects for admission to universities in Pakistan. Years 12 and 13 study AS and A levels. Our Guidance counseling plays a crucial part in advising on subject selection. Many of our boys receive regular admissions to the world's top universities.</p>
            </div>
          
            <div>
              <p>Considerable attention is paid to the moral, intellectual, and character development of each boy. Qualities of enthusiasm and initiative, high standards of behaviour, decorum and discipline are regularly emphasized. </p>
            </div>
            <p>&nbsp;</p>
			  
			  <div class="" align="center" style="margin-top: 15px;">
					<div id="gallerySLide" class="sgallery_area">
						
						<?php
						$imgPath = "img/pageimages/gallery/ss1/";
						$imgPathSmall = "img/pageimages/gallery/ss1/small/";
						
						for ($i = 1; $i < 25; $i++) {
						?>
						<a href="<?php echo $imgPath . $i . ".jpg"; ?>" title="Senior School">
                          <img class="gallery_img" src="<?php echo $imgPathSmall . $i . ".jpg"; ?>" alt="img">
                          <span class="view_btn">Senior School</span>
                        </a>
                        
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
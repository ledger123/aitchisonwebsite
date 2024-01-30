<?php 
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	if(count($_SESSION['stdportal']) > 0){
		include("standard/stdmain.php"); 
		$thisportal="stdportal";		
		$mainpage="std_main.php";
		/*header("location: $mainpage");	
		exit();	*/
	}elseif(count($_SESSION['stfportal']) > 0){
		include("standard/stfmain.php"); 
		$thisportal="stfportal";		
		$mainpage="stf_main.php";
	}elseif(count($_SESSION['boarder']) > 0){
		include("standard/bmain.php"); 
		$thisportal="boarder";		
		$mainpage="b_main.php";
		/*header("location: $mainpage");	
		exit();	*/
	}elseif(count($_SESSION['parents']) > 0){
		$thisportal="parents";	
		$mainpage="pmain.php";	
	}else{
		/*header("location: /");	
		exit();*/
	}
	$studing_class=substr(trim($_SESSION[$thisportal]['studing']), 0, 2);
	/*if(!($studing_class=='C2' || $studing_class=='H1' || $studing_class=='H2')){
		header("location: $mainpage");
		exit();
	}*/
	//if($_SESSION['parents']['']
	$default_open=0;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Revision Plan C2, H1 & H2 </title>

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
    <link rel='stylesheet prefetch' href='css/circliful.css'>  
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
	.nul {
		list-style-type: none;
		padding-left: 0px;
	}
	
	.nul li span .13p{ 
		float: left;
		width: 13%;
	}
	.nul li span .74p{ 
		float: left;
		width: 13%;
	}
	.13p{
		width: 13% !important;	
		display: inline;
	}
	.74p{
		width: 74% !important;	
		display: inline;
	}
	.ptm_mtitle{
		/*background-color: #08112F;*/
		background-color: #293594;
		color: #FFF;	
		font-size: 16px;
		width: 25% !important;
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
          	<h2 class="titlewithoutborder colorblue hrplace border-blue" style="position: relative; display: inline-block;">Revision Plan C2, H1 & H2</h2>
          	<p>&nbsp;</p><p>&nbsp;</p>

          	<div class="newsfeed_area wow fadeInRight">
            <ul class="nav nav-tabs feed_tabs" id="myTab2">
              <li class="active"><a href="#datesheetolevel" data-toggle="tab">Revision Plan</a></li>
              <li><a href="#datesheetalevel" data-toggle="tab">Revision Plan C2</a></li>
              <li><a href="#examrules" data-toggle="tab">Revision Plan H1 & H2</a></li>
              
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              
              <!-- Start news tab content -->
              <div class="tab-pane fade" id="examrules">
                <ul class="news_tab">
                  <li>
                  		<div class="media-body">
                           <a href="./img/rev-28032017/rev-plan-c-28032017-large.jpg" target="_blank"><span class="colorblue">Click Here to Enlarge</span></a>
                        </div>
                  		<a href="./img/rev-28032017/rev-plan-c-28032017-large.jpg" target="_blank"><img src="img/rev-28032017/rev-plan-c-28032017.png" alt="School Rules" style="width: 100%; height: auto;" /></a>
                  </li>
                </ul>                
              </div>
              
              <div class="tab-pane fade in active" id="datesheetolevel">  
              	<ul class="news_tab">
                  <li>
                      <img src="img/rev-28032017/rev-plan-a-28032017-new.png" alt="" style="width: 90%; height: auto;" />
                  </li>
                </ul>
              </div>
              <div class="tab-pane fade" id="datesheetalevel"> 
                <ul class="news_tab">
                  <li>
                  	 <div class="media-body">
                           <a href="./img/rev-28032017/rev-plan-b-28032017-large.jpg" target="_blank"><span class="colorblue">Click Here to Enlarge</span></a>
                        </div>
                     <a href="./img/rev-28032017/rev-plan-b-28032017-large.jpg" target="_blank"><img src="img/rev-28032017/rev-plan-b-28032017.png" alt="Click Here to Enlarge" style="width: 100%; height: auto;" /></a>
                  </li>
                </ul>  
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
    <!--<div class="media">
      <div class="media-left"> <a target="_blank" class="news_img" href="ac-k1.php"> <img class="media-object" src="img/k1.jpg" alt="img"> </a> </div>
      <div class="media-body"> <a target="_blank" href="ac-k1.php">International Kangaroo Mathematics Contest 2016</a> <span class="feed_date">May, 2016</span> </div>
    </div>-->
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
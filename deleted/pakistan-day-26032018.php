<?php
	include("standard/main.php"); 
	$banner_image_url="img/pakistan-day/banners-2018/2.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=9;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Pakistan Day 2018</title>

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
body { color: #000; }

p { text-align:justify; }

#lstArchive li { margin-bottom:15px;}

.videos {
  margin: 0 auto;  
}
.videos video {
  width: 65%;
  display: block;
  margin-top: 5px;
  border:2px #939393 solid;
}
.videos:before {
  content: '';
  background: #000;
  border-radius: 5px;
}

  	.sport-gallery-menu{
	  display: inline;
	  float: left;
	  text-align: center;
	  padding: 0 20px;
	  width: 100%;
	}
	
	.sport-gallery-menu ul li {
	  border: 1px solid #ccc;
	  cursor: pointer;
	  display: inline-block;
	  margin: 0 5px;
	  padding: 6px 15px;
	  text-transform: uppercase;
	  -webkit-transition: all 0.5s;
	  -o-transition: all 0.5s;
	  transition: all 0.5s;
	}
	
	.sport-gallery-menu ul li:hover,
	.sport-gallery-menu ul li.active{  
	  color: #fff;
	}
	
	#gallery {
    	padding: 0;
	}
	
	#gallery {
		/*background-image: url(img/pageimages/misc.jpg);
		background-repeat: no-repeat;
		background-color:rgba(0,0,0,0.5);*/
		
		background: rgba(1,1,1,0.5) url("img/archives/background-trans.jpg") no-repeat fixed center;
		background-size: cover;
	}
	
	.container {
		/*opacity: 1.0;*/
	}


.glossymenu a.menuitem, .glossymenu a.menuitem:visited {
	background: none repeat scroll 0 0 #00450F;
}

.navbar-default {
	background-color: #00450F;
}

#imgBanner { height:170px; padding:0; } 

</style>
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/full-slider.css" rel="stylesheet">
  </head>
  <body> 

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <?php include("phpinclude/header.php");?>
    <!--=========== END HEADER SECTION ================--> 
	
    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner" style=" background-image: url(<?php echo $banner_image_url; ?>);">
      <h2><?php //echo $banner_text; ?></h2>
    </section>
    
    <?php /*?>
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 170px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 170px; overflow: hidden;">            
            <div data-p="225.00" style="display: none;">            	
                <img data-u="image" src="img/pakistan-day/banners-2018/1.jpg" />                
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/pakistan-day/banners-2018/2.jpg" />                
            </div>
            
            <div data-p="225.00" style="display: none;">            	
                <img data-u="image" src="img/pakistan-day/banners-2018/3.jpg" />                
            </div>
            <div data-p="225.00" style="display: none;">            	
                <img data-u="image" src="img/pakistan-day/banners-2018/4.jpg" />                
            </div>
            <div data-p="225.00" style="display: none;">            	
                <img data-u="image" src="img/pakistan-day/banners-2018/5.jpg" />                
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/pakistan-day/banners-2018/6.jpg" />                
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/pakistan-day/banners-2018/7.jpg" />                
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/pakistan-day/banners-2018/8.jpg" />                
            </div>

 		</div>
           

 	</div>
	
    <?php */ ?>
	<div>
        
        
    </div>            

    
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
            <h2 class="titlewithoutborder hrplace border-blue" style="color:#00450F; position: relative; display: inline-block;">Aitchison College celebrates Pakistan Day</h2><br /><br />
            <p>On 23<sup>rd</sup> March 2018, Aitchison College celebrated Pakistan Day with traditional fervor and enthusiasm. A Flag Hoisting ceremony was held near the Old building. The ceremony began with the recitation of the Holy Quran followed by the flag hoisting. The ceremony was attended by the prefects, boarders and all resident staff.</p>
            
<br><br>
			
            <div class="row">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12" align="center">
                    <div id="gallerySLide" class="sgallery_area">
                                                 <a href="newsletter/news/images/1-9411449311.jpg" title="Pakistan Day 23 March 2018">
                                        <img class="gallery_img" src="newsletter/news/images/1-2210049987.jpg" alt="img" />
                                        <span class="view_btn"> Pakistan Day </span>
                                    </a>
                                    
                                                             <a href="newsletter/news/images/2-2816857299.jpg" title="Pakistan Day 23 March 2018">
                                        <img class="gallery_img" src="newsletter/news/images/2-4030050165.jpg" alt="img" />
                                        <span class="view_btn"> Pakistan Day </span>
                                    </a>
                                    
                                                             <a href="newsletter/news/images/3-4767595534.jpg" title="Pakistan Day 23 March 2018">
                                        <img class="gallery_img" src="newsletter/news/images/3-1831299536.jpg" alt="img" />
                                        <span class="view_btn"> Pakistan Day </span>
                                    </a>
                                    
                                                             <a href="newsletter/news/images/4-6666992753.jpg" title="Pakistan Day 23 March 2018">
                                        <img class="gallery_img" src="newsletter/news/images/4-7995295585.jpg" alt="img" />
                                        <span class="view_btn"> Pakistan Day </span>
                                    </a>
                                    
                                                             <a href="newsletter/news/images/5-900118984.jpg" title="Pakistan Day 23 March 2018">
                                        <img class="gallery_img" src="newsletter/news/images/5-3105345745.jpg" alt="img" />
                                        <span class="view_btn"> Pakistan Day </span>
                                    </a>
                                    
                                                             <a href="newsletter/news/images/6-3246090542.jpg" title="Pakistan Day 23 March 2018">
                                        <img class="gallery_img" src="newsletter/news/images/6-2316835368.jpg" alt="img" />
                                        <span class="view_btn"> Pakistan Day </span>
                                    </a>
                                    
                                                             <a href="newsletter/news/images/10-9732569511.jpg" title="Pakistan Day 23 March 2018">
                                        <img class="gallery_img" src="newsletter/news/images/10-9837884884.jpg" alt="img" />
                                        <span class="view_btn"> Pakistan Day </span>
                                    </a>
                                    
                                                             <a href="newsletter/news/images/11-3783688154.jpg" title="Pakistan Day 23 March 2018">
                                        <img class="gallery_img" src="newsletter/news/images/11-4839759571.jpg" alt="img" />
                                        <span class="view_btn"> Pakistan Day </span>
                                    </a>
                                    
                                                             <a href="newsletter/news/images/12-6274176929.jpg" title="Pakistan Day 23 March 2018">
                                        <img class="gallery_img" src="newsletter/news/images/12-244079912.jpg" alt="img" />
                                        <span class="view_btn"> Pakistan Day </span>
                                    </a>
                                    
                                                             <a href="newsletter/news/images/13-2716824570.jpg" title="Pakistan Day 23 March 2018">
                                        <img class="gallery_img" src="newsletter/news/images/13-1223687999.jpg" alt="img" />
                                        <span class="view_btn"> Pakistan Day </span>
                                    </a>
                                    
                                                             <a href="newsletter/news/images/14-6187058123.jpg" title="Pakistan Day 23 March 2018">
                                        <img class="gallery_img" src="newsletter/news/images/14-2675969786.jpg" alt="img" />
                                        <span class="view_btn"> Pakistan Day </span>
                                    </a>
                                    
                                                             <a href="newsletter/news/images/15-1226949505.jpg" title="Pakistan Day 23 March 2018">
                                        <img class="gallery_img" src="newsletter/news/images/15-4983149371.jpg" alt="img" />
                                        <span class="view_btn"> Pakistan Day </span>
                                    </a>
                                    
                                                             <a href="newsletter/news/images/16-7285627559.jpg" title="Pakistan Day 23 March 2018">
                                        <img class="gallery_img" src="newsletter/news/images/16-5401351419.jpg" alt="img" />
                                        <span class="view_btn"> Pakistan Day </span>
                                    </a>
                                    
                                                             <a href="newsletter/news/images/17-6325923246.jpg" title="Pakistan Day 23 March 2018">
                                        <img class="gallery_img" src="newsletter/news/images/17-7749721771.jpg" alt="img" />
                                        <span class="view_btn"> Pakistan Day </span>
                                    </a>
                                    
                                                             <a href="newsletter/news/images/18-4681181129.jpg" title="Pakistan Day 23 March 2018">
                                        <img class="gallery_img" src="newsletter/news/images/18-3616297123.jpg" alt="img" />
                                        <span class="view_btn"> Pakistan Day </span>
                                    </a>
                                    
                                                             <a href="newsletter/news/images/19-9378888406.jpg" title="Pakistan Day 23 March 2018">
                                        <img class="gallery_img" src="newsletter/news/images/19-9746211254.jpg" alt="img" />
                                        <span class="view_btn"> Pakistan Day </span>
                                    </a>
                                    
                                                             <a href="newsletter/news/images/20-724258795.jpg" title="Pakistan Day 23 March 2018">
                                        <img class="gallery_img" src="newsletter/news/images/20-1483131577.jpg" alt="img" />
                                        <span class="view_btn"> Pakistan Day </span>
                                    </a>
                                    
                                                             <a href="newsletter/news/images/21-4800942344.jpg" title="Pakistan Day 23 March 2018">
                                        <img class="gallery_img" src="newsletter/news/images/21-6261602728.jpg" alt="img" />
                                        <span class="view_btn"> Pakistan Day </span>
                                    </a>

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
           
           
           <!--<div class="col-xs-12 col-md-12">
 <div class="row">
  <div class="col-xs-6 col-md-6">
  <img src="img/vp.jpg" alt="Logo" width="350" height="250" class="img-responsive">
  
  </div>
  <div class="col-xs-6 col-md-6">
  <img src="img/mafzal.jpg" alt="Logo" width="350" height="250" class="img-responsive">
  </div>
 
 </div>
</div>-->
           
           
           
           
           
           
           
            
            
          </div>
</p>
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
    
    <!--STARTED FOR JS SLIDER-->
    
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 600,
			  $PauseOnHover: 0,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    
    
  <script language="javascript">
  
    	function showDiv(slidearea){
			document.getElementById("DepartmentSlide").style.display="none";
			document.getElementById("ContributeSlide").style.display="none";
			document.getElementById("MuseumSlide").style.display="none";
			document.getElementById("CollectionsSlide").style.display="none";
			document.getElementById("AGallerySlide").style.display="none";
			document.getElementById("FaqSlide").style.display="none";			
			document.getElementById("ContactSlide").style.display="none";
			document.getElementById(slidearea).style.display="table-row";
			//alert(slidearea);
			
			//$(obj).parent().parent().css("bakground","#8ABDE3");
			//obj.parentNode.style.backgroundColor = "#8ABDE3";
			
			document.querySelector("li[data-filter='DepartmentSlide']").style.backgroundColor = "#fff";
			document.querySelector("li[data-filter='ContributeSlide']").style.backgroundColor = "#fff";
			document.querySelector("li[data-filter='MuseumSlide']").style.backgroundColor = "#fff";
			document.querySelector("li[data-filter='CollectionsSlide']").style.backgroundColor = "#fff";
			document.querySelector("li[data-filter='AGallerySlide']").style.backgroundColor = "#fff";
			document.querySelector("li[data-filter='FaqSlide']").style.backgroundColor = "#fff";
			document.querySelector("li[data-filter='ContactSlide']").style.backgroundColor = "#fff";
			
			document.querySelector("li[data-filter='" + slidearea + "']").style.backgroundColor = "#8ABDE3";
			
			//var obj = document.querySelector("li[data-filter='" + slidearea + "']");
			
			//obj.style.backgroundColor = "#8ABDE3";
			//alert(obj.style.backgroundColor);
		}
		showDiv("DepartmentSlide");
    </script>

    
    <!--ENDED   FOR JS SLIDER -->
    
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
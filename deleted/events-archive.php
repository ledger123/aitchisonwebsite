<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=0;
	if(!empty($_GET['p_id'])){
		if(strlen(trim($_GET['p_id'])) != strlen(intval(trim($_GET['p_id'])))){
			header("location: events-archive.php");
			exit();	
		}
	}else{
		$_GET['p_id']=1;	
	}
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Events Archive</title>

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
    
    <link href="css/quickpager.css" rel="stylesheet">
    
   
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
          	<div class="newsfeed_area wow fadeInRight">
            
            <!-- Tab panes -->
            <div>
            	<h2 class="titlewithoutborder colorblue hrplace border-blue" style="font-size: 26px; position: relative; display: inline-block;">Events Archive</h2>
              <br><br>
              
              <!-- Start news tab content -->
              <div class="tab-pane fade in active" id="news">                
                <ul class="news_tab">
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=487">
                      <img class="media-object" src="newsletter/news/images/3-8110815878.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=487">MAKER'S FAIR, 2019 </a>
                      <?php /*?><span class="feed_date" style="color: #010101;">February 9, 2019</span><?php */?>
                    </div>
                  </div>
                </li>
				<li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=484">
                      <img class="media-object" src="newsletter/news/images/prize-giving-484-2.png" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=484">FOUNDERS' DAY, PRIZE-GIVING CEREMONY</a>
                      <?php /*?><span class="feed_date" style="color: #010101;">February 9, 2019</span><?php */?>
                    </div>
                  </div>
                </li>				
				<li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=485">
                      <img class="media-object" src="newsletter/news/images/prize-giving-484-8.png" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
						<a href="newsandevents-live.php?id=485">SPORTS DAY, SUNDAY MARCH 10<sup style="text-transform:lowercase;">th</sup></a>
                      <?php /*?><span class="feed_date" style="color: #010101;">February 9, 2019</span><?php */?>
                    </div>
                  </div>
                </li>
				<li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=483">
                      <img class="media-object" src="newsletter/news/images/9-5522913476.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=483">JS SPORTS DAY, 2019</a>
                      <?php /*?><span class="feed_date" style="color: #010101;">February 9, 2019</span><?php */?>
                    </div>
                  </div>
                </li>	
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-testlink.php?id=450">
                      <img class="media-object" src="newsletter/news/images/9-7230271971.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-testlink.php?id=450">JUNIOR SCHOOL CROSS COUNTRY 2019</a>
                      <span class="feed_date" style="color: #010101;">&nbsp;</span>
                    </div>
                  </div>
                </li>

				        <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=494">
                      <img class="media-object" src="./img/nne_logo.png" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=494">Old Boys vs. College Team Tent Pegging Competition</a>
                      <span class="feed_date" style="color: #010101;">&nbsp;</span>
                    </div>
                  </div>
                </li>		
				<li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-testlink.php?id=465">
                      <img class="media-object" src="./img/nne_logo.png" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-testlink.php?id=465">COLLEGE VERSUS ACOBA NOT TO BE MISSED ACTION</a>
                      <?php /*?><span class="feed_date" style="color: #010101;">February 9, 2019</span><?php */?>
                    </div>
                  </div>
                </li>
 				<li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-testlink.php?id=464">
                      <img class="media-object" src="./img/nne_logo.png" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-testlink.php?id=464">Annual English Play 2019</a>
                      <?php /*?><span class="feed_date" style="color: #010101;">February 9, 2019</span><?php */?>
                    </div>
                  </div>
                </li>	
				<li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="alumni/news-new.php?id=461">
                      <img class="media-object" src="./img/nne_logo.png" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="alumni/news-new.php?id=461">ALUMNI COLLEGE TOUR (CLASSES: 1991-1995)</a>
                      <span class="feed_date" style="color: #010101;">February 9, 2019</span>
                    </div>
                  </div>
                </li>	
				<li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="alumni/news-new.php?id=448" target="_blank">
                      <img class="media-object" src="./img/nne_logo.png" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="alumni/news-new.php?id=448" target="_blank">ALUMNI COLLEGE TOUR (CLASSES: 1986-1990)</a>
                      <span class="feed_date" style="color: #010101;">January 19, 2019</span>
                    </div>
                  </div>
                </li>
                
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-testlink.php?id=369">
                      <img class="media-object" src="newsletter/news/images/7-1755002657.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-testlink.php?id=369">JS SWIMMING GALA, 2018</a>
                      <span class="feed_date" style="color: #010101;">September 28, 2018</span>
                    </div>
                  </div>
                </li>
                
                
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-testlink.php?id=358">
                      <img class="media-object" src="newsletter/news/images/8-8911328571.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-testlink.php?id=358">JS Academic Prize Day - 2018</a>
                      <!--<span class="feed_date" style="color: #010101;"></span>-->
                    </div>
                  </div>
                </li>
                
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-testlink.php?id=296" target="_blank">
                        <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/7-9254009895.jpg" alt="img">
                      </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-testlink.php?id=296" target="_blank">PS Sports Day, 2018</a>
                      <!--<span class="feed_date" style="color: #010101;"></span>-->
                    </div>
                  </div>
                </li>
                
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-testlink.php?id=292" target="_blank">
                      <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/5-8573636049.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-testlink.php?id=292" target="_blank">JS Sports Day, 2018</a>
                      <!--<span class="feed_date" style="color: #010101;"></span>-->
                    </div>
                  </div>
                </li>
                
                <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="alumni/news-new.php?id=277">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                          </div>
                          <div class="media-body">
                           <a href="alumni/news-new.php?id=277">FOUNDERS' DAY 2018</a>
                           <!--<span class="feed_date" style="color: black;"></span>-->
                          </div>
                      
                      </div>                   
                 </li>
                
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-testlink.php?id=276" target="_blank">
                      <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/3-6803971142.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-testlink.php?id=276" target="_blank">Junior School Annual Play, 2018</a>
                      <!--<span class="feed_date" style="color: #010101;"></span>-->
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="./alumni/news-testlink.php?id=374" target="_blank">
                      <img class="media-object" src="./img/nne_logo.png" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="./alumni/news-testlink.php?id=374" target="_blank">PRE-1960 OLD BOYS' LUNCH AT AITCHISON COLLEGE</a>
                      <span class="feed_date" style="color: #010101;">DECEMBER 1, 2018</span>
                    </div>
                  </div>
                </li>
				<li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="./alumni/news-new.php?id=405" target="_blank">
                      <img class="media-object" src="./img/nne_logo.png" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="./alumni/news-new.php?id=405" target="_blank">Walter A. Robinson Challenge Cup for Cross Country Race</a>
                      <span class="feed_date" style="color: #010101;">NOVEMBER 29, 2018</span>
                    </div>
                  </div>
                </li>
					
                <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="alumni/news-new.php?id=272">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                          </div>
                          <div class="media-body">
                           <a href="alumni/news-new.php?id=272">Old Boys vs. College Team Tent Pegging Competition</a>
                           <span class="feed_date" style="color: black;">February 24, 2018</span>
                          </div>
                      
                      </div>                   
                 </li>
                
                <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="alumni/news-new.php?id=270">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                          </div>
                          <div class="media-body">
                           <a href="alumni/news-new.php?id=270">Alumni College Tour</a>
                           <span class="feed_date" style="color: black;">Classes: 1991-2000</span>
                          </div>
                      
                      </div>                   
                 </li>
                
                <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=254">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                          </div>
                          <div class="media-body">
                           <a href="newsandevents-testlink.php?id=254">Exhibition by Old Boys</a>
                           <!--<span class="feed_date" style="color: black;"></span>-->
                          </div>
                      
                      </div>                   
                 </li>
 				<li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=243">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=243">PRINCIPAL'S HIGH ACHIEVERS' TEA PARTY </a>
                       <span class="feed_date" style="color: black;">January 13, 2018</span>
                      </div>
                      
                      </div>                   
                 </li>  
                <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="/alumni/news-new.php?id=236" target="_blank">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="/alumni/news-new.php?id=236" target="_blank">ALUMNI COLLEGE TOUR (CLASSES 1986-1990)</a>
                       <span class="feed_date" style="color: black;">January 20, 2018</span>
                      </div>
                      
                      </div>                   
                 </li>
                 
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="/alumni/news-new.php?id=235" target="_blank">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="/alumni/news-new.php?id=235" target="_blank">WALTER A. ROBINSON CHALLENGE CUP FOR CROSS COUNTRY RACE</a>
                       <span class="feed_date" style="color: black;">January 11, 2018</span>
                      </div>
                      
                      </div>                   
                 </li>
                 
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=206">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/7-3573924037.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=206">Archives’ Display Centre inaugurated at Aitchison College</a>
                       <span class="feed_date" style="color: black;">November 13, 2017</span>
                      </div>
                      
                      </div>                   
                 </li>                 
                   <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=185" target="_blank">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/1-3234121385.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=185" target="_blank">Swimming Gala 2017</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>      
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=159">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=159">PREP SCHOOL INTER HOUSE SWIMMING CHAMPIONSHIP</a>
                       <span class="feed_date" style="color: black;">Results of Day 2</span>
                      </div>
                      
                      </div>                   
                 </li>
                  
                  
                
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=161">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/2-5140874776.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=161">Social Gathering for Lower Primary Parents</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                  
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=160">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/3-2349637141.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=160">Academics Prize Day 2017</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=158">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=158">PREP SCHOOL INTER HOUSE SWIMMING CHAMPIONSHIP</a>
                       <span class="feed_date" style="color: black;">Results of Day 1</span>
                      </div>
                      
                      </div>                   
                 </li> 
                  
                  <?php /*?><li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=140">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=140">Major G.D. Langlands’ 100<sup><span style="text-transform:lowercase;">th</span></sup> Birthday Celebration</a>
                       <span class="feed_date"></span>
                      </div>
                      
                      </div>                   
                 </li><?php */?>
                    
                 
                 
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=141">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=141">Donation Drive for Langlands’ School and College</a>
                       <span class="feed_date"></span>
                      </div>
                      
                      </div>                   
                 </li>
                 
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="summer-sports-camps-24072017.php">
                          	<img class="media-object" src="./galimages/summarcamps-24072017/small/1.jpg" alt="SUMMER SPORTS CAMPS IN FULL SWING AT AITCHISON COLLEGE">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="summer-sports-camps-24072017.php">SUMMER SPORTS CAMPS IN FULL SWING AT AITCHISON COLLEGE</a>
                           <!--<span class="feed_date" style="color:rgba(47,44,44,1.00);">From 21<sup>st</sup> June to 25<sup>th</sup> June, 2017</span>-->
                        </div>
                      </div>
                  </li>  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="cross-country-races-08022019.php">
                          <img class="media-object" src="galimages/cross-country-race-08022019/2.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href= "cross-country-races-08022019.php">Aitchison Cross Country Races Engage the College</a> 
                        </div>
                      </div>
                  </li>  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="national-junior-grass-court-championships.php">
                          <img class="media-object" src="img/tp4.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href= "national-junior-grass-court-championships.php">National Junior Grass Court Championships</a> 7th to 11th February, 2017</div>
                      </div>
                  </li>
                    
                    
                    
                    
                    
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="./alumni/events.php" target="_blank">
                          <img class="media-object" src="alumni/assets/images/upcomingevents/acoba-ports-fixtures-main.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="./alumni/events.php" target="_blank">ACOBA Sports Fixtures</a>
                           <span class="feed_date">February, 2017</span>
                        </div>
                      </div>
                  </li>
                
                </ul>                
                <!--<a class="see_all" href="#">See All</a>-->
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
    
    <script type="text/javascript" src="js/quickpager.jquery.js"></script>
   
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


$(document).ready(function() {
	
	
	$("ul.news_tab").quickPager();
	
});

</script>

  </body>
</html>
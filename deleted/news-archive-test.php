<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=0;
	if(!empty($_GET['p_id'])){
		if(strlen(trim($_GET['p_id'])) != strlen(intval(trim($_GET['p_id'])))){
			header("location: news-archive-test.php");
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
     <title>Aitchison College:- News Archive</title>
	
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
    <!--<link href="css/pagination.css" rel="stylesheet" type="text/css">-->
    <!--<link href="https://st3ph.github.io/jquery.easyPaginate/css/jquery.snippet.min.css" rel="stylesheet" type="text/css">-->
    
	
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
          	<div class="newsfeed_area wow fadeInRight">
            
            <!-- Tab panes -->
            <div>
            	<h2 class="titlewithoutborder colorblue hrplace border-blue" style="font-size: 26px; position: relative; display: inline-block;">News Archive</h2>
              <br/><br/>
              
              <section>
              <div class="tab-pane fade in active" id="newsContainer"></div>
              </section>
              <!-- Start news tab content -->
              
              <div class="tab-pane fade in active" id="news2" style="display:none;">
              	<ul id="newsList1" class="news_tab">
                 <li>
                   <p>Test</p>
                 </li>
                 <li>
                   <p>Test</p>
                 </li>
                </ul>
              </div>
              
              <div class="tab-pane fade in active" id="news">
                <ul id="newsList" class="news_tab">
                  
                <li>
                   <div class="media">
                      
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=322">
                          <img class="media-object" src="./img/cricket-tour-to-england.png" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                          <a href="newsandevents-testlink.php?id=322">Aitchison defeats Marlborough College and Eton College in two exceptional displays of cricket.</a>
                          <span class="feed_date" style="color: black;">Cricket reporter.</span>
                        </div> 
                   </div>                   
                 </li>
                
                
                <li>
                      <div class="media">
                      
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=319">
                          <img class="media-object" src="./img/cricket-tour-to-england.png" alt="img">
                          </a>
                          </div>
                          <div class="media-body">
                           <a href="newsandevents-testlink.php?id=319">NEWS UPDATE CRICKET TOUR OF ENGLAND</a>
                           <!--<span class="feed_date" style="color: black;"></span>-->
                          </div>
                      	
                      </div>
                </li>  
                <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="alumni/news-new.php?id=318">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                          </a>
                          </div>
                          <div class="media-body">
                           <a href="alumni/news-new.php?id=318">SWIMMING PROGRAMME FOR OLD BOYS</a>
                           <!--<span class="feed_date" style="color: black;"></span>-->
                          </div>
                      
                      </div>                   
                 </li>
                 
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="./school_doc/cricket-tour-to-england-29052018-f.pdf" target="_blank">
                      <img class="media-object" src="./img/cricket-tour-to-england.png" alt="img">
                      </a>
                    </div>
                    <div class="media-body">
                      <a href="./school_doc/cricket-tour-to-england-01062018.pdf" target="_blank">I<sup>st</sup> Cricket Squad to Tour England, June 19-30, 2018</a>
                      <!--<span class="feed_date" style="color: #010101;"></span>-->
                    </div>
                  </div>
                </li>
                 <li>
                 <?php
					//intimate_archive("2018-04-11", "https://aitchison.edu.pk/newsandevents-testlink.php?id=300", 30);
				?>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-testlink.php?id=312">
                      <img class="media-object" src="./newsletter/news/images/ar-2-1016242019.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-testlink.php?id=312">INAUGURATION OF ARIF HUSAIN COMMON ROOM IN SAIGOL HOUSE</a>
                      <!--<span class="feed_date" style="color: #010101;"></span>-->
                    </div>
                  </div>
                </li>
                 <li>
                 <?php
					//intimate_archive("2018-04-11", "https://aitchison.edu.pk/newsandevents-testlink.php?id=300", 30);
				?>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-testlink.php?id=300">
                      <img class="media-object" src="./newsletter/news/images/1-3740010480.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-testlink.php?id=300">AMERICAN CONSUL GENERAL VISITS AITCHISON COLLEGE</a>
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
                      <a class="news_img" href="newsandevents-testlink.php?id=275" target="_blank">
                      <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/4-2398941451.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-testlink.php?id=275" target="_blank">AC vs ACOBA Cricket Match</a>
                      <span class="feed_date" style="color: #010101;">February 18, 2018</span>
                    </div>
                  </div>
                </li>
                
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-testlink.php?id=274" target="_blank">
                      <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/1-2759202877.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-testlink.php?id=274" target="_blank">AITCHISON COLLEGE WINS AGAINST SHOAIB CRICKET ACADEMY</a>
                      <!--<span class="feed_date" style="color: #010101;"></span>-->
                    </div>
                  </div>
                </li>
                
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-testlink.php?id=269" target="_blank">
                      <img class="media-object" src="./img/nne_logo.png" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-testlink.php?id=269" target="_blank">Player of the Series on Sri Lankan Tour</a>
                      <!--<span class="feed_date" style="color: #010101;"></span>-->
                    </div>
                  </div>
                </li>
                
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-testlink.php?id=268" target="_blank">
                      <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/2-1726511181.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-testlink.php?id=268" target="_blank">Aitchison College VS Gateway College Sri Lanka</a>
                      <span class="feed_date" style="color: #010101;">Football Match</span>
                    </div>
                  </div>                   
                </li>
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-testlink.php?id=264" target="_blank">
                      <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/2-5461089806.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-testlink.php?id=264" target="_blank">AITCHISON COLLEGE DEFEATS G.C. UNIVERSITY</a>
                      <span class="feed_date" style="color: #010101;">Football Match</span>
                    </div>
                  </div>                   
                </li>
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-testlink.php?id=262" target="_blank">
                      <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/4-2376239174.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-testlink.php?id=262" target="_blank">INTER-HOUSE HOCKEY COMPETITION - 2017</a>
                      <span class="feed_date" style="color: #010101;">Hockey Match</span>
                    </div>
                  </div>                   
                </li>
                 
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-testlink.php?id=265" target="_blank">
                      <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/3-941191622.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-testlink.php?id=265" target="_blank">AITCHISON COLLEGE DEFEATS LAHORE SCHOOL OF ECONOMICS</a>
                      <span class="feed_date" style="color: #010101;">Basketball Match</span>
                    </div>
                  </div>                   
                </li>
                
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="ac-principal-news.php?id=261" target="_blank">
                      <img class="media-object" src="./img/nne_logo.png" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="ac-principal-news.php?id=261" target="_blank">WORK TO START ON THE ‘OLD BUIDLING’</a>
                      <!--<span class="feed_date" style="color: #010101;"></span>-->
                    </div>
                  </div>                   
                </li>
                <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=259">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/1-8550796490.jpg" alt="img">
                        </a>
                          </div>
                          <div class="media-body">
                           <a href="newsandevents-testlink.php?id=259">Tennis Ranking Championship 2018</a>
                           <!--<span class="feed_date" style="color: black;"></span>-->
                          </div>
                      
                      </div>                   
                 </li>
                 
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=258">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/1-7902909400.jpg" alt="img">
                        </a>
                          </div>
                          <div class="media-body">
                           <a href="newsandevents-testlink.php?id=258">The Linguistic Day</a>
                           <!--<span class="feed_date" style="color: black;"></span>-->
                          </div>
                      
                      </div>                   
                 </li>
                 
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=257">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                          </div>
                          <div class="media-body">
                           <a href="newsandevents-testlink.php?id=257">Aitchison U-16 Defeats Shoaib Cricket Academy</a>
                           <!--<span class="feed_date" style="color: black;"></span>-->
                          </div>
                      
                      </div>                   
                 </li>
                
                
                <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=250">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/9-3773155477.jpg" alt="img">
                        </a>
                          </div>
                          <div class="media-body">
                           <a href="newsandevents-testlink.php?id=250">TOUR TO CHINA 2017-2018</a>
                           <!--<span class="feed_date" style="color: black;"></span>-->
                          </div>
                      
                      </div>                   
                 </li>
                 
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=256">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/1-7169103380.jpg" alt="img">
                        </a>
                          </div>
                          <div class="media-body">
                           <a href="newsandevents-testlink.php?id=256">AC 1st XI Team Defeats F.C. College</a>
                           <!--<span class="feed_date" style="color: black;"></span>-->
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
                          <a class="news_img" href="newsandevents-testlink.php?id=252">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/2-8351251585.jpg" alt="img">
                        </a>
                          </div>
                          <div class="media-body">
                           <a href="newsandevents-testlink.php?id=252">Aitchison College U-16 Cricket Team Tour to Dubai</a>
                           <?php /*?><span class="feed_date" style="color: black;">&nbsp;</span><?php */?>
                          </div>
                      
                      </div>                   
                 </li>
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=245">
                          <img class="media-object" src="./img/245-report.jpg" alt="img">
                        </a>
                          </div>
                          <div class="media-body">
                           <a href="newsandevents-testlink.php?id=245">REPORT ON THE OLD BUILDING</a>
                           <?php /*?><span class="feed_date" style="color: black;">&nbsp;</span><?php */?>
                          </div>
                      
                      </div>                   
                 </li>
                 <li><?php
					//intimate_archive("2018-01-13", "https://aitchison.edu.pk/newsandevents-testlink.php?id=246", 60);
				?>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=246">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                          </div>
                          <div class="media-body">
                           <a href="newsandevents-testlink.php?id=246">LUMS PSIFI</a>
                           <span class="feed_date" style="color: black;">Congratulate Aitchison College on being crowned the victors of PSIFI IX</span>
                          </div>
                      
                      </div>                   
                 </li>
                 
                
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=244">
                          <img class="media-object" src="./newsletter/news/images/6-2738123661.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=244">AITCHISON COLLEGE WINS CRICKET MATCH AGAINST SERVICES ACADEMY </a>
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
                          <a class="news_img" href="ac-admissions-info-2018.php">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                          </div>
                          <div class="media-body">
                           <a href="ac-admissions-info-2018.php">AITCHISON ADMISSIONS 2018</a>
                           <!--<span class="feed_date" style="color: black;"></span>-->
                          </div>
                      
                      </div>                   
                 </li>
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=255">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                          </div>
                          <div class="media-body">
                           <a href="newsandevents-testlink.php?id=255">OBITUARY</a>
                           <span class="feed_date" style="color: black;">MRS. SURAIYA SHAUKAT BAIG PASSES AWAY&nbsp;</span>
                          </div>
                      
                      </div>                   
                 </li>
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=239">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=239">APPOINTMENT OF VICE PRINCIPAL (ACADEMIC) </a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=237">
                          <img class="media-object" src="./newsletter/news/images/8-8246067371.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=237">AC U-16 TEAM VS UNIQUE SCHOOL SYSTEM</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                 
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=234">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/7-6575881009.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                          <a href="newsandevents-testlink.php?id=234">HOCKEY MATCH (THURSDAY - DEC 21, 2017) </a>
                          <?php /*?><span class="feed_date" style="color: black;">November 13, 2017</span><?php */?>
                        </div>  
                      </div>                   
                  </li>	
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=233">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/11-4019781444.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                          <a href="newsandevents-testlink.php?id=233">BASKETBALL MATCH (THURSDAY - DEC 21, 2017)</a>
                          <?php /*?><span class="feed_date" style="color: black;">November 13, 2017</span><?php */?>
                        </div>  
                      </div>                   
                  </li>	
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=231">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/1-6631890526.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                          <a href="newsandevents-testlink.php?id=231">SENIOR BOARDERS PLAY FLOOD LIGHT MATCHES</a>
                          <?php /*?><span class="feed_date" style="color: black;">November 13, 2017</span><?php */?>
                        </div>  
                      </div>                   
                  </li>	
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=224">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/7-9169214563.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                          <a href="newsandevents-testlink.php?id=224">INTER-SCHOOL HOCKEY TOURNAMENT AT NATIONAL HOCKEY STADIUM, LAHORE</a>
                          <?php /*?><span class="feed_date" style="color: black;">November 13, 2017</span><?php */?>
                        </div>  
                      </div>                   
                  </li>	
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=229">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/8-7611000142.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                          <a href="newsandevents-testlink.php?id=229">INTER-HOUSE BASKETBALL COMPETITION, SENIOR SCHOOL</a>
                          <?php /*?><span class="feed_date" style="color: black;">November 13, 2017</span><?php */?>
                        </div>  
                      </div>                   
                  </li>	
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=227">
                          <img class="media-object" src="https://aitchison.edu.pk/img/horticulture-20122017.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                          <a href="newsandevents-testlink.php?id=227">Aitchison College's 1<sup>st</sup> Place in Lahore Horticulture Show</a>
                          <?php /*?><span class="feed_date" style="color: black;">November 13, 2017</span><?php */?>
                        </div>  
                      </div>                   
                  </li>	
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=226">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/5-2655436908.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                          <a href="newsandevents-testlink.php?id=226">AITCHISON RUGBY LEARNING THE SKILLS AND MAKING STEPS TOWARD COMPETITION</a>
                          <?php /*?><span class="feed_date" style="color: black;">November 13, 2017</span><?php */?>
                        </div>  
                      </div>                   
                  </li>	
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=225">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/1-3977951249.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                          <a href="newsandevents-testlink.php?id=225">AITCHISON COLLEGE 1<sup>ST</sup> XI VS VETERAN (LAHORE WHITES)</a>
                          <?php /*?><span class="feed_date" style="color: black;">November 13, 2017</span><?php */?>
                        </div>  
                      </div>                   
                  </li>	
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=223">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/1-8888344154.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                          <a href="newsandevents-testlink.php?id=223">Upgradation of Academic Facilities</a>
                          <?php /*?><span class="feed_date" style="color: black;">November 13, 2017</span><?php */?>
                        </div>  
                      </div>                   
                  </li>
                    
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=222">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/5-2602092642.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                          <a href="newsandevents-testlink.php?id=222">Saigol House wins their Prep Hockey Final against Khalid House</a>
                          <?php /*?><span class="feed_date" style="color: black;">November 13, 2017</span><?php */?>
                        </div>  
                      </div>                   
                    </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=221">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/7-7151021161.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                          <a href="newsandevents-testlink.php?id=221">A cricket match between Aitchison Staff and ACOBA Committee</a>
                          <?php /*?><span class="feed_date" style="color: black;">November 13, 2017</span><?php */?>
                        </div>  
                      </div>                   
                    </li>
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=220">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/6-6308775204.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                          <a href="newsandevents-testlink.php?id=220">JUNIORS LEARN WITH THE HARD BALL</a>
                          <?php /*?><span class="feed_date" style="color: black;">November 13, 2017</span><?php */?>
                        </div>  
                      </div>                   
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=219">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/2-5803149375.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                          <a href="newsandevents-testlink.php?id=219">PREP TAPE BALL IN FULL FLIGHT</a>
                          <?php /*?><span class="feed_date" style="color: black;">November 13, 2017</span><?php */?>
                        </div>  
                      </div>                   
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=218">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/5-8886954099.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                          <a href="newsandevents-testlink.php?id=218">JUNIOR TAPE BALL CRICKET IS A HIT!</a>
                          <?php /*?><span class="feed_date" style="color: black;">November 13, 2017</span><?php */?>
                        </div>  
                      </div>                   
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=217">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/8-5053036971.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                          <a href="newsandevents-testlink.php?id=217">BAHAWALPUR HOUSE TRIUMPHS OVER A BRAVE SALAHUDDIN HOUSE</a>
                          <?php /*?><span class="feed_date" style="color: black;">November 13, 2017</span><?php */?>
                        </div>  
                      </div>                   
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=216">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/2-6098195989.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                          <a href="newsandevents-testlink.php?id=216">EXCITING JUNIOR SCHOOL FOOTBALLERS</a>
                          <?php /*?><span class="feed_date" style="color: black;">November 13, 2017</span><?php */?>
                        </div>  
                      </div>                   
                    </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=215">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/8-5908038038.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=215">ALUMNI REUNION AND TOUR </a>
                       <?php /*?><span class="feed_date" style="color: black;">November 13, 2017</span><?php */?>
                      </div>
                      
                      </div>                   
                 </li>
                 
                <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=214">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/1-686318604.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=214">K6 CRICKET MATCHES 18 NOV 2017</a>
                       <?php /*?><span class="feed_date" style="color: black;">November 13, 2017</span><?php */?>
                      </div>
                      
                      </div>                   
                 </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=210">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/2-1113325031.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=210">PRINCIPAL INTRODUCES AITCHISON ARCHIVES TO MAJOR GENERAL MOHAMMAD AAMER</a>
                       <?php /*?><span class="feed_date" style="color: black;">November 13, 2017</span><?php */?>
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
                          <a class="news_img" href="newsandevents-testlink.php?id=205">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=205">AITCHISON BOYS SET NEW NATIONAL RECORDS</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                 
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="inter-school-scrabble-13112017.php">
                          <img class="media-object" src="./newsletter/news/images/7-512779206.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="inter-school-scrabble-13112017.php">INTER SCHOOL SCRABBLE CHAMPIONSHIP</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                  
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=203">
                          <img class="media-object" src="./newsletter/news/images/4-5578944324.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=203">ALL PAKISTAN RUN SHOOT CHAMPIONSHIP</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                 
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=199">
                          <img class="media-object" src="./newsletter/news/images/8-561323352.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=199">TENNIS TEAM WINNERS</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=198">
                          <img class="media-object" src="./img/small-newsandevents/sm-198-06112017.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=198">PRINCIPAL THANKS LAWRENCE COLLEGE </a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=197">
                          <img class="media-object" src="./img/small-newsandevents/sm-197-06112017.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=197">COLLEGE SPIRIT</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li> 
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=192">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=192">AITCHISONIANS SELECTED IN NATIONAL TOUCH RUGBY </a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=191">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/24-9288202500.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=191">PCB TEAM VISIT AITCHISON COLLEGE </a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=190">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/4-2169698518.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=190">GARDEN AND GROUNDS</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=186" target="_blank">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/8-2111979164.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=186" target="_blank">SOCIAL GATHERING FOR UPPER PRIMARY PARENTS </a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
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
                          <a class="news_img" href="newsandevents-testlink.php?id=184" target="_blank">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/metacognition-23-oct-1.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=184" target="_blank">METACOGNITION OCTOBER 23, 2017</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li> 
                  
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=179" target="_blank">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/1-446238704.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=179" target="_blank">INTER HOUSE ESSAY HAND WRITING 2017</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li> 
                  
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=182" target="_blank">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/7-8714841301.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=182" target="_blank">METACOGNITION</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>  
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=178" target="_blank">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/9-5335395550.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=178" target="_blank">AITCHISON COLLEGE VS CHAND BAGH SCHOOL</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li> 
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=177" target="_blank">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/5-6321093430.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=177" target="_blank">AC VS ABDUL QADIR CRICKET ACADEMY</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=176" target="_blank">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/2-5935733085.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=176" target="_blank">COLTS TEAM VS M2/C1 BOYS: COLTS TEAM WINS BY 36 RUNS</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=180" target="_blank">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/2-5542320753.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=180" target="_blank">RUGBY AC VS WARRIORS</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                
                <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=174" target="_blank">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/11-319098010.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=174" target="_blank">MAULANA ALTAF HUSSAIN HALI CHALLENGE CUP 2017</a>
                       <span class="feed_date" style="color: black;">12<sup>th</sup> October, 2017</span>
                      </div>
                      
                      </div>                   
                 </li>
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=170" target="_blank">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/14-4811060614.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=170" target="_blank">URDU POET NIGHT 2017</a>
                       <span class="feed_date" style="color: black;">6<sup>th</sup> October, 2017</span>
                      </div>
                      
                      </div>                   
                 </li>
                  
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="./alumni/news-testlink.php?id=168" target="_blank">
                          <img class="media-object" src="./newsletter/news/images/5-4071036260.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="./alumni/news-testlink.php?id=168" target="_blank">Talk By Salman Ahmad</a>
                       <?php /*?><span class="feed_date" style="color: black;">22<sup>nd</sup> September, 2017</span><?php */?>
                      </div>
                      
                      </div>                   
                 </li> 
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=167">
                          <img class="media-object" src="https://www.aitchison.edu.pk/newsletter/news/images/3-7832367280.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=167">BIRD WATCHING EXCURSION</a>
                       <span class="feed_date" style="color: black;">22<sup>nd</sup> September, 2017</span>
                      </div>
                      
                      </div>                   
                 </li>
                 
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=166">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/3-6583169815.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=166">GODLEY HOUSE WINS INTER HOUSE WATER POLO COMPETITION</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                 
                 
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=165">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/2---copy-833519892.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=165">AITCHISON COLLEGE WINS THE SWIMMING CARNIVAL - 2017</a>
                       <span class="feed_date" style="color: black;">8<sup>th</sup> October, 2017</span>
                      </div>
                      
                      </div>                   
                 </li>
                 
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=164">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/19-5113086733.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=164">Aitchison College gains a rare victory over ACOBA</a>
                       <span class="feed_date" style="color: black;">8<sup>th</sup> October, 2017</span>
                      </div>
                      
                      </div>                   
                 </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=163">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/2-4969892133.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=163">AITCHISON UNDER 16 VS ABDUL QADIR ACADEMY</a>
                       <span class="feed_date" style="color: black;">Saturday Match</span>
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
                          <a class="news_img" href="http://aitchisonfest.org" target="_blank">
                          <img class="media-object" src="./img/acfest-logo_2minia.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="http://aitchisonfest.org" target="_blank">Art and Performing Arts Fest 2017</a>
                       <span class="feed_date" style="color: black;">From the 27<sup>th</sup> to 29<sup>th</sup> of October</span>
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
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=156">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=156">CRICKET MATCH - AITCHISON COLLEGE U-16 VS LAHORE SCHOOL OF ECONOMICS</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=155">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=155">PARTICIPATION IN EXTERNAL MUNS</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                 
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=154">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/1-5575765832.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=154">STUDENTS ENJOY PLANTING ACTIVITY</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                 
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=153">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/1-1380271972.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=153">SCIENCE WINS</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                 
                 
                 <!-- ############################################################################## -->
                 
                 
                 
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=149">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/4-1450989185.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=149">NEW GWYN BOARDERS' BBQ DAY</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                 
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=148">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=148">HEAD OF SPORTS SENIOR SCHOOL ELECTED AS A GENERAL SECRETARY OF PAKISTAN SCHOOL SPORTS OLYMPIC</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=145">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/mit-launch-club-7615482825.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=145">AITCHISON COLLEGE INITIATES THE MIT LAUNCH CLUB</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                 
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=139">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/1-2601641914.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=139">STOP PRESS CRICKET</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                 
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=138">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=138">AITCHISON COLLEGE ONE STEP CLOSER TO INTERNATIONAL MATHEMATICAL OLYMPIAD</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="aitchison-pride-07092017.php">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="aitchison-pride-07092017.php">Another Pride for Aitchison College </a>
                       <span class="feed_date" style="color: black;">Rayyan Adeel Participated in Junior World Scrabble Championship 2017</span>
                      </div>
                      
                      </div>                   
                 </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="apsc_28082017.php">
                          	<img class="media-object" src="./img/apsc_icon_28082017.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="apsc_28082017.php">AITCHISON COLLEGE SWIMMING ACADEMY GETS RESULTS</a>
                           <!--<span class="feed_date" style="color:rgba(47,44,44,1.00);"></span>-->
                        </div>
                      </div>
                  </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=131">
                          	<img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/tariq-3-(custom)-1334875272.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="newsandevents-testlink.php?id=131">Khawaja Ahmad Tariq Rahim, a famous old boy, addresses our prefects</a>
                           <!--<span class="feed_date" style="color:rgba(47,44,44,1.00);"></span>-->
                        </div>
                      </div>
                  </li>
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="international-young-physicists-tournament-17082017.php">
                          	<img class="media-object" src="./img/ipt.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="international-young-physicists-tournament-17082017.php">Principal Thomson acknowledges High Achieving Aitchisonians</a>
                           <!--<span class="feed_date" style="color:rgba(47,44,44,1.00);"></span>-->
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
                          <a class="news_img" href="asian-biathle-triathle-championship-24062017.php">
                          	<img class="media-object" src="./galimages/asian-biathle-triathle-championship/1.jpg" alt="AITCHISON SWIMMERS WIN SILVER AND BRONZE">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="asian-biathle-triathle-championship-24062017.php">AITCHISON SWIMMERS WIN SILVER AND BRONZE AT ASIAN BIATHLE TRIATHLE CHAMPIONSHIPS</a>
                           <!--<span class="feed_date" style="color:rgba(47,44,44,1.00);">From 21<sup>st</sup> June to 25<sup>th</sup> June, 2017</span>-->
                        </div>
                      </div>
                  </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="championship-kazakstan-14062017.php">
                          	<img class="media-object" src="./img/pageimages/championship-kazakstan-14062017.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="championship-kazakstan-14062017.php">Aitchison swimmers participate in Asian Biathle Championship in Kazakhstan</a>
                           <span class="feed_date" style="color:rgba(47,44,44,1.00);">From 21<sup>st</sup> June to 25<sup>th</sup> June, 2017</span>
                        </div>
                      </div>
                  </li>
                  
                
                <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="pypt17-08062017.php">
                          	<img class="media-object" src="./img/pageimages/pypt17-08062017.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="pypt17-08062017.php">Aitchison wins first Pakistan Young Physicists Tournament</a>
                           <span class="feed_date" style="color:rgba(47,44,44,1.00);">Haseeb Ejaz has been selected to represent Pakistan in the Physics World Cup Competition</span>
                        </div>
                      </div>
                  </li>
                  
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="ac-kangaroo-mathematics-contest-03062017.php">
                          	<img class="media-object" src="./img/nne_logo.png" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="ac-kangaroo-mathematics-contest-03062017.php">INTERNATIONAL KANGAROO MATHEMATICS CONTEST</a>
                           <span class="feed_date" style="color:rgba(47,44,44,1.00);">Mathematics Contest was held on March 16, 2017</span>
                        </div>
                      </div>
                  </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="oxford-summer-academy-2017-12042017.php" target="_blank">
                          	<img class="media-object" src="./img/oxford-summer-academy.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="oxford-summer-academy-2017-12042017.php" target="_blank">Oxford Summer Academy 2017</a>
                           <span class="feed_date" style="color:rgba(47,44,44,1.00);">25<sup>th</sup> June - 22<sup>nd</sup> July, held at the University of Oxford</span>
                        </div>
                      </div>
                  </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="cricket-tour-to-uk-03042017.php">
                          	<img class="media-object" src="./img/nne_logo.png" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="cricket-tour-to-uk-03042017.php">AITCHISON CRICKET TO TOUR THE UK IN 2018</a>
                           <!--<span class="feed_date">04<sup>th</sup> April, 2017</span>-->
                        </div>
                      </div>
                  </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="cambridge-delegation-31032017.php">
                          	<img class="media-object" src="./img/pageimages/cambridge-success-small-31032017.png" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="cambridge-delegation-31032017.php">A Cambridge Delegation Visits Aitchison College</a>
                           <span class="feed_date">31<sup>st</sup> March, 2017</span>
                        </div>
                      </div>
                  </li>
                  
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="unsw-gold-medals-28032017.php">
                          	<img class="media-object" src="./img/nne_logo.png" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="unsw-gold-medals-28032017.php">Aitchisonians win UNSW gold medals</a>
                          <!-- <span class="feed_date">23<sup>rd</sup> March, 2017</span>-->
                        </div>
                      </div>
                  </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="pakistan-day-24032017.php">
                          	<img class="media-object" src="./galimages/pakistan-day-24032017/small/2.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="pakistan-day-24032017.php">AITCHISON COLLEGE CELEBRATES PAKISTAN DAY</a>
                           <span class="feed_date">23<sup>rd</sup> March, 2017</span>
                        </div>
                      </div>
                  </li>
                  
                  
                  <!--<li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="ac-assessment-system-28022017.php">
                          	<img class="media-object" src="./img/nne_logo.png" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="ac-assessment-system-28022017.php">AITCHISON LAUNCHES FIRST ONLINE ASSESSMENT SYSTEM</a>
                           <a href="ac-assessment-system-28022017.php" style="color:#747474; font-size:12px; text-transform:none;">Online System provides immediate feedback...... <span style="color:#4D6CFF;">read more</span></a>
                        </div>
                      </div>
                  </li>-->
                  
                  <?php /*?><li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="ac-iftikhar-ahmed-malik-14032017.php">
                          	<img class="media-object" src="./img/nne_logo.png" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="ac-iftikhar-ahmed-malik-14032017.php">OBITUARY</a>
                           <span class="feed_date" style="color: #0B0E27;"><a href="ac-iftikhar-ahmed-malik-14032017.php"><strong>MR. IFTIKHAR MALIK, FORMER VICE PRINCIPAL PASSES AWAY</strong></a></span><br>
                           <span class="feed_date">13<sup>th</sup> March, 2017</span>
                        </div>
                      </div>
                  </li><?php */?>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="ac-cambridge-2016-25022017.php">
                          	<img class="media-object" src="./galimages/celebrates-academic-achievements/small/1.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="ac-cambridge-2016-25022017.php">Aitchison celebrates academic achievements</a>
                           <span class="feed_date">3<sup>rd</sup> March, 2017</span>
                        </div>
                      </div>
                  </li>
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="modern-cricket-aitchison-03032017.php">
                          <img class="media-object" src="./galimages/modern-cricket-aitchison-03032017/small/1.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="modern-cricket-aitchison-03032017.php">Principal Opens Era of Modern Cricket at Aitchison College</a>
                           <span class="feed_date">2<sup>nd</sup> March, 2017 </span>
                        </div>
                      </div>
                  </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="arts-and-science-exhibition-2017-21032017.php">
                          	<img class="media-object" src="./galimages/arts-science-exhibition-21032017/small/8.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="arts-and-science-exhibition-2017-21032017.php">ARTS AND SCIENCE EXHIBITION 2017</a>
                           <span class="feed_date">10<sup>th</sup> February, 2017</span>
                        </div>
                      </div>
                  </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="js-annual-plays-2017-27012017.php">
                          <img class="media-object" src="./galimages/jsplays28022017/small/4.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="js-annual-plays-2017-27012017.php">JUNIOR SCHOOL ANNUAL PLAYS, 2017</a>
                           <span class="feed_date">27<sup>th</sup> January, 2017 </span>
                        </div>
                      </div>
                  </li>
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="js-cross-country-2017-28022017.php">
                          <img class="media-object" src="./galimages/jscrosscountry28022017/small/4.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="js-cross-country-2017-28022017.php">JUNIOR SCHOOL CROSS COUNTRY RACES</a>
                           
                        </div>
                      </div>
                  </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="ac-bags-5awards-at-Harvard-08022017.php">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="ac-bags-5awards-at-Harvard-08022017.php" target="_blank">Aitchison College bags 5 awards at Harvard MUN Boston</a>
                           <span class="feed_date">26<sup>th</sup> to 29<sup>th</sup> January, 2017 </span>
                        </div>
                      </div>
                  </li>
                     

                  <li>
                     <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="ac-tentpegging-08022017.php" target="_blank">
                          <img class="media-object" src="img/tp5.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                        <a href="ac-tentpegging-08022017.php" target="_blank">Aitchison College Tent Pegging Team rides to gain selection</a></div>
                      </div>
                  </li> 
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="./alumni/session-with-omer-saeed-27012017.php" target="_blank">
                          <img class="media-object" src="alumni/img/alumnusinfocus/omersaeed-27012017/omarsaeed.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="./alumni/session-with-omer-saeed-27012017.php" target="_blank">Guest Speaker Session with Mr. Omar Saeed</a>
                           <span class="feed_date">January 27, 2017</span>
                        </div>
                      </div>
                  </li>
                  
                    
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="french-night-22032017.php">
                          	<img class="media-object" src="./galimages/soiree-francaise-22032017/small/2.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="french-night-22032017.php">THE SOIRÉE FRANÇAISE</a>
                           <span class="feed_date">14<sup>th</sup> January, 2017</span>
                        </div>
                      </div>
                  </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="rab-pavilion22122016.php">
                          <img class="media-object" src="galimages/re-opening-rab-pavilion22122016/small/8.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="rab-pavilion22122016.php">The Re-opening of the Rab Pavilion</a>
                           <span class="feed_date">December 22, 2016</span>
                        </div>
                      </div>
                  </li>
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="robinson-challenge-cup-02122016.php">
                          <img class="media-object" src="galimages/robinson-challenge-cup-02122016/small/5.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="robinson-challenge-cup-02122016.php">Robinson Challenge Cup for Cross Country</a>
                           <span class="feed_date">December 02, 2016</span>
                        </div>
                      </div>
                  </li>
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="shakespeare-club-skit-01122016.php">
                          <img class="media-object" src="galimages/shakespeare-club-skit-01122016/small/1.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="shakespeare-club-skit-01122016.php">SHAKESPEARE CLUB SKIT</a>
                           <span class="feed_date">December 01, 2016</span>
                        </div>
                      </div>
                  </li>                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="ac-faizan-aslam-soofi-30112016.php">
                          <img class="media-object" src="img/pageimages/faizan-aslam-soofi-30112016.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="ac-faizan-aslam-soofi-30112016.php">AITCHISONIAN RECEIVES INTERNATIONAL RECOGNITION FOR HIS NOVEL</a>
                           <?php /*?><span class="feed_date">November 30, 2016</span><?php */?>
                        </div>
                      </div>
                  </li>
               	  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="duke-of-edinburg-28112016.php">
                          <img class="media-object" src="images/dukeofedinburgh-small.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="duke-of-edinburg-28112016.php">AITCHISON'S FIRST STUDENTS IN DUKE OF EDINBURGH INTERNATIONAL AWARD</a>
                           <span class="feed_date">November 28, 2016</span>
                        </div>
                      </div>
                  </li>                 
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="alumni/careers-evening-2016-29112016.php" target="_blank">
                          <img class="media-object" src="alumni/assets/images/careersevening2016-29112016/small/2.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="alumni/careers-evening-2016-29112016.php" target="_blank">OLD BOYS GIVE CAREER AND LIFE ADVICE TO STUDENTS</a>
                           <span class="feed_date">November 25, 2016</span>
                        </div>
                      </div>
                  </li>
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="k4andk5-social-gathering-19112016.php">
                          <img class="media-object" src="galimages/k4andk5-social-gathering-19112016/small/1.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="k4andk5-social-gathering-19112016.php">SOCIAL GATHERING K4’S &amp; K5’S 2016</a>
                           <span class="feed_date">November 19, 2016</span>
                        </div>
                      </div>
                  </li>
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="js-perfects-selection-2016.php">
                          <img class="media-object" src="galimages/js-prefect-selection-2016/small/1.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="js-perfects-selection-2016.php">PREFECTS’ SELECTION AT JUNIOR SCHOOL 2016 - 17</a>
                           <span class="feed_date">November 11, 2016</span>
                        </div>
                      </div>
                  </li>                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="swimming-championship-07112016.php">
                          <img class="media-object" src="galimages/swimming-championship-07112016/small/3.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="swimming-championship-07112016.php">Remarkable performance by Aitchison College swimmers</a>
                           <span class="feed_date">November 07, 2016</span>
                        </div>
                      </div>
                  </li> 
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="nawab-sir-sadiq-challenge-cup-07112016.php">
                          <img class="media-object" src="galimages/nawab-sir-sadiq-challenge-cup-07112016/small/5.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="nawab-sir-sadiq-challenge-cup-07112016.php">NAWAB SIR SADIQ CHALLENGE CUP FOR CRICKET</a>
                           <span class="feed_date">November 07, 2016</span>
                        </div>
                      </div>
                  </li>
                 
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="goa-06112016.php">
                          <img class="media-object" src="galimages/goa-06112016/small/1.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="goa-06112016.php">Gentlemen Of Aitchison Show, 2016</a>
                           <span class="feed_date">November 06, 2016</span>
                        </div>
                      </div>
                  </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="alumni/session-with-salman-akram-raja28102016.php">
                          <img class="media-object" src="alumni/img/alumnusinfocus/salmanakramraja/2.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="alumni/session-with-salman-akram-raja28102016.php">Guest Speaker Session with Salman Akram Raja</a>
                           <span class="feed_date">October 28, 2016</span>
                        </div>
                      
                      </div>
                  </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="shakespeare-club-workshop-22102016.php">
                          <img class="media-object" src="galimages/shakespeare-club-workshop-22102016/small/2.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="shakespeare-club-workshop-22102016.php">SHAKESPEARE CLUB WORKSHOP 2016-17</a>
                           <span class="feed_date">October 22, 2016</span>
                        </div>
                      
                      </div>
                  </li>
                  <?php
					//}if(intval($_GET['p_id'])==5){
				  ?>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="uipm-biathle-triathle-competition-102016.php">
                          <img class="media-object" src="galimages/uipm-102016/small/3.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="uipm-biathle-triathle-competition-102016.php">Aitchisonians win 5 medals in International Championships</a>
                       <span class="feed_date">October 26, 2016</span>
                      </div>
                      
                      </div>
                  </li>
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="ac-precent_newsletter.php?id=6094">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="ac-precent_newsletter.php?id=6094">AITCHISON TO OFFER DUKE OF EDINBURGH INTERNATIONAL AWARD</a>
                       <span class="feed_date">October 07, 2016</span>
                      </div>
                      
                      </div>                   
                  </li>                  
                  
                  <li>
                    <div class="media">
                        <div class="media-left">
                        <a class="news_img" href="us-university-college-fair-30092016.php" target="_blank" rel="noreferrer noopener" />
                          <img class="media-object" src="galimages/us-university-college-fair-30092016/8.jpg" alt="img">
                          
                        </a>
                        </div>
                        <div class="media-body">
                            <a href="us-university-college-fair-30092016.php" target="_blank" rel="noreferrer noopener">
                                  ´US´ UNIVERSITY/COLLEGE FAIR
                            </a>
 	                        <span class="feed_date">September 30, 2016</span>
                        </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                        <div class="media-left">
                        <a class="news_img" href="yale-university-30092016.php" target="_blank" rel="noreferrer noopener" />
                          <img class="media-object" src="img/assadahmad-small-30092016.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                            <a href="yale-university-30092016.php" target="_blank" rel="noreferrer noopener">
                                  TALK BY AN OLD BOY AND YALE ALUMNUS
                            </a>
 	                        <span class="feed_date">September 30, 2016</span>
                        </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="legal-essay-writing-26092016.php">
                          <img class="media-object" src="img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="legal-essay-writing-26092016.php">LEGAL ESSAY WRITING COMPETITION, 2016</a>
                       <span class="feed_date">September 26, 2016</span>
                      </div>
                    </div>
                  </li>                  
                  <li>
                    <div class="media">
                        <div class="media-left">
                        <a class="news_img" href="inter-house-cricket-competition-ss-26092016.php" target="_blank" rel="noreferrer noopener" />
                          <img class="media-object" src="galimages/inter-house-cricket-competition-ss-26092016/small/1.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                            <a href="inter-house-cricket-competition-ss-26092016.php" target="_blank" rel="noreferrer noopener">
                                  INTER-HOUSE CRICKET COMPETITION – 2016
                            </a>
 	                        <span class="feed_date">September 26, 2016</span>
                        </div>
                    </div>
                  </li>
                  
                  <li>
                    <div class="media">
                        <div class="media-left">
                        <a class="news_img" href="js-mini-academics-2016-24092016.php" target="_blank" rel="noreferrer noopener" />
                          <img class="media-object" src="galimages/js-mini-academics-24092016/6.jpg" alt="img">
                          
                        </a>
                        </div>
                        <div class="media-body">
                            <a href="js-mini-academics-2016-24092016.php" target="_blank" rel="noreferrer noopener">
                                  JUNIOR SCHOOL MINI ACADEMICS 2016
                            </a>
 	                        <span class="feed_date">September 24, 2016</span>
                        </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                        <div class="media-left">
                        <a class="news_img" href="inter-house-swimming-competition-ss-23092016.php" target="_blank" rel="noreferrer noopener" />
                          <img class="media-object" src="galimages/inter-house-swimming-competition-ss-23092016/3.jpg" alt="img">
                          
                        </a>
                        </div>
                        <div class="media-body">
                            <a href="inter-house-swimming-competition-ss-23092016.php" target="_blank" rel="noreferrer noopener">
                                  INTER-HOUSE SWIMMING COMPETITIONS – 2016
                            </a>
 	                        <span class="feed_date">September 23, 2016</span>
                        </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                        <div class="media-left">
                        <a class="news_img" href="acmun-22092016.php" target="_blank" rel="noreferrer noopener" />
                          <img class="media-object" src="img/acmun_logo.png" alt="img">
                          
                        </a>
                        </div>
                        <div class="media-body">
                            <a href="acmun-22092016.php" target="_blank" rel="noreferrer noopener">
                                  ACMUN – 2016
                            </a>
 	                        <span class="feed_date">September 22, 2016</span>
                        </div>
                    </div>
                  </li>
                  
                  <li>
                  <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="/alumni/lunch-19092016.php" target="_blank" rel="noreferrer noopener">
                          <img class="media-object" src="/alumni/assets/images/lunch-19092016/home.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="/alumni/lunch-19092016.php" target="_blank" rel="noreferrer noopener">
                              Pre-1956 Leavers’ Lunch -A reunion of happy memories
                       </a>
                       <span class="feed_date">September 19, 2016</span>
                      </div>
                    </div>
                  </li>
                  
                  <li>
                    <div class="media">
                        <div class="media-left">
                        <a class="news_img" href="university-of-chicago-09092016.php" target="_blank" rel="noreferrer noopener" />
                          <img class="media-object" src="img/talhayousaf-small-09092016.jpg" alt="img">
                        </a>
                        </div>
                        <div class="media-body">
                            <a href="university-of-chicago-09092016.php" target="_blank" rel="noreferrer noopener">
                                  SESSION ON UNIVERSITY OF CHICAGO
                            </a>
 	                        <span class="feed_date">September 09, 2016</span>
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
    
    <script type="text/javascript" src="js/quickpager1.jquery.js"></script>
    <!--<script type="text/javascript" src="js/pagination.min.js"></script>-->
    
    <!--<script type="text/javascript" src="https://st3ph.github.io/jquery.easyPaginate/js/jquery.easyPaginate.js"></script>-->
	
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
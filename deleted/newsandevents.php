<?php
header('X-Content-Type-Options: nosniff');
header("X-XSS-Protection: 1; mode=block;");
header("Pragma: no-cache");
header("Cache-Control: no-cache, no-store, must-revalidate, private");
header('X-Frame-Options: SAMEORIGIN');
header("strict-transport-security: max-age=0");	

	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
  $default_open=0;
  


?>
<!DOCTYPE html>
<html lang="en"><head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- News &amp; Events</title>
	
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
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" /> -->
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
		width: 25% !important;
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
          
          <style>
		  	.feed_tabs li a {font-size: 16px;}
		  </style>
          
          <div class="col-lg-9 col-md-9 col-sm-9">
          	<div class="newsfeed_area wow fadeInRight">            
            <ul class="nav nav-tabs feed_tabs" id="myTab2">
              <li<?php echo (empty($_GET['selection']))?' class="active"':'';?>><a href="#news" data-toggle="tab">News</a></li>
              <li<?php echo (!empty($_GET['selection']) && ($_GET['selection']=="notice"))?' class="active"':'';?>><a href="#notice" data-toggle="tab">Notices</a></li>
              <li<?php echo (!empty($_GET['selection']) && ($_GET['selection']=="events"))?' class="active"':'';?>><a href="#events" data-toggle="tab">Events</a></li>
              <li<?php echo (!empty($_GET['selection']) && ($_GET['selection']=="newsletters"))?' class="active"':'';?>><a href="#newsletters" data-toggle="tab">Principal's Newsletters</a></li>
              <li<?php echo (!empty($_GET['selection']) && ($_GET['selection']=="alumninews"))?' class="active"':'';?>><a href="#alumninews" data-toggle="tab">Alumni Newsletters</a></li>
            </ul>
            
			
            <!-- Tab panes -->
            <div class="tab-content">
              
              <!-- Start news tab content -->
              <div class="tab-pane fade<?php echo (empty($_GET['selection']))?' in active':'';?>" id="news">            

   
                <ul class="news_tab">

                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a class="news_img" href="newsandevents-live.php?id=643">
                                    <img class="media-object" src="./img/nne_logo.png" alt="img">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="newsandevents-live.php?id=643">LAST DAYS TO DONATE TO OLD BUILDING</a>
                                <span class="feed_date" style="color: #010101;"></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a class="news_img" href="newsandevents-live.php?id=646">
                                    <img class="media-object" src="newsletter/news/images/receiving-cheques-old-fund-5375941681.jpg" alt="img">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="newsandevents-live.php?id=646">PRINCIPAL MICHAEL THOMSON RECEIVING CHEQUES FOR THE OLD BUILDING FUND</a>
                                <span class="feed_date" style="color: #010101;"></span>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a class="news_img" href="newsandevents-live.php?id=645">
                                    <img class="media-object" src="newsletter/news/images/acoba-members-old-fund-7223154180.jpg" alt="img">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="newsandevents-live.php?id=645">ACOBA MEMBERS CONTRIBUTING TO THE OLD BUILDING FUND</a>
                                <span class="feed_date" style="color: #010101;"></span>
                            </div>
                        </div>
                    </li>

					<li>
                        <div class="media">
                            <div class="media-left">
                                <a class="news_img" href="newsandevents-live.php?id=641">
                                    <img class="media-object" src="./newsletter/news/images/icon-641-10022020-1595286907.jpg" alt="img">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="newsandevents-live.php?id=641">PRE '60 LEAVERS' LUNCH A GREAT SUCCESS</a>
                                <span class="feed_date" style="color: #010101;"></span>
                            </div>
                        </div>
                    </li>
                    
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a class="news_img" href="newsandevents-live.php?id=639">
                                    <img class="media-object" src="./newsletter/news/images/malik-ata-mohammad-khan-539.jpg" alt="img">
                                </a>
                            </div>
                            <div class="media-body">
                                <a href="newsandevents-live.php?id=639">LEGENDARY TENT PEGGING CHAMPION & PROUD AITCHISONIAN MALIK ATA PASSES AWAY</a>
                                <span class="feed_date" style="color: #010101;"></span>
                            </div>
                        </div>
                    </li>
                  <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=638">
                      <img class="media-object" src="./newsletter/news/images/2-6389772426.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=638">AITCHISONIAN TEAM WINS BEST DELEGATION AT HAYDARPASA INTERNATIONAL MUN</a>
						          <span class="feed_date" style="color: #010101;"></span>
                    </div>
                  </div>
                </li>	
				<li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=636">
                      <img class="media-object" src="./newsletter/news/images/basketball-centre-01022020-535462267.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=636">AITCHISON TO OPEN THE NEW 'DAWOOD BASKETBALL CENTRE'</a>
						          <span class="feed_date" style="color: #010101;">February 22, 2020</span>
                    </div>
                  </div>
                </li>
				<li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=633">
                      <img class="media-object" src="./newsletter/news/images/jaffar-mem-hockey-633-news-336678657.png" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=633">AITCHISON COLLEGE WINS THE U 17 JAFAR MEMORIAL HOCKEY TROPHY</a>
						          <span class="feed_date" style="color: #010101;">January 23, 2020</span>
                    </div>
                  </div>
                </li>	
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=635">
                      <img class="media-object" src="./newsletter/news/images/1-2738619932.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=635">WALTER A. ROBINSON CROSS COUNTRY RACE 2020</a>
						          <span class="feed_date" style="color: #010101;">January 17, 2020</span>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=634">
                      <img class="media-object" src="./newsletter/news/images/physicist-tournament-small-634-2011251336.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=634">Pakistan Young Physicist Tournament</a>
						          <span class="feed_date" style="color: #010101;"></span>
                    </div>
                  </div>
                </li>

                
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=630">
                      <img class="media-object" src="./newsletter/news/images/1-6254673781.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=630">AITCHISON COLLEGE HOLDS ART AND PERFORMING ARTS FEST</a>
						          <span class="feed_date" style="color: #010101;">January 10-12, 2020</span>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=627">
                      <img class="media-object" src="./newsletter/news/images/1-5211695692.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=627">Sports Board Junior Tennis Championship</a>
						          <span class="feed_date" style="color: #010101;"></span>
                    </div>
                  </div>
                </li>	

                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="alumni/news-new.php?id=620">
                      <img class="media-object" src="./newsletter/news/images/14-2172120079.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="alumni/news-new.php?id=620">Alumni College Tour Classes 1981-1990</a>
						          <span class="feed_date" style="color: #010101;"></span>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=619">
                      <img class="media-object" src="./newsletter/news/images/sadiq-karim-soofi-small-620.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=619">Aitchison congratulates Head Boy, Sadiq Soofi, on his early admission into Harvard University</a>
						          <span class="feed_date" style="color: #010101;"></span>
                    </div>
                  </div>
                </li>	

				<li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=618">
                      <img class="media-object" src="./newsletter/news/images/4-6921371110.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=618">AITCHISON COLLEGE HOLDS NATIONAL U-15 AND U-17 SQUASH CHAMPIONSHIPS 2019</a>
						          <span class="feed_date" style="color: #010101;">November 25-30, 2019</span>
                    </div>
                  </div>
                </li>	
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=617">
                      <img class="media-object" src="./newsletter/news/images/8-5967849641.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=617">AITCHISON WINS 2019 FLOWER SHOW IN SCHOOLS' CATEGORY</a>
						          <span class="feed_date" style="color: #010101;"></span>
                    </div>
                  </div>
                </li>
				<li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=611">
                      <img class="media-object" src="./newsletter/news/images/5-6744825261.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=611">FOUNDER'S DAY ASSEMBLY - NOV 13</a>
						          <span class="feed_date" style="color: #010101;"></span>
                    </div>
                  </div>
                </li>	
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=607">
                      <img class="media-object" src="./img/nne_logo.png" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=607">RE-OPENING OF JAFAR MEMORIAL PAVILION</a>
						          <span class="feed_date" style="color: #010101;"></span>
                    </div>
                  </div>
                </li>	
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=604">
                      <img class="media-object" src="https://aitchison.edu.pk/images/604-05112019-02.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=604">AITCHISON CRICKETER STARS FOR THE NATIONAL TEAM</a>
						          <span class="feed_date" style="color: #010101;"></span>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="./alumni/news-new.php?id=602" target="_blank">
                      <img class="media-object" src="./newsletter/news/images/21-811338583.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="./alumni/news-new.php?id=602" target="_blank">ALUMNI'S REUNION BATCHES 1961-1975</a>
						          <span class="feed_date" style="color: #010101;">October 26<sup>th</sup>, 2019</span>
                    </div>
                  </div>
                </li>   
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=603">
                      <img class="media-object" src="./newsletter/news/images/ashiq_hussain_qureshi3-603.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=603">MR. ASHIQ HUSSAIN QURESHI PASSES AWAY</a>
						          <span class="feed_date" style="color: #010101;"></span>
                    </div>
                  </div>
                </li>
				<li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=599">
                      <img class="media-object" src="./newsletter/news/images/27-6449204031.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=599">ACMUN X</a>
						          <span class="feed_date" style="color: #010101;">A Model United Nations Conference</span>
                    </div>
                  </div>
                </li>
					
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=596">
                      <img class="media-object" src="./newsletter/news/images/colonel-hasan-596-3.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=596">Remembering Colonel N D Hasan, Principal of Aitchison College, 1979-1983</a>
						          <span class="feed_date" style="color: #010101;"></span>
                    </div>
                  </div>
                </li>

				<li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=593">
                      <img class="media-object" src="./newsletter/news/images/5-3193093407.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=593">AITCHISON COLLEGE VS WOMEN CRICKET TEAM
</a>
						<span class="feed_date" style="color: #010101;"></span>
                    </div>
                  </div>
                </li>
					
				
				
				
                
					
                 
                 
                 
                 
                 
                 <?php #This news has been permanently hide due to quality of picture as per Owais Sb's verbal instructions.
				   /*?>
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=152">
                          <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/legal-essay-writing-6053095525.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=152">Legal Essay Writing Competition 2017</a>
                       <!--<span class="feed_date" style="color: black;"></span>-->
                      </div>
                      
                      </div>                   
                 </li>
                 
                 <?php */ ?>
                 
                 
                </ul>                
                <!--<a class="see_all" href="#">See All</a>-->
                <br /><br />
                <div class="row">
                    <a style="padding: 2px 10px;" href="news-archive.php" rel="noopener noreferrer" class="btn btn-primary" role="button">News Archive</a>
                </div>
                
              </div>
              
              
              <!-- STARTED SOCIAL GATHERINGS CONTENTS  -->
              
              <!-- ENDED SOCIAL GATHERINGS CONTENTS  -->
              <!-- STARTED PARENTS MEETING CONTENTS  -->
              
              <div class="tab-pane fade<?php echo (!empty($_GET['selection']) && ($_GET['selection']=="newsletters"))?' in active':'';?>" id="newsletters"> 
              	<div class="row">
            	<form id="newsForm" method="post" action="ac-principal-newsletter-new.php">
                    <input type="hidden" id="id" name="id"/>
                    <input type="hidden" id="mode" name="mode" value="view"/>
                   <?php
						include("newsletter/classes/functions.php");
						include("newsletter/classes/dataCenter.php");
						include("newsletter/news/newsrepository.php");
						
						
						//$functions = new Functions();
						$dc = new DataCenter();
						
						$dc->Connect();
						
						$newsRepo = new NewsRepository($dc);
						
						$tNews = $newsRepo->GetPublishedNewsByLocationId( NewsLocations::PrNewsletter );
				   		if($tNews)
						foreach($tNews->Rows as $row) {
							if ($row->NewsType == "URL") {
								$href = $row->Content1;
								$target = "_blank";
							}
							else {
								$href = "ac-principal-news.php?id=".$row->NewsId;
								$target = "";
							}
							$date = "&nbsp;";
							if ($row->ShowDate)
								$date = $row->Date;
						?>
						<div class="col-lg-12 col-md-12 col-sm-12 media" style="vertical-align:top;">
							<a href="<?php echo $href; ?>" target="<?php echo $target; ?>" style="text-decoration:none;">
                            <div class="row">
                        	<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2" style="padding-right:0;">
								<img class="img-thumbnail" style="display: inline-block;vertical-align:top; margin-right:10px;padding: 0px;" src="img/nl-img50x50.png" /></div>
                            <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10" style="font-size:18px;">
								<div><?php echo htmlentities(stripslashes(utf8_decode($row->Heading)));?></div>
								<div style="font-size:16px;color:#818181;"><?php echo $date;?></div>
                            </div>
                            </div>
							</a>
							
						</div>	
						<?php
						}
						?> 
                    <?php /*?><div class="col-lg-12 col-md-12 col-sm-12 media" style="vertical-align:top;">
                        <a href="ac-principal-news.php?id=187" target="" style="text-decoration:none;">
                            <img class="img-thumbnail" style="display: inline-block;vertical-align:top; margin-right:10px;padding: 0px;" src="img/nl-img50x50.png">
                            <div style="display: inline-block;font-size:18px;">Update: Added Note for October, 2017<br>
                            <span style="font-size:16px;color:#818181;">&nbsp;</span></div>
                        </a>
                        
                    </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 media" style="vertical-align:top;">
                        <a href="ac-principal-news.php?id=119" target="" style="text-decoration:none;">
                            <img class="img-thumbnail" style="display: inline-block;vertical-align:top; margin-right:10px;padding: 0px;" src="img/nl-img50x50.png" />
                            <div style="display: inline-block;font-size:18px;">Information Update<br />
                            <span style="font-size:16px;color:#818181;">August 01, 2017</span></div>
                        </a>
                        
                    </div><?php */?>	
                        <?php /*?><div class="col-lg-12 col-md-12 col-sm-12 media" style="vertical-align:top;">
                        <a href="ac-principal-news.php?id=40" target="" style="text-decoration:none;">
                            <img class="img-thumbnail" style="display: inline-block;vertical-align:top; margin-right:10px;padding: 0px;" src="img/nl-img50x50.png" />
                            <div style="display: inline-block;font-size:18px;">Re: Aitchison Developments Update <br />
                            <span style="font-size:16px;color:#818181;">26 January, 2017</span></div>
                        </a>
                        
                    </div><?php */?>
                </form>
                <div class="row" style="text-align: right; margin-right:10px;">
                    <a style=" margin-top: 40px; padding: 2px 10px;" href="ac-ppast_newsletter.php" rel="noopener noreferrer" class="btn btn-primary" role="button">Newsletter Archive</a>
                </div>
            </div>
               
                <ul class="news_tab">
                </ul>
              </div>
              <div class="tab-pane fade<?php echo (!empty($_GET['selection']) && ($_GET['selection']=="pmeeting"))?' in active':'';?>" id="pmeeting">                
                <ul class="news_tab">
				  
				  <!--<li>
                    <div class="media">
                      <div class="media-left">
                        <a target="_blank" class="news_img" href="javascript:void(0);">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a target="_blank" href="javascript:void(0);">Principal Social Gathering with Parents of M1 (PS)<br> Shamim Khan Hall<br> '12:30 - 02:00 pm' Saturday 12-Nov-16.</a>
                       <span class="feed_date">November 12, 2016</span>
                      </div>
                    </div>
                  </li>
                  
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a target="_blank" class="news_img" href="javascript:void(0);">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a target="_blank" href="javascript:void(0);">Principal Social Gathering with Parents of K4/K5 (JS)<br> Shamim Khan Hall<br> '09:00 - 10:30 am' Saturday 19-Nov-16.</a>
                       <span class="feed_date">November 19, 2016</span>
                      </div>
                    </div>
                  </li>-->                  
                  <?php /*?><li>
                  <h3 class="titile" style="font-weight: bold;">2 <sup><span style="text-transform: lowercase;">nd</span></sup> Teacher Parent Meeting</h3>
                  		<div class="table-responsive">
                	<!--<table border="1" align="center" cellspacing="6" class="table table-striped" style="border: thin solid #ddd;">-->
                    <table border="1" align="center" cellspacing="6" class="table table-hover" style="border: thin solid #CBCBCB; width: 90%;">
                        <tbody>
                          <tr>
                            <th align="center" class="ptm_mtitle" colspan="3"><div align="center"><strong>SENIOR SCHOOL</strong></div></th>
                          </tr>
                          <tr>
                            <th align="center" class="ptm_mtitle2"><div align="center"><strong>Date</strong></div></th>
                            <th align="center" class="ptm_mtitle2"><div align="center"><strong>Time</strong></div></th>
                            <th align="center" class="ptm_mtitle2"><div align="center"><strong>Venue</strong></div></th>
                          </tr>                 
                          <tr class="ptm_row1">
                            <td align="center">Friday <br>24<sup>th</sup> February,2017<br>(M2, H2 All Sections)</td>
                            <td align="center">08:00 AM <br> To <br>12:00 noon</td>
                            <td align="center" style="vertical-align: middle">S.K. Hall <br>(1<sup>st</sup> Floor)</td>
                          </tr>
                          <tr class="ptm_row2">
                            <td align="center">Saturday  <br>25<sup>th</sup> February,2017<br>
                            (C1 All Sections)</td>
                            <td align="center">08:00 AM <br> To <br>12:00 noon</td>
                            <td align="center" style="vertical-align: middle">S.K. Hall <br>(1<sup>st</sup> Floor)</td>
                          </tr>
                          <tr class="ptm_row1">
                            <td align="center">Sunday  <br>26<sup>th</sup> February,2017<br>
                            (C2, H1 All Sections)</td>
                            <td align="center">08:00 AM <br> To <br>12:30 PM</td>
                            <td align="center" style="vertical-align: middle">S.K. Hall <br>(1<sup>st</sup> Floor)</td>
                          </tr>
                          <tr>
                            <th align="center" class="ptm_mtitle" colspan="3"><div align="center"><strong>PREP SCHOOL</strong></div></th>
                          </tr>
                          <tr class="ptm_row2">
                            <td align="center">Friday <br>24<sup>th</sup> February,2017<br> (M1 All Sections)</td>
                            <td align="center">08:00 AM <br> To <br>12:30 PM</td>
                            <td align="center" style="vertical-align: middle">S.K. Hall <br>(Ground Floor)</td>
                          </tr>
                          <tr class="ptm_row1">
                            <td align="center">Saturday  <br>25<sup>th</sup> February,2017<br> (E2 All Sections)</td>
                            <td align="center">08:00 AM <br> To <br>12:30 PM</td>
                            <td align="center" style="vertical-align: middle">S.K. Hall <br>(Ground Floor)</td>
                          </tr>
                          <tr class="ptm_row2">
                            <td align="center">Sunday  <br>26<sup>th</sup> February,2017<br> (E1 All Sections)</td>
                            <td align="center">08:00 AM <br> To <br>12:30 PM</td>
                            <td align="center" style="vertical-align: middle">S.K. Hall <br>(Ground Floor)</td>
                          </tr>
                          <tr>
                            <th align="center" class="ptm_mtitle" colspan="3"><div align="center"><strong>JUNIOR SCHOOL</strong></div></th>
                          </tr>
                          <tr class="ptm_row1">
                            <td align="center">Friday <br>24<sup>th</sup> February,2017<br></td>
                            <td align="center">08:00 AM  To <br>12:00 noon</td>
                            <td align="center">Junior School</td>
                          </tr>
                          <tr class="ptm_row2">
                            <td align="center">Saturday  <br>25<sup>th</sup> February,2017</td>
                            <td align="center">08:00 AM  To <br>12:00 noon</td>
                            <td align="center">Junior School</td>
                          </tr>
                        </tbody>
                      </table>   
                                    
            		  </div>
                  </li><?php */?>
                </ul>                
              </div>
              <!-- ENDED   PARENTS MEETING CONTENTS  -->
              <!-- Start notice tab content -->  
              <div class="tab-pane fade<?php echo (!empty($_GET['selection']) && ($_GET['selection']=="notice"))?' in active':'';?>" id="notice">
                <ul class="news_tab">
						
                  <!--<li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="ac-guidance-counseling-ss.php">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="ac-guidance-counseling-ss.php">	University Application Deadlines </a>
                       <span class="feed_date">Office of Admissions, Guidance and Counseling
</span>
                      </div>
                      
                      </div>                   
                    </li>-->
                  <!--<li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="ac-term-dates.php">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="ac-term-dates.php">	TERM DATES (AUGUST 2016 TO JUNE 2017) </a>
                       <span class="feed_date">May 13, 2016
</span>
                      </div>
                      
                      </div>                   
                    </li>-->  
                    
                    <?php /*?><li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="ac-notice-riding-14022017.php">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="ac-notice-riding-14022017.php">Old Boys vs. College Team Tent Pegging competition</a>
                       <span class="feed_date"></span>
                      </div>
                      
                      </div>                   
                 </li><?php */?>
                 
                 
                    
                    <?php /*?><li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="ac-gandc.php">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="ac-gandc.php">University Application Deadlines 2016-17 </a>
                       <span class="feed_date" style="color: #000;">Office of Admissions, Guidance and Counseling</span>
                      </div>
                      
                      </div>                   
                    </li><?php */?>
                
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
				 
                 <?php /*?><li>
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
                </li><?php */?>
          
                <?php
                 if(isset($_GET['term3']) && (trim($_GET['term3'])=="term3")){
				 ?>
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="javascript:void(0)">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="javascript:void(0)"><?php /*?><span class="blink_text2" style="color:#2f2f2f;"><?php */?>Term 3 Assessment for prep boys E2 and M1 will be based on term  3 work<?php /*?></span><?php */?></a>
                       <span class="feed_date"></span>
                      </div>
                      
                      </div>                   
                 </li>
                 <?php
				 }
         ?>
				<?php /*?> <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="./alumni/news-new.php?id=622" target="_blank">
                      <img class="media-object" src="./img/nne_logo.png" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="./alumni/news-new.php?id=622" target="_blank">Alumni College Tour (Classes 1991 - 2000)</a>
                      <span class="feed_date" style="color: #010101;">January 11, 2019</span>
                    </div>
                  </div>
                </li>	<?php */?>
         		<?php /*?><li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="./alumni/news-new.php?id=616" target="_blank">
                      <img class="media-object" src="./img/nne_logo.png" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="./alumni/news-new.php?id=616" target="_blank">Alumni College Tour (Classes 1981 - 1990)</a>
                      <span class="feed_date" style="color: #010101;">December 14, 2019</span>
                    </div>
                  </div>
                </li>	<?php */?>
         		<?php /*?><li>
				  <div class="media">
					<div class="media-left">
					  <a class="news_img" href="./alumni/news-new.php?id=606" target="_blank">
					  <img class="media-object" src="./img/nne_logo.png" alt="img">
					</a>
					</div>
					<div class="media-body">
					  <a href="./alumni/news-new.php?id=606" target="_blank">WALTER A. ROBINSON CHALLENGE CUP FOR CROSS COUNTRY RACE</a>
					  <span class="feed_date" style="color: #010101;">January 17<sup>th</sup>, 2020</span>
					</div>
				  </div>
				</li><?php */?>	

				<?php /*?><li>
				  <div class="media">
					<div class="media-left">
					  <a class="news_img" href="./alumni/news-new.php?id=600" target="_blank">
					  <img class="media-object" src="./img/nne_logo.png" alt="img">
					</a>
					</div>
					<div class="media-body">
					  <a href="./alumni/news-new.php?id=600" target="_blank">ALUMNI COLLEGE TOUR (CLASSES 1976 - 1980)</a>
					  <span class="feed_date" style="color: #010101;">November 9<sup>th</sup>, 2019</span>
					</div>
				  </div>
        </li>	
        
        <li>
				  <div class="media">
					<div class="media-left">
					  <a class="news_img" href="./alumni/news-new.php?id=631" target="_blank">
					  <img class="media-object" src="./img/nne_logo.png" alt="img">
					</a>
					</div>
					<div class="media-body">
					  <a href="./alumni/news-new.php?id=631" target="_blank">Pre-1960 Old Boys’ Lunch at Aitchison College</a>
					  <span class="feed_date" style="color: #010101;"></span>
					</div>
				  </div>
        </li>
        <?php */?>

              <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=643">
                      <img class="media-object" src="./img/nne_logo.png" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=643">LAST DAYS TO DONATE TO OLD BUILDING</a>
						          <span class="feed_date" style="color: #010101;"></span>
                    </div>
                  </div>
                </li>
				<li>
				  <div class="media">
					<div class="media-left">
					  <a class="news_img" href="./alumni/events.php" target="_blank">
					  <img class="media-object" src="./img/nne_logo.png" alt="img">
					</a>
					</div>
					<div class="media-body">
					  <a href="./alumni/events.php" target="_blank">Upcomming Alumni Events 2020</a>
					  <span class="feed_date" style="color: #010101;"></span>
					</div>
				  </div>
				</li>
                 <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=555">
                          <img class="media-object" src="img/19022019-100x70.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="newsandevents-testlink.php?id=555">RELIVING AITCHISON: A MODERN PHOTOGRAPHIC HISTORY</a>
						  <span class="feed_date"><p style="font-size: 5px; padding: 0; margin: 0;">&nbsp;</p><a href="https://aitchison.edu.pk/newsandevents-live.php?id=482"> 
							  <span style="font-style: normal; color: blue; padding-top: 200px;">How to place an order?</span></a></span>
                      </div>
                      
                      </div>                   
                 </li>
                    
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
                 
                 
                 <?php /*?><li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="portal/login.php?p=p">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="portal/login.php?p=p">Parents are asked to regularly check our portals for all school information: letters, important events, sports and other calendars. </a>
                       <span class="feed_date"></span>
                      </div>
                      
                      </div>                   
                 </li>
                    
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="ac-oxford-summar-academy.php">
                          <img class="media-object" src="./img/oxford-summar-academy.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="ac-oxford-summar-academy.php">	Oxford Summer Academy</a>
                       <span class="feed_date"></span>
                      </div>
                      
                      </div>                   
                    </li><?php */?>
                  <!--<li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="ac-hmss.php">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="ac-hmss.php">	Resignation of Headmaster of Senior School</a>
                       <span class="feed_date">April 29, 2016
</span>
                      </div>
                      
                      </div>                   
                    </li>-->
                  	<!--<li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="ac-h2-readmission.php">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="ac-h2-readmission.php">	Re: Re-Admission into Aitchison College H2 (2016-17) under Special Consideration</a>
                       <span class="feed_date">April 25, 2016, 12:31 PM
</span>
                      </div>
                      
                      </div>                   
                    </li>-->
                    <!--<li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="ac-admissions.php">
                          <img class="media-object" src="img/admissionnotic.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="ac-admissions.php">	ADMISSION 2016-2017</a>
                       <span class="feed_date">March 25, 2016, 7:52 AM
</span>
                      </div>
                      </div>                   
                    </li>-->
                    
                   
                   <!-- <li>
                      <div class="media">
                        <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/highachievers.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">The High Achievers’ Party</a>
                       <span class="feed_date">12th September, 2015 at 5:00 pm</span>
                      </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                          <img class="media-object" src="img/juniorschoolnotic.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Junior School Notice</a>
                       <span class="feed_date">August 12, 2015, 11:55 AM</span>
                      </div>
                      </div>
                    </li>    -->                                
                  </ul>
              </div>
              <!-- Start events tab content -->
              <div class="tab-pane fade<?php echo (!empty($_GET['selection']) && ($_GET['selection']=="events"))?' in active':'';?>" id="events">
                <ul class="news_tab">
               		<?php /*?><li style="border: none !important;">
                    	<div class="media-body">
                       		<a href="ac-parents-login.php">To see latest events, please login to portals.</sup></a>
                      </div>
                    </li><?php */?>
                  <?php /*?>ALUMNI COLLEGE TOUR
CLASSES: 1976-1985<?php */?>
			    <?php /*?><li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=583">
                      <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/9-2790996497.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=583">JUNIOR SCHOOL ACADEMIC PRIZE DAY - 2019</a>
						<span class="feed_date" style="color: #010101;"></span>
                    </div>
                  </div>
                </li>	<?php */?>
                
                <?php /*?><li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="alumni/news-new.php?id=595">
                          <img class="media-object" src="./img/nne_logo.png" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="alumni/news-new.php?id=595">Opening of New Rifle Range 2019</a>
						            <span class="feed_date">October 26<sup>th</sup>, 2019</span>
                      </div>
                      
                      </div>                   
                 </li>	<?php */?>
                    
                <li>
					<div class="media">
						<div class="media-left">
							<a class="news_img" href="newsandevents-live.php?id=641">
								<img class="media-object" src="./newsletter/news/images/icon-641-10022020-1595286907.jpg" alt="img">
							</a>
						</div>
						<div class="media-body">
							<a href="newsandevents-live.php?id=641">PRE '60 LEAVERS' LUNCH A GREAT SUCCESS</a>
							<span class="feed_date" style="color: #010101;"></span>
						</div>
					</div>
				</li>
                    
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=633">
                      <img class="media-object" src="./newsletter/news/images/jaffar-mem-hockey-633-news-336678657.png" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=633">AITCHISON COLLEGE WINS THE U 17 JAFAR MEMORIAL HOCKEY TROPHY</a>
						          <span class="feed_date" style="color: #010101;">January 23, 2020</span>
                    </div>
                  </div>
                </li> 
                <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=635">
                      <img class="media-object" src="./newsletter/news/images/1-2738619932.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=635">WALTER A. ROBINSON CROSS COUNTRY RACE 2020</a>
						          <span class="feed_date" style="color: #010101;">January 17, 2020</span>
                    </div>
                  </div>
                </li>
                
                
				        <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=630">
                      <img class="media-object" src="./newsletter/news/images/1-6254673781.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=630">AITCHISON COLLEGE HOLDS ART AND PERFORMING ARTS FEST</a>
						          <span class="feed_date" style="color: #010101;">January 10-12, 2020</span>
                    </div>
                  </div>
                </li>
          
                
                 <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="alumni/news-new.php?id=620">
                      <img class="media-object" src="./newsletter/news/images/14-2172120079.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="alumni/news-new.php?id=620">Alumni College Tour Classes 1981-1990</a>
						          <span class="feed_date" style="color: #010101;"></span>
                    </div>
                  </div>
                </li>
			  <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=618">
                      <img class="media-object" src="./newsletter/news/images/4-6921371110.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=618">AITCHISON COLLEGE HOLDS NATIONAL U-15 AND U-17 SQUASH CHAMPIONSHIPS 2019</a>
						          <span class="feed_date" style="color: #010101;">November 25-30, 2019</span>
                    </div>
                  </div>
                </li>		
			  <?php /*?><li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="./alumni/news-new.php?id=616" target="_blank">
                      <img class="media-object" src="./img/nne_logo.png" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="./alumni/news-new.php?id=616" target="_blank">Alumni College Tour (Classes 1981 - 1990)</a>
                      <span class="feed_date" style="color: #010101;">December 14, 2019</span>
                    </div>
                  </div>
                </li> <?php */?>		
			  <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=611">
                      <img class="media-object" src="./newsletter/news/images/5-6744825261.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=611">FOUNDER'S DAY ASSEMBLY - NOV 13</a>
						          <span class="feed_date" style="color: #010101;"></span>
                    </div>
                  </div>
                </li>		
              <?php /*?><li>
                <div class="media">
                <div class="media-left">
                  <a class="news_img" href="./alumni/news-new.php?id=606" target="_blank">
                  <img class="media-object" src="./img/nne_logo.png" alt="img">
                </a>
                </div>
                <div class="media-body">
                  <a href="./alumni/news-new.php?id=606" target="_blank">WALTER A. ROBINSON CHALLENGE CUP FOR CROSS COUNTRY RACE</a>
                  <span class="feed_date" style="color: #010101;">January 17<sup>th</sup>, 2020</span>
                </div>
                </div>
              </li><?php */?>	
              
				        <li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="./alumni/news-new.php?id=602" target="_blank">
                      <img class="media-object" src="./newsletter/news/images/21-811338583.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="./alumni/news-new.php?id=602" target="_blank">ALUMNI'S REUNION BATCHES 1961-1975</a>
						<span class="feed_date" style="color: #010101;">October 26<sup>th</sup>, 2019</span>
                    </div>
                  </div>
                </li>	
				<?php /*?><li>
				  <div class="media">
					<div class="media-left">
					  <a class="news_img" href="./alumni/news-new.php?id=600" target="_blank">
					  <img class="media-object" src="./img/nne_logo.png" alt="img">
					</a>
					</div>
					<div class="media-body">
					  <a href="./alumni/news-new.php?id=600" target="_blank">ALUMNI COLLEGE TOUR (CLASSES 1976 - 1980)</a>
					  <span class="feed_date" style="color: #010101;">November 9<sup>th</sup>, 2019</span>
					</div>
				  </div>
				</li><?php */?>
					
				<li>
				  <div class="media">
					<div class="media-left">
					  <a class="news_img" href="./alumni/events.php" target="_blank">
					  <img class="media-object" src="./img/nne_logo.png" alt="img">
					</a>
					</div>
					<div class="media-body">
					  <a href="./alumni/events.php" target="_blank">Upcomming Alumni Events 2020</a>
					  <span class="feed_date" style="color: #010101;"></span>
					</div>
				  </div>
				</li>
				
				<li>
				  <div class="media">
					<div class="media-left">
					  <a class="news_img" href="newsandevents-live.php?id=572">
					  <img class="media-object" src="./img/nne_logo.png" alt="img">
					</a>
					</div>
					<div class="media-body">
					  <a href="newsandevents-live.php?id=572">LEADERSHIP CAMP 2019 </a>
					  <span class="feed_date" style="color: #010101;">August 21<sup>st</sup> to 23<sup>rd</sup>, 2019</span>
					</div>
				  </div>
				</li>
				<li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=560">
                      <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/4-3025847035.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=560">AITCHISON COLLEGE CELEBRATES PAKISTAN'S INDEPENDENCE DAY</a>
                      <span class="feed_date" style="color: #010101;">August 14<sup>th</sup>, 2019</span>
                    </div>
                  </div>
                </li>
					
				<li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=553">
                      <img class="media-object" src="./newsletter/news/images/7-2112643262.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=553">MANCHESTER UNITED ACADEMY COACHES CONDUCTS A FOOTBALL TRAINING CAMP AT AITCHISON</a>
                      <?php /*?><span class="feed_date" style="color: #010101;">During Summer Vacations</span><?php */?>
                    </div>
                  </div>
                </li>
					
				<li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=544">
                      <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/22-9410424805.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=544">Summer Camp 2019</a>
					  <span class="feed_date" style="color: #010101;">July 8<sup>th</sup> to August 2<sup>nd</sup>, 2019</span>
                    </div>
                  </div>
                </li>
				<li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=548">
                      <img class="media-object" src="https://aitchison.edu.pk/newsletter/news/images/a14-8161167092.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=548">ROBOTICS SUMMER CAMP - 2019</a>
					  <span class="feed_date" style="color: #010101;">July 8<sup>th</sup> to July 26<sup>th</sup>, 2019</span>
                      
                    </div>
                  </div>
                </li>	
				<li>
                  <div class="media">
                    <div class="media-left">
                      <a class="news_img" href="newsandevents-live.php?id=518">
                      <img class="media-object" src="./newsletter/news/images/prime-minister-news-6280622300.jpg" alt="img">
                    </a>
                    </div>
                    <div class="media-body">
                      <a href="newsandevents-live.php?id=518">PRIME MINISTER VISITS AITCHISON TO OPEN CRICKET SCOREBOARD</a>
                      <span class="feed_date" style="color: #010101;">May 4<sup>th</sup>, 2019</span>
                    </div>
                  </div>
                </li>
				
                
                
                
                 <!--<li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="hmjs-assembly-27-04-2016.php">
                          <img class="media-object" src="./galimages/images/hmjs-27-04-2016/small/8.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="hmjs-assembly-27-04-2016.php">HMJS ASSEMBLY, APRIL 2016</sup></a>
                       <span class="feed_date">April 27, 2016</span>
                      </div>
                    </div>
                  </li>-->
                  
                  <?php
                  	//$event_day=strtotime(date("02-04-2016"))+(60*24*3600);
					//if($event_day >= strtotime(date("d-m-Y")))
					//if(false)
					{
				  ?>
                  <!--<li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="ac-fday02042016.php">
                          <img class="media-object" src="galimages/images/fday02042016/main.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="ac-fday02042016.php">130<sup>th</sup> Founders Day</sup></a>
                       <span class="feed_date">April 2, 2016</span>
                      </div>
                    </div>
                  </li>-->
                  <?php
                  }
				  ?>
                  
                  <!--
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/dare.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">DARE TO PLAY FAIR</a>
                       <span class="feed_date">October 24, 2014, 11:22 AM</span>                
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/foundersday.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Founder's Day Prize Distribution 2014 (Junior School)</a>
                       <span class="feed_date">March 5, 2014, 11:02 AM
</span>                

                      </div>
                    </div>
                  </li>  -->                
                </ul>
                
                <br /><br />
                <div class="row">
                    <a style="padding: 2px 10px;" href="events-archive.php" rel="noopener noreferrer" class="btn btn-primary" role="button">Events Archive</a>
                </div>
              </div>
              
              
              
              <div class="tab-pane fade<?php echo (!empty($_GET['selection']) && ($_GET['selection']=="alumninews"))?' in active':'';?>" id="alumninews">                
                <ul class="news_tab">
                <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="alumni/newsletters/newsletter-november-2019.pdf" target="_blank">
                          	<img class="media-object" src="./img/nne_logo.png" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="alumni/newsletters/old-boys-bulletin-2019-vol-4.1.pdf" target="_blank" class="active">ALUMNI NEWSLETTER November 2019</a>
                           <!--<span class="feed_date" style="color:rgba(47,44,44,1.00);"></span>-->
                        </div>
                      </div>
                  </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="alumni/newsletters/newsletter-december-2018.pdf" target="_blank">
                          	<img class="media-object" src="./img/nne_logo.png" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="alumni/newsletters/newsletter-december-2018.pdf" target="_blank">ALUMNI NEWSLETTER December 2018</a>
                           <!--<span class="feed_date" style="color:rgba(47,44,44,1.00);"></span>-->
                        </div>
                      </div>
                  </li>
				          <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="alumni/newsletters/newsletter-august-2018.pdf" target="_blank">
                          	<img class="media-object" src="./img/nne_logo.png" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="alumni/newsletters/newsletter-august-2018.pdf" target="_blank">ALUMNI NEWSLETTER August 2018</a>
                           <!--<span class="feed_date" style="color:rgba(47,44,44,1.00);"></span>-->
                        </div>
                      </div>
                  </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="alumni/newsletters/newsletter-april-2018.pdf" target="_blank">
                          	<img class="media-object" src="./img/nne_logo.png" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="alumni/newsletters/newsletter-april-2018.pdf" target="_blank">ALUMNI NEWSLETTER APRIL 2018</a>
                           <!--<span class="feed_date" style="color:rgba(47,44,44,1.00);"></span>-->
                        </div>
                      </div>
                  </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="alumni/newsletters/newsletter-december-2017.pdf" target="_blank">
                          	<img class="media-object" src="./img/nne_logo.png" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="alumni/newsletters/newsletter-december-2017.pdf" target="_blank">Alumni Newsletter December 2017</a>
                           <!--<span class="feed_date" style="color:rgba(47,44,44,1.00);"></span>-->
                        </div>
                      </div>
                  </li>
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="alumni/newsletters/newsletter-september-2017.pdf" target="_blank">
                          	<img class="media-object" src="./img/nne_logo.png" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="alumni/newsletters/newsletter-september-2017.pdf" target="_blank">Alumni Newsletter September 2017</a>
                           <!--<span class="feed_date" style="color:rgba(47,44,44,1.00);"></span>-->
                        </div>
                      </div>
                  </li>
                  
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="alumni/newsletters/newsletter-july-2017.pdf" target="_blank">
                          	<img class="media-object" src="./img/nne_logo.png" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="alumni/newsletters/newsletter-july-2017.pdf" target="_blank">Alumni Newsletter July 2017</a>
                           <!--<span class="feed_date" style="color:rgba(47,44,44,1.00);"></span>-->
                        </div>
                      </div>
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
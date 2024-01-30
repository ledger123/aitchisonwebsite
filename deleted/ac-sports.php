<?php
	include("standard/main.php"); 
	//$banner_image_url="img/pageimages/misc.jpg";
	$banner_image_url="img/pageimages/robbinson-09122017.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=4;
	
	$page = isset( $_REQUEST['p'] ) ? $_REQUEST['p'] : "sports";
	//$pages = array('sports','sheroes','cricket','philosophy','mission');
$pages = array('sports','sheroes','cricket','ideals','mission', 'athletesprayer');
	
	if (!in_array($page, $pages))
		header("Location: https://aitchison.edu.pk/ac-sports.php");
		//$page = "sports";
	
	$none = "display:none;";
	$display = "display:table-row;";
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Sports Acitivities</title>
	
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
			    <?php if ($page == "athletesprayer") { ?>
                 
                            <h3 class="titile" style="font-size: 24px; text-align: center;">Sporting Philosophy</h3>
                            <p>							
							<pre style="text-align: center; border: none; font: inherit; font-size: 16px; padding-left: 20px; line-height: 2.0em;">
<strong>Athlete's Prayer:</strong>
God, let me play well but fairly.
Help me to learn something that matters
once the game is over. 
Let competition make me strong but never hostile.
Always let me help my opponent up.
Never catch me rejoicing in the adversity of others.
If I know victory, allow me to be happy; if I am denied, keep me from envy. 
Remind me that sports are just games. 
If through athletics I set an example,
let it be a good one.  
							</pre>							
							</p>
                            <p>&nbsp;</p>                            
                            <p>&nbsp;</p><br>
                            
                      
          		<?php } elseif ($page == "sports") { ?>
          		<div class="row" id="sports" style='<?php if ($page == "sports") echo $display; else echo $none; ?>'>
                	<div class="col-lg-12 col-md-12 col-sm-12">
                    	<div class="aboutus_area wow fadeInLeft">
                            <h2 class="titile">Sports</h2>
                            <div class="row">
								<div class="col-lg-5 col-md-5 col-sm-12">
								<p style="line-height: 1.7em;">Aitchison offers a wide variety of sports with excellent coaching and playing facilities. Games and sports are played for enjoyment first, although there is always a strong sense of competitiveness in both house and school fixtures. The aim of the Sports Department is to engage all boys in some form of physical activity. Being part of a team has its obvious benefits in promoting healthy relationships and well-being, but leadership, self-respect, confidence, discipline and teamwork are all indispensable parts of the general sporting education. The College has many designated coaches, PT staff and support staff to support a vital whole school programme under the direction of the Head of Games and Sports.</p>
								</div>
								<div class="col-lg-7 col-md-7 col-sm-12">
									<img src="newsletter/news/images/sajjad-ali-khan-03122018-a.jpg" style="width: 100%; height: auto;">
									<p style="font-size: small; padding-top: 20px;">Aitchison College Cross Country Champion Sajjad Ali Khan, 8 times winner of Cross Country Race and 2 times recipient of the Walter A. Robinson Challenge Cup (2016 & 2017). </p>
								</div>
							</div>
                            
                            <div class="row">
                                    <div class="col-lg-9 col-md-12 col-sm-12">
                                    <p> <strong>Facilities include:</strong> </p>
                                    <ul style="display: block; list-style-type: disc; margin-before: 1em; margin-after: 1em; margin-start: 0; margin-end: 0; padding-start: 400px; padding: 0 0 0 20px;">
                                        <li>Riding School (3 manages, tent pegging range, show jumping and dressage)</li>
                                        <li>2 Cricket Pavilions (Rab and ACOBA pavilions)</li>
                                        <li>8 Cricket Grounds (MCG, ACOBA, Zulfiqar 1 &amp; 2, Sunderdas, Junior 1, 2 &amp; 3)</li>
                                        <li>Cricket Academy (6 synthetic nets and bowling machines)</li>
                                        <li>3 x 8 Lane Swimming Pools</li>
                                        <li>4 Football Fields</li>
                                        <li>2 Hockey Fields</li>
                                        <li>3 Court Squash Complex</li>
                                        <li>6 Grass, 6 Synthetic and Hard Surface Tennis Courts</li>
                                        <li>3 Basketball Courts</li>
                                        <li>Hall for Indoor Training. </li>
                                        <li>Grounds and gardens are kept immaculate by a committed and skilled team of groundsmen.</li>
                                    </ul>
                                    </div>
                                    <div align="right" class="col-lg-3 col-md-12 col-sm-12" style="border-left: 2px solid #afafaf; padding-right:0px;">
                                    <p align="right"> <strong style="">The following sports<br> are offered:</strong></p>
                                    <ul style="display: block; text-align:left; list-style-type: disc; margin-before: 1em; margin-after: 1em; margin-start: 0; margin-end: 0; padding-start: 400px; padding: 0 0 0 20px;">
                                        <li>Athletics</li>
										<li>Badminton</li>
										<li>Basketball</li>
										<li>Cricket</li>
										<li>Field Hockey</li>
										<li>Football</li>
										<li>Lawn Tennis</li>
										<li>Mini Gym Facility</li>
										<li>Riding</li>
										<li>Rugby</li>
										<li>Squash</li>
										<li>Swimming</li>
										<li>Table Tennis</li>
										<li>Water Polo</li>
                                    </ul>
                                    </div>  
                                    <br>
                                    
                            </div>
                            <br><br>
                            
                            <div class="row">
                                <div class="col-lg-12  col-lg-offset-1 col-md-12 col-md-offset-1 col-sm-12 col-sm-offset-1">
                                    <div id="gallerySLide" class="sgallery_area">
										
                                        <?php
                                            for($i=1 ; $i <=6 && false; $i++){
                                        ?>
                                        <a href="galimages/Sports/sports/<?php echo $i;?>.jpg" title="Sports">
                                          <img class="gallery_img" src="galimages/Sports/sports/small/<?php echo $i;?>.jpg" alt="img" />
                                          <span class="view_btn">Sports</span>
                                        </a>
                                        <?php
                                            }
                                        ?>
										
										
										<a href="galimages/Sports/sports/1.jpg" title="Sports">
                                          <img class="gallery_img" src="galimages/Sports/sports/small/1.jpg" alt="img" />
                                          <span class="view_btn">Sports</span>
                                        </a>
										
										<a href="galimages/Sports/sports/2.jpg" title="Sports">
                                          <img class="gallery_img" src="galimages/Sports/sports/small/2.jpg" alt="img" />
                                          <span class="view_btn">Sports</span>
                                        </a>
										
										<a href="galimages/Sports/sports/3.jpg" title="Sports">
                                          <img class="gallery_img" src="galimages/Sports/sports/small/3.jpg" alt="img" />
                                          <span class="view_btn">Sports</span>
                                        </a>
										
										<a href="galimages/Sports/sports/4.jpg" title="Sports">
                                          <img class="gallery_img" src="galimages/Sports/sports/small/4.jpg" alt="img" />
                                          <span class="view_btn">Sports</span>
                                        </a>
										
										<a href="galimages/Sports/sports/5.jpg" title="Sports">
                                          <img class="gallery_img" src="galimages/Sports/sports/small/5.jpg" alt="img" />
                                          <span class="view_btn">Sports</span>
                                        </a>
										
										<a href="galimages/Sports/sports/6.jpg" title="Sports">
                                          <img class="gallery_img" src="galimages/Sports/sports/small/6.jpg" alt="img" />
                                          <span class="view_btn">Sports</span>
                                        </a>

                                     </div>
                                  </div> 
                            </div>
                    </div>
                </div>
                  	
          		</div>
                <?php } elseif ($page == "sheroes") { ?>
                <div class="row" id="sportingheroes" style='<?php if ($page == "sheroes") echo $display; else echo $none; ?>'>
                	<div class="col-lg-12 col-md-12 col-sm-12">
                    	<div class="aboutus_area">
                            <h2 class="titile">Sporting Heroes</h2>
                            <p>The College has a pantheon of past champions who have left their indelible mark on sport.</p>
                            <p>&nbsp;</p>
                           
                            	<div class="row">
                                 <h3><p>&nbsp;</p>
                            </h3>
                                    <div class="col-lg-12  col-lg-offset-1 col-md-12 col-md-offset-1 col-sm-12 col-sm-offset-1">
                                        <div id="gallerySLide" class="sgallery_area">                                            
                                            <a href="img/sportsheroes/imrankhan.jpg" title="Imran Khan">
                                              <img class="gallery_img" src="img/sportsheroes/small/imrankhan.jpg" alt="img" />
                                              <span class="view_btn">Imran Khan</span>
                                            </a>
                                            
                                            <a href="img/sportsheroes/iftikhar-ali-khan-pataudi.jpg" title="Iftikhar Ali Khan Pataudi">
                                                <img class="gallery_img" src="img/sportsheroes/small/iftikhar-ali-khan-pataudi.jpg" alt="img" />
                                                <span class="view_btn">Iftikhar Ali Khan Pataudi</span>
                                              </a>
                                              
                                              <a href="img/sportsheroes/mj.jpg" title="Majid Khan">
                                                <img class="gallery_img" src="img/sportsheroes/small/mj.jpg" alt="img" />
                                                <span class="view_btn">Majid Khan</span>
                                              </a>
                                              
                                              <a href="img/sportsheroes/rameezraja.jpg" title="Rameez Raja">
                                                <img class="gallery_img" src="img/sportsheroes/small/rameezraja.jpg" alt="img" />
                                                <span class="view_btn">Rameez Raja</span>
                                              </a>
                                              
                                              <a href="img/sportsheroes/hs.jpg" title="Hassan Sardar">
                                              <img class="gallery_img" src="img/sportsheroes/small/hs.jpg" alt="img" />
                                              <span class="view_btn">Hassan Sardar</span>
                                            </a>
                                              <a href="img/sportsheroes/qasimzia.jpg" title="Qasim Zia">
                                                <img class="gallery_img" src="img/sportsheroes/small/qasimzia.jpg" alt="img" />
                                                <span class="view_btn">Qasim Zia</span>
                                              </a>    
                                              <a href="img/sportsheroes/rashid.jpg" title="Rashid A. Malik">
                                                <img class="gallery_img" src="img/sportsheroes/small/rs.jpg" alt="img" />
                                                <span class="view_btn">Rashid A. Malik</span>
                                              </a>
                                              <a href="img/sportsheroes/wahabriaz.jpg" title="Wahab Riaz">
                                                <img class="gallery_img" src="img/sportsheroes/small/wahabriaz.jpg" alt="img" />
                                                <span class="view_btn">Wahab Riaz</span>
                                              </a>
                                              
                                              <a href="img/sportsheroes/hockey-team-berlin-1936.jpg" title="Syed Muhammad Jaffar in Hockey Team Berlin 1936">
                                                <img class="gallery_img" src="img/sportsheroes/small/hockey-team-berlin-1936.jpg" alt="img" />
                                                <span class="view_btn">S. M. Jaffar</span>
                                              </a>                                            
                                        </div>
                                     </div>
                              </div>
                        </div>   
                    </div>
                </div>
			  <?php } elseif ($page == "cricket") { ?>
                 <div class="row" id="cricket" style='<?php if ($page == "cricket") echo $display; else echo $none; ?>'>
                	<div class="col-lg-12 col-md-12 col-sm-12">
                    	<div class="aboutus_area">
                            <h2 class="titile">Cricket</h2>
                            <div class="row">
                                
                                <div class="col-lg-6 col-md-6 col-sm-12">
                            		<p style="line-height: 1.6em;">Cricket has a special pride of place in a school that has produced an unusual number of outstanding First-Class cricketers, including former Test captains Iftikhar Ali Khan Pataudi (India), and Majid Khan and Imran Khan (Pakistan). The famous Black pavilion sets the backdrop to one of the finest cricket grounds in Pakistan. Over the years, Test teams have regularly chosen to practise at Aitchison</p> 
                                    <p style="line-height: 1.6em;">The College team plays many local schools in competitive trophy matches, as well as Indian schools. Among these are: Lawrence College, YPS Patiala, Mayo College and Rajkot College.</p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                	<img src="img/pageimages/cricketpav-26052016-a.jpg" class="img-responsive" width="100%" height="auto">
                                    <div align="center">
                                    	<p style="text-align: center !important;">Cricket Pavilion</p><br><br>
                                    </div>
                                </div>
                            </div>
                          
                            
                            
                            <div class="row">
                            	<div class="col-lg-6 col-md-12 col-sm-12" align="center">
                                  <p><img src="img/pageimages/im-25052017.jpg" class="img-responsive" style="padding: 4px; width: 100%; height: auto;"/>Cricket Team, 1969 <br>(<span style="font-size: 12px;">Imran Khan seated second left in front row</span>)</p>
                                  
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12" align="center">
                                  <p align="center"><img src="img/pageimages/im-1963-25052017.jpg" class="img-responsive" style="padding: 4px; width: 100%; height: auto;"/>Cricket on Barry Field, 1963</p>
                                </div>
                            </div>
                            <br><br>

                            <div class="col-lg-12 col-md-12 col-sm-12">
    							<div align="center">
                                	<a href="gallery_all_sports.php"><span style="color: #000099; font-size: 16px;">CLICK HERE FOR SPORTS GALLERY</span></a> 
                                </div>
                            </div>
                            <p>&nbsp;</p><br>
                            
                      </div>   
                    </div>
                </div>
			  
			  <?php } elseif ($page == "mission") { ?>
                 <div class="row" id="missionstatement" style='<?php if ($page == "mission") echo $display; else echo $none; ?>'>
                	<div class="col-lg-12 col-md-12 col-sm-12">
                    	<div class="aboutus_area">
                            <h2 class="titile">Mission Statement</h2>
                            <p>To provide an enjoyable, quality, competitive and team orientated sporting program where students and coaches interact to assist boys' physical and emotional development within the Associated Public Schools and wider sporting community.</p>
                            <p>&nbsp;</p>                            
                            <p>&nbsp;</p><br>
                            
                      </div>   
                    </div>
                </div>
			  <?php } elseif ($page == "ideals") { ?>
                 <div class="row" id="sportingphilosophy" style='<?php if ($page == "ideals") echo $display; else echo $none; ?>'>
                	<div class="col-lg-12 col-md-12 col-sm-12">
                    	<div class="aboutus_area">
                            <h2 class="titile">Ideals</h2>
                            <p><strong>Self discipline</strong></p>

                            <p>It is essential that boys understand the importance of discipline and, in particular, self discipline in sport. Sport offers many opportunities that require great self control for the benefit of individuals, team and our community.</p>
                            
                            <p><strong>Self esteem</strong></p>
                            
                            <p>Coaches are expected to create a positive and supportive environment so that each boy feels good about himself and his involvement in sport.</p>
                            
                            <p><strong>Sportsmanship</strong></p>
                            
                            <p>Coaches, boys and the general Aitchison community must ensure that we play within the rules and respect opposition players, coaches, referees and spectators.</p>
                            <p>&nbsp;</p>                            
                            <p>&nbsp;</p><br>
                            
                      </div>   
                    </div>
                </div>
			<?php } ?>
                
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
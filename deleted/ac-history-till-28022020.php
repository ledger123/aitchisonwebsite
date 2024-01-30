<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/banner-history_page.jpg";
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
     <title>Aitchison College:- Aitchison's History</title>

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

  </head>
  <style>
  .para{
		padding-bottom: 6px;  
   }
   .imgtitle{
		font-size: 12px;
	}
	.quotedtext{
		font-size: 12px;   
		text-align: justify;		
	}
	
	  .quotedtextBox {
		  
		  padding-left: 115px; padding-right: 140px; padding-top: 20px; padding-bottom: 20px;
	  }
	  
	  @media(max-width:767px ){ 
		  .quotedtextBox {
		  	
			  padding-left: 5px; padding-right: 5px; padding-top: 20px; padding-bottom: 20px;
		  }
	  }
	  
	  
	
	.dialog-text {
		text-align: center; color: #0b3b6f;     border: 1px #0b3b6f solid;
    border-top: none;
    padding: 8px 0px;
	}
	
	.dialog-text h4 {
		font-size: 15px; font-weight: bold; color: #0b3b6f; font-style: italic;
	}
	
	@media (max-width: 768px) {
		
		.dialog-text {
			font-size: 11px;
		}
		
		.dialog-text a {
			font-size: 11px;
		}
		
		.dialog-text h4 {
			font-size: 13px;
		}
	}
	
	
  </style>
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
            	<div align="center" style="margin-top: 10px;">
					<img id="imgHistory" alt="Photographic History" class="img-responsive" src="newsletter/news/images/photographic-history-1-469.jpg" style="width: 100%">
					<div class="dialog-text">
						<!--<a href="#"><h3 style="color: #0b3b6f;">Get this book</h3></a>-->
						On sale at Alumni Office:<br >
						<a href="reliving-aitchison.php" target="new"><h4>Reliving Aitchison<br >A Modern Photographic History</h4></a>

						<a href="newsandevents-live.php?id=482" style="color: #0b3b6f;" target="new">How to place an order</a>

					</div>
					
					<br/>
					
            		<img src="img/ac-history/4.jpg" style="width: 99%; height: auto;" alt="Maharaja Bhupinder Singh of Patiala" />
                    <span class="imgtitle" style="text-align: center;">Maharaja Bhupinder Singh of Patiala <br>(Old Boy)</span>
					
			  </div>
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
            <h2 class="titile">Aitchison's history</h2>
            <div class="row">
            	<div class="col-sm-8">
                    <p>Aitchison College, by name, was established by the British as an elite institution with the objective of educating "the relatives of the Ruling Chiefs of the Punjab, youths of good family, and the minors under the guardianship of the Court of Wards." Because of its seamless connection with the Wards College of Umballa, we  are able to date our foundation back to 1868 when the original school provided Mr. Walter Robinson as Aitchison College's first principal and we received boys from that school. Reaffirming this Sir Charles Aitchison declared at the 1886 opening: "..the institution was the outcome of proposals which had been under consideration since 1864, and which had been partially realised since the establishment of the Wards School at Umballa."</p>
                    <!--<p>Aitchison College was established by the British as an elite institution with the objective of educating "the relatives of the Ruling Chiefs of the Punjab, youths of good family, and the minors under the guardianship of the Court of Wards." The site was selected with great care within a prestigious district located east of Government House (now the Punjab Governor's House). Being positioned midway between "Civil [Anarkali] and Military Stations [Mian Mir Cantonment]" the placement permitted the students to attend with ease all government functions, whether the garden parties of the Lieut. Governor or the military functions in the Cantonment. The campus, set up in almost 200 acres, was irrigated by an abundant supply of canal water.</p>-->
                </div>
                <div class="col-sm-4" align="center" style="padding-top: 25px;">
                	<img src="img/gtroad-ambala.jpg" class="img-rounded" alt="Grand Trunk Road Umballa Cantonment" width="100%">
				    <span class="imgtitle">G.T. Road Umballa Cantonment</span>
                </div>
            </div>
            
            <div class="row">
            	<div class="col-lg-4 col-md-4 col-sm-12">
                	<p style="text-align: center !important; padding-top: 25px;">
                    <img src="img/ac-gate-26052017.jpg" class="img-rounded" style="width: 99%; height: auto;" alt="Maratib Ali Gate of Aitchison College">
                    <span class="imgtitle">Maratib Ali Gate</span></p>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                	<p style="line-height: 1.8em;">Originally named as Punjab Chief’s College on 2<sup>nd</sup> January 1886, its foundation stone at the current site was laid on 3<sup>rd</sup> November, 1886, by the Viceroy Earl of Dufferin and Ava, "in the presence of a very large and representative assemblage, European and Native, including the Duke and Duchess of Connaught, the Countess of Dufferin, Sir Charles Aitchison, the Lieut. Governor of the Province and many of the Ruling Chiefs of the Province." Some days later on 13<sup>th</sup> November, 1886, it was renamed Aitchison College, thus honouring the services of Sir Charles Umpherston Aitchison through whose efforts the College was established.</p>
                </div>
            	
            </div>
            <br>
            <p>On addressing the students in 1888, Sir Charles Aitchison said:</p>
            	
            <p class="quotedtextBox">
            		
            		<img src="img/quote_starting.png" width="30" height="23">
            			<span class="quotedtext">This is an institution from which you will banish everything in thought and word and act that is mean, dishonorable or impure, and in which you will cultivate everything that is virtuous, true, manly and gentlemanly.</span>
                    <img src="img/quote_ending.png" width="30" height="23">
            </p>
				
            <p> These words still inspire the College and remind us of its duty and that of every boy who enters its gates. </p>
            
            <div class="row">
            	
              <div class="col-lg-6 col-md-6 col-sm-12">
                	<p style="padding-top: 25px;"> In 2019 the College celebrated the 133<sup>rd</sup> Anniversary of its location at the current site. In that time 18 Principals have led the College and their photographs may be seen under Past Principals. <a href="ac-principals.php"><span style="color: #000099">Past Principals</span></a></a>.  </p>
		            <p style="padding-top: 25px;"> Construction of its most famous building – ‘Old Building’ – began in 1887 and was complete by 1890. Its existence is owed largely to three men: Bhai Ram Singh, Colonel Samuel Jacob and John Lockwood Kipling. This was the College’s first real school building, after moving classrooms away from boarding houses and rented bungalows. The fashion of education remained traditionally English Public School for much of the 20<sup>th</sup> century, now modified for the fresh demands of a new era in which half the boys graduating will take places in top American, British, Canadian and European universities.            </p>
                </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
                	<p style="text-align: center !important; padding-top: 25px;">
                    <img src="img/ac-history/2.jpg" style="width: 99%; height: auto;" class="img-rounded" alt="Sir Charles Aitchison with Maharajas at the foundation ceremony of Aitchison College" />
                    <span class="imgtitle"> Sir Charles Aitchison with Maharajas at the foundation ceremony of Aitchison College</span></p>
                </div>
            </div>    
            <div class="row">
              <div class="col-sm-9" align="justify">
    <p>Today, Aitchison is a vastly enriched school with many facilities and fine buildings immersed in splendid playing fields and natural surrounds. Some of its past principals are honoured by buildings erected in their honour: Godley House, Leslie Jones House, Kelly House, Barry Block, Gwyn House, and Shamim Khan Hall. The College has also been well supported by generous benefactors over many years; most notably since Independence by Syed Babar Ali - past student 1933-1945 and revered national figure.  </p>
    <p>Aitchison’s long history has not been denied colourful and challenging moments. As with all great schools, it has dealt with them in its own peculiar way. What has survived into the 21st century is a school of <?php echo number_format($db->countRecord("select count(schoolNo) as total from students", "total"));?><?php /*?>2,600<?php */?> boys where once there were only 12.</p>
              </div>
  <p><center><img src="img/ba.jpg" class="img-rounded" alt="Cinque Terre" width="165" height="180"></p>
  <p><center><span class="imgtitle">Syed Babar Ali</span></center></p>
  
             </p></div>
            <?php /*?><div class="row">
            	<div style="width: 22% !important; display: inline-block; padding: 0px; margin: 0px;">
                	<img src="img/ac-history/1.jpg" style="width: 100%; height: auto;" />
                </div>
                <div style="width: 50.5% !important; display: inline-block; padding: 0px; margin: 0px;" align="center">
                	<img src="img/ac-history/2.jpg" style="width: 96.5%; height: auto;" />
                </div>
                <div style="width: 26.1% !important; display: inline-block; padding: 0px; margin: 0px;">
                	<img src="img/ac-history/3.jpg" style="width: 100%; height: auto;" />
                </div>
                
            </div><?php */?>
            </div>
            
          </div>
          <!-- End course content -->

          <!-- start course archive sidebar -->
          
          <!-- start course archive sidebar -->
        </div>
      </div>
      <!--<div class="container" style="border: #990000 thin solid;">Akhtar rafiq</div>-->
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
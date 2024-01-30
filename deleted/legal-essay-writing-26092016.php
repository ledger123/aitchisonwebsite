<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=8;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College: ACMUN</title>

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


.promos {
	width:800px;
    align-content:center;
    margin: 0 auto;
    margin-top: 50px;
	font-family: 'Open Sans', sans-serif;
    font-size: 11px;
    font-weight: 400;
}
.promo {
    width: 130px;
    background: #003;
    color: #f9f9f9;
    float: left;
}
.scale {
    transform: scale(1.2);
    box-shadow: 0 0 4px 1px rgba(20, 20, 20, 0.8);
}
.deal {
    padding: 10px 0 0 0;
}
.deal span:first-of-type {
    font-size: 14px;
}
.deal span {
    display: block;
    text-align: center;
}
.scale .position {
    color: #64AAA4;
}
.promo .position {
    display: block;
    width: 130px;
    background: #292b2e;
    margin: 15px 0 10px 0;
    text-align: center;
    font-size: 12px;
    padding: 12px 0 12px 0;
}
.promos li {
    display: block;
	text-align:center;
	padding: 0 10px;
}
.promos ul {
    list-style-type: none;
    text-align: center;
    color: #f9f9f9;
	padding:0px;
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
          	<div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="aboutus_area wow fadeInLeft">
                        <h2 class="titile">Legal Essay Writing Competition, 2016</h2>
                        
                        <p>The Aitchison College Law Society conducted second edition of the Legal Essay Writing Competition on Monday i.e. 26<sup>th</sup> of September, 2016. The event was a highly successful one with more than sixty students participating. It was not an Inter-House event still, good participation was noted from all the houses at Senior School. Most of the students had come well prepared and the quality of essays on offer was exceptional.</p>
                        
                        <p>The purpose of this event was to generate interest in the subject of Law, especially amongst O' level students. Thus, the topics set, were of a generalized nature and required very limited legal knowledge. The fact that this event was successful in achieving its purpose can be judged from the fact that most of the students participating were from M2, C1 and C2.</p>
                        
                        
                        <p>Ali Uzair Bhandari, a student of H2 and President of the Aitchison College Law Society, assisted the staff advisor as the organizer of the event.</p>
                        <p>The topics of the event were as follows:
                        <ol start="number" style="text-align:left;">
                        	<li>Capital punishment; yea or nay?</li>
                            <li>Does the current law on honor killings in Pakistan do justice to the victims? If not, discuss ways in which it can be amended.</li>
                            <li>Rule of law v. Rule by Clergy: Comment</li>
                            <li>Impact of Cyber-crime laws on fundamental rights in Pakistan</li>
                        </ol>
                        </p>
                        <br />
                        <p>
                        	<div>The results of the event were:</div>
                            
                            <div class="row">
                            <!--<div class="col-lg-12 col-md-12 col-sm-12">-->
                                <div class="col-lg-6 col-md-6 col-sm-12 promos" style="width:50%;">
                                    <div class="promo">
                                      <div class="deal">
                                        <span>&nbsp;</span>
                                        <span></span>
                                      </div>
                                      <span class="position">2<sup>nd</sup> Position</span>
                                      <ul class="features">
                                        <li>&nbsp;</li>
                                        <li>Muhammad Maair Imtiaz (M2)</li>
                                        <li>&nbsp;</li>   
                                      </ul>
                                    </div>
                                    <div class="promo scale">
                                      <div class="deal">
                                        <span>Juniors Category</span>
                                        <span></span>
                                      </div>
                                      <span class="position">1<sup>st</sup> Position</span>
                                      <ul class="features">
                                        <li>&nbsp;</li>
                                        <li>Muhammad Abdullah Khurram (C1)</li>
                                        <li>&nbsp;</li>
                                      </ul>
                                    </div>
                                    <div class="promo">
                                      <div class="deal">
                                        <span>&nbsp;</span>
                                        <span></span>
                                      </div>
                                      <span class="position">3<sup>rd</sup> Position</span>
                                      <ul class="features">
                                        <li>&nbsp;</li>
                                        <li style="padding:0 26px;">Hamd Azan (C1)</li>
                                        <li>&nbsp;</li>   
                                      </ul>
                                      
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12" style="width:50%; text-align:right;">
                                	<div class="promos">
                                    <div class="promo">
                                      <div class="deal">
                                        <span>&nbsp;</span>
                                        <span></span>
                                      </div>
                                      <span class="position">2<sup>nd</sup> Position</span>
                                      <ul class="features">
                                        <li>&nbsp;</li>
                                        <li>Muhammad Jalal Chaudhry (H1)</li>
                                        <li>&nbsp;</li>   
                                      </ul>
                                    </div>
                                    <div class="promo scale">
                                      <div class="deal">
                                        <span>Seniors Category</span>
                                        <span></span>
                                      </div>
                                      <span class="position">1<sup>st</sup> Position</span>
                                      <ul class="features">
                                        <li>&nbsp;</li>
                                        <li>Muhammad Zain Sultan Chatha (H1)</li>
                                        <li>&nbsp;</li>
                                      </ul>
                                    </div>
                                    <div class="promo">
                                      <div class="deal">
                                        <span>&nbsp;</span>
                                        <span></span>
                                      </div>
                                      <span class="position">3<sup>rd</sup> Position</span>
                                      <ul class="features">
                                        <li>&nbsp;</li>
                                        <li>Muhhammad Ibrahim Raza (H1)</li>
                                        <li>&nbsp;</li>   
                                      </ul>
                                      
                                    </div>
                                    </div>
                                </div>
                            <!--</div>-->
                            </div>
                            <br /><br /><br />
                            <div>
                            <p>Staff Advisor and members of A.C.L.S. are obliged to the administration of Senior School especially Madam Amina Kamran Headmistress Senior School for her patronage, continuous support and encouragement.</p>
                            </div>
                            
                            <!--<div><strong>Juniors Category:</strong></div>
                            <table border="0" cellpadding="8" style="margin-left:30px;">
                            	<tr><td>1<sup>st</sup> Position</td><td style="margin:5px;">- Muhammad Abdullah Khurram (C1)</td></tr>
                                <tr><td>2<sup>nd</sup> Position</td><td>- Muhammad Maair Imtiaz (M2)</td></tr>
                                <tr><td>3<sup>rd</sup> Position</td><td>- Hamd Azan (C1)</td></tr>
                            </table>
                            <br /><br />
                            <div><strong>Seniors Category:</strong></div>
                            <table border="0" style="margin-left:30px;">
                            	<tr><td>1<sup>st</sup> Position</td><td style="margin:5px;">- Muhammad Zain Sultan Chatha (H1)</td></tr>
                                <tr><td>2<sup>nd</sup> Position</td><td>- Muhammad Jalal Chaudhry (H1)</td></tr>
                                <tr><td>3<sup>rd</sup> Position</td><td>- Muhhammad Ibrahim Raza (H1)</td></tr>
                            </table>-->
                        </p>
                        
                        
                        <br /><br />
                        
                    </div>
                    <br /><br />
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
<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/boarding-banner.jpg";
	//header("location: ac-principal_newsletter.php");
	//$banner_text="About Aitchison College";
	$banner_text="";
	
	$default_open=5;
	//echo "akhtarRafiq";print_r($records);
	header('X-Frame-Options: SAMEORIGIN');
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- International Enrolments</title>

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

.image-left {
    float: left;
    margin: 0px 20px 10px 0px;
	padding-left:15px;
	max-width:250px;
}
@media(max-width:767px ){
	.image-left {
		float: left;
		margin: 0px 20px 10px 0px;
		padding-left:0px;
		max-width:100%;
	}
}

.custom { color:#000099; }

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
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div align="center" style="padding-bottom: 20px;">
                        <img src="./img/ac_logo.png" width="130" height="130" alt="Aitchison College, Lahore."/> 
                    </div>
                </div>
                
             </div>
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                
                <!--<div align="center" style="padding-bottom: 20px;" style="height:auto;overflow:auto;">
                    <img class="img-responsive" src="img/international-enlorments-20052017/1.jpg" alt="" style="width: 100%;height:auto;">
                </div>-->
                
                <h3 style=""><strong>International Enrolments<?php /*?> for O Level/IGCSE &amp; AS/A2 Levels<?php */?></strong></h3>
                <p>Aitchison College offers a limited number of places each year for international students with preference given to those entering O Levels/IGCSE to A Levels within its <a href="ac-boarding-houses.php" target="_blank" class="custom">boarding community</a>. This offer would suit foreign or expatriate families with cultural attachments to Pakistan, eager for their sons to acquaint themselves with family, heritage or language, while receiving a top international education. It would also suit families who wish to rekindle historical connections to the <em>Eton of Pakistan</em>. Indeed, boarders enjoy the beauty of one the world’s most outstanding educational environments. </p>
              <?php /*?><p>Aitchison College offers places for international students entering O Levels/IGCSE to A Levels within its <a class="custom" href="ac-boarding-houses.php">boarding community</a>. This offer would suit expatriate families with cultural attachments to Pakistan, eager for their sons to acquaint themselves with family, heritage or language, while receiving a top international education. It would also suit families who wish to rekindle historical connections to the Eton of Pakistan. Indeed, boarders enjoy the beauty of one the world's most outstanding educational environments.</p><?php */?>
				<br/>
                <div class="row" style="margin-left: 0px; margin-right: 0px;">
                	<img class="img-responsive image-left" src="img/international-enlorments-20052017/2.jpg" alt="">
                    <p>As a school renowned world-wide for excellence in residential education for over 130 years, our facilities, systems and educational support are extremely good.  Aitchison College has been a Cambridge Examination Centre since 1933 –the only school-based centre in the country. Our academic results are impressive with a high proportion of boys gaining admission to <a href="ac-university-placements.php" target="_blank" class="custom">top universities</a> in the USA, UK, Canada, Germany and Holland, and here also in Pakistan. On average around 80% of our A Level students gain admission overseas. Among the typical undergraduate courses are: Medicine, Engineering, Law, IT and Programing, Marketing, Economics and Business. Underpinning these outcomes is Aitchison’s own <a href="ac-career-guidance.php" target="_blank" class="custom">University Guidance Department</a> that helps with career and admissions advice, SAT and ACT preparations, and general applications to universities, including UCAS and individual US and other foreign colleges.</p>
                	<?php /*?><p>As a school renowned world-wide for excellence in residential education for over 130 years, our facilities, systems and educational support are extremely good.  Aitchison College has been a Cambridge Examination Centre since 1933 –the only school-based centre in the country. Our academic results are impressive with a high proportion of boys gaining admission to <a class="custom" href="ac-university-placements.php">top universities</a> in the USA, UK, Canada, Germany and Holland, and here also in Pakistan. On average around 80% of our A Level students gain admission overseas. Among the typical undergraduate courses are: Medicine, Engineering, Law, IT and Programing, Marketing, Economics and Business. Underpinning these outcomes is Aitchison's own <a class="custom" href="ac-career-guidance.php">University Guidance Department</a> that helps with career and admissions advice, SAT and ACT preparations, and general applications to universities, including UCAS and individual US and other foreign colleges.</p><?php */?>
                </div>
                
                <br/>
                <div class="row"  style="margin-left: 0px; margin-right: 0px;">
                	<img class="img-responsive" src="img/international-enlorments-20052017/3.jpg" alt="" style="width: 100%;max-height:80%;"><br/>
                    <p>Our educational program is broad and engaging in <a href="ac-sports.php" target="_blank" class="custom">sports</a> and <a href="ac-cocurricular.php" target="_blank" class="custom">co-curricular activities</a>, including the <a href="ac-precent_newsletter.php?id=6094" target="_blank" class="custom">Duke of Edinburgh International Award</a>. As such, boarders pursue a balanced and busy school life that also includes time for social activities, special house dinners, as well as excursions into the Old City and the surrounds of Lahore on some weekends. Northern trekking camps are held in July. Our sporting teams regularly travel overseas on tours to the United Kingdom, India, Middle East and Australia. Of particular note, Aitchison has one of the best <a href="ac-riding.php" target="_blank" class="custom">riding programs</a> in the world. Tent pegging and show jumping are featured events.  Older boys may also learn to ride as part of their education under the watchful eyes of trained horseman. </p>
                	<?php /*?><p>Our educational program is broad and engaging in <a class="custom" href="ac-sports.php">sports</a> and <a class="custom" href="ac-cocurricular.php">co-curricular activities</a>, including the <a class="custom" href="ac-precent_newsletter.php?id=6094">Duke of Edinburgh International Award</a>. As such, boarders pursue a balanced and busy school life that also includes time for social activities, special house dinners, as well as excursions into the Old City and the surrounds of Lahore on some weekends. Northern trekking camps are held in July. Our sporting teams regularly travel overseas on tours to the United Kingdom, India, Middle East and Australia. Of particular note, Aitchison has one of the best <a class="custom" href="ac-riding.php">riding programs</a> in the world. Tent pegging and show jumping are featured events.  Older boys may also learn to ride as part of their education under the watchful eyes of trained horseman.</p> <?php */?>
                    <p>Aitchison has an Australian Principal, British appointments as Vice-Principal and Housemaster overseeing highly experienced and qualified Academic Heads and general teaching staff. All classes are conducted in English and the classroom experience is interactive and explorative, with seniors engaging in the Harkness Table and a unique Meta Cognition Curriculum that extends boys’ learning and thinking as part of their journey toward tertiary education. A2 Level students attend a special lecture and tutorial based school program, adding to the effectiveness of general classroom teaching.</p>
					<?php /*?><p>Aitchison has an Australian Principal, British appointments as Vice-Principal and Headmaster of Prep School overseeing highly experienced and qualified Academic Heads and general teaching staff. All classes are conducted in English and the classroom experience is interactive and explorative, with seniors engaging in the Harkness Table and a unique Meta Cognition Curriculum that extends boys' learning and thinking as part of their journey toward tertiary education. A2 Level students attend a special lecture and tutorial based school program, adding to the effectiveness of general classroom teaching.</p><?php */?>
                </div>
                
                <div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                		<img class="img-responsive" src="img/international-enlorments-20052017/4.jpg" alt="" style="margin-bottom:10px;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    	<img class="img-responsive" src="img/international-enlorments-20052017/5.jpg" alt="" style="margin-bottom:10px;">
					</div>
                </div>
                <br/>
                <div class="row" style="margin-left: 0px; margin-right: 0px;">
                	<p>The boarding experience is the true way to experience Aitchison College. Each of the three senior houses has beautifully appointed Common rooms and very pleasant sleeping quarters, each with adjoining washrooms and private study facilities. Expert teachers in all subjects are on hand to ensure that academic needs are met promptly. Boarders at Aitchison uphold the traditions of the original Chiefs’ College, wearing white salwar kameez in summer and black sherwani in winter. Our educational parts are greater than the whole. Boys from Aitchison are groomed to be gentlemen; confident, compassionate, objective and determined. It is what boys repeatedly ‘do’ that prepares them for effective adulthood. A boy educated at Aitchison has experienced something unique. </p>
                	<?php /*?><p>The boarding experience is the true way to experience Aitchison College. Each of the three senior houses has beautifully appointed Common rooms and very pleasant sleeping quarters, each with adjoining washrooms and private study facilities. Expert teachers in all subjects are on hand to ensure that academic needs are met promptly. Boarders at Aitchison uphold the traditions of the original Chiefs' College, wearing white salwar kameez in summer and black sherwani in winter. r educational parts is greater than the whole. Boys from Aitchison are groomed to be gentlemen; confident, compassionate, objective and determined. It what boys repeatedly 'do' that makes prepares them for effective adulthood. A boy educated at Aitchison has experienced something unique.</p><?php */?>
                </div>
                <br/>
                <div class="row">
					
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                		<img class="img-responsive" src="img/international-enlorments-20052017/6.jpg" alt="" style="margin-bottom:10px;">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    	<img class="img-responsive" src="img/international-enlorments-20052017/7.jpg" alt="" style="margin-bottom:10px;">
					</div>
					
                </div>
                
                <div class="row" style="margin-left: 0px; margin-right: 0px;">
                    <h3>Entrance Requirements</h3>
                    <p>International boys are accepted into senior boarding from the around the ages of 15 and 16 to study O Levels/Cambridge IGCSE and Cambridge AS and A levels.  These ages normally allow a boy to settle quickly into boarding without too much fuss, and with a good measure of independence and maturity. </p>
                    <?php /*?><p>International boys are accepted into senior boarding from the around the ages of 15 and 16 to study O Levels/Cambridge IGCSE and Cambridge AS and A levels.  These ages normally allow a boy to settle quickly into boarding without too much fuss, and with a good measure of independence and maturity.</p><?php */?>
                    <p>Aitchison College is a selective school by testing and interview. International boys will need to produce verifiably strong academic results submitted on an official school or examination council transcript. Our Academic Office will then contact the candidate’s school. Interviews may be conducted on skype with the Principal.  Parents considering this option are welcome to call the College or arrange a visit. A visit to our website is also advisable. By defination an international student is a boy who has been exclusively educated outside Pakistan.</p>
                    <?php /*?><p>Aitchison College is a selective school by testing and interview. International boys will need to produce verifiably strong academic results submitted on an official school or examination council transcript. Our Academic Office will then contact the candidate's school. Interviews may be conducted on skype with the Principal.  Parents considering this option are welcome to call the College or arrange a visit. A visit to our website is also advisable.</p><?php */?>
                    
                    
                    <h3>Application and Fees</h3>
                    <p>Application forms may be <a href="ac-application-form.php" target="_blank" class="custom">downloaded</a> and an <a href="ac-boarding-faq.php" target="_blank" class="custom">FAQ</a> on boarding is also available.</p>
                    <p>Our <a href="ac-international-fee.php" target="_blank" class="custom">International Fee Schedule</a> for the academic year 2018-19 is now available. Fees for Senior and Prep are the same.</p>
                    <p>In general, our boarding fees cover: all meals cooked in the boarding house kitchen by qualified chefs (breakfast, morning tea, lunch, afternoon tea, dinner, and light supper), provision of a generous bed share room with individual study facilities and attached washrooms. Our <a href="ac-boardinghandbook.php" target="_blank" class="custom">Boarding Handbook</a> details all the policies and operational aspects that shape boarding at Aitchison College.</p>
                    
                    <p style="margin: 0in 0in 8pt; text-align: justify; line-height: 150%;">&nbsp;</p>
                    
                    
                    With warm wishes,<br><br>
                    <img src="images/signature/principal_signature_new.png" width="212" height="72" ><br>
                    Michael A. Thomson 	M.A., Dip Ed., M.A.C.E (Australia)
                    <p>Principal</p>
                    
                </div>
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
    <script src="js/custom1.js"></script>
    

  </body>
</html>
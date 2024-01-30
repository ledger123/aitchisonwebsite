<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=-1;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Re: Re-Admission into Aitchison College H2 (2016-17) under Special Consideration</title>

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
  <style>
  .para{
		padding-bottom: 6px;  
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
                	<div align="center" style="padding-bottom: 20px;">
               	    <img src="./img/ac_logo.png" width="130" height="130" alt="Aitchison College, Lahore."/> </div>
                </div>
            </div>
          	<!--FIRST ROW :STARTED-->
          	<div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12">                
                	<div class="aboutus_area wow fadeInLeft">
                       <div align="center"><strong>LETTER TO PREP SCHOOL PARENTS</strong></div>
                       <p>May 25, 2016 </p>
                       
                       <p>There is general agreement world-wide that  &lsquo;Prep School&rsquo; is the most challenging age group in boys&rsquo; education. There is  a lot happening in terms of growth and self-awareness. Boys are leaving behind  childhood and forming as adolescents. There is also a sharp lift in academic  expectations as they detach from the concrete phase and enter the world of  early abstract thinking. Some are very good at this and others will take more  time. Some have grown tall and others have yet to shoot up. It is a mixed bag.  One can imagine the challenges that teachers face and the importance of  managing quite a varied group of boys and expectations. First, we are fortunate  to have such an experienced and wise headmaster at the helm. Second, it is also  underlines the importance of engaging boys with the right type of curriculum. </p>
                       <P>  With the introduction of Cambridge Secondary 1  in English, Mathematics and Science, we are better preparing boys to tackle the  higher levels of Cambridge curricula in C1 to H2 with an enhanced set of skills  and learning attitudes. As mentioned previously, we will be gradually  introducing the Cambridge IGCSE and Cambridge AS and A levels over the next 3  to 4 years.  So there is no misunderstanding  or shock, E1 will be tackling the <strong>final year  of the </strong>Cambridge Primary curriculum. This is to satisfy international age  suitability and explains why we moved to admit slightly older boys in K1 and  above. Equally important, we will have a seamless transition between the three schools&rsquo;  teaching and learning programmes, especially in core subjects. Shortly, parents  will be able to access Cambridge Curriculum through the Parent Portal and see  for themselves how informative and user friendly this is. </P>
                       <P>  The matter of languages remains a mild concern.  Very few have chosen a language moving into Senior School. Of course, we will  continue to offer languages and make certain that one is at least compulsory in  Prep School. Mandarin is a special issue that has occupied our thinking and I  thank the parents who shared their ideas with me. While we are committed to  continuing to offer it in Prep School, I have had extensive discussions on how  best to offer this very demanding language –if at all beyond M1. It seems clear  that if we do offer it in Senior School, the course must have a university  pre-requisite status. This is also acknowledged by the teacher. In this regard,  we have decided to offer Mandarin in IGCSE when that international curriculum  commences. This study can be taken as a first or second language course. In the  meantime, a Mandarin Club has been formed for Fridays and this will offer additional  phraseology and cultural studies. </P>
                    <P>     Parents can also expect to see changes in the  way we teach and set homework in 2016-17. It will be geared more to unit based  inquiry and fashioned through key focus questions with clearer learning outcomes.  Computer Science will be improved by integrating it more deliberately into core  subjects. We are working toward not simply the acquisition of knowledge but the  application of it to problem solving. Indeed, if a boy can understand the  concepts embedded in subjects, he will achieve far greater success at school.  Teachers have already commenced course modifications and are now participating  in professional development under the direction of Dr. Afzal, the British  Council and Cambridge. In August, a team from the United Kingdom will complete  our induction here at the College. </P>
                      <P>  There will be more occasions set aside for  parent gatherings, next year. These will not focus so much on individual boys,  but provide a chance for us to get to know one another better. The gatherings  will take place in the &lsquo;Old Building.&rsquo;</P>
                      <P>   Warm wishes to all, and well done to our boys!  I wish you all a safe and happy school holiday –with some reading included. </p>
                   <p><img src="img\sig.png" ></p>
                      <P>&nbsp;</p>
                	</div>               
            	</div>
          	</div>
          <!--FIRST ROW   :ENDED-->
          <!--SECOND ROW :STARTED-->
          <div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12">
                
                </div>
            </div>
          <!--SECOND ROW   :ENDED-->
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
    <script src="js/custom1.js"></script>
    

  </body>
</html>
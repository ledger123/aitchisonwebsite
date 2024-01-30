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
                       <div align="center">
                         <h2><strong>LETTER TO JUNIOR SCHOOL PARENTS</strong></h2>
                       </div>
                       <p align="justify">Dear Parents,</p>
                       <p align="justify">The style of educating young children is vital to their development as whole beings. This is not just an academic exercise, although at times it might feel like that! I watch the towing of heavy bags in the morning, and feel sad when some boys tell me they have done two or more hours of Prep the previous night (as much as some seniors), and now we see them preparing relentlessly for end of year examinations as young as K1. <strong>The message of hard work and reward for effort must not change, but we must also be smarter in the understanding why we study and what outcomes we seek.</strong> I feel sure this position has widespread understanding. Supporting this fact is that education has moved on from the mere acquisition of knowledge (forever changing) and repetitious tasks, although rote learning does have its place. We should be forming an environment in which little boys value the act of thinking and exploring too (which includes fun); not just acquiring information. In the end, it is how we apply knowledge that matters. Thus, we have decided to adopt the Cambridge Primary Curriculum for English, Mathematics and Science.</p>
                       <p align="justify">Content based learning is, therefore, no longer the sole aim of top junior schools around the world. It is increasingly important to learn and experience in ways that respond to a taxonomy of thinking. In doing so, we are acknowledging that learning is more than memorization of &lsquo;facts&rsquo;, more than a plethora of worksheets and an end of year examination for boys younger than 10. It follows that we must ideally provide room for different learning styles and time for curiosity, creativity and expression <strong>-and this includes time at home to enjoy family and play as well.</strong> All these attributes enrich the development of the whole boy, as does the largely non assessable playing of games, drama and music. <strong>Junior education must ingrain the basics of literacy and numeracy at a young age, but it should also open the way to basic thinking and evaluation, then analysis.</strong> This cannot occur if we treat the youngest boys as simply smaller versions of their seniors. Junior education is a more complex and specialist task that requires regular intervention, patient explanation and a responsive curriculum. Mostly, each boy is a work in progress who cannot be &lsquo;weighed and measured&rsquo; on any particular day and then judged.</p>
                       <p align="justify">Teachers are doing a great job in Junior School and their Headmistress is a devoted, skilled and highly competent leader. Our move to modify the curriculum has come after much discussion and is universally welcomed by staff and externally supported by best practices. As a result, Aitchison will be making the following modifications in Junior School from the next academic session 2016-17:</p>
                       <ol>
                         <li>The Cambridge Junior Curriculum will be introduced in K2 to K5 for English, Mathematics and Science. Parents can access this online and in future through our Parent Portal.</li>
                         <li>K1 to K3 will not sit for annual or major summative examinations. They will work through formative assessments or units of work that build a scaffolding of skills and relevant knowledge. Parents will receive more regular and diagnostic reporting. Teachers are already rewriting syllabuses in support of this approach -teaching through schemes of work with focus questions and shaping content to staged outcomes. As a result, promotion will be based on progression testing, homework, class assignments and class participation.</li>
                         <li>K4 will sit 1/2 yearly examination and progression testing.</li>
                         <li>K5 will be the only grade in Junior School to sit both 1/2 yearly and a full annual examination. This will prepare them for Prep expectations.</li>
                         <li>K1 will spend a great deal more time on mastering language and communication as a better base for progression in future studies. Communication and language skills underpin the basis of <strong>all</strong> effective learning.</li>
                         <li>Prep or homework in K1 to K3 will be set principally in English, Urdu, Mathematics and Science. All other subjects will be dealt with in the day school. This approximates what is currently happening, but I write to reinforce these as the core skills that need to be embedded strongly.</li>
                         <li>Chinese has not been taught for a year and will be discontinued in Junior School. Three languages is simply too much. Notwithstanding, we are looking carefully at ways we can offer a Cambridge IGCSE extension from Prep into Senior School should that be desired as an optional study.</li>
                         <li>Computer Studies is to be made more effective by <strong>integrating IT into English, Mathematics and Science units</strong>. This will emphasise the skills of end users and how ICT can be applied to practical tasks. Computer teachers will work closely with classroom teachers in creating interesting units of work.</li>
                         <li>We are committed to retaining strong emphasis on handwriting skills and devoting more time to elocution -especially Drama for all boys.</li>
                         <li>Outside the classroom, Riding is a major College investment that is one of many things that sets the College apart. Next session, we return to compulsory riding for K3 to K5. Boarders ride from K1 to K5 and all day boys are welcome.</li>
                         <li>The Headmistress will make an announcement shortly about improvements in PE.</li>
                       </ol>
                       <p align="justify">May I state clearly that the traditional values of Aitchison remain solidly intact and will always distinguish our school from others, as does its broad educational programme. We look forward to also establishing more parent meetings in 2016-17 and dates will be posted on our website, well ahead of time.</p>
                       <br>
                       <p align="justify">Warm wishes and well done to all our boys!</p>
                       <p><img src="img\sig.png" ></p>
                       <p>&nbsp;</p>
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
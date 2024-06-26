<?php
	include("standard/main.php"); 
	
	/*if(count($_SESSION['stdportal']) > 0){
		$std_portal_links=array(
			'student_uconstruction.php?id=1'	=> "Academics",
			'student_uconstruction.php?id=2'	=> "Timetable",
			'ac-term-dates1.php'				=> "Term Dates",
			'datesheet1.php'					=> "Examination",
			'important-event-calendar.php" target="_blank'	=> "Important Events ",
			'sports-calendar.php" target="_blank'					=> "Sports Calendar",
			'schoolpolicies1.php'				=> "School Policies",
			'cc-dates-calendar.php" target="_blank'					=> "Co-Curricular Dates",
			'ac-oxford-summar-academy.php"  target="_blank'	=> "Oxford Summer Academy",
			'stdcodeofconducts1.php'	=> "Code of Conduct",
			't-events1.php'	=> "External Sports",
			'ac-snotices.php'						=> "Notices",
			'stdlogout.php'						=> "Logout"
			
		);
		$thisportal="stdportal";		
		$mainpage="std_main.php";
	}elseif(count($_SESSION['boarder']) > 0){
		$thisportal="boarder";		
		$mainpage="b_main.php";
	}elseif(count($_SESSION['parents']) > 0){
		$thisportal="parents";	
		$mainpage="pmain.php";	
	}else{
		header("location: /");	
		exit();
	}
	if(!($_SESSION[$thisportal]['stuSchool'] == "JSD")){
		header("location: $mainpage");	
		exit();	
	}*/
	
	$banner_image_url="img/pageimages/misc.jpg";
	$banner_text="";
	$default_open=0;
	header('X-Frame-Options: SAMEORIGIN');
	
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Principal's Newsletter</title>

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
                <?php /*?><div class="col-lg-offset-8 col-lg-4 col-md-offset-8 col-md-4 col-sm-offset-3 col-sm-9" style="text-align: right;">
                        <strong>Dated: November 23, 2016</strong>
             </div><?php */?>
             </div>
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
            
              <h2 style="text-align: center; font-size: 20px; font-weight: bold;" class="title"><strong>Junior School<br>
Promotion, Detainment, Probation, Concession &amp; Withdrawal</strong></h2>
            	
               <p>Boys at Aitchison do particularly well and university admission success is testimony to this fact. As a selective school there is no surprise here. There are, however, always some boys who struggle at times or who for various reasons underperform. Our general motto is: <i>Whenever possible a boy at Aitchison should finish at Aitchison</i>. Obviously, a boy's behavior and commitment must come up to standard. Otherwise, we should direct our efforts to make sure a boy eventually succeeds.</p>
               <p>Teachers carry great responsibility for students' results. However, we do not talk enough about the obligations of students to play their part. Absence from school, poor study habits, bad decision-making, and &lsquo;tuning out&rsquo; are deficiencies that successful students avoid. Thus, a great deal of responsibility rests on the shoulders of students.</p>
               <p>Promotion, detainment, concession or withdrawal is determined by the Academic Committees of each school chaired by the Head of School. Each committee will make recommendations to the Principal whose decision will be final. Generally, boys who do not satisfy the minimum requirements of a ‘Pass’ as detailed below for each school will come under review and then be considered accordingly. A boy may be granted <i>Detainment</i> on recommendation from the Head of School to the Principal but only for Years 1 to 9. A boy may also be exempted via Concession from a poor examination result in the case of genuine and compelling reasons, such as prolonged ill-health, except for external examinations where external rules apply. Any boy who has been promoted on the Probation List and who fails the next examination period will be automatically withdrawn.</p>
              </div>
              </div>         
              <div class="row">
              	<div class="col-lg-12 col-md-12 col-sm-12">         
              </div>
              </div>
              <div class="row">
              	<div class="col-lg-12 col-md-12 col-sm-12">         
                    <h3>Junior School</h3>
                    <h4>Promotion Policy K1 to K5</h4>
                    <p>In general, promotion is based upon a student having consolidated adequate skills and knowledge in formative/progressive learning outcomes or Cambridge strands and tests. K4 sit a Half Yearly Test and K5 sit a Half Yearly and Annual Test in addition to formative testing. The end of year paper for K5 is based on sampling from the final term as well as a selection of the year’s work.<br /> 
                    <br/>
    				<strong>Boys will be promoted on achieving the following minimum requirements:</strong>
    </p>
                    <p>Minimum Pass Marks for each subject and the overall result (formative and summative assessments) is:</p>
                    <p>
                        <ul>
                            <li>(i) 40% Pass</li>
                            <li>(ii) A &lsquo;<strong>UG</strong>&rsquo; grade indicates <strong>FAILED</strong> in the subject</li>
                            <li>(iii) A boy who ‘fails’ in any three of the four main subjects <strong>English, Mathematics, Science &amp; Urdu</strong> comprising formative and summative assessments, will be withdrawn from the College</li>
                            <li>(iv) A boy who fails twice in the same class will be withdrawn</li>
                            <li>(v) A boy must have satisfactory school attendance</li>
                        </ul>
                    </p>
                	
                </div>
              </div>
              
              <div class="row">
              	<div class="col-lg-12 col-md-12 col-sm-12">
                	<strong>
                    The Grade/Mark Indicators are as follows:<br/>
                    A* – 90 to 100, A – 75 to 89, B – 65 to 74, C – 55 to 64<br>
                    D – 45 to 54, S (Satisfactory) – 40 to 44, Ungraded (UG) Less than 40.
                    </strong>
                    <br/><br/>
                    <strong>Junior Awards and Recognition</strong><br/><br/>
                    <p>There is no overall academic ranking system in Junior School. Ranking at a young age has more negative impact than positive benefit. Throughout the year there is a concerted effort to acknowledge boys in assemblies and other forums, broadening recognition whenever possible.</p>
                    <p>Boys do receive <strong>Subject Prizes</strong> in the four main subjects: English, Mathematics, Science and Urdu. Awards are based upon formative and summative results in these studies. In addition, <strong>Encouragement Prizes</strong> are awarded to acknowledge generally outstanding or much improved efforts for boys who do not receive subject prizes.</p>
                    <br/>
                    <strong>Homework</strong><br/><br/>
                    <p>All homework is kept to a minimum for that particular year, reinforcing basics learned that day or week. A Homework Timetable is set by the Headmistress.</p>
                </div>
              </div>
              <div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12">
                <br>
                <br>
            
                <img src="images/signature/prince_signature_new.png" width="212" height="72" ><br>
                Michael Thomson M.A., Dip. Ed., M.A.C.E
                <p>Principal</p>
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
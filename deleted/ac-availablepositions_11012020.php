<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=-1;
	$isavailable=true;
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Careers</title>

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
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" /> -->
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
    <link href="career.css" rel="stylesheet">
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
    	.nav-tabs>li>a {
			color: #132EAD;
			border: 1px #78ADC9 solid;
		}
		
		.feed_tabs li.active a, .feed_tabs li.active a:hover, .feed_tabs li.active a:focus {
			color: #555 !important;
		}
		
		li:marker {
			content:counter(li);
			font-size:20px;
		 }
		
		hr.style-seven {
		overflow: visible; /* For IE */
		height: 30px;
		border-style: solid;
		border-color: black;
		border-width: 1px 0 0 0;
		border-radius: 20px;
	}
	hr.style-seven:before { /* Not really supposed to work, but does */
		display: block;
		content: "";
		height: 30px;
		margin-top: -31px;
		border-style: solid;
		border-color: black;
		border-width: 0 0 1px 0;
		border-radius: 20px;
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
                    
                        <?php /*?><h2 class="titile">Careers</h2><?php */?>
                        <div class="newsfeed_area wow fadeInRight">            
                            <ul class="nav nav-tabs feed_tabs" id="myTab2">
                              <li id="careerLi" <?php echo (empty($_GET['selection']))?' class="active"':'';?>><a href="#careers" data-toggle="tab">Careers</a></li>
                              <li id="positionLi" <?php echo (!empty($_GET['selection']) && ($_GET['selection']=="availablevacancies"))?' class="active"':'';?>><a href="#availablevacancies" data-toggle="tab">Positions Vacant</a></li>
								
								<?php if(false){ ?>
                              <li id="descriptionLi" <?php echo (!empty($_GET['selection']) && ($_GET['selection']=="jobdescription"))?' class="active"':'';?>><a href="#jobdescription" data-toggle="tab">Job Descriptions</a></li>
								<?php } ?>
                            </ul>
                     
                      <p>
                      </p>
                     
                     <br />
                     
                     <style>
                     .tab-content p{
						text-align: justify;
					 }
                     </style>
                     <div class="tab-content">
                     		 
                             <div class="tab-pane fade<?php echo (empty($_GET['selection']))?' in active':'';?>" id="careers">
                             	
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                  <p style="padding:1px;">Aitchison College seeks teachers who are deeply committed to boys' education and an understanding of how boys are motivated and learn best in and beyond the classroom. Teachers at Aitchison are more than just teachers; they are inspired to help beyond the perfunctory and take an active interest in the progress and attainments of boys. We expect our teachers to form positive and effective relationships with students; combining compassion with an unfussy but effective way of going about things. Aitchison values above all else the building of character and expects its teachers to be exemplary mentors.<br>
                                    <br>
                                  Only experienced teachers are considered with a minimum of a Masters degree in their teaching discipline. Applications must come through the Careers platform and not directly to the Principal or any other member of staff.  <strong>The Vice Principal's office</strong><strong> reviews and shortlists all applicants, and handles employment enquiries. Contact by any other means will be ignored.</strong></p>
                                  <p>Applications and enquiries for non teaching positions must be directed to the Bursar: email <span style="color:#000099;">bursar@aitchison.edu.pk</span></p>
                                        
                                </div>
                                
                             </div>
                             <div class="tab-pane fade<?php echo (!empty($_GET['selection']) && ($_GET['selection']=="availablevacancies"))?' in active':'';?>" id="availablevacancies">
							

							<?php

								$doc_job=mktime(23,59,59,12,20,2019);
								$ctime=time();								 
								if(($doc_job > $ctime)/* && ($_GET['new']=="new")*/){
								$isavailable=false;
								?>
								<p>
								<h4 style="margin-bottom:-10px;">
									<strong style="color:#000099;">English Teacher for Preparatory School</strong>
								</h4>
								</p>
								<p>&nbsp;</p>
								<p>Applications are invited for the post of English Teacher for the Preparatory School (Years 7 to 9). Applicants must possess a Masters or equivalent related degree and have experience of teaching Cambridge Lower Secondary. An interest in English literature will be an advantage.</p>

								
								<p>Applications must reach by Friday, 20<sup>th</sup> of December, 2019. Please send your CV to <span style="color:blue;">hr@aitchison.edu.pk</span> along with your resume and cover letter.</p>		
								<p>&nbsp;</p>
								<div align="right">
								
								<?php /*?><p style="text-align: right;"><a href="ac-career.php?postid=67"><strong style="color:#000099;"> Apply Online</strong></a></p>	<?php */?>
								</div>
								<hr style="border-top: 1px solid #CCC;"><br />
								<?php	  
								}
							?>
							 
							 <?php

								$doc_job=mktime(23,59,59,11,8,2019);
								$ctime=time();								 
								if(($doc_job > $ctime)/* && ($_GET['new']=="new")*/){
								$isavailable=false;
								?>
								<p>
								<h4 style="margin-bottom:-10px;">
									<strong style="color:#000099;">Science Teacher for Junior School</strong>
								</h4>
								</p>
								<p>&nbsp;</p>
								<p>Applications are invited for the post of Science Teacher in Junior School (Grades 4 to 6). The applicant must have experience of teaching Cambridge Primary Curriculum and possess a Masters or equivalent related degree. Experience of teaching mathematics will be an advantage.</p>

								<p>&nbsp;</p>
								<p>Applications must reach by Friday, 8<sup>th</sup> of November, 2019. Please send your CV to hr@aitchison.edu.pk along with your resume and cover letter.</p>		
								<p>&nbsp;</p>
								<div align="right">
								
								<?php /*?><p style="text-align: right;"><a href="ac-career.php?postid=67"><strong style="color:#000099;"> Apply Online</strong></a></p>	<?php */?>
								</div>
								<hr style="border-top: 1px solid #CCC;"><br />
								<?php	  
								}



								 	
								 	$doc_job=mktime(23,59,59,10,20,2019);
								 	$ctime=time();								 
								 if(($doc_job > $ctime)/* && ($_GET['new']=="new")*/){
									 $isavailable=false;
								 ?>
								 <p>
						 			<h4 style="margin-bottom:-10px;">
						 				<strong style="color:#000099;">RESIDENT LADY MEDICAL OFFICER</strong>
						 			</h4>
						 		</p>
						 		<p>&nbsp;</p>
						 		<p>We are seeking applications for the post of Female Resident Medical Officer with the following qualifications:</p>
						 		
								 <p><strong>Job Description:</strong></p>
								 <ul style="padding: 0px; padding-left: 40px; list-style:  disc;">
								    <li>MBBS registered with PMDC (Pakistan Medical and Dental Council)</li>
								    <li>Should have at least 10 years experience after house job</li>
								    <li>Must have excellent interpersonal skills and strong knowledge of child medicines</li>
								    <li>Must be competent in emergency medical assistance and diagnostic tests</li>
								    <li>Prescribe treatment plans and give wellness advice to patients.</li>
								</ul>
						 <p>&nbsp;</p>
						 		<p>Applications must reach by Saturday, 20<sup>th</sup> of October, 2019 via Careers’ section of the College website.
								</p>
								
						 		<p>&nbsp;</p>
						 		<div align="right">
									<p style="text-align: right;"><a href="ac-career.php?postid=71"><strong style="color:#000099;"> Apply Online</strong></a></p>	
								</div>
						 		<hr style="border-top: 1px solid #CCC;"><br />
								 <?php	  
								  }



								  
								  $doc_job=mktime(23,59,59,10,22,2019);
								  $ctime=time();								 
							  if(($doc_job > $ctime)/* && ($_GET['new']=="new")*/) {
								  $isavailable=false;
							  ?>
							  <p>
								  <h4 style="margin-bottom:-10px;">
									  <strong style="color:#000099;">VETERINARY DOCTOR</strong>
								  </h4>
							  </p>
							  <p>&nbsp;</p>
							  <p>We are seeking applications for the post of Veterinary Doctor, College Riding Department, with following requirements:</p>
							  
							  <p><strong>Job Description:</strong></p>
							  <ul style="padding: 0px; padding-left: 40px; list-style:  disc;">
								 <li>Holder of Doctor of Veterinary Medicine degree</li>
								 <li>Should have at least 10-year experience.</li>
								 <li>Must have excellent interpersonal skills and strong knowledge of Veterinary medicines</li>
								 <li>Examine Horses to diagnose their health related problems following treatment, dressing wounds and performing surgery etc.</li>
								 <li>Vaccination and prescription of medicines</li>
							 </ul>
					  <p>&nbsp;</p>
							  <p>Applications must reach by Tuesday, 22<sup>nd</sup> of October, 2019 via Careers’ section of the College website.
							 </p>
							 
							  <p>&nbsp;</p>
							  <div align="right">
								 <p style="text-align: right;"><a href="ac-career.php?postid=72"><strong style="color:#000099;"> Apply Online</strong></a></p>	
							 </div>
							  <hr style="border-top: 1px solid #CCC;">
							  <?php	  
							   } 

								 ?>
								 


							 


								 
								 <?php
								 	
								 	$rtjs_job=mktime(23,59,59,7,12,2019);
								 	$ctime=time();								 
								 if(($rtjs_job > $ctime)/* && ($_GET['new']=="new")*/){
									 $isavailable=false;
								 ?>
								 <p>
						 			<h4 style="margin-bottom:-10px;">
						 				<strong style="color:#000099;">Calligraphy Teacher for Junior School</strong>
						 			</h4>
						 		</p>
						 		<p>&nbsp;</p>
						 		<p>Applications are invited for the post of Calligraphy Teacher for the Junior School (Years 1 to 6). The applicant must possess a Masters or equivalent related degree.</p>
						 		
								 <p><strong>Job Description:</strong></p>
								 <ul style="padding: 0px; padding-left: 40px; list-style:  disc;">
								    <li>To have required qualification and experience</li>
								    <li>Must possess strong knowledge, experience and expertise in different scripts of calligraphy</li>
								    <li>To help students develop calligraphic skills both in English and Urdu</li>
								    <li>To have sufficient creative, interpersonal and collaboration skills to communicate effectively and respectfully</li>
								    <li>To be positive and committed with required level of diligence and punctuality</li>
								    <li>Must be able to create weekly lesson plans, term-wise syllabus breakdown and scheme of work including the assessment rubric</li>
								</ul>
						 <p>&nbsp;</p>
						 		<p>Applications must reach by Friday, 12<sup>th</sup> of July, 2019 via Careers’ section of the College website.</p>
								
						 		<p>&nbsp;</p>
						 		<div align="right">
									<p style="text-align: right;"><a href="ac-career.php?postid=48"><strong style="color:#000099;"> Apply Online</strong></a></p>	
								</div>
						 		<hr style="border-top: 1px solid #CCC;">
								 <?php	  
								  } elseif(1==2) {
								 ?>
									<p><strong>There are currently no vacancies available.</strong></p>
						 		<?php	  
								  }
								 ?>
								 
						 
								 
								 <?php
								 	
								 	$rtjs_job=mktime(23,59,59,9,22,2019);
								 	$ctime=time();								 
								 if(($rtjs_job > $ctime)/* && ($_GET['new']=="new")*/){
									 $isavailable=false;
								 ?>
								 <p>
						 			<h4 style="margin-bottom:-10px;">
						 				<strong style="color:#000099;">History Teacher for Preparatory School</strong>
						 			</h4>
						 		</p>
						 		<p>&nbsp;</p>
						 		<p>Applications are invited for the post of History Teacher (Years 7 to 9) in our Preparatory School to commence beginning of October, 2019. The applicant must be familiar with Cambridge Secondary Curriculum and possess a Master’s degree with considerable, verifiable experience.</p>
						 		
						 
						 		<p>Interested and qualified applications must reach by <strong>Sunday, 22<sup>nd</sup> of September, 2019 via Careers’ section of the College website.</strong></p>
								
						 		<p>&nbsp;</p>
						 		<div align="right">
									<p style="text-align: right;"><a href="ac-career.php?postid=70"><strong style="color:#000099;"> Apply Online</strong></a></p>	
								</div>
						 		<hr style="border-top: 1px solid #CCC;">
								 <?php	  
								  } elseif(1==2) {
								 ?>
									<p><strong>There are currently no vacancies available.</strong></p>
						 		<?php	  
								  }
								 ?>
								 
								 
								 <?php
								 	
								 	$rtjs_job=mktime(23,59,59,8,31,2019);
								 	$ctime=time();								 
								 if(($rtjs_job > $ctime)){
									 $isavailable=false;
								 ?>
								 <p>
						 			<h4 style="margin-bottom:-10px;">
						 				<strong style="color:#000099;">Robotics Teacher for Junior School</strong>
						 			</h4>
						 		</p>
						 		<p>&nbsp;</p>
						 <p>Applications are invited for the post of Robotics Teacher for Years 5 and 6 of the Junior School. The applicant must possess a Masters or equivalent related degree. Applications must be made via the Careers section of the Aitchison College website - <a href="ac-career.php?postid=69" style="color: blue;">Apply Online</a>. The closing date is Saturday 31<sup>st</sup> August 2019.</strong></p>
								<p><strong>Job Description:</strong></p>
								<p>Responsibilities will include teaching Robotics and Programming in order to familiarise students with communication and technology according to local and global demands. The candidate will be expected to contribute to the development of a syllabus for STEM/STEAM classes and to train students for national and international Robotics competitions.</p>								
								<ul style="padding: 0px; padding-left: 40px; list-style:  disc;">
								    <li>Degree in Computer Science, Information  Technology or related field</li>
								    <li>Proficiency in at least two programming  languages (Java, Python, HTML/CSS, JavaScript, ROBOTC etc.)</li>
								    <li>Experience of Robotics teaching and project  making </li>
								    <li>Excellent communication and collaboration skills</li>
								    <li>Flexibility to work on weekends for Robotics  make up classes/sessions, competitions, exhibitions etc.</li>
								    <li>A flair for teaching children of Junior School  age</li>
								</ul>
						 		<p>&nbsp;</p>
						 		<div align="right">
									<p style="text-align: right;"><a href="ac-career.php?postid=69"><strong style="color:#000099;"> Apply Online</strong></a></p>	
								</div>
						 		<hr style="border-top: 1px solid #CCC;">
								 <?php
								 }
								 ?>
								 <?php
								 	
								 	$psd_job=mktime(23,59,59,7,4,2019);
								 	$ctime=time();
								 if(($psd_job > $ctime)){
									 $isavailable=false;
								 ?>
								 <p>
						 			<h4 style="margin-bottom:-10px;">
						 				<strong style="color:#000099;">English Literature Teacher for Preparatory School</strong>
						 			</h4>
						 		</p>
						 		<p>&nbsp;</p>
						 		<p>Applications are invited for the post of English Literature Teacher for the Preparatory School (Years 7 to 9). The applicant must possess a Masters or equivalent related and have strong verifiable experience in teaching Literature to boys of this age. <strong>Applications must reach by Thursday, 4<sup>th</sup> of July 2019.</strong></p>
								<p>&nbsp;</p>
						 		
						 		<div align="right">
									<p style="text-align: right;"><a href="ac-career.php?postid=68"><strong style="color:#000099;"> Apply Online</strong></a></p>	
								</div>
						 		<hr style="border-top: 1px solid #CCC;">
								 <?php
								 }
								 ?>
								 
								 <?php
								 	
								 	$ssd_job=mktime(0,0,0,6,30,2019);
								 	$ctime=time();
								 if($ssd_job > $ctime){
									 $isavailable=false;
								 ?>
								 <!--<?php echo "10052019".$ssd_job."<br>".$ctime; ?>-->
						 		<p>
						 			<h4 style="margin-bottom:-10px;">
						 				<strong style="color:#000099;">Science Teacher for Junior School</strong>
						 			</h4>
						 		</p>
						 		<p>&nbsp;</p>
						 <p>Applications are invited for the post of Science Teacher in our Junior School. The applicant must be familiar with Cambridge Primary Curriculum and possess a Master's degree or Bachelor's degree with considerable, verifiable experience. <strong>Applications must reach by Saturday, 29<sup>th</sup> of June 2019.</strong></p>
								


								
						 
								 <?php /*?><p>Deadline for applications - Monday 13<sup>th</sup> May</p><?php */?>
								 
								 <p>&nbsp;</p>
						 		<?php /*?><p>Deadline for applications Saturday 29<sup>th</sup> June</p><?php */?>
						 		<div align="right">
									<p style="text-align: right;"><a href="ac-career.php?postid=67"><strong style="color:#000099;"> Apply Online</strong></a></p>	
								</div>
						 		<hr style="border-top: 1px solid #CCC;">
						 		
                                
						 		<?php /*?><p>
						 			<h4 style="margin-bottom:-10px;">
						 				<strong style="color:#000099;">Boarding Housemistress for Junior School</strong>
						 			</h4>
						 		</p>
						 		<p>&nbsp;</p>

								<ul style="padding-left: 40px; list-style:  disc;">
									<li>Applicants must have excellent skills in English and Urdu (speaking and writing)</li>
									<li>Requirement to live on site, only single accommodation is available.</li>
									<li>Assist the Senior Housemistress in looking after the physical and mental needs of boarders.</li>
									<li>Support the boarders with their school work.</li>
									<li>Guide the boarders' personal development - behaviour, attitude and grooming.</li>
								</ul>


								
						 
								 
							<p>&nbsp;</p>
								 <p>Deadline for applications Friday 17<sup>th</sup> May</p>
								<div align="right">
									<p style="text-align: right;"><a href="ac-career.php?postid=63"><strong style="color:#000099;">Apply Online</strong></a></p>	
								</div>
						 		<hr style="border-top: 1px solid #CCC;"><?php */?>
						 		
						 
						 		<?php	  
								  }
								 ?>
								 
								 
								 <?php
								 	$lastdate=mktime(0,0,0,5,7,2019);
								 	$ssd_job=mktime(0,0,0,6,10,2019);
								 	$ctime=time();
								 if($ssd_job > $ctime){
									 $isavailable=false;
								 ?>
								 <!--<?php echo "20042019".$ssd_job."<br>".$ctime; ?>-->
						 		<p>
						 			<h4 style="margin-bottom:-10px;">
						 				<strong style="color:#000099;">Alumni Relations Officer</strong>
						 			</h4>
						 		</p>
						 		<p>&nbsp;</p>
						 		<p><strong>Duties and Responsibilities</strong></p>

<ul style="padding-left: 40px; list-style:  disc;">
	<li>Develop, promote and manage programmes to keep Aitchison College alumni connected to each other and the College</li>
	<li>Keep the alumni aware of important College developments and needs</li>
	<li>Ensure accurate and complete alumni database records</li>
	<li>Establish and build relationships with a wide range of alumni</li>
	<li>Handle alumni queries</li>
	<li>Coordinate, create and manage a diary of engaging alumni events</li>
	<li>Plan and produce content for the alumni newsletter</li>
	<li>Plan, create and manage all content on the alumni portal and social media channels</li>
	<li>Conduct tours of the College</li>
	<li>Assist with all aspects of fundraising appeals and campaigns where required</li>
	<li>Organise alumni talks and sessions for present students; creating mentorship opportunities</li>
	<li>Maintain regular communication with alumni via direct contact, email, alumni portal and print publications</li>
	<li>Work in close liaison with the Aitchison College Old Boys Association for organizing alumni events and activities</li>
</ul>

<p>&nbsp;</p>

<p><strong>Qualifications and Experience:</strong></p>

<ul style="padding-left: 40px; list-style:  disc;">
	<li>A University degree in communications /media or related fields</li>
	<li>At least 3 years of relevant work experience</li>
	<li>Strong interpersonal and communication skills</li>
	<li>An excellent command over written and spoken English</li>
	<li>Writing and editorial skills</li>
	<li>Strong IT skills</li>
	<li>Ability to plan and write content for print publications, alumni portal and social media channels</li>
	<li>Ability to plan, organize and facilitate a range of events.</li>
	<li>Ability to engage effectively with a diverse alumni community</li>
</ul>
				<div align="right">
					<p style="text-align: right;"><a href="ac-career.php?postid=66"><strong style="color:#000099;">Apply Online</strong></a></p>	
				</div>
						 
								 <?php /*?><p>Deadline for applications - Monday 13<sup>th</sup> May</p><?php */?>
								 
								 
						 		<hr style="border-top: 1px solid #CCC;">
						 		
                                
						 
						 
						 		<?php	  
								  } elseif(1==2) {
								 ?>
									<p><strong>There are currently no vacancies available.</strong></p>
						 		<?php	  
								  }
								 ?>
								 
								 <?php
								 	$lastdate=mktime(0,0,0,5,7,2019);
								 	$ssd_job=mktime(0,0,0,5,14,2019);
								 	$ctime=time();
								 if($ssd_job > $ctime){
								 ?>
								 <!--<?php echo "20042019".$ssd_job."<br>".$ctime; ?>-->
						 		<p>
						 			<h4 style="margin-bottom:-10px;">
						 				<strong style="color:#000099;">Appointments for Senior School</strong>
						 			</h4>
						 		</p>
						 		<p>&nbsp;</p>
						 
								 <p>Deadline for applications - Monday 13<sup>th</sup> May</p>
								 
								 <p>&nbsp;</p>
								
						 		<p><a href="ac-career.php?postid=64">
									<span style="margin-bottom:-10px;"><strong style="color:#000099;">Urdu Teacher</strong></span>
									</a></p>
						 
						 		<p><a href="ac-career.php?postid=65">
									<span style="margin-bottom:-10px;"><strong style="color:#000099;">Physics Teacher</strong></span>
									</a></p>
							    <p style="text-align: right;"><a href="ac-career.php?postid=0"><strong style="color:#000099;">Apply Online</strong></a></p> 
						 		<hr style="border-top: 1px solid #CCC;">
						 		
                                
						 
						 
						 		<?php	  
								  }
								 if($lastdate > $ctime){
								 ?>
								 <!--<?php echo "20042019".$lastdate."<br>".$ctime; ?>-->
						 		 <p><h4 style="margin-bottom:-10px;"><strong style="color:#000099;">Appointments for Junior School</strong></h4></p>
						 		<p>&nbsp;</p>
						 
								 <p>Deadline for applications - Monday 6<sup>th</sup> May</p>
								 
								 <p>&nbsp;</p>
								
						 		<p><a href="ac-career.php?postid=60">
									<span style="margin-bottom:-10px;"><strong style="color:#000099;">General Teacher</strong></span>
									</a></p>
						 
						 		<p><a href="ac-career.php?postid=61">
									<span style="margin-bottom:-10px;"><strong style="color:#000099;">English Teacher</strong></span>
									</a></p>
						 		
						 		<p><a href="ac-career.php?postid=62">
									<span style="margin-bottom:-10px;"><strong style="color:#000099;">Mathematics Teacher</strong></span>
									</a></p>
						 
						 		<p><a href="ac-career.php?postid=63">
									<span style="margin-bottom:-10px;"><strong style="color:#000099;">Boarding Housemistress</strong></span>
									</a></p>
                                
						 
						 		<hr style="border-top: 1px solid #CCC;">
						 		<?php
								}else{
								?>
						 			<!--<?php echo "akhtar".checkdate(4, 12, 2019);?>-->
						 			<!--<p><strong>There are currently no vacancies available.</strong></p>-->
						 		<?php	  
									  
								  }
						 		?>
								 
								 
								 
								 
								 
								 
								 
								 
								 
								 <?php
								 	$lastdate=mktime(0,0,0,4,21,2019);
								 	$ctime=time();
								  if($lastdate > $ctime){
								 ?>
								 <!--<?php echo "20042019".$lastdate."<br>".$ctime; ?>-->
						 		 <p><h4 style="margin-bottom:-10px;"><strong style="color:#000099;">Director of Swimming and Head of Hockey</strong></h4></p>
						 		<p>&nbsp;</p>
						 
								 <p>We are seeking outstanding individuals to Head the Swimming Academy and Hockey Programme for our Junior, Prep and Senior Schools.</p>
								 <p>The last date for applications is 20<sup>th</sup> April 2019. Only shortlisted candidates will be contacted.</p>
								 <p>&nbsp;</p>
								    
						 		<div align="right">
								<p style="text-align: right;"><a href="ac-career.php"><strong style="color:#000099;">Apply Online</strong></a></p>	
						 		</div>
						 		<?php
								  }else{
								?>
						 			<!--<?php echo "akhtar".checkdate(4, 12, 2019);?>-->
						 			<p><strong></strong></p>
						 		<?php	  
									  
								  }
						 		?>
						 		
                             		<?php /*?><p><a href="ac-career.php?postid=47"><h4 style="margin-bottom:-10px;"><strong style="color:#000099;">Teachers for Junior School</strong></h4></a></p>
                                    <hr class="style-eight" /><?php */?>
                             		<?php /*?><p><a href="ac-career.php?postid=46"><h4 style="margin-bottom:-10px;"><strong style="color:#000099;">Science Teacher for Preparatory School</strong></h4></a></p>
                                    <hr class="style-eight" /><?php */?>
                                    <?php /*?>
                                    <p><a href="ac-career.php?postid=45"><h4 style="margin-bottom:-10px;"><strong style="color:#000099;">Assistant Boarding Housemaster - Full Time 2018-19</strong></h4></a></p>
                                    <hr class="style-eight" />
									<?php */?>
                                    
                             		<?php /*?><p><a href="ac-career.php?postid=44"><h4 style="margin-bottom:-10px;"><strong style="color:#000099;">English Teacher for Preparatory School</strong></h4></a></p>
                                     <hr class="style-eight" /><?php */?>
				                	<?php /*?><p><a href="ac-career.php?postid=43"><h4 style="margin-bottom:-10px;"><strong style="color:#000099;">Head of Science Department for Prep School</strong></h4></a></p>
                                     <hr class="style-eight" /><?php */?>
									 <?php
                                        #Application will close Friday, October 5 2018.
                                        $event_day=strtotime(date("14-12-2018"));
                                        if($event_day >= strtotime(date("d-m-Y"))) {
                                     ?>
                                         <p>
											 <a href="#"><strong style="color:#000099;">Teachers for Junior School (Mathematics &amp; General Class Teacher)</strong></a>
									     </p>
                                         <hr class="style-eight" />
                                     <?php }else{ ?>
                                     
                                     <?php /*?><p><strong>There are currently no vacancies available.</strong></p>
									 <p>&nbsp;</p><?php */?>
                                     <?php } ?>
                                     <?php	  
								  			if($isavailable) {
										 ?>
										 
										<p>
											<strong>There are currently no vacancies available</strong>
										</p>

											
										<?php	  
										  	}
										 ?>
                                     <?php /*?>
                                     <p><a href="ac-career.php?postid=36"><h4 style="margin-bottom:-10px;"><strong style="color:#000099;">Head of Senior School Sport</strong></h4></a></p>
                                     <hr class="style-eight" />
                                     
                                     <p><a href="ac-career.php?postid=37"><h4 style="margin-bottom:-10px;"><strong style="color:#000099;">English Teacher - IGCSE/A Level</strong></h4></a></p>
                                     <hr class="style-eight" />
                                     
                                     
                                     <p><a href="ac-career.php?postid=39"><h4 style="margin-bottom:-10px;"><strong style="color:#000099;">Mathematics Teacher - IGCSE/A Level</strong></h4></a></p>
                                     <hr class="style-eight" />
                                     <p><a href="ac-career.php?postid=40"><h4 style="margin-bottom:-10px;"><strong style="color:#000099;">Physics Teacher - IGCSE/A Level</strong></h4></a></p>
                                     <hr class="style-eight" />
                                     <p><a href="ac-career.php?postid=41"><h4 style="margin-bottom:-10px;"><strong style="color:#000099;">ICT Teacher - IGCSE/A Level</strong></h4></a></p>
                                     <hr class="style-eight" />
                                     <p><a href="ac-career.php?postid=42"><h4 style="margin-bottom:-10px;"><strong style="color:#000099;">School Counselor (Psychologist)</strong></h4></a></p>
                                     <hr class="style-eight" /><?php */?>                             
                             </div>
                             
                             <div class="tab-pane fade<?php echo (!empty($_GET['selection']) && ($_GET['selection']=="jobdescription"))?' in active':'';?>" id="jobdescription">
                             	
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                	<?php $charval=64;?>
                                	<ol style="list-style:none; padding-left: 10px; display: none; visibility: hidden;">
										<li><h4><strong>Director of Swimming</strong></h4><br>
											<p><strong>General Description:&nbsp; &nbsp; &nbsp;</strong></p>
											<p>This position is responsible for an organizational and supervisory role. The Director assists with conducting all matters relating to swimming at all three schools of Aitchison College (Junior, Prep and Senior) including; competitions, practices, instructions, coordination, planning and decision making. It also demands assisting with maintenance and custodial duties and keeping records and reports.&nbsp;</p>
											<p>The timings shall be from early morning to late afternoon including some weekends.</p>

											<p>The Director reports to The Director of Sports.</p>

											<p>&nbsp;</p>

											<p><strong>Eligibility/Qualification:</strong></p>

											<ol>
												<li>A minimum of a bachelor&#39;s degree (a sports related degree is preferred)</li>
												<li>At least five years coaching experience in a (public) school</li>
												<li>Completion of, at least, FINA level 1 course</li>
												<li>Must have good interpersonal skills</li>
												<li>Thorough knowledge of all related techniques and strategies</li>
												<li>Must be familiar with the usage of IT</li>
												<li>Must be able to communicate and work with a team in a leading role</li>
											</ol>

											<p>&nbsp;</p>

											<p><strong>Tasks/Duties:</strong></p>

											<ol>
												<li>Report, assist and liaise with the Director of Games to implement rules and regulations</li>
												<li>Organise and create swimming events, training and practice schedules</li>
												<li>Monitor, assess and maintain a track record of students during competitions and consult and report to Head of Games and Director of Games</li>
												<li>Prepare plans and schedules for&nbsp; different schools</li>
												<li>Select teams in consultation with Director&nbsp;of Games</li>
												<li>Monitoring the listing process at the end of a term/competition and forwarding to all concerned</li>
												<li>Supervision of swimming staff, pools and related equipment and necessary reporting</li>
												<li>Attending meetings from time to time to discuss and report to the Principal or other appropriate administrator&nbsp;</li>
												<li>Discharge any other related duties as assigned by the management</li>
											</ol>
											<p>&nbsp;</p>
											<p>We, at Aitchison, provide&nbsp;a very congenial and supportive environment to help employees grow and develop. We expect the best from our staff.</p>
											<div align="right">&nbsp;<a href="ac-career.php?postid=50"><span style="color:#000099; padding-left:12px; font-weight: bold;">Apply Online</span></a></div>
										</li>
                                    	<?php
                                        #Application will close Friday, March 30 2018.
                                        $event_day=strtotime(date("14-12-2018"));
                                        if($event_day >= strtotime(date("d-m-Y"))) {											
                                     	?>
										
                                    	<li><h4><strong><?php $charval=$charval+1; //echo chr($charval);?>Teachers for Junior School (Mathematics &amp; General Class Teacher)</strong></h4>
                                        	<div>
                                                <p>Applications are invited for the above mentioned positions in Junior School (Grades 1 to 6). Applicants must be familiar with Cambridge Primary Curriculum, possess a Masters or equivalent related degree, and have taught for a minimum of 5 years.</p>
                                                <p>Applications must reach by <strong>Friday, 14 <sup>th</sup> of December 2018</strong>.&nbsp;<a href="ac-career.php?postid=5"><span style="color:#000099; padding-left:12px;">Apply Online</span></a></p>
												<!--<p>Please send your CV to <span style="color: blue;">hr@aitchison.edu.pk</span></p>-->
                                                
                                            </div>
                                        </li>
                                        <?php
										$charval=intval($charval)+1;
										}else{ ?>                                     
                                     		<?php /*?><p><strong>There are currently no vacancies available.</strong></p>
									 		<p>&nbsp;</p><?php */?>
                                     <?php } ?>
										
                                    	<!--<li><h4><strong><?php $charval=$charval+1;echo chr($charval);?>.&nbsp;&nbsp;&nbsp;&nbsp;Teachers for Junior School</strong></h4>
                                        	<div style="padding-left:35px;">
                                                <p><strong>Subjects:</strong> English, Urdu, Maths & Art</p>
                                                <p>Applications are invited for the above mentioned subjects in Junior School (Grade 1 to 6). The applicant must be familiar with Cambridge Primary Curriculum and possess a Masters or equivalent related degree. </p>
                                                <p>Applications must reach by <strong>Sunday, 10<sup>th</sup> of June 2018</strong>.&nbsp;<a href="ac-career.php?postid=47"><span style="color:#000099; padding-left:12px;">Apply Online</span></a></p>
                                                
                                            </div>
                                        </li>-->
                                    	<?php /*?><li>
                                    	  <h4><strong><?php $charval=$charval+1;echo chr($charval);?>.&nbsp;&nbsp;&nbsp;&nbsp;Science Teacher for Preparatory School </strong></h4>
                                        	<div style="padding-left:35px;">
                                                <p>Applications are invited for the post of Science Teacher for the Prep. School (Years 7 to 9). The applicant must be familiar with Cambridge Lower Secondary Curriculum and possess a Masters or equivalent related degree. </p>
                                                
                                                <p>Applications must reach by <strong>Wednesday, 30<sup>th</sup> of May 2018</strong>.&nbsp;<a href="ac-career.php?postid=46"><span style="color:#000099; padding-left:12px;">Apply Online</span></a></p>
                                            </div>
                                        </li><?php */?>
                                    	<!--<li>
                                    	  <h4><strong><?php $charval=$charval+1;echo chr($charval);?>.&nbsp;&nbsp;&nbsp;&nbsp;Assistant Boarding Housemaster - Full Time 2018-19 </strong></h4>
                                        	<div style="padding-left:35px;">
                                                <p>We are seeking a full-time Assistant Housemaster for Saigol House, Prep School from August 2018 . This is a position of significant responsibility and would ideally suit a single man with teaching experience. Interested candidates will have the benefit of free accommodation within the boarding precinct, including free utilities, and free food during school time. Previous experience in boarding is desirable but not essential. We ideally seek someone who is committed to boys' education and brings with him a strong but compassionate manner. An interest in sport would be an advantage. Weekend work will be expected in lieu of days off during the week.</p>
                                                <p>Remuneration will be discussed with short-listed candidates only. Applications should reach the Director of Human Resources prior to July but the College reserves the right to appoint earlier should an outstanding candidate be found. &nbsp;<a href="ac-career.php?postid=45"><span style="color:#000099; padding-left:12px;">Apply Online</span></a></p>
                                                
                                            </div>
                                        </li>-->
                                    	<?php /*?><li>
                                    	  <h4><strong><?php $charval=$charval+1;echo chr($charval);?>.&nbsp;&nbsp;&nbsp;&nbsp;English Teacher for Preparatory School </strong></h4>
                                        	<div style="padding-left:35px;">
                                                <p>Applications are invited for the post of English Teacher for the Prep. School (Years 7 to 9). The applicant must be familiar with Cambridge Lower Secondary Curriculum and possess a Masters or equivalent related degree. </p>
                                                
                                                <p>Applications must reach by <strong>Friday, 25<sup>th</sup> of May 2018.</strong>&nbsp;<a href="ac-career.php?postid=44"><span style="color:#000099; padding-left:12px;">Apply Online</span></a></p>
                                            </div>
                                        </li><?php */?>
                                    	<?php /*?><li><h4><strong><?php $charval=$charval+1;echo chr($charval);?>.&nbsp;&nbsp;&nbsp;&nbsp;HEAD OF SCIENCE DEPARTMENT FOR PREP SCHOOL</strong></h4>
                                        	<div style="padding-left:35px;">
                                                <p>The Head of Science in Prep School is responsible for the quality and development of teaching and learning in Biology, Chemistry and Physics to Years 7, 8 and 9. The successful candidate will be a strong but collaborative leader bringing a passion for curiosity and experiential learning in Cambridge Lower Secondary courses. He or she will also look to modern pedagogical approaches and be committed to boys’ education and learning needs. The Head of Science will be able to motive teachers and support them with effective leadership. He or she is a key member of the Heads of Department and reports directly to the Headmaster or Deputy in his absence.</p>
                                                <p><strong>Main responsibilities and duties:</strong></p>
                                                <p>
                                                	<ul style="list-style: disc; padding-left: 20px;">
                                                      <li>Teach  high quality lessons and lead best practice in teaching within the Department.</li>
                                                      <li>Manage the members of the Department on a day to day  basis. </li>
                                                      <li>Hold  regular Department meetings to enhance communication and a team approach to  teaching and learning.</li>
                                                      <li>Set high expectations for student behaviour in the Department.</li>
                                                      <li>Ensure  all teaching is conducted to high standards of Health &amp; Safety.</li>
                                                      <li>Liaise  with the Head of School in regard to resources and staffing to ensure the Department  is able to deliver high quality lessons.</li>
                                                      <li>Carry  out teacher appraisals according to the requirements of the Head of School.</li>
                                                      <li>Set targets to improve the quality of teaching and  learning in order to maximise student attainment. </li>
                                                      <li>Identify  requirements for Professional Development and take the lead role in maximising  the benefit of courses attended by members of the Department, including an  active interest in ensuring good quality teacher feedback and follow up reports  as required by the Head of School.</li>
                                                      <li>Have  an up to date knowledge of the Cambridge curriculum relevant to Science  and ensure that this is delivered effectively.</li>
                                                      <li>Ensure additional support is provided to students as  necessary, including extra classes on Saturdays. </li>
                                                      <li>Provide  extension activities for gifted and talented students including participation  in national and international competitions.</li>
                                                      <li>Work  closely with senior colleagues in preparing and managing regular testing of  students including formative assessments.</li>
                                                      <li>Provide reports regarding student progress to the Head  of School as required. </li>
                                                      <li>Inform  teachers of testing and examination schedules.</li>
                                                      <li>Assign  teachers to writing tests and examination papers as required.</li>
                                                      <li>Approve  all tests and examinations before printing.</li>
                                                      <li>Any  other tasks delegated by the Principal or their nominated delegates.</li>
                                                      <li>Carry  out all lawful instructions of the Principal or their nominated delegates.</li>
                                                    </ul>
                                                </p>
                                                <p>The position is appraised on an annual basis, but as a new appointment, the Head of School will submit a report on the appointment after six months advising the Principal of the effectiveness of the appointee. This is to assist the College in providing professional feedback and help if required. </p>
                                            </div>
                                        </li><?php */?>
                                        <?php /*?>
                                    	<li><h4><strong><?php $charval=$charval+1;echo chr($charval);?>.&nbsp;&nbsp;&nbsp;&nbsp;CAMBRIDGE IGCSE/A LEVEL TEACHING</strong></h4>
                                        	<div style="padding-left:35px;">
                                                <p>Subjects: English, <!--Chemistry, -->Physics, Mathematics and ICT</p>
                                                <p>All senior teaching positions require an extremely strong commitment to the principles of sound modern pedagogy and the ability to motivate boys.  We expect senior teachers to work collaboratively and with integrity. All employment is subject to 6 months’ probation that can be extended if needed.</p>
                                                <p>Applicants for English, <!--Chemistry, -->Physics, Mathematics and ICT should complete the <a href="ac-career.php"  target="_blank" style="color: #337ab7;">Online Application form</a> and include with their C.V or resume a brief outline of why they are applying and what they can bring to the College. Candidates invited to interview must bring original qualifications/degrees as evidence and provide the names of two professional referees.</p>
                                            </div>
                                        </li>
                                        <li><h4><strong><?php $charval=$charval+1;echo chr($charval);?>.&nbsp;&nbsp;&nbsp;&nbsp;Position: School Counselor (Psychologist)</strong></h4>
                                        	<div style="padding-left:35px;">
                                                <p>This is a whole-school appointment that works primarily with our boarding school community to help with boys’ adjustment to boarding and any personal issues they may arise from time to time or when boys need assistance with coping in school or residential care. It is also part of a proactive and positive educational program that guides healthy development in boys. The position will work closely with the Heads of School and Boarding Heads.</p>
                                                <p>Strong professional background and impeccable character are expected. We are seeking an experienced person.</p>
                                            </div>
                                        </li>
                                        
                                        <?php */?>
                                        
                                    </ol>
                                    
                                </div>
                                
                             </div>
                     </div>
                     
                     
                     
    
    
      
                        
                    </div>
                    <div class="row">
                    <div class="row"></div>
                
                <!--STARTED: CAREERS FORM-->
                <div style="margin: auto; padding: auto;">
                	
                    <form name="frmApp" action="" method="post" onsubmit="return validate();" enctype="multipart/form-data">
                    <div class="row"></div>
                        
                    	<!--<table cellpadding="0" cellspacing="0" border="0" width="100%" align="center" class="table table-hover">
                        	
                             <tr>
                                  <td height="15" class="fld_td" align="justify">
                                  </td>
                              </tr>
                        </table>-->
                        <div class="row"></div>
                          <div class="row"></div>
                          <div class="row"></div>
                          <div class="row"></div>                                                           
                    </form>
            <script type="text/javascript">
				function checkdate(input){
				var validformat=/^\d{2}\-\d{2}\-\d{4}$/ //Basic check for format validity
				var returnval=false
				if (!validformat.test(input.value)){
					alert("Invalid Date of Birth (DOB) Format. Please correct (dd-mm-yyyy for example May 2, 2013 will be placed as 02-05-2013) and submit again.")
					input.focus();
				}else{ //Detailed check for valid date ranges
				var dayfield=input.value.split("-")[0]
				//alert(dayfield+"Akhtar Rafiq");
				var monthfield=input.value.split("-")[1]
				var yearfield=input.value.split("-")[2]
				var dayobj = new Date(yearfield, monthfield-1, dayfield)
				if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getDate()!=dayfield)||(dayobj.getFullYear()!=yearfield))
				alert("Invalid Day, Month, or Year range detected. Please correct and submit again.")
				else
				returnval=true
				}
				if (returnval==false) input.select()
				return returnval
				}
				function checkTrainingDates(){
					var returnval=true;
					var commenced=document.getElementsByName("tdate[]");
					var tdetails=document.getElementsByName("tdetails[]");
					var validformat=/^\d{2}\/\d{4}$/;
					if(commenced.length >=1 || ((commenced.item(0).value).length > 0 || (tdetails.item(0).value).length > 0)){
					for(var i=0; i< commenced.length; i++){
						var cdate="";
						var tdetail="";
						cdate=commenced.item(i).value;
						tdetail=tdetails.item(i).value;
						if(tdetail.length > 1){
							if(!validformat.test(cdate)){
								alert("Invalid Date Format in Training/Development/Membership of Professional Bodies's Section. correct format is (mm/yyyy for example May 2, 2013 will be placed as 05/2013).");
								commenced.item(i).focus();
								returnval=false;
								return false;
								break; 			
							}else{
								var dayfield="01";
								var monthfield=cdate.split("/")[0];
								var yearfield=cdate.split("/")[1];
								var dayobj = new Date(yearfield, monthfield-1, dayfield);
								if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getFullYear()!=yearfield)){
									alert("Invalid Date Format in Training/Development/Membership of Professional Bodies's Section. Please correct and submit again.");
									commenced.item(i).focus();
									returnval=false;
									return false;
									break;
								}
							}
							if(tdetail.length <= 5){
								alert("Please Input your Training Details.");
								tdetails.item(i).focus();
								returnval=false;
								return false;
								break;
							}
						}
					}
					}
					return returnval;
				}
				function checkEmpDates(){
					//cempl_from[]	
					var returnval=true;
					var commenced=document.getElementsByName("cempl_from[]");
					var completed=document.getElementsByName("cempl_to[]");
					var cempl_detail=document.getElementsByName("cempl_detail[]");
					var cempl_title=document.getElementsByName("empl_title[]");
					var validformat=/^\d{2}\/\d{4}$/;
					for(var i=0; i< commenced.length; i++){
						var cdate="";
						var ctdate="";
						var empl_detail="";
						var empl_title="";
						cdate=commenced.item(i).value;
						ctdate=completed.item(i).value;
						empl_detail=cempl_detail.item(i).value;
						empl_title=cempl_title.item(i).value;
						if(empl_detail.length > 1){
							if(!validformat.test(cdate)){
								alert("Invalid Date Format. correct format is (mm/yyyy).");
								commenced.item(i).focus();
								returnval=false;
								return false;
								break; 			
							}else{
								var dayfield="01";
								var monthfield=cdate.split("/")[0];
								var yearfield=cdate.split("/")[1];
								var dayobj = new Date(yearfield, monthfield-1, dayfield);
								if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getFullYear()!=yearfield)){
									alert("Invalid  Month, or Year range detected. Please correct and submit again.");
									commenced.item(i).focus();
									returnval=false;
									return false;
									break;
								}
							}		
							if(!validformat.test(ctdate)){
								alert("Invalid Date Format. correct format is (mm/yyyy for example May 2, 2013 will be placed as 05/2013).");
								completed.item(i).focus();
								returnval=false;
								return false;
								break; 			
							}else{
								var dayfield="01";
								var monthfield=ctdate.split("/")[0];
								var yearfield=ctdate.split("/")[1];
								var dayobj = new Date(yearfield, monthfield-1, dayfield);
								if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getFullYear()!=yearfield)){
									alert("Invalid  Month, or Year range detected. Please correct and submit again.");
									completed.item(i).focus();
									returnval=false;
									return false;
									break;
								}
							}
							if(empl_detail.length <= 3){
								alert("Please Input Employer Name and Address");
								cempl_detail.item(i).focus();
								returnval=false;
								return false;
								break;
							}
							if(empl_title.length <= 3){
								alert("Please Input Your Job Title");
								cempl_title.item(i).focus();
								returnval=false;
								return false;
								break;
							}
						}
					}
					return returnval;
				}
				function checkEduDates(){
					var returnval=true;
					//alert("Akhtar");
					var commenced=document.getElementsByName("commenced[]");
					var completed=document.getElementsByName("completed[]");
					var school=document.getElementsByName("school[]");
					var division=document.getElementsByName("division[]");
					var marks=document.getElementsByName("marks[]");
					var degree=document.getElementsByName("degree[]");
					
					var validformat=/^\d{2}\/\d{4}$/;
					for(var i=0; i< commenced.length; i++){
						var cdate="";
						var ctdate="";
						var sc_item="";
						var div_item="";
						var mrk_item="";
						var deg_item="";
						cdate=commenced.item(i).value;
						ctdate=completed.item(i).value;
						sc_item=school.item(i).value;
						div_item=division.item(i).value;
						mrk_item=marks.item(i).value;
						deg_item=degree.item(i).value;
						if(!validformat.test(cdate)){
							alert("Invalid Date Format in Educational Commenced/Completed Dates. correct format is (mm/yyyy for example May 2, 2013 will be placed as 05/2013).");
							commenced.item(i).focus();
							returnval=false;
							return false;
							break; 			
						}else{
							var dayfield="01";
							var monthfield=cdate.split("/")[0];
							var yearfield=cdate.split("/")[1];
							var dayobj = new Date(yearfield, monthfield-1, dayfield);
							if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getFullYear()!=yearfield)){
								alert("Invalid  Month, or Year range detected. Please correct and submit again.");
								commenced.item(i).focus();
								returnval=false;
								return false;
								break;
							}
						}		
						if(!validformat.test(ctdate)){
							alert("Invalid Date Format in Educational Commenced/Completed Dates. correct format is (mm/yyyy for example May 2, 2013 will be placed as 05/2013).");
							completed.item(i).focus();
							returnval=false;
							return false;
							break; 			
						}else{
							var dayfield="01";
							var monthfield=ctdate.split("/")[0];
							var yearfield=ctdate.split("/")[1];
							var dayobj = new Date(yearfield, monthfield-1, dayfield);
							if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getFullYear()!=yearfield)){
								alert("Invalid  Month, or Year range detected. Please correct and submit again.");
								completed.item(i).focus();
								returnval=false;
								return false;
								break;
							}
						}
						if(sc_item.length <= 2){
							alert("Please Input your School/Institute Name");
							school.item(i).focus();
							returnval=false;
							return false;
							break;
						}
						/*if(div_item.length != 3 &&  (div_item != "1st" || div_item != "2nd" || div_item != "3rd")){
							alert("Please Input 1st for First Division, 2nd for Second Dvision and 3rd for Third Dvision In Eduction Division Box");
							division.item(i).focus();
							returnval=false;
							return false;
							break;
						}*/
						if(mrk_item.length <= 1 && !isNaN(mrk_item)){
							alert("Please Input your marks. Your marks see to be in correct.");
							marks.item(i).focus();
							returnval=false;
							return false;
							break;
						}
						if(deg_item.length <= 2){
							alert("Please Input your Degree Subjects.");
							degree.item(i).focus();
							returnval=false;
							return false;
							break;
						}
					}
					return returnval;
				}
				function check_MY(inputval){
					//alert("11AkhtarRafiq");
				var validformat=/^\d{2}\/\d{4}$/ ;//Basic check for format validity
				var returnval=false;
				if (!validformat.test(inputval)){
					alert("Invalid Date Format. Please correct (mm/yyyy for example May 2, 2013 will be placed as 05/2013) and submit again.");
					return false;;
				}else{ //Detailed check for valid date ranges
					var dayfield=inputval.split("/")[0];
					var yearfield=inputval.split("/")[1];
					var dayobj = new Date(yearfield, monthfield-1, dayfield);
					if ((dayobj.getMonth()+1!=monthfield)||(dayobj.getFullYear()!=yearfield))
						alert("Invalid  Month, or Year range detected. Please correct and submit again.");
					else
						returnval=true;
				}
					return returnval;
				}
				
				</script>

            <script language="javascript" type="text/javascript">
                function addEduDetails(){
                        var tbl_name=document.getElementById("edu_details");
                        var rowCount = tbl_name.rows.length;
                        var row=document.createElement("tr");
                        var cell0 = document.createElement("td");
                            cell0.innerHTML=document.getElementById("edu").innerHTML;
							cell0.style="padding: 0; margin: 0;";//"<select name=\"examination[]\" id=\"examination[]\" style=\" height: 22px; font-family: Arial, Helvetica, sans-serif; font-size: 10px; width: 105%;\"><option value=\"Matriculation\"> Matric </option><option value=\"O - Levels\"> O - Levels</option><option value=\"A - Levels\"> A - Levels</option><option value=\"F.A /F.Sc.\"> F.A /F.Sc.</option><option value=\"B.A /B.Sc.\"> B.A /B.Sc.</option><option value=\"M.A /M.Sc.\" selected=\"selected\"> M.A /M.Sc.</option><option value=\"M.S\"> M.S</option><option value=\"M.Phil\"> M.Phil</option><option value=\"Ph.D.\"> Ph.D.</option><option value=\"Others\"> Others</option></select>";
                            row.appendChild(cell0)
                        var cell1 = document.createElement("td");
							cell1.style="padding: 0; margin: 0;";
                            cell1.innerHTML="<input type=\"input\" name=\"commenced[]\" id=\"commenced[]\" class=\"fld_text_q\"  />";
                            row.appendChild(cell1)
                        var cell2 = document.createElement("td");
							cell2.style="padding: 0; margin: 0;";
                            cell2.innerHTML="<input type=\"input\" name=\"completed[]\" id=\"completed[]\" class=\"fld_text_q\" />";				
                            row.appendChild(cell2)
                        var cell3 = document.createElement("td");
							cell3.style="padding: 0; margin: 0;";
                            cell3.innerHTML="<input type=\"input\" name=\"school[]\" id=\"school[]\" class=\"fld_text_q\" style=\" width: 98%;\" />";
                            row.appendChild(cell3)
                        var cell4 = document.createElement("td");
							cell4.style="padding: 0; margin: 0;";
                            cell4.innerHTML="<input type=\"input\" name=\"division[]\" id=\"division[]\" class=\"fld_text_q\" style=\" width: 94%;\" />";
                            row.appendChild(cell4)
                        var cell5 = document.createElement("td");
							cell5.style="padding: 0; margin: 0;";
                            cell5.innerHTML="<input type=\"input\" name=\"marks[]\" id=\"marks[]\" class=\"fld_text_q\" style=\" width: 94%;\" />";
                            row.appendChild(cell5)	
                        var cell6 = document.createElement("td");
							cell6.style="padding: 0; margin: 0;";
                            cell6.innerHTML="<input type=\"input\" name=\"degree[]\" id=\"degree[]\" class=\"fld_text_q\" />";
                            row.appendChild(cell6)
                        tbl_name.appendChild(row);				
                }
                function addTrainingDetails(){
                    var tbl_name=document.getElementById("training_details");
                        var rowCount = tbl_name.rows.length;
                        var row=document.createElement("tr");
						
                        var cell1 = document.createElement("td");
							cell1.style="padding-top: 5px; ";
                            cell1.innerHTML="<input type=\"input\" name=\"tdate[]\" id=\"tdate[]\" class=\"fld_text\" />";
                            row.appendChild(cell1)
                        var cell2 = document.createElement("td");
							cell2.style="padding-top: 5px; ";
                            cell2.innerHTML="<input type=\"input\" name=\"tdetails[]\" id=\"tdetails[]\" class=\"fld_text\" />";				
                            row.appendChild(cell2)			
                        tbl_name.appendChild(row);	
                }
                function addEmpDetails(){
                    var tbl_name=document.getElementById("emp_details");
                        var rowCount = tbl_name.rows.length;
                        var row=document.createElement("tr");
                        var cell1 = document.createElement("td");
                            cell1.innerHTML="<input type=\"input\" name=\"cempl_from[]\" id=\"cempl_from[]\" class=\"fld_text\" />";
                            row.appendChild(cell1)
                        var cell2 = document.createElement("td");
                            cell2.innerHTML="<input type=\"input\" name=\"cempl_to[]\" id=\"cempl_to[]\" class=\"fld_text\" />";				
                            row.appendChild(cell2)
                        var cell3 = document.createElement("td");
                            cell3.innerHTML="<input type=\"input\" name=\"cempl_detail[]\" id=\"cempl_detail[]\" class=\"fld_text\" />";
                            row.appendChild(cell3)
                        var cell4 = document.createElement("td");
                            cell4.innerHTML="<input type=\"input\" name=\"empl_title[]\" id=\"empl_title[]\" class=\"fld_text\" />";
                            row.appendChild(cell4)
                        tbl_name.appendChild(row);	
                }
                function getTeacherInfo(){
                    var post=" "+document.getElementById("jobpost").value;
                    var examinations=document.getElementsByName("examination[]");
                    var mcheck=false;
                    var fcheck=false;
                    var bcheck=false;
                    if(post.indexOf("Teacher For") > 0){
                        for(var i=0; i< examinations.length; i++){
                            var dname="";
                            dname=" "+examinations.item(i).value;
                            //alert(dname);
                            if((dname.indexOf("Mat") > 0) || (dname.indexOf("O - L") > 0)){
                                mcheck=true;
                            }
                            if((dname.indexOf("A - L") > 0) || (dname.indexOf("F") > 0)){
                                fcheck=true;
                            }
                            if((dname.indexOf("B.A") > 0) || (dname.indexOf("B.S") > 0)){
                                bcheck=true;
                            }				
                        }
                        if(mcheck== false){
                            alert("Please provide your Matric/ O-Levels Qualification.");
                            return false;
                        }if(fcheck== false){
                            alert("Please provide your A-Levels/ F.A/F.Sc Qualification.");
                            return false;	
                        }if(bcheck== false){
                            alert("Please provide your B.A/B.Sc Qualification.");
                            return false;	
                        }else{
                            return true;
                        }
                    }else{
                        return true;	
                    }		
                }	
            </script>
            
                </div>
                <!--ENDED  : CAREERS FORM-->
              </div>
        
                    
                    <!-- Start slider -->
  <div class="container">
  <section id="slider">
    <div class="row" style="background-color: #FFFFFF;"></div>
  </section>
  </div>
  <!-- End slider -->

                    
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
    <?php include("phpinclude/footer_11012020.php");?>
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
    
<script>
	//availablevacancies
	
	/*$("#availablevacancies").find("a").click(function() {
		
		$("#positionLi").removeClass("active");
		$("#positionLi a").attr("aria-expanded","false");
		
		$("#availablevacancies").removeClass("active in");
		
		$("#descriptionLi").addClass("active");
		$("#descriptionLi a").attr("aria-expanded","true");
		
		$("#jobdescription").addClass("active in");
	});*/
		
</script>

  </body>
</html>
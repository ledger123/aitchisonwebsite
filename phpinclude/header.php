<style>

.table-responsive::-webkit-scrollbar {
    -webkit-appearance: none;
}

.table-responsive::-webkit-scrollbar:vertical {
    width: 12px;
}

.table-responsive::-webkit-scrollbar:horizontal {
    height: 12px;
}

.table-responsive::-webkit-scrollbar-thumb {
    background-color: rgba(0, 0, 0, .5);
    border-radius: 10px;
    border: 2px solid #ffffff;
}

.table-responsive::-webkit-scrollbar-track {
    border-radius: 10px;  
    background-color: #ffffff; 
}
/*added on 06 may 2019*/	
	.videoFrm {
		width: 100%;
		height: 350px;
	}
	@media (max-width: 767px) {
		.videoFrm {
			height: 220px;
		}
	}
	@media (max-width: 424px) {
		.videoFrm {
			height: 190px;
		}
	}
	@media (max-width: 374px) {
		.videoFrm {
			height: 160px;
		}
	}
/*added:ended on 06 may 2019*/	

	.social-icons-mobile { position: unset; float: none; margin-top:20px; }
	
	.social-icons-mobile > .list-inline>li {
		padding: 0;
	}
	
	.social-icons-mobile > .list-inline>li>a>img {
		width: 24px;
		height: 24px;
	}
	
	.social-icons {
		vertical-align: top; margin-top: 6px; position: absolute; float: right; display: block; top: 8px;
	}
	
	.social-icons .fa {
		font-size: 2em;
		color: #ecf0f1;
	}
	
	.social-icons .fa:hover {
		color: #fff;
	}

img {
    image-rendering: optimizeSpeed;             /*                     */
    image-rendering: -moz-crisp-edges;          /* Firefox             */
    image-rendering: -o-crisp-edges;            /* Opera               */
    image-rendering: -webkit-optimize-contrast; /* Chrome (and Safari) */
    image-rendering: pixelated;                 /* Chrome as of 2019   */
    image-rendering: optimize-contrast;         /* CSS3 Proposed       */
    -ms-interpolation-mode: nearest-neighbor;   /* IE8+                */
}

  .image-right {
		float:right;
		margin: 0px 0px 35px 30px;
		width: 180px;
		height: 234px;
	}
	.image-right > img {
		width: 180px;
		height: 234px;
	}
@media(max-width:767px ){
	.image-right {
		float:right;
		margin: 0px 0px 35px 15px;
		width: 200px;
		height: 260px;
	}
	.image-right > img {
		width:100%;
		height: 100%;
	}
}
@media(max-width:320px ) {
    .image-right {
        float: right;
        margin: 0px 0px 50px 0px;
        width: 262px;
        height: 325px;
    }

    .image-right > img {
        width: 100%;
        height: 100%;
    }
}

.font14 {
    font-size: 14px;
}
@media (max-width: 767px) {

    .font14 {
        font-size: 11px;
    }
}

@media (max-width: 320px) {

    .font14 {
        font-size: 9px;
    }
}

</style>

<link href="style_14062019.css?123457" rel="stylesheet">
<?php
if(!empty($independance_day)){
?>
<link href="independance-day-09082019.css" rel="stylesheet">
<link href="css/sidemenu-green.css" rel="stylesheet">
<?php
}elseif(strpos($_SERVER['REQUEST_URI'], "archive.php")){
?>
<style>
@media (max-width: 767px){
	#header {
		height: 4.7em;
	}
	#courseArchive {
		padding-top: 0px;
		padding-bottom: 0px;
		position: relative;
		top: 0 !important;
	}
}
@media only screen and (max-width: 1024px) and (min-width: 1023px){
	#header {
		height: 6.1em;
	}	
}	
</style>
<?php
}elseif(strpos($_SERVER['REQUEST_URI'], "gallery-sports")){
?>
<style>
@media (max-width: 767px){
	.sport-gallery-menu{
	  display: inline;
	  float: left;
	  text-align: center;
	  padding: 0 20px 40px 0;
	  width: 100%;
	}
	
	.sport-gallery-menu ul li {
	  border: 1px solid #ccc;
	  cursor: pointer;
	  display: inline-block;
	  margin: 0 5px;
	  padding: 6px 15px;
	  width: 70% !important;
	  text-transform: uppercase;
	  -webkit-transition: all 0.5s;
	  -o-transition: all 0.5s;
	  transition: all 0.5s;
	}
	
	.sport-gallery-menu ul li:hover,
	.sport-gallery-menu ul li.active{  
	  color: #fff;
	}
	#gallery {
		display: inline;
		float: left;
		padding: 1px 0;
		width: 100%;
	}
}
</style>
<?php
}
?>

		<header id="header">
          <!-- BEGIN MENU -->
          <div class="menu_area">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
                <div class="navbar-header">
                  <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar" style="display: block; width: 22px; height: 2px; background-color: #cccccc; border-radius: 1px;"></span>
                    <span class="icon-bar" style="display: block; width: 22px; height: 2px; background-color: #cccccc; border-radius: 1px;"></span>
                    <span class="icon-bar" style="display: block; width: 22px; height: 2px; background-color: #cccccc; border-radius: 1px;"></span>
                    <?php /*?><span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span><?php */?>
                  </button>
                  <!-- LOGO -->
                  <!-- TEXT BASED LOGO -->
                  <?php /*<!--<a class="navbar-brand" href="index.html"><img src="img/Untitled-2.png" style="display: inline;">&nbsp;&nbsp;Aitchison Colleg</a>              -->*/ ?>
                  <!-- IMG BASED LOGO  -->
                <a class="navbar-brand" href="/"><img src="img/logo.png" alt="logo" class="img-responsive"></a>
                <?php /*?><a class="navbar-brand" href="index.php"><img src="img/main-logo_c.png" alt="logo" class="img-responsive"></a><?php */?>
                
                
                
                <?php /*<!-- <li><a href="contact.html">Contact</a></li> --> */ ?>
				
					
					<div class="social-icons-mobile visible-xs" align="center">
						
						<ul class="list-inline">
						  <li class="list-inline-item"><a href="https://www.facebook.com/Aitchison-College-368847620484906" target="_blank" title="Facebook"><img src="img/facebook-icon.png"></a></li>
						  <li class="list-inline-item"><a href="https://www.instagram.com/aitchisoncollegeofficial" target="_blank" title="Instagram"><img src="img/instagram-icon.png"></a></li>
						  <li class="list-inline-item"><a href="https://www.linkedin.com/company/14764887" target="_blank" title="LinkedIn"><img src="img/linkedin-icon.png" style="width:26px; height:26px;"></a></li>
							<li class="list-inline-item" style="width: 15px;">&nbsp;</li>
						</ul>
						
					</div>
					
				
				</div>
                <div id="navbar" class="navbar-collapse collapse">
                  <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
                  	<li><a href="/">Home</a></li>
				  <li class="dropdown visible-xs">
                      <a href="#" class="dropdown-toggle" role="button" aria-expanded="false">School<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
						<li><a href="aboutus">About Us</a></li>
                        <li><a href="history">History</a></li>
                        <li><a href="archive">Archives</a></li>
                        <li><a href="board-of-governors">Governors</a></li>
                        <li><a href="principal-office">Principal</a></li>
						<li><a href="leadingstaff">Leading Staff</a></li>  
                        <li><a href="school-organization">School Organization</a></li>
                        <li><a href="past-principals ">Past Principals</a></li>                                                
                        <li><a href="an-aitchison-education">An Aitchison Education</a></li>
                        <li><a href="core-purpose">Core Purpose</a></li>
                        <li><a href="higher-education-careers">University Counseling<?php /*?>University and Career Guidance<?php */?></a></li>
                        <li><a href="university-placements">University Placements</a></li>
						<li><a href="aitchison-publications">Publications</a></li>    
                        <li><a href="facilities">Facilities</a></li>
                        <li><a href="environment">Environment Clubs</a></li>
                      </ul>
                    </li>	  
                  <li class="dropdown hidden-xs">
                      <a href="#" class="dropdown-toggle" role="button" aria-expanded="false">School<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="aboutus">About Us</a></li>
                        <li><a href="history">History</a></li>
                        <li><a href="archive">Archives</a></li>
                        <li><a href="board-of-governors">Governors</a></li>
                        <li><a href="principal-office">Principal</a></li>
						<li><a href="leadingstaff">Leading Staff</a></li>  
                        <li><a href="school-organization">School Organization</a></li>
                        <li><a href="past-principals ">Past Principals</a></li>                                                
                        <li><a href="an-aitchison-education">An Aitchison Education</a></li>
                        <li><a href="core-purpose">Core Purpose</a></li>
                        <li><a href="higher-education-careers">University Counseling<?php /*?>University and Career Guidance<?php */?></a></li>
                        <li><a href="university-placements">University Placements</a></li>
						<li><a href="aitchison-publications">Publications</a></li>    
                        <li><a href="facilities">Facilities</a></li>
                        <li><a href="environment">Environment Clubs</a></li>
                      </ul>
                    </li>
<?php
                    /*<!--<li class="dropdown">
                      <a href="course-archive.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Our Schools<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Senior School</a></li>               
                        <li><a href="#">Prep School</a></li>
                        <li><a href="#">Junior School</a></li>
                        <li><a href="#">Transport</a></li>
                        
                      </ul>
                    </li>
                    </li>
                      <li class="dropdown">
                      <a href="course-archive.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Boarding<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Boarding Houses</a></li>               
                        <li><a href="#">Benefits of Boarding</a></li>
                        <li><a href="#">Dining</a></li>
                        <li><a href="#">Routine</a></li>                    
                      </ul>
                    </li>
                    </li>
                      <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Activities<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Sports</a></li>               
                        <li><a href="#">Riding</a></li>
                        <li><a href="#">Clubs & Societies</a></li>
                        <li><a href="#">Debating</a></li>
                        <li><a href="#">Music</a></li>                    
                        <li><a href="#">Drama</a></li>
                      </ul>
                    </li>-->*/
?>                    
                    <li class="dropdown">
                    	<a href="#" class="dropdown-toggle" role="button" aria-expanded="false"><span>Admissions<span class="caret"></span></span></a>
                      <ul class="dropdown-menu" role="menu">


                          <li><a href="ac-admission-policy">Admissions Policy & Process</a></li>

                          <?php /*<li><a href="news-1107-available-seats">Available Seats</a></li> */?>
                          <li><a href="procedure-and-requirements">Admission Procedure & Requirements</a></li>
                          <li><a href="download-application-forms-2022-23">Application Forms</a></li>
						  <?php /*?><li><a href="news-1222-revised-admissions-testing-schedule-2022-23">Revised Admissions Testing Schedule 2022-23</a></li><?php */?>

                          <li><a href="points-of-entry-into-aitchison">Points of Entry Into Aitchison</a></li>

                          <li><a href="important-dates-admissions">Table of Important Dates 2022-23</a></li>

                          <li><a href="age-guidelines-for-admissions">Age Guidelines for Admissions 2023-24</a></li>
						  <li><a href="./school_doc/admission-2023/syllabus-admission-testing-guide-2023-24.pdf" target="_blank">A Guide to Syllabus and Admission Testing</a></li>
                          <li><a href="admissions-faqs">FAQs on the Admissions Process</a></li>
                          <li><a href="fee-structure">Fee Structure 2021-22</a></li>

                          <li><a href="international-enrolment">International Enrolments</a></li>


                          <?php /*?><li><a href="newsandevents-testlink.php?id=330">AS-Level Admissions 2018-19</a></li><?php */?>
						  	<?php /*?><li><a href="newsandevents-testlink.php?id=423">Re: Admissions Information 2019<br> – Prospective Parents</a></li><?php */?>

                          <?php /* ?>
						    <li><a href="ac-admissions-update-202021.php">Admissions Update 2020-21</a></li>
                <li><a href="ac-admissions202021.php">Admissions Information</a></li>
                          <?php */ ?>


                          <?php /*?><li><a href="admission-test-timetable-notice-202021.php">Admissions Testing Schedule 2020</a></li>
                          <li><a href="admission-test-timetable-notice-202021.php">Admissions Testing Schedule</a></li>

                          <li><a href="ac-principal-news.php?id=761">A Possible Return to School - SOPs</a></li>
                          <li><a href="year-level-admissions">Year Level New Admissions 2020-21</a></li><?php */?>
						  <?php /*?><li><a href="request-form-for-registration"><span class="blink_text">Request Form for Registration</span></a></li><?php */?>


                            <?php /* disabled on 2021 05 15 ?>
                          <li><a href="principal-letter-1023-admissions-update">Principal's Updates</a></li>

                          <li><a href="a-level-applications">Admission to A Level and F.Sc (Pre-Medical) 2021-22</a></li>
                          <li><a href="admissions-faqs">FAQs on Admissions</a></li>
                <li><a href="newsandevents-live.php?id=858" target="_blank">Guide to Admissions Testing (Syllabuses)</a></li>

						    <li><a href="ac-admission-policy">Admissions Policy</a></li>

              
					  <li><a href="regulations-for-admissions-testing">Special Regulations for Admissions Testing</a></li>
					  <li><a href="prospective-parents-information">Admissions Information</a></li>
					  <li><a href="guidance-for-admissions">Guidance for Admissions</a></li>


						  <li><a href="age-guidelines-for-admissions">Age Guidelines for 2022-23</a></li>
						  <li><a href="newsandevents-live.php?id=567">Fee Structure</a></li>

                            <li><a href="international-enrolment">International Boarding</a></li>

                          <?php */?>

                      </ul>
                    </li>
<?php
                    /*<!--<li class="dropdown">
                      <a href="ac-admissions.php" class="dropdown-toggle" role="button" aria-expanded="false">Admissions<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="ac-enrolment-policy.php">Enrolment Policy</a></li>               
                        <li><a href="ac-admission-announcements.php">Information</a></li>
                        <li><a href="admission2016/registration-application-form.pdf" target="new"> Registration Form</a></li>                        
                      </ul>
                    </li>-->
                    <!--<li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Principal's Newsletter<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Most Recent Newsletters</a></li>               
                        <li><a href="#">Past Newsletters</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="ac-alumni.php" class="dropdown-toggle" role="button" aria-expanded="false">Alumni<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="ac-alumni-office.php">Alumni Office</a></li>
                        <li><a href="ac-alumni-registration.php">Alumni Registration</a></li>
                        <li><a href="ac-alumni-famousboys.php">Famous Old Boys</a></li>               
                        <li><a href="ac-alumni-acoba.php">Acoba</a></li>
                        <li><a href="ac-alumni-office-meetings.php">Meetings</a></li>
                      </ul>
                    </li>-->*/
                    
?>
                    <li><a href="available-positions">Careers</a></li>
					  
					  
					  <?php #These menu items will be shown on Mobile view only. ?>
					  
					  
					    
					<li class="dropdown visible-xs"><a href="#" class="dropdown-toggle" role="button" aria- expanded="false">Academics<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="academics">Academics</a></li>
						<li><a href="academics-overview">Overview</a></li>               
                        <li><a href="harkness-table">Harkness Table</a></li>
                        <li><a href="sat-centre">SAT Centre</a></li>
                        <li><a href="meta-cognition">Meta-Cognition</a></li>
                      </ul>
                    </li>
					  
					<li class="dropdown visible-xs"><a href="#" class="dropdown-toggle" role="button" aria-expanded="false">Our Schools<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
						<li><a href="our-schools">Our Schools</a></li>  
						<li><a href="student-leadership">Student Leadership</a></li>
						<li><a href="pastoral-care">Pastoral Care</a></li>
						<li><a href="senior-school">Senior School</a></li>
						<li><a href="prep-school">Prep School</a></li>
						<li><a href="junior-school">Junior School</a></li>
						<li><a href="clubs-and-societies">Clubs &amp; Societies</a></li>
						<li><a href="debating">Debating</a></li>
						<li><a href="art">Art</a></li>
						<li><a href="music">Music</a></li>
						<li><a href="theatre">Drama</a></li>
                      </ul>
                    </li>					  
						
					<li class="dropdown visible-xs"><a href="#" class="dropdown-toggle" role="button" aria-expanded="false">Boarding<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="boarding-houses">Boarding Houses</a></li>
						<li><a href="benefits-of-boarding">Benefits of Boarding</a></li>
						<li><a href="boarding-admissionsF">Boarding Admissions</a></li>
						<li><a href="boarding-pastoralcare">Pastoral Care</a></li>
						<li><a href="boardingmedical">Medical</a></li>
						<li><a href="boarding-weekendactivities">Weekend Activities</a></li>  					
						<li><a href="dining">Dining</a></li>
						<li><a href="international-enrolment"><span class="blink_text">International Boarding</span></a></li>
						<li><a href="boarding-routine">Routine</a></li>
						<li><a href="boarding-handbook">Boarding Handbook</a></li>
						<li><a href="boarding-faq">Boarding FAQ</a></li>
                      </ul>
                    </li>
					
					  
					<li class="dropdown visible-xs"><a href="#" class="dropdown-toggle" role="button" aria-expanded="false">Sports<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="sports">Sports</a></li>
						<li><a href="sports-mission">Mission Statement</a></li>
						<li><a href="sports-philosophy">Sports Philosophy</a></li>
						<li><a href="sports-sheroes">Sporting Heroes</a></li>
						<li><a href="sportsacademies">Sports Academies</a></li>
						<li><a href="cricket">Cricket</a></li>
						<li><a href="college-records">College Records</a></li>
						<li><a href="riding">Riding</a></li>
                      </ul>
                    </li>
					  
						

					<li class="dropdown visible-xs"><a href="#" class="dropdown-toggle" role="button" aria-expanded="false">Principal's Newsletters<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="principal-recent-newsletter">Most Recent Newsletters</a></li> 
                        <li><a href="principal-past-newsletter">Principal's Past Newsletters</a></li>
                      </ul>
                    </li>
					  
					  
					  
					  
					  <?php #End of Mobile view itesm. ?>
					  
					  
                    <li><a href="/alumni/" target="_blank">Alumni</a></li>
					<li class="dropdown hidden-xs"><a href="picture-gallery" class="dropdown-toggle" role="button" aria-expanded="false">Gallery<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        
						<li><a href="event-gallery">Events</a></li>               
                        <li><a href="gallery-schools">Around the Schools</a></li>
                        <li><a href="gallery-sports">Sports</a></li>
                        <li><a href="gallery-architect">Architecture</a></li>
                        <li><a href="gallery-ground-and-fields">Grounds &amp; Fields</a></li>                        
                      </ul>
                    </li>  
                    <li class="dropdown visible-xs"><a href="#" class="dropdown-toggle" role="button" aria-expanded="false">Gallery<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
						<li><a href="picture-gallery">Gallery</a></li>
                        <li><a href="event-gallery">Events</a></li>               
                        <li><a href="gallery-schools">Around the Schools</a></li>
                        <li><a href="gallery-sports">Sports</a></li>
                        <li><a href="gallery-architect">Architecture</a></li>
                        <li><a href="gallery-ground-and-fields">Grounds &amp; Fields</a></li>                        
                      </ul>
                    </li>
                    <li><a href="news-and-events"><span>News &amp; Events</span></a></li>
					<li><a href="make-a-gift">Support College</a></li>
                    <?php
					//print_r($_SESSION);
					if(isset($_SESSION['parents']) && count($_SESSION['parents']) > 1){
					?>
					<li class="dropdown"><a href="pmain.php">Dashboard</a>
                    	<ul class="dropdown-menu" role="menu">
                        	
                        	<li><a href="plogout.php">Logout</a></li>
                        </ul>
                    </li>	
					<?php	
					}else if(isset($_SESSION['boarder']) && count($_SESSION['boarder']) > 1){
					?>
                    <li class="dropdown"><a href="b_main.php">Dashboard</a>
                    	<ul class="dropdown-menu" role="menu">
                        <li><a href="blogout.php" class="page-topmenu-link">Logout</a></li>
                        </ul>
                    </li>
                    <?php	
					}else if(isset($_SESSION['stdportal']) && count($_SESSION['stdportal']) > 1){
					?>
                    <li class="dropdown"><a href="std_main.php">Dashboard</a>
                    	<ul class="dropdown-menu" role="menu">
                        	<li><a href="blogout.php" class="page-topmenu-link">Logout</a></li>
                        	<?php
                            foreach($std_portal_links as $skey=>$svalue){
							?>
                            	<?php /*?><li><a href="<?php //echo $skey;?>" class="page-topmenu-link"><?php //echo $svalue;?></a></li><?php */?>
                            <?php
							}
							?>                            
                        </ul>
                    </li>
                    <?php	
					}else if(isset($_SESSION['stfportal']) && count($_SESSION['stfportal']) > 1){
					?>
                    <li class="dropdown"><a href="stf_main.php">Dashboard</a>
                    	<ul class="dropdown-menu" role="menu">
                        	
                        	<?php
                            foreach($stf_portal_links as $skey=>$svalue){
							?>
                            	<?php /*?><li><a href="<?php //echo $skey;?>" class="page-topmenu-link"><?php //echo $svalue;?></a></li><?php */?>
                            <?php
							}
							?>
                            	<li><a href="stflogout.php" class="page-topmenu-link">Logout</a></li>                            
                        </ul>
                    </li>
					<?php	
					}else{
					?>

                      <li><a href="portal/acportal">Login</a></li>

					  
					<?php if(false){
					?>
                    <li class="dropdown"><?php //print_r($_SESSION);?>
                      <a href="#" class="dropdown-toggle" role="button" aria-expanded="false">Login<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="portal/login.php?p=p">Parents' Portal</a></li>
                        <?php /*?><li><a href="ac-students-login.php">Students' Portal</a></li>
                        <li><a href="portal/stafflogin.php">Staff Portal</a></li>
                        <li><a href="http://webmail.aitchison.edu.pk/" rel="nofollow noopener noreferrer"  target="_blank">Webmail</a></li>
                        <li><a href="https://mail.google.com/a/aitchison.edu.pk" rel="nofollow noopener noreferrer"  target="_blank">Webmail</a></li><?php */?>
                      </ul>
                    </li>
					<?php } ?>
                    <li><a href="contact-info">Contact</a></li>
					
                    <?php	
					}
					?>
                  </ul> 
					
					
					<div class="social-icons hidden-xs" align="right">
						<div class="container">
						<ul class="list-inline">
						  <li class="list-inline-item"><a href="https://www.facebook.com/Aitchison-College-368847620484906" target="_blank" title="Facebook"><img src="img/facebook-icon.png" style="width:24px; height:24px;"></a></li>
						  <li class="list-inline-item"><a href="https://www.instagram.com/aitchisoncollegeofficial" target="_blank" title="Instagram"><img src="img/instagram-icon.png" style="width:24px; height:24px;"></a></li>
						  <li class="list-inline-item"><a href="https://www.linkedin.com/company/14764887" target="_blank" title="LinkedIn"><img src="img/linkedin-icon.png" style="width:24px; height:24px;"></a></li>
						</ul>
						</div>
					</div>
					
					
                </div><!--/.nav-collapse -->
              </div>     
            </nav>  
          </div>
          <!-- END MENU -->    
        </header>
<a href="#" id="playVid" class="btn btn-default" style="display: none;" data-toggle="modal" data-target="#videoModal">Play</a>

<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true" style="width: 350;">
    <div class="modal-dialog" style="width: 100%;">
        <div class="modal-content">
            <div class="modal-body">
				
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" id="closeit">&times;</button>
                <div>
                    <iframe id="videoply123" class="videoFrm" src=""></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

 <link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>  
      <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 
   <?php /*?><div id="vid3" style="display: none;" >
		<video width="100%" height="auto" id="introVid3" controls>
			<source src="videos/principal-speech-518.mp4" type="video/mp4"/>
			Your browser does not support the video tag.
		</video>

	</div>


    <div id="vid4" style="display: none;" >
		<video width="100%" height="auto" id="introVid4" controls>
			<source src="videos/imran-khan-speech-518.mp4" type="video/mp4"/>
			Your browser does not support the video tag.
		</video>

	</div><?php */?>
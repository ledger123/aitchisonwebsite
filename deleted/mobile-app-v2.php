<!DOCTYPE html>
<?php
function get_browser_name($user_agent)
{
    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
    elseif (strpos($user_agent, 'Edge')) return 'Edge';
    elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
    elseif (strpos($user_agent, 'Safari')) return 'Safari';
    elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
    elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';
    return 'Other';
}
$bname=get_browser_name($_SERVER['HTTP_USER_AGENT']);

?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Aitchison College : Home</title>
	
    <meta name="language" content="en" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="apple-touch-icon" href="img/favicon.png" />
    
	
	
    <link rel="stylesheet" href="css/bootstrap.min.3.3.7.css">
    <link rel="stylesheet" href="css/jquery.maximage.css?v=1.2" type="text/css" media="screen" charset="utf-8" />
    <link rel="stylesheet" href="css/ystyle.css" type="text/css" media="screen" charset="utf-8" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="stylesheet" href="css/screen.css?v=1.2" type="text/css" media="screen" charset="utf-8" />-->
    
	
	
    <link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
    
	<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" media="screen" charset="utf-8" />
	
<script src="js/jquery.min.1.12.4.js"></script>
<script src="js/bootstrap.min.3.3.7.js"></script>

	
<audio tabindex="0" id="player" src="/ac-song/aa-fast_new.mp3">
    <p>If you are reading this, it is because your browser does not support the audio element.</p>
    <embed src="/ac-song/aa-fast.mp3" width="180" height="90" hidden="true" />
</audio>

<style type="text/css" media="screen">
	
	.ui-dialog .ui-dialog-content {
		padding: 0;
	}
	/* I wanted to center my loader */
	#cycle-loader {
		height:32px;
		left:50%;
		margin:-8px 0 0 -8px;
		position:absolute;
		top:50%;
		width:32px;
		z-index:999;
	}
	
	#main-navbar{
        margin-top: 0px;
		z-index: 1050;
    }
	.contentarea{
		padding-top: 5%;
		/*color: #fdfeff;*/
		color: rgba(255, 255, 255, 1);
		opacity: 1;
		line-height: 1.2em;
		
	}
	.contentarea h1{		
		line-height: 1.2em;
		
	}
	.contentarea p{
		font-size: 16px;
		font-weight: 400;
		line-height: 1.4em;
		
	}	
	/*I want to avoid jumpiness as the JS loads, so I initially hide my cycle*/
	#maximage {
		display:none;/* Only use this if you fade it in again after the images load */
		position:fixed !important;
	}
	
	/*Set my gradient above all images*/
	#gradient {
		left:0;
		height:100%;
		position:absolute;
		top:0;
		width:100%;
		z-index:999;
	}
	
	/*Set my logo in bottom left*/
	#logo {
		bottom:30px;
		height:auto;
		left:30px;
		position:absolute;
		width:34%;
		z-index:1000;
	}
	#logo img {
		width:100%;
	}
	
	#arrow_left, #arrow_right {
		bottom:30px;
		height:67px;
		position:absolute;
		right:30px;
		width:36px;
		z-index:1000;
	}
	#arrow_left {
		right:86px;
	}
	
	#arrow_left:hover, #arrow_right:hover {
		bottom:29px;
	}
	#arrow_left:active, #arrow_right:active {
		bottom:28px;
	}
	
	a {color:#07294d;text-decoration:none;}
	a:hover {text-decoration:underline;}
	
	.in-slide-content { 
		color:#333;
		float:right;
		font-family:'Helvetica Neue', helvetica;
		font-size:60px;
		font-weight:bold;
		right:0;
		margin:40px;
		padding:20px;
		position:absolute;
		top:0;
		width:700px;
		z-index:9999; /* Show above .gradient */
		text-shadow: 0 1px 0 #fff;
		-webkit-font-smoothing:antialiased;
	}
	.light-text {color:#ddd;text-shadow: 0 1px 0 #666;}
	.smaller-text {font-size:30px;}
	.youtube-video, video {
		left:0;
		position:absolute;
		top:0;
	}
	
	#normalLogo {
		background: url(../img/ac_logo125x40.png) 0 100%;
		background-repeat-x: no-repeat;
		background-repeat-y: no-repeat;
		width: 125px;
		height: 40px;
		margin-bottom: 0px;
	}
	h1#logo1 {
		position: inherit;
	}
	#mobileLogo {
		background: url(../img/ac_logo46x46.png) 0 100%;
		background-repeat-x: no-repeat;
		background-repeat-y: no-repeat;
		width: 46px;
		height: 46px;
	}
	.navbar-nav > li > a {
		padding: 10px 14px;
	}
	
	
	
	@media only screen and (max-width: 991px) and (min-width: 768px) {
		#navbarCollapse {
			padding-left: 50px;
		}
		#normalLogo {
			width: 40px;
		}
	}
	@media only screen and (max-width: 992px) {
		.aku_logo{			
			/*padding-left: 35px;*/
			padding-left: -35px;
		}		
	}
	@media only screen and (min-width: 992px) {
		.aku_logo{
			margin: auto;
			padding-left: 50px;
			/*padding-left: 35px;*/
		}		
	}
	@media only screen and (max-width: 1199px) and (min-width: 992px) {		
		#navbarCollapse {
			padding-left: 110px;
		}
	}
	
	@media (max-width: 767px) {
		#main-navbar {
			height: 50px;
		}
		#navbarCollapse {
			padding-left: 15px;
		}
		#navbarCollapse ul {
			background-color: #07294d;
    		border-color: #006699;
			margin-top: 0px;
		}
		
	}
	
	@media (max-width: 1024px) and (min-width: 769px) {
		#main-navbar > .container {
			padding-left: 0px; padding-right: 0px;
		}
	}
	@media (max-width: 1024px){
		.navbar-nav > li > a {
		padding: 10px 7px;
		}
		.main-navbar{
			text-align: right;
		}
	}
/*.navbar-nav > li > a {
		padding: 10px 14px;
	}*/
	@media only screen and (max-width: 375px) {
		
		/*#topMessage {
			font-size:20px;
		}*/
	}
	
	@media only screen and (max-width: 800px) {
		
		/*#topMessage {
			font-size:20px;
		}*/
	}
	
	@media only screen and (max-width: 1199px) {
		#topMessage {
			font-size:20px;
		}
	}
	//
	.latestsection{		
		position: absolute;
		top: 120px;
		height:30.72px;
		width: 100%;
		float:left;
		opacity: 0.5;
  		filter: Alpha(opacity=50);
		
		
		/*background-color: #07294d;
		background-color:  transparent;*/
		background-color: rgba(7,41,77, 0.3);		
	}
	
	#latesteventssection marquee {
		padding-top: 0px;
		padding-left: 15px;
		padding-right: 15px;
		padding-bottom: 1px;
		height: 30px;
		font-size: 15px;
		color: #fff;
		line-height: 2.6;
		font-weight: bold;
	}
	#latesteventssection .withoutlink{
		font-size: 15px;
		color: orange;
		line-height: 2.6;		
	}
	
	#latesteventssection span{
		padding-left: 12px;
		padding-right: 12px;
		color:  white;
		
	}
	#latesteventssection a {
		font-size: 15px;
		color:  orange;
		line-height: 2.6;
	}
	#highlightSection {
		position: relative;
		height:38.72px;
		width: 57%;
		float:left;
		margin-left: 110px;
		background-color: #07294d;
	}
	
	#highlightSection marquee {
		padding-top: 0px;
		padding-left: 15px;
		padding-right: 15px;
		padding-bottom: 1px;
		height: 38px;
	}
	
	#highlightSection a {
		font-size: 16px;
		color: #fff;
		line-height: 2.6;
	}

@media (max-width: 1199px) {
	#highlightSection {
		height: 38.14px;
		width: 50%;
		margin-left: 110px;

	}

	#highlightSection marquee {
		padding-top: 5px;
	}

	#highlightSection a {
		font-size: 12px;
		color: #fff;
		line-height: 2.6;
	}
}
	
@media (max-width: 1023px) {
	#highlightSection {
		height:41.11px;
		width: 55%;
		margin-left: 0px;

	}

	#highlightSection marquee {
		padding-top: 5px;
	}

	#highlightSection a {
		font-size: 12px;
		color: #fff;
		line-height: 2.6;
	}
}
/*======================///////////////
			Start Blinking Style
=====================///////////////////////*/
.blink_text2 { 

-webkit-animation-name: blinker;
 -webkit-animation-duration: 10s;
 -webkit-animation-timing-function: linear;
 -webkit-animation-iteration-count: infinite;

 -moz-animation-name: blinker;
 -moz-animation-duration: 10s;
 -moz-animation-timing-function: linear;
 -moz-animation-iteration-count: infinite;
 animation-name: blinker;
 animation-duration: 10s;
 animation-timing-function: linear; 
 animation-iteration-count: infinite; color: #337ab7; 
} 
.blink_text { 

-webkit-animation-name: blinker;
 -webkit-animation-duration: 2s;
 -webkit-animation-timing-function: linear;
 -webkit-animation-iteration-count: infinite;

 -moz-animation-name: blinker;
 -moz-animation-duration: 2s;
 -moz-animation-timing-function: linear;
 -moz-animation-iteration-count: infinite;
 animation-name: blinker;
 animation-duration: 2s;
 animation-timing-function: linear; 
 animation-iteration-count: infinite; color: white; 
} 

@-moz-keyframes blinker {
    0% { opacity: 1.0; }
	25% { opacity: 0.0; }
    30% { opacity: 1.0; }
	40% { opacity: 1.0; }
	50% { opacity: 0.0; }
	60% { opacity: 1.0; }
	70% { opacity: 1.0; }
	80% { opacity: 1.0; }
	90% { opacity: 1.0; }
	/*75% { opacity: 0.75; }
	85% { opacity: 1.0; }
	95% { opacity: 1.0; }*/
    100% { opacity: 1.0; } 
}

@-webkit-keyframes blinker {  
    0% { opacity: 1.0; }
	/*25% { opacity: 0.25; }*/
    50% { opacity: 0.0; }
	/*75% { opacity: 0.75; }
	85% { opacity: 1.0; }
	95% { opacity: 1.0; }*/
    100% { opacity: 1.0; } 
} 

@keyframes blinker {  
    0% { opacity: 1.0; }
	/*25% { opacity: 0.25; }*/
    50% { opacity: 0.0; }
	/*75% { opacity: 0.75; }
	85% { opacity: 1.0; }
	95% { opacity: 1.0; }*/
    100% { opacity: 1.0; } 
} 

/*======================///////////////
			End Blinking Style
=====================///////////////////////*/	
	
	/*
	if ( parseInt( $(window).width() ) <= 1024) {
		width_ = 220;
	}
	
	if ( parseInt( $(window).width() ) <= 768) {
		width_ = 190;
	}
	
	if ( parseInt( $(window).width() ) <= 425) {
		
		width_ = 140;
	}
	*/
	
	.social-icons {
		vertical-align: top; margin-top: 6px; position: absolute; float: right; display: block; right: 5px; top: 0;
	}
	
	.social-icons .fa {
		font-size: 2em;
		color: #ecf0f1;
	}
	
	.social-icons .fa:hover {
		color: #fff;
	}
	
	
	#jdialog {
		width: 250px;
	}
	
	.dialog-text {
		text-align: center; color: #0b3b6f; margin-top: 5px;
	}
	
	.dialog-text h4 {
		font-size: 15px; font-weight: bold; color: #0b3b6f; font-style: italic;
	}
	
	@media (max-width: 1024px) {
		#jdialog {
			width: 220px;
		}
	}
	
	@media (max-width: 768px) {
		#jdialog {
			width: 190px;
		}
		
		
		.dialog-text {
			font-size: 11px;
		}
		
		.dialog-text a {
			font-size: 11px;
		}
		
		.social-icons {
			margin-top: 10px;
		}
		.social-icons .fa {
			font-size: 1.5em;
		}
	}
	
	@media (max-width: 425px) {
		
		#jdialog {
			width: 140px;
		}
		
		.dialog-text {
			font-size: 10px;
		}
		
		
		.dialog-text a {
			font-size: 11px;
		}

		.dialog-text h4 {
			font-size: 12px; font-weight: bold; color: #0b3b6f; font-style: italic;
		}
		
		.social-icons {
			vertical-align: top;
			float: unset;
			right: unset;
			left: 35%;
		}
		.social-icons .fa {
			font-size: 2em;
		}
	}
	
</style>

</head> 
<body>
<!--<?php 
		date_default_timezone_set ("Asia/Karachi");
		echo strtotime("d/m/Y h:i:s");
		$dTimeStamp=strtotime('Monday, 31-Dec-18 17:00:00');		
		//echo "<br>".$dTimeStamp."<br>"; 
		//1546274700
		//echo date("Y-m-d H:i:s","1546274700")."<br>"; 
		//echo date("Y-m-d H:i:s",$dTimeStamp)."<br>New"; 
		//echo date("Y-m-d h:i:s");
    ?>
-->

	
	<div id="jdialog" style="" hidden="hidden">
		
		<img id="imgHistory" alt="Photographic History" class="img-responsive" src="newsletter/news/images/photographic-history-1-469.jpg" style="width: 100%">

		<div class="dialog-text">
			<!--<a href="#"><h3 style="color: #0b3b6f;">Get this book</h3></a>-->
			On sale at Alumni Office:<br >
			<a href="reliving-aitchison.php" target="new"><h4>Reliving Aitchison<br >A Modern Photographic History</h4></a>
			
			<a href="newsandevents-live.php?id=482" style="color: #0b3b6f;" target="new">How to place an order</a>
			
		</div>
	</div>
	
	<div id="topSection" style="display: none; visibility: collapse;">
    	
		<div id="highlightSection" class="hidden-xs">			
			<marquee behavior="alternate" direction="right" scrollamount="5" onmouseover="this.stop();" onmouseleave="this.start();">
				<a href="newsandevents-testlink.php?id=418">ADMISSIONS INFORMATION NOW AVAILABLE</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<?php /*?><a href="./school_doc/admission-2019/admission-registration-form-2019.pdf" target="_blank"><span style="color:  red; text-transform: uppercase;">Admissions Registration Form - 2019</span></a><?php */?>
			</marquee>
		</div>
		
        <nav id="top-navbar" class="hidden-xs">
            <ul style="margin-bottom:0;">
            
			  <li><a href="corporate-partners.php"><div>Corporate Partners</div></a></li>
            	<li class="highlightMe"><a href="ac-makeagift.php"><div>Make a Gift</div></a></li>
                
                <li><a href="javascript:void(0)" style="bottom:2px;" title="College Song" onclick="aud_play_pause()">
                	<img id="imgAudio" src="img/audio-off.png" alt="College Song" style="width:24px; height:24px;"/>
                </a></li>
            </ul>
        </nav>
        <div class="visible-xs" style="background: #07294d; padding-left:15px; margin-top: 10px; padding-bottom:2px;">
        	<a class="" data-toggle="collapse" href="#topLinks" role="button" aria-expanded="false" aria-controls="topLinks" style="background: #07294d; text-decoration:none;">
            	<div style="display:inline; color:#fff;">
	            	<!--<div style="display:inline; line-height:35px; font-size: 24px;">Make a Gift</div>-->
					<div style="display:inline; line-height:35px; font-size: 24px;">Quick Links</div>
                </div>
                <img src="img/arrow-down.png" style="float:right;" />
            </a>
            
            <div class="collapse navbar-collapse" id="topLinks">
            	<ul class="nav navbar-nav" style="margin-bottom:0; overflow: hidden; list-style: none; background-color: #07294d;">
                	<li><a href="ac-admissions201819.php">Admissions Information</a></li>
					<li><a href="alumni/makeagift.php">Make a Gift</a></li>
					<li><a href="corporate-partners.php">Corporate Partners</a></li>
					<li><a href="ac-ourschools.php">Our Schools</a></li>
					<li><a href="ac-ac.php">Academics</a></li>
					<li><a href="ac-boarding-houses.php">Boarding</a></li>
					<li><a href="ac-sports.php">Sports</a></li>
					<li><a href="ac-availablepositions.php">Careers</a></li>
					<li><a href="ac-principal_newsletter.php">Principal's Newsletter</a></li>
                </ul>
            </div>
        </div>
    
    </div>


	<div id="main-navbar" class="navbar navbar-inverse">
		<div class="container" style="">	
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1 id="logo1">
					<a id="mobileLogo" href="#" class="navbar-brand visible-xs"></a><!-- this one will be visible on mobile -->
					<a id="normalLogo" href="#" class="navbar-brand hidden-xs"></a>
				</h1>
			</div>
			<div id="navbarCollapse" class="collapse navbar-collapse">
			  <ul id="top-menu" class="nav navbar-nav"<?php echo ($bname=='Safari')?' style="width: 100%;"':'';?>>
				<li><a href="/">Home</a></li>
			  <li class="dropdown visible-xs">
                      <a href="#" class="dropdown-toggle" role="button" aria-expanded="false">About Us<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
						<li><a href="about-us.php">About Us</a></li>   
                        <li><a href="ac-history.php">History</a></li>
                        <li><a href="ac-archive.php">Archives</a></li>
                        <?php /*?><li><a href="ac-bog.php">Board of Governors</a></li><?php */?>
                        <li><a href="ac-principal-office.php">Principal</a></li>
                        <li><a href="ac-school-organization.php">School Organization</a></li>
                        <li><a href="ac-principals.php">Past Principals</a></li>                                                
                        <li><a href="ac-aceducation.php">An Aitchison Education</a></li>
                        <li><a href="ac-core-purpose.php">Core Purpose</a></li>
                        <li><a href="ac-career-guidance.php">Higher Education and Careers<?php /*?>University and Career Guidance<?php */?></a></li>
                        <li><a href="ac-university-placements.php">University Placements</a></li>
                        <li><a href="ac-facilities.php">Facilities</a></li>
                        <li><a href="ac-environment.php">Environment</a></li>
                      </ul>
                    </li>	  
                  <li class="dropdown hidden-xs">
                      <a href="about-us.php" class="dropdown-toggle" role="button" aria-expanded="false">About Us<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="ac-history.php">History</a></li>
                        <li><a href="ac-archive.php">Archives</a></li>
                        <?php /*?><li><a href="ac-bog.php">Board of Governors</a></li><?php */?>
                        <li><a href="ac-principal-office.php">Principal</a></li>
                        <li><a href="ac-school-organization.php">School Organization</a></li>
                        <li><a href="ac-principals.php">Past Principals</a></li>                                                
                        <li><a href="ac-aceducation.php">An Aitchison Education</a></li>
                        <li><a href="ac-core-purpose.php">Core Purpose</a></li>
                        <li><a href="ac-career-guidance.php">Higher Education and Careers<?php /*?>University and Career Guidance<?php */?></a></li>
                        <li><a href="ac-university-placements.php">University Placements</a></li>
                        <li><a href="ac-facilities.php">Facilities</a></li>
                        <li><a href="ac-environment.php">Environment</a></li>
                      </ul>
                    </li>

				<li class="dropdown">
					<a href="javascript:;" class="dropdown-toggle" role="button" aria-expanded="false"><span>Admissions<span class="caret"></span></span></a>
				  <ul class="dropdown-menu" role="menu">
						<?php /*?><li><a href="newsandevents-testlink.php?id=330">AS-Level Admissions 2018-19</a></li><?php */?>
						<!--<li><a href="newsandevents-testlink.php?id=423">Caption will be here</a></li>--> 
					  <li><a href="newsandevents-live.php?id=475">Admissions Update 2020-21</a></li>
						<li><a href="ac-admissions201920.php">Admissions Information</a></li>
					  <li><a href="ac-admission-policy-new.php">Admissions Policy</a></li>
					  <li><a href="newsandevents-live.php?id=523">Age Criteria for 2020-21</a></li>
					  <li><a href="newsandevents-live.php?id=567">Fee Structure</a></li>
					  <li><a href="newsandevents-live.php?id=495">Admissions to AS Level</a></li>

					  <?php /*?><li><a href="./school_doc/admission-2019/admission-registration-form-2019.pdf" download><span class="blink_text">Registration Form 2019</span></a></li><?php */?>

						<?php /*?><li><a href="newsandevents-testlink.php?id=423">Principal's Letter</a></li><?php */?>
					  
					  <?php /*?>
						<li><a href="school_doc/admission-2019/admission-process-2019-20.pdf" target="_blank">Admission Process 2019-20</a></li>
					  <?php */?>

						<!--<li><a href="ac-admissions-faq-201819.php">FAQs on Admissions</a></li>-->
						
						<?php /*?><li><a href="ac-admissions-age-guidelines-201920.php">Age Criteria</a></li><?php */?>


					   <?php /*?><li><a href="ac-boarding-admissions-new.php">Boarding Admissions</a></li><?php */?>
						<?php /*?><li><a href="newsandevents-testlink.php?id=417">Fee Structure</a></li><?php */?>


					 <li><a href="school_doc/admission-2019/admissions-guide-2019-20.pdf" target="_blank">A Guide to Admissions Tests</a></li>
					 <li><a href="ac-admissions-faq-2019.php">FAQs on Admissions</a></li>

						<li><a href="international-enrolments.php"><?php /*?><span class="blink_text"><?php */?>International Boarding<?php /*?></span><?php */?></a></li>



						<!--<li><a href="school_doc/registration-from-31012018.pdf" target="_blank">Request for Registration Form</a></li>-->
				  </ul>
				</li>
				<li><a href="ac-availablepositions.php">Careers</a></li>
				<li><a href="/alumni/" target="_blank">Alumni</a></li>
				<li class="dropdown hidden-xs"><a href="gallery.php" class="dropdown-toggle" role="button" aria-expanded="false">Gallery<span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">

					<li><a href="gallery.php?cat=events">Events</a></li>               
					<li><a href="gallery_schools.php">Around the Schools</a></li>
					<li><a href="gallery_all_sports.php">Sports</a></li>
					<li><a href="gallery_architect.php">Architecture</a></li>
					<li><a href="gallery_ground_and_fields.php">Grounds &amp; Fields</a></li>                        
				  </ul>
				</li>  
				<li class="dropdown visible-xs"><a href="#" class="dropdown-toggle" role="button" aria-expanded="false">Gallery<span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="gallery.php?cat=events">Events</a></li>               
					<li><a href="gallery_schools.php">Around the Schools</a></li>
					<li><a href="gallery_all_sports.php">Sports</a></li>
					<li><a href="gallery_architect.php">Architecture</a></li>
					<li><a href="gallery_ground_and_fields.php">Grounds &amp; Fields</a></li>                        
				  </ul>
				</li>  
				<?php /*?><li class="dropdown"><a href="gallery.php" class="dropdown-toggle" role="button" aria-expanded="false">Gallery<span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="gallery.php?cat=events">Events</a></li>               
					<li><a href="gallery_schools.php">Around the Schools</a></li>
					<li><a href="gallery_all_sports.php">Sports</a></li>
					<li><a href="gallery_architect.php">Architecture</a></li>
					<li><a href="gallery_ground_and_fields.php">Grounds &amp; Fields</a></li>                        
				  </ul>
				</li><?php */?>
				<li><a href="newsandevents.php"><span>News &amp; Events</span></a></li>
				<li class="dropdown visible-xs"><a href="#" class="dropdown-toggle" role="button" aria- expanded="false">Academics<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="ac-ac.php">Academics</a></li>
						<li><a href="ac-academics-overview.php">Overview</a></li>               
                        <li><a href="ac-harkness-table.php">Harkness Table</a></li>
                        <li><a href="sat_centre.php">SAT Centre</a></li>
                        <li><a href="ac-meta-cognition.php">Meta-Cognition</a></li>
                      </ul>
                    </li>
					  
					<li class="dropdown visible-xs"><a href="#" class="dropdown-toggle" role="button" aria-expanded="false">Our Schools<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
						<li><a href="ac-ourschools.php">Our Schools</a></li>  
						<li><a href="ac-student-leadership.php">Student Leadership</a></li>
						<li><a href="ac-pastoralcare.php">Pastoral Care</a></li>
						<li><a href="ac-sschool.php">Senior School</a></li>
						<li><a href="ac-pschool.php">Prep School</a></li>
						<li><a href="ac-jschool.php">Junior School</a></li>
						<li><a href="ac-clubsociety.php">Clubs &amp; Societies</a></li>
						<li><a href="ac-debating.php">Debating</a></li>
						<li><a href="ac-art.php">Art</a></li>
						<li><a href="ac-music.php">Music</a></li>
						<li><a href="ac-drama.php">Drama</a></li>
                      </ul>
                    </li>
					  
						
					<li class="dropdown visible-xs"><a href="#" class="dropdown-toggle" role="button" aria-expanded="false">Boarding<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="ac-boarding-houses.php">Boarding Houses</a></li>
						<li><a href="ac-benefitsofboarding.php">Benefits of Boarding</a></li>
						<li><a href="ac-boarding-admissions1.php">Boarding Admissions</a></li>
						<li><a href="boarding-pastoral-care.php">Pastoral Care</a></li>
						<li><a href="boarding-medical.php">Medical</a></li>
						<li><a href="boarding-weekend-activities.php">Weekend Activities</a></li>  
						<li><a href="ac-dining.php">Dining</a></li>
						<li><a href="international-enrolments.php"><span class="blink_text">International Boarding</span></a></li>
						<li><a href="ac-boarding-routine.php">Routine</a></li>
						<li><a href="ac-boardinghandbook.php">Boarding Handbook</a></li>
						<li><a href="ac-boarding-faq.php">Boarding FAQ</a></li>
                      </ul>
                    </li>
					
					  
					<li class="dropdown visible-xs"><a href="#" class="dropdown-toggle" role="button" aria-expanded="false">Sports<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="ac-sports.php">Sports</a></li>
						<li><a href="ac-sports.php?p=mission">Mission Statement</a></li>
						<li><a href="ac-sports.php?p=philosophy">Sports Philosophy</a></li>
						<li><a href="ac-sports.php?p=sheroes">Sporting Heroes</a></li>
						<li><a href="ac-sportsacademies.php">Sports Academies</a></li>
						<li><a href="ac-cricket-academy.php">Cricket</a></li>
						<li><a href="ac-college-records.php">College Records</a></li>
						<li><a href="ac-riding.php">Riding</a></li>
                      </ul>
                    </li>
				<li class="visible-xs"><a href="ac-principal_newsletter.php"><span>Principal's Public Letters</span></a></li>
				
				<li><a href="ac-makeagift.php">Gifts</a></li>
				  <?php /*?><a href="#" class="dropdown-toggle" role="button" aria-expanded="false">Login<span class="caret"></span></a><?php */?>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" role="button" aria-expanded="false">Login<span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="portal/login.php?p=p">Parents' Portal</a></li>
					<li><a href="portal/login.php?p=s">Students' Portal</a></li>
					<li><a href="ac-staff-login.php">Staff Portal</a></li>
					<li><a href="https://mail.google.com/a/aitchison.edu.pk" rel="nofollow noopener noreferrer" target="_blank">Webmail</a></li>
				  </ul>
				</li>
				<?php if(false) {?>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" role="button" aria-expanded="false">Login<span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="ac-parents-login.php">Parents' Portal</a></li>               
					<li><a href="ac-boarder-login.php">Boarders' Portal</a></li>
					<li><a href="ac-students-login.php">Students' Portal</a></li>
					<li><a href="ac-staff-login.php">Staff Portal</a></li>
					<li><a href="https://mail.google.com/a/aitchison.edu.pk" rel="nofollow noopener noreferrer" target="_blank">Webmail</a></li>
				  </ul>
				</li>
				<?php }?>
				<li><a href="ac-contact-info.php">Contacts</a></li>
				  <?php /* ?>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" role="button" aria-expanded="false">More<span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="corporate-partners.php">Corporate Partners</a></li>               
					<li><a href="ac-makeagift.php">Make a Gift</a></li>
				  </ul>
				</li>
				  <?php */ ?>
			  </ul>           
			</div>
			
		</div>
		
		<div class="social-icons">
			<ul class="list-inline">
			  <li class="list-inline-item"><a href="https://www.facebook.com/Aitchison-College-368847620484906" target="_blank" title="Facebook"><img src="img/facebook-icon.png" style="width:24px; height:24px;"></a></li>
			  <li class="list-inline-item"><a href="https://www.instagram.com/aitchisoncollegeofficial" target="_blank" title="Instagram"><img src="img/instagram-icon.png" style="width:24px; height:24px;"></a></li>
			  <li class="list-inline-item"><a href="https://www.linkedin.com/company/14764887" target="_blank" title="LinkedIn"><img src="img/linkedin-icon.png" style="width:24px; height:24px;"></a></li>
			</ul>
		</div>
		
		
		<!--<div class="social-icons">
			<ul class="list-inline">
			  <li class="list-inline-item"><a href="https://www.facebook.com/Aitchison-College-368847620484906" target="_blank" title="Facebook"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
			  <li class="list-inline-item"><a href="https://www.instagram.com/aitchisoncollegeofficial" target="_blank" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			  <li class="list-inline-item"><a href="https://www.linkedin.com/company/14764887" target="_blank" title="LinkedIn"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
			</ul>
		</div>-->
	</div>
	<div class="section">
	<div id="latesteventssection" class="latestsection" style="position: relative; top: -20px; display: block; width: 100%; background: none; border-top: thin orange solid; background: rgba(7,41,77, 0.6);">
			<marquee behavior="alternate" direction="left" scrollamount="4" onmouseover="this.stop();" onmouseleave="this.start();">
			<span class="withoutlink" style="text-transform: uppercase;">Opening of New Jafar Memorial Hockey Ground Nov 2</span> <span> |</span> <span class="withoutlink">ANNUAL BOOK FAIR 30-31 OCT</span> <span> |</span>  <a href="https://aitchison.edu.pk/alumni/news-new.php?id=595" target="_blank">OPENING OF NEW RIFLE RANGE </a> <span> |</span>  <a href="https://aitchison.edu.pk/alumni/news-new.php?id=573" target="_blank">ALUMNI EVENTS 2019-20 </a>  <?php /*?><span> |</span>  <a href="https://aitchison.edu.pk/newsandevents-live.php?id=594" target="_blank"> UPCOMING RIDING COMPETITIONS </a><?php */?><?php /*?><span> |</span>  <a href="https://aitchison.edu.pk/alumni/news-new.php?id=581" target="_blank">ALUMNI'S REUNION  1961-1975 </a><?php */?>
</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<?php /*?><a href="./school_doc/admission-2019/admission-registration-form-2019.pdf" target="_blank"><span style="color:  red; text-transform: uppercase;">Admissions Registration Form - 2019</span></a><?php */?>
			</marquee>
		</div>
	<h1 style="font-size: 2.5em; color: orange; font-style: italic; padding-left: 20px;">OFFLINE:</h1>
	</div>
<div class="container">	
    <nav id="main-navbar1" class="navbar navbar-inverse" style="display:none; visibility:collapse;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Brand</a>
        </div>
        <!-- Collection of nav links, forms, and other content for toggling -->
        <div id="navbarCollapse1" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Messages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Inbox</a></li>
                        <li><a href="#">Drafts</a></li>
                        <li><a href="#">Sent Items</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Trash</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Login</a></li>
            </ul>
        </div>
    </nav>
    
    
    
    
    
<!--<a href="http://www.aaronvanderzwan.com/blog/2011/11/maximage-2-0-beta1-release/" id="logo"><img src="lib/images/demo/logo.png" alt="MaxImage: Uses jQuery Cycle Plugin to create background slideshows" /></a>
    <a href="" id="arrow_left"><img src="lib/images/demo/arrow_left.png" alt="Slide Left" /></a>
    <a href="" id="arrow_right"><img src="lib/images/demo/arrow_right.png" alt="Slide Right" /></a>
    
    <img id="cycle-loader" src="lib/images/ajax-loader.gif" />-->
    
    <div id="maximage">
        <img src="img/slider/banner04102019/mob-banner-11102019.jpg" alt="" style="opacity: 0.9;" />
    </div>
    <div class="row contentarea">		
		<div class="col-lg-6 col-md-6 col-sm-6 col-sx-12" style="margin-top:20px;">
			<h1 style="font-size: 34px;">Keep track of all the scholastic activities using Parents’ Portal App:</h1>
			<p style="line-height: 1.6em; letter-spacing: 1px;">
				Parents' Portal app is available to download for cellular devices for parents. It will keep them updated on School’s Programmes, the Principal's Letters, Annual Calendars, Academics and other Alerts.
		  </p>
			<br>
<br>
<br>
<br>

			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-5 col-sx-12">
					<img src="img/googleplaystore-25102019.png" style="width: 100%; height: auto;" /></div>		
				<div class="col-lg-5 col-md-5 col-sm-5 col-sx-12">
				  <img src="img/howitworks-25102019.png" style="width: 100%; height: auto;" />
				</div>

			</div>
		
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-sx-12">
		  <img src="img/mob-responsive-18102019-V3.png" style="width: 100%; height: auto;" />
	</div>
	</div>
	
	

<style>
	
	.cambridge-footer {
		color:#FFFFFF; text-align: center; line-height: 1.2em; height: 48px; padding-top: 5px;
	}
	
	.cambridge-footer span{
		font-size: 9px;
	}
	
@media (min-width: 1025px) {
	.cambridge-footer span{
		font-size: 12px;
	}
	
}
	
@media (max-width: 425px) {
	.cambridge-footer span{
		font-size: 11px;
	}
	
}
	
@media (max-width: 767px) {

	.navbar-fixed-bottom { 
		position: fixed;
		right: 0;
		left: 0;
		bottom: 0;
		margin-bottom: 0;
		border-width: 1px 0 0;
	}
	
}
	
@media (max-width: 768px) {
	#cambridge2 {
		font-size: 12px;
	}
	
}
</style>
<!--<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div align="center"> <font color="#FF0000" size="+2" ><b>
ALL SPORT CANCELLED THIS WEEKEND</b></font></div>
-->



<div class="navbar-fixed-bottom">
      <?php 
		if(isset($_GET['new']) && $_GET['new']=="new"){
			include_once("yfooter_new.php"); 
		}else{
			include_once("yfooter.php"); 			
		}
			
	  ?>
      
</div>


</div>
		
		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>-->
        <script src="js/jquery-1.8.3.js"></script>
	<script src="js/jquery-ui.min.js"></script>
		<script src="js/jquery.cycle.all.js" type="text/javascript" charset="utf-8"></script>
		<script src="js/jquery.maximage.js" type="text/javascript" charset="utf-8"></script>
		
		<script type="text/javascript" charset="utf-8">
			$(function(){
				
				/*
				var stack = []; 
 
				// preload images into an array; we will preload beach3.jpg - beach8.jpg 
				for (var i = 3; i < 25; i++) { 
					var img = new Image(200,200); 
					img.src = 'lib/slider/' + i + '.jpg'; 
					$(img).bind('load', function() { 
						stack.push(this); 
					}); 
				}
				
				// start slideshow 
				$('#slideshow').cycle({ 
					timeout:  2000, 
					before:   onBefore 
				});
				

				// add images to slideshow 
				function onBefore(curr, next, opts) { 
					if (opts.addSlide) // <-- important! 
						while(stack.length) 
							opts.addSlide(stack.pop());  
				}; 
				
				*/
				
				$('#maximage').maximage({
					cycleOptions: {
						fx: 'fade',
						speed: 1000, // Has to match the speed for CSS transitions in jQuery.maximage.css (lines 30 - 33)
						timeout: 4000,
						/*prev: '#arrow_left',
						next: '#arrow_right',*/
						pause: 0,
						before: function(last,current){
							if(!$.browser.msie){
								// Start HTML5 video when you arrive
								if($(current).find('video').length > 0) $(current).find('video')[0].play();
							}
						},
						after: function(last,current){
							if(!$.browser.msie){
								// Pauses HTML5 video when you leave it
								if($(last).find('video').length > 0) $(last).find('video')[0].pause();
							}
						},
						
						/*timeoutFn: function (curr, next, opts, forwardFlag) {
						  var currIndex=opts.currSlide;
						  if( currIndex==170) { // 169th slide
						  	//alert("OK");
							  return 10000;
						   }else{
						   	  return 4000;
						  }
						}*/
					},
					onFirstImageLoaded: function(){
						jQuery('#cycle-loader').hide();
						jQuery('#maximage').fadeIn('fast');
					}
				});
	
				// Helper function to Fill and Center the HTML5 Video
				jQuery('video,object').maximage('maxcover');
	
				// To show it is dynamic html text
				//jQuery('.in-slide-content').delay(1200).fadeIn();
			});
			
		</script>
		
		<script type="text/javascript">
			
			$('ul.nav li.dropdown').hover(function() {
			  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
			}, function() {
			  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
			});
			
			
			
			$(document).ready(function () {
			  $('[data-toggle=offcanvas]').click(function () {
				$('.row-offcanvas').toggleClass('active');
			  });
			});

		</script>
<script language="javascript" type="text/javascript">
$(document).ready(function () {		
	 $('.navbar-nav li a').click(function() {
			if ($(this).hasClass('dropdown-toggle active')){
				//alert("Active");
				$('.navbar-nav li ul').removeAttr('style');// attr("style","");
				$(this).toggleClass('active');					
				$(this).classList.remove('active');
				/* if(typeof $('.navbar-nav li ul').attr("style")==="undefined"){
					alert("undefined");
				}else{						
					alert("Defined "+$('.navbar-nav li ul').attr("style"));
				}*/
			}else if(!$(this).hasClass('dropdown-toggle active')){
				//alert("Inactive");
				$(this).addClass('active');
				//alert("Inactive1");
				$('.navbar-nav li ul').removeAttr('style');
				//alert("Inactive2");
				if(!$('.navbar-nav li ul').attr("style")){
					$(this).parent().find('ul').attr("style", "display: block; opacity: 1; transition-property: all; transition-duration: 0s; transition-timing-function: ease;");

				}
			}
		});
});	
</script>
<script>
  function aud_play_pause() {
    var myAudio = document.getElementById("player");
    if (myAudio.paused) {
		$("#imgAudio").attr("src","img/audio-on.png");
      myAudio.play();
    } else {
		$("#imgAudio").attr("src","img/audio-off.png");
      myAudio.pause();
   }
 }

</script>
</body>

<?php include_once("phpinclude/analyticstracking.php") ?>
    
<script>

// disabling the contextmenu on images
$(document).ready(function()
{
	$("body").on("contextmenu", "img", function(e) {
	  return false;
	});

	var width_ = 250;
	//var height = 427;
	
	
	if ( parseInt( $(window).width() ) <= 1024) {
		width_ = 220;
	}
	
	if ( parseInt( $(window).width() ) <= 768) {
		width_ = 190;
	}
	
	if ( parseInt( $(window).width() ) <= 425) {
		
		width_ = 140;
	}
	
	
	/*
	$("#jdialog").dialog();
	
	$('#jdialog').dialog({
		autoOpen: false,
		width: width_,
		height:500,
		position:
		{
		   my: "left",
		   at: "left",
		   of: window
		 }
	});
	
	
	$("#jdialog").siblings('div.ui-dialog-titlebar').remove();*/
	
	
	
	
	
	
	//alert("window: " + $(window).width() + ", doc: " +$(document).width());
});

</script>
</html>                            


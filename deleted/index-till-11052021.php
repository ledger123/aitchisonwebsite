<?php
$servuri=$_SERVER['REQUEST_URI'];
if($servuri=="/index.php"){
    $redirecttopage="https://aitchison.edu.pk/";
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: $redirecttopage");
    exit();
}
?>
<!DOCTYPE html>
<?php

header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');
header("X-XSS-Protection: 1");
header("Pragma: no-cache");
header("Cache-Control: no-cache, no-store, must-revalidate, private");
header("strict-transport-security: max-age=0");

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
    <meta name="description" content="Aitchison College, Lahore, is one of the most prestigious educational institutions of its kind in South Asia. It has retained its character over the years, maintaining the public school tradition of providing quality education.">




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
            /*bottom:30px;*/
            bottom:100px;
            height:30px;
            position:absolute;
            right:30px;
            width:36px;
            z-index:1000;
        }
        #arrow_left {
            right:56px;
        }

        #arrow_left:hover, #arrow_right:hover {
            /*bottom:29px;*/
            bottom:100px;
        }
        #arrow_left:active, #arrow_right:active {
            bottom:100px;
        }


        .boys-excel {

            font-family: playball,cursive;
            font-size: 40px;
            font-style: italic;
            font-weight: bold;
            color: #fff;
            top: 40px;
            height: 35px;
            position: absolute;
            right: 10px;
            z-index:1000;

            text-shadow: 1px 1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, -1px -1px 0 #000, 1px 0px 0 #000, 0px 1px 0 #000, -1px 0px 0 #000, 0px -1px 0 #000;
        }

        .boys-excel:active {
            bottom:100px;
        }


        @media only screen and (max-width: 767px){
            #arrow_left, #arrow_right {
                /*bottom:30px;*/
                bottom:150px !important;
                height:30px;
                position:absolute;
                right:0px;
                width:36px;
                z-index:1000;
            }
            #arrow_left {
                right:36px;
            }

            #arrow_left:hover, #arrow_right:hover {
                /*bottom:29px;*/
                bottom:150px !important;
            }
            #arrow_left:active, #arrow_right:active {
                bottom:150px !important;
            }

            .boys-excel {
                font-size: 28px;
                top: 48px;
            }
        }

        @media only screen and (max-width: 375px){
            .boys-excel {
                font-size: 20px;
                top: 48px;
            }
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
                padding-left: 0;
            }
            .list-inline>li {
                padding-right: 3px;
                padding-left: 3px;
            }
            #normalLogo {
                width: 40px;
            }
        }

        @media only screen and (min-width: 992px) {
            .aku_logo{
                margin: auto;
                /*padding-left: 50px;
                padding-left: 35px;*/
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
            padding-left: 0px;
            padding-right: 0px;
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

        @media only screen and (max-width: 875px) and (min-width: 768px) {
            #school-song {display: none;}
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

        .ui-widget-header {
            border: none;
            background: transparent;
        }
        .ui-widget-content {
            background: transparent;
        }

        .ui-dialog.ui-widget-content {
            border:none;
        }

        #jdialog {
            width: 350px;
            background: rgba(7,41,77, 0.6);
        }

        .dialog-head {
            background-color: orange; font-size: 16px; padding: 5px 12px; font-weight: bold;
        }

        .dialog-text {
            color: #0b3b6f; margin-top: 5px;padding: 7px;
        }

        .dialog-text li {
            border-bottom: 1px #90a6bd solid;
        }
        .dialog-text li:last-child { border-bottom: none; }

        .dialog-text h2 {
            margin-top: 5px;
            font-size: 24px;
            color: #fff;
        }

        .dialog-text h4 {
            font-size: 14px; color: #fff;
            line-height: 1.4;
        }
        .dialog-text a{
            text-decoration: none;
        }

        .dialog-text a:hover {
            text-decoration: underline;
            text-decoration-color: #fff;
        }

        .dialog-text::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        .dialog-text::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 10px;
        }

        /* Handle */
        .dialog-text::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }

        /* Handle on hover */
        .dialog-text::-webkit-scrollbar-thumb:hover {
            background: #555;
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
                background: rgba(7,41,77, 0.6);
            }


            .dialog-text a {
                font-size: 11px;
                background: rgba(7,41,77, 0.6);
            }

            .dialog-text h4 {
                font-size: 10px; color: #fff;
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

        @media (max-width: 375px) {

            .social-icons {
                vertical-align: top;
                float: unset;
                right: unset;
                left: 20%;
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


<div id="jdialog" style="" hidden="hidden" title="Important Updates">

    <div class="dialog-text">

        <ul style="list-style: none; padding-left: 3px;">
            <marquee behavior="scroll" direction="down" scrollamount="1" onmouseover="this.stop();" onmouseleave="this.start();">

                <li id="school-song"><a href="ac-college-song.php" target="_blank"><h4>School Song</h4></a></li>

                <li><a href="photo-of-the-week" target="_self"><h4>Photo Of The Week</h4></a></li>

                <li><a href="news-1109-wedding-and-campus-photographsvideos" target="_self"><h4>ACOBA</h4></a></li>

                <li><a href="news-482-reliving-aitchison-how-to-place-an-order" target="_self"><h4>Reliving Aitchison - A Modern Photographic History</h4></a></li>

                <li style="border-bottom: 1px #90a6bd solid;"><a href="procedure-and-requirements" target="_blank"><h4>Aga Khan FA (2021) and Matric (2022)</h4></a></li>

                <li><h4>Senior and Prep Schools,<br/>Half Yearly Exams<br/>Dec 11<sup>th</sup> &ndash; Dec 23<sup>rd</sup></h4></li>

                <li><a href="admissions-info" target="_blank"><h4>Admissions 2022-23</h4></a></li>

                <li><a href="ac-total-cricket-score.php" target="_blank"><h4>Live Scoreboard</h4></a></li>

                <li><a href="alumni/newsletters/OLD-BOYS-BULLETIN-NOVEMBER-2021.pdf" target="_blank"><h4> &lsquo;Old Boys&rsquo; Bulletin November 2021</h4></a></li>


            </marquee>
        </ul>

    </div>

    <?php /*?>

 <a href="newsandevents-live.php?id=823" target="_self"><h2 class="blink_text">K6 to M2 returning to school in cycles from September 22</h2></a>

        <div style="height: 2px; background-color: #ffffff61;">&nbsp;</div>

        <div class="dialog-text">

            <a href="admission-test-timetable-notice-202021.php" target="_self"><h2 class="blink_text">Admissions Testing Schedule</h2><h4>August 2020</h4></a>

        </div>
        <?php */ ?>
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

            <li><a href="corporate-partner"><div>Corporate Partners</div></a></li>
            <li class="highlightMe"><a href="make-a-gift"><div>Support College</div></a></li>

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
                <li><a href="ac-admissions202021.php">Admissions Information</a></li>
                <li><a href="alumni/makeagift.php">Make a Gift</a></li>
                <li><a href="corporate-partner">Corporate Partners</a></li>
                <li><a href="our-schools">Our Schools</a></li>
                <li><a href="academics">Academics</a></li>
                <li><a href="boarding-houses">Boarding</a></li>
                <li><a href="sports">Sports</a></li>
                <li><a href="available-positions">Careers</a></li>
                <li><a href="principal-recent-newsletter">Principal's Newsletter</a></li>
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
                        <li><a href="higher-education-careers">Higher Education and Careers<?php /*?>University and Career Guidance<?php */?></a></li>
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
                        <li><a href="higher-education-careers">Higher Education and Careers<?php /*?>University and Career Guidance<?php */?></a></li>
                        <li><a href="university-placements">University Placements</a></li>
                        <li><a href="aitchison-publications">Publications</a></li>
                        <li><a href="facilities">Facilities</a></li>
                        <li><a href="environment">Environment Clubs</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" role="button" aria-expanded="false"><span>Admissions<span class="caret"></span></span></a>
                    <ul class="dropdown-menu" role="menu">


                        <li><a href="ac-admission-policy">Admissions Policy & Process</a></li>

                        <?php /*<li><a href="ac-procedure-and-requirements-2021-22.php">Admission Procedure & Requirements For 2021-22</a></li>*/?>

                        <li><a href="news-1107-available-seats">Available Seats</a></li>

                        <li><a href="procedure-and-requirements">Admission Procedure & Requirements For 2022-23</a></li>

                        <li><a href="download-application-forms-2022-23">Application Forms</a></li>

                        <li><a href="points-of-entry-into-aitchison">Points of Entry Into Aitchison</a></li>

                        <li><a href="important-dates-admissions">Table of Important Dates 2022-23</a></li>

                        <li><a href="age-guidelines-for-admissions">Age Guidelines for Admissions 2022-23</a></li>

						<li><a href="./school_doc/admission-2022/admission-tests-syllabus2022-23-20210605.pdf" target="_blank">A Guide to Syllabus and Admission Testing</a></li>
						
                        <li><a href="admissions-faqs">FAQs on the Admissions Process</a></li>

                        <li><a href="fee-structure">Fee Structure 2021-22</a></li>

                        <?php /* <li><a href="a-level-applications">Admission To A Level And F.Sc<span style="font-size:12px;"> (Pre-Medical)</span> 2021-22</a></li> */?>

                        <li><a href="international-enrolment">International Boarding</a></li>

                    </ul>
                </li>
                <li><a href="available-positions">Careers</a></li>
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
                <?php /*?><li class="dropdown"><a href="picture-gallery" class="dropdown-toggle" role="button" aria-expanded="false">Gallery<span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="event-gallery">Events</a></li>
					<li><a href="gallery-schools">Around the Schools</a></li>
					<li><a href="gallery-sports">Sports</a></li>
					<li><a href="gallery-architect">Architecture</a></li>
					<li><a href="gallery-ground-and-fields">Grounds &amp; Fields</a></li>
				  </ul>
				</li><?php */?>
                <li><a href="news-and-events"><span>News &amp; Events</span></a></li>
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
                        <li><a href="ac-drama.php">Drama</a></li>
                    </ul>
                </li>


                <li class="dropdown visible-xs"><a href="#" class="dropdown-toggle" role="button" aria-expanded="false">Boarding<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="boarding-houses">Boarding Houses</a></li>
                        <li><a href="benefits-of-boarding">Benefits of Boarding</a></li>
                        <li><a href="boarding-admissions">Boarding Admissions</a></li>
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
                <li class="visible-xs"><a href="principal-recent-newsletter"><span>Principal's Public Letters</span></a></li>

                <li><a href="make-a-gift">Support College</a></li>
                <li><a href="portal/acportal">Login</a></li>

                <?php /*?><a href="#" class="dropdown-toggle" role="button" aria-expanded="false">Login<span class="caret"></span></a><?php */?>

                <?php if(false) {?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" role="button" aria-expanded="false">Login<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="portal/login.php?p=p">Parents' Portal</a></li>

                        </ul>
                    </li>
                <?php }?>
                <li><a href="contact-info">Contacts</a></li>
                <?php /* ?>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" role="button" aria-expanded="false">More<span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<li><a href="corporate-partner">Corporate Partners</a></li>
					<li><a href="make-a-gift">Make a Gift</a></li>
				  </ul>
				</li>
				  <?php */ ?>
            </ul>
        </div>

    </div>

    <div class="social-icons">
        <ul class="list-inline">
            <?php /* <li id="school-song" class="list-inline-item"><a href="ac-college-song.php" style="color:orange;" target="_blank" class="active">School Song</a></li> */?>
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





    <?php /*?><a href="http://www.aaronvanderzwan.com/blog/2011/11/maximage-2-0-beta1-release/" id="logo"><img src="lib/images/demo/logo.png" alt="MaxImage: Uses jQuery Cycle Plugin to create background slideshows" /></a>
<?php */?>
    <div class="boys-excel" style="width: auto;"><span style="margin: 5px;">Where Boys Excel</span></div>

    <a href="" id="arrow_left"><img src="img/slider/slider_arrow/arrow_left.png" alt="Slide Left" style="height: 100%; width: auto;" /></a>
    <a href="" id="arrow_right"><img src="img/slider/slider_arrow/arrow_right.png"  style="height: 100%; width: auto;" alt="Slide Right" /></a>

    <img id="cycle-loader" src="img/slider/slider_arrow/ajax-loader.gif" />

    <div id="maximage">

        <img src="img/slider/01082018/1.jpg" alt="" />
        <img src="img/slider/01082018/map2-20201031.jpg" alt="" />
        <?php /*?><img src="img/slider/01082018/2.jpg" alt="" /><?php */?>
        <img src="img/slider/01082018/3.jpg" alt="" />
        <!--<img src="img/slider/01082018/4.jpg" alt="" />-->
        <img src="img/slider/01082018/5.jpg" alt="" />
        <img src="img/slider/01082018/6.jpg" alt="" />
        <img src="img/slider/banner04102019/cricket/score-board-20200930.jpg" alt="" />
        <img src="img/slider/01082018/7b.jpg" alt="" />
        <img src="img/slider/01082018/jr-cricket-pavilion.jpg" alt="" />
        <img src="img/slider/01082018/8.jpg" alt="" />
        <!--<img src="img/slider/01082018/9.jpg" alt="" />-->
        <img src="img/slider/01082018/10.jpg" alt="" />
        <img src="img/slider/01082018/11.jpg" alt="" />
        <!--<img src="img/slider/01082018/12.jpg" alt="" />
        <img src="img/slider/01082018/13.jpg" alt="" />-->
        <img src="img/slider/01082018/14.jpg" alt="" />
        <?php /*?><img src="img/slider/01082018/15.jpg" alt="" /><?php */?>
        <!--<img src="img/slider/01082018/16.jpg" alt="" />-->
        <img src="img/slider/01082018/15-24092019-V5.jpg" alt="" />
        <img src="img/slider/banner04102019/cricket/01-V2.jpg" alt="" />
        <img src="img/slider/banner04102019/cricket/03-V2.jpg" alt="" />

        <?php /*<img src="img/slider/banner04102019/cricket/5.jpg" alt="" />*/?>
        <img src="img/slider/banner04102019/cricket/06-V1.jpg" alt="" />

        <!--<img src="img/slider/01082018/17.jpg" alt="" />-->


        <img src="img/slider/banner04102019/squash/5-20200922.jpg" alt="" />

        <img src="img/slider/banner04102019/hockey/20210120-3.jpg" alt="" />
        <img src="img/slider/banner04102019/hockey/20210120-4.jpg" alt="" />


        <!--<img src="img/slider/01082018/18.jpg" alt="" />-->
        <img src="img/slider/banner04102019/football/01-V1.jpg" alt="" />
        <img src="img/slider/banner04102019/football/11102019-1.jpg" alt="" />
        <!--<img src="img/slider/01082018/19.jpg" alt="" />-->
        <?php /*?><img src="img/slider/01082018/20.jpg" alt="" /><?php */?>
        <!--<img src="img/slider/01082018/cricket-score-board2.jpg" alt="" />-->
        <img src="img/slider/banner04102019/basketball/1110209-1.jpg" alt="" />
        <img src="img/slider/banner04102019/basketball/1110209-2.jpg" alt="" />
        <img src="img/slider/01082018/mcg.jpg" alt="" />
        <img src="img/slider/01082018/21.jpg" alt="" />

        <!--<img src="img/slider/01082018/22.jpg" alt="" />
        <img src="img/slider/01082018/23.jpg" alt="" />
        <img src="img/slider/01082018/24.jpg" alt="" />-->
        <img src="img/slider/banner04102019/swimming/4.jpg" alt="" />
        <img src="img/slider/banner04102019/swimming/5.jpg" alt="" />
        <img src="img/slider/banner04102019/swimming/6.jpg" alt="" />
        <img src="img/slider/banner04102019/swimming/7.jpg" alt="" />
        <img src="img/slider/banner04102019/athletics/11102019-1.jpg" alt="" />
        <img src="img/slider/01082018/25.jpg" alt="" />

        <img src="img/slider/banner04102019/drama/11102019-1.jpg" alt="" />
        <img src="img/slider/banner04102019/drama/11102019-2.jpg" alt="" />
        <img src="img/slider/banner04102019/drama/11102019-3.jpg" alt="" />

        <img src="img/slider/banner04102019/debate/11102019-1.jpg" alt="" />
        <img src="img/slider/banner04102019/debate/11102019-2.jpg" alt="" />



        <!--<img src="img/slider/01082018/26.jpg" alt="" />-->
        <img src="img/slider/01082018/27.jpg" alt="" />
        <img src="img/slider/01082018/28.jpg" alt="" />

        <!--<img src="img/slider/01082018/0.jpg" alt="" />-->
        <?php /* ?>
        <div class="video">
            <img src="img/slider/01082018/0.jpg" alt="" />
            <!--<div class="in-slide-content light-text smaller-text">
                <p></p>
                <p></p>
            </div>-->
            <!-- "Video For Everybody" http://camendesign.com/code/video_for_everybody -->
            <!--<video controls muted poster="lib/slider/gradient.png" width="640" height="360">-->
            <video muted width="640" height="360">
                <source src="img/slider/01082018/ac-video4.mp4" type="video/mp4" />
                <source src="img/slider/01082018/ac-video4.webm" type="video/webm" />
                <source src="img/slider/01082018/ac-video4.ogv" type="video/ogg" />
                Your browser does not support HTML5 videos.
            </video>
        </div>

        <?php */ ?>

        <!--<img src="img/slider/01082018/2.jpg" data-href="http://www.google.com/" />-->
        <!--<img id="gradient" src="lib/images/demo/gradient.png" alt="" />-->



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
        if(isset($_GET['new'])) {
            if($_GET['new']=="1") include_once("yfooter-design1.php");
            if($_GET['new']=="2") include_once("yfooter-design2.php");
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

    $(document).keydown(function (e) {

        if (e.which >= 37 && e.which <= 40) {
            $('p.key-notification').fadeOut('slow');
        }

        var keyCode = e.keyCode || e.which,
            arrow = {left: 37, up: 38, right: 39, down: 40 };

        switch (keyCode) {

            case arrow.left:
                $('#arrow_left').click();
                break;

            case arrow.right:
                $('#arrow_right').click();
                break;
        }

    });

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
                prev: '#arrow_left',
                next: '#arrow_right',
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

                timeoutFn: function (curr, next, opts, forwardFlag) {
                    var currIndex=opts.currSlide;
                    if( currIndex==170) { // 169th slide
                        //alert("OK");
                        return 10000;
                    }else{
                        return 4000;
                    }
                }
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
        $('a[href="#"]').click(function(e) {
            e.preventDefault ? e.preventDefault() : e.returnValue = false;
        });
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

        var width_ = 225;
        //var height = 427;


        if ( parseInt( $(window).width() ) <= 1024) {
            width_ = 225;
        }

        if ( parseInt( $(window).width() ) <= 768) {
            width_ = 210;
        }

        if ( parseInt( $(window).width() ) <= 425) {

            width_ = 160;
        }



        $("#jdialog").dialog();

        $('#jdialog').dialog({
            autoOpen: false,
            resizable: false,
            width: width_,
            //height:190,
            position:
                {
                    my: "left",
                    at: "left",
                    of: window
                }
        });

        //hide the title bar
        $("#jdialog").siblings('div.ui-dialog-titlebar').remove();



        //alert("window: " + $(window).width() + ", doc: " +$(document).width());
    });

</script>
</html>


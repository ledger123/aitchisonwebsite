<!DOCTYPE html>
<html>

<?php
$path = '';
$title = "Home"; include_once ("header-includes.php");?>

<?php

include_once ("resources/php/Mobile_Detect.php");

$server = 'https://new.aitchison.edu.pk/';

$videoUrl = $server.'data/videos/';

$mobile = new Mobile_Detect();

$video = $videoUrl.'aitchison.mp4';
$poster = $videoUrl.'poster.jpg';


if($mobile->isMobile()) {

    $video = $videoUrl.'mobile/aitchison.mp4';
    $poster = $videoUrl.'mobile/poster.jpg';
}

?>
<style>
    .button-link { margin-top: 15px; }

    .nav-social a {
        height: 40px;
        width: 40px;
    }

    .nav-social a::before {
        font-size: 1.9rem;
    }

    .toaster {
        display: block;
        position: fixed;
        right: 100px;
        top: 218px;
        z-index: 999;
        text-align: center;
        cursor: pointer;
        background-color: #00195291;

    }
	

    .toaster a h5 {
        color: #fff;
        padding: 0.2rem;
        margin: 0;
        font-size: .9rem;
        font-weight: 300;

    }

    .toaster a:hover h5 {
        color: #ffc845;
    }


	.toaster.ibsc {
		
		top: 129px;
        background-color: transparent;
        cursor: default;
        right: 100px;
	}

	.toaster.ibsc a img {
		width: 92px;
	}

    .toaster.g30-schools a img {
		width: 58px;
	}

    .toaster.g30-schools {
		
		top: 170px;
        background-color: transparent;
        cursor: default;
        right: 100px;
	}

    .toaster.toaster-1 {
        width: 180px;
    }

    .toaster.toaster-2 {
        width: 180px;
        top: 265px;
    }

    .toaster.toaster-3 {
        width: 180px;
        top: 312px;
    }
		
    .slogan {
        color: #fff;
        top: 0;
        padding: 0.2rem;
        position: absolute;
        z-index: 100;
        font-size: 1rem;
        line-height: 1.4;
        text-align: center;
        width: 100%;
        text-transform: uppercase;
        background-color: #00205b;
    }

    .where-boys {
        font-size: 55px;
        padding-right: 3rem;
        line-height: 1;
        bottom: 45px;
        font-weight: 200;
    }

    .ibsc-member{
        width: auto;
    }

    .logo-left {
        width: 300px;
        height: 120px;
        background-size: 300px auto;
    }

    .owl-carousel .active span {	
        border: 3px solid #ffc845;
    }

    @media (max-width: 2560px) {
        #wstoggle {
            top: 80px;
        }
        .logo-left {
            top: 112px;
        }
    }

    @media (max-width: 1919px) {
        .logo-left {
            top: 106px;
        }

        #wstoggle {
            top: 74px;
        }
    }

    @media (max-width: 1599px){
        .toaster,
        .toaster.ibsc,
        .toaster.g30-schools {
            right: 5.6rem;
        }

    }
    @media (max-width: 1024px){
        
        .toaster a h5 {
            font-size: .8rem;
        }
        .ibsc-member{
            width: 12%;
        }
        .toaster.toaster-1 {
            width: 160px;
        }
        .toaster.toaster-2 {
            width: 160px;
            top: 260px;
        }
        .toaster.toaster-3 {
            width: 160px;
            top: 302px;
        }
    }

    @media (max-width: 768px){
        .logo-left {
            top: 39px;
            height: 120px;
            background-size: 220px auto;
        }

        .toaster,
        .toaster.g30-schools {
            right: 40px;
        }

        .toaster a h5 {
            font-size: .7rem;
        }

        .logos div {
            margin-left: 0.5rem;
            margin-right: 0.5rem;
        }

        
        
        .toaster.ibsc {
		
            right: 40px;
        }
        .toaster.toaster-1 {
            width: 140px;
        }
        .toaster.toaster-2 {
            top: 255px;
            width: 140px;
        }
        .toaster.toaster-3 {
            top: 292px;
            width: 140px;
        }
        
    }

    @media (max-width: 576px) {
        .logo-left {
            width: 65px;
            background-size: 180px auto;
        }
    }

    @media (max-width: 425px) {
        .slogan {
            font-size: .59rem;
        }

        .toaster a h5 {
            font-size: .7rem;

        }

        .logo-left {
            top: 15px;
        }

        #wstoggle {
            top: 50px;
        }

        .toaster.ibsc {
            top: 95px;
        }

        .toaster {
            top: 157px;
        }

        .toaster.g30-schools {
            top: 124px;
        }

        .toaster.g30-schools a img {
            width: 40px;
        }

        #sect-newsalert {
            bottom: 41px;
        }

        .logos div {
            margin-left: 1rem;
            margin-right: 1rem;
        }


        .ibsc-member{
            width: 45%;
        }

        .toaster.ibsc {
            
            /* top: 175px; */
        }

        .toaster.ibsc a img {
            width: 60px;
        }
        .toaster.toaster-2 {
            top: 195px;
        }
        .toaster.toaster-3 {
            top: 233px;
        }
    }

    .swiper-slide a {
        line-height: 1.4;
    }

    @media (max-width: 2560px) {
        .swiper-slide a {
            line-height: 3.4;
        }
        #sect-newsalert {
            bottom: 70px;
        }
    }

    @media (max-width: 1919px) {
        #sect-newsalert {
            bottom: 60px;
        }
        .news-alert {
            height: 60px;
        }
        .news-alert div>h5 {
            margin-top: auto;
            line-height: 3.7rem;
        }

        .swiper-slide a {
            margin-top: auto;
            line-height: 1.4;
        }
    }

    @media (max-width: 1599px) {
        .swiper-slide a {
            line-height: 1.4;
            margin-bottom: auto;
        }
        #sect-newsalert {
            bottom: 60px;
        }
    }

    @media (max-width: 1365px) {
        .news-alert {
            height: 60px;
        }
    }


    @media (max-width: 425px) {
        .swiper-slide a {
            margin-top: auto;
            margin-bottom: auto;
        }
    }



    .logos div {
        vertical-align: middle;
    }

    .logos .cambridge{width:11%;}
    .logos .aga-khan{width:12%;}
    .logos .g20{width:6%;}
    .logos .ibsc-member{width:11%;}
    .logos .cambridge-international{width:7%;}
    .logos .cambridge-igcse{width:7%;vertical-align:middle}
    .logos .aga-khan2{width:10%;vertical-align:middle}
    .logos .fedral-board{width:13%;}
    .logos .spears-schools{width: 9%;}
    

    @media (max-width: 1024px) {
        .logos .cambridge{width:13%;}
        .logos .aga-khan{width:11%;}
        .logos .g20{width:6%;}
        .logos .ibsc-member{width:9%;}
        .logos .cambridge-international{width:7%;}
        .logos .cambridge-igcse{width:7%;vertical-align:middle}
        .logos .aga-khan2{width:9%;vertical-align:middle}
        .logos .fedral-board{width:20%;}
        .logos .spears-schools{width: 10%;}
    }


    @media (max-width: 425px) {
        .logos .cambridge{width:20%;}
        .logos .aga-khan{width:20%;}
        .logos .g20{width:9%;}
        .logos .ibsc-member{width:15%;}
        .logos .cambridge-international{width:12%;}
        .logos .cambridge-igcse{width:13%;vertical-align:middle}
        .logos .aga-khan2{width:16%;vertical-align:middle}
        .logos .fedrar-board{width:25%;}
        .logos .spears-schools{width: 13%;}
    }

    .news-carousel > .owl-carousel .active span {	
    border: 3px solid #001952; 
    }

</style>


<body>

<a href="#" id="backtotop" class="backtotop" style="display: none;"><span></span></a>

<nav class="navbar navbar-expand-lg navbar-light bg-transparent nav-home">
	<a class="logo-left" href="/">
    <div>

    </div>
	</a>
    <?php /*?><div class="years-135">
        <img src="resources/assets/images/where.png" style="color: #fff;"/>
    </div><?php */?>

</nav>

<?php include_once ("mega-menu.php");?>

<div class="toaster ibsc">
    <a href="news-1942-the-international-boys-schools-coalition" target="_blank">
        <img src="resources/assets/images/logos/ibsc-member-2.jpeg"/>
    </a>
</div>

<div class="toaster g30-schools">
    <a target="_blank">
        <img src="resources/assets/images/logos/g-30-schools.png"/>
    </a>
</div>

<?php if(true) { ?>
    <div class="toaster toaster-1">
        <a href="admission/points-of-entry-into-aitchison" target="_blank"><h5>Admissions Information<br/>2024-25</h5></a>
    </div>
    <div class="toaster toaster-2">
        <a href="admission/a-level-fsc-application-forms" target="_blank"><h5>A Level/FSc Application<br/>Forms</h5></a>
    </div>
    

<!---->
<!--    <div class="toaster toaster-3">-->
<!--        <a href="newsandevents-testlink.php?id=2311" target="_blank"><h5>Become a Dayboy in<br/>2024-25</h5></a>-->
<!--    </div>-->
<?php } ?>

<div id="backgroundVideo">
    <video autoplay="autoplay"
           loop="loop" muted="muted" playsinline="playsinline"
           poster="<?php echo $poster; ?>"
           data-object-fit="cover" style="transform: translate3d(0px, 0px, 0px);">
        <source src="<?php echo $video; ?>" type="video/mp4">

        <div class="fsError">Your web browser does not support the &lt;video&gt; tag.</div>
    </video>

</div>

<div class="scroll-down" style=""><h4 id="goDown"></h4></div>

<!-- <div class="slogan">
    Perseverance Commands Success
</div> -->

<div class="where-boys d-none">

</div>

<!-- News Alerts -->
<?php include_once ('news-alerts.php'); ?>

<div class="container-fluid" style="margin-top: -60px;">



    <!-- News Highlights -->

    <div class="row">
        <div id="featured-news" class="news-highlights">

            <div class="row ms-3 text-center">
                <h6 class="header-top">HEAR STORIES FROM AITCHISON</h6>
                <div class="" style="padding-left: 6px;">

                    <h2 class="header">News Highlights
                        <hr/>
                    </h2>
                </div>

                <div class="text-center mb-3">
                    <a href="news-room" target="_parent" class="button-link me-lg-4">Visit News Section</a>
                </div>
            </div>
            <div class="news-carousel owl-carousel owl-theme">

                <div class="item">
                    <div class="news-box">
                        <a href="activity-glimpses" target="_blank">
                            <div class="news-image">
                                <img src="newsletter/news/images/12-2040348143.jpg" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" id="weekattheglancedate" style="margin: 5px 0;">
                                    <?php /*?>9<sup>th</sup> October to 11<sup>th</sup> October, 2023<?php */?>
                                    <?php include_once("dates-weeklyactivityglimpses.php");?>
                                </div>
                                <h3 class="news-heading">
                                    Sports &amp; Co-Curricular Activities<br>This week at a Glance
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="news-box">
                        <a href="news-2547-founders-day-2024" target="_blank">
                            <div class="news-image">
                                <img src="newsletter/news/images/37-4984732171.jpg" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="margin: 5px 0;">
                                    11<sup>th</sup> March, 2024
                                </div>
                                <h3 class="news-heading">
                                    Founders' Day 2024
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="news-box">
                        <a href="news-2545-academics-day-2024" target="_blank">
                            <div class="news-image">
                                <img src="newsletter/news/images/49-7641419981.jpg" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="margin: 5px 0;">
                                    11<sup>th</sup> March, 2024
                                </div>
                                <h3 class="news-heading">
                                    Academics Day 2024
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="news-box">
                        <a href="news-2546-rivaz-medal-winner-2024-abdullah-gilani-kelly-house" target="_blank">
                            <div class="news-image">
                                <img src="newsletter/news/images/rivaz-medal-winner-sm-2546-4555123523.jpg" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="margin: 5px 0;">
                                    11<sup>th</sup> March, 2024
                                </div>
                                <h3 class="news-heading">
                                    RIVAZ MEDAL WINNER 2024, ABDULLAH GILANI -KELLY HOUSE
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="news-box">
                        <a href="news-2540-old-boys-art-exhbition" target="_blank">
                            <div class="news-image">
                                <img src="newsletter/news/images/17-7728884386.webp" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="margin: 5px 0;">
                                    8<sup>th</sup> March, 2024
                                </div>
                                <h3 class="news-heading">
                                    OLD BOYS' ART EXHBITION
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="news-box">
                        <a href="news-2541-junior-sports-day-2024" target="_blank">
                            <div class="news-image">
                                <img src="newsletter/news/images/67-8684415463.jpg" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="margin: 5px 0;">
                                    8<sup>th</sup> March, 2024
                                </div>
                                <h3 class="news-heading">
                                    Junior Sports Day 2024
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="news-box">
                        <a href="news-2542-prep-and-senior-sports-day" target="_blank">
                            <div class="news-image">
                                <img src="newsletter/news/images/53-3783353194.jpg" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="margin: 5px 0;">
                                    8<sup>th</sup> March, 2024
                                </div>
                                <h3 class="news-heading">
                                    PREP AND SENIOR SPORTS DAY
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="news-box">
                        <a href="news-2528-junior-school-makers-fair-skills-expo-showcasing-talent-skills-great-learning-and-loads-of-fun" target="_blank">
                            <div class="news-image">
                                <img src="newsletter/news/images/54-7812994032.webp" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="margin: 5px 0;">
                                    2<sup>nd</sup> March, 2024
                                </div>
                                <h3 class="news-heading">
                                    Junior School Makers' Fair & Skills Expo (Showcasing Talent & Skills) Great Learning and Loads of Fun
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="news-box">
                        <a href="news-2521-ss-inter-school-quiz-competition-2024" target="_blank">
                            <div class="news-image">
                                <img src="newsletter/news/images/12-1815167167.jpg" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="margin: 5px 0;">
                                    27<sup>th</sup> February, 2024
                                </div>
                                <h3 class="news-heading">
                                    SS Inter School Quiz Competition - 2024
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="news-box">
                        <a href="news-2519-brilliant-english-play-wins-audience" target="_blank">
                            <div class="news-image">
                                <img src="newsletter/news/images/15-8498861894.jpg" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="margin: 5px 0;">
                                    24<sup>th</sup> February, 2024
                                </div>
                                <h3 class="news-heading">
                                    BRILLIANT ENGLISH PLAY WINS AUDIENCE
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="news-box">
                        <a href="news-2517-aitchison-college-rifle-shooting-championship-feb-2024" target="_blank">
                            <div class="news-image">
                                <img src="newsletter/news/images/12-9239153897.jpg" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="margin: 5px 0;">
                                    23<sup>rd</sup> February, 2024
                                </div>
                                <h3 class="news-heading">
                                    Aitchison College Rifle Shooting Championship - Feb 2024
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="news-box">
                        <a href="news-2513-aitchison-shines-in-ceremony-and-celebration" target="_blank">
                            <div class="news-image">
                                <img src="newsletter/news/images/2-8664090547.jpg" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="margin: 5px 0;">
                                    22<sup>nd</sup> February, 2024
                                </div>
                                <h3 class="news-heading">
                                    AITCHISON SHINES IN CEREMONY AND CELEBRATION
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="news-box">
                        <a href="news-2472-acmun-closing-ceremony-2024" target="_blank">
                            <div class="news-image">
                                <img src="newsletter/news/images/4-3445555160.jpg" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="margin: 5px 0;">
                                    10<sup>th</sup> February, 2024
                                </div>
                                <h3 class="news-heading">
                                    ACMUN CLOSING CEREMONY 2024
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="news-box">
                        <a href="news-2470-aitchison-wins-third-jafar-trophy-in-four-years" target="_blank">
                            <div class="news-image">
                                <img src="newsletter/news/images/2470-20240210-5159845285.jpg" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="margin: 5px 0;">
                                    7<sup>th</sup> February, 2024
                                </div>
                                <h3 class="news-heading">
                                    AITCHISON WINS THIRD JAFAR TROPHY IN FOUR YEARS
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="news-box">
                        <a href="news-2466-aitchison-beats-chenab-college-jhang-to-win-interschool-basketball-championship" target="_blank">
                            <div class="news-image">
                                <img src="newsletter/news/images/31-9986138208.jpg" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="margin: 5px 0;">
                                    2<sup>nd</sup> February, 2024
                                </div>
                                <h3 class="news-heading">
                                    AITCHISON BEATS CHENAB COLLEGE JHANG TO WIN INTERSCHOOL BASKETBALL CHAMPIONSHIP
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="news-box">
                        <a href="news-2465-aitchison-college-science-society-lifts-karachi-grammar-stem-olympiads-best-institute-best-delegation-award" target="_blank">
                            <div class="news-image">
                                <img src="newsletter/news/images/6-9269583399.jpg" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="margin: 5px 0;">
                                    1<sup>st</sup> February, 2024
                                </div>
                                <h3 class="news-heading">
                                    Aitchison College Science Society lifts Karachi Grammar STEM Olympiad's Best Institute/ Best Delegation Award
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="news-box">
                        <a href="news-2460-our-tent-peggers-enthrall-an-appreciative-crowd" target="_blank">
                            <div class="news-image">
                                <img src="newsletter/news/images/14-7324620307.jpg" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="margin: 5px 0;">
                                    29<sup>th</sup> January, 2024
                                </div>
                                <h3 class="news-heading">
                                    OUR TENT-PEGGERS ENTHRALL AN APPRECIATIVE CROWD
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="news-box">
                        <a href="aitchison-senior-mathematics-society-delegation-bags-medals-at-seamo-x-2024" target="_blank">

                            <div class="news-image">
                                <img src="newsletter/news/images/mathematics-society-seamo-5-8187279125.jpg" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="margin: 5px 0;">
                                    24<sup>th</sup> January, 2024
                                </div>
                                <h3 class="news-heading">
                                    Aitchison Senior Mathematics Society Delegation bags medals at SEAMO X
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="news-box">
                        <a href="news-2453-prep-play-cinderfella-entertains-appreciative-audience" target="_blank">
                            <div class="news-image">
                                <img src="newsletter/news/images/43-3772384067.jpg" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="margin: 5px 0;">
                                    24<sup>th</sup> January, 2024
                                </div>
                                <h3 class="news-heading">
                                    Prep Play 'Cinderfella' Entertains Appreciative Audience
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>

                <div class="item">
                    <div class="news-box">
                        <a href="news-2439-aitchison-dominates-cambridge-outstanding-learners" target="_blank">
                            <div class="news-image">
                                <img src="newsletter/news/images/cambridge-outstanding-learners-2439-3-453958629.jpg" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="margin: 5px 0;">
                                    23<sup>rd</sup> January, 2024
                                </div>
                                <h3 class="news-heading">
                                    AITCHISON DOMINATES CAMBRIDGE OUTSTANDING LEARNERS
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>


            </div>
            <div class="divider-small"></div>

        </div>
    </div>

    <!-- End News Highlights -->


    <!-- Discover Us -->
    <div id="sect-discover-us" class="row">
        <?php /*?><div class="col-12 text-center">
            <h2 class="header">Discover Us</h2>

        </div>
        <div class="divider"></div><?php */?>

        <div class="discover-us">
            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-xs-12 p-5 p-md-2 px-sm-2" style="background-color: #002273; opacity: 0.9; background-blend-mode: color-dodge; height: 100%;">
                <h6 class="discover-us-h6" style="text-align: center;">Discover us</h6>
                <div id="discover-us" class="owl-carousel owl-theme h-90 pb-3">
                    <div class="item">
                        <h1>8</h1>
                        <p>Boarding Houses</p>
                    </div>
                    <div class="item">
                        <h1>9</h1>
                        <p>Cricket Grounds</p>
                    </div>
                    <div class="item">
                        <h1>3</h1>
                        <p>Cricket Pavilions</p>
                    </div>
                    <div class="item">
                        <h1>2</h1>
                        <p>Hockey Field<div style="font-size: 1.5rem; color: #fff;">Synthetic and Pavilion</div></p>
                    </div>
                    <div class="item">
                        <h1>4</h1>
                        <p>Football Fields</p>
                    </div>
                    <div class="item">
                        <h1>3</h1>
                        <p>Riding Fields<div style="font-size: 1.2rem; color: #fff;">Tent Pegging, Show Jumping & Arena Polo</div></p>
                    </div>
                    <div class="item">
                        <h1>3</h1>
                        <p>Swimming Pools</p>
                    </div>
                    <div class="item">
                        <h1>1</h1>
                        <p>Diving Centre</p>
                    </div>
                    <div class="item">
                        <h1>4</h1>
                        <p>Basketball Courts</p>
                    </div>
                    <div class="item">
                        <h1>18</h1>
                        <p>Tennis Courts</p>
                    </div>
                    <div class="item">
                        <h1>5</h1>
                        <p>Squash Courts</p>
                    </div>
                    <div class="item">
                        <h1>1</h1>
                        <p>Rugby Field</p>
                    </div>
                    <div class="item">
                        <h1>1</h1>
                        <p>Shooting Range</p>
                    </div>
                    <div class="item">
                        <h1>3</h1>
                        <p>Athletics  Grounds</p>
                    </div>
                </div>



            </div>

            <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-xs-12 mb-md-5">

            </div>

        </div>
    </div>
    <!-- End Discover Us -->



    <div class="divider"></div>

    <!-- Announcements -->
    <div class="row" id="sect-announcements">
        <div class="col-12 text-center">
            <h2 class="header">Announcements
                <hr>
            </h2>
        </div>
        <div class="divider"></div>


        <div class="col-12">
            <div id="announcements" class="owl-carousel owl-theme">

                <?php /*?>

                <div class="item">

                    <a href="sports/cricket-live-scoreboard" target="_blank">
                        <div class="img-item">
                            <img src="resources/assets/images/announcements/score-board.jpg">
                        </div>

                        <div class="text-center footer">
                            <div class="footer-text">
                                <h4 class="p-2">Live Cricket Score</h4>
                                <p></p>
                            </div>

                        </div>

                    </a>
                </div>



                <div class="item">

                    <a href="news-1564-admissions-to-aitchison-college-2023-24" target="_blank">
                        <div class="img-item">
                            <img src="resources/assets/images/announcements/admissions.jpg">
                        </div>

                        <div class="text-center footer">
                            <div class="footer-text">
                            <h4 class="p-2">Boarding and Day Applications 2023-24</h4>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </a>
                </div><?php */?>

                <div class="item">

                    <a href="admission/points-of-entry-into-aitchison" target="_blank">
                        <div class="img-item">
                            <img src="resources/assets/images/announcements/admissions.jpg">
                        </div>

                        <div class="text-center footer">
                            <div class="footer-text">
                                <h4 class="p-2">Admissions Information<br/>2024-25</h4>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </a>
                </div>

                <?php /*?><div class="item">

                    <a href="photo-of-the-week" target="_blank">
                        <div class="img-item">
                            <img src="resources/assets/images/announcements/photo-of-week-20220415.jpg">

                        </div>

                        <div class="text-center footer">
                            <div class="footer-text">
                                <h4 class="p-2">Photo Of The Week</h4>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </a>
                </div><?php */?>


                <?php /*?><div class="item">

                    <a href="news-1423-136th-founders-day-2022" target="_blank">
                        <div class="img-item">
                            <img src="resources/assets/images/announcements/the-aitchisonian-2020-21.jpg">

                        </div>

                        <div class="text-center footer">
                            <div class="footer-text">
                                <h4 class="p-2">136<sup style="text-transform:lowercase;">th</sup> Founders' Day 2022</h4>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </a>
                </div><?php */?>


                <div class="item">

                    <a href="news-482-reliving-aitchison-how-to-place-an-order" target="_blank">
                        <div class="img-item">
                            <img src="resources/assets/images/announcements/reliving-aitchison.jpg">

                        </div>

                        <div class="text-center footer">
                            <div class="footer-text">
                                <h4 class="p-2">Reliving Aitchison</h4>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="item">

                    <a href="photo-of-the-week" target="_blank">

                        <div class="img-item">
                            <img src="resources/assets/images/announcements/photo-of-week-20240120.jpg">
                        </div>

                        <div class="text-center footer">
                            <div class="footer-text">
                                <h4 class="p-2">Photo Of The Week</h4>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php /*?><div class="item">

                    <a href="news-1109-wedding-and-campus-photographsvideos" target="_blank">
                        <div class="img-item">
                            <img src="resources/assets/images/announcements/acoba.jpg">
                        </div>

                        <div class="text-center footer">
                            <div class="footer-text">
                                <h4 class="p-2">ACOBA</h4>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </a>
                </div><?php */?>

                <div class="item">

                    <a href="school-song" target="_blank">
                        <div class="img-item" style='background-image: url("resources/assets/images/announcements/school-song.jpg");'>
                            <img src="resources/assets/images/announcements/school-song.jpg">

                        </div>
                        <div class="text-center footer">
                            <div class="footer-text">
                                <h4 class="p-2">School Song</h4>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>
        <div class="col-12 text-center" style="">
            <div class="divider"></div>
            <span class="owl-prev announcements-previous-button back-arrow"><img src="resources/assets/images/arrow-left.png" alt="back-arrow"/></span>
            <span class="owl-next announcements-next-button next-arrow"><img src="resources/assets/images/arrow.png" alt="next-arrow"/></span>
        </div>



    </div>


    <!-- our schools -->
    <div id="sect-our-schools" class="row our-school">

        <div class="divider"></div>

        <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 our-school-bg">

        </div>
        <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 our-school-content">
            <h6 class="header-top">OUR SCHOOLS</h6>
            <h2 class="header">Welcome to the<br>start of<br>your journey<hr style="margin-left: 0;"></h2>
            <div>
                <?php /* <p style="text-align: left; margin-bottom: 0;">When Aitchison was founded in 1886, its emphasis was on educating the 'princely elites.' Since Independence this has given way to an egalitarian mix of pupils drawn from all parts of the country. Cambridge curriculum is taught in junior and prep schools, with the additional option of Aga Khan Matric and FSc in senior. Aitchison College offers a broad and challenging educational program for boarding and day students, based on the added benefits of engagement in sports, clubs and societies.</p> */?>
                <p style="text-align: left; margin-bottom: 0;">When Aitchison was founded in 1886, its emphasis was on educating the 'princely elites.' Since Independence this has given way to an egalitarian mix of pupils drawn from all parts of the country. Cambridge curriculum is taught in junior and prep schools, with the additional options of FBISE Matric and FSc in senior. Aitchison College offers a broad and challenging educational program for boarding and day students, based on the added benefits of engagement in sports, clubs and societies.</p>

            </div>

            <div class="school">
                <a href="schools/junior-school" class="button-link small">Junior School</a>
                <a href="schools/prep-school" class="button-link small">Prep School</a>
                <a href="schools/senior-school" class="button-link small">Senior School</a>
            </div>

        </div>

    </div>

    <div class="divider"></div>


    <!-- Aitchison College -->
    <div class="divider"></div>
    <div class="row" style="overflow: hidden;">
        <div class="home" style="">
            <div class="row">

                <div class="col-xl-6 col-lg-5 col-md-5 col-sm-12 col-xs-12 home-left-container">
                    <div class="row home-left">

                        <div>
                            <img src="resources/assets/images/home/hourse.png" class="img-fluid"/>
                            <h1>Perseverance<br>Commands<br>Success</h1>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-7 col-md-7 col-sm-12 col-xs-12 p-5 text-center" style="/*background-color: rgb(1 131 53 / 40%); height: 100%;*/">

                    <div class="row home-items">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 border-end border-bottom"><a href="admission/admissions-info"><div>Admissions</div></a></div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 border-bottom"><a href="principal-letters"><div>Principal's Letters</div></a></div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 border-end border-bottom"><a href="news-room"><div>News & Events</div></a></div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 border-bottom"><a href="https://aitchison.edu.pk/alumni/"><div>Alumni</div></a></div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 border-end"><a href="careers"><div>Careers</div></a></div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12"><a href="support/support-college"><div>Support the College</div></a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End College -->

    <div class="divider"></div>

    <!-- Boarding Houses -->
    <div id="sect-boarding" class="row">

        <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12 boarding-content">
            <h6 class="header-top">BOARDING</h6>
            <h2 class="header">Boarding adds value to the quality of education<hr style="margin-left: 0;"></h2>

            <div>
                <p class="text-start">There are 8 boarding houses at Aitchison that have excellent facilities including their own dining halls, prep rooms and common rooms. Each house displays its history in photographs and trophies, marking the achievements of boys throughout our history. A boarder's life graduates from Gwyn (Years 1 to 5) to Saigol (Years 6 to 8) to Bahawalpur (Year 9) then to one of five senior houses, Kelly, Godley, Leslie Jones, K&N's and Shirazi (Years 10 to 13). Life is busy with supervised homework tutorials, games, sports, clubs and occasional outings.</p>
            </div>

            <a href="boarding/boarding-houses" class="button-link small mt-0">Explore our Boarding Houses</a>

        </div>

        <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-xs-12 p-0">
            <div id="boarding-houses" class="owl-carousel owl-theme">
                <div class="card">
                    <img class="card-img-top img-fluid" src="resources/assets/images/boarding/1.jpg"/>
                </div>
                <div class="card">
                    <img class="card-img-top" src="resources/assets/images/boarding/2.jpg"/>
                </div>
                <div class="card">
                    <img class="card-img-top" src="resources/assets/images/boarding/3.jpg"/>
                </div>
                <div class="card">
                    <img class="card-img-top" src="resources/assets/images/boarding/4.jpg"/>
                </div>
                <?php /*?><div class="card">
                    <img class="card-img-top" src="resources/assets/images/boarding/5.jpg"/>
                </div>
                <div class="card">
                    <img class="card-img-top" src="resources/assets/images/boarding/6.jpg"/>
                </div><?php */?>
                <div class="card">
                    <img class="card-img-top" src="resources/assets/images/boarding/7.jpg"/>
                </div>
                <div class="card">
                    <img class="card-img-top" src="resources/assets/images/boarding/8-new.jpg"/>
                </div>
                <div class="card">
                    <img class="card-img-top" src="resources/assets/images/boarding/9.jpg"/>
                </div>
                <?php /*<div class="card">
                    <img class="card-img-top" src="resources/assets/images/boarding/10.jpg"/>
                </div> */?>
                <div class="card">
                    <img class="card-img-top" src="resources/assets/images/boarding/12.jpg"/>
                </div>
                <div class="card">
                    <img class="card-img-top" src="resources/assets/images/boarding/13.jpg"/>
                </div>
                <div class="card">
                    <img class="card-img-top" src="resources/assets/images/boarding/14.jpg"/>
                </div>

            </div>

        </div>


        <div class="row pe-0">
            <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 col-xs-12"></div>
            <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 col-xs-12 text-md-end pe-0 arrows">
                <span class="owl-prev boarding-previous-button back-arrow"><img src="resources/assets/images/arrow-left.png" alt="back-arrow"/></span>
                <span class="owl-next boarding-next-button next-arrow"><img src="resources/assets/images/arrow.png" alt="next-arrow"/></span>
            </div>
        </div>

    </div>
    <!-- End Boarding Houses -->


    <!-- News Sports -->

    <div id="sect-sports" class="row">

        <div class="sports">

            <div class="image">
            </div>

            <div class="container">
                <div id="sports" class="owl-carousel owl-theme h-100">

                    <div class="sport-item">
                        <img src="resources/assets/images/sports/athletic.jpg" />
                        <a href="sports/athletics">
                            <div>
                                <?php /*<img src="resources/assets/images/sports/icons/athletics.svg" style="height: 50px;"/>*/?>
                                <h5>Athletics</h5>
                            </div>
                        </a>
                    </div>

                    <div class="sport-item">
                        <img src="resources/assets/images/sports/cricket.jpg" />
                        <a href="sports/cricket">
                            <div>
                                <h5>Cricket</h5>
                            </div>
                        </a>
                    </div>

                    <div class="sport-item">
                        <img src="resources/assets/images/sports/hockey.jpg" />
                        <a href="sports/hockey">
                            <div>
                                <h5>Hockey</h5>
                            </div>
                        </a>
                    </div>

                    <div class="sport-item">
                        <img src="resources/assets/images/sports/swimming.jpg" />
                        <a href="sports/swimming">
                            <div>
                                <h5>Swimming</h5>
                            </div>
                        </a>
                    </div>

                    <div class="sport-item">
                        <img src="resources/assets/images/sports/riding.jpg" />
                        <a href="sports/riding">
                            <div>
                                <h5>Riding</h5>
                            </div>
                        </a>
                    </div>

                    <div class="sport-item">
                        <img src="resources/assets/images/sports/rugby.jpg" />
                        <a href="sports/rugby">
                            <div>
                                <h5>Rugby</h5>
                            </div>
                        </a>
                    </div>

                    <div class="sport-item">
                        <img src="resources/assets/images/sports/shooting.jpg" />
                        <a href="sports/shooting">
                            <div>
                                <h5>Shooting</h5>
                            </div>
                        </a>
                    </div>

                    <div class="sport-item">
                        <img src="resources/assets/images/sports/tennis.jpg" />
                        <a href="sports/tennis">
                            <div>
                                <h5>Tennis</h5>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!-- End Sports -->


    <!-- Associations -->

    <div id="sect-associations" class="row">

        <?php /*?><h2 class="text-center mb-4 text-black-50">Associations</h2><?php */?>

        <div id="logos" class="logos pb-4 pt-2 owl-carousel owl-theme">
            <?php /* <div class="aga-khan">
                <img src="resources/assets/images/logos/aga-khan.png"/>
            </div>*/?>
            <div class="cambridge">
                <img src="resources/assets/images/logos/cambridge.png"/>
            </div>
            <div class="g20">
                <img src="resources/assets/images/logos/g30.png"/>
            </div>
            <div class="ibsc-member">
                <img src="resources/assets/images/logos/ibsc-member.png"/>
            </div>
            <div class="spears-schools">
                <img src="resources/assets/images/logos/spears-schools-index.png"/>
            </div>
            <div class="cambridge-international">
                <img src="resources/assets/images/logos/cambridge-international.png"/>
            </div>
            <div class="cambridge-igcse">
                <img src="resources/assets/images/logos/cambridge-igcse.png"/>
            </div>
            <?php /* <div class="aga-khan2">
                <img src="resources/assets/images/logos/aga-khan-2.png"/>
            </div>*/?>
            <div class="fedral-board">
                <img src="resources/assets/images/logos/fedralboard.png"/>
            </div>
        </div>
    </div>

    <!-- End Associations -->

</div>


<!-- Footer -->

<?php include_once ("footer.php");?>

<!-- End Footer -->


<!-- End Footer Includes -->
<?php include_once ("footer-includes.php");?>

<!-- End Footer Includes -->
<script>
//$("#weekattheglancedate").load("dates-weeklyactivityglimpses.php");
</script>
</body>

</html>
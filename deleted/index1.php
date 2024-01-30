<?php
include_once ("resources/php/Mobile_Detect.php");
$req_page_name=basename($_SERVER[REQUEST_URI]);
if(strtolower($req_page_name)=="index.php"){
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: https://aitchison.edu.pk/");
    exit();
}
$mobile = new Mobile_Detect();

//$video = 'data/videos/aitchison-v17.m4v';
$video = 'https://backup.aitchison.edu.pk/data/videos/aitchison-v17.m4v';
$poster = 'https://backup.aitchison.edu.pk/data/videos/poster.jpg';


if($mobile->isMobile()) {

    $video = 'https://backup.aitchison.edu.pk/data/videos/mobile/aitchison-tab.m4v';
    $poster = 'https://backup.aitchison.edu.pk/data/videos/mobile/poster.jpg';
}


?>


<!DOCTYPE html>
<html>

<?php
$path = '';
$title = "Home"; include_once ("header-includes.php");?>

<style>
    #menu_jumpto {
        display: block;
        width: 320px;
        position: fixed;
        float: right;
        right: 100px;
        top: 30%;
        transform: translate(-50%,-50%);
        font-size: 24px;
        line-height: 54px;
        z-index: 9999999;
        text-align: center;
        cursor: pointer;
        background-color: #8e1537;
    }

</style>

<body>

<a href="#" id="backtotop" class="backtotop" style="display: none;"><span></span></a>

<nav class="navbar navbar-expand-lg navbar-light bg-transparent nav-home">

    <div class="logo-left">

    </div>

    <div class="years-135">
        <img src="resources/assets/images/where.png" style="color: #fff;"/>
    </div>

</nav>

<?php include_once ("mega-menu.php");?>

<link href="resources/vendors/redmenu/style2.css?v=2" rel="stylesheet">

<div id="jump-to">
    <ul id="menu_jumpto" class="topmenu" style="width: 0">

        <li class="topmenu" style="width: 0; height: 100%;"><a href="#" style="height:0;padding-top: 0; width: 0;"><span style="font-size: 36px;" id="jump"></span><img src="resources/assets/images/logos/horse-logo.svg"/></a>
            <div class="submenu" style="width: 360px">

                <div class="column" style="width:50%">
                    <ul>
                        <li><a href="https://aitchison.edu.pk/principal-letters">Principal's Letters</a></li>
                        <li><a href="https://aitchison.edu.pk/academics/important-dates">Important Dates</a></li>
                        <li><a href="#sect-newsalert">Announcements</a></li>
                        <li><a href="#featured-news">News Highlights</a></li>
                        <li><a href="#sect-aitchison-college">Important Links</a></li>
                        <li><a href="#sect-sports">Sports</a></li>
                    </ul>
                </div>
                <div class="column" style="width:50%">
                    <ul>
                        <li><a href="https://aitchison.edu.pk/portal/acportal">My Aitchison</a></li>
                        <li><a href="https://aitchison.edu.pk/alumni/upcoming-events">Old Boys' Events</a></li>
                        <li><a href="#sect-discover-us">Discover Us</a></li>
                        <li><a href="#sect-our-schools">Our Schools</a></li>
                        <li><a href="#sect-boarding">Boarding</a></li>
                        <li><a href="#sect-associations">Associations</a></li>
                    </ul>
                </div>
            </div>
        </li>

    </ul>
    <!--end of navigation-->
</div>


<div id="backgroundVideo">
    <video autoplay="autoplay"
           loop="loop" muted="muted" playsinline="playsinline"
           poster="data/videos/poster.png"
           data-object-fit="cover" style="transform: translate3d(0px, 0px, 0px);">
        <source src="<?php echo $video; ?>" type="video/mp4">

        <div class="fsError">Your web browser does not support the &lt;video&gt; tag.</div>
    </video>

</div>

<div class="scroll-down" style=""><h4 id="goDown"></h4></div>



<div class="container-fluid" style="margin-top: -7px;">

    <!-- News Alerts -->
    <?php include_once ('news-alerts.php'); ?>

    <div class="divider"></div>

    <!-- Announcements -->
    <div class="row" id="sect-announcements">
        <div class="col-12 text-center">
            <h2 class="header">Announcements</h2>

            <button class="owl-prev announcements-previous-button back-arrow">&#8592;</button>
            <button class="owl-next announcements-next-button next-arrow">&#8594;</button>

        </div>
        <div class="divider"></div>
        
        <div class="col-12">
            <div id="announcements" class="owl-carousel owl-theme">

                <div class="item">

                    <a href="sports/cricket-live-scoreboard" target="_blank">
                        <div class="img-item" style='background-image: url("resources/assets/images/announcements/score-board.jpg");'>

                        </div>

                        <div class="text-center footer">
                            <h3 class="p-2">Live Cricket Score</h3>
                        </div>
                    </a>
                </div>

                <div class="item">

                    <a href="support/support-college" target="_blank">
                        <div class="img-item" style='background-image: url("resources/assets/images/announcements/the-aitchisonian-2020-21.jpg");'>

                        </div>

                        <div class="text-center footer">
                            <h3 class="p-2">Support<br/>The College</h3>
                            <!--<h5>Out Now</h5>-->
                        </div>
                    </a>
                </div>

                <div class="item">

                    <a href="photo-of-the-week" target="_blank">
                        <div class="img-item" style='background-image: url("resources/assets/images/announcements/photo-of-week-20220507.jpg");'>

                        </div>

                        <div class="text-center footer">
                            <h3 class="p-2">Photo Of The Week</h3>
                        </div>
                    </a>
                </div>


                <div class="item">

                    <a href="admissions-info" target="_blank">
                        <div class="img-item" style='background-image: url("resources/assets/images/announcements/admissions.png");'>

                        </div>

                        <div class="text-center footer">
                            <h3 class="p-2">Admissions<br>2022-23</h3>
                        </div>
                    </a>
                </div>

                <div class="item">

                    <a href="news-1423-136th-founders-day-2022" target="_blank">

                        <div class="img-item" style='background-image: url("resources/assets/images/announcements/the-aitchisonian-2020-21.jpg");'>

                        </div>

                        <div class="text-center footer">
                            <h3 class="p-2">136<sup style="text-transform:lowercase;">th</sup> Founders' Day 2022</h3>
                        </div>
                    </a>
                </div>

                <div class="item">

                    <a href="news-482-reliving-aitchison-how-to-place-an-order" target="_blank">
                        <div class="img-item" style='background-image: url("resources/assets/images/announcements/reliving-aitchison.jpg");'>

                        </div>

                        <div class="text-center footer">
                            <h3 class="p-2">Reliving Aitchison</h3>
                        </div>
                    </a>
                </div>

                <div class="item">

                    <a href="news-1109-wedding-and-campus-photographsvideos" target="_blank">
                        <div class="img-item" style='background-image: url("resources/assets/images/announcements/acoba.jpg");'>

                        </div>
                        <div class="text-center footer">
                            <h3 class="p-2">ACOBA</h3>
                        </div>
                    </a>
                </div>


                <div class="item">

                    <a href="school-song" target="_blank">

                        <div class="img-item" style='background-image: url("resources/assets/images/announcements/school-song.jpg");'>

                        </div>
                        <div class="text-center footer">
                            <h3 class="p-2">School Song</h3>
                        </div>
                    </a>
                </div>

            </div>
        </div>



    </div>



    <div class="divider"></div>
    <!-- Discover Us -->
    <div id="sect-discover-us" class="row">
        <div class="col-12 text-center">
            <h2 class="header">Discover Us</h2>

        </div>
        <div class="divider"></div>

        <div class="discover-us">

            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-xs-12 p-5" style="background-color: rgba(0,123,195,0.8); height: 100%;">


                <div id="discover-us" class="owl-carousel owl-theme owl-loaded h-100 pb-3">
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
                        <p>Hockey Fields<div style="font-size: 1.5rem; color: #fff;">Synthetic and Grass</div></p>
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
                        <h1>12</h1>
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


    <!-- News Highlights -->

    <div class="row" style="background-color: #abbf6a;">
        <div id="featured-news" class="news-highlights">
            <div class="divider"></div>
            <div class="row ms-3">
                <h6 class="header-top">HEAR STORIES FROM AITCHISON</h6>
                <div class="col-8">

                    <h2 class="header">News Highlights</h2>
                </div>
                <div class="col-4 text-right">
                    <a href="news-room" target="_parent" class="button-link box-shadow-2 dark float-end me-lg-4"><span class="d-none d-sm-block">Visit News Section</span><span class="d-block d-sm-none small">News Section</span></a>
                </div>
            </div>
            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-4 p-xl-5 p-lg-3 p-md-2">
                    <div class="news-box box-shadow-4">
                        <a href="news-1481-seeking-donors-for-new-sporting-pavilions" target="_blank">
                            <div class="news-image">
                                <img src="https://aitchison.edu.pk/newsletter/images/logo400x266.png" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="color: #4d4d4d; margin: 5px 0;">
                                    21 May, 2022
                                </div>
                                <h3 class="news-heading header">
                                    Seeking Donors for New Sporting Pavilions

                                </h3>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 p-xl-5 p-lg-3 p-md-2">
                    <div class="news-box box-shadow-4" style="border-right: 5px #8E1537FF solid;">
                        <a href="news-1480-room-clears-for-new-monnoo-boarding-house" target="_blank">
                            <div class="news-image">
                                <img src="https://aitchison.edu.pk/newsletter/news/images/monnoo-boarding-house-1-2527742380.jpg" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="color: #4d4d4d; margin: 5px 0;">
                                    21 May, 2022
                                </div>
                                <h3 class="news-heading header">
                                    Room clears for new Monnoo Boarding House
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 p-xl-5 p-lg-3 p-md-2">
                    <div class="news-box box-shadow-4" style="border-right: 5px #8E1537FF solid;">
                        <a href="news-1482-aj-science-innovation-centre-rises" target="_blank">
                            <div class="news-image">
                                <img src="https://aitchison.edu.pk/newsletter/news/images/aj-science-centre-1482-6326278023.jpg" alt="News" class="img-fluid"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="color: #4d4d4d; margin: 5px 0;">
                                    21 May, 2022
                                </div>
                                <h3 class="news-heading header">
                                    A.J Science Innovation Centre Rises
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>

            </div>


        </div>
    </div>

    <!-- End News Highlights -->


    <div class="divider"></div>

    <!-- Message -->
    <div id="sect-our-schools" class="row our-school" style="opacity: 1; transform: translate(0);">

        <div class="col-12 text-center">
            <h2 class="header">Our Schools</h2>
        </div>
        <div class="divider"></div>

        <div class="col-xl-6 col-lg-6">
            <img src="resources/assets/images/our-schools.jpg" class="img-responsive" style="width: 100%;"/>
        </div>
        <div class="col-xl-6 col-lg-6 p-5 pt-2">
            <h2 class="header">WELCOME TO THE START OF YOUR JOURNEY</h2>
            <div class="">

                <p>When Aitchison was founded in 1886, its emphasis was on educating the 'princely elites.' Since Independence this has given way to an egalitarian mix of pupils drawn from all parts of the country. Cambridge curriculum is taught in junior and prep schools, with the additional option of Aga Khan Matric, FSc and FA in senior. Aitchison College offers a broad and challenging educational program for boarding and day students, based on the added benefits of engagement in sports, clubs and societies.</p>
            </div>

            <div class="school">
                <a href="schools/junior-school" class="button-link dark">Junior School</a>
                <a href="schools/prep-school" class="button-link dark">Prep School</a>
                <a href="schools/senior-school" class="button-link dark">Senior School</a>
            </div>

            <div class="mt-4" style="">
                <a href="schools/our-schools" class="large-link" style="">More about our schools</a>
            </div>

        </div>

    </div>

    <div class="divider"></div>


    <!-- Aitchison College -->
    <div id="sect-aitchison-college" class="col-12 text-center">
        <h2 class="header">Aitchison College</h2>

    </div>
    <div class="divider"></div>


    <div class="home">
        <div class="row">

            <div class="col-xl-6 col-lg-5 col-md-5 col-sm-12 col-xs-12" style="background-color: rgba(0,0,0,0.23);">
                <div class="row home-left">
                    <div>
                        <h1>Perseverance<br>Commands<br>Success</h1>

                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-7 col-md-7 col-sm-12 col-xs-12 p-5 text-center" style="background-color: rgb(1 131 53 / 40%); height: 100%;">

                <div class="row home-items">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 border-end border-bottom"><a href="admission/admissions-info">Admissions</a></div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 border-bottom"><a href="principal-letters">Principal's Letters</a></div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 border-end border-bottom"><a href="news-room">News & Events</a></div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 border-bottom"><a href="https://aitchison.edu.pk/alumni/">Alumni</a></div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12 border-end"><a href="careers">Careers</a></div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12"><a href="portal/acportal">My Aitchison</a></div>
                </div>
            </div>

        </div>
    </div>
    <!-- End home -->

    <div class="divider"></div>

    <!-- Boarding Houses -->
    <div id="sect-boarding" class="row">
        <div class="col-12 text-center">
            <h2 class="header">Boarding</h2>

            <div class="d-none d-xxl-block d-xl-block d-lg-block">
                <button class="owl-prev boarding-previous-button">&#8592;</button>
                <button class="owl-next boarding-next-button">&#8594;</button>
            </div>
        </div>
        <div class="divider"></div>

        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 mb-md-5">
            <h6 class="header-top">EXPERIENCE A HOME FROM HOME</h6>
            <h2 class="header">Boarding adds value to the quality of education</h2>

            <div class="">

                <p>There are presently six boarding houses at Aitchison, with a further three opening in 2022 and 2023. All houses offer excellent facilities. Life is comfortable and busy with supervised homework, specialised tutorials, games, sports, and clubs. Boarders enjoy access to the College's unequaled facilities spread across 200 acres. The original and true experience of an Aitchisonian still resides in the boarding experience.</p>
            </div>
            <a href="boarding/boarding-houses" class="large-link">Explore our Boarding Houses</a>

            <div class="d-xxl-none d-xl-none d-lg-none text-center my-2">
                <button class="owl-prev boarding-previous-button">&#8592;</button>
                <button class="owl-next boarding-next-button">&#8594;</button>
            </div>

        </div>

        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
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
    </div>
    <!-- End Boarding Houses -->


    <div class="divider"></div>

    <!-- News Sports -->

    <div id="sect-sports" class="row pt-2">

        <h6 class="header-top" style="text-align: center;">Success is where preparation and opportunity meet</h6>
        <div class="col-12">
            <h2 class="header" style="text-align: center;">Sports</h2>

        </div>

        <div class="divider"></div>

        <div class="sports" style="">

            <div class="image">
            </div>

            <div class="container" style="display: block; position:relative; bottom: 25%; padding: 0 100px 100px;">
                <div id="sports" class="owl-carousel owl-theme owl-loaded h-100 pb-3">

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

    <div id="sect-associations" class="row pb-5">

        <h2 class="text-center mb-4 text-black-50">Associations</h2>

        <div class="logos">
            <div class="cambridge">
                <img src="resources/assets/images/logos/cambridge.png"/>
            </div>
            <div class="aga-khan">
                <img src="resources/assets/images/logos/aga-khan.png"/>
            </div>
            <div class="g20">
                <img src="resources/assets/images/logos/g20.png"/>
            </div>
            <div class="aga-khan2">
                <img src="resources/assets/images/logos/agha-khan-2.png"/>
            </div>
            <div class="cambridge-international">
                <img src="resources/assets/images/logos/cambridge-international.png"/>
            </div>
            <div class="cambridge-igcse">
                <img src="resources/assets/images/logos/cambridge-igcse.png"/>
            </div>
        </div>
    </div>

    <!-- End Associations -->

</div>

<div class="divider"></div>

<!-- Footer -->

<?php include_once ("footer.php");?>

<!-- End Footer -->


<!-- End Footer Includes -->
<?php include_once ("footer-includes.php");?>

<!-- End Footer Includes -->

</body>

</html>
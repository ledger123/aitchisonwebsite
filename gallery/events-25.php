<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Events"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/gallery.jpg';
?>
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>resources/css/gallery-style.css?v=1">

<body>
<?php include_once ($path.'top-menu-bar.php'); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent nav-home">

    <div class="logo-left">

    </div>

</nav>

<section class="page-banner" style="background: url('<?php echo $banner_url; ?>')">

    <div class="container banner-text">
        <div class="banner-heading">

        </div>
    </div>
</section>

<?php include_once($path."mega-menu.php");?>

<div class="container-fluid">

    <div class="row mx-lg-5 mt-2">
        <div class="col-lg-9 col-md-6 col-sm-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $path;?>gallery/event-gallery">Gallery</a></li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div style="height: 60px;"></div>
        </div>
    </div>
</div>

<div class="container">

    <div class="row">
        <?php include_once ('right-panel-links.php'); ?>
    </div>

</div>


<div class="container-fluid">

    <div class="col-lg-9 col-md-12 col-sm-12">
        <div class="col-12 page-title">
            <h1><?php echo $title; ?></h1>
        </div>

    </div>
</div>

<div class="container">

    <!-- Contents -->
    <div class="row">

        <!-- Content Area -->
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div id="gallerySLide" class="sgallery_area4">
                <a href="gallerydetails-40-independence-day" title="INDEPENDENCE DAY">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/40.JPG" alt="img">
                    <span class="view_btn">INDEPENDENCE DAY</span>
                </a>
                <a href="gallerydetails-39-robotics-summer-camp" title="ROBOTICS SUMMER CAMP">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/39.JPG" alt="img">
                    <span class="view_btn">ROBOTICS SUMMER CAMP</span>
                </a>
                <a href="gallerydetails-38-summer-camp" title="SUMMER CAMP">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/38.JPG" alt="img">
                    <span class="view_btn">SUMMER CAMP</span>
                </a>
                <a href="gallerydetails-37-saigol-bahawalpur-house-dinner" title="Saigol &amp; Bahawalpur House Dinner">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/37.JPG" alt="img">
                    <span class="view_btn">Saigol &amp; Bahawalpur House Dinner</span>
                </a>
                <a href="gallerydetails-36-kelly-house-dinner" title="kelly House Dinner">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/36.JPG" alt="img">
                    <span class="view_btn">kelly House Dinner</span>
                </a>
                <a href="gallerydetails-35-godley-house-dinner" title="Godley House Dinner">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/35.JPG" alt="img">
                    <span class="view_btn">Godley House Dinner</span>
                </a>
                <a href="gallerydetails-34-lj-house-dinner" title="LJ House Dinner">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/34.JPG" alt="img">
                    <span class="view_btn">LJ House Dinner</span>
                </a>
                <a href="gallerydetails-33-english-play-senior-school" title="English Play(Senior School)">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/33.JPG" alt="img">
                    <span class="view_btn">English Play<br>(Senior School)</span>
                </a>
                <a href="gallerydetails-32-english-play-prep-school" title="English Play(Prep School)">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/32.JPG" alt="img">
                    <span class="view_btn">English Play<br>(Prep School)</span>
                </a>
                <a href="gallerydetails-31-annual-urdu-play-senior-school" title="Annual Urdu Play(Senior School)">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/31.JPG" alt="img">
                    <span class="view_btn">Annual Urdu Play<br>(Senior School)</span>
                </a>
                <a href="gallerydetails-30-founders-day-sports-2019" title="Founders' Day Sports 2019">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/30.JPG" alt="img">
                    <span class="view_btn">Founders' Day Sports 2019</span>
                </a>
                <a href="gallerydetails-29-founders-day-academics-2019" title="Founders' Day Academics 2019">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/29.JPG" alt="img">
                    <span class="view_btn">Founders' Day Academics 2019</span>
                </a>
                <a href="gallerydetails-28-sports-day" title="Sports Day">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/28.JPG" alt="img">
                    <span class="view_btn">Sports Day</span>
                </a>
                <a href="https://www.aitchison.edu.pk/newsandevents-testlink.php?id=460" title="JS INTER- HOUSE CROSS COUNTRY 2019">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/27.JPG" alt="img">
                    <span class="view_btn">JS INTER- HOUSE CROSS COUNTRY 2019</span>
                </a>
                <a href="gallerydetails-26-founders-day-sports-2018" title="Founders' Day Sports 2018">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/26.JPG" alt="img">
                    <span class="view_btn">Founders' Day Sports 2018</span>
                </a>
                <a href="gallerydetails-25-founders-day-sports-senior-school-2018" title="Founders' Day Sports (Senior School) 2018">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/25.JPG" alt="img">
                    <span class="view_btn">Founders' Day Sports (Senior School) 2018</span>
                </a>
                <a href="gallerydetails-24-founders-day-sports-prep-school-2018" title="Founders' Day Sports (Prep School) 2018">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/24.JPG" alt="img">
                    <span class="view_btn">Founders' Day Sports (Prep School) 2018</span>
                </a>
                <a href="gallerydetails-23-founders-day-sports-junior-school-2018" title="Founders' Day Sports (Junior School) 2018">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/23.JPG" alt="img">
                    <span class="view_btn">Founders' Day Sports (Junior School) 2018</span>
                </a>
                <a href="gallerydetails-21-general-assembly" title="GENERAL ASSEMBLY">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/21.JPG" alt="img">
                    <span class="view_btn">GENERAL ASSEMBLY</span>
                </a>
                <a href="gallerydetails-20-walter-a-robinson-challenge-cup-2018" title="Walter A . Robinson Challenge Cup 2018">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/20.JPG" alt="img">
                    <span class="view_btn">Walter A . Robinson Challenge Cup 2018</span>
                </a>
                <a href="gallerydetails-19-founders-day-sports-senior-school-2017" title="Founders' Day Sports (Senior School) 2017">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/19.JPG" alt="img">
                    <span class="view_btn">Founders' Day Sports (Senior School) 2017</span>
                </a>
                <a href="gallerydetails-18-founders-day-sports-prep-school-2017" title="Founders' Day Sports (Prep School) 2017">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/18.JPG" alt="img">
                    <span class="view_btn">Founders' Day Sports (Prep School) 2017</span>
                </a>
                <a href="gallerydetails-17-founders-day-sports-junior-school-2017" title="Founders' Day Sports (Junior School) 2017">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/17.JPG" alt="img">
                    <span class="view_btn">Founders' Day Sports (Junior School) 2017</span>
                </a>
                <a href="gallerydetails-16-131supspan-styletext-transform-lowercase-vertical-align-superstspansup-founders-day-academics-2017" title="131st FOUNDERS' DAY ACADEMICS 2017">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/16.JPG" alt="img">
                    <span class="view_btn">131<sup><span style="text-transform: lowercase; vertical-align: super;">st</span></sup> FOUNDERS' DAY ACADEMICS 2017</span>
                </a>
                <a href="gallerydetails-15-cross-country-races-2017" title="CROSS COUNTRY RACES 2017">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/15.JPG" alt="img">
                    <span class="view_btn">CROSS COUNTRY RACES 2017</span>
                </a>
                <a href="gallerydetails-14-acmun" title="ACMUN">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/14.JPG" alt="img">
                    <span class="view_btn">ACMUN</span>
                </a>
                <a href="gallerydetails-13-independence-day-sports" title="Independence Day Sports">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/13.JPG" alt="img">
                    <span class="view_btn">Independence Day Sports</span>
                </a>
                <a href="gallerydetails-12-flag-hoisting-on-independence-day" title="Flag Hoisting on Independence Day">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/12.JPG" alt="img">
                    <span class="view_btn">Flag Hoisting on Independence Day</span>
                </a>
                <a href="gallerydetails-8-130supthsup-founders-day-sports" title="130th FOUNDERS' DAY SPORTS">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/8.JPG" alt="img">
                    <span class="view_btn">130<sup>th</sup> FOUNDERS' DAY SPORTS</span>
                </a>
                <a href="gallerydetails-7-130supthsup-founders-day-academics" title="130th FOUNDERS' DAY ACADEMICS">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/7.JPG" alt="img">
                    <span class="view_btn">130<sup>th</sup> FOUNDERS' DAY ACADEMICS</span>
                </a>
                <a href="gallerydetails-9-js-mini-sports-day" title="JS MINI SPORTS DAY">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/9.JPG" alt="img">
                    <span class="view_btn">JS MINI SPORTS DAY</span>
                </a>
                <a href="gallerydetails-6-unity-night" title="Unity Night">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/6.JPG" alt="img">
                    <span class="view_btn">Unity Night</span>
                </a>
                <a href="gallerydetails-5-flag-hoisting-on-pakistan-day" title="Flag hoisting  On Pakistan Day">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/5.JPG" alt="img">
                    <span class="view_btn">Flag hoisting On Pakistan Day</span>
                </a>
                <a href="gallerydetails-4-prep-school-tape-ball-cricket-match" title="Prep School Tape Ball Cricket Match">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/4.JPG" alt="img">
                    <span class="view_btn">Prep School Tape Ball Cricket Match</span>
                </a>
                <a href="gallerydetails-3-senior-school-assembly" title="Senior School Assembly">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/3.JPG" alt="img">
                    <span class="view_btn">Senior School Assembly</span>
                </a>
                <a href="gallerydetails-11-junior-school-assembly" title="Junior School Assembly">
                    <img class="gallery_img" src="<?php echo $image_path;?>galimages/images/11.JPG" alt="img">
                    <span class="view_btn">Junior School Assembly</span>
                </a>
            </div>
        </div>
        <!-- End Content Area -->


        <div class="col-lg-9 col-md-12 col-sm-12">

            <div class="divider"></div>

            <div class="row">

            </div>
        </div>

        <div class="col-lg-3 col-md-12 col-sm-12">

        </div>
    </div>
    <!-- End Contents -->

</div>

<div class="divider"></div>

<!-- Footer -->

<?php include_once($path."footer.php");?>

<!-- End Footer -->


<!-- End Footer Includes -->
<?php include_once($path."footer-includes.php");?>

<!-- End Footer Includes -->

</body>

</html>

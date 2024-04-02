<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "University Counseling"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/school.jpg';
?>

<body>
<?php include_once ($path.'top-menu-bar.php'); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent nav-home">

    <div class="logo-left">

    </div>

</nav>

<section style="background: url(<?php echo $banner_url; ?>); background-repeat: no-repeat;background-size: cover;" class="page-banner">

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
                    <li class="breadcrumb-item active" aria-current="page"><a href="about-us">School</a></li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <nav>
                <ul class="social-color nav-social mt-2 mb-2">
                    <li><a href="https://www.facebook.com/Aitchison-College-368847620484906" target="_blank">Facebook</a></li>
                    <li><a href="https://www.instagram.com/aitchisoncollegeofficial" target="_blank">Instagram</a></li>
                    <li><a href="https://www.linkedin.com/company/14764887" target="_blank">Linkedin</a></li>
                </ul>
            </nav>
        </div>
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

        <!-- Left Area -->
        <div class="col-lg-8 col-md-12 col-sm-12">

            <p>Transitioning students into post schooling studies is now an indispensable part of a school's educational responsibility. Aitchison employs highly experienced counselors to handle US, UK (and other international) and National admissions. Our aims are to:</p>
            <ol style="list-style: decimal; line-height: 30px !important; padding-left: 25px; margin-left: 25px;">
                <li>Offer the latest information and accurate advice to enable students to identify the best university options and career pathways.</li>
                <li>Facilitate and streamline the application process for students into local and international universities.</li>
                <li>Assemble resumes and all documentation for college admissions.</li>
            </ol>
            <p>The College expects all boys to utilise this service. Aitchison's reputation among international universities is impeccable.</p>
            <div class="row" style="margin-top:20px; margin-bottom:20px;">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p><img src="<?php echo $image_path;?>/img/pageimages/cc.jpg" alt="" class="img-fluid"></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p><img src="<?php echo $image_path;?>/img/pageimages/cc2.jpg" alt="" class="img-fluid"></p>
                </div>
            </div>
        </div>
        <!-- End Left Area -->

        <!-- Right Area -->
        <div class="col-lg-4 col-md-6 col-sm-12 text-center news-links">
            <?php include_once ('right-panel-links.php'); ?>
        </div>
        <!-- End Right Area -->

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

<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Leading Staff"; include_once($path."header-includes.php");

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

            <h2 class="titile" style="font-size: 26px; color: #07294d; text-decoration: underline; margin-bottom: 0; padding-bottom: 0;">Academic</h2>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/hmss-v2.jpg" class="img-fluid">
                    </div>
                    <div style="min-height: 60px; overflow: hidden;"><strong>Amina&nbsp;Kamran<br>Head of Senior School and Leading Head of School</strong></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/hmps.jpg" class="img-fluid">
                    </div>
                    <div style="min-height: 60px; overflow: hidden;"><strong>Raja Ashfaq Ahmad<br>Head of Prep School</strong></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/hmjs-v1.jpg" class="img-fluid">
                    </div>
                    <div style="min-height: 60px; overflow: hidden;"><strong>Fatima Mubeen<br>Head of Junior School</strong></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/dhmss.jpg" class="img-fluid">
                    </div>
                    <div style="min-height: 60px; overflow: hidden;"><strong>Dr. Muhammad Kamran<br>Deputy Headmaster Senior School</strong></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/dhmps.jpg" class="img-fluid">
                    </div>
                    <div style="min-height: 60px; overflow: hidden;"><strong>Tariq Jamil<br>Deputy Headmaster Prep School </strong></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/houpjs.jpg" class="img-fluid">
                    </div>
                    <div style="min-height: 60px; overflow: hidden;"><strong>Farzana Mehmood<br>Head of Upper Primary <br>&nbsp; <br>&nbsp;</strong></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/holpjs.jpg" class="img-fluid">
                    </div>
                    <div style="min-height: 60px; overflow: hidden;"><strong>Sara Malik<br>Head of Lower Primary <br>&nbsp; <br>&nbsp;</strong></div>
                </div>
            </div>
            <hr>
            <h2 class="titile" style="font-size: 26px; color: #07294d; text-decoration: underline; margin-bottom: 0; padding-bottom: 0;">Administration</h2>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/bursar.jpg" alt="" class="img-fluid">
                        <div><strong>Khalid&nbsp;Mohammad&nbsp;Noon<br>Bursar</strong></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/hr.jpg" alt="" class="img-fluid">
                        <div><strong>Waqar Noor Khan<br>Head of HR </strong></div>
                    </div>
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

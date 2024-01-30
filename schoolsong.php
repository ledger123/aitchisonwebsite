<!DOCTYPE html>
<html>
<?php

include_once("path-settings.php");

$path = '';

$title = "School Song"; include_once("header-includes.php");

$banner_url = $path.'resources/assets/images/banners/contacts.jpg';
?>

<body>
<?php include_once ('top-menu-bar.php'); ?>
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

<?php include_once("mega-menu.php");?>

<div class="container-fluid">

    <div class="row mx-lg-5 mt-2">
        <div class="col-lg-9 col-md-6 col-sm-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">School Song</li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div style="height: 60px;"></div>
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
            <div style="padding: 10px 30px 0 30px; text-align: center;">
                <video id="introVid" controls="" autoplay="" muted="" style="object-fit: initial; margin-left: 0; width: 96%;">
                    <source src="<?php echo $image_path2;?>videos/aitchison-college-anthem-2020.mp4" style="" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <br/>

            <p style="font-size: 15px; line-height: 1.8;">Aitchison College Anthem sung by Mohibullah Bin Mobeen. Keyboard Muhammad Haseeb Raza. Recorded at Rich Tunes Studio under supervision of Sir Haroon Shad.</p>
        </div>
        <!-- End Left Area -->

        <!-- Right Area -->
        <div class="col-lg-4 col-md-6 col-sm-12 text-center news-links">

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
<!DOCTYPE html>
<html>
<?php

include_once("path-settings.php");

$path = '';

$title = "School Song"; include_once("header-includes.php");

$banner_url = $path.'resources/assets/images/banners/contacts.jpg';
$page_header = $title;
?>

<body>

<?php include_once ('new-logo-page-banner.php'); ?>

<?php include_once("mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">School Song</li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div></div>
        </div>
    </div>
</div>


<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- Left Area -->
        <div class="col-lg-9 col-md-12 col-sm-12">
            <div>
                <video id="introVid" controls="" autoplay="" muted="" style="object-fit: initial; margin-left: 0;">
                    <source src="<?php echo $image_path2;?>videos/aitchison-college-anthem-2020.mp4" style="" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <br/>

            <p style="font-size: 15px; line-height: 1.8;">Aitchison College Anthem sung by Mohibullah Bin Mobeen. Keyboard Muhammad Haseeb Raza. Recorded at Rich Tunes Studio under supervision of Sir Haroon Shad.</p>
        </div>
        <!-- End Left Area -->

        <!-- Right Area -->
        <div class="col-lg-3 col-md-6 col-sm-12 text-center news-links">

        </div>
        <!-- End Right Area -->

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
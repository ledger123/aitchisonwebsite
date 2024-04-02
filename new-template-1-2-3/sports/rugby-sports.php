<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Rugby"; include_once($path."header-includes.php");

//$banner_url = $path.'resources/assets/images/banners/old-building-v2.jpg';
$banner_url = $path.'resources/assets/images/banners/rugby-20230221.jpg';
$page_header = $title;
?>

<body>
<?php include_once ($path.'new-logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="sports">Sports</a></li>
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
            <p>Aitchison engages in house and school rugby. Competition also involves matches against outside adult teams and old boys.</p>

            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="gallerySLide" class="sgallery_area2">
                        <a href="<?php echo $image_path;?>img/rugby/5.jpg" title="Rugby">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/rugby/small/5.jpg" alt="img">
                            <span class="view_btn">Rugby</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/rugby/6.jpg" title="Rugby">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/rugby/small/6.jpg" alt="img">
                            <span class="view_btn">Rugby</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/rugby/1.jpg" title="Rugby">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/rugby/small/1.jpg" alt="img">
                            <span class="view_btn">Rugby</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/rugby/2.jpg" title="Rugby">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/rugby/small/2.jpg" alt="img">
                            <span class="view_btn">Rugby</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/rugby/3.jpg" title="Rugby">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/rugby/small/3.jpg" alt="img">
                            <span class="view_btn">Rugby</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/rugby/4.jpg" title="Rugby">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/rugby/small/4.jpg" alt="img">
                            <span class="view_btn">Rugby</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Left Area -->

        <!-- Right Area -->
        <div class="col-lg-3 col-md-6 col-sm-12 text-center news-links">
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

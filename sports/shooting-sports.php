<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Shooting"; include_once($path."header-includes.php");

//$banner_url = $path.'resources/assets/images/banners/old-building-v2.jpg';
$banner_url = $path.'resources/assets/images/banners/shooting-20230221.jpg';
?>

<body>
<?php include_once ($path.'top-menu-bar.php'); ?>

<?php include_once ($path.'logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>



<div class="container">

    <div class="row mt-2">
        <div class="col-lg-9 col-md-6 col-sm-12">

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


    <div class="col-lg-9 col-md-12 col-sm-12">
        <div class="col-12 page-title page-title2">
            <h1><?php echo $title; ?></h1>
        </div>

    </div>


    <!-- Contents -->
    <div class="row">

        <!-- Left Area -->
        <div class="col-lg-9 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-12  col-lg-offset-1 col-md-12 col-md-offset-1 col-sm-12 col-sm-offset-1">
                    <div id="gallerySLide" class="sgallery_area2">
                        <a href="<?php echo $image_path;?>img/shooting/3.jpg" title="Shooting">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/shooting/small/3.jpg" alt="img">
                            <span class="view_btn">Shooting</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/shooting/4.jpg" title="Shooting">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/shooting/small/4.jpg" alt="img">
                            <span class="view_btn">Shooting</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/shooting/5.jpg" title="Shooting">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/shooting/small/5.jpg" alt="img">
                            <span class="view_btn">Shooting</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/shooting/6.jpg" title="Shooting">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/shooting/small/6.jpg" alt="img">
                            <span class="view_btn">Shooting</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/shooting/7.jpg" title="Shooting">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/shooting/small/7.jpg" alt="img">
                            <span class="view_btn">Shooting</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/shooting/2.jpg" title="Shooting">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/shooting/small/2.jpg" alt="img">
                            <span class="view_btn">Shooting</span>
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

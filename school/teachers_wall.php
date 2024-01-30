<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Teachers' Wall"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="about-us">School</a></li>
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

            <p>Aitchison recognises and pays tribute to all teachers, but especially those who have served 15 or more years. Photographs honour all long serving staff from our Foundation onwards.</p>

            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <div id="gallerySLide" class="sgallery_area2">
                    <a href="<?php echo $image_path;?>img/teachers-wall/1.jpg" title="Teachers' Wall">
                        <img class="gallery_img" src="<?php echo $image_path;?>img/teachers-wall/small/1.jpg" alt="img">
                        <span class="view_btn"> Teachers' Wall </span>
                    </a>
                    <a href="<?php echo $image_path;?>img/teachers-wall/2.jpg" title="Teachers' Wall">
                        <img class="gallery_img" src="<?php echo $image_path;?>img/teachers-wall/small/2.jpg" alt="img">
                        <span class="view_btn"> Teachers' Wall </span>
                    </a>
                    <a href="<?php echo $image_path;?>img/teachers-wall/3.jpg" title="Teachers' Wall">
                        <img class="gallery_img" src="<?php echo $image_path;?>img/teachers-wall/small/3.jpg" alt="img">
                        <span class="view_btn"> Teachers' Wall </span>
                    </a>
                    <a href="<?php echo $image_path;?>img/teachers-wall/4.jpg" title="Teachers' Wall">
                        <img class="gallery_img" src="<?php echo $image_path;?>img/teachers-wall/small/4.jpg" alt="img">
                        <span class="view_btn"> Teachers' Wall </span>
                    </a>

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

<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Tennis"; include_once($path."header-includes.php");

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
            <p>Aitchison offers excellent grass and hard court tennis facilities. The College has produced many champion players and Davis Cup representatives. In 2023, we will open a new hard court facility and clubhouse. Our annual ACOBA fixture is the marquee event of the season.</p>
            <div class="row">
                <div class="col-lg-12  col-lg-offset-1 col-md-12 col-md-offset-1 col-sm-12 col-sm-offset-1">
                    <div id="gallerySLide" class="sgallery_area2">

                        <a href="<?php echo $image_path;?>img/tennis/6.jpg" title="Tennis">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/tennis/small/6.jpg" alt="img">
                            <span class="view_btn">Tennis</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/tennis/7.jpg" title="Tennis">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/tennis/small/7.jpg" alt="img">
                            <span class="view_btn">Tennis</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/tennis/5.jpg" title="Tennis">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/tennis/small/5.jpg" alt="img">
                            <span class="view_btn">Tennis</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/tennis/8.jpg" title="Tennis">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/tennis/small/8.jpg" alt="img">
                            <span class="view_btn">Tennis</span>
                        </a>

                        <a href="<?php echo $image_path;?>img/tennis/9.jpg" title="Tennis">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/tennis/small/9.jpg" alt="img">
                            <span class="view_btn">Tennis</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/tennis/10.jpg" title="Tennis">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/tennis/small/10.jpg" alt="img">
                            <span class="view_btn">Tennis</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/tennis/11.jpg" title="Tennis">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/tennis/small/11.jpg" alt="img">
                            <span class="view_btn">Tennis</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/tennis/12.jpg" title="Tennis">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/tennis/small/12.webp" alt="img">
                            <span class="view_btn">Tennis</span>
                        </a>

                        <a href="<?php echo $image_path;?>img/tennis/13.jpg" title="Tennis">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/tennis/small/13.jpg" alt="img">
                            <span class="view_btn">Tennis</span>
                        </a>

                        <a href="<?php echo $image_path;?>img/tennis/14.jpg" title="Tennis">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/tennis/small/14.jpg" alt="img">
                            <span class="view_btn">Tennis</span>
                        </a>

                        <a href="<?php echo $image_path;?>img/tennis/15.jpg" title="Tennis">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/tennis/small/15.jpg" alt="img">
                            <span class="view_btn">Tennis</span>
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

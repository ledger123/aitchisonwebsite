<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Tennis"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/tennis-1.jpg';
$page_header = $title;
?>

<body>

<?php include_once ($path.'logo-page-banner.php'); ?>

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
    </div>
</div>



<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

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

                        <a href="<?php echo $image_path;?>img/tennis/1.jpg" title="Tennis">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/tennis/small/1.jpg" alt="img">
                            <span class="view_btn">Tennis</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/tennis/2.jpg" title="Tennis">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/tennis/small/2.jpg" alt="img">
                            <span class="view_btn">Tennis</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/tennis/3.jpg" title="Tennis">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/tennis/small/3.jpg" alt="img">
                            <span class="view_btn">Tennis</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/tennis/4.jpg" title="Tennis">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/tennis/small/4.jpg" alt="img">
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
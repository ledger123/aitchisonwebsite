<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Medical"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/boarding.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="boarding-houses">Boarding</a></li>
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

            <p>The College employs two residential doctors and a team of support staff with long experience in boys' education and health. Our hospital is well-equipped and offers overnight facilities and 24 hour care. Doctors speak regularly to boys about health issues. &nbsp;</p>
            <p><br /></p>

            <div class="col-lg-12  col-lg-offset-1 col-md-12 col-md-offset-1 col-sm-12 col-sm-offset-1">
                <div id="gallerySLide" class="sgallery_area2">
                    <a href="<?php echo $image_path;?>img/boarding/medical/1.jpg" title="Medical " class="active">
                        <img class="gallery_img" src="<?php echo $image_path;?>img/boarding/medical/small/1.jpg" alt="img">
                        <span class="view_btn">Medical</span>
                    </a>
                    <a href="<?php echo $image_path;?>img/boarding/medical/2.jpg" title="Medical ">
                        <img class="gallery_img" src="<?php echo $image_path;?>img/boarding/medical/small/2.jpg" alt="img">
                        <span class="view_btn">Medical</span>
                    </a>
                    <a href="<?php echo $image_path;?>img/boarding/medical/3.jpg" title="Medical ">
                        <img class="gallery_img" src="<?php echo $image_path;?>img/boarding/medical/small/3.jpg" alt="img">
                        <span class="view_btn">Medical</span>
                    </a>
                    <a href="<?php echo $image_path;?>img/boarding/medical/4.jpg" title="Medical ">
                        <img class="gallery_img" src="<?php echo $image_path;?>img/boarding/medical/small/4.jpg" alt="img">
                        <span class="view_btn">Medical</span>
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

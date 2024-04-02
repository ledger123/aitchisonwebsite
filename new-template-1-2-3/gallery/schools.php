<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Around the Schools"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/gallery.jpg';
$page_header = $title;
?>
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>resources/css/gallery-style.css?v=1">

<body>
<?php include_once ($path.'new-logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $path;?>gallery/event-gallery">Gallery</a></li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div></div>
        </div>
    </div>
</div>


<div class="container">

    <div class="row mt-3">
        <?php include_once ('right-panel-links.php'); ?>
    </div>

</div>

<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- Left Area -->
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div id="gallerySLide" class="sgallery_area4">
                <?php
                $gal_title="Around the Schools";
                $imageArr = ['', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];
                for($i=1; $i <= 30; $i ++) {
                    ?>
                    <a href="<?php echo $image_path;?>sportsgal/aboutschools/<?php echo $imageArr[$i];?>.jpg" title="<?php echo $gal_title;?>">
                        <img class="gallery_img" src="<?php echo $image_path;?>sportsgal/aboutschools/small/<?php echo $imageArr[$i];?>.jpg" alt="img" />
                        <span class="view_btn"><?php echo $gal_title;?></span>
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>
        <!-- End Left Area -->


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

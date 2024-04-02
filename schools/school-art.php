<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Art"; include_once($path."header-includes.php");

$banner_url = $image_path.'img/pageimages/art_banner.jpg';
$ua = strtolower($_SERVER["HTTP_USER_AGENT"]);
$isMob = is_numeric(strpos($ua, "mobile"));
if($isMob){
	$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
}
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="our-schools">Our Schools</a></li>
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
            <blockquote style="width: fit-content; border-color: #369;">
                <p>“Art washes away from the soul the dust of everyday life.” <span class="text-black-50">— Pablo Picasso</span></p>
            </blockquote>

            <p>&nbsp;</p>

            <div class="">
                <div id="gallerySLide" class="sgallery_area2">

                    <?php
                    $imgPath = $image_path."galimages/art/";
                    $imgPathSmall = $image_path."galimages/art/small2/";

                    for ($i = 40; $i < 41; $i++) {
                        ?>
                        <a href="<?php echo $imgPath . $i . ".jpg"; ?>" title="Annual Art Exhibition">
                            <img class="gallery_img" src="<?php echo $imgPathSmall . $i . ".jpg"; ?>" alt="image">
                            <span class="view_btn">Annual Art Exhibition</span>
                        </a>

                        <?php
                    }


                    for ($i = 25; $i < 40; $i++) {
                        ?>
                        <a href="<?php echo $imgPath . $i . ".jpg"; ?>" title="Annual Art Exhibition">
                            <img class="gallery_img" src="<?php echo $imgPathSmall . $i . ".jpg"; ?>" alt="image">
                            <span class="view_btn">Annual Art Exhibition</span>
                        </a>

                        <?php
                    }

                    for ($i = 1; $i < 25; $i++) {
                        ?>
                        <a href="<?php echo $imgPath . $i . ".jpg"; ?>" title="Annual Art Exhibition 2016">
                            <img class="gallery_img" src="<?php echo $imgPathSmall . $i . ".jpg"; ?>" alt="image">
                            <span class="view_btn">Annual Art Exhibition</span>
                        </a>

                        <?php
                    }
                    ?>
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
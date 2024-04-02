<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Old Building"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="about-us">School</a></li>
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
            <p>The 'Old Building' or Aitchison Hall is our greatest architectural treasure: standing iconic as an 'Educational Mother'; the keeper of memories and boyhoods' past. Its continuing preservation is of the utmost importance to us all. The Official Reopening of the 'Old Building', after more than two years of renovations, was held on Friday, 6th March 2020. A special plaque was made to acknowledge the many old boy donors who helped save this nationally significant building, which is now home to final year A Level students in H2.</p>
            <p></p>
            <div class="">
                <div id="gallerySLide" class="sgallery_area2">

                    <?php
                    $imgPath = $image_path."galimages/old-building/";
                    $imgPathSmall = $image_path."galimages/old-building/small/";

                    $imgArr = ['1', '2', '3', '4', '5', '7', '8', '9', '10', '12', '13', '14', '16', '17', '18', '19', '20', '21', '22', '23'];
                    foreach ($imgArr as $i) {
                        ?>
                        <a href="<?php echo $imgPath . $i . ".jpg"; ?>" title="Old Building">
                            <img class="gallery_img" src="<?php echo $imgPathSmall . $i . ".jpg"; ?>" alt="Old Building">
                            <span class="view_btn">Old Building</span>
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

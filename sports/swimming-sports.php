<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Swimming"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/sports/swimming.jpg';
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

            <p>Aitchison is the dominant swimming school in the Punjab with national and provincial champions in various strokes. The College offers a swimming program at all levels of schooling and enjoys numerous school and house carnivals during the season. Three competition pools provide plenty of space and opportunity for training programs. The Diving Pool Centre is situated at the senior location.</p>
            <br><br>
            <h3 style="text-align: center; margin-bottom: 15px;">National and School Champions with their Trophies</h3>
            <div align="center">
                <img src="<?php echo $image_path;?>galimages/Sports/swimming/swimming-trophies.jpg" alt="Swimming Trophies" class="img-responsive" style="width: 100%;">
            </div>


            <h3 class="text-center mb-3 mt-3">Swimming Activities</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="padding-left: 0px; padding-right: 0px;">
                    <div id="gallerySLide" class="sgallery_area2">

                        <?php
                        $galArray = ["17", "16", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15"];
						$galArrayTitles = ["Diving", "Swimming", "Swimming", "Swimming", "Swimming", "Swimming", "Swimming", "Swimming", "Swimming", "Swimming", "Swimming", "Swimming", "Swimming", "Swimming", "Swimming", "Swimming"];
                        for($i= 0; $i < count($galArray); $i++){
                            ?>
                            <a href="<?php echo $image_path;?>galimages/Sports/swimming/<?php echo $galArray[$i];?>.jpg" title="<?php echo $galArrayTitles[$i];?>">
                                <img class="gallery_img" src="<?php echo $image_path;?>galimages/Sports/swimming/small/<?php echo $galArray[$i];?>.jpg" alt="img" />
                                <span class="view_btn"><?php echo $galArrayTitles[$i];?></span>
                            </a>
                            <?php
                        }
                        ?>
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

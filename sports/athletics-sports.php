<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Athletics"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/sports/athletics.jpg';
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
            <p>Founders' Sports Day is the highlight of the Athletics season. Held on the majestic MCG, it has witnessed many fine budding champions. All Houses compete and Old Boys attend in great numbers for their annual relay and march pass. The winner of Cock House is usually decided on Founders' Day. Many historic trophies are presented by various dignitaries and the Principal. The Governor of the Punjab is our annual Chief Guest.</p>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img src="<?php echo $image_path;?>img/athletics/4.jpg" alt="" class="img-fluid" style="width: 100%; margin-bottom: 12px;">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <img src="<?php echo $image_path;?>img/athletics/5.jpg" alt="" class="img-fluid" style="width: 100%;">
                    <p style="text-align: center;">Founders' Day Athletics circa 1936</p>
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

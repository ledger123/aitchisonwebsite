<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Pastoral Care"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/boarding.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="boarding-houses">Boarding</a></li>
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
        <div class="col-lg-9 col-md-12 col-sm-12 mb-3">

            <p>Aitchison boarding has a strong presence of adult support for boys of all ages. A highly qualified school counselor is also available for private consultations and regularly talks to groups of boys about topics such as: well-being, self-esteem, character formation, making friends and coping with challenges. Our leadership program emphasises positive traits of leadership and self-discipline ably supported by visiting specialist guest speakers.</p>
            <p>&nbsp;</p>
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <img src="<?php echo $image_path;?>newsletter/news/images/boarding-pastoral-care-430.jpg" width="600" height="400" alt="image" class="img-fluid"><br>
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

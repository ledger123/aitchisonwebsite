<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Pastoral Care"; include_once($path."header-includes.php");

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
        <div class="col-lg-9 col-md-12 col-sm-12 mb-3">

            <p>Aitchison boarding has a strong presence of adult support for boys of all ages. A highly qualified school counselor is also available for private consultations and regularly talks to groups of boys about topics such as: well-being, self-esteem, character formation, making friends and coping with challenges. Our leadership program emphasises positive traits of leadership and self-discipline ably supported by visiting specialist guest speakers.</p>
            <p>&nbsp;</p>
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <img src="<?php echo $image_path;?>newsletter/news/images/boarding-pastoral-care-430.jpg" alt="image" class="img-fluid" style="width: 100%;"><br>
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

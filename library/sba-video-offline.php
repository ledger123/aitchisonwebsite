<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "My Library"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/sba-library.jpg';

?>

<style>

.item {
    width: 100%;
    display: inline-block;
}

.alogo {
    display: inline-block;
    position: relative;
}

.acontents {
    display: inline-block;
    position: absolute;
    padding: 15px;
    vertical-align: top;
}


.acontents .card-title {
    text-transform: uppercase;
}

hr {
    width: 120px;
    background-color: #ffc845;
    margin-left: auto;
    margin-right: auto;
    border: 2px solid #ffc845;
    border-radius: 2px;
    opacity: unset;
    margin-top: 1rem;
}


.card-body {
    padding: 0;
}

.card a {
    padding: 0;
    box-shadow: 0.1em 0.1em 0.3em rgba(0, 0, 0, 0.3);
}

.card a:hover {
    box-shadow: 0.1em 0.1em 0.7em rgba(0, 0, 0, 0.3);
}

.alogo img {
    height: 170px;
}

@media(max-width: 425px) {

        
    .alogo img {
        height: 100%;
    }

    .acontents {
        position: initial;
    }

}

</style>

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
                    <li class="breadcrumb-item active" aria-current="page"><a href="about-us">School</a></li>
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
            
        <h3>SBA Video</h3>

        <div class="text-center p-lg-3 p-md-3 p-xs-2">
            <video autoplay="autoplay" poster="../videos/posteer/sba-libraray.jpg" controls="" muted="muted" style="height: 650px; transform: translate3d(0px, 0px, 0px);">
                <source src="../videos/sba-libraray.mp4" type="video/mp4">
                <div class="fsError">Your web browser does not support the<video>tag.</video></div>
            </video>
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

<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Sporting Philosophy"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v2.jpg';
?>

<style>
    .athlete-content {
        text-align: center !important; font-size: 16px; line-height: 2.0em;
    }
    .athlete-content p {
        text-align: center;
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="sports">Sports</a></li>
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
            <div class="athlete-content" style="">
                <h4>Athlete's Prayer:</h4>
                <p>God, let me play well but fairly.</p>
                <p>Help me to learn something that matters</p>
                <p>once the game is over.</p>
                <p>Let competition make me strong but never hostile.</p>
                <p>Always let me help my opponent up.</p>
                <p>Never catch me rejoicing in the adversity of others.</p>
                <p>If I know victory, allow me to be happy; if I am denied, keep me from envy.</p>
                <p>Remind me that sports are just games.</p>
                <p>If through athletics I set an example,</p>
                <p>let it be a good one.</p>
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

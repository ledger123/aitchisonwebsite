<!DOCTYPE html>
<html>
<?php
include_once("../path-settings.php");

$title = "Points of Entry into Aitchison for 2024-25"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v6.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="admissions-info">Admissions</a></li>
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
            <p><strong>Junior School</strong> offers entry for boys to K1 (boarders only), K2 (boarders & day), & K6 (boarders only).</p>
            <p><strong>Prep School</strong> offers general entry for boys to E2 (Grade 7 – day and boarding), M1 (Grade 8 – boarders only) & M2 (Grade 9 – boarders only).</p>
            <p><strong>Senior School</strong> offers two points of entry: C1 (to study IGCSE or FBISE Matric for day and boarding) and H1 (to study Cambridge AS Level or FBISE F.Sc, Pre-Medical for day and boarding). Limited places for Internationals are based on Cambridge or other acceptable curricula.</p>
            
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
<!DOCTYPE html>
<html>

<?php

include_once("../path-settings.php");

$title = "AJ Science Innovation Centre"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/admissions/banner.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="ac-academics">Academics</a></li>
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

            <p>Science Innovation encourages senior boys to explore AI Robotics and Programming, Astronomy (Astrophysics), Environmental Science, and Principles of Biochemistry. Aitchison is committed to promoting curiosity beyond the formal curriculum. The A.J Innovation Centre is a dedicated building for these purposes. Boys may pursue these interests in spare lessons and after school. The Innovation Program is particularly useful for boys wishing to assemble resumes for science and technology based courses at university level.</p>
            <br/>

            <p>
                <img alt="" class="img-fluid" src="../newsletter/news/images/15-generosity-helps-1101.jpg" style="width: 100%; display: block; margin-left: auto; margin-right: auto;">
            </p>

            <p><img alt="" class="img-fluid" src="../newsletter/news/images/16-generosity-helps-1101.jpg" style="width: 100%; display: block; margin-left: auto; margin-right: auto;"></p>


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

<!-- tosrus -->
<script src="../resources/js/jquery.tosrus.min.all.js"></script>
<script src="../resources/js/photo-gallery-jquery.js"></script>


</body>

</html>
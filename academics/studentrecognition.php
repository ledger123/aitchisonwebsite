<!DOCTYPE html>
<html>


<?php

include_once("../path-settings.php");

$title = "Student Recognition"; include_once($path."header-includes.php");

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

            <p>Aitchison recognises the achievements of boys at all year levels. The Principal's High Achievers' Tea Party is held at the Principal's Bungalow and is attended by many hundreds of boys and their families. Major subject prizes are awarded at our Founders' Academic Day held in March. Throughout the course of the year, boys are recognised in school assemblies -mostly whole school assemblies on Friday when traditional uniform and turbans are worn.</p><p>&nbsp;</p>
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <img src="<?php echo $image_path;?>newsletter/news/images/student-recognition-430.jpg" width="600" height="400" alt="img" class="img-fluid"><br>
                </div>
                <div style="padding-top: -10px;padding-bottom: -15px;">
                    <p style="text-align: center;">The Principal addresses parents at the High Achievers' Tea Party</p></div>
            </div>
            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <img src="<?php echo $image_path;?>newsletter/news/images/student-recognition-432.jpg" width="600" height="400" alt="img" class="img-fluid"><br>
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

<!-- tosrus -->
<script src="../resources/js/jquery.tosrus.min.all.js"></script>
<script src="../resources/js/photo-gallery-jquery.js"></script>


</body>

</html>
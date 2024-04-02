<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Leading Staff"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
//$banner_url = $path.'resources/assets/images/banners/school/about.jpg';

$page_header = $title;
?>

<body>

<?php include_once ($path.'logo-page-banner.php'); ?>

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
    </div>
</div>


<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- Left Area -->
        <div class="col-lg-9 col-md-12 col-sm-12">

            <h3>Academic</h3>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/hmss-v2.jpg" class="img-fluid">
                    </div>
                    <div style="min-height: 60px; overflow: hidden;"><strong>Amina&nbsp;Kamran</strong><br>Head of Senior School and Leading Head of School</div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/hmps.jpg" class="img-fluid">
                    </div>
                    <div style="min-height: 60px; overflow: hidden;"><strong>Raja Ashfaq Ahmad</strong><br>Head of Prep School</div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/hmjs-v1.jpg" class="img-fluid">
                    </div>
                    <div style="min-height: 60px; overflow: hidden;"><strong>Fatima Mubeen</strong><br>Head of Junior School</div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/dhmss.jpg" class="img-fluid">
                    </div>
                    <div style="min-height: 60px; overflow: hidden;"><strong>Dr. Muhammad Kamran</strong><br>Deputy Headmaster Senior School</div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/dhmps-2.jpg" class="img-fluid">
                    </div>
                    <div style="min-height: 60px; overflow: hidden;"><strong>Tariq Jamil</strong><br>Deputy Headmaster Prep School</div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/houpjs.jpg" class="img-fluid">
                    </div>
                    <div style="min-height: 60px; overflow: hidden;"><strong>Farzana Mehmood</strong><br>Head of Upper Primary <br>&nbsp; <br>&nbsp;</div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/holpjs.jpg" class="img-fluid">
                    </div>
                    <div style="min-height: 60px; overflow: hidden;"><strong>Sara Malik</strong><br>Head of Lower Primary <br>&nbsp; <br>&nbsp;</div>
                </div>
            </div>
            <hr>


            <h3>Administration</h3>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/bursar.jpg" alt="" class="img-fluid">
                        <div><strong>Khalid&nbsp;Mohammad&nbsp;Noon</strong><br>Bursar</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/hr.jpg" alt="" class="img-fluid">
                        <div><strong>Waqar Noor Khan</strong><br>Head of HR </div>
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

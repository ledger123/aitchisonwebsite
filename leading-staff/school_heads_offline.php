<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Leading Staff"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
?>

<style>
    .titile {
        font-size: 26px; 
        color: #07294d; 
        text-decoration: underline; 
        margin-bottom: 0; 
        padding-bottom: 10px;
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

            <h2 class="titile">School Heads</h2>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/hmss-v2.jpg" class="img-fluid">
                        <div style="min-height: 60px; overflow: hidden;"><strong>Amina&nbsp;Kamran</strong><br>Headmistress Senior School & Leading Head</div>
                    </div>
                    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/hmps.jpg" class="img-fluid">
                        <div style="min-height: 60px; overflow: hidden;"><strong>Raja Ashfaq Ahmad</strong><br>Head of Prep School</div>
                    </div>
                    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/hmjs-v2.jpg" class="img-fluid">
                        <div style="min-height: 60px; overflow: hidden;"><strong>Fatima Mubeen</strong><br>Head of Junior School</div>
                    </div>
                    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/dhmss.jpg" class="img-fluid">
                        <div style="min-height: 60px; overflow: hidden;"><strong>Dr. Muhammad Kamran</strong><br>Deputy Headmaster Senior School</div>
                    </div>
                    
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/dhmps.jpg" class="img-fluid">
                        <div style="min-height: 60px; overflow: hidden;"><strong>Muhammad Tariq Jamil</strong><br>Deputy Headmaster Prep School</div>
                    </div>
                    
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/department-heads/kashifa-kalsoom.jpg" class="img-fluid">
                        <div style="min-height: 60px; overflow: hidden;"><strong>Kashifa Kalsoom</strong><br>Head of Upper Primary <br>&nbsp; <br>&nbsp;</div>
                    </div>
                    
                </div>

                
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/holpjs-2.jpg" class="img-fluid">
                        <div style="min-height: 60px; overflow: hidden;"><strong>Bushra Munir</strong><br>Head of Lower Primary <br>&nbsp; <br>&nbsp;</div>
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

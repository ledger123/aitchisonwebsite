<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Boarding Handbook"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/boarding.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="boarding-houses">Boarding</a></li>
                </ol>
            </nav>

        </div>
    </div>
</div>




<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- Left Area -->
        <div class="col-lg-8 col-md-12 col-sm-12 mt-5 mb-3">

            <a href="<?php echo $image_path;?>school_doc/2021-22/boarding-handbook-2021-22-v2.pdf" target="_blank"><button type="button" class="btn btn-primary btn-lg">Click here to download Boarding Handbook</button> </a>

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

<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Archives"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/history.jpg';
$banner_url = $path.'resources/assets/images/banners/school/about.jpg';	

$page_header = "Archives";
?>

<body>

<?php include_once ($path.'logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>

<div style="background-color: #ffc845;">
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
    <div class="row pt-5">

        <!-- Left Area -->
		<div class="col-lg-9 col-md-12 col-sm-12">
			<?php /*?><div class="page-title">
                <h1><?php echo $title; ?></h1>
            </div><?php */?>

		</div>
		<div class="col-lg-3 col-md-6 col-sm-12 text-center news-links">
            <?php include_once ('right-panel-links.php'); ?>
        </div>	
        
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

<!DOCTYPE html>
<html>
<?php

include_once("path-settings.php");

$path = '';

$title = "Photo of the Week"; include_once("header-includes.php");

$banner_url = $path.'resources/assets/images/banners/contacts.jpg';
$page_header = $title;
?>

<body>
<?php include_once ($path.'logo-page-banner.php'); ?>

<?php include_once("mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">

        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Photo of the Week</li>
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
			<?php /*?><h3 style="text-align: center;font-size: 18px; font-weight: bold;">K&N's Boarding House nearing completion for August 20 opening</h3><?php */?>
            <div class="text-center">
                <img src="<?php echo $image_path2; ?>img/photo-of-week/photo-20221003.jpg" class="img-fluid" alt="Photo of the Week" style="margin: auto;">
                <div style="font-size: 15px; margin-top: 10px;"></div>
            </div>
        </div>
        <!-- End Left Area -->

        <!-- Right Area -->
        <div class="col-lg-3 col-md-6 col-sm-12 text-center news-links">

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
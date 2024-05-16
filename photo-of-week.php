<!DOCTYPE html>
<html>
<?php

include_once("path-settings.php");

$path = '';

$title = "Photo of the Week"; include_once("header-includes.php");

$banner_url = $path.'resources/assets/images/banners/contacts.jpg';
$page_header = $title;
?>
<style>
    .block{
        position: relative;
    }
    .block div {
        text-align: center;
    }
</style>
<body>
<?php include_once ('new-logo-page-banner.php'); ?>

<?php include_once("mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">page</li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div></div>
        </div>
    </div>
</div>



<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- Left Area -->
        <div class="col-lg-12 col-md-12 col-sm-12">
			<h3 style="text-align: center;font-size: 16px; font-weight: bold;">Aitchison Celebrates Acceptances to Top-ranked US Universities</h3>

            <p style="text-align: center; ">Click <a href="news-2610-aitchison-celebrates-acceptances-to-top-ranked-us-universities" target="_blank" style="color: blue;">here</a> for more information:</p>
            <div class="text-center block" style="text-wrap: wrap;">
                <figure>
                    <a href="news-2610-aitchison-celebrates-acceptances-to-top-ranked-us-universities" target="_blank">
          	            <img src="<?php echo $image_path2; ?>img/photo-of-week/photo-20240516.jpg" class="img-fluid" alt="Photo of the Week" style="margin: auto; width: 850px; height: auto;">
                    </a>
                </figure>
                
            </div>

        </div>
        <!-- End Left Area -->

        <!-- Right Area -->
        <?php /*?><div class="col-lg-4 col-md-6 col-sm-12 text-center news-links">

        </div><?php */?>
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
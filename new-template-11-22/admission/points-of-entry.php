<!DOCTYPE html>
<html>
<?php
include_once("../path-settings.php");

$title = "Points of Entry into Aitchison for 2023-24"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v6.jpg';
$page_header = "Points of Entry into<br>Aitchison for 2023-24";
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="admissions-info">Admissions</a></li>
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
            <p><strong>Junior School</strong> offers entry for boys to K1, K3 and K6 (boarders only), K2 (day only).</p>
            <p><strong>Prep School</strong> offers general entry for boys to E2 (Grade 7 day and boarding).</p>
            <p><strong>Senior School</strong> offers two points of entry: C1 (IGCSE or Matric for day and boarding) and H1 (AS Level and F.Sc for day and boarding). International is Cambridge AS Level. National is Aga Khan F.Sc with entries based on performance in Matric or other acceptable curriculum.</p>
            <p>By October each year, the College announces which grades are open for upcoming admissions. Strict class sizes are adhered to throughout the school.</p>
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
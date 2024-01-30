<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "My Library"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/sba-library.jpg';


$data = [
         
    // ["url" => 'https://podcasters.spotify.com/pod/show/b-j-sadiq/episodes/Seven-Ages-of-Man-by-William-Shakespeare-e2822uu', 'title' => 'Literary Pearls',
    // 'contents' => 'The podcast was set up by British Pakistani writer, biographer, journalist and poet, B.J. Sadiq . He is a Cambridge University Alumni, a prolific columnist and a former World Bank Advisor.',
    // 'imgsrc' => '../img/library/h.jpg'],          

];


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
            
            <h3>Library Hours</h3>
            <p>Syed Babar Ali Library (SBA)  Library will remain open in following days and hours.</p>

            <table class="table" style="width: auto">
                <tr><td>Monday - Thursday:</td><td>7:30 am to 5:00 pm</td></tr>
                <tr><td>Friday:</td><td>7:30:00 am to 12:00 pm</td></tr>
                <tr><td>Sat:</td><td>10:00 am to 9:30 pm</td></tr>

            </table>

            <p>The Library shall remain closed on Sundays and other public holidays.</p>

            <p><strong>Note: Library hours may be subject to change.</strong></p>

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

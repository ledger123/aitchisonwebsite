<!DOCTYPE html>
<html>

<?php
include_once("../path-settings.php");

$title = "International Fee Schedule"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v6.jpg';
?>

<style>
    .custom {
        font-family: 'Lato', sans-serif;
        width: 400px;
        margin-left: 25px;
    }
</style>

<body>
<?php include_once ($path.'top-menu-bar.php'); ?>

<?php include_once ($path.'logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>





<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- Left Area -->
        <div class="col-lg-8 col-md-12 col-sm-12">
            <table class="table table-bordered">
                <tbody>
                <tr style="background-color: #036; color: #fff;">
                    <th colspan="2">Annual Fee - Tuition &amp; Boarding</th>
                </tr>
                <tr>
                    <td>Fifteen Thousand US Dollars</td><td>15,000</td></tr>
                </tbody>
            </table>
        </div>
        <!-- End Left Area -->

        <!-- Right Area -->
        <div class="col-lg-4 col-md-6 col-sm-12 text-center news-links">
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
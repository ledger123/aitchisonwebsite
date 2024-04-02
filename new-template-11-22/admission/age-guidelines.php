<!DOCTYPE html>
<html>


<?php

include_once("../path-settings.php");

$title = "Age Guidelines for Admissions 2023-24"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v6.jpg';
$page_header = "Age Guidelines<br/>for Admissions 2023-24";
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
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                    <tr class="table-dark">
                        <th style="text-align:center;">Year Level</th>
                        <th style="text-align:center;">Date of Birth</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Year 1 (K1)</td>
                        <td>June 1, 2017 – May 31, 2018 inclusive</td>
                    </tr>
                    <tr>
                        <td>Year 2 (K2)</td>
                        <td>June 1, 2016 – May 31, 2017 inclusive</td>
                    </tr>
                    <tr>
                        <td>Year 3 (K3)</td>
                        <td>June 1, 2015 – May 31, 2016 inclusive</td>
                    </tr>
                    <tr>
                        <td>Year 6 (K6)</td>
                        <td>June 1, 2012 – May 31, 2013 inclusive</td>
                    </tr>
                    <tr>
                        <td>Year 7 (E2)</td>
                        <td>June 1, 2011 – May 31, 2012 inclusive</td>
                    </tr>
                    <tr>
                        <td>Year 10 (C1)<br><strong>O Level (First Year)</strong></td>
                        <td>June 1, 2008 – May 31, 2009 inclusive</td>
                    </tr>
                    </tbody>
                </table>
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
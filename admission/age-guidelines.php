<!DOCTYPE html>
<html>


<?php

include_once("../path-settings.php");

$title = "Age Guidelines for Admissions 2024-25"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v6.jpg';
$page_header = $title;
?>

<body>
<?php include_once ($path.'new-logo-page-banner.php'); ?>

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

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div></div>
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
                    <tr>
                        <th style="border-bottom: 1px solid #000; background:#369; color:#FFFFFF;text-align:center;">Year Level</th>
                        <th style="border-bottom: 1px solid #000; background:#369; color:#FFFFFF;text-align:center;">Date of Birth</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Year 1 (K1)</td>
                        <td>June 1, 2018 &ndash; May 31, 2019 inclusive</td>
                    </tr>
                    <tr>
                        <td>Year 2 (K2)</td>
                        <td>June 1, 2017 &ndash; May 31, 2018 inclusive</td>
                    </tr>
                    <?php /*
                    <tr>
                        <td>Year 3 (K3)</td>
                        <td>June 1, 2015 &ndash; May 31, 2016 inclusive</td>
                    </tr>
                    

                            <tr>
                                <td>Year 4 (K4)</td>
                                <td>June 1, 2014 &ndash; May 31, 2015 inclusive</td>
                            </tr>
                            <tr>
                                <td>Year 5 (K5)</td>
                                <td>June 1, 2013 &ndash; May 31, 2014 inclusive</td>
                            </tr>
                    */?>
                    <tr>
                        <td>Year 6 (K6)</td>
                        <td>June 1, 2013 &ndash; May 31, 2014 inclusive</td>
                    </tr>

                    <tr>
                        <td>Year 7 (E2)</td>
                        <td>June 1, 2012 &ndash; May 31, 2013 inclusive</td>
                    </tr>
                    
                    <tr>
                        <td>Year 8 (M1)</td>
                        <td>June 1, 2011 &ndash; May 31, 2012 inclusive</td>
                    </tr>
                    <tr>
                        <td>Year 9 (M2)</td>
                        <td>June 1, 2010 &ndash; May 31, 2011 inclusive</td>
                    </tr>
                    
                    <tr>
                        <td>Year 10 (C1)<br><strong>O Level/Matric (First Year)</strong></td>
                        <td>June 1, 2009 &ndash; May 31, 2010 inclusive</td>
                    </tr>
                    <?php /*
                            <tr>
                                <td>Year 11 (C2)<br><strong>O Level (Second Year)</strong></td>
                                <td>June 1, 2007 &ndash; May 31, 2008 inclusive</td>
                            </tr>
                    */?>

                    <tr>
                        <td>Year 12 (H1)<br><strong>A Level (First Year)</strong></td>
                        <td>June 1, 2007 &ndash; May 31, 2008 inclusive</td>
                    </tr>

                    <?php /*
                            <tr>
                                <td>Year 13 (H2)<br><strong>A Level (Second Year)</strong></td>
                                <td>June 1, 2005 &ndash; May 31, 2006 inclusive</td>
                            </tr>
                      */?>
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
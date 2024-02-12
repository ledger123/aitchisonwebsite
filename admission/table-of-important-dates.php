<!DOCTYPE html>
<html>

<?php

include_once("../path-settings.php");

$title = "Table of Important Dates for entry 2024-25"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v6.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="admissions-info">Admissions</a></li>
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
            <div class="table-responsive">
                <table class="table table-bordered" style="width: 100%;">
                    <thead>
                    <tr style="background-color: #293594;color: #FFF;">
                        <th style="text-align: center; width: 70%;">Events</th>
                        <th style="text-align: center; width: 30%;">Important Dates</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php /*
                    <tr>
                        <td>Fee submission for K1 to E2 &amp; C1/Matric (Except K3)</td>
                        <td style="text-align: center;">May, 2022</td>
                    </tr>
                    */?>
                    <tr>
                        <td>Deadline for application submission for Day Students</td>
                        <td style="text-align: center;">30<sup>th</sup> November, 2023</td>
                    </tr>

                    <tr>
                        <td>Deadline for application submissions for Boarding Students</td>
                        <td style="text-align: center;">31<sup>st</sup> December, 2023</td>
                    </tr>


                    <tr>
                        <td>Medical and Age Testing</td>
                        <td style="text-align: center;">January, 2024</td>
                    </tr>
                    <tr>

                        <td>Test date for all age groups</td>
                        <td style="text-align: center;">May, 2024</td>
                    </tr>
                    <?php /*?><tr>
                        <td>Special Classes commence for C1/Matric boarders only</td>
                        <td style="text-align: center;">August 1 – 19, 2022</td>
                    </tr>
                    <tr>
                        <td>Interviews of shortlisted candidates AS/F.Sc &amp; FA
                            <ul style="list-style: disc !important; padding-left: 30px;">
                                <li>Medicals and Boarding orientation</li>
                            </ul>
                        </td>
                        <td align="center">August 2022</td>
                    </tr><?php */?>
                    <tr>
                        <td><p>Parents will be duly notified, if interview required. International interviews may be held via zoom.</p></td>
                        <td style="text-align: center;">May, 2024</td>
                    </tr>
                    <?php /*?><tr>
                        <td>Letters of Offer for AS/F.Sc/FA after submission of grades</td>
                        <td style="text-align: center;">August 2022</td>
                    </tr><?php */?>
                    <tr>
                        <td>Letters of Offer sent out for all age groups</td>
                        <td style="text-align: center;">May, 2024</td>
                    </tr>
                    <tr>
                        <td>Deadline for acceptance of the offer</td>
                        <td style="text-align: center;">May, 2024</td>
                    </tr>
                    <tr>
                        <td>Fee submission for all age groups </td>
                        <td style="text-align: center;">May, 2024</td>
                    </tr>
                    <tr>
                        <td>Deadline for application submission AS and FSc</td>
                        <td style="text-align: center;">30<sup>th</sup> June, 2024</td>
                    </tr>
                    <tr>
                        <td>Interviews of shortlisted candidates Cambridge AS Level & FSc</td>
                        <td style="text-align: center;">August, 2024</td>
                    </tr>
                    <tr>
                        <td>Letters of Conditional Offer for Cambridge AS Level & FSc</td>
                        <td style="text-align: center;">August, 2024</td>
                    </tr>
                    <tr>
                        <td>Letters of Confirmation for Cambridge AS Level & FSc, after submission of CAIEs grades</td>
                        <td style="text-align: center;">August, 2024</td>
                    </tr>
                    <tr>
                        <td>Regular school start for all classes</td>
                        <td style="text-align: center;">August, 2024</td>
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
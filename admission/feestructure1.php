<!DOCTYPE html>
<html>

<?php
include_once("../path-settings.php");

$title="Fee Structure 2023-24";
include_once($path."header-includes.php");

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
            <div align="center" class="table-responsive" style="overflow-x:auto;">
                <table align="center" class="fee-table table table-bordered" style="width:80%; min-width: 300px;">
                    <tbody>
                    <tr style="background-color: #293594; color: #FFF;">
                        <th style="width: 33%; min-width: 155px; vertical-align: middle; text-align: center; white-space: nowrap;">Classes</th>
                        <th style="width: 33%; min-width: 110px; vertical-align: middle; text-align: center; white-space: nowrap;">Tuition Fee <br> (per month)</th>
                        <th style="width: 34%; min-width: 149px;vertical-align: middle; text-align: center; white-space: nowrap;">Boarding Charges<br />
                            (per month)</th>
                    </tr>
                    <tr>
                        <td style="text-align: left;">K1, K2, K3, K4, K5</td>
                        <td style="text-align: center;">55,900</td>
                        <td style="text-align: center;">59,300</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">K6, E2, M1</td>
                        <td style="text-align: center;">61,300</td>
                        <td style="text-align: center;">63,600</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; white-space: nowrap;">9th, 10th, M2, C1, C2</td>
                        <td style="text-align: center;">67,700</td>
                        <td style="text-align: center;">68,400</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Fsc1, Fsc2, H1, H2</td>
                        <td style="text-align: center;">77,500</td>
                        <td style="text-align: center;">70,700</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <h3 align="center">Other Charges</h3>

            <div align="center" class="table-responsive" style="overflow-x:auto;">
                <table align="center" class="fee-table table table-bordered" style="width:80%; min-width: 300px;">
                    <tbody>
                    <tr style="background-color: #293594; color: #FFF;">
                        <th style="width: 33%; min-width: 155px; vertical-align: middle; text-align: center; white-space: nowrap;">Particulars</th>
                        <th style="width: 33%; min-width: 110px; vertical-align: middle; text-align: center; white-space: nowrap;">Amount (Rs)</th>
                        <th style="width: 34%; min-width: 149px;vertical-align: middle; text-align: center; white-space: nowrap;">Remarks</th>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Transportation</td>
                        <td style="text-align: center;">15,000</td>
                        <td style="text-align: center;">Optional</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Riding Fee</td>
                        <td style="text-align: center;">12,000</td>
                        <td style="text-align: center;">Optional</td>
                    </tr>
                    <tr>
                        <td style="text-align: left; white-space: nowrap;">Arena Polo</td>
                        <td style="text-align: center;">12,000</td>
                        <td style="text-align: center;">Optional</td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">Marksmanship</td>
                        <td style="text-align: center;">6,000</td>
                        <td style="text-align: center;">Optional</td>
                    </tr>
                    </tbody>
                </table>
            </div>


            <p>&nbsp;</p>
            <p>Fee and charges are amended anuually by Board decision.</p>
            <p>NTN: 4199854-5</p>
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
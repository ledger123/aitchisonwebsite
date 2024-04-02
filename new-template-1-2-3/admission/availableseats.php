<!DOCTYPE html>
<html>

<?php
include_once("../path-settings.php");

$title="Estimated Available Seats";
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
            <h4 class="text-center"></h4>
            <div class="table-responsive">
                <table class="table table-bordered text-center">
                    <thead>
                        <tr style="background-color:#293594;color:#FFF;">
                            <th>Sr.</th>
                            <th>Grade</th>
                            <th>Day Boys</th>
                            <th>Boarders</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>K1</td>
                            <td>-</td>
                            <td>30</td>
                            <td>30</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>K2</td>
                            <td>196</td>
                            <td>-</td>
                            <td>196</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>K3</td>
                            <td>-</td>
                            <td>6</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>K6</td>
                            <td>&nbsp;</td>
                            <td>6</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>E2</td>
                            <td>48</td>
                            <td>10</td>
                            <td>58</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>C1/Matric</td>
                            <td>5</td>
                            <td>20</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>H1</td>
                            <td>20</td>
                            <td>20</td>
                            <td>40</td>
                        </tr>
                        <tr>
                            <th colspan="2">Total:</th>
                            <th>269</th>
                            <th>92</th>
                            <th>361</th>
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
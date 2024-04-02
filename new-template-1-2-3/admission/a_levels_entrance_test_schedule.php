<!DOCTYPE html>
<html>

<?php

include_once("../path-settings.php");

$title = "Entrance Test Schedule"; 
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
			
            <div class="table-responsive">
                <table class="table table-bordered" style="width: 100%;">
                    <thead>
                    <tr style="background-color: #1b3e8f;color: #FFF;">
                      <th colspan="6" style="text-align: center;">Entrance Test Schedule for A Levels &amp; FSc (Federal Board)</th>
                      </tr>
                    <tr style="background-color: #1b3e8f;color: #FFF;">
                        <th style="text-align: center;">Date/Day</th>
                        <th style="text-align: center;">Subjects</th>
                        <th style="text-align: center;">Reporting Time</th>
                        <th style="text-align: center;">Pick-up Time </th>
                        <th style="text-align: center;">Duration</th>
                        <th style="text-align: center;">Venue</th>
                    </tr>
                    </thead>
                    <tbody>                    
                    <tr>
                        <td>Wednesday, 2<sup>nd</sup> August, 2023</td>
                        <td style="text-align: center;">English &amp; Mathematics</td>
                        <td style="text-align: center;">9:30 am</td>
                        <td style="text-align: center;">12:30 pm</td>
                      <td style="text-align: center;">1 hour each</td>
                        <td style="text-align: center;">Senior School</td>
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
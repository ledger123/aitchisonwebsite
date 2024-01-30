<?php
//header('Location: https://aitchison.edu.pk/admission/admissions-info');
//exit();
?>

<!DOCTYPE html>
<html>

<?php

include_once("../path-settings.php");

$title = "Application Forms"; include_once($path."header-includes.php");

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
            <div class="row mt-5">
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="col-lg-11 col-md-12 col-sm-12">
                        <div style="margin-bottom:10px;">
                            <span style="font-size:15px;">
                            <a class="btn btn-primary" href="https://aitchison.edu.pk/portal/data/2023-24/admissions/Admission-Form-2023-24-v4.pdf" style="width:100%;white-space:normal;max-width:100%;" rel="nofollow" target="_blank">Application Form 2023-24</a>
                            </span>
                        </div>
                        <?php if(false) { ?>
                        <div style="margin-bottom:10px;">
                            <span style="font-size:15px;">
                            <a class="btn btn-primary" href="https://aitchison.edu.pk/portal/data/2023-24/admissions/Matric-admission-form-2023-24.pdf" style="width:100%;white-space:normal;max-width:100%;" rel="nofollow" target="_blank">Application Form for Matriculation 2023-24</a>
                            </span>
                        </div>
                        <?php } ?>
                        <?php if(false) { ?>
                        <div style="margin-bottom:10px;">
                            <span style="font-size:15px;">
                            <a class="btn btn-primary" href="https://aitchison.edu.pk/portal/data/2022-23/admissions/FA-Admission-Form-2022-23-v5.pdf" style="width:100%;white-space:normal;max-width:100%;" rel="nofollow" target="_blank">Application Form For Intermediate (Arts/FA) 2022-23</a>
                            </span>
                        </div>
                        <?php } ?>
                        <p>&nbsp;</p>
                        <p>NTN: 4199854-5</p>
                    </div>
                </div>
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
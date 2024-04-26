<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "University Counseling"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="about-us">School</a></li>
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

            <p>Transitioning students into post schooling studies is now an indispensable part of a school's educational responsibility. Aitchison employs highly experienced counselors to handle US, UK (and other international) and National admissions. Our aims are to:</p>
            <ol style="list-style: decimal; line-height: 30px !important; padding-left: 25px; margin-left: 25px;">
                <li>Offer the latest information and accurate advice to enable students to identify the best university options and career pathways.</li>
                <li>Facilitate and streamline the application process for students into local and international universities.</li>
                <li>Assemble resumes and all documentation for college admissions.</li>
            </ol>
            <p>The College expects all boys to utilise this service. Aitchison's reputation among international universities is impeccable.</p>
            <div class="row" style="margin-top:20px; margin-bottom:20px;">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h3 class="mb-3" style="color: #00205b; text-transform: uppercase;">University Counseling Department (USA)</h3>
                    <p class="pl-5"><span class="paddingtop"><strong>Head of the USA Guidance & Counselling Department</strong></span><br/><strong>Ms Sarah Malik</strong><br/>
                        hodus@aitchison.edu.pk</p>

                    <p><span class="paddingtop"><strong>US Counselor</strong></span><br/><strong>Ms Sehar Saleemi</strong><br/>ssuscounselorss@aitchison.edu.pk</p>
                    <p><span class="paddingtop"><strong>US Counselor</strong></span><br><strong>Ms Tosheeba Sarwar</strong><br/>ssbusinessts@aitchison.edu.pk</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h3 class="mb-3" style="color: #00205b; text-transform: uppercase;">University Counseling Department (UK)</h3>
                    <p><span class="paddingtop"><strong>Head of All International & National Admissions</strong><br><span>(except US)</span></span><br/><strong>Dr Naila Burney Chughtai</strong><br/>naila.burney@aitchison.edu.pk</p>
                    <p><span class="paddingtop"><strong>For Canada and Australia</strong></span><br/><strong>Mr Hassan Gillani</strong><br/>hassan.gillani@aitchison.edu.pk</p>
                </div>

                <div>
                    <p>Please contact the Office Assistant on this email to book an appointment:<br/>
                        counselingassistant@aitchison.edu.pk</p>
                </div>
            </div>
            <div class="row" style="margin-top:20px; margin-bottom:20px;">
                <div class="col-lg-6 col-md-6 col-sm-12 ps-1 pe-1 pb-2">
                    <img src="<?php echo $image_path;?>/img/pageimages/cc-a-20230922.jpg" alt="" class="img-fluid">
                    <p class="text-center"><i>Dr Naila with students in the H2 Common Room.</i></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 ps-1 pe-1">
                    <img src="<?php echo $image_path;?>/img/pageimages/cc-c-20240426.jpg" alt="" class="img-fluid">
                    <p class="text-center"><i>US Counselors Ms Sarah and Ms Sahar with students in Barry Block.</i></p>
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

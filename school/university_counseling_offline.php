<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "University Counseling"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
?>
<style>
	.paddingtop	{
		margin-top: 10px;
		margin-bottom: 20px !important;
	}
	.h5color{
		color: #00205b;
	}
</style>
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

            <p>Transitioning students into post schooling studies is now an indispensable part of a school's educational responsibility. Aitchison employs highly experienced counselors to handle US, UK (and other international) and National admissions. Our aims are to:</p>
            <ol style="list-style: decimal; line-height: 30px !important; padding-left: 25px; margin-left: 25px;">
                <li>Offer the latest information and accurate advice to enable students to identify the best university options and career pathways.</li>
                <li>Facilitate and streamline the application process for students into local and international universities.</li>
                <li>Assemble resumes and all documentation for college admissions.</li>
            </ol>
            <p>The College expects all boys to utilise this service. Aitchison's reputation among international universities is impeccable.</p>
			<div class="row" style="margin-top:20px; margin-bottom:20px;">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<h5 class="h5color">University Counseling Department (USA)</h5>
					<p class="pl-5"><span class="paddingtop"><strong>Head of the USA Guidance & Counselling Department</strong></span><br>
						jamal.hussain@aitchison.edu.pk</p>
					<p><span class="paddingtop pt-4"><strong>Deputy Head US Admissions</strong></span><br>dhus@aitchison.edu.pk</p>
					<p><span class="paddingtop"><strong>Counselor US</strong></span><br>ssuscounselorss@aitchison.edu.pk</p>
					<p><span class="paddingtop"><strong>Counselor US</strong></span><br>sscounsellorah@aitchison.edu.pk</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<h5 class="h5color">University Counseling Department (UK)</h5>
					<p><span class="paddingtop"><strong>Head of All International & National Admissions</strong><br>(except US and University of Oxford)</span><br>naila.burney@aitchison.edu.pk</p>                     <p><span class="paddingtop"><strong>UK Counselor</strong></span><br>hassan.gillani@aitchison.edu.pk</p>
				</div>
			</div>
            <div class="row" style="margin-top:20px; margin-bottom:20px;">
				<div class="col-lg-6 col-md-6 col-sm-12">
                    <p><img src="<?php echo $image_path;?>/img/pageimages/cc-1-a-20230922.jpg" alt="" class="img-fluid"></p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p><img src="<?php echo $image_path;?>/img/pageimages/cc-a-20230922.jpg" alt="" class="img-fluid"></p>
                </div>
				<div class="col-lg-6 col-md-6 col-sm-12">
                    <p><img src="<?php echo $image_path;?>/img/pageimages/cc-b-20230922.jpg" alt="" class="img-fluid"></p>
                </div>
				<div class="col-lg-6 col-md-6 col-sm-12">
                    <p><img src="<?php echo $image_path;?>/img/pageimages/cc-2-c-20230922.jpg" alt="" class="img-fluid"></p>
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

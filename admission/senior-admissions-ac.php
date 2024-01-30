<!DOCTYPE html>
<html>
<?php
include_once("../path-settings.php");

$title = "Senior Admissions to Aitchison College 2024-25"; include_once($path."header-includes.php");

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
            <p><strong>Senior School</strong>&nbsp;entry to H1 (to study Cambridge AS Level or FBISE FSc&nbsp;(Pre-Medical) for day and boarding)&nbsp;accepted from <strong>May 1<sup>st</sup> to June 30<sup>th</sup>, 2024.</strong>&nbsp; Limited places for Internationals are based on Cambridge or other acceptable curriculum.&nbsp;</p>

            <p>Parents seeking a place for their son(s) should first read the&nbsp;<a href="https://aitchison.edu.pk/admission/admissions-info" style="color: blue;">Admissions</a>&nbsp;section of the College&#39;s website, where our policy and processes are explained, along with entry prerequisites for various entry levels. Parents can also access our&nbsp;<a href="https://aitchison.edu.pk/admission/admissions-faqs" style="color: blue;">FAQs</a><em>.</em>&nbsp;If there remain further queries, please contact our HR Department on Extension: 281&nbsp;or email:&nbsp;<span style="color: blue;"><strong>admission@aitchison.edu.pk.</strong></span> Given the very high interest in Aitchison, the College does not offer tours or admission appointments. Our website is particularly informative and visually&nbsp;helpful.</p>

            <p>Applications may be downloaded from our <a href="https://aitchison.edu.pk/admission/download-application-forms" style="color: blue;">Admissions</a> section and mailed to the College Admissions Office, Shahrah-e-Quaid-e-Azam, Lahore 54000 Pakistan, Ph: 0092-42-36317201-04. Your registration will be acknowledged as soon as possible. Please complete the Application Form accurately.</p>


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
<!DOCTYPE html>
<html>

<?php
include_once("../path-settings.php");

$title = "Guidance for Admissions"; include_once($path."header-includes.php");

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
            <ol style="padding-left: 20px; line-height: 1.8;">
                <li>
                    <p>The application forms for Class C1 &amp; H1/AS level International Boarders are available online. The Application Form with all other admission information can be downloaded from <span style="color:blue;">www.aitchison.edu.pk</span> (Admission Section).</p>
                </li>
                <li>
                    <p>The completed application form and the accompanying material should be submitted as soon as possible. Applicants will be selected purely on the merit of their academic results and suitability.</p>
                </li>
                <li><p>The attested hospital record of the applicant’s birth is essential along with copy of his passport. If the original hospital record of the applicants’ birth is not available, please obtain a duplicate copy certified by the present <strong>Medical Superintendent</strong> of the hospital where the applicant was born.</p></li>
                <li>
                    <p>Three recent passport size photographs of the applicant should be included.</p>
                </li>
                <li><p>Last three academic reports must be attached. <strong>Please forward the attached pro-forma to the boy’s school, with a request to post the completed copy as soon as possible so that it is with us before the closing date for applications.</strong></p></li>
                <li><p><strong>All boarders must have been vaccinated against standard infections including Covid 19 with evidence along with the application.</strong></p></li>
                <li>
                    <p><u>There are limited boarding places in C-1 &amp; H1 for International applicants who are presently studying overseas and have done so far at least 5 years. Annual International fee inclusive of boarding charges of USD 15,000 will apply The payment of fee will be in advance for a term i.e. August to December, January to April and May to August every year. All payments will be by Bank Drafts in favour of the Principal Aitchison College, Lahore or by wire transfer. Further details will be provided at the time of admission.</u></p>
                </li>
            </ol>

            <p>The processing of the applications starts as soon as we receive your paperwork. Therefore, please send the fully completed documents to us as soon as possible rather than waiting for the deadline of submission. Incomplete forms will not be accepted.</p>
            <p><strong>THE LAST DATE FOR RECEIPT OF APPLICATION IS: 5.00 p.m. ON MONDAY 30<sup>th</sup> MAY, 2022</strong></p>
            <br>
            <img src="<?php echo $image_path;?>images/signature/principal_signature_new.png" width="212" height="72">
            <br>
            Michael Thomson M.A., Dip. Ed., M.A.C.E
            <p>Principal</p>
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
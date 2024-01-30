<!DOCTYPE html>
<html>
<?php
include_once("../path-settings.php");

$title = "Admissions Policy & Process"; include_once($path."header-includes.php");

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
            <p>Aitchison College admits boys on the basis of academic and general suitability. The application process must be completed before a boy is considered an eligible candidate. Applications may only be made for one of the two enrollment categories (boarding or day) and not both. Entries into Junior, Prep and Senior are treated separately for admission purposes. Age criteria is followed strictly and there are no age waivers given. A boy suspected of being over-age will be medically assessed and an offer withdrawn should he be found over-age for his year of entry. No boy may appear more than once in a testing cycle. An offer of admission will also be automatically withdrawn if an application, transcript, reference or age document has been falsified in any way.</p>
            <p><strong>Test papers and results (Junior and Prep) are not shared and nor does the College discuss the performance of individual applicants. This is a condition of application.</strong> The College reserves the right to offer additional places to eligible students, at any time and at any year level, in order to reach full capacity. A boy who is offered a place in either Junior or Prep will have completed competitive admission tests and been interviewed before a final decision is made by the Principal. <strong>A boy seeking entry to Senior School must refer to <a href="procedure-and-requirements" style="color: blue;">Procedures and Requirements 2022</a> related to the particular year of entry (C1 or H1) and the chosen curriculum.</strong></p>
            <p>Boys who have been schooled in Lahore for more than 6 months are ineligible to apply for a boarding place in Junior or Prep. <strong>Aitchison's boarding is on a national scale. Conditional and limited bursaries are available to boys who qualify for admission from Baluchistan, FATA, Sindh, KPK, Azad Kashmir, Gilgit-Baltistan and Southern Punjab.</strong> </p>

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
<!DOCTYPE html>
<html>

<?php

include_once("../path-settings.php");

$title = "Admission Procedure & Requirements"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v6.jpg';
$page_header = $title;
?>

<body>
<?php include_once ($path.'logo-page-banner.php'); ?>

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
    </div>
</div>

<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- Left Area -->
        <div class="col-lg-9 col-md-12 col-sm-12">
            <p>Admissions are now only open for AS Level and FSc 2022-23. Applications for all other year levels for 2022-23 now closed. The requirements for other year levels entry 2023-24 will be posted October 2022.</p>
            <p><strong>Successful applicants for AS Level or F.Sc 2022-23 would normally have achieved a minimum of 6 A grades in not more than two attempts and no C grade in any subject. We will, however, consider other boys who bring similarly strong grades and exceptional talents in sports or co-curricular activities. As a guide, 85% in Matric is considered a minimum result or 70% with exceptional talents in sports or co-curricular activities.</strong></p>
            <p><a href="download-application-forms" target="_parent" style="color: blue; font-weight: bold">Application forms</a> to be taken now.</p>
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
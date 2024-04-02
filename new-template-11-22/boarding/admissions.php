<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Boarding Admissions"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/boarding.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="boarding-houses">Boarding</a></li>
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

            <p>Places for <strong>Full Boarding</strong> are <strong>normally</strong> offered on an annual basis to boys from K1 to C1, depending on availability and based on admission rules. Often our houses are full. The number of places is advertised at the time of the Admissions process as a guide only, although seats can become available with unexpected late withdrawals. Admission into AS Levels are based on stringent academic criteria and suitability and processed in late August after Cambridge results become available.</p>
            <p>Rules for admission vary: Junior boys are required to board for a minimum of 8 years and Prep School and Senior School boys for the duration of their time at school. No change of status is permitted in this category: meaning that a full time boarder cannot revert to being a weekly boarder or a day student. Places are highly competitive. We encourage top academics as well as those with broad range of talents.</p>
            <p><a href="international-enrolment" target="_blank"><strong><span style="color: blue;">International Boarding</span></strong></a>&nbsp;is available normally for senior school applicants who seek entry into O and A Levels. Strict conditions apply. Entry in lower boarding should be discussed with the Principal. An international boarder is a boy who has never studied in Pakistan or at least not for 12 years.</p>
        </div>
        <!-- End Left Area -->

        <!-- Right Area -->
        <div class="col-lg-3 col-md-6 col-sm-12 text-center news-links">
            <?php include_once ('right-panel-links.php'); ?>
        </div>
        <!-- End Right Area -->

        
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

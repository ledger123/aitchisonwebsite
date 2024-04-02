<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Pastoral Care and Counseling"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
$page_header = "Pastoral Care<br>and Counseling";
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="our-schools">Our Schools</a></li>
                </ol>
            </nav>

        </div>
    </div>
</div>



<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- Left Area -->
        <div class="col-lg-9 col-md-12 col-12 mb-3">

            <div class="row justify-content-center" style="margin-left: 0; margin-right: 0;">
                <div class="w-auto">
                    <p style="font-size: 18px; line-height: 1.3em; font-weight: bold; font-style: italic;">
                        “
                        If you think in years, plant rice, <br>
                        &nbsp;&nbsp;&nbsp;If you think in decades, plant trees, <br>
                        &nbsp;&nbsp;If you think in centuries, educate your children.&nbsp;”
                    </p>
                    <p class="text-end">(Chinese philosophy)</p>
                </div>
            </div>
            <div class="row" style="margin-left: 0; margin-right: 0;">

                <p style="padding-top: 3px; line-height: 1.8em;">
                    <img src="<?php echo $image_path;?>img/pcare-28102019.jpg" alt="" class="img-fluid rounded float-end ms-3 mb-1" style="width: 350px; height: auto; margin-top: 5px;">
                    Aitchison's dedicated teachers and medical staff are deeply committed to the welfare of our students. The College's 'Welfare Committees' in each school meet to discuss issues affecting boys and how best we can educate for positive outcomes. Two School Counselors/ Psychologists also play pivotal roles both as part of this committee and independently. A strongly integrated House system promotes sound group dynamics with an equal focus on the individual, so that all pupils feel safe and valued at school. Our approach to well-being is to be proactive.
                </p>

            </div>
            <div class="row" style="margin-left: 0; margin-right: 0;">
                <p style="padding: 10px 15px 0"><strong>The welfare of all pupils is based on the understanding of shared values.</strong> Our basic aim is to keep channels of communication open between students, teachers and parents so that we are able to communicate and educate with clarity. Regular Parent Gatherings and PT days assist in this.</p>
                <p style="padding: 0 15px;">Leadership programmes instill respect for the College and the vast array of individual talents within the cohort.</p><br>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 ms-auto me-auto">
                    <img src="<?php echo $image_path;?>img/pcare1.jpg" alt="" class="img-fluid img-rounded">
                </div>
            </div>

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
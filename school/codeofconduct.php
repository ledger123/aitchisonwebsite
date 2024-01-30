<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Aitchison Code of Conduct"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
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

            <p>The Aitchison College <em>Code of Conduct</em> applies to all members of the College Community, staff and students. It defines our expected standards of conduct across all facets of school life, day and residential. All members are responsible for sustaining high ethical standards both in the institution and the broader community. Aitchison values integrity, respect, diversity, freedom of enquiry and respectful expression, trust, honesty and fairness in all dealings. We strive to integrate these core values in our educational  life and daily conduct. Compliance with these standards is the basis upon which a person is a member of our educational community. Any major breach or consistent undermining of the Code's specific or intended purposes, including the appearance of misconduct or impropriety, will prompt quick intervention from the College Management and may lead to removal of the offending person(s).</p>
            <p>In particular, the College prohibits discrimination in any form based on race, religious creed, gender, medical, physical or mental condition, age or any other charactersitc protected by Law. Where such actions are found to occur, the College Management will act promptly to put an end to the misconduct, help prevent its recurrence and discipline those responsible as per its Policy and Rules. Lying, theft, cheating and examination malpractice are removable offences, especially for senior boys and all staff. Intimidating behaviour or threatening language is forbidden and the College will be severe on those who repeatedly ignore warnings. The relationship between staff and students must exhibit mutual respect that establishes a clear differentiation between the role of mentor and student, adult and child. All business dealings between the College and the wider community must be governed by integrity and honesty.</p>

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
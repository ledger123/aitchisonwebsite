<!DOCTYPE html>
<html>

<?php

include_once("../path-settings.php");

$title = "Overview"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/admissions/banner.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="ac-academics">Academics</a></li>
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

            <p>Aitchison has been a Cambridge school since 1935 and offers this curriculum in all three schools: Junior, Prep and Senior. We are also an official Cambridge Examination Centre. We also offer Aga Khan FSc and Matric, thus enabling boys to choose the most suitable curriculum for university and specialised courses.</p>
            <p>Aitchison has its own SAT Centre and is affiliated with the American College Board.</p>
            <p>Our Cambridge pedagogy is heavily influenced by international learner profiles and an explorative approach to teaching and learning. Classrooms are seen as dynamic places, although learning also takes place outside the classroom to expose students to practical and collaborative tasks.Teachers undertake regular professional development and there is a solid core of Cambridge Master Trainers in each of our schools. Academic departments are led by highly qualified and experienced men and women. All teachers possess a minimum Masters degree in their teaching discipline.</p>
            <p>Each Head in Junior, Prep and Senior School is assisted by a Deputy, Year Level Coordinators and Heads of Department with support staff. Junior School has Heads of Lower and Upper sections, acknowledging a separation between early childhood development and older student expectations.</p>
            <p>Boarders at Aitchison receive evening academic tutorials.</p>
            <div style="width: 90%;margin-left: auto; margin-right: auto;">
                <img src="<?php echo $image_path; ?>img/academics-overview-20201107.jpg" alt="High Academic Achievers" class="img-fluid" style="margin-top: 20px;">
                <p style="margin-top: 10px;">Principal and senior staff with high academic achievers placed in Harvard, Stanford, Dartmouth and Brown universities.</p>
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

<!-- tosrus -->
<script src="../resources/js/jquery.tosrus.min.all.js"></script>
<script src="../resources/js/photo-gallery-jquery.js"></script>


</body>

</html>
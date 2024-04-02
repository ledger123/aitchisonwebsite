<!DOCTYPE html>
<html>

<?php

include_once("../path-settings.php");

$title = "Oxford Summer Academy"; include_once($path."header-includes.php");

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

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12" align="justify">
                    <ul style="list-style: disc; padding-left: 20px; padding-top: 15px;">
                        <li><strong>Who the courses are for: </strong></li>
                        <li>Students aged 16-19 from anywhere in the world</li>
                        <li>Teenagers looking for an academic adventure</li>
                        <li>For highly motivated learners</li>
                    </ul>
                    <ul style="list-style: disc; padding-left: 20px; padding-top: 35px;">
                        <li><strong>What is offered? </strong></li>
                        <li>A taste of the university experience at Oxford </li>
                        <li>Academic study and elective courses </li>
                        <li>Small study groups with the best tutors </li>
                        <li>Social programmes and excursions </li>
                    </ul>
                    <ul style="list-style: disc; padding-left: 20px; padding-top: 35px;">
                        <li><strong>When and Where? </strong></li>
                        <li>At St. Edmund Hall, University of Oxford </li>
                        <li>In July every year </li>
                        <li>Offering two week and four week programmes </li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12" style="float: right;">
                    <img src="<?php echo $image_path;?>img/oxford-summer-academy.jpg" class="img-rounded" alt="OXFORD SUMMER ACADEMY" width="100%">
                </div>
            </div>
            <p>The Oxford Summer Academy is held every July at St Edmund Hall, Oxford University, and nearby Oxford International College. It is aimed at students aged 16-19 who are looking for an academic adventure during the summer holidays. It is an excellent preparation for Oxbridge or simply a bespoke experience for ambitious students seeking to study subjects that interest them. </p>
            <p>The Academy provides the best possible academic tuition and pastoral care. Every student is treated as an individual. Students are offered the chance to explore new subjects, experience university study, and visit Oxford, Cambridge and London.</p>
            <p>The Oxford Summer Academy is a complete package, offering academic tuition during the mornings, participation in electives during the afternoons, and a wide range of cultural activities and excursions on weekends and in the evenings.</p>
            <p>The major and minor academic options have clearly defined educational aims, objectives, syllabi and assessment criteria. The afternoon electives are designed to broaden students’ experience and lead to achievements that can enhance university applications. Teaching staff are graduates and tutors of Oxford and other world-class universities. Class sizes never exceed 6 and are often smaller. Interested students and parents should explore the website. </p>
            <p><span style="color: #0806C0; text-decoration: underline;"><strong>info@oxfordsummmer.com</strong></span><br>
                <br>
                Oxford Summer Academy<br>
                1 London Place OX41BD
            </p>
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
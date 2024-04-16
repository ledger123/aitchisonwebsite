<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "All Boys' Schooling"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
//$banner_url = $path.'resources/assets/images/banners/school/about.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="about-us">School</a></li>
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
            <div class="page-title">
                <h1>Benefits of Single-Sex Education for Boys</h1>
            </div>
            <p>Aitchison offers single-sex education that allows boys to learn in an environment specifically attuned to their needs.</p>
            <p>Young boys are encouraged to 'play and tumble' and develop through cooperative games. Staff promote classroom teaching that responds to tactile, kinesthetic learners with emphasis on visual, spatial and experiential learning. Single-sex education offers the opportunity to participate in a wider range of roles without facing gender stereotyping. Music, drama, debating and other areas flourish in boys’ schools without the pressure of competition or need for peer approval between genders. In appropriate settings, senior Aitchison boys enjoy a number of events and festivals throughout the year that also engage girls' participation.</p>
            <h3>CHOICES TO REFLECT INDIVIDUAL NEEDS</h3>
            <p>Neither coeducation nor single-sex education is necessarily better, although data indicates that academic and sporting achievements are generally higher in single-sex environments. Children have definite developmental needs and many follow similar trajectories. All must be treated as individuals. However, we believe that the structure we offer best suits boys.</p>
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
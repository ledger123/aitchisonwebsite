<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "An Aitchison Education"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/an-aitchison-education.jpg';
$page_header = $title;
?>

<body>
<?php include_once ($path.'new-logo-page-banner.php'); ?>

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

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div></div>
        </div>
    </div>
</div>

<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- Left Area -->
        <div class="col-lg-9 col-md-12 col-sm-12 mb-3">

            <p>Boys accepted into Aitchison College take part in a broad and challenging curriculum.While very good academic results are expected, so too is engagement with sports, clubs and activities. It is a condition of enrollment that boys are involved broadly and boldly with school life -in a very real sense they are risk takers. Central to this is the development of character, self-awareness and other non-scholastic qualities that unify these experiences, which provide the 'fuel' for honest reflection and an ability to appreciate the value and perspectives of others. What we share and do is anchored in positivism. </p>
            <p>For well over a century, Aitchison has produced leaders of all kinds and focused on the building of character. Originally a school for the sons of nobility, in its modern form the College is representative of Pakistan but no less committed to its foundation principles encapsulated in the motto: Perseverance Commands Success.</p>
            <p>Aitchison College may be defined as a blend in ritual and modern necessity. Its history speaks to each boy and commands respect. It inspires and delivers a strong message that each must play his part in a special, unfolding story. An Aitchison education is for life.</p>
            <div style="text-align: center; padding-top: 10px;"><img src="<?php echo $image_path;?>img/an_education.jpg" alt="" class="img-responsive" style="width: 100%; height: 100%"></div>
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

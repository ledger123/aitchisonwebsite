<!DOCTYPE html>
<html>

<?php

include_once("../path-settings.php");

$title = "AJ Science<br/>Innovation Centre"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/academics/aj-center.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="ac-academics">Academics</a></li>
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
        <div class="col-lg-9 col-md-12 col-sm-12">

            <p>Science Innovation encourages senior boys to explore AI Robotics and Programming, Astronomy (Astrophysics), Environmental Science, and Principles of Biochemistry. Aitchison is committed to promoting curiosity beyond the formal curriculum. The A.J Innovation Centre is a dedicated building for these purposes. Boys may pursue these interests in spare lessons and after school. The Innovation Program is particularly useful for boys wishing to assemble resumes for science and technology based courses at university level.</p>
            <br/>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" align="center">
                    <div id="gallerySLide" class="sgallery_area2">
                        <?php
                        $imgPath = $image_path."img/academics/aj-science-centre/";
                        $imgPathSmall = $image_path."img/academics/aj-science-centre/small/";

                        for ($i = 1; $i < 5; $i++) {
                            ?>
                            <a href="<?php echo $imgPath . $i . ".jpg"; ?>" title="">
                                <img class="gallery_img" src="<?php echo $imgPathSmall . $i . ".jpg"; ?>" alt="Image">
                                <span class="view_btn"></span>
                            </a>

                            <?php
                        }
                        ?>

                    </div>
                </div>
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





</body>

</html>
<!DOCTYPE html>
<html>


<?php

include_once("../path-settings.php");

$title = "A2 Level"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/admissions/banner.jpg';
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

            <p>Our final year A Level boys graduate from AS Level H1 into H2. H2 boys enjoy the privilege of classes, common room and university guidance in the Old Building and Aitchison Hall. This building is the most iconic structure in the College. It has been thoroughly upgraded for modern teaching and learning, while retaining its Victorian period features.  Boys graduating from Aitchison leave with an enhanced appreciation of the College's unique place in Pakistan.</p>

            <div class="text-center">
                <div id="gallerySLide" class="sgallery_area2">

                    <?php
                    $imgPath = $image_path."img/a2-level/";
                    $imgPathSmall = $image_path."img/a2-level/small/";

                    for ($i = 5; $i < 9; $i++) {
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
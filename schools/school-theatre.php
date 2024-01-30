<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Theatre"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/theatre.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="our-schools">Our Schools</a></li>
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
            <p>One of the greatest things theatre does is to redefine the words we use every day: such as; love, home, family, loyalty, honour, greed, envy, revenge, generosity..... Boys are encouraged to tackle challenging dramas, comedies and musicals that require outstanding collaboration between on-stage and backstage participants. These events are extremely well-attended and form lasting memories.&nbsp;<br></p>

            <p>&nbsp;</p>

            <div class="">
                <div id="gallerySLide" class="sgallery_area">

                    <?php
                    $imgPath = $image_path."img/drama/";
                    $imgPathSmall = $image_path."img/drama/small/";
                    //$titles = ["", "Robin Hood", "GOA", "GOA", "GOA", "Robin Hood", "Drama", "Death of a Salesman", "Unity Night", "Robin Hood"];

                    for ($i = 10; $i < 25; $i++) {
                        ?>
                        <a href="<?php echo $imgPath . $i . ".jpg"; ?>" title="Theatre">
                            <img class="gallery_img" src="<?php echo $imgPathSmall . $i . ".jpg"; ?>" alt="Theatre">
                            <span class="view_btn">Theatre</span>
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
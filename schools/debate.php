<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Debating"; include_once($path."header-includes.php");

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
            <blockquote style="width: fit-content; border-color: #369;">
                <p>“Freedom is hammered out on the anvil of discussion, dissent, and debate.”</p>
                <div class="text-end text-black-50">Hubert Humphrey</div>
            </blockquote>
            <p>&nbsp;</p>

            <div class="">
                <div id="gallerySLide" class="sgallery_area">

                    <?php
                    $imgPath = $image_path."img/pageimages/gallery/debating/";
                    $imgPathSmall = $image_path."img/pageimages/gallery/debating/small1/";

                    $imgArr = ['27', '28', '29', '30', '31', '1', '2', '3', '4', '5', '6', '9', '10', '16', '17', '18'];
                    foreach ($imgArr as $i) {
                        ?>
                        <a href="<?php echo $imgPath . $i . ".jpg"; ?>" title="Debating">
                            <img class="gallery_img" src="<?php echo $imgPathSmall . $i . ".jpg"; ?>" alt="image">
                            <span class="view_btn">Debating</span>
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
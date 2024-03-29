<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Aitchison Campus Schools"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/ps-school.jpg';
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

            <div class="row">
                <div class="col-sm-12">
                    <!--Content Area-->
                    <div class="row">
                        <div class="col-6">
                            <img src="<?php echo $image_path;?>img/campus-schools/campus-school-1.jpg" class="img-fluid" alt="Image" />
                        </div>
                        <div class="col-6">
                            <img src="<?php echo $image_path;?>img/campus-schools/campus-school-2.jpg" class="img-fluid" alt="Image" />
                        </div>
                    </div>
                </div>


                <div class="mt-5">
                    <div class="">
                        <div id="gallerySLide" class="sgallery_area">

                            <?php
                            $imgPath = $image_path."img/pageimages/gallery/campus-schools/";
                            $imgPathSmall = $image_path."img/pageimages/gallery/campus-schools/small/";

                            $imgArray = array("1", "2", "3", "4", "5", "6", "7");

                            foreach ($imgArray as $img) {
                                ?>
                                <a href="<?php echo $imgPath . $img . ".jpg"; ?>" title="Aitchison Campus Schools">
                                    <img class="gallery_img" src="<?php echo $imgPathSmall . $img . ".jpg"; ?>" alt="Image">
                                    <span class="view_btn">Aitchison Campus Schools</span>
                                </a>

                                <?php
                            }
                            ?>
                        </div>

                    </div>
                </div><div>


                </div>
                <p>&nbsp;</p>
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
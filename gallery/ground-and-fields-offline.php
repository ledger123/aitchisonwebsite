<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Grounds & Fields"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/gallery.jpg';
?>
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>resources/css/gallery-style.css?v=1">

<body>
<?php include_once ($path.'top-menu-bar.php'); ?>

<?php include_once ($path.'logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>

<div class="container-fluid">

    <div class="row mx-lg-5 mt-2">
        <div class="col-lg-9 col-md-6 col-sm-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $path;?>gallery/event-gallery">Gallery</a></li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div style="height: 60px;"></div>
        </div>
    </div>
</div>


<div class="container">

    <div class="row">
        <?php include_once ('right-panel-links.php'); ?>
    </div>

</div>

<div class="container-fluid">

    <div class="col-lg-9 col-md-12 col-sm-12">
        <div class="col-12 page-title">
            <h1><?php echo $title; ?></h1>
        </div>

    </div>
</div>

<div class="container">

    <!-- Contents -->
    <div class="row">

        <!-- Left Area -->
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div id="gallerySLide" class="sgallery_area4">
                <?php
                $img_names = ['', '40', '1', '7', '4', '39', '34', '36', '38', '9', '35', '20', '29', '10', '12', '21', '11', '18', '14', '17', '16', '32', '15', '13', '30', '24', '26', '27', '25', '22', '31', '33'];

                //$titles = ["40"=>"Aitchison Arial View", "1"=>"Old Building", "2"=>"Barry Block", "3"=>"Zulfiqar Block", "4"=>"Gore Block", "5"=>"Basketball Court", "6"=>"Basketball Courts", "7"=>"MCG", "8"=>"Junior Cricket Pavilion", "9"=>"Hockey, Jaffar Memorial", "10"=>"Hockey, Jaffar Memorial", "11"=>"Hockey, Jaffar Memorial", "12"=>"Athletics MCG", "13"=>"Athletics MCG", "14"=>"Athletics MCG", "15"=>"Tent pegging MCG", "16"=>"Arena Polo", "17"=>"Tent pegging, Polo Club", "18"=>"Tent pegging, Polo Club", "19"=>"Jumping, Polo Club", "20"=>"Riding, Polo Club", "21"=>"Shooting Range", "22"=>"Shooting Range", "23"=>"Cricket Academy", "24"=>"Cricket MCG", "25"=>"Riding School", "26"=>"Riding School", "27"=>"Tennis Courts", "28"=>"Football", "29"=>"Junior Playground", "30"=>"Football Field", "31"=>""];
                $titles = ["40"=>"", "1"=>"Old Building", "7"=>"Barry Block", "4"=>"Zulfiqar Block", "39"=>"Gore Block", "34"=>"Basketball Court", "36"=>"Basketball Courts", "38"=>"MCG", "9"=>"Junior Cricket Pavilion", "35"=>"Hockey, Jaffar Memorial", "20"=>"Hockey, Jaffar Memorial", "29"=>"Hockey, Jaffar Memorial", "10"=>"Athletics MCG", "12"=>"Athletics MCG", "21"=>"Athletics MCG", "11"=>"Tent pegging MCG", "18"=>"Arena Polo", "14"=>"Tent pegging, Polo Club", "17"=>"Tent pegging, Polo Club", "16"=>"Jumping, Polo Club", "32"=>"Riding, Polo Club", "15"=>"Shooting Range", "13"=>"Shooting Range", "30"=>"Cricket Academy", "24"=>"Cricket MCG", "26"=>"Riding School", "27"=>"Riding School", "25"=>"Tennis Courts", "22"=>"Football", "31"=>"Junior Playground", "33"=>"Football Field"];

                for($i=1; $i < count($img_names); $i++){
                    ?>
                    <a href="<?php echo $image_path;?>galimages/groundandfield/<?php echo $img_names[$i];?>.jpg" title="<?php echo $titles[$img_names[$i]];?>">
                        <img class="gallery_img" src="<?php echo $image_path;?>galimages/groundandfield/small/<?php echo $img_names[$i];?>.jpg" alt="img" />
                        <span class="view_btn"><?php echo $titles[$img_names[$i]];?></span>
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>
        <!-- End Left Area -->

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

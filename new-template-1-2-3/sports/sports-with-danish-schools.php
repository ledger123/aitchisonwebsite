<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Aitchison enjoys annual sports fixture with Danish Schools"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v2.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="sports">Sports</a></li>
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
        <div class="col-lg-9 col-md-12 col-sm-12 text-center">


            <?php
            $imgArr = ['101', '102', '103', '104', '105', '106', '107', '108', '109', '110', '111', '112', '113', '114', '115', '116', '117', '118'];
            ?>
            <h3 style="color: #07294d; font-weight: bold;">Basketball</h3>
            <p style="text-align: center; color: #07294d; font-weight: bold;">Aitchison College vs Daanish School DG Khan - Basketball - 20 Jan 2022</p>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" align="center">
                    <div id="gallerySLide" class="sgallery_area">

                        <?php foreach ($imgArr as $item) { ?>
                            <a href="<?php echo $image_path;?>img/sports-dahish-schools/<?php echo $item;?>.jpg" title="Inter-House Basketball Competition (Juniors) Semi Finals">
                                <img class="gallery_img" src="<?php echo $image_path;?>img/sports-dahish-schools/small/<?php echo $item;?>" alt="img">
                                <span class="view_btn"> Basketball </span>
                            </a>
                        <?php }?>
                    </div>
                </div>
            </div>



            <?php
            $imgArr = ['51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65', '66', '67', '68', '69', '70', '71' ];
            ?>
            <h3 style="color: #07294d; font-weight: bold;">Cricket Fixture</h3>
            <p style="text-align: center; color: #07294d; font-weight: bold;">Cricket Fixture Aitchison XI vs Daanish School Rajan Pur - 21 jan 2022</p>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" align="center">
                    <div id="gallerySLide" class="sgallery_area">

                        <?php foreach ($imgArr as $item) { ?>
                            <a href="<?php echo $image_path;?>img/sports-dahish-schools/<?php echo $item;?>.jpg" title="Cricket Fixture Aitchison XI vs Daanish School Rajan Pur - 21 jan 2022">
                                <img class="gallery_img" src="<?php echo $image_path;?>img/sports-dahish-schools/small/<?php echo $item;?>" alt="img">
                                <span class="view_btn"> Cricket Fixture </span>
                            </a>
                        <?php }?>
                    </div>
                </div>
            </div>


            <?php
            $imgArr = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30' ];
            ?>
            <h3 style="color: #07294d; font-weight: bold;">Inter-School Athletics</h3>
            <p style="text-align: center; color: #07294d; font-weight: bold;">Aitchison Inter-School Athletics Championship (Aitchison, Daanish School Rajan Pur &amp; GC College)</p>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" align="center">
                    <div id="gallerySLide" class="sgallery_area">

                        <?php foreach ($imgArr as $item) { ?>
                            <a href="<?php echo $image_path;?>img/sports-dahish-schools/<?php echo $item;?>.jpg" title="Aitchison Inter-School Athletics Championship (Aitchison, Daanish School Rajan Pur &amp; GC College)">
                                <img class="gallery_img" src="<?php echo $image_path;?>img/sports-dahish-schools/small/<?php echo $item;?>" alt="img">
                                <span class="view_btn"> Inter-School Athletics </span>
                            </a>
                        <?php }?>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Left Area -->

        <!-- Right Area -->
        <div class="col-lg-3 col-md-6 col-sm-12 text-center news-links">

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

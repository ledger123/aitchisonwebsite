<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Riding"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/sports/riding.jpg';
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
        <div class="col-lg-9 col-md-12 col-sm-12">
            <p>Riding, show jumping, tent-pegging, dressage and arena polo are featured at Aitchison. The College has one-hundred horses on campus for beginners to experienced riders. Dedicated and highly experienced coaches look after boys. Riding takes place in the mornings &amp; afternoons throughout&nbsp;the week inclusive of weekends.</p>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="gallerySLide" class="sgallery_area2">
                        <?php
						$img_order=array(13, 14, 15, 16, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
                        for($j=0 ; $j < count($img_order); $j++){
							$i=$img_order[$j];
                            ?>
                            <a href="<?php echo $image_path;?>img/riding-new/<?php echo $i;?>.jpg" title="">
                                <img class="gallery_img" src="<?php echo $image_path;?>img/riding-new/small2/<?php echo $i;?>.jpg" alt="Riding Images" />
                                <span class="view_btn" style="opacity: 0.4 !important;"><?php /*?>Riding<?php */?></span>
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

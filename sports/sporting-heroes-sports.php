<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Sporting Heroes"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v2.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="sports">Sports</a></li>
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

            <p>The College has a pantheon of past champions who have left their indelible mark on sport.</p>
            <p>&nbsp;</p>
            <div class="row">

                <div class="col-lg-12  col-lg-offset-1 col-md-12 col-md-offset-1 col-sm-12 col-sm-offset-1">
                    <div id="gallerySLide" class="gallery_area">
                        <a href="<?php echo $image_path;?>img/sportsheroes/imrankhan.jpg" title="Imran Khan">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/sportsheroes/small/imrankhan.jpg" alt="img">
                            <span class="view_btn">Imran Khan</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/sportsheroes/iftikhar-ali-khan-pataudi.jpg" title="Iftikhar Ali Khan Pataudi">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/sportsheroes/small/iftikhar-ali-khan-pataudi.jpg" alt="img">
                            <span class="view_btn">Iftikhar Ali Khan Pataudi</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/sportsheroes/mj.jpg" title="Majid Khan">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/sportsheroes/small/mj.jpg" alt="img">
                            <span class="view_btn">Majid Khan</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/sportsheroes/rameezraja.jpg" title="Rameez Raja">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/sportsheroes/small/rameezraja.jpg" alt="img">
                            <span class="view_btn">Rameez Raja</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/sportsheroes/hs.jpg" title="Hassan Sardar">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/sportsheroes/small/hs.jpg" alt="img">
                            <span class="view_btn">Hassan Sardar</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/sportsheroes/qasimzia.jpg" title="Qasim Zia">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/sportsheroes/small/qasimzia.jpg" alt="img">
                            <span class="view_btn">Qasim Zia</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/sportsheroes/rashid.jpg" title="Rashid A. Malik">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/sportsheroes/small/rs.jpg" alt="img">
                            <span class="view_btn">Rashid A. Malik</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/sportsheroes/wahabriaz.jpg" title="Wahab Riaz">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/sportsheroes/small/wahabriaz.jpg" alt="img">
                            <span class="view_btn">Wahab Riaz</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/sportsheroes/hockey-team-berlin-1936.jpg" title="Syed Muhammad Jaffar in Hockey Team Berlin 1936">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/sportsheroes/small/hockey-team-berlin-1936.jpg" alt="img">
                            <span class="view_btn">S. M. Jaffar</span>
                        </a>
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

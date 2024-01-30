<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Sports"; include_once($path."header-includes.php");

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

            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <p style="line-height: 1.7em;">Aitchison offers a wide variety of sports with excellent coaching and playing facilities. Games and sports are played for enjoyment first, although there is always a strong sense of competitiveness in both house and school fixtures. The aim of the Sports Department is to engage all boys in some form of physical activity. Being part of a team has its obvious added benefits, but leadership, self-respect, confidence, discipline and teamwork are all indispensable parts of a general sporting education. The College has many designated coaches, PT staff and support staff to manage a vital whole school programme under the direction of the Games Master and Heads of School Sport.</p>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <img src="<?php echo $image_path;?>newsletter/news/images/sajjad-ali-khan-03122018-a.jpg" style="width: 100%; height: auto;">
                    <p style="font-size: small; padding-top: 20px;">Aitchison College Cross Country Champion Sajjad Ali Khan, 8 times winner of Cross Country Race and 2 times recipient of the Walter A. Robinson Challenge Cup (2016 &amp; 2017). </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <p> <strong>Facilities include:</strong> </p>
                    <ul style="display: block; list-style-type: disc; margin-before: 1em; margin-after: 1em; margin-start: 0; margin-end: 0; padding-start: 400px; padding: 0 0 0 20px;">
                        <li>Riding School (3 manages, tent pegging range, show jumping and dressage, arena polo field)</li>
                        <li>3 Cricket Pavilions (Rab, Junior &amp; ACOBA pavilions)</li>
                        <li>9 Cricket Grounds (MCG, ACOBA, Zulfiqar 1 &amp; 2, Sunderdas, Junior 1, 2 &amp; 3, and Principal Lane ground)</li>
                        <li>Cricket Academy (8 synthetic nets and bowling machines)</li>
                        <li>Synthetic and grass Hockey fields</li>
                        <li>3 x 8 Lane Swimming Pools and Diving Complex (5 metre tower and springboards)</li>
                        <li>4 Football fields</li>
                        <li>1 Rugby field</li>
                        <li>5 Courts Squash Complex</li>
                        <li>6 Grass, 6 Synthetic and Hard Surface Tennis Courts</li>
                        <li>4 Basketball Courts and shooting practice facility</li>
                        <li>Hall for Indoor Training.</li>
                        <li>Shooting Range</li>
                        <li>Grounds and gardens are kept immaculate by a committed and skilled team of groundsmen.</li>
                    </ul>
                </div>
                <div align="right" class="col-lg-3 col-md-12 col-sm-12" style="border-left: 2px solid #afafaf; padding-right:0px;">
                    <p align="right"> <strong style="">The following sports<br> are offered:</strong></p>
                    <ul style="display: block; text-align:left; list-style-type: disc; margin-before: 1em; margin-after: 1em; margin-start: 0; margin-end: 0; padding-start: 400px; padding: 0 0 0 20px;">
                        <li>Athletics</li>
                        <li>Badminton</li>
                        <li>Basketball</li>
                        <li>Cricket</li>
                        <li>Hockey</li>
                        <li>Football</li>
                        <li>Lawn Tennis</li>
                        <li>Mini Gym Facility</li>
                        <li>Riding</li>
                        <li>Rugby</li>
                        <li>Squash</li>
                        <li>Swimming</li>
                        <li>Table Tennis</li>
                        <li>Water Polo</li>
                        <li>Arena Polo</li>
                        <li>Shooting</li>
                    </ul>
                </div>
                <br>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-12  col-lg-offset-1 col-md-12 col-md-offset-1 col-sm-12 col-sm-offset-1">
                    <div id="gallerySLide" class="gallery_area">
						<?php
						$img_order=array("1", "2", "3", "10", "5", "6", "7", "8", "9");
                        for($j=0 ; $j < count($img_order); $j++){
							$i=$img_order[$j];
                            ?>
						<a href="<?php echo $image_path;?>galimages/Sports/sports/<?php echo $i;?>.jpg" title="">
                                <img class="gallery_img" src="<?php echo $image_path;?>galimages/Sports/sports/small1/<?php echo $i;?>.jpg" alt="Riding Images" />
                                <span class="view_btn" style="opacity: 0.4 !important;"><?php /*?>Riding<?php */?></span>
                            </a>
						<?php
						}
						?>
                        <?php /*?><a href="<?php echo $image_path;?>galimages/Sports/sports/1.jpg" title="Sports">
                            <img class="gallery_img" src="<?php echo $image_path;?>galimages/Sports/sports/small1/1.jpg" alt="img">
                            <span class="view_btn">Sports</span>
                        </a>
                        <a href="<?php echo $image_path;?>galimages/Sports/sports/2.jpg" title="Sports">
                            <img class="gallery_img" src="<?php echo $image_path;?>galimages/Sports/sports/small1/2.jpg" alt="img">
                            <span class="view_btn">Sports</span>
                        </a>
                        <a href="<?php echo $image_path;?>galimages/Sports/sports/3.jpg" title="Sports">
                            <img class="gallery_img" src="<?php echo $image_path;?>galimages/Sports/sports/small1/3.jpg" alt="img">
                            <span class="view_btn">Sports</span>
                        </a>
                        <a href="<?php echo $image_path;?>galimages/Sports/sports/10.jpg" title="Sports">
                            <img class="gallery_img" src="<?php echo $image_path;?>galimages/Sports/sports/small1/10.jpg" alt="img">
                            <span class="view_btn">Sports</span>
                        </a>
                        <a href="<?php echo $image_path;?>galimages/Sports/sports/5.jpg" title="Sports">
                            <img class="gallery_img" src="<?php echo $image_path;?>galimages/Sports/sports/small1/5.jpg" alt="img">
                            <span class="view_btn">Sports</span>
                        </a>
                        <a href="<?php echo $image_path;?>galimages/Sports/sports/6.jpg" title="Sports">
                            <img class="gallery_img" src="<?php echo $image_path;?>galimages/Sports/sports/small1/6.jpg" alt="img">
                            <span class="view_btn">Sports</span>
                        </a>
                        <a href="<?php echo $image_path;?>galimages/Sports/sports/7.jpg" title="Sports">
                            <img class="gallery_img" src="<?php echo $image_path;?>galimages/Sports/sports/small1/7.jpg" alt="img">
                            <span class="view_btn">Sports</span>
                        </a>
                        <a href="<?php echo $image_path;?>galimages/Sports/sports/8.jpg" title="Sports">
                            <img class="gallery_img" src="<?php echo $image_path;?>galimages/Sports/sports/small1/8.jpg" alt="img">
                            <span class="view_btn">Sports</span>
                        </a>
                        <a href="<?php echo $image_path;?>galimages/Sports/sports/9.jpg" title="Sports">
                            <img class="gallery_img" src="<?php echo $image_path;?>galimages/Sports/sports/small1/9.jpg" alt="img">
                            <span class="view_btn">Sports</span>
                        </a><?php */?>
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

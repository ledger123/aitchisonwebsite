<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Dining"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/boarding.jpg';
$page_header = $title;
?>

<body>

<?php include_once ($path.'logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>
<div class="breadcrumb-bar">
    <div class="container">

        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="boarding-houses">Boarding</a></li>
                </ol>
            </nav>

        </div>
    </div>
</div>




<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- Left Area -->
        <div class="col-lg-9 col-md-12 col-sm-12">
            <p>Needless to say dining is one of the favourite past-times of a boarder. Each hall is beautifully arranged and underlines the importance of socialization that develops manners and social skills. The Principal and senior staff dine regularly in houses, as of course do housemasters and tutors on a daily basis. <br></p>
            <p>Meals commence and end with prayer. Boys are served at set tables and enjoy a good range of healthy foods, balanced in protein and carbohydrates. There is always food available for ‘seconds.’ <br><br></p>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" align="center">
                    <div id="gallerySLide" class="gallery_area">
                        <?php
                        $imageArr = ['1', '2', '4', "js-dining-1", "js-dining-3", "7"];
                        $image_url_ = $image_path .'img/dinning/main/';
                        foreach($imageArr as $img) {  ?>
                        <a href="<?php echo $image_url_ . $img. '.jpg'?>" title="Aitchison's Dinning ">
                            <img class="gallery_img" src="<?php echo $image_url_ .'small/'. $img. '.jpg'?>" alt="Aitchison's Dinning">
                            <span class="view_btn">Aitchison's Dinning</span>
                        </a>
                        <?php } ?>
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

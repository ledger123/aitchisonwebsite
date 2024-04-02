<!DOCTYPE html>
<html>

<?php

include_once("../path-settings.php");

$title = "Music"; include_once($path."header-includes.php");

$banner_url = $image_path.'img/pageimages/music_banner.jpg';
$ua = strtolower($_SERVER["HTTP_USER_AGENT"]);
$isMob = is_numeric(strpos($ua, "mobile"));
if($isMob){
	$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
}
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="our-schools">Our Schools</a></li>
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
            <blockquote style="border-color: #369; width: fit-content;">
                <p>“One good thing about music, when it hits you, you feel no pain.”</p>
                <footer class="text-end pe-1 text-black-50">&dash; Bob Marley</footer>
            </blockquote>
            <p>&nbsp;</p>

            <div class="">
                <div id="gallerySLide" class="sgallery_area2">

                    <?php
                    $imgPath = $image_path."img/music/";
                    $imgPathSmall = $image_path."img/music/small1/";
					$img_order=array(1, 2, 3, 4, 5, 6, 7, 8, 9);	
                    for($j=0 ; $j < count($img_order); $j++){
							$i=$img_order[$j];
                        ?>
                        <a href="<?php echo $imgPath . $i . ".jpg"; ?>" title="Music">
                            <img class="gallery_img" src="<?php echo $imgPathSmall . $i . ".jpg"; ?>" alt="image">
                            <span class="view_btn">Music</span>
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
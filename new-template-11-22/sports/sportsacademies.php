<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Sports Academies"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v2.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="sports">Sports</a></li>
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
            <p>Aitchison opened its first sporting academies for elite and ambitious sportsmen in 2016. Boys are trained in Cricket, Football, Hockey, Swimming, Tennis, Squash and Riding. Programmes are managed by highly qualified school and guest coaches. International figures such Majid Khan (Test Cricket) and Mohammad Saqlain (Olympic Hockey) head a group of enthusiastic national and international mentors of academy programmes. The Academies aim to help boys reach representative teams. <br><br></p>

            <div class="row">
                <div class="col-lg-12  col-lg-offset-1 col-md-12 col-md-offset-1 col-sm-12 col-sm-offset-1">
                    <div id="gallerySLide" class="gallery_area">
                        <?php
                        $titles=array("", "Cricket Academy", "Cricket Academy", "Cricket Academy", "Cricket Academy", "Cricket", "Squash", "Swimming", "Swimming", "Swimming", "Hockey", "Hockey", "Hockey", "Basketball", "Basketball", "Tennis", "Football", "Football", "Football");
                        $galArray = ["", "19", "20", "21", "22", "5", "6", "16", "17", "23", "7", "8", "9", "10", "15", "11", "12", "13", "14"];

                        $foldername=$image_path."galimages/sportsacademies/";
                        $foldernames=$image_path."galimages/sportsacademies/small1/";
                        for($i=1 ; $i <=count($galArray); $i++){
                            if(!file_exists($foldername.$galArray[$i].".jpg")){
                                continue;
                            }
                            ?>
                            <a href="<?php echo $foldername.$galArray[$i];?>.jpg" title="<?php echo strip_tags($titles[$i]);?>">
                                <img class="gallery_img" src="<?php echo $foldernames.$galArray[$i];?>.jpg" alt="<?php echo $titles[$i];?>" />
                                <span class="view_btn"><?php echo $titles[$i];?></span>
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

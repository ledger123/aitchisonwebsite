<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Cricket"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/sports/cricket.jpg';
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

            <div class="col-sm-12">
                <div class="d-none d-md-block text-center" style="float: right;margin: 0px 0px 0px 30px;max-width: 392px;">
                    <img src="<?php echo $image_path; ?>img/pageimages/live-scoreboard-opening.jpg" alt="Image" width="100%">
                    
                    <span class="imgtitle">Prime Minister Imran Khan inaugurated the new electronic scoreboard.</span>
                </div>


                <div class="d-block d-md-none text-center">
                    <img src="<?php echo $image_path; ?>img/pageimages/live-scoreboard-opening.jpg" alt="Image" width="100%">
                    <span class="imgtitle">Prime Minister Imran Khan inaugurated the new electronic scoreboard.</span>
                </div>
            </div>

            <p>Aitchison's name is synonymous with Pakistan cricket. The College has produced a number of famous Test cricketers including Iftikhar Ali Khan Pataudi (Eng and Capt India), Imran Khan, Majid Khan, Rameez Raja and others. Along with these illustrious names is a long list of Ist Class cricketers. The Black Pavilion renamed the Rab Pavilion is home to our main games and is one of the most beautiful pavilions in the country. It features two traditional cricket rooms for the home side and visitors, as well as a central meeting room for lunches and gatherings. Any boy who plays on the MCG has special memories to last a lifetime.The ground boasts a magnificent electronic scoreboard gifted by the ACOBA Old Boys' Association.&nbsp;Over 20 matches are played in a season. Feature games include: Lawrence College, 2-Day Test against Sadiq Public School, Annual ACOBA match and many visiting overseas teams.</p>

            <div class="row" style="padding: 12px;">
                <div class="text-center">
                    <video id="introVid" controls="" autoplay="" muted="" loop="" class="vdlink">
                        <source src="<?php echo $image_path;?>videos/cricket-20220217.mp4" style="" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="gallerySLide" class="sgallery_area2">

                        <?php
						$img_order=array("-1", "0", "1", "2", "3", "24", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23");
                        for($j=0 ; $j < count($img_order); $j++){
							$i=$img_order[$j];
                            ?>
                            <a href="<?php echo $image_path;?>sportsgal/cricket-new/<?php echo $i;?>.jpg" title="">
                                <img class="gallery_img" src="<?php echo $image_path;?>sportsgal/cricket-new/small2/<?php echo $i;?>.jpg" alt="img" />
                                <span class="view_btn" style="opacity: 0.4 !important;"><?php /*?>Cricket<?php */?></span>
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

<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Hockey"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/hockey.jpg';
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

            <p>Aitchison has a proud and successful hockey history. It has produced a number of Olympians and other fine players at the representative level; most notably, Syed Muhammad Jafar, Hassan Sardar, Ayaz Mahmood and Syed Qasim Zia. The College offers a dedicated hockey program directed by Olympian medallist Muhammad Saqlain. The new synthetic Jafar Memorial Hockey Field is graced by the beautiful Jafar Memorial Pavilion. Aitchison enjoys matches against many clubs and schools in a highly competitive season, including its much anticipated annual fixture against Lawrence College. Aitchison is the current holder of the Jafar Memorial Cup, played annually between all schools and academies in the Punjab.</p>
            <br>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10 text-center">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="text-center">
                                <video style="width:100%; height:100%;" controls="" muted="" name="media">
                                    <source src="<?php echo $image_path;?>videos/India-vs-Germany-1936-Olympics-Hockey-Final.mp4" type="video/mp4">
                                    <source src="<?php echo $image_path;?>videos/India-vs-Germany-1936-Olympics-Hockey-Final.webm" type="video/webm">
                                    <source src=<?php echo $image_path;?>"videos/India-vs-Germany-1936-Olympics-Hockey-Final.ogv" type="video/ogg">
                                </video>
                            </div>
                        </div>
                    </div>
                    <div align="center" style="font-size: 13px;">
                        <p style="width:100%; text-align: center;">1936 :: Indian Hockey Team that won Gold Medal in Berlin Olympics.</p>
                        <p style="width:100%;">Sayed Mohammed Jaffar Shah who played the left-out (forward) position. SM Jaffar is remembered as an all-time hockey great in Pakistan. As a tribute to his contribution to hockey, Aitchison College constructed a hockey pavilion in 1939. The story of the Indian hockey great, who died too young, can be read on this <a href="https://scroll.in/magazine/1002038/the-story-of-the-indian-hockey-great-who-died-too-young" style="color: blue;" target="_blank" noreferer="">link</a>.</p>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="text-center">
                <img src="<?php echo $image_path;?>sportsgal/hockey2/hassan-sardar-and-hockey-captain-2019.png" alt="Hassan Sardar and Hockey Captain 2019" class="img-fluid mb-2">
                <div><small>Hassan Sardar and Miangul Mustafa Sikander Hockey Captain 2019-20 promoting Junior hockey.</small></div>
            </div>
            <br><br>

            <div class="row">
                <div class="text-center" >
                    <div class="col-lg-12 col-md-12  col-sm-12 ">
                        <div id="gallerySLide" class="sgallery_area2">

                            <?php
                            for($i=1; $i <= 10; $i ++){
                                ?>
                                <a href="<?php echo $image_path;?>sportsgal/hockey2/<?php echo $i;?>.jpg" title="Cricket">
                                    <img class="gallery_img" src="<?php echo $image_path;?>sportsgal/hockey2/small/<?php echo $i;?>.jpg" alt="img" />
                                    <span class="view_btn">Hockey</span>
                                </a>
                                <?php
                            }
                            ?>

                        </div>
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

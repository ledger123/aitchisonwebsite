<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Environment Clubs"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="about-us">School</a></li>
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

            <p>Aitchison is renowned for its beautiful gardens and trees spread over almost 200 acres of parkland in the centre of Lahore. It is a sanctuary from the traffic and congestion forever growing outside its high walls. It can be a contemplative experience walking the tree lined roads, paths and fields guarded by mighty pipals, gulmohars, jamans, banyans, kachanars and arjuns. Some of the names of College roads suggest as much: ‘Green Drive and Pipal Avenue.’ Many old boys return to simply enjoy a walk in the peace and majesty of their alma mater. Aitchison is also a tourist destination for many distinguished guests.&nbsp;</p>
            <p>Aitchison records bird life and flora for historical purposes, cares for injured birds and animals, oversees a significant tree planting program, and is currently operating 12 bee hives for the study of bees and the collection and bottling of honey. The 'Bee Boys' will support local charities and also link with Science in Prep School. The study of bees is complex and essential to sustaining life on earth. The most recent harvest was 80 kg of raw honey. Both Australian domestic bees and local bees produce our honey. Our Ornithology Club records bird varieties and nestings in the school. &nbsp;</p>
            <p>The College greatly values its bird life, among them flocks of cranes, wild kites, hawks, parrots, owls, woodpeckers and many other varieties.</p>
            <br><br>

            <div class="row text-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="gallerySLide" class="gallery_area">
                        <a href="<?php echo $image_path;?>img/environment/main_new/environment-20210626.jpg" title="Aitchison's Environment">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/environment/main_new/small1/environment-20210626.jpg" alt="Aitchison's Environment" />
                            <span class="view_btn">Aitchison's Environment</span>
                        </a>
                        <?php
                        $names = array('bee-club-3', 'bee-club-4', 'bee-club-5', 'bee-club-1', 'bee-club-2', 'bee-club-6');
                        for($i= 0; $i < count($names); $i++){
                            ?>
                            <a href="<?php echo $image_path;?>img/environment/main_new/<?php echo $names[$i];?>.jpg" title="Bee Club">
                                <img class="gallery_img" src="<?php echo $image_path;?>img/environment/main_new/small1/<?php echo $names[$i];?>.jpg" alt="Bee Club" />
                                <span class="view_btn">Bee Club</span>
                            </a>
                            <?php
                        }
                        ?>

                        <?php
                        $names = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '28', '25', '12', '13', '14', '15', '29', '11', '16', '17', '18', '19', '20', '21', '22', '23', '24');
                        for($i= 0; $i < count($names); $i++){
                            ?>
                            <a href="<?php echo $image_path;?>img/environment/main_new/<?php echo $names[$i];?>.jpg" title="Aitchison's Environment">
                                <img class="gallery_img" src="<?php echo $image_path;?>img/environment/main_new/small1/<?php echo $names[$i];?>.jpg" alt="Aitchison's Environment" />
                                <span class="view_btn">Aitchison's Environment</span>
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

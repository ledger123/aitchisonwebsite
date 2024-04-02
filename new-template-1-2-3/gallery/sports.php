<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Sports"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/gallery.jpg';
$page_header = $title;
?>
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>resources/css/gallery-style.css?v=1">

<body>
<?php include_once ($path.'new-logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $path;?>gallery/event-gallery">Gallery</a></li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div></div>
        </div>
    </div>
</div>


<div class="container">

    <div class="row mt-3">
        <?php include_once ('right-panel-links.php'); ?>
    </div>

</div>


<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- Left Area -->
        <div class="col-lg-12 col-md-12 col-sm-12">
            <ul class="nav nav-tabs mb-3" id="sportsTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">All</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="cricket-tab" data-bs-toggle="tab" data-bs-target="#cricket" type="button" role="tab" aria-controls="cricket" aria-selected="false">Cricket</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="hockey-tab" data-bs-toggle="tab" data-bs-target="#hockey" type="button" role="tab" aria-controls="hockey" aria-selected="false">Hockey</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="football-tab" data-bs-toggle="tab" data-bs-target="#football" type="button" role="tab" aria-controls="football" aria-selected="true">Football</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="swimming-tab" data-bs-toggle="tab" data-bs-target="#swimming" type="button" role="tab" aria-controls="swimming" aria-selected="false">Swimming</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="riding-tab" data-bs-toggle="tab" data-bs-target="#riding" type="button" role="tab" aria-controls="riding" aria-selected="false">Riding</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="arena-polo-tab" data-bs-toggle="tab" data-bs-target="#arena-polo" type="button" role="tab" aria-controls="arena-polo" aria-selected="true">Arena Polo</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="others-tab" data-bs-toggle="tab" data-bs-target="#others" type="button" role="tab" aria-controls="others" aria-selected="false">Others</button>
                </li>
            </ul>
            <div class="tab-content" id="sportsTabContent">
                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                    <div id="gallerySLide" class="sgallery_area4">
                        <?php $allsports_array=array("3-16102019", "7-16102019", "21-8067105961", "20-cricket", "1", "2", "3", "4", '29-20211117', "12-16102019", "13-16102019", "14-16102019", "15-16102019", "5", "7", "10",  "16","11", "10-16102019", "12", "14", "15", "4-20200921", "1-20200921", "1-20210201", "2-20210201", "2-20200921", "3-20200921", "5-20200921", "1-20200922", "4-20200922", "5-16102019", "31", "32", "33", "17", "20", "1-20200923", "2-20200923", "3-20200923", "4-20200923", "5-20200923", "6-20200923", "7-20200923", "8-20200923", "9-20200923", "10-20200923", "11-20200923", "9", "23", "21", "27", "28", "25", "34", "35");

                        for($i=0; $i < count($allsports_array); $i ++){
                            $img_name=$allsports_array[$i];
                            ?>
                            <a href="<?php echo $image_path;?>sportsgal/all/<?php echo $img_name;?>.jpg" title="Sports">
                                <img class="gallery_img" src="<?php echo $image_path;?>sportsgal/all/small/<?php echo $img_name;?>.jpg" alt="img" />
                                <span class="view_btn">Sports</span>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="tab-pane fade" id="cricket" role="tabpanel" aria-labelledby="cricket-tab">
                    <div id="gallerySLide" class="sgallery_area4">
                        <?php $cricket_array=array("1-16102019", "2-16102019", "3-16102019", "4-16102019", "5-16102019", "6-16102019", "12-7393257799", "13-3203342878", "19-6003927486", "21-8067105961", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20");

                        for($i=0; $i < count($cricket_array); $i ++){
                            $img_name=$cricket_array[$i];
                            ?>
                            <a href="<?php echo $image_path;?>sportsgal/cricket/<?php echo $img_name;?>.jpg" title="Cricket">
                                <img class="gallery_img" src="<?php echo $image_path;?>sportsgal/cricket/small/<?php echo $img_name;?>.jpg" alt="img" />
                                <span class="view_btn">Cricket</span>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="hockey" role="tabpanel" aria-labelledby="hockey-tab">
                    <div id="gallerySLide" class="sgallery_area4">
                        <?php $hockey_array=array("1-20220219", "2-20220219", "4-20200921", "6-20200921", "1-20200921", "1-20210201", "2-20210201", "2-20200921", "3-20200921", "1-20200922", "2-20200922", "3-20200922", "4-20200922", "5-16102019");
                        for($i=0; $i < count($hockey_array); $i ++){
                            $img_name=$hockey_array[$i];
                            ?>
                            <a href="<?php echo $image_path;?>sportsgal/hockey/<?php echo $img_name;?>.jpg" title="Hockey">
                                <img class="gallery_img" src="<?php echo $image_path;?>sportsgal/hockey/small/<?php echo $img_name;?>.jpg" alt="img" />
                                <span class="view_btn">Hockey</span>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="tab-pane fade" id="football" role="tabpanel" aria-labelledby="football-tab">
                    <div id="gallerySLide" class="sgallery_area4">
                        <?php $football_array=array("1-20200921", "2-20200921", "3-20200921", "4-20200921", "5-20200921", "21", "1-20200922", "2-20200922", "3-20200922", "4-20200922", "5-20200922", "6-20200922", "1-16102019", "2-16102019", "3-16102019", "4-16102019", "5-16102019", "6-16102019", "7-16102019", "7-3922629021", "5-3922629021", "6-3922629021", "1", "2", "3", "4", "5", "8", "9", "10", "11", "13", "14", "15", "16", "17", "18");

                        for($i=0; $i < count($football_array); $i ++){
                            $img_name=$football_array[$i];
                            ?>
                            <a href="<?php echo $image_path;?>sportsgal/football/<?php echo $img_name;?>.jpg" title="Football">
                                <img class="gallery_img" src="<?php echo $image_path;?>sportsgal/football/small/<?php echo $img_name;?>.jpg" alt="img" />
                                <span class="view_btn">Football</span>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="swimming" role="tabpanel" aria-labelledby="swimming-tab">
                    <div id="gallerySLide" class="sgallery_area4">
                        <?php $swimming_array = ['17-20211117', '1-20200922', '2-20200922', '3-20200922', '4-20200922', '5-20200922', '6-20200922', '7-20200922', '8-20200922', '9-20200922', '10-20200922', '11-20200922', '12-20200922', '13-20200922', '14-20200922', '15-20200922', "1-16102019"];

                        for($i=0; $i < count($swimming_array); $i ++){
                            $img_name=$swimming_array[$i];
                            ?>
                            <a href="<?php echo $image_path;?>sportsgal/swimming/<?php echo $img_name;?>.jpg" title="Swimming">
                                <img class="gallery_img" src="<?php echo $image_path;?>sportsgal/swimming/small/<?php echo $img_name;?>.jpg" alt="img" />
                                <span class="view_btn">Swimming</span>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="riding" role="tabpanel" aria-labelledby="riding-tab">
                    <div id="gallerySLide" class="sgallery_area4">
                        <?php $riding_array=array("1-16102019", "2-16102019", "1", "2", "3", "4", "5", "6", "7");
                        for($i=0; $i < count($riding_array); $i ++){
                            $img_name=$riding_array[$i];
                            ?>
                            <a href="<?php echo $image_path;?>sportsgal/riding/<?php echo $img_name;?>.jpg" title="Riding">
                                <img class="gallery_img" src="<?php echo $image_path;?>sportsgal/riding/small/<?php echo $img_name;?>.jpg" alt="img" />
                                <span class="view_btn">Riding</span>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="tab-pane fade" id="arena-polo" role="tabpanel" aria-labelledby="arena-polo-tab">
                    <div id="gallerySLide" class="sgallery_area4">
                        <?php
                        $polo_arrays = array("19", "20", "21", "22", "23", "24", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15");
                        for($i=0; $i < count($polo_arrays); $i ++){
                            $img_name=$polo_arrays[$i];
                            ?>
                            <a href="<?php echo $image_path;?>sportsgal/polo/<?php echo $img_name; ?>.jpg" title="ARENA POLO">
                                <img class="gallery_img" src="<?php echo $image_path;?>sportsgal/polo/small/<?php echo $img_name; ?>.jpg" alt="img">
                                <span class="view_btn">ARENA POLO</span>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="others" role="tabpanel" aria-labelledby="others-tab">
                    <div id="gallerySLide" class="sgallery_area4">
                        <?php $others_array=array("34", "35", "33", "1-20200922", "2-20200922", "2-16102019", "3-16102019", "20", "4-393437417", "5-913372640", "5", "29", "4-16102019", "5-16102019", "6-16102019", "7-16102019", "1", "2", "3", "4", "10", "11", "12", "13", "14", "17", "18", "19", "31", "32", "30", "8-16102019", "9-16102019", "10-16102019", "15", "16", "25_a", "27_a", "6", "8");
                        for($i=0; $i < count($others_array); $i ++){
                            $img_name=$others_array[$i];
                            ?>
                            <a href="<?php echo $image_path;?>sportsgal/others/<?php echo $img_name;?>.jpg" title="Others">
                                <img class="gallery_img" src="<?php echo $image_path;?>sportsgal/others/small/<?php echo $img_name;?>.jpg" alt="img" />
                                <span class="view_btn">Others</span>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Left Area -->


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

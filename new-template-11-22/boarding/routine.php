<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Boarding Routine"; include_once($path."header-includes.php");

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
            <p>Boarders have a busy routine with an early start at 7am for breakfast during the school week. Morning Tea (Canteens), Lunch, Afternoon tea, Dinner (formal) and Supper make up the standard meals. Games are played in the afternoons. Free time is usually between 5pm to 7pm. Prep sessions are held each evening Monday to Friday with residential tutors assisting group and individual needs. More details are available on the Parent Portals.&nbsp;<br><br></p>

            <div class="row">
                <div class="col-lg-12  col-lg-offset-1 col-md-12 col-md-offset-1 col-sm-12 col-sm-offset-1">
                    <div id="gallerySLide" class="gallery_area">
                        <?php
                        $img_arr=array("20200929_1", "20200929_2", "20200929_3", "20200929_4", "20200929_5", "20200929_6", "5", "10", "12", "13");

                        for($i= 0; $i < count($img_arr); $i++){
                            ?>
                            <a href="<?php echo $image_path;?>img/boarding/main/<?php echo $img_arr[$i];?>.jpg" title="Boarding Activities ">
                                <img class="gallery_img" src="<?php echo $image_path;?>img/boarding/main/small/<?php echo $img_arr[$i];?>.jpg" alt="img" />
                                <span class="view_btn">Boarding Activities</span>
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

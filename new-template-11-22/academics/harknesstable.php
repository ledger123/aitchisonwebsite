<!DOCTYPE html>
<html>


<?php
include_once("../path-settings.php");

$title = "Harkness Table and A2 Tutorials"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/admissions/banner.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="ac-academics">Academics</a></li>
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

            <p>The <strong>Harkness table, Harkness method</strong>, or <strong>Harkness discussion</strong> is a teaching and learning method involving Senior students in small group exploration of ideas that fosters an open-minded environment with minimal teacher intervention. The method encourages classes to be held in a discursive manner. The style is related to the Socratic method. At Aitchison College, we are adopting the method to reinforce what students have learned or acquired in concept learning. Final year A2 boys studying Mathematics and Sciences attend regular small group tutorials.</p>
            <br><br>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12" align="center">
                    <div id="gallerySLide" class="sgallery_area2">
						<?php
                    $imgPath = $image_path."galimages/harkness/";
                    $imgPathSmall = $image_path."galimages/harkness/small1/";

                    for ($i = 1; $i < 4; $i++) {
                        ?>
                        <a href="<?php echo $imgPath . $i . ".jpg"; ?>" title="">
                            <img class="gallery_img" src="<?php echo $imgPathSmall . $i . ".jpg"; ?>" alt="Image">
                            <span class="view_btn">Harkness Table</span>
                        </a>

                        <?php
                    }
                    ?>
                        <?php /*?><a href="<?php echo $image_path;?>galimages/harkness/1.jpg" title="Harkness Table">
                            <img class="gallery_img" src="<?php echo $image_path;?>galimages/harkness/small1/1.jpg" alt="img">
                            <span class="view_btn">Harkness Table</span>
                        </a>
                        <a href="<?php echo $image_path;?>galimages/harkness/2.jpg" title="Harkness Table">
                            <img class="gallery_img" src="<?php echo $image_path;?>galimages/harkness/small1/2.jpg" alt="img">
                            <span class="view_btn">Harkness Table</span>
                        </a>
                        <a href="<?php echo $image_path;?>galimages/harkness/3.jpg" title="Harkness Table">
                            <img class="gallery_img" src="<?php echo $image_path;?>galimages/harkness/small1/3.jpg" alt="img">
                            <span class="view_btn">Harkness Table</span>
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
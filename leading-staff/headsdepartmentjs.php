<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Leading Staff"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
?>

<style>
    .titile {
        font-size: 26px; 
        color: #07294d; 
        text-decoration: underline; 
        margin-bottom: 0; 
        padding-bottom: 10px;
    }
    
</style>
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
            <h2 class="titile">Department Heads Junior School</h2>
            <div class="row">
                <?php
                $arr = [
                    ['dep' => 'Head of Upper Primary', 'name' => 'Kashifa Kalsoom', 'uri' => 'kashifa-kalsoom.jpg'],
                    ['dep' => 'Head of Science', 'name' => 'Abdul Waheed', 'uri' => 'abdul-waheed.jpg'],
                    ['dep' => 'Head of Math', 'name' => 'Aqsa Sharif', 'uri' => 'aqsa-sharif.jpg'],
                    ['dep' => 'Head of Islamiyat', 'name' => 'Fatima Sohaib', 'uri' => 'fatima-sohaib.jpg'],
                    //['dep' => 'Head of English', 'name' => 'Rabia Ather', 'uri' => 'rabia-ather.jpg'],
                    ['dep' => 'Head of ICT', 'name' => 'Sadia Taimur', 'uri' => 'sadia-taimur.jpg'],
					['dep' => 'Head of Urdu', 'name' => 'Samina Hayat', 'uri' => 'samina-hayat hod-urdu.jpg'],
                    ['dep' => 'Cambridge Coordinator', 'name' => 'Sana Imran', 'uri' => 'sana-imran.jpg'],
                    ['dep' => 'Controller Exams', 'name' => 'Tahira Yasmin', 'uri' => 'tahira-yasmin.jpg'],

                ];
                foreach ($arr as $row) {
                    ?>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="leading-card">
                            <img src="<?php echo $image_path;?>img/leading-staff/department-heads/<?php echo $row['uri']; ?>" alt="" class="img-fluid">
                            <div>
                                <strong><?php echo $row['name'];?></strong><br>
                                <?php echo $row['dep'];?>
                            </div>
                        </div>
                    </div>

                <?php } ?>
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

<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "House Heads Senior School"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
?>
<style>
    .leading-card {
        font-size: 14px;
        padding-left: 5px;
        padding-right: 5px;
    }
    .leading-card  img {
        padding-bottom: 4px;
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
            <h2 class="titile" style="font-size: 26px; color: #07294d; text-decoration: underline; margin-bottom: 0; padding-bottom: 12px;margin-left: -5px;">Boarding Houses</h2>

            <div class="row">
                <?php
                $arr = [
                    ['house' => 'Kelly House', 'name' => 'Khalid Saifullah ', 'uri' => 'khalid-saifullah.jpg'],
                    ['house' => 'Godley House', 'name' => 'Zubair Ata', 'uri' => 'zubair-atta-v2.jpg'],
                    ['house' => 'Leslie Jones House', 'name' => 'Muhammad Tariq ', 'uri' => 'muhammad-tariq.jpg'],
                    ['house' => 'K & N\'s House', 'name' => 'Syed Shahmeer Raza', 'uri' => 'syed-shahmeer-raza.jpg'],
                    ['house' => 'Shirazi House', 'name' => 'Muhammad Haider Hassan ', 'uri' => 'muhammad-haider-hassan.jpg'],


                ];
                foreach ($arr as $row) {
                    ?>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="leading-card">
                            <img src="<?php echo $image_path;?>img/leading-staff/house-heads/<?php echo $row['uri'];?>" alt="" class="img-fluid">
                            <div>
                                <strong><?php echo $row['name'];?></strong><br>
                                <?php echo $row['house'];?>
                            </div>
                        </div>
                    </div>

                <?php } ?>
            </div>

            <br>
            <h2 class="titile" style="font-size: 26px; color: #07294d; text-decoration: underline; margin-bottom: 0; padding-bottom: 12px;margin-left: -5px;">Day Houses</h2>

            <div class="row">
                <?php
                $arr = [
                    ['house' => 'Alamgir House', 'name' => 'Ali Amir Rana ', 'uri' => 'ali-amir-rana.jpg'],
                    ['house' => 'Babur House', 'name' => 'Zahra Shahid', 'uri' => 'zahra-shahid.jpg'],
                    ['house' => 'Balochistan House', 'name' => 'Syeda Anam Ilyas ', 'uri' => 'syeda-anam-ilyas.jpg'],
                    ['house' => 'Centenary House', 'name' => 'Muhammad Waseem Riaz ', 'uri' => 'muhammad-waseem-riaz.jpg'],
                    ['house' => 'Ghazi House', 'name' => 'Shazia Habib ', 'uri' => 'shazia-habib.jpg'],
                    ['house' => 'Goldstein House', 'name' => 'Muhammad Aslam Shahzad ', 'uri' => 'muhammad-aslam-shehzad.jpg'],
                    ['house' => 'Hali House', 'name' => 'Ahmer Ibrahim', 'uri' => 'ahmer-ibrahim.jpg'],
                    ['house' => 'Jinnah House', 'name' => 'M. Farooq Sabir ', 'uri' => 'm-farooq-sabir.jpg'],
                    ['house' => 'Robinson House', 'name' => 'Tahir Ahmad', 'uri' => 'tahir-ahmad.jpg'],
                    ['house' => 'Sikandar House', 'name' => 'Intizar Hussain ', 'uri' => 'intizar-hussain.jpg'],
                    ['house' => 'Taj ud Din House', 'name' => 'Saleem Akhtar ', 'uri' => 'saleem-akhtar.jpg'],

                ];
                foreach ($arr as $row) {
                    ?>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="leading-card">
                            <img src="<?php echo $image_path;?>img/leading-staff/house-heads/<?php echo $row['uri'];?>" alt="" class="img-fluid">
                            <div>
                                <strong><?php echo $row['name'];?></strong><br>
                                <?php echo $row['house'];?>
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
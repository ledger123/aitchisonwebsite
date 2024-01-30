<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "House Heads Junior School"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/ps-school.jpg';
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
            <h2 class="titile" style="font-size: 26px; color: #07294d; text-decoration: underline; margin-bottom: 0; padding-bottom: 12px;margin-left: -5px;">Housemistresses</h2>

            <div class="row">
                <?php
                $arr = [
                    ['house' => 'Babar House', 'name' => 'Sadia Akhtar ', 'uri' => 'sadia-akhtar.jpg'],
                    ['house' => 'Goldstein House', 'name' => 'Aqila Farhan', 'uri' => 'aqila-farhan.jpg'],
                    ['house' => 'Gwyn House', 'name' => 'Humaira Gull', 'uri' => 'humaira-gull.jpg'],
                    ['house' => 'Iqbal House', 'name' => 'Ayesha Raza', 'uri' => 'ayesha-raza.jpg'],
                    ['house' => 'Jinnah House', 'name' => 'Iram Zulfiqar Cheema ', 'uri' => 'iram-zulfiqar-cheema.jpg'],
                    ['house' => 'Liaqat House', 'name' => 'Bushra Malik', 'uri' => 'bushra-malik.jpg'],
                    ['house' => 'Niazuddin House', 'name' => 'Farzana Mirza', 'uri' => 'farzana-mirza.jpg'],
                    ['house' => 'Sikander House', 'name' => 'Ayesha Latif', 'uri' => 'ayesha-latif.jpg'],
                    ['house' => 'Sir Syed House', 'name' => 'Kashifa Kalsoom', 'uri' => 'kashifa-kalsoom.jpg']

                ];
                foreach ($arr as $row) {
                    ?>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="leading-card">
                            <img src="<?php echo $image_path;?>img/leading-staff/user-avatar.png" alt="" class="img-fluid">
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
<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Leading Staff"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
$page_header = $title;
?>

<style>
    .titile {
        font-size: 26px; 
        color: #07294d; 
        text-decoration: underline; 
        margin-bottom: 0; 
        padding-bottom: 10px;
        margin-top: 10px;
    }
    
</style>
<body>
<?php include_once ($path.'new-logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="school-heads">Leading Staff</a></li>
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
            <h2 class="titile">Heads of Key Annual Events - Senior School</h2>
            <div class="row">
                <?php
                $arr = [
                    ['event' => 'Art & Media Society', 'name' => 'Sara Ahmer', 'uri' => 'sara-ahmer.jpg'],
                    ['event' => 'Bazm-e-Adab Society', 'name' => 'Ali Jamal', 'uri' => 'ali-jamal.jpg'],
                    ['event' => 'Bazm-e-Adab Society', 'name' => 'Musarrat Tahira Alvi', 'uri' => 'musarrat-tahira-alvi.jpg'],
                    ['event' => 'Bazm-e-Tamaseel Society', 'name' => 'Muhammad Ali', 'uri' => 'muhammad-ali.jpg'],
                    ['event' => 'Bazm-e-Tamaseel Society', 'name' => 'Saleem  Akhtar', 'uri' => 'saleem-akhtar.jpg'],
                    ['event' => 'Chess Club', 'name' => 'Muhammad Yaqoob', 'uri' => 'muhammad-yaqoob.jpg'],
                    ['event' => 'Computer Society', 'name' => 'Tarranum Naz', 'uri' => 'tarranum-naz.jpg'],
                    ['event' => 'Dramatics Club', 'name' => 'Samara Salahuddin', 'uri' => 'samara-salahuddin.jpg'],
                    ['event' => 'Economics Society', 'name' => 'Saima Asif', 'uri' => 'saima-asif.jpg'],
                    ['event' => 'English Debating Society', 'name' => 'Syed Shahmeer Raza', 'uri' => 'syed-shahmeer-raza.jpg'],
                    ['event' => 'Entrepreneurial Society', 'name' => 'Ahmer Ibrahim', 'uri' => 'ahmer-ibrahim.jpg'],
                    ['event' => 'French Club', 'name' => 'Meher Mansoor', 'uri' => 'meher-mansoor.jpg'],
                    ['event' => 'Geography Society', 'name' => 'Zahra Shahid', 'uri' => 'zahra-shahid.jpg'],
                    ['event' => 'German Club', 'name' => 'Andleeb Zahra Syed', 'uri' => 'andleeb-zahra-syed.jpg'],
                    ['event' => 'History & Archives Society', 'name' => 'Muhammad Haider Hassan', 'uri' => 'muhammad-haider-hassan.jpg'],
                    ['event' => 'Islamic Society', 'name' => 'Khalid Saifullah', 'uri' => 'khalid-saifullah-20240426.jpg'],
                    ['event' => 'Law Society', 'name' => 'Shoaib Bin Hassan', 'uri' => 'shoaib-bin-hassan.jpg'],
                    ['event' => 'Literary Society', 'name' => 'Wajiha Qadeer', 'uri' => 'wajiha-qadeer.jpg'],
                    ['event' => 'Mathematics Society', 'name' => 'Tasneem Aslam Zaeem', 'uri' => 'tasneem-aslam-zaeem.jpg'],
                    ['event' => 'Model United Nation', 'name' => 'Shazia Habib', 'uri' => 'shazia-habib.jpg'],
                    ['event' => 'Music Society', 'name' => 'Sara Ahmer', 'uri' => 'sara-ahmer.jpg'],
                    ['event' => 'Music Society', 'name' => 'Ali Shehroze Qazalbash', 'uri' => 'ali-shehroz-qazalbash.jpg'],
                    ['event' => 'Quiz Society', 'name' => 'Maham Hammad Malik', 'uri' => 'maham-hammad-malik.jpg'],
                    ['event' => 'Science Society', 'name' => 'Dr Muhammad Kamran', 'uri' => 'dr-muhammad-kamran.jpg'],
                    ['event' => 'Humaintarian and Environment Society', 'name' => 'Satia Tazyeen', 'uri' => 'satia-tazyeen.jpg'],
                ];

                foreach ($arr as $row) {
                ?>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/key-annual-events/<?php echo $row['uri'];?>" alt="" class="img-fluid">
                        <div>
                            <strong><?php echo $row['name'];?></strong><br>
                            <?php echo $row['event'];?>
                        </div>
                    </div>
                </div>

                <?php } ?>

            </div>

            <div class="row">

                <h2 class="titile">Head of Key Annual Events - Prep School</h2>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/key-annual-events/muhammad-usman.jpg" alt="" class="img-fluid">
                        <div><strong>
                                Muhammad Usman</strong></div>
                    </div>
                </div>
            </div>

            <h2 class="titile">Head of Key Annual Events - Junior School</h2>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/key-annual-events/ayesha-siddiqa.jpg" alt="" class="img-fluid">
                        <div><strong>
                                Ayesha Siddiqa</strong><br>
                                Upper Primary</div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/key-annual-events/saima-kamran.jpg" alt="" class="img-fluid">
                        <div><strong>
                                Saima Kamran</strong><br>
                                Lower Primary</div>
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

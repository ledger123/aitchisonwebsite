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
    }
    
</style>
<body>

<?php include_once ($path.'logo-page-banner.php'); ?>

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
    </div>
</div>

<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- Left Area -->
        <div class="col-lg-9 col-md-12 col-sm-12">
            <h2 class="titile">Heads of Department Junior School</h2>
            <div class="row">
                <?php
                $arr = [
                    ['dep' => 'Islamiyat', 'name' => 'Fatima Shoaib', 'uri' => 'fatima-shoaib.jpg'],
                    ['dep' => 'Social Studies', 'name' => 'Bushra Munir', 'uri' => 'bushra-munir.jpg'],
                    ['dep' => 'ICT', 'name' => 'Sadia Taimur Salam', 'uri' => 'sadia-taimur-salam.jpg'],
                    ['dep' => 'Arts', 'name' => 'Ayesha Siddiqa', 'uri' => 'ayesha-siddiqa.jpg'],
                    ['dep' => 'Urdu Acquisition', 'name' => 'Uroos Fatima Kamran', 'uri' => 'uroos-fatima-kamran.jpg'],
                    ['dep' => 'Controller Exams', 'name' => 'Tahira Yasmin', 'uri' => 'tahira-yasmin.jpg'],
                    ['dep' => 'Cambridge Coordinator', 'name' => 'Sana Imran', 'uri' => 'sana-imran.jpg'],
                    ['dep' => 'Head of Upper Primary', 'name' => 'Farzana Mehmood', 'uri' => 'farzana-mehmood.jpg'],
                    ['dep' => 'Head of Lower Primary & English Acquisition', 'name' => 'Sarah Malik', 'uri' => 'sarah-malik.jpg'],

                ];
                foreach ($arr as $row) {
                    ?>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="leading-card">
                            <img src="<?php echo $image_path;?>img/leading-staff/user-avatar.png" alt="" class="img-fluid">
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

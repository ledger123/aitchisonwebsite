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
            <h2 class="titile">Department Heads Prep School</h2>
            <div class="row">
                <?php
                $arr = [
                    ['sub' => 'English', 'name' => 'Ayesha Umar', 'uri' => 'ayesha-umar.jpg'],
                    ['sub' => 'Mathematics', 'name' => 'Maryam Sohail', 'uri' => 'maryam-sohail.jpg'],
                    ['sub' => 'Science', 'name' => 'Sadia Riaz', 'uri' => 'sadia-riaz.jpg'],
                    ['sub' => 'Urdu', 'name' => 'Shaheen Ijaz', 'uri' => 'shaheen-ijaz.jpg'],
                    ['sub' => 'Pak.St.', 'name' => 'Amna Batool', 'uri' => 'amna-batool.jpg'],
                    ['sub' => 'Islamiyat', 'name' => 'Qari Zafarullah Shafiq', 'uri' => 'zafarullah-shafiq.jpg'],
                    ['sub' => 'ICT', 'name' => 'Tahir Mehmood', 'uri' => 'tahir-mahmood.jpg'],
                    ['sub' => 'Art', 'name' => 'Nida Manzoor Azeemi', 'uri' => 'nida-manzoor.jpg'],
                    ['sub' => 'Arabic', 'name' => 'Naila Khalid', 'uri' => 'naila-khalid.jpg'],
                    ['sub' => 'Chinese', 'name' => 'Sarah Liu', 'uri' => 'sarah-liu.jpg'],
                    ['sub' => 'French', 'name' => 'Moeed Khalid', 'uri' => 'moeed-khalid.jpg'],
                    ['sub' => 'German', 'name' => 'Sarmad Khan', 'uri' => 'sarmad-khan-german.jpg'],
                    //['sub' => 'Persian', 'name' => 'Taufeeq Ahmed Ansari', 'uri' => 'taufee-ahme-ansari.jpg'],

                ];
                foreach ($arr as $row) {
                    ?>

                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="leading-card">
                            <img src="<?php echo $image_path;?>img/leading-staff/department-heads/<?php echo $row['uri'];?>" alt="" class="img-fluid">
                            <div>
                                <strong><?php echo $row['name'];?></strong><br>
                                <?php echo $row['sub'];?>
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

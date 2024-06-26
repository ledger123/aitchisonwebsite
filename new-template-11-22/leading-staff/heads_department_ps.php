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
            <h2 class="titile">Heads of Department Prep School</h2>
            <div class="row">
                <?php
                $arr = [
                    ['sub' => 'English', 'name' => 'Ms. Ayesha Umar', 'uri' => 'ayesha-umar.jpg'],
                    ['sub' => 'Mathematics', 'name' => 'Ms. Maryam Sohail', 'uri' => 'maryam-sohail.jpg'],
                    ['sub' => 'Science', 'name' => 'Ms. Sadia Riaz', 'uri' => 'sadia-riaz.jpg'],
                    ['sub' => 'Urdu', 'name' => 'Ms. Shaheen Ijaz', 'uri' => 'shaheen-ijaz.jpg'],
                    ['sub' => 'Pak.St.', 'name' => 'Ms. Amna Batool', 'uri' => 'amna-batool.jpg'],
                    ['sub' => 'Islamiyat', 'name' => 'Qari Zafarullah Shafiq', 'uri' => 'zafarullah-shafiq.jpg'],
                    ['sub' => 'ICT', 'name' => 'Mr. Tahir Mehmood', 'uri' => 'tahir-mahmood.jpg'],
                    ['sub' => 'Art', 'name' => 'Ms. Nida Manzoor Azeemi', 'uri' => 'nida-manzoor.jpg'],
                    ['sub' => 'Arabic', 'name' => 'Ms. Naila Khalid', 'uri' => 'naila-khalid.jpg'],
                    ['sub' => 'Chinese', 'name' => 'Ms. Sarah Liu', 'uri' => 'sarah-liu.jpg'],
                    ['sub' => 'French', 'name' => 'Mr. Moeed Khalid', 'uri' => 'moeed-khalid.jpg'],
                    ['sub' => 'German', 'name' => 'Mr. Sarmad Khan', 'uri' => 'sarma-khan.jpg'],
                    ['sub' => 'Persian', 'name' => 'Mr. Taufeeq Ahmed Ansari', 'uri' => 'taufee-ahme-ansari.jpg'],

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

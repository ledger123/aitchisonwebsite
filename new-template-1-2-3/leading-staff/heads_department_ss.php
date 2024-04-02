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
            <h2 class="titile">Department Heads Senior School</h2>
            <div class="row">
            <?php
            $arr = [
                ['dep' => 'Law & Sociology  ', 'name' => 'Amina Kamran', 'uri' => 'hmss-v2.jpg'],
                ['dep' => 'Accounting', 'name' => 'Shokat Ali', 'uri' => 'shokat-ali.jpg'],
                ['dep' => 'Art, Media Studies', 'name' => 'Sara Ahmer', 'uri' => 'sara-ahmer.jpg'],
                ['dep' => 'Biology', 'name' => 'Dr. Huma Alia Izhar', 'uri' => 'dr-huma-alia-izhar.jpg'],
                ['dep' => 'Business Studies ', 'name' => 'Maham Hammad Malik ', 'uri' => 'maham-hammad-malik.jpg'],
                ['dep' => 'Chemistry', 'name' => 'Farhat ul Ain Sehgal ', 'uri' => 'farhat-ul-ain-siagol.jpg'],
                ['dep' => 'Computer Studies', 'name' => 'Asim Pervaiz', 'uri' => 'asim-pervaiz.jpg'],
                ['dep' => 'Economics ', 'name' => 'Shahid Saghir', 'uri' => 'shahid-saghir.jpg'],
                ['dep' => 'English', 'name' => 'Samara Salahuddin', 'uri' => 'samara-salahuddin.jpg'],
                ['dep' => 'French & German', 'name' => 'Mehar Mansoor', 'uri' => 'meher-mansoor.jpg'],
                ['dep' => 'French & German', 'name' => 'Andleeb Zahra Syed', 'uri' => 'andleeb-zahra-syed.jpg'],
                ['dep' => 'Islamiat, Arabic', 'name' => 'Afzal Ahmad Tarrar', 'uri' => 'afzaal-ahmed-tarar.jpg'],
                ['dep' => 'Mathematics', 'name' => 'Tasneem Aslam Zaeem ', 'uri' => 'tasneem-aslam-zaeem.jpg'],
                ['dep' => 'Pakistan Studies', 'name' => 'Tariq Yasin', 'uri' => 'tariq-yasin.jpg'],
                ['dep' => 'Physics', 'name' => 'Sohail Ahmad Siddiqi', 'uri' => 'sohail-ahmad-siddiqi.jpg'],
                ['dep' => 'Urdu', 'name' => 'Rubab Baqir', 'uri' => 'rubab-baqir.jpg']

            ];
            foreach ($arr as $row) {
                ?>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/department-heads/<?php echo $row['uri'];?>" alt="" class="img-fluid">
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

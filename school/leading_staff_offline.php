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

            <h2 class="titile">Academic</h2>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/hmss-v2.jpg" class="img-fluid">
                    </div>
                    <div style="min-height: 60px; overflow: hidden;"><strong>Amina&nbsp;Kamran<br>Head of Senior School and Leading Head of School</strong></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/hmps.jpg" class="img-fluid">
                    </div>
                    <div style="min-height: 60px; overflow: hidden;"><strong>Raja Ashfaq Ahmad<br>Head of Prep School</strong></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/hmjs-v1.jpg" class="img-fluid">
                    </div>
                    <div style="min-height: 60px; overflow: hidden;"><strong>Fatima Mubeen<br>Head of Junior School</strong></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/dhmss.jpg" class="img-fluid">
                    </div>
                    <div style="min-height: 60px; overflow: hidden;"><strong>Dr. Muhammad Kamran<br>Deputy Headmaster Senior School</strong></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/dhmps.jpg" class="img-fluid">
                    </div>
                    <div style="min-height: 60px; overflow: hidden;"><strong>Tariq Jamil<br>Deputy Headmaster Prep School </strong></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/houpjs.jpg" class="img-fluid">
                    </div>
                    <div style="min-height: 60px; overflow: hidden;"><strong>Farzana Mehmood<br>Head of Upper Primary <br>&nbsp; <br>&nbsp;</strong></div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/holpjs.jpg" class="img-fluid">
                    </div>
                    <div style="min-height: 60px; overflow: hidden;"><strong>Sara Malik<br>Head of Lower Primary <br>&nbsp; <br>&nbsp;</strong></div>
                </div>
            </div>
            <hr>
            <h2 class="titile">Administration</h2>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/bursar.jpg" alt="" class="img-fluid">
                        <div><strong>Khalid Mohammad Noon<br>Bursar</strong></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/hr.jpg" alt="" class="img-fluid">
                        <div><strong>Waqar Noor Khan<br>Head of HR </strong></div>
                    </div>
                </div>
            </div>
			<hr>
            <h2 class="titile">College Management Committee</h2>
            <div class="row">
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/management-committee/dr-huma-alia-izhar.jpg" alt="" class="img-fluid">
                        <div><strong>
							Dr. Huma Alia Izhar<br>
							HOD Biology & Head of Sciences
							</strong><strong>Senior School</strong></div>
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/management-committee/samara-salahuddin.jpg" alt="" class="img-fluid">
                        <div><strong>
							Samara Salahuddin<br>
							HOD English & Head of the Year H1
							</strong><strong>Senior School</strong></div>
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/management-committee/sohail-ahmad-siddiqi.jpg" alt="" class="img-fluid">
                        <div><strong>
							Mr. Sohail Ahmad Siddiqi<br>
HOD Physics & Head of the Year H2
							</strong><strong> Senior School</strong></div>
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/management-committee/dr-naila-burney-chughtai.jpg" alt="" class="img-fluid">
                        <div><strong>Dr. Naila Burney Chughtai<br>Guidance Counsellor for UK</strong></div>
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/management-committee/mr-jamal-hussain.jpg" alt="" class="img-fluid">
                        <div><strong>Mr. Jamal Hussain<br>Guidance Counsellor for Oxford & USA</strong></div>
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/management-committee/ms-fariha-ramzan.jpg" alt="" class="img-fluid">
                        <div><strong>
							Ms. Fariha Ramzan<br>Controller Examinations

							</strong></div>
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/management-committee/umar-zaman1.jpg" alt="" class="img-fluid">
                        <div><strong>Mr. Umar Zaman<br> Games Master</strong></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/management-committee/dr-aftab.jpg" alt="" class="img-fluid">
                        <div><strong>Dr. Aftab Ahmad Malik<br>Senior Resident Medical Officer</strong></div>
                    </div>
                </div>
				<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/management-committee/dr-naheed-razaq.jpg" alt="" class="img-fluid">
                        <div><strong>Dr. Naheed Razzaq<br> Lady Resident Medical Officer</strong></div>
                    </div>
                </div>
            </div>

            <hr>
            <h2 class="titile">Senior School Housemasters/Housemistresses</h2>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/management-committee/dr-huma-alia-izhar.jpg" alt="" class="img-fluid">
                        <div><strong>
                                Dr. Huma Alia Izhar<br>
                                HOD Biology & Head of Sciences
                            </strong><strong>Senior School</strong></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/management-committee/samara-salahuddin.jpg" alt="" class="img-fluid">
                        <div><strong>
                                Samara Salahuddin<br>
                                HOD English & Head of the Year H1
                            </strong><strong>Senior School</strong></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/management-committee/sohail-ahmad-siddiqi.jpg" alt="" class="img-fluid">
                        <div><strong>
                                Mr. Sohail Ahmad Siddiqi<br>
                                HOD Physics & Head of the Year H2
                            </strong><strong> Senior School</strong></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/management-committee/dr-naila-burney-chughtai.jpg" alt="" class="img-fluid">
                        <div><strong>Dr. Naila Burney Chughtai<br>Guidance Counsellor for UK</strong></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/management-committee/mr-jamal-hussain.jpg" alt="" class="img-fluid">
                        <div><strong>Mr. Jamal Hussain<br>Guidance Counsellor for Oxford & USA</strong></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/management-committee/ms-fariha-ramzan.jpg" alt="" class="img-fluid">
                        <div><strong>
                                Ms. Fariha Ramzan<br>Controller Examinations

                            </strong></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/management-committee/umar-zaman1.jpg" alt="" class="img-fluid">
                        <div><strong>Mr. Umar Zaman<br> Games Master</strong></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/management-committee/dr-aftab.jpg" alt="" class="img-fluid">
                        <div><strong>Dr. Aftab Ahmad Malik<br>Senior Resident Medical Officer</strong></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="leading-card">
                        <img src="<?php echo $image_path;?>img/leading-staff/management-committee/dr-naheed-razaq.jpg" alt="" class="img-fluid">
                        <div><strong>Dr. Naheed Razzaq<br> Lady Resident Medical Officer</strong></div>
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

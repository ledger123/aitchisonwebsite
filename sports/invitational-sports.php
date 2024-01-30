<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Invitational Sports Tours"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v2.jpg';
?>

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
                    <li class="breadcrumb-item active" aria-current="page"><a href="sports">Sports</a></li>
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

            <div class="row">
                <img src="<?php echo $image_path;?>img/invitational-sports/header.png" alt="" class="" style="margin: 25px auto; display: block; height: 200px;">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <p>Aitchison College (1886) is one of Pakistan's great sporting schools. It has a rich legacy of national and Olympic representatives in all sports, as well as sporting administration. A current example is the Chairman of the PCB, Ramiz Raja, an old boy and former test cricketer. Our Prime Minister Imran Khan is also an old boy cricketing legend, among a long list of other test players dating back to Iftikhar Ali Khan Pataudi. Hockey greats Mohammed Jafar, Hassan Sardar, and Qasim Zia are synonymous with Gold in Olympic history. In 2018, we toured the UK and enjoyed cricket matches against Eton College, Wellington College, Marlborough College, and St Edwards School (Oxford). In 2019, we hosted the MCC. In short, Aitchison loves sports and wants to engage with foreign schools in friendly competition.</p>
                    <p>We would very much like to encourage your school to enjoy the delights of Lahore and stay at our college in very secure and beautiful surrounds. As with you no doubt, we have a profound belief in the value of sport and bringing boys from different backgrounds together. Costs in Pakistan are very favourable and the College will take especially good care of you, also providing optional tours of the Old City and historic sights, and introductions to current and past sporting greats in each sport.</p>
                    <p>Our preferred month during this season happens to coincide with the Australian cricket tour in February 2022. As for weather, we are flexible up to March 2022, if your calendar permits. Looking further ahead, any month between December and March in 2023 suits us.</p>
                    <p>If you are interested in touring for a few days, or a week, perhaps we could put our Games Masters or Directors of Sports in touch with one another. Alternatively, I am more than happy to pick up the phone and speak directly to you or your representative. Our website address is <a href="https://aitchison.edu.pk" target="_blank"><span style="color: blue;">www.aitchison.edu.pk</span></a></p>
                    <p>&nbsp;</p>
                    <p>Yours faithfully,</p>
                    <p>&nbsp;</p>
                    <img src="<?php echo $image_path;?>images/signature/principal_signature_new.png" width="212" height="72">
                    <p>
                        Michael Thomson M.A., Dip. Ed., M.A.C.E
                        <br>
                        Principal<br>
                        principal@aitchison.edu.pk
                    </p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="<?php echo $image_path;?>img/invitational-sports/1.jpg" alt="" class="img-fluid" style="margin: 10px auto; display: block;">
                    <img src="<?php echo $image_path;?>img/invitational-sports/2.jpg" alt="" class="img-fluid" style="margin: 10px auto; display: block;">
                    <img src="<?php echo $image_path;?>img/invitational-sports/3.jpg" alt="" class="img-fluid" style="margin: 10px auto; display: block;">
                    <img src="<?php echo $image_path;?>img/invitational-sports/4.jpg" alt="" class="img-fluid" style="margin: 10px auto; display: block;">
                    <div style="border: #000 1px solid; padding: 12px; font-size: 12px;">
                        <p><strong>List of Sports Available for Touring Teams</strong></p>
                        <p>Arena Polo (Tent-Pegging, Jumps and Dressage), Cricket, Basketball, Football (Rugby and Soccer), Hockey, Shooting, Squash, Tennis.</p>
                        <p>Contact Details:</p>
                        <p>Games Master, Mr. Umer Zaman Khan</p>
                        Email address: gamesmaster@aitchison.edu.pk<p></p>
                        Ph: 0092-300-8415158,<p></p>
                        0092-42-36317201-04 (Ext: 230)
                        <p></p>
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

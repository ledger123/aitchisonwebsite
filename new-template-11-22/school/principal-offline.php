<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Principal Aitchison College"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/school/about.jpg';
?>

<body>
<?php include_once ($path.'top-menu-bar.php'); ?>

<?php include_once ($path.'logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>

<div class="container-fluid">

    <div class="row mx-lg-5 mt-2">
        <div class="col-lg-9 col-md-6 col-sm-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="about-us">School</a></li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div style="height: 60px;"></div>
        </div>
    </div>
</div>


<div class="container-fluid">

    <div class="col-lg-9 col-md-12 col-sm-12">
        <div class="col-12 page-title">
            <h1><?php echo $title; ?></h1>
        </div>

    </div>
</div>

<div class="container">

    <!-- Contents -->
    <div class="row">

        <!-- Left Area -->
        <div class="col-lg-8 col-md-12 col-sm-12">

            <img src="<?php echo $image_path;?>img/principal/principal-202205233.jpg" class="img-fluid float-end ms-3 mb-1" style="width: 300px;" alt="Michael Alister Thomson">
            <div>
                <p style="padding:1px;">Australian Michael Thomson is the 18<sup>th</sup> Principal of Aitchison College. With extensive experience in international education and a strong boarding background, he believes in a broad and challenging school experience for every boy. He is the first foreign principal appointed since Independence. </p>
                <p style="padding:1px;">“While the College will always produce outstanding academic results, we do not measure boys by grades alone. We place the importance of character, self-discipline, community, integrity and effort at the heart of everything we do. Boys admitted to Aitchison must live up to high standards, play sport and engage in clubs and societies to broaden their capabilities and preparedness for life. We are an inclusive school that promotes respect and tolerance for others and we value talent in its broadest possible guise. We produce modern gentlemen. And being blessed with one of the world's finest campuses, sitting as it does in Lahore, we educate boys from all parts of the country and from all backgrounds. </p>
                <p>Our ambition for every boy is to see him graduate from the College with a clear set of values and the highest standards of effort, accomplishment and personal integrity."</p>
            </div>
            <div align="center" style="padding-top: 30px; padding-bottom: 20px;"><a href="<?php echo $path;?>principal-letters" style="color: #3A12DB;"><button type="button" class="btn btn-primary btn-sm">Principal's Newsletters</button></a></div>
            <div style="padding-bottom: 20px; padding-top: 30px;"><strong>CONTACT:</strong></div>
            <p>All appointments with the Principal must be pre-arranged with his office (<a href="mailto:pa.principal@aitchison.edu.pk">pa.principal@aitchison.edu.pk</a>) and with the purpose of the visit clearly stated.</p>
            <p>Contact Details:</p>
            <p>UAN [92 42] 111 363 063
                <br>
                Fax: [92 42] 3636 2989</p>
            <p>Email: principal@aitchison.edu.pk </p>
        </div>
        <!-- End Left Area -->

        <!-- Right Area -->
        <div class="col-lg-4 col-md-6 col-sm-12 text-center news-links">
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

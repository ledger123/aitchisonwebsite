<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Facilities"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/school.jpg';
?>

<body>
<?php include_once ($path.'top-menu-bar.php'); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent nav-home">

    <div class="logo-left">

    </div>

</nav>

<section style="background: url(<?php echo $banner_url; ?>); background-repeat: no-repeat;background-size: cover;" class="page-banner">

    <div class="container banner-text">
        <div class="banner-heading">

        </div>
    </div>
</section>

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
            <nav>
                <ul class="social-color nav-social mt-2 mb-2">
                    <li><a href="https://www.facebook.com/Aitchison-College-368847620484906" target="_blank">Facebook</a></li>
                    <li><a href="https://www.instagram.com/aitchisoncollegeofficial" target="_blank">Instagram</a></li>
                    <li><a href="https://www.linkedin.com/company/14764887" target="_blank">Linkedin</a></li>
                </ul>
            </nav>
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
            <p>Aitchison enjoys many fine facilities: among these are historic buildings of national significance, boarding houses, dining halls, hospital, spacious general school buildings, science laboratories, libraries, unique college amphitheatre, equestrian centre, expansive playing fields, squash complex, diving pool and hardcourt surfaces, and much more. It is a ‘city’ in itself and an environment in which a boy can reach his potential because there is always something here to inspire and motivate him. The College has its own plant nursery that underpins most of the seasonal beauty that receives so many accolades. The College also has its own general store, barber, tailor and four canteens.</p>

            <div class="row" style="text-align: center;">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="gallerySLide" class="gallery_area">

                        <a href="<?php echo $image_path;?>img/facilities/mcg.jpg" title="Cricket Pavilion">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/mcg.jpg" alt="img" />
                            <span class="view_btn">Cricket Pavilion</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/AMPHITHEATRE.jpg" title="Amphitheatre">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/AMPHITHEATRE.jpg" alt="img" />
                            <span class="view_btn">Amphitheatre</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/basketball-courts-1.jpg" title="Basketball Courts">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/basketball-courts-1.jpg" alt="img" />
                            <span class="view_btn">Basketball Courts</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/basketball-courts-2.jpg" title="Basketball Courts">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/basketball-courts-2.jpg" alt="img" />
                            <span class="view_btn">Basketball Courts</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/SYED-BABAR-ALI-LIBRARY.jpg" title="Syed Babar Ali Library">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/SYED-BABAR-ALI-LIBRARY.jpg" alt="img" />
                            <span class="view_btn">Syed Babar Ali Library</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/tennis-court.jpg" title="Tennis Courts">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/tennis-court.jpg" alt="img" />
                            <span class="view_btn">Tennis Courts</span>
                        </a>


                        <a href="<?php echo $image_path;?>img/facilities/acoba.jpg" title="ACOBA Ground">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/acoba.jpg" alt="ACOBA Ground" />
                            <span class="view_btn">ACOBA Ground</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/jr-cricket-pavilion.jpg" title="Js Cricket Pavilion">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/jr-cricket-pavilion.jpg" alt="Js Cricket Pavilion" />
                            <span class="view_btn">Junior School Cricket Pavilion</span>
                        </a>



                        <a href="<?php echo $image_path;?>img/facilities/HOSPITAL-MAIN-BLOCK.jpg" title="College Hospital">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/HOSPITAL-MAIN-BLOCK.jpg" alt="img" />
                            <span class="view_btn">College Hospital</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/jaffar-hockry-ground-new.jpg" title="Jaffar Memorial Hockey Field">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/jaffar-hockry-ground-new.jpg" alt="img" />
                            <span class="view_btn">Jaffar Memorial Hockey Field</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/js-computer-lab.jpg" title="Junior School Computer Lab">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/js-computer-lab.jpg" alt="img" />
                            <span class="view_btn">Computer Labs</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/JSBASKETBALL.jpg" title="Junior School Playing Area">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/JSBASKETBALL.jpg" alt="img" />
                            <span class="view_btn">Junior School Playing Area</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/JUNIOR-SCHOOL-POOL-AREA.jpg" title="Junior School Swimming Pool">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/JUNIOR-SCHOOL-POOL-AREA.jpg" alt="img" />
                            <span class="view_btn">Junior School Swimming Pool</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/sports-academy.jpg" title="Sports - Cricket Academy">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/sports-academy.jpg" alt="img" />
                            <span class="view_btn">Sports - Cricket Academy</span>
                        </a>

                        <a href="<?php echo $image_path;?>img/facilities/riding-ground-3.jpg" title="Riding Ground">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/riding-ground-3.jpg" alt="img" />
                            <span class="view_btn">Riding Ground</span>
                        </a>

                        <a href="<?php echo $image_path;?>img/facilities/riding-ground-4.jpg" title="Riding Ground">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/riding-ground-4.jpg" alt="img" />
                            <span class="view_btn">Riding Ground</span>
                        </a>

                        <a href="<?php echo $image_path;?>img/facilities/RINDING-GROUND2.jpg" title="Riding Ground">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/RINDING-GROUND2.jpg" alt="img" />
                            <span class="view_btn">Riding Ground</span>
                        </a>

                        <a href="<?php echo $image_path;?>img/facilities/arena-polo.jpg" title="Arena Polo">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/arena-polo.jpg" alt="img" />
                            <span class="view_btn">Arena Polo</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/js-science-lab.jpg" title="Junior School Science Lab">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/js-science-lab.jpg" alt="img" />
                            <span class="view_btn">Junior School Science Lab</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/MAIN-FOOTBALLGROUND.jpg" title="Main Football Ground">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/MAIN-FOOTBALLGROUND.jpg" alt="img" />
                            <span class="view_btn">Main Football Ground</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/diving-pool.jpg" title="Diving Pool">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/diving-pool.jpg" alt="Diving Pool" />
                            <span class="view_btn">Diving Pool</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/MAIN-SWIMMING-POOL-COMPLEX.jpg" title="Swimming Academy">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/MAIN-SWIMMING-POOL-COMPLEX.jpg" alt="img" />
                            <span class="view_btn">Swimming Academy</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/MASJID.jpg" title="Mosque">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/MASJID.jpg" alt="img" />
                            <span class="view_btn">Mosque</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/MONNOO-SQUASH-COMPLEX.jpg" title="Monnoo Squash Complex">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/MONNOO-SQUASH-COMPLEX.jpg" alt="img" />
                            <span class="view_btn">Monnoo Squash Complex</span>
                        </a>
                        <!--<a href="<?php echo $image_path;?>img/facilities/RINDING-SCHOOL.jpg" title="Riding Ground">
                          <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/RINDING-SCHOOL.jpg" alt="img" />
                          <span class="view_btn">Riding Ground</span>
                        </a>-->
                        <a href="<?php echo $image_path;?>img/facilities/boarding.jpg" title="Boarding">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small/boarding.jpg" alt="img" />
                            <span class="view_btn">Boarding</span>
                        </a>

                    </div>
                </div>
            </div>
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

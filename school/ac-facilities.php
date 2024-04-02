<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Facilities"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
$page_header = $title;
?>

<body>
<?php include_once ($path.'new-logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">

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
</div>

<div class="container">
    
    <!-- Contents -->
    <div class="row page-contents">

        <!-- Left Area -->
        <div class="col-lg-9 col-md-12 col-sm-12">
            <p>Aitchison enjoys many fine facilities: among these are historic buildings of national significance, boarding houses, dining halls, hospital, spacious general school buildings, science laboratories, libraries, unique college amphitheatre, equestrian centre, expansive playing fields, squash complex, diving pool and hardcourt surfaces, and much more. It is a ‘city’ in itself and an environment in which a boy can reach his potential because there is always something here to inspire and motivate him. The College has its own plant nursery that underpins most of the seasonal beauty that receives so many accolades. The College also has its own general store, barber, tailor and four canteens.</p>

            <div class="row" style="text-align: center;">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div id="gallerySLide" class="sgallery_area2">

                        <a href="<?php echo $image_path;?>img/facilities/mcg.jpg" title="Cricket Pavilion">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/mcg.jpg" alt="img" />
                            <span class="view_btn">Cricket Pavilion</span>
                        </a>

                        <a href="<?php echo $image_path;?>img/facilities/acoba-ground.jpg" title="ACOBA Ground">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/acoba-ground.jpg" alt="ACOBA Ground" />
                            <span class="view_btn">ACOBA Ground</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/junior-cricket-ground-2.jpg" title="Junior Cricket Ground">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/junior-cricket-ground-2.jpg" alt="Junior Cricket Ground" />
                            <span class="view_btn">Junior Cricket Ground</span>
                        </a>

                        <a href="<?php echo $image_path;?>img/facilities/sports-academy.jpg" title="Sports - Cricket Academy">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/sports-academy.jpg" alt="img" />
                            <span class="view_btn">Sports - Cricket Academy</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/basketball-courts-1.jpg" title="Basketball Courts">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/basketball-courts-1.jpg" alt="img" />
                            <span class="view_btn">Basketball Courts</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/basketball-courts-3.jpg" title="Basketball Courts">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/basketball-courts-3.jpg" alt="img" />
                            <span class="view_btn">Basketball Courts</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/tennis-court-3.jpg" title="Tennis Courts">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/tennis-court-3.jpg" alt="img" />
                            <span class="view_btn">Tennis Courts</span>
                        </a>

                        <a href="<?php echo $image_path;?>img/facilities/rugby-pavilion.jpg" title="Rugby Pavilion">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/rugby-pavilion.jpg" alt="img" />
                            <span class="view_btn">Rugby Pavilion</span>
                        </a>



                        <?php /*?><a href="<?php echo $image_path;?>img/facilities/jafar-hockey.jpg" title="Jaffar Memorial Hockey Field">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/jafar-hockey.jpg" alt="img" />
                            <span class="view_btn">Jafar Memorial Hockey Field</span>
                        </a><?php */?>
                        <a href="<?php echo $image_path;?>img/facilities/monnoo-squash-complex-4.jpg" title="Monnoo Squash Complex">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/monnoo-squash-complex-4.jpg" alt="img" />
                            <span class="view_btn">Monnoo Squash Complex</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/monnoo-squash-complex-5.jpg" title="Monnoo Squash Complex">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/monnoo-squash-complex-5.jpg" alt="img" />
                            <span class="view_btn">Monnoo Squash Complex</span>
                        </a>
                        <?php /*?><a href="<?php echo $image_path;?>img/facilities/JUNIOR-SCHOOL-POOL-AREA.jpg" title="Junior School Swimming Pool">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/JUNIOR-SCHOOL-POOL-AREA.jpg" alt="img" />
                            <span class="view_btn">Junior School Swimming Pool</span>
                        </a><?php */?>

                        <a href="<?php echo $image_path;?>img/facilities/riding-ground-3.jpg" title="Riding Ground">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/riding-ground-3.jpg" alt="img" />
                            <span class="view_btn">Riding Ground</span>
                        </a>

                        <a href="<?php echo $image_path;?>img/facilities/riding-ground-4.jpg" title="Riding Ground">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/riding-ground-4.jpg" alt="img" />
                            <span class="view_btn">Riding Ground</span>
                        </a>

                        <a href="<?php echo $image_path;?>img/facilities/RINDING-GROUND2.jpg" title="Riding Ground">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/RINDING-GROUND2.jpg" alt="img" />
                            <span class="view_btn">Riding Ground</span>
                        </a>

                        <a href="<?php echo $image_path;?>img/facilities/arena-polo.jpg" title="Arena Polo">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/arena-polo.jpg" alt="img" />
                            <span class="view_btn">Arena Polo</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/jafar-hockey-2.jpg" title="Jaffar Memorial Hockey Field">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/jafar-hockey-2.jpg" alt="img" />
                            <span class="view_btn">Jafar Memorial Hockey Field</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/MAIN-FOOTBALLGROUND.jpg" title="Main Football Ground">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/MAIN-FOOTBALLGROUND.jpg" alt="img" />
                            <span class="view_btn">Main Football Ground</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/diving-pool.jpg" title="Diving Pool">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/diving-pool.jpg" alt="Diving Pool" />
                            <span class="view_btn">Diving Pool</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/JUNIOR-SCHOOL-POOL-AREA.jpg" title="Junior School Swimming Pool">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/JUNIOR-SCHOOL-POOL-AREA.jpg" alt="img" />
                            <span class="view_btn">Junior School Swimming Pool</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/MAIN-SWIMMING-POOL-COMPLEX.jpg" title="Swimming Academy">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/MAIN-SWIMMING-POOL-COMPLEX.jpg" alt="img" />
                            <span class="view_btn">Swimming Academy</span>
                        </a>
                        <?php /*?><a href="<?php echo $image_path;?>img/facilities/MONNOO-SQUASH-COMPLEX.jpg" title="Monnoo Squash Complex">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/MONNOO-SQUASH-COMPLEX.jpg" alt="img" />
                            <span class="view_btn">Monnoo Squash Complex</span>
                        </a><?php */?>
                        <a href="<?php echo $image_path;?>img/facilities/JSBASKETBALL.jpg" title="Junior School Playing Area">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/JSBASKETBALL.jpg" alt="img" />
                            <span class="view_btn">Junior School Playing Area</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/boarding.jpg" title="Boarding">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/boarding.jpg" alt="img" />
                            <span class="view_btn">Boarding</span>
                        </a>


                        <a href="<?php echo $image_path;?>img/facilities/sba-library.jpg" title="SBA Library">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/sba-library.jpg" alt="img" />
                            <span class="view_btn">SBA Library</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/aj-science-innovation-centre.jpg" title="AJ SCIENCE INNOVATION CENTRE">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/aj-science-innovation-centre.jpg" alt="img" />
                            <span class="view_btn">AJ SCIENCE INNOVATION CENTRE</span>
                        </a>

                        <a href="<?php echo $image_path;?>img/facilities/chemistry-lab-5.jpg" title="Chemistry Lab">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/chemistry-lab-5.jpg" alt="img" />
                            <span class="view_btn">Chemistry Lab</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/chemistry-lab-6.jpg" title="Chemistry Lab">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/chemistry-lab-6.jpg" alt="img" />
                            <span class="view_btn">Chemistry Lab</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/chemistry-lab-7.jpg" title="Chemistry Lab">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/chemistry-lab-7.jpg" alt="img" />
                            <span class="view_btn">Chemistry Lab</span>
                        </a>

                        <a href="<?php echo $image_path;?>img/facilities/AMPHITHEATRE.jpg" title="Amphitheatre">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/AMPHITHEATRE.jpg" alt="img" />
                            <span class="view_btn">Amphitheatre</span>
                        </a>
                        <a href="<?php echo $image_path;?>img/facilities/MASJID.jpg" title="Mosque">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/MASJID.jpg" alt="img" />
                            <span class="view_btn">Mosque</span>
                        </a>
                        <!--<a href="<?php echo $image_path;?>img/facilities/RINDING-SCHOOL.jpg" title="Riding Ground">
                          <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/RINDING-SCHOOL.jpg" alt="img" />
                          <span class="view_btn">Riding Ground</span>
                        </a>-->
                        <a href="<?php echo $image_path;?>img/facilities/HOSPITAL-MAIN-BLOCK.jpg" title="College Hospital">
                            <img class="gallery_img" src="<?php echo $image_path;?>img/facilities/small2/HOSPITAL-MAIN-BLOCK.jpg" alt="img" />
                            <span class="view_btn">College Hospital</span>
                        </a>

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

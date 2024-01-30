<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Senior School"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/ss-school.jpg';
?>

<body>
<?php include_once ($path.'top-menu-bar.php'); ?>

<?php include_once ($path.'logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>

<style>

    .swiper {
        width: 100%;
        max-height: 140px;
    }

    .swiper-slide {
        height: 140px;

        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }

    .boarding-houses {
        font-size: 1.8rem !important;
    }

@media (max-width: 600px) {
    .boarding-houses {
        font-size: 1rem !important;
    }
}

    .boarding-item {
        margin-bottom: 2rem!important;
        box-shadow: 0 0 20px 0 rgb(0 0 0 / 30%);
        transition: box-shadow .1s ease-in-out;
    }

</style>

<div class="container">
<div class="row mt-2">
        <div class="col-lg-9 col-md-6 col-sm-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="our-schools">Our Schools</a></li>
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
			<div class="col-sm-12">
				<div class="d-none d-md-block text-center" style="float: right;margin: 0px 0px 0px 30px;max-width: 392px;">
					<img src="<?php echo $image_path;?>img/pageimages/hmss_20220919.jpg" class="rounded" alt="Image" width="100%">
					<span class="imgtitle">Mrs. Amina Kamran<br />Headmistress Senior School</span>
				</div>
				<div class="d-block d-md-none text-center">
					<img src="<?php echo $image_path;?>img/pageimages/hmss_20220919.jpg" class="rounded" alt="Image" width="100%">
					<span class="imgtitle">Mrs. Amina Kamran<br />Headmistress Senior School</span>
				</div>
			<p style="text-justify: inter-word; ">Senior School ranges in age from 14 to 18 years and prepares boys for Cambridge IGCSE, AS/A Levels and FBISE Matric, FSc (pre Med). Each boy is expected to make academics a priority, while still engaging in a full school program. In addition to normal classes,H2 boys (A2 Level) benefit from a special tutorial program in Mathematics and Sciences, approximating a university-styled approach. The College has been a Cambridge Examination Centre since 1933 and is the only school in Pakistan with that distinction. Our teaching is aimed at preparing boys for external assessment across a wide range of subjects, but also inspiring and challenging boys through Harkness Table sessions and Meta-Cognition tutorials run by our Adjunct faculty of distinguished old boys and visiting scholars. We also acknowledge and support individuality within the broader needs of a vibrant and disciplined community. We appreciate that boys possess different talents and interests and we do our best to cater for this with an extensive sporting and co-curricular program that includes over 20 clubs and societies. Sport is compulsory. The College groups its pupils in houses: currently, 17 of which 5 are for boarders and 12 for day boys. Each Head of House is supported by an assistant and general staff who are there to encourage boys and offer sound advice. This system actively underpins a positive and constructive school environment. Boys hold leadership positions as College and School prefects, with a Portfolio Council engaging boys of different ages in managing school life.</p>			</div>
			</div>
            <div class="row text-justify">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="float-end ms-3 d-none">
                        <img src="<?php echo $image_path;?>img/pageimages/hmss_20220919.jpg" class="img-fluid rounded" style="max-width: 400px; height: auto;" alt="" />
                        <br />
                        <div class="text-center">
                            <em style="font-size: 13px;">Mrs. Amina Kamran<br />Headmistress Senior School</em>
                        </div>
                    </div>
                    
					<div class="text-center mb-3 d-none">
                        <div class="ms-auto me-auto" style="width: fit-content;">
                            <img src="<?php echo $image_path;?>img/pageimages/hmss_20220919.jpg" class="img-fluid" alt="Image">
                            <div class="text-start" style="background-color: #001952; padding: 5px 15px; color: #fff; font-weight: 500; width: fit-content;">AMINA KAMRAN | <span style="font-weight: 400;">Head of Senior School and Leading Head of School</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <p>Boys in Year 10 and 11 (ostensibly O Levels) may opt either for the National or International streams  -the latter not including requisite subjects for admission to universities in Pakistan. Years 12 and 13 study AS and A2 levels. Our Guidance Counseling plays a crucial part in targeting subject selection. Many of our boys receive regular admissions to the world's top universities.</p>
            </div>
            <div><p>Considerable attention is paid to the moral, intellectual, and character development of each boy. Qualities of enthusiasm and initiative, high standards of behaviour, decorum and discipline are regularly emphasized.</p>
            </div>

            <div class="page-title" style="padding-left: 0 !important;">
                <h1 class="mb-3 boarding-houses">Day and Boarding Houses</h1>
            </div>

            <div class="mb-5">
                <?php
                $imgArr = ['1', '2', '14', '3', '4', '16', '5', '6', '7', '8', '9', '10', '11', '12', '13'];
				$imgArr = ['18', '17a','1', '2', '14', '3', '4', '16', '5', '6', '7', '8', '9', '10', '11', '12', '13'];
                foreach ($imgArr as $i) { ?>
                    <div class="mb-2 boarding-item">
                        <img src="<?php echo $image_path; ?>img/ss-houses-logos-1/<?php echo $i; ?>.png" class="img-fluid">
                    </div>
                <?php } ?>

            </div>

            <div class="">
                <div id="gallerySLide" class="sgallery_area">

                    <?php
                    $imgPath = $image_path."img/pageimages/gallery/ss1/";
                    $imgPathSmall = $image_path."img/pageimages/gallery/ss1/small1/";

                    $imgArr = ['1', '2', '37', '34', '35', '36', '4', '25', '26', '27', '10', '28', '40', '13', '29', '30', '31', '38', '23', '32', '24', '33', '20', '22'];
                    foreach ($imgArr as $i) {

                        ?>
                        <a href="<?php echo $imgPath . $i . ".jpg"; ?>" title="Senior School">
                            <img class="gallery_img" src="<?php echo $imgPathSmall . $i . ".jpg"; ?>" alt="img">
                            <span class="view_btn">Senior School</span>
                        </a>

                        <?php
                    }
                    ?>
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
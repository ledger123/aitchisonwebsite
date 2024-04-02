<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Junior School"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/our-school/junior-school.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="our-schools">Our Schools</a></li>
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
			<div class="row">
			<div class="col-sm-12">
				<div class="d-none d-md-block text-center" style="float: right;margin: 0px 0px 0px 30px;max-width: 392px;">
					<img src="<?php echo $image_path;?>img/pageimages/hmjs-20221006.jpg" class="rounded" alt="Grand Trunk Road Umballa Cantonment" width="100%">
					<span class="imgtitle">Mrs. Fatima Mubeen<br>Headmistress Junior School</span>
				</div>
				<div class="d-block d-md-none text-center">
					<img src="<?php echo $image_path;?>img/pageimages/hmjs-20221006.jpg" class="rounded" alt="Grand Trunk Road Umballa Cantonment" width="100%">
					<span class="imgtitle">Mrs. Fatima Mubeen<br>Headmistress Junior School</span>
				</div>
			<p>Junior School is a vibrant, thriving and fun place for young boys to learn and grow - an environment in which collaboration, skill, compassion and high expectations combine in a modern school setting. A unique boarding experience also promotes friendship, trust and honesty among children from all provinces of Pakistan.</p>
			<p>Junior School teaches K1- K6. Most students are offered admission in K2 between the ages of 6 and 7. At all levels, boys are exposed to activities that encourage intellectual growth and positive socialization. The Cambridge Primary Curriculum of English, Mathematics and Science lies at the centre of a broad academic offering. We encourage our boys to be independent, 21<sup>st</sup> century learners, full of inquiry based on the skill set to observe, analyse, question, discuss and reflect. Junior School promotes computer literacy (including robotics and coding) as the 'third language' from K2 upwards.</p>
			<p>Sport and club activities abound and are a compulsory part of the Aitchison experience.</p>
			<p>Junior School management is aided by a Head of Lower Junior School (K1 to K3) and a Head of Upper Junior School (K4 to K6). </p>
			</div>
			</div>
            <div class="row d-none">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="float-end ms-3 d-none">
                        <img src="<?php echo $image_path;?>img/pageimages/js-07082019.jpg" class="img-fluid rounded" alt="Image">
                        <br>
                        <div class="text-center">
                            <em style="font-size: 13px;">Mrs. Fatima Mubeen<br>Headmistress Junior School</em>
                        </div>
                    </div>
                    <p>Junior School is a vibrant, thriving and fun place for young boys to learn and grow - an environment in which collaboration, skill, compassion and high expectations combine in a modern school setting. A unique boarding experience also promotes friendship, trust and honesty among children from all provinces of Pakistan.</p>
                    <p>Junior School teaches K1- K6. Most students are offered admission in K2 between the ages of 6 and 7. At all levels, boys are exposed to activities that encourage intellectual growth and positive socialization. The Cambridge Primary Curriculum of English, Mathematics and Science lies at the centre of a broad academic offering. We encourage our boys to be independent, 21<sup>st</sup> century learners, full of inquiry based on the skill set to observe, analyse, question, discuss and reflect. Junior School promotes computer literacy (including robotics and coding) as the 'third language' from K2 upwards.</p>
                    <p>Sport and club activities abound and are a compulsory part of the Aitchison experience.</p>
                    <p>Junior School management is aided by a Head of Lower Junior School (K1 to K3) and a Head of Upper Junior School (K4 to K6). </p>
                </div>
            </div>
            <div class="text-center">
                <div id="gallerySLide" class="sgallery_area2">

                    <?php
                    $imgPath = $image_path."img/pageimages/gallery/jschool/";
                    $imgPathSmall = $image_path."img/pageimages/gallery/jschool/small1/";
					$imageArr = ['1', '2', '3', '4', '23', '5', '6', '7', '8', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '21'];

                    //for ($i = 1; $i < 21; $i++) {
					foreach($imageArr as $img) {  ?>                        
                        <a href="<?php echo $imgPath . $img . ".jpg"; ?>" title="Junior School">
                            <img class="gallery_img" src="<?php echo $imgPathSmall . $img . ".jpg"; ?>" alt="Image">
                            <span class="view_btn">Junior School</span>
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
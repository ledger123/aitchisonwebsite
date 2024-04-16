<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Our Schools"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
$page_header = $title;
?>

<body>

<?php include_once ($path.'logo-page-banner.php'); ?>

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
    </div>
</div>


<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- Left Area -->
        <div class="col-lg-9 col-md-12 col-sm-12">

            <p>When Aitchison was founded in 1886, its emphasis was on educating the 'princely elites.' Since Independence this has given way to an egalitarian mix of pupils drawn from all parts of the country. Boys study Cambridge curriculum in Junior and Prep, with the option of Aga Khan Matric, FSc (pre Med) and FA. Our 3,000 pupils are truly reflective of the demographic mix of the nation.</p>
            <p>While Aitchison is superbly resourced and ever-developing, it has retained its character over the years by maintaining the public school tradition of providing an education that uses academics, sports, co-curricular activities and clubs as tools for character development. It is fortunate to have the finest campus in Pakistan to support this aim, spread over almost 200 acres in the heart of the city. The ancient fulcrum of the campus is the majestic Old Building and Aitchison Hall, around which are located our three schools - Junior catering for boys between the ages of 5-10, Preparatory for 11-13 year olds, and Senior for boys between the ages of 14 and 18. Our College also provides boarding facilities for up to 500 out-station boys in each of the three schools.</p>
            <p>Aitchison prides itself on producing leaders. Its list of alumni is one obvious indicator of the significance of its impact on the nation's development. Most recently, Imran Khan ('69) was the third elected Prime Minister to attend the College. Aitchisonians have made and continue to make their mark both here and across the world in all fields of endeavour. Boys who gain entry to the College are held to high standards of endeavour and integrity.</p>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="<?php echo $image_path; ?>/img/our-school-24102017/1.jpg" alt="Image" class="img-fluid" style="height: auto; margin-top: 10px;">
                    <p style="font-size: small; padding-top: 5px;">H2 Graduating cohort at the Old Building, which is our A2 Level Centre</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="<?php echo $image_path; ?>/img/our-school-24102017/5.jpg" alt="Image" class="img-fluid" style="height: auto; margin-top: 10px;">
                    <p style="font-size: small; padding-top: 5px;">Evening tutorials are a major feature of boarding house life and underpin outstanding results and worldwide admissions.</p>
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
<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "About Us"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/school/about.jpg';
$page_header = $title;
if(is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"))){
	$background_align="left left; background-position-x: 25%";
}	
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
                        <li class="breadcrumb-item active" aria-current="page"><a href="about-us">School</a></li>
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

            <div class="page-title">
                <h1>Aitchison College is more than a School</h1>
            </div>

            <p>Aitchison College began as one of the five Chiefs’ Colleges of northern India. From a narrow imperial mission in 1886, it has grown into the nation’s most diverse school and a truly national expression of education. As a boarding and day school, it offers both international and national curricula, unrivalled sports facilities, an extensive co-curricular program and many special interest clubs that enlarge boys’ curiosity and social responsibility. Our educational approach is knowledge-based with an emphasis on exploring concepts through the use of Harkness discussion, Adjunct faculty programs, and many internal and external competitions in which our boys usually excel. Aitchison hosts numerous annual conventions that promote artistic expression, business entrepreneurship, scientific investigation, debating and public speaking. Our aim is to provide as many opportunities for boys to find enjoyment in cooperative learning.</p>
            <p>Aitchison College educates 3,000 boys from junior to senior level classes on a glorious 200 acre campus. Many Aitchison boys gain admission to Ivy League and leading USA universities and Russell Group universities in the UK, as well as leading Pakistan universities. We are fortunate to be registered as both Cambridge and Aga Khan Examination Centres with our own SAT Centre registered with the American College Board. Not as well known is that a further 800 boys and girls attend our two Campus High Schools within the College, from nursery upwards, and share many facilities. These schools are fully funded charity schools charging no tuition fees. Each year a number of boys and girls who graduate with Matric are admitted to pre Med, pre Engineering and other valuable courses at excellent government colleges. In this regard, Aitchison is far more than what it appears. As a residential college, it also houses many hundreds of people who all contribute to the operation of this complex institution.</p>
            <p>Tradition is everywhere at Aitchison; no better expressed than in Friday dress –Shalwar Kameez, blazer and turban in summer, and Achkan Sherwani with turban in winter. Formality and good manners sit comfortably with a relaxed school atmosphere. Indeed, Aitchison is a beacon of education in Pakistan. </p>

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

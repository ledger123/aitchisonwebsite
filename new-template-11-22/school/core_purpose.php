<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "The Core Purpose"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
//$banner_url = $path.'resources/assets/images/banners/school/about.jpg';

$page_header = $title;
?>
<style>
    .circleol {
        list-style: circle;
        padding-left: 40px;
        font-weight: bold;
        text-align: justify;
        line-height: 1.6em;
    }
</style>
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

            <p>
                The core purpose of Aitchison College is to help boys become leaders. We strive to instill four essential qualities in each boy:
            </p>
            <p>
            </p><ul class="circleol">
                <li>Knowledge</li>
                <li>Reflection</li>
                <li>Adaptability</li>
                <li>Determination</li>
            </ul>
            <p></p>
            <p>Interwoven within these qualities are high expectations:</p>
            <p>
            </p><ul class="circleol">
                <li>Attainment at a high level in one’s chosen academic programmes.</li>
                <li>An awareness of healthy habits and the importance of fitness gained through a full and active sporting programme.</li>
                <li>Attainment of self-awareness, teamwork and strength through humility. This is encouraged by active participation in extracurricular and community service opportunities.</li>
                <li>An ability to relate to others with tolerance, respect and consideration whatever their beliefs and attitudes.</li>
                <li>Adoption of an ethical and moral set of values: understanding right from wrong, handling success and disappointment and accepting that one's actions have consequences.</li>
            </ul>
            <p></p>
            <p>Our Curriculum places strong emphasis on what we term ‘Essential Core Skills’:</p>
            <p>
            </p><ul class="circleol">
                <li> Literacy (reading, writing, speaking and listening in English and Urdu and a foreign language –Classical or Modern)</li>
                <li>Mathematics</li>
                <li>Science</li>
                <li>Digital Literacy</li>
                <li>Meta Cognition or Enrichment Studies</li>
            </ul>
            <p></p>
            <p>We encourage boys to express themselves and benefit from a variety of additional interests and specializations that make for a well-rounded young person. These may include:</p>
            <p><strong>Music, Art, Drama, Humanities, Accounting, Business, Economics, Law, Sociology, and the national studies of Islamiat and Pakistan Studies. Added to these are 22 clubs and societies that further enrich the mind and interest of boys.</strong></p>
            <p>We strive to instill Leadership Attributes by encouraging boys of all ages to:</p>
            <p>
            </p><ul class="circleol">
                <li>Contribute positively to community</li>
                <li>Apply knowledge with compassion</li>
                <li>Solve problems collaboratively</li>
                <li>Solve problems creatively</li>
                <li>Make ‘just’ choices</li>
                <li>Face challenges with determination</li>
            </ul>
            <p></p>
            <p>
                These attributes prepare boys not only for success at a top university, but they learn the fundamentals of self-discipline that underpins effective leadership for a <em>Better World</em>.</p>
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

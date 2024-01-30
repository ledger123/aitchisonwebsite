<!DOCTYPE html>
<html>

<?php

include_once("../path-settings.php");

$title = "Academics"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/admissions/banner.jpg';
$page_header = $title;
?>

<style>

.banner-heading {
    margin: 0;
    position: absolute;
    bottom: 0;
    -ms-transform: translateY(7px);
    transform: translateY(7px);
    line-height: .9;
    color: #ffc845;
    left: 0;
    top: 284px;
    padding-left: 12px;
    z-index: 100;
    font-size: 72px;
    font-weight: 100;
    text-transform: uppercase;
}

.breadcrumb-bar {
    position: relative;
    background-color: #ffc845;
    z-index: 200;
}

.breadcrumb {
    margin-top: unset;
    margin: 0.2rem 0;
}

.page-contents {
    padding-top: 3rem!important;
}

@media(max-width: 768px) {
    .banner-heading {
        margin: 0;
        top: 305px;
        font-size: 48px;
    }
}

@media (max-width: 600px) {
    .banner-heading {
        margin: 0;
        top: 323px;
        font-size: 30px;
        -ms-transform: translateY(3px);
        transform: translateY(3px);
    }
}

.show-hide {
    display:none;
}

</style>

<body>

<?php include_once ($path.'new-logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="ac-academics">Academics</a></li>
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

            <p>Aitchison College is an accredited Cambridge School and Cambridge Examination Centre, as well as a provider of FBISE and Aga Khan FSc and Matric options in senior years. We are committed to an academic programme that challenges boys and prepares them for seamless transition between year levels throughout our three schools: Junior, Prep and Senior. All teaching is shaped by modern pedagogy and subject departments are led by well qualified and highly experienced Heads of Department supported by Academic Coordinators and Deputy Heads reporting to each Head of School. We drive learning through creative, activity based classes, especially in Junior and Prep, in which concepts underpin knowledge acquisition and application. <span class="show-hide">The College has introduced a unique tutorial system for A2 (H2) boys and is the first in the country to build a Science Innovation Centre dedicated to off-curriculum studies in astrophysics, AI robotics and programming, biochemistry and environmental science with patrons from top universities. The Principal carries overall responsibility for the quality and direction of academics at the College, while the Headmistress and Senior Academic Committee, comprising the Examination Coordinator, manage senior assessment and reporting that impacts university admissions. Aitchison boys regularly gain admission to Oxbridge and Russell Group universities, Ivy League and other prestigious institutions. In the past five years, the College has secured seven admissions to each of Harvard and Stanford universities. Academic life is reflected in the remarkably strong placements of graduating boys in <a href="<?php echo $path;?>school/university-placements" target="_blank"><span style="color: blue;">foreign as well as national universities of distinction</span></a>. Aitchison has its own SAT Centre registered with the American College Board and an outstanding University Guidance department.</span></p>
            <span class="show-hide">
            <p><strong>Academic concerns or queries should be directed to the relevant Head of School.</strong>

</p>
            <p>Academic achievement is celebrated with the awarding of prizes and other forms of recognition in special assemblies and Founders’ Day. Academic life is not restricted to the classroom. Societies, clubs and enrichment programmes fulfil the spirit of Aitchison’s broad intellectual life. Curiosity is well-supported by online learning and libraries in each of the three schools. Every child matters to us and we pride ourselves on being proactive in support learning.</p>
            </span>
            <div class="text-center">
                <a href="#" class="button-link small" id="toggle">Read More</a>
            </div>
            <?php /*?><p>Every child matters to us and we pride ourselves on being proactive in supporting learning outcomes. The success of our Academic life is reflected in the remarkably strong placements of graduating boys in&nbsp;<a href="<?php echo $path;?>school/university-placements" target="_blank"><span style="color: blue;">foreign as well as national universities of distinction.</span></a>&nbsp;Aitchison has its own SAT Centre registered with the American College Board and an outstanding University Guidance department.</p><?php */?>
            <p>&nbsp;</p>
            <div class="col-xs-12 col-md-12">
                <div class="row">
                    <?php /*?><div class="col-lg-6 col-sm-6 col-xs-12 col-md-6" style="margin-top: 10px;">
                        <img src="../img/academics/1.jpg" alt="Academics" class="img-fluid" style="width: 100%;">
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12 col-md-6" style="margin-top: 10px;">
                        <img src="../img/academics/2.jpg" alt="Academics" class="img-fluid" style="width: 100%;">
                    </div><?php */?>
					<div class="col-lg-6 col-sm-6 col-xs-12 col-md-6" style="margin-top: 10px;">
                        <img src="../img/academics/3.JPG" alt="Academics" class="img-fluid" style="width: 100%;">
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12 col-md-6" style="margin-top: 10px;">
                        <img src="../img/academics/4.JPG" alt="Academics" class="img-fluid" style="width: 100%;">
                    </div>
					<div class="col-lg-6 col-sm-6 col-xs-12 col-md-6" style="margin-top: 10px;">
                        <img src="../img/academics/5.JPG" alt="Academics" class="img-fluid" style="width: 100%;">
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12 col-md-6" style="margin-top: 10px;">
                        <img src="../img/academics/6.JPG" alt="Academics" class="img-fluid" style="width: 100%;">
                    </div>
					<div class="col-lg-6 col-sm-6 col-xs-12 col-md-6" style="margin-top: 10px;">
                        <img src="../img/academics/7.JPG" alt="Academics" class="img-fluid" style="width: 100%;">
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12 col-md-6" style="margin-top: 10px;">
                        <img src="../img/academics/8.JPG" alt="Academics" class="img-fluid" style="width: 100%;">
                    </div>
					<div class="col-lg-6 col-sm-6 col-xs-12 col-md-6" style="margin-top: 10px;">
                        <img src="../img/academics/9.JPG" alt="Academics" class="img-fluid" style="width: 100%;">
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12 col-md-6" style="margin-top: 10px;">
                        <img src="../img/academics/10.JPG" alt="Academics" class="img-fluid" style="width: 100%;">
                    </div>
                </div>
            </div>
            <br><br>

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

<!-- tosrus -->
<script src="../resources/js/jquery.tosrus.min.all.js"></script>
<script src="../resources/js/photo-gallery-jquery.js"></script>


<script>

    $(document).ready(function() {

    $("#toggle").click(function(e) {
        e.preventDefault();

        var elem = $("#toggle").text();
        if (elem == "Read More") {
        //Stuff to do when btn is in the read more state
        $("#toggle").text("Read Less");
        $(".show-hide").slideDown();
        //$(".show-hide").css("display", "initial");
        } else {
        //Stuff to do when btn is in the read less state
        $("#toggle").text("Read More");
        $(".show-hide").slideUp();
        //$(".show-hide").css("display", "none");
        }
    });
    });


</script>

</body>

</html>
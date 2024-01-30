<!DOCTYPE html>
<html>

<?php
include_once("../path-settings.php");

$title = "Publications"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="about-us">School</a></li>
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

        <!-- News Area -->
        <div class="col-lg-9 col-md-12 col-sm-12">

            <p>Aitchison College publishes a number of school magazines. Junior (Comet), Prep (Preppy) and Senior (Newsletter).</p>
            <p>The most historical publication is 'The Aitchisonian'.</p>

            <p>&nbsp;</p>
            <div class="row text-center">

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="margin-top:20px;"><img alt="" class="img-fluid" src="../newsletter/news/images/publications-preppy-2022-616-small.jpg" style="-webkit-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); -moz-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); box-shadow: 5px 5px 30px 0px rgba(146,146,146,1);"></div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="margin-top:20px;"><img alt="" class="img-fluid" src="../newsletter/news/images/publications-aitchisonian-616.jpg" style="-webkit-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); -moz-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); box-shadow: 5px 5px 30px 0px rgba(146,146,146,1);"></div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="margin-top:20px;"><img alt="" class="img-fluid" src="../newsletter/news/images/publications-comet-2019-616.jpg" style="-webkit-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); -moz-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); box-shadow: 5px 5px 30px 0px rgba(146,146,146,1);"></div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="margin-top:20px;"><img alt="" class="img-fluid" src="../newsletter/news/images/publications-newsletter-2019-616.jpg" style="-webkit-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); -moz-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); box-shadow: 5px 5px 30px 0px rgba(146,146,146,1);"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 20px; text-align: left;"><img alt="" class="img-fluid" src="../newsletter/news/images/publications-preppy-616.jpg" style="-webkit-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); -moz-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); box-shadow: 5px 5px 30px 0px rgba(146,146,146,1);"></div>
            </div>

            <p>&nbsp;</p>

        </div>
        <!-- End News Area -->

        <!-- Right Area -->
        <div class="col-lg-3 col-md-6 col-sm-12 text-center news-links">
            <?php include_once ('right-panel-links.php'); ?>
        </div>
        <!-- End Right Area -->

        <div class="col-lg-9 col-md-12 col-sm-12">

            <div class="divider"></div>

        </div>

        <div class="col-lg-3 col-md-12 col-sm-12">

        </div>
    </div>
    <!-- End Contents -->

</div>

<div class="divider"></div>

<!-- Footer -->

<?php include_once ($path."footer.php");?>

<!-- End Footer -->


<!-- End Footer Includes -->
<?php include_once ($path."footer-includes.php");?>

<!-- End Footer Includes -->


</body>

</html>
<!DOCTYPE html>
<html>

<?php
include_once("../path-settings.php");

$title = "Publications"; include_once($path."header-includes.php");

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
            <nav class="news-social">
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

        <!-- News Area -->
        <div class="col-lg-8 col-md-12 col-sm-12">

            <p>Aitchison College publishes a number of school magazines. Junior (Comet), Prep (Preppy) and Senior (Newsletter).</p>
            <p>The most historical publication is 'The Aitchisonian'.</p>

            <p>&nbsp;</p>
            <div class="row text-center">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="margin-top:20px;"><img alt="" class="img-fluid" src="<?php echo $image_path; ?>newsletter/news/images/publications-aitchisonian-616.jpg" style="-webkit-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); -moz-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); box-shadow: 5px 5px 30px 0px rgba(146,146,146,1);"></div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="margin-top:20px;"><img alt="" class="img-fluid" src="<?php echo $image_path; ?>newsletter/news/images/publications-comet-2019-616.jpg" style="-webkit-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); -moz-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); box-shadow: 5px 5px 30px 0px rgba(146,146,146,1);"></div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="margin-top:20px;"><img alt="" class="img-fluid" src="<?php echo $image_path; ?>newsletter/news/images/publications-newsletter-2019-616.jpg" style="-webkit-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); -moz-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); box-shadow: 5px 5px 30px 0px rgba(146,146,146,1);"></div>
            </div>
            <p>&nbsp;</p>
            <div class="row justify-content-center">
                <div class="col-lg-offset-3 col-lg-6 col-md-8 col-md-offset-2 col-sm-12"><img alt="" class="img-fluid" src="<?php echo $image_path; ?>newsletter/news/images/publications-preppy-616.jpg" style="-webkit-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); -moz-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); box-shadow: 5px 5px 30px 0px rgba(146,146,146,1);"></div>
            </div>
            <p>&nbsp;</p>

        </div>
        <!-- End News Area -->

        <!-- Right Area -->
        <div class="col-lg-4 col-md-6 col-sm-12 text-center news-links">
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
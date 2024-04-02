<!DOCTYPE html>
<html>

<?php
include_once("../path-settings.php");

$title = "Publications";
include_once($path . "header-includes.php");

$banner_url = $path . 'resources/assets/images/banners/old-building-v8.jpg';
$page_header = $title;
?>

<style>
    .publications {
        /*transition: all .5s ease-in-out;*/

    }

    .publications .item {
        cursor: pointer;
        position: relative;
        padding: 12px 0;
    }
    .publications .item .img-item {
        overflow: hidden;
    }
    .publications .item .img-item img {
        transition: all .8s ease-in-out;
    }

    .publications > div {
        overflow: hidden;
        padding: 0 6px;
    }

    .publications .item:hover img {
        opacity: 1;
        z-index: -1;
        transform: scale(1.15);
        -ms-transform: scale(1.15);
        -webkit-transform: scale(1.15);
    }

    .publications .footer {
        display: block;
        position: absolute;
        background: linear-gradient(to top, #00205b 40%, transparent 100%);

        text-align: center!important;
        color: #fff;
        width: 100%;
        margin-left: 0%;
        height: 70px;
        bottom: 0;
        transition: all .5s ease-in-out;
    }

    .footer-text h4 {
        color: #fff;
    }

    .publications .footer>.footer-text>p {
        width: 100%;
        text-align: center!important;
        margin-bottom: 0;

        height: 10px;

        visibility: hidden;
        opacity: 0;
        /*transition: visibility .1s, opacity 0.1s ease-in-out;*/
        transition: all .5s ease-in-out;
    }

    .publications .footer>.footer-text {
        width: 100%;
        position: absolute;
        bottom: 0;
        transition: all .5s ease-in-out;
    }

    .publications .item:hover .footer {
        height: 50%;
        background: linear-gradient(to top, #00205b 5%, #00205b 50%, transparent 100%);
    }

    .publications .item:hover .footer>.footer-text {

        bottom: 4%;
    }

    .publications .item:hover .footer>.footer-text>p {
        visibility: visible;
        opacity: 1;

        height: 25px;
    }

</style>

<body>
    <?php include_once($path . 'new-logo-page-banner.php'); ?>

    <?php include_once($path . "mega-menu.php"); ?>


    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row">

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $path; ?>">Home</a></li>
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

            <!-- News Area -->
            <div class="col-lg-9 col-md-12 col-sm-12">

                <p>Aitchison College publishes a number of school magazines. Junior (Comet), Prep (Preppy) and Senior (Newsletter).</p>
                <p>The most historical publication is 'The Aitchisonian'.</p>

                <p>&nbsp;</p>
                <div class="row text-center publications">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="item">
                            <div class="img-item">
                                <img alt="Publications" class="img-fluid" src="../resources/assets/images/publications/preppy-2022.jpg">
                            </div>
                            <div class="footer">
                                <div class="footer-text">
                                    <h4 class="p-2">The Preppy 2022</h4>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="item">
                            <div class="img-item">
                                <img alt="Publications" class="img-fluid" src="../resources/assets/images/publications/aitchisonian-2018-19.jpg">
                                <div class="footer">
                                    <div class="footer-text">
                                        <h4 class="p-2">Aitchisonian 2018-2019</h4>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="item">
                            <div class="img-item">
                                <img alt="Publications" class="img-fluid" src="../resources/assets/images/publications/comet-2019.jpg">
                                <div class="footer">
                                    <div class="footer-text">
                                        <h4 class="p-2">Comet 2019</h4>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="item">
                            <div class="img-item">
                                <img alt="Publications" class="img-fluid" src="../resources/assets/images/publications/newsletter-2019.jpg">
                                <div class="footer">
                                    <div class="footer-text">
                                        <h4 class="p-2">Newsletter 2019</h4>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="item">
                            <div class="img-item">
                                <img alt="Publications" class="img-fluid" src="../resources/assets/images/publications/preppy-2019.jpg">
                                <div class="footer">
                                    <div class="footer-text">
                                        <h4 class="p-2">The Preppy 2019</h4>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="row text-center">

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="margin-top:20px;"><img alt="" class="img-fluid" src="<?php echo $image_path; ?>newsletter/news/images/publications-preppy-2022-616-small.jpg" style="-webkit-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); -moz-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); box-shadow: 5px 5px 30px 0px rgba(146,146,146,1);"></div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="margin-top:20px;"><img alt="" class="img-fluid" src="<?php echo $image_path; ?>newsletter/news/images/publications-aitchisonian-616.jpg" style="-webkit-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); -moz-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); box-shadow: 5px 5px 30px 0px rgba(146,146,146,1);"></div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="margin-top:20px;"><img alt="" class="img-fluid" src="<?php echo $image_path; ?>newsletter/news/images/publications-comet-2019-616.jpg" style="-webkit-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); -moz-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); box-shadow: 5px 5px 30px 0px rgba(146,146,146,1);"></div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12" style="margin-top:20px;"><img alt="" class="img-fluid" src="<?php echo $image_path; ?>newsletter/news/images/publications-newsletter-2019-616.jpg" style="-webkit-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); -moz-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); box-shadow: 5px 5px 30px 0px rgba(146,146,146,1);"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 20px; text-align: left;"><img alt="" class="img-fluid" src="<?php echo $image_path; ?>newsletter/news/images/publications-preppy-616.jpg" style="-webkit-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); -moz-box-shadow: 5px 5px 30px 0px rgba(146,146,146,1); box-shadow: 5px 5px 30px 0px rgba(146,146,146,1);"></div>
            </div> -->

                <p>&nbsp;</p>

            </div>
            <!-- End News Area -->

            <!-- Right Area -->
            <div class="col-lg-3 col-md-6 col-sm-12 text-center news-links">
                <?php include_once('right-panel-links.php'); ?>
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

    <?php include_once($path . "footer.php"); ?>

    <!-- End Footer -->


    <!-- End Footer Includes -->
    <?php include_once($path . "footer-includes.php"); ?>

    <!-- End Footer Includes -->


</body>

</html>
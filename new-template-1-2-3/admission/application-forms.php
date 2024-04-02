<!DOCTYPE html>
<html>

<?php

include_once("../path-settings.php");

$title = "Application Forms"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v6.jpg';
$page_header = $title;
?>

<style>

.a-box {
    margin-bottom: calc(var(--bs-gutter-x) * 1);
}

.a-box > a {
    color: #00205b; text-transform: uppercase; width:100%; text-align: center;
}

.a-box > a > div {
    border: 1px #00205b solid; padding: 30px 10px;
}

.a-box > a > div h4 {
    font-weight: bold; margin-bottom: 0;
}

.a-box > a > div:hover {
    color: #ffc845;
    background-color: #00205b;
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="admissions-info">Admissions</a></li>
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
            <div class="row mt-5">
            
                <div class="col-lg-11 col-md-12 col-sm-12">

                    <div class="row">

                        <?php /* <div class="a-box col-lg-4 col-md-4 col-sm-6">
                            <a
                                href="https://aitchison.edu.pk/portal/data/2023-24/admissions/Admission-Form-2023-24-v5.pdf" rel="nofollow" target="_blank">
                                <div style="border: 1px #00205b solid; padding: 30px 10px">
                                    <div>C1 Boarding</div>
                                    <h4 style="font-weight: bold; margin-bottom: 0;">Application Form</h4>
                                </div>
                            </a>
                        </div> */?>

                        <div class="a-box col-lg-4 col-md-4 col-sm-6">
                            <a
                                href="https://aitchison.edu.pk/portal/data/2023-24/admissions/H1-FSc-Admission-Form-2023-24.pdf" rel="nofollow" target="_blank">
                                <div>
                                    <div>A Level / FSc</div>
                                    <h4>Admission Form</h4>
                                </div>
                            </a>
                        </div>

                        <div class="a-box col-lg-4 col-md-4 col-sm-6">
                            <a
                                href="https://aitchison.edu.pk/portal/data/2023-24/admissions/Subject-Selection-Form-2023-24-v1.pdf" rel="nofollow" target="_blank">
                                <div>
                                    <div>A Level Subject</div>
                                    <h4>Selection Form</h4>
                                </div>
                            </a>
                        </div>

                        <div class="a-box col-lg-4 col-md-4 col-sm-6">
                            <a
                                href="https://aitchison.edu.pk/portal/data/2023-24/admissions/H1-FSc-Admission-Form-2023-24.pdf" rel="nofollow" target="_blank">
                                <div>
                                    <div>A Level / FSc</div>
                                    <h4>Evaluation Form</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                    <p style="color: #00205b;">NTN: 4199854-5</p>
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
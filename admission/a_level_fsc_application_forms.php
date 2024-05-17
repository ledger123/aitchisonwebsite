<!DOCTYPE html>
<html>

<?php

include_once("../path-settings.php");

$title = "A Level/FSc Application Forms"; include_once($path."header-includes.php");

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
        border: 1px #00205b solid;
        padding: 30px 10px;
        margin: 0 1px;
    }

    .a-box > a > div div {
        font-size: 12px;
        font-weight: 600;
    }

    .a-box > a > div h4 {
        font-weight: bold; margin-bottom: 0;
    }


    .a-box > a > div:hover {
        color: #ffc845;
        background-color: #00205b;
    }


    .down-arrow {
        font-size: 56px;
    }
    .body-text {
        height: auto;
    }

    @media (min-width: 1440px) {
        .body-text {
            height: 77px;
        }
    }

    @media (max-width: 576px) {
        .a-box-margin {
            margin: 0 0px;
        }
        .col-sm-10 {
            flex: 0 0 auto;
            width: 83.33333333%;
        }
        .col-sm-2 {
            flex: 0 0 auto;
            width: 16.66666667%;
        }

        .down-arrow {
            font-size: 42px;
        }
    }

    @media (max-width: 375px) {
        .a-box > a > div div {
            font-size: 10px;
        }

        .down-arrow {
            font-size: 40px;
        }

    };
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

            <div class="row">

                <?php /* <div class="a-box col-lg-4 col-md-4 col-sm-6">
                    <a
                        href="https://aitchison.edu.pk/portal/data/2023-24/admissions/Admission-Form-2023-24-v5.pdf" rel="nofollow" target="_blank">
                        <div style="border: 1px #00205b solid; padding: 30px 10px">
                            <div>C1 Boarding</div>
                            <h4 style="font-weight: bold; margin-bottom: 0;">Application Form</h4>
                        </div>
                    </a>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="a-box">
                        <a href="https://aitchison.edu.pk/portal/data/2024-25/admission-form-2024-25.pdf" rel="nofollow" target="_blank">
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10 text-start ps-4">
                                    <div class="text-center" style="display: inline-block;">
                                        <div>&nbsp;</div>
                                        <h2 class="body-text">Confidential Evaluation Form</h2>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <i class="fas fa-download down-arrow"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>*/?>

                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="a-box">
                        <a href="https://aitchison.edu.pk/school_doc/admission-2024/alevel-fsc/H1 & FSc Admission Form 2024-25.pdf" rel="nofollow" target="_blank">
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10 text-start ps-4">
                                    <div class="text-start" style="display: inline-block;">
                                        <div>A Level & FSc</div>
                                        <h2 class="body-text">Admission Form 2024-25</h2>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <i class="fas fa-download down-arrow"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="a-box">
                        <a href="https://aitchison.edu.pk/school_doc/admission-2024/alevel-fsc/Confidential Evaluation Form 2024.pdf" rel="nofollow" target="_blank">
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10 text-start ps-4">
                                    <div class="text-start" style="display: inline-block;">
                                        <div>Confidential</div>
                                        <h2 class="body-text">Evaluation Form</h2>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <i class="fas fa-download down-arrow"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="a-box">
                        <a href="https://aitchison.edu.pk/school_doc/admission-2024/alevel-fsc/Subject Selection Form 2024-25-v2.pdf" rel="nofollow" target="_blank">
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10 text-start ps-4">
                                    <div class="text-start" style="display: inline-block;">
                                        <div>A Level Subject</div>
                                        <h2 class="body-text">Selection Form</h2>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <i class="fas fa-download down-arrow"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <?php /*?><div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="a-box">
                        <a href="https://aitchison.edu.pk/school_doc/admission-2024/alevel-fsc/A Level - FSc Syllabus.pdf" rel="nofollow" target="_blank">
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10 text-start ps-4">
                                    <div class="text-start" style="display: inline-block;">
                                        <div>A Level - FSc</div>
                                        <h2 class="body-text">Syllabus</h2>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <i class="fas fa-download down-arrow"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div><?php */?>


                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="a-box">
                        <a href="https://aitchison.edu.pk/school_doc/admission-2024/alevel-fsc/Medical Questionnaire 2024-25.pdf" rel="nofollow" target="_blank">
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10 text-start ps-4">
                                    <div class="text-start" style="display: inline-block;">
                                        <div>Medical</div>
                                        <h2 class="body-text">Questionnaire 2024-25</h2>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2">
                                    <i class="fas fa-download down-arrow"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


            </div>
            <p>&nbsp;</p>
            <div class="a-box" style="width: fit-content">
                <a href="#" rel="nofollow" target="_blank">
                    <div class="row">
                        <div class="col-lg-10 col-md-10 col-sm-10 text-start ps-4">
                            <div class="text-start" style="white-space: nowrap;">
                                <h6 class="mb-0">NTN: 4199854-5</h6>
                            </div>
                        </div>
                    </div>
                </a>
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
<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Pastoral Care and Counseling"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/our-school/our-school.jpg';
$page_header = $title;
?>
<style>
    .quote {
        padding: 0 6.5rem;
    }
    .quote-header {
        color: #00205b; margin-left: 7.6rem;border-bottom: 2px solid #ffc845;
    }

    .quote-body {
        padding: 1.5rem 8.2rem; font-style: italic; font-size: 1.3rem; font-weight: 600;line-height: 1.3;
    }

    .quote-footer {
        margin-right: 7.6rem;border-top: 2px solid #ffc845; text-align: right;
    }

    .quote-footer > div {
        padding: 1rem 7.3rem;
        padding-right: 0;
        font-size: 1rem;
        font-weight: 400;
    }


    .ps-xs-0 {
        padding-left: inherit;
    }

    .pe-xs-0 {
        padding-right: inherit;
    }

    @media (max-width: 1024px) {

        .quote {
            padding: 0 0;
        }

        .quote-header {
            margin-left: 6.8rem;;
        }

        .quote-body {
            padding: 1.5rem 6.6rem;
        }

        .left-quote {
            width: 4.7rem;
            padding-top: 10px;
        }

        .right-quote {
            width: 4.7rem;
        }

        .quote-footer {
            margin-right: 6.8rem;
        }

        .quote-footer > div {
            padding: 1rem 6.7rem;
            padding-right: 4.5px;
        }
    }

    @media (max-width: 576px) {

        .left-quote {
            width: 3rem;
            padding-top: 10px;
        }

        .quote-header {
            margin-left: 4.2rem;
        }

        .quote-body {
            padding: 1.5rem .5rem 1.5rem 1.7rem;

            font-size: 1rem;
        }

        .right-quote {
            width: 3rem;
        }

        .quote-footer {
            margin-right: 4.5rem;
        }

        .quote-footer > div {
            padding-right: 0;
            font-size: .8rem;
            padding-left: 0.2rem;
        }

        .ps-xs-0 {
            padding-left: 0!important;
        }

        .pe-xs-0 {
            padding-right: 0!important;
        }
    }

    @media (max-width: 375px) {
        .quote-body {

            font-size: .7rem;
        }
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
        <div class="col-lg-9 col-md-12 col-12 mb-3">

            <div class="row quote">
                <div>
                    <div class="float-start left-quote">
                        <img src="<?php echo $image_path; ?>img/history/left-quote.png" class="img-fluid" alt="left quote">
                    </div>
                </div>

                <div class="quote-body">
                    If you think in years, plant rice,<br>If you think in decades, plant trees,<br>If you think in centuries, educate your children.
                </div>
                <div>
                    <div class="float-end right-quote">
                        <img src="<?php echo $image_path; ?>img/history/right-quote.png" class="img-fluid" alt="right quote">
                    </div>
                    <div class="quote-footer">
                        <div>(Chinese philosophy)</div>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-left: 0; margin-right: 0;">

                <p style="padding-top: 3px; line-height: 1.8em;">
                    <img src="<?php echo $image_path;?>img/pcare-28102019.jpg" alt="" class="img-fluid rounded float-end ms-3 mb-1" style="width: 350px; height: auto; margin-top: 5px;">
                    Aitchison's dedicated teachers and medical staff are deeply committed to the welfare of our students. The College's 'Welfare Committees' in each school meet to discuss issues affecting boys and how best we can educate for positive outcomes. Two School Counselors/ Psychologists also play pivotal roles both as part of this committee and independently. A strongly integrated House system promotes sound group dynamics with an equal focus on the individual, so that all pupils feel safe and valued at school. Our approach to well-being is to be proactive.
                </p>

            </div>
            <div class="row" style="margin-left: 0; margin-right: 0;">
                <p style="padding: 10px 15px 0"><strong>The welfare of all pupils is based on the understanding of shared values.</strong> Our basic aim is to keep channels of communication open between students, teachers and parents so that we are able to communicate and educate with clarity. Regular Parent Gatherings and PT days assist in this.</p>
                <p style="padding: 0 15px;">Leadership programmes instill respect for the College and the vast array of individual talents within the cohort.</p><br>
            </div>
            <div class="row">
                <img src="<?php echo $image_path;?>img/pcare1.jpg" alt="" class="img-fluid img-rounded" style="width: 100%; padding: 0 1.7rem;">
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
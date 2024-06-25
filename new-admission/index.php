<!DOCTYPE html>
<html>
<?php
include_once("../path-settings.php");

$title = "Admissions"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v6.jpg';
$page_header = $title;
?>

<body>
<?php //include_once ($path.'new-logo-page-banner.php'); ?>

<style>
    .main-banner {
        display: block;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
        min-width: 100%;
        max-width: 100%;
        position: relative;
        overflow: hidden;
        top: 0;
        bottom: 0;
        width: 100%;
    }

    .main-banner > .banner-text {

        margin: 0;
        position: absolute;
        bottom: 14rem;
        -ms-transform: translateY(8px);
        transform: translateY(8px);
        line-height: .9;
        color: #fff;
        left: 100px;
        padding-left: 12px;
        z-index: 1000;
        text-transform: unset;
        display: flex;
        flex-direction: column-reverse;
        flex-wrap: wrap;
    }

    .main-banner > .banner-text h1 {
        font-size: 5rem;
        font-weight: 200;
        margin-bottom: 0;
    }

    .main-banner > .banner-text div {
        width: fit-content;
    }


    .main-banner > .banner-text span {
        font-size: 1.7rem;
        font-weight: 300;
    }

    .main-banner > .banner-text hr {
        height: 2px;
        background-color: #fff;
        opacity: 1;
    }
</style>


<nav class="navbar navbar-expand-lg navbar-light bg-transparent nav-home">
    <a class="logo-left" href="/">
        <div>

        </div>
    </a>
</nav>

<div class="main-banner" style="background: url(images/banner.jpg); background-repeat: no-repeat;background-size: cover; background-position: center center; height: 100vh;">

    <div class="container-fluid banner-text">

        <div>
            <hr />
            <span>Building a Tradition of Excellence and Inspiring the Future</span>
        </div>

        <h1>Admissions</h1>
    </div>

</div>


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
            <p>Aitchison College admits boys on the basis of academic and general suitability. The application process must be completed before a boy is considered an eligible candidate. Applications may only be made for one of the two enrollment categories (boarding or day) and not both. Entries into Junior, Prep and Senior are treated separately for admission purposes. The College reserves the right to offer additional places to eligible students, at any time and at any year level, in order to reach full capacity. A boy who is offered a place will have completed competitive admission tests and been interviewed before a final decision is made by the Principal. Age criteria are strictly&nbsp;observed and no age waivers will be given. <b>Over-age applicants will not be considered.</b> No boy may appear more than once in a testing cycle. An offer of admission will also be automatically withdrawn if an application, transcript, reference or age related document has been falsified in any way whatsoever.&nbsp;</p>

            <p><strong>Test papers and results&nbsp;are not shared and nor does the College discuss the performance of individual applicants. This is a condition of application.</strong>&nbsp;</p>

            <p>Boys who have been schooled in Lahore are normally ineligible to apply for a boarding place. Please direct your enquiries to the HR, Ext: 281.&nbsp;<strong>Aitchison&#39;s boarding is on a national scale.&nbsp;Conditional and limited bursaries are available to boys who qualify for admission from Baluchistan, FATA, Sindh, KPK, Azad Kashmir, Gilgit-Baltistan and Southern Punjab.</strong></p>

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
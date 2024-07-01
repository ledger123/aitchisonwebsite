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

<style>
    .sticky-menu {
        bottom: 60px;
        height: fit-content;
        left: 0;
        position: relative;
        pointer-events: none;
        right: 0;
        width: 100%;
        z-index: 1000;
        display: block;
        background-color: var(--color-yellow);
    }

    .sticky-menu nav {

        height: 60px;
    }

    .add-menu {
        display: flex;
        flex-wrap: wrap;
        padding: 0 0;
        list-style: none;
    }
    .add-menu-item {
        padding: 0 10px;
    }
    .add-menu-item a {
        color: var(--color-blue);
    }

    .add-menu-item::before {
        content: '';
        /*border-right: 1px solid;*/

    }

    .points-of-entry {
        padding: 8rem 4rem;
        background-color: var(--color-blue);
    }

    .points-of-entry h2 {
        text-align: center;
        color: #fff;
        font-weight: 200;
    }

    h2 > hr {
        width: 120px;
        background-color: #ffc845;
        border: 2px solid #ffc845;
        border-radius: 2px;
        opacity: unset;
        margin: 1.7rem auto;
    }


    .boxes>div>.box {
        border: 1px solid var(--color-yellow);
        padding: 5rem 3rem;
        text-align: center;
    }

    .box {
        color: #fff;
        height: 100%;
    }
    .box > div {
        color: #fff;
        font-size: 1.6rem;
        font-weight: 300;
        margin-bottom: 1.2rem;
    }
</style>

<style>
    .policy-process {
        padding: 7rem 0;
        color: #fff;
        background: url(images/image-1.jpg); background-repeat: no-repeat;background-size: cover; background-position: center center;
    }
    .policy-process h2 {
        font-weight: 200;

    }

    .senior-admission {
        padding: 7rem 0;
    }

    .age-guidelines {
        padding-top: 4rem;
        background: linear-gradient(var(--color-yellow) 65%, transparent 35%);
    }

    .age-guidelines h2 {
        color: var(--color-blue)
    }
    .age-guidelines-carousel .item {
        background-color: #fff;
        text-align: center;
        border: 2px solid var(--color-blue);
        padding: 3rem 2rem;
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

<div class="sticky-menu">
    <div class="container">
        <div class="row">
            <nav>
                <ol class="add-menu">
                    <li class="add-menu-item"><a href="<?php echo $path;?>">Points of Entry</a></li>
                    <li class="add-menu-item"><a href="<?php echo $path;?>">Policy & Process</a></li>
                    <li class="add-menu-item"><a href="<?php echo $path;?>">Senior Admission</a></li>
                    <li class="add-menu-item"><a href="<?php echo $path;?>">Age Guidelines</a></li>
                    <li class="add-menu-item"><a href="<?php echo $path;?>">A Guide to Syllabus</a></li>
                    <li class="add-menu-item"><a href="<?php echo $path;?>">Admission Testing Schedule</a></li>
                    <li class="add-menu-item"><a href="<?php echo $path;?>">Important Dates</a></li>
                    <li class="add-menu-item"><a href="<?php echo $path;?>">Available Seats</a></li>
                    <li class="add-menu-item"><a href="<?php echo $path;?>">FAQs</a></li>
                    <li class="add-menu-item"><a href="<?php echo $path;?>">Fee Structure</a></li>
                    <li class="add-menu-item"><a href="<?php echo $path;?>">International Enrolments</a></li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container-fluid points-of-entry">

    <div class="container">
        <h2>POINTS OF ENTRY<br/>INTO AITCHISON FOR 2024-25<hr/></h2>
        <div class="row boxes">
            <div class="col-4">
                <div class="box">
                    <div>Junior School</div>
                    <span>offers entry for boys to K1 (boarders only), K2 (boarders & day), & K6 (boarders only).</span>
                </div>
            </div>
            <div class="col-4">
                <div class="box ">
                    <div>Prep School</div>
                    <span>offers general entry for boys to E2 (Grade 7 – day and boarding), M1 (Grade 8 – boarders only) & M2 (Grade 9 – boarders only).</span>
                </div>
            </div>
            <div class="col-4">
                <div class="box">
                    <div>Senior School</div>
                    <span>offers two points of entry: C1 (to study IGCSE or FBISE Matric for day and boarding) and H1 (to study Cambridge AS Level or FBISE F.Sc, Pre-Medical for day and boarding). Limited places for Internationals are based on Cambridge or other acceptable curricula.</span>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container-fluid policy-process">
    <div class="container">
        <h2>ADMISSIONS<br/>POLICY & PROCESS<hr style="margin-left: 0;"/></h2>
        <div class="row">
            <div class="col-6">Aitchison College admits boys on the basis of academic and general suitability. The application process must be completed before a boy is considered an eligible candidate.</div>
        </div>
    </div>
</div>

<div class="container-fluid senior-admission">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="images/image-2.jpg" alt="image" class="img-fluid" />
            </div>
            <div class="col-6">
                <h2>SENIOR ADMISSIONS TO AITCHISON COLLEGE 2024-25<hr style="margin-left: 0;"/></h2>
                <div>
                    <p><strong>Senior School</strong>&nbsp;entry to H1 (to study Cambridge AS Level or FBISE FSc&nbsp;(Pre-Medical) for day and boarding)&nbsp;accepted from <strong>May 1<sup>st</sup> to June 30<sup>th</sup>, 2024.</strong>&nbsp; Limited places for Internationals are based on Cambridge or other acceptable curriculum.&nbsp;</p>
                    <p>Parents seeking a place for their son(s) should first read the&nbsp;<a href="https://aitchison.edu.pk/admission/admissions-info" style="color: blue;">Admissions</a>&nbsp;section of the College's website, where our policy and processes are explained, along with entry prerequisites for various entry levels. Parents can also access our&nbsp;<a href="https://aitchison.edu.pk/admission/admissions-faqs" style="color: blue;">FAQs</a><em>.</em>&nbsp;If there remain further queries, please contact our HR Department on Extension: 281&nbsp;or email:&nbsp;<span style="color: blue;"><strong>admission@aitchison.edu.pk.</strong></span> Given the very high interest in Aitchison, the College does not offer tours or admission appointments. Our website is particularly informative and visually&nbsp;helpful.</p>
                    <p>Applications may be <a href="https://aitchison.edu.pk/admission/a-level-fsc-application-forms" target="_parent" style="color: blue;">downloaded</a> from our Admissions section and mailed to the College Admissions Office, Shahrah-e-Quaid-e-Azam, Lahore 54000 Pakistan, Ph: 0092-42-36317201-04. Your registration will be acknowledged as soon as possible. Please complete the Application Form accurately.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid age-guidelines">

    <div class="container">
        <h2 class="text-center">AGE GUIDELINES<br>FOR ADMISSIONS 2024-25<hr style="border-color:var(--color-blue);"/></h2>
        <div class="age-guidelines-carousel owl-carousel owl-theme">
            <div class="item">
                <h2>Year 1 (K1)</h2>
                <p class="fw-bold">Date of Birth</p>
                <p>June 1, 2018 – May 31, 2019 inclusive</p>
            </div>
            <div class="item">
                <h2>Year 2 (K2)</h2>
                <p class="fw-bold">Date of Birth</p>
                <p>June 1, 2017 – May 31, 2018 inclusive</p>
            </div>
            <div class="item">
                <h2>Year 6 (K6)</h2>
                <p class="fw-bold">Date of Birth</p>
                <p>June 1, 2013 – May 31, 2014 inclusive</p>
            </div>
            <div class="item">
                <h2>Year 7 (E2)</h2>
                <p class="fw-bold">Date of Birth</p>
                <p>June 1, 2012 – May 31, 2013 inclusive</p>
            </div>
            <div class="item">
                <h2>Year 7 (E2)</h2>
                <p class="fw-bold">Date of Birth</p>
                <p>June 1, 2012 – May 31, 2013 inclusive</p>
            </div>
            <div class="item">
                <h2>Year 8 (M1)</h2>
                <p class="fw-bold">Date of Birth</p>
                <p>June 1, 2011 – May 31, 2012 inclusive</p>
            </div>
            <div class="item">
                <h2>Year 9 (M2)</h2>
                <p class="fw-bold">Date of Birth</p>
                <p>June 1, 2010 – May 31, 2011 inclusive</p>
            </div>
            <div class="item">
                <h2>Year 10 (C1)</h2>
                <p class="fw-bold">O Level/Matric (First Year)</p>
                <p>June 1, 2009 – May 31, 2010 inclusive</p>
            </div>
            <div class="item">
                <h2>Year 12 (H1)</h2>
                <p class="fw-bold">A Level (First Year)</p>
                <p>June 1, 2007 – May 31, 2008 inclusive</p>
            </div>
        </div>
    </div>
</div>

<div class="divider"></div>

<!-- Footer -->

<?php include_once($path."footer.php");?>

<!-- End Footer -->


<!-- End Footer Includes -->
<?php include_once($path."footer-includes.php");?>

<!-- End Footer Includes -->


</body>
<script>
    $(document).ready(function () {
        $('.age-guidelines-carousel').owlCarousel({

            singleItem: true,
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',

            loop:true,
            margin:30,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            nav:true,
            dots:false,
            items:3,

            stagePadding:30,
            smartSpeed:450,

            //animateOut: 'slideOutUp',

            //dots:false,
            navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        });
    });


</script>
</html>
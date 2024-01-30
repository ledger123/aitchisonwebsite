<?php
include("standard/main.php");
$banner_image_url="img/pageimages/misc.jpg";
//$banner_text="About Aitchison College";
$banner_text="";
$default_open=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aitchison College:- Admissions FAQs </title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <link rel="shortcut icon" href="/nne_logo.ico" type="image/x-icon">
    <link rel="icon" href="/nne_logo.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once("phpinclude/headercontrol.php");  ?>

    <!-- CSS
    ================================================== -->
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet">
    <!-- Circle counter cdn css file -->
    <link href='//fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel='stylesheet prefetch' href='css/circliful.css'><!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- preloader
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
    <link href="css/sidemenu.css" rel="stylesheet">


    <!-- Google fonts -->
    <link href='//fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/sidemenu.js"></script>


    <style>

        p{margin-top:10px; margin-bottom:20px;}

        .panel {
            border: none;
            margin-bottom:5px;
        }
        .panel .panel-heading {

            background-color: #f3e6c1;
            border-left: 10px solid orange;
            font-weight: 300;

            text-transform: none;

            padding: 5px 15px 5px 5px;
        }

        .panel .panel-heading h2 {
            font-weight: 300;
            text-transform: none;

            font-family: "Open Sans","Frutiger",Helvetica,Arial,sans-serif;
            text-rendering: optimizelegibility;
            line-height: 30px;
            padding-bottom: 0;
        }

        .panel .panel-heading h2 a {
            text-align: left;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            display: block;
            padding: 6px 25px 6px 6px;
        }

        .card-body p {
            background-color: transparent;
        }

    </style>

</head>
<body>

<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"></a>
<!-- END SCROLL TOP BUTTON -->

<!--=========== BEGIN HEADER SECTION ================-->
<?php include("phpinclude/header.php");?>
<!--=========== END HEADER SECTION ================-->

<!--=========== BEGIN COURSE BANNER SECTION ================-->
<section id="imgBanner" style=" background-image: url(<?php echo $banner_image_url;?>);">
    <h2><?php echo $banner_text;?></h2>
</section>
<!--=========== END COURSE BANNER SECTION ================-->


<!--=========== BEGIN COURSE BANNER SECTION ================-->
<section id="courseArchive">
    <div class="container">
        <div class="row" style="min-height: 300px;">
            <!-- start course content -->
            <div class="col-lg-3 col-md-3 col-sm-3">
                <script>
                    $(document).ready(function () {

                        //active state
                        $(function () {
                            $('a').click(function (e) {
                                $('a').removeClass('active');
                                $(this).addClass('active');
                            });
                        });
                        $(function () {
                            if (location.pathname.length > '1') {
                                $('a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
                            }
                        });

                        $(".submenu").hover(function () {
                                if($(this).is(":visible")) {
                                    $(".glossymenu a").removeClass("active");
                                    $(this).prev().addClass("active");
                                }
                            },
                            function(){
                                //$(this).prev().removeClass("active");
                            });
                    });
                </script>

                <?php include("phpinclude/sidmenu.php");?>
                <script type="text/javascript">
                    ddaccordion.init({
                        headerclass: "submenuheader", //Shared CSS class name of headers group
                        contentclass: "submenu", //Shared CSS class name of contents group
                        revealtype: "mouseover", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
                        mouseoverdelay: 400, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
                        collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
                        defaultexpanded: ["<?php echo $default_open;?>"], //index of content(s) open by default [index1, index2, etc] [] denotes no content
                        onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
                        animatedefault: false, //Should contents open by default be animated into view?
                        persiststate: false, //persist state of opened contents within browser session?
                        toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
                        togglehtml: ["suffix", "<img src='img/plus.png' class='statusicon' />", "<img src='img/minus.png' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
                        animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
                        oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
                            //do nothing
                        },
                        onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
                            //do nothing
                        }
                    });
                </script>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9">
                <div class="aboutus_area wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                    <div class="row" style="min-height: 40px;">
                        
                        <div class="col-lg-12 col-md-12 col-sm-12" align="right">
                            <a style="padding: 2px 10px;" href="newsandevents-testlink.php?id=1032" rel="noopener noreferrer" class="btn btn-primary" role="button">Back</a>
                        </div>
                        
                    </div>
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div style="text-align: center; padding-bottom: 20px;">
                                <div align="center">
                                    <h3 style="margin-top: 0;">FAQs on the Admissions Process </h3>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div>
                                <div>
                                    <div align="center">                          </div>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <?php
                                    $faqs = [];

                                    $faqs[] = ['q' => "Why is there an Admissions process?",
                                        'a' => "Many more boys apply for Aitchison College than there are available places. Our chief aim is to identify boys who are academically able and most likely to benefit from either a day or boarding placement in a school with compulsory sport and co-curricular activities. Boys admitted to Aitchison College undertake to be fully engaged with the College program throughout the whole of their school journey."];
                                    $faqs[] = ['q' => "How does one apply for Admissions?",
                                        'a' => "Download the Request for Registration form from the College website available from 1st January, 2021 and return with the requested Registration fee. The College will then mail the Application form that has to be returned with all supporting documents within the due date. The invitation for Admissions will be published in all major newspapers of Pakistan. Closing date is February 1st, 2021."];
                                    $faqs[] = ['q' => "Are there different categories of enrolment?",
                                        'a' => "Yes. Applicants may select either a day or boarding enrolment option (not both) where indicated in the application."];
                                    $faqs[] = ['q' => "Where do Admissions testing and interviews take place?",
                                        'a' => "Testing and interviews only take place at Aitchison College on specified dates for each grade."];
                                    $faqs[] = ['q' => "Why do you hold an interview?",
                                        'a' => "Interviews are held to determine the general suitability of boys; for example, whether they are socially ready for school and the greater demands of Aitchison College. This particularly applies to boarding admissions. Interviews may also reveal other aspects of academic suitability or challenges not necessarily revealed in an Admissions test. It is also an opportunity to meet parents and to clarify school expectations and answer questions or concerns they may have. The College doctor will also utilize this time to conduct age verification. If in the opinion of medical advice the age of a boy is determined to be unsuitable for a particular year group, the College reserves the right to cancel an Admissions offer. Owing to the panedmic, interviews will not be held this year."];
                                    $faqs[] = ['q' => "Is there a &lsquo;kinship&rsquo; category?",
                                        'a' => "No. All candidates have an equal opportunity of gaining Admission to Aitchison College."];
                                    $faqs[] = ['q' => "Which grades are open for Admissions in 2021?",
                                        'a' => "Our intake years are from Year 1 (K1 ), K2 and Year 7 (E2). The College may decide to admit students into AS Level (Year 12) based on Cambridge external results. By far the largest intake is in Year 2 (K2) and Year 7 (E2). Year 1 (K1) is reserved exclusively for boarders from distant or remote areas."];
                                    $faqs[] = ['q' => "How does Aitchison determine the numbers of boys to be admitted?",
                                        'a' => "With the approval of the Board of Governors the College reserves the right to offer day or boarding places by category and number according to the on-going availability in each category."];
                                    $faqs[] = ['q' => "How can I help my son prepare for the Admissions tests?",
                                        'a' => "The College offers a &lsquo;Guide to Admission Testing.&rsquo; This guide may be downloaded from the College website. This is the only information that Aitchison provides on testing."];
                                    $faqs[] = ['q' => "Does Aitchison manage its own Admissions testing? Is it secure?",
                                        'a' => "Aitchison College manages its own Admissions process. The Principal is the only person who approves and has access to final test papers. He personally delivers tests to the examination centre on the day of testing and these are returned direct to his office on completion."];
                                    $faqs[] = ['q' => "Who can answer enquiries on Admissions?",
                                        'a' => "All queries should be emailed to the Admissions  Office at: <a href='mailto:admission2021@aitchison.edu.pk' target='_blank'>admission2021@aitchison.edu.pk</a>."];
                                    $faqs[] = ['q' => "Is Aitchison connected with any preparatory academy or pre-school?",
                                        'a' => "No. Aitchison has no legal affiliation or association with any preparatory academy or pre-school."];
                                    $faqs[] = ['q' => "When do applications for Admissions start and close?",
                                        'a' => "Applications for registration are available from January 1st, 2021. No applications will be accepted after the closing time and date of 5 p.m. on February 1st, 2021."];
                                    $faqs[] = ['q' => "When does testing take place?",
                                        'a' => "Admission Test for K2 and E2 is Saturday, April 24<sup>th</sup>. K1 will be Sunday, April 25<sup>th</sup>."];

                                    $faqs[] = ['q' => "Which boys are called to interview?",
                                        'a' => "Boys are called to interview based solely on their test results. Very strong results in English and Mathematics are essential. Owing to the panedmic, interviews will not be held this year."];

                                    $faqs[] = ['q' => "On what terms are boys admitted as boarders?",
                                        'a' => "Boarding places are for full boarding only. Boys entering Junior School as boarders must board for a minimum of 8 years. Boys entering boarding from Prep School onwards must board for the remainder of their time at school. Boys who have been schooled in Lahore for more than 6 months are ineligible to apply for a boarding place."];
                                    $faqs[] = ['q' => "Can my son be admitted as a weekly boarder?",
                                        'a' => "No. Weekly boarding is only offered to existing day boys who wish to transfer to boarding on a temporary basis if places are available. Weekly boarding is not a category of enrolment."];
                                    $faqs[] = ['q' => "If my son is admitted as a full boarder can he later transfer to weekly or day student status?",
                                        'a' => "No. Boys offered places in full boarding will not be allowed to transfer to weekly boarding or day student status. Because of this boarding places are normally offered to those who could not otherwise attend the College owing to travelling distance."];
                                    $faqs[] = ['q' => "Who makes up the Interview Committee?",
                                        'a' => "The Principal, relevant Heads of School and, when applicable, Boarding Housemaster or Housemistress. Owing to COVID restrictions in 2020, interviews were suspended. "];
                                    $faqs[] = ['q' => "May parents accompany their sons to the interview?",
                                        'a' => "Yes, but the panel may ask for a preliminary interview in private with the candidate."];
                                    $faqs[] = ['q' => "Can a boy sit for the same year level in consecutive years?",
                                        'a' => "No boy is permitted to sit twice in the same year level. This is why there is a strict age criteria."];

                                    $faqs[] = ['q' => "What if my son is sick or injured and cannot attend admission testing?",
                                        'a' => "The College may offer a short grace period in the case of genuine illness or injury that prevents a candidate from sitting for a test on the published date. In such cases, proof will be required for the College doctor to assess. Any final decision is at the Principal’s discretion. Requests must reach the Principal’s Office prior to the testing date. A candidate who qualifies for a deferred Admissions Test owing to unexpected illness or injury as determined by the College doctor will be required to sit for a replacement paper or papers at a time of the College's choosing and no later than three days after the completion of the original test paper."];

                                    $faqs[] = ['q' => "Is it fair that some boys are older than others when being tested for the same grade of entry?",
                                        'a' => "The age ranges of boys will vary by up to a year in all grades, at any school. Tests are aligned with the best standards in each applicable grade of entry as one would expect at a selective entry school. The ‘Guide to Admissions Testing’ enables boys to prepare on an equal footing."];
                                    $faqs[] = ['q' => "When will information be made available to families on whether their son has been successful or unsuccessful?",
                                        'a' => "All families will receive notification by letter from the Principal before the end of April."];
                                    $faqs[] = ['q' => "Who marks and checks the scores of test papers?",
                                        'a' => "All papers are marked multiple times by specialist subject teachers, results moderated, and then triple counted by the Mathematics Department."];
                                    $faqs[] = ['q' => "Does Aitchison publish scores? Can a parent have access to admission test papers? Can a parent ask where his child was ranked?",
                                        'a' => "No. It is a condition of the Registration process that parents accept the College’s decision as final and that results are kept private and test papers remain confidential. This is a ranking exercise for Admissions and not a school test or diagnostic test for public purposes."];

                                    $faqs[] = ['q' => "May I visit the College ahead of registration?",
                                        'a' => "We regret that visits prior to registration are not possible. However, a Webcast is available, which includes information about our application process, an interview with the Principal, and a virtual tour of the school."];

                                    $faqs[] = ['q' => "Do you offer Scholarships?",
                                        'a' => "We offer a limited number of scholarships for boarding applicants outside the Punjab. Such offers are means tested."];

                                    ?>

                                    <div class="accordion" id="accordionFaq" aria-multiselectable="true">
                                        <?php
                                        $sr = 1;
                                        $show = '';
                                        foreach ($faqs as $faq) {
                                            ?>

                                            <div class="card panel">
                                                <div class="card-header panel panel-heading" id="faq<?php echo $sr; ?>">
                                                    <h2 class="mb-0">
                                                        <a class="btn btn-link atitle" style="white-space: normal;" type="button" data-toggle="collapse" data-target="#collapse<?php echo $sr; ?>" aria-expanded="true" aria-controls="collapse<?php echo $sr; ?>">
                                                            <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;"><?php echo $faq['q']; ?></td></tr></table>
                                                        </a>

                                                    </h2>
                                                </div>

                                                <div id="collapse<?php echo $sr; ?>" class="collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-parent="#accordionFaq" style="background-color: #f6f6f6;">
                                                    <div class="card-body" style="margin: 0 15px 0 15px;">
                                                        <p>
                                                            <?php echo $faq['a']; ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php $sr++;$show='';
                                        } ?>
                                    </div>


                                    <p>Interviews also form an essential part of the decision-making process. The Principal will also determine whether an applicant will suit the culture of Aitchison and if he is likely to benefit from a place in boarding or day school.</p>

                                    </ol>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- End course content -->

            <!-- start course archive sidebar -->

            <!-- start course archive sidebar -->
        </div>
    </div>
</section>
<!--=========== END COURSE BANNER SECTION ================-->

<!--=========== BEGIN FOOTER SECTION ================-->
<?php include("phpinclude/footer.php");?>
<!--=========== END FOOTER SECTION ================-->



<!-- Javascript Files
================================================== -->

<!-- initialize jQuery Library -->

<!-- Preloader js file
<script src="js/queryloader2.min.js" type="text/javascript"></script>
<!-- For smooth animatin  -->
<script src="js/wow.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="js/slick.min.js"></script>
<!-- superslides slider -->
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.animate-enhanced.min.js"></script>
<script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
<!-- for circle counter -->
<script language="javascript" src='/js/jquery.circliful.min.js'></script>
<!-- Gallery slider -->
<script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>

<!-- Custom js-->
<?php
if(empty($_SESSION['mynotify'])){
    $_SESSION['mynotify']="Show Me.";
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')){
        ?>
        <script src="js/notifications.js"></script>
        <?php
    }
}
?>
<script src="js/custom1.js"></script>


</body>
</html>
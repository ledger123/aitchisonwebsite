<!DOCTYPE html>
<html>

<?php

include_once("../path-settings.php");

$title = "FAQs on the Admissions Process 2024-25"; include_once($path."header-includes.php");


$faqs = [];

$faqs[] = ['q' => "Why is there an Admissions process?",
    'a' => "Many more boys apply for Aitchison College than there are available places. Our chief aim is to identify boys who are academically able and most likely to benefit from either a day or boarding placement in a school with compulsory sport and co-curricular activities. Boys admitted to Aitchison College undertake to be fully engaged with the College program throughout the whole of their school journey."];
$faqs[] = ['q' => "How does one apply for admissions?",
    'a' => "Download the Application form from the College website available from <strong>October 1<sup>st</sup>, 2023</strong> and return with the requested Registration fee with the application and all supporting documents within the due date <strong>November 30<sup>th</sup>, 2023 for Day Scholars applicants and 31<sup>st</sup> December, 2023 for Boarding applicants. </strong>The invitation for Admissions will be published in all major newspapers of Pakistan."];
$faqs[] = ['q' => "Are there different categories of enrolment?",
    'a' => "Yes. Applicants may select either a day or boarding enrolment option (not both) where indicated in the application."];
$faqs[] = ['q' => "Where do Admissions testing and interviews take place?",
    'a' => "Testing and interviews only take place at Aitchison College on specified dates for each grade."];
$faqs[] = ['q' => "Why do you hold an interview?",
    'a' => "Interviews are held to determine the general suitability of boys; for example, whether they are socially ready for school and the greater demands of Aitchison College. This particularly applies to boarding admissions. Interviews may also reveal other aspects of academic suitability or challenges not necessarily revealed in an Admissions test. It is also an opportunity to meet parents and to clarify school expectations and answer questions or concerns they may have. The College doctor will also utilize this time to conduct age verification. If in the opinion of medical advice the age of a boy is determined to be unsuitable for a particular year group, the College reserves the right to cancel an Admissions offer."];
$faqs[] = ['q' => "Is there a &lsquo;kinship&rsquo; category?",
    'a' => "No. All candidates have an equal opportunity of gaining Admission to Aitchison College."];
$faqs[] = ['q' => "Which grades are open for Admissions?",
    'a' => "Our intake years are from Year 1 (K1), Year 2 (K2), Year 6 (K6), Year 7 (E2), Year 8 (M1), Year 9 (M2) and C1 (Cambridge & Federal Board-Matric). The College may decide to admit students into H1, A Level (Year 12) and Federal Board FSc (Pre-medical) based on external results. By far the largest intake is in Year 2 (K2) and Year 7 (E2). Year 1 (K1) is reserved exclusively for boarders from distant or remote areas."];
$faqs[] = ['q' => "How does Aitchison determine the numbers of boys to be admitted?",
    'a' => "With the approval of the Board of Governors the College reserves the right to offer day or boarding places by category and number according to the on-going availability in each category."];
$faqs[] = ['q' => "How can I help my son prepare for the Admissions tests?",
    'a' => "The College offers a ‘Guide to Admission Testing.’ This guide may be downloaded from the College website. This is the only information that Aitchison provides on testing."];
$faqs[] = ['q' => "Does Aitchison manage its own Admissions testing? Is it secure?",
    'a' => "Aitchison College manages its own Admissions process. The Principal is the only person who approves and has access to final test papers. He personally delivers tests to the examination centre on the day of testing and these are returned direct to his office on completion."];
$faqs[] = ['q' => "Who can answer enquiries on Admissions?",
    'a' => "All queries should be emailed to the Admissions Office at: <span style='color: blue;'>admission@aitchison.edu.pk</span>."];
$faqs[] = ['q' => "Is Aitchison connected with any preparatory academy or pre-school?",
    'a' => "No. Aitchison has no legal affiliation or association with any preparatory academy or pre-school."];
$faqs[] = ['q' => "When do applications for Admissions start and close?",
    'a' => "Please view the <a href='important-dates-admissions' target='_blank'><span style='color: blue;'>Table of Important Dates</span></a>"];
$faqs[] = ['q' => "When does testing take place?",
    'a' => "Please view the <a href='important-dates-admissions' target='_blank'><span style='color: blue;'>Table of Important Dates</span></a>"];

$faqs[] = ['q' => "Which boys are called to interview?",
    'a' => "Boys are called to interview based solely on their test results. Very strong results in English and Mathematics are essential. Interviews may or may not be held owing to the pandemic situation. Parents will be duly notified. International interviews may be held via zoom."];

$faqs[] = ['q' => "On what terms are boys admitted as boarders?",
    'a' => "Boarding places are for full boarding only. Boys entering Junior School as boarders must board for a minimum of 8 years. Boys entering boarding from Prep School onwards must board for the remainder of their time at school. Boys who have been schooled in Lahore for more than 6 months are ineligible to apply for a boarding place."];
$faqs[] = ['q' => "Can my son be admitted as a weekly boarder?",
    'a' => "No. Weekly boarding is only offered to existing day boys who wish to transfer to boarding on a temporary basis if places are available. Weekly boarding is not a category of enrolment."];
$faqs[] = ['q' => "If my son is admitted as a full boarder can he later transfer to weekly or day student status?",
    'a' => "No. Boys offered places in full boarding will not be allowed to transfer to weekly boarding or day student status. Because of this, boarding places are normally offered to those who could not otherwise attend the College owing to travelling distance."];
$faqs[] = ['q' => "Who makes up the Interview Committee?",
    'a' => "The Principal, relevant Heads of School and, when applicable, Boarding Housemaster or Housemistress."];
$faqs[] = ['q' => "May parents accompany their sons to the interview?",
    'a' => "Yes, but the panel may ask for a preliminary interview in private with the candidate."];
$faqs[] = ['q' => "Can a boy sit for the same year level in consecutive years?",
    'a' => "No boy is permitted to sit twice in the same year level. This is why there is a strict age criteria."];

$faqs[] = ['q' => "What if my son is sick or injured and cannot attend admission testing?",
    'a' => "The College may offer a short grace period in the case of genuine illness or injury that prevents a candidate from sitting for a test on the published date. In such cases, proof will be required for the College doctor to assess. Any final decision is at the Principal’s discretion. Requests must reach the Principal’s Office prior to the testing date. A candidate who qualifies for a deferred Admissions Test owing to unexpected illness or injury as determined by the College doctor will be required to sit for a replacement paper or papers at a time of the College's choosing and no later than three days after the completion of the original test paper."];

$faqs[] = ['q' => "Is it fair that some boys are older than others when being tested for the same grade of entry?",
    'a' => "The age ranges of boys will vary by up to a year in all grades, at any school. Tests are aligned with the best standards in each applicable grade of entry as one would expect at a selective entry school. The ‘Guide to Admissions Testing’ enables boys to prepare on an equal footing."];
$faqs[] = ['q' => "When will information be made available to families on whether their son has been successful or unsuccessful?",
    'a' => "Notification by letter from the Principal before the end of May 2024. Boarding places will be subject to interview."];
$faqs[] = ['q' => "Who marks and checks the scores of test papers?",
    'a' => "All papers are marked multiple times by specialist subject teachers, results moderated, and then triple counted by the Mathematics Department."];
$faqs[] = ['q' => "Does Aitchison publish scores? Can a parent have access to admission test papers? Can a parent ask where his child was ranked?",
    'a' => "No. It is a condition of the Registration process that parents accept the College’s decision as final and that results are kept private and test papers remain confidential. This is a ranking exercise for Admissions and not a school test or diagnostic test for public purposes."];

$faqs[] = ['q' => "May I visit the College ahead of registration?",
    'a' => "We regret that visits prior to registration are not possible. However, our website is very informative."];

$faqs[] = ['q' => "Do you offer Scholarships?",
    'a' => "We offer a limited number of scholarships for boarding applicants outside the Punjab. Such offers are means tested."];


$banner_url = $path.'resources/assets/images/banners/old-building-v6.jpg';
?>

<style>
    p{margin-top:10px; margin-bottom:20px;}

    .accordion-button {
        font-weight: bold;
        color: #337ab7;
        background-color: #fcf6f6; /*#f3e6c1;*/
        border-left: 10px solid #c8102e; /*orange;*/

    }

    .accordion-button:not(.collapsed) {
        color: #337ab7;
        background-color: #fcf6f6;
        box-shadow: inset 0 -1px 0 rgb(0 0 0 / 13%);
    }


</style>

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
                    <li class="breadcrumb-item active" aria-current="page"><a href="admissions-info">Admissions</a></li>
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

        <!-- Left Area -->
        <div class="col-lg-9 col-md-12 col-sm-12">

            <div class="accordion" id="accordionFaq" aria-multiselectable="true">
                <?php
                $sr = 1;
                $show = 'show';
                $collapsed = '';
                $aria_expanded = 'true';
                foreach ($faqs as $faq) {
                    ?>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq<?php echo $sr; ?>">
                            <button class="accordion-button<?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $sr; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $sr; ?>">
                                <table><tr><td style="vertical-align: top;"><?php echo $sr. '. '; ?></td><td style="padding: 0 0 0 10px;"><?php echo $faq['q']; ?></td></tr></table>
                            </button>
                        </h2>
                        <div id="collapse<?php echo $sr; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="faq<?php echo $sr; ?>" data-bs-parent="#accordionFaq">
                            <div class="accordion-body">
                                <?php echo $faq['a']; ?>
                            </div>
                        </div>
                    </div>

                    <?php
                    $sr++;
                    $show='';
                    $collapsed = ' collapsed';
                    $aria_expanded = 'false';
                } ?>

            </div>

            <p>Interviews also form an essential part of the decision-making process. The Principal will also determine whether an applicant will suit the culture of Aitchison and if he is likely to benefit from a place in boarding or day school.</p>
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
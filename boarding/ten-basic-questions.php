<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Ten Basic Questions You Might Ask"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/boarding-questions.jpg';

$faqs = [];

$faqs[] = ['q' => "Why Be a Boarder at Aitchison College?",
    'a' => "Aitchison is Pakistan’s most recognized and best equipped national boarding school. Set in 200 beautiful acres, boarding is a key component of our educational program –not an optional extra –and receives strong support from a caring and highly qualified residential teaching staff. Living with 500 other ambitious boys admitted from all parts of Pakistan, as well as select boys from overseas, boarding life is an enriching experience underpinning one of the finest old boy networks in the world. This network is a major advantage in career support."];
$faqs[] = ['q' => "Does Boarding Help Academic Achievement?",
    'a' => "Yes, many of our boarders gain admission to the world’s top universities, Ivy Leagues and Oxbridge, as well as Pakistan’s premier universities and colleges. Free University Guidance Counseling is offered."];
$faqs[] = ['q' => "Do I Receive Academic Support After School?",
    'a' => "Yes, Aitchison boarding offers free evening tutorials in all subjects with access to subject specialist residential staff on request. We also have a residential Principal who takes a very close interest in boarding."];
$faqs[] = ['q' => "What Can I Study at Aitchison?",
    'a' => "Both International and National curricula are available. Aitchison has been a Cambridge Examination Centre since 1935, and offers IGCSE and A Level courses. In addition, we also offer Federal Board, Matric and FSc syllabuses. Boys have the best range of choices in Pakistan."];
$faqs[] = ['q' => "Is Boarding Comfortable and Pleasant?",
    'a' => "Aitchison provides spacious rooms for groups of four and three senior boys. Each room has a good-sized change room and washroom facility.  All houses have common rooms with computers, pool tables, and reading areas and modern media facilities. Boarding is pleasant because Aitchison is a disciplined school that encourages the best from each boy, building self-reliance and discipline while acknowledging that each boy is unique."];
$faqs[] = ['q' => "Do Boarders Play Sports?",
    'a' => "Yes, boarders love sports and also engage in as many as 22 different clubs and societies. It’s hard not to enjoy sport with so many international standard facilities that Aitchison offers. Boarders make up many of our strongest sporting teams."];
$faqs[] = ['q' => "How Often Can I See My Family?",
    'a' => "Every second Sunday and the last weekend of each month is open for visiting and leave. The only time boarding is closed is during examination preparations. The boarding houses offer zoom and senior boys may use mobile phones at set hours."];
$faqs[] = ['q' => "Who Runs Boarding Houses?",
    'a' => "Qualified school masters who have a special interest in pastoral care and student well-being. Housemasters are aided by the Head of School and Principal. Senior boys are given sensible authority to practice leadership skills governed by rules and respect for all."];
$faqs[] = ['q' => "What If I Get Sick?",
    'a' => "Aitchison has a hospital with two doctors and a nursing staff. If specialist care or treatment are needed there are several excellent private hospitals very close by. Our doctors are on call 24 hours."];
$faqs[] = ['q' => "Is the Food Good?",
    'a' => "We think so! Aitchison knows how important good food is for active young men. Each house has its own dining hall and bearers. Our head chef is highly qualified and industry experienced."];

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
                    <li class="breadcrumb-item active" aria-current="page"><a href="boarding-houses">Boarding</a></li>
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
        <div class="col-lg-9 col-md-12 col-sm-12 mb-3">
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
<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Prep School"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/ps-school.jpg';
?>
<style>


    .page-banner::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 350px;
        background: linear-gradient(to bottom,#000000cf 5%,transparent,transparent,#000000cf);
        opacity: .7;
        z-index: 1;
        left: 0;
        top: 40px;
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="our-schools">Our Schools</a></li>
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

            <div class="row">
                <div class="col-sm-12">
                    <div class="float-end ms-3 mt-2 d-none">
                        <img src="<?php echo $image_path;?>img/pageimages/hmps-20220829.jpg" class="img-fluid rounded" alt="Image">
                        <br>
                        <div class="text-center">
                            <em style="font-size: 13px;">Raja Ashfaq<br>Headmaster Prep School</em>
                        </div>
                    </div>
                    <p>Prep School is an inspiring environment for boys who are quickly maturing and eager to express opinions. We aim to set our boys on the path toward being lifelong learners with inquisitive, objective minds. We emphasise mastery of subjects and a strong basis in knowledge and concepts from which to launch into senior studies. Equally, we strive to instill the values of an ethical person; a young gentleman -&nbsp;<em>an Aitchisonian</em>.</p>
                    <div class="text-center mb-3">
                        <img src="<?php echo $image_path;?>img/pageimages/hmps-202208312.jpg" class="img-fluid rounded" alt="Image">
                        <div class="text-start" style="background-color: #001952; padding: 5px 15px; color: #fff; font-weight: 500; width: fit-content;">RAJA ASHFAQ AHMAD | <span style="font-weight: 400;">Head of Prep School</span></div>

                    </div>
                    <p>Subjects offered at Prep School include: Cambridge core studies in English, Mathematics, Science, added to which are the compulsory studies of Urdu, Islamyiat and Pakistan Studies (History and Geography), Art, and choices of classical and modern languages: Arabic, Persian, Mandarin, German and French. Computer studies is integrated into core subjects. Coding is compulsory and we offer robotics.&nbsp;</p>
                    <p>We have a purpose built academic block with spacious classrooms, covered walkways, and four well-equipped Science Labs and Prep Room. Three state of the art Computer Studies labs have multimedia, 3-D printers and interactive smart boards, while all classrooms offer digital projection facilities. In addition to&nbsp;the&nbsp;<em>Syed Babar Ali Library</em>, Prep School has its own library which is enjoyed by pupils on a daily basis in private research and reading groups in Literature. Modern canteens provides fresh food items during two daily breaks from class.&nbsp;</p>
                    <p>In addition to formative testing or progression testing, the Prep School conducts major Examinations each calendar year in Terms 1 and&nbsp; 3 making it an effective semester system of 18 weeks each.&nbsp;</p>
                    <p>Debating (English &amp; Urdu), Recitation (English &amp; Urdu), Qira`t, Quiz competitions, Essay writing (English &amp; Urdu), Hand writing (English &amp; Urdu) are some of the competitions held among Houses on a regular basis. In addition, boys are encouraged to join at least two clubs/societies from among choices of Dramatics Club, Computer Society, Mathematics Society, Quiz Society, Chess Society, Debating Society, Music Society, Nature Club, Foreign Language Club, Art &amp; Photo Clubs, and Aero-Modeling Club.<br>
                    </p>
                    <p>In the field of Games and Sports, we offer Athletics, Cricket, Swimming, Horse Riding, Lawn and Hardcourt Tennis, Squash, Table Tennis, Badminton, Basketball, Football, and Hockey. With the exception of compulsory swimming, at least two other games must be played. Sport is compulsory in weekly PE lessons.&nbsp;</p>
                    <p>Prep School boys organize and conduct Annual Inter-School competitions for English Debates, Urdu Debates and General Knowledge Quizzes. The young writers of Prep School publish an annual School Magazine called&nbsp;<em>PREPPY&nbsp;</em>in which are published&nbsp;student articles in English, Urdu and Foreign languages. To enhance aesthetic and artistic values, boys take part in an Annual Art Competition. Boys produce annual English and Urdu plays. With the guidance of staff they manage the adaptation, sets, lighting, sound and direction –and of course acting.&nbsp;&nbsp;</p>
                    <p>Prep School is a broad, busy experience in the vital years of young adolescence. Our discipline is strong but compassionate. We expect boys to uphold Aitchison's code of honour whereby bullying and harassment are banished as utterly unworthy of an Aitchisonian.&nbsp;<br>
                    </p>
                </div>
                <div>
                    <div class="">
                        <div id="gallerySLide" class="sgallery_area">

                            <?php
                            $imgPath = $image_path."img/pageimages/gallery/pschool/";
                            $imgPathSmall = $image_path."img/pageimages/gallery/pschool/small1/";

                            $imgArray = array("1", "2", "5", "13", "14", "16", "19", "24", "17", "21", "22", "25", "27", "31", "34" , "35", "30", "29", "32", "33");

                            foreach ($imgArray as $img) {
                                ?>
                                <a href="<?php echo $imgPath . $img . ".jpg"; ?>" title="Prep School">
                                    <img class="gallery_img" src="<?php echo $imgPathSmall . $img . ".jpg"; ?>" alt="Image">
                                    <span class="view_btn">Prep School</span>
                                </a>

                                <?php
                            }
                            ?>
                        </div>

                    </div>
                </div><div>
                </div>
                <p>&nbsp;</p>
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
<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Head Boy and<br/>Student Leaders"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/old-building-v8.jpg';
$page_header = $title;
?>

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
        <div class="col-lg-9 col-md-12 col-sm-12">

            <p style="line-height:1.8;">Student Leadership is central to the Aitchison experience. At its end point, school is a transition to the real world and we stress that discipline, fairness, integrity and honesty are key ingredients in any future success. Leadership therefore forms a major part of our discourse.</p>
            <div>
                <img src="<?php echo $image_path?>img/ac-student-leadership-2.jpg" alt="" class="img-fluid float-end ms-3 mb-1" style="max-width: 416px;">
                <div>
                    <p style="line-height:1.9;">Boys will hear often that leadership begins with 'leadership of self' that builds into staged opportunities to experience leadership in the broad spectrum of sport, co-curricular, class, house and wider school opportunities. At the highest levels our boys are appointed Senior College and School prefects.</p>
                    <p style="line-height:1.9;">The Head Boy is selected from the College prefects. This is an immense and historic honour. The Head Boy will be supported by a Deputy Head Boy and up to ten other College prefects. Our Portfolio and House systems and Student Year Level Councils broaden our leadership base.</p>
                    <p style="line-height:1.9;">The Head Boy is a symbol of all that is good about Aitchison College. He plays a major part in leading the student body and ensuring that its conduct is exemplary. He works closely with the Head of Senior School, Deputy Head Boy and the College Prefects in managing leadership portfolios, holding regular meetings with the latter and determining individual roles and appraising performance. School Prefects are also appointed to support this function. The Head Boy is a conduit between College Administration and the student body. He and his Deputy meet with the Principal on a weekly basis.</p>
                    <p style="line-height:1.9;">Tangible but measured authority is given to our highest awarded boys who carry considerable responsibility for the good order of the College and its programmes.</p>
                    <hr style="margin-left:15px; margin-right:15px; margin-top: 30px; height:2px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));">
                </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div align="center">
                        <h3 style="padding: 10px; text-align: left;">Prep School Interviews Head Boy</h3>
                        <video id="introVid" controls="" style="object-fit: initial; margin-left: 0; width: 96%;">
                            <source src="<?php echo $image_path?>videos/prep-school-interviews-head-boy-20200303.mp4" style="" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                    <p style="line-height: 1.8;">The Head Boy (2019-20) of Aitchison College, Sadiq Karim Soofi (now studying at Harvard University) was interviewed by boys from the Preparatory School about his tenure, and the advice he would give his successors, peers, and juniors. </p>
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
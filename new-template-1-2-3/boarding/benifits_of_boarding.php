<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Benefits of Boarding"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/benefits-boarding.jpg';
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
                    <li class="breadcrumb-item active" aria-current="page"><a href="boarding-houses">Boarding</a></li>
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

            <div class="float-end ms-2 mb-1" style="max-width: 400px;">
                <img src="<?php echo $image_path;?>img/principal-pic-0914.png" class="img-fluid" alt="Michael Alister Thomson">
            </div>

            <p>Boarders have access to a glorious campus that offers a wide range of educational, sporting facilities and peaceful outdoor settings. Opportunities abound: cricket, football, hockey, basketball, diving, swimming, tennis, shooting, squash and horse riding including arena polo. In pursuing healthy interests a boy works and plays as part of a team, making life-long friendships and gaining a true sense of what it is to be an Aitchisonian. The campus has many beautiful outdoor locations across 200 acres including the forecourt of houses where boys gather to chat or read a book.<br></p>
            <p>Formal breakfast, lunch and dinner are taken in the Mess at set times, as are more informal afternoon tea and supper. Weekends are busy on Saturdays with sport and a little more relaxed on Sundays. The College has its own canteens and the famous ‘Deans’ where hot dogs and fruit cups are always favourites after school and on weekends. The College has its own general store, hairdresser, tailor, mail facility, and ATM.<br></p>
            <p>Senior boys share spacious rooms with adjoining bathrooms. A bed, coat cupboard, desk, study light, under-bed draws and secure locker are provided. Junior boys share dormitories with larger adjoining bathroom facilities. Each house has a comfortable TV and film room with pool tables and suitable magazines.<br></p>
            <p>Prep sessions in the evening are supported by residential specialist academic staff. This means boarders have access to specialist subject help throughout the school week. There is no need for external tutors. Our boarders regularly top academic results and have a history of very impressive university admissions into all Ivy Leagues and Russell Group. Senior boys have access to the internet for study during most of the day and evening. There are strict rules on internet usage, which is monitored. Each house has PCs and a printer to assist with studies. Mobile phones are permitted for seniors between certain hours.<br></p>
            <p>Boarding at Aitchison develops each boy’s independence and creates a network of close friends in a secure, safe and positive environment. The College regularly supports the development of boys with helpful contributions from senior staff, visiting experts, school psychologists and the College doctor. The health and well-being of our boarders is top priority. Our menus are balanced and healthy for active boys. Boys attend daily prayers at the College mosque.<br></p>
            <p>The College hospital is open 24 hours and we have our own doctors on campus, with ambulances on stand-by. There are 32 beds, including an isolation ward. Treatment for minor illnesses and ‘scrapes’ are treated at school. Our doctors regularly discuss issues relating to health and oversee personal medication programs. Anything requiring specialist assistance beyond this is referred to the excellent local general hospital or a hospital of the parents' choosing. Parents are always consulted.<br></p>
            <p>Being a boarder means experiencing Aitchison to its maximum potential. Places are in great demand.<br></p>
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
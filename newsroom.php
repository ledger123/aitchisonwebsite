<?php

$path = '';
$imagePath = '';
$include_path = '';

//include_once $include_path .'standard/redirect.php';
include($include_path ."newsletter/classes/functions.php");
include($include_path ."newsletter/classes/dataCenter.php");
include($include_path ."newsletter/news/newsrepository.php");
include("resources/php/utils.php");

$recordsPerPage = 18;

$yearNumber=date("Y");
if(isset($_GET['yearNumber'])) {
    $yearNumber = intval($_GET['yearNumber']);
}

$monthNumber = 0;

if(isset($_GET['monthNumber'])) {
    $monthNumber=$_GET['monthNumber'];

    $recordsPerPage = 100;
    //echo $monthNumber . ' - ' . $yearNumber;
}

$dc = new DataCenter();

$dc->Connect();

$newsRepo = new NewsRepository($dc);

$locations = [
        NewsLocations::NewsEvents, NewsLocations::NewsArchive,
        NewsLocations::Notices, NewsLocations::NoticesArchive,
        NewsLocations::Events, NewsLocations::EventsArchive];

$data = $newsRepo->GetPublishedNewsForNewsroom( $locations, $monthNumber, $yearNumber, 0, $recordsPerPage );

$tNews = $data[1];



//$tNews->PrintTable();


function getMonthName($monthNum) {

    $dateObj   = DateTime::createFromFormat('!m', $monthNum);
    return $dateObj->format('F');
}

?>

<!DOCTYPE html>
<html>

<?php
$title = "News and Events"; include_once ("header-includes.php");

$banner_url = $path.'resources/assets/images/banners/news-events.jpg';
$page_header = $title;

?>


<body>
<style>
    .news-box {
        border: 1px solid var(--color-gray);
    }
    .news-area {
        padding-right: 3rem!important;
    }


    @media (max-width: 1024px) {
        .left-arrow, .right-arrow {
            width: 10px!important;
        }

    }

    @media (max-width: 768px) {
        .news-area {
            padding-right: 12px!important;
        }

        .left-arrow, .right-arrow {
            width: 10px!important;
        }

    }
</style>
<?php include_once ($path.'new-logo-page-banner.php'); ?>

<?php include_once("mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">

        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="news-room">News and Events</a></li>
                </ol>
            </nav>

        </div>
    </div>
</div>


<div class="container">

    <!-- Contents -->
    <div class="row page-contents">
        <?php if (false && $monthNumber > 0) { ?>
            <div class="col-lg-9 col-md-12 col-sm-12 news-area text-center" style="font-family: initial;">
                <h2 class="text-black-50 text-uppercase" style=""><?php echo getMonthName($monthNumber). ' '. $yearNumber;?></h2>
            </div>
        <?php } ?>
        <!-- News Area -->
        <div class="col-lg-9 col-md-12 col-sm-12 news-area">
            <div class="row">

            <?php
            $imagesPath = "../newsletter/news/";
            foreach ($tNews->Rows as $row) {

                $heading = $purifier->purify(htmlspecialchars_decode(stripslashes(utf8_decode($row->Heading))));

                if ($row->NewsType == "URL") {
                    $href = $row->Content1;
                    $target = "_blank";
                }
                else {


                    if ($row->NewsFor == 1) {

                        $href = "news-" . $row->NewsId . "-" . makeSlug($heading);
                        //$href = "news-story.php?id=" . $row->NewsId;

                    }
                    elseif ($row->NewsFor == 2) {

                        //$href = "alumni/news-" . $row->NewsId . "-" . makeSlug($heading);
                        $href = "alumni/news-new.php?id=" . $row->NewsId;
                    }
                    $target = "";
                }

                //echo $row->NewsIcon;
                //$imagesPath .= $row->NewsIcon;
            ?>
            <!-- News Contents -->
            <div class="col-sm-6 col-xs-12" style="padding-bottom: 24px;">
                <div class="item">
                    <div class="news-box">
                        <a href="<?php echo $href; ?>" target="_blank">
                            <div class="news-image">
                                <img src="<?php echo $imagesPath . $row->NewsIcon; ?>" alt="News" class="news-image"/>
                            </div>
                            <div class="news-contents" style="padding: 1rem;">
                                <div class="news-date" style="margin: 5px 0;">
                                    <?php echo $row->Date; ?>
                                </div>
                                <h3 class="news-heading">
                                    <?php echo $heading; ?>
                                </h3>

                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <?php }
            if ($tNews->rowsCount() == 0) {
            ?>
                <div class="col-9 mt-5">
                    <div style="height: 15px;
                         background-image: radial-gradient(#043d49 15%, #077288 15%); background-position: 0 0; background-size: 6px 7px;"></div>
                    <div class="p-3" style="border: 1px solid #055160;">

                        <table>
                            <tr style="color: #055160;"><td><h4><i class="fa fa-info-circle"></i></h4></td><td><h4>&nbsp;Message</h4></td></tr>

                            <tr><td></td><td><h5>&nbsp;No news in the selected time period.</h5></td></tr>

                        </table>


                    </div>
                </div>
            <?php } ?>

        </div>
        </div>
        <!-- End News Area -->

        <!-- Right Area -->
        <div class="col-lg-3 col-md-6 col-sm-12 text-center calendar">

            <div class="row calendar-header">
                <div class="col-3 text-start time-period">SELECT TIME PERIOD</div>

                <div class="col-6" style="line-height: 1.1;">
                    <div class="col-6 year" id="nyear" name="nyear"><?php echo $yearNumber;?></div>
                </div>

                <div class="col-3 arrows">
                    <a class="prev"><div class="left-arrow"></div></a>
                    <a class="next"><div class="right-arrow"></div></a>
                </div>
            </div>

            <div class="row">
                <?php
                $monthNumber=14;
                for($i=1; $i < 13; $i++){

                    $monthNumber=isset($_GET['monthNumber'])?intval($_GET['monthNumber']):$monthNumber;
                    $active="";
                    if($monthNumber==$i){
                        $active="active";
                    }
                    $monthNum  = $i;
                    $dateObj   = DateTime::createFromFormat('!m', $monthNum);
                    $monthName = $dateObj->format('M');
                    ?>
                    <div class="col-3" style="padding: 1px; line-height: 3.048;">
                        <button class="month-number <?php echo $active;?>" value="<?php echo $i;?>" style=""><?php echo strtoupper($monthName);?></button>
                    </div>
                    <?php
                }
                ?>
            </div>

            <div style="margin-left: -12px; margin-right: -12px;">
                <a href="principal-letters" target="_parent">
                    <img src="resources/assets/images/banners/right-side/principal-letters.jpg" class="img-fluid mt-3" alt="Principal Letters">
                </a>

                <a href="old-boys-bulletin" target="_parent">
                    <img src="resources/assets/images/banners/right-side/old-boys-bulletin.jpg" class="img-fluid mt-3" alt="Old Boys Bulletin">
                </a>

                <a href="school/aitchison-publications" target="_parent">
                    <img src="resources/assets/images/banners/right-side/publications.jpg" class="img-fluid mt-3" alt="Publications">
                </a>
            </div>

        </div>
        <!-- End Right Area -->

        <div class="col-lg-9 col-md-12 col-sm-12">


            <div class="divider"></div>

            <div class="row">
                <div class="col-12 text-center mb-3">
                    <h6 class="header-top">Know what’s happening at Aitchison, with stories covering the latest News.</h6>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5">
                    <div class="stay-up-date">Stay up<br/>to date</div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-5 text-center" style="display: table;">
                    <h3 style="display: table-cell; vertical-align: middle;">Visit<br/><a href="https://aitchison.edu.pk/portal/acportal" target="_blank"><div style="font-size: 2.5rem;">My Aitchison</div></a>for More details.</h3>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-12 col-sm-12">

        </div>
    </div>
    <!-- End Contents -->

</div>

<div class="divider"></div>

<!-- Footer -->

<?php include_once ("footer.php");?>

<!-- End Footer -->


<!-- End Footer Includes -->
<?php include_once ("footer-includes.php");?>

<!-- End Footer Includes -->

<script>
    $(function() {
        var cyear=new Date().getFullYear();
        $(".next").click(function() {
            var yearval=parseInt(document.getElementById("nyear").innerText);
            if(cyear > yearval){
                document.getElementById("nyear").innerText=yearval+1;
            }

        })
        $(".prev").click(function() {

            var yearval=parseInt(document.getElementById("nyear").innerText);
            if(yearval > 2016){
                document.getElementById("nyear").innerText=yearval-1; //alert(document.getElementById("nyear").value+"\n"+cyear);
            }

        })
        $(".month-number").click(function(){
            var yearval=parseInt(document.getElementById("nyear").innerText);
            var monthNumber=$(this).val();
            window.location.href = "news-room-"+monthNumber+"-"+yearval;

        })
        $(".categoryselection").click(function(){

            var clsName="."+$(this).attr('name');
            if($(this).is(":checked")){

                $(clsName).show();
            }else{
                $(clsName).hide();
            }
        })
    })

</script>

</body>

</html>
<?php

$path = '';
$imagePath = '../';
$include_path = '';
if(strpos($_SERVER['REQUEST_URI'], "?")){
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: https://aitchison.edu.pk/news-room");
	exit();	
}
//include_once $include_path .'standard/redirect.php';
include($include_path ."newsletter/classes/functions.php");
include($include_path ."newsletter/classes/dataCenter.php");
include($include_path ."newsletter/news/newsrepository.php");
include("resources/php/utils.php");

$recordsPerPage = 35;

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

<?php $title = "News and Events"; include_once ("header-includes.php");?>

<body>

<!-- News Header -->
<?php include_once ('news-header.php'); ?>

<!-- News Alerts -->
<div class="container-fluid" style="padding-right: 0; background-color: #ffc845;">
<?php include_once ('news-alerts.php'); ?>

</div>

<style>
    #sect-newsalert {
        position: inherit;
    }
    .news-image {
        overflow: hidden;
        text-align: center;
        width: auto;
        height: auto;
        float: left;
        margin-right: 1rem;
        margin-bottom: 1rem;
        max-width: 450px;
    }

    @media (max-width: 1600px) {
        .news-image {
            width: 350px;
        }
    }


    @media (max-width: 1200px) {
        .news-image {
            width: 300px;
        }

        .news-heading > h2 {
            font-size: calc(1.1rem + .9vw);
        }

        .news-text {
            min-height: 4rem;
        }
    }

    @media (max-width: 576px) {
        .news-item {
            margin-left: 1rem;
            margin-right: 1rem;
        }

        .news-image {
            width: 100%;;
            float: unset;
        }

        .news-text {
            min-height: 1rem;
        }

        .mx-sm-5 {
            padding-left: 2rem !important;
            padding-right: 2rem !important;
        }
    }

</style>
<!-- End News Alerts -->


<div class="container">

    <div class="row mt-2">
        <div class="col-lg-9 col-md-6 col-sm-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="news-room">News and Events</a></li>
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

        <!-- News Area -->
        <div class="col-lg-9 col-md-12 col-sm-12">

            <?php if ($monthNumber > 0) { ?>
                <div class="col-12 text-center" style="font-family: initial;">
                    <h2 class="text-black-50 text-uppercase" style=""><?php echo getMonthName($monthNumber). ' '. $yearNumber;?></h2>
                </div>
            <?php } ?>

            <?php
            $imagesPath = "../newsletter/news/";
            foreach ($tNews->Rows as $row) {

                $heading = $purifier->purify(htmlspecialchars_decode(stripslashes(utf8_decode($row->Heading))));
				/*
				$targetShow="_self";
				if ($row->TemplateId == 6) {
					$targetShow="_blank";	
				}
				*/
				$target="_self";
                if ($row->NewsType == "URL" || $row->TemplateId == 6) {
                    $href = $row->Content1;
                    $target = "_blank";
                }
                else {


                    if ($row->NewsFor == 1) {

                        $href = "news-" . $row->NewsId . "-" . makeSlug($heading);
                        //$href = "news-story.php?id=" . $row->NewsId;

                    }
                    elseif ($row->NewsFor == 2) {

                        $href = "alumni/news-" . $row->NewsId . "-" . makeSlug($heading);
                        //$href = "alumni/news-new.php?id=" . $row->NewsId;
                    }
                    $target = "";
                }

                //echo $row->NewsIcon;
                //$imagesPath .= $row->NewsIcon;
            ?>
            <!-- News Contents -->
            <div class="news-item">



                <div class="news-body" style="">
                    <img src="<?php echo $imagesPath . $row->NewsIcon; ?>" alt="News" class="news-image">
                    <div class="news-heading" style="height: auto;overflow: hidden;">
                        <a href="<?php echo $href; ?>" target="<?php echo $target;?>"><h2 style="color: #00205b;"><?php echo $heading; ?></h2></a>
                    </div>
                    <div class="news-date">
                        <h5><?php echo $row->Date; ?></h5>
                    </div>
                    <div class="news-text" style="">
                        <p><?php echo $row->Content4; ?></p>
                    </div>
                </div>
                <div class="row justify-content-end">
                    <a href="<?php echo $href; ?>" target="<?php echo $target;?>" class="button-link small me-4" style="width: fit-content">Read News</a>
                </div>

            </div>

                <hr style="margin: 2rem 0; margin-right: 1.3rem;" />

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
        <!-- End News Area -->

        <!-- Right Area -->
        <div class="col-lg-3 col-md-6 col-sm-12 text-center">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-start">
                <h3>Select Time Period</h3>
            </div>

            <div class="row year-number" style="display: inline-block; margin-bottom: 1rem;">

                <a class="prev" style="width: auto; font-size: 26px;"><i class="fa fa-arrow-left"></i></a>
                <label id="nyear" name="nyear" style="font-size: 1.8rem; padding: 0 20px; width: auto; color: #00205b;"><?php echo $yearNumber;?></label>
                <a class="next" style="width: auto; font-size: 26px;"><i class="fa fa-arrow-right"></i></a>
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
                    $monthName = $dateObj->format('F');
                    ?>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding: 2px;">
                        <button class="month-number <?php echo $active;?>" value="<?php echo $i;?>" style=""><?php echo $monthName;?></button>
                    </div>
                    <?php
                }
                ?>
            </div>
            <?php if(false) {?>
            <div class="row mt-4">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-start">
                    <h3>Select Categories</h3>
                </div>

                <ul style="list-style: none; padding: 0;">
                <?php
                for($i=1; $i <=5; $i++){
                    ?>
                    <li class="category">
                        <label for="cat<?php echo $i;?>"><input type="checkbox" name="cat<?php echo $i;?>" id="cat<?php echo $i;?>" class="categoryselection" checked/>
                        Category <?php echo $i;?></label>
                    </li>
                    <?php
                }
                ?>
                </ul>
            </div>
            <?php }?>

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
                    <h3 style="display: table-cell; vertical-align: middle;">Visit<br/><a href="https://aitchison.edu.pk/portal/acportal" target="_blank"><div style="font-size: 2.5rem;">My Aitchison</div></a>for more details.</h3>
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
<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
if(strpos($_SERVER['REQUEST_URI'], "?")){
	header("HTTP/1.1 301 Moved Permanently");
	header("Location: https://aitchison.edu.pk/principal-letters");
	exit();	
}
$path = '';
$include_path = '../';

//include_once $include_path.'standard/redirect.php';
include_once($include_path."newsletter/classes/functions.php");
include_once($include_path."newsletter/classes/dataCenter.php");
include_once($include_path."newsletter/news/newsrepository.php");
include("resources/php/utils.php");

$recordsPerPage = 15;

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
    NewsLocations::PrNewsletter, NewsLocations::PrPastNewsletter];

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

<?php $title = "Principal's Most Recent Letters"; include_once ("header-includes.php");


$banner_url = $path.'resources/assets/images/banners/pletter.jpg';
$page_header = $title;

?>

<body>

<?php include_once ($path.'logo-page-banner.php'); ?>

<?php include_once("mega-menu.php");?>


<style>

    .letter-heading h4 {
        font-size: 1.1rem;
        font-weight: 700;
    }
    
    .letter-logo img {
        width: 80px;

    }

    .letter-contents {
        min-height: 130px;
    }

    .letter-border-position {
        padding-left: 40px;
    }

    .news-box {
        border: 1px solid var(--color-gray);
    }
    .news-area {
        padding-right: 3rem!important;
    }

    @media (max-width: 768px) {
        .news-area {
            padding-right: 12px!important;
        }
    }
</style>
<!-- End News Alerts -->



<div class="breadcrumb-bar">
    <div class="container">

        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="principal-letters">Principal's Letters</a></li>
                </ol>
            </nav>

        </div>
    </div>
</div>


<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- News Area -->
        <div class="col-lg-9 col-md-12 col-sm-12 news-area">

            <div class="row">

            <?php if ($monthNumber > 0) { ?>
                <div class="col-12 text-center" style="font-family: initial;">
                    <h2 class="text-black-50 text-uppercase" style=""><?php echo getMonthName($monthNumber). ' '. $yearNumber;?></h2>
                </div>
            <?php } ?>

            <?php
            $imagesPath = "newsletter/news/";
            foreach ($tNews->Rows as $row) {

                $heading = $purifier->purify(htmlspecialchars_decode(stripslashes(utf8_decode($row->Heading))));

                if ($row->NewsType == "URL") {
                    $href = $row->Content1;
                    $target = "_blank";
                }
                else {


                    if ($row->NewsFor == 1) {

                        $href = "principal-letter-" . $row->NewsId . "-" . makeSlug($heading);
                        //$href = "pr-letter.php?id=" . $row->NewsId;

                    }
                    elseif ($row->NewsFor == 2) {

                        //$href = "alumni/news-" . $row->NewsId . "-" . makeSlug($heading);
                        $href = "alumni/news-new.php?id=" . $row->NewsId;
                    }
                    $target = "";
                }

                $imagesPath .= $row->NewsIcon;

                $eleId = "id" . $row->NewsId;
                $eleDate = "date" . $row->NewsId;
                ?>

            <div class="col-sm-6 col-xs-12" style="padding-bottom: 10px;">

                <a href="<?php echo $href; ?>">
                    <div class="letter" onmouseover="mouseoverEvent(<?php echo $eleId.','.$eleDate;?>)" onmouseout="mouseoutEvent(<?php echo $eleId.','.$eleDate;?>)">
                        <div class="letter-border-position">
                            <div id="<?php echo $eleId;?>" class="letter-border"></div>
                        </div>
                        <div class="letter-contents d-flex" style="">
                            <div class="letter-logo">
                                <img src="resources/assets/images/pr-letter.jpg" alt="logo" />
                            </div>
                            <div class="letter-body">
                                <div class="letter-date" id="<?php echo $eleDate;?>">
                                    <?php echo $row->Date; ?>
                                </div>
                                <div class="letter-heading">
                                    <h4 style="color: #00205b;"><?php echo $heading; ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
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

                            <tr><td></td><td><h5>&nbsp;No letter in the selected time period.</h5></td></tr>

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
                        <button class="month-number <?php echo $active;?>" value="<?php echo $i;?>" style=""><?php echo $monthName;?></button>
                    </div>
                    <?php
                }
                ?>
            </div>

            <div style="margin-left: -12px; margin-right: -12px;">
                <a href="news-room" target="_parent">
                    <img src="resources/assets/images/banners/right-side/news-event.jpg" class="img-fluid mt-3" alt="News Events">
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

    function mouseoverEvent(eleId, eleDate) {
        $(eleId).css("background-color", "var(--color-yellow)");
        $(eleDate).css("color", "#fff");
    }

    function mouseoutEvent(eleId, eleDate) {
        $(eleId).css("background-color", "transparent");
        $(eleDate).css("color", "var(--color-light-text)");
    }


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
            window.location.href = "principal-letters-"+monthNumber+"-"+yearval;

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
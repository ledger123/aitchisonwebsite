<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

$path = '';
$include_path = '';

//include_once $include_path.'standard/redirect.php';
include_once($include_path."newsletter/classes/functions.php");
include_once($include_path."newsletter/classes/dataCenter.php");
include_once($include_path."newsletter/news/newsrepository.php");
include("resources/php/utils.php");

$dc = new DataCenter();

$dc->Connect();

$newsRepo = new NewsRepository($dc);

$newsId	   = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($newsId > 0)
{
    $tNews = $newsRepo->GetNews($newsId, "", "", "", 0, 0, 1, 1, defined("USER_ID")?USER_ID:0);
    //$tNews->PrintTable();
    if($tNews && $tNews->rowsCount() > 0)
    {
        $row = $tNews->Rows[0];

        $TxtNewsDate 	   = $row->Date;
        $TxtNewsHeading	   = $row->Heading;
        $ChkShowHeading	   = $row->ShowHeading;
        $TxtNewsSubheading = $row->Subheading;
        $OptNewsType	   = $row->NewsType;
        $OpenAccess		   = $row->OpenAccess;
        $active    	  	   = $row->Active;
    }

}

$locations = [
    NewsLocations::PrNewsletter, NewsLocations::PrPastNewsletter];

$data = $newsRepo->GetPublishedNewsForNewsroom( $locations, 0, 0, 0, 3, $newsId );

$tNews = $data[1];

$robotnofollow="";
if(strpos($_SERVER['REQUEST_URI'], ".php")){
    $robotnofollow='<meta name="robots" content="noindex">';
}


?>

<!DOCTYPE html>
<html>

<?php $title = "Principal's Letter"; include_once ("header-includes.php");?>

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
    .letter {
        position: relative;
    }

    .letter-border-position {
        width: 100%;
        height: 100%;
        position: absolute;
    }

    .letter-border {
        width: 100%;
        height: 100%;
        border: 1px #afafaf solid;
        background-color: transparent;
        z-index: 10;
    }
    .letter-heading {
        font-size: 21px;
        font-weight: bold;
        text-align: left;
        color: #00205b;
        line-height: 1.4;
        vertical-align: middle;
        height: auto;
        overflow: hidden;
    }
    .letter-heading h4 {
        font-size: 1.2rem;
    }
    .letter-contents {
        position: relative;
        height: 100%;
        min-height: 100px;
        margin-bottom: 15px;
        z-index: 1;
    }
    .letter-body {
        margin-top: auto;
        margin-block: auto;
        padding: 8px;
    }
    .letter-logo {
        margin-top: auto;
        margin-block: auto;
    }
    .letter-date {
        font-size: 14px;
        font-weight: bold;
        color: #a5a5a5;
    }

    .letter-logo img {
        width: 80px;
    }

@media(max-width: 1024px) {
    
    .letter-logo img {
        width: 50px;
    }
    .letter-date {
        font-size: 12px;
    }
}    

</style>
<!-- End News Alerts -->


<div class="container">

    <div class="row mx-lg-5 mt-2">
        <div class="col-lg-9 col-md-12 col-sm-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="https://aitchison.edu.pk/principal-letters">Principal's Newsletters</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Letter</li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div style="height: 60px;"></div>
        </div>
    </div>
</div>



<div class="container">

    <!-- Contents -->
    <div class="row mx-lg-5">

        <!-- News Area -->
        <div class="col-lg-9 col-md-12 col-sm-12">

            <?php
            //echo 'news id: '. $newsId. '<br>';
            if($newsId>0)
            {

                //$heading = $row->Heading; // $purifier->purify(htmlentities(stripslashes(utf8_decode ( str_replace('&amp;', '&', $row->Heading)))) );
                $heading = $purifier->purify(htmlentities(stripslashes(utf8_decode ( $row->Heading))) );

                //echo $heading. '<br>';
                //echo $_GET['title']. '<br>';

                if(true || isset($_GET['title']) && makeSlug($row->Heading)===$_GET['title'] ) {

                    $response = true;

                    //echo "OpenAccess: ".$OpenAccess."<br/>";
                    if (isset($OpenAccess) && $OpenAccess == 0) {
                        $response = false;

                    }

                    if ( $response )
                    {
                        $_GET['mode']="view";
                        $_GET['imagesPath'] = "newsletter/news/";
                        $templatePath = "";

                        include($templatePath."newsletter/news/templates/updated/addtemplate.php");
                    }
                    else
                    {
                        //echo "response: " . $response;
                        //header("location: index.php");

                        ?>
                        <div class="alert alert-info" role="alert">
                            <h2 class="alert-heading">Note:</h2>
                            <p>This page has been moved to Portal and no longer available offline.</p>

                            <p>Please visit the Portal to see the required web-page.</p>

                            <p>&nbsp;</p>
                            <p>Thank You,</p>
                            <br />
                            <p>IT Department</p>
                        </div>
                        <?php
                    }
                }
                else {

                    // if ( !isset($_GET['title'])  || isset($_GET['title']) == '') {

                    //     $href = "https://aitchison.edu.pk/new-template-1/principal-letter-".$newsId."-".makeSlug($heading);
                    //     //echo("<script>location.href = '$href';</script>");

                    //     header("Location:". $href);
                    //     exit;

                    // }
                }

            }
            ?>

        </div>
        <!-- End News Area -->

        <!-- Right Area -->
        <div class="col-lg-3 col-md-6 col-sm-12 text-center">

            <h4>RECENT Principal's Letters</h4>

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


                //echo $row->NewsIcon;
                //$imagesPath .= $row->NewsIcon;
                ?>
                <!-- News Contents -->
                <div class="col-12" style="padding-bottom: 24px;">
                    <a href="<?php echo $href; ?>" class="letter-link">
                        <div class="letter" onmouseover="mouseoverEvent(<?php echo $eleId.','.$eleDate;?>)" onmouseout="mouseoutEvent(<?php echo $eleId.','.$eleDate;?>)">
                            <div class="letter-border-position">
                                <div id="<?php echo $eleId;?>" class="letter-border"></div>
                            </div>
                            <div class="letter-contents d-flex">
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

            <?php } ?>

            <div class="text-center"><a href="principal-letters" target="_parent" class="button-link small">View All Principal's Letters</a></div>

        </div>
        <!-- End Right Area -->

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


<!-- tosrus -->
<script src="resources/js/jquery.tosrus.min.all.js"></script>
<script src="resources/js/photo-gallery-jquery.js"></script>


<script>
    function mouseoverEvent(eleId, eleDate) {
        $(eleId).css("background-color", "#ffc845");
        $(eleDate).css("color", "#fff");
    }

    function mouseoutEvent(eleId, eleDate) {
        $(eleId).css("background-color", "transparent");
        $(eleDate).css("color", "#a5a5a5");
    }

</script>

</body>

</html>
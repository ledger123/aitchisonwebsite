<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

$path = '';
$imagePath = '';
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

$robotnofollow="";
if(strpos($_SERVER['REQUEST_URI'], ".php")){
    $robotnofollow='<meta name="robots" content="noindex">';
}

/* Getting Recent News */


$locations = [
    NewsLocations::NewsEvents, NewsLocations::NewsArchive,
    NewsLocations::Notices, NewsLocations::NoticesArchive,
    NewsLocations::Events, NewsLocations::EventsArchive];

$data = $newsRepo->GetPublishedNewsForNewsroom( $locations, 0, 0, 0, 3, $newsId );

$tNews = $data[1];


?>

<!DOCTYPE html>
<html>

<?php $title = "News and Events"; include_once ("header-includes.php");

$banner_url = $path.'resources/assets/images/banners/news-events.jpg';
$page_header = $title;

?>
<style>
    .news-box {
        border: 1px solid var(--color-gray);
    }
    .news-contents {
        height: max-content;
    }
</style>
<body>

<?php include_once ($path.'new-logo-page-banner.php'); ?>

<?php include_once("mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">

        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="news-room">News and Events</a></li>
                    <li class="breadcrumb-item active" aria-current="page">News</li>
                </ol>
            </nav>

        </div>
    </div>
</div>


<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- News Area -->
        <div class="col-lg-9 col-md-12 col-sm-12 mb-5">

            <?php
            if($newsId>0)
            {

                //$heading = $row->Heading; // $purifier->purify(htmlentities(stripslashes(utf8_decode ( str_replace('&amp;', '&', $row->Heading)))) );
                $heading = $purifier->purify(htmlentities(stripslashes(utf8_decode ( $row->Heading))) );

                if(isset($_GET['title']) && makeSlug($row->Heading)===$_GET['title'] ) {

                    $response = true;

                    //echo "OpenAccess: ".$OpenAccess."<br/>";
                    if (isset($OpenAccess) && $OpenAccess == 0) {
                        $response = false;

                    }

                    if ( $response )
                    {
                        $_GET['mode']="view";
                        $_GET['imagesPath'] = $imagePath."newsletter/news/";
                        $templatePath = $imagePath."";

                        include($templatePath."newsletter/news/templates/updated/addtemplate.php");

                        if($newsId === 239){
                            echo
                            '<h5>
                                Error: Page does not exist.
                            <h5>';
                        }
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

                    if ( !isset($_GET['title'])  || isset($_GET['title']) == '') {

                        $href = "https://aitchison.edu.pk/news-".$newsId."-".makeSlug($heading);
                        //echo("<script>location.href = '$href';</script>");

                        header("Location:". $href);
                        exit;

                    }
                }

            }
            ?>

        </div>
        <!-- End News Area -->

        <!-- Right Area -->
        <div class="col-lg-3 col-md-6 col-sm-12">

            <h4>Recent News & Events</h4>

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

                ?>
                <!-- News Contents -->
                <div class="col-12" style="padding-bottom: 24px;">
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
                                    <h3 class="news-heading"><?php echo $heading; ?></h3>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            <?php } ?>

            <div class="text-center"><a href="news-room" target="_parent" class="button-link small">View All News</a></div>

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

<script>

</script>

</body>

</html>
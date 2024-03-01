<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
$newsId	   = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if($newsId === 239) {
	header("Location: https://aitchison.edu.pk/404", true, 301);
	exit;
    //http_response_code(404);
//include('my_404.php'); // provide your own HTML for the error page
    //die();
}
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

//$newsId	   = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($newsId > 0)
{
    $tNews = $newsRepo->GetNews($newsId, "", "", "", 0, 0, 1, 1, defined("USER_ID")?USER_ID:0);
    //$tNews->PrintTable();
    if($tNews && $tNews->rowsCount() > 0)
    {
        $row = $tNews->Rows[0];

        $TxtNewsDate 	   = $row->Date;
        $TxtNewsHeading	   = $row->Heading;
		$TemplateId	   	   = $row->TemplateId;
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
</style>
<!-- End News Alerts -->


<div class="container">

    <div class="row mx-lg-5 mt-2">
        <div class="col-lg-9 col-md-12 col-sm-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="./news-room">News and Events</a></li>					
                    <li class="breadcrumb-item active" aria-current="page">News</li>
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
    <div class="row mx-lg-5">

        <!-- News Area -->
        <div class="col-lg-12 col-md-12 col-sm-12 mb-5">

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

                if($newsId === 239) {



                    echo
                    '<h5>
                                Error: Page does not exist.
                            <h5>';
                }
            }
            ?>

        </div>
        <!-- End News Area -->

        <?php /*
        <!-- Right Area -->
        <div class="col-lg-3 col-md-6 col-sm-12 text-center">

        </div>
        <!-- End Right Area -->
        */?>

        


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
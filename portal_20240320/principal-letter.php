<?php

$path = "";
include_once '../standard/redirect.php';

include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."news/newsrepository.php");

include($path."classes/dataCenter2.php");
$dc2 = new DataCenter2();
$dc2->Connect();


$newsRepo = new NewsRepository($dc2);

$newsId = isset($_GET['id']) ? (int)$_GET['id']	: 0;

$NewsType = "";
$OpenAccess = 1;

$navigation = array("previous" => "0", "next" => "0");

if($newsId>0)
{
    $group = $_SESSION['PORTAL_ID'];
    $subGroup = $_SESSION['portal_School'];
    $location = $_SESSION['portal_CurrentClass'];
    $isBoarder = isset($_SESSION['portal_Boarder']) ? $_SESSION['portal_Boarder'] : ''; // is student boarder

    $isPublished = $newsRepo->IsNewsPublished( $group, $subGroup, $location, $newsId, $isBoarder );

    if ( $isPublished ) {

        $tNews = $newsRepo->GetNews($newsId, "", "", "", 0, 0, 1, 1, USER_ID );
        //$tNews->PrintTable();
        if($tNews && $tNews->rowsCount() > 0)
        {
            $row = $tNews->Rows[0];

            $OpenAccess = $row->OpenAccess;
            $NewsType = $row->NewsType;

            $navigation = $newsRepo->GetNextPreviousNews($newsId, $group, $subGroup, $location);
        }
    }
}

//var_dump($navigation);

if ($NewsType === "URL") {

    $tNewsContents = $newsRepo->GetNewsContents( $newsId );

    if($tNewsContents && $tNewsContents->rowsCount() > 0){
        $dRow = $tNewsContents->Rows[0];

        $newsContents = $dRow->Content1;
    }

    $newsContents = str_replace(array("<p>", "</p>"), "", $newsContents);
}


?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Principal's Newsletter". $newsId; include($path."includes.php"); ?>

<style>

    .page {
        width: 210mm;
        min-height: 297mm;
        padding: 20mm;
        margin: 10mm auto;
        border: 1px #D3D3D3 solid;
        border-radius: 5px;
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 1cm;
        border: 5px red solid;
        height: 257mm;
        outline: 2cm #FFEAEA solid;
    }

    @page {
        size: A4;
        margin: 0;
    }
    @media print {
        html, body {
            width: 210mm;
            height: 297mm;
        }
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }

    .disabled {
        pointer-events: none;
        cursor: default;
        opacity: 0.6;
    }

</style>

<body class="nav-md footer_fixed">
<div class="container body">
    <div class="main_container">

        <?php include($path."leftheader.php"); ?>

        <!-- page content -->
        <div class="right_col" role="main">

            <div class="container">
                <div class="row" id="newsletter">
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_content">
                                <br />
                                <?php

                                if( $newsId > 0 )
                                {
                                    $heading = $purifier->purify(htmlentities(stripslashes(utf8_decode ( str_replace('&amp;', '&', $row->Heading)))) );

                                    if( isset($_GET['title']) && makeSlug($heading)===$_GET['title'] ) {

                                        $response = true;

                                        //echo "OpenAccess: ".$OpenAccess."<br/>";
                                        if (false && $OpenAccess == 0) {
                                            $response = false;
                                            if( count($_SESSION['portal_SchoolNo']) > 0) {

                                                $response = true;
                                            }
                                        }

                                        //echo "template: ".$row->Template;
                                        //echo "<br />mode: ". $_GET['mode'];
                                        if ( $response )
                                        {
                                            if(false && $NewsType === "URL") {
                                                header("Location: ". $newsContents);
                                            }
                                            else {
                                                $_GET['imagesPath'] = "newsletter/news/";
                                                $templatePath = "";

                                                $_GET['mode'] = "view";

                                                include($templatePath."news/templates/addtemplate.php");
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

                                        if ( !isset($_GET['title']) ) {

                                            $href = "prletter-".$newsId."-".makeSlug($heading);
                                            header("Location: ". $href);
                                        }
                                    }

                                }
                                else {

                                    header("Location: principal-letters");

                                }
                                ?>
                                <div align="right">
                                    <table border="0" style="font-size:28px;">
                                        <tbody>
                                        <tr>
                                            <?php
                                            $next = '';
                                            $previous = '';
                                            $pCssClass = '';
                                            $nCssClass = '';

                                            if($navigation["previousId"] >0)
                                                $previous = 'prletter-'.$navigation["previousId"]."-".makeSlug($navigation["previousHeading"]);
                                            else $pCssClass = 'disabled';

                                            if($navigation["nextId"] >0)
                                                $next = 'prletter-'.$navigation["nextId"]."-".makeSlug($navigation["nextHeading"]);
                                            else $nCssClass = 'disabled';
                                            ?>
                                            <td style="width:50%;text-align:left;padding-right:10px;"><a href="<?php echo $previous;?>" id="previous" title="Go to Previous Letter" class="<?php echo $pCssClass; ?>"><i class="fa fa-arrow-left" style="color:#337ab7;"></i></a></td>
                                            <td style="width:50%;text-align:right;padding-left:10px;"><a href="<?php echo $next;?>" id="next" title="Go to Next Letter" class="<?php echo $nCssClass; ?>" ><i class="fa fa-arrow-right" style="color:#337ab7;"></i></a></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">&nbsp;</div>
                </div>
            </div>

            <!-- footer content -->

            <?php include($path."footer.php"); ?>

            <!-- /footer content -->

        </div>
        <!-- /page content -->

    </div>
</div>
<?php include($path."footerincludes.php"); ?>

</body>
</html>

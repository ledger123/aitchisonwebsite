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

//$tNews = $newsRepo->GetPublishedNewsByLocationId( NewsLocations::PrNewsletter );

$group = $_SESSION['PORTAL_ID'];
$subGroup = $_SESSION['portal_School'];
$location = isset($_SESSION['portal_CurrentClass']) ? $_SESSION['portal_CurrentClass'] : "";

if($_SESSION['portal_Boarder']=='B') {
    $boarder = "'ParentPortal', 'BoarderPortal'";
}
else {
    $boarder = "'ParentPortal'";
}
//$boarder = "'ParentPortal'";
//$boarder = $_SESSION['portal_Boarder'];

$tNews = $newsRepo->GetPublishedLetters( $group, $subGroup, $location, $boarder);


?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Principal's Recent Letters"; include($path."includes.php"); ?>

<style>
    .media{ width: 100%; }
</style>

<body class="nav-md footer_fixed">
<div class="container body">
    <div class="main_container">

        <?php include($path."leftheader.php"); ?>

        <!-- page content -->
        <div class="right_col" role="main">

            <div class="container">
                <div class="row" id="newsletter">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="x_panel">
                            <div class="x_content">
                                <div class="page-title">
                                    <div class="title_left" style="margin-bottom: 15px; width:100%;">
                                        <h3><?php echo $title; ?></h3>
                                    </div>
                                </div>
                                <br />
                                <div class="row">

                                    <?php
                                    if($tNews)
                                        foreach($tNews->Rows as $row) {
                                            $heading = $purifier->purify(htmlentities(stripslashes(utf8_decode ( str_replace('&amp;', '&', $row->Heading)))) );

                                            if ($row->NewsType == "URL") {
                                                //$href = $row->Content1;
                                                $href = str_replace(array("<p>", "</p>"), "", $row->Content1);
                                                $target = "_blank";
                                            }
                                            else {
                                                //$href = "principal-letter-new.php?id=".$row->NewsId;
                                                $href = "prletter-".$row->NewsId."-".makeSlug($heading);

                                                //$href = $domainName."newsandevents-live.php?id=".$row->NewsId;
                                                //$target = "_blank";
                                            }
                                            $date = "&nbsp;";
                                            if ($row->ShowDate)
                                                $date = $row->Date;

                                            ?>
                                            <div class="col-lg-12 col-md-12 col-sm-12 media" style="vertical-align:top;">
                                                <a href="<?php echo $href; ?>" target="<?php echo $target; ?>" style="text-decoration:none;">
                                                    <div class="row">
                                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2" style="padding-right:0;">
                                                            <i style="color: #002663; font-size: 30px;" class="fa fa-envelope"></i></div>
                                                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10" style="font-size:18px;">
                                                            <div><?php echo $heading;?></div>
                                                            <div style="font-size:16px;color:#818181;"><?php echo $date;?></div>
                                                        </div>
                                                    </div>
                                                </a>

                                            </div>
                                            <?php
                                        }
                                    ?>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                        <?php include($path."rightpanel.php"); ?>

                    </div>
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

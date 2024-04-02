<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."classes/filing.php");
include($path."data/worksheetsdata.php");
//include($path."data/worksheetsdata-offline.php");

$howework_link = "";

$header = "Homework";
$link_text = "Download Homework";
$updated_link = "";


$id = isset($_POST['id']) ? $_POST['id'] : '';

$worksheets = [];
$homeworks_arr = [];


if($_SESSION['portal_School'] == "SSD") {
    $worksheets = getWorkSheets($_SESSION['portal_CurrentClass']);
    //var_dump($worksheets);
}

$latest = array();
if( count($worksheets) > 0 ) {


    if( $id == '') {
        #getting first record as latest
        //$latest = $worksheets[0];
        //$date = $latest['date'];
    }


    $data_ = getData($_SESSION['portal_CurrentClass'], $id);
    //var_dump($data_);

    if( isset($data_) && count($data_) > 0 ) {

        $homeworks_arr = $data_['data'];

        //var_dump($homeworks_arr);

        $date = $data_['date'];
        $header = $data_['header'];
        $link_text = $data_['link_text'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">


<?php $title = $header; include($path."includes.php"); ?>
<!-- FullCalendar -->
<link href="vendors/fullcalendar/dist-v4/fullcalendar.min.css" rel="stylesheet">
<link href="vendors/fullcalendar/dist-v4/fullcalendar.print.css" rel="stylesheet" media="print">

<style>
    #defaultIcon {
        position: relative;
    }

    /* positions header-content at the bottom of header's context */
    #defaultIcon-content {
        position: absolute;
        bottom: 0;
    }
    .fc-day-grid-container.fc-scroller {
        height: auto!important;
        overflow-y: auto;
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
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="x_panel">
                            <div class="x_content">

                                <?php
                                if ($id == '' && count($worksheets) > 0) {
                                    ?>

                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="page-title">
                                                <h4 style="margin-top:0;">Homework</h4>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <?php
                                        for ($i = 0; $i < count($worksheets); $i++) {
                                            ?>

                                            <form action="" method="post">
                                                <input type="hidden" name="id" value="<?php echo $worksheets[$i]['id']; ?>">
                                                <div class="col-lg-7 col-md-9 col-sm-12 col-xs-12" style="padding-left: 0;">
                                                    <p>
                                                        <a href="#"
                                                           target="parent" class="active lnkDownload" style="display: inline-flex; padding: inherit; margin-left: 0;"
                                                           onclick="$(this).closest('form').submit(); return false;">
                                                        <span style="font-weight: bold;"><i class="fa fa-folder glyphicon" aria-hidden="true" style="font-size: 24px; color:#fbb034; background:#fff;"></i>
                                                            <?php echo $worksheets[$i]['header'] . " - " . dateFormat($worksheets[$i]['date']); ?>
                                                        </span>
                                                        </a>
                                                    </p>
                                                </div>
                                            </form>
                                            <?php
                                        }
                                        ?>

                                    </div>

                                    <div class="row">
                                        <?php
                                        if($_SESSION['portal_School'] == "JSD")
                                        {
                                            echo $instruntions;
                                        }
                                        ?>
                                    </div>

                                    <?php
                                }else {
                                    if( in_array ($_SESSION['portal_School'], ["JSD", "PSD"]))
                                    {
                                    ?>
                                        <div class="alert alert-primary" role="alert" style="color: #000; background-color: #cce5ff; border-color: #b8daff;">
                                            <div><strong>Homework is available on the Google Classroom.</strong></div>
                                        </div>
                                    <?php
                                    }
                                }
                                ?>

                                <?php if(count($homeworks_arr) > 0) { ?>
                                    <div class="row">
                                        <div class="col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                            <div class="page-title">
                                                <h4 style="margin-top:0;"><?php echo $header . ' - ' . dateFormat($date); ?></h4>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-2 col-sm-12 col-xs-12" style="text-align: right;">
                                            <a href="homework.php" class="btn btn-primary">Back</a>
                                        </div>
                                    </div>


                                    <?php
                                    if ($_SESSION['portal_CurrentClass'] == "Pre C1" || $_SESSION['portal_CurrentClass'] == "C1") {
                                        ?>
                                        <p><!--These are the original worksheets now available to download by subject.--></p>
                                        <?php
                                    }

                                }
                                ?>
                                <div class="row">
                                    <?php //if(false){?>
                                    <?php

                                    foreach ( $homeworks_arr as $row ) {
                                        //var_dump($row);
                                        if( true ) {
//echo "".$row['FileUrl'];
                                            ?>

                                            <div class="col-lg-6 col-md-9 col-sm-12 col-xs-12" style="padding-left: 0;">
                                                <p>
                                                    <a href="<?php echo Filing::GetURL2($row['FileUrl'], $row['Caption'], "../".$row['FileUrl'], $header, $functions ); ?>"
                                                       target="parent" class="active lnkDownload" style="display: inline-flex; padding: inherit; margin-left: 0;">
                                                        <span style="font-weight: bold;"><span class="glyphicon" style="line-height: 1.7;"></span> <?php echo $row['Caption']; ?> </span>
                                                    </a>
                                                </p>
                                            </div>

                                            <?php

                                        }
                                    }

                                    ?>

                                </div>

                                <div class="row" align="right" style="margin: 15px 0;">

                                    <?php if(strlen( $updated_link ) > 0 ) { ?>
                                        <div><p  style="font-size:12px;"><?php echo $updated_link; ?></p></div>
                                    <?php } ?>
                                </div>
                                <?php if ($id != '') { ?>
                                    <div class="row">
                                        <p><span style="font-size:12px;">The downloadable file is in zip/rar format.&nbsp; You need to unpack its contents in order to use it.&nbsp;</span></p>

                                        <div>
                                            <p><span style="font-size:12px;"><strong>Open Zip/RAR&nbsp;File in 2 Easy Steps:</strong></span></p>


                                            <ol>
                                                <li><span style="font-size:12px;"><strong>Download &amp; install WinRAR</strong></span></li>
                                                <li><span style="font-size:12px;"><strong>Double-click OR right-click on the .RAR file to open it with WinRAR</strong></span></li>
                                            </ol>


                                            <p><span style="font-size:12px;"><strong>Other Ways to Open A&nbsp;Zip/RAR File:</strong></span></p>

                                            <p><span style="font-size:12px;">Open WinRAR and select the file/folder from the WinRAR file panel.</span></p>

                                            <p><span style="font-size:12px;"><strong>Open RAR files with WinRAR in the following Windows versions:</strong></span></p>

                                            <p><span style="font-size:12px;">Windows 10, Windows 8, Windows 7, Windows Vista, Windows XP</span></p>

                                            <div><span style="font-size:12px;"><strong>How to&nbsp;<strong>Open RAR Files</strong>&nbsp;on&nbsp;Mobile Phone:</strong></span></div>

                                            <div>
                                                <ol>
                                                    <li><span style="font-size:12px;">Download and install the&nbsp;<strong>RAR</strong>&nbsp;app for&nbsp;<strong>Mobile</strong></span></li>
                                                    <li><span style="font-size:12px;"><strong>Open</strong>&nbsp;the&nbsp;<strong>RAR</strong>&nbsp;app</span></li>
                                                    <li><span style="font-size:12px;">Navigate to the folder containing the&nbsp;<strong>file</strong>&nbsp;you wish to&nbsp;<strong>open</strong></span></li>
                                                    <li><span style="font-size:12px;">Tap the individual&nbsp;<strong>files</strong>&nbsp;to&nbsp;<strong>open</strong>&nbsp;them</span></li>
                                                </ol>
                                            </div>

                                            <div><span style="font-size:12px;"><strong>How to open RAR on a Mac with The Unarchiver app</strong></span></div>

                                            <div>
                                                <ol>
                                                    <li><span style="font-size:12px;">Download The Unarchiver in the App Store.</span></li>
                                                    <li><span style="font-size:12px;">Make sure RAR files are selected.</span></li>
                                                    <li><span style="font-size:12px;">Choose Extraction options in The Unarchiver.</span></li>
                                                    <li><span style="font-size:12px;">Open the RAR file with The Unarchiver.</span></li>
                                                    <li><span style="font-size:12px;">Select your folder location or create a new one, and click Extract.</span></li>
                                                </ol>
                                            </div>

                                        </div>

                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

                    </div>
                </div>
            </div>

            <!-- footer content -->

            <?php include($path."footer.php"); ?>

            <!-- /footer content -->

        </div>


    </div>
</div>
<?php include($path."footerincludes.php"); ?>

</body>

</html>

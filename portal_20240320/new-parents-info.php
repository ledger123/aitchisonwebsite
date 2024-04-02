<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."classes/filing.php");
include($path."data/worksheetsdata.php");
//include($path."data/worksheetsdata-offline.php");

$howework_link = "";

$header = "New Parents Information";

if($_SESSION['portal_School'] == "SSD") {

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

                                <div class="page-title">
                                    <h3><?php echo $title; ?></h3>
                                </div>
                                <br />
                                <div class="row">

                                <?php if ( in_array($_SESSION['portal_School'], ['SSD']) ) { ?>
									
                                    <div class="row" style="padding: 8px;">
                                        <div class="col-sm-12">
                                            <a href="new-notice-2114-principals-letter-may-25" target="_blank" style="text-decoration:none; font-size: 18px;">

                                                <div class="row">

                                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10" style="font-size:18px;">
                                                        <div><i style="color: #002663; font-size: 12px;" class="fa fa-star"></i><span style="padding-left: 15px;">Principal's Letter - May 25</span></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <?php /*?><div class="row" style="padding: 8px;">
                                        <div class="col-sm-12">
                                            <a href="ac-notice-2105-consent-form-for-summer-sports-camp-2023-senior-school" target="_blank" style="text-decoration:none; font-size: 18px;">

                                                <div class="row">

                                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10" style="font-size:18px;">
                                                        <div><i style="color: #002663; font-size: 12px;" class="fa fa-star"></i><span style="padding-left: 15px;">Consent Form for Summer Sports Camp - 2023</span></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div><?php */?>

                                <?php } ?>

                                <?php /*?>
                                    <div class="row" style="padding: 8px;">
                                        <div class="col-sm-12">
                                            <a href="new-notice-2113-orientation-day-for-all-new-admissions-2023-24" target="_blank" style="text-decoration:none; font-size: 18px;">

                                                <div class="row">

                                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10" style="font-size:18px;">
                                                        <div><i style="color: #002663; font-size: 12px;" class="fa fa-star"></i><span style="padding-left: 15px;">Orientation Day for All New Admissions 2023-24</span></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                <?php */?>

                                    <div class="row" style="padding: 8px;">
                                        <div class="col-sm-12">
                                            <a href="prletter-2123-car-stickers-and-parking-information-for-academic-year-2023-24" target="_blank" style="text-decoration:none; font-size: 18px;">

                                                <div class="row">

                                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10" style="font-size:18px;">
                                                        <div><i style="color: #002663; font-size: 12px;" class="fa fa-star"></i><span style="padding-left: 15px;">Car Stickers and Parking Information for Academic Year 2023-24</span></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div class="row" style="padding: 8px;">
                                        <div class="col-sm-12">
                                            <a href="car-stickers-policy" target="_blank" style="text-decoration:none; font-size: 18px;">

                                                <div class="row">

                                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10" style="font-size:18px;">
                                                        <div><i style="color: #002663; font-size: 12px;" class="fa fa-star"></i><span style="padding-left: 15px;">Car Sticker Policy</span></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <?php if (false && (in_array($_SESSION['portal_School'], ['PSD'])) ) { ?>

                                        
                                        <div class="row" style="padding: 8px;">
                                            <div class="col-sm-12">
                                                <a href="ac-notice-2104-consent-form-for-summer-sports-camp-2023-prep-school" target="_blank" style="text-decoration:none; font-size: 18px;">

                                                    <div class="row">

                                                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10" style="font-size:18px;">
                                                            <div><i style="color: #002663; font-size: 12px;" class="fa fa-star"></i><span style="padding-left: 15px;">Consent Form for Summer Sports Camp - 2023</span></div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    <?php } ?>

                                    
                                    
                                    
                                    <?php if ( in_array($_SESSION['portal_School'], ['JSD']) ) { ?>

                                        <?php if(false && $_SESSION['portal_CurrentClass'] !== 'K1') { ?>
                                        <div class="row" style="padding: 8px;">
                                            <div class="col-sm-12">
                                                <a href="ac-notice-2133-books-notebooks-stationery-distribution-plan-2023-24-junior-school" target="_blank" style="text-decoration:none; font-size: 18px;">

                                                    <div class="row">

                                                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10" style="font-size:18px;">
                                                            <div><i style="color: #002663; font-size: 12px;" class="fa fa-star"></i><span style="padding-left: 15px;">Books, Notebooks & Stationery Distribution Plan 2023-24</span></div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <?php } ?>

                                        <?php /*?><div class="row" style="padding: 8px;">
                                            <div class="col-sm-12">
                                                <a href="ac-notice-2103-consent-form-for-summer-sports-camp-2023-junior-school" target="_blank" style="text-decoration:none; font-size: 18px;">

                                                    <div class="row">

                                                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10" style="font-size:18px;">
                                                            <div><i style="color: #002663; font-size: 12px;" class="fa fa-star"></i><span style="padding-left: 15px;">Consent Form for Summer Sports Camp - 2023</span></div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div><?php */?>
                                        

                                    <?php } ?>

                                    <?php if ( in_array($_SESSION['portal_School'], ['JSD1']) && $_SESSION['portal_CurrentClass'] == 'K2' ) { ?>

                                        

                                    <?php } ?>


                                    <?php if ( in_array($_SESSION['portal_School'], ['PSD1'])  ) { ?>

                                        
                                    <?php } ?>


                                    <?php if ( in_array($_SESSION['portal_School'], ['JSD1', 'PSD1'])  ) { ?>

                                        
                                    <?php } ?>


                                    <?php if ( in_array($_SESSION['portal_School'], ['JSD1']) && $_SESSION['portal_CurrentClass'] == 'K211' ) { ?>

                                        
                                    <?php } ?>
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


    </div>
</div>
<?php include($path."footerincludes.php"); ?>

</body>

</html>

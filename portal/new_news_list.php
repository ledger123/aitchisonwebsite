<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."classes/filing.php");
include($path."data/worksheetsdata.php");
//include($path."data/worksheetsdata-offline.php");

$howework_link = "";

$header = "News";

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

                                    <div class="row" style="padding: 8px;">
                                        <div class="col-sm-12">
                                            <a href="ac-notice-2564-syed-babar-ali-farewells-principal-thomson" target="_blank" style="text-decoration:none; font-size: 18px;">

                                                <div class="row">

                                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10" style="font-size:18px;">
                                                        <div><i style="color: #002663; font-size: 12px;" class="fa fa-star"></i><span style="padding-left: 15px;">SYED BABAR ALI FAREWELLS PRINCIPAL THOMSON</span></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row" style="padding: 8px;">
                                        <div class="col-sm-12">
                                            <a href="ac-notice-2084-aitchison-boys-continue-the-tradition-of-elite-usa-admissions" target="_blank" style="text-decoration:none; font-size: 18px;">

                                                <div class="row">

                                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10" style="font-size:18px;">
                                                        <div><i style="color: #002663; font-size: 12px;" class="fa fa-star"></i><span style="padding-left: 15px;">Aitchison Boys Continue the Tradition of Elite USA Admissions</span></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row" style="padding: 8px;">
                                        <div class="col-sm-12">
                                            <a href="https://aitchison.edu.pk/school_doc/ThinkFest_2024_Schedule.pdf" target="_blank" style="text-decoration:none; font-size: 18px;">

                                                <div class="row">

                                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10" style="font-size:18px;">
                                                        <div><i style="color: #002663; font-size: 12px;" class="fa fa-star"></i><span style="padding-left: 15px;">ThinkFest 2024</span></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>


                                    <?php if ( in_array($_SESSION['portal_School'], ['SSD']) ) { ?>

                                    <div class="row" style="padding: 8px;">
                                        <div class="col-sm-12">
                                            <a href="ac-notice-2539-riding-programme-march-2024-senior-school" target="_blank" style="text-decoration:none; font-size: 18px;">

                                                <div class="row">

                                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10" style="font-size:18px;">
                                                        <div><i style="color: #002663; font-size: 12px;" class="fa fa-star"></i><span style="padding-left: 15px;">Riding Programme March 2024 - Senior School</span></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>


                                    <div class="row" style="padding: 8px;">
                                        <div class="col-sm-12">
                                            <a href="ac-notice-2116-important-guidelines-for-community-service-and-internships" target="_blank" style="text-decoration:none; font-size: 18px;">

                                                <div class="row">

                                                    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10" style="font-size:18px;">
                                                        <div><i style="color: #002663; font-size: 12px;" class="fa fa-star"></i><span style="padding-left: 15px;">Important Guidelines for Community Service and Internships</span></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                <?php } ?>

                                    <?php if (false && (in_array($_SESSION['portal_School'], ['PSD'])) ) { ?>


                                    <?php } ?>

                                    
                                    
                                    
                                    <?php if ( in_array($_SESSION['portal_School'], ['JSD']) ) { ?>


                                        <div class="row" style="padding: 8px;">
                                            <div class="col-sm-12">
                                                <a href="ac-notice-1888-appointment-of-head-of-lower-junior-school" target="_blank" style="text-decoration:none; font-size: 18px;">

                                                    <div class="row">

                                                        <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10" style="font-size:18px;">
                                                            <div><i style="color: #002663; font-size: 12px;" class="fa fa-star"></i><span style="padding-left: 15px;">Appointment of Head of Lower Junior School</span></div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <?php if(false && $_SESSION['portal_CurrentClass'] !== 'K1') { ?>

                                        <?php } ?>


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

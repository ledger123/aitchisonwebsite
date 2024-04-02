<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."classes/filing.php");

echo "<!-- ";
//$fileUrl = Filing::GetURL2("", 'Download Complete Reopening Details', $purifier->purify("../data/2020-21/prep-school-routine-timetable.pdf"), 'Download Complete Reopening Details', $functions);

echo " -->";

?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Timings"; include($path."includes.php"); ?>

<style>
    .jambo_table>tbody>tr>td:nth-child(2),
    .jambo_table>tbody>tr>td:nth-child(3){
        text-align: center;
    }

    /**CSS FOR ZOOMING THE IMAGES: STARTED**/
    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
        display: block;
        margin-left: auto;
        margin-right: auto;
        border: rgba(52,99,227,1.00) medium solid;
    }

    #myImg:hover {opacity: 0.7;}

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        /*background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
        background-color: rgb(0 0 0 / 18%);
    }

    /* Modal Content (image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 75%;
    //max-width: 75%;
    }

    /* Caption of Modal Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation */
    .modal-content, #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    .out {
        animation-name: zoom-out;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {-webkit-transform:scale(1)}
        to {-webkit-transform:scale(2)}
    }

    @keyframes zoom {
        from {transform:scale(0.4)}
        to {transform:scale(1)}
    }

    @keyframes zoom-out {
        from {transform:scale(1)}
        to {transform:scale(0)}
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px){
        .modal-content {
            width: 100%;
        }
    }
    /**CSS FOR ZOOMING THE IMAGES: ENDED**/
</style>

<body class="nav-md footer_fixed">
<div class="container body">
    <div class="main_container">

        <?php include($path."leftheader.php"); ?>

        <!-- page content -->
        <div class="right_col" role="main">

            <div class="container">
                <div class="row" id="examinations">
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="x_panel">
                            <div class="x_content">
                                <?php if ( $_SESSION['portal_School'] == "JSD" ) { ?>
                                    <div align="center" class="page-title">
                                        <h3>School Timings</h3>
                                    </div>
                                    <h3 align="center">Routine Programme - Session 2022-23<br>
                                    Summer Term – Ramadan Timing                                    </h3>

                                    <div class="table-responsive"></div>

                                    <div align="center"><strong>Commencing from Wednesday, 22<sup>nd</sup> March, 2023</strong></div>
                                    <br>

                                    <div align="center" style="font-size: 18px;"><strong>Classes: K1, K2 &amp; K3 (Lower Primary)</strong></div>


                                    <div style="clear:both;">&nbsp;</div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered jambo_table" style="width:100%;text-align:center;">
                                            <thead>
                                            <tr>
                                                <th style="text-align:center;">Monday to Thursday</th>
                                                <th style="text-align:center;">Friday</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>7:40 AM – 11:55 AM</td>
                                                <td>7:40 AM – 10:25 AM</td>
                                            </tr>
                                            </tbody>

                                        </table>
                                        <div style="text-align: center; font-weight: bold">College Gates Closed - <strong>7:40 AM</strong></div>
                                        <p>&nbsp;</p>
                                    </div>
                                    <div align="center" style="font-size: 18px;"><strong>Classes: K4, K5 &amp; K6 (Upper Primary)</strong></div>


                                    <div style="clear:both;">&nbsp;</div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered jambo_table" style="width:100%;text-align:center;">
                                            <thead>
                                            <tr>
                                                <th style="text-align:center;">Monday to Thursday</th>
                                                <th style="text-align:center;">Friday</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>7:40 AM – 12:10 PM</td>
                                                <td>7:40 AM – 10:40 AM</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            </tbody>

                                        </table>
                                        <div style="text-align: center; font-weight: bold">College Gates Closed - <strong>7:40 AM</strong></div>
                                    </div>
                                    <?php /*?>
<div align="center"><strong>Classes: K4, K5 &amp; K6 (Upper Primary)</strong></div>


<div style="clear:both;">&nbsp;</div>

<div class="table-responsive">
    <table class="table table-bordered jambo_table" style="width:100%;text-align:center;">
        <thead>
        <tr>
            <th style="text-align:center;">Monday to Thursday</th>
            <th style="text-align:center;">Friday</th>
        </tr>
        </thead>
        <tbody><tr>
            <td>7:40 AM – 1:45 PM</td>
            <td>7:40 AM – 11:45 AM</td>
        </tr></tbody>
    </table>
<div style="text-align: center; font-weight: bold">College Gates Closed – 7:40 AM</div>
</div>

<p>&nbsp;</p><?php */?>

                                    <?php /*?><div><p><strong>Note:</strong>&nbsp; The announcement of Cycle A and Cycle B for the students will be uploaded to the Parents&rsquo; Portal.&nbsp;The school has already catered for siblings as much as possible.&nbsp;Kindly cooperate as no change is possible in the assigned Cycle.&nbsp;This is to ensure that 50 % strength of students attend school daily.</p></div><?php */?>

                                <?php }
                                elseif ( $_SESSION['portal_School'] == "PSD" ) { ?>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div align="center" class="page-title">
                                                <h3>School Timings</h3>

                                                <h3>Weekly Routine Programme</h3>
                                                <h4>SUMMER TERM<br>Ramadan Timing<br>Commencing Wednesday, March 22<sup>nd</sup>, 2023</h4>
                                            </div>

                                            <p><strong>Monday to Thursday</strong></p>
                                            <div class="row table-responsive">
                                                <table class="table table-bordered jambo_table" style="width:100%;">
                                                    <tbody>

                                                    <tr>
                                                        <th style="text-align: center;" width="50%">EVENTS</th>
                                                        <th style="text-align: center;" colspan="2" width="50%">TIMINGS</th>
                                                    </tr>
                                                    <tr>
                                                        <td>College Gate Closed</td>
                                                        <td><strong>07:40 a.m.</strong></td>
                                                        <td>&nbsp;</td>
                                                      </tr>
                                                    <tr>
                                                        <td>Tutorial/ Zero Period</td>
                                                        <td>07:45 a.m.</td>
                                                        <td>08:00 a.m.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1<sup>st</sup> Period</td>
                                                        <td>08:00 a.m.</td>
                                                        <td>08:35 a.m.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2<sup>nd</sup> Period</td>
                                                        <td>08:35 a.m.</td>
                                                        <td>09:10 a.m.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3<sup>rd</sup> Period</td>
                                                        <td>09:10 a.m.</td>
                                                        <td>09:45 a.m.</td>
                                                    </tr>

                                                    <tr>
                                                        <td>4<sup>th</sup> Period</td>
                                                        <td>09:45 a.m.</td>
                                                        <td>10:20 a.m.</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Break</strong></td>
                                                        <td><strong>10:20 a.m.</strong></td>
                                                        <td><strong>10:40 a.m.</strong></td>
                                                    </tr>
                                                    <tr>
                                                        <td>5<sup>th</sup> Period</td>
                                                        <td>10:45 a.m.</td>
                                                        <td>11:20 a.m.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6<sup>th</sup> Period</td>
                                                        <td>11:20 a.m.</td>
                                                        <td>11:55 a.m.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7<sup>th</sup> Period</td>
                                                        <td>11:55 a.m.</td>
                                                        <td>12:30 p.m.</td>
                                                    </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                            <p><strong>Friday</strong></p>
                                            <div class="row table-responsive">
                                                <table class="table table-bordered jambo_table" style="width:100%;">
                                                    <tbody>

                                                    <tr>
                                                        <th style="text-align: center;" width="50%">EVENTS</th>
                                                        <th style="text-align: center;" colspan="2" width="50%">TIMINGS</th>
                                                    </tr>
                                                    <tr>
                                                        <td>College Gate Closed</td>
                                                        <td><strong>07:40 a.m.</strong></td>
                                                        <td>&nbsp;</td>
                                                      </tr>
                                                    <tr>
                                                        <td>General Assembly  / Tutorial</td>
                                                        <td>07:45 a.m.</td>
                                                        <td>08:00 a.m.</td>
                                                    </tr>

                                                    <tr>
                                                        <td>1<sup>st</sup> Period</td>
                                                        <td>08:00 a.m.</td>
                                                        <td>08:35 a.m.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2<sup>nd</sup> Period</td>
                                                        <td>08:35 a.m.</td>
                                                        <td>09:10 a.m.</td>
                                                    </tr>

                                                    <tr>
                                                        <td><strong>Break</strong></td>
                                                        <td><strong>09:10 a.m.</strong></td>
                                                        <td><strong>09:30 a.m.</strong></td>
                                                    </tr>


                                                    <tr>
                                                        <td>3<sup>rd</sup> Period</td>
                                                        <td>09:30 a.m.</td>
                                                        <td>10:05 a.m.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4<sup>th</sup> Period</td>
                                                        <td>10:05 a.m.</td>
                                                        <td>10:40 a.m.</td>
                                                    </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                            <p><strong>Note:</strong></p>
                                            <ol>
											<li>From Monday to Thursday summer uniform Khaki trousers, white full sleeves shirt, grey socks and black college shoes</li>
											<li>On Fridays, white shalwar kameez</li>
											<li>There will no morning games during the month of Ramadan</li>	
											</ol>
                                        </div>
                                    </div>
                                <?php }elseif ( $_SESSION['portal_School'] == "PSD" && false ) { ?>
                                    <div class="row">
                                        <div align="left" class="page-title">
                                            <h3>Timings</h3><br>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-bottom: 12px;">
                                                    <a href="routine-timetable" class="btn btn-primary" style="width: 100%;">
                                                        <span style="font-size: 18px;">School Timings</a></span>
                                                </div>
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <a href="classes-timetable" class="btn btn-primary" style="min-width: 100%;"><span style="font-size: 18px;">Timetable of classes</a></span>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                <?php }

                                elseif ( $_SESSION['portal_School'] == "SSD" ) { ?>
                                    <div align="center" class="page-title">
                                        <h3>School Timings</h3>
                                    </div>
                                    <h3 align="center">ROUTINE PROGRAMME FOR SENIOR SCHOOL</h3>

                                    <h4 align="center">Ramadan Timing</h4>

                                    <div align="center"><strong>Commencing from Wednesday, March 22<sup>nd</sup>, 2023</strong></div>

                                    <p>&nbsp;</p>

                                    <p><strong>MONDAY TO THURSDAY</strong></p>

                                    <div class="table-responsive">

                                        <table class="table table-bordered jambo_table" style="width: 100%;">
                                            <thead>
                                            <tr style="background-color:#293594;color:#FFF;">
                                                <th height="23" style="height:23px;">Events</th>
                                                <th colspan="2" style="text-align:center;">Timings</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr height="20">
                                                <td height="20" style="height:20px;">College Gate Closed</td>
                                                <td>07:40</td>
                                                <td></td>
                                            </tr>
                                            <tr height="20">
                                                <td height="20" style="height:20px;">1<sup>st</sup> Period</td>
                                                <td>07:45</td>
                                                <td>08:15</td>
                                            </tr>
                                            <tr height="20">
                                                <td height="20" style="height:20px;">2<sup>nd</sup> Period</td>
                                                <td>08:20</td>
                                                <td>08:50</td>
                                            </tr>
                                            <tr height="20">
                                                <td height="20" style="height:20px;">3<sup>rd</sup> Period</td>
                                                <td>08:55</td>
                                                <td>09:25</td>
                                            </tr>
                                            <tr height="20">
                                                <td height="20" style="height:20px;">4<sup>th</sup> Period</td>
                                                <td>09:30</td>
                                                <td>10:00</td>
                                            </tr>
                                            <tr height="20" style="font-weight: bold;">
                                                <td height="20" style="height:20px;">Break&nbsp;</td>
                                                <td>10:00</td>
                                                <td>10:20</td>
                                            </tr>
                                            <tr height="20">
                                                <td height="20" style="height:20px;">5<sup>th</sup> Period</td>
                                                <td>10:25</td>
                                                <td>10:55</td>
                                            </tr>
                                            <tr height="20">
                                                <td height="20" style="height:20px;">6<sup>th</sup> Period</td>
                                                <td>11:00</td>
                                                <td>11:30</td>
                                            </tr>
                                            <tr height="20">
                                                <td height="20" style="height:20px;">7<sup>th</sup> Period</td>
                                                <td>11:35</td>
                                                <td>12:05</td>
                                            </tr>
                                            <tr height="20">
                                                <td height="20" style="height:20px;">8<sup>th</sup> Period</td>
                                                <td>12:10</td>
                                                <td>12:40</td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <p><strong>FRIDAY</strong></p>
                                        <table class="table table-bordered jambo_table" style="width: 100%;">
                                            <thead>
                                            <tr style="background-color:#293594;color:#FFF;">
                                                <th height="23" style="height:23px;">Events</th>
                                                <th colspan="2" style="text-align:center;">Timings</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr height="20">
                                                <td height="20" style="height:20px;">College Gate Closed</td>
                                                <td>07:40</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr height="20">
                                                <td height="20" style="height:20px;">1<sup>st</sup> Period</td>
                                                <td>07:45</td>
                                                <td>08:20</td>
                                            </tr>
                                            <tr height="20">
                                                <td height="20" style="height:20px;">2<sup>nd</sup> Period</td>
                                                <td>08:25</td>
                                                <td>09:00</td>
                                            </tr>
                                            <tr height="20" style="font-weight: bold;">
                                                <td height="20" style="height:20px;">Break</td>
                                                <td>09:00</td>
                                                <td>09:30</td>
                                            </tr>
                                            <tr height="20">
                                                <td height="20" style="height:20px;">3<sup>rd</sup> Period</td>
                                                <td>09:35</td>
                                                <td>10:10</td>
                                            </tr>
                                            <tr height="20">
                                                <td height="20" style="height:20px;">4<sup>th</sup> Period</td>
                                                <td>10:15</td>
                                                <td>10:50</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p>&nbsp;</p>

                                    <?php if(true) { ?>

                                        <p>Note:</p>
                                        <ol style="margin-left: 15px; list-style: numeric;">
                                            <li>Jumma Prayers at 1:30 pm.</li>
                                            <li>Summer uniform Khaki trouser, white full sleeves shirt, grey socks and black college shoes and on Friday White Shalwar Kemeez.</li>
                                            <li>Co-curricular Competitions will be held either after school on weekdays or weekends online.</li>
                                            <li>Lights out for the boarding houses at 10:30 pm.</li>
                                            <li>Extra Drill / Academic Detention 08:30 to 10:30 am on Saturdays or after School from 12:50 to 1:50 pm.</li>
                                            <li>Reporting time for teaching staff is 7:30 am and for MOD is 7:15 am.</li>
                                        </ol>

                                    <?php } ?>

                                <?php } ?>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <?php include($path."rightpanel.php"); ?>
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

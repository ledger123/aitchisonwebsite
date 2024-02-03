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


<?php $title = "Timetable"; include($path."includes.php"); ?>

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
                                        <div style="font-weight: bold">Junior School New Schedule February 2024</div>
                                        <h3>School Timings</h3>
                                    </div>

                                    <h4 align="center">ROUTINE PROGRAMME FOR JUNIOR SCHOOL<br>SPRING TERM - 2024</h4>

                                    <div align="center"><strong>Commencing from Monday, February 12<sup>th</sup>, 2024</strong></div>

                                    <p>&nbsp;</p>

                                    <div class="table-responsive">
                                        <table class="table table-bordered jambo_table" align="center" style="max-width: 700px; width:100%;text-align:center;">
                                            <thead>
                                            <tr>
                                                <th style="text-align:center;">Classes</th>
                                                <th style="text-align:center;">Monday to Thursday</th>
                                                <th style="text-align:center;">Friday</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>K1, K2 & K3</td>
                                                <td>8:10 am to 2:15 pm</td>
                                              <td>8:10 am to 11:45 am</td>
                                            </tr>
                                            <tr>
                                                <td>K4, K5 & K6</td>
                                                <td>8:10 am to 2:30 pm</td>
                                                <td>8:10 am to 11:55 am</td>
                                            </tr>
                                            </tbody>

                                        </table>
                                                                                
                              </div>
								<div style="text-align: center; font-weight: bold">College Gates Closed - 8:10 AM</div>
								<div style="text-align: center;"><br><br>
								<h3>Weekly Schedule</h3>
								</div>	
							  <div class="table-responsive">
                                        <table class="table table-bordered jambo_table" align="center" style="max-width: 700px; width:100%;text-align:center;">
                                            <thead>
                                            <tr>
                                                <th style="text-align:center;">No. of<br>lessons</th>
                                                <th style="text-align:center;">Monday</th>
                                                <th style="text-align:center;">Tuesday</th>
                                                <th style="text-align:center;">Wednesday                                                </th>
                                                <th style="text-align:center;">	Thursday</th>
                                                <th style="text-align:center;">Friday</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>&nbsp;</td>
                                                <td rowspan="2" style="vertical-align: middle;">K4 PE</td>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                              <td>3</td>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                              <td>4</td>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                              <td colspan="6" style="text-align: center; font-weight: bold;">Break </td>
                                              </tr>
                                            <tr>
                                              <td>5</td>
                                              <td>&nbsp;</td>
                                              <td rowspan="2" style="vertical-align: middle;">K2 PE</td>
                                              <td rowspan="2" style="vertical-align: middle;">K3 PE<br>
                                              &amp; K1 PE</td>
                                              <td style="vertical-align: middle;">&nbsp;</td>
                                              <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                              <td>6</td>
                                              <td>&nbsp;</td>
                                              <td style="vertical-align: middle;">&nbsp;</td>
                                              <td>AC Tutorials<br>
                                              K1 –K6<br></td>
                                            </tr>
                                            <tr>
                                              <td colspan="6" style="text-align: center; font-weight: bold;">Break </td>
                                              </tr>
                                            <tr>
                                              <td>7</td>
                                              <td>&nbsp;</td>
                                              <td rowspan="2" style="vertical-align: middle;">K5 PE</td>
                                              <td rowspan="2" style="vertical-align: middle;">K6 PE</td>
                                              <td rowspan="2" style="vertical-align: middle;">CLUBS<br>
                                              K1 – K6</td>
                                              <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                              <td>8</td>
                                              <td>&nbsp;</td>
                                              <td>&nbsp;</td>
                                            </tr>
                                            </tbody>

                                        </table>
                                        
                                        <?php /*?><p>&nbsp;</p>
                                        <p style="font-weight: bold;">Note:</p>
                                        <p>Lower Primary will follow the above-mentioned plan until further notice.</p>
                                        <p>Upper Primary will follow the date sheet (already uploaded in the GCR) w.e.f. Friday, 8<sup>th</sup> December, 2023.</p><?php */?>
                              </div>
									<?php
									if(true){
									?>
									<div style="text-align: center; font-weight: bold">A fine of Rs. 1000 will be applied to an unapproved leave /unexplained absence from school.</div>
									<?php
									}
									?>
                                    <?php /*?><h3 align="center">Routine Programme - Session 2022-23<br>
                                    SUMMER TERM                                    </h3>

                                    <div class="table-responsive"></div>
                                    <div align="center"><strong>Commencing from Wednesday, 26<sup>th</sup> April, 2023</strong></div>
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
                                                <td>7:40 AM – 1:15 PM</td>
                                                <td>7:40 AM – 11:10 AM</td>
                                            </tr>
                                            </tbody>

                                        </table>
                                        <div style="text-align: center; font-weight: bold">College Gates Closed - 7:40 AM</div>
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
                                                <td>7:40 AM – 1:30 PM</td>
                                                <td>7:40 AM – 11:20 AM</td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            </tbody>

                                        </table>
                                        <div style="text-align: center; font-weight: bold">College Gates Closed - 7:40 AM</div>
                                        <p>&nbsp;</p>
                                    </div><?php */?>
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

                                    <p>&nbsp;</p>
                                <?php }

                                elseif ( $_SESSION['portal_School'] == "PSD" ) { ?>
                                    <div align="center" class="page-title">
                                        <div style="font-weight: bold">Prep School New Schedule January 2024</div>
                                        <h3>School Timings</h3>
                                    </div>

                                    <h4 align="center">ROUTINE PROGRAMME FOR PREP SCHOOL<br>SPRING TERM - 2024</h4>

                                    <div align="center"><strong>Commencing from Wednesday, January 10<sup>th</sup>, 2024</strong></div>

                                    <p>&nbsp;</p>

                                        <p><strong>Monday to Wednesday</strong></p>

                                        <div class="table-responsive">

                                            <table class="table table-bordered jambo_table" style="width: 100%;">
                                                <thead>
                                                <tr style="background-color:#293594;color:#FFF;">
                                                    <th height="23" style="height:23px; width: 50%;">Events</th>
                                                    <th colspan="2" style="text-align:center; width: 50%;">Timings</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">College Gate Closed</td>
                                                    <td><strong>08:10 a.m.</strong></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">Tutorial/Zero Period</td>
                                                    <td>08:15 a.m.</td>
                                                    <td>08:30 a.m.</td>
                                                </tr>                                                
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">1<sup>st</sup> Period</td>
                                                    <td>08:30 a.m.</td>
                                                    <td>09:20 a.m.</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">2<sup>nd</sup> Period</td>
                                                    <td>09:20 a.m.</td>
                                                    <td>10:10 a.m.</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">3<sup>rd</sup> Period</td>
                                                    <td>10:10 a.m.</td>
                                                    <td>11:00 a.m.</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">4<sup>th</sup> Period</td>
                                                    <td>11:00 a.m.</td>
                                                    <td>11:50 a.m.</td>
                                                </tr>
                                                <tr height="20" style="font-weight: bold;">
                                                    <td height="20" style="height:20px;">Break&nbsp;</td>
                                                    <td>11:50 a.m.</td>
                                                    <td>12:15 p.m.</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">5<sup>th</sup> Period</td>
                                                    <td>12:15 p.m.</td>
                                                    <td>01:05 p.m.</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">6<sup>th</sup> Period</td>
                                                    <td>01:05 p.m.</td>
                                                    <td>01:55 p.m.</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">7<sup>th</sup> Period</td>
                                                    <td>01:55 p.m.</td>
                                                    <td>02:40 p.m.</td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <p><strong>Thursday</strong></p>
                                            <table class="table table-bordered jambo_table" style="width: 100%;">
                                                <thead>
                                                <tr style="background-color:#293594;color:#FFF;">
                                                    <th height="23" style="height:23px; width: 50%;">Events</th>
                                                    <th colspan="2" style="text-align:center; width: 50%;">Timings</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">College Gate Closed</td>
                                                    <td><strong>08:10 a.m.</strong></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">Tutorial/Zero Period</td>
                                                    <td>08:15 a.m.</td>
                                                    <td>08:30 a.m.</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">1<sup>st</sup> Period</td>
                                                    <td>08:30 a.m.</td>
                                                    <td>09:20 a.m.</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">2<sup>nd</sup> Period</td>
                                                    <td>09:20 a.m.</td>
                                                    <td>10:10 a.m.</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">3<sup>rd</sup> Period</td>
                                                    <td>10:10 a.m.</td>
                                                    <td>11:00 a.m.</td>
                                                </tr>
                                                <tr height="20" style="font-weight: bold;">
                                                    <td height="20" style="height:20px;">Break&nbsp;</td>
                                                    <td>11:00 a.m.</td>
                                                    <td>11:25 a.m.</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">4<sup>th</sup> Period</td>
                                                    <td>11:25 a.m.</td>
                                                    <td>12:10 p.m.</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">Sports session 1 (All E2, M1 & M2)</td>
                                                    <td>12:10 p.m.</td>
                                                    <td>01:10 p.m.</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">Break/ Changeover/ Snacks</td>
                                                    <td>01:10 p.m.</td>
                                                    <td>01:40 p.m.</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">Sports session 2 (All E2, M1 & M2)</td>
                                                    <td>01:40 p.m.</td>
                                                    <td>02:40 p.m.</td>
                                                </tr>
                                                </tbody>
                                            </table>

                                            <p><strong>Friday</strong></p>
                                          <table class="table table-bordered jambo_table" style="width: 100%;">
                                                <thead>
                                                <tr style="background-color:#293594;color:#FFF;">
                                                    <th height="23" style="height:23px; width: 50%;">Events</th>
                                                    <th colspan="2" style="text-align:center; width: 50%;">Timings</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">College Gate Closed</td>
                                                    <td><strong>08:10 a.m.</strong></td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px; white-space: nowrap;">General Assembly/Tutorial</td>
                                                    <td>08:15 a.m.</td>
                                                    <td>08:30 a.m.</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">1<sup>st</sup> Period</td>
                                                    <td>08:30 a.m.</td>
                                                    <td>09:05 a.m.</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">2<sup>nd</sup> Period</td>
                                                    <td>09:05 a.m.</td>
                                                    <td>09:40 a.m.</td>
                                                </tr>
                                                <tr height="20" style="font-weight: bold;">
                                                    <td height="20" style="height:20px;">Break</td>
                                                    <td>09:40 a.m.</td>
                                                    <td>10:00 a.m.</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">3<sup>rd</sup> Period</td>
                                                    <td>10:00 a.m.</td>
                                                    <td>10:35 a.m.</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">4<sup>th</sup> Period</td>
                                                    <td>10:35 a.m.</td>
                                                    <td>11:10 a.m.</td>
                                                </tr>
                                                
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">5<sup>th</sup> Period (Club &amp; Societies)</td>
                                                    <td>11:15 a.m.</td>
                                                    <td>12:15 p.m.</td>
                                                </tr>
                                                </tbody>
                                            </table>
											<?php
											if(false){
											?>
                                            <p><strong>Sports Period</strong></p>
                                          <table class="table table-bordered jambo_table" style="width: 100%;">
                                                <tbody>
                                                <tr height="20">
                                                    <td height="20" style="height:20px; width: 50%;"><strong>All E2s :</strong> Tuesday</td>
                                                    <td>10:15 a.m.</td>
                                                    <td>11:00 a.m.</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px; white-space: nowrap;"><strong>All M1s:</strong> Wednesday</td>
                                                    <td>10:15 a.m.</td>
                                                    <td>11:00 a.m.</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;"><strong>All M2s:</strong> Thursday</td>
                                                    <td>10:15 a.m.</td>
                                                    <td>11:00 a.m.</td>
                                                </tr>
                                                
                                                </tbody>
                                            </table>
											<?php
											}
											?>
                                        </div>
                                        <p>&nbsp;</p>

                                        <?php if(true) { ?>
                                            <p><strong>Uniform for Spring Term:</strong></p>

                                            <ol style="line-height:1.9; list-style: disc;">
                                                <li>On <strong>Monday</strong>, White ‘Shalwar Kameez’ with Black ‘Achkan’ </li>
                                                <li>On  <strong>Tuesday, Wednesday and Friday</strong>, grey trousers, white full sleeves  shirt, neck scarf, grey socks, black college shoes and blue blazer </li>
                                                <li>On <strong>Thursday</strong>, all boys will attend the school in <strong>track suits</strong> and <strong>college joggers</strong></li>
                                                <?php /*?><li>Rs. 5000/- fine for any unapproved leaves.</li><?php */?>
                                            </ol>

                                        <p>A fine of Rs. 1000 will be applied to an unapproved leave /unexplained absence from school. However, on Thursday for Prep School boys and Friday for Senior School boys, a fine of Rs. 5000 will be applied to an unapproved leave /unexplained absence from school.</p>

                                        <?php } ?>

                                    <p style="margin-top: 20px;">Visit the <a href="ac-notice-2407-prep-school-sports-plan-2023-24" style="color: blue;" target="_blank">Weekly Routine</a> for more information.</p>

                              <p>&nbsp;</p>
							 <?php if(false){ ?>	
                              <div  style="text-align: center;" class="page-title">
                                    <h3>Timetable of classes</h3>
                                </div>
								<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<?php
									if($_SESSION['portal_CurrentClass']=="E2"){
									?>
									<?php /*?><h3>Timetable of classes</h3><?php */?>
									<?php /*?><img class="img-responsive" src="https://aitchison.edu.pk/portal/accounts/ps-timings/images/Timetable-E2_page-0001.jpg"/>
									<br><?php */?>
									<img id="myImg" src="https://aitchison.edu.pk/portal/accounts/ps-timings/images/Timetable-E2_page-0001.jpg" alt="Trolltunga, Norway" width="300" height="180">

									<!-- The Modal -->
									<div id="myModal" class="modal">
									  <img class="modal-content" id="img01">
									</div>	
									<div class="row">									
                                  		<a href="https://aitchison.edu.pk/portal/accounts/ps-timings/pdf/E2-timetable-v2.pdf" alt="" target="_blank" class="btn btn-primary">&nbsp;Print Timetable&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
									</div>	
								<?php
									}
									if($_SESSION['portal_CurrentClass']=="M1"){
									?>
									<?php /*?><h3>M1 Timetable</h3><?php */?>
									<?php /*?><img class="img-responsive" src="https://aitchison.edu.pk/portal/accounts/ps-timings/images/Timetable-M1_page-0001.jpg"/><?php */?>
									<img id="myImg" src="https://aitchison.edu.pk/portal/accounts/ps-timings/images/Timetable-M1_page-0001.jpg" alt="Trolltunga, Norway" width="300" height="180">

									<!-- The Modal -->
									<div id="myModal" class="modal">
									  <img class="modal-content" id="img01">
									</div>		
									<div class="row">
                                  		<a href="https://aitchison.edu.pk/portal/accounts/ps-timings/pdf/M1-timetable-v2.pdf" alt="" target="_blank" class="btn btn-primary">&nbsp;Print Timetable&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
									</div>
									<?php
									}
									if($_SESSION['portal_CurrentClass']=="M2"){
									?>
									<?php /*?><h3>M2 Timetable</h3><?php */?>
									<?php /*?><img class="img-responsive" src="https://aitchison.edu.pk/portal/accounts/ps-timings/images/Timetable-M2_page-0001.jpg"/><?php */?>
									<img id="myImg" src="https://aitchison.edu.pk/portal/accounts/ps-timings/images/Timetable-M2_page-0001.jpg" alt="Trolltunga, Norway" width="300" height="180">

									<!-- The Modal -->
									<div id="myModal" class="modal">
									  <img class="modal-content" id="img01">
									</div>	
									<div class="row">
                                  <a href="https://aitchison.edu.pk/portal/accounts/ps-timings/pdf/M2-timetable-v2.pdf" alt="" target="_blank" class="btn btn-primary">&nbsp;Print Timetable&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
									</div>
									<?php
									}									
									?>
<?php /*?>JAVASCRIPT FOR ZOOMING THE IMAGES: STARTED<?php */?>
								<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    modalImg.alt = this.alt;
    captionText.innerHTML = this.alt;
}


// When the user clicks on <span> (x), close the modal
modal.onclick = function() {
    img01.className += " out";
    setTimeout(function() {
       modal.style.display = "none";
       img01.className = "modal-content";
     }, 400);
    
 }    
    
</script>
<?php /*?>JAVASCRIPT FOR ZOOMING THE IMAGES: ENDED<?php */?>										
                              </div>									
								</div>								
                                <?php /*?>
                          <div class="row" style="text-align: left;">

                              <div class="row">
                                  <a href="data/2021-22/PS-Weekly-Routine-Programme-11May-2022.pdf" alt="" target="_blank" class="btn btn-primary">&nbsp;Weekly Routine Programme&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                              </div><br>
                              <div class="row">
                                  <a href="data/2021-22/e2-summary-timetable-classes-20211002.pdf" alt="" class="btn btn-primary">E2 Summary Timetable Classes&nbsp;</a>
                              </div>
                              <div class="row">
                                  <a href="data/2021-22/m1-summary-timetable-classes-20211002.pdf" alt="" class="btn btn-primary">M1 Summary Timetable Classes</a>
                              </div>
                              <div class="row">
                                  <a href="data/2021-22/m2-summary-timetable-classes-20211002.pdf" alt="" class="btn btn-primary">M2 Summary Timetable Classes</a>
                              </div>
                          </div>
                              <?php */?>


                                <?php /*?><div align="center" class="page-title">
                                    <h3>Weekly Routine Programme</h3>
                                    <h4>Commencing Monday, August, 22<sup>nd</sup> 2022</h4>

                                </div>


                                <p><strong>Monday to Thursday</strong></p>

                                <div class="row table-responsive">
                                    <table class="table table-bordered jambo_table" style="width:100%;">
                                        <tbody>

                                        <tr>
                                            <th style="text-align: center;">EVENTS</th>
                                            <th style="text-align: center;" colspan="3">TIMINGS</th>
                                        </tr>
                                        <tr>
                                            <td>College Gate Closed</td>
                                            <td><strong>07:40 a.m.</strong></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Tutorial</td>
                                            <td>07:30 a.m.</td>
                                            <td>07:55 a.m.</td>
                                        </tr>
                                        <tr>
                                            <td>1<sup>st</sup> Period</td>
                                            <td>08:00 a.m.</td>
                                            <td>08:55 a.m.</td>
                                        </tr>
                                        <tr>
                                            <td>2<sup>nd</sup> Period</td>
                                            <td>08:55 a.m.</td>
                                            <td>09:50 a.m.</td>
                                        </tr>
                                        <tr>
                                            <td>3<sup>rd</sup> Period</td>
                                            <td>09:50 a.m.</td>
                                            <td>10:45 a.m.</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Break</strong></td>
                                            <td><strong>10:45 a.m.</strong></td>
                                            <td><strong>11:15 a.m.</strong></td>
                                        </tr>
                                        <tr>
                                            <td>4<sup>th</sup> Period</td>
                                            <td>11:15 a.m.</td>
                                            <td>12:05 p.m.</td>
                                        </tr>
                                        <tr>
                                            <td>5<sup>th</sup> Period</td>
                                            <td>12:05 p.m.</td>
                                            <td>12:55 p.m.</td>
                                        </tr>
                                        <tr>
                                            <td>6<sup>th</sup> Period</td>
                                            <td>12:55 p.m.</td>
                                            <td>01:45 p.m.</td>
                                        </tr>


                                        </tbody>
                                    </table>

                                    <p><strong>Friday</strong></p>

                                    <table class="table table-bordered jambo_table" style="width:100%;">
                                        <tbody>

                                        <tr>
                                            <th style="text-align: center;">EVENTS</th>
                                            <th style="text-align: center;" colspan="3">TIMINGS</th>
                                        </tr>
                                        <tr>
                                            <td>College Gate Closed</td>
                                            <td><strong>07:40 a.m.</strong></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>General Assembly  / Tutorial</td>
                                            <td>07:30 a.m.</td>
                                            <td>07:55 a.m.</td>
                                        </tr>

                                        <tr>
                                            <td>1<sup>st</sup> Period</td>
                                            <td>08:00 a.m.</td>
                                            <td>08:45 a.m.</td>
                                        </tr>
                                        <tr>
                                            <td>2<sup>nd</sup> Period</td>
                                            <td>8:45 a.m.</td>
                                            <td>09:30 a.m.</td>
                                        </tr>

                                        <tr>
                                            <td><strong>Break</strong></td>
                                            <td><strong>09:30 a.m.</strong></td>
                                            <td><strong>10:00 a.m.</strong></td>
                                        </tr>


                                        <tr>
                                            <td>3<sup>rd</sup> Period</td>
                                            <td>10:00 a.m.</td>
                                            <td>10:45 a.m.</td>
                                        </tr>
                                        <tr>
                                            <td>4<sup>th</sup> Period</td>
                                            <td>10:45 a.m.</td>
                                            <td>11:30 a.m.</td>
                                        </tr>

                                        </tbody>
                                    </table>


                                    <p><strong>Sports Period</strong></p>
                                    <table class="table table-bordered jambo_table" style="width:100%;">
                                        <tbody>

                                        <tr>
                                            <td><strong>E2</strong> - Wednesday</td>
                                            <td>09:50 a.m.</td>
                                            <td>10:45 a.m.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>M1</strong> - Thursday</td>
                                            <td>09:50 a.m.</td>
                                            <td>10:45 a.m.</td>
                                        </tr>
                                        <tr>
                                            <td><strong>M2</strong> - Tuesday</td>
                                            <td>09:50 a.m.</td>
                                            <td>10:45 a.m.</td>
                                        </tr>

                                        </tbody>
                                    </table>
<?php */?>
                                    <?php /* ?>
							  <br />
                            <p><strong>NOTE</strong></p>

                              <ul style="line-height: 1.8">
                                  <li>Uniform for this Term is 'Khaki' Trousers, White Full-Sleeved Shirt, Grey Socks and Black College Shoes.</li>
                                  <li>During Games Period, boys will wear White Full-Sleeved Shirt, Blue Trousers and Sports Shoes.</li>
                                  <li>On their designated morning game days, boys will attend lessons in games dress.</li>
                                  <li>Reporting time for Cycle A and Cycle B on their respective days is 7:45 a.m. sharp.</li>
                                  <li>Friday will be utilised for online classes. </li>
                                  <li>Branded shoes, watches, electronic gadgets and mobile phones are NOT ALLOWED.</li>
                              </ul>
                              <?php */ ?>

                                    <br>

                                    <?php /* ?>
<div class="col-lg-6 col-md-9 col-sm-12 col-xs-12"><p><a href="<?php echo $fileUrl; ?>" target="parent" class="active lnkDownload" style="display: inline-flex; padding: inherit; margin-left: 0;"><span style="font-weight: bold;"><span class="glyphicon" style="line-height: 1.7;"></span> Download Complete Reopening Details </span> </a>
                                  </p></div>
                              <?php
					    </p>
					    </div>
<?php */ ?>

                                    <?php }
																			   }
                                    elseif ( $_SESSION['portal_School'] == "SSD" ) { ?>
                                        <div align="center" class="page-title">
                                            <div style="font-weight: bold">Senior School New Schedule February 2024</div>
                                            <h3>School Timings</h3>
                                        </div>

                                        <h4 align="center">ROUTINE PROGRAMME FOR SENIOR SCHOOL<br>SPRING TERM - 2024</h4>

                                        <div align="center"><strong>Commencing from Monday, February 12<sup>th</sup>, 2024</strong></div>

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
                                                    <td>08:10</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">School/House Assembly</td>
                                                    <td>08:15</td>
                                                    <td>08:25</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">1<sup>st</sup> Period</td>
                                                    <td>08:30</td>
                                                    <td>09:05</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">2<sup>nd</sup> Period</td>
                                                    <td>09:10</td>
                                                    <td>09:45</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">3<sup>rd</sup> Period</td>
                                                    <td>09:50</td>
                                                    <td>10:25</td>
                                                </tr>
                                                <tr height="20" style="font-weight: bold;">
                                                    <td height="20" style="height:20px;">Break&nbsp;</td>
                                                    <td>10:25</td>
                                                    <td>10:40</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">4<sup>th</sup> Period</td>
                                                    <td>10:45</td>
                                                    <td>11:20</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">5<sup>th</sup> Period</td>
                                                    <td>11:25</td>
                                                    <td>12:00</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">6<sup>th</sup> Period</td>
                                                    <td>12:05</td>
                                                    <td>12:40</td>
                                                </tr>
                                                <tr height="20" style="font-weight: bold;">
                                                    <td height="20" style="height:20px;">Break&nbsp;</td>
                                                    <td>12:40</td>
                                                    <td>12:55</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">7<sup>th</sup> Period</td>
                                                    <td>01:00</td>
                                                    <td>01:35</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">8<sup>th</sup> Period</td>
                                                    <td>01:40</td>
                                                    <td>02:15</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">9<sup>th</sup> Period</td>
                                                    <td>02:20</td>
                                                    <td>02:50</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <p><strong>FRIDAY</strong></p>
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
                                                    <td>08:10</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px; white-space: nowrap;"><span style="height:20px;">School/House Assembly</span></td>
                                                    <td>08:15</td>
                                                    <td>08:25</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">1<sup>st</sup> Period</td>
                                                    <td>08:30</td>
                                                    <td>09:15</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">2<sup>nd</sup> Period</td>
                                                    <td>09:20</td>
                                                    <td>10:05</td>
                                                </tr>
                                                <tr height="20" style="font-weight: bold;">
                                                    <td height="20" style="height:20px;">Break</td>
                                                    <td>10:05</td>
                                                    <td>10:30</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">3<sup>rd</sup> Period</td>
                                                    <td>10:30</td>
                                                    <td>11:15</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">4<sup>th</sup> Period</td>
                                                    <td>11:20</td>
                                                    <td>12:05</td>
                                                </tr>
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                        <?php /*
                                            <p><strong>H1 & H2</strong></p>
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
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px; white-space: nowrap;"><span style="height:20px;">School / House Assembly</span></td>
                                                    <td>07:45</td>
                                                    <td>07:55</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">1<sup>st</sup> Period</td>
                                                    <td>08:00</td>
                                                    <td>08:45</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">2<sup>nd</sup> Period</td>
                                                    <td>08:50</td>
                                                    <td>09:30</td>
                                                </tr>
                                                <tr height="20" style="font-weight: bold;">
                                                    <td height="20" style="height:20px;">Break</td>
                                                    <td>09:30</td>
                                                    <td>09:50</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">3<sup>rd</sup> Period</td>
                                                    <td>09:50</td>
                                                    <td>10:40</td>
                                                </tr>
                                                <tr height="20">
                                                    <td height="20" style="height:20px;">4<sup>th</sup> Period</td>
                                                    <td>10:45</td>
                                                    <td>11:30</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        */?>
                                        <p>&nbsp;</p>

                                        <?php if(true) { ?>
                                            <p><strong>NOTE:</strong></p>

                                            <ol style="line-height:1.9;">
                                                <li>Jumma Prayers at 1:30 pm.</li>
                                                <li>Winter uniform Grey trouser, white full sleeves shirt, neck tie, grey socks and black college shoes from Tuesday to Thursday on Monday White Shalwar Kemeez with Achkan and on Friday Tracksuit with Joggers.</li>
                                                <li>Co-curricular Competitions will be held either after school on weekdays or weekends online.</li>
                                                <li>Lights out for the boarding houses at 10:30 pm.</li>
												<li>Extra Drill / Academic Detention after School from 3:00 to 4:00 pm.</li>
											    <li>Reporting time for teaching staff is 8:00 am and for MOD is 7:45 am.</li>
                                            </ol>

                                            <p>A fine of Rs. 1000 will be applied to an unapproved leave /unexplained absence from school. However, on Thursday for Prep School boys and Friday for Senior School boys, a fine of Rs. 5000 will be applied to an unapproved leave /unexplained absence from school.</p>
                                            <p style="margin-top: 20px;">Visit the <a href="ac-notice-2405-weekly-schedule-for-fridays-second-term-2024" style="color: blue;" target="_blank">Weekly Schedule for Fridays during Second Term</a> for more information.</p>

                                            <p>&nbsp;</p>
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


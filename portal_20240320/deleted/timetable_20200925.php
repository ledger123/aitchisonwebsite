<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."classes/filing.php");

echo "<!-- ";
$fileUrl = Filing::GetURL2("", 'Download Complete Reopening Details', $purifier->purify("../data/2020-21/prep-school-routine-timetable.pdf"), 'Download Complete Reopening Details', $functions);

echo " -->";

?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Timetable"; include($path."includes.php"); ?>
	
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
						  <h3 align="center">Routine Programme - Session 2020-21</h3>

<div class="table-responsive"></div>



<div align="center"><strong>Classes: K2 &amp; K3 (Lower Primary)</strong></div>

<div align="center"><strong>Commencing from Wednesday, 30th September, 2020</strong></div>
<div style="clear:both;">&nbsp;</div>
<div class="table-responsive">
<table class="table table-bordered" style="width:100%; text-align:center;">
	<tbody>
		<tr>
			<th nowrap="nowrap">
			<p align="center"><strong>CYCLE</strong></p>
			</th>
			<th nowrap="nowrap">
			<p align="center"><strong>Week Days</strong></p>
			</th>
			<th nowrap="nowrap">
			<p align="center"><strong>Weekends</strong></p>
			</th>
		</tr>
		<tr>
			<td nowrap="nowrap">
			<p align="center"><strong>A</strong></p>
			</td>
			<td nowrap="nowrap">
			<p align="center">Mon &amp; Wed: 8:30 AM &ndash; 1:25 PM</p>
			</td>
			<td nowrap="nowrap">
			<p align="center">Fri: 8:30 AM &ndash; 11:15 AM</p>
			</td>
		</tr>
		<tr>
			<td nowrap="nowrap">
			<p align="center"><strong>B</strong></p>
			</td>
			<td nowrap="nowrap">
			<p align="center">Tue &amp; Thu: 8:30 AM &ndash; 1:25 PM</p>
			</td>
			<td nowrap="nowrap">
			<p align="center">Sat: 8:30 AM &ndash; 11:15 AM</p>
			</td>
		</tr>
		<tr>
			<td colspan="2" nowrap="nowrap">
			<p align="center"><strong>College Gates Closed</strong></p>
			</td>
			<td nowrap="nowrap">
			<p align="center"><strong>8:20 AM</strong></p>
			</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>
</div>

<div align="center"><strong>Classes: K4 &amp; K5 (Upper Primary)</strong></div>

<div align="center"><strong>Commencing from Wednesday, 30th September, 2020</strong></div>

<div style="clear:both;">&nbsp;</div>

<div class="table-responsive">
<table class="table table-bordered" style="width:100%; text-align:center;">
	<tbody>
		<tr>
			<th nowrap="nowrap">
			<p align="center"><strong>CYCLE</strong></p>
			</th>
			<th nowrap="nowrap">
			<p align="center"><strong>Week Days</strong></p>
			</th>
			<th nowrap="nowrap">
			<p align="center"><strong>Weekends</strong></p>
			</th>
		</tr>
		<tr>
			<td nowrap="nowrap">
			<p align="center"><strong>A</strong></p>
			</td>
			<td nowrap="nowrap">
			<p align="center">Mon &amp; Wed: 8:30 AM &ndash; 1:40 PM</p>
			</td>
			<td nowrap="nowrap">
			<p align="center">Fri: 8:30 AM &ndash; 11:25 AM</p>
			</td>
		</tr>
		<tr>
			<td nowrap="nowrap">
			<p align="center"><strong>B</strong></p>
			</td>
			<td nowrap="nowrap">
			<p align="center">Tue &amp; Thu: 8:30 AM &ndash; 1:40 PM</p>
			</td>
			<td nowrap="nowrap">
			<p align="center">Sat: 8:30 AM &ndash; 11:25 AM</p>
			</td>
		</tr>
		<tr>
			<td colspan="2" nowrap="nowrap">
			<p align="center"><strong>College Gates Closed</strong></p>
			</td>
			<td nowrap="nowrap">
			<p align="center"><strong>8:20 AM</strong></p>
			</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>
</div>

<div align="center"><strong>Class: K6 (Upper Primary)</strong></div>

<div align="center"><strong>Commencing from Tuesday, 28th September, 2020</strong></div>

<div style="clear:both;">&nbsp;</div>

<div class="table-responsive">
<table class="table table-bordered" style="width:100%; text-align:center;">
	<tbody>
		<tr>
			<th nowrap="nowrap">
			<p align="center"><strong>CYCLE</strong></p>
			</th>
			<th nowrap="nowrap">
			<p align="center"><strong>Week Days</strong></p>
			</th>
			<th nowrap="nowrap">
			<p align="center"><strong>Weekends</strong></p>
			</th>
		</tr>
		<tr>
			<td nowrap="nowrap">
			<p align="center"><strong>A</strong></p>
			</td>
			<td nowrap="nowrap">
			<p align="center">Mon &amp; Wed: 8:30 AM &ndash; 1:40 PM</p>
			</td>
			<td nowrap="nowrap">
			<p align="center">Fri: 8:30 AM &ndash; 11:25 AM</p>
			</td>
		</tr>
		<tr>
			<td nowrap="nowrap">
			<p align="center"><strong>B</strong></p>
			</td>
			<td nowrap="nowrap">
			<p align="center">Tue &amp; Thu: 8:30 AM &ndash; 1:40 PM</p>
			</td>
			<td nowrap="nowrap">
			<p align="center">Sat: 8:30 AM &ndash; 11:25 AM</p>
			</td>
		</tr>
		<tr>
			<td colspan="2" nowrap="nowrap">
			<p align="center"><strong>College Gates Closed</strong></p>
			</td>
			<td nowrap="nowrap">
			<p align="center"><strong>8:20 AM</strong></p>
			</td>
		</tr>
	</tbody>
</table>
</div>

<div style="clear:both;">&nbsp;</div>

<p>&nbsp;</p>

                        <?php /*?><div><p><strong>Note:</strong>&nbsp; The announcement of Cycle A and Cycle B for the students will be uploaded to the Parents&rsquo; Portal.&nbsp;The school has already catered for siblings as much as possible.&nbsp;Kindly cooperate as no change is possible in the assigned Cycle.&nbsp;This is to ensure that 50 % strength of students attend school daily.</p></div><?php */?>
						  
						  <?php }elseif ( $_SESSION['portal_School'] == "PSD" ) { ?>
						  <div align="center" class="page-title">
							  <h3>School Timings</h3>
						  </div>
						  <div class="row table-responsive">
                              <p>&nbsp;</p>

							  <table class="table table-bordered jambo_table" width="100%;">
                                  <tbody style="text-align:center;">
                                  <tr>
                                      <td><strong>Class</strong></td>
                                      <td colspan="2"><strong>E2, M1 and M2</strong></td>
                                  </tr>
                                  <tr>
                                      <td><strong>Opening Date</strong></td>
                                      <td colspan="2"><strong>22<sup>nd</sup> September, 2020</strong></td>
                                  </tr>
                                  <tr>
                                      <td>&nbsp;</td>
                                      <td colspan="2"><strong>Days &amp; Timings</strong></td>
                                  </tr>
                                  <tr>
                                      <td rowspan="2"><strong>Cycle A</strong></td>
                                      <td><strong>Monday &amp; Wednesday</strong></td>
                                      <td><strong>Friday</strong></td>
                                  </tr>
                                  <tr>
                                      <td>8:30 am to 2:10 pm</td>
                                      <td>8:30 am to 11:45 am</td>
                                  </tr>
                                  <tr>
                                      <td rowspan="2"><strong>Cycle B</strong></td>
                                      <td><strong>Tuesday &amp; Thursday</strong></td>
                                      <td><strong>Saturday</strong></td>
                                  </tr>
                                  <tr>
                                      <td>8:30 am to 2:10 pm</td>
                                      <td>8:30 am to 11:45 am</td>
                                  </tr>
                                  <tr>
                                      <td colspan="3"><strong>Gate Closing Time:&nbsp; 8:20 am</strong></td>
                                  </tr>
                                  </tbody>
								</table>
							  <br />

							  
						  </div>

                              <div class="col-lg-6 col-md-9 col-sm-12 col-xs-12"><p><a href="<?php echo $fileUrl; ?>" target="parent" class="active lnkDownload" style="display: inline-flex; padding: inherit; margin-left: 0;"><span style="font-weight: bold;"><span class="glyphicon" style="line-height: 1.7;"></span> Download Complete Reopening Details </span> </a>
                                  </p></div>

						  <?php }elseif ( $_SESSION['portal_School'] == "SSD" ) { ?>
						  <div align="center" class="page-title">
							  <h3>School Timings</h3>
						  </div>
					  		<h3 align="center">Routine Programme for Senior School</h3>
					  
					  <div align="center"><strong>WINTER TERM-2020</strong></div>

					  <div align="center"><strong>Commencing Tuesday 15<sup>th</sup> September, 2020</strong></div>

                              <p>&nbsp;</p>

                              <p>MONDAY &amp; WEDNESDAY &nbsp;(Cycle - A for H2 &amp; C1)<br />
                                  TUESDAY &amp; THURSDAY &nbsp; &nbsp;(Cycle - B for H1 &amp; C2)</p>

                              <div>
								<table class="table table-bordered jambo_table" style="width: 85%;">
                                    <thead>
                                    <tr style="background-color:#293594;color:#FFF;">
                                        <th height="23" style="height:23px;width:156px;">Events</th>
                                        <th colspan="2" style="text-align:center;">Timings</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr height="22">
                                        <td height="22" style="height:22px;">College Gate Closed</td>
                                        <td>8:15 AM</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr height="20">
                                        <td height="20" style="height:20px;">1<sup>st</sup> Period</td>
                                        <td>8:30 AM</td>
                                        <td>9:10 AM</td>
                                    </tr>
                                    <tr height="20">
                                        <td height="20" style="height:20px;">2<sup>nd</sup> Period</td>
                                        <td>9:15 AM</td>
                                        <td>9:55 AM</td>
                                    </tr>
                                    <tr height="20">
                                        <td height="20" style="height:20px;">3<sup>rd</sup> Period</td>
                                        <td>10:00 AM</td>
                                        <td>10:40 AM</td>
                                    </tr>
                                    <tr height="20">
                                        <td height="20" style="height:20px;">4<sup>th</sup> Period</td>
                                        <td>10:45 AM</td>
                                        <td>11:25 AM</td>
                                    </tr>
                                    <tr height="20">
                                        <td height="20" style="height:20px;">Break&nbsp;</td>
                                        <td>11:25 AM</td>
                                        <td>11:45 AM</td>
                                    </tr>
                                    <tr height="20">
                                        <td height="20" style="height:20px;">5<sup>th</sup> Period</td>
                                        <td>11:45 AM</td>
                                        <td>12:20 PM</td>
                                    </tr>
                                    <tr height="20">
                                        <td height="20" style="height:20px;">6<sup>th</sup> Period</td>
                                        <td>12:25 PM</td>
                                        <td>1:00 PM</td>
                                    </tr>
                                    <tr height="20">
                                        <td height="20" style="height:20px;">7<sup>th</sup> Period</td>
                                        <td>1:05 PM</td>
                                        <td>1:40 PM</td>
                                    </tr>
                                    <tr height="20">
                                        <td height="20" style="height:20px;">8<sup>th</sup> Period</td>
                                        <td>1:45 PM</td>
                                        <td>2:20 PM</td>
                                    </tr>
                                    </tbody>
								</table>

                                  <p>FRIDAY &nbsp; &nbsp; &nbsp; &nbsp; (Cycle - A for H2 &amp; C1)<br />
                                      SATURDAY &nbsp;(Cycle - B for H1 &amp; C2)</p>

                                  <table class="table table-bordered jambo_table" style="width: 85%;">
                                      <thead>
                                      <tr style="background-color:#293594;color:#FFF;">
                                          <th height="23" style="height:23px;width:156px;">Events</th>
                                          <th colspan="2" style="text-align:center;">Timings</th>
                                      </tr>
                                    </thead>
                                      <tbody>
                                      <tr height="22">
                                          <td height="22" style="height:22px;">College Gate Closed</td>
                                          <td>8:15 AM</td>
                                          <td>&nbsp;</td>
                                      </tr>
                                      <tr height="20">
                                          <td height="20" style="height:20px;">1<sup>st</sup> Period</td>
                                          <td>8:30 AM</td>
                                          <td>9:15 AM</td>
                                      </tr>
                                      <tr height="20">
                                          <td height="20" style="height:20px;">2<sup>nd</sup> Period</td>
                                          <td>9:20 AM</td>
                                          <td>10:05 AM</td>
                                      </tr>
                                      <tr height="20">
                                          <td height="20" style="height:20px;">3<sup>rd</sup> Period</td>
                                          <td>10:10 AM</td>
                                          <td>10:55 AM</td>
                                      </tr>
                                      <tr height="20">
                                          <td height="20" style="height:20px;">4<sup>th</sup> Period</td>
                                          <td>11:00 AM</td>
                                          <td>11:45 AM</td>
                                      </tr>
                                      </tbody>
                                </table>
				  		</div>
							<p>&nbsp;</p>

							<p><strong>NOTE:</strong></p>

                              <ol style="line-height:1.9">
                                  <li>Jumma Prayers at 13:30.</li>
                                  <li>Reporting time for Cycle A and Cycle B on their respective days is 7:45 am.</li>
                                  <li>Summer uniform Khaki Trouser, white fulll sleeves shirt, grey socks and black college shoes.</li>
                                  <li>Co-curricular Competitions will be held either after school on weekdays or weekends online.</li>
                                  <li>Lights out for the boarding houses at 22:30.</li>
                                  <li>Extra Drill / Academic Detention 08:30 to 10:30 on Friday / Saturdays.</li>
                                  <li>C2 Revision Classes online will be held as per the schedule (on the portal) from 3:30 noon to 4:30 pm.</li>
                                  <li>Reporting time for teaching staff is 8:00 am and for MOD is 7:45 am.</li>
                              </ol>

                              <p>&nbsp;</p>

                              <p>Amina Kamran<br />
                                  Headmistress, Senior School</p>

						  <?php } ?>
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

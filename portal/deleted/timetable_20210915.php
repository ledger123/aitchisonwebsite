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
						  <h3 align="center">Routine Programme - Session 2021-22</h3>

<div class="table-responsive"></div>



<div align="center"><strong>Classes: K1, K2 &amp; K3 (Lower Primary)</strong></div>

<div align="center"><strong>Commencing from Monday, 23<sup>rd</sup> August, 2021</strong></div>
<div style="clear:both;">&nbsp;</div>
<div class="table-responsive">
<table class="table table-bordered" style="width:100%; text-align:center;">
	<tbody>
		<tr>
			<th nowrap="nowrap">
			<p align="center"><strong>Week Days</strong></p>
			</th>
			<th nowrap="nowrap">
			<p align="center"><strong>Weekend</strong></p>
			</th>
		</tr>
		<tr>
			<td nowrap="nowrap">
			<p align="center">Mon - Thur: 8:00 AM &ndash; 1:35 PM</p>
			</td>
			<td nowrap="nowrap">
			<p align="center">Fri: 8:00 AM &ndash; 11:20 AM</p>
			</td>
		</tr>
		<tr>
			<td nowrap="nowrap">
			<p align="center"><strong>College Gates Closed</strong></p>
			</td>
			<td nowrap="nowrap">
			<p align="center"><strong>7:40 AM</strong></p>
			</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>
</div>

<div align="center"><strong>Classes: K4, K5 &amp; K6 (Upper Primary)</strong></div>

<div align="center"><strong>Commencing from Monday, 23<sup>rd</sup> August, 2021</strong></div>

<div style="clear:both;">&nbsp;</div>

<div class="table-responsive">
<table class="table table-bordered" style="width:100%; text-align:center;">
	<tbody>
		<tr>
			<th nowrap="nowrap">
			<p align="center"><strong>Week Days</strong></p>
			</th>
			<th nowrap="nowrap">
			<p align="center"><strong>Weekend</strong></p>
			</th>
		</tr>
        <tr>
            <td nowrap="nowrap">
                <p align="center">Mon - Thur: 8:00 AM &ndash; 1:50 PM</p>
            </td>
            <td nowrap="nowrap">
                <p align="center">Fri: 8:00 AM &ndash; 11:25 AM</p>
            </td>
        </tr>
        <tr>
            <td nowrap="nowrap">
                <p align="center"><strong>College Gates Closed</strong></p>
            </td>
            <td nowrap="nowrap">
                <p align="center"><strong>7:40 AM</strong></p>
            </td>
        </tr>
	</tbody>
</table>

<p>&nbsp;</p>
</div>

<p>&nbsp;</p>

                        <?php /*?><div><p><strong>Note:</strong>&nbsp; The announcement of Cycle A and Cycle B for the students will be uploaded to the Parents&rsquo; Portal.&nbsp;The school has already catered for siblings as much as possible.&nbsp;Kindly cooperate as no change is possible in the assigned Cycle.&nbsp;This is to ensure that 50 % strength of students attend school daily.</p></div><?php */?>
						  
						  <?php }

                          elseif ( $_SESSION['portal_School'] == "PSD" ) { ?>
						  <div align="center" class="page-title">
							  <h3>Weekly Routine Programme</h3>
                              <h4>Commencing Monday, August, 23<sup>rd</sup> 2021</h4>
                              

						  </div>

						  <div class="row table-responsive">
                              <table class="table table-bordered" style="width:100%;">
                                  <tbody>

                                  <tr>
                                      <th colspan="4" nowrap="nowrap">Monday to Thursday</th>
                                  </tr>
                                  <tr>
                                      <th style="text-align: center;">EVENTS</th>
                                      <th style="text-align: center;" colspan="3">TIMINGS</th>
                                  </tr>
                                  <tr>
                                      <td>College Gate Closed</td>
                                      <th>7:40 a.m.</th>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                      <td>Tutorial</td>
                                      <td>07:40 a.m.</td>
                                      <td>-</td>
                                      <td>&nbsp;07:55 a.m.</td>
                                  </tr>
                                  <tr>
                                      <td>1<sup>st</sup> Period</td>
                                      <td>08:00 a.m.</td>
                                      <td>-</td>
                                      <td>&nbsp;08:55 a.m.</td>
                                  </tr>
                                  <tr>
                                      <td>2<sup>nd</sup> Period</td>
                                      <td>08:55 a.m.</td>
                                      <td>-</td>
                                      <td>&nbsp;09:50 a.m.</td>
                                  </tr>
                                  <tr>
                                      <th>Break</th>
                                      <th>09:50 a.m.</th>
                                      <th>-</th>
                                      <th>10:10 a.m.</th>
                                  </tr>
                                  <tr>
                                      <td>3<sup>rd</sup> Period</td>
                                      <td>10:10 a.m.</td>
                                      <td>-</td>
                                      <td>11:05 a.m.</td>
                                  </tr>
                                  <tr>
                                      <td>4<sup>th</sup> Period</td>
                                      <td>11:05 a.m.</td>
                                      <td>-</td>
                                      <td>&nbsp;12:00 p.m.</td>
                                  </tr>
                                  <tr>
                                      <th>Break</th>
                                      <th>12:00 p.m.</th>
                                      <th>-</th>
                                      <th>12:20 p.m.</th>
                                  </tr>
                                  <tr>
                                      <td>5<sup>th</sup> Period&nbsp;&nbsp;</td>
                                      <td>12:20 p.m.</td>
                                      <td>-</td>
                                      <td>&nbsp;01:15 p.m.</td>
                                  </tr>
                                  <tr>
                                      <td>6<sup>th</sup> Period&nbsp;&nbsp;</td>
                                      <td>&nbsp;01:15 p.m.</td>
                                      <td>-</td>
                                      <td>&nbsp;02:10 p.m.</td>
                                  </tr>
                                  <tr>
                                      <td><strong>Sports Period</strong><br>
                                          <table>
                                              <tr><td>Tuesday:</td><th>E2</th></tr>
                                              <tr><td>Wednesday:</td><th>M1</th></tr>
                                              <tr><td>Thursday:</td><th>M2</th></tr>
                                          </table>
                                      </td>
                                      <th>08:00 a.m.</th>
                                      <th>-</th>
                                      <th>08:55 a.m.</th>
                                  </tr>

                                  <tr>
                                      <th colspan="4" nowrap="nowrap">Friday</th>
                                  </tr>
                                  <tr>
                                      <th style="text-align: center;">EVENTS</th>
                                      <th style="text-align: center;" colspan="3">TIMINGS</th>
                                  </tr>
                                  <tr>
                                      <td>College Gate Closed</td>
                                      <th>7:40 a.m.</th>
                                      <td>&nbsp;</td>
                                      <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                      <td>General Assembly / Tutorial</td>
                                      <td>7:40 a.m.</td>
                                      <td>&nbsp;</td>
                                      <td>7:55 a.m.</td>
                                  </tr>
                                  <tr>
                                      <td>1<sup>st</sup> Period</td>
                                      <td>08:00 a.m.</td>
                                      <td>-</td>
                                      <td>&nbsp;08:50 a.m.</td>
                                  </tr>
                                  <tr>
                                      <td>2<sup>nd</sup> Period</td>
                                      <td>08:50 a.m.</td>
                                      <td>-</td>
                                      <td>&nbsp;09:40 a.m.</td>
                                  </tr>
                                  <tr>
                                      <th>Break</th>
                                      <th>09:40 a.m.</th>
                                      <th>-</th>
                                      <th>10:00 a.m.</th>
                                  </tr>
                                  <tr>
                                      <td>3<sup>rd</sup> Period</td>
                                      <td>10:00 a.m.</td>
                                      <td>-</td>
                                      <td>10:50 a.m.</td>
                                  </tr>
                                  <tr>
                                      <td>4<sup>th</sup> Period</td>
                                      <td>10:50 a.m.</td>
                                      <td>-</td>
                                      <td>&nbsp;11:40 a.m.</td>
                                  </tr>
                                  </tbody>
                              </table>

							  <br />

                              <p><strong>NOTE</strong></p>

                              <ul style="line-height: 1.8">
                                  <li>Uniform for this Term is <strong>Khaki Trousers</strong>, <strong>White Full-Sleeved Shirt,</strong> <strong>Grey Socks and Black College Shoes.</strong></li>
                                  <li>During Games Period boys will wear <strong>White Full-Sleeved Shirt,</strong> <strong>Blue Trousers and Sports Shoes. </strong></li>
                                  <li>On their designated game days, boys will attend lessons in games dress.</li>
                                  <li>Day Boys, who use private transport, should be picked up by their parents or drivers before 2:45 p.m., otherwise, fine may be charged.</li>
                                  <li>Tuesday to Thursday will be utilized for Co-curricular Activities as per weekly programme.</li>
                                  <li>Club and Societies will be conducted on Saturdays.</li>
                                  <li>Extra Drill / Academic Detention from <strong>07:30 a.m. to 08:30 a.m.</strong> on Sundays.</li>
                                  <li>Branded shoes, watches, electronic gadgets and mobile phones are NOT ALLOWED.</li>
                              </ul>

                              <br>
                              <p>Raja Ashfaq Ahmad<br />
                                  Headmaster</p>

                              <?php /* ?>
<div class="col-lg-6 col-md-9 col-sm-12 col-xs-12"><p><a href="<?php echo $fileUrl; ?>" target="parent" class="active lnkDownload" style="display: inline-flex; padding: inherit; margin-left: 0;"><span style="font-weight: bold;"><span class="glyphicon" style="line-height: 1.7;"></span> Download Complete Reopening Details </span> </a>
                                  </p></div>
                              <?php */ ?>
						  </div>

						  <?php }

                          elseif ( $_SESSION['portal_School'] == "SSD" ) { ?>
						  <div align="center" class="page-title">
							  <h3>School Timings</h3>
						  </div>
					  		<h3 align="center">Routine Programme for Senior School</h3>

                              <h4 align="center">WINTER TERM – 2021</h4>

					        <div align="center"><strong>Commencing from Monday 23<sup>rd</sup> August, 2021</strong></div>

                              <p>&nbsp;</p>

                              <h3>Monday To Thursday</h3>

                              <div class="table-responsive">
								<table class="table table-bordered jambo_table" style="width: 100%;">
                                    <thead>
                                    <tr style="background-color:#293594;color:#FFF;">
                                        <th height="23" style="height:23px;">Events</th>
                                        <th colspan="3" style="text-align:center;">Timings</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr height="20">
                                        <td height="20" style="height:20px;">College Gate Closed</td>
                                        <td>7:40 AM</td>
                                        <td></td>
                                    </tr>
                                    <tr height="20">
                                        <td height="20" style="height:20px;">House / School Assembly</td>
                                        <td>07:45 AM</td>
                                        <td>07:55 AM</td>
                                        <td style="width: 250px;">Assemblies will be held in the<br>1st Period till further notice
                                        </td>
                                    </tr>

                                    <tr height="20">
                                        <td height="20" style="height:20px;">1<sup>st</sup> Period</td>
                                        <td>08:00 AM</td>
                                        <td>08:40 AM</td>
                                    </tr>
                                    <tr height="20">
                                        <td height="20" style="height:20px;">2<sup>nd</sup> Period</td>
                                        <td>08:45 AM</td>
                                        <td>09:25 AM</td>
                                    </tr>
                                    <tr height="20">
                                        <td height="20" style="height:20px;">3<sup>rd</sup> Period</td>
                                        <td>09:30 AM</td>
                                        <td>10:10 AM</td>
                                    </tr>
                                    <tr height="20">
                                        <td height="20" style="height:20px;">4<sup>th</sup> Period</td>
                                        <td>10:15 AM</td>
                                        <td>10:55 AM</td>
                                        <td>C1 (Barry Block) & H1 (MCG)<br>Break: 10:15 to 10:35
                                        </td>
                                    </tr>
                                    <tr height="20" style="font-weight: bold;">
                                        <td height="20" style="height:20px;">Break&nbsp;</td>
                                        <td>10:55 AM</td>
                                        <td>11:25 AM</td>
                                        <td style="font-weight:normal;">C2 (Barry Block) & H2 (MCG)<br>Break: 10:55 to 11:20
                                        </td>
                                    </tr>
                                    <tr height="20">
                                        <td height="20" style="height:20px;">5<sup>th</sup> Period</td>
                                        <td>11:25 AM</td>
                                        <td>12:05 PM</td>
                                    </tr>
                                    <tr height="20">
                                        <td height="20" style="height:20px;">6<sup>th</sup> Period</td>
                                        <td>12:10 PM</td>
                                        <td>12:50 AM</td>
                                    </tr>
                                    <tr height="20">
                                        <td height="20" style="height:20px;">7<sup>th</sup> Period</td>
                                        <td>12:55 PM</td>
                                        <td>01:35 PM</td>
                                    </tr>
                                    <tr height="20">
                                        <td height="20" style="height:20px;">8<sup>th</sup> Period</td>
                                        <td>01:40 PM</td>
                                        <td>02:20 PM</td>
                                    </tr>
                                    </tbody>
								</table>

                                  <h3>FRIDAY</h3>

                                  <table class="table table-bordered jambo_table" style="width: 100%;">
                                      <thead>
                                      <tr style="background-color:#293594;color:#FFF;">
                                          <th height="23" style="height:23px;width:156px;">Events</th>
                                          <th colspan="3" style="text-align:center;">Timings</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <tr height="20">
                                          <td height="20" style="height:20px;">College Gate Closed</td>
                                          <td>07:40 AM</td>
                                          <td></td>
                                      </tr>
                                      <tr height="20">
                                          <td height="20" style="height:20px;">House / School Assembly</td>
                                          <td>07:45 AM</td>
                                          <td>07:55 AM</td>
                                          <td style="width: 250px;">Assemblies will be held in the<br>1st Period till further notice
                                          </td>
                                      </tr>
                                      <tr height="20">
                                          <td height="20" style="height:20px;">1<sup>st</sup> Period</td>
                                          <td>08:00 AM</td>
                                          <td>08:45 AM</td>
                                      </tr>
                                      <tr height="20">
                                          <td height="20" style="height:20px;">2<sup>nd</sup> Period</td>
                                          <td>08:50 AM</td>
                                          <td>09:35 AM</td>
                                      </tr>
                                      <tr height="20" style="font-weight: bold;">
                                          <td height="20" style="height:20px;">Break&nbsp;</td>
                                          <td>09:35 AM</td>
                                          <td>09:45 AM</td>
                                      </tr>
                                      <tr height="20">
                                          <td height="20" style="height:20px;">3<sup>rd</sup> Period</td>
                                          <td>09:45 AM</td>
                                          <td>10:30 AM</td>
                                      </tr>
                                      <tr height="20">
                                          <td height="20" style="height:20px;">4<sup>th</sup> Period</td>
                                          <td>10:35 AM</td>
                                          <td>11:20 AM</td>
                                      </tr>
                                      </tbody>
                                  </table>
				  		</div>
							<p>&nbsp;</p>

                          <?php if(true) { ?>
							<p><strong>NOTE:</strong></p>

                              <ol style="line-height:1.9;">
                                  <li>Jumma Prayers at 1:30 pm.</li>
                                  <li>Summer uniform Khaki Trouser, white full sleeves shirt, grey socks and black college shoes.</li>
                                  <li>Co-curricular Competitions will be held either after school on weekdays or weekends online.</li>
                                  <li>Lights out for the boarding houses at 10:30 pm.</li>
                                  <li>Extra Drill / Academic Detention 08:30 to 10:30 an on Saturdays or after School from 2:30 to 3:30 pm.</li>
                                  <li>Reporting time for teaching staff is 7:30 am and for MOD is 7:15 am.</li>
                                  <li>Canteens are closed. Kindly bring your own eatables and water bottles.</li>
                              </ol>

                              <p>&nbsp;</p>
                          <?php } ?>
                              <p>Amina Kamran<br />
                                  Headmistress, Senior School<br />
                                  August 20, 2021
                              </p>

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

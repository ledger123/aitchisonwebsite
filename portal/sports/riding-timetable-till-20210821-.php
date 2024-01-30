<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Riding Timetable"; include($path."includes.php"); ?>
	

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
						  <div class="row" style="margin-left: 0;">
							  <div class="" role="tabpanel" data-example-id="togglable-tabs">
								  <?php /*?><ul id="tabs" class="nav nav-tabs bar_tabs" role="tablist">
									<li role="presentation" class="active"><a href="#calendar" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Riding Calendar</a>
									</li>
									<li role="presentation" class=""><a href="#timetable" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Riding Timetable</a>
									</li>
								  </ul><?php */?>
								  
								  <div id="myTabContent" class="tab-content">
									  
									  <div class="tab-pane fade in" id="calendar">
										<br>
										<div class="page-title">
											<h4>Riding-Tentative Event Calendar 2019-20</h4>
										</div>
										  <div class="table-responsive">
										<table id="maintable" width="100%" class="table table-bordered jambo_table">
											<thead>
											  <tr class="headings">
												  
												<th class="column-title">Sr </th>
												  <th class="column-title">Events/Competition </th>
												  <th class="column-title">Schools </th>
												  <th class="column-title">Tentative Dates </th>

											  </tr>
											</thead>
											
										  <tbody>
											
											  
											<tr>
											  <td>1.</td>
											  <td>EFP-Show Jumping Competition</td>
											  <td>PS &amp; SS</td>
											  <td>Saturday, 21<sup>st</sup> September, 2019</td>
											</tr>
											<tr>
											  <td>2.</td>
											  <td>Mian Yousaf Saigol &amp; Col. Aslam Niazi Challenge Cups</td>
											  <td>PS &amp; SS</td>
											  <td>Saturday, 19<sup>th</sup> October, 2019</td>
											</tr>
											<tr>
											  <td>3.</td>
											  <td>Vihali (Dressage &amp; Show Jumps) &amp; Rasulpur Challenge Cups</td>
											  <td>SS</td>
											  <td>Saturday, 26<sup>th</sup> October, 2019</td>
											</tr>
											<tr>
											  <td>4.</td>
											  <td>Junior School Annual Riding Competition</td>
											  <td>JS</td>
											  <td>Saturday, 16<sup>th</sup> November, 2019</td>
											</tr>
											<tr>
											  <td>5.</td>
											  <td>Arena Polo Tournament/Match</td>
											  <td>PS &amp; SS</td>
											  <td>Saturday, 30<sup>th</sup> November, 2019</td>
											</tr>
											<tr>
											  <td>6.</td>
											  <td>Old Boys Vs. College Team Tent Pegging Competition</td>
											  <td>PS &amp; SS</td>
											  <td>Saturday, 28<sup>rd</sup> March, 2020</td>
											</tr>

											<!--active-->
										  </tbody>
										</table>
										  </div>

									  </div>
									  
									  <div class="tab-pane fade in active" id="timetable">
										<br>
										    <div class="page-title">
                                                <h4 align="center">RIDING PROGRAMME WITH EFFECT FROM 1<sup>st</sup> FEBRUARY 2021</h4>
												
										</div>
										  
										  <?php if($_SESSION['portal_School'] == "JSD") { ?>
										  <div class="table-responsive">
                                              <h3>Cycle A of Riding Classes</h3>
										  <table width="95%" class="table table-bordered jambo_table" style="text-align: center;">
                          
											<tr>
											  <th style="text-align: center;">Days</th>
											  <th style="text-align: center;">1<sup>st</sup> Period</th>
											  <th style="text-align: center;">2<sup>nd</sup> Period</th>
											  <th style="text-align: center;">3<sup>rd</sup> Period</th>
											  <th style="text-align: center;">4<sup>th</sup> Period</th>
											</tr>
										  <tbody>

											<tr style="">
												<td></td><td>07:00 AM TO 07:20 AM</td><td>07:20 AM TO 07:40 AM</td><td>07:40 AM TO 08:00 AM</td><td>08:00 AM TO 08:20 AM</td>
											</tr>

											<tr><td>Monday</td><td>K6</td><td>A, B & C Sections of K6 & K5</td><td>D, E &amp; F Sections of K6 & K5</td><td>G &amp; H Sections of K6 & K5</td></tr>
											<tr><td></td><td>Boarders</td><td>Day Boys</td><td>Day Boys</td><td>Day Boys</td></tr>

											<tr><td>Tuesday</td><td>K5 </td><td>-</td><td>-</td><td>-</td></tr>
											<tr><td></td><td>Boarders</td><td>-</td><td>-</td><td>-</td></tr>

											<tr><td>Wednesday</td><td>K4</td><td>A, B &amp; C Sections of K4 & K3</td><td>D, E &amp; F Sections of K4 & K3</td><td>G &amp; H Sections of K4 & K3</td></tr>
											<tr><td></td><td>Boarders</td><td>Day Boys</td><td>Day Boys</td><td>Day Boys</td></tr>

											<tr><td>Thursday</td><td>K3</td><td>-</td><td>-</td><td>-</td></tr>
											<tr><td></td><td>Boarders</td><td>-</td><td>-</td><td>-</td></tr>

											<tr><td>Friday</td><td>K2 &amp; K1</td><td>K2 A, B & C</td><td>K2 D, E &amp; F</td><td>K2 G &amp; H</td></tr>
											<tr><td></td><td>Boarders</td><td>Day Boys</td><td>Day Boys</td><td>Day Boys</td></tr>

										  </tbody>
										</table>
                                                <br/>
                                              <h3>Cycle B of Riding Classes</h3>
                                              <table width="95%" class="table table-bordered jambo_table" style="text-align: center;">

                                                  <tr>
                                                      <th style="text-align: center;">Days</th>
                                                      <th style="text-align: center;">2<sup>nd</sup> Period</th>
                                                      <th style="text-align: center;">3<sup>rd</sup> Period</th>
                                                      <th style="text-align: center;">4<sup>th</sup> Period</th>
                                                  </tr>
                                                  <tbody>

                                                  <tr style="">
                                                      <td></td><td>07:20 AM TO 07:40 AM</td><td>07:40 AM TO 08:00 AM</td><td>08:00 AM TO 08:20 AM</td>
                                                  </tr>
                                                  <!--
                                                <tr><td>Monday</td><td>-</td><td>-</td><td>-</td></tr>
                                                <tr><td></td><td>-</td><td>-</td><td>-</td></tr>
                                                -->
                                                <tr><td>Tuesday</td><td>A, B & C Sections of K6 & K5</td><td>D, E & F Sections of K6 & K5</td><td>G & H Section of K6 & K5</td></tr>
                                                <tr><td></td><td>Day Boys</td><td>Day Boys</td><td>Day Boys</td></tr>
                                                <!--
                                                <tr><td>Wednesday</td><td>-</td><td>-</td><td>-</td></tr>
                                                <tr><td></td><td>-</td><td>-</td><td>-</td></tr>
                                                -->
                                                <tr><td>Thursday</td><td>A, B & C Sections of K4 & K3</td><td>D, E & F Sections of K4 & K3</td><td>G & H Sections of K4 & K3</td></tr>
                                                <tr><td></td><td>Day Boys</td><td>Day Boys</td><td>Day Boys</td></tr>

                                                <!--
                                                <tr><td>Friday</td><td>-</td><td>-</td><td>-</td></tr>
                                                <tr><td></td><td>-</td><td>-</td><td>-</td></tr>
                                                  -->
                                                  <tr><td>Saturday</td><td>K2 A, B & C</td><td>K2 D, E & F</td><td>K2G & H</td></tr>
                                                  <tr><td></td><td>Day Boys</td><td>Day Boys</td><td>Day Boys</td></tr>

                                                  </tbody>
                                              </table>

										  </div>

											<div>
											<span><strong><u>Dress</u></strong></span>
											<ol>
												<li>White Shirt</li>
												<li>Khaki Breeches</li>
												<li>Helmet (College Color)</li>
												<li>Brown Riding Shoes ( For K3, K4, K5 &amp; K6)</li>
												<li>Black School Shoes (For K1 &amp; K2)</li>
											</ol>
											<br/>
                                            <p><strong>Note:  Face mask is compulsory. No Riding will be permitted without face mask.</strong></p>

										</div>
										  
										  <?php }elseif($_SESSION['portal_School'] == "PSD") { ?>
										  <div class="page-title">
										  	<div align="center" style="font-weight: bold;text-decoration: underline;">PREP SCHOOL <?php /*?><br>MONDAY TO WEDNESDAY<?php */?></div><br>
										  </div>	  
										  <div class="table-responsive">
										   <table width="95%" class="table table-bordered jambo_table">
                          
												<tr>
												  <th style="width: 13%;">Days</th>
												  <th style="width: 13%;">Cycle</th>
												  <th style="width: 19%;">1<sup>st</sup> Period</th>
												  <th style="width: 19%;">2<sup>nd</sup> Period</th>
												  <th style="width: 19%;">3<sup>rd</sup> Period</th>
												  <th style="width: 19%;">4<sup>th</sup> Period</th>
											    </tr>
											  <tbody>
												<tr>
													<td></td>
													<td>&nbsp;</td>
													<td>3.30 PM TO 3.50 PM</td>
													<td>3.50 PM TO 4.10 PM</td>
													<td>4.10 PM TO 4.30 PM</td>
													<td>4.30 PM TO 5.00 PM</td>
												</tr>

												<tr>
													<td>MONDAY</td>
													<td align="center"><strong>A</strong></td>
													<td><strong>M2 Class</strong></td>
													<td><strong>M1 Class</strong></td>
													<td><strong>E2 Class</strong></td>
													<td>Polo, Jumps &amp; Tent Pegging</td>
												</tr>
												<tr>
												  <td>&nbsp;</td>
												  <td>&nbsp;</td>
												  <td><strong>Day Boys</strong></td>
												  <td><strong>Day Boys</strong></td>
												  <td><strong>Day Boys</strong></td>
												  <td>Boarders &amp; Day Boys</td>
											    </tr>
												<tr>
													<td>TUESDAY</td>
													<td align="center"><strong>B</strong></td>
													<td><strong>M2 Class</strong></td>
													<td><strong>M1 Class</strong></td>
													<td><strong>E2 Class</strong></td>
													<td>Polo, Jumps &amp; Tent Pegging</td>
												</tr>
												<tr>
												  <td>&nbsp;</td>
												  <td>&nbsp;</td>
												  <td><strong>Day Boys</strong></td>
												  <td><strong>Day Boys</strong></td>
												  <td><strong>Day Boys</strong></td>
												  <td>Boarders &amp; Day Boys</td>
											    </tr>
												<tr>
													<td>WEDNESDAY</td>
													<td align="center"><strong>A</strong></td>
													<td><strong>M2 Class</strong></td>
													<td><strong>M1 Class</strong></td>
													<td><strong>E2 Class</strong></td>
													<td>Polo, Jumps &amp; Tent Pegging</td>
												</tr>
												<tr>
												  <td>&nbsp;</td>
												  <td>&nbsp;</td>
												  <td><strong>Boarders</strong></td>
												  <td><strong>Boarders</strong></td>
												  <td><strong>Boarders</strong></td>
												  <td>Boarders &amp; Day Boys</td>
											    </tr>
											  </tbody>
											</table>
										  </div>
										  <div class="page-title">
											  <p><strong>Note:  Face mask is compulsory. No Riding will be permitted without face mask.</strong></p>
										  </div>	  
										<br/>
											<div>
												<span><strong><u>Dress</u></strong></span>
												<ol>
													<li>White Shirt</li>
													<li>Breeches(White/Khaki)</li>
													<li>Riding Shoes (Brown)</li>
													<li>Helmet (College Color)</li>
												</ol>

											</div>

										  <?php }elseif($_SESSION['portal_School'] == "SSD") { ?>
										  <div class="page-title">
										  	<div align="center" style="font-weight: bold;text-decoration: underline;">SENIOR SCHOOL <br>
										  	</div><br>
										  </div>	  
										  <div class="table-responsive">
										   <table width="95%" class="table table-bordered jambo_table">
                          
												<tr>
												  <th style="width: 12%;">Days</th>
												  <th style="width: 12%;">Cycle</th>
												  <th style="width: 22%;">1<sup>st</sup> Period</th>
												  <th style="width: 22%;">2<sup>nd</sup> Period</th>
												  <th style="width: 22%;">3<sup>rd</sup> Period</th>
											    </tr>
											  <tbody>
												<tr>
													<td></td>
													<td>&nbsp;</td>
													<td>3.30 PM TO 4.00 PM</td>
													<td>4.00 PM TO 4.30 PM</td>
													<td>4.30 PM TO 5.00 PM</td>
												</tr>

												<tr>
													<td>THURSDAY</td>
													<td align="center"><strong>B</strong></td>
													<td><strong>H1 Class</strong></td>
													<td><strong>C2 Class</strong></td>
													<td>Polo, Jumps &amp; Tent Pegging</td>
												</tr>
												<tr>
												  <td>&nbsp;</td>
												  <td align="center">&nbsp;</td>
												  <td>Boarders &amp; Day Boys</td>
												  <td>Boarders &amp; Day Boys</td>
												  <td>Boarders &amp; Day Boys</td>
											    </tr>
												<tr>
													<td>FRIDAY</td>
													<td align="center"><strong>A</strong></td>
													<td><strong>H2 Class</strong></td>
													<td><strong>C1 Class</strong></td>
													<td>Polo, Jumps &amp; Tent Pegging</td>
												</tr>
												<tr>
												  <td>&nbsp;</td>
												  <td align="center">&nbsp;</td>
												  <td>Boarders &amp; Day Boys</td>
												  <td>Boarders &amp; Day Boys</td>
												  <td>Boarders &amp; Day Boys</td>
											    </tr>
											  </tbody>
											</table>
										  </div>
										  <div class="page-title">
											  <p><strong>Note:  Face mask is compulsory. No Riding will be permitted without face mask.</strong></p>
										  </div>	  
											<br/>
											<div>
												<span><strong><u>Dress</u></strong></span>
												<ol>
													<li>White Shirt</li>
													<li>Breeches(White/Khaki)</li>
													<li>Riding Shoes (Brown)</li>
													<li>Helmet (College Color)</li>
												</ol>

											</div>
									    <?php } ?>
										  
									  </div>
									  
								  </div>
								</div>
						  </div>
						  
					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php //include($path."today-classes.php"); ?>
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

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

										  <?php if($_SESSION['portal_School'] == "JSD") { ?>
                                              <div class="page-title">
                                                  <h4 align="center"> Riding Programme with effect from 04 October 2021</h4>

                                              </div>

                                              <div class="table-responsive">
												  <table width="95%" class="table table-bordered jambo_table">
                          
														<tr>
														  <th style="">Days</th>
														  <th style="">1<sup>st</sup> Period</th>
														  <th style="">2<sup>nd</sup> Period</th>
														  <th style="">3<sup>rd</sup> Period</th>
														  <th style="">4<sup>th</sup> Period</th>
														</tr>
													  <tbody>

														<tr style="font-size:12px;">
															<td></td><td>06:20 AM TO 06:40 AM</td><td>06:40 AM TO 07:00 AM</td><td>07:00 AM TO 07:20 AM</td><td>07:20 AM TO 07:40 AM</td>
														</tr>

														<tr><td>Monday</td><td>K6</td><td>K6 A, B &amp; C</td><td>K6 D, E &amp; F</td><td>K6 G &amp; H</td></tr>
														<tr><td></td><td>Boarders</td><td>Day Boys</td><td>Day Boys</td><td>Day Boys</td></tr>

														<tr><td>Tuesday</td><td>K5 </td><td>K5 A, B &amp; C</td><td>K5 D, E &amp; F</td><td>K5 G &amp; H</td></tr>
														<tr><td></td><td>Boarders</td><td>Day Boys</td><td>Day Boys</td><td>Day Boys</td></tr>

														<tr><td>Wednesday</td><td>K4</td><td>K4 A, B &amp; C</td><td>K4 D, E &amp; F</td><td>K4 G &amp; H</td></tr>
														<tr><td></td><td>Boarders</td><td>Day Boys</td><td>Day Boys</td><td>Day Boys</td></tr>

														<tr><td>Thursday</td><td>K3</td><td>K3 A, B &amp; C</td><td>K3 D, E &amp; F</td><td>K3 G &amp; H</td></tr>
														<tr><td></td><td>Boarders</td><td>Day Boys</td><td>Day Boys</td><td>Day Boys</td></tr>

														<tr><td>Friday</td><td>K2 &amp; K1</td>
														<td>K2 A, B, C &amp; D</td>
														<td>K2  E, F, G &amp; H</td>
														<td>K2 I, J, K &amp; L</td></tr>
														<tr><td></td><td>Boarders</td><td>Day Boys</td><td>Day Boys</td><td>Day Boys</td></tr>

													  </tbody>
												</table>
                                                  <?php /*?><table class="table table-bordered" style="width:100%; text-align: center;">
                                                      <tbody>
                                                      <tr>
                                                          <td>&nbsp;</td>
                                                          <td colspan="4" style="text-align: center; font-weight: bold;">Cycle A of Riding Classes</td>
                                                          <td colspan="3" style="text-align: center; font-weight: bold;">Cycle B of Riding Classes</td>
                                                      </tr>
                                                      <tr>
                                                          <th>Days</th>
                                                          <th>Ist Period</th>
                                                          <th>2nd Period</th>
                                                          <th>3rd Period</th>
                                                          <th>4th Period</th>
                                                          <th>2nd Period</th>
                                                          <th>3rd Period</th>
                                                          <th>4th Period</th>
                                                      </tr>
                                                      <tr>
                                                          <td>&nbsp;</td>
                                                          <td>06.20 TO 06.40 AM</td>
                                                          <td>06.40 TO 07.00 AM</td>
                                                          <td>07.00 TO 07.20 AM</td>
                                                          <td>07.20 TO 07.40 AM</td>
                                                          <td>06.40 TO 07.00 AM</td>
                                                          <td>07.00 TO 07.20 AM</td>
                                                          <td>07.20 TO 07.40 AM</td>
                                                      </tr>
                                                      <tr>
                                                          <td>Monday</td>
                                                          <td>K6</td>
                                                          <td>A, B &amp; C Section of K6 &amp; K5</td>
                                                          <td>D, E &amp; F Section of K6 &amp; K5</td>
                                                          <td>G &amp; H Section of K6 &amp; K5</td>
                                                          <td>_</td>
                                                          <td>_</td>
                                                          <td>_</td>
                                                      </tr>
                                                      <tr>
                                                          <td>&nbsp;</td>
                                                          <td>Boarders</td>
                                                          <td>Day Boys</td>
                                                          <td>Day Boys</td>
                                                          <td>Day Boys</td>
                                                          <td>_</td>
                                                          <td>_</td>
                                                          <td>_</td>
                                                      </tr>
                                                      <tr>
                                                          <td>Tuesday</td>
                                                          <td>K5</td>
                                                          <td>_</td>
                                                          <td>_</td>
                                                          <td>_</td>
                                                          <td>A, B &amp; C Section of K6 &amp; K5</td>
                                                          <td>D, E &amp; F Section of K6 &amp; K5</td>
                                                          <td>G &amp; H Section of K6 &amp; K5</td>
                                                      </tr>
                                                      <tr>
                                                          <td>&nbsp;</td>
                                                          <td>Boarders</td>
                                                          <td>_</td>
                                                          <td>_</td>
                                                          <td>_</td>
                                                          <td>Day Boys</td>
                                                          <td>Day Boys</td>
                                                          <td>Day Boys</td>
                                                      </tr>
                                                      <tr>
                                                          <td>Wednesday</td>
                                                          <td>K4</td>
                                                          <td>A, B &amp; C Section of K4 &amp; K3</td>
                                                          <td>D, E &amp; F Section of K4 &amp; K3</td>
                                                          <td>G &amp; H Section of K4 &amp; K3</td>
                                                          <td>_</td>
                                                          <td>_</td>
                                                          <td>_</td>
                                                      </tr>
                                                      <tr>
                                                          <td>&nbsp;</td>
                                                          <td>Boarders</td>
                                                          <td>Day Boys</td>
                                                          <td>Day Boys</td>
                                                          <td>Day Boys</td>
                                                          <td>_</td>
                                                          <td>_</td>
                                                          <td>_</td>
                                                      </tr>
                                                      <tr>
                                                          <td>Thursday</td>
                                                          <td>K3</td>
                                                          <td>_</td>
                                                          <td>_</td>
                                                          <td>_</td>
                                                          <td>A, B &amp; C Section of K4 &amp; K3</td>
                                                          <td>D, E &amp; F Section of K4 &amp; K3</td>
                                                          <td>G &amp; H Sections of K4 &amp; K3</td>
                                                      </tr>
                                                      <tr>
                                                          <td>&nbsp;</td>
                                                          <td>Boarders</td>
                                                          <td>_</td>
                                                          <td>_</td>
                                                          <td>_</td>
                                                          <td>Day Boys</td>
                                                          <td>Day Boys</td>
                                                          <td>Day Boys</td>
                                                      </tr>
                                                      </tbody>
                                                  </table><?php */?>
                                                <br/>
										      </div>

											<div>
											<span><strong><u>Dress</u></strong></span>
											<ol>
												<li>White Shirt</li>
												<li>Khaki Breeches</li>
												<li>Helmet (College Color)</li>
												<li>Brown Riding Shoes ( For K3, K4, K5 &amp; K6)</li>
												<li>Black School Shoes ( For K1 &amp; K2)</li>
											</ol>
											<br/>
											<u><strong>Note:  Face mask is compulsory. No Riding will be permitted without face mask.</strong></u>

											</div>
										  
										  <?php }elseif($_SESSION['portal_School'] == "PSD") { ?>
                                              <div class="page-title">
                                                  <h4 align="center">RIDING PROGRAMME WITH EFFECT FROM 9<sup>th</sup> May 2022</h4>

                                              </div>

                                              <div class="page-title">
										  	<div align="center" style="font-weight: bold;text-decoration: underline;">PREP SCHOOL <?php /*?><br>MONDAY TO WEDNESDAY<?php */?></div><br>
										  </div>

										  <div class="table-responsive">
										   <table class="table table-bordered jambo_table" style="text-align: center; width: 95%;">
                                               <thead>
                                               <tr>
                                                   <th nowrap="nowrap" style="text-align: center;">Days</th>
                                                   <th nowrap="nowrap" style="text-align: center;">Class</th>
                                                   <th nowrap="nowrap" style="text-align: center;">4:00 to 5:00 PM</th>
                                               </tr>
                                               </thead>
                                               <tbody>
                                               <tr>
                                                   <td nowrap="nowrap">Monday</td>
                                                   <td nowrap="nowrap">M2 Class</td>
                                                   <td nowrap="nowrap">All Day Boys & Boarders</td>
                                               </tr>
                                               <tr>
                                                   <td nowrap="nowrap">Tuesday</td>
                                                   <td nowrap="nowrap">M1 Class</td>
                                                   <td nowrap="nowrap">All Day Boys & Boarders</td>
                                               </tr>
                                               <tr>
                                                   <td nowrap="nowrap">Wednesday</td>
                                                   <td nowrap="nowrap">E2 Class</td>
                                                   <td nowrap="nowrap">All Day Boys & Boarders</td>
                                               </tr>

                                               </tbody>
											</table>
										  </div>
                                              <p>&nbsp;</p>
											<div>
												<span><strong><u>Dress</u></strong></span>
												<ol>
													<li>White Shirt</li>
													<li>Breeches(White/Khaki)</li>
													<li>Riding Shoes (Brown)</li>
													<li>Helmet (College Color)</li>
												</ol>

											</div>
										  <br/>

										  <?php }elseif($_SESSION['portal_School'] == "SSD") { ?>
                                              <div class="page-title">
                                                  <h4 align="center">RIDING PROGRAMME WITH EFFECT FROM 15 <sup></sup>NOVEMBER 2021</h4>

                                              </div>

                                              <div class="page-title">
										  	<div align="center" style="font-weight: bold;text-decoration: underline;">SENIOR SCHOOL <br>
										  	</div><br>
										  </div>


                                              <div class="table-responsive">
                                                  <table class="table table-bordered jambo_table" style="text-align: center; width: 95%;">
                                                      <thead>
                                                      <tr>
                                                          <td>Days</td>
                                                          <td>1st Period</td>
                                                          <td>2nd Period</td>
                                                          <td>3rd Period</td>
                                                          <td>4th Period</td>

                                                      </tr>
                                                      </thead>
                                                      <tbody>
                                                      <tr>
                                                          <td>&nbsp;</td>
                                                          <td>03.00 to 03.20 PM</td>
                                                          <td>03.20 to 03.40 PM</td>
                                                          <td>03.40 to 04.30 PM</td>
                                                          <td>04.30 to 05.00 PM</td>
                                                      </tr>
                                                      <tr>
                                                          <td>Thursday</td>
                                                          <td><strong>H1 Class</strong></td>
                                                          <td><strong>C2 Class</strong></td>
                                                          <td>School Work, Jumps &amp; Tent pegging</td>
                                                          <td>Arena Polo</td>
                                                      </tr>
                                                      <tr>
                                                          <td>&nbsp;</td>
                                                          <td>Boarders &amp; Day Boys</td>
                                                          <td>Boarders &amp; Day Boys</td>
                                                          <td>Boarders &amp; Day Boys</td>
                                                          <td>Boarders &amp; Day Boys</td>
                                                      </tr>
                                                      <tr>
                                                          <td>Friday</td>
                                                          <td><strong>H2 Class</strong></td>
                                                          <td><strong>C1 Class</strong></td>
                                                          <td>School Work, Jumps &amp; Tent pegging</td>
                                                          <td>Arena Polo</td>
                                                      </tr>
                                                      <tr>
                                                          <td>&nbsp;</td>
                                                          <td>Boarders &amp; Day Boys</td>
                                                          <td>Boarders &amp; Day Boys</td>
                                                          <td>Boarders &amp; Day Boys</td>
                                                          <td>Boarders &amp; Day Boys</td>
                                                      </tr>
                                                      </tbody>
                                                  </table>
                                              </div>

										  
											<div>
												<span><strong><u>Dress</u></strong></span>
												<ol>
													<li>White Shirt</li>
													<li>Breeches(White/Khaki)</li>
													<li>Riding Shoes (Brown)</li>
													<li>Helmet (College Color)</li>
												</ol>

											</div>
										  	<br/>
											  <div class="page-title">
												  <p><strong>Note:  Face mask is compulsory. No Riding will be permitted without face mask.</strong></p>
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

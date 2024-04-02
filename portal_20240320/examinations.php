<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Examinations"; include($path."includes.php"); ?>
	

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
						  <div class="page-title">
							  <h3><?php echo $title; ?></h3>
						  </div>
						  <br />
						  <div class="row table-responsive">
							  <!--<?php //print_r($_SESSION);?>-->
							  <table align="center" class="table table-bordered jambo_table">
								  
								  <thead>
									  <tr class="headings">
										
										<th style="width: 6%;" class="column-title">Sr</th>
										<th class="column-title">Details </th>
										<th class="column-title">Dates </th>
									  </tr>
									</thead>
								  <?php if ($_SESSION['portal_School'] == "JSD") { ?>
								  <?php
					//if(isset($_SESSION['portal_temp_pageid']) && intval($_SESSION['portal_temp_pageid'])=="3214"){
				  					?>
								  	<tbody>
										<tr>
										  <td>1</td>
										  <td>Junior School  Progressive Assessment Upper Primary (K4-K6) - all subjects</td>
											<td>Monday, 14<sup>th</sup> October – Friday, 18<sup>th</sup> October2019
											  </td>
										</tr>
										<tr>
										  <td>2</td>
										  <td>Prep Leave Half –Yearly Examinations 2019</td>
											<td>Friday, 6<sup>th</sup> December 2019
											  </td>
										</tr>
										<tr>
										  <td>3</td>
										  <td>Half –Yearly Examinations 2019</td>
										  <td>Saturday, 7<sup>th</sup> December – Friday, 20<sup>th</sup> December 2019
											  </td>
										</tr>
										<tr>
										  <td>4</td>
										  <td>Junior School  Progressive Assessment Upper Primary (K4-K6) - all subjects</td>
										  <td>Monday, 10<sup>th</sup> February – Friday, 14<sup>th</sup> February 2020 </td>
										</tr>
										<tr>
										  <td>5</td>
										  <td>Prep Leave -  Annual Examinations</td>
										  <td>Thursday, 7<sup>th</sup> May 2020</td>
										</tr>
										<tr>
										  <td>6</td>
										  <td>Annual Examinations  all subjects<br>Junior School Formative Tests (K1-K3) - all subjects<br>Junior School (K4-K6) Annual Examinations - all subjects</td>
											<td>Friday, 8<sup>th</sup> May – Thursday, 21<sup>st</sup> May 2020</td>
										</tr>
										
								  	</tbody>
								  <?php /*?> <?php	  
								  }else{
								  ?>
								  <tbody>

									<tr>
									  <td>1</td>
									  <td>Junior School Formative Tests (K1-K6) - all subjects</td>
									  <td>Monday, 22<sup>nd</sup>&nbsp;October - Friday, 26<sup>th</sup>&nbsp;October, 2018</td>
									</tr>
									<tr>
									  <td>2</td>
									  <td><strong>Prep Leave</strong> </td>
									  <td>Friday, 7<sup>th</sup> December, 2018</td>
									</tr>
									<tr>
									  <td>3</td>
									  <td>
											Junior School (K1-K3) Formative Tests - all subjects<br>
											Junior School (K4-K6) Summative Tests - all subjects
									  </td>
									  <td>Monday, 10<sup>th</sup> December - Thursday, 20<sup>th</sup> December, 2018</td>
									</tr>
									<tr>
									  <td>4</td>
									  <td>Junior School Formative Tests (K1-K6) - all subjects</td>
									  <td>Monday, 18<sup>th</sup>&nbsp;March - Friday, 22<sup>nd</sup> March, 2018</td>
									</tr>
									<tr>
									  <td>5</td>
									  <td><strong>Prep Leave</strong></td>
									  <td>Tuesday, 14<sup>th</sup>&nbsp;May, 2019</td>
									</tr>
									<tr>
									  <td>6</td>
									  <td>
										Junior School Formative Tests (K1-K3) - all subjects<br>
										Junior School (K4-K6) Annual Examinations - all subjects
									  </td>                                  
									  <td>Wednesday, 15<sup>th</sup> May – Saturday, 25<sup>th</sup> May, 2019</td>
									</tr>

								  </tbody>
								  <?php } ?><?php */?>
								  <?php } elseif ($_SESSION['portal_School'] == "PSD") { ?>
								  <?php
					//if(isset($_SESSION['portal_temp_pageid']) && intval($_SESSION['portal_temp_pageid'])=="3214"){
									  
								  ?>
								  	<?php
								  	if(!isset($_GET['gvalue'])) {
								  	?>
								  	<tbody>
										<tr>
										  <td width="4%">1</td>
										  <td width="48%">Standardized Class Test I </td>
										  <td width="48%">Monday, 23<sup>rd</sup> September- Friday, 27<sup>th</sup>  September , 2019 </td>
										</tr>
										<tr>
										  <td>2</td>
										  <td>Revision</td>
										  <td>Monday, 2<sup>nd</sup> -to- Wednesday, 4<sup>th</sup>  December, 2019 </td>
										</tr>
										<tr>
										  <td>3</td>
										  <td>Prep Leave</td>
										  <td>Thursday, 5<sup>th</sup> and Friday, 6<sup>th</sup> December 2019 (For E2 and M1) M2 will have regular lessons</td>
										</tr>
										<tr>
										  <td>4</td>
										  <td>Half –Yearly Examinations 2019 <br>
(For E2 & M1 only), M2 will attend regular lessons</td>
										  <td>Saturday, 7<sup>th</sup> December – Friday, 20<sup>th</sup> December 2019</td>
										</tr>
										<tr>
										  <td>5</td>
										  <td>Send-up Examinations<br>
(For M2  Class only), E2 and M1 will attend regular lessons</td>
										  <td>Monday, 3<sup>rd</sup> February- Friday, 14<sup>th</sup> February, 2020</td>
										</tr>
										<tr>
										  <td>6</td>
										  <td>Standardized Class Test II (For E2 & M1)</td>
										  <td>Monday, 24<sup>th</sup> March - Monday, 30<sup>th</sup> March, 2020</td>
										</tr>
										<tr>
										  <td>7</td>
										  <td>Revision</td>
										  <td>Monday, 27<sup>th</sup> April - Tuesday, 5<sup>th</sup> May 2020</td>
										</tr>
										<tr>
										  <td>8</td>
										  <td>Prep Leave</td>
										  <td>Wednesday, 6<sup>th</sup> & Thursday, 7<sup>th</sup> May 2020</td>
										</tr>
										<tr>
										  <td>9</td>
										  <td>Annual Examinations 2020 (For E2 and M1)</td>
											<td>Friday, 8<sup>th</sup> May to Thursday, 21<sup>st</sup> May 2020</td>
										</tr>
										<tr>
										  <td>10</td>
										  <td>Summer Holidays begin</td>
											<td>Friday, 22<sup>nd</sup> May, 2020</td>
										</tr>
										
								  	</tbody>
								    <?php
									}else{
								  	?>
								  	<tbody>
										<tr>
										  <td>1</td>
										  <td>Standardized Class Test I (PS)</td>
										  <td>Monday, 23<sup>rd</sup> September- Friday, 27<sup>th</sup>  September , 2019 </td>
										</tr>
										<tr>
										  <td>2</td>
										  <td>Prep Leave Half –Yearly Examinations 2019</td>
										  <td>Thursday, 5<sup>th</sup> December - Friday, 6<sup>th</sup> December 2019</td>
										</tr>
										<tr>
										  <td>3</td>
										  <td>Half –Yearly Examinations 2019</td>
										  <td>Saturday, 7<sup>th</sup> December – Friday, 20<sup>th</sup> December 2019</td>
										</tr>
										<tr>
										  <td>4</td>
										  <td>Send-up Exams for M2</td>
										  <td>Monday, 3<sup>rd</sup> February- Friday, 14<sup>th</sup> February, 2020</td>
										</tr>
										<tr>
										  <td>5</td>
										  <td>Standardized Class Test II</td>
										  <td>Monday, 24<sup>th</sup> March - Monday, 30<sup>th</sup> March, 2020</td>
										</tr>
										<tr>
										  <td>6</td>
										  <td>Prep Leave -  Annual Examinations</td>
										  <td>Wednesday, 6<sup>th</sup> May - Thursday, 7<sup>th</sup> May 2020</td>
										</tr>
										<tr>
										  <td>7</td>
										  <td>Annual Examinations -  all subjects</td>
											<td>Friday, 8<sup>th</sup> May – Thursday, 21<sup>st</sup> May 2020</td>
										</tr>
										
								  	</tbody>
								  <?php } /*?> <?php	  
								  }else{
								  ?>
								  <tbody>

									<tr>
									  <td>1</td>
									  <td>Prep School Progression Tests (E2, M1 &amp; M2) - all subjects</td>
									  <td>From Monday, 15<sup>th</sup>&nbsp;October</td>
									</tr>
									<tr>
									  <td>2</td>
									  <td><strong>Prep Leave</strong> </td>
									  <td>Friday, 7<sup>th</sup> December, 2018</td>
									</tr>
									<tr>
									  <td>3</td>
									  <td>
											Prep School (E2 &amp; M1) Half Yearly Examinations - all subjects<br>
											Prep School Promotion Exams (M2) - all subjects 
									  </td>
									  <td>Monday, 10<sup>th</sup> December - Thursday, 20<sup>th</sup> December, 2018</td>
									</tr>
									<tr>
									  <td>4</td>
									  <td><strong>Prep Leave</strong></td>
									  <td>Tuesday, 14<sup>th</sup>&nbsp;May, 2019</td>
									</tr>
									<tr>
									  <td>5</td>
									  <td>
										Annual Examinations - all subjects
									  </td>                                  
									  <td>Wednesday, 15<sup>th</sup> May – Saturday, 25<sup>th</sup> May, 2019</td>
									</tr>

								  </tbody>
								  <?php } ?><?php */?>
								  <?php } elseif ($_SESSION['portal_School'] == "SSD") { ?>
								  <?php
					//if(isset($_SESSION['portal_temp_pageid']) && intval($_SESSION['portal_temp_pageid'])=="3214"){
									  
								  ?>
								  	<tbody>
										<tr>
										  <td>1</td>
										  <td>Prep Leave Half –Yearly Examinations 2019</td>
										  <td>Thursday, 5<sup>th</sup> December - Friday, 6<sup>th</sup> December 2019 </td>
										</tr>
										<tr>
										  <td>2</td>
										  <td>Half –Yearly Examinations 2019 <br><strong>(F.Sc 1 as well)</strong></td>
										  <td>Saturday, 7<sup>th</sup> December – Friday, 20<sup>th</sup> December 2019</td>
										</tr>
										<tr>
										  <td>3</td>
										  <td>Mock Examinations 2020 <br><strong>(F.Sc 1 as well)</strong></td>
										  <td>Monday, 16<sup>th</sup> March – Saturday, 28<sup>th</sup> March 2020</td>
										</tr>
										<tr>
										  <td>4</td>
										  <td><strong>F.Sc 1 Annual Examinations</strong></td>
											<td><strong>Saturday, 18<sup>th</sup> April 2020 onwards</strong></td>
										</tr>
										<tr>
										  <td>5</td>
										  <td>Prep Leave -  Annual Examinations </td>
											<td>Wednesday, 6<sup>th</sup> May - Thursday, 7<sup>th</sup> May 2020</td>
										</tr>
										<tr>
										  <td>6</td>
										  <td>Annual Examinations -  all subjects</td>
											<td>Friday, 8<sup>th</sup> May – Thursday, 21<sup>st</sup> May 2020</td>
										</tr>
										
								  	</tbody>
								  <?php /*?> <?php	  
								  }else{
								  ?>
								  <tbody>

									<tr>
									  <td>1</td>
									  <td>Half –Yearly Examinations January 2019</td>
									  <td>Monday, 7<sup>th</sup> January-Saturday, 19<sup>th</sup> January, 2019</td>
									</tr>
									<tr>
									  <td>2</td>
									  <td>Mock Examinations 2019</td>
									  <td>Monday, 18<sup>th</sup>&nbsp;March - Saturday, 30<sup>th</sup>&nbsp;March, 2019 </td>
									</tr>
									<tr>
									  <td>3</td>
									  <td>
										Annual Examinations - all subjects
									  </td>                                  
									  <td>Saturday, 18<sup>th</sup> May – Wednesday, 29<sup>th</sup> May, 2019</td>
									</tr>

								  </tbody>
								  <?php } ?><?php */?>
								  <?php } ?>
								  
								</table>
						  </div>
						  
						  <?php if ($_SESSION['portal_School'] == "PSDs") { ?>
						  
								  <p>
									  <div class="col-lg-12 col-md-12 col-sm-12 media" style="vertical-align:top;">
										<a href="notice.php?id=504" target="_parent" style="text-decoration:none;">
											<div class="row">
												<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2" style="padding-right:0;">
													<i class="fa fa-newspaper-o" style="color: #002663; font-size: 30px;"></i>
												</div>
												<div class="col-lg-11 col-md-11 col-sm-11 col-xs-10" style="font-size:18px;">
													<div>Summative Test-2 (Annual), 2019 - Date Sheet</div>
													<div style="font-size:16px;color:#818181;">&nbsp;</div>
												</div>
											</div>
										</a>
									</div>
								  
								  </p>
						  <?php } elseif ($_SESSION['portal_School'] == "SSDs") { ?>
							<p>
								  <div class="col-lg-12 col-md-12 col-sm-12 media" style="vertical-align:top;">
									<a href="notice.php?id=506" target="_parent" style="text-decoration:none;">
										<div class="row">
											<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2" style="padding-right:0;">
												<i class="fa fa-newspaper-o" style="color: #002663; font-size: 30px;"></i>
											</div>
											<div class="col-lg-11 col-md-11 col-sm-11 col-xs-10" style="font-size:18px;">
												<div>Annual Examination Senior School, May 2019 - Date Sheet</div>
												<div style="font-size:16px;color:#818181;">&nbsp;</div>
											</div>
										</div>
									</a>
								</div>

							  </p>
							
						  <?php } ?>
						
					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php include($path."rightpanel.php"); ?>
					  <!--
					  <div class="row">
						 
						 <div style="" align="center">
							 <a href="sat-centre.php"><img class="img-responsive" src="images/sat-center.jpg" style="" alt="SAT Center"></a>
						 </div>								  
						 <br/>
						 
					  </div>
					  <div class="row">
						 
						 <div style="" align="center">
							 <a href="harkness-table.php"><img class="img-responsive" src="images/harkness-table.jpg" style="" alt="Harkness Table"></a>
						 </div>								  
						 <br/>
						 
					  </div>
					  <div class="row">
						 
						 <div style="" align="center">
							 <a href="student-recognition.php"><img class="img-responsive" src="images/student-recognition.jpg" style="" alt="Student Recognition"></a>
						 </div>								  
						 <br/>
						 
					  </div>-->
					  
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

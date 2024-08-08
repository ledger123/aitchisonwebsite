<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."repositories/attendancepository.php");

$attRepo = new AttendanceRepository($dc);
//echo $_SESSION['portal_SchoolNo'];
$attendance = $attRepo->GetAttendanceBySchoolNo($_SESSION['portal_SchoolNo']);
//$attendance->PrintTable();
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Attendance"; include($path."includes.php"); ?>
	
<style>
#defaultIcon {
  position: relative;
}

/* positions header-content at the bottom of header's context */
#defaultIcon-content {
  position: absolute;
  bottom: 0;
}
.head_background{
	background-color: #026;
	color: white;
}
#attendance th,
#attendance td {
		text-align: right;
	}
	
#attendance th:nth-last-child(7),
#attendance td:nth-last-child(7) {
    text-align: left;
}
#attendance th:first-child,
#attendance td:first-child {
    text-align: center;
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
						  <p>Session 2024-25</p>
						  <br />

						  <div class="row">
							  
							  <?php if(true) { ?>
							  <p><strong></strong> Subjects and attendance will appear as soon as the session is started.<br>
<br>
</p>
							  <?php /*?><p><strong>Note:</strong> The details will be available from the new term.</p><?php */?>
							  <?php }if(true) { ?>

                              <?php /*?><p>This section shows physical attendance in the class.</p><?php */?>
							  
							 <div class="row table-responsive"> 							  	
								<table id="attendance" width="100%" border="0" cellspacing="0" cellpadding="3" class="table table-bordered jambo_table">	
									<thead>
										<tr class="head_background">
										    <th style="min-height: 60px !important; text-align: center;">Sr.</th>
										    <th style="text-align: center;">Subject</th>
										    <th style="text-align: center;">Total</th>
										    <th style="text-align: center;">Present</th>
										    <th style="text-align: center;">Absent</th>
										    <th style="text-align: center;">Leave</th>
										    <th style="text-align: center;">Study Hour</th>
										    <th style="text-align: center;">Percentage</th>
										</tr>        
									</thead>
									<tbody>
									<?php
										if ($attendance) {
											$index = 1;
											foreach ($attendance->Rows as $row) {												
										?>
										<tr>
										  <td style="min-height: 40px !important;"><?php echo $index++; ?></td>  
										  <td style="text-align: center;"><?php echo $purifier->purify($row->Subject); ?></td>
										  <td style="text-align: center;"><?php echo $purifier->purify($row->TotalDays); ?></td>
										  <td style="text-align: center;"><?php echo $purifier->purify($row->Present); ?></td>
										  <td style="text-align: center;"><?php echo $purifier->purify($row->Absent); ?></td>
										  <td style="text-align: center;"><?php echo $purifier->purify($row->Leave); ?></td>
										  <td style="text-align: center;"><?php echo $purifier->purify($row->StudyHours); ?></td>
										  <td <?php echo ($row->Percentage < 90)?' class="danger"':''; ?> style="text-align: center;"><?php echo $purifier->purify($row->Percentage); ?>%</td>
										</tr>
										
										<?php
												
											}
											
										?>
										
										<tr>
										  <td style="min-height: 40px !important;"></td>  
										  <td style="text-align: center;"><strong>Total</strong></td>
										  <td style="text-align: center;"><strong><?php $totalDays = $attendance->Compute(array("Sum"=>"TotalDays"), ""); echo $totalDays; ?></strong></td>
										  <td style="text-align: center;"><strong><?php $present = $attendance->Compute(array("Sum"=>"Present"), ""); echo $present; ?></strong></td>
										  <td style="text-align: center;"><strong><?php echo $attendance->Compute(array("Sum"=>"Absent"), ""); ?></strong></td>
										  <td style="text-align: center;"><strong><?php $leave = $attendance->Compute(array("Sum"=>"Leave"), ""); echo $attendance->Compute(array("Sum"=>"Leave"), ""); ?></strong></td>
										  <td style="text-align: center;"><strong><?php echo $attendance->Compute(array("Sum"=>"StudyHours"), ""); ?></strong></td>
										  <td style="text-align: center;"><strong><?php  if($index>1 && $totalDays > 0) echo number_format( ((($present+$leave)*100)/$totalDays), 2, '.', ''); else echo "0"; ?>%</strong></td>
										</tr>
										
										<?php
										}
									?>
										
									  </tbody>
								</table>
							 </div>
							  
							  
							  
							  <?php } ?>
						  </div>
						  
					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php //include("today-classes.php"); ?>
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

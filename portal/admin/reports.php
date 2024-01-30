<?php

$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."repositories/studentrepository.php");


/*
$sup_school  = $_SESSION['portal_sup_school'];
$sup_class	 = $_SESSION['portal_sup_class'];
$sup_section = $_SESSION['portal_sup_section'];
$sup_house	 = $_SESSION['portal_sup_house'];

*/


$schoolNos = "";
if( isset($_POST['cmdFind']) ) {
	
	$studentRepo = new StudentRepository ( $dc );

	$schoolNos = $purifier->purify( trim( $_POST['txtSchoolNo'] ) );

	$students = $studentRepo->SearchStudents( $schoolNos );
}

?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "Dashboard"; include($path."includes.php"); ?>
<style>

	#superhome table {
		width: 100%;
	}
	
	#superhome th, td {
		text-align: center;
	}
	
	#superhome td > a {
		color: #0810A3;
	}
	
	.btn {width: 100%;}
	
</style>
<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
          
            <div class="container">
				<div class="row" id="superhome">
				  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<div class="x_panel">
						
					  <div class="x_content">
						  
						  <div class="row">
							  
						  <div class="page-title">
						  	<div class="" style="float:right;"><a href="superdashboard.php" class="btn btn-primary">Dashboard</a> </div>
							<h3>Reports</h3>
							
							</div>
							  
							  <br/><br/>
							  <div class="row">
							  <div class="row col-lg-6 col-md-6 col-sm-6 col-xs-12">

								<ul style="list-style: none; font-size:18px;">
									<li><i class="fa fa-circle-o" style="font-size: 14px;"></i>&nbsp;&nbsp;&nbsp;&nbsp;<a href="rpt-portal-access-log.php">View Portal Access Log</a></li>
								</ul>

							  </div>
							  </div>
							  <br/>
							  <div class="divider-dashed"></div>

							  <br/>

							  <h4>Monthly Test System Report</h4>
							  <br/><br/>
							<form class="form-horizontal form-label-left" method="post">

								<div class="form-group">
									<label class="col-sm-3 control-label">School No</label>

									<div class="col-sm-6">
									
									<div class="input-group">
										<input type="text" id="txtSchoolNo" name="txtSchoolNo" class="form-control" value="<?php echo $schoolNos; ?>">
										<span class="input-group-btn">
											<button type="submit" name="cmdFind" class="btn btn-primary">Find</button>
										</span>
									</div>
									</div>
								</div>
								

							</form>

							<div class="divider-dashed"></div>

							<div class="table-responsive">
								<table class="table table-bordered table-hover">
									<tr style="background-color: #4267b2; color: #fff;">
										<th width="10%">School No</th>
										<th width="30%">Student Name</th>
										<th width="30%">Class</th>
										<th width="30%">Report</th>
									</tr>

									<?php
									if(isset($students) && $students->rowsCount() > 0) {

										foreach($students->Rows as $row) {

										?>
										<tr style="">
											<td width="10%"><?php echo $row->schoolNo; ?></td>
											<td width="30%"><?php echo $row->studentName; ?></td>
											<td width="30%"><?php echo $row->studing; ?></td>
											<td width="30%">
												<?php if($row->school == "SSD") { ?>
												<a href="rpt-monthly-test.php?schoolno=<?php echo $row->schoolNo; ?>" target="new">Monthly Test Report</a>
												<?php } ?>
											</td>
										</tr>
										<?php

										}
									}
									else {
									?>
										<tr>
											<td colspan="4">Student(s) not found.</td>
										</tr>
									<?php
									}
									?>

								</table>

							</div>

						  </div>
						  
					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
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

<script>

$(document).ready(function(){
	$('#txtSchoolNo').focus();
});
</script>
</html>

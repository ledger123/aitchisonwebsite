<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."examination/examinationrepository.php");

$examRepo = new ExaminationRepository($dc);

// how many rows to show per page
$recordsPerPage = 10;

$page = isset($_REQUEST['Txtg']) ? (int)$_REQUEST['Txtg'] : 0;

if($page == 0 || $page == 1) $offset = 0;
else if($page > 1) $offset = (($page -1) * $recordsPerPage);


$schoolNo = isset($_GET['schoolno']) ? (int)$_GET['schoolno'] : 0;


$data = $examRepo->TestsMarksBySchoolNo( $schoolNo, "" );

$tStudents = $data[0];
$tMonthlyTests = $data[1];

?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "Monthly Test Report - ". $schoolNo. ' '; include($path."includes.php"); ?>

<!-- Datatables -->
<link href="<?php echo isset($path)?$path:""; ?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo isset($path)?$path:""; ?>vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
	

<style>
label.error {
	color: red;
	font-weight: 500;
}

</style>

<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
        	
            <div class="container">
				<div class="row" id="examinations">
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						  
						  <div class="">
							  <div class="page-title">
								  <h3><?php echo $title; ?></h3>
							  </div>
							  
							  <div class="x_content" style="display: block;">
							  	<div style="text-align: center; ">
									  <?php
									  if($tStudents->rowsCount()) {
										  $row = $tStudents->Rows[0];

										?>
										<h4 style="color:brown;"> <?php echo $row->studentName . " (". $schoolNo. ")"; ?></h4>
										<span style="color:brown; font-weight: bold;"> <?php echo $row->studing. " ". $row->school; ?></span>
										<?php
									  } 
									?>
								  
							  	</div>
								  <br/><br/>
								  
								  
									<table id="tbl-monthly-test" class="table table-bordered table-hover">
									  <thead>
										<tr>
										  <th style="width:40px; text-align:center;">#</th>
										  <th style="width:120px;">Subject</th>
										  <th style="width:120px;">Teacher Name</th>
										  <th style="width:100px;">Date</th>
										  <th style="width:100px;">Month</th>
										  <th style="width:200px;">Test Name</th>
										  <th style="width:60px;">Obt. Marks</th>
										  <th style="width:60px;">Total Marks</th>
										  <th style="width:60px;">Percentage</th>
										</tr>
									  </thead>
									  <tbody>
									  <?php
									  if ($tMonthlyTests->rowsCount() > 0)
									  {
										  $index = $offset +1;
										  foreach($tMonthlyTests->Rows as $row)
										  {
											$style_color = "";
											if ( $row->Active == "No" ) $style_color = " style='color:darkgray;' ";
											  
									  ?>
										<tr <?php echo $style_color; ?>>
										  <th scope="row" style="text-align:center;"><?php echo $index++; ?></th>
										  <td><?php echo $row->Subject; ?></td>
										  <td><?php echo $row->CreatedBy; ?></td>
										  <td><?php echo $row->TestDate; ?></td>
										  <td><?php echo $row->TestMonth; ?></td>
										  <td><?php echo $row->TestName; ?></td>
										  <td><?php echo $row->ObtainedMarks; ?></td>
										  <td><?php echo $row->TotalMarks; ?></td>
										  <td><?php echo $row->Percentage; ?></td>
										</tr>
										<?php
											}
									   }
										?>
									  </tbody>
									</table>
								
								  
							  </div>
							</div>
						  
					  </div>
					</div>
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
	<!-- Datatables -->
	<script src="<?php echo $path; ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo $path; ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?php echo $path; ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo $path; ?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
	<script src="<?php echo $path; ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
	
<script>
	
	$(document).ready(function () {
		
		var table = $('#tbl-monthly-test').DataTable({
			dom: "Bfrtip",
			buttons: [
				'print'
			],
			"ordering": false,
            responsive: true,
			"pageLength": 20
			//"pagingType": "full_numbers",
			
		});
	});
</script>

</body>
</html>

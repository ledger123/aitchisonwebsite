<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."examination/examinationrepository.php");

$examRepo = new ExaminationRepository($dc);

// how many rows to show per page
$recordsPerPage = 10;

$page = isset($_REQUEST['Txtg']) ? (int)$_REQUEST['Txtg'] : 0;

if($page == 0 || $page == 1) $offset = 0;
else if($page > 1) $offset = (($page -1) * $recordsPerPage);

$schoolNo = $_SESSION['portal_SchoolNo'];

$data = $examRepo->TestsMarksBySchoolNo( $schoolNo );

$tStudents = $data[0];
$tMonthlyTests = $data[1];


$tMonthNames = new DataTable();

$tMonthNames->SetColumns( array("Id", "MonthName") );


date_default_timezone_set("Asia/Karachi");
for($m=1; $m<=12; ++$m){
     //echo date('F', mktime(0, 0, 0, $m, 1)).'<br>';
	$month = date('F', mktime(0, 0, 0, $m, 1));
	$tMonthNames->addRow( array($m, $month) );
}


$OptMonthNames = new ComboBox("OptMonthNames", "class='form-control col-md-5 col-xs-12'", $tMonthNames);
$OptMonthNames->valueField = "Id";
$OptMonthNames->textField = "MonthName";

$dRow = $tMonthNames->NewRow();
$dRow['Id'] = 0;
$dRow['MonthName'] = "--Select Month--";

$tMonthNames->insertRowAt($dRow, 0);


$studing = $_SESSION['portal_CurrentClass'] . $_SESSION['portal_CurrentSection'];
$tSubjects = $examRepo->GetStudentSubjects( $studing );

$dRow = $tSubjects->NewRow();
$dRow['Id'] = 0;
$dRow['Subject'] = "--Select Subject--";

$tSubjects->insertRowAt($dRow, 0);

//$tSubjects->PrintTable();

$OptSubjects = new ComboBox("OptSubjects", "class='form-control col-md-5 col-xs-12'", $tSubjects);
$OptSubjects->valueField = "Id";
$OptSubjects->textField = "Subject";

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

@media (max-width: 425px) {
    thead > tr > th {
        font-size: 12px;
    }
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
								  <h3>Monthly Test Report</h3>
							  </div>
							  
							  <div class="x_content" style="display: block;">
								  <br>

                                  <div class="table-responsive">
									<table id="tbl-monthly-test" class="table table-bordered table-hover">
									  <thead>
										<tr style="color: #FFFFFF; background-color: #07095B;">
										  <th style="width:40px; text-align:center; vertical-align:middle;">#</th>
										  <th style="width:120px; vertical-align:middle;">Subject</th>
										  <th style="width:120px; vertical-align:middle;">Teacher Name</th>
										  <th style="width:100px; vertical-align:middle;">Date</th>
										  <th style="width:100px; vertical-align:middle;">Month</th>
										  <th style="width:200px; vertical-align:middle;">Test Name</th>
										  <th style="width:60px; vertical-align:middle; text-align:center;">Percentage</th>
										</tr>
									  </thead>
									  <tbody>
									  <?php
									  if ($tMonthlyTests)
									  {
										  $index = $offset +1;
										  foreach($tMonthlyTests->Rows as $row)
										  {
											$style_color = "";
											if ( $row->Active == "No" ) $style_color = " style='color:darkgray;' ";
											  
									  ?>
										<tr <?php echo $style_color; ?>>
										  <td style="text-align:center;"><?php echo $index++; ?></td>
										  <td><?php echo $purifier->purify($row->Subject); ?></td>
										  <td><?php echo $purifier->purify($row->CreatedBy); ?></td>
										  <td><?php echo $purifier->purify($row->TestDate); ?></td>
										  <td><?php echo $purifier->purify($row->TestMonth); ?></td>
										  <td><?php echo $purifier->purify($row->TestName); ?></td>
										  <td style="text-align:right;"><?php echo $purifier->purify($row->Percentage); ?> %</td>
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
			//"pagingType": "full_numbers",
			
		});
	});
</script>

</body>
</html>

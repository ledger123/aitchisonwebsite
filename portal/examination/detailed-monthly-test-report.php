<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);


function formatMarks( $marksData ) {
	$str = "";
	$data_ = explode("||", $marksData);

	for($i = 0; $i < count($data_); $i++) {
		$str .= "<div class='trow'><div class='tcell'>".$data_[$i++]."</div><div class='tcell'>".$data_[$i++]."</div><div class='tcell'>".$data_[$i++]."</div><div class='tcell'>".$data_[$i++]."</div><div class='tcell'>".$data_[$i]."</div></div>";
	}

	return $str;
}

$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."examination/examinationrepository.php");

$examRepo = new ExaminationRepository($dc);


$tMonthNames = new DataTable();

$tMonthNames->SetColumns( array("Id", "MonthName") );


date_default_timezone_set("Asia/Karachi");
for($m=1; $m<=12; ++$m){
     //echo date('F', mktime(0, 0, 0, $m, 1)).'<br>';
	$month = date('F', mktime(0, 0, 0, $m, 1));
	$tMonthNames->addRow( array($m, $month) );

}

$_html = "";


if( true ) {

$data = $examRepo->GetTests2();
//$data->PrintTable();
//$_html .= "<table id='tbl-monthly-test' class='table table-bordered'>";

$_html .= "<thead>";
$_html .= "<tr><th style='width:10%'>School No</th><th style='width:30%'>Student Name</th><th style='width:10%'>Month</th> <th style='50%'> <div class='tbl tbl-inner'><div class='trow'><div class='tcell'>Section</div><div class='tcell'>Subject</div><div class='tcell'>Total</div><div class='tcell'>Obt</div><div class='tcell'>Percentage</div></div></div> </th></tr>";
$_html .= "</thead>";

$_html .= "<tbody>";
foreach($data->Rows as $row) {
	
	//$_html .= "<tr><td style='width:10%'>". $row->SchoolNo ."</td><td style='width:40%'>". $row->StudentName ."</td> <td style='width:50%'><div class='tbl tbl-inner'>". $row->MarksData ."</div></td></tr>";

	$_html .= "<tr>
				<td style='width:10%'>". $row->SchoolNo ."</td>
				<td style='width:30%'>". $row->StudentName ."</td>
				<td style='width:10%'>". $tMonthNames->Rows[ $row->TestMonth ]->MonthName ."</td>
				<td style='width:50%'><div class='tbl tbl-inner'>". formatMarks($row->MarksData) ."</div></td>
			  </tr>";

	//$_html .= "<tr class='' style=''><td>". $row->SchoolNo ." - " . $row->StudentName ."</td> </tr>";
}
$_html .= "</tbody>";

}



//$_html .= "</html>";



if(false) {

	$data = $examRepo->GetTests();

$tMonthlyTests = false;//$data;

$sections = $data->SelectColumn("Section", true);

sort($sections);

$_html .= "<table class='tree'>";

$rowIndex = 1;

foreach( $sections as $section ) {

$sectionData = $data->Select(array("Section"=>$section));

$trId = "treegrid-";


$_html .= "<tr class='".$trId . $rowIndex . "' style='color:#fff; background: #137fde;'><td colspan='4'><h4>".$section."</h4></td></tr>";

$sectionId = $trId. "parent-". ($rowIndex++);

$testMonth = 0;
$testId = 0;

//$_html .= "<pre>";
foreach($sectionData as $row) {

	if ($testMonth != $row['TestMonth']) {
		$testMonth = $row['TestMonth'];
		
		$_html .= "<tr class='".$trId . $rowIndex . " $sectionId'><td colspan='4'><h3>Month: ". $tMonthNames->Rows[$testMonth]->MonthName ."</h3></td></tr>";
		$monthId = $trId. "parent-". ($rowIndex++);
	}

	if ($testId != $row['Id']) {
		$testId = $row['Id'];
		$_html .= "<tr class='".$trId . $rowIndex . " $monthId'><td colspan='4'><h2>Test Name: ". $row['TestName'] ." - ". $row['TeacherFullName'] ." - ". $row['Subject'] ." - ". $row['TotalMarks']." - ". $row['TestDate'] ."</h2></td></tr>";
		$test_id = $trId. "parent-". ($rowIndex++);

		$_html .= "<tr class='".$trId . ($rowIndex++) . " $test_id'><th>School No</th><th>Obt Marks</th><th>Percentage</th><th></th></tr>";
	}

	$_html .= "<tr class='".$trId . ($rowIndex++) . " $test_id'><td>".$row['SchoolNo']."</td><td>" . $row['ObtainedMarks']."</td><td>" . $row['Percentage']."</td><td></td></tr>";

}
//$_html .= "</pre>";
$_html .= "</html>";
}

}
//echo "<pre>";
//var_dump($tTests);
//echo "</pre>";


?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "Monthly Test Report (Dummy Data)"; include($path."includes.php"); ?>

<!-- Datatables -->
<link href="<?php echo isset($path)?$path:""; ?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo isset($path)?$path:""; ?>vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">

<style>
label.error {
	color: red;
	font-weight: 500;
}

.tbl-inner { font-size:11px; }
.tbl-inner div, .tbl-inner div { padding: 4px;}

.tbl-inner div:nth-child(1){width:30%; text-align: left;}
.tbl-inner div:nth-child(2){width:40%; text-align: left;}
.tbl-inner div:nth-child(3){width:10%; text-align: right;}
.tbl-inner div:nth-child(4){width:10%; text-align: right;}
.tbl-inner div:nth-child(5){width:10%; text-align: right;}


.tbl { display:table; border:1px lightgray solid; width:100%;}
.trow { display:table-row; border:1px lightgray solid; }

.tcell {display:table-cell; border:1px lightgray solid; }

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
								  <h3><?php echo $title; ?> -Offline link</h3>
							  </div>
							  
							  <div class="x_content" style="display: block;">

							  <a href="downloadexcel.php" download class="btn btn-success">Download CSV</a>

								<table id='tbl-monthly-test' class='table table-bordered'>

									<?php if(false) 
										foreach($data->Rows as $row) 
										{
										?>


									<tr class='' style=''><td>". $row->SchoolNo ." - " . $row->StudentName ."</td> </tr>
								<?php } echo $_html; ?>
									
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
		
		//$('.tree').treegrid();

		//$('#tbl-monthly-test').DataTable();

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

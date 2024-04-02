<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."examination/teststatus.php");
include($path."examination/examinationrepository.php");

$examRepo = new ExaminationRepository($dc);

$message = "";
$response = -1;
$optActive = -1;


$id	   = isset($_GET['id'])	   ? (int)$_GET['id']	 : 0;
$TxtEditId = isset($_POST['TxtEditId']) ? (int)$_POST['TxtEditId'] : 0;


$tSections = $examRepo->GetSections ( $_SESSION['portal_sup_name'] );

$OptSections = new ComboBox("OptSections", "class='form-control col-md-7 col-xs-12'", $tSections);
$OptSections->valueField = "Id";
$OptSections->textField = "Section";


$tMonthNames = new DataTable();

$tMonthNames->SetColumns( array("Id", "MonthName") );


date_default_timezone_set("Asia/Karachi");
for($m=1; $m<=12; ++$m){
     //echo date('F', mktime(0, 0, 0, $m, 1)).'<br>';
	$month = date('F', mktime(0, 0, 0, $m, 1));
	$tMonthNames->addRow( array($m, $month) );
}


$OptMonthNames = new ComboBox("OptMonthNames", "class='form-control col-md-7 col-xs-12'", $tMonthNames);
$OptMonthNames->valueField = "Id";
$OptMonthNames->textField = "MonthName";


#debug
if (false){
	echo "<br>";
	echo "id: ". $id . "<br>";
	echo "edit id: ". $TxtEditId . "<br>";
	//exit;
}

if ( $id > 0 )
{
	$data = $examRepo->GetMonthlyTest( $id );
	//$data->PrintTable();
	
	$id				= 0;
	$TxtTestMonth 	= 0;
	$TxtTestDate	= "";
	$TxtTestName	= "";
	$TxtSection 	= "";
	$TxtSubject		= "";
	$TxtTotalMarks	= "";
	$TxtDetails		= "";
	
	if($data && $data->rowsCount() > 0)
	{
		$row = $data->Rows[0];
		
		$id				= $row->Id;
		$OptSection		= $row->TeacherClassId;
		$TxtTestMonth 	= $row->TestMonth;
		$TxtTestDate	= $row->TestDate;
		$TxtTestName	= $row->TestName;
		$TxtSection 	= $row->Section;
		$TxtSubject		= $row->Subject;
		$TxtTotalMarks	= $row->TotalMarks;
		$TxtDetails		= $row->Details;
		$optActive		= $row->Active;
		
		$OptSections->SetSelectedValue ( $OptSection );
		$OptMonthNames->SetSelectedValue ( $TxtTestMonth );
	}
	
}
if ( isset($_POST['cmdSubmit']) && $TxtEditId > 0 )
{
	
	$OptSection   		= isset($_POST['OptSections'])		? $_POST['OptSections']  	: -1;
	$OptMonthName   	= isset($_POST['OptMonthNames'])	? $_POST['OptMonthNames']  	: -1;
	$TxtTestDate		= isset($_POST['TxtTestDate'])		? $_POST['TxtTestDate'] 	: "";
	$TxtTestName		= isset($_POST['TxtTestName'])		? $_POST['TxtTestName']		: "";
	$TxtTotalMarks 	   	= isset($_POST['TxtTotalMarks'])	? $_POST['TxtTotalMarks']  	: "";
	$TxtDetails			= isset($_POST['TxtDetails'])		? $_POST['TxtDetails'] 		: "";
	$optActive		   	= isset($_POST['optActive'])		? $_POST['optActive']  	    : -1;
 	
	
	$TxtTestName	 = $purifier->purify($TxtTestName);
	$TxtDetails		 = $purifier->purify($TxtDetails);
	$TxtTestDate	 = $functions->formatDate($TxtTestDate);
	
	#create new record
	if( strlen ($TxtTestName) > 3 )
	{
		if ( !$examRepo->IsTestExist( $TxtEditId, $OptSection, $OptMonthName, $_SESSION['portal_sup_name'] ) )
		{
			//							   ($teacherClassId, $testMonth, $testDate, $testName, $totalMarks, $details)
			$response = $examRepo->UpdateTest($TxtEditId, $OptSection, $OptMonthName, $TxtTestDate, $TxtTestName, $TxtTotalMarks, $TxtDetails, TestStatus::$Pending, $optActive);
			
			if ($response > 0) {
				
				$message = "Record updated successfully.";
			}
			else
				$message = "Record not updated.";
		}
		else
		{
			$response = 0;
			$message = "This Test is already exists.";
		}
	}
	else
	{
		$response = 0;
		$message = "Test name must be atleast 4 characters long.";
	}
	
}

?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "Edit Monthly Test"; include($path."includes.php"); ?>
<style>
label.error {
	color: red;
	font-weight: 500;
}
	.glyphicon {
		padding: 0;
		background: #34495E;
	}
	
	.daterangepicker td.available:hover, .daterangepicker th.available:hover {
		background: #34495E;
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
								<br>
								  
								  <a href="monthly-tests.php" type="button" id="cmdAddNew" name="cmdAddNew" class="btn btn-success">Monthly Tests List</a>
								  
								  <form id="formNew" action="monthly-test-edit.php<?php if($id>0)echo "?id=".$id;?>" method="post" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
								  
									<div class="form-group">
									<?php if($response == 0) { ?>
									  <div class="alert alert-danger">
										<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
										<?php echo $message; ?>
									  </div>
									  <?php } else if($response == 1) { ?>
										<div class="alert alert-success">
											<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
											<?php echo $message; ?>
										</div>
									  <?php } ?>
									 </div>
									 <input type="hidden" id="id" name="id" />
									 <input type="hidden" id="mode" name="mode" value="<?php echo $mode; ?>" />
									 <input type="hidden" id="TxtEditId" name="TxtEditId" value="<?php echo $id; ?>" />
									 <input type="hidden" id="Txtg" name="Txtg" value="<?php echo $page; ?>" />
									  
									 
									 <section id="secNew">
									 
									  <div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="OptSections">Section</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<?php $OptSections->Bind(); ?>
										  
										</div>
									  </div>
										 
									  <div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="OptMonthNames">Month</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										  <?php $OptMonthNames->Bind(); ?>
										</div>
									  </div>
										 
									 <div class="form-group">
										<label for="TxtTestDate" class="control-label col-md-3 col-sm-3 col-xs-12">Test Date</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										  <input id="TxtTestDate" class="date-picker form-control col-md-7 col-xs-12" type="text" required="required" name="TxtTestDate" value="<?php echo $functions->formatDate($TxtTestDate, "m/d/Y"); ?>">
										</div>
									  </div>
									 
									  <div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtTestName">Name</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										  <input type="text" id="TxtTestName" name="TxtTestName" required="required" class="form-control col-md-7 col-xs-12" maxlength="100" value="<?php echo htmlentities(stripslashes(utf8_decode($TxtTestName))); ?>">
										</div>
									  </div>
										 
									 <div class="form-group">
										<label for="TxtTotalMarks" class="control-label col-md-3 col-sm-3 col-xs-12">Total Marks</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										  <input id="TxtTotalMarks" class="form-control col-md-7 col-xs-12" type="text" required="required" name="TxtTotalMarks" data-parsley-id="9" value="<?php echo htmlentities(stripslashes(utf8_decode($TxtTotalMarks))); ?>">
										</div>
									  </div>
									 
									  <div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtDetails">Details</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										  <input type="text" id="TxtDetails" name="TxtDetails" required="required" class="form-control col-md-7 col-xs-12" maxlength="300" value="<?php echo htmlentities(stripslashes(utf8_decode($TxtDetails))); ?>">
										</div>
									  </div>
									  <div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Active <span class="required">*</span></label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										  <div class="btn-group" data-toggle="buttons">
											<label class="btn btn-default<?php if($optActive==1) echo " active "; ?>">
											  <input type="radio" id="optActive" name="optActive" value="1"
													  required<?php if($optActive==1) echo " checked "; ?>> &nbsp; Yes &nbsp;
											</label>
											<label class="btn btn-default<?php if($optActive==0) echo " active "; ?>">
											  <input type="radio" id="optActive" name="optActive" value="0" 
													 required<?php if($optActive==0) echo " checked "; ?>> &nbsp; No &nbsp;
											</label>
										  </div>
										  <label id="lblActive" class="error" >&nbsp;</label>
										</div>
									  </div>
								  <div class="ln_solid"></div>
								  <div class="form-group">
									<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
									  <button type="submit" id="cmdSubmit" name="cmdSubmit" class="btn btn-success">Update</button>
									  <button type="button" id="cmdCancel" name="cmdCancel" class="btn btn-primary">Cancel</button>
									</div>
								  </div>

									
								</section>
								  
								  
								  
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
	
	<script src="<?php echo $path; ?>js/jquery-validation/jquery.validate.min.js"></script>

</body>
	
<script>
	
	$(document).ready(function () {
		
		$('#TxtTestDate').daterangepicker({
			singleDatePicker: true,
			calender_style: "picker_4"
			}, function(start, end, label) {
			  //console.log(start.toISOString(), end.toISOString(), label);
		});
		
		
		$('#cmdCancel').click(function(){
			location.href = "monthly-tests.php"
		});
		
		$('#cmdSubmit').click(function(){
			
			var error = false;
			$('#lblShow').text("");
			$('#lblActive').text("");
			
			if ($('#TxtTestName').val() == "") {
				alert("Please enter Test Name.");
				$('#TxtTestName').focus();
				return false;
			}
			
			if ($('#TxtTestDate').val() == "") {
				alert("Please enter Test Date.");
				$('#TxtTestDate').focus();
				return false;
			}
			
			if ($('input[name="optActive"]:checked').length == 0) {
			//if ($('#optActive').is(':checked') == false) {
				alert("Please select active option.");
				return false;
				/*$('#lblActive').text("Please select active option.");
				$('#lblActive').css("display") == "inherit"
				error = true;*/
			}
			
			return true;
			
		});
	});
	
</script>
	
		
</html>

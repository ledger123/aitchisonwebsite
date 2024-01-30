<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."accounts/syllabusrepository.php");

$syllabusRepo = new SyllabusRepository($dc);

$message = "";
$response = -1;
$TxtTitle = "";
$TxtSyllabusDate = "";
$optShow = -1;
$optActive = -1;
$sectionNew = false;
$sectionView = true;

// how many rows to show per page
$recordsPerPage = 10;

$page = isset($_POST['Txtg']) ? (int)$_POST['Txtg'] : 0;

if($page == 0 || $page == 1) $offset = 0;
else if($page > 1) $offset = (($page -1) * $recordsPerPage);

$id	   = isset($_POST['id'])	   ? (int)$_POST['id']	 : 0;
$mode  = isset($_POST['mode'])  ? $_POST['mode']	 	 : "";
$TxtEditId = isset($_POST['TxtEditId']) ? (int)$_POST['TxtEditId'] : 0;

$sectionNew = true;


#debug
if (false){
	echo "<br>";
	echo "id: ". $id . "<br>";
	echo "edit id: ". $TxtEditId . "<br>";
	//exit;
}

if ( $id > 0 && $TxtEditId == 0 )
{
	$data = $syllabusRepo->Get( $id );
	//$data->PrintTable();
	
	$id				 = 0;
	$TxtTitle 	   	 = "";
	$TxtSyllabusDate = "";
	$optActive		 = -1;
	
	if($data && $data->rowsCount() > 0)
	{
		$row = $data->Rows[0];
		
		$id				 = $row->Id;
		$TxtTitle 	   	 = $row->Title;
		$TxtSyllabusDate = $row->SyllabusDate;
		$optActive		 = $row->Active;
		
		//$optActive = $optActive == "Yes" ? 1 : 0;
		
		$sectionNew = true;
		
	}
	
}
elseif ( $id == 0 && $TxtEditId > 0 )
{
	$TxtTitle 	   		= isset($_POST['TxtTitle'])			? $_POST['TxtTitle']  	    : "";
	$TxtSyllabusDate	= isset($_POST['TxtSyllabusDate'])	? $_POST['TxtSyllabusDate'] : "";
	$optActive		   	= isset($_POST['optActive'])		? $_POST['optActive']  	    : -1;
 	
	
	$TxtTitle		 = $purifier->purify($TxtTitle);
	$TxtSyllabusDate = $functions->formatDate($TxtSyllabusDate);
	
	
	#updating
	if( $TxtEditId > 0 && strlen ($TxtTitle) > 3 )
	{
		if ( true || !$syllabusRepo->IsNodeExist( $TxtEditId, $TxtNode ) )
		{
			//								($id, $title, $syllabusDate, $active, $userId)
			$response = $syllabusRepo->Update($TxtEditId, $TxtTitle, $TxtSyllabusDate, $optActive, USER_ID);
			
			if ($response > 0)
				$message = "Record updated successfully.";
			else
				$message = "Record not updated.";
		}
		else
		{
			$response = 0;
			$message = "This news heading already exists.";
		}
	}
	
	
	if ($response < 1) {
		$sectionNew = true;
		$sectionView = false;
	}
	else {
		$id 			 = "0";
		$TxtTitle		 = "";
		$TxtSyllabusDate = "";
		$optActive		 = -1;
		
		$TxtEditId		 = "0";
		
	}
	
	unset($_SERVER['QUERY_STRING']);
}
elseif ( isset($_POST['cmdSubmit']) && $id == 0 && $TxtEditId == 0 )
{
	
	$TxtTitle 	   		= isset($_POST['TxtTitle'])			? $_POST['TxtTitle']  	    : "";
	$TxtSyllabusDate	= isset($_POST['TxtSyllabusDate'])	? $_POST['TxtSyllabusDate'] : "";
	$optActive		   	= isset($_POST['optActive'])		? $_POST['optActive']  	    : -1;
 	
	
	$TxtTitle    = $purifier->purify($TxtTitle);
	$TxtSyllabusDate = $functions->formatDate($TxtSyllabusDate);
	
	#create new record
	if( strlen ($TxtTitle) > 3 )
	{
		if ( true || !$syllabusRepo->IsNodeExist(0, $TxtNode) )
		{
			//								($parentId, $level, $title, $node, $address, $icon, $displayOrder, $show, $active)
			$response = $syllabusRepo->Save($TxtTitle, $TxtSyllabusDate, $optActive, USER_ID);
			
			if ($response > 0)
				$message = "Record saved successfully.";
			else
				$message = "Record not saved.";
		}
		else
		{
			$response = 0;
			$message = "This Node already exists.";
		}
	}
	else
	{
		$message = "Node is invalid.";
	}
	
	
	
	if ($response < 1) {
		$sectionNew = true;
		$sectionView = false;
	}
	else {
		$id 			 = "0";
		$TxtTitle		 = "";
		$TxtSyllabusDate = "";
		$optActive		 = -1;
		
	}
	
}

?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "New Syllabus"; include($path."includes.php"); ?>
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
								<br>
								  
								  <a href="syllabus-list.php" type="button" id="cmdAddNew" name="cmdAddNew" class="btn btn-success">Syllabus List</a>
								  
								  <form id="formNew" action="add-syllabus" method="post" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
								  
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
									  
									 <?php if($sectionNew) { ?>
									 <section id="secNew">
									 
									 <div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtTitle">Title <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										  <input type="text" id="TxtTitle" name="TxtTitle" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo htmlentities(stripslashes(utf8_decode($TxtTitle))); ?>">
										</div>
									  </div>
									 
									 <div class="form-group">
										<label for="TxtSyllabusDate" class="control-label col-md-3 col-sm-3 col-xs-12">Date <span class="required">*</span></label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										  <input id="TxtSyllabusDate" class="form-control col-md-7 col-xs-12" type="text" required="required" name="TxtSyllabusDate" data-parsley-id="9" value="<?php echo $functions->formatDate($TxtSyllabusDate, "m/d/Y"); ?>">
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
									  <button type="submit" id="cmdSubmit" name="cmdSubmit" class="btn btn-success">Submit</button>
									  <button type="button" id="cmdCancel" name="cmdCancel" class="btn btn-primary">Cancel</button>
									</div>
								  </div>

									
								</section>
								  
								  <?php } ?>
								  
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

<script>
	
	$(document).ready(function () {

		$('#TxtSyllabusDate').daterangepicker({
			singleDatePicker: true,
			calender_style: "picker_4"
			}, function(start, end, label) {
			  //console.log(start.toISOString(), end.toISOString(), label);
		});
		

		$('#cmdCancel').click(function(){
			location.href = "syllabus-list.php"
		});
		
		$('#cmdSubmit').click(function(){
			
			var error = false;
			$('#lblShow').text("");
			$('#lblActive').text("");
			
			if ($('#TxtTitle').val() == "") {
				alert("Please enter page title.");
				$('#TxtTitle').focus();
				return false;
			}
			
			if ($('#TxtSyllabusDate').val() == "") {
				alert("Please enter syllabus date.");
				$('#TxtSyllabusDate').focus();
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
	
</body>
</html>

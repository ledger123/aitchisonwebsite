<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."sports/calendarrepository.php");

$calendarRepo = new CalendarRepository($dc);

$message = "";
$response = -1;
$optShow = -1;
$optActive = -1;
$sectionNew = false;
$sectionView = true;

$TxtTitle = '';
$TxtContentDate = '';
$TxtSubTab = '';
$TxtContent = '';

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
	$data = $calendarRepo->Get( $id );
	//$data->PrintTable();
	
	$id				 = 0;
	$TxtTitle 	   	 = "";
	$ContentDate 	 = "";
	$TxtTab		 	 = "";
	$TxtSubTab	 	 = "";
	$TxtContent	 	 = "";
	$optActive		 = -1;
	
	if($data && $data->rowsCount() > 0)
	{
		$row = $data->Rows[0];
		
		$id				 = $row->Id;
		$TxtTitle 	   	 = $row->Title;
		$TxtTab 	   	 = $row->Tab;
		$TxtSubTab 	   	 = $row->SubTab;
		$TxtContentDate  = $row->ContentDate;
		$TxtContent		 = $row->Content;
		$optActive		 = $row->Active;
		
	}
	
}
elseif ( $id == 0 && $TxtEditId > 0 )
{
	$TxtTitle 	   	= isset($_POST['TxtTitle'])			? $_POST['TxtTitle']  		: "";
	$ContentDate	= isset($_POST['TxtContentDate'])	? $_POST['TxtContentDate']  : "";
	$TxtTab			= isset($_POST['OptTab'])			? $_POST['OptTab'] 			: "";
	$TxtSubTab		= isset($_POST['TxtSubTab'])		? $_POST['TxtSubTab'] 		: "";
	$TxtContent		= isset($_POST['TxtContents'])		? $_POST['TxtContents'] 	: "";
	$optActive		= isset($_POST['optActive'])		? $_POST['optActive']  		: -1;
 	
	
	$TxtTitle	 = $purifier->purify($TxtTitle);
	$TxtTab		 = $purifier->purify($TxtTab);
	$TxtSubTab	 = $purifier->purify($TxtSubTab);
	$ContentDate = $functions->formatDate($ContentDate);
	
	$TxtContent   = $functions->placeQuote($TxtContent);
	
	#updating
	if( $TxtEditId > 0 && strlen ($TxtTitle) > 3 )
	{
		if ( true || !$calendarRepo->IsNodeExist( $TxtEditId, $TxtNode ) )
		{
			//								($id, $title, $contentDate, $tab, $content, $active, $userId)
			$response = $calendarRepo->Update($TxtEditId, $TxtTitle, $ContentDate, $TxtTab, $TxtSubTab, $TxtContent, $optActive, USER_ID);
			
			if ($response > 0) {
				$message = "Record updated successfully.";
				
				header('Location: sports-calendar-list.php');
			}
			else
				$message = "Record not updated.";
		}
		else
		{
			$response = 0;
			$message = "This title already exists.";
		}
	}
	
}
elseif ( isset($_POST['cmdSubmit']) && $id == 0 && $TxtEditId == 0 )
{
	
	$TxtTitle 	   	= isset($_POST['TxtTitle'])			? $_POST['TxtTitle']  		: "";
	$ContentDate	= isset($_POST['TxtContentDate'])	? $_POST['TxtContentDate']  : "";
	$TxtTab			= isset($_POST['OptTab'])			? $_POST['OptTab'] 			: "";
	$TxtSubTab		= isset($_POST['TxtSubTab'])		? $_POST['TxtSubTab'] 		: "";
	$TxtContent		= isset($_POST['TxtContents'])		? $_POST['TxtContents'] 	: "";
	$optActive		= isset($_POST['optActive'])		? $_POST['optActive']  		: -1;
 	
	
	$TxtTitle	 = $purifier->purify($TxtTitle);
	$TxtTab		 = $purifier->purify($TxtTab);
	$TxtSubTab	 = $purifier->purify($TxtSubTab);
	$ContentDate = $functions->formatDate($ContentDate);
	
	$TxtContent   = $functions->placeQuote($TxtContent);
	
	#create new record
	if( strlen ($TxtTitle) > 3 )
	{
		if ( true || !$calendarRepo->IsNodeExist(0, $TxtNode) )
		{
			//								($title, $contentDate, $tab, $content, $active, $userId)
			$response = $calendarRepo->Save($TxtTitle, $ContentDate, $TxtTab, $TxtSubTab, $TxtContent, $optActive, USER_ID);
			
			if ($response > 0) {
				$message = "Record saved successfully.";
				header('Location: sports-calendar-list.php');
			}
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
	
}

$tTab = new DataTable();
$tTab->SetColumns( array("Id", "Value") );
$tTab->addRow( array("Term Wise", "Term Wise") );
$tTab->addRow( array("Weekly", "Weekly") );
$tTab->addRow( array("Weekly After School", "Weekly After School")  );

$OptTab = new ComboBox("OptTab", "class='form-control col-md-7 col-xs-12' required='required'", $tTab);
$OptTab->valueField = "Id";
$OptTab->textField = "Value";

if( isset($TxtTab) && $TxtTab!="") $OptTab->SetSelectedValue($TxtTab);

?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "Add New Sports Calendar"; include($path."includes.php"); ?>
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
							  
							  <a href="sports-calendar-list.php" class="btn btn-success">Back to List</a>
							  <div class="x_content" style="display: block;">
								<br>
								  <form id="formNew" action="sports-calendar-add.php" method="post" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
								  
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
										<label for="TxtContentDate" class="control-label col-md-3 col-sm-3 col-xs-12">Date <span class="required">*</span></label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										  <input id="TxtContentDate" class="form-control col-md-7 col-xs-12" type="text" required="required" name="TxtContentDate" data-parsley-id="9" value="<?php echo $functions->formatDate($TxtContentDate, "m/d/Y"); ?>">
										</div>
									  </div>
									  
									 <div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtTab">Tab <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										  
											<?php $OptTab->Bind(); ?>
											
										</div>
									  </div>
										 
									
									 <div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtSubTab">Sub Tab <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										  <input type="text" id="TxtSubTab" name="TxtSubTab" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo htmlentities(stripslashes(utf8_decode($TxtSubTab))); ?>">
										</div>
									  </div>


									  
									 <div class="form-group">
										<label for="ContentDate" class="control-label col-md-3 col-sm-3 col-xs-12">Contents <span class="required">*</span></label>
										<div class="StepTitle col-md-6 col-sm-6 col-xs-12">
										  
										  <textarea name="TxtContents" id="TxtContents" class="form-control col-md-7 col-xs-12" rows="10" cols="80">
											<?php echo $functions->replaceQuote($TxtContent); ?>
											</textarea>
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
	<script src="<?php echo $path; ?>vendors/ckeditor/ckeditor.js"></script>
    <script src="<?php echo $path; ?>vendors/ckeditor/config.js"></script>

<script>
	
	$(document).ready(function () {
		
	var cktoolbar = [
			// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
			{ name: 'document', items: [ 'Source', '-', 'Save', 'DocProps','Preview','Print' ] },	
			// Defines toolbar group without name.
			[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],	
			{ name: 'forms', items : [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Link', 'Button', 'ImageButton',
					'HiddenField', 'Table' ] },		
			'/',	// Line break - next group will be placed in new line.
			{ name: 'basicstyles', items: [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
			{ name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
			{ name: 'colors', items : [ 'TextColor','BGColor' ] },
			{ name: 'tools', items : [ 'Maximize', 'ShowBlocks','-','About' ] }
		];
	
		
	CKEDITOR.editorConfig = function( config )
	{
		config.allowedContent = true;
	    config.removeFormatAttributes = '';
		//config.FullPage = false;
		//config.forcePasteAsPlainText = true;
	};
	
	
	/*if( $('#TxtContents').length > 0 )
	CKEDITOR.replace( 'TxtContents', {
		extraAllowedContent: '*[id,role,img,align,video,source](*){*};img[src,width,height,alt,title];video[width,autoplay,controls];source[src,type];ol;li',
		toolbar: cktoolbar
	});
	*/
		
		$('#ContentDate').daterangepicker({
			singleDatePicker: true,
			calender_style: "picker_4"
			}, function(start, end, label) {
			  //console.log(start.toISOString(), end.toISOString(), label);
		});
		

		$('#cmdCancel').click(function(){
			location.href = "sports-calendar-list.php"
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
			
			if ($('#ContentDate').val() == "") {
				alert("Please enter date.");
				$('#ContentDate').focus();
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

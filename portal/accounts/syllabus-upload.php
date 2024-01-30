<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."accounts/syllabusrepository.php");

$accountsRepo = new SyllabusRepository($dc);

$message = "";
$response = -1;
$optShow = -1;
$optActive = -1;
$sectionNew = false;
$sectionView = true;

// how many rows to show per page
$recordsPerPage = 10;

$page = isset($_REQUEST['Txtg']) ? (int)$_REQUEST['Txtg'] : 0;

if($page == 0 || $page == 1) $offset = 0;
else if($page > 1) $offset = (($page -1) * $recordsPerPage);

$id	   = isset($_REQUEST['id'])	   ? (int)$_REQUEST['id']	 : 0;
$mode  = isset($_REQUEST['mode'])  ? $_REQUEST['mode']	 	 : "";
$TxtEditId = isset($_REQUEST['TxtEditId']) ? (int)$_REQUEST['TxtEditId'] : 0;


if (isset($_POST['cmdAddNew'])) {
	$sectionNew = true;
	$sectionView = false;
}
elseif (isset($_POST['cmdSubmit'])) {
	
}
elseif (isset($_POST['cmdCancel'])) {
	$sectionNew = false;
	$sectionView = true;
}

#debug
if (false){
	echo "<br>";
	echo "id: ". $id . "<br>";
	echo "edit id: ". $TxtEditId . "<br>";
}

if ( $id > 0 && $TxtEditId == 0 )
{
	$data = $accountsRepo->GetNavigationTree( $id, 0, 1 );
	$nodes = $data[1];
	
	$parentId			= 0;
	$TxtLevel	 	    = "";
	$TxtTitle 	   		= "";
	$TxtNode	   		= "";
	$TxtAddress	   		= "";
	$TxtIcon	   		= "";
	$TxtDisplayOrder 	= "";
	$optShow	   		= -1;
	$optActive		   	= -1;
	
	if($nodes && $nodes->rowsCount() > 0)
	{
		$row = $nodes->Rows[0];
		
		$parentId			= $row->ParentId;
		$TxtLevel	 	    = $row->Level;
		$TxtTitle 	   		= $row->Title;
		$TxtNode	   		= $row->Node;
		$TxtAddress	   		= $row->Address;
		$TxtIcon	   		= $row->Icon;
		$TxtDisplayOrder 	= $row->DisplayOrder;
		$optShow	   		= $row->Show;
		$optActive		   	= $row->Active;
		
		$optShow   = $optShow == "Yes"   ? 1 : 0;
		$optActive = $optActive == "Yes" ? 1 : 0;
		
		$sectionNew = true;
		$sectionView = false;
		
	}
	
}
elseif ( $id == 0 && $TxtEditId > 0 )
{
	$parentId			= isset($_POST['optParents'])		? $_POST['optParents']		: 0;
	$TxtLevel	 	    = $parentId == 0					? 1							: 2;
	$TxtTitle 	   		= isset($_POST['TxtTitle'])			? $_POST['TxtTitle']  	    : "";
	$TxtNode	   		= isset($_POST['TxtNode'])			? $_POST['TxtNode']  	    : "";
	$TxtAddress	   		= isset($_POST['TxtAddress'])		? $_POST['TxtAddress'] 	    : "";
	$TxtIcon	   		= isset($_POST['TxtIcon'])			? $_POST['TxtIcon']  	    : "";
	$TxtDisplayOrder 	= isset($_POST['TxtDisplayOrder'])	? $_POST['TxtDisplayOrder'] : "";
	$optShow	   		= isset($_POST['optShow'])			? $_POST['optShow']  	    : -1;
	$optActive		   	= isset($_POST['optActive'])		? $_POST['optActive']  	    : -1;
 	
	
	$TxtTitle    = $purifier->purify($TxtTitle);
	$TxtNode = $purifier->purify($TxtNode);
	
	//echo "ChkDefaultIcon: ".$ChkDefaultIcon."<br />";
	
	#updating
	if( $TxtEditId > 0 && strlen ($TxtNode) > 3 )
	{
		if ( !$accountsRepo->IsNodeExist( $TxtEditId, $TxtNode ) )
		{
			//								($id, $parentId, $level, $title, $node, $address, $icon, $displayOrder, $show, $active)
			$response = $accountsRepo->UpdateNode($TxtEditId, $parentId, $TxtLevel, $TxtTitle, $TxtNode, $TxtAddress, $TxtIcon, $TxtDisplayOrder, $optShow, $optActive);
			
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
		$parentId		 = "0";
		$TxtTitle		 = "";
		$TxtNode		 = "";
		$TxtAddress		 = "";
		$TxtIcon		 = "";
		$TxtDisplayOrder = "";
		$optShow		 = -1;
		$optActive		 = -1;
		
		$TxtEditId		 = "0";
		
	}
	
	unset($_SERVER['QUERY_STRING']);
}
elseif ( isset($_POST['cmdSubmit']) && $id == 0 && $TxtEditId == 0 )
{
	
 	$parentId			= isset($_POST['optParents'])		? $_POST['optParents']		: 0;
	$TxtLevel	 	    = $parentId == 0					? 1							: 2;
	$TxtTitle 	   		= isset($_POST['TxtTitle'])			? $_POST['TxtTitle']  	    : "";
	$TxtNode	   		= isset($_POST['TxtNode'])			? $_POST['TxtNode']  	    : "";
	$TxtAddress	   		= isset($_POST['TxtAddress'])		? $_POST['TxtAddress'] 	    : "";
	$TxtIcon	   		= isset($_POST['TxtIcon'])			? $_POST['TxtIcon']  	    : "";
	$TxtDisplayOrder 	= isset($_POST['TxtDisplayOrder'])	? $_POST['TxtDisplayOrder'] : "";
	$optShow	   		= isset($_POST['optShow'])			? $_POST['optShow']  	    : -1;
	$optActive		   	= isset($_POST['optActive'])		? $_POST['optActive']  	    : -1;
 	
	
	$TxtTitle    = $purifier->purify($TxtTitle);
	$TxtNode = $purifier->purify($TxtNode);
	
	#create new record
	if( strlen ($TxtNode) > 3 )
	{
		if ( !$accountsRepo->IsNodeExist(0, $TxtNode) )
		{
			//								($parentId, $level, $title, $node, $address, $icon, $displayOrder, $show, $active)
			$response = $accountsRepo->SaveNode($parentId, $TxtLevel, $TxtTitle, $TxtNode, $TxtAddress, $TxtIcon, $TxtDisplayOrder, $optShow, $optActive);
			
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
		$parentId		 = "0";
		$TxtTitle		 = "";
		$TxtNode		 = "";
		$TxtAddress		 = "";
		$TxtIcon		 = "";
		$TxtDisplayOrder = "";
		$optShow		 = -1;
		$optActive		 = -1;
		
	}
	
}



$tParents = $accountsRepo->GetTreeParents();

$row = $tParents->NewRow();
$row["Id"] = 0;
$row["Node"] = "";

$tParents->insertRowAt($row, 0);

$optParents = new ComboBox("optParents", 'class="form-control col-md-7 col-xs-12"', $tParents);

$optParents->valueField = "Id";
$optParents->textField = "Node";

$optParents->SetSelectedValue($parentId);


$data = $accountsRepo->GetNavigationTree(0, $offset, $recordsPerPage);

$totalRecords = $data[0];
$tTree = $data[1];

?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "Upload Syllabus"; include($path."includes.php"); ?>
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
						  
						  <div class="x_panel">
							  <div class="page-title">
								  <h3><?php echo $title; ?></h3>
							  </div>
							  
							  <div class="x_content" style="display: block;">
								<br>
								  <form id="formNew" action="navigation-tree.php" method="post" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
								  
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
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Parent <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">

											<?php $optParents->Bind(); ?>
										</div>
									  </div>
									 <div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtTitle">Title <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										  <input type="text" id="TxtTitle" name="TxtTitle" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo htmlentities(stripslashes(utf8_decode($TxtTitle))); ?>">
										</div>
									  </div>
									 
									 <div class="form-group">
										<label for="TxtNode" class="control-label col-md-3 col-sm-3 col-xs-12">Node <span class="required">*</span></label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										  <input id="TxtNode" class="form-control col-md-7 col-xs-12" type="text" required="required" name="TxtNode" data-parsley-id="9" value="<?php echo htmlentities(stripslashes(utf8_decode($TxtNode))); ?>">
										</div>
									  </div>
									 <div class="form-group">
										<label for="TxtAddress" class="control-label col-md-3 col-sm-3 col-xs-12">Url <span class="required">*</span></label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										  <input id="TxtAddress" class="form-control col-md-7 col-xs-12" type="text" name="TxtAddress" data-parsley-id="9" value="<?php echo htmlentities(stripslashes(utf8_decode($TxtAddress))); ?>">
										</div>
									  </div>
									 
									 <div class="form-group">
										<label for="TxtIcon" class="control-label col-md-3 col-sm-3 col-xs-12">Icon </label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										  <input id="TxtIcon" class="form-control col-md-7 col-xs-12" type="text" name="TxtIcon" data-parsley-id="9" value="<?php echo htmlentities(stripslashes(utf8_decode($TxtIcon))); ?>">
										</div>
									  </div>
									 <div class="form-group">
										<label for="TxtDisplayOrder" class="control-label col-md-3 col-sm-3 col-xs-12">Display Order <span class="required">*</span> </label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										  <input id="TxtDisplayOrder" class="form-control col-md-7 col-xs-12" type="text" name="TxtDisplayOrder" data-parsley-id="9" list="dOrder" value="<?php echo htmlentities(stripslashes(utf8_decode($TxtDisplayOrder))); ?>">
											<datalist id="dOrder">
												<?php for($i=1;$i<=10;) { ?>
												<option value="<?php echo $i; ?>"><?php echo $i++; ?></option>
												<?php } ?>
											</datalist>
										</div>
									  </div>
									 
									 <div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Show <span class="required">*</span></label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										  <div class="btn-group" data-toggle="buttons">
											<label class="btn btn-default<?php if($optShow==1) echo " active "; ?>">
											  <input type="radio" id="optShow" name="optShow" value="1"
													 required<?php if($optShow==1) echo " checked "; ?>> &nbsp; Yes &nbsp;
											</label>
											<label class="btn btn-default<?php if($optShow==0) echo " active "; ?>">
											  <input type="radio" id="optShow" name="optShow" value="0"
													 required<?php if($optShow==0) echo " checked "; ?>> &nbsp; No &nbsp;
											</label>
										  </div>
										  <label id="lblShow" class="error">&nbsp;</label>
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
									  <button type="submit" id="cmdCancel" name="cmdCancel" class="btn btn-primary">Cancel</button>
									</div>
								  </div>

									
								</section>
								  <?php } else if($sectionView) { ?>
								  
								<section id="secView">
									
									<button type="submit" id="cmdAddNew" name="cmdAddNew" class="btn btn-success">Add New</button>
									
									<table class="table table-bordered table-hover">
									  <thead>
										<tr>
										  <th style="width:40px; text-align:center;">#</th>
										  <th style="width:110px;">Parent</th>
										  <th style="width:100px;">Title </th>
										  <th style="width:100px;">Node</th>
										  <th style="width:100px;">Url</th>
										  <th style="width:70px;">Icon</th>
										  <th style="width:60px;">Order</th>
										  <th style="width:60px;">Show</th>
										  <th style="width:60px;">Active</th>
										  <th style="width:60px;">Edit</th>
										</tr>
									  </thead>
									  <tbody>
									  <?php
									  if ($tTree)
									  {
										  $index = $offset +1;
										  foreach($tTree->Rows as $row)
										  {
											  $style = "";
											  if ($row->Parent == $row->Node){
												  $style = " style='background-color: #e6f9e2; font-weight: bold;'";
											  }
									  ?>
										<tr<?php echo $style; ?>>
										  <th scope="row" style="text-align:center;"><?php echo $index++; ?></th>
										  <td><?php echo $row->Parent; ?></td>
										  <td><?php echo $row->Title; ?></td>
										  <td><?php echo $row->Node; ?></td>
										  <td><?php echo $row->Address; ?></td>
										  <td><?php echo $row->Icon; ?></td>
										  <td><?php echo $row->DisplayOrder; ?></td>
										  <td><?php echo $row->Show; ?></td>
										  <td><?php echo $row->Active; ?></td>
										  <td style="background:#ecf0f1;"><a href="#" onclick="javascript:onEdit(<?php echo $row->Id.",".$page;?>)">Edit</a></td>
										</tr>
										<?php
											}
									   }
										?>

										<tr style='background-color:#F3F3F8;border-bottom:1px solid lightgray;border-left:1px solid gray;'>
											<td colspan="10">
											<?php
												include("../paging.php");
												$url = $portalDomainName . "accounts/navigation-tree.php";
												$newsId = $id > 0 ? (int)$id : (int)$TxtEditId;
												Paging::Draw($page, $totalRecords, $recordsPerPage, $url, (int)$newsId);
											?>
											</td>
										</tr>
									  </tbody>
									</table>
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

		$('#cmdCancel').click(function(){
			$('#formNew').submit();
		});
		
		$('#cmdSubmit').click(function(){
			/*
			//alert("ok");
			$('#formNew').validate({ // initialize the plugin
				
				rules: {
					TxtTitle: {
						required: true,
						minlength: 4
					},
					TxtNode: {
						required: true,
						minlength: 4
					},
					TxtAddress: {
						required: true,
						minlength: 7
					},
					TxtDisplayOrder: {
						required: true,
						minlength: 1
					}
				},
				messages: {
					TxtTitle: "Please enter page title.",
					TxtNode: "Please enter node.",
					TxtAddress: {
						required: "Please enter a page Url.",
						//minlength: "Your username must consist of at least 2 characters"
					},
					TxtDisplayOrder: "Please enter page display order."
					
					//optShow: "Please select show option.",
					//optActive: "Please select active option."
				},
				submitHandler: function (form) { // for demo
					
					//alert('valid form submitted'); // for demo
					return false; // for demo
				}
			});
			*/
			
			var error = false;
			$('#lblShow').text("");
			$('#lblActive').text("");
			
			if ($('#TxtTitle').val() == "") {
				alert("Please enter page title.");
				$('#TxtTitle').focus();
				return false;
			}
			
			if ($('#TxtNode').val() == "") {
				alert("Please enter page node.");
				$('#TxtNode').focus();
				return false;
			}
			
			
			if ($('#TxtAddress').val() == "") {
				alert("Please enter a page Url.");
				$('#TxtAddress').focus();
				return false;
			}
			
			if ($('#TxtDisplayOrder').val() == "") {
				alert("Please enter page display order.");
				$('#TxtDisplayOrder').focus();
				return false;
			}
			
			if ($('input[name="optShow"]:checked').length == 0) {
			//if($('#optShow').is(':checked') == false) {
				alert("Please select show option.");
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
	
	
function onEdit(id,g)
{
	$("#id").val(id);
	$("#TxtEditId").val("0");
	$("#Txtg").val(g);
	document.forms["formNew"].submit();
}

function onPaging(g,id)
{
	$("#id").val(id);
	$("#TxtEditId").val("0");
	$("#Txtg").val(g);
	document.forms["formNew"].submit();
}

</script>
	
</body>
</html>

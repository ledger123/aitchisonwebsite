<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."examination/examinationrepository.php");

$examRepo = new ExaminationRepository($dc);

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


$data = $examRepo->GetMonthlyTestsList( $_SESSION['portal_sup_name'], $offset, $recordsPerPage );

$totalRecords = $data[0];
$tMonthlyTests = $data[1];
//$tMonthlyTests->PrintTable();

?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "Monthly Test System"; include($path."includes.php"); ?>

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
								<br> 
								  <form id="formNew" action="monthly-test-add.php" method="post" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
								  
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
									 <input type="hidden" id="Txtg" name="Txtg" value="<?php echo $page; ?>" />
									 
								  
									  <a href="monthly-test-add.php" type="button" id="cmdAddNew" name="cmdAddNew" class="btn btn-success">Add Monthly Test</a>
									
									
									</form>
									<form id="formView" action="monthly-tests.php" method="post" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
										
									<table id="tbl-monthly-test" class="table table-bordered table-hover">
									  <thead>
										<tr>
										  <th style="width:30px; text-align:center;">#</th>
										  <th style="width:80px;">Month</th>
										  <th style="width:120px;">Test Date</th>
										  <th style="width:240px;">Name</th>
										  <th style="width:70px;">Section</th>
										  <th style="width:120px;">Subject</th>
										  <th style="width:60px;">Status</th>
										  <th style="width:50px;">Edit</th>
										  <th style="width:70px;">Add Marks</th>
										  <th style="width:70px;">Publish</th>
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
											  
											  $publishCaption = "Publish";
											  if($row->Status == "Published") $publishCaption = "Published";
									  ?>
										<tr <?php echo $style_color; ?>>
										  <td style="text-align:center;"><?php echo $index++; ?></td>
										  <td><?php echo $row->TestMonth; ?></td>
										  <td><?php echo $row->TestDate; ?></td>
										  <td><?php echo $row->TestName; ?></td>
										  <td><?php echo $row->Section; ?></td>
										  <td><?php echo $row->Subject; ?></td>
										  <td><?php echo $row->Status; ?></td>
										  <td style="background:#ecf0f1;">
											  <a href="monthly-test-edit.php?id=<?php echo $row->Id;?>" 
												 title="Edit Test - <?php echo $row->TestName; ?>">Edit</a>
										  </td>
							  			  <td style="background:#ecf0f1; text-align:center;">
											  <a href="add-marks.php?id=<?php echo $row->Id;?>" 
												title="Add Marks - <?php echo $row->TestName; ?>"><i class="fa fa-upload" aria-hidden="true"></i></a>
										  </td>
										  <?php if(false) { ?>
										  <td style="background:#ecf0f1;">
											  <a title="Send Approval - <?php echo $row->TestName;?>">Send</a>
										  </td>
										  <?php } ?>
										 
										  <td style="background:#ecf0f1;">
											  <a href="#" onclick="javascript:onPublishTest(<?php echo $row->Id;?>)" 
												title="Publish - <?php echo $row->TestName; ?>"><?php echo $publishCaption; ?></a>
										  </td>
											
										</tr>
										<?php
											}
									   }
										?>

									  </tbody>
									</table>
								
								  
								  
								  </form>  
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


		$('#cmdCancel').click(function(){
			$('#formNew').submit();
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

function onAddFiles(id)
{
	location.href = "upload.php?id="+id;
}


function onPublishTest(id)
{
	if (confirm('Are you sure you want to publish the test?')) {
		$.post("../services/portalService.php?select=9&testid="+id,function(data){
			//alert(data);
			var tokens = data.split(",");
			var status = tokens[0];

			var message = tokens[1];
			
			alert(message);
			
			if (status == 1) {
				location.href = "monthly-tests.php";
			}
		});
	}
	
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

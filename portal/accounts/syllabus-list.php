<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."accounts/syllabusrepository.php");

$syllabusRepo = new SyllabusRepository($dc);

$message = "";
$response = -1;
$optShow = -1;
$optActive = -1;
$sectionNew = false;
$sectionView = true;

// how many rows to show per page
$recordsPerPage = 20;

$page = isset($_POST['Txtg']) ? (int)$_POST['Txtg'] : 0;
$page = isset($_GET['g']) ? (int)$_GET['g'] : $page;

if($page == 0 || $page == 1) $offset = 0;
else if($page > 1) $offset = (($page -1) * $recordsPerPage);

$id	   = isset($_POST['id'])	   ? (int)$_POST['id']	 : 0;
$mode  = isset($_POST['mode'])  ? $_POST['mode']	 	 : "";
$TxtEditId = isset($_POST['TxtEditId']) ? (int)$_POST['TxtEditId'] : 0;


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
    echo "page: ". $page . "<br>";
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



$data = $syllabusRepo->GetList($offset, $recordsPerPage);

$totalRecords = $data[0];
$tSyllabus = $data[1];

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
						  
						  <div class="">
							  <div class="page-title">
								  <h3><?php echo $title; ?></h3>
							  </div>
							  
							  <div class="x_content" style="display: block;">
								<br> 
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
									 <input type="hidden" id="Txtg" name="Txtg" value="<?php echo $page; ?>" />
									 
								  
									<button type="button" id="cmdAddNew" name="cmdAddNew" class="btn btn-success">Add New</button>
									
									</form>
									<form id="formView" action="syllabi-list"  method="post" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

                                        <input type="hidden" id="id" name="id" />
                                        <input type="hidden" id="Txtg" name="Txtg" value="<?php echo $page; ?>" />
									<table class="table table-bordered table-hover">
									  <thead>
										<tr>
										  <th style="width:40px; text-align:center;">#</th>
										  <th style="width:300px;">Title</th>
										  <th style="width:100px;">Syllabus Date</th>
										  <th style="width:60px;">Active</th>
										  <th style="width:60px;">Edit</th>
										  <th style="width:60px;">Files</th>
										  <th style="width:60px;">Publish</th>
										</tr>
									  </thead>
									  <tbody>
									  <?php
									  if ($tSyllabus)
									  {
										  $index = $offset +1;
										  foreach($tSyllabus->Rows as $row)
										  {
											$style_color = "";
											if ( $row->Active == "No" ) $style_color = " style='color:darkgray;' ";
									  ?>
										<tr<?php echo $style_color; ?>>
										  <th scope="row" style="text-align:center;"><?php echo $index++; ?></th>
										  <td><?php echo $row->Title; ?></td>
										  <td><?php echo $row->SyllabusDate; ?></td>
										  <td><?php echo $row->Active; ?></td>
										  <td style="background:#ecf0f1;"><a href="#" 
																			 title="Edit Syllabus - <?php echo $row->Title; ?>" 
																			 onclick="javascript:onEdit(<?php echo $row->Id.",".$page;?>)">Edit</a></td>
										  <td style="background:#ecf0f1;"><a href="#" 
																			 title="Upload Syllabus - <?php echo $row->Title; ?>" 
																			 onclick="javascript:onAddFiles(<?php echo $row->Id;?>)"><i class="fa fa-upload" aria-hidden="true"></i></a></td>
										  <td style="background:#ecf0f1;"><a href="#" 
																			 title="Publish Syllabus - <?php echo $row->Title; ?>" 
																			 onclick="javascript:onPublishSyllabus(<?php echo $row->Id. ','. $page;?>)"><i class="fa fa-clipboard" aria-hidden="true"></i></a></td>
											
										</tr>
										<?php
											}
									   }
										?>

										<tr style='background-color:#F3F3F8;border-bottom:1px solid lightgray;border-left:1px solid gray;'>
											<td colspan="10">
											<?php
												include("../paging.php");
												$url = $portalDomainName . "accounts/syllabus-list.php";
												$syllabusId = $id > 0 ? (int)$id : (int)$TxtEditId;
												Paging::Draw($page, $totalRecords, $recordsPerPage, $url, (int)$syllabusId);
											?>
											</td>
										</tr>
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

<script>
	
	$(document).ready(function () {

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

		$('#cmdAddNew').click(function (){
		    location.href = 'add-syllabus';
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


function onPublishSyllabus(id, g)
{
    let form = document.createElement("form");
    let element1 = document.createElement("input");
    let element2 = document.createElement("input");

    form.method = "GET";
    form.action = "syllabus-publish.php";

    element1.value=id;
    element1.name="id";
    form.appendChild(element1);

    element2.value=g;
    element2.name="Txtg";
    form.appendChild(element2);


    document.body.appendChild(form);

    form.submit();

	//location.href = "syllabus-publish.php?id="+id;
    //document.forms["formNew"].submit();
}


function onPaging(g,id)
{
	//$("#id").val(id);
	//$("#TxtEditId").val("0");
	$("#Txtg").val(g);
    //$('#formView').submit();
    window.location = "https://aitchison.edu.pk/portal/accounts/syllabi-list?g=" + g;

	//document.forms["formView"].submit();
}

</script>
	
</body>
</html>

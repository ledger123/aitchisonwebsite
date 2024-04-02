<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/


$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."accounts/accountrepository.php");


$accountsRepo = new AccountRepository($dc);

$message = "";
$response = -1;
$optShow = -1;
$optActive = -1;
$pageTitle = "Add New Event";

$event_date = isset($_GET['d']) ? $_GET['d'] : 0;

$TxtStartDate = $event_date;

$id	   = isset($_GET['id'])	   ? (int)$_GET['id']	 : 0;
$TxtEditId = isset($_POST['TxtEditId']) ? (int)$_POST['TxtEditId'] : 0;

if ( $TxtEditId > 0) $id = 0;


#debuging
if (false) {
	echo "<br>";
	echo "id: ". $id . "<br>";
	echo "edit id: ". $TxtEditId . "<br>";
	
	//exit;
}

$TxtTitle 	   		= "";
$TxtStartDate	   	= "";
$TxtEndDate	   		= "";
$TxtLocations	   	= "";
$TxtStartTime		= "";
$TxtEndTime			= "";

if ( $id > 0 && $TxtEditId == 0 )
{
	$data = $accountsRepo->GetEvent( $id );
	$event = $data[0];
	$tTags = $data[1];

    //var_dump($event);
	
	$TxtTitle 	   		= "";
	$TxtStartDate	   	= "";
	$TxtEndDate	   		= "";
	$TxtLocations	   	= "";
	$optShow	   		= -1;
	$optActive		   	= -1;
	
	if($event && $event->rowsCount() > 0)
	{
		$row = $event->Rows[0];

		$eventId			= $row->Id;
		$TxtTitle 	   		= $row->Title;
		$TxtStartDate	   	= $functions->formatDate($row->StartDate, "m/d/Y");
		$TxtStartTime	   	= $functions->formatDate($row->StartDate, "H:i:s");
		$TxtEndDate		   	= $row->EndDate;
		$optShow	   		= $row->IsDelete;
		$optActive		   	= $row->Active;
		
		$TxtStartTime		= $TxtStartTime == "00:00:00" ? "" : $TxtStartTime;
		if ( strlen($TxtEndDate) > 0 ) {
			
			$TxtEndTime	   	= $functions->formatDate($TxtEndDate, "H:i:s");
			$TxtEndTime		= $TxtEndTime == "00:00:00" ? "" : $TxtEndTime;
		}
		else {
			$TxtEndTime		= "";
		}

	}
	
	$pageTitle = "Edit Event";
}
elseif ( $id == 0 && $TxtEditId > 0 )
{
	$eventId			= $TxtEditId;
	$TxtTitle 	   		= isset($_POST['TxtTitle'])			? $_POST['TxtTitle']  	    : "";
	$TxtStartDate	   	= isset($_POST['TxtStartDate'])		? $_POST['TxtStartDate']  	: "";
    $TxtStartTime	   	= isset($_POST['TxtStartTime'])		? $_POST['TxtStartTime']  	: "";
	$TxtEndDate	   		= isset($_POST['TxtEndDate'])		? $_POST['TxtEndDate'] 	    : "";
	$TxtLocations  		= isset($_POST['TxtLocations'])		? $_POST['TxtLocations']  	: "";
	$optShow	   		= isset($_POST['optShow'])			? $_POST['optShow']  	    : -1;
	$optActive		   	= isset($_POST['optActive'])		? $_POST['optActive']  	    : -1;
 	
	
	$TxtTitle     = $purifier->purify($TxtTitle);
	
	$TxtStartDate = ( strlen( trim($TxtStartTime) ) > 0 ) ? $TxtStartDate . " " . $TxtStartTime : $TxtStartDate . " 00:00:00";
	
	$TxtStartDate = $functions->formatDate($TxtStartDate);
	
	if( strlen($TxtEndDate) > 0 ) {
		
		$TxtEndDate = ( strlen( trim($TxtEndTime) ) > 0 ) ? $TxtEndDate . " " . $TxtEndTime : $TxtEndDate . " 00:00:00";
		
		$TxtEndDate = $functions->formatDate($TxtEndDate);
	}
	
	#create new record
	if( strlen ($TxtTitle) > 3 )
	{
		//								($eventId, $title, $startDate, $endDate, $active, $show, $userId, $locations)
		$response = $accountsRepo->UpdateEvent($eventId, $TxtTitle, $TxtStartDate, $TxtEndDate, $optActive, $optShow, USER_ID, $TxtLocations);
		
		if ($response > 0) {
			//$message = "Record saved successfully.";
			header("Location: view-events.php");
		}
		else {
			$message = "Record not saved.";
		}
	}
	else
	{
		$message = "Event title is invalid.";
	}
	
	
	$id = $TxtEditId;
	
	if ($response < 1) {
		
	}
	else {
		$id 			 = "0";
		$eventId		 = "0";
		$TxtStartDate	 = "";
		$TxtEndDate		 = "";
		$TxtLocations	 = "";
		$optShow		 = -1;
		$optActive		 = -1;
		
	}
	
	unset($_SERVER['QUERY_STRING']);
}
elseif ( isset($_POST['cmdSubmit']) && $id == 0 && $TxtEditId == 0 )
{
	
	$TxtTitle 	   		= isset($_POST['TxtTitle'])			? $_POST['TxtTitle']  	    : "";
	$TxtStartDate	   	= isset($_POST['TxtStartDate'])		? $_POST['TxtStartDate']  	: "";
	$TxtStartTime	   	= isset($_POST['TxtStartTime'])		? $_POST['TxtStartTime']  	: "";
	$TxtEndDate	   		= isset($_POST['TxtEndDate'])		? $_POST['TxtEndDate'] 	    : "";
	$TxtLocations  		= isset($_POST['TxtLocations'])		? $_POST['TxtLocations']  	: "";
	$optShow	   		= isset($_POST['optShow'])			? $_POST['optShow']  	    : -1;
	$optActive		   	= isset($_POST['optActive'])		? $_POST['optActive']  	    : -1;
 	
	
	$TxtTitle     = $purifier->purify($TxtTitle);
	
	$TxtStartDate = ( strlen( trim($TxtStartTime) ) > 0 ) ? $TxtStartDate . " " . $TxtStartTime : $TxtStartDate . " 00:00:00";
	
	$TxtStartDate = $functions->formatDate($TxtStartDate);
	
	if( strlen($TxtEndDate) > 0 ) {
		
		$TxtEndDate = ( strlen( trim($TxtEndTime) ) > 0 ) ? $TxtEndDate . " " . $TxtEndTime : $TxtEndDate . " 00:00:00";
		
		$TxtEndDate = $functions->formatDate($TxtEndDate);
	}
	
	#create new record
	if( strlen ($TxtTitle) > 3 )
	{
		//								($eventId, $title, $startDate, $endDate, $active, $show, $userId, $locations)
		$response = $accountsRepo->SaveEvent($eventId, $TxtTitle, $TxtStartDate, $TxtEndDate, $optActive, $optShow, USER_ID, $TxtLocations);
		
		if ($response > 0) {
			//$message = "Record saved successfully.";
			header("Location: view-events.php");
		}
		else {
			$message = "Record not saved.";
		}
		
	}
	else
	{
		$message = "Event title is invalid.";
	}
	
	
	$id = $TxtEditId;
	
	if ($response < 1) {
		
	}
	else {
		$id 			 = "0";
		$eventId		 = "0";
		$TxtStartDate	 = "";
		$TxtEndDate		 = "";
		$TxtLocations	 = "";
		$optShow		 = -1;
		$optActive		 = -1;
		
	}
	
}

$tag = "";
if ($_SESSION['portal_School'] === 'Calendar Users - SS') {
    $tag = 'Senior School';
}
elseif ($_SESSION['portal_School'] === 'Calendar Users - PS') {
    $tag = 'Prep School';
}
elseif ($_SESSION['portal_School'] === 'Calendar Users - JS') {
    $tag = 'Junior School';
}


$index = 0;
$tagsIndexArr = [];
$view_events_page = "view_events";

if (!isset($tTags)) {
    $tTags = $accountsRepo->GetTags();
}

if($tag !== "") {

    $view_events_page = "view-myevents";

    if (isset($tTags)) {

        foreach ($tTags->Rows as $row) {
            if ($row->HeadTag === "School" && $row->Tag === 'Senior School') {
                $tagsIndexArr[] = [$index, $row->Tag];
            } elseif ($row->HeadTag === "School" && $row->Tag === 'Prep School') {
                $tagsIndexArr[] = [$index, $row->Tag];
            } elseif ($row->HeadTag === "School" && $row->Tag === 'Junior School') {
                $tagsIndexArr[] = [$index, $row->Tag];
            }

            $index++;
        }

        foreach ($tagsIndexArr as $t) {
            if ($t[1] !== $tag) {
                $tTags->RemoveAt($t[0]);
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<?php $title = $pageTitle; include($path."includes.php"); ?>


<link href="<?php echo $path; ?>vendors/jquery-timepicker/jquery.timepicker.min.css" rel="stylesheet">
	
<style>
label.error {
	color: red;
	font-weight: 500;
}
	
#ck-button {
    margin:4px;
    background-color:#EFEFEF;
    border-radius:4px;
    border:1px solid #D0D0D0;
    overflow:auto;
    float:left;
	cursor: pointer; cursor: hand;
}

#ck-button:hover {
    margin:4px;
    background-color:#EFEFEF;
    border-radius:4px;
    border:1px solid #929292;
    overflow:auto;
    float:left;
	cursor: pointer; cursor: hand;
    /*color:red;*/
}

#ck-button label {
    float:left;
	margin-bottom:0px;
    /*width:4.0em;*/
}

#ck-button label span {
    text-align:center;
    padding:3px 7px;
    display:block;
}

#ck-button label input {
    position:absolute;
    top:-20px;
}

#ck-button input:checked + span {
    background-color: #C3C3C3;
    color:#fff;
}
#ck-button input[type=checkbox] {
   visibility: hidden;
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
						  
							  <div class="page-title">
								  <h3><?php echo $title; ?></h3>
							  </div>
							  
							  <div class="x_content" style="display: block;">
								<br>
								  <form id="formNew" action="add-events.php<?php if($TxtEditId>0) echo "?id=".$TxtEditId; ?>" method="post" onsubmit="return validates();" class="form-horizontal form-label-left">
								  
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
									 <input type="hidden" id="TxtEditId" name="TxtEditId" value="<?php echo $id; ?>" />
									 
									 <section id="secNew">
									 
									 <div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtTitle">Title <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
										  <input type="text" id="TxtTitle" name="TxtTitle" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo htmlentities(stripslashes(utf8_decode($TxtTitle))); ?>">
										</div>
									  </div>
									 
									 <div class="form-group">
										<label for="TxtStartDate" class="control-label col-md-3 col-sm-3 col-xs-12">Start Date <span class="required">*</span></label>
										<div class="col-md-2 col-sm-2 col-xs-12">
										  <input type="text" id="TxtStartDate" name="TxtStartDate" required="required" 
                                      		class="date-picker form-control col-md-7 col-xs-12" value="<?php echo $functions->formatDate($TxtStartDate, "m/d/Y"); ?>"/>
										</div>
										<label for="TxtStartTime" class="control-label col-md-2 col-sm-2 col-xs-12">Start Time</span></label>
										<div class="col-md-2 col-sm-2 col-xs-12">
										  <input type="text" id="TxtStartTime" name="TxtStartTime" 
                                      		class="date-picker form-control col-md-7 col-xs-12" value="<?php echo $TxtStartTime; ?>"/>
										</div>
									  </div>
									 <div class="form-group">
										<label for="TxtAddress" class="control-label col-md-3 col-sm-3 col-xs-12">End Date</label>
										<div class="col-md-2 col-sm-2 col-xs-12">
										  <input type="text" name="TxtEndDate" id="TxtEndDate" class="date-picker form-control col-md-7 col-xs-12" 
											value="<?php if($TxtEndDate!="") echo $functions->formatDate($TxtEndDate, "m/d/Y"); ?>">
										</div>
										<label for="TxtEndTime" class="control-label col-md-2 col-sm-2 col-xs-12">End Time</span></label>
										<div class="col-md-2 col-sm-2 col-xs-12">
										  <input type="text" id="TxtEndTime" name="TxtEndTime"
                                      		class="date-picker form-control col-md-7 col-xs-12" value="<?php echo $TxtEndTime;?>"/>
										</div>
									  </div>
									  <div class="ln_solid"></div>
									  
									 
									<?php
										if(true) { ?>
											<div id="chkLocations">
										<?php
											if($tTags) {
												$group = "";
												foreach($tTags->Rows as $row)
												{
													if($group!="" && $row->HeadTag != $group) { ?>
														</div>
													</div>
												 <?php }

													if($row->HeadTag != $group)
													{
														$group=$row->HeadTag;
											?>
												<div class="form-group">

													<label class="control-label col-md-3 col-sm-3 col-xs-12" style="cursor: pointer" id="<?php echo $row->HeadTag; ?>" name="<?php echo $row->HeadTag; ?>"><?php echo $row->HeadTag; ?></label>

													<div class="col-md-9 col-sm-9 col-xs-12">
													<?php } ?>

														<div id="ck-button">
														   <label>
															  <input type="checkbox" id="TxtLocations" <?php if($row->EventId>0) echo " checked='checked' "; ?> name="TxtLocations[]"  
															  value="<?php echo $row->TagId; ?>"><span><?php echo $row->Tag; ?></span>
														   </label>
														</div>

										<?php }
											}?>
											</div>
											
											<?php
										} ?>

								     </div>
									 <div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Delete <span class="required">*</span></label>
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

          	<!-- footer content -->

        	<?php include($path."footer.php"); ?>
            
        	<!-- /footer content -->
          
        </div>
        <!-- /page content -->
        
      </div>
    </div>
	<?php include($path."footerincludes.php"); ?>
	
	<script src="<?php echo $path; ?>js/jquery-validation/jquery.validate.min.js"></script>
	
	<script src="<?php echo $path; ?>vendors/jquery-timepicker/jquery.timepicker.min.js"></script>

<script>
	
	$(document).ready(function () {
		
		$('#TxtStartTime, #TxtEndTime').timepicker({
			timeFormat: 'h:mm p',
			interval: 60,
			minTime: '07',
			/*maxTime: '11:00pm',*/
			/*defaultTime: '8',*/
			startTime: '07:00',
			dropdown: true,
			scrollbar: true
		});
		
		
		//$( "#CmdSubmit" ).on( "click", save );
		//$( "#CmdCancel" ).on( "click", clears );
		
		$('#CmdSubmit').click(function(){
			//alert("1");
			if ( validates() )
			{

				if (confirm('Are you sure you want to save the event?'))
				{
					document.forms['formNew'].submit();
					//return true;
				}
				return false;
			}
		});

		$('#cmdCancel').click(function(){
			
			var url = "<?php echo "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']) . "/" . $view_events_page; ?>";
			
			//alert(url);
			window.location = url;
			
		});
		
		$('#TxtTitle').focus();
	});
	

function validates()
{
	var error = false;
	$('#lblShow').text("");
	$('#lblActive').text("");

	//alert($('#optSchools').select2('data'));
	
	
	if ($('#TxtTitle').val().trim() == "") {
		alert("Please enter page title.");
		$('#TxtTitle').focus();
		return false;
	}

	if ( !IsDate($("#TxtStartDate").val()) )
	{
		alert("Please enter valid start date");
		$("#TxtNewsDate").focus();
		return false;
	}
	
	if ( $("#TxtEndDate").val().trim() != "" && !IsDate($("#TxtEndDate").val()) )
	{
		alert("Please enter valid end date");
		$("#TxtEndDate").focus();
		return false;
	}
	
	
	/*
	if ($('input[name="optShow"]:checked').length == 0) {
	//if($('#optShow').is(':checked') == false) {
		alert("Please select show option.");
		return false;

	}

	if ($('input[name="optActive"]:checked').length == 0) {
	//if ($('#optActive').is(':checked') == false) {
		alert("Please select active option.");
		return false;

	}
	*/
	
	$("#id").val("0");
	
	if (!confirm('Are you sure you want to save the event?'))
	{
		
		return false;
	}
	
	
	return true;

}


	
function onEdit(id,g)
{
	$("#id").val(id);
	$("#TxtEditId").val("0");
	$("#Txtg").val(g);
	document.forms["formNew"].submit();
}


	$('#TxtStartDate').daterangepicker({
		singleDatePicker: true,
		calender_style: "picker_4"
		}, function(start, end, label) {
		  //console.log(start.toISOString(), end.toISOString(), label);
	});
	
	$('#TxtEndDate').daterangepicker({
		singleDatePicker: true,
		calender_style: "picker_4"
		}, function(start, end, label) {
		  //console.log(start.toISOString(), end.toISOString(), label);
	});

function IsDate(text)
{
	//var text = '2/30/2011';
	var comp = text.split('/');
	var m = parseInt(comp[0], 10);
	var d = parseInt(comp[1], 10);
	var y = parseInt(comp[2], 10);
	var date = new Date(y,m-1,d);
	if (date.getFullYear() == y && date.getMonth() + 1 == m && date.getDate() == d) {
	  return true;
	} else {
	  return false;
	}
}

$(document).ready(function() {
	
	/*$("#chkLocations").find('input:checkbox').each(function() {
		
		//$( this ).click( {object: this}, checkedUnchecked );
		
	});*/
	
	$("#School").click( {name: "#School"}, checkedAll );
	
	$("#Games").click( {name: "#Games"}, checkedAll );
	
	$("#Important").click( {name: "#Important"}, checkedAll );
	
});

function checkedAll( event )
{
	var parentTag = $( event.data.name ).parent().get( 0 );
	
	$(parentTag).find('input:checkbox').each(function() {
		
		//$( this ).attr('checked', 'checked');
		$( this ).prop('checked', true);
	});
	
}

</script>

</body>
</html>

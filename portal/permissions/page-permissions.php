<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include("permissionrepository.php");

$permissionRepo = new PermissionRepository($dc);

$message = "";
$response = -1;
$heading = "N/A";

$id		   = isset($_REQUEST['id']) 	   ? (int)$_REQUEST['id'] 		 : 0;
$TxtEditId = isset($_REQUEST['TxtEditId']) ? (int)$_REQUEST['TxtEditId'] : 0;

#load locations for user selection
if ( $id >= 0 && $TxtEditId == 0 )
{
	$data = $permissionRepo->GetPageLocations( $id );
	
	$heading = $data[0];
	$tPageLocations = $data[1];
}
elseif ( $id == 0 && $TxtEditId > 0 )
{
	#updating
	#UpdateNewsLocations($newsId, $locationIds, $userId)
	$response = $permissionRepo->UpdatePageLocations($TxtEditId, $_REQUEST['TxtLocations'], USER_ID);
	
	if ($response > 0)
	{
		$message = "Record updated successfully.";
	}
	else
		$message = "Record not updated.";	
	
	unset($_SERVER['QUERY_STRING']);
}

?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Page Permissions"; include($path."includes.php"); ?>
	
<style>
	
	select {
		width: 100%;
		overflow-y: auto;
	}
	optgroup{
		margin: 15px 0;
	}
	
	option{
		padding: 7px 0;
	}
	
	
.no-scroll::-webkit-scrollbar {display:none;}
.no-scroll::-moz-scrollbar {display:none;}
.no-scroll::-o-scrollbar {display:none;}
.no-scroll::-google-ms-scrollbar {display:none;}
.no-scroll::-khtml-scrollbar {display:none;}


th:first-child, th:last-child, td:last-child{text-align:center;}

div label input {
   margin-right:100px;
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
    background-color: #969696;
    color:#fff;
}
#ck-button input[type=checkbox] {
   visibility: hidden;
}

label { cursor: pointer; cursor: hand; }

</style>
	
<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php $pagePermissions = true; include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
        	
            <div class="container">
				<div class="row" id="newsletter">
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						  <div class="page-title">
							  <h3><?php echo $title; ?></h3>
						  </div>
						  
						  <button id="loadPer" type="button" class="btn btn-success"> Load Permissions </button>
						  
						  <br />
						  <div class="row">
							  <form id="frmPageLocations" method="post" data-parsley-validate class="form-horizontal form-label-left">
								  <br />
								  <p style="border-bottom: #cacaca 1px solid; display: inline-block;">
									  <span class="section" style="margin-right: 20px; display: inline;">Selected Page</span>
									  <span class="section" style="color: #363fbf; display: inline; font-weight: 700;">
										  <?php echo $heading; ?>
									  </span>
								  </p>
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
								<input type="hidden" id="Txtg" name="Txtg" value="<?php echo $page; ?>" />
							  
								<?php
								if($id>=0) { ?>
									<div id="chkLocations">
								<?php
									if(isset($tPageLocations)) {
										$group = "";
										foreach($tPageLocations->Rows as $row)
										{
											if($group!="" && $row->Group != $group) { ?>
												</div>
											</div>
										 <?php }
											
											if($row->Group != $group)
											{
												$group=$row->Group;
									?>
										<div class="row form-group">

											<label class="control-label col-md-2 col-sm-2 col-xs-12" id="<?php echo $row->Group; ?>" name="<?php echo $row->Group; ?>"><?php echo $row->Group; ?></label>

											<div class="col-md-10 col-sm-10 col-xs-12">
											<?php } ?>

												<div id="ck-button">
												   <label>
													  <input type="checkbox" id="TxtLocations" <?php if($row->PortalCode>0) echo " checked='checked' "; ?> name="TxtLocations[]"  
													  value="<?php echo $row->Code; ?>"><span><?php echo $row->Location; ?></span>
												   </label>
												</div>

								<?php }
									}?>
									</div>
									<div style="height:60px;"></div>

									<div class="form-group">
										<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
											<button type="submit" id="CmdPublish" name="CmdPublish" class="btn btn-primary">Save</button>
											<button type="button" id="CmdCancel" name="CmdCancel" onClick="javascript:onCancel(<?php echo $page; ?>)" class="btn btn-default">Cancel</button>
										</div>
									</div>

									<?php
								} ?>
							</form>
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

</body>

<script>
	
	$( document ).ready(function() {
		
		$("#Administrator").click( {name: "#Administrator"}, checkedAll );
		
		$("#ParentPortal").click( {name: "#ParentPortal"}, checkedAll );

		$("#BoarderPortal").click( {name: "#BoarderPortal"}, checkedAll );

		$("#StudentPortal").click( {name: "#StudentPortal"}, checkedAll );
		
		$("#StaffPortal").click( {name: "#StaffPortal"}, checkedAll );
		
		
		const urlParams = new URLSearchParams(window.location.search);
		const id = urlParams.get('id');
		
		$("#lstNavTree").val(id);
	});
	
	$("#loadPer").click(function(){
		
		var selectedVal = $('#lstNavTree :selected').val();
		//alert(selectedVal);
		
		if( parseInt(selectedVal) > 0 ) {
			window.location.href = "page-permissions.php?id="+selectedVal;
		}
		else {
			alert("Please select an item from the list.");
			$("#lstNavTree").focus();
		}
		
		
	});
	
	
	
function checkedAll( event )
{
	var parentTag = $( event.data.name ).parent().get( 0 );
	
	$(parentTag).find('input:checkbox').each(function() {
		
		//$( this ).attr('checked', 'checked');
		$( this ).prop('checked', true);
	});
	
	

	//alert( selected );
}

function checkedUnchecked( event )
{
	var obj = event.data.object;
	
	//$(this).is(':checked')
	//if ( obj.hasAttribute("checked") )
	if ( $( obj ).is(':checked') )
	{
		//$( obj ).removeAttr( "checked" );
		$( obj ).prop('checked', false);
	}
	else
	{
		//$( obj ).attr('checked', 'checked');
		$( obj ).prop('checked', true);
	}
}


	
	
	
	function getUrlVars()
	{
		var vars = [], hash;
		var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
		for(var i = 0; i < hashes.length; i++)
		{
			hash = hashes[i].split('=');
			vars.push(hash[0]);
			vars[hash[0]] = hash[1];
		}
		return vars;
	}
	
	
	
</script>

</html>

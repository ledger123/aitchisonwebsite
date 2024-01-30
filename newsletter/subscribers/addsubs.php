<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."accounts/accountrepository.php");

$accountRepo = new AccountRepository($dc);
$message = "";
$response = -1;

$id	   = isset($_REQUEST['id'])	   ? (int)$_REQUEST['id']	 : 0;
$TxtEditId = isset($_REQUEST['TxtEditId']) ? (int)$_REQUEST['TxtEditId'] : 0;

//echo "id: ".$id."<br />";
//echo "TxtEditId: ".$TxtEditId;

#load user group for edit
if ( $id > 0 && $TxtEditId == 0 )
{
	$userGroup = $accountRepo->GetUserGroupById($id);
	
	$TxtGroupName = "";
	$admin = -1;
	$active = -1;
	
	if($userGroup && $userGroup->rowsCount() > 0)
	{
		$row = $userGroup->Rows[0];
		
		$TxtGroupName = $row->GroupName;
		$admin 	   	  = $row->Admin;
		$active    	  = $row->Active;
	}
}
elseif ( $id == 0 && $TxtEditId > 0 )
{
	#new/edit user group
	$TxtGroupName = isset($_REQUEST['TxtGroupName'])  ? $_REQUEST['TxtGroupName']   : "";
	$admin 	  	  = isset($_REQUEST['OptAdmin']) 	  ? (int)$_REQUEST['OptAdmin']  : 0;
	$active 	  = isset($_REQUEST['OptActive']) 	  ? (int)$_REQUEST['OptActive'] : 0;
	
	$TxtGroupName = $purifier->purify($_REQUEST['TxtGroupName']);
	
	#updating
	if( $TxtEditId > 0 && strlen ($TxtGroupName) > 3 )
	{
		if ( $accountRepo->IsUserGroupExist($TxtEditId, $TxtGroupName) == 0 )
		{
			$response = $accountRepo->UpdateUserGroup($TxtEditId, $TxtGroupName, $admin, $active);
			
			if ($response > 0)
				$message = "Record updated successfully.";
			else
				$message = "Record not updated.";
		}
		else
		{
			$response = 0;
			$message = "'".$TxtGroupName."' group is already exist.";
		}
	}
	
	$id = "";
	$TxtGroupName = "";
	unset($_SERVER['QUERY_STRING']);
}
elseif ( $id == 0 && $TxtEditId == 0 )
{
	#new/edit user group
	$TxtGroupName = isset($_REQUEST['TxtGroupName'])  ? $_REQUEST['TxtGroupName']   : "";
	$admin 	  	  = isset($_REQUEST['OptAdmin']) 	  ? (int)$_REQUEST['OptAdmin']  : 0;
	$active 	  = isset($_REQUEST['OptActive']) 	  ? (int)$_REQUEST['OptActive'] : 0;
	
	$TxtGroupName = $purifier->purify($TxtGroupName);
	
	#new user group
	if( strlen ($TxtGroupName) > 3 )
	{
		if ( $accountRepo->IsUserGroupExist(0, $TxtGroupName) == 0 )
		{
			$response = $accountRepo->SaveUserGroup($TxtGroupName, $admin, $active);
			
			if ($response > 0)
				$message = "Record saved successfully.";
			else
				$message = "Record not saved.";
		}
		else
		{
			$response = 0;
			$message = "'".$TxtGroupName."' group is already exist.";
		}
	}
	
	$id = "";
	$TxtGroupName = "";
}

$tUserGroups = $accountRepo->GetUserGroups();

$dTable = new DataTable();
$dTable->SetColumns( array("Id", "Value") );
$dTable->addRow( array(1, "Yes") );
$dTable->addRow( array(0, "No") );


$OptAdmin = new ComboBox("OptAdmin", "class='form-control'", $dTable);
$OptAdmin->valueField = "Id";
$OptAdmin->textField = "Value";

if($admin>-1) $OptAdmin->SetSelectedValue($admin);

$OptActive = new ComboBox("OptActive", "class='form-control'", $dTable);
$OptActive->valueField = "Id";
$OptActive->textField = "Value";

if($active>-1) $OptActive->SetSelectedValue($active);

?>
<!DOCTYPE html>
<html lang="en">
    
    <?php $title = "Add Subscribers"; include($path."includes.php"); ?>
  
<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          	<div class="page-title">
              <div class="title_left">
                <h3>User Groups</h3>
              </div>
            </div>
          	<div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>New Group</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="form1" method="post" data-parsley-validate class="form-horizontal form-label-left">
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
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="group-name">Group Name <span class="required">*</span>
                        </label>
                         
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" id="TxtGroupName" name="TxtGroupName" required="required" 
                          	class="form-control col-md-7 col-xs-12" value="<?php echo $TxtGroupName; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Admin</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <?php $OptAdmin->Bind(); ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Active</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <?php $OptActive->Bind(); ?>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" id="CmdSubmit" name="CmdSubmit" class="btn btn-success">Submit</button>
                          <button type="reset" id="CmdCancel" name="CmdCancel" class="btn btn-primary">Cancel</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    
                    <form id="form1" data-parsley-validate class="form-horizontal form-label-left">
                    	<table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Group Name</th>
                              <th>Admin</th>
                              <th>Active</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php
						  if ($tUserGroups)
						  {
							  $index = 1;
							  foreach($tUserGroups->Rows as $row)
							  {
                          ?>
                            <tr>
                              <th scope="row"><?php echo $index++; ?></th>
                              <td><?php echo $row->GroupName; ?></td>
                              <td><?php echo $row->Admin; ?></td>
                              <td><?php echo $row->Active; ?></td>
                              <td><a href="#" onclick="javascript:onEdit(<?php echo $row->Id;?>)">Edit</a></td>
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

          
          	<!-- footer content -->
        
        	<?php include($path."footer.php"); ?>
        	<!-- /footer content -->
          
        </div>
        <!-- /page content -->


      </div>
    </div>
	<?php include($path."footerincludes.php"); ?>
    <!-- Datatables -->
    
<script>
$( document ).ready(function() {
	$(function() {
		$("#CmdSubmit").click(function() {
			if ($("#TxtGroupName").val() == "")
			{
				alert("Please type group name.");
				$("#TxtGroupName").focus();
				return false;
			}
        }); 
    });
	
	$(function() {
		$("#CmdCancel").click(function() {
			window.location.href="creategroups.php";
        }); 
    });
});

function onEdit(id)
{
	$("#id").val(id);
	document.forms["form1"].submit();
}

</script>
</body>
</html>

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


$tUserGroups = $accountRepo->GetUserGroups();

$tUserGroups = $accountRepo->GetUserGroups();
$row = $tUserGroups->NewRow();
$row["Id"] = 0;
$row["GroupName"] = "-- Select Group --";

$tUserGroups->insertRowAt($row, 0);

$OptUserGroup = new ComboBox("OptUserGroup", "class='form-control'", $tUserGroups);
$OptUserGroup->valueField = "Id";
$OptUserGroup->textField = "GroupName";


$tData = $accountRepo->GetUserGroupRights( (int)$OptUserGroup->SelectedValue() );

$tAllNodes = $tData[0];
$tSelectedNodes  = $tData[1];


$optAllForms = new ComboBox("optAllForms", "class='form-control' multiple='multiple' style='width:100%; height:300px;'", $tAllNodes);
$optAllForms->valueField = "Id";
$optAllForms->textField = "AllForms";

$optSelectedForms = new ComboBox("optSelectedForms", "class='form-control' multiple='multiple' style='width:100%; height:300px;'", $tSelectedNodes);
$optSelectedForms->valueField = "Id";
$optSelectedForms->textField = "SelectedForms";



?>
<!DOCTYPE html>
<html lang="en">
<link href="../vendors/bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css">
    
    <?php $title = "User groups rights"; include($path."includes.php"); ?>
  
<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          	<div class="page-title">
              <div class="title_left">
                <h3>User Group Rights</h3>
              </div>
            </div>
          	<div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <br />
                    <form id="form1" method="post" data-parsley-validate class="form-horizontal form-label-left" action="grouprights.php">
                    	<div class="form-group">
                          <input type="hidden" id="userGroupId" name="userGroupId" value="<?php echo $OptUserGroup->SelectedValue(); ?>" />
                   		  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="OptUserGroup">Group Name</label>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                            	<?php $OptUserGroup->Bind(); ?>
                            </div>
                            
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            	<br />
                            	<button type="submit" id="CmdLoadForms" name="CmdLoadForms" class="btn btn-success" title="Load Forms">Load</button>
                            </div>
                        </div>
                    </form>
                    <div class="form-group">
                   	  <div class="col-md-4 col-sm-4 col-xs-12">
                      	<label class="control-label" for="optAllForms">All Forms</label>
                        <?php $optAllForms->Bind(); ?>
                      </div>
                        
                      <div class="col-md-1 col-sm-1 col-xs-12" style="margin-top:24px;">
                      	<button type="button" id="CmdAdd" name="CmdAdd" class="btn btn-default" style="width:100%" title="Add">&gt;</button>
                        <button type="button" id="CmdAddAll" name="CmdAddAll" class="btn btn-default" style="width:100%" title="Add All">&gt;&gt;</button>
                           
                        <button type="button" id="CmdRemove" name="CmdRemove" class="btn btn-default" style="width:100%" title="Remove">&lt;</button>
                        <button type="button" id="CmdRemoveAll" name="CmdRemoveAll" class="btn btn-default" style="width:100%" title="Remove All">&lt;&lt;</button>
                        
                        <button type="button" id="CmdSave" name="CmdSave" class="btn btn-default" style="width:100%" title="Save">Save</button>
                            
                      </div>
                        
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        	<label class="control-label" for="optSelectedForms">Accessible Forms</label>
                            <?php $optSelectedForms->Bind(); ?>
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
<script src="js/grouprights.js"></script>
</html>

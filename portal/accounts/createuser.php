<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."accounts/accountrepository.php");

$accountRepo = new AccountRepository($dc);


$tUserGroups = $accountRepo->GetUserGroups();


$OptUserGroup = new ComboBox("OptUserGroup", "class='form-control'", $tUserGroups);
$OptUserGroup->valueField = "Id";
$OptUserGroup->textField = "GroupName";


$message = "";
$response = -1;

$id	   = isset($_REQUEST['id'])	   ? (int)$_REQUEST['id']	 : 0;
$TxtEditId = isset($_REQUEST['TxtEditId']) ? (int)$_REQUEST['TxtEditId'] : 0;



#load user group for edit
if ( $id > 0 && $TxtEditId == 0 )
{
	$user = $accountRepo->GetUserById($id);
	
	$groupId = 0;
	$TxtTitle = "";
	$TxtUsername = "";
	$active = -1;
	
	if($user && $user->rowsCount() > 0)
	{
		$row = $user->Rows[0];
		
		$groupId  	  = $row->GroupId;
		$TxtTitle 	  = $row->Title;
		$TxtUsername  = $row->Username;
		$userPic	  = $row->Picture;
		$active   	  = $row->Active;
	}
}
elseif ( $id == 0 && $TxtEditId > 0 )
{
	#edit user
	$groupId	 		= isset($_REQUEST['OptUserGroup']) 	  	 ? (int)$_REQUEST['OptUserGroup']  : 0;
	$TxtTitle	 		= isset($_REQUEST['TxtTitle'])  		 ? $_REQUEST['TxtTitle']   		   : "";
	$TxtUsername		= isset($_REQUEST['TxtUsername']) 	  	 ? $_REQUEST['TxtUsername']  	   : "";
	//$TxtPassword		= isset($_REQUEST['TxtPassword']) 	  	 ? $_REQUEST['TxtPassword'] 	   : "";
	//$TxtConfirmPassword = isset($_REQUEST['TxtConfirmPassword']) ? $_REQUEST['TxtConfirmPassword'] : "";
	$OptActive		    = isset($_REQUEST['OptActive'])	   		 ? $_REQUEST['OptActive']			: 0;
	
	
	$TxtUsername 		= $purifier->purify($TxtUsername);
	//$TxtPassword 		= $purifier->purify($TxtPassword);
	//$TxtConfirmPassword = $purifier->purify($TxtConfirmPassword);
	
	//if(strcasecmp($username, $db_username)===0 && $password==$db_password)
	//if( $TxtPassword == $TxtConfirmPassword )
	{
		#updating
		if( $TxtEditId > 0 && strlen ($TxtUsername) > 3 )
		{
			#check duplication
			if ( $accountRepo->IsUserExist($TxtEditId, $TxtUsername) == 0 )
			{
				$response = $accountRepo->UpdateUser( $TxtEditId, $groupId, $TxtTitle, $TxtUsername, $OptActive );
				
				if ( $response > 0 )
				{
					$groupId = 0;
					$TxtUsername = "";
					$TxtTitle = "";
					$message = "Record updated successfully.";
				}
				else
					$message = "Record not updated.";
			}
			else
			{
				$response = 0;
				$message = "'".$TxtUsername."' user name is already exist.";
			}
		}
	}
	/*
	else
	{
		$response = 0;
		$message = "Password and confirm password not matched.";
	}*/
	
	$id = "";
}
elseif ( $id == 0 && $TxtEditId == 0 )
{
	#new user
	$groupId	 		= isset($_REQUEST['OptUserGroup']) 	  	 ? (int)$_REQUEST['OptUserGroup']  : 0;
	$TxtTitle	 		= isset($_REQUEST['TxtTitle'])  		 ? $_REQUEST['TxtTitle']   		   : "";
	$TxtUsername		= isset($_REQUEST['TxtUsername']) 	  	 ? $_REQUEST['TxtUsername']  	   : "";
	$TxtPassword		= isset($_REQUEST['TxtPassword']) 	  	 ? $_REQUEST['TxtPassword'] 	   : "";
	$TxtConfirmPassword = isset($_REQUEST['TxtConfirmPassword']) ? $_REQUEST['TxtConfirmPassword'] : "";
	
	$TxtUsername = $purifier->purify($TxtUsername);
	$TxtPassword = $purifier->purify($TxtPassword);
	
	if( $TxtPassword == $TxtConfirmPassword )
	{
		#new user
		if( strlen ($TxtUsername) > 3 )
		{
			#check duplication
			if ( $accountRepo->IsUserExist(0, $TxtUsername) == 0 )
			{
				$response = $accountRepo->SaveUser($groupId, $TxtTitle, $TxtUsername, $TxtPassword, 1);
				
				if ($response > 0)
				{
					$groupId = 0;
					$TxtUsername = "";
					$TxtTitle = "";
					$message = "Record saved successfully.";
				}
				else
					$message = "Record not saved.";
			}
			else
			{
				$response = 0;
				$message = "'".$TxtUsername."' user name is already exist.";
			}
		}
	}
	else
	{
		$response = 0;
		$message = "Password and confirm password not matched.";
	}
	
	$id = "";
	
}

$tActive = new DataTable();
$tActive->SetColumns( array("Id", "Value") );
$tActive->addRow( array("1", "Yes") );
$tActive->addRow( array("0", "No")  );

$OptActive = new ComboBox("OptActive", "class='form-control'", $tActive);
$OptActive->valueField = "Id";
$OptActive->textField = "Value";


if($active!="") $OptActive->SetSelectedValue($active);


$OptUserGroup->SetSelectedValue($groupId);


$tUsers = $accountRepo->GetUsers();


?>
<!DOCTYPE html>
<html lang="en">
    
    <?php $title = "Create User"; include($path."includes.php"); ?>
  
<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
          	<div class="page-title">
              <div class="title_left">
                <h3>Users</h3>
              </div>
            </div>
          	<div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>New User</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="form1" method="post" action="createuser.php" data-parsley-validate class="form-horizontal form-label-left">
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
                      <?php if ( $id > 0) { ?>
                      	
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="OptUserGroup">Picture </label>
                            <div id="defaultIcon" class="col-md-6 col-sm-6 col-xs-12" align="left">
                                <img id="ImgIcon" src="<?php echo $userPic; ?>" alt="img" width="100" height="120" style="max-width:100px; max-height:120px;" />
                                <input type="button" value="Change" onclick="javascript:onSetIcon(<?php echo $id; ?>)"/>
                            </div>
                        </div>
                          
                      <?php } ?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="OptUserGroup">Group Name <span class="required">*</span>
                        </label>
                         
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <?php $OptUserGroup->Bind(); ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtTitle">Title <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" id="TxtTitle" name="TxtTitle" required="required" 
                          	class="form-control col-md-7 col-xs-12" value="<?php echo $TxtTitle; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtUsername">User name <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" id="TxtUsername" name="TxtUsername" required="required" 
                          	class="form-control col-md-7 col-xs-12" value="<?php echo $TxtUsername; ?>">
                        </div>
                      </div>
                      
                      <?php if ( $id == 0 ) { ?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtPassword">Password <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="password" id="TxtPassword" name="TxtPassword" required="required" 
                          	class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtConfirmPassword">Confirm Password <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="password" id="TxtConfirmPassword" name="TxtConfirmPassword" required="required" 
                          	class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <?php } ?>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="OptNewsTypes">Active <span class="required">*</span></label>
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
                    
                    <form id="form2" data-parsley-validate class="form-horizontal form-label-left">
                    	<table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Group Name</th>
                              <th>Title</th>
                              <th>User name</th>
                              <th>Active</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php
						  if ($tUsers)
						  {
							  $index = 1;
							  foreach($tUsers->Rows as $row)
							  {
                          ?>
                            <tr>
                              <th scope="row"><?php echo $index++; ?></th>
                              <td><?php echo $row->GroupName; ?></td>
                              <td><?php echo $row->Title; ?></td>
                              <td><?php echo $row->Username; ?></td>
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
			window.location.href="createuser.php";
        }); 
    });
});

function onEdit(id)
{
	$("#id").val(id);
	$("#TxtEditId").val("0");
	//$("#Txtg").val(g);
	document.forms["form1"].submit();
}


function onSetIcon(id)
{
	$("#ChkDefaultIcon").attr('checked', false);
	$("#ImgIcon").attr("src", "");
	window.open("upload.php?id="+id+"&type=icon&from=user",'_blank');
}



</script>
</body>
</html>

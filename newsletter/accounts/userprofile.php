<?php //header('location: index.php'); //exit; ?>
<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."accounts/accountrepository.php");

$accountRepo = new AccountRepository($dc);

$tUserGroups = $accountRepo->GetUserGroups();


$OptUserGroup = new ComboBox("OptUserGroup", "disabled='true' class='form-control'", $tUserGroups);
$OptUserGroup->valueField = "Id";
$OptUserGroup->textField = "GroupName";


$message = "";
$response = -1;

$id = (int)$_SESSION['n_user_id'];
//$action = "";

$action = $_SESSION['TxtAction'];

//echo "action: ".$action."<br />";

if ( $action == "changePicture" )
{
	if( isset($_FILES['ImageFile']) )
	{
		$ImageFile = "ImageFile";
		
		$Destination = 'images';
		
		$ImageName = str_replace(' ','-',strtolower($_FILES[$ImageFile]['name']));
		
		$fileName = $functions->makeRandomFileName( $ImageName );
		
		$fileName = $Destination."/".$fileName;
		
		if ( move_uploaded_file($_FILES[$ImageFile]['tmp_name'], $fileName) )
		{
			include_once("accountrepository.php");
			$accountRepo = new AccountRepository( $dc );
			$response = $accountRepo->AddUserPicture( $newsId, $fileName );
			
			if ($response == 1)
				$message = "File uploaded successfully.";
			else
				$message = "File not uploaded.";
		}
	
	}
	else
	{
		$response = 0;
		$message = "Please select the picture.";
	}
}
//else if ( $action == "changePassword" )
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	#edit user profile
	$TxtCurrentPassword = isset($_REQUEST['TxtCurrentPassword']) ? $_REQUEST['TxtCurrentPassword'] : "";
	$TxtPassword		= isset($_REQUEST['TxtPassword']) 	  	 ? $_REQUEST['TxtPassword'] 	   : "";
	$TxtConfirmPassword = isset($_REQUEST['TxtConfirmPassword']) ? $_REQUEST['TxtConfirmPassword'] : "";
	
	$TxtCurrentPassword = $purifier->purify($TxtCurrentPassword);
	
	if ( !$accountRepo->VerifyUserPassword( $id, $TxtCurrentPassword ) )
	{
		$response = 0;
		$message = "Incorrect current password.";
	}
	else
	{
		
		$TxtPassword 		= $purifier->purify($TxtPassword);
		$TxtConfirmPassword = $purifier->purify($TxtConfirmPassword);
		
		//if(strcasecmp($username, $db_username)===0 && $password==$db_password)
		if( $TxtPassword == $TxtConfirmPassword )
		{
			#updating
			$response = $accountRepo->UpdateUserPassword( $id, $TxtPassword );
			
			if ( $response > 0 )
			{
				$id = "";
				$groupId = 0;
				$TxtUsername = "";
				$TxtTitle = "";
				$message = "Profile updated successfully.";
			}
			else
				$message = "Profile not updated.";
		}
		else
		{
			$response = 0;
			$message = "Password and confirm password not matched.";
		}
		
	}
}

//echo "id: ".$id."<br />";
//echo "TxtEditId: ".$TxtEdit;



if ( $id > 0 )
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
                    <h2>User Profile</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="form1" method="post" action="userprofile.php" data-parsley-validate class="form-horizontal form-label-left">
                    	<input type="hidden" id="TxtAction" name="TxtAction" />
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
                         
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="OptUserGroup">Picture </label>
                            <div id="defaultIcon" class="col-md-6 col-sm-6 col-xs-12" align="left" style="vertical-align:bottom;">
                                <img id="ImgIcon" src="<?php echo $userPic; ?>" alt="img" width="100" height="120" style="max-width:100px; max-height:120px;" />
                                <!--<input name="ImageFile" id="ImageFile" type="file" style="margin:8px 0px;"/>
                                <button type="button" onClick="javascript:uploadPic()" id="CmdUpload" name="CmdUpload" class="btn btn-success">Upload</button>-->
                            </div>
                        </div>
                    <!--</form>
                    
                    <form id="form2" method="post" action="userprofile.php" data-parsley-validate class="form-horizontal form-label-left">-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="OptUserGroup">Group Name </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <?php $OptUserGroup->Bind(); ?>
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtTitle">Title </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        	<label class="form-control col-md-7 col-xs-12"><?php echo $TxtTitle; ?></label>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtUsername">User name </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        	<label class="form-control col-md-7 col-xs-12"><?php echo $TxtUsername; ?></label>
                        </div>
                      </div>
                      
                      
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtCurrentPassword">Current Password <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="password" id="TxtCurrentPassword" name="TxtCurrentPassword" required="required" autocomplete="off" 
                            class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtPassword">New Password <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="password" id="TxtPassword" name="TxtPassword" required="required" autocomplete="off" 
                            class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtConfirmPassword">Confirm New Password <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="password" id="TxtConfirmPassword" name="TxtConfirmPassword" required="required" autocomplete="off" 
                            class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" id="CmdSubmit" name="CmdSubmit" class="btn btn-success">Update Password</button>
                          <button type="reset" id="CmdCancel" name="CmdCancel" class="btn btn-primary">Cancel</button>
                        </div>
                      </div>
                          
                      	
                      
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
		$("#CmdCancel").click(function() {
			window.location.href="changepassword.php";
        }); 
    });
	
	//$("#TxtPassword").focus();
});

function uploadPic()
{
	$("#TxtAction").val("changePicture");
	document.forms["form1"].submit();
}

function onEdit()
{
	$("#TxtAction").val("changePassword");
	document.forms["form1"].submit();
}

</script>
</body>
</html>

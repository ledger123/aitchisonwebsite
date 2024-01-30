<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."accounts/accountrepository.php");

$accountRepo = new AccountRepository($dc);

$student = $accountRepo->GetStudent($_SESSION['portal_SchoolNo']);
$row = $student->Rows[0];


$userPic = "images/".strtolower( $_SESSION['portal_School'] )."/".$_SESSION['portal_SchoolNo']. ".jpg";

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
                    
                    <form id="form1" method="post" action="userprofile.php" data-parsley-validate class="form-horizontal form-label-left">
                    	
                         <?php if(false) { ?>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="OptUserGroup"></label>
                            <div id="defaultIcon" class="col-md-6 col-sm-6 col-xs-12" align="left" style="vertical-align:bottom;">
                                <img id="ImgIcon" src="<?php echo $userPic; ?>" alt="img" width="160" height="200" style="max-width:160px; max-height:200px;" />
                                <!--<input name="ImageFile" id="ImageFile" type="file" style="margin:8px 0px;"/>
                                <button type="button" onClick="javascript:uploadPic()" id="CmdUpload" name="CmdUpload" class="btn btn-success">Upload</button>-->
                            </div>
                        </div>
						<?php } ?>
						
                    <!--</form>
                    
                    <form id="form2" method="post" action="userprofile.php" data-parsley-validate class="form-horizontal form-label-left">-->
                      <!--<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="OptUserGroup">Group Name </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <?php //$OptUserGroup->Bind(); ?>
                          
                        </div>
                      </div>-->
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Student Name </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        	<label class="form-control col-md-7 col-xs-12"><?php echo $row->studentName; ?></label>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Father Name </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        	<label class="form-control col-md-7 col-xs-12"><?php echo $row->fatherName; ?></label>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">School Number </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        	<label class="form-control col-md-7 col-xs-12"><?php echo $_SESSION['portal_SchoolNo']; ?></label>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">School </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        	<label class="form-control col-md-7 col-xs-12"><?php echo $_SESSION['portal_SchoolName']; ?></label>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Current Class </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        	<label class="form-control col-md-7 col-xs-12"><?php echo $row->studing; ?></label>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">House </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        	<label class="form-control col-md-7 col-xs-12"><?php echo $row->house; ?></label>
                        </div>
                      </div>
						
                      <!--<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtUsername">User name </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        	<label class="form-control col-md-7 col-xs-12"><?php //echo $TxtUsername; ?></label>
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
                      </div>-->
                          
                      	
                      
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
    
</body>
</html>

<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."accounts/accountrepository.php");
include("userrepository.php");

//var_dump($_SESSION);

$userRepo = new UserRepository($dc);

//echo $userRepo->generateStrongPassword(10, false, 'luds');
//echo "<br>";
//echo $userRepo->generateStrongPassword(9, true, 'luds');

$accountRepo = new AccountRepository($dc);

$message = "";
$response = -1;
$gotoLogin = false;

function captcha_counts() {
    if( isset($_SESSION['wrong_pword_count']) ) {
        $_SESSION['wrong_pword_count'] = (int)$_SESSION['wrong_pword_count']+1;
    }
    else
    {
        $_SESSION['wrong_pword_count'] = 0;
    }
}


#load user group for edit

if ( isset($_POST['CmdSubmit']) )
{
	#edit user password
	$TxtCurrentPassword	= isset($_POST['TxtCurrentPassword']) ? $_POST['TxtCurrentPassword'] : "";
    $TxtNewPassword		= isset($_POST['TxtNewPassword']) 	 ? $_POST['TxtNewPassword'] 	   : "";
	$TxtConfirmPassword = isset($_POST['TxtConfirmPassword']) ? $_POST['TxtConfirmPassword'] : "";

    $TxtCurrentPassword = $purifier->purify($TxtCurrentPassword);
    $TxtNewPassword     = $purifier->purify($TxtNewPassword);
    $TxtConfirmPassword = $purifier->purify($TxtConfirmPassword);

    $captcha = true;

    if( isset($_SESSION['wrong_pword_count']) && (int)$_SESSION['wrong_pword_count'] >= 3 ) {
        if ( isset($_POST["captcha"]) &&
            $_POST["captcha"] != "" &&
            $_SESSION["captchaCode"] == $_POST["captcha"] )
        {
            $captcha = true;
        }
        else
        {
            $message="Verification code is incorrect.";
            $captcha = false;
        }
    }


    $currentPassword = $userRepo->verifyCurrentPassword($_SESSION['portal_SchoolNo'], $TxtCurrentPassword);

    $dateTime        = $functions->getCurrentDateTime();


    $student = $userRepo->GetStudent($_SESSION['portal_SchoolNo']);
    $row_ = $student->Rows[0];

    $check24hours = true;
    if(strlen($row_->passwordUpdateTime) > 0)
    {
        $date_a = strtotime($dateTime);
        $date_b = strtotime($row_->passwordUpdateTime);

        $seconds = $date_a - $date_b;

        if($seconds < 86400 )
            $check24hours = false;

    }



    if( $captcha ) {
        if(true || $check24hours) {
            if ($currentPassword) {

                $isStrong = $userRepo->isPasswordStrong($TxtNewPassword);
                if ($isStrong) {

                    if ($TxtNewPassword == $TxtConfirmPassword) {

                        $response = $userRepo->updatePassword($_SESSION['portal_SchoolNo'], $TxtCurrentPassword, $TxtNewPassword, $dateTime);

                        if ($response > 0) {

                            $gotoLogin = true;
                            $message = "<p>Your password has been changed successfully.</p>
                                    <hr>
                                    <p>You are required to sign in again with the new password. Click here to <a href='" . $path . "logout.php'>re-login</a>.</p>";
                        } else {

                            $message = "Password not updated.";

                            captcha_counts();
                        }
                    } else {
                        $response = 0;
                        $message = "Your new and confirm passwords do not match.";

                        captcha_counts();

                    }
                } else {
                    $response = 0;
                    $message =
                        "<p style='color:#fff;'>You can set the minimum password length to 8 characters.</p>
                    <p style='color:#fff;'>Password must use at least three of the four available character types: lowercase letters, uppercase letters, numbers, and symbols.</p>";

                    captcha_counts();
                }
            } else {
                $response = 0;
                $message = "Your current password is incorrect.";

                captcha_counts();

            }
        }else {
            $response = 0;
            $message="You can change your password once in 24 hours.";

            captcha_counts();
        }
    }
    else {
        $response = 0;
        $message="Verification code is incorrect.";

        captcha_counts();

    }

}


$student = $userRepo->GetStudent($_SESSION['portal_SchoolNo']);
$row = $student->Rows[0];

$check24hours = true;
if(strlen($row->passwordUpdateTime) > 0)
{
    $date_a = strtotime($functions->getCurrentDateTime());
    $date_b = strtotime($row->passwordUpdateTime);

    $seconds = $date_a - $date_b;

    if($seconds < 86400 )
        $check24hours = false;
}

?>
<!DOCTYPE html>
<html lang="en">
    
    <?php $title = "Change User Password"; include($path."includes.php"); ?>
<style>
    .alert-success {
        color: #000;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }
</style>
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
                    <h2>Change User Password</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="form1" method="post" action="changepassword.php" data-parsley-validate class="form-horizontal form-label-left">
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
                      	  <?php } else if(strlen($row->passwordUpdateTime) > 0) { ?>
                           <div class="alert alert-info">
                               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                               Password was last changed on: <?php echo $functions->formatDate($row->passwordUpdateTime, 'F d, Y g:ia'); ?>
                           </div>
                           <?php } ?>
                         </div>

                        <?php if( !$gotoLogin ) {?>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Student Name </label>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <label disabled="disabled" class="form-control col-md-7 col-xs-12"><?php echo $row->studentName; ?></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Father Name </label>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <label disabled="disabled" class="form-control col-md-7 col-xs-12"><?php echo $row->fatherName; ?></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">School Number </label>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <label disabled="disabled" class="form-control col-md-7 col-xs-12"><?php echo $_SESSION['portal_SchoolNo']; ?></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">School </label>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <label disabled="disabled" class="form-control col-md-7 col-xs-12"><?php echo $_SESSION['portal_SchoolName']; ?></label>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtNewPassword">New Password <span class="required">*</span></label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="password" id="TxtNewPassword" name="TxtNewPassword" required="required" autocomplete="off"
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
                        <?php if(isset($_SESSION['wrong_pword_count']) && ((int)$_SESSION['wrong_pword_count'] >= 3)) { ?>


                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtConfirmPassword">Verification Code <span class="required">*</span></label>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <img src="../classes/captcha.php" /><br>
                                        <input class="form-control col-md-7 col-xs-12" type="text" name="captcha" id="captcha" autocomplete="off" placeholder="Verification Code" required="" />
                                    </div>
                                </div>

                            <?php } ?>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" id="CmdSubmit" name="CmdSubmit" class="btn btn-success">Change Password</button>
                          <button type="reset" id="CmdCancel" name="CmdCancel" class="btn btn-primary">Cancel</button>
                        </div>
                      </div>

                        <?php } ?>
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

<script>
    $( document ).ready(function() {
        /*$(function() {
            $("#CmdSubmit").click(function() {
                if ($("#TxtPassword").val() == "")
                {
                    alert("Please enter password.");
                    $("#TxtPassword").focus();
                    return false;
                }
                if ($("#TxtConfirmPassword").val() == "")
                {
                    alert("Please enter confirm password.");
                    $("#TxtConfirmPassword").focus();
                    return false;
                }
            });
        });*/

        $(function() {
            $("#CmdCancel").click(function() {
                window.location.href="changepassword.php";
            });
        });

        $("#TxtCurrentPassword").focus();
    });

    function onEdit(id)
    {
        $("#id").val(id);
        $("#TxtEditId").val("0");
        //$("#Txtg").val(g);
        document.forms["form1"].submit();
    }


</script>

</html>

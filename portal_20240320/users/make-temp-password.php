<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."accounts/accountrepository.php");
include("userrepository.php");

$userRepo = new UserRepository($dc);

//echo $userRepo->generateStrongPassword(10, false, 'luds');
//echo "<br>";
//echo $userRepo->generateStrongPassword(9, true, 'luds');

$message = "";
$response = -1;


#load user group for edit

if ( isset($_POST['CmdSubmit']) )
{
	#make temp password
	$LblSchoolNo	    = isset($_POST['txtSchoolNumber'])      ? $_POST['txtSchoolNumber']      : "";
    $TemporaryPassword	= isset($_POST['TxtTemporaryPassword']) ? $_POST['TxtTemporaryPassword'] : "";

    $LblSchoolNo       = $purifier->purify($LblSchoolNo);
    $TemporaryPassword = $purifier->purify($TemporaryPassword);



    $isStrong = $userRepo->isPasswordStrong( $TemporaryPassword );
    if( $isStrong ) {

        $response = $userRepo->makeTempPassword($LblSchoolNo, $TemporaryPassword);

        if ($response > 0) {

            $message = "<p>Temporary password has been created.</p>";
        } else
            $message = "Password not updated.";


    }
    else {
        $response = 0;
        $message = "<p>You can set the minimum password length to 8 characters.</p>
                    <p>Password must use at least three of the four available character types: lowercase letters, uppercase letters, numbers, and symbols.</p>";
    }

	
}

$row = null;
$schoolNo = isset($_POST['txtSchoolNumber']) ? $_POST['txtSchoolNumber'] : "";

if ( isset($_POST['CmdFindStudent']) )
{
    $schoolNo = $_POST['TxtSchoolNo'];

    $TemporaryPassword = $userRepo->generateStrongPassword(10, false, 'luds');
}


if(strlen ($schoolNo) > 0) {
    $student = $userRepo->GetStudent($schoolNo);
    if ($student->rowsCount())
        $row = $student->Rows[0];
}
?>
<!DOCTYPE html>
<html lang="en">
    
    <?php $title = "Make temporary password"; include($path."includes.php"); ?>
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
                <h3>Make Temporary Password</h3>
              </div>
            </div>
          	<div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">
                    <br />
                    <form id="form1" method="post" action="make-temp-password.php" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">School No </label>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <input class="form-control col-md-7 col-xs-12" id="TxtSchoolNo" name="TxtSchoolNo" value="<?php echo $schoolNo; ?>"/>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <button type="submit" id="CmdFindStudent" name="CmdFindStudent" class="btn btn-success">Load Student</button>
                            </div>
                        </div>

                    </form>

                      <?php if(null != $row) { ?>
                      <form id="form1" method="post" action="make-temp-password.php" data-parsley-validate class="form-horizontal form-label-left">
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

                          <input type="hidden" name="txtSchoolNumber" value="<?php echo $row->schoolNo; ?>" />
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
                                <label disabled="disabled" class="form-control col-md-7 col-xs-12" name="LblSchoolNo"><?php echo $row->schoolNo; ?></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">School </label>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <label disabled="disabled" class="form-control col-md-7 col-xs-12"><?php echo $row->school; ?></label>
                            </div>
                        </div>
                          <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile </label>
                              <div class="col-md-4 col-sm-4 col-xs-12">
                                  <label disabled="disabled" class="form-control col-md-7 col-xs-12"><?php echo $row->Mobile; ?></label>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Email </label>
                              <div class="col-md-4 col-sm-4 col-xs-12">
                                  <label disabled="disabled" class="form-control col-md-7 col-xs-12"><?php echo $row->Email; ?></label>
                              </div>
                          </div>


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtTemporaryPassword">Temporary Password <span class="required">*</span></label>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <input type="text" id="TxtTemporaryPassword" name="TxtTemporaryPassword" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $TemporaryPassword; ?>" maxlength="20">
                            </div>
                        </div>

                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" id="CmdSubmit" name="CmdSubmit" class="btn btn-primary">Make Temporary Password</button>
                          <button type="reset" id="CmdCancel" name="CmdCancel" class="btn btn-dark">Cancel</button>
                        </div>
                      </div>

                      </form>

                    <?php } ?>

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
                window.location.href="make-temp-password.php";
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

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(session_status()!=PHP_SESSION_ACTIVE) session_start();

$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");

include("accountrepository-two.php");

$accountRepo = new AccountRepository($dc);

$errors = [];

//echo $functions->getCurrentDateTime();
function validateGmail($email)
{
    //if ($email == "") return true;
    return preg_match('|^[A-Z0-9._%+-]+@gmail\.com$|i', $email);
}

function validateMobile($mobile)
{
    //if ($mobile == "") return true;
    return preg_match('/^[0-9]{11}+$/', $mobile);
}

$validate = true;

if ( isset($_POST['CmdSubmit']) ) {
    $txtEmail   		    = isset($_POST['txtEmail'])		        ? $_POST['txtEmail']  	        : "";
    $txtMobile   	        = isset($_POST['txtMobile'])	        ? $_POST['txtMobile']  	        : "";

    $txtEmail	         = $purifier->purify($txtEmail);
    $txtMobile		     = $purifier->purify($txtMobile);


    if($txtEmail == "" && $txtMobile == "") {
        $validate = false;
    }
    else {
        if(!validateGmail($txtEmail)) {
            $errors[] = "Please enter a valid gmail account.";

            $validate = false;
        }

        if(!validateMobile($txtMobile)) {
            $errors[] = "Please enter a valid mobile number.";

            $validate = false;
        }
    }


    $student = $accountRepo->GetStudentContacts($_SESSION['portal_SchoolNo']);
    $dRow = $student->Rows[0];
    if ($validate && strlen($dRow->Email_Gmail) > 0) {

        if ($dRow->Email_Gmail == $txtEmail &&
            $dRow->Mobile == $txtMobile)
        {
            $errors[] = "Please enter a changed gmail or mobile number.";

            $validate = false;
        }
    }

}

if ( $validate && isset($_POST['CmdSubmit']) )
{
    $txtEmail   		    = isset($_POST['txtEmail'])		        ? $_POST['txtEmail']  	        : "";
    $txtMobile   	        = isset($_POST['txtMobile'])	        ? $_POST['txtMobile']  	        : "";
    $txtAddress		        = isset($_POST['txtAddress'])		    ? $_POST['txtAddress'] 	        : "";
    $txtStreet		        = isset($_POST['txtStreet'])		    ? $_POST['txtStreet']		    : "";
    $txtCity 	   	        = isset($_POST['txtCity'])	            ? $_POST['txtCity']  	        : "";
    $txtProvince			= isset($_POST['txtProvince'])		    ? $_POST['txtProvince'] 		: "";

    $txtPostalZipCode		= isset($_POST['txtPostalZipCode'])		? $_POST['txtPostalZipCode']	: "";
    $txtPermanentAddress	= isset($_POST['txtPermanentAddress'])	? $_POST['txtPermanentAddress'] : "";
    $optAddressSame		   	= isset($_POST['optAddressSame'])		? (int)$_POST['optAddressSame'] : -1;



    $contactId = $_SESSION['contactId'];
    $schoolNo = $_SESSION['portal_SchoolNo'];

    $txtEmail	         = $purifier->purify($txtEmail);
    $txtMobile		     = $purifier->purify($txtMobile);
    $txtAddress	         = $purifier->purify($txtAddress);

    $txtStreet	         = $purifier->purify($txtStreet);
    $txtCity		     = $purifier->purify($txtCity);
    $txtProvince	     = $purifier->purify($txtProvince);

    $txtPostalZipCode	 = $purifier->purify($txtPostalZipCode);
    $txtPermanentAddress = $purifier->purify($txtPermanentAddress);
    $dateTime            = $functions->getCurrentDateTime();



    //$functions->formatDate($txtAddress);

    //SaveStudentContacts($contactId, $schoolNo, $email, $mobile, $address, $street, $city, $province, $postalZipCode, $permanentAddress, $addressSame)
    $response = $accountRepo->SaveStudentContacts($contactId, $schoolNo, $txtEmail, $txtMobile, $txtAddress, $txtStreet, $txtCity, $txtProvince, $txtPostalZipCode, $txtPermanentAddress, $optAddressSame, $dateTime);

    if ($response > 0) {

        $_SESSION['success'] = 'Your information has been received. Thank you';
        //$message = "Record saved successfully.";
        header('Location: user-contacts-two.php');
        exit(0);
    }
    else
        $errors[] = "Sorry, information not saved. Please try again later.";

}


//$student = $accountRepo->GetStudent($_SESSION['portal_SchoolNo']);
$student = $accountRepo->GetStudentContacts($_SESSION['portal_SchoolNo']);
$row = $student->Rows[0];

$_SESSION['contactId'] = $row->ContactId;

$userPic = 'images/user-avatar.png'; // "images/".strtolower( $_SESSION['portal_School'] )."/".$_SESSION['portal_SchoolNo']. ".jpg";

$readOnly = '';
$message = 'Please provide Gmail account and mobile number of the student for online learning.';
/*
if (strlen ($row->Email_Gmail) > 0) {

    $readOnly = '';
    $message = 'You can update your Gmail by Wednesday 3 June 2020';
}
*/
if (strlen ($row->Email_Gmail) > 0) {

    $readOnly = ' readonly ';
    $message = '';
}

$infoReceivedMSG = '';
if (strlen ($row->DateTime) > 0)
{
    $infoReceivedMSG = 'Your information has been received at: '. $functions->formatDate( $row->DateTime, "Y-m-d H:i:s");
}
if (strlen ($row->UpdateDateTime) > 0)
{
    $infoReceivedMSG = 'Your information has been updated at: '. $functions->formatDate( $row->UpdateDateTime, "Y-m-d H:i:s");
}


?>
<!DOCTYPE html>
<html lang="en">

<?php $title = "User Profile"; include($path."includes.php"); ?>

<body class="nav-md footer_fixed">
<div class="container body">
    <div class="main_container">

        <?php include($path."leftheader.php"); ?>

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Student's Profile</h3>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2 style="white-space: unset;width: 100%;"><?php echo $message; ?></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <div data-parsley-validate class="form-horizontal form-label-left">


                                    <?php if (isset($_SESSION['success']) && strlen($_SESSION['success']) > 0) {
                                        $success = $_SESSION['success'];
                                        ?>
                                        <div class="alert alert-success">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <span><?php echo $_SESSION['success']; ?></span>
                                        </div>
                                    <?php  }
                                    unset($_SESSION['success']);
                                    ?>

                                    <?php if (count($errors) > 0) { ?>
                                        <div class="alert alert-danger">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                            <?php foreach ($errors as $err) { ?>

                                                <li><?php echo $err;?></li>

                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                    <form id="form2" method="post" action="user-contacts-two.php" class="form-horizontal form-label-left">

                                        <?php $lblEmail = 'Email'; $lblMobile = 'Mobile #'; ?>

                                        <?php if (strlen ($row->Email_Gmail2) > 0) {?>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Updated Email </label>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <input readonly type="email" value="<?php echo $row->Email_Gmail2; ?>" class="form-control col-md-7 col-xs-12">

                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Updated Mobile # </label>
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <input readonly type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $row->Mobile2; ?>">

                                                </div>
                                            </div>
                                            <br/>

                                            <?php $lblEmail = 'Old Email'; $lblMobile = 'Old Mobile #'; ?>

                                        <?php }?>


                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $lblEmail; ?> </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input <?php echo $readOnly; ?> type="email" id="txtEmail" name="txtEmail" value="<?php echo $row->Email_Gmail; ?>" class="form-control col-md-7 col-xs-12" placeholder="abc@gmail.com">
                                                <!--<span class="small">Gmail only.</span>-->
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo $lblMobile; ?> </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input <?php echo $readOnly; ?> type="text" class="form-control col-md-7 col-xs-12" id="txtMobile" name="txtMobile" placeholder="03xx1234567" value="<?php echo $row->Mobile; ?>">
                                                <!--<span class="small">Please enter mobile number only. e.g. 03xxxxxxxxx</span>-->
                                            </div>
                                        </div>

                                        <?php /*?>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Address </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input type="text" id="txtAddress" name="txtAddress" value="<?php echo $row->Address; ?>" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Street # </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input type="text" id="txtStreet" name="txtStreet" value="<?php echo $row->Street; ?>" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">City </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input type="text" id="txtCity" name="txtCity" value="<?php echo $row->City; ?>" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Province </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input type="text" id="txtProvince" name="txtProvince" value="<?php echo $row->Province; ?>" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Zip/Postal Code </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input type="text" id="txtPostalZipCode" name="txtPostalZipCode" value="<?php echo $row->Postal_ZipCode; ?>" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Permanent Address </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input type="text" id="txtPermanentAddress" name="txtPermanentAddress" value="<?php echo $row->PermanentMailingAddress; ?>" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Is Permanent and Mailing address are same? </label>

                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <div class="btn-group" data-toggle="buttons">
                                                    <label class="btn btn-default<?php if($row->IsSamePerma_LocalAddress==1) echo " active "; ?>">
                                                        <input type="radio" id="optAddressSame" name="optAddressSame" value="1" required=""<?php if($row->IsSamePerma_LocalAddress==1) echo " checked "; ?>> &nbsp; Yes &nbsp;
                                                    </label>
                                                    <label class="btn btn-default<?php if($row->IsSamePerma_LocalAddress==0) echo " active "; ?>">
                                                        <input type="radio" id="optAddressSame" name="optAddressSame" value="0" required=""<?php if($row->IsSamePerma_LocalAddress==0) echo " checked "; ?>> &nbsp; No &nbsp;
                                                    </label>
                                                </div>
                                                <label id="lblShow" class="error">&nbsp;</label>
                                            </div>

                                        </div>
                                        <?php */ ?>

                                        <?php if (strlen ($row->Email_Gmail) == 0) {?>
                                            <div class="form-group" style="margin-top: 15px;">

                                                <div class="col-md-3 col-sm-3 col-xs-12"></div>
                                                <input type="submit" id="CmdSubmit" name="CmdSubmit" class="col-md-1 col-xs-12 btn btn-primary" style="margin-left:10px;" value="Submit">
                                                <div class="col-md-3 col-sm-7 col-xs-12"></div>

                                            </div>
                                        <?php } elseif ( false && strlen ($row->Email_Gmail) > 0 &&
                                            strlen ($row->Email_Gmail2) == 0) {?>

                                            <div class="form-group" style="margin-top: 15px;">

                                                <div class="col-md-3 col-sm-3 col-xs-12"></div>
                                                <input type="submit" id="CmdSubmit" name="CmdSubmit" class="col-md-1 col-xs-12 btn btn-primary" style="margin-left:10px;" value="Update">
                                                <div class="col-md-3 col-sm-7 col-xs-12"></div>

                                            </div>

                                        <?php } ?>

                                        <?php if (strlen ($infoReceivedMSG) > 0) {?>
                                            <br/><br/>
                                            <div class="alert alert-info">
                                                <span><?php echo $infoReceivedMSG; ?></span>
                                            </div>
                                        <?php } ?>
                                    </form>

                                    <div style="border-bottom: 2px solid #E6E9ED; margin:25px 10px;"></div>


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
                                            <label class="form-control col-md-7 col-xs-12" style="background: #ececec;"><?php echo $row->studentName; ?></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Father Name </label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <label class="form-control col-md-7 col-xs-12" style="background: #ececec;"><?php echo $row->fatherName; ?></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">School Number </label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <label class="form-control col-md-7 col-xs-12" style="background: #ececec;"><?php echo $_SESSION['portal_SchoolNo']; ?></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">School </label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <label class="form-control col-md-7 col-xs-12" style="background: #ececec;"><?php echo $_SESSION['portal_SchoolName']; ?></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Current Class </label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <label class="form-control col-md-7 col-xs-12" style="background: #ececec;"><?php echo $row->studing; ?></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">House </label>
                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                            <label class="form-control col-md-7 col-xs-12" style="background: #ececec;"><?php echo $row->house; ?></label>
                                        </div>
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
<script src="../vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js" type="581da81621cc5da54d1a849d-text/javascript"></script>
<?php include($path."footerincludes.php"); ?>
<!-- Datatables -->
<script>
    $(document).ready(function() {

    });

    $("#form2").submit(function() {

        if ( validateEmail( $('#txtEmail').val() ) === false) {
            alert('Please enter a valid gmail account.');
            $('#txtEmail').focus();
            return false;
        }

        if ( validateMobile( $('#txtMobile').val() ) === false) {
            alert('Please enter a valid mobile number.');
            $('#txtMobile').focus();
            return false;
        }

        return true;
    });


    function validateEmail($email) {
        if ($email == "") return true;
        //var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var emailReg = /^([A-Za-z0-9_\-\.])+\@([gmail|GMAIL])+\.(com)$/;
        return emailReg.test( $email );
    }

    function validateMobile(mobile) {
        if (mobile == "") return true;

        var phoneReg = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{5})/;

        return phoneReg.test( mobile );
    }

</script>
</body>
</html>

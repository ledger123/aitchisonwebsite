<?php
if(session_status()!=PHP_SESSION_ACTIVE) session_start();

$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."accounts/accountrepository.php");

include("complainrepository.php");

$complainRepo = new ComplainRepository($dc);

$accountRepo = new AccountRepository($dc);

$message = '';
$errors = [];


$validate = true;

if ( isset($_POST['CmdSubmit']) ) {
    $txtName   		    = isset($_POST['txtName'])		  ? $_POST['txtName']  	    : "";
    $txtSubject   	    = isset($_POST['txtSubject'])	  ? $_POST['txtSubject']  	: "";
    $txtMessage   	    = isset($_POST['txtMessage'])	  ? $_POST['txtMessage']  	: "";

    $txtName	         = $purifier->purify($txtName);
    $txtSubject		     = $purifier->purify($txtSubject);
    $txtMessage		     = $purifier->purify($txtMessage);


    if($txtSubject == "" || $txtMessage == "") {
        $validate = false;
    }

}

if ( $validate && isset($_POST['CmdSubmit']) )
{

    $schoolNo       = $_SESSION['portal_SchoolNo'];
    $dateTime       = $functions->getCurrentDateTime();


    $txtMessage = substr($txtMessage, 0, 350);

    //$functions->formatDate($txtAddress);

    //SaveStudentContacts($contactId, $schoolNo, $email, $mobile, $address, $street, $city, $province, $postalZipCode, $permanentAddress, $addressSame)
    $response = $complainRepo->Save($txtName, $txtSubject, $txtMessage, 'Pending', $schoolNo, $dateTime);

    if ($response > 0) {

        $_SESSION['success'] = 'Your query has been forwarded to the concerned school office. Thank you';
        header('Location: queries.php');
        exit(0);
    }
    else
        $errors[] = "Sorry, query not saved. Please try again later.";

}


$queries = $complainRepo->get(0, $_SESSION['portal_SchoolNo']);

$student = $accountRepo->GetStudentContacts($_SESSION['portal_SchoolNo']);
$studentRow = $student->Rows[0];

$email = $studentRow->Email_Gmail;
$mobile = $studentRow->Mobile;

if (strlen ($studentRow->Email_Gmail2) > 0) {

    $email = $studentRow->Email_Gmail2;
    $mobile = $studentRow->Mobile2;
}

if (strlen ($studentRow->Email_Gmail) == 0) {
    $errors[] = "Please submit your Gmail and mobile first. <a href='../accounts/user-contacts.php' target='_blank' style='color:blue;'>Click here</a>";
}
?>
<!DOCTYPE html>
<html lang="en">

<?php $title = "Academic Queries"; include($path."includes.php"); ?>

<body class="nav-md footer_fixed">
<div class="container body">
    <div class="main_container">

        <?php include($path."leftheader.php"); ?>

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Academic Queries</h3>
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
                                    <form id="form2" method="post" action="queries.php" class="form-horizontal form-label-left">

                                        <?php if (false) { ?>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Parent Name</label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input type="text" id="txtName" name="txtName" value="" class="form-control col-md-7 col-xs-12" placeholder="Type your name">
                                            </div>

                                        </div>
                                        <?php } ?>


                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Name </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input type="text" class="form-control col-md-7 col-xs-12" readonly value="<?php echo $_SESSION['portal_userTitle']; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Email </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input type="text" class="form-control col-md-7 col-xs-12" readonly value="<?php echo $email; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Mobile </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input type="text" class="form-control col-md-7 col-xs-12" readonly value="<?php echo $mobile; ?>">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Subject </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <input type="text" class="form-control col-md-7 col-xs-12" id="txtSubject" name="txtSubject" maxlength="50" placeholder="Type message subject here" value="">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Message </label>
                                            <div class="col-md-4 col-sm-4 col-xs-12">
                                                <textarea rows="5" class="form-control col-md-7 col-xs-12" id="txtMessage" name="txtMessage" maxlength="350" placeholder="Type your message here"></textarea>
                                                <span class="small" style="color:rgb(98, 98, 98);">Message can be 350 characters long.</span>
                                            </div>
                                        </div>

                                        <?php if (strlen ($studentRow->Email_Gmail) > 0) { ?>
                                        <div class="form-group" style="margin-top: 15px;">

                                            <div class="col-md-3 col-sm-3 col-xs-12"></div>
                                            <input type="submit" id="CmdSubmit" name="CmdSubmit" class="col-md-1 col-xs-12 btn btn-primary" style="margin-left:10px;" value="Submit">
                                            <div class="col-md-3 col-sm-7 col-xs-12"></div>

                                        </div>

                                        <?php } ?>

                                    </form>

                                    <div style="border-bottom: 2px solid #E6E9ED; margin:25px 10px;"></div>

                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <head>
                                                <tr style="background-color:#293594;color:#FFF;">
                                                <th>#</th>
                                                <th style="width: 15%;">Subject</th>
                                                <th style="width: 40%;">Message</th>
                                                <th>Status</th>
                                                <th>Date</th>
                                                </tr>
                                            </head>
                                            <body>
                                            <?php foreach ($queries->Rows as $row) { ?>
                                                <tr>
                                                    <td><?php echo $row->Id; ?></td>
                                                    <td><?php echo $row->Subject; ?></td>
                                                    <td><?php echo $row->Message; ?></td>
                                                    <td><?php echo $row->Status; ?></td>
                                                    <td><?php echo $functions->formatDate ($row->Datetime, 'M d, yy h:i a'); ?></td>
                                                </tr>
                                            <?php } ?>

                                            <?php if ($queries->rowsCount() == 0) { ?>
                                                <tr>
                                                    <td colspan="5" style="text-align: center;">No data available in table.</td>

                                                </tr>
                                            <?php } ?>
                                            </body>
                                        </table>
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
<!-- Datatables -->
<script>

    $("#form2").submit(function() {
/*
        if ( $('#txtName').val().trim() == '' ) {
            alert('Please enter your name.');
            $('#txtName').focus();
            return false;
        }
*/
        if ( $('#txtSubject').val().trim() == '' ) {
            alert('Please enter message subject.');
            $('#txtSubject').focus();
            return false;
        }

        if ( $('#txtMessage').val().trim() == '' ) {
            alert('Please enter message.');
            $('#txtMessage').focus();
            return false;
        }

        if (confirm('Are you sure you want to submit your query?')) {

            return true;
        } else {
            return false;
        }

    });

</script>
</body>
</html>

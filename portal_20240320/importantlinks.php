<?php
//header("Location: https://aitchison.edu.pk/newsandevents-testlink.php?id=350");
//die();

session_start();
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include("accounts/accountrepository.php");
include($path."classes/filing.php");

$accountRepo = new AccountRepository($dc);

$MsgForOnlineLearning = '';
$MsgForGroupCylce = '';
$groupcycle= '';
if ( true ) {

    $studentgroups = $accountRepo->getStudentGroupCycle($_SESSION['portal_SchoolNo']);
    if($studentgroups->rowsCount() > 0) {
        $studentgroup = $studentgroups->Rows[0];
        $groupcycle = $studentgroup['cycle'];


        if ( in_array($_SESSION['portal_School'], ['JSD', 'PSD']) ) {
            if ($groupcycle == "A") {
                $msg_student = "Your physical classes are scheduled on Monday and Wednesday.<br/>Friday will be utilized for Online Classes.";
            } else {
                $msg_student = "Your physical classes are scheduled on Tuesday and Thursday.<br/>Friday will be utilized for Online Classes.";
            }
            //$msg_student = '';

            $MsgForGroupCylce = '<div class="alert alert-primary" role="alert" style="color: #000; background-color: #cce5ff; border-color: #b8daff;">                  
                                <div><h3> Group Cycle '.$groupcycle.'</h3></div>
                                <div><p>'.$msg_student.'</p></div>
							</div>';
        }




    }
    if($_SESSION['portal_School'] == "SSD") {

        $MsgForGroupCylce = '<a href="time-table" style=""><div class="alert alert-primary" role="alert" style="color: #000; background-color: #cce5ff; border-color: #b8daff;">                  
                                <div><h3> Routine Programme for Senior School</h3></div>
								<div>WINTER TERM-2021</div>
								<div>Commencing Thursday 16<sup>th</sup> September, 2021</div>
								<div>Please <span style="color:blue; font-weight: bold;">click here</span> for Cycle Information and Timings</div>
							</div></a>';

        //$MsgForGroupCylce = '';
    }

}


if ( in_array($_SESSION['portal_School'], ['SSD', 'PSD', 'JSD'])  ) {
    /*and will be used for Online Classes.*/
    /*<div>Please visit <a href="notice.php?id=809" target="_blank" rel="noopener noreferrer" style="color:blue; text-decoration: underline;">FAQs</a> on Online Classes.</div>*/
    $MsgForOnlineLearning = '<div class="alert alert-primary" role="alert" style="color: #000; background-color: #cce5ff; border-color: #b8daff;">
                                <div><h3>Student\'s School Email Address:</h3></div>
								<div>Your official email address is <span>'. $_SESSION['portal_SchoolNo'] .'@aitchison.edu.pk</span> </div>
								
								<div>How to login:</div> 

                                <ol>
                                    <li>Go to <a href="https://mail.google.com/a/aitchison.edu.pk" target="_blank" rel="noopener noreferrer" style="color:blue; text-decoration: underline;">mail.google.com/a/aitchison.edu.pk</a></li>
                                    <li>Enter the above mentioned email</li>
                                    <li>Enter the current password of Parents\' Portal</li>
                                </ol>
                                
                                
							</div>';
}


?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Important Links"; include($path."includes.php"); ?>

<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php if ( isset( $_SESSION['PORTAL_ID'] ) ) include($path."leftheader.php"); else include($path."empty_leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
          
            <div class="container">
				<div class="row" id="newsletter">
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						 
						  <div class="row">

							<div class="page-title">
							  <h3 align="center"><?php echo $title; ?></h3>
						    </div>
							  
							<br />
                              <?php if(strlen ($MsgForGroupCylce) > 0) { ?>
                                  <div class="form-group row">
                                      <?php echo $MsgForGroupCylce; ?>
                                  </div>
                              <?php } ?>
                              <?php if(strlen ($MsgForOnlineLearning) > 0) { ?>
                                  <div class="form-group row">
                                      <?php echo $MsgForOnlineLearning; ?>
                                  </div>
                              <?php } ?>

                              <div class="form-group row">
                                  



                                  <a href="https://learningfromothers.org/conversations-with-sba" target="_blank" style=""><div class="alert alert-primary" role="alert" style="color: #000; background-color: #cce5ff; border-color: #b8daff;">
                                          <div><h3>Learning From Others</h3></div>
                                          <div>The biography of Syed Babar Ali - Comeplete Series</div>
                                      </div></a>


                                  </div>
                              </div>

						  </div>
						  
					  </div>
					</div>
				  </div>
				  <!--<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php //include($path."rightpanel.php"); ?>
				  </div>-->
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
</html>

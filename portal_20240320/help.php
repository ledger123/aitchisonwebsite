<?php
//header("Location: https://aitchison.edu.pk/newsandevents-testlink.php?id=350");
//die();
session_start();

#if user logged in
if ( isset( $_SESSION['PORTAL_ID'] ) ) {
	$path = "";
	include($path."classes/usersession.php");
	include($path."classes/settings.php");
}
if(strpos($_SERVER['REQUEST_URI'], "help.php")){
	header("location: helpdesk");
	exit();	
}
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Important Information"; include($path."includes.php"); ?>

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
							  
            	
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="width: 100%;">
								<div align="center" style="padding-bottom: 20px;">
									<img src="images/ac_logo130x130.png" width="130" height="130" alt="Aitchison College, Lahore.">
								</div>
							</div>

							<div class="page-title">
							  <h3 align="center"><?php echo $title; ?></h3>
						    </div>
							  
							<br />
							  
							<div>
                                <p><strong>Parents’ Portal</strong></p>


                                <p style="text-decoration: underline;">The Procedure to create a new account:</p>

                                <p>Username and passwords have been mailed to all Parents. In case, if you still have not received, please email at <span style="color: blue;">helpdesk@aitchison.edu.pk</span>. Please do not forget to mention the student’s school number, registered mobile number, or email address.</p>

                                <p>You will receive a username and password on your registered mobile or email address.</p>
                                <p>Please note that the information available on the portal is dynamic and only for general information which may vary. Please visit <a href="disclaimers">Disclaimer</a> and <a href="copyright">Copyrights</a> sections for more information.</p>

                                <h4>Questions or Concerns:</h4>
                                <p><span style="color: blue;">helpdesk@aitchison.edu.pk</span></p>


                                <?php /*?>
								<p>Username and passwords have been mailed to all Parents. In case, if you still have not received, please email at <span style="color: blue;">helpdesk@aitchison.edu.pk</span>. Please do not forget to mention student’s school number, registered mobile number or email address.</p>

								<p>Once you have emailed to IT Helpdesk, you will receive username and password on your registered mobile or email address. </p>
								<p>Please note that the information put on the portal is dynamic and only for general information which may vary and change time to time. Please visit <a href="disclaimer.php">Disclaimer</a> and <a href="copyrights.php">Copyrights</a> sections for more information.</p>

								<p>Parents and students should care their username and passwords. If you need help resetting your password, please email us.</p>
								<h4>Questions or Concerns:</h4>
								<p><span style="color: blue;">helpdesk@aitchison.edu.pk</span></p>

                                <?php */?>
								
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

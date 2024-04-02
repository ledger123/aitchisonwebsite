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

?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Important information"; include($path."includes.php"); ?>

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
							  <h3 align="center">Parents’ Portal</h3>
						    </div>
							  
							<br />
							  
							<div>
								
								
								<p style="text-decoration: underline; font-weight:bold;">Dear User,</p>

								<p><strong>Your password has expired. If you have not received a new password, please send a request to <span style="color: blue;">helpdesk@aitchison.edu.pk</span> or calling one of the following numbers:-</strong></p>
								
								<br>
								<p><strong>UAN:</strong>&nbsp;042-111-363-063 <strong>Dial ext:</strong>261</p>
								<p><strong>Phone:</strong>&nbsp;042-36363063-66 <strong>Dial ext:</strong>261</p>
								<!--<p><strong>Phone:</strong>&nbsp;042-36362990</p>
								<p><strong>Mobile:</strong>&nbsp;0336-4261261</p>-->
								
								<p><strong>Timings:</strong>&nbsp;8:00 am to 2:30 pm.</p>

                                <div class="alert alert-primary" role="alert" style="color: #721c24;background-color: #f8d7da;border-color: #f5c6cb; font-size:20px;">
                                    <strong>Note:</strong> Please send an email for a new password during holidays.
                                </div>

								<p><strong>Note:</strong> Please provide a valid mobile number, date of birth, school number and email along with password request.</p>
								
								<br>
								<a href="login.php" alt="" class="btn btn-primary">Go to Login</a>
								
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

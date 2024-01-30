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
if(strpos($_SERVER['REQUEST_URI'], "copyrights.php")){
	header("location: copyright");
	exit();	
}
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Copyrights"; include($path."includes.php"); ?>

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
								
								<p>Copyrights of Portals and its contents are owned by the College. No part or parts of this portal may be modified, copied, distributed, retransmitted, broadcasted, displayed, reproduced, published, licensed, transferred, sold or commercially dealt with any manner without the express prior written consent of the Aitchison College.</p>
								
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

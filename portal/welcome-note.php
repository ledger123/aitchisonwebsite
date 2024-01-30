<?php
//header("Location: https://aitchison.edu.pk/newsandevents-testlink.php?id=350");
//die();

$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Welcome to My Aitchison"; include($path."includes.php"); ?>
<style>
#defaultIcon {
  position: relative;
}

/* positions header-content at the bottom of header's context */
#defaultIcon-content {
  position: absolute;
  bottom: 0;
}
	
</style>
<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
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
								<p>Welcome to ‘My Aitchison’: instant, online, timely and secure information about your children. There are many categories of information designed to help parents understand what their boys are doing or need to do from homework to sport, to daily schedules to College Rules, and more.</p>

								<p>News Section also carries quick summaries of the latest activities and achievements. The Principal's Newsletters can be accessed either directly under that title or through the portals when the letters are confidential and not public.</p>

								<p>We are always pleased to accept helpful suggestions.</p>

								<br/>
								<br/>
								<img src="images/principal_signature_new.png" width="212" height="72">
								<br/>
								<p>Michael Thomson M.A., Dip. Ed., M.A.C.E<br/>
								Principal</p>
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

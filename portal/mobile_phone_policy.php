<?php
//header("Location: https://aitchison.edu.pk/newsandevents-testlink.php?id=350");
//die();

$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Mobile Phone Policy"; include($path."includes.php"); ?>
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
							    <p>A. Mobile phones are banned from examination rooms and halls. Boys who contravene this rule will have papers cancelled and face suspension or expulsion. Boys are obligated to hand mobile phones to the invigilator before the commencement of a paper.</p>
                                <p>B. Mobile phones are not to be used during school hours or on campus, especially as boys exit school grounds in the afternoon. Boys may make calls from car parking areas or at demarcated entrances/exits from school, e.g. the Senior Roundabout, Prep entrance or Jilani Road.</p>
                                <p>C. Boys may carry phones on them, but if they are withdrawn from a pocket or used, the phones will be confiscated. Mobile phones must be switched off until after school. Under no circumstances are mobile phones to be used for filming inside the College.</p>
                                <p>D. Senior boarders may only use mobile phones at designated hours/times, and always in the boarding house precinct. Boarders are not to wander with mobile phones. </p>

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

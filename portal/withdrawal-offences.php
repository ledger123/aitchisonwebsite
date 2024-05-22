<?php
//header("Location: https://aitchison.edu.pk/newsandevents-testlink.php?id=350");
//die();

$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Withdrawal Offences"; include($path."includes.php"); ?>
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
							  
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div align="center" style="padding-bottom: 20px;">
									<img src="images/ac_logo130x130.png" width="130" height="130" alt="Aitchison College, Lahore.">
								</div>
							</div>
							  
							  <div class="page-title">
								  <h3 align="center"><?php echo $title; ?></h3>
							  </div>
							  <br/>

							<p>Aitchison College expects very high standards of behaviour. Boys guilty of the following offences are liable to be withdrawn from the College.</p>
							  
							<ol type="a" style="line-height: 2;">
								<li>Using unfair means in the examinations/Tests, stealing and moral turpitude.</li>
								<li>Willfully and deliberately damaging the College property.</li>
								<li>Activities calculated to cause disaffection among others.</li>
								<li>Being insolent and rude towards a teacher.</li>
								<li>Violation of College rules.</li>
								<li>Without proper cause frequently absenting from classroom and other College activities.</li>
								<li>Possession of any type of weapons, narcotics, obscene literature.</li>
								<li>Poor performance in academics.</li>
							</ol>

							<br>

                            <!--<img src="images/principal_signature_new.png" width="212" height="72"><br>-->
							<!--<img src="images/signature/prince_signature_new.png" width="212" height="72" ><br />-->

                
            
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

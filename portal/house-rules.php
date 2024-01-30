<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."classes/filing.php");

$boarding_handbook_link = Filing::GetURL("", "Boarding Handbook", "../data/2021-22/boarding-handbook-2021-22-v2.pdf");

?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "House Rules"; include($path."includes.php"); ?>
	
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
				<div class="row" id="examinations">
				  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						  <div class="page-title">
							  <h3><?php echo $title; ?></h3>
						  </div>
						  <br />
						  <div class="row">
							  <p>The <a style="color: #000099;" href="<?php echo $boarding_handbook_link; ?>" rel="noopener noreferrer">Boarding Handbook</a> covers rules and regulations in more detail. In general, the basic rules are: be honest, be kind to one another, support one another, keep a tidy dorm area, dress well, be punctual, and follow the set routine. It can’t be easier.</p>
						  </div>
						  
					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php //include($path."rightpanel.php"); ?>
					  
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

</body>
</html>

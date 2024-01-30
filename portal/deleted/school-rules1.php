<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "School Rules 2018-19"; include($path."includes.php"); ?>
	
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
        	
            <div class="container" align="center">
				<div class="row" id="newsletter">
				  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						  <div class="page-title">
							  <h3><?php echo $title; ?></h3>
						  </div>
						  <br />
						  <div class="row">
							  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								 		
								  <p style="margin-bottom: 15px;">
									  <a href="data/2018-19/ac-rules-201819.pdf" target="_blank" download class="active lnkDownload"><span style=""><span class="glyphicon"></span> &nbsp;&nbsp; Download School Rules&nbsp;&nbsp;<?php /*?> Curriculum Guide 2019-20<?php */?> </span> </a>
								  </p>
								  
							  </div>
							
						  </div>
						  
					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php //include($path."rightpanel.php"); ?>
					  
					  <div class="row">
						 
						 <div style="" align="center">
							 <a href="sat-centre.php" target="_blank"><img class="img-responsive" src="images/sat-center.jpg" style="" alt="SAT Center"></a>
						 </div>								  
						 <br/>
						 
					  </div>
					  <div class="row">
						 
						 <div style="" align="center">
							 <a href="harkness-table.php" target="_blank"><img class="img-responsive" src="images/harkness-table.jpg" style="" alt="Harkness Table"></a>
						 </div>								  
						 <br/>
						 
					  </div>
					  <div class="row">
						 
						 <div style="" align="center">
							 <a href="student-recognition.php" target="_blank"><img class="img-responsive" src="images/student-recognition.jpg" style="" alt="Student Recognition"></a>
						 </div>								  
						 <br/>
						 
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

</body>
</html>

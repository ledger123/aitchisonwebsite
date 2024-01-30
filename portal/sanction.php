<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Sanction"; include($path."includes.php"); ?>
	
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
							  <h4>Page is under construction.</h4>
						  </div>
						  
					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php //include($path."rightpanel.php"); ?>
					  
					  <div class="row">
						 
						 <div style="" align="center">
							 <a href="sat-centre.php"><img class="img-responsive" src="images/sat-center.jpg" style="" alt="SAT Center"></a>
						 </div>								  
						 <br/>
						 
					  </div>
					  <div class="row">
						 
						 <div style="" align="center">
							 <a href="harkness-table.php"><img class="img-responsive" src="images/harkness-table.jpg" style="" alt="Harkness Table"></a>
						 </div>								  
						 <br/>
						 
					  </div>
					  <div class="row">
						 
						 <div style="" align="center">
							 <a href="student-recognition.php"><img class="img-responsive" src="images/student-recognition.jpg" style="" alt="Student Recognition"></a>
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

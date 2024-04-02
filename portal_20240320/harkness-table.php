<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Harkness Table"; include($path."includes.php"); ?>
	
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
							  <p>The <strong>Harkness table, Harkness method</strong>, or <strong>Harkness discussion</strong> is a teaching and learning method involving Prep and Senior students seated in a group to discuss ideas in an encouraging, open-minded environment with only occasional or minimal teacher intervention. The method encourages classes to be held in a discursive manner. The style is related to the Socratic method. At Aitchison College, we are adopting the method to reinforce what students have learned or acquired in concept learning.</p>
							  
							  <div>
								  <div class="col-lg-6 col-md-6 col-sm-12" align="center"> 
									<img src="images/news/harkness-table-1.jpg" width="600" height="400" alt="img" class="img-responsive">
								  </div>
								  <div class="col-lg-6 col-md-6 col-sm-12" align="center"> 
									<img src="images/news/harkness-table-2.jpg" width="600" height="400" alt="img" class="img-responsive">
								  </div>
							  </div>
							  
							  
						  </div>
						  
					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php //include($path."rightpanel.php"); ?>
					  
					  <div class="row">
						 
						 <div style="" align="center">
							 <a href="student_recognition"><img class="img-responsive" src="images/student-recognition.jpg" style="" alt="Student Recognition"></a>
						 </div>								  
						 <br/>
						 
					  </div>
					  <div class="row">
						 
						 <div style="" align="center">
							 <a href="meta_cognition"><img class="img-responsive" src="images/meta-cognition.jpg" style="" alt="Meta Cognition"></a>
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

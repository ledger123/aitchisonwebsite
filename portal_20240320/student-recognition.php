<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Student Recognition"; include($path."includes.php"); ?>
	
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
							  <p>Aitchison recognises the achievements of boys at all year levels. The Principal's High Achievers' Tea Party is held at the Principal's Bungalow and is attended by many hundreds of boys and their families. Major subject prizes are awarded at our Founders' Academic Day held in March. Throughout the course of the year, boys are recognised in school assemblies -mostly whole school assemblies on Friday when traditional uniform and turbans are worn.</p>
						  </div>
						  <div class="col-lg-12 col-md-12 col-sm-12" align="center"> 
							<img src="images/news/student-recognition.jpg" width="600" height="400" alt="img" class="img-responsive"><br>
						  </div>
						  <div align="center" style="margin-top: -15px;">The Principal addresses parents at the High Achievers' Tea Party</div>
						  
					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php //include($path."rightpanel.php"); ?>
					  

					  <div class="row">
						 
						 <div style="" align="center">
							 <a href="sat_centre"><img class="img-responsive" src="images/sat-center.jpg" style="" alt="SAT-Center"></a>
						 </div>								  
						 <br/>
						 
					  </div>
					  <div class="row">
						 <div style="" align="center">
							 <a href="harkness_table"><img class="img-responsive" src="images/harkness-table.jpg" style="" alt="Harkness Table"></a>
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

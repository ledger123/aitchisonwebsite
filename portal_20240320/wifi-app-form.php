<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "WiFi Application Form"; include($path."includes.php"); ?>
	
<style>
#defaultIcon {
  position: relative;
}

/* positions header-content at the bottom of header's context */
#defaultIcon-content {
  position: absolute;
  bottom: 0;
}
.a-span-text {	
	font-size: 14px;
}


@media only screen and (max-width: 400px){
	.a-span-text {	
		font-size: 12px;
	}
	a.lnkDownload {		
		margin: 5px 0px 5px 0px; 		
		border-top-right-radius: 5px;
		border-bottom-right-radius: 5px;
		letter-spacing: .6px;
		padding: 5px 1px;
		padding-left: 0px;
	}
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
						  <div class="">
						   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								  <!--<div style="max-width: 220px;">
									 <a href="data/ac-uni-guidance-counselling-2018-19.pdf" target="_blank"><img class="img-responsive" src="images/university-counselling.jpg" style="max-width:275px; height: 250px;" alt="University Counselling Guide 2018-19"></a>
								 </div>
								  <br/>-->
								  <p style="margin-bottom: 15px;">
									  <a href="data/2018-19/WIFIform.pdf" target="_blank" download class="active lnkDownload"><span style=""><span class="glyphicon"></span>
										  <span class="a-span-text">&nbsp;&nbsp; Download WiFi Application Form &nbsp;&nbsp;</span><?php /*?>University Counselling Guide 2018-19<?php */?> </span> </a>
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

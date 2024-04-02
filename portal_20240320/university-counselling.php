<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."classes/filing.php");

$download_link = Filing::GetURL2("", "ac-uni-guidance-counselling-2018-19.pdf", "../data/ac-uni-guidance-counselling-2018-19.pdf", 'Download', $functions );

?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "University Counselling"; include($path."includes.php"); ?>
	
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
								  <div style="max-width: 220px;">
									 <a href="<?php echo $download_link; ?>" target="_blank"><img class="img-responsive" src="images/university-counselling.jpg" style="max-width:275px; height: 250px;" alt="University Counselling Guide 2018-19"></a>
								 </div>
								  <br/>
								  <p style="margin-bottom: 15px; text-align: center; ">
									  <a href="<?php echo $download_link; ?>" target="_blank" download class="active lnkDownload"><span style=""><span class="glyphicon"></span>&nbsp;&nbsp; Download &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php /*?>University Counselling Guide 2018-19<?php */?> </span> </a>
								  </p>
							  </div>
						  </div>
						  
					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php include($path."rightpanel.php"); ?>

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

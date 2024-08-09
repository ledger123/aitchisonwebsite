<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."classes/filing.php");

$college_rules_filename = Filing::GetURL2("", "School Rules", "../data/2024-25/College-Rules-Aug-06-2024.pdf", 'Download College Rules', $functions);
//echo $filename;
?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "College Rules 2024-25"; include($path."includes.php"); ?>
<style>
	.assessment h3 {
		margin-top: 20px;
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
						  <div class="page-title" style="text-align: center;">
							  <h3><?php echo $title; ?></h3>
						  </div>
						  <br />
						  
						  <div class="">
                              <div style="max-width: 220px; margin-left: auto; margin-right: auto;">
                                  <a href="<?php echo $college_rules_filename; ?>" target="_blank"><img class="img-responsive" src="images/college-rules-2024-25.jpg" style="max-width:275px; max-height: 250px;" alt="College Rules 2024-25"></a>
                              </div>
                              <br/>
							  <p style="margin-bottom: 15px; text-align: center;">
								  <a href="<?php echo $college_rules_filename; ?>" target="_blank" class="active lnkDownload"><span style=""><span class="glyphicon"></span>&nbsp;Download College Rules&nbsp;</span> </a>
							  </p>
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
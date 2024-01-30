<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Parents' Meetings"; include($path."includes.php"); ?>
	
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
						  <div class="table-responsive">
							  
							  <?php if (true || $_SESSION['portal_School'] == "JSD" ) { ?>
							  <table align="center" cellspacing="6" class="table table-bordered jambo_table" style="width: 90%;">
								<tbody>

								  <tr>
									<th align="center" class="ptm_mtitle" colspan="3"><div align="center"><strong>Teacher-Parent Meetings &amp; Boarding Parents (All Schools)</strong></div></th>
								  </tr>

								  <tr>
									<th align="center" class="ptm_mtitle2"><div align="center"><strong>Meeting</strong></div></th>
									<th align="center" class="ptm_mtitle2"><div align="center"><strong>Date/Time</strong></div></th>
								  </tr>

								  <tr class="ptm_row2">
									<td align="center">1<sup>st</sup> Teacher Parent Meeting</td>
									  <td align="center">Thursday, 3<sup>rd</sup> October - Friday, 4<sup>th</sup> October, 2019</td>
								  </tr>
								  <tr class="ptm_row2">
									<td align="center">2<sup>nd</sup> Teacher Parent Meeting</td>
									  <td align="center">Friday, 21<sup>st</sup> February - Saturday, 22<sup>nd</sup> February, 2020</td>
								  </tr>
								  <tr class="ptm_row2">
									<td align="center">3<sup>rd</sup> Teacher Parent Meeting</td>
									  <td align="center">Friday, 17<sup>th</sup> April - Saturday, 18<sup>th</sup> April, 2020</td>
								  </tr>
								  <?php /*?><tr class="ptm_row2">
									<td align="center">C1(Pre) Teacher Parent Meeting</td>
									<td align="center">Friday, 26<sup>th</sup> April 2019</td>
								  </tr><?php */?>

								</tbody>
							  </table>
							  
							  <?php }elseif ( $_SESSION['portal_School'] == "PSD" ) { ?>
							  
							  <?php }elseif ( $_SESSION['portal_School'] == "SSD" ) { ?>
							  
							  <?php } ?>
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

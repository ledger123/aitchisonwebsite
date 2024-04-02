<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php 
		$title = "Parking Details"; 
		include($path."includes.php"); ?>
	
<style>
#defaultIcon {
  position: relative;
}

/* positions header-content at the bottom of header's context */
#defaultIcon-content {
  position: absolute;
  bottom: 0;
}
	.head_background{

		color: white;
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
						  <div class="page-title">
							  <h3><?php echo $title; ?></h3>
						  </div>
						  
						  <div class="row">
							  	<?php /*?><div class="page_title">
								<h3>Parking Details</h3>
								</div><?php */?>

								<p>&nbsp;</p>

								<div class="table-responsive">
								<table border="1" cellpadding="0" cellspacing="0" class="jambo_table table table-bordered" style="width:946px">
									<tbody>
										<tr style="color: #FFFFFF; height: 53px !important;">
											<th style="margin-left:.1in; height: 53px; width: 162px; padding:.1in;">Category</th>
											<th style="width: 114px; padding:.1in;">Stickers</th>
											<th style="width: 179px; padding:.1in;">Entry</th>
											<th style="width: 182px; padding:.1in;">Pick/ Drop</th>
											<th style="width: 165px; padding:.1in;">Parking</th>
											<th style="width: 130px; padding:.1in;">Exit</th>
										</tr>
										<tr>
											<th rowspan="3" style="color: #FFFFFF; padding:.1in;">Junior School</th>
											<td style="height: 35px; padding:.1in;">Staff</td>
											<td style="padding:.1in;">Monnoo Canal Gate</td>
											<td style="padding:.1in;">Chinar Avenue</td>
											<td style="padding:.1in;">Chinar Avenue</td>
											<td style="padding:.1in;">Babar Ali Gate Mall Road</td>
										</tr>
										<tr>
											<td style="height: 35px; padding:.1in;">Day Boys</td>
											<td style="padding:.1in;">Monnoo Canal Gate</td>
											<td style="padding:.1in;">Junior School Road</td>
											<td style="padding:.1in;">Junior School Parking &amp; Junior School Road</td>
											<td style="padding:.1in;">Babar Ali Gate Mall Road</td>
										</tr>
										<tr>
											<td style="height: 35px; padding:.1in;">Boarders</td>
											<td style="padding:.1in;">Babar Ali Gate Mall Road</td>
											<td style="padding:.1in;">Gwyn House Chowk</td>
											<td style="padding:.1in;">Gwyn House Chowk</td>
											<td style="padding:.1in;">Babar Ali Gate Mall Road</td>
										</tr>
										<tr>
											<th rowspan="3" style="color: #FFFFFF; padding:.1in;">Prep School</th>
											<td style="height: 35px; padding:.1in;">Staff</td>
											<td style="padding:.1in;">Monnoo Canal Gate</td>
											<td style="padding:.1in;">Water Tank</td>
											<td style="padding:.1in;">Water Tank</td>
											<td style="padding:.1in;">Maratib Ali Gate Mall Road</td>
										</tr>
										<tr>
											<td style="height: 35px; padding:.1in;">Day Boys</td>
											<td style="padding:.1in;">Monnoo Canal Gate</td>
											<td style="padding:.1in;">Water Tank &amp; Old Building</td>
											<td style="padding:.1in;">Water Tank &amp; Old Building</td>
											<td style="padding:.1in;">Maratib Ali Gate Mall Road</td>
										</tr>
										<tr>
											<td style="height: 35px; padding:.1in;">Boarders</td>
											<td style="padding:.1in;">Maratib Ali Gate Mall Road</td>
											<td style="padding:.1in;">Old Building</td>
											<td style="padding:.1in;">Old Building</td>
											<td style="padding:.1in;">Maratib Ali Gate Mall Road</td>
										</tr>
										<tr>
											<th rowspan="3" style="color: #FFFFFF; padding:.1in;">Senior School</th>
											<td style="height: 35px; padding:.1in;">Staff</td>
											<td style="padding:.1in;">Monnoo Gate Sunder Das Road &amp; Principal Lane Gate</td>
											<td style="padding:.1in;">Godley Parking</td>
											<td style="padding:.1in;">Godley Parking</td>
											<td style="padding:.1in;">Monnoo Gate Sunder Das Road</td>
										</tr>
										<tr>
											<td style="height: 35px; padding:.1in;">Day Boys</td>
											<td style="padding:.1in;">Principal Lane Gate</td>
											<td style="padding:.1in;">Jilani avenue Chowk</td>
											<td style="padding:.1in;">Monnoo Gate Parking</td>
											<td style="padding:.1in;">Monnoo Gate Sunder Das Road</td>
										</tr>
										<tr>
											<td style="height: 35px; padding:.1in;">Boarders</td>
											<td style="padding:.1in;">Maratib Ali Gate Mall Road</td>
											<td style="padding:.1in;">Old Building</td>
											<td style="padding:.1in;">Old Building</td>
											<td style="padding:.1in;">Maratib Ali Gate Mall Road</td>
										</tr>
										<tr>
											<th style="color: #FFFFFF; padding:.1in;">All School<br />
											JS / PS</th>
											<td style="height: 35px; padding:.1in;">Day Boys</td>
											<td style="padding:.1in;">Monnoo Canal Gate</td>
											<td style="padding:.1in;">Behind Gwyn House&nbsp; &amp; Old Building</td>
											<td style="padding:.1in;">Behind Gwyn House&nbsp; &amp; Old Building</td>
											<td style="padding:.1in;">Maratib Ali Gate Mall Road</td>
										</tr>
										<tr>
											<th style="color: #FFFFFF; padding:.1in;">All School<br />
											SS / PS</th>
											<td style="height: 35px; padding:.1in;">Day Boys</td>
											<td style="padding:.1in;">Principal Lane Gate</td>
											<td style="padding:.1in;">Old Building</td>
											<td style="padding:.1in;">Old Building</td>
											<td style="padding:.1in;">Maratib Ali Gate Mall Road</td>
										</tr>
										<tr>
											<th style="color: #FFFFFF; padding:.1in;">Admin Block</th>
											<td style="height: 35px; padding:.1in;">Staff</td>
											<td style="padding:.1in;">Principal Lane Gate</td>
											<td style="padding:.1in;">Gurdawara</td>
											<td style="padding:.1in;">Gurdawara</td>
											<td style="padding:.1in;">Monnoo Gate Sunder Das Road</td>
										</tr>
									</tbody>
								</table>
								</div>

							  
							  
							  
						  </div>
						  
					  </div>
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

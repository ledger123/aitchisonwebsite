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
									<table class="jambo_table table table-bordered" style="width:100%">
										<thead>
											<tr style="background-color:#293594;color:#FFF;">
												<th>Category</th>
												<th>Stickers</th>
												<th>Entry</th>
												<th>Pick/ Drop</th>
												<th>Parking</th>
												<th>Exit</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th rowspan="3">Junior School</th>
												<td>Staff</td>
												<td>Monnoo Canal Gate</td>
												<td>Chinar Avenue</td>
												<td>Chinar Avenue</td>
												<td>JS Babar Ali Gate Mall Road</td>
											</tr>
											<tr>
												<td>Day Boys</td>
												<td>Monnoo Canal Gate</td>
												<td>Junior School Road</td>
												<td>
												<p>1) Junior School Parking</p>

												<p>2) Junior School Road</p>
												</td>
												<td>JS Babar Ali Gate Mall Road</td>
											</tr>
											<tr>
												<td>Boarders</td>
												<td>JS Babar Ali Gate Mall Road</td>
												<td>Gwyn House Road</td>
												<td>Gwyn House Road</td>
												<td>JS Babar Ali Gate Mall Road</td>
											</tr>
											<tr>
												<th rowspan="3">Prep School</th>
												<td>Staff</td>
												<td>Monnoo Canal Gate</td>
												<td>Swimming Pool Road</td>
												<td>Swimming Pool Road</td>
												<td>1) JS Babar Ali Gate Mall Road<br />
												2) Monnoo Sunder Das Gate</td>
											</tr>
											<tr>
												<td>Day Boys</td>
												<td>Monnoo Canal Gate</td>
												<td>Water Tank</td>
												<td>
												<p>1) Water Tank</p>

												<p>2) Old Tree</p>

												<p>3) Stable Area</p>
												</td>
												<td>1) JS Babar Ali Gate Mall Road<br />
												2) Monnoo Sunder Das Gate</td>
											</tr>
											<tr>
												<td>Boarders</td>
												<td>Monnoo&nbsp;Sunder Das Gate</td>
												<td><strong>Mosque Road</strong> For Pick and Drop for Boarder only </td>
												<td>(1)<strong>Mosque Road</strong> For Pick and Drop for Boarder only <br>
											    (2)<strong>Water Tank</strong> for Parents/ Visitors coming to visit Boarders</td>
												<td>Monnoo Sunder Das Gate</td>
											</tr>
											<tr>
												<th rowspan="3">Senior School</th>
												<td>Staff</td>
												<td>1) Monnoo Sunder Das Gate<br />
												2) Principal&#39;s Lane Gate</td>
												<td>Godley Parking</td>
												<td>Godley Parking</td>
												<td>Monnoo Sunder Das Gate</td>
											</tr>
											<tr>
												<td>Day Boys</td>
												<td>Principal Lane Gate</td>
												<td>1) Godley Parking for H2<br />
												2) MT Park Chowk</td>
												<td>Monnoo Sunder Das Gate Parking</td>
												<td>Monnoo Sunder Das Gate</td>
											</tr>
											<tr>
												<td>Boarders</td>
												<td>Monnoo Sunder Das Gate</td>
												<td>1) Godley Parking<br />
												2) Behind Kelly House</td>
												<td>1) Godley Parking<br />
												2) Behind Kelly House</td>
												<td>Monnoo Sunder Das Gate</td>
											</tr>
											<tr>
												<th>All School</th>
												<td>All School</td>
												<td>Monnoo Sunder Das Gate</td>
												<td>1) Behind Gwyn House<br />
												2) Old Tree<br />
												3) Water Tank<br />
												4) Stable Area<br />
												5) Godley House Park<br />
												6) Monnoo Sunder Das Gate Parking</td>
												<td>1) Behind Gwyn House<br />
												2) Old Tree<br />
												3) Water Tank<br />
												4) Stable Area<br />
												5) Godley House Park<br />
												6) Monnoo Sunder Das Gate Parking</td>
												<td>1) JS Babar Ali Gate Mall Road<br />
												2) Monnoo Sunder Das Gate</td>
											</tr>
											<tr>
												<th>Admin Block / Guests</th>
												<td>Staff</td>
												<td>1) Monnoo Sunder Das Gate<br />
												2) Principal&#39;s Lane Gate</td>
												<td>Gurdawara</td>
												<td>Gurdawara</td>
												<td>Monnoo Sunder Das Gate</td>
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

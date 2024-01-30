<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Classes"; include($path."includes.php"); ?>
	
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
							  	  <?php
							  			$current_cycle="";							  			
							  			if(in_array($_SESSION['portal_CurrentClass'], array('H1','C2'))){
											$current_cycle="Your Cycle is B";
											//echo $current_cycle;
										}elseif(in_array($_SESSION['portal_CurrentClass'], array('H2','C1'))){
											$current_cycle="Your Cycle is A";
										}
							  ?>
							  		
							
						  </div>
						  <br />
						  <?php /*?><div class="row">
						  	<div class="alert alert-primary" role="alert" style="color: #000; background-color: #cce5ff; border-color: #b8daff;">
								<strong><?php echo $current_cycle;?></strong>
							  </div>
						  </div><?php */?>
						  <div class="row">
							  <?php /*?><center>
									<div class="heading" style="color: #774532;">
										Page Under Construction
									<div class="text" style="color: #774532; visibility: hidden;">We're doing some work on the site</div>	
									</div>

								</center><?php */?>
							  <div  class="row table-responsive">
							  	<!--<table width="100%" border="0" cellspacing="0" cellpadding="3" class="table table-bordered jambo_table">
								  <tbody>
								  <tr class="head_background">
									<th rowspan="2" style="vertical-align: middle;">Day</th>
									<th colspan="8" ><div align="center">Period Number</div></th>
								  </tr>
								  <tr class="head_background">
									<th scope="col" style="width: 11.5%;"><div align="center">1</div></th>
									<th scope="col" style="width: 11.5%;"><div align="center">2</div></th>
									<th scope="col" style="width: 11.5%;"><div align="center">3</div></th>
									<th scope="col" style="width: 11.5%;"><div align="center">4</div></th>
									<th scope="col" style="width: 11.5%;"><div align="center">5</div></th>
									<th scope="col" style="width: 11.5%;"><div align="center">6</div></th>
									<th scope="col" style="width: 11.5%;"><div align="center">7</div></th>
									<th scope="col" style="width: 11.5%;"><div align="center">8</div></th>
									</tr>
								  <tr>
								   <th class="head_background"><div style="min-height: 40px !important;">Mon </div></th>
									<td class="border"><a title="
			Physics (Muhammad Rafiq(H1 Optional1)) ">Physics</a>&nbsp;<br></td>
									<td class="border"><a title="
			Physics (Muhammad Rafiq(H1 Optional1)) ">Physics</a>&nbsp;<br></td>
									<td class="border"><a title="
			Business Studies (Sadaf Hassan(H1 Optional1)) ">Business Studies</a>&nbsp;<br></td>
									<td class="border"><a title="
			Business Studies (Sadaf Hassan(H1 Optional1)) ">Business Studies</a>&nbsp;<br></td>
									<td class="border"><a title="
			Mathematics (Tahir Ahmad(H1 Optional6)) ">Mathematics</a>&nbsp;<br></td>
									<td class="border"><a title="
			Mathematics (Tahir Ahmad(H1 Optional6)) ">Mathematics</a>&nbsp;<br></td>
									<td class="border"><a title="
			Chemistry (Muhammad Luqman(H1 Optional1)) ">Chemistry</a>&nbsp;<br></td>
									<td class="border"><a title="
			Chemistry (Muhammad Luqman(H1 Optional1)) ">Chemistry</a>&nbsp;<br></td>
									</tr>
								  <tr>
									  <th class="head_background"><div  style="min-height: 40px !important;">Tue</div></th>
									<td class="border"><a title="
			Physics (Muhammad Rafiq(H1 Optional1)) ">Physics</a>&nbsp;<br></td>
									<td class="border"><a title="
			Physics (Muhammad Rafiq(H1 Optional1)) ">Physics</a>&nbsp;<br></td>
									<td class="border"><a title="
			Business Studies (Sadaf Hassan(H1 Optional1)) ">Business Studies</a>&nbsp;<br></td>
									<td class="border"><a title="
			Chemistry (Muhammad Luqman(H1 Optional1)) ">Chemistry</a>&nbsp;<br></td>
									<td class="border"><a title="
			Mathematics (Tahir Ahmad(H1 Optional6)) ">Mathematics</a>&nbsp;<br></td>
									<td class="border"><a title="
			Mathematics (Tahir Ahmad(H1 Optional6)) ">Mathematics</a>&nbsp;<br></td>
									<td class="border"><a title="
			Study Class (Shoaib Bin Hassan(H1 Optional5)) ">Study Class</a>&nbsp;<br></td>
									<td class="border"><a title="
			Study Class (Shoaib Bin Hassan(H1 Optional5)) ">Study Class</a>&nbsp;<br></td>
									</tr>
								  <tr>
									  <th class="head_background"><div  style="min-height: 40px !important;">Wed</div></th>
									<td class="border"><a title="
			Physics (Muhammad Rafiq(H1 Optional1)) ">Physics</a>&nbsp;<br></td>
									<td class="border"><a title="
			Physics (Muhammad Rafiq(H1 Optional1)) ">Physics</a>&nbsp;<br></td>
									<td class="border"><a title="
			Business Studies (Sadaf Hassan(H1 Optional1)) ">Business Studies</a>&nbsp;<br></td>
									<td class="border"><a title="
			Business Studies (Sadaf Hassan(H1 Optional1)) ">Business Studies</a>&nbsp;<br></td>
									<td class="border"><a title="
			Study Class (Wajiha Qadeer(H1 Optional5)) ">Study Class</a>&nbsp;<br></td>
									<td class="border"></td>
									<td class="border"><a title="
			Chemistry (Muhammad Luqman(H1 Optional1)) ">Chemistry</a>&nbsp;<br></td>
									<td class="border"><a title="
			Chemistry (Muhammad Luqman(H1 Optional1)) ">Chemistry</a>&nbsp;<br></td>
									</tr>
								  <tr>
									  <th class="head_background"><div  style="min-height: 40px !important;">Thu</div></th>
									<td class="border"><a title="
			Physics (Muhammad Rafiq(H1 Optional1)) ">Physics</a>&nbsp;<br></td>
									<td class="border"><a title="
			Mathematics (Tahir Ahmad(H1 Optional6)) ">Mathematics</a>&nbsp;<br></td>
									<td class="border"><a title="
			Business Studies (Sadaf Hassan(H1 Optional1)) ">Business Studies</a>&nbsp;<br></td>
									<td class="border"><a title="
			Business Studies (Sadaf Hassan(H1 Optional1)) ">Business Studies</a>&nbsp;<br></td>
									<td class="border"><a title="
			Study Class (Sara Ahmer(H1 Optional5)) ">Study Class</a>&nbsp;<br></td>
									<td class="border"><a title="
			Study Class (Muhammad Aslam Shehzad(H1 Optional5)) ">Study Class</a>&nbsp;<br></td>
									<td class="border"><a title="
			Chemistry (Muhammad Luqman(H1 Optional1)) ">Chemistry</a>&nbsp;<br></td>
									<td class="border"><a title="
			Chemistry (Muhammad Luqman(H1 Optional1)) ">Chemistry</a>&nbsp;<br></td>
									</tr>
								  <tr>
									  <th class="head_background"><div  style="min-height: 40px !important;">Fri</div></th>
									<td class="border"></td>
									<td class="border"></td>
									<td class="border"><a title="
			Mathematics (Tahir Ahmad(H1 Optional6)) ">Mathematics</a>&nbsp;<br></td>
									<td class="border"><a title="
			Mathematics (Tahir Ahmad(H1 Optional6)) ">Mathematics</a>&nbsp;<br></td>
									<td class="border"></td>
									<td class="border"></td>
									<td class="border"></td>
									<td class="border"></td>
									</tr>
								</tbody>
								  </table>-->
							  </div>
							  
							  <div class="row table-responsive">
							  	<?php include("allclasses.php"); ?>
								  <!--<p><strong>Note:</strong> The details will be available from the new term.</p>-->
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

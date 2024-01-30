<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include("adminrepositry.php");

$adminRepo = new AdminRepository($dc);


$data = $adminRepo->PortalAccessLog();


?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "Portal Access Log Report"; include($path."includes.php"); ?>

<!-- Datatables -->
<link href="<?php echo isset($path)?$path:""; ?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo isset($path)?$path:""; ?>vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
	

<style>
label.error {
	color: red;
	font-weight: 500;
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
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						  
						  <div class="">
							  <div class="page-title">
								  <h3><?php echo $title; ?></h3>
							  </div>
							  
							  <div class="x_content" style="display: block;">
							  	<div style="text-align: center; ">
									  
							  	</div>
								  <br/><br/>
								  
								  
									<table id="tbl-monthly-test" class="table table-bordered table-hover">
									  <thead>
										<tr>
										  <th style="width:40px; text-align:center;">#</th>
										  <th style="width:120px;">Country</th>
										  <th style="width:120px;">City</th>
										  <th style="width:100px;">Access Count</th>
										</tr>
									  </thead>
									  <tbody>
									  <?php
									  if ($data->rowsCount() > 0)
									  {
										  $index = 1;
										  foreach($data->Rows as $row)
										  {
											  
									  ?>
										<tr>
										  <th scope="row" style="text-align:center;"><?php echo $index++; ?></th>
										  <td><?php echo $row->Country; ?></td>
										  <td><?php echo $row->City; ?></td>
										  <td><?php echo $row->Counts; ?></td>
										</tr>
										<?php
											}
									   }
										?>
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
	<!-- Datatables -->
	<script src="<?php echo $path; ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo $path; ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?php echo $path; ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo $path; ?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
	<script src="<?php echo $path; ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
	
<script>
	
	$(document).ready(function () {
		
		var table = $('#tbl-monthly-test').DataTable({
			dom: "Bfrtip",
			buttons: [
				'print'
			],
			"ordering": false,
            responsive: true,
			"pageLength": 20
			//"pagingType": "full_numbers",
			
		});
	});
</script>

</body>
</html>

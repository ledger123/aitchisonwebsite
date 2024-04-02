<?php

$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."repositories/studentrepository.php");

$studentRepo = new StudentRepository ( $dc );

$sup_school  = $_SESSION['portal_sup_school'];
$sup_class	 = $_SESSION['portal_sup_class'];
$sup_section = $_SESSION['portal_sup_section'];
$sup_house	 = $_SESSION['portal_sup_house'];



?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "Dashboard"; include($path."includes.php"); ?>
<style>

	#superhome table {
		width: 100%;
	}
	
	#superhome th, td {
		text-align: center;
	}
	
	#superhome td > a {
		color: #0810A3;
	}
	
	.btn {
		width: 100%;
		height: 50px;
		font-size: 20px;
		padding-top: 10px;
	}
	
</style>
<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
          
            <div class="container">
				<div class="row" id="superhome">
				  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						  
						  <div class="row">
							  
							  <div class="page-title">
								  <h3><?php echo $title; ?></h3>
							  </div>
							  <br/>
							  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								  <a href="../superhome.php" class="btn btn-primary" title="">Switch to Parents' Portal</a>
							  </div>
							  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								  <a href="#" class="btn btn-primary" title="">Switch to Staff Portal</a>
							  </div>
							  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								  <a href="reports.php" class="btn btn-primary" type="button" title="">Reports</a>
							  </div>
						  </div>
						  
					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
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
<?php
		function addTRow($text){
			?>
		<tr>
			<td style="background-color: #ddd; text-align: left; font-weight: bold;" colspan="4"><?php echo $text;?></td>
		</tr>
		<?php
		}
	?>
</body>
</html>

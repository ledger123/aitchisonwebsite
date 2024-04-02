<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."repositories/studentrepository.php");

$studentRepo = new StudentRepository ( $dc );

$sup_school = $_SESSION['portal_sup_school'];
$sup_house = $_SESSION['portal_sup_house'];


$tStudents = $studentRepo->GetStudentsByHouse ( $sup_school, $sup_house );

if ( $sup_school == "JSD" ) $schoolName = "Junior School";
elseif ( $sup_school == "PSD" ) $schoolName = "Prep School";
elseif ( $sup_school == "SSD" ) $schoolName = "Senior School";


?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "Super User"; include($path."includes.php"); ?>
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
								  
								  <h4>House: &nbsp;<?php echo $sup_house . "&nbsp;-&nbsp;" . $schoolName; ?></h4> 
								  
							  </div>
							  <br/>
							  <div class="table-responsive">
								<table class="table table-bordered table-hover">
									<tr style="background-color: #4267b2; color: #fff;">
										<th width="10%" align="center"><div align="center">Class</div></th>
										<th width="10%" align="center"><div align="center">School No.</div></th>
										<th width="35%" align="center"><div align="center">Student Name</div></th>
										<th width="35%" align="center"><div align="center">Father Name</div></th>
										<th width="10%" align="center"><div align="center">Day Boy</div></th>
									</tr>
									
								  <?php 
									
									$index = 1;
								  foreach($tStudents->Rows as $row) {
									
									$index++;

								  ?>
									<tr>
										<td><?php echo $row->studing; ?></td>
										<td>
											<?php echo $row->schoolNo;?>
										</td>
										<td style="text-align: left;">
											<a href="hmaster-login.php?code=<?php echo $functions->simple_crypt( $row->schoolNo ); ?>"><?php echo $row->studentName;?></a>
										</td>
										<td style="text-align: left;"><?php echo $row->fatherName;?></td>
										<td><?php echo $row->bD;?></td>
									</tr>
									<?php
									}
								  ?>
								</table>
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

</body>
</html>

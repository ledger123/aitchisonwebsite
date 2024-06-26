<?php

$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."repositories/studentrepository.php");

$studentRepo = new StudentRepository ( $dc );

$sup_school  = $_SESSION['portal_sup_school'];
$sup_class	 = $_SESSION['portal_sup_class'];
$sup_section = $_SESSION['portal_sup_section'];
$sup_house	 = $_SESSION['portal_sup_house'];



if ( $sup_class  == "" &&
    $sup_section == "" &&
    $sup_house   == "") {
	
	$classes = array();
	$title = "Super User";

	if ($sup_school == "0" || $sup_school == "JSD") {
		$classes["K1"] = "K1";
		$classes["K2"] = "K2";
		$classes["K3"] = "K3";
		$classes["K4"] = "K4";
		$classes["K5"] = "K5";
		$classes["K6"] = "K6";
	}
	if ($sup_school == "0" || $sup_school == "PSD") {
		$classes["E2"] = "E2";
		$classes["M1"] = "M1";
		$classes["M2"] = "M2";
	}
	if ($sup_school == "0" || $sup_school == "SSD") {
		$classes["PreC1"] = "Pre C1";
		$classes["C1"] = "C1";
		$classes["C2"] = "C2";
		$classes["H1"] = "H1";
		$classes["H2"] = "H2";
	}
}
else {
	
	$tStudents = $studentRepo->GetStudents ( $sup_school, $sup_class, $sup_section, $sup_house );

	if ( $sup_school == "JSD" ) $schoolName = "Junior School";
	elseif ( $sup_school == "PSD" ) $schoolName = "Prep School";
	elseif ( $sup_school == "SSD" ) $schoolName = "Senior School";
	
	if ( strlen($sup_house) > 0 )
		$title = "House: " . $sup_house . " - " .$schoolName;
	
	if ( strlen($sup_class) > 0 )
		$title = "Class: " . $sup_class . " - " .$schoolName;
	
}


?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "Staff Home"; include($path."includes.php"); ?>
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
								  <h3><?php echo $title; ?></h3>
							  </div>
							  <br/>
							  
							  <?php 
							  if ( $sup_class  == "" && $sup_section == "" && $sup_house   == "") {
							  ?>
							  
							  <div class="table-responsive">
								<table class="table table-bordered table-hover">
									<tr style="background-color: #4267b2; color: #fff;">
										<th width="10%" align="center"><div align="center">Section</div></th>
										<th width="30%" align="center"><div align="center">Parents' Portal</div></th>
										<th width="30%" align="center"><div align="center">Students' Portal</div></th>
										<th width="30%" align="center"><div align="center">Boarders' Portal</div></th>
									</tr>
									
								  <?php 

									if ($sup_school == "0" || $sup_school == "JSD") {
										addTRow("Junior School");
									}

									$index = 1;
								  foreach($classes as $key => $value) {

									  if ($index <= 6 ) {
										$color = "#eaf8e6";
									  }
									  else if ($index <= 9 ) {
										  if ($index == 7 && ($sup_school == "0" || $sup_school == "JSD") ) 
											  addTRow("Prep School");

										  $color = "#ffeee9";
									  }
									  else {
										  if ($index == 10 && ($sup_school == "0" || $sup_school == "JSD") )
											  addTRow("Senior School");

										  $color = "#e9faff";
									  }

									  $index++;

								  ?>
									<tr>
										<td style="background-color: <?php echo $color;?>;"><?php echo $value;?></td>
										<td>
											<a href="autologin.php?portal=parent&class=<?php echo $key;?>">Parents' Login of <?php echo $value;?></a>
										</td>
										<td>
											<a href="autologin.php?portal=student&class=<?php echo $key;?>">Student's Login of <?php echo $value;?></a>
										</td>
										<td>
											<a href="autologin.php?portal=boarder&class=<?php echo $key;?>">Boarder's Login of <?php echo $value;?>
										</td>
									</tr>
									<?php
									}
								  ?>
								</table>
							</div>
							  
							  <?php } else { ?>
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
							  <?php } ?>
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

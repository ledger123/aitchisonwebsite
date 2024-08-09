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
	$title = "Management Portal";

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

<?php $title = $title; include($path."includes.php"); ?>
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
							  
							  <div class="page-title" style="text-align: center;">
								  <h3><?php echo $title; ?></h3>
                                  <p>Welcome to the Management Portal!

                                      This platform is designed to help you efficiently review all classes across Junior, Prep, and Senior Schools. By clicking on a class, the system will randomly select a student from selected class/School and present Parents Portal. You can explore different options, tailored specifically for each class and school level, to gain detailed insights and ensure smooth management.
                                        <br/>
                                      Thank you,<br/>
                                      IT Department</p>
							  </div>
							  <?php 
		                        if(false && ($_SESSION['portal_sup_username']=="akhtarrafiq" || $_SESSION['portal_sup_username']=="owais@aitchison.edu.pk")){
							  ?>
                                <h4>Parent's Queries</h4>
                                <ul style="list-style:none;-webkit-columns: 2; -moz-columns: 2; columns: 2; list-style-position: inside;">
                                    <li><a href="users/myqueries.php" class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp;Parent's Queries</a></li>

                                </ul>

                                <br/>
                                <h4>Gmail Reports</h4>
                                <ul style="list-style:none;-webkit-columns: 2; -moz-columns: 2; columns: 2; list-style-position: inside;">
                                    <li><a href="accounts/download-user-contacts.php?p=1" class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp;Export Gmail till 28 May</a></li>
                                    <li><a href="accounts/download-user-contacts.php?p=2" class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp;Gmail list after 28 May to date</a></li>
                                    <li><a href="accounts/download-user-contacts.php?p=4" class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp;Export Updated Gmail list</a></li>
                                </ul>

                                    <br/>
                                <h4>Activity Reports</h4>
							  	<ul style="list-style:none;-webkit-columns: 2; -moz-columns: 2; columns: 2; list-style-position: inside;">
									<li><a href="portal_login_stats.php" target="_blank" class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;Active Students</a></li>
									<li><a href="portal_notlogin.php" target="_blank" class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;Inactive Students</a></li>
									<li><a href="portal_students_inactive.php" target="_blank" class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;Portal Inactive</a></li>
									<li><a href="portal_active_percentage.php" target="_blank" class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;Portal Percentage</a></li>
                                    <li><a href="admin/rpt-download-files-logs.php" target="_blank"  class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;Downloaded Files Logs</a></li>
							    </ul>
									
							  <?php
							  	}
							  //'paprincipal', 'principal', 'viceprincipal', 'asim_ansari',
							  $allow_arr=array('0', 'paprincipal', 'principal', 'viceprincipal', 'asim_ansari', 'hmss', 'dhmss', 'hmps');
							  if(false && array_search($_SESSION['portal_sup_username'],$allow_arr,true) > 0) {
							  ?>

                              <h4>Gmail Reports</h4>
                              <ul style="list-style:none;-webkit-columns: 2; -moz-columns: 2; columns: 2; list-style-position: inside;">
                                  <li><a href="accounts/download-user-contacts.php?p=3" class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp;Export all Gmail </a></li>

                                  <?php /* ?>
                                  <li><a href="accounts/download-user-contacts.php?p=1" class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp;Export Gmail till 28 May</a></li>
                                  <li><a href="accounts/download-user-contacts.php?p=2" class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp;Gmail list after 28 May to date</a></li>
                                  <?php */ ?>
                              </ul>

                              <br/>
							  <h4>Activity Reports</h4>
								<ul style="list-style:none;-webkit-columns: 2; -moz-columns: 2; columns: 2; list-style-position: inside;">
									<li><a href="portal_login_stats.php" target="_blank" class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;Active Students</a></li>
									<li><a href="portal_notlogin.php" target="_blank" class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;Inactive Students</a></li>
									<li><a href="portal_students_inactive.php" target="_blank" class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;Portal Inactive</a></li>
									<li><a href="portal_active_percentage.php" target="_blank" class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;Portal Percentage</a></li>
                                    <li><a href="admin/rpt-download-files-logs.php" target="_blank"  class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;Downloaded Files Logs</a></li>
									<?php
									//if($_SESSION['portal_sup_username'] != 'hmjs'){
									?>

									<?php
									// }
									?>

								</ul>
							  <?php }
                              if(false && $_SESSION['portal_sup_username'] == 'hmjs') {
							  ?>
                                  <h4>Activity Reports</h4>
                                  <ul style="list-style:none;-webkit-columns: 2; -moz-columns: 2; columns: 2; list-style-position: inside;">
                                      <li><a href="portal_login_stats.php" target="_blank" class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;Active Students</a></li>
                                      <li><a href="portal_notlogin.php" target="_blank" class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;Inactive Students</a></li>
                                      <li><a href="portal_students_inactive.php" target="_blank" class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;Portal Inactive</a></li>
                                      <li><a href="portal_active_percentage.php" target="_blank" class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;Portal Percentage</a></li>


                                  </ul>


                              <?php } ?>


                              <?php if(false && $sup_school == 'ContExam') { ?>
                                  <ul style="list-style:none;-webkit-columns: 2; -moz-columns: 2; columns: 2; list-style-position: inside;">
                                      <li><a href="examination/verify-predicted-grades.php" class="btn btn-primary" style="min-width: 200px; text-align: left;"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp;Verify Predicted Grades</a></li>
                                  </ul>
                              <?php } ?>


							  <br/>
							  
							  <?php 
							  if ( $sup_class  == "" && $sup_section == "" && $sup_house   == "") {
							  ?>
							  
							  <div class="table-responsive">
								<table class="table table-bordered table-hover" style="width: 70%; margin-left: auto; margin-right: auto;">
									<tr style="background-color: #4267b2; color: #fff;">
										<th width="10%" align="center"><div align="center">Section</div></th>
										<th width="30%" align="center"><div align="center">Parents' Portal</div></th>
                                        <?php /*
										<th width="30%" align="center"><div align="center">Students' Portal</div></th>
										<th width="30%" align="center"><div align="center">Boarders' Portal</div></th>
										*/ ?>
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
                                        <?php /*
										<td>
											<a href="autologin.php?portal=student&class=<?php echo $key;?>">Student's Login of <?php echo $value;?></a>
										</td>
										<td>
											<a href="autologin.php?portal=boarder&class=<?php echo $key;?>">Boarder's Login of <?php echo $value;?>
										</td>
                                        */ ?>
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

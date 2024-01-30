<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."repositories/studentrepository.php");
include($path."repositories/studentloginrepository.php");
$studentRepo = new StudentRepository ( $dc );
$studentLoginRepo = new StudentLoginRepository ( $dc );
$message = "";
$response = -1;
$sup_school  = $_SESSION['portal_sup_school'];
$sup_class	 = $_SESSION['portal_sup_class'];
$sup_section = $_SESSION['portal_sup_section'];
$sup_house	 = $_SESSION['portal_sup_house'];
$ss_classes=array(
	"H2"	=> "H2",
	"H1"	=> "H1",
	"C2"	=> "C2",
	"C1"	=> "C1",
	"Pre"	=> "Pre C1"
);
$ps_classes=array(	
	"M2"	=> "M2",
	"M1"	=> "M1",
	"E2"	=> "E2"
);
$js_classes=array(	
	"K6"	=> "K6",
	"K5"	=> "K5",
	"K4"	=> "K4",
	"K3"	=> "K3",
	"K2"	=> "K2",
	"K1"	=> "K1",
);
// how many rows to show per page
//echo strtotime("-4 week");
$defaultdateofthemonth=date("Y-m-d", strtotime("-31 day"));
$from=isset($_REQUEST['from']) ? $functions->formatDate($_REQUEST['from'], "Y-m-d") : $defaultdateofthemonth; 
$to=isset($_REQUEST['to']) ? $functions->formatDate($_REQUEST['to'], "Y-m-d")." 23:59:59" : date("Y-m-d")." 23:59:59"; 
$title="Active Students Percentage";

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
          
            <div class="container"">
				<div class="row" id="superhome">
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						  
						  <div class="row">
							  <div align="right"><a href="superhome.php" class="btn btn-primary" style="min-width: 100px; text-align: left;"><i class="fa fa-backward" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;Back</a></div>
							  <div class="page-title">
								  <h3><?php echo $title; ?></h3>
							  </div>
							  <br/>
													 
						    <form id="formView1" action="portal_active_percentage.php" method="post" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
							
							
							
							<div class="row form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtNewsDate">From</label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                	<input type="text" id="from" name="from" required="required" 
                                      class="date-picker form-control col-md-7 col-xs-12" value="<?php echo $functions->formatDate($from, "m/d/Y"); ?>"/>
                                </div>
                            </div>
							<div class="row form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtNewsDate">To</label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                	<input type="text" id="to" name="to" required="required" 
                                      class="date-picker form-control col-md-7 col-xs-12" value="<?php echo $functions->formatDate($to, "m/d/Y"); ?>"/>
                                </div><br><br>
							<div class="row form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtNewsDate"></label>
                                <div class="col-md-3 col-sm-6 col-xs-12">
                                	<input type="submit" id="CmdSubmit" name="CmdSubmit" class="col-md-7 col-xs-11 btn btn-primary" style="margin-left:10px;" value="Submit">
                                </div>
								
								
                            </div>	
                          </form>
						  <div id="printit">
						  	  <div class="table-responsive">
								  <?php
								  if ($sup_school == "0" || $sup_school == "SSD") {
									  $schooltotal=0;
									  $schoolactive=0;
									  $schoolinactive=0;
									  $index=1;
								  ?>
								  <table class="table table-bordered table-hover" style="width: 100%;">
									<tr style="background-color: darkblue; color: #fff;">
										<th colspan="6"><div align="left">Senior School</div></th>
										
									</tr>  
									<tr style="background-color: #4267b2; color: #fff;">
										<th width="10%" align="center"><div align="center">Sr. #</div></th>
										<th width="18%" align="center"><div align="center">Class</div></th>
										<th width="13%" align="center"><div align="center">Total</div></th>
										<th width="13%" align="center"><div align="center">Active</div></th>
										<th width="13%" align="center"><div align="center">Inactive</div></th>
										<th width="13%" align="center"><div align="center">Percentage</div></th>
									</tr>
									<?php
									foreach($ss_classes as $key=>$value){
										//GetStudentActivePercentage($class, $from, $to);
										$data = $studentLoginRepo->GetStudentActivePercentage($key, $from, $to);
										$schooltotal+=intval($data[0]);
										$schoolactive+=intval($data[1]);
										$schoolinactive+=intval($data[2]);
											
									?>  
									<tr>
										<th scope="row"><?php echo $index++; ?></th>
										<th><?php echo $value; ?></th>
										<td style="text-align: center;"><?php echo $data[0]; ?></td>
										<td style="text-align: center;"><?php echo $data[1];; ?></td>
										<td style="text-align: center;"><?php echo $data[2]; ?></td>
										<td style="text-align: center;"><?php echo $data[3]; ?></td>
										
									</tr>
									<?php
									}
									?>
									<tr>
										<th scope="row">&nbsp;</th>
										<th>Total</th>
										<td style="text-align: center;"><?php echo $schooltotal; ?></td>
										<td style="text-align: center;"><?php echo $schoolactive; ?></td>
										<td style="text-align: center;"><?php echo $schoolinactive; ?></td>
										<td style="text-align: center;">
											<?php echo $studentLoginRepo->getPercentage($schooltotal, $schoolactive); ?></td>
										
									</tr>  
								  </table>
								  <?php } ?>
								  <?php
								  if ($sup_school == "0" || $sup_school == "PSD") {
									  $schooltotal=0;
									  $schoolactive=0;
									  $schoolinactive=0;
									  $index=1;
								  ?>
								  <table class="table table-bordered table-hover" style="width: 100%;">
									<tr style="background-color: darkblue; color: #fff;">
										<th colspan="6"><div align="left">Prep School</div></th>
										
									</tr>  
									<tr style="background-color: #4267b2; color: #fff;">
										<th width="10%" align="center"><div align="center">Sr. #</div></th>
										<th width="18%" align="center"><div align="center">Class</div></th>
										<th width="13%" align="center"><div align="center">Total</div></th>
										<th width="13%" align="center"><div align="center">Active</div></th>
										<th width="13%" align="center"><div align="center">Inactive</div></th>
										<th width="13%" align="center"><div align="center">Percentage</div></th>
									</tr>
									<?php
									foreach($ps_classes as $key=>$value){
										//GetStudentActivePercentage($class, $from, $to);
										$data = $studentLoginRepo->GetStudentActivePercentage($key, $from, $to);
										$schooltotal+=intval($data[0]);
										$schoolactive+=intval($data[1]);
										$schoolinactive+=intval($data[2]);
											
									?>  
									<tr>
										<th scope="row"><?php echo $index++; ?></th>
										<th><?php echo $value; ?></th>
										<td style="text-align: center;"><?php echo $data[0]; ?></td>
										<td style="text-align: center;"><?php echo $data[1];; ?></td>
										<td style="text-align: center;"><?php echo $data[2]; ?></td>
										<td style="text-align: center;"><?php echo $data[3]; ?></td>
										
									</tr>
									<?php
									}
									?>
									<tr>
										<th scope="row">&nbsp;</th>
										<th>Total</th>
										<td style="text-align: center;"><?php echo $schooltotal; ?></td>
										<td style="text-align: center;"><?php echo $schoolactive; ?></td>
										<td style="text-align: center;"><?php echo $schoolinactive; ?></td>
										<td style="text-align: center;">
											<?php echo $studentLoginRepo->getPercentage($schooltotal, $schoolactive); ?></td>
										
									</tr>  
								  </table>
								  <?php } ?>
								  <?php
								  if ($sup_school == "0" || $sup_school == "JSD") {
									  $schooltotal=0;
									  $schoolactive=0;
									  $schoolinactive=0;
									  $index=1;
								  ?>
								  <table class="table table-bordered table-hover" style="width: 100%;">
									<tr style="background-color: darkblue; color: #fff;">
										<th colspan="6"><div align="left">Junior School</div></th>
										
									</tr>  
									<tr style="background-color: #4267b2; color: #fff;">
										<th width="10%" align="center"><div align="center">Sr. #</div></th>
										<th width="18%" align="center"><div align="center">Class</div></th>
										<th width="13%" align="center"><div align="center">Total</div></th>
										<th width="13%" align="center"><div align="center">Active</div></th>
										<th width="13%" align="center"><div align="center">Inactive</div></th>
										<th width="13%" align="center"><div align="center">Percentage</div></th>
									</tr>
									<?php
									foreach($js_classes as $key=>$value){
										//GetStudentActivePercentage($class, $from, $to);
										$data = $studentLoginRepo->GetStudentActivePercentage($key, $from, $to);
										$schooltotal+=intval($data[0]);
										$schoolactive+=intval($data[1]);
										$schoolinactive+=intval($data[2]);
											
									?>  
									<tr>
										<th scope="row"><?php echo $index++; ?></th>
										<th><?php echo $value; ?></th>
										<td style="text-align: center;"><?php echo $data[0]; ?></td>
										<td style="text-align: center;"><?php echo $data[1];; ?></td>
										<td style="text-align: center;"><?php echo $data[2]; ?></td>
										<td style="text-align: center;"><?php echo $data[3]; ?></td>
										
									</tr>
									<?php
									}
									?>
									<tr>
										<th scope="row">&nbsp;</th>
										<th>Total</th>
										<td style="text-align: center;"><?php echo $schooltotal; ?></td>
										<td style="text-align: center;"><?php echo $schoolactive; ?></td>
										<td style="text-align: center;"><?php echo $schoolinactive; ?></td>
										<td style="text-align: center;">
											<?php echo $studentLoginRepo->getPercentage($schooltotal, $schoolactive); ?></td>
										
									</tr>  
								  </table>
								  <?php } ?>
							  </div>
						  </div>						  											   
						  <div style="float: right;"><a href="javascript:printDoc('page-title', 'printit');" class="btn btn-primary" style="min-width: 200px; text-align: center;">Print</a></div>	 
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
	<?php echo $path; include($path."footerincludes.php"); ?>
<?php
		function addTRow($text){
			?>
		<tr>
			<td style="background-color: #ddd; text-align: left; font-weight: bold;" colspan="4"><?php echo $text;?></td>
		</tr>
		<?php
		}
	?>
<script>
$( document ).ready(function() {
	$('#to').daterangepicker({
		singleDatePicker: true,
		calender_style: "picker_4"
		}, function(start, end, label) {
		  console.log(start.toISOString(), end.toISOString(), label);
	});
	$('#from').daterangepicker({
		singleDatePicker: true,
		calender_style: "picker_4"
		}, function(start, end, label) {
		  console.log(start.toISOString(), end.toISOString(), label);
	});
		

	});	
</script>	
<script>

function onPaging(g,id)
{
	//alert(g);
	$("#id").val(id);
	$("#TxtEditId").val("0");
	$("#Txtg").val(g);
	document.forms["formView"].submit();
}
</script>
	
</body>
</html>

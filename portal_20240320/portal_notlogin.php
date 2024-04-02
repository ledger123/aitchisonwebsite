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
if($sup_school== "0"){
	$classlist=array(
		"0" => "All Classes",
		"H2" => "H2",
		"H1" => "H1",
		"C2" => "C2",
		"C1" => "C1",
        //"Pre C1" => "Pre C1",
        "M2" => "M2",
		"M1" => "M1",
		"E2" => "E2",
		"K6" => "K6",
		"K5" => "K5",
		"K4" => "K4",
		"K3" => "K3",
		"K2" => "K2",
		"K1" => "K1"
	);
}elseif($sup_school== "JSD"){
	$classlist=array(
		"0" => "All Classes",		
		"K6" => "K6",
		"K5" => "K5",
		"K4" => "K4",
		"K3" => "K3",
		"K2" => "K2",
		"K1" => "K1"
	);
}elseif($sup_school== "PSD"){
	$classlist=array(
		"0" => "All Classes",
        "M2" => "M2",
		"M1" => "M1",
		"E2" => "E2"		
	);
}elseif($sup_school== "SSD"){
	$classlist=array(
		"0" => "All Classes",
		"H2" => "H2",
		"H1" => "H1",
		"C2" => "C2",
		"C1" => "C1",
		//"Pre C1" => "Pre C1",
	);
}
// how many rows to show per page
$recordsPerPage = 30;
$class = isset($_REQUEST['class']) ? $_REQUEST['class'] : "0";
$bd = isset($_REQUEST['bd']) ? $_REQUEST['bd'] : "0";
$from=isset($_REQUEST['from']) ? $functions->formatDate($_REQUEST['from'], "Y-m-d") : date("Y-m-d"); 
$to=isset($_REQUEST['to']) ? $functions->formatDate($_REQUEST['to'], "Y-m-d")." 23:59:59" : date("Y-m-d")." 23:59:59"; 
/*if(isset($_REQUEST['Txtg'])){
	echo "Akhtar Rafiq".$_REQUEST['Txtg'];
} 
*/
$page = isset($_REQUEST['Txtg']) ? (int)$_REQUEST['Txtg'] : 0;

if($page == 0 || $page == 1){ 
	$offset = 0;
}else if($page > 1){
	//echo $page."AAA";
	$offset = (($page -1) * $recordsPerPage); 
	//echo $offset;
}

$data = $studentLoginRepo->GetStudentNotLogin($class, $from, $to, $sup_school, $bd, $offset, $recordsPerPage);
$totalRecords = $data[0];
//echo "AkhtarRafiq".$totalRecords;
$stdlogdetails = $data[1];
$title="Inactive Students";

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
													 
						    <form id="formView1" action="portal_notlogin.php" method="post" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
							
							
							<div class="row form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtNewsIconLink">Select Class</label>
								<div class="col-md-3 col-sm-6 col-xs-12">
                                  <select name="class" id="class" style="width: 100%; height: 30px;">
									  <?php
									  foreach($classlist as $key => $value){
									  ?>
								    <option value="<?php echo $key;?>"<?php echo ($class==$key)?" selected":"";?> style="padding: : 120px;"><?php echo $value;?></option>
									  <?php
									  }
									  ?>
								  </select>
                            </div>
							</div>
							<div class="row form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtNewsIconLink">Student Status</label>
								<div class="col-md-3 col-sm-6 col-xs-12">
                                  <select name="bd" id="bd" style="width: 100%; height: 30px;">
									<option value="0"<?php echo ($bd=="0")?" selected":"";?> style="padding: : 120px;">Boarder & Day Boy</option>
									<option value="B"<?php echo ($bd=="B")?" selected":"";?> style="padding: : 120px;">Boarder</option>
									<option value="D"<?php echo ($bd=="D")?" selected":"";?> style="padding: : 120px;">Day Boy</option>  									  
								  </select>
                            </div>
							</div>
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
			
                            
							 <?php if($totalRecords > 0){?>	
								<br><br>  							
							  <form id="formView" action="portal_notlogin.php" method="post" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
								 <input type="hidden" id="Txtg" name="Txtg" value="<?php echo $page; ?>" />
								 <strong><input type="hidden" id="class" name="class" value="<?php echo $class; ?>" /> 
								 <input type="hidden" id="bd" name="bd" value="<?php echo $bd; ?>" />  </strong>
								 <input type="hidden" id="to" name="to" value="<?php echo $functions->formatDate($to, "m/d/Y"); ?>" />
								 <input type="hidden" id="from" name="from" value="<?php echo $functions->formatDate($from, "m/d/Y"); ?>" />
							  <div id="printit">	  
							  <div class="table-responsive">
								  <table class="table table-bordered table-hover" style="width: 100%;">
									<thead>
									<tr style="background-color: #4267b2; color: #fff;">
										<th width="10%" align="center"><div align="center">Sr. #</div></th>
										<th width="10%" align="center"><div align="center">School no</div></th>
										<th width="30%" align="center"><div align="center">Name</div></th>
										<th width="11%" align="center"><div align="center">Status</div></th>
										<th width="5%" align="center"><div align="center">Class</div></th>
										<th width="15%" align="center"><div align="center">House</div></th>
									</tr>
									</thead>	
									<?php
									  if ( $stdlogdetails )
									  {
										  $index = $offset +1;
										  foreach($stdlogdetails->Rows as $row)
										  {
									  ?>
										<tr>
										  <th scope="row"><?php echo $index++; ?></th>
										  <td><?php echo $row->schoolNo; ?></td>
										  <td style="text-align: left"><?php echo $row->studentName; ?></td>
										  <td style="text-align: left"><?php echo ($row->bD=='B')?"Boarder":"Day Boy"; ?></td>
										  <td style="text-align: left"><?php echo $row->studing; ?></td>
										  <td style="text-align: left"><?php echo $row->house; ?></td>
									    </tr>
										<?php
											}
									   }
										?>  
								  </table>  
							  </div>
							  </div>	  
							  <div class="col-lg-12 col-md-12 col-sm-12 media">
								<?php
								  	$id=1;
									include("paging.php");
									$url = $portalDomainName . "portal_notlogin.php";
									
									Paging::Draw($page, $totalRecords, $recordsPerPage, $url, 0);
							
							?>
							<div style="float: right;"><a href="javascript:printDoc('page-title', 'printit');" class="btn btn-primary" style="min-width: 200px; text-align: center;">Print</a></div>
							</div>	  
							  </form>	  
							<?php 
								}else{
							?>
							<div class="alert alert-info" role="alert">
  									No Record Found.
							</div>
							<?php 
								}
							?>
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

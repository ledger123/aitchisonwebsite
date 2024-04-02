<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."repositories/studentrepository.php");
include("adminrepositry.php");

$adminRepo = new AdminRepository($dc);

$message = "";
$response = -1;
$sup_school  = $_SESSION['portal_sup_school'];
$sup_class	 = $_SESSION['portal_sup_class'];
$sup_section = $_SESSION['portal_sup_section'];
$sup_house	 = $_SESSION['portal_sup_house'];

$classes["0"] = "All Classes";
if($sup_school== "0" || $sup_school== "JSD"){
    $classes["K1"] = "K1";
    $classes["K2"] = "K2";
    $classes["K3"] = "K3";
    $classes["K4"] = "K4";
    $classes["K5"] = "K5";
    $classes["K6"] = "K6";
}
if($sup_school== "0" || $sup_school== "PSD"){
    $classes["E2"] = "E2";
    $classes["M1"] = "M1";
    $classes["M2"] = "M2";
}
if($sup_school== "0" || $sup_school== "SSD"){
    //$classes["Pre C1"] = "Pre C1";
    $classes["C1"] = "C1";
    $classes["C2"] = "C2";
    $classes["H1"] = "H1";
    $classes["H2"] = "H2";
}

$class = isset($_REQUEST['class']) ? $_REQUEST['class'] : "0";
$bd = isset($_REQUEST['bd']) ? $_REQUEST['bd'] : "0";
$from=isset($_REQUEST['from']) ? $functions->formatDate($_REQUEST['from'], "Y-m-d") : date("Y-m-d"); 
$to=isset($_REQUEST['to']) ? $functions->formatDate($_REQUEST['to'], "Y-m-d")." 23:59:59" : date("Y-m-d")." 23:59:59";

// how many rows to show per page
$recordsPerPage = 30;
$page = isset($_REQUEST['Txtg']) ? (int)$_REQUEST['Txtg'] : 0;

if($page == 0 || $page == 1){ 
	$offset = 0;
}else if($page > 1) {
	$offset = (($page -1) * $recordsPerPage); 
	//echo $offset;
}

$data = $adminRepo->GetDownloadFilesLogs($class, $from, $to, $sup_school, $bd, $offset, $recordsPerPage);
$totalRecords = $data[0];
//echo "AkhtarRafiq".$totalRecords;
$stdlogdetails = $data[1];
$title="Downloaded files logs";

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

    [data-tooltip]:before {
        /* needed - do not touch */
        content: attr(data-tooltip);
        position: absolute;
        opacity: 0;

        /* customizable */
        transition: all 0.15s ease;
        padding: 10px;
        color: #333;
        border-radius: 10px;
        box-shadow: 2px 2px 1px silver;
    }

    [data-tooltip]:hover:before {
        /* needed - do not touch */
        opacity: 1;

        /* customizable */
        background: #e9faff;
        margin-top: -50px;
        margin-left: 20px;
    }

    [data-tooltip]:not([data-tooltip-persistent]):before {
        pointer-events: none;
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
							  
							  <div class="page-title">
								  <h3><?php echo $title; ?></h3>
							  </div>
							  <br/>

						    <form id="formView1" action="rpt-download-files-logs.php" method="post" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
							
							
							<div class="row form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtNewsIconLink">Select Class</label>
								<div class="col-md-3 col-sm-6 col-xs-12">
                                  <select name="class" id="class" style="width: 100%; height: 30px;">
									  <?php
									  foreach($classes as $key => $value){
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
							  <form id="formView" action="rpt-download-files-logs.php" method="post" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
								 <input type="hidden" id="Txtg" name="Txtg" value="<?php echo $page; ?>" />
								  
								 <input type="hidden" id="class" name="class" value="<?php echo $class; ?>" /> 
								 <input type="hidden" id="bd" name="bd" value="<?php echo $bd; ?>" />  
								  
								 <input type="hidden" id="to" name="to" value="<?php echo $functions->formatDate($to, "m/d/Y"); ?>" />
								 <input type="hidden" id="from" name="from" value="<?php echo $functions->formatDate($from, "m/d/Y"); ?>" />
							  <div id="printit">	  	  
							  <div class="table-responsive">
								  <table class="table table-bordered table-hover" style="width: 100%;">
								  <thead>
									<tr style="background-color: #4267b2; color: #fff;">
										<th width="6%" align="center"><div align="center">Sr. #</div></th>
										<th width="9%" align="center"><div align="center">School No</div></th>
										<th width="25%" align="center"><div align="center">Student Name</div></th>
										<th width="8%" align="center"><div align="center">Status</div></th>
										<th width="5%" align="center"><div align="center">Class</div></th>
										<th width="12%"><div>Title</div></th>
										<th width="18%"><div>File Name</div></th>
                                        <th width="15%"><div>Date</div></th>
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
										  <td><?php echo $row->UserName; ?></td>
										  <td style="text-align: left"><?php echo $row->studentName; ?></td>
										  <td style="text-align: left"><?php echo ($row->bD=='B')?"Boarder":"Day Boy"; ?></td>
										  <td style="text-align: left"><?php echo $row->Class; ?></td>
										  <td style="text-align: left;" nowrap><?php echo $row->PageTitle; ?></td>
										  <td style="text-align: left; overflow: hidden;" data-tooltip="<?php echo $row->FileName; ?>"><?php echo substr($row->FileName, 0, 28); ?></td>
                                            <td style="text-align: left;" class="small"><?php echo $row->EntryDate; ?></td>
										  						  
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
									include($path."paging.php");
									$url = $portalDomainName . "rpt-download-files-logs.php";
									
									Paging::Draw($page, $totalRecords, $recordsPerPage, $url, 0);
							
							?>
							
							</div>
								  <div style="float: right;"><a href="javascript:printDoc('page-title', 'printit');" class="btn btn-primary" style="min-width: 200px; text-align: center;">Print</a></div>
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

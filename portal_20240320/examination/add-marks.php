<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."examination/teststatus.php");
include($path."examination/examinationrepository.php");

$examRepo = new ExaminationRepository($dc);

$message = "";
$response = -1;
$optActive = -1;


$id	   = isset($_GET['id'])	   ? (int)$_GET['id']	 : 0;
$TxtEditId = isset($_POST['TxtEditId']) ? (int)$_POST['TxtEditId'] : 0;



#debug
if (false){
	echo "<br>";
	echo "id: ". $id . "<br>";
	echo "edit id: ". $TxtEditId . "<br>";
	//exit;
}

if ( isset($_POST['cmdSubmit']) )
{
	
	
}


$data = $examRepo->GetStudentsOfSubjet( $id , $_SESSION['portal_sup_name'] );

$tMonthlyTest = $data[0];
$tStudents = $data[1];

//$tMonthlyTest->PrintTable();
?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "Add Marks"; include($path."includes.php"); ?>
<link href="<?php echo $path; ?>vendors/jquery/dist/jquery-ui.min.css" rel="stylesheet">
	
<style>
label.error {
	color: red;
	font-weight: 500;
}
	.glyphicon {
		padding: 0;
		background: #34495E;
	}
	
	.daterangepicker td.available:hover, .daterangepicker th.available:hover {
		background: #34495E;
	}
	
	input.obt-marks {
		
	}

	
@media print {
  .printing {display: block;margin: 0;color: #000;background-color: #fff;height: 100%;width: 100%;position: fixed;top: 0;left: 0;padding: 15px;font-size: 14px;line-height: 18px;}
  .table {display: table;border: 1px solid #ddd;}
  .col-md-2, .col-sm-2{width: 50%;}
  .col-md-3, .col-sm-3 {width: 33%;}
  .col-xs-12{width: 100%;}

  .visible-print{display:block;}
  .hidden-print{display:none;}
}

.visible-print{display:none;}

/* target all pages */
@page {
  margin: 2cm;
}

/* target the first page only */
@page :first {
  margin-top: 6cm;
}

/* target left (even-numbered) pages only */
@page :left {
  margin-right: 4cm;
}

/* target right (odd-numbered) pages only */
@page :right {
  margin-left: 4cm;
}

#tbl-marks tr td:first-child,  tr th:first-child
{
	text-align:center;
}

#tbl-marks tr td:last-child,  tr th:last-child
{
	text-align: right;
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
							  <div class="row page-title">
								  <div class="col-md-6 col-sm-6 col-xs-12">
								  	<h3><?php echo $title; ?></h3>
								  </div>
								  <div class="col-md-6 col-sm-6 col-xs-12">
								  	<a href="monthly-tests.php" type="button" id="cmdAddNew" name="cmdAddNew" class="btn btn-success">Monthly Tests List</a>
								  </div>
							  </div>
							  
							  <br>
							  
							  <div class="row form-horizontal form-label-left" style="display: block;">
								
								<div class="printing" id="dPrinting">
									 <section>
									 
										 <?php 
										 $tRow = $tMonthlyTest->Rows[0];
										 $totalMarks = $tRow->TotalMarks;
										 ?>
										 
										 
									  <div class="form-group hidden-print">
										<label class="control-label col-md-2 col-sm-2 col-xs-12" for="TxtTestName">Name</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<label class="form-control col-md-3 col-xs-12"><?php echo htmlentities(stripslashes(utf8_decode($tRow->TestName))); ?></label>
										</div>
									  
										<label class="control-label col-md-2 col-sm-2 col-xs-12">Total Marks</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<label class="form-control col-md-3 col-xs-12"><?php echo htmlentities(stripslashes(utf8_decode($totalMarks))); ?></label>
											
										</div>
									  </div>
									 
										 
									  <div class="form-group hidden-print">
										<label class="control-label col-md-2 col-sm-2 col-xs-12">Section</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<label class="form-control col-md-3 col-xs-12"><?php echo $tRow->Section; ?></label>
										</div>
									  
										<label class="control-label col-md-2 col-sm-2 col-xs-12">Subject</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
										  <label class="form-control col-md-3 col-xs-12"><?php echo $tRow->Subject; ?></label>
										</div>
									  </div>
										 
										 
									  <div class="form-group hidden-print">
										
										<label class="control-label col-md-2 col-sm-2 col-xs-12" for="OptMonthNames">Month</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
										  <label class="form-control col-md-3 col-xs-12"><?php echo date('F', mktime(0, 0, 0, $tRow->TestMonth, 1)); ?></label>
										</div>
										  
										<label class="control-label col-md-2 col-sm-2 col-xs-12">Date</label>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<label class="form-control col-md-3 col-xs-12"><?php echo $functions->formatDate($tRow->TestDate, "m/d/Y"); ?></label>
										</div>
									  </div>
										 
									  <table class="visible-print" style="width:100%;">
										  <tr><th>Name</th><td><label><?php echo htmlentities(stripslashes(utf8_decode($tRow->TestName))); ?></label></td><th>Total Marks</th><td><label><?php echo htmlentities(stripslashes(utf8_decode($totalMarks))); ?></label></td></tr>

										  <tr><th>Section</th><td><label><?php echo $tRow->Section; ?></label></td><th>Subject</th><td><label><?php echo $tRow->Subject; ?></label></td></tr>

										  <tr><th>Month</th><td><label><?php echo date('F', mktime(0, 0, 0, $tRow->TestMonth, 1)); ?></label></td><th>Date</th><td><label><?php echo $functions->formatDate($tRow->TestDate, "m/d/Y"); ?></label></td></tr>
									  </table>
									 
								  <div class="ln_solid"></div>
								  
								</section>
								  
								  	
									<table id="tbl-marks" class="table table-bordered table-hover">
									  <thead>
										<tr>
										  <th style="width:40px;">#</th>
										  <th style="width:100px;">School No</th>
										  <th style="width:300px;">Student Name</th>
										  <th style="width:150px;">Marks</th>
										  <th style="width:150px;">Percentage</th>
										</tr>
									  </thead>
									  <tbody>
									  <?php
									  if ($tStudents)
									  {
										  $index = 1;
										  foreach($tStudents->Rows as $row)
										  {
											$percentage = 0;
											if(strlen((int)$row->ObtainedMarks)>0 && (int)$row->ObtainedMarks > 0)
												$percentage = ($row->ObtainedMarks * 100) / $totalMarks;
											
											$percentage = number_format((float)$percentage, 2, '.', '') . '%';
											
											$txtMarksId = "txtMarks-".$row->SchoolNo;
									  ?>
										<tr>
										  <th><?php echo $index++; ?></th>
										  <td><?php echo $row->SchoolNo; ?></td>
										  <td><?php echo $row->studentName; ?></td>
										  <td><input type="text" class="obt-marks" id="<?php echo $txtMarksId; ?>" value="<?php echo $row->ObtainedMarks; ?>" maxlength="3"></td>
										  <td><label id="lblPercentage-<?php echo $row->SchoolNo; ?>"><?php echo $percentage; ?></label></td>
										</tr>
										<?php
											}
									   }
										?>

									  </tbody>
									</table>
								</div>

								  <input type="button" id="cmdSaveMarks" class="btn btn-primary" value="Save Marks">

								  <input type="button" class="btn btn-primary" onclick="javascript:PrintMarks();" value="Print Marks">
								  
								  
							  </div>
							</div>
						  <div id="debug"></div>
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
	
	<div id="dialog-confirm" title="Empty the recycle bin?">
		<p><span class="ui-icon ui-icon-alert" style="float:left; margin:12px 12px 20px 0;"></span>Do you want to save marks?</p>
	</div>
	
	
	
	<?php include($path."footerincludes.php"); ?>
	
	<script src="<?php echo $path; ?>js/jquery-validation/jquery.validate.min.js"></script>
	
	<script src="<?php echo $path; ?>vendors/jquery/dist/jquery-ui.min.js"></script>

</body>
	
<script>
	
	$(document).ready(function () {
		
		//START setting up the percentage
		<?php echo "var totalMarks = " . $totalMarks. ";"; ?>

		$(".obt-marks").each(function() { 

			$(this).focusout(function (event) {
				
				if( isNumeric($(this).val()) ) {

					var marks = parseInt( $(this).val() );
					var perce = 0;

					if(marks>0) {
						perce = (marks * 100) / totalMarks;
					}

					var label = $(this).parent().next().find('label');

					label.css("color", "black");

					label.text( parseToDouble( perce ) );

					if ( perce < 0 || perce > 100 ) {
						label.css("color", "red");
					}

				}
			});
		});

		//END setting up the percentage
		
		$('#cmdCancel').click(function() {
			location.href = "syllabus-list.php"
		});
		
		
		$('#cmdSaveMarks').click(function() {
			
			if( validateMarks() ) {
				$( "#dialog-confirm" ).dialog({
				resizable: false,
				height: "auto",
				width: 400,
				modal: true,
				buttons: {
					"Save Marks": function() {
					$( this ).dialog( "close" );
						saveMarks();
					},
					Cancel: function() {
					$( this ).dialog( "close" );
					}
				}
				});
			}
			else {
				alert("Marks entered are not correct. Please review your submission.");
			}
			
		});
		
		
		$('#cmdSubmit').click(function(){
			
			var error = false;
			$('#lblShow').text("");
			$('#lblActive').text("");
			
			if ($('#TxtTestName').val() == "") {
				alert("Please enter Test Name.");
				$('#TxtTestName').focus();
				return false;
			}
			
			if ($('#TxtTestDate').val() == "") {
				alert("Please enter Test Date.");
				$('#TxtTestDate').focus();
				return false;
			}
			
			if ($('input[name="optActive"]:checked').length == 0) {
			//if ($('#optActive').is(':checked') == false) {
				alert("Please select active option.");
				return false;
				/*$('#lblActive').text("Please select active option.");
				$('#lblActive').css("display") == "inherit"
				error = true;*/
			}
			
			return true;
			
		});
		
		
	});
	
	function validateMarks() {

		var validate = true;
		var totalMarks = <?php echo $totalMarks; ?>;

		$(".obt-marks").each(function(){ 
			var input = $(this);
			var id = input.attr('id');
			var val = input.val().trim();
			
			if (val=="") val = 0;
			
			input.css("background-color", "#FFF");
			
			if (!isNumeric(val) || val > totalMarks || val < 0) {
				validate = false;
				$(this).parent().parent().css("background-color", "#FBB");

			}
		});

		return validate;

	}

	function saveMarks() {
		
		var totalMarks = <?php echo $totalMarks; ?>;
		var error = false;
		$('#debug').text("");
		
		var xmlData = '';
		$(".obt-marks").each(function(){ 
			var input = $(this);
			var id = input.attr('id');
			var val = input.val().trim();
			
			if (val=="") val = 0;
			
			input.css("background-color", "#FFF");
			
			xmlData += '{';
			
			xmlData += id.substring( id.lastIndexOf("-") +1 ) + ':';
			xmlData += val;
			
			xmlData += '},';
			
			if (!isNumeric(val) || val > totalMarks || val < 0) {
				error = true;
				$(this).css("background-color", "#FBB");
			}
		});
		
		if ( !error ) {
		
			xmlData = xmlData.substr(0, xmlData.length-1);
			//xmlData += ']';

			xmlData = JSON.stringify(xmlData);
			var testid = "<?php echo $id; ?>";

			var url = '../services/portalService.php?select=8&testid='+testid+'&total='+totalMarks;

			$.ajax({
			   url             :   url,
			   type            :   'POST',
			   data            :   'data=' + xmlData,
			   success         :   function( data ) {
				  //alert(data);

					var tokens = data.split(",");
					var status = tokens[0];

					var message = tokens[1];
					alert(message);
				   if (status == 1)
					{
						//window.location = "add-marks.php?id="+testid;
					}
				   //$('#debug').text(data);
			   },
			   error           :   function() {
				  alert('Please reload the page and Save Marks again.');
			   },
			   complete        :   function() {
				  //alert('ajax request completed');
			   }
			});
		}
		else {
			$('#debug').text("Please enter valid marks.");
		}
		
	}
	
	function isNumeric(n) {
	  return !isNaN(parseFloat(n)) && isFinite(n);
	}

	function parseToDouble(val) {
		return val.toFixed(2) + "%";
	}



	function PrintMarks()
	{
		var mywindow = window.open('', 'PRINT', 'height=600,width=1024');

		mywindow.document.write('<html><head><title>' + document.title  + '</title>');
		mywindow.document.write('<style type="text/css">' +
								'table th, table td {' +
								'border:1px solid #000;' +
								'}' +
								'td{padding:4px;}' +
								'#dRow{display:inline;}' +
								'@media print {' +
								'	.visible-print{display:block;width:100%;}' +
  								'	.hidden-print{display:none;}' +
								'	}' +
								'</style>');
		mywindow.document.write('</head><body >');
		mywindow.document.write('<h1>' + document.title  + '</h1>');
		mywindow.document.write(document.getElementById("dPrinting").innerHTML);
		mywindow.document.write('</body></html>');

		mywindow.document.close(); // necessary for IE >= 10
		mywindow.focus(); // necessary for IE >= 10*/

		mywindow.print();
		mywindow.close();

		return true;
	}


</script>
	
		
		
</html>

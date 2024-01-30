<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."examination/examinationrepository.php");
include($path."accounts/accountrepository.php");

$examRepo = new ExaminationRepository($dc);
$accountRepo = new AccountRepository($dc);

$schoolNo = isset($_POST['TxtSchoolNo']) ? (int)$_POST['TxtSchoolNo'] : 0;


$tMockExam = $examRepo->TestsMockMarksBySchoolNo( $schoolNo );

$student = $accountRepo->GetStudent($schoolNo);

$studentName = '';
$studentClass = '';
$defaulter = false;

if($student->rowsCount() > 0) {
    $studentName = $student->Rows[0]->studentName;
    $studentClass = $student->Rows[0]->studing;
}

/*$defaulters = ['17234', '17234', '17243', '17248', '17925', '18151', '18239', '17227', '17230', '17653', '18186', '18209', '20012', '18816', '18536', '19575', '17753', '18265', '18819', '18527', '18619', '17801', '17840', '17856', '19533', '19546', '19549', '17773', '19559', '19568', '19569', '17812', '18292', '18817', '18629', '19527', '17694', '20104', '16805', '17149', '18326', '17561', '17630', '18825', '18860', '17500', '17418', '19589', '17483', '17487', '17514', '17543', '17558', '17520', '17599', '17607', '17112', '20092', '20107', '16862', '16444', '16929', '16969', '17156', '16910', '19640', '16907', '18023', '16446', '16849', '17635', '16842', '16918', '16931', '16485', '17078', '20052', '20039', '20056', '17102', '17074', '17114', '18995', '16591', '18046', '18826', '20054', '16498', '16669', '17050', '18329'];*/
//$defaulters = ['17234', '17234', '17243', '17925', '18151', '18239', '17227', '17230', '17653', '18186', '18209', '18816', '18536', '19575', '17753', '18265', '18819', '18527', '18619', '17840', '17856', '19533', '19546', '19549', '17773', '19559', '19568', '19569', '17812', '18292', '18817', '18629', '19527', '17694', '20104', '16805', '17149', '18326', '17561', '18825', '18860', '17500', '17418', '19589', '17483', '17487', '17514', '17543', '17558', '17520', '17599', '17607', '17112', '20092', '20107', '16444', '16929', '16969', '17156', '16910', '19640', '16907', '18023', '16446', '16849', '17635', '16842', '16931', '16485', '17078', '20052', '20039', '20056', '17102', '17074', '17114', '18995', '16591', '18046', '18826', '20054', '16498', '16669', '17050'];
$defaulters = ['17243', '17925', '18151', '18239', '17227', '17230', '18186', '18816', '18536', '19575', '17753', '18819', '18527', '18619', '17840', '17856', '19533', '19546', '19549', '17773', '19559', '19568', '19569', '18292', '18817', '18629', '19527', '17694', '20104', '17149', '18825', '17418', '19589', '17483', '17514', '17543', '17558', '17607', '17112', '20092', '20107', '16444', '16929', '16910', '19640', '16907', '18023', '16446', '16931', '16485', '17078', '20052', '20056', '17102', '17074', '17114', '18995', '16591', '18826', '16498'];

if (true && in_array($schoolNo, $defaulters)) {
    #clear the rows.
    /*
    $counts = $tMockExam->rowsCount();
    for ($i = 0; $i < $counts; $i++) {
        $tMockExam->RemoveAt($i);
    }*/
    $defaulter = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "Mock Examinations 2021"; include($path."includes.php"); ?>

<!-- Datatables -->
<link href="<?php echo isset($path)?$path:""; ?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo isset($path)?$path:""; ?>vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
	

<style>
label.error {
	color: red;
	font-weight: 500;
}

#dPrinting th, td
{
    padding: 5px;
}

#tbl-mock-exam thead tr td {border: solid 1px}

</style>

<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
        	
            <div class="container">
				<div class="row" id="examinations">
				  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						  
						  <div class="" style="margin-top: -15px;">
							  <div class="page-title">
                                  <form id="form1" method="post" action="show-mock-examination-report.php" data-parsley-validate class="form-horizontal form-label-left">

                                      <div class="form-group">
                                          <label class="control-label col-md-3 col-sm-3 col-xs-12">School No </label>
                                          <div class="col-md-4 col-sm-4 col-xs-12">
                                              <input class="form-control col-md-7 col-xs-12" id="TxtSchoolNo" name="TxtSchoolNo" value="<?php echo $schoolNo; ?>"/>
                                          </div>
                                          <div class="col-md-4 col-sm-4 col-xs-12">
                                              <button type="submit" id="CmdFindStudent" name="CmdFindStudent" class="btn btn-success">Find</button>
                                          </div>
                                      </div>

                                  </form>

							  </div>

							  <div class="x_content printing" id="dPrinting" style="display: block; padding: 0 0 25px;">
								  <br>
                                  <div class="" id="rptHeader" style="width: 100%;">

                                      <?php if ($defaulter) { ?>
                                          <div class="alert alert-danger" role="alert" style="text-align: center;"><strong>Result is blocked.</strong></div>
                                      <?php } ?>
                                      <table class="table table-bordered" id="tblHeader" style="width: 100%;">
                                          <tbody>
                                            <tr>

                                                <th>Name</th><td><?php echo $studentName; ?></td> <th>Section</th><td><?php echo $studentClass; ?></td>
                                            </tr>
                                            <tr>
                                                <th>School No</th><td><?php echo $schoolNo; ?></td> <th>Month</th><td>March</td>
                                            </tr>
                                          </tbody>
                                      </table>
                                  </div>
									<table id="tbl-mock-exam" class="table table-bordered table-hover"  style="width: 100%; margin-top: 20px;">
									  <thead>
										<tr style="color: #FFFFFF; background-color: #07095B;">
										  <th style="width:70px; text-align:center; vertical-align:middle;">Sr. #</th>
										  <th style="width:200px; vertical-align:middle;">Subject</th>
										  <th style="width:70px; vertical-align:middle; text-align:center;">Grade</th>
										</tr>
									  </thead>
									  <tbody>
									  <?php
									  if ($tMockExam)
									  {
										  $index = 1;
										  foreach($tMockExam->Rows as $row)
										  {
									  ?>
										<tr>
										  <td style="text-align:center;"><?php echo $index++; ?></td>
										  <td><?php echo $purifier->purify($row->Subject); ?></td>
										  <td style="text-align:center;"><?php echo $purifier->purify($row->Grade); ?></td>
										</tr>
										<?php
											}
									  }
									  if($tMockExam->rowsCount() == 0){ ?>
                                          <tr>
                                              <td colspan="3" style="text-align:center;">No result found.</td>
                                          </tr>
                                      <?php } ?>
									  </tbody>
									</table>


							  </div>
                              <input type="button" class="btn btn-primary" onclick="javascript:PrintReport();" value="Print Report">
							</div>
						  
					  </div>
					</div>
				  </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
				  
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
		
		var table = $('#tbl-monthly-test1').DataTable({
			dom: "Bfrtip",
			buttons: [
				'print'
			],
			"ordering": false,
            responsive: true,
			//"pagingType": "full_numbers",
			
		});
	});





    function PrintReport()
    {
        var mywindow = window.open('', 'PRINT', 'height=600,width=1024');

        mywindow.document.write('<html><head><title>' + document.title  + '</title>');
        mywindow.document.write('<style type="text/css">' +
            '#tbl-mock-exam th, #tbl-mock-exam td, #tbl-summary tr, #tbl-summary td, #tblHeader tr td, #tblHeader tr th {' +
            'border:1px solid #000;' +
            '}' +
            '#tbl-mock-exam th {' +
            'color: #000;' +
            '}' +
            'td, th{padding:4px;}' +
            '#dRow{display:inline;}' +
            '@media print {' +
            '	.visible-print{display:block;width:100%;}' +
            '	.hidden-print{display:none;}' +
            '	.divFooter { position: fixed; bottom: 0; margin: 25px;  }' +
            '	}' +
            'hr {clear: both;page-break-after: always !important;border: none;}' +
            '@page {'+
            'size: A4;'+
            'margin: 11mm 17mm 17mm 17mm;'+
            '}' +
            'html, body { width: 210mm; height: 297mm; }' +
            '</style>');
        mywindow.document.write('</head><body >');
        mywindow.document.write('<div style="padding: 20px;">');

        mywindow.document.write('<h3 style="text-align:center;margin: 0;">AITCHISON COLLEGE, LAHORE</h3>');
        mywindow.document.write('<h3 style="text-align:center;margin: 0;">SENIOR SCHOOL</h3>');
        mywindow.document.write('<h2 style="text-align:center;margin-top: 0;">Mock Examinations  2021</h2>');

        //mywindow.document.write(document.getElementById("rptHeader").innerHTML);

        mywindow.document.write(document.getElementById("dPrinting").innerHTML);
        mywindow.document.write('</div>');

        //mywindow.document.write('<div class="divFooter">This document is computer generated and does not require a signature or the College stamp in order to be considered valid. Errors and omissions accepted.</div>');

        mywindow.document.write('</body></html>');

        mywindow.onafterprint = function() {
            mywindow.close();
        };

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/

        mywindow.print();
        //mywindow.close();

        return true;
    }

</script>

</body>
</html>

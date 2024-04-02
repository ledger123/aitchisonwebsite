<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."examination/examinationrepository.php");

$examRepo = new ExaminationRepository($dc);
$grades = $examRepo->GetPredictedGrades($_SESSION['portal_CurrentClass'], $_SESSION['portal_SchoolNo']);

$dRow = null;
$cardNo = '';
$schoolNo = '';
$fatherName = '';
$studing = '';
$birthDate = '';

if($grades->rowsCount() > 0)
{
    $dRow = $grades->Rows[0];

    $cardNo = $dRow['CardNo'];
    $schoolNo = $dRow['SchoolNo'];
    $fatherName = $dRow['fatherName'];
    $studing = $dRow['studing'];
    $birthDate = $dRow['birthDate'];
}

//$c2_grades = $examRepo->GetPredictedGradesAll('C2');

//$h1_grades = $examRepo->GetPredictedGradesAll('H1');

//$h2_grades = $examRepo->GetPredictedGradesAll('H2');


//$grades->PrintTable();

$b = isset( $_GET['b'] ) ? $_GET['b'] : '';

?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "Grades"; include($path."includes.php"); ?>

<!-- Datatables -->
<link href="<?php echo isset($path)?$path:""; ?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
<link href="<?php echo isset($path)?$path:""; ?>vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">

<style>
label.error {
	color: red;
	font-weight: 500;
}

.tbl-inner { font-size:11px; }
.tbl-inner div, .tbl-inner div { padding: 4px;}

.tbl-inner div:nth-child(1){width:30%; text-align: left;}
.tbl-inner div:nth-child(2){width:40%; text-align: left;}
.tbl-inner div:nth-child(3){width:10%; text-align: right;}
.tbl-inner div:nth-child(4){width:10%; text-align: right;}
.tbl-inner div:nth-child(5){width:10%; text-align: right;}


.tbl { display:table; border:1px lightgray solid; width:100%;}
.trow { display:table-row; border:1px lightgray solid; }

.tcell {display:table-cell; border:1px lightgray solid; }

    #tbl-grades {width: 500px;}

    #tbl-grades th:first-child,
    #tbl-grades td:first-child,
    #tbl-grades th:last-child,
    #tbl-grades td:last-child {text-align: center;}

    #tbl-grades td:nth-child(2) {text-align: left;}

@media print{
    .noprint{
        display:none;
    }
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
				  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						  
						  <div class="" style="text-align: center;">
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <div align="center" style="padding-bottom: 20px;">
                                      <img src="../images/ac_logo130x130.png" width="130" height="130" alt="Aitchison College, Lahore.">

                                      <h4>AITCHISON COLLEGE, LAHORE</h4>
                                      <h4>SENIOR SCHOOL</h4>
                                  </div>
                              </div>
							  <div class="x_content" style="display: block;">
                                  <div class="row">
                                      <div class="col-lg-1 col-md-1">&nbsp;</div>
                                      <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="padding-left: 35px;padding-right: 35px;">
                                          <table class='' style="width: 100%;margin-bottom: 15px;font-weight: bold; text-align: left;border-top: 1px #000 solid;border-bottom: 1px #000 solid;">
                                              <tr style="margin-bottom: 10px;">
                                                  <td colspan="2" style="padding-bottom: 15px;">
                                                      <?php echo $_SESSION['portal_userTitle']; ?> <br/>
                                                  </td>
                                              </tr>
                                              <tr style="font-weight: 600;">
                                                  <td style="">School No:&nbsp;&nbsp;<?php echo $schoolNo; ?></td>
                                                  <td style="">Class:&nbsp;&nbsp;<?php echo $studing; ?></td>
                                              </tr>
                                          </table>
                                      </div>
                                      <div class="col-lg-1 col-md-1">&nbsp;</div>
                                  </div>
                                  <div class="page-title">
                                      <h5 style="font-size: 16px !important; font-weight: 700;">VERIFIED GRADES CAMBRIDGE MAY/JUNE 2020</h5>
                                  </div>

                                  <div align="center">
                                  <table id='tbl-grades' class='table table-bordered' style="margin-top: 30px;">

                                    <tr style="background-color:#293594;color:#FFF;"><th>#</th><th>Subjects</th><th>Grades</th></tr>

                                    <?php
                                    if(null != $dRow) {
                                        $sr = 0;
                                        for ($i = 5; $i < count($grades->Columns); $i++) {

                                            $col = $grades->Columns[$i];
                                            if($dRow[$col] != '-' && $dRow[$col] != '') {
                                                $sr++;
                                            ?>

                                                <tr><td><?php echo $sr;?></td><td><?php echo $col;?></td><td><?php echo $dRow[$col];?></td></tr>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } ?>
								</table>
                                  </div>

                                  <p>
                                      These grades are accepted by Cambridge based upon school predictions. Where the Cambridge grade is higher than the predicted grade, the Cambridge grade has held.
                                  </p>
							  </div>
                              <div style="text-align: left; margin-top: 15px;"><input type="button" class="btn btn-primary noprint" onclick="printPage('examinations');" value="Print"></div>


                              <?php if( $b == 'print') { ?>
                                  <div style="text-align: left; margin-top: 15px;"><input type="button" class="btn btn-primary noprint" onclick="window.print();" value="Print"></div>
                              <?php } ?>
							</div>
							
					  </div>

                        <?php if(false) { ?>
                        <H3>C2 Grades</H3>
                        <?php echo $c2_grades->PrintTable();?>
                        <br/>

                        <H3>H1 Grades</H3>
                        <?php echo $h1_grades->PrintTable();?>
                        <br/>

                        <H3>H2 Grades</H3>
                        <?php echo $h2_grades->PrintTable();?>
                        <br/>
                        <?php } ?>

					</div>
				  </div>

                    <div class="col-lg-3 col-md-3">&nbsp;</div>
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
		
		//$('.tree').treegrid();

		//$('#tbl-monthly-test').DataTable();

		var table = $('#tbl-monthly-test').DataTable({
			dom: "Bfrtip",
			buttons: [
				'print'
			],
			"ordering": false,
            responsive: true,
			//"pagingType": "full_numbers",
			
		});
		
	});


    function printPage(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        //document.body.innerHTML = originalContents;
        window.location.reload();
    }

</script>

</body>
</html>

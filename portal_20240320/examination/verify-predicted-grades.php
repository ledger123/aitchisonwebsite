<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."examination/examinationrepository.php");

$dRow = null;
$cardNo = '';
$studentName = '';
$schoolNo = '';
$class = '';

if ( isset($_POST['CmdFindStudent']) ) {

    //echo 'submit';exit;
    $examRepo = new ExaminationRepository($dc);

    $schoolNo = isset($_POST['TxtSchoolNo']) ? $_POST['TxtSchoolNo'] : "";

    $grades = $examRepo->GetPredictedGradesBySchoolNo( $schoolNo );


    if($grades->rowsCount() > 0)
    {
        $dRow = $grades->Rows[0];

        $cardNo = $dRow['CardNo'];
        $studentName = $dRow['studentName'];
        $class = $dRow['studing'];
    }
}
//$c2_grades = $examRepo->GetPredictedGradesAll('C2');

//$h1_grades = $examRepo->GetPredictedGradesAll('H1');

//$h2_grades = $examRepo->GetPredictedGradesAll('H2');


//$grades->PrintTable();

?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "Verify Predicted Grades"; include($path."includes.php"); ?>

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
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						  
						  <div class="">
							  <div class="page-title">
								  <h3><?php echo $title; ?></h3>
							  </div>
							  
							  <div class="x_content" style="display: block;">

                                  <form id="form1" method="post" action="verify-predicted-grades.php" data-parsley-validate class="form-horizontal form-label-left">

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

                                  <?php if(null != $dRow) { ?>
                                  <div>
                                      <table class='' style="margin-bottom: 15px;font-weight: bold;">
                                          <tr style="margin-bottom: 8px;">
                                              <td style="width: 125px; padding-bottom: 15px;">Student Name</td>
                                              <td style="padding-bottom: 15px;"><?php echo $studentName; ?></td>
                                          </tr>
                                          <tr>
                                              <td style="padding-bottom: 15px;">Class</td>
                                              <td style="padding-bottom: 15px;"><?php echo $class; ?></td>
                                          </tr>
                                          <tr>
                                              <td>Candidate No.</td>
                                              <td><?php echo $cardNo; ?></td>
                                          </tr>
                                      </table>
                                  </div>

							  	<table id='tbl-grades' class='table table-bordered'>

                                    <tr style="background-color:#293594;color:#FFF;"><th>#</th><th>Subjects</th><th>Predicted Grades</th></tr>

                                    <?php
                                    if(null != $dRow) {
                                        $sr = 0;
                                        for ($i = 4; $i < count($grades->Columns); $i++) {

                                            $col = $grades->Columns[$i];
                                            if($dRow[$col] != '-' && $dRow[$col] != '') {
                                                $sr++;
                                            ?>

                                                <tr><td><?php echo $sr;?></td><td><?php echo $col;?></td><td><?php echo $dRow[$col];?></td></tr>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } ?>
								</table>
                                  <?php } ?>
							  </div>

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

</script>

</body>
</html>

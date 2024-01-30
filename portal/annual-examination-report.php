<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."examination/examinationrepository.php");

$examRepo = new ExaminationRepository($dc);


$tAnnualExam = $examRepo->GetAnnualExams( $_SESSION['portal_SchoolNo'] );

?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "Annual Examination 2022"; include($path."includes.php"); ?>
<style>
    .text-end { text-align: right; }

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
                                  <h3>Annual Examination 2022</h3>
							  </div>

							  <div class="x_content" style="display: block; padding: 0 0 25px;">

									<table class="table table-bordered jambo_table"  style="width: 100%; margin-top: 20px;">
									  <thead>
										<tr>
										  <th rowspan="3" style="width:90px; text-align:center; vertical-align:middle;">School No</th>
                                          <th rowspan="3" style="text-align:center; vertical-align:middle; white-space: nowrap;">Student Name</th>
										  <th rowspan="3" style="width:100px; vertical-align:middle;">Subject</th>
										  <th rowspan="3" style="width:70px; vertical-align:middle; text-align:center;">House</th>
                                            <th style="width:70px; vertical-align:middle; text-align:center;">Class/HW</th>
                                            <th style="width:70px; vertical-align:middle; text-align:center;">Monthly</th>
                                            <th style="width:70px; vertical-align:middle; text-align:center;">Exam</th>
                                            <th style="width:70px; vertical-align:middle; text-align:center;"></th>
										</tr>
                                        <tr style="color: #FFFFFF; background-color: #07095B;">
                                            <th style="width:70px; vertical-align:middle; text-align:center;">Assignment</th>
                                            <th style="width:70px; vertical-align:middle; text-align:center;">Test</th>
                                            <th style="width:70px; vertical-align:middle; text-align:center;">Marks</th>
                                            <th style="width:70px; vertical-align:middle; text-align:center;">Total</th>
                                        </tr>

                                        <tr style="color: #FFFFFF; background-color: #07095B;">
                                            <th style="width:70px; vertical-align:middle; text-align:center;">10%</th>
                                            <th style="width:70px; vertical-align:middle; text-align:center;">10%</th>
                                            <th style="width:70px; vertical-align:middle; text-align:center;">80%</th>
                                            <th style="width:70px; vertical-align:middle; text-align:center;">100%</th>
                                        </tr>
									  </thead>
									  <tbody>
									  <?php
									  if ($tAnnualExam)
									  {
										  $index = 1;
										  foreach($tAnnualExam->Rows as $row)
										  {
									  ?>
										<tr>
                                          <td><?php echo $purifier->purify($row->SchoolNo); ?></td>
										  <td><?php echo $purifier->purify($row->Name); ?></td>
										  <td style="text-transform: capitalize;"><?php echo $purifier->purify($row->subject); ?></td>
                                            <td><?php echo $purifier->purify($row->house); ?></td>
                                            <td class="text-end"><?php echo $purifier->purify($row->Assignment); ?></td>
                                            <td class="text-end"><?php echo $purifier->purify($row->TestMarks); ?></td>
                                            <td class="text-end"><?php echo $purifier->purify($row->ExamMarks); ?></td>
                                            <td class="text-end"><?php echo $purifier->purify($row->total); ?></td>

										</tr>
										<?php
											}
									  }
									  if($tAnnualExam->rowsCount() == 0){ ?>
                                          <tr>
                                              <td colspan="3" style="text-align:center;">No result found. Please contact Examination Department.</td>
                                          </tr>
                                      <?php } ?>
									  </tbody>
									</table>

							  </div>

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

</body>
</html>

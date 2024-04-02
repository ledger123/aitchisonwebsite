<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Promotion Policy"; include($path."includes.php"); ?>
<style>
	.promotion h3 {
		margin-top: 20px;
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
				  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						  
						  <?php if ( $_SESSION['portal_School'] == "JSD" ) { ?>
						  	<div class="page-title">
							  <h3><?php echo $title; ?></h3>
							</div>
						    <br />
						  <div class="promotion">
							  <p>In general, promotion is based upon a student having consolidated adequate knowledge, understanding and skills.</p>

							<p>Assessments are conducted four times each year and reported to parents. Details can be found in the separate <strong>Assessments Policy</strong>. In summary, all boys are assessed periodically by tests and a combination of classwork, homework, skills in reading and mathematics, class participation and behaviour.</p>

							<h3>Promotion Policy Lower Primary (K1-K3)</h3>

							<p>Students are required to demonstrate, as a minimum requirement, a reasonable and/or progressing capability especially in core subjects. </p>

							<h3>Promotion Policy Upper Primary (K4-K6)</h3>

							<p>The minimum pass mark for each subject and the overall result for assessments conducted during the year is <strong>40%</strong>.</p>
							  
							  
							  <ol type="a">
								  <li>A boy whose performance and/or progress is unsatisfactory is liable to be withdrawn from the College.</li>
								  <li>A boy who has ‘<strong>UG</strong>’ in any three of the four core subjects (<strong>Urdu, English, Mathematics, and Science</strong>) in the end of year examinations will be withdrawn from the College.</li>
								  <li>A boy with unsatisfactory school attendance will be withdrawn from the College.</li>
								  <li><strong>The Principal’s decision is final in all cases.</strong></li>
							  </ol>
							  
							  
							<h3>Grades are determined as follows:</h3>


							<p><strong>‘A*’ – 90 to 100, ‘A’ – 75 to 89, ‘B’ – 65 to 74, ‘C’ – 55 to 64, ‘D’ – 45 to 54, ‘S’ – 40 to 44, ‘UG’ (ungraded) - less than 40%</strong></p>
							  
						  </div>
						  
						  <?php }elseif ( $_SESSION['portal_School'] == "PSD" ) { ?>
						  <div class="page-title">
							  <h3>Promotion Policy </h3>
							</div>
						    <br />
						  <div class="promotion">
							  
							  <p>In general, promotion is based upon a student having consolidated adequate skills and knowledge in learning outcomes. Boys complete regular tests and examinations in all subjects as described in the Assessment Policy. These may vary according to subject.</p>
<h3>Promotion Policy E2 to M2</h3>

							<p>The minimum pass mark for each subject and the overall result for assessments conducted during the year is <strong>40%</strong>.</p>
							  
							  
							  <ol type="a" style="padding-left: 3em;">
								  <li><span style="padding-left: 10px;">A boy must pass English and Mathematics plus five of the remaining subjects.</span></li>
								  <li><span style="padding-left: 10px;">A boy who shows unsatisfactory performance and/or progress is liable to be withdrawn from the College.</span></li>
								  <li><span style="padding-left: 10px;">A boy with unsatisfactory school attendance will be withdrawn from the College.</span></li>
								  <li><span style="padding-left: 10px;"><strong>The Principal’s decision is final and binding in all cases.</strong></span></li>
							  </ol>
							  
							  
							<h3>Grades are determined as follows in E2 and M1:</h3>


							<p>'A*' – 90 to 100, 'A' – 75 to 89, 'B' – 65 to 74, 'C' – 55 to 64, 'D' – 45 to 54, 'S' – 40 to 44, 'UG' (ungraded) - less than 40%</p>
							  
							  
							  
							<h3>Promotion Policy M2 to C1</h3>

							<p>In February,  M2 boys must pass in <strong>English and Mathematics</strong> plus <strong>five</strong> of the remaining subjects. A boy who fails to do so will have the opportunity to re-sit in March, subject to meeting attendance requirements and full engagement with school, and at the discretion of the Principal. If he is unable to pass, he is liable to be withdrawn from the College. The Principal may, however, allow him to continue studying at the College until the end of the academic year. The Principal’s decision is final and binding in all circumstances.</p>
							  
							  
							  <ul style="list-style: disc !important; line-height: 2;list-style: none;">
								  
								  <li><strong>Grades are determined as follows for M2 Mathematics and Science:</strong></li>
								  <li>'A*' – 90 to 100, 'A' – 75 to 89, 'B' – 65 to 74, 'C' – 55 to 64, 'D' – 45 to 54, 'S' – 40 to 44, 'UG' (ungraded) - less than 40%</li>
								  <li><strong>Grades are determined as follows for M2 Humanities, Art and Languages:</strong></li>
								  <li>'A*' – 80 to 100, 'A' – 70 to 79, 'B' – 60 to 69, 'C' – 50 to 59, 'D' – 40 to 49, 'UG' (ungraded) - less than 40%</li>
							  </ul>
							  
							<p><strong>Boys transfer to Senior School after Spring Break and study only those subjects they have opted for at IGCSE. This 'pre-C1' term is managed by the Senior School Headmistress.</strong></p>
							  
						  </div>
						  <?php } ?>
					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php include($path."rightpanel.php"); ?>
					  
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

</body>
</html>

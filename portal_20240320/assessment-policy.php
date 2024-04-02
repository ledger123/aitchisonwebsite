<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Assessment Policy "; include($path."includes.php"); ?>
<style>
	.assessment h3 {
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
						  <?php if ( $_SESSION['portal_School'] == "JSD" ) { 
							$std_class=$_SESSION['portal_CurrentClass'];
								if($std_class=="K4"||$std_class=="K5"||$std_class=="K6"){
						  ?>
						  		<div class="page-title">
									<h3>ASSESSMENT AT AITCHISON JUNIOR SCHOOL: <span style="font-size: 21px; "><br>GRADES 4 to 6</span></h3>
						  		</div>
						  		<div class="assessment">
									<p>
										Assessing young boys is a matter of determining progress and preparedness rather than measured ability or potential or ranking. Indeed, no single report will ever define a boy and this is something Aitchison believes strongly. Assessment over the course of a year will provide experiences on which we can reflect and comment, but even then we must allow for variable, even unexpected rates of development including social-emotional  growth. Indeed, I cannot place sufficient stress on the importance self-esteem and its impact on learning. Adults need only reflect on how the stresses of life can ‘blunt’ critical thinking skills and performance. Obviously, this impacts far more on children yet to develop sufficient life experiences to cope and adjust. Accordingly, we take a very positive approach to ‘assessment’ and this is how we do it.
									</p>
									<p>
										Reports are divided into two sections: (1) Progressive Assessment Grade (Summative testing) and (2) Criteria-Based Assessment (classroom, project and homework if applicable). The latter is the building block of continuous skill development and learning aptitudes practised through strands inherent within all subjects. Teachers will use a variety of assessment strategies to determine progress. In turn, these form the basis of a simple code of ‘ticks or crosses’ indicating levels of attainment based on a class-level standard. The former is a Summative Testing System with which we are all familiar. The two assessment outcomes may or may not match, mostly they will. However, a boy may underperform in a particular formal or summative test but show very good ability in class or vice versa. Either way, he should build confidence from his efforts. 
									</p>
									<p>
										Aitchison is committed to removing young boys from over-assessment by ‘number’ and meaningless global grading systems that prove very little in the long run. Boys develop when they are confident and experience success in something. They build resilience from challenges that have a compassionate and reasonable process. They respond to positive support. 
									</p>
									<p>&nbsp;</p>
									<p>
									<img src="images/signature/principal_signature_new.png" width="212" height="72"><br>
									Michael Thomson<!-- M.A., Dip. Ed., M.A.C.E-->&nbsp;<br>Principal

									</p>
						  		</div>
						  <?php
									
								}else{
						  ?>
						  <div class="page-title">
							  <h3><?php echo $title; ?></h3>
						  </div>
						  <br />
						  <div class="assessment">
							  <p>Assessment is a central process in teaching and learning. It is through assessment that we can discover to what extent boys have achieved the intended learning outcomes and provide the support necessary to make progress in their knowledge and understanding.</p>

							<p>Teachers provide regular feedback to parents through <strong>Teacher Parent Meetings</strong> and <strong>reports</strong>.</p>

							<h3>Teacher Parent Meetings</h3>

							<p>These meetings are arranged three times a year to discuss boys&rsquo; academic progress. The meetings are necessarily brief. If there is a significant issue which requires a longer discussion, a later meeting shall be arranged.</p>

							<h3>Reports</h3>

							<p>Reports are sent to parents four times a year and include grades for <strong>Formative</strong> and <strong>Summative Assessment</strong> in all subjects.</p>

							<p align="left" style="margin-left:-0.25pt;"><strong>Formative Assessment</strong> includes <strong>Continuous Assessment</strong> and <strong>Progress Tests</strong>.</p>

							<p style="margin-left:36.5pt;"><strong>Continuous assessment</strong> takes place through scoring class tests, homework, classwork, reading, mathematical skills, class participation and behaviour.&nbsp;</p>

							<p style="margin-left:36.5pt;"><strong>Progress Tests</strong> assess the boys&rsquo; knowledge and understanding of approximately eight weeks of lessons. The boys are given detailed guidance in advance as to exactly which topics will be included and how to prepare for each test. Grades are reported to parents along with the continuous assessments described above.</p>

							<p><strong>Summative Assessment</strong> takes place by <strong>Examinations</strong> in December and May for <strong>K4-K6</strong> only. These include some topics covered in the <strong>Progress Tests</strong>, detailed guidance is given to the boys as to exactly which topics are included and how to prepare for each test.</p>
							  
							<div class="table-responsive">

								<table class="table table-bordered" style="width:100%">
								<thead>
									<tr>
										<th scope="col">&nbsp;</th>
										<th scope="col">October&nbsp;Report</th>
										<th scope="col">December&nbsp;Report</th>
										<th scope="col">March&nbsp;Report</th>
										<th scope="col">May Report</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>K1-K3</td>
										<td>
										<p>Formative Assessment only&nbsp;<br />
										&nbsp;<br />
										20% Continuous Assessment<br />
										80% Progress Test</p>
										</td>
										<td>Formative Assessment only&nbsp;<br />
										&nbsp;<br />
										20% Continuous Assessment<br />
										80% Progress Test</td>
										<td>Formative Assessment only&nbsp;<br />
										&nbsp;<br />
										20% Continuous Assessment<br />
										80% Progress Test</td>
										<td>Formative Assessment only&nbsp;<br />
										&nbsp;<br />
										20% Continuous Assessment<br />
										80% Progress Test</td>
									</tr>
									<tr>
										<td>K4-K6</td>
										<td>Formative Assessment only<br />
										<br />
										20% Continuous Assessment<br />
										80% Progress Test</td>
										<td>
										<p>Formative and Summative Assessment</p>

										<p>20% Continuous Assessment<br />
										80% Half-Yearly Examination</p>
										</td>
										<td>Formative Assessment only<br />
										<br />
										20% Continuous Assessment<br />
										80% Progress Test</td>
										<td><p>Formative and Summative Assessment</p>

										<p>20% Continuous Assessment<br />
										80% Annual Examination</p>
										</td>
									</tr>
								</tbody>
							</table>
								
							</div>

							<h3>Dates of Progress Tests and Examinations</h3>
							  
							  <div class="table-responsive">

								<table class="table table-bordered" style="width:100%">
									<tbody>
										<tr>
											<td>K1-K3</td>
											<td>
											<p>22nd to 26th &nbsp;October, 2018</p>
											</td>
											<td>10th to 20th &nbsp;December, 2018</td>
											<td>18th to 22nd &nbsp;March, 2019</td>
											<td>20th to 31st &nbsp;May, 2019</td>
										</tr>
									</tbody>
								</table>
							 </div>

							<h3>Homework&nbsp;</h3>

							<p>Homework reinforces the work carried out in class. A Homework Timetable is set by the Headmistress.</p>

							<h3>Prizes and Awards</h3>


							<p>There is no ranking system in academics. However, progress prizes and subject prizes in Urdu, English, Mathematics and Science will be given to reward students from each year group.</p>


							<h3>K6 Special Prizes</h3>


							<p>Syed Babar Ali (Urdu &amp; English) Handwriting Prize</p>

							<p>Best Leaving Prefect of Gwyn House (Miss. I. Khan Award)</p>

							<p>Best Leaving Day Boy of the Junior School (Academics)</p>

							<p>Aimal Khan Award for the Overall Best Leaving Boarder of the Junior School</p>

							<p>The President&rsquo;s Trophy for the Overall Best Leaving Boy of the Junior School</p>

						  </div>
						  
						  <?php 	}
								}elseif ( $_SESSION['portal_School'] == "PSD" ) { ?>
						  <div class="page-title">
							  <h3>Assessment Policy </h3>
						  </div>
						  <br />
						  <div class="assessment">
							  <p>Assessment is a central process in teaching and learning. It is through assessment that we can discover to what extent boys have achieved the intended learning outcomes and provide the support necessary to make progress in their knowledge and understanding.</p>

							<p>Teachers provide regular feedback to parents at three <strong>Teacher Parent Meetings</strong> and through <strong>Reports</strong>.</p>

							<h3>Teacher Parent Meetings</h3>

							<p>These meetings are arranged three times a year to discuss boys' academic progress. Students are expected to attend these meetings with their parents. The meetings are necessarily brief. If there is a significant issue which requires a longer discussion, a later meeting shall be arranged.</p>

							<h3>Reports</h3>

							<p>Reports are sent to parents in December and May. The overall grade in each subject is calculated as follows:</p>

							<p><strong>30% Formative Assessment (10% Continuous Assessment and 20% Standardized Class Tests)</strong></p>
							  
							  
							  <ol type="1">
								  <li>Continuous assessment includes boys’ engagement in class, spot tests, homework and classwork.</li>
								  <li>Standardized Class Tests are conducted in each subject to assess the boys’ knowledge and understanding. These tests take place during lessons at times which are appropriate to the topics they are studying.</li>
							  </ol>
							
							<h3>70% Summative Assessment</h3>
							  <p>Summative Assessments take place by Examinations from 10<sup>th</sup> to 20<sup>th</sup> December and 20<sup>th</sup> to 31<sup>st</sup> May.</p>
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

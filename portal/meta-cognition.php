<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Metacognition Lectures"; include($path."includes.php"); ?>
	
<style>
#defaultIcon {
  position: relative;
}

/* positions header-content at the bottom of header's context */
#defaultIcon-content {
  position: absolute;
  bottom: 0;
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
						  <div class="page-title">
							  <h3><?php //echo $title; ?></h3>
						  </div>
						  <div class="table-responsive">
						  	<img src="<?php echo $path; ?>images/metacognition-lectures.png" alt="" title="Metacongnition Lectures" />
						  </div>
						  <?php if(false){ ?>
						  <div class="row">
							  <p>The Adjunct faculty has a special role in helping the College develop units in meta-cognition, bridging learning and thought between school and university. They meet with students and staff from the College to discuss initiatives. The first meta-cognition syllabus commences in 2017 for participating O and A level students. The Faculty comprises 'Old Boys' from esteemed universities.</p>
							  
							  <div class="table-responsive">
								
								<table align="center" class="table table-bordered jambo_table" style="width: 97%;">
									<tbody>
									  <tr>
										<th align="center" class="ptm_mtitle" colspan="4"><div align="center"><strong>THE ADJUNCT FACULTY MEMBERS </strong></div></th>
									  </tr>
									  <tr>
										<th align="center" class="ptm_mtitle2"><div align="center"><strong>Name</strong></div></th>
										<th align="center" class="ptm_mtitle2"><div align="center"><strong>Aitchison Graduating Class</strong></div></th>
										<th align="center" class="ptm_mtitle2"><div align="center"><strong>College</strong></div></th>
										<th align="center" class="ptm_mtitle2"><div align="center"><strong>Current Position</strong></div></th>
									  </tr>                 
									  <tr class="ptm_row1 mtr">
										<td align="center">Salman Akhtar</td>
										<td align="center">A-Levels: 1984</td>
										<td align="center">BS, MS: MIT</td>
										<td align="center">Co-CEO Techlogix</td>
									  </tr>

									  <tr class="ptm_row2 mtr">
										<td align="center">Nadeem Babar</td>
										<td align="center">A-Levels: 1981</td>
										<td align="center">BS: Columbia<br>
			MS: Stanford</td>
										<td align="center">CEO<br>
			Orient Power</td>
									  </tr>
									  <tr class="ptm_row2 mtr">
										<td align="center">Omer Khayyam</td>
										<td align="center">A-Levels: 1982</td>
										<td align="center">BA: Columbia</td>
										<td align="center">CEO Hadayatsons</td>
									  </tr>
									  <tr class="ptm_row2 mtr">
										<td align="center">Asim Loan</td>
										<td align="center">FSc: 1984</td>
										<td align="center">BS: UET Lahore<br>
			PhD: University of Southern California</td>
										<td align="center">Prof. Elec. Engg.<br>
			UET Lahore</td>
									  </tr>
									  <tr class="ptm_row2 mtr">
										<td align="center">Nauman Zaffar</td>
										<td align="center">A-Levels: 1985</td>
										<td align="center">BS, MS: Univ. Pennsylvania</td>
										<td align="center">Prof. Elec. Engg.<br>
			LUMS</td>
									  </tr>
									  <tr class="ptm_row2 mtr">
										<td align="center">Omer Saeed</td>
										<td align="center">A-Levels: 1986</td>
										<td align="center">BA: Brown<br>
			MBA: Harvard</td>
										<td align="center">CEO Servis Industries</td>
									  </tr>
									  <tr class="ptm_row2 mtr">
										<td align="center">Irfan Chaudhry</td>
										<td align="center">A-Levels: 1988</td>
										<td align="center">BS, MS, PhD: MIT</td>
										<td align="center">Prof. Elec. Engg.<br>
			UET Lahore</td>
									  </tr>
									  <tr class="ptm_row2 mtr">
										<td align="center">Salman Akram Raja</td>
										<td align="center">A-Levels: 1984</td>
										<td align="center">LLM.: Harvard Law School<br>
			LLM.: School of Oriental and African Studies (SOAS)<br>
			MA: Downing College, University of Cambridge</td>
										<td align="center"><br>
			Advocate Supreme Court, Pakistan </td>
									  </tr>

									</tbody>
								  </table>   

								  </div>

						  </div>
						  <?php } ?>
					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php //include($path."rightpanel.php"); ?>
					  
					  <div class="row">
						 
						 <div style="" align="center">
							 <a href="harkness_table"><img class="img-responsive" src="images/harkness-table.jpg" style="" alt="Harkness Table"></a>
						 </div>								  
						 <br/>
						 
					  </div>
					  <div class="row">
						 
						 <div style="" align="center">
							 <a href="student_recognition"><img class="img-responsive" src="images/student-recognition.jpg" style="" alt="Student Recognition"></a>
						 </div>								  
						 <br/>
						 
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

</body>
</html>

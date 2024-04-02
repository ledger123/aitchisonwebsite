<?php
//header("Location: https://aitchison.edu.pk/newsandevents-testlink.php?id=350");
//die();

$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Aitchison Code of Conduct"; include($path."includes.php"); ?>
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
				<div class="row" id="newsletter">
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						 
						  <div class="row">
							  
            	
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="width: 100%;">
								<div align="center" style="padding-bottom: 20px;">
									<img src="images/ac_logo130x130.png" width="130" height="130" alt="Aitchison College, Lahore.">
								</div>
							</div>

							<div class="page-title">
							  <h3 align="center"><?php echo $title; ?></h3>
						    </div>
							  
							<br />
							  
							<div>
								<p>The Aitchison College <em>Code of Conduct</em> applies to all members of the College Community, staff and students. It defines our expected standards of conduct across all facets of school life, day and residential. All members are responsible for sustaining high ethical standards both in the institution and the broader community. Aitchison values integrity, respect, diversity, freedom of enquiry and respectful expression, trust, honesty and fairness in all dealings. We strive to integrate these core values in our educational life and daily conduct. Compliance with these standards is the basis upon which a person is a member of our educational community. Any major breach or consistent undermining of the Code's specific or intended purposes, including the appearance of misconduct or impropriety, will prompt quick intervention from the College Management and may lead to removal of the offending person(s).</p>
								<p>In particular, the College prohibits discrimination in any form based on race, religious creed, gender, medical, physical or mental condition, age or any other charactersitc protected by Law. Where such actions are found to occur, the College Management will act promptly to put an end to the misconduct, help prevent its recurrence and discipline those responsible as per its Policy and Rules. Lying, theft, cheating and examination malpractice are removable offences, especially for senior boys and all staff. Intimidating behaviour or threatening language is forbidden and the College will be severe on those who repeatedly ignore warnings. The relationship between staff and students must exhibit mutual respect that establishes a clear differentiation between the role of mentor and student, adult and child. All business dealings between the College and the wider community must be governed by integrity and honesty.</p>
								<br/>
								<br/>								
							  </div>
							  
						  </div>


					  </div>
					</div>
				  </div>
				  <!--<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php //include($path."rightpanel.php"); ?>
				  </div>-->
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

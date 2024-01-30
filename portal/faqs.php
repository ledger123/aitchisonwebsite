<?php
//header("Location: https://aitchison.edu.pk/newsandevents-testlink.php?id=350");
//die();

$path = "";
//include($path."classes/usersession.php");
//include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "FAQs"; include($path."includes.php"); ?>
<style>

	.question {
		font-weight: bold;
    	padding-top: 15px;
	}
	
</style>
<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."empty_leftheader.php"); ?>
        
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
							  
							<div class="">
							  <div class="" role="tabpanel" data-example-id="togglable-tabs">
								  <ul id="tabs" class="nav nav-tabs bar_tabs" role="tablist">
									<li role="presentation" class="active"><a href="#parents" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Parents’ Portal</a>
									</li>
									<li role="presentation"><a href="#students" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Students’ Portal</a>
									</li>
									<li role="presentation"><a href="#boarders" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Boarders’ Portal</a>
									</li>
									
								  </ul>
								  
								  <div id="myTabContent" class="tab-content">
									  <div class="tab-pane fade in active" id="parents">

										<p class="question">How do I access the Parents’ Portal?</p>
										<p>You can access Parents' Portal by clicking the PARENTS' PORTAL link under the LOGIN tab on the right side of the homepage. This will take you to a log in screen, where you will need to enter your username and password.</p>
										<p class="question">How do I obtain a Username and Password for Parents’ Portal?</p>
										<p>Username and passwords have been mailed to all Parents.</p>
										<p class="question">How to reset password?</p>
										<p>Parents are requested to send  password requests at: <a href="mailto:helpdesk@aitchison.edu.pk">helpdesk@aitchison.edu.pk</a> </p>
										<p class="question">What information is required to reset the password?</p>
										<p>Parents are requested to send school number, name and date of birth of the student while launching their complaints at&nbsp;<a href="mailto:helpdesk@aitchison.edu.pk" target="_blank">helpdesk@aitchison.edu.pk</a>.</p>
										<p class="question"><strong>&nbsp;I had an account last year, do I need to sign-up again?</strong></p>
										<p>No, you don't need to sign-up again as your account remains intact while your children remain a part of the College.</p>
										<p class="question"><strong>Who has access to information through the Parents' Portal?</strong></p>
										<p>The Parents' Portal is a secure and password protected application.</p>

								  </div>
								  
								  <div class="tab-pane fade in" id="students">
									  
                        
									<p class="question">How do I access the Students’ Portal?</p>
									<p>You can access Students’ Portal through a link available under the login tab on the right side of the homepage. This will take you to a log in screen, where you will need to enter your username and password.</p>
									<p class="question">How do I have Username and Password for Students’ Portal?</p>
									<p>Username and passwords have been provided to all students.</p>
									<p class="question">How to reset password?</p>
									<p>Students are requested to send  password requests at: <a href="mailto:helpdesk@aitchison.edu.pk">helpdesk@aitchison.edu.pk</a> </p>
									<p class="question"><strong>&nbsp;I had an account last year, do I need to sign-up again?</strong></p>
									<p>No, you don't need to sign-up again as your account remains intact while you are enrolled in the College.</p>
									<p class="question"><strong>Who has access to information through the Students’ Portal?</strong></p>
									<p>The Students’ Portal is a secure and password protected application.</p>
                        
								  </div>

								  <div class="tab-pane fade in" id="boarders">
									  <p style="padding: 15px;">Portals for Students and Boarders are almost the same. Boarders will log in through Students’ Portal with same credentials. The system will automatically display additional boarding information to them.</p>
									  
									  <?php if(false) { ?>
									<p class="question">How do I access the Boarder’s Portal?</p>
									<p>You can access Boarders' Portal through a link available under the login tab on the right side of the homepage. This will take you to a log in screen, where you will need to enter your username and password.</p>
									<p class="question">How do I obtain a Username and Password for Boarder’s Portal?</p>
									<p>Username and passwords have been provided to all boarders.</p>
									<p class="question">How to reset password?</p>
									<p>Boarders are requested to send  password requests at: <a href="mailto:helpdesk@aitchison.edu.pk">helpdesk@aitchison.edu.pk</a> </p>
									<p class="question"><strong>&nbsp;I had an account last year, do I need to sign-up again?</strong></p>
									<p>No, you don't need to sign-up again as your account remains intact while you are enrolled in the College.</p>
									<p class="question"><strong>Who has access to information through the Boarder's Portal?</strong></p>
									<p>The Boarder's Portal is a secure and password protected application.</p>
									  <?php } ?>
								  </div>
									  
								  </div>
								</div>
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

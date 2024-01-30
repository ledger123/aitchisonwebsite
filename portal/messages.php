<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "Messages"; include($path."includes.php"); ?>
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
				<div class="row" id="messages">
				  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						  <div class="page-title">
							  <h3><?php echo $title; ?></h3>
						  </div>
						  <br />
						  <div class="row" id="messageslist">
							  <ul class="list-unstyled lst-separator" style="margin-left:10px;">
								  
								<?php if($_SESSION['portal_School'] == "SSD" ||
										$_SESSION['portal_School'] == "PSD") { ?>
								  
									<li>
										<div class="media">
											<!--<h3 style="text-decoration:underline;">Term 3 Assessment</h3>-->

											<div class="single_news_pane" style="margin-top: 10px; font-size:16px;">
												<p>Dear Parents,</p>
												<p>Regarding evening tutorials at Aitchison, please see the Parents Portal for letter and application form.</p>
												<p>Vice Principal</p>
											</div>
										</div>
									</li>

								<?}?>
								  
								<?php if($_SESSION['portal_School'] == "SSD") { ?>

								<li>
									<div class="media">
										<!--<h3 style="text-decoration:underline;">Term 3 Assessment</h3>-->

										<div class="single_news_pane" style="margin-top: 10px; font-size:16px;">
											<p>Dear Parents,</p>
											<p>The Senior School will be optional after sports day rehearsal tomorrow at 12 noon. Attendance is mandatory for all boys on the rehearsal and the three days of the Founders Day. Buses will leave at the regular time tomorrow.</p>
											<p>Senior School</p>
										</div>
									</div>
								</li>

								<?}?>

								<li>
									<div class="media">
										<!--<h3 style="text-decoration:underline;">Term 3 Assessment</h3>-->

										<div class="single_news_pane" style="margin-top: 10px; font-size:16px;">
											<p>Dear Parents,</p>
											<p>There will be no after school sports activity today February 21, 2019 due to wet fields.</p>
											<p>Thank you</p>
										</div>
									</div>
								</li>

								<?php if($_SESSION['portal_School'] == "JSD") { ?>

								<li>
									<div class="media">
										<!--<h3 style="text-decoration:underline;">Term 3 Assessment</h3>-->

										<div class="single_news_pane" style="margin-top: 10px; font-size:16px;">
											<p>Dear Parents,</p>
											<p>Due to excessive rain the Junior School Annual Riding Competition scheduled for February 22 is postponed. A new date will be shared later.</p>
											<p>Principal</p>
										</div>
									</div>
								</li>

								<?}?>

								<li>
									<div class="media">
										<!--<h3 style="text-decoration:underline;">Term 3 Assessment</h3>-->

										<div class="single_news_pane" style="margin-top: 10px; font-size:16px;">
											<p>Dear Parents,</p>
											<p>There will be no after school sports activity today Tuesday 19, and tomorrow 20, February  2019. Due to wet fields.</p>
											<p>Thank you</p>
										</div>
									</div>
								</li>
								<li>
									<div class="media">
										<!--<h3 style="text-decoration:underline;">Term 3 Assessment</h3>-->

										<div class="single_news_pane" style="margin-top: 10px; font-size:16px;">
											<p>Dear Parents,</p>
											<p>There will be no after school sports activity today Thursday, February 14, 2019. Due to wet fields.</p>
											<p>Thank you</p>
										</div>
									</div>
								</li>

								<?php if($_SESSION['portal_School'] == "SSD") { ?>

								<li>
									<div class="media">
										<!--<h3 style="text-decoration:underline;">Term 3 Assessment</h3>-->

										<div class="single_news_pane" style="margin-top: 10px; font-size:16px;">
											<p>Dear Parents,</p>
											<p>Friday Jan 18, 2019 is off for Senior School boys only. Regular classes will begin from Monday Jan 21, 2019.</p>
											<p>Senior School</p>
										</div>
									</div>
								</li>

								<?}?>

								<li>
									<div class="media">
										<!--<h3 style="text-decoration:underline;">Term 3 Assessment</h3>-->

										<div class="single_news_pane" style="margin-top: 10px; font-size:16px;">
											<p>Dear Parents,</p>
											<p>Please see 'Notices' and 'Principal's Letters' for important information.</p>
											<p>Thank you</p>
										</div>
									</div>
								</li>

								<?php if($_SESSION['portal_School'] == "JSD") { ?>

								<?php }else if($_SESSION['portal_School'] == "PSD") { ?>

								<?php }else if($_SESSION['portal_School'] == "SSD") { ?>

								<li>
									<div class="media">
										<!--<h3 style="text-decoration:underline;">Term 3 Assessment</h3>-->

										<div class="single_news_pane" style="margin-top: 10px; font-size:16px;">
											<p>Dear Parents,</p>
											<p>Cambridge Examinations Registration Forms May/June 2019 have been given out to all classes. Kindly ensure submission of forms along with copy of payment receipt by 8/2/2019.</p>
											<p>Senior School</p>
										</div>
									</div>
								</li>

								<?php } ?>

							</ul>
						  </div>

					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php //include($path."rightpanel.php"); ?>
					  <div class="row">
						 
						 <div style="" align="center">
							 <a href="prletters.php"><img class="img-responsive" src="images/newsletters.jpg" style="" alt="Newsletter"></a>
						 </div>								  
						 <br/>
						 
					  </div>
					  
					  <div class="row">
						 
						 <div style="" align="center">
							 <a href="past-prletters.php"><img class="img-responsive" src="images/past-newsletter.jpg" style="" alt="Past Newsletter"></a>
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

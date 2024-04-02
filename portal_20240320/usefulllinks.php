<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Usefull Links"; include($path."includes.php"); ?>
	
<style>
#defaultIcon {
  position: relative;
}

/* positions header-content at the bottom of header's context */
#defaultIcon-content {
  position: absolute;
  bottom: 0;
}
	.head_background{

		color: white;
	}	
	
	.link-box {
		padding-top: 10px; padding-bottom: 10px;
	}
	.link-box a img {
		box-shadow: 4px 4px 4px 0px rgb(0 0 0 / 10%);
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
				  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						  <div class="page-title">
							  <h3><?php echo $title; ?></h3>
							  	  
						  </div>
						  <br />
						  <div class="row">
							  <div class="col-md-3 col-sm-4 link-box">
								<a href="https://app.myloft.xyz/user/login?institute=ckbv6vlzjuccs0782ufo2t55g" target="_blank">
									<img src="images/usefullinks/british.jpg" class="img-responsive" alt="British"/>
								</a>
							  </div>
							  <div class="col-md-3 col-sm-4 link-box">
								<a href="https://www.lib.cam.ac.uk" target="_blank">
									<img src="images/usefullinks/cambridge.jpg" class="img-responsive" alt="British"/>
								</a>
							  </div>
							  <div class="col-md-3 col-sm-4 link-box">
								<a href="https://www.ebsco.com" target="_blank">
									<img src="images/usefullinks/ebsco.jpg" class="img-responsive" alt="British"/>
								</a>
							  </div>
							  <div class="col-md-3 col-sm-4 link-box">
								<a href="https://evernote.com" target="_blank">
									<img src="images/usefullinks/evernote.jpg" class="img-responsive" alt="British"/>
								</a>
							  </div>
							  
							  <div class="col-md-3 col-sm-4 link-box">
								<a href="http://www.digitallibrary.edu.pk/Open.htm" target="_blank">
									<img src="images/usefullinks/hec.jpg" class="img-responsive" alt="British"/>
								</a>
							  </div>
							  <div class="col-md-3 col-sm-4 link-box">
								<a href="https://about.jstor.org/oa-and-free" target="_blank">
									<img src="images/usefullinks/jstor.jpg" class="img-responsive" alt="British"/>
								</a>
							  </div>
							  <div class="col-md-3 col-sm-4 link-box">
								<a href="https://trello.com/home" target="_blank">
									<img src="images/usefullinks/trello.jpg" class="img-responsive" alt="British"/>
								</a>
							  </div>
							  <div class="col-md-3 col-sm-4 link-box">
								<a href="https://www.proquest.com" target="_blank">
									<img src="images/usefullinks/proquest.jpg" class="img-responsive" alt="British"/>
								</a>
							  </div>
							  
							  <div class="col-md-3 col-sm-4 link-box">
								<a href="https://www.sciencedirect.com" target="_blank">
									<img src="images/usefullinks/science-direct.jpg" class="img-responsive" alt="British"/>
								</a>
							  </div>
							  <div class="col-md-3 col-sm-4 link-box">
								<a href="https://www.pdfdrive.com" target="_blank">
									<img src="images/usefullinks/pdf-drive.jpg" class="img-responsive" alt="British"/>
								</a>
							  </div>
							  <div class="col-md-3 col-sm-4 link-box">
								<a href="https://elibrary.punjab.gov.pk/resources" target="_blank">
									<img src="images/usefullinks/e-library.jpg" class="img-responsive" alt="British"/>
								</a>
							  </div>
						  </div>
						  
					  </div>
					</div>
				  </div>
				  
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						<div class="row">
							<div style="" align="center">
								<a href="principal-letters"><img class="img-responsive" src="images/newsletters.jpg" style="" alt="Principal's Letters"></a>
							</div>
						<br>
						</div>
						<div class="row">
							<div style="" align="center">
								<a href="harkness_table"><img class="img-responsive" src="images/harkness-table.jpg" style="" alt="Harkness Table"></a>
							</div>
						<br>
						</div>
						<div class="row">
							<div style="" align="center">
								<a href="student_recognition"><img class="img-responsive" src="images/student-recognition.jpg" style="" alt="Student Recognition"></a>
							</div>
						<br>
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

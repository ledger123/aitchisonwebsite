<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
?>

<!DOCTYPE html>
<html lang="en">

<?php $title = "Site is Uner construction"; include($path."includes.php"); ?>
<style>
#defaultIcon {
  position: relative;
}

/* positions header-content at the bottom of header's context */
#defaultIcon-content {
  position: absolute;
  bottom: 0;
}

.overlay {
    content: "";
    display: block;
    position: absolute;
    z-index: -1;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: #7579ff;
    background: -webkit-linear-gradient(bottom,#9E9E9E,#fff);
    background: -o-linear-gradient(bottom,#9E9E9E,#fff);
    background: -moz-linear-gradient(bottom,#9E9E9E,#fff);
    background: linear-gradient(bottom,#9E9E9E,#fff);
    opacity: .8;
	}
	
	.heading {
		width: 100%;
		height: 500px;
		color: #000;
		margin-top: 250px;
		font-family: Poppins-Thin;
		font-size: 56px;
		line-height: 1.1;
		color: rgba(255, 255, 255, 0.5);
		text-transform: uppercase;
		letter-spacing: 5px;
	}
	
	.text {
		width: 100%;
		color: #000;
		margin-top: 25px;
		font-family: Poppins-Thin;
		font-size: 36px;
		line-height: 1.1;
		color: rgba(255, 255, 255, 0.5);
		text-transform: none;
		letter-spacing: 2px;
	}
	
	
</style>
<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
          
          	<div class="page-title">
              
            </div>
          	<div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <br />
                  	
						<div class="content">
							<!-- Animated -->
							<div class="animated fadeIn">
								<center>
									<div class="heading" style="color: #774532;">
										Page Under Construction
									<div class="text" style="color: #774532; visibility: hidden;">We're doing some work on this section. </div>
									</div>

								</center>
							</div>
							<!-- .animated -->
						</div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clear-fix"></div>
          	<!-- footer content -->
        	
        	<?php include($path."footer.php"); ?>
            
        	<!-- /footer content -->
          
        </div>
        <!-- /page content -->
        
      </div>
    </div>
	<?php include($path."footerincludes.php"); ?>
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <script src="../vendors/ckeditor/ckeditor.js"></script>
	<script src="js/news.js"></script>

</body>
</html>

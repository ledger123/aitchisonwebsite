<?php
header("location: login.php");
exit;

include("classes/usersession.php"); 
include("classes/settings.php"); ?>
<!DOCTYPE html>
<html lang="en">
    
    
    <?php $title = "Home"; include("includes.php"); ?>
  
  <body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include("leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
        	<strong>This page is under construction.</strong>
        </div>
        <!-- /page content -->


      </div>
    </div>
	<?php include("footerincludes.php"); ?>
    
  </body>
</html>

<?php
//ini_set('display_errors', 1); //ini_set('display_startup_errors', 1); error_reporting(E_ALL);

$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include("../standard/redirect.php");

?>

<!DOCTYPE html>
<html lang="en">

<link href="css/news.css" rel="stylesheet" type="text/css">


<?php $title = "Clean URLs List"; include($path."includes.php"); ?>
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
          
          	<div class="page-title">
              <div class="title_left">
                <h3>Clean URLs List</h3>
              </div>
            </div>
          	<div class="clearfix"></div>
            
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
                    <br />

                      <table class="table table-bordered" style="width: 100%;">
                          <tr>
                              <th>Sr#</th><th>URL</th><th>Clean URL</th>
                          </tr>
                          <?php
                          $sr = 1;
                          foreach ($redirect_arr as $key => $value) {
                              ?>
                              <tr>
                                  <td><?php echo $sr++; ?></td><td><?php echo $key; ?></td><td><a href="<?php echo $value; ?>" target="_blank"><?php echo $value; ?> <i class="fa fa-external-link" aria-hidden="true"></i></a></td>
                              </tr>

                              <?php
                          }
                          ?>

                      </table>

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
    <script src="../vendors/jquery.superslides/jquery.superslides.min.js"></script>
    <script src="../vendors/jquery.tosrus/jquery.tosrus.min.all.js"></script>
    <script src="../vendors/ckeditor/ckeditor.js"></script>
    <script src="../vendors/ckeditor/config.js"></script>
	<script src="js/news.js"></script>

</body>
</html>

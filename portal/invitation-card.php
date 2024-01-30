<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."classes/filing.php");

include($path."news/newsrepository.php");

include($path."classes/dataCenter2.php");

$dc2 = new DataCenter2();
$dc2->Connect();

$newsRepo = new NewsRepository($dc2);


$group = $_SESSION['PORTAL_ID'];
$subGroup = $_SESSION['portal_School'];
$location = isset($_SESSION['portal_CurrentClass']) ? $_SESSION['portal_CurrentClass'] : "";

$tNotices = $newsRepo->GetPublishedNotices( $group, $subGroup, $location );

?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Invitation Card"; include($path."includes.php"); ?>

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

						  </div>
                          <table border="0" style="font-size: 28px; margin-left: auto; margin-right: auto;">
                              <tbody><tr>
                                  <td style="width: 50%; text-align: left; padding-right: 5px;"><a id="arrowLeft"><i class="fa fa-arrow-left" style="color: #337ab7; cursor: pointer;"></i></a></td>
                                  <td style="width: 50%; text-align: right; padding-left: 5px;"><a id="arrowRight" class="active"><i class="fa fa-arrow-right" style="color: #337ab7; cursor: pointer;"></i></a></td>
                              </tr>
                              </tbody>
                          </table>
						  <div class="row">
							  
							<?php
							if (in_array($location, ['K2', 'K3'])) {
							?>
							<div class="col-lg-12 col-md-12 col-sm-12 media" style="vertical-align:top; text-align: center;">

                                <img id="imgHistory" alt="Invitation Card" class="img-responsive" src="images/invitationcards/<?php echo $location?>-1.jpg" style="cursor: pointer; width: 100%; margin-left: auto; margin-right: auto;">
                                <table border="0" style="font-size: 28px; margin-left: auto; margin-right: auto;">
                                    <tbody><tr>
                                        <td style="width: 50%; text-align: left; padding-right: 5px;"><a id="arrowLeft"><i class="fa fa-arrow-left" style="color: #337ab7; cursor: pointer;"></i></a></td>
                                        <td style="width: 50%; text-align: right; padding-left: 5px;"><a id="arrowRight" class="active"><i class="fa fa-arrow-right" style="color: #337ab7; cursor: pointer;"></i></a></td>
                                    </tr>
                                    </tbody>
                                </table>
							</div>
							<?php
							}
							?>

						  </div>
						
					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  
					  <?php //include($path."rightpanel.php"); ?>
					  
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
<script>
    var imageIndex = "1";

    var img1 = "images/invitationcards/<?php echo $location?>-1.jpg";
    var img2 = "images/invitationcards/<?php echo $location?>-2.jpg";

    $("#imgHistory, #arrowLeft, #arrowRight").click(function(){
        if(imageIndex == 1) {
            $('#imgHistory').attr('src', img2);
            imageIndex = 2;
        }
        else {
            $('#imgHistory').attr('src', img1);
            imageIndex = 1;
        }
    });

</script>
</html>

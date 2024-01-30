<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
$path = "";
include_once '../standard/redirect.php';

include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."news/newsrepository.php");


include($path."classes/dataCenter2.php");
$dc2 = new DataCenter2();
$dc2->Connect();

$OpenAccess = 1;

$TxtNewsHeading = "Notice";

$newsRepo = new NewsRepository($dc2);

$newsId = isset($_REQUEST['id']) ? (int)$_REQUEST['id']	: 0;

if($newsId>0)
{
	$group = $_SESSION['PORTAL_ID'];
	$subGroup = $_SESSION['portal_School'];
	$location = $_SESSION['portal_CurrentClass'];
	
	$isPublished = $newsRepo->IsNewsPublished( $group, $subGroup, $location, $newsId );
	
	if ( $isPublished ) {
		
		$tNews = $newsRepo->GetNews($newsId, "", "", "", 0, 0, 1, 1, USER_ID );
		//$tNews->PrintTable();
		if($tNews && $tNews->rowsCount() > 0)
		{
			$row = $tNews->Rows[0];
			
			//$TxtNewsHeading	   = $row->Heading;
			$OpenAccess		   = $row->OpenAccess;
		}
	}
	
}

?>

<!DOCTYPE html>
<html lang="en">


<?php $title = $TxtNewsHeading; include($path."includes.php"); ?>
	
<style>
	
	
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
						  <br />
						  <?php
							if( $newsId>0 )
							{
                                $heading = $purifier->purify(htmlentities(stripslashes(utf8_decode ( str_replace('&amp;', '&', $row->Heading)))) );

                                if( isset($_GET['title']) && makeSlug($heading)===$_GET['title'] ) {
                                    $response = true;

                                    //echo "OpenAccess: ".$OpenAccess."<br/>";
                                    if ($OpenAccess == 0) {
                                        $response = false;
                                        if( strlen ($_SESSION['portal_SchoolNo']) > 0) {

                                            $response = true;
                                        }
                                    }

                                    //echo "<!--";
                                    //echo "template: ".$row->Template."<br/>";
                                    //echo "<br />mode: ". $_GET['mode'];
                                    //echo $templatePath."news/templates/addtemplate.php";
                                    //echo "-->";
                                    //exit;
                                    if ( $response )
                                    {
                                        //$_GET['imagesPath'] = "newsletter/news/";
                                        $_GET['imagesPath'] = "http://aitchison.edu.pk/newsletter/news/";
                                        $templatePath = "";

                                        $_GET['mode'] = "view";

                                        include($templatePath."news/templates/addtemplate.php");
                                    }
                                    else
                                    {
                                        //echo "response: " . $response;
                                        //header("location: index.php");
                                    ?>
                                        <div class="alert alert-info" role="alert">
                                            <h2 class="alert-heading">Note:</h2>
                                            <p>This page has been moved to Portal and no longer available offline.</p>

                                            <p>Please visit the Portal to see the required web-page.</p>

                                            <p>&nbsp;</p>
                                            <p>Thank You,</p>
                                            <br />
                                            <p>IT Department</p>
                                        </div>
                                    <?php
                                    }

                                }
                                else {


                                    if ( !isset($_GET['title']) ) {

                                        $href = "notices-new-".$newsId."-".makeSlug($heading);
                                        header("Location: ". $href);
                                    }
                                }

							}?>
						  
					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">&nbsp;</div>
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
	<script language="javascript" type="text/javascript">
		var sidemenu=document.getElementsByClassName("side-menu");
		var itemslist=sidemenu.getElementsByTagName("li");		
		alert("akhtar"+sidemenu);
	</script>
</body>
</html>

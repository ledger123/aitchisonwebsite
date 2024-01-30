<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."news/newsrepository.php");


include($path."classes/dataCenter2.php");
$dc2 = new DataCenter2();
$dc2->Connect();


$newsRepo = new NewsRepository($dc2);

$newsId = isset($_GET['id']) ? (int)$_GET['id']	: 0;

if($newsId>0)
{
	$tNews = $newsRepo->GetNews($newsId, "", "", "", 0, 0, 1, 1, USER_ID );
	//$news = $newsRepo->GetNews( $id, "", "", "", 0, 0, 1, 1, USER_ID );
	//$tNews->PrintTable();
	if($tNews && $tNews->rowsCount() > 0)
	{
		$row = $tNews->Rows[0];
		
		$TxtNewsDate 	   = $row->Date;
		$TxtNewsHeading	   = $row->Heading;
		$ChkShowHeading	   = $row->ShowHeading;
		$TxtNewsSubheading = $row->Subheading;
		$OptNewsType	   = $row->NewsType;
		$OpenAccess		   = $row->OpenAccess;
		$active    	  	   = $row->Active;
		
		
	}
	
}


if ($OptNewsType === "URL") {
	
	$tNewsContents = $newsRepo->GetNewsContents( $newsId );
	
	if($tNewsContents && $tNewsContents->rowsCount() > 0){
		$dRow = $tNewsContents->Rows[0];
		
		$newsContents = $dRow->Content1;
	}
	
	$newsContents = str_replace(array("<p>", "</p>"), "", $newsContents);
}

?>

<!DOCTYPE html>
<html lang="en">


<?php $title = htmlentities(stripslashes(utf8_decode( $TxtNewsHeading ))); include($path."includes.php"); ?>
	
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
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="row">
					  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
						  
						  <?php
							if($newsId>0)
							{
								$response = true;

								//echo "OpenAccess: ".$OpenAccess."<br/>";
								if ($OpenAccess == 0) {
									$response = false;
									if( count($_SESSION['portal_SchoolNo']) > 0) {

										$response = true;
									}
								}
								
								
								
								//echo "template: ".$row->Template;
								//echo "<br />mode: ". $_GET['mode'];
								//exit;
								if ( $response )
								{
									if($OptNewsType === "URL") {
										header("Location: ". $newsContents);
									}
									else {
										$_GET['imagesPath'] = "../newsletter/news/";
										$templatePath = "";

										$_GET['mode'] = "view";
										//echo $templatePath."news/templates-new/addtemplate.php";
										include($templatePath."news/templates-new/addtemplate.php");
									}
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


							}?>
						  
					  </div>
					  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						  <?php include($path."rightpanel.php"); ?>

					  </div>
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
	<script language="javascript" type="text/javascript">
		var sidemenu=document.getElementsByClassName("side-menu");
		var itemslist=sidemenu.getElementsByTagName("li");		
		alert("akhtar"+sidemenu);
	</script>
</body>
</html>

<?php
$path = "";
include_once '../standard/redirect.php';

include($path."classes/usersession.php");
include($path."classes/settings.php");

include($path."news/newsrepository.php");

include($path."classes/dataCenter2.php");


// how many rows to show per page
$recordsPerPage = 10;

$page = isset($_REQUEST['Txtg']) ? (int)$_REQUEST['Txtg'] : 0;

if($page == 0 || $page == 1) $offset = 0;
else if($page > 1) $offset = (($page -1) * $recordsPerPage);

$id	   = isset($_REQUEST['id'])	   ? (int)$_REQUEST['id']	 : 0;
//$mode  = isset($_REQUEST['mode'])  ? $_REQUEST['mode']	 	 : "";
//$TxtEditId = isset($_REQUEST['TxtEditId']) ? (int)$_REQUEST['TxtEditId'] : 0;

$TxtEditId = 0;


$dc2 = new DataCenter2();
$dc2->Connect();

$newsRepo = new NewsRepository($dc2);

//$group = $_SESSION['PORTAL_ID'];
//$subGroup = $_SESSION['portal_School'];
//$location = $_SESSION['portal_CurrentClass'];

//$tNews = $newsRepo->GetPublishedNewsByLocationId( NewsLocations::PrPastNewsletter );


$group = $_SESSION['PORTAL_ID'];
$subGroup = $_SESSION['portal_School'];
$location = $_SESSION['portal_CurrentClass'];

$data = $newsRepo->GetPublishedPastNewsletters2( $group, $subGroup, $location, $offset, $recordsPerPage );


$totalRecords = $data[0];
$tNews = $data[1];

//echo "total: " . $totalRecords;

?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Principal's Past Letters"; include($path."includes.php"); ?>

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
							  <div class="title_left">
								<h3><?php echo $title; ?></h3>
							  </div>
						  </div>
						  <br />
						  <div class="row">
							<form id="formView" action="principal-past-letters" method="post" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">
								<input type="hidden" id="id" name="id" />
								 <input type="hidden" id="mode" name="mode" value="<?php echo $mode; ?>" />
								 <input type="hidden" id="TxtEditId" name="TxtEditId" value="<?php echo $id; ?>" />
								 <input type="hidden" id="Txtg" name="Txtg" value="<?php echo $page; ?>" />

							<?php
							if($tNews) {
							foreach($tNews->Rows as $row) {
                                $heading = $purifier->purify(htmlentities(stripslashes(utf8_decode ( str_replace('&amp;', '&', $row->Heading)))) );

								if ($row->NewsType == "URL") {
									//$href = $row->Content1;
                                    $href = str_replace(array("<p>", "</p>"), "", $row->Content1);
									$target = "_blank";
								}
								else {
									//$href = "principal-letter.php?id=".$row->NewsId;
                                    $href = "prletter-".$row->NewsId."-".makeSlug($heading);
									//$href = $domainName."newsandevents-live.php?id=".$row->NewsId;
									$target = "_blank";
								}
								$date = "&nbsp;";
								//if ($row->ShowDate)
									$date = $row->Date;
							?>
							<div class="col-lg-12 col-md-12 col-sm-12 media" style="vertical-align:top;">
								<a href="<?php echo $href; ?>" target="<?php echo $target; ?>" style="text-decoration:none;">
									<div class="row">
										<div class="col-lg-1 col-md-1 col-sm-1 col-xs-2" style="padding-right:0;">
										<i style="color: #002663; font-size: 30px;" class="fa fa-envelope"></i></div>
										<div class="col-lg-11 col-md-11 col-sm-11 col-xs-10" style="font-size:18px;">
											<div><?php echo (stripslashes(utf8_decode($row->Heading)));?></div>
											<div style="font-size:16px;color:#818181;"><?php echo $date;?></div>
										</div>
									</div>
								</a>

							</div>
							
							<?php
							}
							
							?>
								<div class="col-lg-12 col-md-12 col-sm-12 media" style="vertical-align:top; margin-top: 10px;">&nbsp;</div>
								
								<div class="col-lg-12 col-md-12 col-sm-12 media">
								<?php
							include("paging.php");
							$url = $portalDomainName . "principal-past-letters";
							$newsId = $id > 0 ? (int)$id : (int)$TxtEditId;
							Paging::Draw($page, $totalRecords, $recordsPerPage, $url, (int)$newsId);
							}
							?>
							
							</div>
								
							  </form>
						  </div>

					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php include($path."rightpanel.php"); ?>
					  
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

<script>

function onPaging(g,id)
{
	//alert(g);
	$("#id").val(id);
	$("#TxtEditId").val("0");
	$("#Txtg").val(g);
	document.forms["formView"].submit();
}

</script>

</body>
</html>

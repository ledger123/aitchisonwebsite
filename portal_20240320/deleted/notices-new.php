<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
$path = "";
include_once '../standard/redirect.php';

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


<?php $title = "Head of School Notices"; include($path."includes.php"); ?>

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
							  <div class="title_left" style="margin-bottom: 15px;">
								<h3><?php echo $title; ?></h3>
							  </div>
						  </div>
						  <br />
						  <div class="row">
							  
							<?php
                            $index = 1;
							if($tNotices) {


                                foreach ($tNotices->Rows as $row) {

                                    $heading = html_entity_decode( htmlentities(stripslashes(utf8_decode($row->Heading))));

                                    if ($row->NewsType == "URL") {
                                        $href = $row->Content1;
                                        $target = "_blank";
                                    } else {
                                        //$href = "notice-new.php?id=".$row->NewsId;
                                        $href = "notices-new-" . $row->NewsId ."-".makeSlug($heading);
                                        $target = "_blank";
                                    }
                                    $date = "&nbsp;";
                                    ///if ($row->ShowDate)
                                    $date = $row->nDate;

                                    #template is URL
                                    if ($row->TemplateId == 6) {
                                        $tContents = $newsRepo->GetNewsContents($row->NewsId);

                                        if ($tContents->rowsCount() > 0) {

                                            $contentsRow = $tContents->Rows[0];

                                            //$href = Filing::GetURL("", $purifier->purify($row->Heading), $purifier->purify($contentsRow->Content1));
                                            $href = $purifier->purify($contentsRow->Content1);
                                        }

                                        $target = "_blank";
                                    }

                                    //echo "<!-- Sub: ";
                                    //echo $row->Subheading;
                                    //echo "-->";

                                    $subHeading = $row->Subheading . " " . $date;
                                    ?>
                                    <div class="col-lg-12 col-md-12 col-sm-12 media" style="vertical-align:top;">
                                        <a href="<?php echo $href; ?>" target="<?php echo $target; ?>"
                                           style="text-decoration:none;">
                                            <div class="row">
                                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2"
                                                     style="padding-right:0;">
                                                    <i class="fa fa-newspaper-o"
                                                       style="color: #002663; font-size: 30px;"></i>
                                                </div>
                                                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-10"
                                                     style="font-size:18px;">
                                                    <div><?php echo $heading; ?></div>
                                                    <div style="font-size:16px;color:#607d8b;"><?php echo $purifier->purify($subHeading); ?></div>
                                                </div>
                                            </div>
                                        </a>

                                    </div>
                                    <?php
                                    #Display a message in senior school after the first record.
                                    if ($index == 3 && $_SESSION['portal_School'] == 'SSD') {

                                        ?>
                                        <div class="col-lg-12 col-md-12 col-sm-12 media" style="vertical-align:top;">
                                            <h4>Archived Notices</h4>
                                        </div>
                                        <?php
                                    }
                                    $index++;
                                }
                            }
							?>
							
							
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

</body>
</html>

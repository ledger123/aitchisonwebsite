<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include("accounts/accountrepository.php");
include($path."classes/filing.php");



//$quickLinks[] = array("", "");
$get_gmail_link = "";
$get_result_link = '';
$online_classes_jsd = '';

if ($_SESSION['portal_SchoolNo'] == '10000') {

    $isCambridgeCode = false;

    $fileName = $_SESSION['portal_SchoolNo'];

    if($isCambridgeCode) {

        include($path."examination/examinationrepository.php");

        $examRepository = new ExaminationRepository($dc);

        $fileName = $examRepository->GetCambridgeCode( $_SESSION['portal_SchoolNo'] );
    }

    $fileURL = 'data/2020-21/cambridge-results/'. $fileName . '.pdf';

    if ( file_exists( $fileURL ) ) {

        $t = 'Download Result';
        $href = Filing::GetURL2("", $t, '../'.$fileURL, $t, $functions);

        $get_result_link =
            '<a class="tile-stats nav-link " href="'. $href .'" style="background: rgb(15, 155, 120); font-weight: bold;">
              <div><i class="fa fa-download"></i>&nbsp;&nbsp; '. $t . '</div>
          </a>';

        //echo $_SESSION['portal_SchoolNo'];
    }
}

$classesArr = ['K1', 'K2', 'K3', 'K4', 'K5', 'K6', 'E2', 'M1', 'M2', 'Pre C1', 'C1'];
if (false && in_array($_SESSION['portal_CurrentClass'], $classesArr)) {
    $get_gmail_link =
        '<a class="tile-stats nav-link " href="accounts/user-contacts.php" style="background: rgb(15, 155, 120); font-weight: bold;">
              <div>Submit Gmail for the College Record</div>
          </a>';

    $accountRepo = new AccountRepository($dc);
    $student = $accountRepo->GetStudentContacts($_SESSION['portal_SchoolNo']);
    $dRow = $student->Rows[0];
    if (strlen($dRow->Email_Gmail) > 0) {
        $get_gmail_link =
            '<a class="tile-stats nav-link " href="accounts/user-contacts.php" style="background: rgb(15, 155, 120); font-weight: bold;">
              <div>Student\'s Profile</div>
          </a>';

    }

}
elseif (in_array($_SESSION['portal_CurrentClass'], ['C2', 'H1', 'H2'])) {
    include("examination/examinationrepository.php");

    $examRepo = new ExaminationRepository($dc);

    $response = $examRepo->IsGradePredictedExists($_SESSION['portal_SchoolNo']);
    if($response) {
        $get_gmail_link =
            '<a class="tile-stats nav-link " href="examination/predicted-grades-report.php" style="background-color: #4CAF50; font-weight: bold;">
              <div>Verified Grades Cambridge May/June 2020</div>
          </a>';
    }
    else {
        $get_gmail_link = '';
    }
}



$MsgForOnlineLearning = '';

if ( in_array($_SESSION['portal_School'], ['SSD', 'PSD', 'JSD']) ) {
    $MsgForOnlineLearning = '<div class="alert alert-primary" role="alert" style="color: #000; background-color: #cce5ff; border-color: #b8daff;">
                                <div><h3>Student\'s School Email Address:</h3></div>
								<div>Your official email address is <span>'. $_SESSION['portal_SchoolNo'] .'@aitchison.edu.pk</span> and will be used for Online Classes.</div>
								
								<div>How to login:</div> 

                                <ol>
                                    <li>Go to <a href="https://mail.google.com/a/aitchison.edu.pk" target="_blank" rel="noopener noreferrer" style="color:blue; text-decoration: underline;">mail.google.com/a/aitchison.edu.pk</a></li>
                                    <li>Enter the above mentioned email</li>
                                    <li>Enter the current password of Parents\' Portal</li>
                                </ol>
                                
                                <div>Please visit <a href="notice.php?id=809" target="_blank" rel="noopener noreferrer" style="color:blue; text-decoration: underline;">FAQs</a> on Online Classes.</div>
							</div>';
}


$videoforJuniorschool = '';
if ( $_SESSION['portal_School'] == 'JSD' /*&& isset($_GET['videolink']) && $_GET['videolink'] == 231*/ ) {
    $videoforJuniorschool =
        '<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12" style="margin-bottom: 20px;">
        <video
        style="width:100%; height:300px;"
        id="my-player"
        class="video-js"
        controls
        preload="auto"
        
        poster="data/2019-20/videos/poster-junior-school-video.jpg"
        data-setup=\'{}\'>
      <source src="data/2019-20/videos/junior-school-video.mp4" type="video/mp4"></source>
      <source src="data/2019-20/videos/junior-school-video.webm" type="video/webm"></source>
      <source src="data/2019-20/videos/junior-school-video.ogv" type="video/ogg"></source>
      <p class="vjs-no-js">
        To view this video please enable JavaScript, and consider upgrading to a
        web browser that
        <a href="https://videojs.com/html5-video-support/" target="_blank">
          supports HTML5 video
        </a>
      </p>
    </video>
    </div>';

    $videoforJuniorschool =
        '<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 col-xs-12" style="margin-bottom: 20px;">
            <video
                style="width:100%; height:300px;" 
                controls poster="data/2019-20/videos/poster-junior-school-video.jpg">
              <source src="data/2019-20/videos/junior-school-video.webm" 
                      type=\'video/webm;codecs="vp8, vorbis"\' />
              <source src="data/2019-20/videos/junior-school-video.mp4" 
                      type=\'video/mp4;codecs="avc1.42E01E, mp4a.40.2"\' />
             
            </video>
        </div>';


    $videoforJuniorschool = '';

    $online_classes_jsd = '<a class="tile-stats nav-link " href="notice.php?id=798" style="background: rgb(15, 155, 120); font-weight: bold;">
              <div>Junior School Online Classes</div>
          </a>';
}

?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "Dashboard"; include($path."includes.php"); ?>

<link href="vendors/video-js/video-js.min.css" rel="stylesheet">
<script src="vendors/video-js/video.min.js"></script>

<style>
#defaultIcon {
  position: relative;
}

/* positions header-content at the bottom of header's context */
#defaultIcon-content {
  position: absolute;
  bottom: 0;
}
	
	.top_tiles a > i {
		font-size: 28px;
	}
	
	
	.top_tiles .tile-stats {
		background: #3a87ad;
		text-align: center;
		padding: 10px 0;
		color: #fff;
	}

	.top_tiles .tile-stats a {
		color: #fff;
	}
	
	.top_tiles .animated a > i {
		font-size: 28px;
	}
	
	.tile-stats:hover {
		color: #fff;
		background-color: rgb(15, 155, 120);
		text-decoration: none;
	}

	.form-control {
		border-radius: 5px;
		border: 2px solid #ccc;
	}

	.form-control:focus {
		border: 2px solid #3a87ad;
	}

	.sub-heading {
		font-size: 20px; padding-top: 15px; padding-bottom: 10px; padding-left:10px;
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
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">


                          <?php if(strlen ($videoforJuniorschool) > 0) { ?>
                              <div class="form-group row">
                                  <?php echo $videoforJuniorschool; ?>
                              </div>
                          <?php } ?>


                          <?php if(strlen ($MsgForOnlineLearning) > 0) { ?>
                          <div class="form-group row">
                              <?php echo $MsgForOnlineLearning; ?>
                          </div>
                          <?php } ?>
						 
						  <div class="row">

                              <div class="row top_tiles">
                                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"><h4 class="quick-link-header">Quick Links</h4></div>
                                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                      <?php echo $get_gmail_link; ?>
                                      <?php echo $get_result_link; ?>
                                      <?php echo $online_classes_jsd; ?>
                                  </div>
                                  <div class="col-lg-offset-2 col-lg-3 col-md-3 col-sm-6 col-xs-12" align="right"><input type="text" class="form-control" id="txtSearch" placeholder="Search links"/></div>
                              </div>
							<br />
							  
							  
							<div class="row top_tiles quick-links">
								
								<div class="animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12">
									
									  <a class="tile-stats nav-link " href="prletters.php">
										<i class="fa fa-envelope"></i><div>Principal</div>
									  </a>
									
								</div>
								
								<div class="animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12">
									
									  <a class="tile-stats nav-link " href="fee/fee-bills.php">
										<i class="fa fa-money"></i><div>Fee Bills</div>
									</a>
									
								</div>

                                <?php
                                if (in_array($_SESSION['portal_CurrentClass'], ['K1', 'K2', 'K3', 'K4', 'K5', 'K6', 'E2', 'M1', 'Pre C1', 'C1', 'C2', 'H1', 'H2'])) {
                                ?>
                                <div class="animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12">

                                    <a class="tile-stats nav-link " href="online-classes/onlinelearning.php" style="background: rgb(15, 155, 120); font-weight: bold;">
                                        <i class="fa fa-desktop"></i><div>Online Learning</div>
                                    </a>

                                </div>
                                <?php } ?>

								<?php if(true){ ?>
								<div class="animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12">
									
									  <a class="tile-stats nav-link " href="carsticker.php" target="_blank">
										<i class="fa fa-car"></i><div>Apply Car Stickers</div>
									</a>
									
								</div>
								<?php } ?>
								
								
								<div class="animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12">
									
									  <a class="tile-stats nav-link " href="https://aitchison.edu.pk/newsandevents.php">
										<i class="fa fa-newspaper-o"></i><div>News</div>
									</a>
									
								</div>
								<div class="animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12">
									
									  <a class="tile-stats nav-link " href="notices.php">
										<i class="fa fa-bell"></i><div>Notices</div>
									</a>
									
								</div>
								<?php if(false){ ?>
								<div class="animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12">
									
									  <a class="tile-stats nav-link " href="syllabus.php">
										<i class="fa fa-book"></i><div>Syllabus</div>
									</a>
									
								</div>
								<?php }?>
							</div>

							
							<br />

							<div class="row top_tiles">

							<?php
								include_once("menu/menu.php");
		  
								$menuHelper = new MenuHelper($dc, $url, $portalDomainName, $purifier);
								$menuHelper->init();

								$menu = $menuHelper->getMenu();

								$javascriptArray = "";
								$index = 0;

								foreach($menu->Items as $item) {
									if ($item->HasItems()) {
										?>
										<div class="row row-margin" style="margin: 0 10px;">&nbsp;</div>
										<?php

										echo "<div class='sub-heading' style=''>". $purifier->purify($item->Title)."</div>";

										foreach($item->Items as $subItem) {

											$id = "cmd".str_replace(array("_","'", "-", "&amp;", "  "), "", $purifier->purify($subItem->Title));
											$id = str_replace(" ", "_", $id);
											//$id = str_replace("-", "_", $id);

											$javascriptArray .= "liste[".($index++)."]=['$id','". str_replace("'", "", strtolower($item->Title))."'];\n";
											$javascriptArray .= "liste[".($index++)."]=['$id','". str_replace("'", "", strtolower($subItem->Title))."'];\n";
										
										?>

											<div id="<?php echo $id; ?>" class="lnks animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12" style="">
												
												<a class="tile-stats nav-link " href="<?php echo $purifier->purify($subItem->Url); ?>">
													<div><?php echo $purifier->purify($subItem->Title); ?></div>
												</a>
											
											</div>

										<?php
										}
										?>
										
										<?php
									}
								}

								#customized search items
								$javascriptArray .= "liste[".($index++)."]=['cmdPrincipals_Letters','newsletters'];\n";
								$javascriptArray .= "liste[".($index++)."]=['cmdPrincipals_Past_Letters','newsletters'];\n";
								$javascriptArray .= "liste[".($index++)."]=['cmdPrincipals_Past_Letters','past newsletters'];\n";

								//liste[49]=['cmdPrincipals_Letters','principals letters'];


							?>

							</div>
							<br /><br />
							  
						  </div>


					  </div>
					</div>
				  </div>
				  <!--<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php //include($path."rightpanel.php"); ?>
				  </div>-->
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

var liste = [];

<?php echo $purifier->purify($javascriptArray); ?>

$( document ).ready(function() {
	
	$( "#txtSearch" ).keyup(function() {
		var value = $(this).val();
		if( value.length > 2) {
			value = value.toLowerCase();
			
			var result = [];
			for(var j = 0; j < liste.length; j++) {
				if ( liste[j][1].indexOf(value) !== -1 )
					result[result.length] = liste[j];
			}
			
			if(result.length > 0) {
				var ids = "";
				for(var i = 0; i < result.length; i++) {
					ids += "#"+result[i][0] + ",";
				}


				ids = ids.substr(0, ids.length -1);
				//console.log(ids);

				$('.lnks').hide();
				$('.sub-heading').hide();
				$('.row-margin').hide();
				$('.quick-links').hide();
				$('.quick-link-header').text("Search results");

				$(ids).each(function(){
					$(this).show();
				});
			}


		}
		else {
			$('.lnks').show();
			$('.sub-heading').show();
			$('.row-margin').show();
			$('.quick-links').show();
			$('.quick-link-header').text("Quick Links");
			
		}
	});
});

</script>

</body>
</html>

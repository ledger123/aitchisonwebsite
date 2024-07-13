<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include("accounts/accountrepository.php");
include($path."classes/filing.php");

$accountRepo = new AccountRepository($dc);

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


    $student = $accountRepo->GetStudentContacts($_SESSION['portal_SchoolNo']);
    $dRow = $student->Rows[0];
    if (strlen($dRow->Email_Gmail) > 0) {
        $get_gmail_link =
            '<a class="tile-stats nav-link " href="accounts/user-contacts.php" style="background: rgb(15, 155, 120); font-weight: bold;">
              <div>Student\'s Profile</div>
          </a>';

    }

}
elseif (false && in_array($_SESSION['portal_CurrentClass'], ['C2', 'H1', 'H2'])) {
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

$get_mock_exam_result_link = "";
if (false && in_array($_SESSION['portal_CurrentClass'], ['C1', 'C2', 'H1', 'H2'])) {

    $get_mock_exam_result_link =
        '<a class="" href="mock-examination-report.php" style="">
              <div><img src="images/mock-exam-banner2.jpg" alt="mock exam banner" class="img-responsive"></div>
          </a>';
}




$MsgForOnlineLearning = '';
$MsgForGroupCylce = '';
$groupcycle= '';
if ( false ) {

	$studentgroups = $accountRepo->getStudentGroupCycle($_SESSION['portal_SchoolNo']);
	if($studentgroups->rowsCount() > 0) {
		$studentgroup = $studentgroups->Rows[0];
		$groupcycle = $studentgroup['cycle'];


        if ( in_array($_SESSION['portal_School'], ['JSD']) ) {
            if ($groupcycle == "A") {
                $msg_student = "Your physical classes are scheduled on Monday and Wednesday.<br/>Friday will be utilized for Online Classes.";
            } else {
                $msg_student = "Your physical classes are scheduled on Tuesday and Thursday.<br/>Friday will be utilized for Online Classes.";
            }
            $msg_student = '';

            $MsgForGroupCylce = '<div class="alert alert-primary" role="alert" style="color: #000; background-color: #cce5ff; border-color: #b8daff;">                  
                                <div><h3>Your Group Cycle is '.$groupcycle.'</h3></div>
                                <div><p>'.$msg_student.'</p></div>
							</div>';


            //$MsgForGroupCylce = '<div class="alert alert-primary" role="alert" style="color: #000; background-color: #cce5ff; border-color: #b8daff;">Aitchison will return to regular school and regular timings from Monday, October 4th. Class sizes will be no greater than 25.</div>';

        }
        else {
            $MsgForGroupCylce = '';
        }




	}
    if($_SESSION['portal_School'] == "SSD") {

        $MsgForGroupCylce = '<a href="time-table" style=""><div class="alert alert-primary" role="alert" style="color: #000; background-color: #cce5ff; border-color: #b8daff;">                  
                                <div><h3> Routine Programme for Senior School</h3></div>
								<div>WINTER TERM-2021</div>
								<div>Commencing Thursday 16<sup>th</sup> September, 2021</div>
								<div>Please <span style="color:blue; font-weight: bold;">click here</span> for Cycle Information and Timings</div>
							</div></a>';

        //$MsgForGroupCylce = '<div class="alert alert-primary" role="alert" style="color: #000; background-color: #cce5ff; border-color: #b8daff;">Aitchison will return to regular school and regular timings from Monday, October 4th. Class sizes will be no greater than 25.</div>';
        $MsgForGroupCylce = '';
    }
    
}

if ( in_array($_SESSION['portal_School'], ['SSD', 'PSD', 'JSD'])  ) {
	/*and will be used for Online Classes.*/
	/*<div>Please visit <a href="notice.php?id=809" target="_blank" rel="noopener noreferrer" style="color:blue; text-decoration: underline;">FAQs</a> on Online Classes.</div>*/
	if($_SESSION['portal_SchoolName']!="Junior School"){
		$_SESSION['portal_Studing']=$_SESSION['portal_Studing'];
	}else{
		$_SESSION['portal_Studing']=$_SESSION['portal_Studing'];
		//$_SESSION['portal_Studing']=$_SESSION['portal_CurrentClass'];
	}
    $MsgForOnlineLearning = '
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne" style="background-color: #fcf6f6;">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        School Email Address
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body" style="background-color: #fff; font-size: 14px;">
        <p><strong>'. ucwords($_SESSION['portal_userTitle']) .'</strong>, '. $_SESSION['portal_Studing'] .' - '. $_SESSION['portal_House'] .' House<p>
        <div>Your school email address is <span style="color: blue;">'. $_SESSION['portal_SchoolNo'] .'@aitchison.edu.pk</span> </div>
        <p>This email address will be the main communication channel between the school and the student. It will be used for multiple purposes, such as accessing Google Classroom and receiving other school-related communications.</p>
        

      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo" style="background-color: #fcf6f6;">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        How to login
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body" style="background-color: #fff;">
        

      <p>Go to <a data-saferedirecturl="https://www.google.com/url?q=http://mail.google.com/a/aitchison.edu.pk&amp;source=gmail&amp;ust=1686021260865000&amp;usg=AOvVaw3k0KO-zJNV4jqnFmbhnEOk" href="http://mail.google.com/a/aitchison.edu.pk" target="_blank" rel="noopener noreferrer" style="color:blue; text-decoration: underline;">mail.google.com/a/aitchison.<wbr />edu.pk</a><br/>

    Enter the above-mentioned email<br/>

    Enter the current password of &#39;My Aitchison&#39; for the first time to access your email.</p>

    <p style="text-decoration: underline"><strong>Ensuring the Security of Your Account</strong></p>

    <p><strong>Avoid sharing your password:</strong> Do not share your login credentials with anyone.<br/>

    <strong>Use caution on shared devices:</strong> If you use shared devices, such as computers in public spaces or at home, make sure to log out of your account after each session. This will help prevent unauthorized access to your account.</p>

    <p><strong>Contact the IT Helpdesk if needed:</strong> In case you lose your account password or suspect any unauthorized activity, please contact our IT Helpdesk immediately. Our dedicated team will guide you through the necessary steps to secure your account and protect your personal information.<br/>

    The <a href="https://aitchison.edu.pk/portal/help/" target="_blank" rel="noopener noreferrer" style="color:blue; text-decoration: underline;">IT Helpdesk</a> Section is designed to assist you in navigating common issues related to account security and provide tutorials on best practices.</p>






      </div>
    </div>
  </div>
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

    $online_classes_jsd = '<a class="tile-stats nav-link " href="notice.php?id=887" style="background: rgb(15, 155, 120); font-weight: bold;">
              <div>Junior School Online Classes</div>
          </a>';

    $online_classes_jsd = '';
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

    .tile-stats div {
        white-space: nowrap;
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
	@media (max-width: 1380px) and (min-width: 768px){
	  .tile-stats div {
		font-size: 14px;
	  }
	}

    #accordion .panel .panel-heading {
        padding: unset;
        border-left: 10px solid #c8102e;
    }

    #accordion .panel .panel-heading .panel-title a {
        font-size: 16px;
        width: 100%;
        display: block;
        padding: 7px 12px;
    }

    #accordion .panel .panel-body > p {
        font-size: 14px;
    }
    .panel-heading {
        background-color: #fcf6f6;
    }

/* 
    .accordion-button {
    font-weight: bold;
    color: #337ab7;
    background-color: #fcf6f6;
    border-left: 10px solid #c8102e;
}
.accordion-button {
    position: relative;
    display: flex;
    align-items: center;
    width: 100%;
    padding: 1rem 1.25rem;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    background-color: #fff;
    border-radius: 0;
    overflow-anchor: none;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,border-radius .15s ease;
}
	 */
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

						  
						  <?php if(strlen ($MsgForGroupCylce) > 0) { ?>
                          <div class="form-group row">
                              <?php echo $MsgForGroupCylce; ?>
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
									
									  <a class="tile-stats nav-link " href="principal-letters">
										<i class="fa fa-envelope"></i><div>Principal's Letters</div>
									  </a>
									
								</div>

                                <div class="animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12">

                                    <a class="tile-stats nav-link " href="calendar" target="_parent">
                                        <i class="fa fa-calendar"></i><div>Calendars 2023-24</div>
                                    </a>

                                </div>


                                <?php if(false && in_array($_SESSION['portal_CurrentClass'], ['C1', 'C2'])){ ?>
                                <div class="animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12">

                                    <a class="tile-stats nav-link " href="home-work" style="/*background: rgb(15, 155, 120);*/ font-weight: 500;">
                                        <i class="fa fa-header"></i><div>Homework</div>
                                    </a>

                                </div>
                                <?php } ?>

                                <?php if(true) { ?>
                                <div class="animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12">

                                    <a class="tile-stats nav-link " href="online-classes/online-learning" style="font-weight: 500;">
                                        <i class="fa fa-desktop"></i><div>Online Learning</div>
                                    </a>

                                </div>
                                <?php } ?>

                                <?php if(true && in_array($_SESSION['portal_School'], ['PSD', 'JSD', 'SSD'])) { ?>
                                <div class="animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12">

                                    <a class="tile-stats nav-link " href="time-table">
                                        <i class="fa fa-calendar"></i><div>Timings</div>
                                    </a>

                                </div>
                                <?php } ?>


								<?php if(true) {
                                    $link = "";
                                    $mockDatesheetTitle = "";
								    if ($_SESSION['portal_School'] === 'JSD') {
										if (in_array($_SESSION['portal_CurrentClass'], ['K4', 'K5', 'K6']))
										$mockDatesheetTitle = 'Date Sheet May, 2023';	
                                        $link = "notice.php?id=2100";
                                    }
								    elseif ($_SESSION['portal_School'] === 'PSD') {
										$mockDatesheetTitle = 'Date Sheet May, 2023';
                                        $link = "notice.php?id=2097";
                                    }
                                    elseif ($_SESSION['portal_School'] == 'SSD') {

                                        if (in_array($_SESSION['portal_CurrentClass'], ['C1', 'Pre C1'])) {
                                            $mockDatesheetTitle = 'Date Sheet May, 2023';
                                        	$link = "notice.php?id=2098";
                                        }
                                        if (false && in_array($_SESSION['portal_CurrentClass'], ['H1', 'H2'])) {
                                            $link = 'https://aitchison.edu.pk/portal/date-sheet/2020-21/mock-exams-datesheet-a-level-2021-retake.pdf';
                                            $mockDatesheetTitle = 'Date Sheet April - 2021';
                                        }
                                    }

								    ?>
								<?php
								} ?>

                                <?php if(false && strlen($mockDatesheetTitle) > 0){ ?>
                                <div class="animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12">

                                    <a class="tile-stats nav-link " href="<?php echo $link; ?>">
                                        <i class="fa fa-newspaper-o"></i><div><span style="font-size: 14px;"><?php echo $mockDatesheetTitle; ?></span></div>
                                    </a>

                                </div>
                                <?php }?>
								<div class="animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12">
									
									  <a class="tile-stats nav-link " href="../news-room" target="_blank">
										<i class="fa fa-newspaper-o"></i><div>News</div>
									</a>
									
								</div>
								<div class="animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12">
									
									  <a class="tile-stats nav-link " href="hos-notices">
										<i class="fa fa-bell"></i><div>Head of School Notices</div>
									</a>
									
								</div>

                                <?php if(false && in_array($_SESSION['portal_CurrentClass'], ['K1', 'K2', 'K3', 'K4', 'K5', 'K6', 'M1', 'E2', 'C1'])){ ?>
                                    <div class="animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12">

                                        <a class="tile-stats nav-link " href="new-parents-information" target="_parent"  style="background: rgb(15, 155, 120); font-weight: 500;">
                                            <i class="fa fa-file-pdf-o"></i><div>New Parents Info</div>
                                        </a>

                                    </div>
                                <?php }?>

                                <?php if(true) { ?>

                                    <div class="animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12">

                                        <a class="tile-stats nav-link " href="fee/fee-bill">
                                            <i class="fa fa-money"></i><div>Fee Bills</div>
                                        </a>

                                    </div>
                                <?php } ?>
								<?php if(true) { ?>

                                    <div class="animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12">

                                        <a class="tile-stats nav-link " href="aitchison-code-of-conduct">
                                            <img src="images/shield-solid.svg" alt="" style="width: 28px!important; max-width: 28px;"><div>Code of Conduct</div>
                                        </a>

                                    </div>
                                <?php } ?>
								<?php if(false) { ?>
                                    <div class="animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12">

                                        <a class="tile-stats nav-link " href="school_rules">
                                            <i class="fa fa-book" aria-hidden="true"></i><div>College Rules</div>
                                        </a>

                                    </div>
                                <?php } ?>

                                <?php if (false && in_array($_SESSION['portal_School'],  ['PSD', 'SSD']) &&
                                                   $_SESSION['portal_CurrentClass'] !== 'Pre C1') { ?>

                                    <div class="animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12">

                                        <a class="tile-stats nav-link " href="mysports">
                                            <img src="images/basketball-solid.svg" alt="" style="width: 28px!important;"><div>My Sports</div>
                                        </a>

                                    </div>
                                <?php } ?>
									
                                <?php if(false && $_SESSION['portal_CurrentClass'] === 'Pre C1'){ ?>
                                    <div class="animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12">

                                        <a class="tile-stats nav-link " href="annual-exam-report" target="_parent"  style="background: rgb(15, 155, 120); font-weight: 500;">
                                            <i class="fa fa-clipboard"></i><div>Annual Exam 2022</div>
                                        </a>

                                    </div>
                                <?php }?>

                                <?php if(false) { ?>
                                <div class="animated flipInY col-lg-2 col-md-3 col-sm-4 col-xs-12">

                                    <a class="tile-stats nav-link " href="sports/riding_timetable">
                                        <i class="fa fa-calendar"></i><div>Riding Timetable</div>
                                    </a>

                                </div>
                                <?php } ?>



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

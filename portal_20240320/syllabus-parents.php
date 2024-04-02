<?php

$group = $_SESSION['PORTAL_ID'];
$subGroup = $_SESSION['portal_School'];
$location = $_SESSION['portal_CurrentClass'];

$tSyllabus = $syllabusRepo->GetPublishedSyllabus( $group, $subGroup, $location );

$user_message = ""; // "<p>Please click on the links below to download the syllabus for the respective subjects.</p>";

$syllabusTitle = "";
$syllabusTitles = array();

if ($tSyllabus)
foreach ( $tSyllabus->Rows as $row ) {
	if ( $syllabusTitle != $row->Title ){
		
		$syllabusTitle 	  = $row->Title;
		$syllabusTitles[] = $row->Title;
		
	}
}


 
?>

<!DOCTYPE html>
<html lang="en">

<?php $title = $syllabusTitle; include($path."includes.php"); ?>
	


<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
        	
            <div class="container">
				<div class="row" id="newsletter">
				  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<?php
							$ctoblock=array(
								);
					  if (!in_array($_SESSION['portal_CurrentClass'], $ctoblock)) {
					?>  
					<div class="x_panel">


						  <?php
						  foreach ($syllabusTitles as $syllabusTitle) {
							  
							  ?>
							<div class="x_content">
							  <div class="page-title">
								  <h3><?php echo $purifier->purify($syllabusTitle); ?></h3>
								  <br/>
							  </div>
								<?php echo $purifier->purify($user_message); $user_message = ""; ?>
							  <?php
							  
							  foreach ( $tSyllabus->Rows as $row ) {
								  
								  if( $syllabusTitle == $row->Title ) {
									  
									  ?>
							
						  		<div class="col-lg-6 col-md-9 col-sm-12 col-xs-12" style="padding-left: 0;">
									<p>
									  <a href="<?php echo Filing::GetURL2("", $purifier->purify($row->Caption), $purifier->purify("../accounts/".$row->FileUrl), $row->Title, $functions); ?>" target="parent" class="active lnkDownload" style="display: inline-flex; padding: inherit; margin-left: 0;"><span style="font-weight: bold;"><span class="glyphicon" style="line-height: 1.7; font-size: 12px;"></span> <?php echo $purifier->purify($row->Caption); ?> </span> </a>
								    </p>
								</div>
						  
									  <?php
									  
								  }
							  }
							  
							  ?>
								</div>


								<?php
						  }
						  ?>

                        <div class="clear-fix"></div>
                        <div class="x_content" style="border-top: 1px solid #d2d2d2; padding-top: 10px;">
                            <p><span style="font-size:12px;">The downloadable file is in zip/rar format.&nbsp; You need to unpack its contents in order to use it.&nbsp;</span></p>

                            <div>
                                <p><span style="font-size:12px;"><strong>Open Zip/RAR&nbsp;File in 2 Easy Steps:</strong></span></p>


                                <ol>
                                    <li><span style="font-size:12px;"><strong>Download &amp; install WinRAR</strong></span></li>
                                    <li><span style="font-size:12px;"><strong>Double-click OR right-click on the .RAR file to open it with WinRAR</strong></span></li>
                                </ol>


                                <p><span style="font-size:12px;"><strong>Other Ways to Open A&nbsp;Zip/RAR File:</strong></span></p>

                                <p><span style="font-size:12px;">Open WinRAR and select the file/folder from the WinRAR file panel.</span></p>

                                <p><span style="font-size:12px;"><strong>Open RAR files with WinRAR in the following Windows versions:</strong></span></p>

                                <p><span style="font-size:12px;">Windows 10, Windows 8, Windows 7, Windows Vista, Windows XP</span></p>

                                <div><span style="font-size:12px;"><strong>How to&nbsp;<strong>Open RAR Files</strong>&nbsp;on&nbsp;Mobile Phone:</strong></span></div>

                                <div>
                                    <ol>
                                        <li><span style="font-size:12px;">Download and install the&nbsp;<strong>RAR</strong>&nbsp;app for&nbsp;<strong>Mobile</strong></span></li>
                                        <li><span style="font-size:12px;"><strong>Open</strong>&nbsp;the&nbsp;<strong>RAR</strong>&nbsp;app</span></li>
                                        <li><span style="font-size:12px;">Navigate to the folder containing the&nbsp;<strong>file</strong>&nbsp;you wish to&nbsp;<strong>open</strong></span></li>
                                        <li><span style="font-size:12px;">Tap the individual&nbsp;<strong>files</strong>&nbsp;to&nbsp;<strong>open</strong>&nbsp;them</span></li>
                                    </ol>
                                </div>


                                <div><span style="font-size:12px;"><strong>How to open RAR on a Mac with The Unarchiver app</strong></span></div>

                                <div>
                                    <ol>
                                        <li><span style="font-size:12px;">Download The Unarchiver in the App Store.</span></li>
                                        <li><span style="font-size:12px;">Make sure RAR files are selected.</span></li>
                                        <li><span style="font-size:12px;">Choose Extraction options in The Unarchiver.</span></li>
                                        <li><span style="font-size:12px;">Open the RAR file with The Unarchiver.</span></li>
                                        <li><span style="font-size:12px;">Select your folder location or create a new one, and click Extract.</span></li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                    </div>
					<?php
					  }else{						  
					?>
					<div class="x_panel">
						<div class="x_content">
							<div class="alert alert-primary" role="alert" style="color: #000; background-color: #cce5ff; border-color: #b8daff;">
								The Syllabus for the first term Session 2020-21 will be uploaded soon.
							</div>	
						</div>
					</div>	
					<?php	  
					  }
					?>  
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

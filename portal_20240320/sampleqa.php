<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include($path."classes/filing.php");

$howework_link = "";
$marking_scheme = '';

/*portal_CurrentClass*/
//print_r($_SESSION);

$header = "Sample Question Papers";
$link_text = "Sample Question Papers";

if ($_SESSION['portal_CurrentClass'] == "C1"){
	$howework_link = "data/2019-20/sampleqa/C1.rar";
    $marking_scheme = "data/2019-20/sampleqa/marking-schemes-c1.rar";
}elseif ($_SESSION['portal_CurrentClass'] == "C2"){ 
	$howework_link = "data/2021-22/sampleqa/C2-JulAug.zip";
    $marking_scheme = "data/2019-20/sampleqa/marking-schemes-c2.rar";
}elseif ($_SESSION['portal_CurrentClass'] == "H1"){ 
	$howework_link = "data/2019-20/sampleqa/H1-H2.rar";
    $marking_scheme = "data/2019-20/sampleqa/marking-schemes-h1-h2.rar";
}elseif ($_SESSION['portal_CurrentClass'] == "H2"){
	$howework_link = "data/2019-20/sampleqa/H1-H2.rar";
    $marking_scheme = "data/2019-20/sampleqa/marking-schemes-h1-h2.rar";
}

//$howework_link = Filing::GetURL("", "Sample-question-papers.rar", "../".$howework_link, $header);

$howework_link = Filing::GetURL2("", "Sample-question-papers.rar", "../".$howework_link, $header, $functions );

$marking_scheme_link = Filing::GetURL2("", "marking-schemes", "../".$marking_scheme, 'Marking Schemes', $functions );


?>

<!DOCTYPE html>
<html lang="en">

<?php $title = $link_text; include($path."includes.php"); ?>
<!-- FullCalendar -->
<link href="vendors/fullcalendar/dist-v4/fullcalendar.min.css" rel="stylesheet">
<link href="vendors/fullcalendar/dist-v4/fullcalendar.print.css" rel="stylesheet" media="print">

<style>
#defaultIcon {
  position: relative;
}

/* positions header-content at the bottom of header's context */
#defaultIcon-content {
  position: absolute;
  bottom: 0;
}
	.fc-day-grid-container.fc-scroller {
		height: auto!important;
		overflow-y: auto;
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
				  <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						  <div class="row">
							  <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
								  <div class="page-title">
									  <h4 style="margin-top:0;"><?php echo $header; ?> & Marking Schemes</h4>
								  </div>
							  </div>
							  
						  </div>						  
						  <?php //if(false){?>
						  <div class="row" align="right" style="margin: 15px 0;">
							  <p style="margin-bottom: 20px;">
								  <a href="<?php echo $howework_link; ?>" target="_blank" class="active lnkDownload"><span style=""><span class="glyphicon"></span><?php echo " Download " . $link_text; ?> </span> </a>
							  </p>
							  <?php
							  if (!($_SESSION['portal_CurrentClass'] == "C2")){ 
							  ?>
                              <p>
                                  <a href="<?php echo $marking_scheme_link; ?>" target="_blank" class="active lnkDownload"><span style=""><span class="glyphicon"></span><?php echo " Download Marking Schemes"; ?> </span> </a>
                              </p>
							  <?php
							  }
							  ?>


						  </div>

						  <div class="row">
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
						  <?php //}?>
					  </div>
					</div>
				  </div>
				  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php //include("today-classes.php")?>
				  </div>
				</div>
            </div>
            
          	<!-- footer content -->
        	
        	<?php include($path."footer.php"); ?>
            
        	<!-- /footer content -->
          
        </div>
        
		
		
		
      </div>
    </div>
	<?php include($path."footerincludes.php"); ?>
    
    
    <!-- /FullCalendar -->
</body>
</html>

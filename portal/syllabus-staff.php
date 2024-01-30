<?php
$sup_school = $subGroup = $_SESSION['portal_sup_school'];

if ($sup_school == "0" || $sup_school == "JSD") {
	$classes[] = "K1";
	$classes[] = "K2";
	$classes[] = "K3";
	$classes[] = "K4";
	$classes[] = "K5";
	$classes[] = "K6";
}
if ($sup_school == "0" || $sup_school == "PSD") {
	$classes[] = "E2";
	$classes[] = "M1";
	$classes[] = "M2";
}
if ($sup_school == "0" || $sup_school == "SSD") {
	//$classes[] = "Pre C1";
	$classes[] = "C1";
	$classes[] = "C2";
	$classes[] = "H1";
	$classes[] = "H2";
}
//echo $classes[0];
$class_ = isset($_GET['c']) ? $_GET['c'] : $classes[0];

$group = ""; //$_SESSION['PORTAL_ID'];


if ( strlen( $class_ ) > 0 && in_array( $class_, $classes ) ) {
	
	$location = $class_;
	$tSyllabus = $syllabusRepo->GetPublishedSyllabus( $group, $subGroup, $location );
}

$user_message = "<p>Please click on the links below to download the syllabus for the respective subjects.</p>";

$syllabusTitle = "Syllabus";
$syllabusTitles = array();

if ($tSyllabus)
foreach ( $tSyllabus->Rows as $row ) {
	if ( $syllabusTitle != $row->Title ){
		
		$syllabusTitle 	  = $row->Title;
		$syllabusTitles[] = $row->Title;
		
	}
}
//$tSyllabus->PrintTable();
//exit;
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
					<div class="x_panel">
					  
						<!--<div><p>Please select the class to view syllsbus.</p></div>-->
						
						<?php
						  //foreach ($sections_ as $section) {
						  foreach($classes as $section) {
							  $active = " btn-default";
							  if($class_ == $section)
								  $active = " btn-primary";
						  ?>
						<a class="nav-link btn <?php echo $active; ?>" href="syllabus.php?c=<?php echo $section; ?>">
							<?php echo $section; ?>
						</a>
						  
						 <?php
						  }
						  ?>
						  
						  <?php
						  foreach ($syllabusTitles as $syllabusTitle) {
							  
							  ?>
							<div class="x_content">
							  <div class="page-title">
								  <h3><?php echo $syllabusTitle; ?></h3>
							  </div>
								<?php echo $user_message; $user_message = ""; ?>
							  <?php
							  
							  foreach ( $tSyllabus->Rows as $row ) {
								  
								  if( $syllabusTitle == $row->Title ) {
									  
									  ?>
							
						  		<div class="col-lg-6 col-md-9 col-sm-12 col-xs-12" style="padding-left: 0;">
									<p>
									  <a href="accounts/<?php echo $row->FileUrl; ?>" target="_blank" class="active lnkDownload" style="display: inline-flex; padding: inherit; margin-left: 0;"><span style="font-weight: bold;"><span class="glyphicon" style="line-height: 1.7;"></span> <?php echo $row->Caption; ?> </span> </a>
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

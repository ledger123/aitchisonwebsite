<?php

$tNewsContents = $newsRepo->GetNewsContents($newsId);
//$tNewsContents->PrintTable();

$tNewsFiles = $newsRepo->GetNewsFiles($newsId);
//$tNewsFiles->PrintTable();

$news = $tNewsContents->Rows[0];
//$news->PrintTable();
	
?>
<div class="x_panel">
  <div class="x_content">
	  <?php if ( $news->ShowHeading ) {?>
	  <div class="page-title" style="margin-bottom: 15px;">
		  <h3><?php echo htmlentities(stripslashes(utf8_decode($news->Heading))); ?></h3>
	  </div>
	  <?php } ?>

	<!--SETTING SUB TITLE-->
	<?php if ( strlen($news->Subheading)>0 ) {?>
	<span style="font-size:16px;color:#C4C4C4;"><?php echo htmlentities(stripslashes(utf8_decode($news->Subheading))); ?></span>
	<?php } ?>
	<!--END SETTING SUB TITLE-->

	  <div class="row">
		  <?php echo $functions->replaceQuote($news->Content1); ?><br />
		  
		  <div class="row form-group" align="center">
			<?php if($tNewsFiles) foreach($tNewsFiles->Rows as $row) { ?>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center"> 
				<img src="<?php echo $_GET['imagesPath'].$row->FileName1; ?>"
					 width="<?php echo $row->Width1; ?>" 
					 height="<?php echo $row->Height1; ?>" alt="img" class="img-responsive" /><br>
			</div>
			<? } ?>
		</div>
		<br />

		<?php echo $functions->replaceQuote($news->Content2); ?><br />

	  </div>

  </div>
</div>

<?php

$tNewsContents = $newsRepo->GetNewsContents($newsId);
//$tNewsContents->PrintTable();

$tNewsFiles = $newsRepo->GetNewsFiles($newsId);
//$tNewsFiles->PrintTable();

$news = $tNewsContents->Rows[0];

?>

<div class="x_panel">
  <div class="x_content">
	  <?php if ( $news->ShowHeading ) {?>
	  <div class="page-title">
		  <h3><?php echo htmlentities(stripslashes(utf8_decode($news->Heading))); ?></h3>
	  </div>
	  <?php } ?>

	<?php if ( (int)$news['ShowDate']==1 ) { ?>
		<span style="font-size:14px; color:#9D9D9D;"><?php echo $functions->formatDate($news->Date, "F jS, Y"); ?></span>
	<?php } ?>
	<br />
	<!--SETTING SUB TITLE-->
	<?php if ( strlen($news->Subheading)>0 ) {?>
	<span style="font-size:18px;"><?php echo htmlentities(stripslashes(utf8_decode($news->Subheading))); ?></span>
	<?php } ?>
	<!--END SETTING SUB TITLE-->

	  <div class="row">
		  <?php echo $functions->replaceQuote($news->Content1); ?><br />

		  <?php
			if ( $tNewsFiles->rowsCount() > 0 ) {
		  ?>
		  <div class="row">
			<div class="row">
			  <div class="col-lg-12 col-md-12 col-sm-12" align="center">
				<div id="gallerySLide" class="sgallery_area2">
					<?php

					//$small_imgtitle = "Swimming Competition 2016";
					//$large_imgtitle = "Inter-House Swimming Competition – 2016";
					//for($i=1; $i <= 6; $i++) {
					foreach($tNewsFiles->Rows as $row) {

					?>
						<a href="<?php echo $_GET['imagesPath'].$row->FileName2; ?>" title="<?php echo $row->Title2; ?>">
							<img class="gallery_img" src="<?php echo $_GET['imagesPath'].$row->FileName1; ?>" alt="img" />
							<span class="view_btn"> <?php echo $row->Title1; ?> </span>
						</a>

					<?php
					}
					?>
				</div>
			  </div>
			</div>

			<!-- Start slider -->
		  <div class="container">
			  <section id="slider">
				<div class="row" style="background-color: #FFFFFF;"></div>
			  </section>
		  </div>
		  <!-- End slider -->

		</div>
		  <?php } ?>

	  </div>

  </div>
</div>

  



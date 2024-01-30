<?php
if ( isset($_POST['TxtAction']) && $_POST['TxtAction'] == "update" )
{
	$ChkShowHeading    = 0;
	$templateId 	   = $row->TemplateId;
	//$TxtNewsDate 	   = isset($_REQUEST['TxtNewsDate']) 	   ? $_REQUEST['TxtNewsDate']  	    : "";
	//$ChkShowDate	   = isset($_REQUEST['ChkShowDate'])       ? 1							    : 0;
	$TxtNewsHeading	   = isset($_REQUEST['TxtNewsHeading'])    ? $_REQUEST['TxtNewsHeading']    : "";
	//$ChkShowHeading	   = isset($_REQUEST['ChkShowHeading'])    ? 1							    : 0;
	//$TxtNewsSubheading = isset($_REQUEST['TxtNewsSubheading']) ? $_REQUEST['TxtNewsSubheading'] : "";
	//$OptNewsType	   = isset($_REQUEST['OptNewsTypes'])	   ? $_REQUEST['OptNewsTypes']		: 0;
	
	$TxtNewsContents1   = isset($_REQUEST['TxtNewsContents'])   ? $_REQUEST['TxtNewsContents']  : "";
	$TxtNewsContents2   = isset($_REQUEST['TxtNewsContents2'])  ? $_REQUEST['TxtNewsContents2'] : "";
	//$TxtNewsIcon	   = isset($_REQUEST['TxtNewsIcon'])	   ? $_REQUEST['TxtNewsIcon']	    : "";
    
    //$TxtNewsDate 	   = $functions->formatDate($TxtNewsDate);
    
	$TxtNewsHeading    = $purifier->purify($TxtNewsHeading);
	$TxtNewsSubheading = $purifier->purify($TxtNewsSubheading);
	
	//$TxtNewsContents   = $elementsPurifier->purify($TxtNewsContents);
	$TxtNewsContents1   = $functions->placeQuote($TxtNewsContents1);
	$TxtNewsContents2   = $functions->placeQuote($TxtNewsContents2);
    
	
	//echo "OptNewsType: ".$OptNewsType."<br />";
	#updating
	if( $newsId > 0 && strlen ($TxtNewsHeading) > 3 )
	{
		#stop updating of news on contents page
		//$response = $newsRepo->UpdateNews($newsId, $templateId, $TxtNewsDate, $ChkShowDate, $TxtNewsHeading, $TxtNewsSubheading, $OptNewsType, $ChkShowHeading, $TxtNewsIcon);
		
		//if ( $response > 0 )
		if ( true )
		{
			//UpdateNewsContents($newsId, $content1, $content2, $content3, $content4, $content5, $content6)
			//$response = $newsRepo->UpdateNewsContents($newsId, $TxtNewsContents, "", "", "", "", "");
			
			
			//UpdateNewsContents($newsId, $smallImageTitle, $largeImageTitle, $content1, $content2, $content3, $content4, $content5, $content6)
			$response = $newsRepo->UpdateNewsContents($newsId, "", "", $TxtNewsContents1, $TxtNewsContents2, "", "", "", "");
			
			if ( $response > 0 )
			{
				$message = "Record updated successfully.";
			}
			else
			{
				$message = "Record not updated.";
			}
			
			$message = "Record updated successfully.";
		}
		else
		{
			$message = "Record not updated.";
		}
	}
	
	unset($_SERVER['QUERY_STRING']);
}

$tNewsContents = $newsRepo->GetNewsContents($newsId);
//$tNewsContents->PrintTable();

$tNewsFiles = $newsRepo->GetNewsFiles($newsId);
//$tNewsFiles->PrintTable();

$news = $tNewsContents->Rows[0];
//$news->PrintTable();


if ( isset($_GET['mode']) && $_GET['mode'] == "update" )
{

if($OptNewsType!="") $OptNewsTypes->SetSelectedValue($OptNewsType);


if($response == 0) { ?>
<div class="form-group">

  <div class="alert alert-danger">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<?php echo $message; ?>
  </div>
  <?php } else if($response == 1) { ?>
	<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<?php echo $message; ?>
	</div>
	
</div>
<?php } ?>
<input type="hidden" id="TxtAction" name="TxtAction" />
<input type="hidden" id="TxtNewsIcon" name="TxtNewsIcon" value="<?php echo $news->NewsIcon; ?>"/>
<div class="form-horizontal form-label-left">
<div class="row form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtNewsDate">News Date <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="col-md-4 col-sm-4 col-xs-12" style="padding-left:0px;">
          <input type="text" id="TxtNewsDate" name="TxtNewsDate" required="required" 
      		class="date-picker form-control col-md-7 col-xs-12" value="<?php echo $functions->formatDate($TxtNewsDate, "m/d/Y"); ?>"/>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ChkShowDate">Show Date</label>
          <div class="col-md-8 col-sm-8 col-xs-12" align="left" style="padding-top:5px;">
              <input type="checkbox" id="ChkShowDate" name="ChkShowDate"
              class="col-md-2 col-md-2 col-xs-12" <?php if ((int)$ChkShowDate==1) echo "checked"; ?>/>
          </div>
        </div>
    </div>
</div>
<div class="row form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtNewsHeading">News Heading <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="TxtNewsHeading" name="TxtNewsHeading" required="required" 
      class="form-control col-md-7 col-xs-12" value="<?php echo htmlentities(stripslashes(utf8_decode($TxtNewsHeading))); ?>">
    </div>
</div>
<div class="row form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtNewsHeading">Show</label>
    <div class="col-md-2 col-sm-2 col-xs-12" align="left" style="padding-top:5px;">
    
      <input type="checkbox" name="ChkShowHeading" id="ChkShowHeading"
      class="col-md-2 col-md-2 col-xs-12" <?php if ((int)$ChkShowHeading==1) echo "checked"; ?>>&nbsp; <label for="ChkShowHeading">News Heading</label>
    </div>
</div>
<div class="row form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtNewsSubheading">New Subheading </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="TxtNewsSubheading" name="TxtNewsSubheading" required="required"
      class="form-control col-md-7 col-xs-12" value="<?php echo htmlentities(stripslashes(utf8_decode($TxtNewsSubheading))); ?>">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="OptNewsTypes">News Type <span class="required">*</span></label>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <?php $OptNewsTypes->Bind(); ?>
    </div>
</div>

<div class="row form-group">
	<h2 class="StepTitle control-label col-md-3 col-sm-3 col-xs-12">News Contents (1)</h2>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <textarea name="TxtNewsContents" id="TxtNewsContents" rows="10" cols="80">
        <?php echo $functions->replaceQuote($news->Content1); ?>
        </textarea>
    </div>
</div>

<div class="row form-group">
	<h2 class="StepTitle control-label col-md-3 col-sm-3 col-xs-12">News Contents (2)</h2>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <textarea name="TxtNewsContents2" id="TxtNewsContents2" rows="10" cols="80">
        <?php echo $functions->replaceQuote($news->Content2); ?>
        </textarea>
    </div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
      <button type="button" id="CmdSaveContents" name="CmdSaveContents" onClick="javascript:saveContents();" class="btn btn-success">Save News Contents</button>
    </div>
</div>

<div class="row form-group" align="center">
	<?php if($tNewsFiles) foreach($tNewsFiles->Rows as $row) { ?>
    <div class="col-lg-12 col-md-12 col-sm-12" align="center"> 
        <img src="<?php echo $row->FileName1; ?>"
             width="<?php echo $row->Width1; ?>" 
             height="<?php echo $row->Height1; ?>" alt="img" class="img-responsive" /><br>
    </div>
    <?php } ?>
</div>

<div class="row form-group">
	<h3>Choose file to upload</h3>
    <p>
        <a href="upload.php?id=<?php echo $newsId; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary" role="button" style="padding:10px 20px;">Upload Image</a>
    </p>
    
</div>

<?php

}
elseif ( isset($_GET['mode']) && $_GET['mode'] == "view" )
{
    //$sstrr = ( $functions->replaceQuote($news->Content1) );

    //echo "<!-- $sstrr -->";
	$content1 = $purifier->purify( $functions->replaceQuote($news->Content1) );
	
?>
<div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="<?php if ( $news->NewsFor == 1 ) echo 'aboutus_area wow fadeInLeft'; else 'blog-news-details blog-single-details'; ?> ">
            	
            	<!--SETTINGS For News and Events-->
                <?php if ( $news->NewsFor == 1 ) {?>
                    
                    <!--SETTING TITLE -->
                    <?php if ( $news->ShowHeading ) {?>
                    <!--<h2 class="titile"><?php //echo htmlentities(stripslashes(utf8_decode($news->Heading))); ?></h2>-->
                    <h2 class="titile" style="display: inline-block;"><?php echo $purifier->purify(htmlentities(stripslashes(($news->Heading))) ); ?></h2>
                    <br />
                    <?php if ( strlen($news->Subheading) < 1 ) {?>

                    <?php } ?>
                    <?php } ?>
                    <!--END SETTING TITLE-->
                    
                    <?php if ( (int)$news['ShowDate']==1 && strlen($content1) > 0 ) { ?>
                        <span style="font-size:14px; color:#9D9D9D;"><?php echo $functions->formatDate($news->Date, "F jS, Y"); ?></span>
                    <?php } ?>
                    
                    <!--SETTING SUB TITLE-->
                    <?php if ( strlen($news->Subheading)>0 ) {?>
                    <h4 class="news-sub-title"><?php echo $purifier->purify(htmlentities(stripslashes(utf8_decode($news->Subheading)))); ?></h4>
                    <!--END SETTING SUB TITLE-->
					<?php } ?>
                	
                <!--SETTINGS For Alumni-->
                <?php } else if ( $news->NewsFor == 2 ) {?>
                	<div class="blog-news-title">
                	<!--SETTING TITLE -->
                    <?php if ( $news->ShowHeading && strlen($content1) > 0 ) {?>
                    	
	                    <h2><?php echo $purifier->purify(htmlentities(stripslashes(utf8_decode($news->Heading)))); ?></h2>
                    	
                    <?php } ?>
                    <!--END SETTING TITLE-->
                    
                    <!--SETTING SUB TITLE-->
                    <?php if ( strlen($news->Subheading)>0 && strlen($content1) > 0 ) {?>
                    <p><?php echo $purifier->purify(htmlentities(stripslashes(utf8_decode($news->Subheading)))); ?></p>
                    <!--END SETTING SUB TITLE-->
                    <?php } ?>
                    
                    <?php if ( (int)$news['ShowDate']==1 && strlen($content1) > 0 ) { ?>
                        <p><span class="blog-date">|<?php echo $functions->formatDate($news->Date, "j F Y"); ?></span></p>
                    <?php } ?>
                    
                	</div>
                <?php } ?>
                
                
                
                <?php echo $content1; ?><br />
                
                <div class="row form-group" align="center">
					<?php if($tNewsFiles) foreach($tNewsFiles->Rows as $row) { ?>
                    <div class="col-lg-12 col-md-12 col-sm-12" align="center"> 
                        <img src="<?php echo $purifier->purify($_GET['imagesPath'].$row->FileName1); ?>"
                        	 width="<?php echo $purifier->purify($row->Width1); ?>" 
                             height="<?php echo $purifier->purify($row->Height1); ?>" alt="img" class="img-fluid" /><br>
                    </div>
                    <?php } ?>
                </div>
                
                <!--SETTINGS For News and Events-->
                <?php if ( $news->NewsFor == 1 ) {?>
                    
                    <?php if ( (int)$news['ShowDate']==1 && strlen($content1) == 0 ) { ?>
		                <br />
                        <span style="font-size:14px; color:#9D9D9D;"><?php echo $functions->formatDate($news->Date, "F jS, Y"); ?></span>
                    <?php } ?>
                <?php } else if ( $news->NewsFor == 2 ) {?>
                	
                    <div class="blog-news-title">
                	<!--SETTING TITLE -->
                    <?php if ( $news->ShowHeading && strlen($content1) == 0 ) {?>
                    
	                    <h2><?php echo $purifier->purify(htmlentities(stripslashes(utf8_decode($news->Heading)))); ?></h2>
                    
                    <?php } ?>
                    <!--END SETTING TITLE-->
                    
                    <!--SETTING SUB TITLE-->
                    <?php if ( strlen($news->Subheading)>0 && strlen($content1) == 0 ) {?>
                    <p><?php echo $purifier->purify(htmlentities(stripslashes(utf8_decode($news->Subheading)))); ?></p>
                    <!--END SETTING SUB TITLE-->
                    <?php } ?>
                    
                    <?php if ( (int)$news['ShowDate']==1 && strlen($content1) == 0 ) { ?>
                        <p><span class="blog-date">|<?php echo $functions->formatDate($news->Date, "j F Y"); ?></span></p>
                    <?php } ?>
                    
                	</div>
                    
                <?php } ?>
                
                <?php echo $purifier->purify($functions->replaceQuote($news->Content2)); ?><br />
                
            </div>
            
        </div>
    </div>
    
</div>
<?php
}
?>
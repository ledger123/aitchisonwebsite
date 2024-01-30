<?php
if ( isset($_REQUEST['TxtAction']) && $_REQUEST['TxtAction'] == "update" )
{
	$ChkShowHeading    = 0;
	$templateId 	   = $row->TemplateId;
	$TxtNewsDate 	   = isset($_REQUEST['TxtNewsDate']) 	   ? $_REQUEST['TxtNewsDate']  	    : "";
	$ChkShowDate	   = isset($_REQUEST['ChkShowDate'])       ? 1							    : 0;
	$TxtNewsHeading	   = isset($_REQUEST['TxtNewsHeading'])    ? $_REQUEST['TxtNewsHeading']    : "";
	$ChkShowHeading	   = isset($_REQUEST['ChkShowHeading'])    ? 1							    : 0;
	$TxtNewsSubheading = isset($_REQUEST['TxtNewsSubheading']) ? $_REQUEST['TxtNewsSubheading'] : "";
	$OptNewsType	   = isset($_REQUEST['OptNewsTypes'])	   ? $_REQUEST['OptNewsTypes']		: 0;
	
	$TxtNewsContents   = isset($_REQUEST['TxtNewsContents'])   ? $_REQUEST['TxtNewsContents']   : "";
	$TxtNewsContents2  = isset($_REQUEST['TxtNewsContents2'])  ? $_REQUEST['TxtNewsContents2']  : "";
	
	$TxtSmallImageTitle= isset($_REQUEST['TxtSmallImageTitle'])? $_REQUEST['TxtSmallImageTitle']: "";
	$TxtLargeImageTitle= isset($_REQUEST['TxtLargeImageTitle'])? $_REQUEST['TxtLargeImageTitle']: "";
	$TxtNewsIcon	   = isset($_REQUEST['TxtNewsIcon'])	   ? $_REQUEST['TxtNewsIcon']	    : "";
	
	
	$TxtNewsHeading    = $purifier->purify($TxtNewsHeading);
	$TxtNewsSubheading = $purifier->purify($TxtNewsSubheading);
	
	//$TxtNewsContents   = $elementsPurifier->purify($TxtNewsContents);
	//$TxtNewsContents2  = $elementsPurifier->purify($TxtNewsContents2);
	
	$TxtNewsContents = $functions->placeQuote($TxtNewsContents);
	$TxtNewsContents2 = $functions->placeQuote($TxtNewsContents2);
	
	
	$TxtSmallImageTitle= $purifier->purify($TxtSmallImageTitle);
	$TxtLargeImageTitle= $purifier->purify($TxtLargeImageTitle);
	
	$TxtNewsDate 	   = $functions->formatDate($TxtNewsDate);
	
	#updating
	if( $newsId > 0 && strlen ($TxtNewsHeading) > 3 )
	{
		#stop updating of news on contents page
		//$response = $newsRepo->UpdateNews($newsId, $templateId, $TxtNewsDate, $ChkShowDate, $TxtNewsHeading, $TxtNewsSubheading, $OptNewsType, $ChkShowHeading, $TxtNewsIcon);
		
		//if ( $response > 0 )
		if ( true )
		{
			//UpdateNewsContents($newsId, $smallImageTitle, $largeImageTitle, $content1, $content2, $content3, $content4, $content5, $content6)
			$response = $newsRepo->UpdateNewsContents($newsId, $TxtSmallImageTitle, $TxtLargeImageTitle, $TxtNewsContents, $TxtNewsContents2, "", "", "", "");
			
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



if ( isset($_GET['mode']) && $_GET['mode'] == "update" )
{

if($OptNewsType!="") $OptNewsTypes->SetSelectedValue($OptNewsType);

?>
<div class="form-group">
<?php if($response == 0) { ?>
  <div class="alert alert-danger">
	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	<?php echo $message; ?>
  </div>
  <?php } else if($response == 1) { ?>
	<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<?php echo $message; ?>
	</div>
  <?php } ?>
</div>
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
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtNewsSubheading">News Subheading </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="TxtNewsSubheading" name="TxtNewsSubheading"
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
	<h2 class="StepTitle control-label col-md-3 col-sm-3 col-xs-12">News Content for left side</h2>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <textarea name="TxtNewsContents" id="TxtNewsContents" rows="10" cols="80">
        <?php echo $functions->replaceQuote($news->Content1); ?>
        </textarea>
    </div>
</div>


<div class="row form-group">
	<h2 class="StepTitle control-label col-md-3 col-sm-3 col-xs-12">News Content for bottom side</h2>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <textarea name="TxtNewsContents2" id="TxtNewsContents2" rows="15" cols="80">
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
	
?>
<div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="<?php if ( $news->NewsFor == 1 ) echo 'aboutus_area wow fadeInLeft'; else 'blog-news-details blog-single-details'; ?> ">
            
            	<!--SETTINGS For News and Events-->
                <?php if ( $news->NewsFor == 1 ) {?>
                    
                    <!--SETTING TITLE -->
                    <?php if ( $news->ShowHeading ) {?>
                    <h2 class="titile"><?php echo $purifier->purify(htmlentities(stripslashes(utf8_decode($news->Heading)))); ?></h2>
                    <?php } ?>
                    <!--END SETTING TITLE-->
                    
                    <?php if ( (int)$news['ShowDate']==1 ) { ?>
                        <span style="font-size:14px; color:#9D9D9D;"><?php echo $functions->formatDate($news->Date, "F jS, Y"); ?></span>
                    <?php } ?>
                    
                    <!--SETTING SUB TITLE-->
                    <?php if ( strlen($news->Subheading)>0 ) {?>
                    <h4 style="color:#C4C4C4;"><?php echo $purifier->purify(htmlentities(stripslashes(utf8_decode($news->Subheading)))); ?></h4>
                    <!--END SETTING SUB TITLE-->
					<?php } ?>
                	
                <!--SETTINGS For Alumni-->
                <?php } else if ( $news->NewsFor == 2 ) {?>
                	<div class="blog-news-title">
                	<!--SETTING TITLE -->
                    <?php if ( $news->ShowHeading ) {?>
                    
	                    <h2><?php echo $purifier->purify(htmlentities(stripslashes(utf8_decode($news->Heading)))); ?></h2>
                    
                    <?php } ?>
                    <!--END SETTING TITLE-->
                    
                    <!--SETTING SUB TITLE-->
                    <?php if ( strlen($news->Subheading)>0 ) {?>
                    <p><?php echo $purifier->purify(htmlentities(stripslashes(utf8_decode($news->Subheading)))); ?></p>
                    <!--END SETTING SUB TITLE-->
                    
					<?php } ?>
                    
                    
                    <?php if ( (int)$news['ShowDate']==1 ) { ?>
                        <p><span class="blog-date">|<?php echo $functions->formatDate($news->Date, "j F Y"); ?></span></p>
                    <?php } ?>
                    
                    </div>
                	
                <?php } ?>
                
                
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <?php echo $purifier->purify ($functions->replaceQuote($news->Content1)); ?><br />
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="row form-group" align="center">
							<?php if($tNewsFiles) foreach($tNewsFiles->Rows as $row) { ?>
                            <div class="col-lg-12 col-md-12 col-sm-12" align="center"> 
                                <img src="<?php echo $purifier->purify($_GET['imagesPath'].$row->FileName1); ?>"
                                     width="<?php echo $purifier->purify($row->Width1); ?>" 
                                     height="<?php echo $purifier->purify($row->Height1); ?>" alt="img" class="img-responsive" /><br>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                
                <?php echo $purifier->purify ($functions->replaceQuote($news->Content2)); ?><br />
                
            </div>
            
        </div>
    </div>
   
</div>
<?php
}
?>
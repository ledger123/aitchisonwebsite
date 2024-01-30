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
	
	$TxtNewsContents   = isset($_REQUEST['TxtNewsURL'])		   ? $_REQUEST['TxtNewsURL']   		: "";
	$ChkDownloadable   = isset($_REQUEST['ChkDownloadable'])   ? 1							    : 0;
	
	$TxtSmallImageTitle= isset($_REQUEST['TxtSmallImageTitle'])? $_REQUEST['TxtSmallImageTitle']: "";
	$TxtLargeImageTitle= isset($_REQUEST['TxtLargeImageTitle'])? $_REQUEST['TxtLargeImageTitle']: "";
	$TxtNewsIcon	   = isset($_REQUEST['TxtNewsIcon'])	   ? $_REQUEST['TxtNewsIcon']	    : "";
	
	
	$TxtNewsHeading    = $purifier->purify($TxtNewsHeading);
	$TxtNewsSubheading = $purifier->purify($TxtNewsSubheading);
	
	//$TxtNewsContents   = $elementsPurifier->purify($TxtNewsContents);
	//$TxtNewsContents2  = $elementsPurifier->purify($TxtNewsContents2);
	
	//$TxtNewsContents = $functions->placeQuote($TxtNewsContents);
	
	
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
			$response = $newsRepo->UpdateNewsContents($newsId, $TxtSmallImageTitle, $TxtLargeImageTitle, $TxtNewsContents, $ChkDownloadable, "", "", "", "");
			
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
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="OptNewsTypes">News Type<span class="required">*</span></label>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <?php $OptNewsTypes->Bind(); ?>
    </div>
</div>

<div class="ln_solid"></div>

<div class="row form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtNewsURL">URL</label>
    <div class="col-md-6 col-sm-6 col-xs-12">
      <input type="text" id="TxtNewsURL" name="TxtNewsURL" 
      class="form-control col-md-7 col-xs-12" value="<?php echo $news->Content1; ?>">
    </div>
</div>

<div class="row form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ChkDownloadable">Downloadable</label>
    <div class="col-md-6 col-sm-6 col-xs-12" style="padding-top:5px;">
      <input type="checkbox" name="ChkDownloadable" id="ChkDownloadable"
      class="col-md-1 col-md-1 col-xs-12" <?php if ((int)$ChkDownloadable==1) echo "checked"; ?>><label for="ChkDownloadable">Yes</label>
    </div>
</div>


<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
      <button type="button" id="CmdSaveContents" name="CmdSaveContents" onClick="javascript:saveContents();" class="btn btn-success">Save News Contents</button>
    </div>
</div>


<?php

}
elseif ( isset($_GET['mode']) && $_GET['mode'] == "view" )
{
	
?>
<div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="aboutus_area wow fadeInLeft">
            	
                <?php
					if ($news->Content2 == "1") {
				?>
					<a href="<?php echo $purifier->purify($news->Content1); ?>" target="_blank" download><?php echo $purifier->purify($news->Heading); ?></a>
				<?php
					}
					else {
						//echo "1234";
						//echo $functions->replaceQuote($news->Content1);
						//header("Location: " . $functions->replaceQuote($news->Content1));
						
						echo '<script type="text/javascript">
							   window.location = "'. $purifier->purify( $functions->replaceQuote($news->Content1)) .'"
						  </script>';
					}
				?><br />
                
            </div>
            
        </div>
    </div>
   
</div>
<?php
}
?>
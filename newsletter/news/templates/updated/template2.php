<?php

if ( isset($_REQUEST['TxtAction']) && $_REQUEST['TxtAction'] == "update" )
{
	$templateId 	   = $row->TemplateId;
	$TxtNewsDate 	   = isset($_REQUEST['TxtNewsDate']) 	   ? $_REQUEST['TxtNewsDate']  	    : "";
	$ChkShowDate	   = isset($_REQUEST['ChkShowDate'])       ? 1							    : 0;
	$TxtNewsHeading	   = isset($_REQUEST['TxtNewsHeading'])    ? $_REQUEST['TxtNewsHeading']    : "";
	$ChkShowHeading	   = isset($_REQUEST['ChkShowHeading'])    ? 1							    : 0;
	$TxtNewsSubheading = isset($_REQUEST['TxtNewsSubheading']) ? $_REQUEST['TxtNewsSubheading'] : "";
	$OptNewsType	   = isset($_REQUEST['OptNewsTypes'])	   ? $_REQUEST['OptNewsTypes']		: 0;
	
	$TxtNewsContents   = isset($_REQUEST['TxtNewsContents'])   ? $_REQUEST['TxtNewsContents']   : "";
	
	$TxtSmallImageTitle= isset($_REQUEST['TxtSmallImageTitle'])? $_REQUEST['TxtSmallImageTitle']: "";
	$TxtLargeImageTitle= isset($_REQUEST['TxtLargeImageTitle'])? $_REQUEST['TxtLargeImageTitle']: "";
	$TxtNewsIcon	   = isset($_REQUEST['TxtNewsIcon'])	   ? $_REQUEST['TxtNewsIcon']	    : "";
	
	$TxtNewsHeading    = $purifier->purify($TxtNewsHeading);
	$TxtNewsSubheading = $purifier->purify($TxtNewsSubheading);
	
	//$TxtNewsContents   = $elementsPurifier->purify($TxtNewsContents);
	$TxtNewsContents   = $functions->placeQuote($TxtNewsContents);
	
	
	$TxtSmallImageTitle= $purifier->purify($TxtSmallImageTitle);
	$TxtLargeImageTitle= $purifier->purify($TxtLargeImageTitle);
	
	$TxtNewsDate 	   = $functions->formatDate($TxtNewsDate);
	
	#updating
	if( $newsId > 0 && strlen ($TxtNewsHeading) > 3 )
	{
		#stop updating of news on contents page
							//UpdateNews($newsId, $templateId, $date, $heading, $subHeading, $newsType, $showHeading, $newsIcon, $active)
		//$response = $newsRepo->UpdateNews($newsId, $templateId, $TxtNewsDate, $ChkShowDate, $TxtNewsHeading, $TxtNewsSubheading, $OptNewsType, $ChkShowHeading, $TxtNewsIcon);
		
		//if ( $response > 0 )
		if ( true )
		{
								//UpdateNewsContents($newsId, $smallImageTitle, $largeImageTitle, $content1, $content2, $content3, $content4, $content5, $content6)
			$response = $newsRepo->UpdateNewsContents($newsId, $TxtSmallImageTitle, $TxtLargeImageTitle, $TxtNewsContents, "", "", "", "", "");
			
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
else
{
	
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
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtNewsSubheading">New Subheading </label>
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
	<h2 class="StepTitle control-label col-md-3 col-sm-3 col-xs-12">News Contents</h2>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <textarea name="TxtNewsContents" id="TxtNewsContents" rows="10" cols="80">
        <?php echo $functions->replaceQuote($news->Content1); ?>
        </textarea>
    </div>
</div>


<div class="ln_solid"></div>

<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtSmallImageTitle">Small Image Title</label>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <input type="text" id="TxtSmallImageTitle" name="TxtSmallImageTitle" 
      class="form-control col-md-7 col-xs-12" value="<?php echo $news->SmallImageTitle; ?>">
    </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="TxtLargeImageTitle">Large Image Title</label>
    <div class="col-md-4 col-sm-4 col-xs-12">
      <input type="text" id="TxtLargeImageTitle" name="TxtLargeImageTitle"
      class="form-control col-md-7 col-xs-12" value="<?php echo $news->LargeImageTitle; ?>">
    </div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
      <button type="button" id="CmdSaveContents" name="CmdSaveContents" onClick="javascript:saveContents();" class="btn btn-success">Save News Contents</button>
    </div>
</div>

<div class="row">
    <div class="row">
      <div class="col-lg-9 col-md-9 col-sm-12" align="center">
        <div class="sgallery_area">
        	<table id="imgSlides" class="table">
            <?php
            
            //$small_imgtitle = "Swimming Competition 2016";
            //$large_imgtitle = "Inter-House Swimming Competition – 2016";
            //for($i=1; $i <= 6; $i++) {
			$displayOrder = 1;
            foreach($tNewsFiles->Rows as $row) {
                
            ?>
            	<tr>
                	<input type="hidden" id="TxtFileId<?php echo $row->Id; ?>" value="<?php echo $row->Id; ?>" />
                	<td>
                    	<img src="<?php echo $row->FileName1; ?>" alt="img" class="img-responsive" style="max-width:220px; max-height:84px;" /><br/>
                        <span><label>Name: </label><?php echo $row->FileName1; ?></span>
                        <div style="margin-top:10px;">
                        	<input type="text" id="Txt<?php echo $row->Id; ?>Disp1" value="<?php echo $displayOrder; ?>" />
                            <input type="hidden" id="TxtFileName<?php echo $row->Id; ?>Disp1" value="<?php echo $row->FileName1; ?>" />
                        </div>
                    </td>
                    <td>
                    	<img src="<?php echo $row->FileName2; ?>" alt="img" class="img-responsive" style="max-width:220px; max-height:84px;" />
                        <br/>
                        <span><label>Name: </label><?php echo $row->FileName2; ?></span>
                        <div style="margin-top:10px;">
                        	<input type="text" id="Txt<?php echo $row->Id; ?>Disp2" value="<?php echo $displayOrder++; ?>" />
                            <input type="hidden" id="TxtFileName<?php echo $row->Id; ?>Disp2" value="<?php echo $row->FileName2; ?>" />
                        </div>
                    </td>
                    
                </tr>
            <?php
            }
            ?>
            
            	<tr>
                	<td colspan="2">
                    	<input type="button" onClick="javascript:ChangeImageDisplayOrder(<?php echo $newsId; ?>)" value="Change images display order"/>
                    </td>
                </tr>
            </table>
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

	<?php
      if ( $news->NewsFor == 1 )
        $className= "";
      else $className = "";
      
    ?>
                    
                    
<div>
    <div class="<?php echo $className; ?>">
        <div class="col-lg-12 col-md-12 col-sm-12" style="padding:0px;">
            <div class="<?php if ( $news->NewsFor == 1 ) echo 'aboutus_area wow fadeInLeft'; else 'blog-news-details blog-single-details'; ?> " style="visibility: visible; animation-name: fadeInLeft;">
            	
            	<!--SETTINGS For News and Events-->
                <?php if ( $news->NewsFor == 1 ) {?>
                    
                    <!--SETTING TITLE -->
                    <?php if ( $news->ShowHeading ) {?>
                    <!--<h2 class="titile"><?php //echo htmlentities(stripslashes(utf8_decode($news->Heading))); ?></h2>-->
                    <h2 class="titile" style="display: inline-block;"><?php echo strr ($purifier->purify((stripslashes(utf8_decode($news->Heading))))); ?></h2>
                    <br />
                      <?php if ( strlen($news->Subheading) < 1 ) {?>

                      <?php } ?>
                      
                    <?php } ?>
                    <!--END SETTING TITLE-->
                    
                    <?php if ( (int)$news['ShowDate']==1 ) { ?>
                        <span style="font-size:14px; color:#9D9D9D;"><?php echo $functions->formatDate($news->Date, "F jS, Y"); ?></span>
                    <?php } ?>
                    
                    <!--SETTING SUB TITLE-->
                    <?php if ( strlen($news->Subheading)>0 ) {?>
                      <h4 class="news-sub-title"><?php echo strr ($purifier->purify(htmlentities(stripslashes(utf8_decode($news->Subheading))))); ?></h4>
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
                
                <div class="row" style="margin:0px;">
                	
                    <?php echo $purifier->purify($functions->replaceQuote($news->Content1)); ?><br />
                    
                    <?php
					  if ( $news->NewsFor == 1 )
						$className= "row"; 
					  else $className = "";
					  
					?>
                    
                    <div style="padding: 0;">
                        <div>
                          <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                          
                          <?php
                          if ( $news->NewsFor == 1 ) {
                          ?>
                          
                            <div id="gallerySLide" class="sgallery_area">
                                <?php
								
                                //$small_imgtitle = "Swimming Competition 2016";
                                //$large_imgtitle = "Inter-House Swimming Competition – 2016";
                                //for($i=1; $i <= 6; $i++) {
								//$tNewsFiles->PrintTable();
								foreach($tNewsFiles->Rows as $row) {

									$smallImageTitle = $purifier->purify($row->SmallImageTitle);
                                    $largeImageTitle = $purifier->purify($row->LargeImageTitle);
                                    if($smallImageTitle == '') $smallImageTitle = $purifier->purify($row->Title1);
                                    if($largeImageTitle == '') $largeImageTitle = $purifier->purify($row->Title2);
                                ?>
                                    <a href="<?php echo $purifier->purify($_GET['imagesPath'].$row->FileName2); ?>" title="<?php echo $largeImageTitle; ?>">
                                        <img class="gallery_img" src="<?php echo $purifier->purify($_GET['imagesPath'].$row->FileName1); ?>" alt="img" />
                                        <span class="view_btn"> <?php echo $smallImageTitle; ?> </span>
                                    </a>
                                    
                         <?php } ?>
                            </div>
                         <?php
                         	if($newsId==364){
								?>
								<div align="center">Photo Credits: Ehtesham Majid Bhatti</div>
								<?php
								}
						 ?>
                    <?php } else if ( $news->NewsFor == 2 ) { ?>
                    		
                            
                            
                            <div id="mixit-container" class="portfolio-container" style="width:95%;">
								<?php
                                    //$small_imgtitle="Alumni Reunion<br>Batches 2001-2005";
                                    //$large_imgtitle="Alumni give career and life advice to students at the first Careers’ Evening";
                                    foreach($tNewsFiles->Rows as $row) {
										
                                ?>
                                 <div class="single-portfolio single-portfolio1 mix foundersday">
                                   <div class="single-item">
                                     <img src="<?php echo $purifier->purify($_GET['imagesPath'].$row->FileName1); ?>" alt="<?php echo $purifier->purify($row->Title1); ?>" class="myimg">
                                     <div class="single-item-content single-item-content1">               
                                        <a class="fancybox view-icon" data-fancybox-group="gallery" href="<?php echo $purifier->purify($_GET['imagesPath'].$row->FileName2); ?>"><i class="fa fa-search-plus"></i></a>
                                        <div class="portfolio-title">
                                          <span></span>
                                        </div>
                                     </div>
                                   </div>                          
                               </div>
                               <?php
                                    }
                                ?>
                               
                            </div>
                            
                    <?php } ?>
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
                </div>
                
            </div>
            
        </div>
    </div>
	
</div>
<?php
}

if ( isset($_GET['mode']) && $_GET['mode'] == "update" )
{
?>

<script>

function ChangeImageDisplayOrder(id)
{
	var str = "";
	var counts = 0;
	
	var arrIds = new Array();
	
	
	$("#imgSlides input:hidden")
		.each(function() {
			
            if ( $(this).attr("id").indexOf("TxtFileId") == 0 )
			{
				arrIds.push( $(this).attr("value") );
				
			}
			
        });
	
	
	//alert(arrIds.join('\n'));
	
	counts = arrIds.length;
	
	var arrData = new Array(  );
	var arrFileName1 = new Array(counts);
	var arrFileName2 = new Array(counts);
	
	var index = 0;
	var fileName = "";
	
	//alert( ( $("#TxtFileName"+arrIds[0]+"Disp1").val() ) );
	
	for(var i = 0; i < counts; i++)
	{
		index = $("#Txt"+arrIds[i]+"Disp1").val();
		fileName = $("#TxtFileName"+arrIds[i]+"Disp1").val();
		
		arrFileName1[ Number(index) ] = fileName;
		
		index = $("#Txt"+arrIds[i]+"Disp2").val();
		fileName = $("#TxtFileName"+arrIds[i]+"Disp2").val();
		
		
		arrFileName2[ Number(index) ] = fileName;
		
	}
	
	var value = "";
	for(var i = 0; i < counts; i++)
	{
		if (  arrFileName1[i+1] === undefined || arrFileName2[i+1] === undefined )
		{
			alert("Something is wrong! Please check display order again.");
			return;
		}
		
		value = "{"+arrIds[i]+","+arrFileName1[i+1]+","+arrFileName2[i+1]+"}"
		arrData.push( value );
	}
	
	//alert(arrData.join(','));
	
	
	$.post("../services/schoolService.php?select=4&newsId="+id+"&data="+arrData,function(data) {
		//alert(data);
		
		var tokens = data.split(",");
		var status = tokens[0];
		
		var message = tokens[1];
		alert(message);
	});
	
}

</script>

<?php
}
?>
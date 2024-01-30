<?php

$tNewsContents = $newsRepo->GetNewsContents($newsId);
//$tNewsContents->PrintTable();

$tNewsFiles = $newsRepo->GetNewsFiles($newsId);
//$tNewsFiles->PrintTable();

$news = $tNewsContents->Rows[0];


if ( isset($_GET['mode']) && $_GET['mode'] == "view" )
{
	
?>
<div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="aboutus_area wow fadeInLeft">
            	
                <?php echo $purifier->purify($functions->replaceQuote($news->Content1)); ?><br />
                
            </div>
            
        </div>
    </div>
   
</div>
<?php
}
?>
<?php
$tNewsContents = $newsRepo->GetNewsContents($newsId);

$tNewsFiles = $newsRepo->GetNewsFiles($newsId);

$news = $tNewsContents->Rows[0];

if ( isset($_GET['mode']) && $_GET['mode'] == "view" )
{
	
?>
<div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="aboutus_area wow fadeInLeft">
            	<!--SETTING TITLE-->
                <?php if ( $news->ShowHeading ) {?>
                <h2 class="titile"><?php echo $purifier->purify( htmlentities(stripslashes(utf8_decode($news->Heading))) ); ?></h2>
                <?php } ?>
                <!--END SETTING TITLE-->
                
                <!--SETTING SUB TITLE-->
                <?php if ( strlen($news->Subheading)>0 ) {?>
                <h4 style="color:#C4C4C4;"><?php echo $purifier->purify( htmlentities(stripslashes(utf8_decode($news->Subheading))) ); ?></h4>
                <?php } ?>
                <!--END SETTING SUB TITLE-->
                
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <?php echo $purifier->purify ($functions->replaceQuote($news->Content1) ); ?><br />
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="row form-group" align="center">
							<?php if($tNewsFiles) foreach($tNewsFiles->Rows as $row) { ?>
                            <div class="col-lg-12 col-md-12 col-sm-12" align="center"> 
                                <img src="<?php echo $purifier->purify($_GET['imagesPath'].$row->FileName1); ?>"
                                     width="<?php echo $purifier->purify( $row->Width1); ?>" 
                                     height="<?php echo $purifier->purify($row->Height1); ?>" alt="img" class="img-responsive" /><br>
                            </div>
                            <? } ?>
                        </div>
                    </div>
                </div>
                
                <?php echo $purifier->purify ($functions->replaceQuote($news->Content2) ); ?><br />
                
            </div>
            
        </div>
    </div>
   
</div>
<?php
}
?>
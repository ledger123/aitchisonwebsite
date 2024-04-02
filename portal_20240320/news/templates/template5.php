<?php
$tNewsContents = $newsRepo->GetNewsContents($newsId);

$tNewsFiles = $newsRepo->GetNewsFiles($newsId);

$news = $tNewsContents->Rows[0];

if ( isset($_GET['mode']) && $_GET['mode'] == "view" )
{
?>
<div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" style="padding:0px;">
            <div class="aboutus_area wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
            	<!--SETTING TITLE-->
                <?php if ( $news->ShowHeading ) {?>
                <h2 class="titile"><?php echo $purifier->purify(htmlentities(stripslashes(utf8_decode($news->Heading))) ); ?></h2>
                <?php } ?>
                <!--END SETTING TITLE-->
                
                <?php if ( (int)$news['ShowDate']==1 ) {?>
	                <span style="font-size:14px; color:#9D9D9D;"><?php echo $functions->formatDate($news->Date, "F jS, Y"); ?></span>
                <?php } ?>

                <?php if ( $news->ShowHeading ) {?>
                    <br /><br />
                <?php } ?>


                <!--SETTING SUB TITLE-->
                <?php if ( strlen($news->Subheading)>0 ) {?>
                <span style="font-size:18px;"><?php echo $purifier->purify(htmlentities(stripslashes(utf8_decode($news->Subheading))) ); ?></span>
                    <br /><br />
                <?php } ?>
                <!--END SETTING SUB TITLE-->

                <div class="row" style="margin:0px;">
                	
                    <?php echo $purifier->purify($functions->replaceQuote($news->Content1 )); ?><br />
                    
                    
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
                                    <a href="<?php echo $purifier->purify($_GET['imagesPath'].$row->FileName2); ?>" title="<?php echo $purifier->purify($row->Title2); ?>">
                                        <img class="gallery_img" src="<?php echo $purifier->purify($_GET['imagesPath'].$row->FileName1); ?>" alt="img" />
                                        <span class="view_btn"> <?php echo $purifier->purify($row->Title1); ?> </span>
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
                </div>
                
            </div>
            
        </div>
    </div>
	
</div>
<?php
}
?>
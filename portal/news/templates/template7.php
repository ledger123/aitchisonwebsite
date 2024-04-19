<?php
$tNewsContents = $newsRepo->GetNewsContents($newsId);

$tNewsFiles = $newsRepo->GetNewsFiles($newsId);

$news = $tNewsContents->Rows[0];

?>
<div>
    <div class="row">
        <div class="">
            <div class="aboutus_area wow fadeInLeft">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div align="center" style="padding-bottom: 20px;">
                        <img src="images/ac_logo130x130.png" width="130" height="130" alt="Aitchison College, Lahore.">
                    </div>
                </div>

                <div class="row" style="text-align: right; margin-bottom:15px;">
                    <?php if ( (int)$news['ShowDate']==1 ) {?>
                        <strong>Dated: <?php echo $functions->formatDate( $news['Date'], "F d, Y" ); ?></strong>
                    <?php } ?>
                </div>

                <!--SETTING TITLE-->
                <?php if ( $news['ShowHeading'] ) {?>
                    <h2 style="text-align: center; font-size: 20px; font-weight: bold;">
                        <strong><?php echo $purifier->purify( htmlentities(stripslashes(utf8_decode( str_replace('&amp;', '&', $purifier->purify($news['Heading']) ) ) )) ); ?></strong>
                    </h2>
                <?php } ?>

                <!--SETTING SUB TITLE-->
                <?php if ( strlen(trim($news['Subheading']))>0 ) {?>
                    <!--<h4 style="color:#C4C4C4;"><?php echo $purifier->purify( htmlentities(stripslashes(utf8_decode($news['Subheading']))) ); ?></h4>-->
                <?php } ?>
                <!--END SETTING SUB TITLE-->


                <?php echo $purifier->purify( $functions->replaceQuote ($news['Content1']) ); ?><br />


                <?php echo "<!-- "; echo "show sign: " . $news['ShowSignature'];  echo " -->"; ?>


                <?php if ( (int)$news['ShowSignature']==1 ) { ?>

                    <img src="images/signature/principal_signature_new.png" width="212" height="0" ><br />
                    Mrs Amina Kamran
                    <p>Acting Principal</p>

                <?php } ?>

            </div>

        </div>
    </div>

</div>

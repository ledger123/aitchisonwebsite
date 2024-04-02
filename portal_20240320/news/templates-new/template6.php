<?php

$tNewsContents = $newsRepo->GetNewsContents($newsId);
//$tNewsContents->PrintTable();

$tNewsFiles = $newsRepo->GetNewsFiles($newsId);
//$tNewsFiles->PrintTable();

$news = $tNewsContents->Rows[0];

?>
<div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="aboutus_area wow fadeInLeft">
            	
                 <?php
					if ($news->Content2 == "1") {
				?>
					<a href="<?php echo $news->Content1; ?>" target="_blank" download><?php echo $news->Heading; ?></a>
				<?php
					}
					else {
						//echo "1234";
						//echo $functions->replaceQuote($news->Content1);
						//header("Location: " . $functions->replaceQuote($news->Content1));
						
						echo '<script type="text/javascript">
							   window.location = "'. $functions->replaceQuote($news->Content1) .'"
						  </script>';
					}
				?><br />
                
            </div>
            
        </div>
    </div>
   
</div>

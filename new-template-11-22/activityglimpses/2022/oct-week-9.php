<style>

    .accordion-collapse .collapse .show {

        transition: all 0.9s ease-in-out;
    }

	.btn {
		width: 33%;
		padding: inherit;
	}
	@media(max-width: 1024px){
		.btn {
			width: 50%;
			padding: inherit;
		}	
	}
	@media(max-width: 600px){
		.btn {
			width: 100%;
			padding: inherit;
		}	
	}	
	@media(max-width: 1199px){
		.sgallery_area4 a {
			width: 30%;
		}
	}
	@media(max-width: 800px){
		.sgallery_area4 a {
			width: 47.3%;
		}
	}
	@media(max-width: 600px){
		.sgallery_area4 a {
			width: 96%;
		}
	}
	.gtitle0{
		font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;
	}
	.gtitle1{
		font-size: 1.2rem;
	}
	.disabled {
        pointer-events: none;
        cursor: default;
        opacity: 0.6;
    }
	/*STARTED FOR THE PREVIOUS & NEXT
	a {
	  text-decoration: none;
	  display: inline-block;
	  padding: 8px 16px;
	}

	a:hover {
	  background-color: #;
	  color: black;
	}

	.previous {
	  background-color: #f1f1f1;
	  color: black;
	}

	.next {
	  background-color: #04AA6D;
	  color: white;
	}

	.round {
	  border-radius: 50%;
	}
	/*ENDED   FOR THE PREVIOUS & NEXT*/
</style>
<div class="row">
	<?php
	$selectedtab="tab1";
	//$selectedtab="tab14";


    ?>
	<!-- Left Area -->	
	<div class="col-lg-12 col-md-12 col-sm-12">

			<?php
				/*echo "<pre>";
				echo $tNews;
				echo "</pre>";
				echo "<br><br><br>AkhtarRafiq<br><br>".count($tNews);*/
			?>
            <!-- start of accordian -->
			<?php
				$pageuri="activity-glimpses";
				$backiteration="";
				$nextiteration="";
				if($pagenumber > 0){
					if($pagenumber > 1)
						$backiteration=$pageuri."-".($pagenumber-1);
					else
						$backiteration=$pageuri;
				}
				if($tNews->rowsCount() == 12 && (int)$lastNewsId !=122){
					
					$nextiteration=$pageuri."-".($pagenumber+1);
				}
				
			?>
			<div align="right">
				<table border="0" style="font-size:38px; max-width: 315px;">
					<tbody>
						
						 <tr>							
							<td style="width:50%;text-align:left;/*padding-right:10px;*/">
								<a href="<?php echo $nextiteration;?>" id="Previous" title="Go to Previous" class="<?php echo ($tNews->rowsCount()< 12 || (int)$lastNewsId ==122)?"disabled":"";?>" style="font-size:20px;"> <button type="button" class="button-link dark small" style="width: auto; padding: 10px; width: 113px;">Previous</button></a>
						    </td>
							 <td style="width:50%;text-align:right;/*padding-left:10px;*/">
								<a href="<?php echo $backiteration;?>" id="Next" title="Go to Next" class="<?php echo ($pagenumber==0)?"disabled":"";?>" style="font-size:20px;"><button type="button" class="button-link dark small" style="width: auto; padding: 10px; width: 113px;">Next </button></a>
							 </td>
						</tr>
					</tbody>
				</table>
			</div>
            <?php
            if($mobile->isMobile() || true) {
            //if(true) {			
            ?>
			
            <div class="accordion" id="accordionExample" style="width: 100%; margin-left: 5px;margin-top: 10px;margin-right: 9px;">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <p style="font-size: 1rem;"><strong>Show all activities ...</strong></p>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="padding: 0">



            <?php } ?>



        <ul class="nav nav-tabs mb-3" id="sportsTab" role="tablist" style="display: flex;">
			<?php 
			$i=0;
			foreach($tNews->Rows as $row){
				$i=$i+1;		
			?>
            <li class="nav-item btn" role="presentation" id="<?php echo $row->NewsId;?>">
               <button class="nav-link<?php echo ($selectedtab =="tab".$i)?" active":"";?>" id="tab<?php echo $i;?>-tab" data-bs-toggle="tab" data-bs-target="#tab<?php echo $i;?>" type="button" role="tab" aria-controls="tab<?php echo $i;?>" aria-selected="<?php echo ($selectedtab =="tab".$i)?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;"><?php echo stripslashes($purifier->purify($row->Heading));?></button>
            </li>
			<?php 
			}
			?>
			
			<?php /*?><li class="nav-item btn" role="presentation">
                <button class="nav-link" id="tab0-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="tab0" aria-selected="<?php echo ($selectedtab =="tab0")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;"><a href="week-at-a-glance-offline-1" style="color: inherit;">View More...</a></button>
            </li><?php */?>
			<?php /*?><li class="nav-item btn" role="presentation" id="1729">
                <button class="nav-link<?php echo ($selectedtab =="tab9")?" active":"";?>" id="tab9-tab" data-bs-toggle="tab" data-bs-target="#tab9" type="button" role="tab" aria-controls="tab9" aria-selected="<?php echo ($selectedtab =="tab9")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">G.R. Chaudhry Inter-School Hockey Competition</button>
            </li>
			
			
			<li class="nav-item btn" role="presentation" id="1728">
                <button class="nav-link<?php echo ($selectedtab =="tab8")?" active":"";?>" id="tab8-tab" data-bs-toggle="tab" data-bs-target="#tab8" type="button" role="tab" aria-controls="tab8" aria-selected="<?php echo ($selectedtab =="tab8")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Inter House Urdu Recitation M2</button>
            </li>
			
			<li class="nav-item btn" role="presentation" id="1731">
                <button class="nav-link<?php echo ($selectedtab =="tab11")?" active":"";?>" id="tab11-tab" data-bs-toggle="tab" data-bs-target="#tab11" type="button" role="tab" aria-controls="tab11" aria-selected="<?php echo ($selectedtab =="tab11")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Inter House Urdu Recitation M1</button>
            </li>
			
			<li class="nav-item btn" role="presentation" id="1727">
                <button class="nav-link<?php echo ($selectedtab =="tab7")?" active":"";?>" id="tab7-tab" data-bs-toggle="tab" data-bs-target="#tab7" type="button" role="tab" aria-controls="tab7" aria-selected="<?php echo ($selectedtab =="tab7")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">1st Hockey XI v Government College in Tight Contest</button>
            </li>
						
			<li class="nav-item btn" role="presentation" id="1726">
                <button class="nav-link<?php echo ($selectedtab =="tab6")?" active":"";?>" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab" aria-controls="tab6" aria-selected="<?php echo ($selectedtab =="tab6")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Football Practice Match Senior School</button>
            </li>
			
			<li class="nav-item btn" role="presentation" id="1732">
                <button class="nav-link<?php echo ($selectedtab =="tab12")?" active":"";?>" id="tab12-tab" data-bs-toggle="tab" data-bs-target="#tab12" type="button" role="tab" aria-controls="tab12" aria-selected="<?php echo ($selectedtab =="tab12")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Football Fixture Match Prep School</button>
            </li>
			
			<li class="nav-item btn" role="presentation" id="1725">
                <button class="nav-link<?php echo ($selectedtab =="tab5")?" active":"";?>" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="tab5" aria-selected="<?php echo ($selectedtab =="tab5")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Inter House Cricket Competition Prep School</button>
            </li>
			
			<li class="nav-item btn" role="presentation" id="1724">
                <button class="nav-link<?php echo ($selectedtab =="tab4")?" active":"";?>" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="<?php echo ($selectedtab =="tab4")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Tennis Championship Prep School</button>
            </li>
			
			<li class="nav-item btn" role="presentation" id="1723">
                <button class="nav-link<?php echo ($selectedtab =="tab3")?" active":"";?>" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="<?php echo ($selectedtab =="tab3")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Basketball Practice Match Senior School</button>
            </li>
			
			<li class="nav-item btn" role="presentation" id="1722">
                <button class="nav-link<?php echo ($selectedtab =="tab2")?" active":"";?>" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="<?php echo ($selectedtab =="tab2")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Badminton Ranking (Age Group: U/16)</button>
            </li>
			
			<li class="nav-item btn" role="presentation" id="1721">
                <button class="nav-link<?php echo ($selectedtab =="tab1")?" active":"";?>" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="<?php echo ($selectedtab =="tab1")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Mini Swim Meet Expands Involvement</button>
            </li><?php */?>
        </ul>

            <?php
            if($mobile->isMobile() || true) {
            //if(true) {
            ?>
                        </div>
                    </div>
                </div>

            </div>

        <?php } ?>

            <!-- end of accordian -->


		<div class="tab-content" id="sportsTabContent">
			<?php
			$j=0;
			foreach($tNews->Rows as $row){
				$j=$j+1;
			?>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab".$j)?"  show active":"";?>" id="tab<?php echo $j;?>" role="tabpanel" aria-labelledby="tab<?php echo $j;?>-tab">
				<p class="gtitle0"><?php echo stripslashes($purifier->purify($row->Heading)); ?> <?php /*?>- <?php echo date("j M, Y", strtotime($row->Date)); ?><?php */?></p>
				<p class="gtitle1"></p>
				<div id="gallerySLide<?php echo $j;?>" class="sgallery_area4">
					<?php
						$news_imgpath="../";
						unset($NewsFiles);										
						$NewsFiles = $weeklyRepo->GetNewsFiles($row->NewsId);
						//$NewsFiles->PrintTable();
						foreach($NewsFiles->Rows as $row) {
							$smallImageTitle = $purifier->purify($row->SmallImageTitle);
							$largeImageTitle = $purifier->purify($row->LargeImageTitle);
							if($smallImageTitle == '') $smallImageTitle = $purifier->purify($row->Title1);
							if($largeImageTitle == '') $largeImageTitle = $purifier->purify($row->Title2);
						?>
							<a href="<?php echo $purifier->purify($news_imgpath."newsletter/news/".$row->FileName2); ?>" title="<?php echo $largeImageTitle; ?>">
								<img class="gallery_img" src="<?php echo $purifier->purify($news_imgpath."newsletter/news/".$row->FileName1); ?>" alt="img" />
								<span class="view_btn"> <?php echo $smallImageTitle; ?> </span>
							</a>

				 <?php } ?>
					
				</div>
			</div>
			<?php
			}
			?>
			<?php /*?><div class="tab-pane fade<?php echo ($selectedtab =="tab1")?"  show active":"";?>" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
				<p class="gtitle0">Mini Swim Meet Expands Involvement</p>
				<div id="gallerySLide1" class="sgallery_area4">
					<a href="newsletter/news/images/1-6514663930.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/1-3749619620.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/2-1820768468.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/2-3246886890.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/3-5234547347.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/3-7042858147.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/4-5452187201.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/4-7874200832.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/5-8193888983.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/5-1808996669.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/6-7051252002.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/6-4835999280.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/7-9396961282.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/7-2258875085.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/8-8996442192.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/8-131647814.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/9-618944913.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/9-8012790037.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/10-2689341989.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/10-9555099900.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/11-6445754515.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/11-5378844246.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/12-4436097314.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/12-8403036615.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>

<a href="newsletter/news/images/13-3304628238.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/13-5495379099.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/14-325663579.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/14-9443374493.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/15-9556843674.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/15-1100806370.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/16-9934976881.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/16-6446718525.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/17-5178928424.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/17-8422362265.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/18-9334736037.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/18-4404287741.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/19-511858184.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/19-5522521470.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/20-506544654.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/20-1516787941.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/21-9444265614.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/21-5658685568.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/22-3157111136.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/22-3448930616.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/23-2435090033.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/23-8070060890.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/24-6699698871.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/24-8497787556.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/25-1338581137.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/25-4424650939.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
<a href="newsletter/news/images/26-6542258544.jpg" title="Mini Swim Meet Expands Involvement">
<img class="gallery_img" src="newsletter/news/images/26-2790670526.jpg" alt="img" />
<span class="view_btn"> Mini Swim Meet Expands Involvement </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab3")?"  show active":"";?>" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
				<p class="gtitle0">Basketball Practice Match Senior School<br>
				<span class="gtitle1">Aitchison College vs FC College</span>
				</p>
				<div id="gallerySLide3" class="sgallery_area4">
					<a href="newsletter/news/images/1-3878940113.jpg" title="Basketball Practice Match Senior School - Aitchison College vs FC College">
<img class="gallery_img" src="newsletter/news/images/1-2586875596.jpg" alt="img" />
<span class="view_btn"> Basketball Practice Match </span>
 </a>
<a href="newsletter/news/images/2-2938943622.jpg" title="Basketball Practice Match Senior School - Aitchison College vs FC College">
<img class="gallery_img" src="newsletter/news/images/2-5146835924.jpg" alt="img" />
<span class="view_btn"> Basketball Practice Match </span>
</a>
<a href="newsletter/news/images/3-5173241099.jpg" title="Basketball Practice Match Senior School - Aitchison College vs FC College">
<img class="gallery_img" src="newsletter/news/images/3-5018634238.jpg" alt="img" />
<span class="view_btn"> Basketball Practice Match </span>
</a>
<a href="newsletter/news/images/4-7379210306.jpg" title="Basketball Practice Match Senior School - Aitchison College vs FC College">
<img class="gallery_img" src="newsletter/news/images/4-8452440802.jpg" alt="img" />
<span class="view_btn"> Basketball Practice Match </span>
</a>
<a href="newsletter/news/images/5-181480221.jpg" title="Basketball Practice Match Senior School - Aitchison College vs FC College">
<img class="gallery_img" src="newsletter/news/images/5-4404466241.jpg" alt="img" />
<span class="view_btn"> Basketball Practice Match </span>
</a>
<a href="newsletter/news/images/6-4076925559.jpg" title="Basketball Practice Match Senior School - Aitchison College vs FC College">
<img class="gallery_img" src="newsletter/news/images/6-3507445794.jpg" alt="img" />
<span class="view_btn"> Basketball Practice Match </span>
</a>
<a href="newsletter/news/images/7-9398022050.jpg" title="Basketball Practice Match Senior School - Aitchison College vs FC College">
<img class="gallery_img" src="newsletter/news/images/7-1733464372.jpg" alt="img" />
<span class="view_btn"> Basketball Practice Match </span>
</a>
<a href="newsletter/news/images/8-2586063362.jpg" title="Basketball Practice Match Senior School - Aitchison College vs FC College">
<img class="gallery_img" src="newsletter/news/images/8-4819542027.jpg" alt="img" />
<span class="view_btn"> Basketball Practice Match </span>
</a>
<a href="newsletter/news/images/9-1172896221.jpg" title="Basketball Practice Match Senior School - Aitchison College vs FC College">
<img class="gallery_img" src="newsletter/news/images/9-2858755615.jpg" alt="img" />
<span class="view_btn"> Basketball Practice Match </span>
</a>
 <a href="newsletter/news/images/10-4348095069.jpg" title="Basketball Practice Match Senior School - Aitchison College vs FC College">
<img class="gallery_img" src="newsletter/news/images/10-2720117909.jpg" alt="img" />
<span class="view_btn"> Basketball Practice Match </span>
</a>
<a href="newsletter/news/images/11-5759763092.jpg" title="Basketball Practice Match Senior School - Aitchison College vs FC College">
<img class="gallery_img" src="newsletter/news/images/11-8436817156.jpg" alt="img" />
<span class="view_btn"> Basketball Practice Match </span>
</a>
<a href="newsletter/news/images/12-1309034445.jpg" title="Basketball Practice Match Senior School - Aitchison College vs FC College">
<img class="gallery_img" src="newsletter/news/images/12-6016757685.jpg" alt="img" />
<span class="view_btn"> Basketball Practice Match </span>
</a>
<a href="newsletter/news/images/13-1346187404.jpg" title="Basketball Practice Match Senior School - Aitchison College vs FC College">
<img class="gallery_img" src="newsletter/news/images/13-4184404588.jpg" alt="img" />
<span class="view_btn"> Basketball Practice Match </span>
</a>
<a href="newsletter/news/images/14-7761002798.jpg" title="Basketball Practice Match Senior School - Aitchison College vs FC College">
<img class="gallery_img" src="newsletter/news/images/14-9494336576.jpg" alt="img" />
<span class="view_btn"> Basketball Practice Match </span>
</a>
<a href="newsletter/news/images/15-9646611409.jpg" title="Basketball Practice Match Senior School - Aitchison College vs FC College">
<img class="gallery_img" src="newsletter/news/images/15-2397080990.jpg" alt="img" />
<span class="view_btn"> Basketball Practice Match </span>
</a>
<a href="newsletter/news/images/16-4755034238.jpg" title="Basketball Practice Match Senior School - Aitchison College vs FC College">
<img class="gallery_img" src="newsletter/news/images/16-7165101952.jpg" alt="img" />
<span class="view_btn"> Basketball Practice Match </span>
</a>
<a href="newsletter/news/images/17-487078899.jpg" title="Basketball Practice Match Senior School - Aitchison College vs FC College">
<img class="gallery_img" src="newsletter/news/images/17-5331007579.jpg" alt="img" />
<span class="view_btn"> Basketball Practice Match </span>
</a>
<a href="newsletter/news/images/18-7491903081.jpg" title="Basketball Practice Match Senior School - Aitchison College vs FC College">
<img class="gallery_img" src="newsletter/news/images/18-8972958895.jpg" alt="img" />
<span class="view_btn"> Basketball Practice Match </span>
</a>
<a href="newsletter/news/images/19-7190864009.jpg" title="Basketball Practice Match Senior School - Aitchison College vs FC College">
<img class="gallery_img" src="newsletter/news/images/19-1260590618.jpg" alt="img" />
<span class="view_btn"> Basketball Practice Match </span>
</a>
<a href="newsletter/news/images/20-7027194166.jpg" title="Basketball Practice Match Senior School - Aitchison College vs FC College">
<img class="gallery_img" src="newsletter/news/images/20-15229985.jpg" alt="img" />
<span class="view_btn"> Basketball Practice Match </span>
</a>
<a href="newsletter/news/images/22-8096960032.jpg" title="Basketball Practice Match Senior School - Aitchison College vs FC College">
<img class="gallery_img" src="newsletter/news/images/22-7441205672.jpg" alt="img" />
<span class="view_btn"> Basketball Practice Match </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab7")?"  show active":"";?>" id="tab7" role="tabpanel" aria-labelledby="tab7-tab">
				<p class="gtitle0">1st Hockey XI Goes Down 2-1 v Government College in Tight Contest</p>
				<div id="gallerySLide7" class="sgallery_area4">
					<a href="newsletter/news/images/1-2894153695.jpg" title="1st Hockey XI Goes Down 2-1 v Government College in Tight Contest">
<img class="gallery_img" src="newsletter/news/images/1-8304636174.jpg" alt="img" />
<span class="view_btn"> Hockey Match </span>
</a>
<a href="newsletter/news/images/2-5054926804.jpg" title="1st Hockey XI Goes Down 2-1 v Government College in Tight Contest">
<img class="gallery_img" src="newsletter/news/images/2-169248344.jpg" alt="img" />
<span class="view_btn"> Hockey Match </span>
</a>
<a href="newsletter/news/images/3-3520726323.jpg" title="1st Hockey XI Goes Down 2-1 v Government College in Tight Contest">
<img class="gallery_img" src="newsletter/news/images/3-5830930737.jpg" alt="img" />
<span class="view_btn"> Hockey Match </span>
</a>
<a href="newsletter/news/images/4-6344466191.jpg" title="1st Hockey XI Goes Down 2-1 v Government College in Tight Contest">
<img class="gallery_img" src="newsletter/news/images/4-5201053715.jpg" alt="img" />
<span class="view_btn"> Hockey Match </span>
</a>
<a href="newsletter/news/images/5-859130610.jpg" title="1st Hockey XI Goes Down 2-1 v Government College in Tight Contest">
<img class="gallery_img" src="newsletter/news/images/5-9414873227.jpg" alt="img" />
<span class="view_btn"> Hockey Match </span>
</a>
<a href="newsletter/news/images/6-3412808948.jpg" title="1st Hockey XI Goes Down 2-1 v Government College in Tight Contest">
<img class="gallery_img" src="newsletter/news/images/6-5239607663.jpg" alt="img" />
<span class="view_btn"> Hockey Match </span>
</a>
<a href="newsletter/news/images/7-1545907883.jpg" title="1st Hockey XI Goes Down 2-1 v Government College in Tight Contest">
<img class="gallery_img" src="newsletter/news/images/7-7037391320.jpg" alt="img" />
<span class="view_btn"> Hockey Match </span>
</a>
<a href="newsletter/news/images/8-1160744525.jpg" title="1st Hockey XI Goes Down 2-1 v Government College in Tight Contest">
<img class="gallery_img" src="newsletter/news/images/8-7430697061.jpg" alt="img" />
<span class="view_btn"> Hockey Match </span>
</a>
<a href="newsletter/news/images/9-737323354.jpg" title="1st Hockey XI Goes Down 2-1 v Government College in Tight Contest">
<img class="gallery_img" src="newsletter/news/images/9-6143253323.jpg" alt="img" />
<span class="view_btn"> Hockey Match </span>
</a>
<a href="newsletter/news/images/10-803792752.jpg" title="1st Hockey XI Goes Down 2-1 v Government College in Tight Contest">
<img class="gallery_img" src="newsletter/news/images/10-2862432102.jpg" alt="img" />
<span class="view_btn"> Hockey Match </span>
</a>
<a href="newsletter/news/images/11-2370234592.jpg" title="1st Hockey XI Goes Down 2-1 v Government College in Tight Contest">
<img class="gallery_img" src="newsletter/news/images/11-5473230775.jpg" alt="img" />
<span class="view_btn"> Hockey Match </span>
</a>
<a href="newsletter/news/images/12-1451458671.jpg" title="1st Hockey XI Goes Down 2-1 v Government College in Tight Contest">
<img class="gallery_img" src="newsletter/news/images/12-2608092634.jpg" alt="img" />
 <span class="view_btn"> Hockey Match </span>
</a>
<a href="newsletter/news/images/13-9218608508.jpg" title="1st Hockey XI Goes Down 2-1 v Government College in Tight Contest">
<img class="gallery_img" src="newsletter/news/images/13-5295110133.jpg" alt="img" />
<span class="view_btn"> Hockey Match </span>
</a>
<a href="newsletter/news/images/14-4870308299.jpg" title="1st Hockey XI Goes Down 2-1 v Government College in Tight Contest">
<img class="gallery_img" src="newsletter/news/images/14-3902542606.jpg" alt="img" />
<span class="view_btn"> Hockey Match </span>
</a>
<a href="newsletter/news/images/15-7308780587.jpg" title="1st Hockey XI Goes Down 2-1 v Government College in Tight Contest">
<img class="gallery_img" src="newsletter/news/images/15-5058039634.jpg" alt="img" />
<span class="view_btn"> Hockey Match </span>
</a>
<a href="newsletter/news/images/16-3392449078.jpg" title="1st Hockey XI Goes Down 2-1 v Government College in Tight Contest">
<img class="gallery_img" src="newsletter/news/images/16-1003710840.jpg" alt="img" />
<span class="view_btn"> Hockey Match </span>
</a>
<a href="newsletter/news/images/17-8179501305.jpg" title="1st Hockey XI Goes Down 2-1 v Government College in Tight Contest">
<img class="gallery_img" src="newsletter/news/images/17-7788117631.jpg" alt="img" />
<span class="view_btn"> Hockey Match </span>
</a>
<a href="newsletter/news/images/18-4834464627.jpg" title="1st Hockey XI Goes Down 2-1 v Government College in Tight Contest">
<img class="gallery_img" src="newsletter/news/images/18-2317292312.jpg" alt="img" />
<span class="view_btn"> Hockey Match </span>
</a>
				</div>
			</div>							
			<?php */?>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab13")?"  show active":"";?>" id="tab13" role="tabpanel" aria-labelledby="tab13-tab">
				<p class="gtitle0">Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.
					<?php /*?><br><span  class="gtitle1">Title</span><?php */?>
				</p>
				<div id="gallerySLide13" class="sgallery_area4">
					<a href="newsletter/news/images/01-8325776900.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/01-5698437708.jpg" alt="img" />
<span class="view_btn"> </span>
</a>

<a href="newsletter/news/images/1-9116033767.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/1-8334527516.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/2-8926109891.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/2-5778658144.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/3-8450460379.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/3-5304904018.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/4-8921041887.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/4-4942018981.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/5-7378338689.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/5-4894823074.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/6-2371151082.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/6-238748799.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/7-8179603562.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/7-4243627776.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/8-27837172.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/8-9712251083.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/9-9130684281.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/9-6455630582.jpg" alt="img" />
 <span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/10-3575540588.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/10-8732861775.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/11-3451780021.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/11-9254562449.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/12-9017956909.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/12-8581292036.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/13-8278259600.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/13-4421274709.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/14-9349499677.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/14-5219453852.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/15-761221641.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/15-7891481016.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/16-9235564217.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/16-9226072703.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/17-7288949944.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/17-6564642661.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/18-9949828454.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/18-7025862550.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/19-1076615476.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/19-1267423735.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/20-8478252228.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/20-7771947053.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/21-985271766.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/21-8580746855.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/22-8882289486.jpg" title="Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.">
<img class="gallery_img" src="newsletter/news/images/22-7295809458.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
				</div>
			</div>
			
			<div class="tab-pane fade<?php echo ($selectedtab =="tab14")?"  show active":"";?>" id="tab14" role="tabpanel" aria-labelledby="tab14-tab">
				<p class="gtitle0">Aitchison Hockey Ist XI Downs Lawrence 6-2
					<?php /*?><br><span  class="gtitle1">Title</span><?php */?>
				</p>
				<div id="gallerySLide14" class="sgallery_area4">
					<a href="newsletter/news/images/1-8004505682.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/1-31404729.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/2-3647427546.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/2-3388205552.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/3-950648508.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/3-2773789940.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/4-6331638243.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/4-5565886694.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/5-5016203657.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/5-2814688313.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/6-7102716041.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/6-116233896.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/7-1532508183.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/7-8346312394.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/8-2493206784.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/8-8059698737.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/9-4894184084.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/9-4958484778.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/10-7654229824.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/10-671327656.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/11-2732232254.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/11-5089569269.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/12-6382508940.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/12-3233439706.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/13-4388024059.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/13-6459837087.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/14-9126609865.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/14-7895604254.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/15-3216181366.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/15-6603456235.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/16-3532595043.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/16-8743738562.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/17-2359641744.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/17-2958979076.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/18-5298968250.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/18-8484190776.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/19-7522430539.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/19-3365053895.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/20-8392174268.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/20-4819726969.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/21-8957462125.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/21-6491643226.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/22-3355233000.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/22-9580998262.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/23-9201526673.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/23-5746860336.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/24-6327523694.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/24-6844501847.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/25-3614207025.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/25-4697622825.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/26-9949545766.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/26-7616591635.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/27-2639135342.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/27-6952849217.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/28-7714753527.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/28-3311729085.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/29-6374481522.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/29-4008431460.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/30-3433000886.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/30-4740328891.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/31-6880638266.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/31-5118673139.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/32-9407177222.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/32-1256629889.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/33-7486033422.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/33-9642539507.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/34-5960723200.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/34-9078064997.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/35-2391227513.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/35-9771151101.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/36-7167041148.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/36-9439876258.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/37-3800656855.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/37-6667841622.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/38-4968120842.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/38-8232383716.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/39-5397530945.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
 <img class="gallery_img" src="newsletter/news/images/39-8322219380.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/40-8137906947.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/40-7094797733.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/41-4250217503.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/41-6551306388.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/42-4405467894.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/42-1901559757.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/43-202960339.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/43-4793282494.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/44-5118688851.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/44-1517310352.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/45-9332660370.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/45-1163966060.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/46-6712747810.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/46-3662600634.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/47-3577460103.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/47-7409794465.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
<a href="newsletter/news/images/48-5026585585.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
<img class="gallery_img" src="newsletter/news/images/48-1602123144.jpg" alt="img" />
<span class="view_btn"> AC Hockey Ist XI </span>
</a>
				</div>
			</div>
			
			<div class="tab-pane fade<?php echo ($selectedtab =="tab15")?"  show active":"";?>" id="tab15" role="tabpanel" aria-labelledby="tab15-tab">
				<p class="gtitle0">Inter House Cricket Competition (Age Group: U/13) Final Prep School
					<br><span  class="gtitle1">Salahuddin House vs Saigol House</span>
				</p>
				<div id="gallerySLide15" class="sgallery_area4">
					<a href="newsletter/news/images/01-9153651348.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/01-3161707619.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/1-9602745883.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/1-4608846189.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/2-7258428564.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/2-7970090311.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>

<a href="newsletter/news/images/3-9321623273.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/3-1478869137.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/4-9033618811.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/4-5069124428.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/5-2727556850.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/5-4536327755.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/6-2339521355.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/6-5820329943.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/7-2414504829.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/7-493013259.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/8-1034854868.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/8-186791123.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/9-2161829713.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/9-5653508475.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/10-6363285007.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/10-6273617803.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/11-5816802166.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
 <img class="gallery_img" src="newsletter/news/images/11-8275020966.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/12-485672813.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/12-8446649390.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/13-5188923524.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/13-398770866.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/14-4727213288.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/14-2140770199.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/15-436562498.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/15-5283411654.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/16-7773240226.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/16-9154880316.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/17-2848758530.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/17-8049898952.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/18-4059760998.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/18-6182820770.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/19-406621883.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/19-7165361398.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/20-3892212227.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/20-9720967752.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/21-1269390154.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/21-7014128051.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/22-2771662163.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/22-8780473594.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/23-1711721596.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/23-1699635140.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/24-6380263988.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/24-7666438450.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/25-8394377615.jpg" title="Inter House Cricket Competition (Age Group: U/13) Final Prep School">
<img class="gallery_img" src="newsletter/news/images/25-5201612571.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
				</div>
			</div>
			
			<div class="tab-pane fade<?php echo ($selectedtab =="tab16")?"  show active":"";?>" id="tab16" role="tabpanel" aria-labelledby="tab16-tab">
				<p class="gtitle0">Badminton Championship Senior School
					<?php /*?><br><span  class="gtitle1">Title</span><?php */?>
				</p>
				<div id="gallerySLide16" class="sgallery_area4">
					<a href="newsletter/news/images/1-8121139506.jpg" title="Badminton Championship Senior School">
<img class="gallery_img" src="newsletter/news/images/1-7582141687.jpg" alt="img" />
<span class="view_btn"> Badminton Championship </span>
</a>
<a href="newsletter/news/images/2-8691687910.jpg" title="Badminton Championship Senior School">
<img class="gallery_img" src="newsletter/news/images/2-1087206194.jpg" alt="img" />
<span class="view_btn"> Badminton Championship </span>
</a>
<a href="newsletter/news/images/3-3658209790.jpg" title="Badminton Championship Senior School">
<img class="gallery_img" src="newsletter/news/images/3-8165227365.jpg" alt="img" />
<span class="view_btn"> Badminton Championship </span>
</a>
<a href="newsletter/news/images/4-2078598227.jpg" title="Badminton Championship Senior School">
<img class="gallery_img" src="newsletter/news/images/4-1272441449.jpg" alt="img" />
<span class="view_btn"> Badminton Championship </span>
</a>
<a href="newsletter/news/images/5-2061523874.jpg" title="Badminton Championship Senior School">
<img class="gallery_img" src="newsletter/news/images/5-5114959638.jpg" alt="img" />
<span class="view_btn"> Badminton Championship </span>
</a>
<a href="newsletter/news/images/6-5411945330.jpg" title="Badminton Championship Senior School">
<img class="gallery_img" src="newsletter/news/images/6-2747173629.jpg" alt="img" />
<span class="view_btn"> Badminton Championship </span>
</a>
<a href="newsletter/news/images/7-6256881328.jpg" title="Badminton Championship Senior School">
<img class="gallery_img" src="newsletter/news/images/7-7204546593.jpg" alt="img" />
<span class="view_btn"> Badminton Championship </span>
</a>
<a href="newsletter/news/images/8-6324163200.jpg" title="Badminton Championship Senior School">
<img class="gallery_img" src="newsletter/news/images/8-643809701.jpg" alt="img" />
<span class="view_btn"> Badminton Championship </span>
</a>
<a href="newsletter/news/images/9-3783107971.jpg" title="Badminton Championship Senior School">
<img class="gallery_img" src="newsletter/news/images/9-8372041981.jpg" alt="img" />
<span class="view_btn"> Badminton Championship </span>
</a>
<a href="newsletter/news/images/10-8637892217.jpg" title="Badminton Championship Senior School">
<img class="gallery_img" src="newsletter/news/images/10-5463491374.jpg" alt="img" />
<span class="view_btn"> Badminton Championship </span>
</a>
<a href="newsletter/news/images/11-8071171493.jpg" title="Badminton Championship Senior School">
<img class="gallery_img" src="newsletter/news/images/11-6790397301.jpg" alt="img" />
<span class="view_btn"> Badminton Championship </span>
</a>
<a href="newsletter/news/images/12-2432105873.jpg" title="Badminton Championship Senior School">
<img class="gallery_img" src="newsletter/news/images/12-9459435331.jpg" alt="img" />
<span class="view_btn"> Badminton Championship </span>
</a>
<a href="newsletter/news/images/13-9578606937.jpg" title="Badminton Championship Senior School">
<img class="gallery_img" src="newsletter/news/images/13-9102439310.jpg" alt="img" />
<span class="view_btn"> Badminton Championship </span>
</a>
				</div>
			</div>
			
			<div class="tab-pane fade<?php echo ($selectedtab =="tab17")?"  show active":"";?>" id="tab17" role="tabpanel" aria-labelledby="tab17-tab">
				<p class="gtitle0">Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence</p>
                <div id="gallerySLide17" class="sgallery_area4">
                    <a href="../newsletter/news/images/1-9246217363.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/1-1929107109.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/2-9099658284.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/2-9096005958.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/3-4772507876.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/3-5583948281.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/4-8229716872.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/4-6267232674.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/5-4677175664.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/5-8226327992.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/6-1110136893.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/6-8543273022.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/7-1196652972.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/7-2934450109.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/8-1521063027.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/8-3741495106.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/9-3153736556.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/9-2500958316.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/10-6180654883.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/10-1483426548.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/11-2460100006.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/11-5804846159.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/12-4754607227.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/12-8523938575.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/13-8442433576.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/13-1419587914.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/14-9395600179.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/14-7059209491.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/15-4844030293.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/15-7791357139.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/16-5220105392.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/16-4211088060.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/17-3120933761.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/17-9923987192.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/18-532548386.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/18-7174878171.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/19-7829701686.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/19-7379158520.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/20-9649532071.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/20-6600840455.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/21-4608243054.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/21-2134814313.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/22-9208654461.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/22-1932003586.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/23-1784060754.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/23-8731852490.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/24-8002496922.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/24-9149678271.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/25-572209300.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/25-2342922830.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/26-8950228491.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/26-4689818660.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/27-4641005828.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/27-7771274933.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/28-615024772.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/28-9266345501.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/29-2827597986.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/29-4013858493.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/30-3899105983.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/30-3845481707.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/31-297652320.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/31-3963267447.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/32-2901788008.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/32-8415344734.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/33-3599365171.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/33-7467001100.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/34-8756184605.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/34-7107154787.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/35-4921000542.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/35-7629442000.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/36-8080252672.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/36-6564372126.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/37-8356545106.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/37-2207202922.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/38-7947123212.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/38-2484718378.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/39-508882805.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/39-4699752519.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/40-2022883580.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/40-3792583711.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/41-4308272797.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/41-4416999402.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/42-4712210382.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/42-2918981165.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/43-9432240138.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/43-4054370589.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                    <a href="../newsletter/news/images/44-8620376870.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                        <img class="gallery_img" loading="lazy" src="../newsletter/news/images/44-4609650066.jpg" alt="img">
                        <span class="view_btn"> Aitchison Cricket Ist XI </span>
                    </a>
                </div>
			</div>
			
			<div class="tab-pane fade<?php echo ($selectedtab =="tab18")?"  show active":"";?>" id="tab18" role="tabpanel" aria-labelledby="tab18-tab">
				<p class="gtitle0">Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short
					<?php /*?><br><span  class="gtitle1">Title</span><?php */?>
				</p>
				<div id="gallerySLide18" class="sgallery_area4">
					<a href="newsletter/news/images/001-1090723287.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/001-1360722089.jpg" alt="img" />
 <span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/01-4898967138.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/01-5323559194.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/1-2097020677.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/1-2004740372.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/2-8665487337.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/2-9537574102.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/3-8355752668.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/3-27413339.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/4-5478871750.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/4-2688516157.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/5-7163745099.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/5-861855055.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/6-2290985235.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/6-4365784463.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/7-4165233652.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/7-4889886575.jpg" alt="img" />
<span class="view_btn"> </span>
</a>

<a href="newsletter/news/images/8-3141443604.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/8-4076265065.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/9-2746673796.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/9-4843660895.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/10-39060397.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/10-6483335282.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/11-9251460361.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/11-557101422.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/12-2107101784.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/12-2883334877.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/13-2919718044.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/13-9973425852.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/14-3569063461.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/14-7931657698.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/15-3207202361.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/15-2707158933.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/16-7408213492.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/16-1038824233.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/17-9219781243.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/17-5640887686.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/18-5088279420.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/18-3344696947.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/19-6965848004.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/19-9935032392.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/20-7034319597.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/20-3399096748.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/21-7650102987.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/21-7707259199.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/22-4374321408.jpg" title="Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short ">
<img class="gallery_img" src="newsletter/news/images/22-2384105985.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab19")?"  show active":"";?>" id="tab19" role="tabpanel" aria-labelledby="tab19-tab">
				<p class="gtitle0">2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College
					<?php /*?><br><span  class="gtitle1">Title</span><?php */?>
				</p>
				<div id="gallerySLide19" class="sgallery_area4">
					<a href="newsletter/news/images/1-2789866307.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/1-5541389803.jpg" alt="img" />
 <span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/2-2814425745.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/2-8337313361.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/3-4175018073.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/3-5274623036.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/4-1379734627.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/4-7129923964.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/5-3738499303.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/5-97531857.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/6-391084252.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/6-7793160426.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/7-1700109776.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/7-7971354182.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/8-8030549436.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/8-286193645.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/9-3024299004.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/9-9091423429.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/10-4398849877.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/10-9472303034.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/11-9206536339.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/11-4041912031.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/12-9862593995.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/12-9448632838.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/13-1763746624.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/13-2120504582.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/14-4486312915.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/14-2416366689.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/15-3234199092.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/15-1180421574.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/16-1544984959.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/16-1234620681.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/17-1412524241.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/17-1894517590.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/18-3371652690.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/18-8328311869.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/19-960125899.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/19-9668869264.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/20-3690438808.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/20-6716291774.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/21-9929378939.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/21-8871340593.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/22-1623090911.jpg" title="2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/22-9974856035.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
				</div>
			</div>
			
			<div class="tab-pane fade<?php echo ($selectedtab =="tab20")?"  show active":"";?>" id="tab20" role="tabpanel" aria-labelledby="tab20-tab">
				<p class="gtitle0">Aitchison Dominates First Day's Athletics Against Lawrence
					<?php /*?><br><span  class="gtitle1">Title</span><?php */?>
				</p>
				<div id="gallerySLide20" class="sgallery_area4">
					<a href="newsletter/news/images/1-1636836071.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
<img class="gallery_img" src="newsletter/news/images/1-3698123365.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
 <a href="newsletter/news/images/2-2794320703.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
<img class="gallery_img" src="newsletter/news/images/2-2967144022.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/3-5129400598.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
<img class="gallery_img" src="newsletter/news/images/3-4759166994.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/4-1846209825.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
<img class="gallery_img" src="newsletter/news/images/4-8353325820.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/5-9817426898.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
<img class="gallery_img" src="newsletter/news/images/5-4324680732.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/6-2924810745.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
<img class="gallery_img" src="newsletter/news/images/6-9856869948.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/7-8999502582.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
<img class="gallery_img" src="newsletter/news/images/7-836698182.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/8-3358203374.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
<img class="gallery_img" src="newsletter/news/images/8-4624228573.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/9-9264123884.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
<img class="gallery_img" src="newsletter/news/images/9-2279688087.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/10-59773123.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
<img class="gallery_img" src="newsletter/news/images/10-9090400100.jpg" alt="img" />
<span class="view_btn"> </span>
</a>

<a href="newsletter/news/images/11-7964330430.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
<img class="gallery_img" src="newsletter/news/images/11-2314540540.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/12-424479166.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
<img class="gallery_img" src="newsletter/news/images/12-2423277301.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
				</div>
			</div>
			
			<div class="tab-pane fade<?php echo ($selectedtab =="tab21")?"  show active":"";?>" id="tab21" role="tabpanel" aria-labelledby="tab21-tab">
				<p class="gtitle0">Aitchison Ist Basketball Triumph Over Lawrence College
					<?php /*?><br><span  class="gtitle1">Title</span><?php */?>
				</p>
				<div id="gallerySLide21" class="sgallery_area4">
					<a href="newsletter/news/images/001-6550940393.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/001-5042148388.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/01-4531066646.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/01-3663095283.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/1-3067181967.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/1-1923628177.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/2-3329144900.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/2-9009376216.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/3-2201278852.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/3-7408719496.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/4-7025205268.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/4-3078793756.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/5-6938791596.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/5-4402209306.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/6-6655400175.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/6-5819499401.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/7-5399776774.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/7-9172772697.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/8-2631539450.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/8-3168634928.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/9-6748187443.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/9-9513605552.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/10-3426557506.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/10-6806306714.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/11-4155436759.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/11-4459515002.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/12-3774358232.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/12-3583353021.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/13-1967148892.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/13-6276982778.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/14-2806887224.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/14-6014283100.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/15-9149203049.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/15-1982810608.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/16-1293544227.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/16-6792588062.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/17-2054853033.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/17-490400585.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/18-2371896608.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/18-329370138.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/19-7145677326.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/19-9638388799.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/20-9363380162.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/20-1537507185.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/21-9898192395.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/21-6892043521.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/22-5564938812.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/22-541501090.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/23-7155597614.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/23-9498368854.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/24-6803789697.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/24-2005543898.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/25-6600509031.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/25-1219441388.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/26-9212326346.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/26-2581656322.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/27-3609780333.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/27-3024792687.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/28-1539548646.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/28-3772485517.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/29-8926838190.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/29-4727498176.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/30-5497339453.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/30-4033160506.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/31-4325304841.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/31-3313100256.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/32-1547884699.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/32-6478591646.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/33-1938110801.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/33-9962359856.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/34-605561493.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
<img class="gallery_img" src="newsletter/news/images/34-446600779.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab22")?"  show active":"";?>" id="tab22" role="tabpanel" aria-labelledby="tab22-tab">
				<p class="gtitle0">Aitchison and Lawrence College Draw Soccer Nil All
					<?php /*?><br><span  class="gtitle1">Title</span><?php */?>
				</p>
				<div id="gallerySLide22" class="sgallery_area4">
					<a href="newsletter/news/images/001-8858370779.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/001-7233792051.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/01-919822934.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/01-8277499213.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/1-6647021117.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/1-5906694516.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/2-4845928039.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/2-8220515411.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/3-7462581309.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/3-5400066210.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/4-1004284038.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/4-5819857498.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/5-71141626.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/5-4562546535.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/6-9093804206.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/6-7577914936.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/7-4625276689.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/7-4634919206.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/8-9950048845.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/8-7971481673.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/9-6763146087.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/9-1850470016.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/10-8770203988.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/10-3427614212.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/11-2523061840.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
 <img class="gallery_img" src="newsletter/news/images/11-738605992.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/12-3554255838.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/12-3522828486.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/13-7845140146.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/13-9986980741.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/14-2959740738.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/14-6793877748.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/15-3670908959.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/15-8666296968.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/16-8765274693.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/16-3400699934.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/17-5852275456.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/17-580060031.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/18-9717891601.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/18-1164201567.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/19-7827907398.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/19-3287833280.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/20-2721461128.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
 <img class="gallery_img" src="newsletter/news/images/20-1146295261.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/21-1997717533.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/21-7820019091.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/22-8251345803.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/22-3230326746.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/23-9815814699.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/23-3696703120.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/24-8961774867.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/24-3823145409.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/26-4577408606.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/26-5970388719.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/27-2330042383.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/27-537548209.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/28-5008448803.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/28-7428221971.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/29-7624996505.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/29-181006562.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/30-712580106.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
 <img class="gallery_img" src="newsletter/news/images/30-398959556.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/31-5191122013.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/31-8185505948.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/32-812796615.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/32-7364861105.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/33-6602285167.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/33-5461401783.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/34-537819912.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/34-1769230504.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/35-778198237.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/35-839490804.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/36-2355422952.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/36-9608586928.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/37-3432556940.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/37-8694815311.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/38-135334514.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/38-6855564676.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/39-9588886750.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/39-1627873786.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/40-4808246015.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/40-4956284130.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/41-8070104865.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/41-6532732313.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/42-7243966115.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/42-4292189554.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/43-3219716707.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
<img class="gallery_img" src="newsletter/news/images/43-9491149466.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab11")?"  show active":"";?>" id="tab11" role="tabpanel" aria-labelledby="tab11-tab">
				<p class="gtitle0">Aitchison Convincing Winner in Athletics Against Lawrence College</p>
				<div id="gallerySLide11" class="sgallery_area4">
					<a href="newsletter/news/images/1-1161466728.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
<img class="gallery_img" src="newsletter/news/images/1-6220929486.jpg" alt="img" />
<span class="view_btn"> Aitchison Winner in Athletics </span>
</a>
<a href="newsletter/news/images/2-7098538169.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
<img class="gallery_img" src="newsletter/news/images/2-1367219229.jpg" alt="img" />
<span class="view_btn"> Aitchison Winner in Athletics </span>
</a>
<a href="newsletter/news/images/3-5064525479.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
<img class="gallery_img" src="newsletter/news/images/3-9603025427.jpg" alt="img" />
<span class="view_btn"> Aitchison Winner in Athletics </span>
</a>
<a href="newsletter/news/images/4-1860327053.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
<img class="gallery_img" src="newsletter/news/images/4-6558658369.jpg" alt="img" />
<span class="view_btn"> Aitchison Winner in Athletics </span>
</a>
<a href="newsletter/news/images/5-3201039431.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
<img class="gallery_img" src="newsletter/news/images/5-8073363355.jpg" alt="img" />
<span class="view_btn"> Aitchison Winner in Athletics </span>
</a>
<a href="newsletter/news/images/6-5701443007.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
<img class="gallery_img" src="newsletter/news/images/6-4190183012.jpg" alt="img" />
<span class="view_btn"> Aitchison Winner in Athletics </span>
</a>
<a href="newsletter/news/images/7-1647016761.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
<img class="gallery_img" src="newsletter/news/images/7-5784037090.jpg" alt="img" />
<span class="view_btn"> Aitchison Winner in Athletics </span>
</a>
<a href="newsletter/news/images/8-7537061723.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
<img class="gallery_img" src="newsletter/news/images/8-7415971028.jpg" alt="img" />
<span class="view_btn"> Aitchison Winner in Athletics </span>
</a>
<a href="newsletter/news/images/9-104054246.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
<img class="gallery_img" src="newsletter/news/images/9-402739503.jpg" alt="img" />
<span class="view_btn"> Aitchison Winner in Athletics </span>
</a>
<a href="newsletter/news/images/10-2232740265.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
<img class="gallery_img" src="newsletter/news/images/10-6145814277.jpg" alt="img" />
<span class="view_btn"> Aitchison Winner in Athletics </span>
</a>
<a href="newsletter/news/images/11-7595453704.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
<img class="gallery_img" src="newsletter/news/images/11-3162448180.jpg" alt="img" />
<span class="view_btn"> Aitchison Winner in Athletics </span>
</a>
<a href="newsletter/news/images/12-8915767314.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
<img class="gallery_img" src="newsletter/news/images/12-6672293031.jpg" alt="img" />
<span class="view_btn"> Aitchison Winner in Athletics </span>
</a>
<a href="newsletter/news/images/13-7034128756.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
 <img class="gallery_img" src="newsletter/news/images/13-1843541899.jpg" alt="img" />
<span class="view_btn"> Aitchison Winner in Athletics </span>
</a>
<a href="newsletter/news/images/14-9837012990.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
<img class="gallery_img" src="newsletter/news/images/14-5608783434.jpg" alt="img" />
<span class="view_btn"> Aitchison Winner in Athletics </span>
</a>
<a href="newsletter/news/images/15-4018811672.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
<img class="gallery_img" src="newsletter/news/images/15-970511120.jpg" alt="img" />
<span class="view_btn"> Aitchison Winner in Athletics </span>
</a>
<a href="newsletter/news/images/16-9986223601.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
<img class="gallery_img" src="newsletter/news/images/16-3931621299.jpg" alt="img" />
<span class="view_btn"> Aitchison Winner in Athletics </span>
</a>
				</div>
			</div>
			
			<?php /*?>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab5")?"  show active":"";?>" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
				<p class="gtitle0">Title
					<br><span  class="gtitle1">Title</span>
				</p>
				<div id="gallerySLide20" class="sgallery_area4">
					
				</div>
			</div>
			<?php */?>
		</div>
	</div>
	<!-- End Left Area -->


</div>


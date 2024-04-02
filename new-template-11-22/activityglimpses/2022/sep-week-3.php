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
</style>
<div class="row">
	<?php
	$selectedtab="tab1";



    ?>
	<!-- Left Area -->
	<?php /*?>
			<li class="nav-item" role="presentation">
				<button class="nav-link<?php echo ($selectedtab =="tabname")?" active":"";?>" id="tabname-tab" data-bs-toggle="tab" data-bs-target="#tabname" type="button" role="tab" aria-controls="tabname" aria-selected="<?php echo ($selectedtab =="tabname")?"true":"false";?>">Title</button>
			</li>
	
	<?php */?>
	<div class="col-lg-12 col-md-12 col-sm-12">


            <!-- start of accordian -->

            <?php
            if($mobile->isMobile() || true) {
            //if(true) {
            ?>

            <div class="accordion" id="accordionExample" style="width: 100%; margin-left: 5px;margin-top: 10px;margin-right: 9px;">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <p style="font-size: 1rem;"><strong>Show all activities...</strong></p>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="padding: 0">



            <?php } ?>



        <ul class="nav nav-tabs mb-3" id="sportsTab" role="tablist" style="display: flex;">
            <li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab1")?" active":"";?>" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="<?php echo ($selectedtab =="tab1")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Senior Cricket Competition</button>
            </li>
            <li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab8")?" active":"";?>" id="tab8-tab" data-bs-toggle="tab" data-bs-target="#tab8" type="button" role="tab" aria-controls="tab8" aria-selected="<?php echo ($selectedtab =="tab8")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Cricket (LJ Vs Sikander) </button>
            </li>
            <li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab11")?" active":"";?>" id="tab11-tab" data-bs-toggle="tab" data-bs-target="#tab11" type="button" role="tab" aria-controls="tab11" aria-selected="<?php echo ($selectedtab =="tab11")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Cricket (Alamgir vs Tajuddin) </button>
            </li>

			<li class="nav-item btn" role="presentation">
				<button class="nav-link<?php echo ($selectedtab =="tab12")?" active":"";?>" id="tab12-tab" data-bs-toggle="tab" data-bs-target="#tab12" type="button" role="tab" aria-controls="tab12" aria-selected="<?php echo ($selectedtab =="tab12")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Cricket (Godley vs Jinnah) </button>
			</li>
			<li class="nav-item btn" role="presentation">
				<button class="nav-link<?php echo ($selectedtab =="tab15")?" active":"";?>" id="tab15-tab" data-bs-toggle="tab" data-bs-target="#tab15" type="button" role="tab" aria-controls="tab15" aria-selected="<?php echo ($selectedtab =="tab15")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Cricket (Godley vs Leslie Jones) </button>
			</li>
			<li class="nav-item btn" role="presentation">
				<button class="nav-link<?php echo ($selectedtab =="tab16")?" active":"";?>" id="tab16-tab" data-bs-toggle="tab" data-bs-target="#tab16" type="button" role="tab" aria-controls="tab16" aria-selected="<?php echo ($selectedtab =="tab16")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Cricket (Alamgir vs Robinson ) </button>
			</li>
			<?php /*?><li class="nav-item btn" role="presentation">
				<button class="nav-link<?php echo ($selectedtab =="tab13")?" active":"";?>" id="tab13-tab" data-bs-toggle="tab" data-bs-target="#tab13" type="button" role="tab" aria-controls="tab13" aria-selected="<?php echo ($selectedtab =="tab13")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Inter House Cricket</button>
			</li><?php */?>
			<li class="nav-item btn" role="presentation">
				<button class="nav-link<?php echo ($selectedtab =="tab19")?" active":"";?>" id="tab19-tab" data-bs-toggle="tab" data-bs-target="#tab19" type="button" role="tab" aria-controls="tab19" aria-selected="<?php echo ($selectedtab =="tab19")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Cricket Final (Godley vs Alamgir)</button>
			</li>
			<li class="nav-item btn" role="presentation">
				<button class="nav-link<?php echo ($selectedtab =="tab20")?" active":"";?>" id="tab20-tab" data-bs-toggle="tab" data-bs-target="#tab20" type="button" role="tab" aria-controls="tab20" aria-selected="<?php echo ($selectedtab =="tab20")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">AC 1ST XI vs LSE 1ST XI</button>
			</li>
			<li class="nav-item btn" role="presentation">
				<button class="nav-link<?php echo ($selectedtab =="tab2")?" active":"";?>" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="<?php echo ($selectedtab =="tab2")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">SS Basketball</button>
			</li>
			<li class="nav-item btn" role="presentation">
				<button class="nav-link<?php echo ($selectedtab =="tab9")?" active":"";?>" id="tab9-tab" data-bs-toggle="tab" data-bs-target="#tab9" type="button" role="tab" aria-controls="tab9" aria-selected="<?php echo ($selectedtab =="tab9")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Basketball (Balochistan vs Kelly)</button>
			</li>
			<li class="nav-item btn" role="presentation">
				<button class="nav-link<?php echo ($selectedtab =="tab17")?" active":"";?>" id="tab17-tab" data-bs-toggle="tab" data-bs-target="#tab17" type="button" role="tab" aria-controls="tab17" aria-selected="<?php echo ($selectedtab =="tab17")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Inter House Basketball</button>
			</li>
			
			<li class="nav-item btn" role="presentation">
				<button class="nav-link<?php echo ($selectedtab =="tab3")?" active":"";?>" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="<?php echo ($selectedtab =="tab3")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">K6 Football</button>
			</li>
			<li class="nav-item btn" role="presentation">
				<button class="nav-link<?php echo ($selectedtab =="tab14")?" active":"";?>" id="tab14-tab" data-bs-toggle="tab" data-bs-target="#tab14" type="button" role="tab" aria-controls="tab14" aria-selected="<?php echo ($selectedtab =="tab14")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">K6 Football Match</button>
			</li>
			<li class="nav-item btn" role="presentation">
				<button class="nav-link<?php echo ($selectedtab =="tab4")?" active":"";?>" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="<?php echo ($selectedtab =="tab4")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">PS Football Competition</button>
			</li>
			<li class="nav-item btn" role="presentation">
				<button class="nav-link<?php echo ($selectedtab =="tab10")?" active":"";?>" id="tab10-tab" data-bs-toggle="tab" data-bs-target="#tab10" type="button" role="tab" aria-controls="tab10" aria-selected="<?php echo ($selectedtab =="tab10")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Football (Tariq vs Bahawalpur)</button>
			</li>
			
			<li class="nav-item btn" role="presentation">
				<button class="nav-link<?php echo ($selectedtab =="tab7")?" active":"";?>" id="tab7-tab" data-bs-toggle="tab" data-bs-target="#tab7" type="button" role="tab" aria-controls="tab7" aria-selected="<?php echo ($selectedtab =="tab7")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Football (Magsi vs Qasim)</button>
			</li>
			<li class="nav-item btn" role="presentation">
				<button class="nav-link<?php echo ($selectedtab =="tab18")?" active":"";?>" id="tab18-tab" data-bs-toggle="tab" data-bs-target="#tab18" type="button" role="tab" aria-controls="tab18" aria-selected="<?php echo ($selectedtab =="tab18")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Football (Magsi vs Bahawalpur )</button>
			</li>
			<li class="nav-item btn" role="presentation">
				<button class="nav-link<?php echo ($selectedtab =="tab6")?" active":"";?>" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab" aria-controls="tab6" aria-selected="<?php echo ($selectedtab =="tab6")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">PS Hockey</button>
			</li>
			<li class="nav-item btn" role="presentation">
				<button class="nav-link<?php echo ($selectedtab =="tab5")?" active":"";?>" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="tab5" aria-selected="<?php echo ($selectedtab =="tab5")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Urdu Poetry Recitation</button>
			</li>

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
			<div class="tab-pane fade<?php echo ($selectedtab =="tab1")?"  show active":"";?>" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
				<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter House Cricket Competition Senior School
</p>
				<div id="gallerySLide1" class="sgallery_area4">
					<a href="newsletter/news/images/1-5931866187.jpg" title="Inter House Cricket Competition Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/1-4732834969.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/2-5639734325.jpg" title="Inter House Cricket Competition Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/2-9593534505.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/3-6816147222.jpg" title="Inter House Cricket Competition Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/3-3308561622.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/4-8896874490.jpg" title="Inter House Cricket Competition Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/4-2056619396.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/5-4067369311.jpg" title="Inter House Cricket Competition Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/5-8188676027.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					 </a>
					<a href="newsletter/news/images/6-9150914137.jpg" title="Inter House Cricket Competition Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/6-9027357776.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/7-2463827045.jpg" title="Inter House Cricket Competition Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/7-2639684233.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/8-5206312982.jpg" title="Inter House Cricket Competition Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/8-3097806280.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/9-3394932320.jpg" title="Inter House Cricket Competition Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/9-1260164864.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/10-1696056505.jpg" title="Inter House Cricket Competition Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/10-8084333548.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/11-5436415040.jpg" title="Inter House Cricket Competition Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/11-9696955478.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/12-2967468123.jpg" title="Inter House Cricket Competition Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/12-9626679163.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/13-3169096748.jpg" title="Inter House Cricket Competition Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/13-8938049845.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/14-7517212075.jpg" title="Inter House Cricket Competition Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/14-8718466340.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/15-3812565317.jpg" title="Inter House Cricket Competition Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/15-5265916778.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/16-5360326818.jpg" title="Inter House Cricket Competition Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/16-7605301550.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/17-6007587631.jpg" title="Inter House Cricket Competition Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/17-4426349779.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/18-625580710.jpg" title="Inter House Cricket Competition Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/18-5482584459.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/19-9169951612.jpg" title="Inter House Cricket Competition Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/19-8752165333.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/20-5108968058.jpg" title="Inter House Cricket Competition Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/20-6528212526.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab2")?"  show active":"";?>" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
				<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter House Basketball Competition Senior School<?php /*?><br><span style="font-size: 1.2rem">Balochistan House vs Kelly House</span><?php */?></p>
				<div id="gallerySLide2" class="sgallery_area4">
					<a href="newsletter/news/images/1-7891538992.jpg" title="Inter House Basketball Competition">
					<img class="gallery_img" src="newsletter/news/images/1-4471354827.jpg" alt="img" />
					<span class="view_btn"> Basketball Competition </span>
					</a>
					<a href="newsletter/news/images/2-3640453693.jpg" title="Inter House Basketball Competition">
					<img class="gallery_img" src="newsletter/news/images/2-788329899.jpg" alt="img" />
					<span class="view_btn"> Basketball Competition </span>
					</a>
					<a href="newsletter/news/images/3-2026184070.jpg" title="Inter House Basketball Competition">
					<img class="gallery_img" src="newsletter/news/images/3-6344508984.jpg" alt="img" />
					<span class="view_btn"> Basketball Competition </span>
					</a>
					 <a href="newsletter/news/images/4-7041909999.jpg" title="Inter House Basketball Competition">
					<img class="gallery_img" src="newsletter/news/images/4-3108975519.jpg" alt="img" />
					<span class="view_btn"> Basketball Competition </span>
					</a>
					<a href="newsletter/news/images/5-7146148060.jpg" title="Inter House Basketball Competition">
					<img class="gallery_img" src="newsletter/news/images/5-3068149890.jpg" alt="img" />
					<span class="view_btn"> Basketball Competition </span>
					</a>
					<a href="newsletter/news/images/6-1012461687.jpg" title="Inter House Basketball Competition">
					<img class="gallery_img" src="newsletter/news/images/6-351709342.jpg" alt="img" />
					<span class="view_btn"> Basketball Competition </span>
					</a>
					<a href="newsletter/news/images/7-2053375859.jpg" title="Inter House Basketball Competition">
					<img class="gallery_img" src="newsletter/news/images/7-4595978989.jpg" alt="img" />
					<span class="view_btn"> Basketball Competition </span>
					</a>
					<a href="newsletter/news/images/8-2778046499.jpg" title="Inter House Basketball Competition">
					<img class="gallery_img" src="newsletter/news/images/8-1534170014.jpg" alt="img" />
					<span class="view_btn"> Basketball Competition </span>
					</a>
					<a href="newsletter/news/images/9-5166223605.jpg" title="Inter House Basketball Competition">
					<img class="gallery_img" src="newsletter/news/images/9-8490630840.jpg" alt="img" />
					<span class="view_btn"> Basketball Competition </span>
					</a>
					<a href="newsletter/news/images/10-5787658204.jpg" title="Inter House Basketball Competition">
					<img class="gallery_img" src="newsletter/news/images/10-4991546926.jpg" alt="img" />
					<span class="view_btn"> Basketball Competition </span>
					</a>
					<a href="newsletter/news/images/11-3007867294.jpg" title="Inter House Basketball Competition">
					<img class="gallery_img" src="newsletter/news/images/11-8239369141.jpg" alt="img" />
					<span class="view_btn"> Basketball Competition </span>
					</a>
					<a href="newsletter/news/images/12-5675740690.jpg" title="Inter House Basketball Competition">
					<img class="gallery_img" src="newsletter/news/images/12-2930564620.jpg" alt="img" />
					<span class="view_btn"> Basketball Competition </span>
					</a>

					<a href="newsletter/news/images/13-5349911802.jpg" title="Inter House Basketball Competition">
					<img class="gallery_img" src="newsletter/news/images/13-7806093746.jpg" alt="img" />
					<span class="view_btn"> Basketball Competition </span>
					</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab3")?"  show active":"";?>" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
				<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter House Football Match K6
</p>
				<div id="gallerySLide3" class="sgallery_area4">
					<a href="newsletter/news/images/1-4081568263.jpg" title="Inter House Football Match K6">
					<img class="gallery_img" src="newsletter/news/images/1-5544034709.jpg" alt="img" />
					<span class="view_btn"> Football Match K6 </span>
					</a>
					<a href="newsletter/news/images/2-3613259046.jpg" title="Inter House Football Match K6">
					<img class="gallery_img" src="newsletter/news/images/2-4599582274.jpg" alt="img" />
					<span class="view_btn"> Football Match K6 </span>
					</a>
					<a href="newsletter/news/images/3-6887971935.jpg" title="Inter House Football Match K6">
					<img class="gallery_img" src="newsletter/news/images/3-3198800784.jpg" alt="img" />
					<span class="view_btn"> Football Match K6 </span>
					</a>
					<a href="newsletter/news/images/4-5410306845.jpg" title="Inter House Football Match K6">
					<img class="gallery_img" src="newsletter/news/images/4-3930714621.jpg" alt="img" />
					<span class="view_btn"> Football Match K6 </span>
					</a>
					<a href="newsletter/news/images/5-1977704223.jpg" title="Inter House Football Match K6">
					<img class="gallery_img" src="newsletter/news/images/5-2640874927.jpg" alt="img" />
					<span class="view_btn"> Football Match K6 </span>
					</a>
					<a href="newsletter/news/images/6-5307258030.jpg" title="Inter House Football Match K6">
					<img class="gallery_img" src="newsletter/news/images/6-7945456959.jpg" alt="img" />
					<span class="view_btn"> Football Match K6 </span>
					</a>
					<a href="newsletter/news/images/7-1622318652.jpg" title="Inter House Football Match K6">
					<img class="gallery_img" src="newsletter/news/images/7-3537064805.jpg" alt="img" />
					<span class="view_btn"> Football Match K6 </span>
					</a>
					<a href="newsletter/news/images/8-5496506412.jpg" title="Inter House Football Match K6">
					<img class="gallery_img" src="newsletter/news/images/8-348116971.jpg" alt="img" />
					<span class="view_btn"> Football Match K6 </span>
					</a>
					<a href="newsletter/news/images/9-750365587.jpg" title="Inter House Football Match K6">
					<img class="gallery_img" src="newsletter/news/images/9-4737854962.jpg" alt="img" />
					<span class="view_btn"> Football Match K6 </span>
					</a>
					<a href="newsletter/news/images/10-2654560624.jpg" title="Inter House Football Match K6">
					<img class="gallery_img" src="newsletter/news/images/10-3069685415.jpg" alt="img" />
					<span class="view_btn"> Football Match K6 </span>
					</a>
					<a href="newsletter/news/images/11-4722498555.jpg" title="Inter House Football Match K6">
					<img class="gallery_img" src="newsletter/news/images/11-9311022108.jpg" alt="img" />
					<span class="view_btn"> Football Match K6 </span>
					</a>
					<a href="newsletter/news/images/12-3763103367.jpg" title="Inter House Football Match K6">
					<img class="gallery_img" src="newsletter/news/images/12-6281500186.jpg" alt="img" />
					<span class="view_btn"> Football Match K6 </span>
					</a>
					 <a href="newsletter/news/images/13-3696643721.jpg" title="Inter House Football Match K6">
					<img class="gallery_img" src="newsletter/news/images/13-1258117722.jpg" alt="img" />
					<span class="view_btn"> Football Match K6 </span>
					</a>
					<a href="newsletter/news/images/14-8957327683.jpg" title="Inter House Football Match K6">
					<img class="gallery_img" src="newsletter/news/images/14-2730002986.jpg" alt="img" />
					<span class="view_btn"> Football Match K6 </span>
					</a>
					<a href="newsletter/news/images/15-7891007091.jpg" title="Inter House Football Match K6">
					<img class="gallery_img" src="newsletter/news/images/15-5215578474.jpg" alt="img" />
					<span class="view_btn"> Football Match K6 </span>
					</a>
					<a href="newsletter/news/images/16-4304114888.jpg" title="Inter House Football Match K6">
					<img class="gallery_img" src="newsletter/news/images/16-350164289.jpg" alt="img" />
					<span class="view_btn"> Football Match K6 </span>
					</a>
					<a href="newsletter/news/images/17-3825903932.jpg" title="Inter House Football Match K6">
					<img class="gallery_img" src="newsletter/news/images/17-5902383824.jpg" alt="img" />
					<span class="view_btn"> Football Match K6 </span>
					</a>
					<a href="newsletter/news/images/18-6563568179.jpg" title="Inter House Football Match K6">
					<img class="gallery_img" src="newsletter/news/images/18-6089521118.jpg" alt="img" />
					<span class="view_btn"> Football Match K6 </span>
					</a>
					<a href="newsletter/news/images/19-8916803859.jpg" title="Inter House Football Match K6">
					<img class="gallery_img" src="newsletter/news/images/19-7334209477.jpg" alt="img" />
					<span class="view_btn"> Football Match K6 </span>
					</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab4")?"  show active":"";?>" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
				<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter House Football Competition (Over/13) Prep School</p>
				<div id="gallerySLide4" class="sgallery_area4">
					<a href="newsletter/news/images/1-4739173985.jpg" title="Inter House Football Competition (Over/13) Prep School">
					<img class="gallery_img" src="newsletter/news/images/1-8394631428.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/2-2554056538.jpg" title="Inter House Football Competition (Over/13) Prep School">
					<img class="gallery_img" src="newsletter/news/images/2-3443084778.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/3-2721965588.jpg" title="Inter House Football Competition (Over/13) Prep School">
					<img class="gallery_img" src="newsletter/news/images/3-64151273.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/4-8150202140.jpg" title="Inter House Football Competition (Over/13) Prep School">
					<img class="gallery_img" src="newsletter/news/images/4-3948489097.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/5-8208415727.jpg" title="Inter House Football Competition (Over/13) Prep School">
					<img class="gallery_img" src="newsletter/news/images/5-7762307434.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/6-7075999453.jpg" title="Inter House Football Competition (Over/13) Prep School">
					<img class="gallery_img" src="newsletter/news/images/6-787446073.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/7-1314293887.jpg" title="Inter House Football Competition (Over/13) Prep School">
					<img class="gallery_img" src="newsletter/news/images/7-9073333143.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/8-753342615.jpg" title="Inter House Football Competition (Over/13) Prep School">
					<img class="gallery_img" src="newsletter/news/images/8-6096575611.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/9-6788113613.jpg" title="Inter House Football Competition (Over/13) Prep School">
					<img class="gallery_img" src="newsletter/news/images/9-9769137483.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/10-9012262877.jpg" title="Inter House Football Competition (Over/13) Prep School">
					<img class="gallery_img" src="newsletter/news/images/10-480035738.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/11-1695692309.jpg" title="Inter House Football Competition (Over/13) Prep School">
					<img class="gallery_img" src="newsletter/news/images/11-9676737514.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/12-3445904916.jpg" title="Inter House Football Competition (Over/13) Prep School">
					<img class="gallery_img" src="newsletter/news/images/12-2213240005.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/13-3500678051.jpg" title="Inter House Football Competition (Over/13) Prep School">
					<img class="gallery_img" src="newsletter/news/images/13-1216550094.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/14-755679762.jpg" title="Inter House Football Competition (Over/13) Prep School">
					<img class="gallery_img" src="newsletter/news/images/14-6262257344.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/15-6165040375.jpg" title="Inter House Football Competition (Over/13) Prep School">
					<img class="gallery_img" src="newsletter/news/images/15-1418111760.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab5")?"  show active":"";?>" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
				<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter House Urdu poetry recitation Senior School</p>
				<div id="gallerySLide5" class="sgallery_area4">
					<a href="newsletter/news/images/1-3366189868.jpeg" title="Inter House Urdu poetry recitation Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/1-9741232948.jpeg" alt="img" />
					<span class="view_btn"> Urdu poetry recitation </span>
					</a>
					<a href="newsletter/news/images/11-3495482803.jpeg" title="Inter House Urdu poetry recitation Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/11-4426515106.jpeg" alt="img" />
					<span class="view_btn"> Urdu poetry recitation </span>
					</a>
					<a href="newsletter/news/images/3-4271662645.jpeg" title="Inter House Urdu poetry recitation Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/3-613478979.jpeg" alt="img" />
					<span class="view_btn"> Urdu poetry recitation </span>
					</a>
					<a href="newsletter/news/images/12-1372689054.jpeg" title="Inter House Urdu poetry recitation Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/12-5921061126.jpeg" alt="img" />
					<span class="view_btn"> Urdu poetry recitation </span>
					</a>
					<a href="newsletter/news/images/5-9321528464.jpeg" title="Inter House Urdu poetry recitation Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/5-2867834371.jpeg" alt="img" />
					<span class="view_btn"> Urdu poetry recitation </span>
					</a>
					<a href="newsletter/news/images/9-2371618896.jpeg" title="Inter House Urdu poetry recitation Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/9-5373701574.jpeg" alt="img" />
					<span class="view_btn"> Urdu poetry recitation </span>
					</a>
					<a href="newsletter/news/images/7-3981332104.jpeg" title="Inter House Urdu poetry recitation Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/7-2163094990.jpeg" alt="img" />
					<span class="view_btn"> Urdu poetry recitation </span>
					</a>
					<a href="newsletter/news/images/8-7088067611.jpeg" title="Inter House Urdu poetry recitation Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/8-9772743858.jpeg" alt="img" />
					<span class="view_btn"> Urdu poetry recitation </span>
					</a>
					<a href="newsletter/news/images/6-8046491977.jpeg" title="Inter House Urdu poetry recitation Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/6-1016817871.jpeg" alt="img" />
					<span class="view_btn"> Urdu poetry recitation </span>
					</a>
					<a href="newsletter/news/images/10-9468601984.jpeg" title="Inter House Urdu poetry recitation Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/10-9912823035.jpeg" alt="img" />
					<span class="view_btn"> Urdu poetry recitation </span>
					</a>
					<a href="newsletter/news/images/2-4824314183.jpeg" title="Inter House Urdu poetry recitation Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/2-9340199132.jpeg" alt="img" />
					<span class="view_btn"> Urdu poetry recitation </span>
					</a>
					<a href="newsletter/news/images/4-3110359030.jpeg" title="Inter House Urdu poetry recitation Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/4-5369738134.jpeg" alt="img" />
					<span class="view_btn"> Urdu poetry recitation </span>
					</a>
					<a href="newsletter/news/images/13-9751459586.jpeg" title="Inter House Urdu poetry recitation Senior School 13 Sep 2022">
					<img class="gallery_img" src="newsletter/news/images/13-6501402041.jpeg" alt="img" />
					<span class="view_btn"> Urdu poetry recitation </span>
					</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab6")?"  show active":"";?>" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
				<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Hockey Practice Match Prep School<br><span style="font-size: 1.2rem;">AC Colts Probables vs FG Model School

</span>
</p>
				<div id="gallerySLide6" class="sgallery_area4">
					<a href="newsletter/news/images/1-6540419437.jpg" title="Hockey Practice Match Prep School">
					<img class="gallery_img" src="newsletter/news/images/1-429277180.jpg" alt="img" />
					<span class="view_btn"> Hockey Practice Match </span>
					</a>
					<a href="newsletter/news/images/2-4289657918.jpg" title="Hockey Practice Match Prep School">
					<img class="gallery_img" src="newsletter/news/images/2-1603837315.jpg" alt="img" />
					<span class="view_btn"> Hockey Practice Match </span>
					</a>
					<a href="newsletter/news/images/3-6849272935.jpg" title="Hockey Practice Match Prep School">
					<img class="gallery_img" src="newsletter/news/images/3-5757737628.jpg" alt="img" />
					<span class="view_btn"> Hockey Practice Match </span>
					</a>
					<a href="newsletter/news/images/4-9619671940.jpg" title="Hockey Practice Match Prep School">
					<img class="gallery_img" src="newsletter/news/images/4-4972687829.jpg" alt="img" />
					<span class="view_btn"> Hockey Practice Match </span>
					</a>
					<a href="newsletter/news/images/5-3234228023.jpg" title="Hockey Practice Match Prep School">
					<img class="gallery_img" src="newsletter/news/images/5-5676236726.jpg" alt="img" />
					<span class="view_btn"> Hockey Practice Match </span>
					</a>
					<a href="newsletter/news/images/6-7911036825.jpg" title="Hockey Practice Match Prep School">
					<img class="gallery_img" src="newsletter/news/images/6-4256865552.jpg" alt="img" />
					<span class="view_btn"> Hockey Practice Match </span>
					</a>
					<a href="newsletter/news/images/7-2179975021.jpg" title="Hockey Practice Match Prep School">
					<img class="gallery_img" src="newsletter/news/images/7-8011617283.jpg" alt="img" />
					<span class="view_btn"> Hockey Practice Match </span>
					</a>
					<a href="newsletter/news/images/8-4167891017.jpg" title="Hockey Practice Match Prep School">
					<img class="gallery_img" src="newsletter/news/images/8-5687600513.jpg" alt="img" />
					<span class="view_btn"> Hockey Practice Match </span>
					</a>
					<a href="newsletter/news/images/9-72332274.jpg" title="Hockey Practice Match Prep School">
					<img class="gallery_img" src="newsletter/news/images/9-8807355390.jpg" alt="img" />
					<span class="view_btn"> Hockey Practice Match </span>
					</a>
					<a href="newsletter/news/images/10-9020864671.jpg" title="Hockey Practice Match Prep School">
					<img class="gallery_img" src="newsletter/news/images/10-6104396069.jpg" alt="img" />
					<span class="view_btn"> Hockey Practice Match </span>
					</a>
					<a href="newsletter/news/images/11-5288073131.jpg" title="Hockey Practice Match Prep School">
					<img class="gallery_img" src="newsletter/news/images/11-9864568416.jpg" alt="img" />
					<span class="view_btn"> Hockey Practice Match </span>
					</a>
					<a href="newsletter/news/images/12-4534119228.jpg" title="Hockey Practice Match Prep School">
					<img class="gallery_img" src="newsletter/news/images/12-2253623705.jpg" alt="img" />
					<span class="view_btn"> Hockey Practice Match </span>
					</a>
					<a href="newsletter/news/images/13-2556360870.jpg" title="Hockey Practice Match Prep School">
					<img class="gallery_img" src="newsletter/news/images/13-9136990650.jpg" alt="img" />
					<span class="view_btn"> Hockey Practice Match </span>
					</a>
					<a href="newsletter/news/images/14-3700486243.jpg" title="Hockey Practice Match Prep School">
					<img class="gallery_img" src="newsletter/news/images/14-415620210.jpg" alt="img" />
					<span class="view_btn"> Hockey Practice Match </span>
					</a>
					<a href="newsletter/news/images/15-9588271121.jpg" title="Hockey Practice Match Prep School">
					<img class="gallery_img" src="newsletter/news/images/15-4061275860.jpg" alt="img" />
					<span class="view_btn"> Hockey Practice Match </span>
					</a>
					<a href="newsletter/news/images/16-1574478947.jpg" title="Hockey Practice Match Prep School">
					<img class="gallery_img" src="newsletter/news/images/16-9252168735.jpg" alt="img" />
					<span class="view_btn"> Hockey Practice Match </span>
					</a>
					<a href="newsletter/news/images/17-64594810.jpg" title="Hockey Practice Match Prep School">
					<img class="gallery_img" src="newsletter/news/images/17-6623523861.jpg" alt="img" />
					<span class="view_btn"> Hockey Practice Match </span>
					</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab7")?"  show active":"";?>" id="tab7" role="tabpanel" aria-labelledby="tab7-tab">
				<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter House Football Competition<br><span style="font-size: 1.2rem;">Magsi House vs Qasim House </span>
</p>
				<div id="gallerySLide7" class="sgallery_area4">
					<a href="newsletter/news/images/1-3742177928.jpg" title="Inter House Football Competition">
					<img class="gallery_img" src="newsletter/news/images/1-5443763259.jpg" alt="img" />
					<span class="view_btn"> Football Competition </span>
					</a>
					<a href="newsletter/news/images/2-2389295898.jpg" title="Inter House Football Competition">
					<img class="gallery_img" src="newsletter/news/images/2-4340624177.jpg" alt="img" />
					<span class="view_btn"> Football Competition </span>
					</a>
					<a href="newsletter/news/images/3-1788922566.jpg" title="Inter House Football Competition">
					<img class="gallery_img" src="newsletter/news/images/3-565283388.jpg" alt="img" />
					<span class="view_btn"> Football Competition </span>
					</a>
					<a href="newsletter/news/images/4-6468595371.jpg" title="Inter House Football Competition">
					<img class="gallery_img" src="newsletter/news/images/4-1490587243.jpg" alt="img" />
					<span class="view_btn"> Football Competition </span>
					</a>
					<a href="newsletter/news/images/5-9524020292.jpg" title="Inter House Football Competition">
					<img class="gallery_img" src="newsletter/news/images/5-7004370622.jpg" alt="img" />
					<span class="view_btn"> Football Competition </span>
					</a>
					<a href="newsletter/news/images/6-7894805042.jpg" title="Inter House Football Competition">
					<img class="gallery_img" src="newsletter/news/images/6-493950527.jpg" alt="img" />
					<span class="view_btn"> Football Competition </span>
					</a>
					<a href="newsletter/news/images/7-589663826.jpg" title="Inter House Football Competition">
					<img class="gallery_img" src="newsletter/news/images/7-5479557160.jpg" alt="img" />
					<span class="view_btn"> Football Competition </span>
					</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab8")?"  show active":"";?>" id="tab8" role="tabpanel" aria-labelledby="tab8-tab">
				<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter House Cricket Competition<br><span style="font-size: 1.2rem">Leslie Jones House vs Sikander House

</span>
</p>
				<div id="gallerySLide8" class="sgallery_area4">
					<a href="newsletter/news/images/1-9209909248.jpg" title="Inter House Cricket Competition ">
					<img class="gallery_img" src="newsletter/news/images/1-1303735484.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/2-2280462657.jpg" title="Inter House Cricket Competition ">
					<img class="gallery_img" src="newsletter/news/images/2-396775582.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/3-3420997947.jpg" title="Inter House Cricket Competition ">
					<img class="gallery_img" src="newsletter/news/images/3-7317084880.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/4-6062908416.jpg" title="Inter House Cricket Competition ">
					<img class="gallery_img" src="newsletter/news/images/4-1967997056.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/5-9697703600.jpg" title="Inter House Cricket Competition ">
					<img class="gallery_img" src="newsletter/news/images/5-7684864644.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/6-1363223792.jpg" title="Inter House Cricket Competition ">
					<img class="gallery_img" src="newsletter/news/images/6-8284818742.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/7-1611673603.jpg" title="Inter House Cricket Competition ">
					<img class="gallery_img" src="newsletter/news/images/7-4687372824.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/8-7697188837.jpg" title="Inter House Cricket Competition ">
					<img class="gallery_img" src="newsletter/news/images/8-3211843750.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/9-9355037066.jpg" title="Inter House Cricket Competition ">
					<img class="gallery_img" src="newsletter/news/images/9-1190663697.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/10-2827254376.jpg" title="Inter House Cricket Competition ">
					<img class="gallery_img" src="newsletter/news/images/10-6430908466.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/11-9645271193.jpg" title="Inter House Cricket Competition ">
					<img class="gallery_img" src="newsletter/news/images/11-2749043690.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/12-2859991382.jpg" title="Inter House Cricket Competition ">
					<img class="gallery_img" src="newsletter/news/images/12-3949906981.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/13-4824271753.jpg" title="Inter House Cricket Competition ">
					<img class="gallery_img" src="newsletter/news/images/13-6824316761.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/14-1742335985.jpg" title="Inter House Cricket Competition ">
					<img class="gallery_img" src="newsletter/news/images/14-1171242216.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/15-3201308806.jpg" title="Inter House Cricket Competition ">
					<img class="gallery_img" src="newsletter/news/images/15-9233701599.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
					<a href="newsletter/news/images/16-2030766615.jpg" title="Inter House Cricket Competition ">
					<img class="gallery_img" src="newsletter/news/images/16-2400047943.jpg" alt="img" />
					<span class="view_btn"> Cricket Competition </span>
					</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab9")?"  show active":"";?>" id="tab9" role="tabpanel" aria-labelledby="tab9-tab">
				<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter House Basketball Competition Senior School<br><span style="font-size: 1.2rem">Balochistan House vs Kelly House</span>
</p>
				<div id="gallerySLide9" class="sgallery_area4">
					<a href="newsletter/news/images/1-8138313327.jpg" title="Inter House Basketball Competition Senior School">
					<img class="gallery_img" src="newsletter/news/images/1-3868337699.jpg" alt="img" />
					<span class="view_btn"> Inter House Basketball </span>
					</a>
					<a href="newsletter/news/images/2-1108701047.jpg" title="Inter House Basketball Competition Senior School">
					<img class="gallery_img" src="newsletter/news/images/2-7396620808.jpg" alt="img" />
					<span class="view_btn"> Inter House Basketball </span>
					</a>
					<a href="newsletter/news/images/3-8457930090.jpg" title="Inter House Basketball Competition Senior School">
					<img class="gallery_img" src="newsletter/news/images/3-6214493982.jpg" alt="img" />
					<span class="view_btn"> Inter House Basketball </span>
					</a>
					<a href="newsletter/news/images/4-7412657485.jpg" title="Inter House Basketball Competition Senior School">
					<img class="gallery_img" src="newsletter/news/images/4-816392818.jpg" alt="img" />
					<span class="view_btn"> Inter House Basketball </span>
					</a>
					<a href="newsletter/news/images/5-5931609891.jpg" title="Inter House Basketball Competition Senior School">
					<img class="gallery_img" src="newsletter/news/images/5-4115121026.jpg" alt="img" />
					<span class="view_btn"> Inter House Basketball </span>
					</a>
					<a href="newsletter/news/images/6-4581331125.jpg" title="Inter House Basketball Competition Senior School">
					<img class="gallery_img" src="newsletter/news/images/6-8009529011.jpg" alt="img" />
					<span class="view_btn"> Inter House Basketball </span>
					</a>
					<a href="newsletter/news/images/7-5717069486.jpg" title="Inter House Basketball Competition Senior School">
					<img class="gallery_img" src="newsletter/news/images/7-6494149417.jpg" alt="img" />
					<span class="view_btn"> Inter House Basketball </span>
					</a>
					<a href="newsletter/news/images/8-3120670144.jpg" title="Inter House Basketball Competition Senior School">
					<img class="gallery_img" src="newsletter/news/images/8-7608222951.jpg" alt="img" />
					<span class="view_btn"> Inter House Basketball </span>
					</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab10")?"  show active":"";?>" id="tab10" role="tabpanel" aria-labelledby="tab10-tab">
				<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter House Football Competition (Over/13)
<br><span style="font-size: 1.2rem">Tariq House vs Bahawalpur House

</span></p>
				<div id="gallerySLide10" class="sgallery_area4">
					<a href="newsletter/news/images/1-2313831299.jpg" title="Inter House Football Competition (Over/13)">
					<img class="gallery_img" src="newsletter/news/images/1-6000300865.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/2-9603488118.jpg" title="Inter House Football Competition (Over/13)">
					<img class="gallery_img" src="newsletter/news/images/2-6283080025.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/3-4763352780.jpg" title="Inter House Football Competition (Over/13)">
					<img class="gallery_img" src="newsletter/news/images/3-2457037187.jpg" alt="img" />
					 <span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/4-3985738737.jpg" title="Inter House Football Competition (Over/13)">
					<img class="gallery_img" src="newsletter/news/images/4-5417748465.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/5-9992241586.jpg" title="Inter House Football Competition (Over/13)">
					<img class="gallery_img" src="newsletter/news/images/5-506934687.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/6-7609109743.jpg" title="Inter House Football Competition (Over/13)">
					<img class="gallery_img" src="newsletter/news/images/6-3844164453.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/7-203004980.jpg" title="Inter House Football Competition (Over/13)">
					<img class="gallery_img" src="newsletter/news/images/7-2789300341.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/8-8548810005.jpg" title="Inter House Football Competition (Over/13)">
					<img class="gallery_img" src="newsletter/news/images/8-6185790823.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
					<a href="newsletter/news/images/9-1045025636.jpg" title="Inter House Football Competition (Over/13)">
					<img class="gallery_img" src="newsletter/news/images/9-6072302892.jpg" alt="img" />
					<span class="view_btn"> Inter House Football </span>
					</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab11")?"  show active":"";?>" id="tab11" role="tabpanel" aria-labelledby="tab11-tab">
				<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter House Cricket Competition Senior School<br><span style="font-size: 1.2rem">Alamgir House vs Tajuddin House</span></p>
				<div id="gallerySLide11" class="sgallery_area4">
					<a href="newsletter/news/images/1-8929846924.jpg" title="Inter House Cricket Competition (Open)">
<img class="gallery_img" src="newsletter/news/images/1-6116822299.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/2-2128476269.jpg" title="Inter House Cricket Competition (Open)">
<img class="gallery_img" src="newsletter/news/images/2-4801892543.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/3-6277564682.jpg" title="Inter House Cricket Competition (Open)">
<img class="gallery_img" src="newsletter/news/images/3-3957760389.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/4-4720075557.jpg" title="Inter House Cricket Competition (Open)">
<img class="gallery_img" src="newsletter/news/images/4-6132768156.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/5-9295134727.jpg" title="Inter House Cricket Competition (Open)">
<img class="gallery_img" src="newsletter/news/images/5-9319935096.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/6-2262215400.jpg" title="Inter House Cricket Competition (Open)">
<img class="gallery_img" src="newsletter/news/images/6-7942295381.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/7-5453645979.jpg" title="Inter House Cricket Competition (Open)">
<img class="gallery_img" src="newsletter/news/images/7-5845445147.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/8-4861744145.jpg" title="Inter House Cricket Competition (Open)">
<img class="gallery_img" src="newsletter/news/images/8-4171178097.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/9-2889478575.jpg" title="Inter House Cricket Competition (Open)">
<img class="gallery_img" src="newsletter/news/images/9-4220818141.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/10-951713764.jpg" title="Inter House Cricket Competition (Open)">
<img class="gallery_img" src="newsletter/news/images/10-8619872103.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/18-2695258702.jpg" title="Inter House Cricket Competition (Open)">
<img class="gallery_img" src="newsletter/news/images/18-7914141467.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/12-6298317800.jpg" title="Inter House Cricket Competition (Open)">
<img class="gallery_img" src="newsletter/news/images/12-6676208661.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/13-8016632695.jpg" title="Inter House Cricket Competition (Open)">
<img class="gallery_img" src="newsletter/news/images/13-6564044573.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/14-142755377.jpg" title="Inter House Cricket Competition (Open)">
<img class="gallery_img" src="newsletter/news/images/14-2562772580.jpg" alt="img" />
 <span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/15-8049870687.jpg" title="Inter House Cricket Competition (Open)">
<img class="gallery_img" src="newsletter/news/images/15-5138069299.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/16-6079374135.jpg" title="Inter House Cricket Competition (Open)">
<img class="gallery_img" src="newsletter/news/images/16-7369441528.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/17-5290942929.jpg" title="Inter House Cricket Competition (Open)">
<img class="gallery_img" src="newsletter/news/images/17-973825479.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/19-5083520036.jpg" title="Inter House Cricket Competition (Open)">
<img class="gallery_img" src="newsletter/news/images/19-55377281.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/11-6275351642.jpg" title="Inter House Cricket Competition (Open)">
<img class="gallery_img" src="newsletter/news/images/11-2232194170.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span></a>
					
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab12")?"  show active":"";?>" id="tab12" role="tabpanel" aria-labelledby="tab12-tab">
				<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter House Cricket Competition Senior School
<br><span style="font-size: 1.2rem">Godley House vs Jinnah House
				</p>
				<div id="gallerySLide12" class="sgallery_area4">
					<a href="newsletter/news/images/1-328005296.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/1-5660652400.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/2-9083295354.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/2-7006340328.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/3-762022899.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/3-3243382655.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/4-716996446.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/4-8420669050.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/5-4912252225.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/5-7878758428.jpg" alt="img" />
 <span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/6-9745004501.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/6-9939735484.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/7-4765911236.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/7-8567129336.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/8-553077257.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/8-2633800430.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/9-7107070569.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/9-6823972242.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/10-3765373165.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/10-2058456827.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/11-3074224680.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/11-2161509192.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/12-1300071416.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/12-5110255365.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/13-4575410435.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/13-7944396216.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/14-7961986412.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/14-6979594597.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/15-1634144815.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/15-7567927837.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/16-8149699230.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/16-4616206926.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/17-2583204522.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/17-9809144548.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/18-5369209081.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/18-5609178505.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/19-1287173543.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/19-8134043087.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/27-6041489604.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/27-4006683790.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/21-4055292112.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/21-5598125274.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/22-9012189240.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/22-9357360452.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/23-2628672190.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/23-8669627246.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/24-4183059475.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/24-5134166966.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/25-4120515437.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/25-8941989511.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/26-3588501298.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/26-8261417467.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/20-9176752721.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/20-2257308462.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/28-6164056170.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/28-8993235437.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/29-8289061229.jpg" title="Inter House Cricket Competition Senior School">
<img class="gallery_img" src="newsletter/news/images/29-704183402.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
				</div>
			</div>
			<?php /*?><div class="tab-pane fade<?php echo ($selectedtab =="tab13")?"  show active":"";?>" id="tab13" role="tabpanel" aria-labelledby="tab13-tab">
				<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter House Cricket Competition Senior School</p>
				<div id="gallerySLide13" class="sgallery_area4">
					<a href="newsletter/news/images/1-7129072098.jpg" title="Inter House Cricket Competition Alamgir House vs Tajuddin House">
					<img class="gallery_img" src="newsletter/news/images/1-4994334975.jpg" alt="img" />
					<span class="view_btn"> Inter House Cricket </span>
					</a>
					<a href="newsletter/news/images/2-7367701871.jpg" title="Inter House Cricket Competition Alamgir House vs Tajuddin House">
					<img class="gallery_img" src="newsletter/news/images/2-1448992504.jpg" alt="img" />
					<span class="view_btn"> Inter House Cricket </span>
					</a>
					<a href="newsletter/news/images/3-684695754.jpg" title="Inter House Cricket Competition Alamgir House vs Tajuddin House">
					<img class="gallery_img" src="newsletter/news/images/3-2817824468.jpg" alt="img" />
					<span class="view_btn"> Inter House Cricket </span>
					</a>
					<a href="newsletter/news/images/4-8686151076.jpg" title="Inter House Cricket Competition Alamgir House vs Tajuddin House">
					<img class="gallery_img" src="newsletter/news/images/4-9711706926.jpg" alt="img" />
					<span class="view_btn"> Inter House Cricket </span>
					</a>
					<a href="newsletter/news/images/5-3410030424.jpg" title="Inter House Cricket Competition Alamgir House vs Tajuddin House">
					<img class="gallery_img" src="newsletter/news/images/5-6971662314.jpg" alt="img" />
					<span class="view_btn"> Inter House Cricket </span>
					</a>
					<a href="newsletter/news/images/6-2245613639.jpg" title="Inter House Cricket Competition Alamgir House vs Tajuddin House">
					<img class="gallery_img" src="newsletter/news/images/6-2896609407.jpg" alt="img" />
					<span class="view_btn"> Inter House Cricket </span>
					</a>
					<a href="newsletter/news/images/7-3100936236.jpg" title="Inter House Cricket Competition Alamgir House vs Tajuddin House">
					<img class="gallery_img" src="newsletter/news/images/7-8957458468.jpg" alt="img" />
					<span class="view_btn"> Inter House Cricket </span>
					</a>
					<a href="newsletter/news/images/8-4181638254.jpg" title="Inter House Cricket Competition Alamgir House vs Tajuddin House">
					<img class="gallery_img" src="newsletter/news/images/8-6524296451.jpg" alt="img" />
					<span class="view_btn"> Inter House Cricket </span>
					</a>
					<a href="newsletter/news/images/9-1170727364.jpg" title="Inter House Cricket Competition Alamgir House vs Tajuddin House">
					<img class="gallery_img" src="newsletter/news/images/9-1898956259.jpg" alt="img" />
					<span class="view_btn"> Inter House Cricket </span>
					</a>
					<a href="newsletter/news/images/10-6320797263.jpg" title="Inter House Cricket Competition Alamgir House vs Tajuddin House">
					<img class="gallery_img" src="newsletter/news/images/10-3059474946.jpg" alt="img" />
					<span class="view_btn"> Inter House Cricket </span>
					</a>
					<a href="newsletter/news/images/11-7792986509.jpg" title="Inter House Cricket Competition Alamgir House vs Tajuddin House">
					<img class="gallery_img" src="newsletter/news/images/11-2721562409.jpg" alt="img" />
					<span class="view_btn"> Inter House Cricket </span>
					</a>
					<a href="newsletter/news/images/12-4294971983.jpg" title="Inter House Cricket Competition Alamgir House vs Tajuddin House">
					<img class="gallery_img" src="newsletter/news/images/12-9873243523.jpg" alt="img" />
					<span class="view_btn"> Inter House Cricket </span>
					</a>
					<a href="newsletter/news/images/13-2371272081.jpg" title="Inter House Cricket Competition Alamgir House vs Tajuddin House">
					<img class="gallery_img" src="newsletter/news/images/13-5245115915.jpg" alt="img" />
					<span class="view_btn"> Inter House Cricket </span>
					</a>
					 <a href="newsletter/news/images/14-8428449067.jpg" title="Inter House Cricket Competition Alamgir House vs Tajuddin House">
					<img class="gallery_img" src="newsletter/news/images/14-2728266922.jpg" alt="img" />
					<span class="view_btn"> Inter House Cricket </span>
					</a>
					<a href="newsletter/news/images/15-8710868771.jpg" title="Inter House Cricket Competition Alamgir House vs Tajuddin House">
					<img class="gallery_img" src="newsletter/news/images/15-4829731562.jpg" alt="img" />
					<span class="view_btn"> Inter House Cricket </span>
					</a>
					<a href="newsletter/news/images/16-8047062674.jpg" title="Inter House Cricket Competition Alamgir House vs Tajuddin House">
					<img class="gallery_img" src="newsletter/news/images/16-3330741971.jpg" alt="img" />
					<span class="view_btn"> Inter House Cricket </span>
					</a>
					<a href="newsletter/news/images/17-370792128.jpg" title="Inter House Cricket Competition Alamgir House vs Tajuddin House">
					<img class="gallery_img" src="newsletter/news/images/17-9503178053.jpg" alt="img" />
					<span class="view_btn"> Inter House Cricket </span>
					</a>
				</div>
			</div><?php */?>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab14")?"  show active":"";?>" id="tab14" role="tabpanel" aria-labelledby="tab14-tab">
				<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter House Football Match K6</p>
				<div id="gallerySLide14" class="sgallery_area4">
					<a href="newsletter/news/images/1-4465344196.jpg" title="Inter House Football Match K6">
<img class="gallery_img" src="newsletter/news/images/1-1880313995.jpg" alt="img" />
<span class="view_btn"> Football Match K6 </span>
</a>
<a href="newsletter/news/images/2-5966083896.jpg" title="Inter House Football Match K6">
<img class="gallery_img" src="newsletter/news/images/2-2033797319.jpg" alt="img" />
<span class="view_btn"> Football Match K6 </span>
</a>
<a href="newsletter/news/images/3-3187778897.jpg" title="Inter House Football Match K6">
<img class="gallery_img" src="newsletter/news/images/3-6159757590.jpg" alt="img" />
<span class="view_btn"> Football Match K6 </span>
</a>
<a href="newsletter/news/images/4-2499590945.jpg" title="Inter House Football Match K6">
<img class="gallery_img" src="newsletter/news/images/4-1880027426.jpg" alt="img" />
<span class="view_btn"> Football Match K6 </span>
</a>
<a href="newsletter/news/images/5-4345487123.jpg" title="Inter House Football Match K6">
<img class="gallery_img" src="newsletter/news/images/5-9321301147.jpg" alt="img" />
<span class="view_btn"> Football Match K6 </span>
</a>
<a href="newsletter/news/images/6-1226833095.jpg" title="Inter House Football Match K6">
<img class="gallery_img" src="newsletter/news/images/6-8003988872.jpg" alt="img" />
<span class="view_btn"> Football Match K6 </span>
</a>
<a href="newsletter/news/images/7-5707997410.jpg" title="Inter House Football Match K6">
<img class="gallery_img" src="newsletter/news/images/7-3984130978.jpg" alt="img" />
<span class="view_btn"> Football Match K6 </span>
</a>
<a href="newsletter/news/images/8-2137191897.jpg" title="Inter House Football Match K6">
<img class="gallery_img" src="newsletter/news/images/8-4274478714.jpg" alt="img" />
<span class="view_btn"> Football Match K6 </span>
</a>
<a href="newsletter/news/images/9-8893896037.jpg" title="Inter House Football Match K6">
<img class="gallery_img" src="newsletter/news/images/9-4131087928.jpg" alt="img" />
<span class="view_btn"> Football Match K6 </span>
</a>
<a href="newsletter/news/images/10-6334877497.jpg" title="Inter House Football Match K6">
<img class="gallery_img" src="newsletter/news/images/10-9821937451.jpg" alt="img" />
<span class="view_btn"> Football Match K6 </span>
</a>
<a href="newsletter/news/images/11-7744405610.jpg" title="Inter House Football Match K6">
<img class="gallery_img" src="newsletter/news/images/11-7327472369.jpg" alt="img" />
<span class="view_btn"> Football Match K6 </span>
</a>
<a href="newsletter/news/images/12-3553786180.jpg" title="Inter House Football Match K6">
<img class="gallery_img" src="newsletter/news/images/12-620669972.jpg" alt="img" />
<span class="view_btn"> Football Match K6 </span>
</a>
<a href="newsletter/news/images/13-4552722201.jpg" title="Inter House Football Match K6">
<img class="gallery_img" src="newsletter/news/images/13-9343237493.jpg" alt="img" />
<span class="view_btn"> Football Match K6 </span>
</a>
<a href="newsletter/news/images/14-5080327479.jpg" title="Inter House Football Match K6">
<img class="gallery_img" src="newsletter/news/images/14-7800768952.jpg" alt="img" />
<span class="view_btn"> Football Match K6 </span>
</a>
<a href="newsletter/news/images/15-8795415011.jpg" title="Inter House Football Match K6">
<img class="gallery_img" src="newsletter/news/images/15-3586272874.jpg" alt="img" />
<span class="view_btn"> Football Match K6 </span>
</a>
<a href="newsletter/news/images/16-702278232.jpg" title="Inter House Football Match K6">
<img class="gallery_img" src="newsletter/news/images/16-8839689889.jpg" alt="img" />
<span class="view_btn"> Football Match K6 </span>
</a>
<a href="newsletter/news/images/17-1351657097.jpg" title="Inter House Football Match K6">
<img class="gallery_img" src="newsletter/news/images/17-3663138250.jpg" alt="img" />
<span class="view_btn"> Football Match K6 </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab15")?"  show active":"";?>" id="tab15" role="tabpanel" aria-labelledby="tab15-tab">
				<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter House Cricket Competition<br><span style="font-size: 1.2rem">Godley House vs Leslie Jones House</span></p>
				<div id="gallerySLide15" class="sgallery_area4">
					<a href="newsletter/news/images/1-1088375698.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/1-4393917421.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/2-4223195942.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/2-6608322330.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/3-3532174468.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/3-9470074864.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/4-6575340401.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/4-7237442720.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/5-4262435403.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/5-2205481773.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/6-950047862.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/6-9771370304.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/7-889613948.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/7-9479801521.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/8-2824199043.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/8-5779523007.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/9-9045839250.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/9-7549131074.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/10-1925752402.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/10-6902767619.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/11-4838338065.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/11-7789783597.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/12-7146913181.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/12-3634489804.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/13-451205836.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/13-8128754286.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/14-9388226742.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/14-8062406918.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/15-7134356372.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/15-5856101196.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/16-6189375633.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/16-8446544337.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/17-7559362363.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/17-5764187024.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/18-6286321549.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/18-5302627370.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/19-8912847266.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/19-3570347671.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>

<a href="newsletter/news/images/20-4313030603.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/20-9658677876.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/21-9623784176.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/21-4776480586.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/22-4323804080.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/22-4102169677.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/23-5873805523.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/23-6817725449.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/24-6479550130.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/24-9321547412.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/25-1056933030.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/25-6029416334.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/26-8385648548.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/26-9595612760.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/27-6485058332.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/27-4031305952.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/28-8587000468.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/28-7335943083.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/29-6290783503.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/29-5066676976.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/30-3040104806.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/30-2838744259.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/31-2161299555.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/31-504362300.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/32-8494133404.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/32-3509835610.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/33-5524918108.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/33-1457058220.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/34-5020158192.jpg" title="Inter House Cricket Competition Godley House vs Leslie Jones House">
<img class="gallery_img" src="newsletter/news/images/34-3423507037.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab16")?"  show active":"";?>" id="tab16" role="tabpanel" aria-labelledby="tab16-tab">
				<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter House Cricket Competition<br><span style="font-size: 1.2rem">Alamgir House vs Robinson House</span></p>
				<div id="gallerySLide16" class="sgallery_area4">
					<a href="newsletter/news/images/1-4935895638.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/1-1275054597.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/2-4558393667.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/2-7964871270.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/3-3533879998.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/3-1851995144.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/4-2325536364.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/4-4445463381.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/5-2456328221.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/5-1413242911.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/6-8946298170.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/6-3575632569.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/7-5478564250.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/7-2874822935.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/8-1195728541.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/8-5938812274.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/9-5435020424.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/9-3773640359.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/10-8031008670.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/10-2261648968.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/11-38263407.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/11-8749140852.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/12-3451281019.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/12-8445546506.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/13-8345637519.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/13-3006748930.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/14-3073547611.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/14-1646826269.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/15-3713682241.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/15-5971631236.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/16-1094755953.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/16-9338913651.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/17-1489451812.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/17-2124363696.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/18-9018570005.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/18-4064002160.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/19-1941517774.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/19-814536530.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/20-7906681562.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/20-3567158185.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/21-1956710032.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/21-6613301178.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/22-9387957744.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/22-4929898085.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/23-271049183.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/23-4794769378.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/24-5296273794.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/24-9303237365.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/25-616105373.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/25-5779313983.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/26-7668497275.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/26-1760903440.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/27-2149813026.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/27-9892531103.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/28-8739477859.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/28-1142429909.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/29-4723612124.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/29-5485055822.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/30-2897575687.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/30-1543281037.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/31-1437706696.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/31-2076819281.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/32-1030144599.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/32-9917979542.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/33-3117778313.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/33-3932865658.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/34-7817967542.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/34-7016128834.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/35-3876919463.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/35-29091462.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/36-4934872943.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/36-442372682.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/37-8959124374.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/37-8555751766.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/38-7570120044.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/38-6069391280.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/39-2913123784.jpg" title="Inter House Cricket Competition">
 <img class="gallery_img" src="newsletter/news/images/39-8072515330.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/40-167869240.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/40-4830413648.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/41-5568514534.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/41-3614453301.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/42-2848996334.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/42-2998795298.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/43-7952437740.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/43-6922992273.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/44-2914909927.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/44-157468526.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/45-7980031939.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/45-5640766457.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/46-2330346731.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/46-87780892.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/47-7492375344.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/47-1112790473.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
<a href="newsletter/news/images/48-2134767215.jpg" title="Inter House Cricket Competition">
<img class="gallery_img" src="newsletter/news/images/48-3606500530.jpg" alt="img" />
<span class="view_btn"> Inter House Cricket </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab17")?"  show active":"";?>" id="tab17" role="tabpanel" aria-labelledby="tab17-tab">
				<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter House Basketball Competition<br><span style="font-size: 1.2rem">Jinnah House vs Ghazi House<br>Babar House vs Tajuddin House<br>K & N House vs Goldstein House</span></p>
				<div id="gallerySLide17" class="sgallery_area4">
					<a href="newsletter/news/images/1-5094377192.jpg" title="Inter House Basketball Competition">
<img class="gallery_img" src="newsletter/news/images/1-9935462160.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/2-3547760304.jpg" title="Inter House Basketball Competition">
<img class="gallery_img" src="newsletter/news/images/2-9040114627.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/3-4174798348.jpg" title="Inter House Basketball Competition">
<img class="gallery_img" src="newsletter/news/images/3-4988656697.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/4-881827614.jpg" title="Inter House Basketball Competition">
<img class="gallery_img" src="newsletter/news/images/4-6073006400.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/5-1219437822.jpg" title="Inter House Basketball Competition">
<img class="gallery_img" src="newsletter/news/images/5-9377504660.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/6-5547864017.jpg" title="Inter House Basketball Competition">
<img class="gallery_img" src="newsletter/news/images/6-2841947964.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/7-182743699.jpg" title="Inter House Basketball Competition">
<img class="gallery_img" src="newsletter/news/images/7-4460645319.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/8-6795100928.jpg" title="Inter House Basketball Competition">
<img class="gallery_img" src="newsletter/news/images/8-5182025314.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/9-9836062994.jpg" title="Inter House Basketball Competition">
<img class="gallery_img" src="newsletter/news/images/9-4485170044.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/10-4407951009.jpg" title="Inter House Basketball Competition">
<img class="gallery_img" src="newsletter/news/images/10-3747040224.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/11-117775323.jpg" title="Inter House Basketball Competition">
<img class="gallery_img" src="newsletter/news/images/11-9216917004.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/12-6005472969.jpg" title="Inter House Basketball Competition">
<img class="gallery_img" src="newsletter/news/images/12-6263243098.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/13-7065092771.jpg" title="Inter House Basketball Competition">
<img class="gallery_img" src="newsletter/news/images/13-9625980453.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/14-9167995923.jpg" title="Inter House Basketball Competition">
<img class="gallery_img" src="newsletter/news/images/14-5880439689.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/15-7450000087.jpg" title="Inter House Basketball Competition">
<img class="gallery_img" src="newsletter/news/images/15-8948300279.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/16-7850123058.jpg" title="Inter House Basketball Competition">
<img class="gallery_img" src="newsletter/news/images/16-695098032.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
				</div>
			</div>			
			<div class="tab-pane fade<?php echo ($selectedtab =="tab18")?"  show active":"";?>" id="tab18" role="tabpanel" aria-labelledby="tab18-tab">
				<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter House Football Competition (Over/13) Prep School<br><span style="font-size: 1.2rem">Magsi House vs Bahawalpur House</span></p>
				<div id="gallerySLide18" class="sgallery_area4">
					<a href="newsletter/news/images/1-1714985594.jpg" title="Inter House Football Competition (Over/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/1-5588549321.jpg" alt="img" />
<span class="view_btn"> Inter House Football </span>
</a>
<a href="newsletter/news/images/2-5110082027.jpg" title="Inter House Football Competition (Over/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/2-5143222407.jpg" alt="img" />
<span class="view_btn"> Inter House Football </span>
</a>
<a href="newsletter/news/images/3-5595797497.jpg" title="Inter House Football Competition (Over/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/3-6295847646.jpg" alt="img" />
<span class="view_btn"> Inter House Football </span>
</a>
<a href="newsletter/news/images/4-9409232378.jpg" title="Inter House Football Competition (Over/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/4-5138465825.jpg" alt="img" />
<span class="view_btn"> Inter House Football </span>
</a>
<a href="newsletter/news/images/5-5937076132.jpg" title="Inter House Football Competition (Over/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/5-4902013258.jpg" alt="img" />
<span class="view_btn"> Inter House Football </span>
</a>
<a href="newsletter/news/images/6-5393473195.jpg" title="Inter House Football Competition (Over/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/6-9116319548.jpg" alt="img" />
<span class="view_btn"> Inter House Football </span>
</a>
<a href="newsletter/news/images/7-6424128041.jpg" title="Inter House Football Competition (Over/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/7-8757884860.jpg" alt="img" />
<span class="view_btn"> Inter House Football </span>
</a>
<a href="newsletter/news/images/8-8730945724.jpg" title="Inter House Football Competition (Over/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/8-6351714706.jpg" alt="img" />
<span class="view_btn"> Inter House Football </span>
</a>
<a href="newsletter/news/images/9-6458426752.jpg" title="Inter House Football Competition (Over/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/9-1892348329.jpg" alt="img" />
<span class="view_btn"> Inter House Football </span>
</a>
<a href="newsletter/news/images/10-1559119064.jpg" title="Inter House Football Competition (Over/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/10-3866922244.jpg" alt="img" />
<span class="view_btn"> Inter House Football </span>
</a>
<a href="newsletter/news/images/11-4031775978.jpg" title="Inter House Football Competition (Over/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/11-2564252455.jpg" alt="img" />
<span class="view_btn"> Inter House Football </span>
</a>
<a href="newsletter/news/images/12-6352772427.jpg" title="Inter House Football Competition (Over/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/12-841892312.jpg" alt="img" />
<span class="view_btn"> Inter House Football </span>
</a>
<a href="newsletter/news/images/13-7773670948.jpg" title="Inter House Football Competition (Over/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/13-1869677136.jpg" alt="img" />
<span class="view_btn"> Inter House Football </span>
</a>
<a href="newsletter/news/images/14-4843853151.jpg" title="Inter House Football Competition (Over/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/14-2909467394.jpg" alt="img" />
<span class="view_btn"> Inter House Football </span>
</a>
<a href="newsletter/news/images/15-5116430637.jpg" title="Inter House Football Competition (Over/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/15-4892400278.jpg" alt="img" />
<span class="view_btn"> Inter House Football </span>
</a>
<a href="newsletter/news/images/16-922047609.jpg" title="Inter House Football Competition (Over/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/16-1634984637.jpg" alt="img" />
<span class="view_btn"> Inter House Football </span>
</a>
<a href="newsletter/news/images/17-3702194172.jpg" title="Inter House Football Competition (Over/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/17-7956216785.jpg" alt="img" />
<span class="view_btn"> Inter House Football </span>
</a>
<a href="newsletter/news/images/18-9119702165.jpg" title="Inter House Football Competition (Over/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/18-308125690.jpg" alt="img" />
<span class="view_btn"> Inter House Football </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab19")?"  show active":"";?>" id="tab19" role="tabpanel" aria-labelledby="tab19-tab">
				<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Godley wins thrilling house Cricket final against brave Alamgir<?php /*?>
<br><span style="font-size: 1.2rem">Title1</span><?php */?></p>
				<div id="gallerySLide19" class="sgallery_area4">
					<a href="newsletter/news/images/1-1252589245.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/1-1022819542.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/46-2677527487.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/46-2467894249.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/48-8137895659.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/48-2694412313.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/45-6970260029.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/45-4617753353.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/3-8409086620.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/3-7813549363.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/4-941477832.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/4-7454767209.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/5-3144183727.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/5-3612131788.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/6-5387200302.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/6-693863190.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/7-2777969019.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/7-9199202741.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/8-79199772.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/8-1068084915.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/9-2491005681.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/9-5497442034.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/10-2261912810.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/10-4409031693.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/11-9825411623.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/11-1431750970.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/12-2719958881.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/12-5003051335.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/13-3637100682.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/13-5154935647.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/14-7405302626.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/14-9335672145.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/15-8611120279.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/15-2449142586.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/16-4271928314.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/16-8604349793.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/17-9098211730.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/17-1515321097.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/18-252780161.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/18-2272377064.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/19-3803463417.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/19-5852488250.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/20-5316917551.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/20-1642166838.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/21-410338035.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/21-5389775715.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/22-1544418225.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/22-4307412802.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/23-6796937164.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/23-1185996230.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/24-656145071.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/24-6507974024.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/25-3953704664.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/25-5701306219.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
 <a href="newsletter/news/images/26-6809923584.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/26-5912844258.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/27-7612789868.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/27-3552773217.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/28-5743757685.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/28-1760106839.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/29-3900097392.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/29-8605923267.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/30-4550078767.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/30-7704274549.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/31-2019524294.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/31-4050144455.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/32-7675194150.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/32-1002664889.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/33-4041279883.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/33-8227396784.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/34-2867998906.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
 <img class="gallery_img" src="newsletter/news/images/34-4650151137.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/35-8643528838.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/35-8416589275.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/36-2145381495.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/36-3747977898.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/37-698871490.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/37-3406057770.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/38-3648924897.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/38-8296051366.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/39-6378928042.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/39-1794843262.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/40-7879191817.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/40-5425290730.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/41-5387987433.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/41-3426880111.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/42-6100859348.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/42-6247171469.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/43-5540142420.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/43-2058662882.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
<a href="newsletter/news/images/44-6882866559.jpg" title="Godley wins thrilling house Cricket final against brave Alamgir">
<img class="gallery_img" src="newsletter/news/images/44-3789401247.jpg" alt="img" />
<span class="view_btn"> Godley wins thrilling final </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab20")?"  show active":"";?>" id="tab20" role="tabpanel" aria-labelledby="tab20-tab">
				<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">AITCHISON 1ST XI WINS 30 OVER THRILLER AGAINST LSE 1ST XI
<?php /*?><br><span style="font-size: 1.2rem">Title1</span><?php */?></p>
				<div id="gallerySLide20" class="sgallery_area4">
					<a href="newsletter/news/images/75n_4992-1684962661.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/75n_4992-8894324081.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/75n_4989-8072217332.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/75n_4989-476923888.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/75n_4999-7116003403.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/75n_4999-1525362136.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/75n_5025-2377313321.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/75n_5025-181360076.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/75n_5036-6350622378.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/75n_5036-8228595553.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/75n_5044-5753517565.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/75n_5044-9843189203.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/75n_5091-6122362766.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/75n_5091-9577405361.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/75n_5317-6262490356.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/75n_5317-1916097561.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/75n_5335-7970093651.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/75n_5335-880821881.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/75n_5359-6870893535.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/75n_5359-2814212940.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/75n_5400-2135290090.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/75n_5400-2045292716.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/75n_5405-4115293332.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/75n_5405-7684778518.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/75n_5428-8723787937.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/75n_5428-4591945957.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/75n_5438-9375556261.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/75n_5438-7033495836.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/75n_5441-6220524387.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/75n_5441-3460509252.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/75n_5459-4888065583.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/75n_5459-229186280.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_8886-9680594403.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_8886-377261111.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_8902-7482732746.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_8902-2285362718.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_8907-7520975454.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_8907-3954028922.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_8927-6078840001.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_8927-2123927012.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9015-8024608546.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9015-1288793521.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9023-1301337857.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9023-1194258584.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9056-3041147291.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9056-1225432292.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9064-8808754881.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9064-9442350213.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9066-2190438287.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9066-9369550346.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9075-1216782252.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9075-1300466337.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9076-5627191276.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9076-479441951.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9115-4685234071.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9115-8155488843.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9119-4999832765.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9119-9712251797.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9122-2545162418.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9122-2026086892.jpg" alt="img" />
<span class="view_btn"> </span>
</a>

<a href="newsletter/news/images/emb_9125-2028816509.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9125-5420643149.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9132-9201427605.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9132-7285913509.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_8929-9048917591.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_8929-4551271502.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_8933-7032664782.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_8933-3812709491.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_8954-7534268241.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_8954-9032933816.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_8977-2805529043.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_8977-1904140648.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_8982-1905287267.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_8982-1120603067.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_8983-5473028668.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_8983-9768589452.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_8991-2367434579.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_8991-5257396670.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9141-5598552543.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9141-3241140649.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9146-5824625612.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9146-5140956115.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9150-8484266208.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9150-9469682061.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9165-3586436055.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9165-433760339.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9167-8999932932.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9167-9891940135.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9171-6511134850.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9171-3618157793.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9174-922015260.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9174-9437034969.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9181-4957589333.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9181-3562621036.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9183-2534345009.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9183-6963612308.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9224-7969772742.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9224-887199519.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9231-708746553.jpg" title="">
 <img class="gallery_img" src="newsletter/news/images/emb_9231-6716396692.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9262-1943415354.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9262-8046980283.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9265-433605021.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9265-543289510.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9274-9234243182.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9274-8723179208.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9290-7643313450.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9290-541432922.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9303-9736934473.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9303-2268832886.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9305-5563278391.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9305-9310051835.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9321-4113844901.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9321-7201458617.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9327-4441567464.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9327-7670308280.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/emb_9338-8112227339.jpg" title="">
<img class="gallery_img" src="newsletter/news/images/emb_9338-7547032638.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
				</div>
			</div>
			<?php /*?>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab5")?"  show active":"";?>" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
				<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Title<br><span style="font-size: 1.2rem">Title1</span></p>
				<div id="gallerySLide20" class="sgallery_area4">
					
				</div>
			</div>
			<?php */?>
		</div>
	</div>
	<!-- End Left Area -->


</div>

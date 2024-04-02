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
</style>
<div class="row">
	<?php
	$selectedtab="tab2";
	$selectedtab="tab14";


    ?>
	<!-- Left Area -->	
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
                <button class="nav-link<?php echo ($selectedtab =="tab14")?" active":"";?>" id="tab14-tab" data-bs-toggle="tab" data-bs-target="#tab14" type="button" role="tab" aria-controls="tab14" aria-selected="<?php echo ($selectedtab =="tab14")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">5<sup>th</sup> Aitchison  Junior National Tennis Championship</button>
            </li>
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab18")?" active":"";?>" id="tab18-tab" data-bs-toggle="tab" data-bs-target="#tab18" type="button" role="tab" aria-controls="tab18" aria-selected="<?php echo ($selectedtab =="tab18")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">1<sup>st</sup> Aitchison National Fastest Man Competition 2022</button>
            </li>			
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab2")?" active":"";?>" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="<?php echo ($selectedtab =="tab2")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Cricket Match Prep School</button>
            </li>
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab3")?" active":"";?>" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="<?php echo ($selectedtab =="tab3")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Cricket Match U13</button>
            </li>
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab12")?" active":"";?>" id="tab12-tab" data-bs-toggle="tab" data-bs-target="#tab12" type="button" role="tab" aria-controls="tab12" aria-selected="<?php echo ($selectedtab =="tab12")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Tape Ball Cricket Matches</button>
            </li>
            <li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab1")?" active":"";?>" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="<?php echo ($selectedtab =="tab1")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Football Match (AC vs Defence College)</button>
            </li>

            <?php /*
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab9")?" active":"";?>" id="tab9-tab" data-bs-toggle="tab" data-bs-target="#tab9" type="button" role="tab" aria-controls="tab9" aria-selected="<?php echo ($selectedtab =="tab9")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Football Match Senior School</button>
            </li>

			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab16")?" active":"";?>" id="tab16-tab" data-bs-toggle="tab" data-bs-target="#tab16" type="button" role="tab" aria-controls="tab16" aria-selected="<?php echo ($selectedtab =="tab16")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Football Match Prep School</button>
            </li>
			
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab4")?" active":"";?>" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="<?php echo ($selectedtab =="tab4")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Hockey Match (Prep & Junior)</button>
            </li>


			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab17")?" active":"";?>" id="tab17-tab" data-bs-toggle="tab" data-bs-target="#tab17" type="button" role="tab" aria-controls="tab17" aria-selected="<?php echo ($selectedtab =="tab17")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Hockey Competition Prep School</button>
            </li>
			
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab5")?" active":"";?>" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="tab5" aria-selected="<?php echo ($selectedtab =="tab5")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Basketball Competition Over 13</button>
            </li>

			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab10")?" active":"";?>" id="tab10-tab" data-bs-toggle="tab" data-bs-target="#tab10" type="button" role="tab" aria-controls="tab10" aria-selected="<?php echo ($selectedtab =="tab10")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Basketball Semi Final (Jubilee vs Godley)</button>
            </li>

            */?>

            <li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab7")?" active":"";?>" id="tab7-tab" data-bs-toggle="tab" data-bs-target="#tab7" type="button" role="tab" aria-controls="tab7" aria-selected="<?php echo ($selectedtab =="tab7")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Basketball Competition 2<sup>nd</sup> Round</button>
            </li>

			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab11")?" active":"";?>" id="tab11-tab" data-bs-toggle="tab" data-bs-target="#tab11" type="button" role="tab" aria-controls="tab11" aria-selected="<?php echo ($selectedtab =="tab11")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Basketball Semi Final (Kelly  vs LJ)</button>
            </li>			
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab13")?" active":"";?>" id="tab13-tab" data-bs-toggle="tab" data-bs-target="#tab13" type="button" role="tab" aria-controls="tab13" aria-selected="<?php echo ($selectedtab =="tab13")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Basketball Final (Kelly  vs Godley)</button>
            </li>
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab8")?" active":"";?>" id="tab8-tab" data-bs-toggle="tab" data-bs-target="#tab8" type="button" role="tab" aria-controls="tab8" aria-selected="<?php echo ($selectedtab =="tab8")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">English Recitation (M2)</button>
            </li>
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab15")?" active":"";?>" id="tab15-tab" data-bs-toggle="tab" data-bs-target="#tab15" type="button" role="tab" aria-controls="tab15" aria-selected="<?php echo ($selectedtab =="tab15")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">English Recitation</button>
            </li>
			
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab6")?" active":"";?>" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab" aria-controls="tab6" aria-selected="<?php echo ($selectedtab =="tab6")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Debating Championship</button>
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
				<p class="gtitle0">Football Practice Match Senior School
<br><span  class="gtitle1">AC U/16 vs Defence Degree College U/16

</span></p>
				<div id="gallerySLide1" class="sgallery_area4">
					<a href="newsletter/news/images/1-7621628490.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/1-8911783982.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/2-1492307902.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/2-988567559.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/3-4475189355.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/3-6371581612.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/4-9460032080.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/4-8844002386.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/5-8761431510.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/5-5427309305.jpg" alt="img" />
 <span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/6-2238134119.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/6-8483509812.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/7-7794559319.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/7-3255420711.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/8-5239903131.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/8-9796423009.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/9-1436964948.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/9-9933225639.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/10-257558581.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/10-2203420182.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/11-6812633877.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/11-4624116826.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/12-171505073.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/12-7274478148.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/13-8680598177.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/13-9180076250.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/14-3533744821.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/14-7988550052.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/15-9326344519.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/15-404451846.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/16-4888038333.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/16-8850633793.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/17-5862558984.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/17-177963384.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/18-266915917.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/18-9722696767.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/19-1489174091.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/19-2167923233.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/20-523718815.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/20-3125970490.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/21-2077183319.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/21-1441093263.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab2")?"  show active":"";?>" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
				<p class="gtitle0">Cricket Practice Match Prep School</p>
				<div id="gallerySLide2" class="sgallery_area4">
					<a href="newsletter/news/images/1-4155761267.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/1-8523650378.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/2-4882959660.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/2-7982830257.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/3-9179591672.jpg" title="Cricket Practice Match Prep School">
 <img class="gallery_img" src="newsletter/news/images/3-5575043428.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/4-9671013068.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/4-920280035.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/5-4843317019.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/5-1829009877.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/6-3236643302.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/6-4206108862.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/7-1040317092.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/7-7943434456.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/8-4423784658.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/8-9464784774.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/9-477856880.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/9-2095603682.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/10-8675499820.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/10-6585756691.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/11-9603646761.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/11-7535092880.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/12-1014511543.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/12-1341812158.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/13-368809551.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/13-8581213723.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/14-3029771323.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/14-9984867284.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/15-9233186984.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/15-2617431562.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/16-642795121.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/16-3049342285.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/17-8431321103.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/17-4262104716.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/18-5940853862.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/18-6255487375.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/19-6021640873.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/19-8328841286.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/20-4387254853.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/20-5868641699.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/21-692008820.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/21-4245745985.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab3")?"  show active":"";?>" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
				<p class="gtitle0">Cricket Practice Match U/13 Probables Prep School</p>
				<div id="gallerySLide3" class="sgallery_area4">
					<a href="newsletter/news/images/1-7684517167.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/1-9471414917.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/2-6719007512.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/2-3476803639.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/3-369909110.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/3-1670548317.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/4-9188041273.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/4-4746561312.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/5-4556435878.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/5-6708371409.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/6-9858738923.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/6-5862106242.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/7-628759516.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/7-9409157547.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/8-9258349855.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/8-8474465836.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/9-7079927500.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/9-2278781170.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/10-8832745306.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/10-8839781824.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/11-8821860268.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/11-5487495669.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>

<a href="newsletter/news/images/12-8353618180.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/12-4186104100.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/13-2644505057.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/13-3815029363.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/14-6758775745.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/14-2071534713.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/15-5290115825.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/15-5326914825.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/16-3939483342.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/16-3958939529.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/17-5301117806.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/17-3650416042.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/18-6572785376.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/18-5444303205.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/19-1423944339.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/19-8789551294.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/20-2378674417.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/20-4275495819.jpg" alt="img" />
 <span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/21-1709389504.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/21-7169790516.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/22-9078474114.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/22-1872119953.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/23-9763908383.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/23-3107763480.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/24-9191058336.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/24-1671821283.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/25-3907817909.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/25-9241219833.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
<a href="newsletter/news/images/26-1111087869.jpg" title="Cricket Practice Match U/13 Probables Prep School">
<img class="gallery_img" src="newsletter/news/images/26-5592895203.jpg" alt="img" />
<span class="view_btn"> Practice Match U/13 </span>
</a>
				</div>
			</div>
            <?php /*
			<div class="tab-pane fade<?php echo ($selectedtab =="tab5")?"  show active":"";?>" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
				<p class="gtitle0">Inter House Basketball Competition Over 13 Prep School
</p>
				<div id="gallerySLide5" class="sgallery_area4">
					<a href="newsletter/news/images/1-3907976901.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/1-966613394.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/2-466762861.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/2-2767956503.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/3-9234516626.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/3-501840303.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/4-7834861399.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/4-6002321995.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/5-1148386236.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/5-3771446699.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/6-1909554529.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/6-9274732674.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/7-1539913350.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/7-1404930605.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/8-9370893049.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/8-8776563034.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/9-7664725600.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/9-31100663.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/10-5296083159.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/10-9072936096.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/11-5522998729.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/11-899911676.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/12-9167165532.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/12-334222659.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/13-6080116626.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/13-8883515739.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/14-1397012854.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/14-9078645938.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/15-1663790999.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/15-266971788.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/16-2962208129.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/16-7949715194.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/17-9187417735.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/17-5760631830.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/18-2254559574.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/18-8774987501.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/19-6701045674.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/19-9131121632.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/20-224958449.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/20-7452562137.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/21-2024272088.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/21-6497320629.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/22-1577194170.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/22-9022248574.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/23-629335532.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/23-9454413536.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/24-9067843974.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/24-1237125216.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/25-6042656587.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/25-3465953892.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/26-3438212737.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/26-2695925985.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/27-4080653512.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/27-1217744744.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/28-2366765343.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/28-1233610864.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/29-9332848749.jpg" title="Inter House Basketball Competition Over 13 Prep School ">
<img class="gallery_img" src="newsletter/news/images/29-7788083154.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>					
				</div>
			</div>
            */?>

			<div class="tab-pane fade<?php echo ($selectedtab =="tab7")?"  show active":"";?>" id="tab7" role="tabpanel" aria-labelledby="tab7-tab">
				<p class="gtitle0">Inter House Basketball Competition 2<sup>nd</sup> Round</p>
				<div id="gallerySLide7" class="sgallery_area4">
					<a href="newsletter/news/images/1-3076655647.jpg" title="Inter House Basketball Competition 2nd Round">
<img class="gallery_img" src="newsletter/news/images/1-8442952413.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/2-3062152939.jpg" title="Inter House Basketball Competition 2nd Round">
<img class="gallery_img" src="newsletter/news/images/2-3461926891.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/3-7384050176.jpg" title="Inter House Basketball Competition 2nd Round">
<img class="gallery_img" src="newsletter/news/images/3-5253999924.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/4-4317900627.jpg" title="Inter House Basketball Competition 2nd Round">
<img class="gallery_img" src="newsletter/news/images/4-3576164308.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/5-8319102462.jpg" title="Inter House Basketball Competition 2nd Round">
<img class="gallery_img" src="newsletter/news/images/5-7272966617.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/6-9097724021.jpg" title="Inter House Basketball Competition 2nd Round">
<img class="gallery_img" src="newsletter/news/images/6-2314726459.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/7-5493073214.jpg" title="Inter House Basketball Competition 2nd Round">
<img class="gallery_img" src="newsletter/news/images/7-359587624.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/8-7145176282.jpg" title="Inter House Basketball Competition 2nd Round">
<img class="gallery_img" src="newsletter/news/images/8-6251521686.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/9-3285126895.jpg" title="Inter House Basketball Competition 2nd Round">
<img class="gallery_img" src="newsletter/news/images/9-1150617645.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/10-2607034428.jpg" title="Inter House Basketball Competition 2nd Round">
<img class="gallery_img" src="newsletter/news/images/10-8529261303.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/11-8089768309.jpg" title="Inter House Basketball Competition 2nd Round">
<img class="gallery_img" src="newsletter/news/images/11-6427953464.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
 <a href="newsletter/news/images/12-3041539217.jpg" title="Inter House Basketball Competition 2nd Round">
<img class="gallery_img" src="newsletter/news/images/12-9144694435.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/13-4219997935.jpg" title="Inter House Basketball Competition 2nd Round">
<img class="gallery_img" src="newsletter/news/images/13-6423860308.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/14-2350506776.jpg" title="Inter House Basketball Competition 2nd Round">
<img class="gallery_img" src="newsletter/news/images/14-6771023576.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/15-4836997010.jpg" title="Inter House Basketball Competition 2nd Round">
<img class="gallery_img" src="newsletter/news/images/15-1127746566.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/16-854370976.jpg" title="Inter House Basketball Competition 2nd Round">
<img class="gallery_img" src="newsletter/news/images/16-3960456046.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
<a href="newsletter/news/images/17-8027836524.jpg" title="Inter House Basketball Competition 2nd Round">
<img class="gallery_img" src="newsletter/news/images/17-4190165820.jpg" alt="img" />
<span class="view_btn"> Inter House Basketball </span>
</a>
				</div>
			</div>

            <div class="tab-pane fade<?php echo ($selectedtab =="tab6")?"  show active":"";?>" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
                <p class="gtitle0">Aitchison College Debating Championship - 2022</p>
                <div id="gallerySLide6" class="sgallery_area4">
                    <a href="newsletter/news/images/1-476527846.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/1-6682714764.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/2-95531142.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/2-3838881087.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/3-6077504159.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/3-9024608390.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/4-1330714290.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/4-349779730.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/5-1865193356.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/5-8747193092.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/6-5963449375.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/6-6301700958.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/7-5473503019.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/7-4369251208.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/8-3781385273.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/8-6731925913.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/9-3306307149.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/9-6588506544.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/10-1134418410.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/10-6372184416.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/11-214163958.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/11-625408367.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/12-6637105831.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/12-1289060386.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/13-3751136743.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/13-3991456580.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/14-1143812025.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/14-9352000358.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/15-9372173811.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/15-8703670560.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/16-5381368992.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/16-277747033.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/17-5750036166.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/17-4217147440.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/18-6431083729.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/18-6819699974.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/19-4182402638.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/19-8753882300.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/20-6702288641.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/20-6468935395.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/21-1202400428.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/21-5543697590.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/22-3255195457.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/22-1250579603.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/23-2312293528.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/23-3897844597.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/24-9188804742.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/24-4947942073.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/25-9522279610.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/25-1101197984.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/26-3440925416.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/26-1683465386.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/27-6961120326.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/27-3436367131.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/28-5268475131.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/28-2402801461.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/29-6650710033.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/29-1187426477.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/30-3997146256.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/30-929672292.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/31-4683085662.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/31-8540270085.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/32-4148929342.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/32-399297873.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/33-6047826112.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/33-3693754578.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/34-1075280844.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/34-7038058263.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/35-1235899534.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/35-5994546517.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/36-3247814359.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/36-8180577280.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/37-6157847832.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/37-9053881295.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/38-6006064838.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/38-4343922313.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/39-1682507146.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/39-3108076103.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/40-9392230201.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/40-9102775107.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                    <a href="newsletter/news/images/41-4751764647.jpg" title="Aitchison College Debating Championship - 2022">
                        <img class="gallery_img" src="newsletter/news/images/41-914070536.jpg" alt="img" />
                        <span class="view_btn"> Debating Championship 2022 </span>
                    </a>
                </div>
            </div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab8")?"  show active":"";?>" id="tab8" role="tabpanel" aria-labelledby="tab8-tab">
				<p class="gtitle0">Inter House English Recitation (M2)</p>
				<div id="gallerySLide8" class="sgallery_area4">
					<a href="newsletter/news/images/1-5694176539.jpg" title="Inter House English Recitation (M2) ">
<img class="gallery_img" src="newsletter/news/images/1-6351654980.jpg" alt="img" />
<span class="view_btn"> English Recitation (M2) </span>
</a>
<a href="newsletter/news/images/2-889040327.jpg" title="Inter House English Recitation (M2) ">
<img class="gallery_img" src="newsletter/news/images/2-424378131.jpg" alt="img" />
<span class="view_btn"> English Recitation (M2) </span>
</a>
<a href="newsletter/news/images/3-9745693391.jpg" title="Inter House English Recitation (M2) ">
<img class="gallery_img" src="newsletter/news/images/3-3106926861.jpg" alt="img" />
<span class="view_btn"> English Recitation (M2) </span>
</a>
<a href="newsletter/news/images/4-3909365204.jpg" title="Inter House English Recitation (M2) ">
<img class="gallery_img" src="newsletter/news/images/4-3097456951.jpg" alt="img" />
<span class="view_btn"> English Recitation (M2) </span>
</a>
<a href="newsletter/news/images/5-6534762541.jpg" title="Inter House English Recitation (M2) ">
<img class="gallery_img" src="newsletter/news/images/5-4089727747.jpg" alt="img" />
<span class="view_btn"> English Recitation (M2) </span>
</a>
<a href="newsletter/news/images/6-5056173652.jpg" title="Inter House English Recitation (M2) ">
<img class="gallery_img" src="newsletter/news/images/6-9353888585.jpg" alt="img" />
<span class="view_btn"> English Recitation (M2) </span>
</a>
<a href="newsletter/news/images/7-4955423681.jpg" title="Inter House English Recitation (M2) ">
<img class="gallery_img" src="newsletter/news/images/7-9814445003.jpg" alt="img" />
<span class="view_btn"> English Recitation (M2) </span>
</a>
<a href="newsletter/news/images/8-4731774240.jpg" title="Inter House English Recitation (M2) ">
<img class="gallery_img" src="newsletter/news/images/8-18123083.jpg" alt="img" />
<span class="view_btn"> English Recitation (M2) </span>
</a>
<a href="newsletter/news/images/9-792082858.jpg" title="Inter House English Recitation (M2) ">
<img class="gallery_img" src="newsletter/news/images/9-1829410654.jpg" alt="img" />
<span class="view_btn"> English Recitation (M2) </span>
</a>
<a href="newsletter/news/images/10-501772353.jpg" title="Inter House English Recitation (M2) ">
<img class="gallery_img" src="newsletter/news/images/10-6929108689.jpg" alt="img" />
<span class="view_btn"> English Recitation (M2) </span>
</a>
<a href="newsletter/news/images/11-6589486489.jpg" title="Inter House English Recitation (M2) ">
<img class="gallery_img" src="newsletter/news/images/11-2904746569.jpg" alt="img" />
<span class="view_btn"> English Recitation (M2) </span>
</a>
<a href="newsletter/news/images/12-3795332557.jpg" title="Inter House English Recitation (M2) ">
<img class="gallery_img" src="newsletter/news/images/12-2603206216.jpg" alt="img" />
 <span class="view_btn"> English Recitation (M2) </span>
</a>
<a href="newsletter/news/images/13-7658289283.jpg" title="Inter House English Recitation (M2) ">
<img class="gallery_img" src="newsletter/news/images/13-2001633441.jpg" alt="img" />
<span class="view_btn"> English Recitation (M2) </span>
</a>
				</div>
			</div>

            <?php /*
			<div class="tab-pane fade<?php echo ($selectedtab =="tab9")?"  show active":"";?>" id="tab9" role="tabpanel" aria-labelledby="tab9-tab">
				<p class="gtitle0">Football Practice Match Senior School
<br><span  class="gtitle1">Aitchison College vs Fame Football Academy

</span></p>
				<div id="gallerySLide9" class="sgallery_area4">
					<a href="newsletter/news/images/1-1718939466.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/1-1548530117.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/2-8429774526.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/2-6664624472.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/3-1621124649.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/3-4954910544.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/4-6298217563.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/4-5349321929.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/5-287635844.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/5-7063716059.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/6-2525628790.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/6-1940025465.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/7-7229139153.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/7-7223796501.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/8-4809228785.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/8-7193747353.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/9-9234274065.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/9-1694057403.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/10-4321894140.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/10-3033391034.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/11-7957747346.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/11-7974858733.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
 <a href="newsletter/news/images/12-2938496390.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/12-8749847256.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/13-8864590260.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/13-9690336055.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/14-2936342490.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/14-3305103501.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/15-5374812287.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/15-1529647559.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/16-7650644940.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/16-7227880434.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/17-5550528309.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/17-2134973353.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/18-2386512368.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/18-9189887279.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/19-3714048282.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/19-8628769958.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/20-5195126824.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/20-375942833.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/21-5682319424.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/21-9388993837.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/22-6269545338.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/22-4415540576.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/23-4710718027.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/23-9528855353.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/24-6026877451.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/24-1232380325.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/25-473120652.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/25-7778919419.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/26-9554939258.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/26-7599709383.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/27-5934735202.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/27-7790350892.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/28-7284121411.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/28-4451823106.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/29-7099891492.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/29-5402339283.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/30-4840756711.jpg" title="Football Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/30-1897278644.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
				</div>
			</div>
            <div class="tab-pane fade<?php echo ($selectedtab =="tab16")?"  show active":"";?>" id="tab16" role="tabpanel" aria-labelledby="tab16-tab">
                <p class="gtitle0">Football Practice Match Prep School
                    <br><span  class="gtitle1">Colts Probables vs FG School Cantt

</span></p>
                <div id="gallerySLide16" class="sgallery_area4">
                    <a href="newsletter/news/images/1-6726960793.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/1-1921302441.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/2-6962630936.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/2-7964883939.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/3-4867863728.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/3-6714792577.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/4-8451721059.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/4-1597953975.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/5-7191553693.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/5-866931946.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/6-3917207667.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/6-6692234273.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/7-154892339.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/7-9002798362.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/8-9324964843.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/8-4226836225.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/9-3094857439.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/9-7095963398.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/10-720758660.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/10-11932883.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/11-1667501426.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/11-4800887022.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/12-1389314012.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/12-5201159696.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/13-9807067379.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/13-7958891289.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/14-8483620094.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/14-4033530788.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/15-7378705295.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/15-9003634024.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/16-8802247580.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/16-1484228795.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/17-5138914892.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/17-3675071784.jpg" alt="img" />

                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/18-9813737414.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/18-9584048344.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/19-6315660569.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/19-1754362900.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/20-3030779609.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/20-1450739225.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/21-6236714023.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/21-605550906.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/22-4623093380.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/22-3525257837.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/23-1748548782.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/23-3663482224.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/24-9094499619.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/24-9143454837.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/25-155182403.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/25-2900527944.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/26-1604149645.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/26-7603410187.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/27-1338894133.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/27-3925741027.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/28-6776732044.jpg" title="Football Practice Match Prep School">
                        <img class="gallery_img" src="newsletter/news/images/28-6742993217.jpg" alt="img" />
                        <span class="view_btn"> Football Practice Match </span>
                    </a>
                </div>
            </div>
            <div class="tab-pane fade<?php echo ($selectedtab =="tab4")?"  show active":"";?>" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                <p class="gtitle0">Hockey Practice Match Prep and Junior
                    <br><span  class="gtitle1">E-2 Boys vs K-6 Boys</span></p>
                <div id="gallerySLide4" class="sgallery_area4">
                    <a href="newsletter/news/images/1-2510853050.jpg" title="Hockey Practice Match Prep and Junior">
                        <img class="gallery_img" src="newsletter/news/images/1-36432004.jpg" alt="img" />
                        <span class="view_btn"> Hockey Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/2-5236396678.jpg" title="Hockey Practice Match Prep and Junior">
                        <img class="gallery_img" src="newsletter/news/images/2-3872055396.jpg" alt="img" />
                        <span class="view_btn"> Hockey Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/3-9201569974.jpg" title="Hockey Practice Match Prep and Junior">
                        <img class="gallery_img" src="newsletter/news/images/3-9186705951.jpg" alt="img" />
                        <span class="view_btn"> Hockey Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/4-5927932402.jpg" title="Hockey Practice Match Prep and Junior">
                        <img class="gallery_img" src="newsletter/news/images/4-6338781819.jpg" alt="img" />
                        <span class="view_btn"> Hockey Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/5-7088959956.jpg" title="Hockey Practice Match Prep and Junior">
                        <img class="gallery_img" src="newsletter/news/images/5-7814389267.jpg" alt="img" />
                        <span class="view_btn"> Hockey Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/6-9205816958.jpg" title="Hockey Practice Match Prep and Junior">
                        <img class="gallery_img" src="newsletter/news/images/6-8175758508.jpg" alt="img" />
                        <span class="view_btn"> Hockey Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/7-8228854712.jpg" title="Hockey Practice Match Prep and Junior">
                        <img class="gallery_img" src="newsletter/news/images/7-2830897798.jpg" alt="img" />
                        <span class="view_btn"> Hockey Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/8-441877087.jpg" title="Hockey Practice Match Prep and Junior">
                        <img class="gallery_img" src="newsletter/news/images/8-9424729351.jpg" alt="img" />
                        <span class="view_btn"> Hockey Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/9-7926373540.jpg" title="Hockey Practice Match Prep and Junior">
                        <img class="gallery_img" src="newsletter/news/images/9-3900399517.jpg" alt="img" />
                        <span class="view_btn"> Hockey Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/10-6348470401.jpg" title="Hockey Practice Match Prep and Junior">
                        <img class="gallery_img" src="newsletter/news/images/10-2851580749.jpg" alt="img" />
                        <span class="view_btn"> Hockey Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/11-3563987280.jpg" title="Hockey Practice Match Prep and Junior">
                        <img class="gallery_img" src="newsletter/news/images/11-2776953978.jpg" alt="img" />
                        <span class="view_btn"> Hockey Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/12-9652941922.jpg" title="Hockey Practice Match Prep and Junior">
                        <img class="gallery_img" src="newsletter/news/images/12-5017934680.jpg" alt="img" />
                        <span class="view_btn"> Hockey Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/13-3913572095.jpg" title="Hockey Practice Match Prep and Junior">
                        <img class="gallery_img" src="newsletter/news/images/13-5980269318.jpg" alt="img" />
                        <span class="view_btn"> Hockey Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/14-933676388.jpg" title="Hockey Practice Match Prep and Junior">
                        <img class="gallery_img" src="newsletter/news/images/14-6371143884.jpg" alt="img" />
                        <span class="view_btn"> Hockey Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/15-4283220876.jpg" title="Hockey Practice Match Prep and Junior">
                        <img class="gallery_img" src="newsletter/news/images/15-2474912143.jpg" alt="img" />
                        <span class="view_btn"> Hockey Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/16-3279977922.jpg" title="Hockey Practice Match Prep and Junior">
                        <img class="gallery_img" src="newsletter/news/images/16-7425511507.jpg" alt="img" />
                        <span class="view_btn"> Hockey Practice Match </span>
                    </a>
                    <a href="newsletter/news/images/17-2869905780.jpg" title="Hockey Practice Match Prep and Junior">
                        <img class="gallery_img" src="newsletter/news/images/17-6425925210.jpg" alt="img" />
                        <span class="view_btn"> Hockey Practice Match </span>
                    </a>
                </div>
            </div>


			<div class="tab-pane fade<?php echo ($selectedtab =="tab10")?"  show active":"";?>" id="tab10" role="tabpanel" aria-labelledby="tab10-tab">
				<p class="gtitle0">Inter House Basketball Competition Semi Finals Senior School
<br><span  class="gtitle1">Jubilee House vs Godley House</span></p>
				<div id="gallerySLide10" class="sgallery_area4">
					<a href="newsletter/news/images/1-7096690669.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/1-2598663762.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/2-4078174653.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/2-5227598049.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/3-1668442924.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/3-8137576719.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/4-7467615704.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/4-7254870463.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/5-2574941407.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
 <img class="gallery_img" src="newsletter/news/images/5-4783720734.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/6-9776613172.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/6-8326365096.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/7-9723817732.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/7-9112479928.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/8-3974730831.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/8-1491123285.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/9-3685413963.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/9-9332211385.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/10-3807254811.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/10-4943078746.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/11-288739965.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/11-3974383677.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/12-7597686790.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/12-9895229990.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/13-5035559519.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/13-10209192.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/14-1636602656.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/14-8349401704.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/15-6384479588.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/15-5103297258.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/16-5630230940.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/16-2827430877.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/17-3700245963.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/17-9730384504.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/18-3796115109.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/18-8997383135.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
				</div>
			</div>
 */?>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab11")?"  show active":"";?>" id="tab11" role="tabpanel" aria-labelledby="tab11-tab">
				<p class="gtitle0">Inter House Basketball Competition Semi Finals Senior School
<br><span  class="gtitle1">Kelly House vs Leslie Jones House

</span></p>
				<div id="gallerySLide11" class="sgallery_area4">
					<a href="newsletter/news/images/1-4055315611.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/1-9061344653.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/2-7326913234.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/2-2342436560.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/3-6877515961.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/3-2095283608.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/4-1518877696.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/4-3584333070.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/5-8958835338.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
 <img class="gallery_img" src="newsletter/news/images/5-3194389949.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/6-8982463054.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/6-4920043165.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/7-9410228741.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/7-5241596971.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/8-1637645564.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/8-8845943729.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/9-81247643.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/9-3200063969.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/10-5166830098.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/10-1090007293.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/11-8679735894.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/11-2682410387.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/12-8343011390.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/12-2693985228.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/13-179315379.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/13-9936834988.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
 </a>
<a href="newsletter/news/images/14-1138379573.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/14-9955012770.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/15-6066587093.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/15-3308841915.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/16-6038436237.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/16-7958986772.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/17-135524511.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/17-5511187212.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/18-2384722896.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/18-2305777475.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/19-5283981455.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/19-2777962047.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/20-5800322986.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/20-1804464002.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/21-288724126.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/21-4203867491.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/22-1326011491.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/22-716446579.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/23-5037138055.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/23-79812119.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/24-5922504953.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/24-1495075423.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/25-1240705046.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/25-3022937394.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/26-5606441418.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/26-2549354783.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/27-2414670033.jpg" title="Inter House Basketball Competition Semi Finals Senior School">
<img class="gallery_img" src="newsletter/news/images/27-191646034.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab12")?"  show active":"";?>" id="tab12" role="tabpanel" aria-labelledby="tab12-tab">
				<p class="gtitle0">K5 Inter Class Tape Ball Cricket Matches Junior School</p>
				<div id="gallerySLide12" class="sgallery_area4">
					<a href="newsletter/news/images/1-8326854715.jpg" title="K5 Inter Class Tape Ball Cricket Matches Junior School">
<img class="gallery_img" src="newsletter/news/images/1-1001019098.jpg" alt="img" />
<span class="view_btn"> Tape Ball Cricket </span>
</a>
<a href="newsletter/news/images/2-11496438.jpg" title="K5 Inter Class Tape Ball Cricket Matches Junior School">
<img class="gallery_img" src="newsletter/news/images/2-8042426375.jpg" alt="img" />
<span class="view_btn"> Tape Ball Cricket </span>
</a>
<a href="newsletter/news/images/3-3761669310.jpg" title="K5 Inter Class Tape Ball Cricket Matches Junior School">
<img class="gallery_img" src="newsletter/news/images/3-2893313670.jpg" alt="img" />
<span class="view_btn"> Tape Ball Cricket </span>
</a>
<a href="newsletter/news/images/4-8705734645.jpg" title="K5 Inter Class Tape Ball Cricket Matches Junior School">
<img class="gallery_img" src="newsletter/news/images/4-7810629145.jpg" alt="img" />
<span class="view_btn"> Tape Ball Cricket </span>
</a>
<a href="newsletter/news/images/5-3485298481.jpg" title="K5 Inter Class Tape Ball Cricket Matches Junior School">
<img class="gallery_img" src="newsletter/news/images/5-6198117167.jpg" alt="img" />
<span class="view_btn"> Tape Ball Cricket </span>
</a>
<a href="newsletter/news/images/6-7800668254.jpg" title="K5 Inter Class Tape Ball Cricket Matches Junior School">
<img class="gallery_img" src="newsletter/news/images/6-6377381170.jpg" alt="img" />
<span class="view_btn"> Tape Ball Cricket </span>
</a>
<a href="newsletter/news/images/7-6536008642.jpg" title="K5 Inter Class Tape Ball Cricket Matches Junior School">
<img class="gallery_img" src="newsletter/news/images/7-8175995777.jpg" alt="img" />
<span class="view_btn"> Tape Ball Cricket </span>
</a>
<a href="newsletter/news/images/8-6618936693.jpg" title="K5 Inter Class Tape Ball Cricket Matches Junior School">
<img class="gallery_img" src="newsletter/news/images/8-5030491291.jpg" alt="img" />
<span class="view_btn"> Tape Ball Cricket </span>
</a>
<a href="newsletter/news/images/9-1938479901.jpg" title="K5 Inter Class Tape Ball Cricket Matches Junior School">
<img class="gallery_img" src="newsletter/news/images/9-876132170.jpg" alt="img" />
<span class="view_btn"> Tape Ball Cricket </span>
</a>
<a href="newsletter/news/images/10-3635231610.jpg" title="K5 Inter Class Tape Ball Cricket Matches Junior School">
<img class="gallery_img" src="newsletter/news/images/10-9375258248.jpg" alt="img" />
<span class="view_btn"> Tape Ball Cricket </span>
</a>
<a href="newsletter/news/images/11-4800448525.jpg" title="K5 Inter Class Tape Ball Cricket Matches Junior School">
<img class="gallery_img" src="newsletter/news/images/11-526941751.jpg" alt="img" />
<span class="view_btn"> Tape Ball Cricket </span>
</a> 
<a href="newsletter/news/images/12-2754279205.jpg" title="K5 Inter Class Tape Ball Cricket Matches Junior School">
<img class="gallery_img" src="newsletter/news/images/12-7162762817.jpg" alt="img" />
<span class="view_btn"> Tape Ball Cricket </span>
</a>
<a href="newsletter/news/images/13-6313207303.jpg" title="K5 Inter Class Tape Ball Cricket Matches Junior School">
<img class="gallery_img" src="newsletter/news/images/13-842060453.jpg" alt="img" />
<span class="view_btn"> Tape Ball Cricket </span>
</a>
<a href="newsletter/news/images/14-2048900716.jpg" title="K5 Inter Class Tape Ball Cricket Matches Junior School">
<img class="gallery_img" src="newsletter/news/images/14-1277768724.jpg" alt="img" />
<span class="view_btn"> Tape Ball Cricket </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab13")?"  show active":"";?>" id="tab13" role="tabpanel" aria-labelledby="tab13-tab">
				<p class="gtitle0">Basketball Final: Kelly Nudges Godley Out in 1 Point U16 Thriller
<br><span  class="gtitle1">Kelly House vs Godley House</span></p>
				<div id="gallerySLide13" class="sgallery_area4">
					<a href="newsletter/news/images/1-1524514965.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/1-2412531518.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/2-2167360592.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/2-5055104307.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
 <a href="newsletter/news/images/3-6840421544.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/3-9153868410.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/4-5603043114.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/4-7341739114.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/5-5538311671.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/5-5441595486.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/6-8126972012.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/6-1358011113.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/7-2711012586.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/7-7360229221.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/8-8379952268.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/8-4798314560.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/9-600702526.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/9-7903250906.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/10-8251423555.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/10-2755274854.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/11-8182873544.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/11-4012661545.jpg" alt="img" />
 <span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/12-8106979791.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/12-7271887802.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/13-6294362098.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/13-3258600630.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/14-7658102423.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/14-7252307754.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/15-5588541124.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/15-9297419158.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/16-4595580365.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/16-2844113306.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/17-8610305006.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/17-2199915514.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/18-4155657256.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/18-4739516003.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/19-2174085727.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/19-2925599939.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/20-1753682275.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/20-5026205025.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/21-2070685663.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/21-3330749401.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/22-9010730708.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/22-9542110022.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/23-9268737138.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/23-8467797850.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/24-4877892732.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/24-8948303049.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/25-2898606317.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/25-6025801932.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/26-5778346125.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/26-143829251.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/27-2824640719.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/27-6937580383.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/28-5679595345.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/28-8667746553.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/29-2423462545.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/29-9307159896.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/30-9820320256.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/30-129501132.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/31-9592309235.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/31-8516821551.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
<a href="newsletter/news/images/32-7098092855.jpg" title="Inter House Basketball Competition Final Senior School">
<img class="gallery_img" src="newsletter/news/images/32-9585905368.jpg" alt="img" />
<span class="view_btn"> Basketball Competition </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab14")?"  show active":"";?>" id="tab14" role="tabpanel" aria-labelledby="tab14-tab">
				<p class="gtitle0">5<sup>th</sup> Aitchison Junior National Tennis Championship</p>
				<div id="gallerySLide14" class="sgallery_area4">
					<a href="newsletter/news/images/1-9279366890.jpg" title="5th Aitchison Junior National Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/1-2875690225.jpg" alt="img" />
<span class="view_btn"> National Tennis Championship </span>
</a>
<a href="newsletter/news/images/2-5473527813.jpg" title="5th Aitchison Junior National Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/2-9549687117.jpg" alt="img" />
<span class="view_btn"> National Tennis Championship </span>
</a>
<a href="newsletter/news/images/3-7199603805.jpg" title="5th Aitchison Junior National Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/3-1301924099.jpg" alt="img" />
<span class="view_btn"> National Tennis Championship </span>
</a>
<a href="newsletter/news/images/4-2436045736.jpg" title="5th Aitchison Junior National Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/4-5692881524.jpg" alt="img" />
<span class="view_btn"> National Tennis Championship </span>
</a>
<a href="newsletter/news/images/5-4369855557.jpg" title="5th Aitchison Junior National Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/5-8042480066.jpg" alt="img" />
<span class="view_btn"> National Tennis Championship </span>
</a>
 <a href="newsletter/news/images/6-9092671751.jpg" title="5th Aitchison Junior National Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/6-7734881327.jpg" alt="img" />
<span class="view_btn"> National Tennis Championship </span>
</a>
<a href="newsletter/news/images/7-9714292006.jpg" title="5th Aitchison Junior National Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/7-6051066241.jpg" alt="img" />
<span class="view_btn"> National Tennis Championship </span>
</a>
<a href="newsletter/news/images/8-7483769972.jpg" title="5th Aitchison Junior National Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/8-7104089015.jpg" alt="img" />
<span class="view_btn"> National Tennis Championship </span>
</a>
<a href="newsletter/news/images/9-4746289796.jpg" title="5th Aitchison Junior National Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/9-5987556744.jpg" alt="img" />
<span class="view_btn"> National Tennis Championship </span>
</a>
<a href="newsletter/news/images/10-236107979.jpg" title="5th Aitchison Junior National Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/10-1324027205.jpg" alt="img" />
<span class="view_btn"> National Tennis Championship </span>
</a>
<a href="newsletter/news/images/11-7773833816.jpg" title="5th Aitchison Junior National Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/11-554887590.jpg" alt="img" />
<span class="view_btn"> National Tennis Championship </span>
</a>
<a href="newsletter/news/images/12-2001671016.jpg" title="5th Aitchison Junior National Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/12-8651676966.jpg" alt="img" />
<span class="view_btn"> National Tennis Championship </span>
</a>
<a href="newsletter/news/images/13-6163085663.jpg" title="5th Aitchison Junior National Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/13-5197808951.jpg" alt="img" />
<span class="view_btn"> National Tennis Championship </span>
</a>
<a href="newsletter/news/images/14-255124616.jpg" title="5th Aitchison Junior National Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/14-5633612320.jpg" alt="img" />
<span class="view_btn"> National Tennis Championship </span>
</a>
<a href="newsletter/news/images/15-5060912976.jpg" title="5th Aitchison Junior National Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/15-8979018896.jpg" alt="img" />
<span class="view_btn"> National Tennis Championship </span>
</a>
<a href="newsletter/news/images/16-4325010993.jpg" title="5th Aitchison Junior National Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/16-5909682592.jpg" alt="img" />
<span class="view_btn"> National Tennis Championship </span>
</a>
				</div>
			</div>			
			<div class="tab-pane fade<?php echo ($selectedtab =="tab15")?"  show active":"";?>" id="tab15" role="tabpanel" aria-labelledby="tab15-tab">
				<p class="gtitle0">Inter House English Recitation</p>
				<div id="gallerySLide15" class="sgallery_area4">
					<a href="newsletter/news/images/1-3277435706.jpg" title="Inter House English Recitation">
<img class="gallery_img" src="newsletter/news/images/1-9159147180.jpg" alt="img" />
<span class="view_btn"> English Recitation </span>
</a>
<a href="newsletter/news/images/2-4361174798.jpg" title="Inter House English Recitation">
<img class="gallery_img" src="newsletter/news/images/2-2160777362.jpg" alt="img" />
<span class="view_btn"> English Recitation </span>
</a>
<a href="newsletter/news/images/3-1198131123.jpg" title="Inter House English Recitation">
<img class="gallery_img" src="newsletter/news/images/3-7886911033.jpg" alt="img" />
 <span class="view_btn"> English Recitation </span>
</a>
<a href="newsletter/news/images/4-4562350593.jpg" title="Inter House English Recitation">
<img class="gallery_img" src="newsletter/news/images/4-5675786793.jpg" alt="img" />
<span class="view_btn"> English Recitation </span>
</a>
<a href="newsletter/news/images/5-1653951249.jpg" title="Inter House English Recitation">
<img class="gallery_img" src="newsletter/news/images/5-2012364850.jpg" alt="img" />
<span class="view_btn"> English Recitation </span>
</a>
<a href="newsletter/news/images/6-8139758827.jpg" title="Inter House English Recitation">
<img class="gallery_img" src="newsletter/news/images/6-869020667.jpg" alt="img" />
<span class="view_btn"> English Recitation </span>
</a>
<a href="newsletter/news/images/7-7687920793.jpg" title="Inter House English Recitation">
<img class="gallery_img" src="newsletter/news/images/7-746208815.jpg" alt="img" />
<span class="view_btn"> English Recitation </span>
</a>
<a href="newsletter/news/images/8-1352497141.jpg" title="Inter House English Recitation">
<img class="gallery_img" src="newsletter/news/images/8-5979285633.jpg" alt="img" />
<span class="view_btn"> English Recitation </span>
</a>
<a href="newsletter/news/images/9-1072560055.jpg" title="Inter House English Recitation">
<img class="gallery_img" src="newsletter/news/images/9-8708086141.jpg" alt="img" />
<span class="view_btn"> English Recitation </span>
</a>
<a href="newsletter/news/images/10-4586702693.jpg" title="Inter House English Recitation">
<img class="gallery_img" src="newsletter/news/images/10-9566526917.jpg" alt="img" />
<span class="view_btn"> English Recitation </span>
</a>
<a href="newsletter/news/images/11-7682060852.jpg" title="Inter House English Recitation">
<img class="gallery_img" src="newsletter/news/images/11-7101039218.jpg" alt="img" />
<span class="view_btn"> English Recitation </span>
</a>
<a href="newsletter/news/images/12-5966602606.jpg" title="Inter House English Recitation">
<img class="gallery_img" src="newsletter/news/images/12-4589326611.jpg" alt="img" />
<span class="view_btn"> English Recitation </span>
</a>
<a href="newsletter/news/images/13-2165762433.jpg" title="Inter House English Recitation">
<img class="gallery_img" src="newsletter/news/images/13-9379726158.jpg" alt="img" />
<span class="view_btn"> English Recitation </span>
</a>
<a href="newsletter/news/images/14-7279942016.jpg" title="Inter House English Recitation">
<img class="gallery_img" src="newsletter/news/images/14-2069278370.jpg" alt="img" />
<span class="view_btn"> English Recitation </span>
</a>
<a href="newsletter/news/images/15-9138553288.jpg" title="Inter House English Recitation">
<img class="gallery_img" src="newsletter/news/images/15-3455444456.jpg" alt="img" />
<span class="view_btn"> English Recitation </span>
</a>
<a href="newsletter/news/images/16-7947031643.jpg" title="Inter House English Recitation">
<img class="gallery_img" src="newsletter/news/images/16-2420940160.jpg" alt="img" />
<span class="view_btn"> English Recitation </span>
</a>
<a href="newsletter/news/images/17-2459413387.jpg" title="Inter House English Recitation">
<img class="gallery_img" src="newsletter/news/images/17-6604031312.jpg" alt="img" />
<span class="view_btn"> English Recitation </span>
</a>
<a href="newsletter/news/images/18-2894148455.jpg" title="Inter House English Recitation">
<img class="gallery_img" src="newsletter/news/images/18-7238681287.jpg" alt="img" />
<span class="view_btn"> English Recitation </span>
</a>
<a href="newsletter/news/images/19-4845417541.jpg" title="Inter House English Recitation">
<img class="gallery_img" src="newsletter/news/images/19-3528286980.jpg" alt="img" />
<span class="view_btn"> English Recitation </span>
</a>
<a href="newsletter/news/images/20-5341323636.jpg" title="Inter House English Recitation">
<img class="gallery_img" src="newsletter/news/images/20-1047815337.jpg" alt="img" />
<span class="view_btn"> English Recitation </span>
</a>
				</div>
			</div>
            <?php /*
			<div class="tab-pane fade<?php echo ($selectedtab =="tab17")?"  show active":"";?>" id="tab17" role="tabpanel" aria-labelledby="tab17-tab">
				<p class="gtitle0">Inter House Hockey Competition (Open) Prep School
<br><span  class="gtitle1">Liaqat House vs Tariq House<br />
Sir Syed House vs Salahuddin House<br />
Magsi House vs Bahawalpur House<br />
Sher Shah House vs Saigol House</span></p>
				<div id="gallerySLide17" class="sgallery_area4">
					<a href="newsletter/news/images/1-5922129343.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/1-87673673.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/2-4561046140.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/2-1745086408.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/3-9363055279.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/3-2196410052.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/4-9009303694.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/4-7721843372.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/5-8863188852.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/5-1914516978.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/6-1827307975.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/6-8113144210.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/7-5691750734.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/7-232292317.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/8-5030257765.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/8-1421135262.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/9-1378729133.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/9-9099254361.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/10-1858485170.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/10-8479284992.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/11-8729733803.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/11-4172628935.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/12-8113123468.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/12-8208318950.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/13-9381732677.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/13-763052380.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
 <a href="newsletter/news/images/14-167161090.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/14-4179017524.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/15-2915656953.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/15-4691771715.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/16-9512789870.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/16-8635639590.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/17-856321073.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/17-8964174685.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/18-2515947314.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/18-2198202815.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/19-9275054586.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/19-3306673103.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/20-3886125071.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/20-4534378822.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/21-6046689306.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/21-1261518187.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/22-6775164924.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/22-2282917736.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/23-9083857022.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/23-7953027939.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/24-7822548214.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/24-2302295854.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/25-8115402417.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/25-6322537184.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/26-2063241592.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/26-643655379.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/27-1728424262.jpg" title="Inter House Hockey Competition (Open) Prep School ">
<img class="gallery_img" src="newsletter/news/images/27-597988641.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
				</div>
			</div>
            */?>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab18")?"  show active":"";?>" id="tab18" role="tabpanel" aria-labelledby="tab18-tab">
				<p class="gtitle0">1<sup>st</sup> Aitchison National Fastest Man Competition 2022<br><span  class="gtitle1">100 M, Heats (Professionals) 100 M, Heats (Inter-School), 100 M, Final, (Inter-School) 4X100 M Relay, Final (Inter School)) 100 M, Final (Professionals) Prize Distribution Ceremony

</span></p>
				<div id="gallerySLide18" class="sgallery_area4">
					<a href="newsletter/news/images/4-6355659416.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/4-2497804633.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
<a href="newsletter/news/images/2-7760012777.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/2-4079291802.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
<a href="newsletter/news/images/3-8016051271.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/3-347633240.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
<a href="newsletter/news/images/1-3206316821.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/1-2912059750.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
<a href="newsletter/news/images/5-7033998494.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/5-7700278811.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
<a href="newsletter/news/images/6-4688130193.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/6-8358843317.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
<a href="newsletter/news/images/7-3414499423.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/7-6798669904.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
<a href="newsletter/news/images/8-2166121124.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/8-4610913571.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
<a href="newsletter/news/images/9-8116927014.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/9-5986107159.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
<a href="newsletter/news/images/10-5677032693.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/10-5441404193.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
<a href="newsletter/news/images/11-1842415334.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/11-5665899213.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
<a href="newsletter/news/images/12-1600888413.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/12-5248913912.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
 <a href="newsletter/news/images/13-3217728741.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/13-7881981392.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
<a href="newsletter/news/images/14-784183235.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/14-7859328188.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
<a href="newsletter/news/images/15-4202101995.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/15-5251752317.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
<a href="newsletter/news/images/16-231885192.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/16-2563326940.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
<a href="newsletter/news/images/17-3303096882.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/17-9350282299.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
<a href="newsletter/news/images/18-9490966553.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/18-8367284346.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
<a href="newsletter/news/images/19-1451882301.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/19-1784053254.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
<a href="newsletter/news/images/20-9027881706.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/20-3408217312.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
<a href="newsletter/news/images/21-1736400335.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/21-3535274766.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
<a href="newsletter/news/images/22-6622274264.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/22-2651017412.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
<a href="newsletter/news/images/23-2194450813.jpg" title="1st Aitchison National Fastest Man Competition 2022">
<img class="gallery_img" src="newsletter/news/images/23-769690968.jpg" alt="img" />
<span class="view_btn"> Fastest Man Competition 2022 </span>
</a>
				</div>
			</div>
			<?php /*?>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab5")?"  show active":"";?>" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
				<p class="gtitle0">Title<br><span  class="gtitle1">Title</span></p>
				<div id="gallerySLide20" class="sgallery_area4">
					
				</div>
			</div>
			<?php */?>
		</div>
	</div>
	<!-- End Left Area -->


</div>


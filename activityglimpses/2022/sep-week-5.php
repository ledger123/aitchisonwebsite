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
	//$selectedtab="tab14";


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
                <button class="nav-link<?php echo ($selectedtab =="tab2")?" active":"";?>" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="<?php echo ($selectedtab =="tab2")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">5<sup>th</sup> Aitchison Junior National Tennis Championship</button>
            </li>
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab7")?" active":"";?>" id="tab7-tab" data-bs-toggle="tab" data-bs-target="#tab7" type="button" role="tab" aria-controls="tab7" aria-selected="<?php echo ($selectedtab =="tab7")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Aitchison College Table Tennis Championship</button>
            </li>
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab4")?" active":"";?>" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="<?php echo ($selectedtab =="tab4")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Hockey Match (Aitchison XI vs Aitchison Campus)</button>
            </li>
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab3")?" active":"";?>" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="<?php echo ($selectedtab =="tab3")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Football Match (Aitchison College vs Defence Degree College)</button>
            </li>
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab9")?" active":"";?>" id="tab9-tab" data-bs-toggle="tab" data-bs-target="#tab9" type="button" role="tab" aria-controls="tab9" aria-selected="<?php echo ($selectedtab =="tab9")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Football Match (E2 Boys vs Defence Degree College)</button>
            </li>
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab10")?" active":"";?>" id="tab10-tab" data-bs-toggle="tab" data-bs-target="#tab10" type="button" role="tab" aria-controls="tab10" aria-selected="<?php echo ($selectedtab =="tab10")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Football Match (Colts Probables vs Message Grammar School)</button>
            </li>
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab1")?" active":"";?>" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="<?php echo ($selectedtab =="tab1")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">U/13 Inter House Cricket Competition</button>
            </li>
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab5")?" active":"";?>" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="tab5" aria-selected="<?php echo ($selectedtab =="tab5")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Cricket Match (AC U/14 Colts vs Campus Boys)</button>
            </li>
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab6")?" active":"";?>" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab" aria-controls="tab6" aria-selected="<?php echo ($selectedtab =="tab6")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">4<sup>th</sup> Aitchison Swimming Carnival 2022</button>
            </li>
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab12")?" active":"";?>" id="tab12-tab" data-bs-toggle="tab" data-bs-target="#tab12" type="button" role="tab" aria-controls="tab12" aria-selected="<?php echo ($selectedtab =="tab12")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">JS Swimming Gala</button>
            </li>
			
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab8")?" active":"";?>" id="tab8-tab" data-bs-toggle="tab" data-bs-target="#tab8" type="button" role="tab" aria-controls="tab8" aria-selected="<?php echo ($selectedtab =="tab8")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">SEAMO Prep School</button>
            </li>			
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab11")?" active":"";?>" id="tab11-tab" data-bs-toggle="tab" data-bs-target="#tab11" type="button" role="tab" aria-controls="tab11" aria-selected="<?php echo ($selectedtab =="tab11")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">School History Exhibition Prep School</button>
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
				<p class="gtitle0">Inter House Cricket Competition (Age Group: U/13) Prep School
<br><span  class="gtitle1">Salahuddin House vs Niazuddin House<br>
Khalid House vs Tariq House<br>
Saigol House vs Iqbal House<br>
Liaqat House vs Sir Syed House</span></p>
				<div id="gallerySLide1" class="sgallery_area4">
					<a href="newsletter/news/images/01-9145479075.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/01-6607428984.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/1-6742740940.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/1-8728338413.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/2-7818858000.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/2-9220305683.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/3-5732669679.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/3-594566305.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/4-7525711215.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/4-1338563420.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/5-3472278407.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/5-4417064345.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/6-4403355747.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/6-5110584292.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/07-4622421743.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/07-6947851.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/7-3635277408.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/7-1140695224.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/08-9126867895.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/08-6222471696.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/8-5156783364.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/8-7824634348.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/9-1630007379.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/9-407520840.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/10-2953077759.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/10-5103604356.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/11-2109577964.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/11-4195888066.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/12-1924438105.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/12-8886733910.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/13-4515393249.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/13-9870457903.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/14-5365466982.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/14-5736094918.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/15-994851553.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/15-1996029097.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/16-1869684214.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/16-634131090.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/18-8016244212.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/18-8835024062.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/19-1462614838.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/19-2541218896.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/20-6660934166.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/20-6214210444.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/21-9297984002.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/21-9180070276.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/22-7539782234.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/22-8422849173.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/23-1906881881.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/23-3321240588.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/24-8995992492.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/24-5573046215.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/25-5440451376.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/25-6745744775.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/26-1354839342.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/26-3860562653.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/27-2006909609.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/27-892556721.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/28-9675029088.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/28-1203329476.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/29-3232621964.jpg" title="Inter House Cricket Competition Prep School">
 <img class="gallery_img" src="newsletter/news/images/29-7714026905.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/30-8494959438.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/30-7319002222.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/31-8693381198.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/31-1405176380.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/32-3123217699.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/32-9125642461.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/33-8189245529.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/33-9662506697.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/34-3987054655.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/34-6780563452.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/35-1822326598.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/35-8805277335.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/36-4023594908.jpg" title="Inter House Cricket Competition Prep School">
<img class="gallery_img" src="newsletter/news/images/36-1318083697.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
				</div>
			</div>		
			<div class="tab-pane fade<?php echo ($selectedtab =="tab2")?"  show active":"";?>" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
				<p class="gtitle0">5<sup>th</sup> Aitchison Junior National Tennis Championship Final All Age Groups</p>
				<div id="gallerySLide2" class="sgallery_area4">
					<a href="newsletter/news/images/1-8403278366.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/1-1378382442.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/2-3796288633.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/2-4087345694.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/3-5181032311.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/3-8902509740.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/4-2534416682.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/4-891747235.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/5-8458407056.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/5-7531025492.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/6-5392453292.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/6-4931570451.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/7-2066589308.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/7-1078194730.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/8-5866610893.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/8-3444470296.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/9-3979169971.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/9-5452561510.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>

<a href="newsletter/news/images/10-6098797084.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/10-9188109502.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/11-4625493415.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/11-3551805956.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/12-6636020127.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/12-1059366950.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/13-7990870947.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/13-9286914733.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/14-5328608885.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/14-7585863960.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/15-8937230466.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/15-5411151994.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/16-8431716843.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/16-3728955320.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/17-9028096032.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/17-9202678178.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/18-9512256880.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/18-8712415784.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/19-1899337125.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/19-4797139739.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/20-1297403608.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/20-3758494181.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/21-3358250528.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/21-6396693812.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/22-8068194642.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/22-9109888914.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/23-4913730493.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/23-5775400393.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/24-3325887346.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/24-8849331370.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/25-6860649141.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/25-7944748649.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/26-8133034637.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/26-4367636545.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/27-8503812249.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/27-3270021066.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/28-6835752654.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/28-3258831881.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/29-1262620252.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/29-2825693655.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/30-7660488372.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/30-1045314583.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/31-5384761520.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/31-7128706119.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/32-4483720915.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/32-8630255152.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/33-1672661053.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/33-4890544508.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/34-2760963852.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/34-9539364865.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>

<a href="newsletter/news/images/35-5104709594.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/35-7527188164.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/36-201388513.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/36-2907674246.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/37-6467986221.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/37-6246875432.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/38-8314763867.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/38-4439288730.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/39-6762248759.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/39-2931708940.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/40-8062155720.jpg" title="5th Aitchison Junior National Tennis Championship Final All Age Groups">
<img class="gallery_img" src="newsletter/news/images/40-2423388438.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
				</div>
			</div>
            <div class="tab-pane fade<?php echo ($selectedtab =="tab3")?"  show active":"";?>" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
				<p class="gtitle0">Football Practice Match Aitchison College vs Defence Degree College</p>
				<div id="gallerySLide3" class="sgallery_area4">
					<a href="newsletter/news/images/1-3421329369.jpg" title="Senior Practice Football Match Aitchison College vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/1-614947915.jpg" alt="img" />
<span class="view_btn"> Football Match </span>
</a>
<a href="newsletter/news/images/2-9260224343.jpg" title="Senior Practice Football Match Aitchison College vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/2-2337928634.jpg" alt="img" />
<span class="view_btn"> Football Match </span>
</a>
<a href="newsletter/news/images/3-8902962188.jpg" title="Senior Practice Football Match Aitchison College vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/3-8415095634.jpg" alt="img" />
 <span class="view_btn"> Football Match </span>
</a>
<a href="newsletter/news/images/4-3245173005.jpg" title="Senior Practice Football Match Aitchison College vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/4-797722945.jpg" alt="img" />
<span class="view_btn"> Football Match </span>
</a>
<a href="newsletter/news/images/5-1225143686.jpg" title="Senior Practice Football Match Aitchison College vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/5-4089364834.jpg" alt="img" />
<span class="view_btn"> Football Match </span>
</a>
<a href="newsletter/news/images/6-3950653745.jpg" title="Senior Practice Football Match Aitchison College vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/6-1032385043.jpg" alt="img" />
<span class="view_btn"> Football Match </span>
</a>
<a href="newsletter/news/images/7-7370868832.jpg" title="Senior Practice Football Match Aitchison College vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/7-2460256478.jpg" alt="img" />
<span class="view_btn"> Football Match </span>
</a>
<a href="newsletter/news/images/8-3618334808.jpg" title="Senior Practice Football Match Aitchison College vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/8-921273882.jpg" alt="img" />
<span class="view_btn"> Football Match </span>
</a>
<a href="newsletter/news/images/9-5969861236.jpg" title="Senior Practice Football Match Aitchison College vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/9-5692412152.jpg" alt="img" />
<span class="view_btn"> Football Match </span>
</a>
<a href="newsletter/news/images/10-6220037906.jpg" title="Senior Practice Football Match Aitchison College vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/10-4633108509.jpg" alt="img" />
<span class="view_btn"> Football Match </span>
</a>
<a href="newsletter/news/images/11-4462965778.jpg" title="Senior Practice Football Match Aitchison College vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/11-1393049143.jpg" alt="img" />
<span class="view_btn"> Football Match </span>
</a>
 <a href="newsletter/news/images/12-8439582265.jpg" title="Senior Practice Football Match Aitchison College vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/12-9835314835.jpg" alt="img" />
<span class="view_btn"> Football Match </span>
</a>
<a href="newsletter/news/images/13-4292983307.jpg" title="Senior Practice Football Match Aitchison College vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/13-2389323753.jpg" alt="img" />
<span class="view_btn"> Football Match </span>
</a>
<a href="newsletter/news/images/14-5545907213.jpg" title="Senior Practice Football Match Aitchison College vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/14-8220409127.jpg" alt="img" />
<span class="view_btn"> Football Match </span>
</a>
<a href="newsletter/news/images/15-4020099990.jpg" title="Senior Practice Football Match Aitchison College vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/15-2764146522.jpg" alt="img" />
<span class="view_btn"> Football Match </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab4")?"  show active":"";?>" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
				<p class="gtitle0">Aitchison Hockey XI edges out Aitchison Campus School 4-3</p>
				<div id="gallerySLide4" class="sgallery_area4">
					<a href="newsletter/news/images/1-6417636284.jpg" title="Aitchison Hockey XI edges out Aitchison Campus School 4-3">
<img class="gallery_img" src="newsletter/news/images/1-4345047946.jpg" alt="img" />
<span class="view_btn"> Aitchison Hockey XI </span>
</a>
<a href="newsletter/news/images/2-6783456774.jpg" title="Aitchison Hockey XI edges out Aitchison Campus School 4-3">
<img class="gallery_img" src="newsletter/news/images/2-79769060.jpg" alt="img" />
<span class="view_btn"> Aitchison Hockey XI </span>
</a>
<a href="newsletter/news/images/3-2291977647.jpg" title="Aitchison Hockey XI edges out Aitchison Campus School 4-3">
<img class="gallery_img" src="newsletter/news/images/3-5165003089.jpg" alt="img" />
<span class="view_btn"> Aitchison Hockey XI </span>
</a>
<a href="newsletter/news/images/4-9848840446.jpg" title="Aitchison Hockey XI edges out Aitchison Campus School 4-3">
<img class="gallery_img" src="newsletter/news/images/4-4714155137.jpg" alt="img" />
<span class="view_btn"> Aitchison Hockey XI </span>
</a>
<a href="newsletter/news/images/5-9357317175.jpg" title="Aitchison Hockey XI edges out Aitchison Campus School 4-3">
<img class="gallery_img" src="newsletter/news/images/5-9147031212.jpg" alt="img" />
<span class="view_btn"> Aitchison Hockey XI </span>
</a>
<a href="newsletter/news/images/6-6355717626.jpg" title="Aitchison Hockey XI edges out Aitchison Campus School 4-3">
<img class="gallery_img" src="newsletter/news/images/6-3278879927.jpg" alt="img" />
<span class="view_btn"> Aitchison Hockey XI </span>
</a>
<a href="newsletter/news/images/7-253902711.jpg" title="Aitchison Hockey XI edges out Aitchison Campus School 4-3">
<img class="gallery_img" src="newsletter/news/images/7-3509829618.jpg" alt="img" />
<span class="view_btn"> Aitchison Hockey XI </span>
</a>
<a href="newsletter/news/images/8-490681046.jpg" title="Aitchison Hockey XI edges out Aitchison Campus School 4-3">
<img class="gallery_img" src="newsletter/news/images/8-3075788993.jpg" alt="img" />
<span class="view_btn"> Aitchison Hockey XI </span>
</a>
<a href="newsletter/news/images/9-3364207369.jpg" title="Aitchison Hockey XI edges out Aitchison Campus School 4-3">
<img class="gallery_img" src="newsletter/news/images/9-1854827911.jpg" alt="img" />
<span class="view_btn"> Aitchison Hockey XI </span>
</a>
<a href="newsletter/news/images/10-579602036.jpg" title="Aitchison Hockey XI edges out Aitchison Campus School 4-3">
<img class="gallery_img" src="newsletter/news/images/10-9517831126.jpg" alt="img" />
<span class="view_btn"> Aitchison Hockey XI </span>
</a>
<a href="newsletter/news/images/11-4961745962.jpg" title="Aitchison Hockey XI edges out Aitchison Campus School 4-3">
<img class="gallery_img" src="newsletter/news/images/11-3568649907.jpg" alt="img" />
<span class="view_btn"> Aitchison Hockey XI </span>
</a>
<a href="newsletter/news/images/12-5648304739.jpg" title="Aitchison Hockey XI edges out Aitchison Campus School 4-3">
<img class="gallery_img" src="newsletter/news/images/12-592956530.jpg" alt="img" />
<span class="view_btn"> Aitchison Hockey XI </span>
</a>
<a href="newsletter/news/images/13-6211848688.jpg" title="Aitchison Hockey XI edges out Aitchison Campus School 4-3">
<img class="gallery_img" src="newsletter/news/images/13-8216586210.jpg" alt="img" />
<span class="view_btn"> Aitchison Hockey XI </span>
</a>
<a href="newsletter/news/images/14-7269754793.jpg" title="Aitchison Hockey XI edges out Aitchison Campus School 4-3">
<img class="gallery_img" src="newsletter/news/images/14-5078946623.jpg" alt="img" />
<span class="view_btn"> Aitchison Hockey XI </span>
</a>
<a href="newsletter/news/images/15-1272248790.jpg" title="Aitchison Hockey XI edges out Aitchison Campus School 4-3">
<img class="gallery_img" src="newsletter/news/images/15-1976401493.jpg" alt="img" />
<span class="view_btn"> Aitchison Hockey XI </span>
</a>
<a href="newsletter/news/images/16-4947729805.jpg" title="Aitchison Hockey XI edges out Aitchison Campus School 4-3">
<img class="gallery_img" src="newsletter/news/images/16-7955179029.jpg" alt="img" />
<span class="view_btn"> Aitchison Hockey XI </span>
</a>
<a href="newsletter/news/images/17-9795506388.jpg" title="Aitchison Hockey XI edges out Aitchison Campus School 4-3">
<img class="gallery_img" src="newsletter/news/images/17-3334838998.jpg" alt="img" />
<span class="view_btn"> Aitchison Hockey XI </span>
</a>
<a href="newsletter/news/images/18-8707547073.jpg" title="Aitchison Hockey XI edges out Aitchison Campus School 4-3">
<img class="gallery_img" src="newsletter/news/images/18-666994653.jpg" alt="img" />
<span class="view_btn"> Aitchison Hockey XI </span>
</a>
<a href="newsletter/news/images/19-1815287098.jpg" title="Aitchison Hockey XI edges out Aitchison Campus School 4-3">
<img class="gallery_img" src="newsletter/news/images/19-4939348544.jpg" alt="img" />
<span class="view_btn"> Aitchison Hockey XI </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab5")?"  show active":"";?>" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
				<p class="gtitle0">Cricket Practice Match AC U/14 Colts vs Campus Boys
				</p>
				<div id="gallerySLide5" class="sgallery_area4">
					<a href="newsletter/news/images/1-7744814179.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/1-7501236623.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/2-698001554.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/2-4898750498.jpg" alt="img" />
 <span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/3-7699874498.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/3-3045548382.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/4-5143840828.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/4-533198564.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/5-5189590849.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/5-1134203962.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/6-5261763381.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/6-8017612375.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/7-8970547280.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/7-2482340276.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/8-852853173.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/8-9781735175.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/9-9690156545.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/9-3645346722.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/10-7739352608.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/10-9811035300.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/11-9514826094.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/11-9553075676.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/12-6570500766.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/12-3931050102.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/13-1566219875.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/13-6867982310.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/14-2439722880.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/14-3241516193.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/15-6317831501.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/15-2668464319.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/16-317833365.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/16-7567111197.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/17-9685561152.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/17-8241701973.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/18-8519503753.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/18-9509413259.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/19-5259563490.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/19-537745111.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>

<a href="newsletter/news/images/20-5337710597.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/20-5864869040.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/21-751482904.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/21-4479695683.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/22-9297177055.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/22-1917957837.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/23-5178775284.jpg" title="Cricket Practice Match AC U/14 Colts vs Campus Boys">
<img class="gallery_img" src="newsletter/news/images/23-3803667083.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab6")?"  show active":"";?>" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
				<p class="gtitle0">4<sup>th</sup> Aitchison Swimming Carnival 2022 - 2023
					<br><span  class="gtitle1">Age Group: U/8, U/10, U/12, U/14, U/16 and O/16

</span>
				</p>
				<div id="gallerySLide6" class="sgallery_area4">
					<a href="newsletter/news/images/1-877736025.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/1-5409056342.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/2-8152841381.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/2-7971527105.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/3-7457884869.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/3-9936958201.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/4-1886138159.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/4-2449581650.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/5-329435318.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/5-3259917528.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/6-5646655066.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/6-1924012018.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/7-7630588148.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/7-4037435490.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/8-8079567763.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/8-746561957.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/9-5800847994.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/9-4572522121.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/10-8666030366.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/10-1852000019.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/11-7299854494.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/11-7990758500.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/12-5342611693.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/12-3233590180.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/13-2860318843.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/13-1158439412.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/14-9922232255.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
 <img class="gallery_img" src="newsletter/news/images/14-5588423764.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/15-9430822978.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/15-9089468895.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/16-7626693328.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/16-3554744225.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/17-6991438930.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/17-7665062070.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/18-4341005174.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/18-5866555948.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/19-7524036333.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/19-7817297839.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/20-7931653749.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/20-3363801060.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/21-8940673278.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/21-5953912662.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/22-7301608142.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/22-4733261868.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/23-2504676058.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/23-2789066083.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/24-1190805920.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/24-6894826248.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/25-872553184.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/25-8448919225.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/26-1223797705.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/26-2873832807.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/27-7754312383.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/27-8220649667.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
<a href="newsletter/news/images/28-7876804685.jpg" title="4th Aitchison Swimming Carnival 2022 - 2023">
<img class="gallery_img" src="newsletter/news/images/28-9238876680.jpg" alt="img" />
<span class="view_btn"> Swimming Carnival </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab7")?"  show active":"";?>" id="tab7" role="tabpanel" aria-labelledby="tab7-tab">
				<p class="gtitle0">Aitchison College Table Tennis Championship					
				</p>
				<div id="gallerySLide7" class="sgallery_area4">
					<a href="newsletter/news/images/1-229311870.jpg" title="College Table Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/1-9127782097.jpg" alt="img" />
<span class="view_btn"> Table Tennis </span>
</a>
<a href="newsletter/news/images/2-5001368601.jpg" title="College Table Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/2-4730654852.jpg" alt="img" />
<span class="view_btn"> Table Tennis </span>
</a>
 <a href="newsletter/news/images/3-5960791967.jpg" title="College Table Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/3-7219777179.jpg" alt="img" />
<span class="view_btn"> Table Tennis </span>
</a>
<a href="newsletter/news/images/4-4380580.jpg" title="College Table Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/4-7022055040.jpg" alt="img" />
<span class="view_btn"> Table Tennis </span>
</a>
<a href="newsletter/news/images/5-4422617258.jpg" title="College Table Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/5-3372561481.jpg" alt="img" />
<span class="view_btn"> Table Tennis </span>
</a>
<a href="newsletter/news/images/6-5534651569.jpg" title="College Table Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/6-9896051951.jpg" alt="img" />
<span class="view_btn"> Table Tennis </span>
</a>
<a href="newsletter/news/images/7-7920149693.jpg" title="College Table Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/7-9454137491.jpg" alt="img" />
<span class="view_btn"> Table Tennis </span>
</a>
<a href="newsletter/news/images/8-6120173197.jpg" title="College Table Tennis Championship">
<img class="gallery_img" src="newsletter/news/images/8-5484169794.jpg" alt="img" />
<span class="view_btn"> Table Tennis </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab8")?"  show active":"";?>" id="tab8" role="tabpanel" aria-labelledby="tab8-tab">
				<p class="gtitle0">South East Asian Mathematical Olympiad - Prep School</p>
				<div id="gallerySLide8" class="sgallery_area4">
					<a href="newsletter/news/images/1-3048645272.jpg" title="SEAMO Prep School">
<img class="gallery_img" src="newsletter/news/images/1-1545421337.jpg" alt="img" />
<span class="view_btn"> SEAMO Prep School </span>
</a>
<a href="newsletter/news/images/2-842398010.jpg" title="SEAMO Prep School">
<img class="gallery_img" src="newsletter/news/images/2-9140263701.jpg" alt="img" />
<span class="view_btn"> SEAMO Prep School </span>
</a>
<a href="newsletter/news/images/3-7615797707.jpg" title="SEAMO Prep School">
<img class="gallery_img" src="newsletter/news/images/3-3826339330.jpg" alt="img" />
<span class="view_btn"> SEAMO Prep School </span>
</a>
<a href="newsletter/news/images/4-6704472361.jpg" title="SEAMO Prep School">
<img class="gallery_img" src="newsletter/news/images/4-7812640291.jpg" alt="img" />
<span class="view_btn"> SEAMO Prep School </span>
</a>
<a href="newsletter/news/images/5-1873432616.jpg" title="SEAMO Prep School">
<img class="gallery_img" src="newsletter/news/images/5-9193901987.jpg" alt="img" /> 
<span class="view_btn"> SEAMO Prep School </span>
</a>
<a href="newsletter/news/images/6-833985812.jpg" title="SEAMO Prep School">
<img class="gallery_img" src="newsletter/news/images/6-3996253226.jpg" alt="img" />
<span class="view_btn"> SEAMO Prep School </span>
</a>
<a href="newsletter/news/images/7-1875665569.jpg" title="SEAMO Prep School">
<img class="gallery_img" src="newsletter/news/images/7-4567370124.jpg" alt="img" />
<span class="view_btn"> SEAMO Prep School </span>
</a>
<a href="newsletter/news/images/8-2190498601.jpg" title="SEAMO Prep School">
<img class="gallery_img" src="newsletter/news/images/8-6090631604.jpg" alt="img" />
<span class="view_btn"> SEAMO Prep School </span>
</a>
<a href="newsletter/news/images/9-7879578048.jpg" title="SEAMO Prep School">
<img class="gallery_img" src="newsletter/news/images/9-2092568304.jpg" alt="img" />
<span class="view_btn"> SEAMO Prep School </span>
</a>
<a href="newsletter/news/images/10-4538315746.jpg" title="SEAMO Prep School">
<img class="gallery_img" src="newsletter/news/images/10-3777077145.jpg" alt="img" />
<span class="view_btn"> SEAMO Prep School </span>
</a>
<a href="newsletter/news/images/11-3563762809.jpg" title="SEAMO Prep School">
<img class="gallery_img" src="newsletter/news/images/11-7414032740.jpg" alt="img" />
<span class="view_btn"> SEAMO Prep School </span>
</a>
<a href="newsletter/news/images/12-5691245670.jpg" title="SEAMO Prep School">
<img class="gallery_img" src="newsletter/news/images/12-885467441.jpg" alt="img" />
<span class="view_btn"> SEAMO Prep School </span>
</a>
<a href="newsletter/news/images/13-7207807506.jpg" title="SEAMO Prep School">
<img class="gallery_img" src="newsletter/news/images/13-7900876172.jpg" alt="img" />
<span class="view_btn"> SEAMO Prep School </span>
</a>
<a href="newsletter/news/images/14-9471152201.jpg" title="SEAMO Prep School">
<img class="gallery_img" src="newsletter/news/images/14-715707727.jpg" alt="img" />
<span class="view_btn"> SEAMO Prep School </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab9")?"  show active":"";?>" id="tab9" role="tabpanel" aria-labelledby="tab9-tab">
				<p class="gtitle0">E2 Boys vs Defence Degree College</p>
				<div id="gallerySLide8" class="sgallery_area4">
					<a href="newsletter/news/images/1-164307970.jpg" title="E2 Boys vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/1-1402237028.jpg" alt="img" />
<span class="view_btn"> E2 Boys vs Defence Degree College </span>
</a>
<a href="newsletter/news/images/2-1716654362.jpg" title="E2 Boys vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/2-9838075064.jpg" alt="img" />
<span class="view_btn"> E2 Boys vs Defence Degree College </span>
</a>
<a href="newsletter/news/images/3-596185299.jpg" title="E2 Boys vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/3-3769128208.jpg" alt="img" />
<span class="view_btn"> E2 Boys vs Defence Degree College </span>
</a>
<a href="newsletter/news/images/4-2514873841.jpg" title="E2 Boys vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/4-6518036299.jpg" alt="img" />
<span class="view_btn"> E2 Boys vs Defence Degree College </span>
</a>
<a href="newsletter/news/images/5-6115852154.jpg" title="E2 Boys vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/5-2595804779.jpg" alt="img" />
<span class="view_btn"> E2 Boys vs Defence Degree College </span>
</a>
<a href="newsletter/news/images/6-9362635773.jpg" title="E2 Boys vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/6-7046232579.jpg" alt="img" />
<span class="view_btn"> E2 Boys vs Defence Degree College </span>
</a>
<a href="newsletter/news/images/7-5328511522.jpg" title="E2 Boys vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/7-7092848273.jpg" alt="img" />
<span class="view_btn"> E2 Boys vs Defence Degree College </span>
</a>
<a href="newsletter/news/images/8-6263850410.jpg" title="E2 Boys vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/8-2748128588.jpg" alt="img" />
<span class="view_btn"> E2 Boys vs Defence Degree College </span>
</a>
<a href="newsletter/news/images/9-3599438693.jpg" title="E2 Boys vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/9-2880129295.jpg" alt="img" />
<span class="view_btn"> E2 Boys vs Defence Degree College </span>
</a>
<a href="newsletter/news/images/10-3596401604.jpg" title="E2 Boys vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/10-8298257771.jpg" alt="img" />
<span class="view_btn"> E2 Boys vs Defence Degree College </span>
</a>
<a href="newsletter/news/images/11-7359694577.jpg" title="E2 Boys vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/11-8329256875.jpg" alt="img" />
<span class="view_btn"> E2 Boys vs Defence Degree College </span>
</a>
<a href="newsletter/news/images/12-8826646045.jpg" title="E2 Boys vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/12-9394161424.jpg" alt="img" />
<span class="view_btn"> E2 Boys vs Defence Degree College </span>
</a>
<a href="newsletter/news/images/13-100829809.jpg" title="E2 Boys vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/13-723297318.jpg" alt="img" />
<span class="view_btn"> E2 Boys vs Defence Degree College </span>
</a>
 <a href="newsletter/news/images/14-2533322038.jpg" title="E2 Boys vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/14-4205852038.jpg" alt="img" />
<span class="view_btn"> E2 Boys vs Defence Degree College </span>
</a>
<a href="newsletter/news/images/15-4030443299.jpg" title="E2 Boys vs Defence Degree College">
<img class="gallery_img" src="newsletter/news/images/15-3205682303.jpg" alt="img" />
<span class="view_btn"> E2 Boys vs Defence Degree College </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab10")?"  show active":"";?>" id="tab10" role="tabpanel" aria-labelledby="tab10-tab">
				<p class="gtitle0">Colts Probables vs Message Grammar School</p>
				<div id="gallerySLide10" class="sgallery_area4">
					<a href="newsletter/news/images/1-6363301027.jpg" title="Colts Probables vs Message Grammar School">
<img class="gallery_img" src="newsletter/news/images/1-1299851225.jpg" alt="img" />
<span class="view_btn"> Colts Probables vs Message Grammar School </span>
</a>
<a href="newsletter/news/images/2-6168081625.jpg" title="Colts Probables vs Message Grammar School">
<img class="gallery_img" src="newsletter/news/images/2-3158725213.jpg" alt="img" />
<span class="view_btn"> Colts Probables vs Message Grammar School </span>
</a>
<a href="newsletter/news/images/3-9630791754.jpg" title="Colts Probables vs Message Grammar School">
<img class="gallery_img" src="newsletter/news/images/3-4912563545.jpg" alt="img" />
<span class="view_btn"> Colts Probables vs Message Grammar School </span>
</a>
<a href="newsletter/news/images/4-9256161259.jpg" title="Colts Probables vs Message Grammar School">
<img class="gallery_img" src="newsletter/news/images/4-2022090702.jpg" alt="img" />
<span class="view_btn"> Colts Probables vs Message Grammar School </span>
</a>
<a href="newsletter/news/images/5-663563334.jpg" title="Colts Probables vs Message Grammar School">
<img class="gallery_img" src="newsletter/news/images/5-9366117818.jpg" alt="img" />
<span class="view_btn"> Colts Probables vs Message Grammar School </span>
</a>
<a href="newsletter/news/images/6-9187179559.jpg" title="Colts Probables vs Message Grammar School">
<img class="gallery_img" src="newsletter/news/images/6-1839101536.jpg" alt="img" />
<span class="view_btn"> Colts Probables vs Message Grammar School </span>
</a>
<a href="newsletter/news/images/7-1713705101.jpg" title="Colts Probables vs Message Grammar School">
<img class="gallery_img" src="newsletter/news/images/7-2451871501.jpg" alt="img" />
<span class="view_btn"> Colts Probables vs Message Grammar School </span>
</a>
<a href="newsletter/news/images/8-636446250.jpg" title="Colts Probables vs Message Grammar School">
<img class="gallery_img" src="newsletter/news/images/8-4638421198.jpg" alt="img" />
<span class="view_btn"> Colts Probables vs Message Grammar School </span>
</a>
<a href="newsletter/news/images/9-6038414006.jpg" title="Colts Probables vs Message Grammar School">
<img class="gallery_img" src="newsletter/news/images/9-3346724139.jpg" alt="img" />
<span class="view_btn"> Colts Probables vs Message Grammar School </span>
</a>
<a href="newsletter/news/images/10-7732684309.jpg" title="Colts Probables vs Message Grammar School">
<img class="gallery_img" src="newsletter/news/images/10-3938450477.jpg" alt="img" />
<span class="view_btn"> Colts Probables vs Message Grammar School </span>
</a>
<a href="newsletter/news/images/11-7539813263.jpg" title="Colts Probables vs Message Grammar School">
 <img class="gallery_img" src="newsletter/news/images/11-8469337768.jpg" alt="img" />
<span class="view_btn"> Colts Probables vs Message Grammar School </span>
</a>
<a href="newsletter/news/images/12-618587817.jpg" title="Colts Probables vs Message Grammar School">
<img class="gallery_img" src="newsletter/news/images/12-5981853334.jpg" alt="img" />
<span class="view_btn"> Colts Probables vs Message Grammar School </span>
</a>
<a href="newsletter/news/images/13-2625212829.jpg" title="Colts Probables vs Message Grammar School">
<img class="gallery_img" src="newsletter/news/images/13-7597012151.jpg" alt="img" />
<span class="view_btn"> Colts Probables vs Message Grammar School </span>
</a>
<a href="newsletter/news/images/14-3231894333.jpg" title="Colts Probables vs Message Grammar School">
<img class="gallery_img" src="newsletter/news/images/14-7661839098.jpg" alt="img" />
<span class="view_btn"> Colts Probables vs Message Grammar School </span>
</a>
<a href="newsletter/news/images/15-3048487203.jpg" title="Colts Probables vs Message Grammar School">
<img class="gallery_img" src="newsletter/news/images/15-2885592383.jpg" alt="img" />
<span class="view_btn"> Colts Probables vs Message Grammar School </span>
</a>
<a href="newsletter/news/images/16-3369999919.jpg" title="Colts Probables vs Message Grammar School">
<img class="gallery_img" src="newsletter/news/images/16-6013407450.jpg" alt="img" />
<span class="view_btn"> Colts Probables vs Message Grammar School </span>
</a>
<a href="newsletter/news/images/17-8971306798.jpg" title="Colts Probables vs Message Grammar School">
<img class="gallery_img" src="newsletter/news/images/17-6228982639.jpg" alt="img" />
<span class="view_btn"> Colts Probables vs Message Grammar School </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab11")?"  show active":"";?>" id="tab11" role="tabpanel" aria-labelledby="tab11-tab">
				<p class="gtitle0">School History Exhibition Prep School</p>
				<div id="gallerySLide11" class="sgallery_area4">
					<a href="newsletter/news/images/1-4825242072.jpg" title="School History Exhibition Prep School">
<img class="gallery_img" src="newsletter/news/images/1-3464643758.jpg" alt="img" />
<span class="view_btn"> School History Exhibition </span>
</a>
<a href="newsletter/news/images/2-7477375820.jpg" title="School History Exhibition Prep School">
<img class="gallery_img" src="newsletter/news/images/2-8171236054.jpg" alt="img" />
<span class="view_btn"> School History Exhibition </span>
</a>
<a href="newsletter/news/images/7-447087382.jpg" title="School History Exhibition Prep School">
<img class="gallery_img" src="newsletter/news/images/7-6150767425.jpg" alt="img" />
<span class="view_btn"> School History Exhibition </span>
</a>
<a href="newsletter/news/images/8-3553496854.jpg" title="School History Exhibition Prep School">
<img class="gallery_img" src="newsletter/news/images/8-6810968411.jpg" alt="img" />
<span class="view_btn"> School History Exhibition </span>
</a>
<a href="newsletter/news/images/5-2106090627.jpg" title="School History Exhibition Prep School">
<img class="gallery_img" src="newsletter/news/images/5-1162917377.jpg" alt="img" />
<span class="view_btn"> School History Exhibition </span>
</a>
<a href="newsletter/news/images/6-8403889351.jpg" title="School History Exhibition Prep School">
<img class="gallery_img" src="newsletter/news/images/6-6345870161.jpg" alt="img" />
<span class="view_btn"> School History Exhibition </span>
</a>
<a href="newsletter/news/images/3-9250709059.jpg" title="School History Exhibition Prep School">
<img class="gallery_img" src="newsletter/news/images/3-4764601035.jpg" alt="img" />
<span class="view_btn"> School History Exhibition </span>
</a>
<a href="newsletter/news/images/4-6712123806.jpg" title="School History Exhibition Prep School">
<img class="gallery_img" src="newsletter/news/images/4-1119603513.jpg" alt="img" />
<span class="view_btn"> School History Exhibition </span>
</a>
<a href="newsletter/news/images/9-175716616.jpg" title="School History Exhibition Prep School">
<img class="gallery_img" src="newsletter/news/images/9-2953464265.jpg" alt="img" />
<span class="view_btn"> School History Exhibition </span>
</a>
<a href="newsletter/news/images/10-1040110880.jpg" title="School History Exhibition Prep School">
<img class="gallery_img" src="newsletter/news/images/10-1871120865.jpg" alt="img" />
<span class="view_btn"> School History Exhibition </span>
</a>
<a href="newsletter/news/images/11-1798168098.jpg" title="School History Exhibition Prep School">
<img class="gallery_img" src="newsletter/news/images/11-2853836625.jpg" alt="img" />
 <span class="view_btn"> School History Exhibition </span>
</a>
<a href="newsletter/news/images/12-75900711.jpg" title="School History Exhibition Prep School">
<img class="gallery_img" src="newsletter/news/images/12-9216223278.jpg" alt="img" />
<span class="view_btn"> School History Exhibition </span>
</a>
<a href="newsletter/news/images/13-3579183915.jpg" title="School History Exhibition Prep School">
<img class="gallery_img" src="newsletter/news/images/13-1050907928.jpg" alt="img" />
<span class="view_btn"> School History Exhibition </span>
</a>
<a href="newsletter/news/images/14-7589191057.jpg" title="School History Exhibition Prep School">
<img class="gallery_img" src="newsletter/news/images/14-7397574732.jpg" alt="img" />
<span class="view_btn"> School History Exhibition </span>
</a>
<a href="newsletter/news/images/15-9773739781.jpg" title="School History Exhibition Prep School">
<img class="gallery_img" src="newsletter/news/images/15-4996414832.jpg" alt="img" />
<span class="view_btn"> School History Exhibition </span>
</a>
<a href="newsletter/news/images/16-5543594805.jpg" title="School History Exhibition Prep School">
<img class="gallery_img" src="newsletter/news/images/16-2241782151.jpg" alt="img" />
<span class="view_btn"> School History Exhibition </span>
</a>
<a href="newsletter/news/images/17-221032190.jpg" title="School History Exhibition Prep School">
<img class="gallery_img" src="newsletter/news/images/17-7360086921.jpg" alt="img" />
<span class="view_btn"> School History Exhibition </span>
</a>
<a href="newsletter/news/images/18-9347532521.jpg" title="School History Exhibition Prep School">
<img class="gallery_img" src="newsletter/news/images/18-2540202747.jpg" alt="img" />
<span class="view_btn"> School History Exhibition </span>
</a>
<a href="newsletter/news/images/19-8941672545.jpg" title="School History Exhibition Prep School">
<img class="gallery_img" src="newsletter/news/images/19-3370486727.jpg" alt="img" />
<span class="view_btn"> School History Exhibition </span>
</a>
<a href="newsletter/news/images/20-9244285309.jpg" title="School History Exhibition Prep School">
<img class="gallery_img" src="newsletter/news/images/20-9380866053.jpg" alt="img" />
<span class="view_btn"> School History Exhibition </span>
</a>
<a href="newsletter/news/images/21-3813899417.jpg" title="School History Exhibition Prep School">
<img class="gallery_img" src="newsletter/news/images/21-7429734585.jpg" alt="img" />
<span class="view_btn"> School History Exhibition </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab12")?"  show active":"";?>" id="tab12" role="tabpanel" aria-labelledby="tab12-tab">
				<p class="gtitle0">JS Swimming Gala</p>
				<div id="gallerySLide12" class="sgallery_area4">
					<a href="newsletter/news/images/001-4735504513.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/001-9437074932.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/002-6718335829.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/002-2390872499.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/003-5869645601.jpg" title="JS Swimming Gala">
 <img class="gallery_img" src="newsletter/news/images/003-7628592215.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/004-8258402923.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/004-2273906310.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/005-9394341486.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/005-8074911204.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/006-9449791204.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/006-7209457777.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/007-8991532281.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/007-2642419061.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/01-1017719320.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/01-1700816256.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/02-7503500619.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/02-1362490992.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/03-6638538471.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/03-2442770173.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/04-7293871254.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/04-6765810244.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/05-5477393757.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/05-6218559685.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/06-649407324.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/06-2326967874.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/1-4434756622.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/1-4787085349.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/2-253494512.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/2-5318010173.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/3-4525603973.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/3-4700010444.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/4-1730445967.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/4-2534194037.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/5-8745129275.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/5-7905264713.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/6-6187725726.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/6-2616498911.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/7-6035551345.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/7-3209117338.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/8-2839213450.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/8-1485576872.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/9-1857010293.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/9-8257647298.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/10-9339084434.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/10-8724212946.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/11-2336016653.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/11-8994742174.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/12-866568410.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/12-9952749756.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/13-7678298122.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/13-695281995.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/14-1866772508.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/14-417527751.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/15-2478134743.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/15-1665736056.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/16-6575956215.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/16-9273928965.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/17-5608474791.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/17-822110341.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/18-4481144678.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/18-5469982220.jpg" alt="img" />
 <span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/19-7461735180.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/19-7192286648.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/20-4157286258.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/20-5519761514.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/21-818457629.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/21-8650545710.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/22-8615850360.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/22-7884922508.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/23-982930241.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/23-8767343583.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/24-4388577138.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/24-9629683499.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/25-7521675517.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/25-9332334380.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/26-9447064666.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/26-72360954.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/27-4413905766.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/27-4205431327.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
 <a href="newsletter/news/images/28-4929280845.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/28-2149034955.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/29-160111439.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/29-8605402788.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/30-1291656808.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/30-107823222.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/31-1833409155.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/31-1188680907.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/32-1081316503.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/32-4901120727.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/33-9287757362.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/33-3669801168.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/34-3788560367.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/34-1240858202.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/35-8759927223.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/35-8822973785.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/36-5455945320.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/36-3606313784.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/37-7502954171.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/37-7654402808.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/38-3636813899.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/38-7448390310.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/39-2273659482.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/39-3871485345.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/40-4929304568.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/40-2919219635.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/41-3089403601.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/41-6356595923.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/42-3569878781.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/42-4489523968.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/43-4634444209.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/43-1047819908.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/44-7402876158.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/44-1659656697.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/45-6672383653.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/45-6023907797.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/46-9152760654.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/46-143086068.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>

<a href="newsletter/news/images/47-1293393149.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/47-4943498123.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/48-5199577859.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/48-6775466288.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/49-3088179661.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/49-1039257439.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/50-766087651.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/50-5288245265.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/51-2897575107.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/51-2087090555.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/52-2581540175.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/52-6824546352.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/53-1788512873.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/53-5753720406.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/54-3381642847.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/54-632174272.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/55-2171733665.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/55-2582498652.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/56-7125301273.jpg" title="JS Swimming Gala">
 <img class="gallery_img" src="newsletter/news/images/56-6515029477.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/57-5416802365.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/57-3709985276.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/58-8879885119.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/58-9025950914.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/59-737757307.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/59-6466499820.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/60-5146594235.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/60-6300596552.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/61-1947641323.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/61-7254303635.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/62-5853028892.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/62-4430927672.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/63-7278099021.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/63-7361645101.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/64-6456972069.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/64-1540997756.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/65-1149454800.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/65-1069334285.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/66-4848130851.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/66-5903006294.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/67-219038887.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/67-4145587352.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/68-5752423380.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/68-7694400155.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
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


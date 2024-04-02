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
	$selectedtab="tab14";
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
			<li class="nav-item btn" role="presentation" id="1706">
                <button class="nav-link<?php echo ($selectedtab =="tab14")?" active":"";?>" id="tab14-tab" data-bs-toggle="tab" data-bs-target="#tab14" type="button" role="tab" aria-controls="tab14" aria-selected="<?php echo ($selectedtab =="tab14")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Young Hockey Colts Defeat Lahore Whites</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1705">
                <button class="nav-link<?php echo ($selectedtab =="tab10")?" active":"";?>" id="tab10-tab" data-bs-toggle="tab" data-bs-target="#tab10" type="button" role="tab" aria-controls="tab10" aria-selected="<?php echo ($selectedtab =="tab10")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Senior and Prep Practice Basketball Match</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1704">
                <button class="nav-link<?php echo ($selectedtab =="tab2")?" active":"";?>" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="<?php echo ($selectedtab =="tab2")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Junior Inter School Football Competition</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1703">
                <button class="nav-link<?php echo ($selectedtab =="tab11")?" active":"";?>" id="tab11-tab" data-bs-toggle="tab" data-bs-target="#tab11" type="button" role="tab" aria-controls="tab11" aria-selected="<?php echo ($selectedtab =="tab11")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">The Mighty Cricket 2nd XI Continues its Winning Ways</button>
            </li>
			
			
			
			<li class="nav-item btn" role="presentation" id="1701">
                <button class="nav-link<?php echo ($selectedtab =="tab12")?" active":"";?>" id="tab12-tab" data-bs-toggle="tab" data-bs-target="#tab12" type="button" role="tab" aria-controls="tab12" aria-selected="<?php echo ($selectedtab =="tab12")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Hockey Match - AC 1st XI vs Abbottabad Public School 1st XI</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1700">
                <button class="nav-link<?php echo ($selectedtab =="tab15")?" active":"";?>" id="tab15-tab" data-bs-toggle="tab" data-bs-target="#tab15" type="button" role="tab" aria-controls="tab15" aria-selected="<?php echo ($selectedtab =="tab15")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Inter School Football Competition</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1699">
                <button class="nav-link<?php echo ($selectedtab =="tab5")?" active":"";?>" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="tab5" aria-selected="<?php echo ($selectedtab =="tab5")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Milad Junior School</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1692">
                <button class="nav-link<?php echo ($selectedtab =="tab8")?" active":"";?>" id="tab8-tab" data-bs-toggle="tab" data-bs-target="#tab8" type="button" role="tab" aria-controls="tab8" aria-selected="<?php echo ($selectedtab =="tab8")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Cricket Match - AC 1st XI vs APS 1st XI</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1679">
                <button class="nav-link<?php echo ($selectedtab =="tab9")?" active":"";?>" id="tab9-tab" data-bs-toggle="tab" data-bs-target="#tab9" type="button" role="tab" aria-controls="tab9" aria-selected="<?php echo ($selectedtab =="tab9")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Cricket Match
- AC 1st XI vs Cadet College Hasan Abdal</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1689">
                <button class="nav-link<?php echo ($selectedtab =="tab6")?" active":"";?>" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab" aria-controls="tab6" aria-selected="<?php echo ($selectedtab =="tab6")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Study Tour To Kalamkaar</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1687">
                <button class="nav-link<?php echo ($selectedtab =="tab4")?" active":"";?>" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="<?php echo ($selectedtab =="tab4")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Annual Cartoon Competition </button>
            </li>
			<li class="nav-item btn" role="presentation" id="1686">
                <button class="nav-link<?php echo ($selectedtab =="tab1")?" active":"";?>" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="<?php echo ($selectedtab =="tab1")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Basketball - AC vs APS</button>
            </li>
			
			<li class="nav-item btn" role="presentation" id="1684">
                <button class="nav-link<?php echo ($selectedtab =="tab3")?" active":"";?>" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="<?php echo ($selectedtab =="tab3")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Hockey Match - Young Colts vs Dar Academy</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1683">
                <button class="nav-link<?php echo ($selectedtab =="tab7")?" active":"";?>" id="tab7-tab" data-bs-toggle="tab" data-bs-target="#tab7" type="button" role="tab" aria-controls="tab7" aria-selected="<?php echo ($selectedtab =="tab7")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Tennis Championship</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1681">
                <button class="nav-link<?php echo ($selectedtab =="tab13")?" active":"";?>" id="tab13-tab" data-bs-toggle="tab" data-bs-target="#tab13" type="button" role="tab" aria-controls="tab13" aria-selected="<?php echo ($selectedtab =="tab13")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Soccer Match - AC vs Abbottobad Public School</button>
            </li>
			
			<?php /*?>
			
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab3")?" active":"";?>" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="<?php echo ($selectedtab =="tab3")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Hockey Match (Young Colts vs Older Dar Academy)</button>
            </li>
			
			
			
			<?php */?>
			
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
			<?php /*?><?php */?>				
			<div class="tab-pane fade<?php echo ($selectedtab =="tab2")?"  show active":"";?>" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
				<p class="gtitle0">Junior Inter School Football Competition
					<span  class="gtitle1">
					<div class="row">
<div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">Kingston vs AC Green</div>
<div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">DDC vs AC Yellow</div>
<div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">AC Green vs AC Yellow</div>
<div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">Beaconhouse vs MGS</div>
<div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">DDC vs Kingston</div>
<div class="col-lg-4 col-md-6 col-sm-12" style="text-align: center;">AC White vs AC Blue</div>
</div>
					</span>

				</p>
				<div id="gallerySLide2" class="sgallery_area4">
					<a href="newsletter/news/images/1-3774911092.jpg" title="Football Competition">
<img class="gallery_img" src="newsletter/news/images/1-5635340958.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/2-8569104913.jpg" title="Football Competition">
<img class="gallery_img" src="newsletter/news/images/2-8277801899.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/4-2797814839.jpg" title="Football Competition">
<img class="gallery_img" src="newsletter/news/images/4-7495827794.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/5-4824092813.jpg" title="Football Competition">
<img class="gallery_img" src="newsletter/news/images/5-56069906.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/6-1607646584.jpg" title="Football Competition">
<img class="gallery_img" src="newsletter/news/images/6-5244989629.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/7-9808202151.jpg" title="Football Competition">
<img class="gallery_img" src="newsletter/news/images/7-9281300061.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/8-6529231592.jpg" title="Football Competition">
<img class="gallery_img" src="newsletter/news/images/8-8664141787.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/9-5896524761.jpg" title="Football Competition">
<img class="gallery_img" src="newsletter/news/images/9-3928576287.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/10-5858606991.jpg" title="Football Competition">
<img class="gallery_img" src="newsletter/news/images/10-2535144473.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/11-3523522355.jpg" title="Football Competition">
<img class="gallery_img" src="newsletter/news/images/11-6968318285.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/12-3425285076.jpg" title="Football Competition">
<img class="gallery_img" src="newsletter/news/images/12-619687929.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/13-6734198774.jpg" title="Football Competition">
<img class="gallery_img" src="newsletter/news/images/13-9615472726.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/14-4645486487.jpg" title="Football Competition">
<img class="gallery_img" src="newsletter/news/images/14-9439414069.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/15-7976910598.jpg" title="Football Competition">
<img class="gallery_img" src="newsletter/news/images/15-8985187961.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/16-8892462045.jpg" title="Football Competition">
<img class="gallery_img" src="newsletter/news/images/16-7174255033.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/17-2669451269.jpg" title="Football Competition">
<img class="gallery_img" src="newsletter/news/images/17-1532779259.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/18-3587590431.jpg" title="Football Competition">
<img class="gallery_img" src="newsletter/news/images/18-9899389416.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/19-6650282598.jpg" title="Football Competition">
<img class="gallery_img" src="newsletter/news/images/19-494671129.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/20-1281186356.jpg" title="Football Competition">
<img class="gallery_img" src="newsletter/news/images/20-1561748452.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/21-5822208897.jpg" title="Football Competition">
<img class="gallery_img" src="newsletter/news/images/21-7816481439.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/22-9564279306.jpg" title="Football Competition">
<img class="gallery_img" src="newsletter/news/images/22-1137400957.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
				</div>
			</div>
			
			<div class="tab-pane fade<?php echo ($selectedtab =="tab4")?"  show active":"";?>" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
				<p class="gtitle0">Annual Cartoon Competition 2022</p>
				<div id="gallerySLide4" class="sgallery_area4">
					<a href="newsletter/news/images/3-7646382933.jpeg" title="Annual Cartoon Competition 2022">
<img class="gallery_img" src="newsletter/news/images/3-3781009936.jpeg" alt="img" />
<span class="view_btn"> Annual Cartoon Competition </span>
</a>
<a href="newsletter/news/images/4-7854459846.jpeg" title="Annual Cartoon Competition 2022">
<img class="gallery_img" src="newsletter/news/images/4-688006885.jpeg" alt="img" />
<span class="view_btn"> Annual Cartoon Competition </span>
</a>
<a href="newsletter/news/images/5-7751141717.jpeg" title="Annual Cartoon Competition 2022">
<img class="gallery_img" src="newsletter/news/images/5-7878871789.jpeg" alt="img" />
<span class="view_btn"> Annual Cartoon Competition </span>
</a>
<a href="newsletter/news/images/6-7112929357.jpeg" title="Annual Cartoon Competition 2022">
<img class="gallery_img" src="newsletter/news/images/6-4989900806.jpeg" alt="img" />
<span class="view_btn"> Annual Cartoon Competition </span>
</a>
<a href="newsletter/news/images/7-3766649253.jpeg" title="Annual Cartoon Competition 2022">
<img class="gallery_img" src="newsletter/news/images/7-6219500876.jpeg" alt="img" />
<span class="view_btn"> Annual Cartoon Competition </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab5")?"  show active":"";?>" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
				<p class="gtitle0">Milad Junior School
</p>
				<div id="gallerySLide5" class="sgallery_area4">
					<a href="newsletter/news/images/1-488075630.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/1-8674509490.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/2-4664402456.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/2-1482746316.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/3-6153311325.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/3-118238515.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/4-2229230835.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/4-1415281507.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/5-8348296140.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/5-3350799781.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/6-9799605475.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/6-3114613681.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/7-9805103155.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/7-4730599353.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/8-9034804946.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/8-1655441957.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/9-4819772318.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/9-6306971173.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/13-9614212199.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/13-8347297731.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/14-3949831258.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/14-3717674465.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/15-9912667180.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/15-7275767111.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/16-5625196515.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/16-384594136.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/17-6218771910.jpg" title="Milad Junior School">
 <img class="gallery_img" src="newsletter/news/images/17-4248397096.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/18-8663711612.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/18-7718503757.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/19-5178165181.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/19-9180230136.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/20-346347526.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/20-6128819554.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/21-2395446181.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/21-1842368475.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/22-6166194118.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/22-6053789679.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/23-6758988428.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/23-347535060.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/24-8855201376.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/24-2555905067.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/25-9192131023.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/25-1471494007.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/26-2650867714.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/26-4035238598.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/27-1130148812.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/27-1217359020.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/28-7011138142.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/28-7700916299.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/29-9523886391.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/29-6145201790.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/30-9504025528.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/30-517434341.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/31-4281402751.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/31-1784792832.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/32-2937630444.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/32-5053371745.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/33-9754911689.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/33-748230077.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/34-7568863298.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/34-8017824550.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/35-2341809549.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/35-8675581355.jpg" alt="img" />
 <span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/36-3111427740.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/36-9006459895.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/37-6916448730.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/37-4101700560.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/38-8660856181.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/38-1333080858.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/39-9290268395.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/39-3695071597.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/40-2572647740.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/40-2565550610.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
<a href="newsletter/news/images/41-7496296898.jpg" title="Milad Junior School">
<img class="gallery_img" src="newsletter/news/images/41-5671903866.jpg" alt="img" />
<span class="view_btn"> Milad Junior School </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab6")?"  show active":"";?>" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
				<p class="gtitle0">Study Tour To Kalamkaar</p>
				<div id="gallerySLide6" class="sgallery_area4">
					<a href="newsletter/news/images/1-4741288422.jpg" title="Study Tour To Kalamkaar">
<img class="gallery_img" src="newsletter/news/images/1-5949594870.jpg" alt="img" />
<span class="view_btn"> Study Tour To Kalamkaar </span>
</a>
<a href="newsletter/news/images/2-6137378406.jpeg" title="Study Tour To Kalamkaar">
<img class="gallery_img" src="newsletter/news/images/2-5446712338.jpeg" alt="img" />
<span class="view_btn"> Study Tour To Kalamkaar </span>
</a>
<a href="newsletter/news/images/3-7425365741.jpg" title="Study Tour To Kalamkaar">
<img class="gallery_img" src="newsletter/news/images/3-1523994375.jpg" alt="img" />
<span class="view_btn"> Study Tour To Kalamkaar </span>
</a>
<a href="newsletter/news/images/4-5912798362.jpeg" title="Study Tour To Kalamkaar">
<img class="gallery_img" src="newsletter/news/images/4-1441557019.jpeg" alt="img" />
<span class="view_btn"> Study Tour To Kalamkaar </span>
</a>

<a href="newsletter/news/images/5-1474303332.jpeg" title="Study Tour To Kalamkaar">
<img class="gallery_img" src="newsletter/news/images/5-3500554279.jpeg" alt="img" />
<span class="view_btn"> Study Tour To Kalamkaar </span>
</a>
<a href="newsletter/news/images/6-2393522823.jpg" title="Study Tour To Kalamkaar">
<img class="gallery_img" src="newsletter/news/images/6-8758623531.jpg" alt="img" />
<span class="view_btn"> Study Tour To Kalamkaar </span>
</a>
<a href="newsletter/news/images/7-3326519957.jpeg" title="Study Tour To Kalamkaar">
<img class="gallery_img" src="newsletter/news/images/7-9442199054.jpeg" alt="img" />
<span class="view_btn"> Study Tour To Kalamkaar </span>
</a>
<a href="newsletter/news/images/8-7423419684.jpeg" title="Study Tour To Kalamkaar">
<img class="gallery_img" src="newsletter/news/images/8-5416758578.jpeg" alt="img" />
<span class="view_btn"> Study Tour To Kalamkaar </span>
</a>
				</div>
			</div>			
			<div class="tab-pane fade<?php echo ($selectedtab =="tab8")?"  show active":"";?>" id="tab8" role="tabpanel" aria-labelledby="tab5-tab">
				<p class="gtitle0">Aitchison 1st XI Defeats APS 1st XI</p>
				<div id="gallerySLide8" class="sgallery_area4">
					<a href="newsletter/news/images/001-5281286571.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/001-3036388057.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/01-1179893991.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/01-3025504187.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/1-7459411821.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/1-6148254253.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/2-7171833465.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/2-1643645361.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/3-3166930229.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/3-9063151350.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/4-648772747.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/4-9272139881.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/5-9507660860.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/5-8687059009.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/6-9017822429.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/6-5394193993.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/7-2613321946.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/7-4241106021.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/8-5229413114.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/8-7149984986.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/9-6494641993.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/9-1058225836.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/11-8643826789.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/11-9281058515.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/12-921682931.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                     <img class="gallery_img" src="newsletter/news/images/12-8822090540.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/13-5426634929.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/13-4840042325.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/14-2564082102.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/14-8626530975.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/15-4551354915.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/15-6979685429.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/16-768977295.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/16-1192216156.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/17-2189134320.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/17-4476652923.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/18-9728855429.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/18-8403937806.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/19-2762808627.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/19-3351897148.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/20-2005760188.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/20-2421371094.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/21-8667810842.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/21-2315787823.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/22-7429634486.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/22-3859031166.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/23-7163463829.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/23-3028920341.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/24-5090559683.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/24-1431209832.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/25-5880555434.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/25-2384366090.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/26-4448830272.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/26-6349699032.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/27-4210889538.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/27-1502669355.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/29-2184521.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/29-8082971347.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/30-2019758066.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/30-8321622086.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/31-1988409021.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/31-7487152096.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
                    <a href="newsletter/news/images/33-8566162334.jpg" title="Aitchison 1st XI Defeats APS 1st XI">
                    <img class="gallery_img" src="newsletter/news/images/33-4692822803.jpg" alt="img" />
                    <span class="view_btn"> Aitchison 1st XI Defeats APS 1st XI </span>
                    </a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab9")?"  show active":"";?>" id="tab9" role="tabpanel" aria-labelledby="tab9-tab">
				<p class="gtitle0">1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal</p>
				<div id="gallerySLide9" class="sgallery_area4">
					<a href="newsletter/news/images/01-3301514806.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/01-6414121243.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
 <a href="newsletter/news/images/02-908925787.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/02-9853100037.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/03-8264872688.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/03-5363495127.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/04-7063571808.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/04-5274045209.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/05-5445887814.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/05-5311750044.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/06-9265790245.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/06-3466465511.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/07-749777855.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/07-69411718.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/08-3872277443.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/08-6310770840.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/09-2867592163.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/09-3473341676.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/10-3636045307.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/10-5098984563.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/11-3950469252.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/11-7481313636.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/12-6960573644.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/12-8103993620.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/13-5739172976.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/13-2659698912.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/14-6973636760.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/14-286001453.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/15-1230482775.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/15-3786527946.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/16-5728383545.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/16-8014350768.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/17-230414098.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/17-6149880586.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/18-6228959691.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/18-1653845337.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
 </a>
<a href="newsletter/news/images/19-3476178194.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/19-7091490034.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/21-1675451392.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/21-505953690.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/25-5208295890.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/25-4196284488.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/26-3226035110.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/26-1641413200.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/27-966419053.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/27-5535362653.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/28-2263159495.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/28-6048352918.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/29-4134890542.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/29-106521470.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/30-8828319784.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/30-8600749550.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/31-5389093280.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/31-3418271808.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/32-5545961622.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/32-8477592235.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/33-2953135231.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/33-1290298944.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/34-1087087147.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/34-6971812141.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/35-6631668720.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/35-2433385766.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/36-6647019981.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/36-2135180862.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/37-2814089585.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/37-9262993980.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/38-2508552161.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/38-3936095303.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/39-5114611353.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/39-1542882127.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/41-9828314569.jpg" title="1st Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/41-9846226296.jpg" alt="img" />
<span class="view_btn"> 1st Cricket XI Cruises </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab10")?"  show active":"";?>" id="tab10" role="tabpanel" aria-labelledby="tab10-tab">
				<p class="gtitle0">Senior and Prep Practice Basketball Match<br>
					<span class="gtitle1"> AC Colts vs Godley House</span>
				</p>
				<div id="gallerySLide10" class="sgallery_area4">
					<a href="newsletter/news/images/1-8323564434.jpg" title="Practice Basketball Match">
<img class="gallery_img" src="newsletter/news/images/1-2057932453.jpg" alt="img" />
<span class="view_btn"> Practice Basketball Match </span>
</a>
<a href="newsletter/news/images/2-7870450760.jpg" title="Practice Basketball Match">
 <img class="gallery_img" src="newsletter/news/images/2-7325541503.jpg" alt="img" />
<span class="view_btn"> Practice Basketball Match </span>
</a>
<a href="newsletter/news/images/3-1616058363.jpg" title="Practice Basketball Match">
<img class="gallery_img" src="newsletter/news/images/3-1938503545.jpg" alt="img" />
<span class="view_btn"> Practice Basketball Match </span>
</a>
<a href="newsletter/news/images/4-2724586695.jpg" title="Practice Basketball Match">
<img class="gallery_img" src="newsletter/news/images/4-9478272211.jpg" alt="img" />
<span class="view_btn"> Practice Basketball Match </span>
</a>
<a href="newsletter/news/images/5-7448843803.jpg" title="Practice Basketball Match">
<img class="gallery_img" src="newsletter/news/images/5-8357812107.jpg" alt="img" />
<span class="view_btn"> Practice Basketball Match </span>
</a>
<a href="newsletter/news/images/6-9354466609.jpg" title="Practice Basketball Match">
<img class="gallery_img" src="newsletter/news/images/6-524778369.jpg" alt="img" />
<span class="view_btn"> Practice Basketball Match </span>
</a>
<a href="newsletter/news/images/7-6060757964.jpg" title="Practice Basketball Match">
<img class="gallery_img" src="newsletter/news/images/7-2827550398.jpg" alt="img" />
<span class="view_btn"> Practice Basketball Match </span>
</a>
<a href="newsletter/news/images/8-4289394033.jpg" title="Practice Basketball Match">
<img class="gallery_img" src="newsletter/news/images/8-1497855939.jpg" alt="img" />
<span class="view_btn"> Practice Basketball Match </span>
</a>
<a href="newsletter/news/images/9-726385593.jpg" title="Practice Basketball Match">
<img class="gallery_img" src="newsletter/news/images/9-4105833626.jpg" alt="img" />
<span class="view_btn"> Practice Basketball Match </span>
</a>
<a href="newsletter/news/images/10-6088778896.jpg" title="Practice Basketball Match">
<img class="gallery_img" src="newsletter/news/images/10-5632969112.jpg" alt="img" />
<span class="view_btn"> Practice Basketball Match </span>
</a>
<a href="newsletter/news/images/11-9430295180.jpg" title="Practice Basketball Match">
<img class="gallery_img" src="newsletter/news/images/11-5407543928.jpg" alt="img" />
<span class="view_btn"> Practice Basketball Match </span>
</a>
<a href="newsletter/news/images/12-4263117573.jpg" title="Practice Basketball Match">
<img class="gallery_img" src="newsletter/news/images/12-6929216993.jpg" alt="img" />
<span class="view_btn"> Practice Basketball Match </span>
</a>
<a href="newsletter/news/images/13-1927587465.jpg" title="Practice Basketball Match">
<img class="gallery_img" src="newsletter/news/images/13-297303878.jpg" alt="img" />
<span class="view_btn"> Practice Basketball Match </span>
</a>
<a href="newsletter/news/images/14-9537740719.jpg" title="Practice Basketball Match">
<img class="gallery_img" src="newsletter/news/images/14-2774906764.jpg" alt="img" />
<span class="view_btn"> Practice Basketball Match </span>
</a>
<a href="newsletter/news/images/15-3207441862.jpg" title="Practice Basketball Match">
<img class="gallery_img" src="newsletter/news/images/15-3450736064.jpg" alt="img" />
<span class="view_btn"> Practice Basketball Match </span>
</a>
<a href="newsletter/news/images/16-6692028744.jpg" title="Practice Basketball Match">
<img class="gallery_img" src="newsletter/news/images/16-2909433140.jpg" alt="img" />
<span class="view_btn"> Practice Basketball Match </span>
</a>
<a href="newsletter/news/images/17-1758265932.jpg" title="Practice Basketball Match">
<img class="gallery_img" src="newsletter/news/images/17-8233220891.jpg" alt="img" />
<span class="view_btn"> Practice Basketball Match </span>
</a>
<a href="newsletter/news/images/18-1086971802.jpg" title="Practice Basketball Match">
<img class="gallery_img" src="newsletter/news/images/18-9731693026.jpg" alt="img" />
<span class="view_btn"> Practice Basketball Match </span>
</a>
<a href="newsletter/news/images/19-2664122268.jpg" title="Practice Basketball Match">
<img class="gallery_img" src="newsletter/news/images/19-7969243484.jpg" alt="img" />
<span class="view_btn"> Practice Basketball Match </span>
</a>
<a href="newsletter/news/images/20-8882665883.jpg" title="Practice Basketball Match">
<img class="gallery_img" src="newsletter/news/images/20-8316847430.jpg" alt="img" />
<span class="view_btn"> Practice Basketball Match </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab11")?"  show active":"";?>" id="tab11" role="tabpanel" aria-labelledby="tab11-tab">
				<p class="gtitle0">The Mighty Cricket 2nd XI Continues its Winning Ways
</p>
				<div id="gallerySLide11" class="sgallery_area4">
					<a href="newsletter/news/images/01-5118372754.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/01-6305617409.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/9-2715286767.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/9-5849314823.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/1-1354837544.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/1-2790855962.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/3-4894749448.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/3-1867569411.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/4-1282998397.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/4-5328986599.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/5-6198825381.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/5-2720484281.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/6-6744280519.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/6-2549444752.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/7-4116608790.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/7-6193528050.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/8-7719292981.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/8-5204626464.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/2-2475906548.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/2-2205151048.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/10-1484280458.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/10-9352653938.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/11-517414284.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/11-8622305171.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/12-7114427789.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/12-1811711216.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/13-1326627431.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/13-5066184886.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/14-4348986668.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/14-9400465767.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/15-1538092308.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/15-6853814625.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/16-4425316979.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/16-8510195865.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/17-3409454560.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/17-1601374972.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/18-4542765082.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/18-7104876873.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/19-4617143912.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/19-8101273789.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/20-2423169465.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/20-7367053823.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/21-93092846.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/21-5591952478.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/22-2086363866.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/22-6459141528.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/23-9287323099.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/23-7594065695.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/24-3494335509.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/24-7810387516.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/25-8160819802.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/25-8897162689.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/26-3182617980.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/26-1376876586.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/27-2189469073.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/27-475719550.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/28-5971717722.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/28-2286627205.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/29-3658189988.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/29-6757928642.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/30-8184699461.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/30-2605130617.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/31-3248224225.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/31-2845195048.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/32-6671914449.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/32-1011128405.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/33-9047941235.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/33-9803876877.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/34-124437782.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/34-5279869041.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/35-822738608.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/35-8352503105.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/36-2628135549.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/36-7490106471.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/37-1221252390.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/37-5401658951.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/38-813150796.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/38-9277880809.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/39-1407472650.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/39-5149190668.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/40-6101204658.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/40-440112679.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/41-7748272675.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/41-1076271161.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/42-383783478.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/42-4233176414.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/43-7001574649.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/43-1934243643.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/44-5646291335.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/44-9963221471.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/45-8955035716.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/45-837934679.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/46-7265928547.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/46-1810386344.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/47-425981342.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/47-5466247446.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/49-9453768929.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/49-8577225619.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/50-4150104151.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/50-4940179341.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/51-7555324077.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/51-6417177625.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/52-3665052338.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/52-853818272.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/53-6552201075.jpg" title="The Mighty Cricket 2nd XI Continues its Winning Ways">
<img class="gallery_img" src="newsletter/news/images/53-5610902048.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab12")?"  show active":"";?>" id="tab12" role="tabpanel" aria-labelledby="tab12-tab">
				<p class="gtitle0">AITCHISON 1ST HOCKEY XI COMFORTABLY DEFEAT ABBOTTABAD PUBLIC SCHOOL 1ST XI</p>
				<div id="gallerySLide12" class="sgallery_area4">
					<a href="newsletter/news/images/2-9602270.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/2-6502874755.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
 <a href="newsletter/news/images/4-5008962357.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/4-4959959198.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/5-2139140175.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/5-6273986938.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/6-6336483349.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/6-6026445571.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/7-5140914606.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/7-6574610310.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/8-221259720.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/8-6305013534.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/9-3560473820.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/9-1857421897.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/10-6699802880.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/10-4939664851.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/11-7327028904.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/11-8446951117.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/12-2214616722.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/12-629100204.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/13-8740517583.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/13-5335459617.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/14-8003800154.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/14-7495281705.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/15-7626195376.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/15-3395184476.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/16-9394872161.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/16-5413686063.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/17-3338675436.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/17-6569696541.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/18-5805571923.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/18-18278718.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/19-1352512098.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/19-9959082159.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/21-8088024860.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/21-5640795960.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/22-6426312620.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/22-8376637590.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/23-4003482359.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/23-9515493962.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/24-6556463284.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/24-3042772020.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/25-9591749179.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/25-2318995507.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/26-1245184273.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/26-9461584867.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/27-1082663969.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/27-9762726857.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/28-956632575.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/28-7227273837.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/29-591667113.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/29-2620681429.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/30-2794793575.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/30-1374045177.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/31-4406274017.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/31-6794873413.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/32-6485621984.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/32-5567827420.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/33-9868732512.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/33-5149965440.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/34-9913082175.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/34-7879708236.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/35-9215420085.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/35-2020778535.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/36-1759191278.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/36-7343947334.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
<a href="newsletter/news/images/37-7529651479.jpg" title="Hockey Fixture Match Senior School">
<img class="gallery_img" src="newsletter/news/images/37-7716901042.jpg" alt="img" />
<span class="view_btn"> Hockey Fixture Match Senior School </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab1")?"  show active":"";?>" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
				<p class="gtitle0">1st Basketball Wins 46-20 Against APS</p>
				<div id="gallerySLide1" class="sgallery_area4">
					<a href="newsletter/news/images/1-6316810377.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/1-8133399172.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/2-6015776657.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/2-2740176813.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/3-2776786933.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/3-5052532763.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/4-7630380885.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/4-5564660892.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/5-5626496893.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/5-6662738374.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/6-4524314931.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/6-6218951214.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/7-7300506860.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/7-3544020523.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/8-3021132525.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/8-2190566764.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/9-8327180558.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/9-7669459729.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/10-4394475405.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/10-3298767689.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/11-1474028836.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/11-5973922323.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/12-2672828436.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/12-6204677258.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/13-8055708620.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/13-9557267993.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/14-2654662193.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/14-4083428147.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/15-2158431987.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/15-4180214321.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/16-584009019.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/16-4348497536.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/17-3795885128.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/17-3766710764.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/18-3216697702.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/18-9829461518.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/19-3495315738.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/19-7096390877.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/20-7876963213.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/20-6046738869.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/21-7042000291.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/21-9258497923.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/22-1499203964.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/22-6886142066.jpg" alt="img" />
 <span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/25-1220374862.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/25-5952478110.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
<a href="newsletter/news/images/23-9985229646.jpg" title="1st Basketball Wins 46-20 Against APS ">
<img class="gallery_img" src="newsletter/news/images/23-9098096026.jpg" alt="img" />
<span class="view_btn"> 1st Basketball Wins </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab3")?"  show active":"";?>" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
				<p class="gtitle0">Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy</p>
				<div id="gallerySLide3" class="sgallery_area4">
					<a href="newsletter/news/images/1-5612280116.jpg" title="Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy">
<img class="gallery_img" src="newsletter/news/images/1-6044856889.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/2-5718954207.jpg" title="Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy">
<img class="gallery_img" src="newsletter/news/images/2-1395318654.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/3-280176038.jpg" title="Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy">
<img class="gallery_img" src="newsletter/news/images/3-280124388.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/4-4754774268.jpg" title="Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy">
<img class="gallery_img" src="newsletter/news/images/4-526986637.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/5-3444585817.jpg" title="Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy">
<img class="gallery_img" src="newsletter/news/images/5-218899882.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/6-1359140434.jpg" title="Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy">
<img class="gallery_img" src="newsletter/news/images/6-6565962177.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/7-2295292746.jpg" title="Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy">
<img class="gallery_img" src="newsletter/news/images/7-619597800.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/8-8734970403.jpg" title="Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy">
<img class="gallery_img" src="newsletter/news/images/8-5868741670.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/9-5818334854.jpg" title="Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy">
<img class="gallery_img" src="newsletter/news/images/9-4282218420.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/10-1505392490.jpg" title="Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy">
<img class="gallery_img" src="newsletter/news/images/10-3434399196.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab7")?"  show active":"";?>" id="tab7" role="tabpanel" aria-labelledby="tab7-tab">
				<p class="gtitle0">Tennis Championship (Age Group: O/13) Prep School</p>
				<div id="gallerySLide7" class="sgallery_area4">
					<a href="newsletter/news/images/1-1634632504.jpg" title="Tennis Championship (Age Group: O/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/1-6893895461.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/2-3360684045.jpg" title="Tennis Championship (Age Group: O/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/2-9881350231.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/3-7623329538.jpg" title="Tennis Championship (Age Group: O/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/3-3596970654.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/4-6231854176.jpg" title="Tennis Championship (Age Group: O/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/4-5764170911.jpg" alt="img" />
 <span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/5-2273244242.jpg" title="Tennis Championship (Age Group: O/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/5-8144352431.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/6-3727202858.jpg" title="Tennis Championship (Age Group: O/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/6-5311220485.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/7-2116737199.jpg" title="Tennis Championship (Age Group: O/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/7-6273533664.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/8-5597278256.jpg" title="Tennis Championship (Age Group: O/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/8-1132356749.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/9-643677371.jpg" title="Tennis Championship (Age Group: O/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/9-6119685170.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/10-1413172726.jpg" title="Tennis Championship (Age Group: O/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/10-6013868151.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/11-9803329175.jpg" title="Tennis Championship (Age Group: O/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/11-6777687994.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/12-8868318928.jpg" title="Tennis Championship (Age Group: O/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/12-5172451603.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/13-1327058347.jpg" title="Tennis Championship (Age Group: O/13) Prep School">
 <img class="gallery_img" src="newsletter/news/images/13-9063985761.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/14-1964772794.jpg" title="Tennis Championship (Age Group: O/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/14-9441597553.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/15-8814486462.jpg" title="Tennis Championship (Age Group: O/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/15-6952470076.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>

<a href="newsletter/news/images/16-9752898575.jpg" title="Tennis Championship (Age Group: O/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/16-7933618119.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
				</div>
			</div>	
			<div class="tab-pane fade<?php echo ($selectedtab =="tab13")?"  show active":"";?>" id="tab13" role="tabpanel" aria-labelledby="tab13-tab">
				<p class="gtitle0">1st Soccer draw 3-3 with Abbottobad Public School</p>
				<div id="gallerySLide13" class="sgallery_area4">
					<a href="newsletter/news/images/1-4338593217.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/1-4255615881.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/2-6005838028.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/2-18023969.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
 <a href="newsletter/news/images/3-2183618303.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/3-4036261212.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/4-342555939.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/4-2261056191.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/5-694246139.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/5-2711775374.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/6-7132203735.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/6-9074872834.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/7-9915323436.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/7-7211398399.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/8-4352763222.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/8-7473200024.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/9-4945924327.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/9-6495907651.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/10-581105342.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/10-4273411912.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/11-4453563577.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/11-8760513468.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
 </a>
<a href="newsletter/news/images/12-2457341244.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/12-3182795047.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/13-7878073876.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/13-1346076210.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/14-7997136913.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/14-4219088964.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/15-5050955857.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/15-4376394911.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/16-8590404373.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/16-4832770163.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/17-9746041892.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/17-3922025112.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/18-7932614318.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/18-518223287.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/19-1317247779.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/19-2043935224.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/20-9599975229.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/20-3413302022.jpg" alt="img" />
 <span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/21-7095271715.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/21-438136255.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/22-9078171100.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/22-6089225230.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/23-1244168902.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/23-1275820199.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/24-9295784315.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/24-7010899684.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/25-3218716913.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/25-1963929846.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/26-4480235189.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/26-6812208069.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/27-9743916585.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/27-6787508166.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/29-6198767139.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/29-8761830975.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/30-1852865675.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
 <img class="gallery_img" src="newsletter/news/images/30-6987160011.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/31-2413140691.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/31-9673868418.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/32-3206539807.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/32-1428741105.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/33-763055530.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/33-8477652701.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/34-2850293294.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/34-8429890707.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/35-3072305951.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/35-9496566125.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/36-7331391776.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/36-1045902698.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/37-2602471401.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/37-3162071445.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/38-50591534.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/38-1388227317.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/39-8324845530.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/39-209733671.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/40-3622518862.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/40-7717302967.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/41-7545507365.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/41-6232240876.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/42-1773779613.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/42-3432099407.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
<a href="newsletter/news/images/43-5876869819.jpg" title="1st Soccer draw 3-3 with Abbottobad Public School">
<img class="gallery_img" src="newsletter/news/images/43-6182164038.jpg" alt="img" />
<span class="view_btn"> 1st Soccer draw </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab14")?"  show active":"";?>" id="tab14" role="tabpanel" aria-labelledby="tab14-tab">
				<p class="gtitle0">Young Hockey Colts Defeat Lahore Whites In Major Victory</p>
				<div id="gallerySLide14" class="sgallery_area4">
					<a href="newsletter/news/images/1-3306437007.jpg" title="Young Hockey Colts Defeat Lahore Whites In Major Victory">
<img class="gallery_img" src="newsletter/news/images/1-5541028190.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/2-230037475.jpg" title="Young Hockey Colts Defeat Lahore Whites In Major Victory">
<img class="gallery_img" src="newsletter/news/images/2-2952318660.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/3-9284046777.jpg" title="Young Hockey Colts Defeat Lahore Whites In Major Victory">
<img class="gallery_img" src="newsletter/news/images/3-2419095566.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/4-643426664.jpg" title="Young Hockey Colts Defeat Lahore Whites In Major Victory">
<img class="gallery_img" src="newsletter/news/images/4-8119603688.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/5-2280150331.jpg" title="Young Hockey Colts Defeat Lahore Whites In Major Victory">
<img class="gallery_img" src="newsletter/news/images/5-5850796000.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/6-9885953023.jpg" title="Young Hockey Colts Defeat Lahore Whites In Major Victory">
<img class="gallery_img" src="newsletter/news/images/6-5612138852.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/7-9339809325.jpg" title="Young Hockey Colts Defeat Lahore Whites In Major Victory">
<img class="gallery_img" src="newsletter/news/images/7-6768126910.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/8-5544185899.jpg" title="Young Hockey Colts Defeat Lahore Whites In Major Victory">
<img class="gallery_img" src="newsletter/news/images/8-5147732393.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/9-6101761748.jpg" title="Young Hockey Colts Defeat Lahore Whites In Major Victory">
<img class="gallery_img" src="newsletter/news/images/9-1687576995.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/10-314719039.jpg" title="Young Hockey Colts Defeat Lahore Whites In Major Victory">
<img class="gallery_img" src="newsletter/news/images/10-4714195845.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/11-8232651001.jpg" title="Young Hockey Colts Defeat Lahore Whites In Major Victory">
<img class="gallery_img" src="newsletter/news/images/11-282629750.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/12-2965994597.jpg" title="Young Hockey Colts Defeat Lahore Whites In Major Victory">
<img class="gallery_img" src="newsletter/news/images/12-2456494335.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/13-4584830496.jpg" title="Young Hockey Colts Defeat Lahore Whites In Major Victory">
<img class="gallery_img" src="newsletter/news/images/13-5801108979.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/14-8624546391.jpg" title="Young Hockey Colts Defeat Lahore Whites In Major Victory">
<img class="gallery_img" src="newsletter/news/images/14-5457761814.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/15-5655298945.jpg" title="Young Hockey Colts Defeat Lahore Whites In Major Victory">
<img class="gallery_img" src="newsletter/news/images/15-78054329.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/16-310343179.jpg" title="Young Hockey Colts Defeat Lahore Whites In Major Victory">
<img class="gallery_img" src="newsletter/news/images/16-5135620773.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/17-1241446841.jpg" title="Young Hockey Colts Defeat Lahore Whites In Major Victory">
<img class="gallery_img" src="newsletter/news/images/17-4311266566.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/18-4506387875.jpg" title="Young Hockey Colts Defeat Lahore Whites In Major Victory">
<img class="gallery_img" src="newsletter/news/images/18-934596832.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/19-8635520658.jpg" title="Young Hockey Colts Defeat Lahore Whites In Major Victory">
<img class="gallery_img" src="newsletter/news/images/19-7494476995.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
<a href="newsletter/news/images/20-3492722343.jpg" title="Young Hockey Colts Defeat Lahore Whites In Major Victory">
<img class="gallery_img" src="newsletter/news/images/20-3999228544.jpg" alt="img" />
<span class="view_btn">  </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab15")?"  show active":"";?>" id="tab15" role="tabpanel" aria-labelledby="tab15-tab">
				<p class="gtitle0">Inter School Football Competition Junior School</p>
				<div id="gallerySLide15" class="sgallery_area4">
					<a href="newsletter/news/images/1-8147489099.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/1-4137635030.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/2-478362972.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/2-1425093179.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/3-2999913101.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/3-7110023630.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/4-7151396851.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/4-3086462394.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/5-254127625.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/5-6323510317.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/6-6844811440.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/6-5432875872.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/7-8632049493.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/7-8658324321.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/8-2650536851.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/8-1473658797.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/9-7778670906.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/9-6017233802.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/10-1964432245.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/10-7881309005.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/11-7191157045.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/11-8165797357.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/12-3062088970.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/12-9540874082.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/13-4143574431.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/13-7473984179.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
 <a href="newsletter/news/images/14-9012978513.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/14-3448579907.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/15-5614314727.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/15-6454306988.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/16-1274056594.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/16-1317795668.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/17-6102464995.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/17-3376099775.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/18-7921980598.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/18-4981234001.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/19-3266806773.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/19-4520426511.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/20-4326865110.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/20-9116853995.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/21-515967103.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/21-3851314936.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/22-8255016477.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/22-5187757955.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/23-9005864656.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/23-6646470249.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/24-6134443980.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/24-36350708.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/25-8195269216.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/25-3827303064.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/26-9274894305.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/26-1455444796.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/27-349185816.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/27-769688422.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/28-9149791690.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/28-5481271916.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/29-4970934466.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/29-6931151680.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/30-3759008787.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/30-8761927458.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/31-513599521.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/31-8812140461.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/32-7892545177.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/32-2251754321.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/33-9313638310.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/33-9445478876.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/34-6729796469.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/34-2011477437.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/35-8960086678.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/35-9829663031.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/36-9473686791.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/36-2578129710.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/37-2359304210.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/37-2155485782.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/38-7825887080.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/38-2820875578.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/39-5715067559.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/39-7941600298.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/40-7934914862.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/40-5463687664.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/41-1273175628.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/41-4115783038.jpg" alt="img" />
 <span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/42-2344721610.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/42-5820703799.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/43-528545632.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/43-9514466930.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/44-1356353924.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/44-7774532506.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
</a>
<a href="newsletter/news/images/45-6828701665.jpg" title="Inter School Football">
<img class="gallery_img" src="newsletter/news/images/45-3685963342.jpg" alt="img" />
<span class="view_btn"> Inter School Football </span>
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


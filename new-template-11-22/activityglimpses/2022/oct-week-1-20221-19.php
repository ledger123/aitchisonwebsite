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
	$selectedtab="tab1";
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
			<?php /*?><li class="nav-item btn" role="presentation" id="">
                <button class="nav-link<?php echo ($selectedtab =="tab1")?" active":"";?>" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="<?php echo ($selectedtab =="tab1")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">TEST ONE</button>
            </li>
			<li class="nav-item btn" role="presentation" id="">
                <button class="nav-link<?php echo ($selectedtab =="tab1")?" active":"";?>" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="<?php echo ($selectedtab =="tab1")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">TEST ONE</button>
            </li>
			<li class="nav-item btn" role="presentation" id="">
                <button class="nav-link<?php echo ($selectedtab =="tab1")?" active":"";?>" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="<?php echo ($selectedtab =="tab1")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">TEST ONE</button>
            </li>
			<li class="nav-item btn" role="presentation" id="">
                <button class="nav-link<?php echo ($selectedtab =="tab1")?" active":"";?>" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="<?php echo ($selectedtab =="tab1")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">TEST ONE</button>
            </li><?php */?>
			<li class="nav-item btn" role="presentation" id="1718">
                <button class="nav-link<?php echo ($selectedtab =="tab1")?" active":"";?>" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="<?php echo ($selectedtab =="tab1")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Cricket Practice Match Prep School</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1717">
                <button class="nav-link<?php echo ($selectedtab =="tab2")?" active":"";?>" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="<?php echo ($selectedtab =="tab2")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">SUPARCO</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1716">
                <button class="nav-link<?php echo ($selectedtab =="tab3")?" active":"";?>" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="<?php echo ($selectedtab =="tab3")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Prep School Saturday Clubs</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1715">
                <button class="nav-link<?php echo ($selectedtab =="tab4")?" active":"";?>" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="<?php echo ($selectedtab =="tab4")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">K-6 Boys vs Paragon Cricket Academy</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1714">
                <button class="nav-link<?php echo ($selectedtab =="tab5")?" active":"";?>" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="tab5" aria-selected="<?php echo ($selectedtab =="tab5")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Cricket Practice Match Prep School</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1713">
                <button class="nav-link<?php echo ($selectedtab =="tab6")?" active":"";?>" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab" aria-controls="tab6" aria-selected="<?php echo ($selectedtab =="tab6")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Water Polo Practice Match</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1712">
                <button class="nav-link<?php echo ($selectedtab =="tab7")?" active":"";?>" id="tab7-tab" data-bs-toggle="tab" data-bs-target="#tab7" type="button" role="tab" aria-controls="tab7" aria-selected="<?php echo ($selectedtab =="tab7")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">ACSS Lunar Astrophotography<?php /*?> SESSION<?php */?></button>
            </li>
			<li class="nav-item btn" role="presentation" id="1711">
                <button class="nav-link<?php echo ($selectedtab =="tab8")?" active":"";?>" id="tab8-tab" data-bs-toggle="tab" data-bs-target="#tab8" type="button" role="tab" aria-controls="tab8" aria-selected="<?php echo ($selectedtab =="tab8")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">AC U/16 vs Lahore Football Academy</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1710">
                <button class="nav-link<?php echo ($selectedtab =="tab9")?" active":"";?>" id="tab9-tab" data-bs-toggle="tab" data-bs-target="#tab9" type="button" role="tab" aria-controls="tab9" aria-selected="<?php echo ($selectedtab =="tab9")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Cricket Practice Match Senior School</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1709">
                <button class="nav-link<?php echo ($selectedtab =="tab10")?" active":"";?>" id="tab10-tab" data-bs-toggle="tab" data-bs-target="#tab10" type="button" role="tab" aria-controls="tab10" aria-selected="<?php echo ($selectedtab =="tab10")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Football Practice Match Prep School</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1708">
                <button class="nav-link<?php echo ($selectedtab =="tab11")?" active":"";?>" id="tab11-tab" data-bs-toggle="tab" data-bs-target="#tab11" type="button" role="tab" aria-controls="tab11" aria-selected="<?php echo ($selectedtab =="tab11")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Junior Inter School Football Championship 2022</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1707">
                <button class="nav-link<?php echo ($selectedtab =="tab12")?" active":"";?>" id="tab12-tab" data-bs-toggle="tab" data-bs-target="#tab12" type="button" role="tab" aria-controls="tab12" aria-selected="<?php echo ($selectedtab =="tab12")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Law moot 2022</button>
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
				<p class="gtitle0">SUPARCO
					<div class="gtitle1">
						<p>"The Aitchison College Science Society commemorated World Space Week by organizing a session in collaboration with the Pakistan Space and Upper Atmosphere Research Commission (SUPARCO) to extend student knowledge and interest in the extensive study of Astronomy. The interactive meeting occurred in the Auditorium during school on the 6th of October. A team of three guest speakers shared their experiences and expertise in the respective field and highlighted the scope of space exploration in Pakistan.</p>
<p>A presentation was also displayed, which primarily linked the concepts of mechanical and electrical engineering with the manufacturing and testing process of rockets, satellites, and probes. The team expressed the importance of sustainability in space and also pointed out some essential practices that students can implement at their level to promote Astronomy as a whole. In the end, a small quiz also took place where the students were awarded souvenirs to boost their confidence. Boys actively participated and enjoyed the event, and the session was hugely successful."</p>
					</div>
				</p>
				<div id="gallerySLide2" class="sgallery_area4">
					<a href="newsletter/news/images/2-2709391805.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/2-3252905583.jpg" alt="img" />
<span class="view_btn"> SUPARCO </span>
</a>
<a href="newsletter/news/images/3-2774646206.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/3-1696114895.jpg" alt="img" />
<span class="view_btn"> SUPARCO </span>
</a>
<a href="newsletter/news/images/5-3407486472.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/5-8633021591.jpg" alt="img" />
<span class="view_btn"> SUPARCO </span>
</a>
<a href="newsletter/news/images/6-6354995187.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/6-737614948.jpg" alt="img" />
<span class="view_btn"> SUPARCO </span>
</a>
<a href="newsletter/news/images/9-2235319868.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/9-7991789756.jpg" alt="img" />
<span class="view_btn"> SUPARCO </span>
</a>
<a href="newsletter/news/images/10-3772086439.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/10-5515461066.jpg" alt="img" />
<span class="view_btn"> SUPARCO </span>
</a>
<a href="newsletter/news/images/12-4395491470.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/12-6455578844.jpg" alt="img" />
<span class="view_btn"> SUPARCO </span>
</a>
<a href="newsletter/news/images/14-3389885612.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/14-3057769226.jpg" alt="img" />
 <span class="view_btn"> SUPARCO </span>
</a>
<a href="newsletter/news/images/15-9712227598.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/15-5593701486.jpg" alt="img" />
<span class="view_btn"> SUPARCO </span>
</a>
<a href="newsletter/news/images/16-4195459796.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/16-6625443932.jpg" alt="img" />
<span class="view_btn"> SUPARCO </span>
</a>
<a href="newsletter/news/images/17-1820569886.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/17-2293749624.jpg" alt="img" />
<span class="view_btn"> SUPARCO </span>
</a>
<a href="newsletter/news/images/18-2741255014.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/18-7845513807.jpg" alt="img" />
<span class="view_btn"> SUPARCO </span>
</a>
<a href="newsletter/news/images/19-502017982.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/19-7999641230.jpg" alt="img" />
<span class="view_btn"> SUPARCO </span>
</a>
<a href="newsletter/news/images/20-6667605095.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/20-4952101932.jpg" alt="img" />
<span class="view_btn"> SUPARCO </span>
</a>
<a href="newsletter/news/images/21-1727424856.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/21-5138752572.jpg" alt="img" />
<span class="view_btn"> SUPARCO </span>
</a>
<a href="newsletter/news/images/22-1197969696.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/22-1285873000.jpg" alt="img" />
<span class="view_btn"> SUPARCO </span>
</a>
<a href="newsletter/news/images/23-7187062190.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/23-6681805389.jpg" alt="img" />
<span class="view_btn"> SUPARCO </span>
</a>
<a href="newsletter/news/images/25-9830811260.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/25-658219548.jpg" alt="img" />
<span class="view_btn"> SUPARCO </span>
</a>
<a href="newsletter/news/images/26-1157460840.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/26-7913308470.jpg" alt="img" />
<span class="view_btn"> SUPARCO </span>
</a>
<a href="newsletter/news/images/27-196734913.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/27-1067342347.jpg" alt="img" />
<span class="view_btn"> SUPARCO </span>
</a>
<a href="newsletter/news/images/28-8231962820.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/28-1306857988.jpg" alt="img" />
<span class="view_btn"> SUPARCO </span>
</a>
<a href="newsletter/news/images/29-253141535.jpg" title="The Aitchison College Science Society commemorated World Space Week">
<img class="gallery_img" src="newsletter/news/images/29-7457253127.jpg" alt="img" />
<span class="view_btn"> SUPARCO </span>
</a>
				</div>
			</div>
			
			<div class="tab-pane fade<?php echo ($selectedtab =="tab4")?"  show active":"";?>" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
				<p class="gtitle0">K-6 Boys vs Paragon Cricket Academy</p>
				<div id="gallerySLide4" class="sgallery_area4">
					<a href="newsletter/news/images/1-5561972784.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/1-1907617776.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/2-718053750.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/2-5814946979.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/3-194260476.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/3-3549759471.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/4-6778857148.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/4-2254614391.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/5-5465401389.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/5-4466031650.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/6-6441627335.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/6-9459276707.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/7-8188500520.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/7-7403683708.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/8-295932547.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/8-4983167254.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/9-898864053.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/9-4051238686.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/10-3880791181.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/10-9398331746.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/11-6445033763.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/11-4642849207.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/12-8832688239.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/12-9554070533.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/13-5321962438.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/13-6774079446.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/14-7870198905.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/14-611517472.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/15-4347258811.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/15-418594919.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/16-2301028241.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/16-736776408.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>

</a>
<a href="newsletter/news/images/17-5830056754.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/17-9904105771.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/18-4151604964.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/18-1281980517.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/19-5260799864.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/19-3290244663.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/20-2751115434.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/20-4994754234.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
 </a>
<a href="newsletter/news/images/21-8297808343.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/21-6548676500.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/22-494329893.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/22-3931712802.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/23-2596049900.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/23-6799122841.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/24-5269879569.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/24-9329703556.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/25-2846055848.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/25-5497373062.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/26-8956948652.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/26-4991749938.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/27-3088668557.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/27-6828999536.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/28-2717664553.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/28-7556789559.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/29-7860384543.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/29-8417569865.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/30-9006530053.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/30-7536214529.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/31-3104128765.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/31-2971679116.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/32-3932053538.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/32-3164032529.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/33-9548468576.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/33-887264313.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
<a href="newsletter/news/images/34-9636139109.jpg" title="K-6 Boys vs Paragon Cricket Academy">
<img class="gallery_img" src="newsletter/news/images/34-5181939183.jpg" alt="img" />
<span class="view_btn"> K-6 Boys vs Paragon Cricket Academy </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab5")?"  show active":"";?>" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
				<p class="gtitle0">Cricket Practice Match Prep School<br>
					<span class="gtitle1"> AC Colts (U/14) vs Lahore Grammar School (JT) </span>
				</p>
				<div id="gallerySLide5" class="sgallery_area4">
					<a href="newsletter/news/images/1-254217416.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/1-1470910372.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/2-5528227611.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/2-6077592902.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/3-8701645675.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/3-3740106806.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/4-8292002968.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/4-6944816440.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/5-8678924565.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/5-5148484379.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/6-1475369541.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/6-9691350598.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/7-7869758447.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/7-7261074435.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/8-9202577985.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/8-1892979986.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/9-5082508717.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/9-4430829240.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/10-5557721128.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/10-6413171937.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/11-5735357565.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/11-4953653828.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
 <a href="newsletter/news/images/12-9566455994.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/12-2494320703.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/13-2453165119.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/13-8843246522.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/14-528335670.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/14-6153087982.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/15-8413818739.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/15-6470142298.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/16-526960515.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/16-451964713.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/17-9782287727.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/17-5580820589.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/18-7908982382.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/18-8980620332.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/19-8340962581.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/19-9320504383.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/20-3445890784.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/20-9652207105.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/21-8081546004.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/21-7396166793.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/22-2607045009.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/22-3529009101.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/23-7553031818.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/23-1750483881.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/24-7545377360.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/24-5178511358.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/25-5336362244.jpg" title="Cricket Practice Match Prep School">
<img class="gallery_img" src="newsletter/news/images/25-7272055749.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab6")?"  show active":"";?>" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
				<p class="gtitle0">Water Polo Practice Match Senior School<br>
					<span class="gtitle1">Aitchison College vs Gymkhana Club</span>
				</p>
				<div id="gallerySLide6" class="sgallery_area4">
					<a href="newsletter/news/images/1-5079335299.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/1-8531334116.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/2-6018493320.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/2-6988545255.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/3-4709057685.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/3-6659941748.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/4-9843537911.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/4-5838104183.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/5-893811320.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/5-4317524534.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/6-6494449250.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/6-1807305131.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/7-8413185462.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/7-7549823898.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/8-5064594042.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/8-9469151437.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/9-4975856473.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/9-2836021771.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/10-5294373079.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/10-3533325947.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/11-1106969381.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/11-118345691.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/12-781864590.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/12-4869797784.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/13-1646318729.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/13-4111581602.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/14-4315586080.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/14-2107643296.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/15-9096921924.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/15-2085235743.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/16-63374436.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/16-4624596119.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/17-2846410311.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/17-3763232956.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/18-9390171785.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/18-6486064123.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/19-1302956804.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/19-1671602231.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/20-4795103164.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/20-5074469756.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/21-8897886469.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/21-7615874739.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/22-3256561495.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/22-7683446245.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/23-2058902103.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/23-1485904100.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/24-8062377416.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/24-8646089839.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/25-414755092.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/25-8536129045.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/26-9471346234.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/26-3514511208.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/27-8210306857.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/27-8772941071.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/28-6501423514.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/28-1682466515.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/29-7292348196.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/29-7077422101.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/30-9076053273.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/30-8636962087.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/31-9485242145.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/31-6334147540.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/32-6104386047.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/32-9157744383.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/33-1706735898.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/33-3631440241.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/34-8890419921.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/34-3081313883.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/35-6297024747.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/35-8062462993.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/36-736236025.jpg" title="Water Polo Practice Match Senior School">
 <img class="gallery_img" src="newsletter/news/images/36-9133748765.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/37-2198368574.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/37-7153995490.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
<a href="newsletter/news/images/38-3850662016.jpg" title="Water Polo Practice Match Senior School">
<img class="gallery_img" src="newsletter/news/images/38-6446588030.jpg" alt="img" />
<span class="view_btn"> Water Polo Practice Match Senior School </span>
</a>
				</div>
			</div>			
			<div class="tab-pane fade<?php echo ($selectedtab =="tab8")?"  show active":"";?>" id="tab8" role="tabpanel" aria-labelledby="tab5-tab">
				<p class="gtitle0">Aitchison College U/16 vs Lahore Football Academy</p>
				<div id="gallerySLide8" class="sgallery_area4">
					<a href="newsletter/news/images/1-3324365376.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/1-9844172496.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/2-1269459564.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
 <img class="gallery_img" src="newsletter/news/images/2-8595488145.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/3-4679730807.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/3-4917142787.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/4-5851337467.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/4-8259705907.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/5-8107662708.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/5-5486920814.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/6-6466001458.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/6-5035001839.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/7-6458218608.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/7-602295405.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/8-1880041689.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/8-3967826134.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/9-190190086.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/9-6466861674.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/10-813860180.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/10-4170513035.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/11-5560760508.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/11-4331101483.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/12-4202157470.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/12-4008840557.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/13-8623910269.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/13-1082537001.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/14-6646316582.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/14-8403558476.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/15-4839433436.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/15-9337700958.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/16-7895679932.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/16-2896399339.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/17-6000555158.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/17-9208549988.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/18-4948591652.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/18-5849101348.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/19-1323541479.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/19-1076213769.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/20-5838900485.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/20-2862464052.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/21-5719113876.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/21-2081825487.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/22-7416088716.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/22-333975204.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/23-73947473.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/23-4873766896.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/24-9780259053.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/24-8592170196.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/25-8149040457.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/25-9458947189.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/26-7041060254.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/26-7226975546.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>

<a href="newsletter/news/images/27-801980723.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/27-4713187530.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/28-3042880486.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/28-446936273.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/29-9128761968.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/29-2543496020.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
<a href="newsletter/news/images/30-6143927357.jpg" title="Aitchison College U/16 vs Lahore Football Academy">
<img class="gallery_img" src="newsletter/news/images/30-9833771085.jpg" alt="img" />
<span class="view_btn"> Aitchison College U/16 vs Lahore Football Academy </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab9")?"  show active":"";?>" id="tab9" role="tabpanel" aria-labelledby="tab9-tab">
				<p class="gtitle0">
					Cricket Practice Match Senior School<br>
					<span class="gtitle1">Aitchison 1st XI vs  Punjab College</span>
				</p>
				<div id="gallerySLide9" class="sgallery_area4">
					<a href="newsletter/news/images/01-2786415403.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/01-4587522182.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/1-9231680789.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/1-1964769823.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/2-2925004169.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/2-3658263787.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/3-6546615223.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/3-6226334547.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/4-530233503.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/4-1783884371.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/5-587527561.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/5-3852103688.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/6-8501398436.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/6-4998023511.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/7-1266440873.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/7-7967788208.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/8-4483901016.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/8-6186391746.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/9-3269623188.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/9-6943129166.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/10-9976019976.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/10-5905280523.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/12-6212323116.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/12-8329374813.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/13-3347683327.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/13-2518586276.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/14-4488339156.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/14-7221464435.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/15-2964723717.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/15-2520779297.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/16-4959159944.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/16-3213373609.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/17-6403351054.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/17-4019840622.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/18-3832762494.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/18-9432449835.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/19-6380158291.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/19-8662556602.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/20-9903068658.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/20-9718178813.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/21-3025576914.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/21-5075228633.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/22-1217782149.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/22-475150525.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/23-8509645690.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/23-9521867647.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/24-7726083190.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/24-6159995767.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/25-5266824717.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/25-8481234602.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/26-9916094965.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/26-592692334.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/27-6418727366.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/27-9665772453.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/28-946528320.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/28-6371378243.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/29-5377182952.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/29-1579164214.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/30-2477209937.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/30-5348434695.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/31-1007832242.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/31-7265917567.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/32-8504902996.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/32-2275696074.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/33-8934077583.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/33-6656674285.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/34-8302011524.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/34-5373039419.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/35-3662693485.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/35-4767702734.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/36-6571501025.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/36-4662023241.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/37-1038195272.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/37-4501680347.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/38-63675353.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/38-4167103733.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
<a href="newsletter/news/images/39-3664527755.jpg" title="Cricket Practice Match Aitchison 1st XI vs Punjab College">
<img class="gallery_img" src="newsletter/news/images/39-1925066292.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab10")?"  show active":"";?>" id="tab10" role="tabpanel" aria-labelledby="tab10-tab">
				<p class="gtitle0">Football Practice Match Prep School<br>
					<span class="gtitle1">AC Colts vs Yellow Football Team</span>
				</p>
				<div id="gallerySLide10" class="sgallery_area4">
					<a href="newsletter/news/images/1-3897716865.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/1-4706700614.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/2-4803639817.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/2-6237652179.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/3-9607642845.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/3-1557897997.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/4-7018356784.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/4-1061304716.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/5-2469209838.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/5-4564622417.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/6-7401834028.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/6-7971513082.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/7-3219959466.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/7-6866989909.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/8-1338351998.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/8-3878218304.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/9-936138290.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/9-5652240672.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/10-8565918072.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/10-2149784312.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/11-4945270499.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/11-1533571651.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/12-3405936543.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/12-3009001440.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/13-713945172.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/13-7753863148.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/14-7358465332.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/14-2741662190.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/15-7848622093.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/15-9043899680.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/16-9182117382.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/16-7875728820.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/17-1475488225.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/17-5203598509.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/18-4115717448.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/18-8511522129.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
 </a>
<a href="newsletter/news/images/19-89616975.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/19-6003973508.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/20-6338379618.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/20-9491447379.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/21-5007225594.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/21-2390485617.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/22-5201344596.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/22-282585643.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/23-4436087075.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/23-9662440809.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/24-5104373441.jpg" title="Football Practice Match Prep School AC Colts vs Yellow Football Team">
<img class="gallery_img" src="newsletter/news/images/24-6794052139.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab11")?"  show active":"";?>" id="tab11" role="tabpanel" aria-labelledby="tab11-tab">
				<p class="gtitle0">1st Aitchison College Junior Inter School Football Championship 2022
				</p>
				<div id="gallerySLide11" class="sgallery_area4">
					<a href="newsletter/news/images/1-185097999.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/1-2885575059.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/2-3499105069.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/2-1608413770.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/3-1973275825.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/3-3160155424.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/4-2189249703.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/4-152684798.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/5-6248110483.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/5-2623558211.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/6-6653413274.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/6-5521879749.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/7-4664371265.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/7-2202280980.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/8-2659913506.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/8-2526263694.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/9-4703507205.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/9-5228616122.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/10-5503759698.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/10-3213842734.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/11-4307676235.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/11-7012003675.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/12-684415958.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/12-9377604234.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/13-2740086576.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/13-4860557032.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/16-5005422217.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/16-143201703.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/17-5967702043.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/17-4450188277.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/18-5243287441.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/18-2316409635.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/21-8529063030.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/21-9986934330.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/22-5217656306.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/22-2179478065.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/23-596995713.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/23-4352711857.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/24-7972972357.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/24-6262476032.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/25-6910688664.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/25-7039263345.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/26-6189168839.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/26-6959164564.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/27-5548321588.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/27-5200956139.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/28-6924407082.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/28-1836500559.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/29-5106704633.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/29-9547622986.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/30-2810133796.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/30-7423032943.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/33-8742334289.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/33-5317532605.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/34-5150911029.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/34-36069533.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/35-2506607468.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/35-3488680559.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
<a href="newsletter/news/images/36-8755070851.jpg" title="1st Aitchison College Junior Inter School Football Championship 2022">
<img class="gallery_img" src="newsletter/news/images/36-887382396.jpg" alt="img" />
<span class="view_btn"> Football Competition </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab12")?"  show active":"";?>" id="tab12" role="tabpanel" aria-labelledby="tab12-tab">
				<p class="gtitle0">Law moot 2022<br>
					<div class="gtitle1">
					<p>The Aitchison college law society held its open house law moot on Friday the 30th of September 2022. This was one of the most successful law moots at Aitchison College as 47 young men took part in it. A total of 12 teams participated. Every team had prepared their case exceptionally well which was regarding a corporate manslaughter. On average each court session lasted for about 15 to 20 minutes. The judging criteria was better presentation of evidence, following correct procedures in the court, argumentative and overall research skills, and reference to relevant statutes. </p>
					</div>
				</p>
				<div id="gallerySLide12" class="sgallery_area4">
					<a href="newsletter/news/images/1-1989274526.jpg" title="Law moot 2022 ">
<img class="gallery_img" src="newsletter/news/images/1-5980709583.jpg" alt="img" />
<span class="view_btn"> Law moot 2022 </span>
</a>
<a href="newsletter/news/images/2-1552282047.jpg" title="Law moot 2022 ">
<img class="gallery_img" src="newsletter/news/images/2-5300744564.jpg" alt="img" />
<span class="view_btn"> Law moot 2022 </span>
</a>
<a href="newsletter/news/images/3-5333726742.jpg" title="Law moot 2022 ">
<img class="gallery_img" src="newsletter/news/images/3-9500597567.jpg" alt="img" />
<span class="view_btn"> Law moot 2022 </span>
</a>
<a href="newsletter/news/images/4-6182909371.jpg" title="Law moot 2022 ">
<img class="gallery_img" src="newsletter/news/images/4-7044968218.jpg" alt="img" />
<span class="view_btn"> Law moot 2022 </span>
</a>
<a href="newsletter/news/images/5-9562797224.jpg" title="Law moot 2022 ">
<img class="gallery_img" src="newsletter/news/images/5-4937601859.jpg" alt="img" />
<span class="view_btn"> Law moot 2022 </span>
</a>
<a href="newsletter/news/images/6-346741691.jpg" title="Law moot 2022 ">
<img class="gallery_img" src="newsletter/news/images/6-363913988.jpg" alt="img" />
<span class="view_btn"> Law moot 2022 </span>
</a>
<a href="newsletter/news/images/7-387580297.jpg" title="Law moot 2022 ">
<img class="gallery_img" src="newsletter/news/images/7-4702135860.jpg" alt="img" />
<span class="view_btn"> Law moot 2022 </span>
</a>
<a href="newsletter/news/images/8-5925201926.jpg" title="Law moot 2022 ">
<img class="gallery_img" src="newsletter/news/images/8-4481218311.jpg" alt="img" />
<span class="view_btn"> Law moot 2022 </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab1")?"  show active":"";?>" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
				<p class="gtitle0">Cricket Practice Match Prep School
					<br>
					<span  class="gtitle1"> M-1 Yellow vs M-1 Blue</span>
				</p>
				<div id="gallerySLide1" class="sgallery_area4">
					<a href="newsletter/news/images/1-795443312.jpg" title="Cricket Practice Match Prep School M-1 Yellow vs M-1 Blue">
<img class="gallery_img" src="newsletter/news/images/1-9187060011.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/2-9067057949.jpg" title="Cricket Practice Match Prep School M-1 Yellow vs M-1 Blue">
<img class="gallery_img" src="newsletter/news/images/2-413547400.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/3-5546645088.jpg" title="Cricket Practice Match Prep School M-1 Yellow vs M-1 Blue">
<img class="gallery_img" src="newsletter/news/images/3-7365012991.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/4-6471674921.jpg" title="Cricket Practice Match Prep School M-1 Yellow vs M-1 Blue">
<img class="gallery_img" src="newsletter/news/images/4-4681675371.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/5-6551244162.jpg" title="Cricket Practice Match Prep School M-1 Yellow vs M-1 Blue">
<img class="gallery_img" src="newsletter/news/images/5-267670719.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/6-1971730527.jpg" title="Cricket Practice Match Prep School M-1 Yellow vs M-1 Blue">
<img class="gallery_img" src="newsletter/news/images/6-9953676954.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/7-1720918862.jpg" title="Cricket Practice Match Prep School M-1 Yellow vs M-1 Blue">
<img class="gallery_img" src="newsletter/news/images/7-4357712211.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/8-1215443999.jpg" title="Cricket Practice Match Prep School M-1 Yellow vs M-1 Blue">
<img class="gallery_img" src="newsletter/news/images/8-2844504304.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/9-5985901785.jpg" title="Cricket Practice Match Prep School M-1 Yellow vs M-1 Blue">
<img class="gallery_img" src="newsletter/news/images/9-7383562884.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/10-7438881015.jpg" title="Cricket Practice Match Prep School M-1 Yellow vs M-1 Blue">
<img class="gallery_img" src="newsletter/news/images/10-9205367987.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/11-1351458918.jpg" title="Cricket Practice Match Prep School M-1 Yellow vs M-1 Blue">
<img class="gallery_img" src="newsletter/news/images/11-5214198946.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/12-4036103234.jpg" title="Cricket Practice Match Prep School M-1 Yellow vs M-1 Blue">
<img class="gallery_img" src="newsletter/news/images/12-275070730.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/13-7766472739.jpg" title="Cricket Practice Match Prep School M-1 Yellow vs M-1 Blue">
<img class="gallery_img" src="newsletter/news/images/13-715259864.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/14-2677631646.jpg" title="Cricket Practice Match Prep School M-1 Yellow vs M-1 Blue">
<img class="gallery_img" src="newsletter/news/images/14-2423179832.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/15-4541415390.jpg" title="Cricket Practice Match Prep School M-1 Yellow vs M-1 Blue">
<img class="gallery_img" src="newsletter/news/images/15-2027531216.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/16-7582073253.jpg" title="Cricket Practice Match Prep School M-1 Yellow vs M-1 Blue">
<img class="gallery_img" src="newsletter/news/images/16-4480998504.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
<a href="newsletter/news/images/17-4109894376.jpg" title="Cricket Practice Match Prep School M-1 Yellow vs M-1 Blue">
<img class="gallery_img" src="newsletter/news/images/17-7125728223.jpg" alt="img" />
<span class="view_btn"> Cricket Practice Match Prep School </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab3")?"  show active":"";?>" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
				<p class="gtitle0">Prep School Saturday Clubs</p>
				<div id="gallerySLide3" class="sgallery_area4">
					<a href="newsletter/news/images/1-1528041472.jpg" title="Prep School Saturday Clubs">
<img class="gallery_img" src="newsletter/news/images/1-2107340083.jpg" alt="img" />
<span class="view_btn"> Prep School Saturday Clubs </span>
</a>
<a href="newsletter/news/images/2-8672153583.jpg" title="Prep School Saturday Clubs">
<img class="gallery_img" src="newsletter/news/images/2-6545641775.jpg" alt="img" />
<span class="view_btn"> Prep School Saturday Clubs </span>
</a>
<a href="newsletter/news/images/3-3658453514.jpg" title="Prep School Saturday Clubs">
<img class="gallery_img" src="newsletter/news/images/3-9654190970.jpg" alt="img" />
<span class="view_btn"> Prep School Saturday Clubs </span>
</a>
<a href="newsletter/news/images/4-4983080678.jpg" title="Prep School Saturday Clubs">
<img class="gallery_img" src="newsletter/news/images/4-8694456579.jpg" alt="img" />
<span class="view_btn"> Prep School Saturday Clubs </span>
</a>
<a href="newsletter/news/images/5-117875809.jpg" title="Prep School Saturday Clubs">
<img class="gallery_img" src="newsletter/news/images/5-2427338590.jpg" alt="img" />
<span class="view_btn"> Prep School Saturday Clubs </span>
</a>
<a href="newsletter/news/images/6-9363125975.jpg" title="Prep School Saturday Clubs">
<img class="gallery_img" src="newsletter/news/images/6-8717416886.jpg" alt="img" />
<span class="view_btn"> Prep School Saturday Clubs </span>
</a>
<a href="newsletter/news/images/7-828043323.jpg" title="Prep School Saturday Clubs">
<img class="gallery_img" src="newsletter/news/images/7-6734048036.jpg" alt="img" />
<span class="view_btn"> Prep School Saturday Clubs </span>
</a>
<a href="newsletter/news/images/8-8422205111.jpg" title="Prep School Saturday Clubs">
<img class="gallery_img" src="newsletter/news/images/8-5945132227.jpg" alt="img" />
<span class="view_btn"> Prep School Saturday Clubs </span>
</a>
<a href="newsletter/news/images/9-4619141856.jpg" title="Prep School Saturday Clubs">
<img class="gallery_img" src="newsletter/news/images/9-2880818155.jpg" alt="img" />
<span class="view_btn"> Prep School Saturday Clubs </span>
</a>
<a href="newsletter/news/images/10-2793367610.jpg" title="Prep School Saturday Clubs">
<img class="gallery_img" src="newsletter/news/images/10-9944321066.jpg" alt="img" />
<span class="view_btn"> Prep School Saturday Clubs </span>
</a>
<a href="newsletter/news/images/11-1339698534.jpg" title="Prep School Saturday Clubs">
<img class="gallery_img" src="newsletter/news/images/11-4450078065.jpg" alt="img" />
<span class="view_btn"> Prep School Saturday Clubs </span>
</a>
<a href="newsletter/news/images/12-5984848952.jpg" title="Prep School Saturday Clubs">
<img class="gallery_img" src="newsletter/news/images/12-7240902758.jpg" alt="img" />
<span class="view_btn"> Prep School Saturday Clubs </span>
</a>
<a href="newsletter/news/images/13-176904003.jpg" title="Prep School Saturday Clubs">
<img class="gallery_img" src="newsletter/news/images/13-3088785859.jpg" alt="img" />
<span class="view_btn"> Prep School Saturday Clubs </span>
</a>

<a href="newsletter/news/images/14-2064869454.jpg" title="Prep School Saturday Clubs">
<img class="gallery_img" src="newsletter/news/images/14-2753422547.jpg" alt="img" />
<span class="view_btn"> Prep School Saturday Clubs </span>
</a>
<a href="newsletter/news/images/15-7694733886.jpg" title="Prep School Saturday Clubs">
<img class="gallery_img" src="newsletter/news/images/15-7962378103.jpg" alt="img" />
<span class="view_btn"> Prep School Saturday Clubs </span>
</a>
<a href="newsletter/news/images/16-1962216776.jpg" title="Prep School Saturday Clubs">
<img class="gallery_img" src="newsletter/news/images/16-8855990416.jpg" alt="img" />
<span class="view_btn"> Prep School Saturday Clubs </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab7")?"  show active":"";?>" id="tab7" role="tabpanel" aria-labelledby="tab7-tab">
				<p class="gtitle0">ACSS Lunar Astrophotography session</p>
				<div id="gallerySLide7" class="sgallery_area4">
					<a href="newsletter/news/images/1-1752683842.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/1-3139320424.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/2-276835874.jpg" title="ACSS Lunar Astrophotography session">
 <img class="gallery_img" src="newsletter/news/images/2-7374443455.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/3-4321074980.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/3-7413747961.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/4-5041128061.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/4-7275274760.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/5-612787599.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/5-205832943.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/6-2904626923.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/6-8071485597.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/7-2277560352.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/7-9293799439.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/8-4740214513.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/8-3971764541.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/9-8061552005.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/9-6911289086.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/10-750322940.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/10-5166510651.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
 <a href="newsletter/news/images/11-3182075063.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/11-5200856492.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/12-393195113.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/12-6912016456.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/13-2267673892.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/13-4361275778.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/14-9430983178.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/14-2554513624.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/15-6594890956.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/15-2469137786.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/16-2049331327.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/16-5017489626.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/17-4601198638.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/17-3612947499.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/18-7304612098.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/18-6292354470.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/19-2401741477.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/19-487385420.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/20-3239931601.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/20-1929153014.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/21-8127448055.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/21-9381561693.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/22-8907824788.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/22-1291230649.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/23-1454918601.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/23-6245533203.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/24-8119603103.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/24-4785782186.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/25-6553532149.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/25-18585628.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/26-9506907334.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/26-6358559996.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/27-2001205785.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/27-7469181448.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/28-1346426277.jpg" title="ACSS Lunar Astrophotography session">
 <img class="gallery_img" src="newsletter/news/images/28-1642778322.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/29-2924289350.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/29-5247780350.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/30-4757080010.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/30-1468382715.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/31-2307508781.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/31-9998850690.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/32-8584055380.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/32-1332134659.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/33-5483131932.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/33-3337009908.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/34-5359768550.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/34-663900043.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/35-9262315255.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/35-4994768055.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/36-7653938873.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/36-6754106699.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
 <a href="newsletter/news/images/37-2814331991.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/37-4230553451.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/38-9189906269.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/38-5110397783.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/39-7178165999.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/39-76001295.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/40-6338958205.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/40-5214756694.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
<a href="newsletter/news/images/41-95015957.jpg" title="ACSS Lunar Astrophotography session">
<img class="gallery_img" src="newsletter/news/images/41-7714437048.jpg" alt="img" />
<span class="view_btn"> ACSS Lunar Astrophotography session </span>
</a>
				</div>
			</div>	
			<div class="tab-pane fade<?php echo ($selectedtab =="tab13")?"  show active":"";?>" id="tab13" role="tabpanel" aria-labelledby="tab13-tab">
				<p class="gtitle0">1st Soccer draw 3-3 with Abbottobad Public School</p>
				<div id="gallerySLide13" class="sgallery_area4">
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab14")?"  show active":"";?>" id="tab14" role="tabpanel" aria-labelledby="tab14-tab">
				<p class="gtitle0">Cricket Practice Match Prep School Colts U/14 Probables vs Shadra Govt High School</p>
				<div id="gallerySLide14" class="sgallery_area4">
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab15")?"  show active":"";?>" id="tab15" role="tabpanel" aria-labelledby="tab15-tab">
				<p class="gtitle0">Football Match Junior School</p>
				<div id="gallerySLide15" class="sgallery_area4">
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


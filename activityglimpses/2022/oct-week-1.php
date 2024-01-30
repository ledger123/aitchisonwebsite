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
	$selectedtab="tab16";
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
                            <p style="font-size: 1rem;"><strong>Show all activities ...</strong></p>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body" style="padding: 0">



            <?php } ?>



        <ul class="nav nav-tabs mb-3" id="sportsTab" role="tablist" style="display: flex;">
			<li class="nav-item btn" role="presentation" id="1759">
                <button class="nav-link<?php echo ($selectedtab =="tab16")?" active":"";?>" id="tab16-tab" data-bs-toggle="tab" data-bs-target="#tab16" type="button" role="tab" aria-controls="tab16" aria-selected="<?php echo ($selectedtab =="tab16")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">ACSC 2022 - Opening Ceremony</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1756">
                <button class="nav-link<?php echo ($selectedtab =="tab25")?" active":"";?>" id="tab25-tab" data-bs-toggle="tab" data-bs-target="#tab25" type="button" role="tab" aria-controls="tab25" aria-selected="<?php echo ($selectedtab =="tab25")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">WALTER ROBINSON CROSS COUNTRY 2022</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1755">
                <button class="nav-link<?php echo ($selectedtab =="tab24")?" active":"";?>" id="tab24-tab" data-bs-toggle="tab" data-bs-target="#tab24" type="button" role="tab" aria-controls="tab24" aria-selected="<?php echo ($selectedtab =="tab24")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Prep School 2022 Swimming Prizes</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1754">
                <button class="nav-link<?php echo ($selectedtab =="tab23")?" active":"";?>" id="tab23-tab" data-bs-toggle="tab" data-bs-target="#tab23" type="button" role="tab" aria-controls="tab23" aria-selected="<?php echo ($selectedtab =="tab23")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Tent Peggers Show Their Great Skills in Rasulpur & Col. Aslam Niazi Challenge Cup</button>
            </li>		

            <li class="nav-item btn" role="presentation" id="1751">
                <button class="nav-link<?php echo ($selectedtab =="tab17")?" active":"";?>" id="tab17-tab" data-bs-toggle="tab" data-bs-target="#tab17" type="button" role="tab" aria-controls="tab17" aria-selected="<?php echo ($selectedtab =="tab17")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1749">
                <button class="nav-link<?php echo ($selectedtab =="tab14")?" active":"";?>" id="tab14-tab" data-bs-toggle="tab" data-bs-target="#tab14" type="button" role="tab" aria-controls="tab14" aria-selected="<?php echo ($selectedtab =="tab14")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Aitchison Hockey Ist XI Downs Lawrence 6-2</button>
            </li>
			<li class="nav-item btn" role="presentation" id="1750">
                <button class="nav-link<?php echo ($selectedtab =="tab11")?" active":"";?>" id="tab11-tab" data-bs-toggle="tab" data-bs-target="#tab11" type="button" role="tab" aria-controls="tab11" aria-selected="<?php echo ($selectedtab =="tab11")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Aitchison Convincing Winner in Athletics Against Lawrence College</button>
            </li>
			<?php /*?><li class="nav-item btn" role="presentation" id="1734">
                <button class="nav-link<?php echo ($selectedtab =="tab14")?" active":"";?>" id="tab14-tab" data-bs-toggle="tab" data-bs-target="#tab14" type="button" role="tab" aria-controls="tab14" aria-selected="<?php echo ($selectedtab =="tab14")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Physical fitness test and Training - Junior School</button>
            </li>
<?php */?>
            <li class="nav-item btn" role="presentation" id="1742">
                <button class="nav-link<?php echo ($selectedtab =="tab22")?" active":"";?>" id="tab22-tab" data-bs-toggle="tab" data-bs-target="#tab22" type="button" role="tab" aria-controls="tab22" aria-selected="<?php echo ($selectedtab =="tab22")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Aitchison and Lawrence College Draw Soccer Nil All</button>
            </li>
			
			<li class="nav-item btn" role="presentation" id="1741">
                <button class="nav-link<?php echo ($selectedtab =="tab21")?" active":"";?>" id="tab21-tab" data-bs-toggle="tab" data-bs-target="#tab21" type="button" role="tab" aria-controls="tab21" aria-selected="<?php echo ($selectedtab =="tab21")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Aitchison Ist Basketball Triumph Over Lawrence College</button>
            </li>
			
			<li class="nav-item btn" role="presentation" id="1740">
                <button class="nav-link<?php echo ($selectedtab =="tab20")?" active":"";?>" id="tab20-tab" data-bs-toggle="tab" data-bs-target="#tab20" type="button" role="tab" aria-controls="tab20" aria-selected="<?php echo ($selectedtab =="tab20")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Aitchison Dominates First Day's Athletics Against Lawrence</button>
            </li>
			
			<li class="nav-item btn" role="presentation" id="1739">
                <button class="nav-link<?php echo ($selectedtab =="tab19")?" active":"";?>" id="tab19-tab" data-bs-toggle="tab" data-bs-target="#tab19" type="button" role="tab" aria-controls="tab19" aria-selected="<?php echo ($selectedtab =="tab19")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">2nd XI Cricket Team Maintain Unbeaten Season in Victory Over Defence Degree College</button>
            </li>
			
			<li class="nav-item btn" role="presentation" id="1738">
                <button class="nav-link<?php echo ($selectedtab =="tab18")?" active":"";?>" id="tab18-tab" data-bs-toggle="tab" data-bs-target="#tab18" type="button" role="tab" aria-controls="tab18" aria-selected="<?php echo ($selectedtab =="tab18")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Aitchison Blues Reach Final of Dr GR Chaudhry U 14 Hockey Final. Aitchison Yellow Fall Short</button>
            </li>

			
			
			<?php /*?><li class="nav-item btn" role="presentation" id="1735">
                <button class="nav-link<?php echo ($selectedtab =="tab15")?" active":"";?>" id="tab15-tab" data-bs-toggle="tab" data-bs-target="#tab15" type="button" role="tab" aria-controls="tab15" aria-selected="<?php echo ($selectedtab =="tab15")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Inter House Cricket Competition (Age Group: U/13) Final Prep School</button>
            </li>
			
			
			
			<li class="nav-item btn" role="presentation" id="1733">
                <button class="nav-link<?php echo ($selectedtab =="tab13")?" active":"";?>" id="tab13-tab" data-bs-toggle="tab" data-bs-target="#tab13" type="button" role="tab" aria-controls="tab13" aria-selected="<?php echo ($selectedtab =="tab13")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.</button>
            </li>
			
			<li class="nav-item btn" role="presentation" id="1730">
                <button class="nav-link<?php echo ($selectedtab =="tab10")?" active":"";?>" id="tab10-tab" data-bs-toggle="tab" data-bs-target="#tab10" type="button" role="tab" aria-controls="tab10" aria-selected="<?php echo ($selectedtab =="tab10")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Aitchison Blue Qualifies for U 14 Hockey Final. Aitchison Yellow Still Fighting in Must Win Game</button>
            </li><?php */?>
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
			<?php /*?><?php */?>				
			<?php /*?><div class="tab-pane fade<?php echo ($selectedtab =="tab2")?"  show active from":"";?>" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
				<p class="gtitle0">Badminton Ranking (Age Group: U/16)
					
				</p>
				<div id="gallerySLide2" class="sgallery_area4">
					<a href="newsletter/news/images/1-7920441623.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/1-3798752620.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>

<a href="newsletter/news/images/2-1133946778.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/2-8515587326.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>
<a href="newsletter/news/images/3-5960551456.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/3-1340912710.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>
<a href="newsletter/news/images/4-6242766163.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/4-9848905921.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>
<a href="newsletter/news/images/5-5020604406.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/5-964638184.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>
<a href="newsletter/news/images/6-1426723627.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/6-1597010177.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>
<a href="newsletter/news/images/7-6646590407.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/7-9415190622.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>
<a href="newsletter/news/images/8-2459181057.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/8-972797588.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>
<a href="newsletter/news/images/9-965167645.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/9-1080984405.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>
<a href="newsletter/news/images/10-4677055003.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/10-390613698.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>
 <a href="newsletter/news/images/11-6806923260.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/11-8942487747.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>
<a href="newsletter/news/images/12-2935907858.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/12-7567105228.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>
<a href="newsletter/news/images/13-5113156845.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/13-5906736819.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>
<a href="newsletter/news/images/14-4316532179.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/14-92501987.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>
<a href="newsletter/news/images/15-1836527097.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/15-1914342049.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>
<a href="newsletter/news/images/16-4232593329.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/16-3089893874.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>
<a href="newsletter/news/images/17-8372562061.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/17-3817130525.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>
<a href="newsletter/news/images/18-1230215596.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/18-6589857034.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>
<a href="newsletter/news/images/19-1586169010.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/19-7171342857.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>
 <a href="newsletter/news/images/20-4032353084.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/20-4810767204.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>
<a href="newsletter/news/images/21-2235039918.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/21-4163090213.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>
<a href="newsletter/news/images/22-1710617144.jpg" title="Badminton Ranking (Age Group: U/16)">
<img class="gallery_img" src="newsletter/news/images/22-9964759882.jpg" alt="img" />
<span class="view_btn"> Badminton Ranking </span>
</a>
				</div>
			</div>
			
			<div class="tab-pane fade<?php echo ($selectedtab =="tab4")?"  show active":"";?>" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
				<p class="gtitle0">Tennis Championship Prep School (Age Group: U/13)</p>
				<div id="gallerySLide4" class="sgallery_area4">
					<a href="newsletter/news/images/1-2444662350.jpg" title="Tennis Championship Prep School (Age Group: U/13)">
<img class="gallery_img" src="newsletter/news/images/1-7711226504.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
 </a>
<a href="newsletter/news/images/2-2149970879.jpg" title="Tennis Championship Prep School (Age Group: U/13)">
<img class="gallery_img" src="newsletter/news/images/2-2758617608.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/3-402243692.jpg" title="Tennis Championship Prep School (Age Group: U/13)">
<img class="gallery_img" src="newsletter/news/images/3-6590266609.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/4-2228099054.jpg" title="Tennis Championship Prep School (Age Group: U/13)">
<img class="gallery_img" src="newsletter/news/images/4-2448045772.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/5-7570238386.jpg" title="Tennis Championship Prep School (Age Group: U/13)">
<img class="gallery_img" src="newsletter/news/images/5-2073370173.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/6-1566148807.jpg" title="Tennis Championship Prep School (Age Group: U/13)">
<img class="gallery_img" src="newsletter/news/images/6-9103592141.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/7-4280564526.jpg" title="Tennis Championship Prep School (Age Group: U/13)">
<img class="gallery_img" src="newsletter/news/images/7-8496629084.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/8-4738489763.jpg" title="Tennis Championship Prep School (Age Group: U/13)">
<img class="gallery_img" src="newsletter/news/images/8-3414743260.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/9-4530159079.jpg" title="Tennis Championship Prep School (Age Group: U/13)">
<img class="gallery_img" src="newsletter/news/images/9-1264156858.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/10-1918828920.jpg" title="Tennis Championship Prep School (Age Group: U/13)">
<img class="gallery_img" src="newsletter/news/images/10-7343011703.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/11-3681339318.jpg" title="Tennis Championship Prep School (Age Group: U/13)">
<img class="gallery_img" src="newsletter/news/images/11-3043435212.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/12-6733671718.jpg" title="Tennis Championship Prep School (Age Group: U/13)">
<img class="gallery_img" src="newsletter/news/images/12-3302908361.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/13-4355867448.jpg" title="Tennis Championship Prep School (Age Group: U/13)">
<img class="gallery_img" src="newsletter/news/images/13-1236941970.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/14-4937769832.jpg" title="Tennis Championship Prep School (Age Group: U/13)">
<img class="gallery_img" src="newsletter/news/images/14-8730680896.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/15-6513275886.jpg" title="Tennis Championship Prep School (Age Group: U/13)">
<img class="gallery_img" src="newsletter/news/images/15-5813327477.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/16-9123430502.jpg" title="Tennis Championship Prep School (Age Group: U/13)">
<img class="gallery_img" src="newsletter/news/images/16-9243649118.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/17-2865080786.jpg" title="Tennis Championship Prep School (Age Group: U/13)">
<img class="gallery_img" src="newsletter/news/images/17-7319132258.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
<a href="newsletter/news/images/18-6300077683.jpg" title="Tennis Championship Prep School (Age Group: U/13)">
<img class="gallery_img" src="newsletter/news/images/18-2174140017.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab5")?"  show active":"";?>" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
				<p class="gtitle0">Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals<br>
					<span class="gtitle1"> Salahuddin House vs Khalid House<br>Saigol House vs Qasim House </span>
				</p>
				<div id="gallerySLide5" class="sgallery_area4">
					<a href="newsletter/news/images/1-8394101231.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/1-3026133777.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/2-3683149180.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/2-9249395692.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/3-9518107927.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/3-5500290196.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
 </a>
<a href="newsletter/news/images/4-3865481319.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/4-4343320293.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/5-1595784977.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/5-2396264325.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/6-961743231.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/6-6049330262.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/7-2498634531.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/7-3806189987.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/8-2779936100.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/8-5522667400.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/9-944947043.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/9-1108363126.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/10-7250577907.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/10-5939530608.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/11-2749327068.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/11-1592040138.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/12-282288492.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/12-4355188939.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/13-1516769054.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/13-924185810.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/14-6284991734.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/14-2427961958.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/15-3674514295.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/15-5314040099.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/16-730400912.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/16-3454748735.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/17-1820547355.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/17-5914149203.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/18-5804022305.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/18-6543814955.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/19-1740954935.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/19-5018316564.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/20-8092083601.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
 <img class="gallery_img" src="newsletter/news/images/20-8361687420.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/21-4475133613.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/21-6924476374.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/22-4971844717.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/22-633608286.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/23-7684706830.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/23-1802015781.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/24-677515533.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/24-4173634733.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
<a href="newsletter/news/images/25-1370621128.jpg" title="Inter House Cricket Competition Prep School (Age Group: U/13) Semi Finals">
<img class="gallery_img" src="newsletter/news/images/25-1894569654.jpg" alt="img" />
<span class="view_btn"> Cricket Competition </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab6")?"  show active":"";?>" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
				<p class="gtitle0">Football Practice Match Senior School<br>
					<span class="gtitle1">Aitchison College vs GC College</span>
				</p>
				<div id="gallerySLide6" class="sgallery_area4">
					<a href="newsletter/news/images/1-140534375.jpg" title="Football Practice Match Senior School - Aitchison College vs GC College">
<img class="gallery_img" src="newsletter/news/images/1-1974218775.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/2-5217296198.jpg" title="Football Practice Match Senior School - Aitchison College vs GC College">
<img class="gallery_img" src="newsletter/news/images/2-6911497875.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/3-367064568.jpg" title="Football Practice Match Senior School - Aitchison College vs GC College">
<img class="gallery_img" src="newsletter/news/images/3-6239252127.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
 <a href="newsletter/news/images/4-3700712570.jpg" title="Football Practice Match Senior School - Aitchison College vs GC College">
<img class="gallery_img" src="newsletter/news/images/4-4243641767.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/5-659228298.jpg" title="Football Practice Match Senior School - Aitchison College vs GC College">
<img class="gallery_img" src="newsletter/news/images/5-5076731343.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/6-3740782129.jpg" title="Football Practice Match Senior School - Aitchison College vs GC College">
<img class="gallery_img" src="newsletter/news/images/6-2608029954.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/8-6545185007.jpg" title="Football Practice Match Senior School - Aitchison College vs GC College">
<img class="gallery_img" src="newsletter/news/images/8-1811480081.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/9-7911406577.jpg" title="Football Practice Match Senior School - Aitchison College vs GC College">
<img class="gallery_img" src="newsletter/news/images/9-7058676759.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/10-4039983667.jpg" title="Football Practice Match Senior School - Aitchison College vs GC College">
<img class="gallery_img" src="newsletter/news/images/10-1507598059.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/11-3531584369.jpg" title="Football Practice Match Senior School - Aitchison College vs GC College">
<img class="gallery_img" src="newsletter/news/images/11-4640913706.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/12-6213942614.jpg" title="Football Practice Match Senior School - Aitchison College vs GC College">
<img class="gallery_img" src="newsletter/news/images/12-7467541161.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/13-2654306570.jpg" title="Football Practice Match Senior School - Aitchison College vs GC College">
<img class="gallery_img" src="newsletter/news/images/13-6904321930.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/14-6224130028.jpg" title="Football Practice Match Senior School - Aitchison College vs GC College">
<img class="gallery_img" src="newsletter/news/images/14-7227093849.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/15-9723590434.jpg" title="Football Practice Match Senior School - Aitchison College vs GC College">
<img class="gallery_img" src="newsletter/news/images/15-6406887532.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/16-569617581.jpg" title="Football Practice Match Senior School - Aitchison College vs GC College">
<img class="gallery_img" src="newsletter/news/images/16-9079177093.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/17-2377299831.jpg" title="Football Practice Match Senior School - Aitchison College vs GC College">
<img class="gallery_img" src="newsletter/news/images/17-9435722029.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
<a href="newsletter/news/images/18-3251558269.jpg" title="Football Practice Match Senior School - Aitchison College vs GC College">
<img class="gallery_img" src="newsletter/news/images/18-7033280276.jpg" alt="img" />
<span class="view_btn"> Football Practice Match </span>
</a>
				</div>
			</div>			
			<div class="tab-pane fade<?php echo ($selectedtab =="tab8")?"  show active":"";?>" id="tab8" role="tabpanel" aria-labelledby="tab5-tab">
				<p class="gtitle0">Inter House Urdu Recitation M2</p>
				<div id="gallerySLide8" class="sgallery_area4">
					<a href="newsletter/news/images/001-470104333.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/001-659249938.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/01-1949609116.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/01-9744303633.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/1-5906358659.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/1-4408809348.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/2-2575276483.jpg" title="Inter House Urdu Recitation M2">
 <img class="gallery_img" src="newsletter/news/images/2-1651626990.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/3-6423619375.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/3-7575468461.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/4-9895875613.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/4-3824578848.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/5-2709749152.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/5-5147079861.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/6-2073552498.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/6-7943754912.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/7-2986160829.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/7-6721230464.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/8-8604882172.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/8-5829045843.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/9-1823833568.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/9-8217354439.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/10-8071338466.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/10-7736370645.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/11-5951177560.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/11-7704897939.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/12-6431578345.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/12-3507649577.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/13-5578342150.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/13-1700185336.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/14-7711742630.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/14-9292012498.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/15-4671246651.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/15-6135243990.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/16-5423564360.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/16-990434318.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/17-2043206179.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/17-2615767935.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/18-9944762399.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/18-3092792225.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/19-7470432167.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/19-7864622717.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/20-3710967674.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/20-3572560687.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/21-2400441493.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/21-1036421328.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/22-8265783878.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/22-6708695266.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
<a href="newsletter/news/images/23-6269785913.jpg" title="Inter House Urdu Recitation M2">
<img class="gallery_img" src="newsletter/news/images/23-1602198070.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab11")?"  show active":"";?>" id="tab11" role="tabpanel" aria-labelledby="tab11-tab">
				<p class="gtitle0">Inter House Urdu Recitation M1</p>
				<div id="gallerySLide11" class="sgallery_area4">
					<a href="newsletter/news/images/01-4581745919.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/01-8174308243.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
 <a href="newsletter/news/images/1-297898809.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/1-2382494017.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/2-1172275635.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/2-699811350.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/3-7895601133.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/3-7447221362.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/4-6532683872.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/4-4030649715.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/5-7197593321.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/5-554680633.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/6-1203166695.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/6-6324546375.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/7-6234743424.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/7-9616183834.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/8-4969674104.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/8-298060983.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/9-4156250244.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/9-6711117441.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/10-7214900982.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/10-3486235041.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/11-1611227780.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/11-7428607454.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/12-9751686527.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/12-8715028805.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/13-5178686850.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/13-1586648945.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/14-613188134.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/14-8083061633.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/15-8457270360.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/15-9371716133.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/16-1136469981.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/16-3858293714.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/17-4822511859.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/17-6761364597.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/18-2543091642.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/18-1363497020.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/19-5990119723.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/19-5681594339.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/21-124293992.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/21-904509378.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/22-2852540755.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/22-8840066065.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/27-5399270832.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/27-3051741618.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/28-7392403277.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/28-312731010.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/25-2101810690.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/25-3031310160.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/26-2935793912.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/26-6957099520.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/24-6683411702.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/24-935927729.jpg" alt="img" />
<span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
<a href="newsletter/news/images/23-8982580756.jpg" title="Inter House Urdu Recitation M1">
<img class="gallery_img" src="newsletter/news/images/23-8408643875.jpg" alt="img" />
 <span class="view_btn"> Inter House Urdu Recitation M1 </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab12")?"  show active":"";?>" id="tab12" role="tabpanel" aria-labelledby="tab12-tab">
				<p class="gtitle0">Football Fixture Match Prep School<br>
					<span class="gtitle1">Aitchison College Colts vs Classic School System</span>
				</p>
				<div id="gallerySLide12" class="sgallery_area4">
					<a href="newsletter/news/images/01-2137826315.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/01-3354052709.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/1-331179150.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/1-36415270.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/2-5025366633.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/2-7036783589.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
 </a>
<a href="newsletter/news/images/3-6846659226.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/3-1388007482.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/4-4286757866.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/4-5431140768.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/5-5092138804.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/5-8028172897.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/6-2577373083.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/6-8375109318.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/7-5868836346.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/7-8182896582.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/8-6045911261.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/8-2784675132.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/9-576902529.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/9-9414788897.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/10-9280350852.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/10-7007701263.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>

<a href="newsletter/news/images/11-7323746662.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/11-6856768067.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/12-5082337891.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/12-9980076455.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/13-180315195.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/13-4124212208.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/14-7174585520.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/14-357156827.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/15-1560348492.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/15-1578809158.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/16-1979053456.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/16-2110270088.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/17-1037375136.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/17-1660035150.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/18-5497340887.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/18-6662047675.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
 <a href="newsletter/news/images/19-6943573180.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/19-3644010288.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/20-581770622.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/20-3987397675.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/21-248564823.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/21-7807555135.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/22-7649431360.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/22-8102298253.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/23-5053452100.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/23-5857692508.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/24-4904875340.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/24-2510541281.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/25-3884420681.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/25-7647402842.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/26-1454598440.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/26-6431199784.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
 <a href="newsletter/news/images/27-5033156744.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/27-6910743673.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/28-8355469609.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/28-5260516545.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/29-4462060300.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/29-4355032929.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/30-3493595581.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/30-634043162.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/31-6727851343.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/31-4713638150.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/32-1217501432.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/32-3379073252.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>
<a href="newsletter/news/images/33-2445431966.jpg" title="Football Fixture Match Prep School - Aitchison College Colts vs Classic School System">
<img class="gallery_img" src="newsletter/news/images/33-6604993928.jpg" alt="img" />
<span class="view_btn"> Football Fixture Match </span>
</a>	
				</div>
			</div>
			
			<div class="tab-pane fade<?php echo ($selectedtab =="tab9")?"  show active":"";?>" id="tab9" role="tabpanel" aria-labelledby="tab9-tab">
				<p class="gtitle0">
					Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory
				</p>
					<div id="gallerySLide9" class="sgallery_area4">					
					<a href="newsletter/news/images/1-5791119324.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/1-7967822530.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/2-6227879849.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/2-5045491787.jpg" alt="img" />
 <span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/3-2751224469.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/3-4812202577.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/4-6468138174.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/4-8319166863.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/5-1346187520.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/5-8370894463.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/6-7225763078.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/6-8491388518.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/7-3662841628.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/7-8543326306.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/8-7532612260.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/8-5894664540.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/10-2547164603.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/10-3982715443.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/11-7705040256.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/11-6815268830.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
 </a>
<a href="newsletter/news/images/12-1908226621.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/12-6605859002.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/13-5843850808.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/13-7782306519.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/15-3359874122.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/15-8828343766.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/16-1309279323.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/16-3077456379.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/17-3893796464.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/17-1839198666.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/18-5050621946.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/18-834844528.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/19-2965504771.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/19-275391243.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/20-7792806454.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/20-9666886189.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>

<a href="newsletter/news/images/21-5987695561.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/21-4126484641.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/22-2560846644.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/22-1631956842.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/23-2082574943.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/23-69957667.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/24-1538626242.jpg" title="Hockey Colts Open Dr. G.R. Chaudhry Inter-School Hockey Competition with 7-0 Victory">
<img class="gallery_img" src="newsletter/news/images/24-1214926376.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
				</div>
			</div>
			
			<div class="tab-pane fade<?php echo ($selectedtab =="tab10")?"  show active":"";?>" id="tab10" role="tabpanel" aria-labelledby="tab10-tab">
				<p class="gtitle0">Aitchison Blue Qualifies for U 14 Hockey Final.<br> Aitchison Yellow Still Fighting in Must Win Game</p>
				<div id="gallerySLide10" class="sgallery_area4">					
					<a href="newsletter/news/images/1-7288041704.jpg" title="Hockey Competition">
<img class="gallery_img" src="newsletter/news/images/1-1411486535.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/2-6059093726.jpg" title="Hockey Competition">
<img class="gallery_img" src="newsletter/news/images/2-5954938606.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/3-1006199993.jpg" title="Hockey Competition">
<img class="gallery_img" src="newsletter/news/images/3-8399254148.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/4-3328048768.jpg" title="Hockey Competition">
<img class="gallery_img" src="newsletter/news/images/4-3462866936.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/5-6018014691.jpg" title="Hockey Competition">
<img class="gallery_img" src="newsletter/news/images/5-2168738389.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/6-8762618184.jpg" title="Hockey Competition">
<img class="gallery_img" src="newsletter/news/images/6-2752086343.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/7-7269079283.jpg" title="Hockey Competition">
<img class="gallery_img" src="newsletter/news/images/7-4346941700.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/8-1335835349.jpg" title="Hockey Competition">
<img class="gallery_img" src="newsletter/news/images/8-6073268076.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/9-7989747488.jpg" title="Hockey Competition">
<img class="gallery_img" src="newsletter/news/images/9-1174062466.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/10-293659167.jpg" title="Hockey Competition">
<img class="gallery_img" src="newsletter/news/images/10-1132440277.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/11-5469901438.jpg" title="Hockey Competition">
<img class="gallery_img" src="newsletter/news/images/11-6825017753.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>

<a href="newsletter/news/images/12-9059611875.jpg" title="Hockey Competition">
<img class="gallery_img" src="newsletter/news/images/12-1509451960.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/13-6439924601.jpg" title="Hockey Competition">
<img class="gallery_img" src="newsletter/news/images/13-2600305926.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/14-5161293187.jpg" title="Hockey Competition">
<img class="gallery_img" src="newsletter/news/images/14-6863104920.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
<a href="newsletter/news/images/15-5336449738.jpg" title="Hockey Competition">
<img class="gallery_img" src="newsletter/news/images/15-65809793.jpg" alt="img" />
<span class="view_btn"> Hockey Competition </span>
</a>
				</div>
			</div><?php */?>
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
			<?php /*?><div class="tab-pane fade<?php echo ($selectedtab =="tab13")?"  show active":"";?>" id="tab13" role="tabpanel" aria-labelledby="tab13-tab">
				<p class="gtitle0">Aitchison Colts Win on Last Ball. Rana and Khan Star with the Bat.
					
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
			</div><?php */?>
			
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
			
			<?php /*?><div class="tab-pane fade<?php echo ($selectedtab =="tab15")?"  show active":"";?>" id="tab15" role="tabpanel" aria-labelledby="tab15-tab">
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
			</div><?php */?>
			
			<div class="tab-pane fade<?php echo ($selectedtab =="tab16")?"  show active":"";?>" id="tab16" role="tabpanel" aria-labelledby="tab16-tab">
				<p class="gtitle0">ACSC 2022 - Opening Ceremony</p>
				<div id="gallerySLide16" class="sgallery_area4">
					<a href="newsletter/news/images/2-9383321556.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/2-6296466102.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/3-126226916.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/3-3582403096.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					 <a href="newsletter/news/images/4-2324479732.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/4-5534664972.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/0005-6786723684.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/0005-8021304828.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/05-5354046340.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/05-4242874341.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/5-7682734231.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/5-1055026260.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/6-6218448479.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/6-6995892315.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/7-6547869508.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/7-1037571742.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/9-1116024632.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/9-1738288012.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/11-5800638209.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/11-4211371278.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/13-7452007401.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/13-3353583813.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>

					<a href="newsletter/news/images/14-5446093912.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/14-72629655.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/15-5141114692.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/15-1829738389.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/16-7050852943.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/16-1191276147.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/17-3066609178.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/17-8186770398.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/18-1439874690.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/18-7002254690.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/19-7986040027.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/19-7538713942.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/20-1585441447.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/20-1375202753.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/21-6608881951.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/21-8070819852.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/22-5999086565.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/22-967723273.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					 </a>
					<a href="newsletter/news/images/23-4119381730.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/23-7782765588.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/24-9386271693.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/24-3685884849.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/25-5986419121.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/25-2486239569.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/27-5555640630.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/27-7114264580.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/28-8785068461.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/28-6001066744.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/29-837234574.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/29-6114730167.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
					</a>
					<a href="newsletter/news/images/30-5727885380.jpg" title="ACSC 2022 - Opening Ceremony">
					<img class="gallery_img" src="newsletter/news/images/30-7660411672.jpg" alt="img" />
					<span class="view_btn"> ACSC 2022 - Opening Ceremony </span>
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
			<div class="tab-pane fade<?php echo ($selectedtab =="tab23")?"  show active":"";?>" id="tab23" role="tabpanel" aria-labelledby="tab23-tab">
				<p class="gtitle0">Tent Peggers Show Their Great Skills in Rasulpur & Col. Aslam Niazi Challenge Cup</p>
				<div id="gallerySLide23" class="sgallery_area4">
					<a href="newsletter/news/images/1-2084885935.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/1-7531567905.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/2-4004157534.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/2-6787114382.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/3-58245235.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/3-329411504.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/4-4258709905.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/4-4878946409.jpg" alt="img" />
<span class="view_btn"> </span>

</a>
<a href="newsletter/news/images/5-9653384639.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/5-4556054318.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/6-1296523586.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/6-1161262717.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/7-995511877.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/7-5602476790.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/8-353959749.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/8-858522517.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/9-1558595117.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/9-9181143096.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/10-1583386571.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/10-3815873974.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/12-8178271494.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/12-7017097063.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/13-3015585307.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/13-5607483633.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/14-8315722624.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/14-1175413818.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/15-7651464577.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/15-9415944857.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/16-7956845397.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/16-5223605148.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/17-3807230565.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/17-3887539750.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/18-129846414.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/18-3840971195.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/19-5377817784.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/19-5262120282.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/20-5479061031.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/20-6973073089.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/21-589710372.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/21-2038738581.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/22-4198328847.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/22-4604168342.jpg" alt="img" />
<span class="view_btn"> </span>
</a>

<a href="newsletter/news/images/24-2166103003.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/24-9592753414.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/25-7251889653.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/25-7352000927.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/26-2353485108.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/26-1980902228.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/27-1026982468.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/27-1199532634.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/28-9036547566.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/28-2198561989.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/29-4966509525.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/29-872038608.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/30-200791917.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/30-2889062552.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/31-5496419167.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/31-204865766.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/32-5989555366.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/32-9337470593.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/33-9839322705.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/33-4693006813.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/34-7539531539.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/34-5006169022.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
<a href="newsletter/news/images/35-748097586.jpg" title="Tent Peggers Show Their Great Skills in Rasulpur &amp; Col. Aslam Niazi Challenge Cup">
<img class="gallery_img" src="newsletter/news/images/35-9619737913.jpg" alt="img" />
<span class="view_btn"> </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab24")?"  show active":"";?>" id="tab24" role="tabpanel" aria-labelledby="tab24-tab">
				<p class="gtitle0">Prep School 2022 Swimming Prizes</p>
				<div id="gallerySLide24" class="sgallery_area4">
					<a href="newsletter/news/images/1-5626184920.jpg" title="Prep School 2022 Swimming Prizes">
<img class="gallery_img" src="newsletter/news/images/1-8634675191.jpg" alt="img" />
<span class="view_btn"> Prep School 2022 Swimming Prizes </span>
</a>
<a href="newsletter/news/images/2-6048087861.jpg" title="Prep School 2022 Swimming Prizes">
<img class="gallery_img" src="newsletter/news/images/2-7324152610.jpg" alt="img" />
<span class="view_btn"> Prep School 2022 Swimming Prizes </span>
</a>

<a href="newsletter/news/images/3-6087828523.jpg" title="Prep School 2022 Swimming Prizes">
<img class="gallery_img" src="newsletter/news/images/3-6087453520.jpg" alt="img" />
<span class="view_btn"> Prep School 2022 Swimming Prizes </span>
</a>
<a href="newsletter/news/images/4-2500780632.jpg" title="Prep School 2022 Swimming Prizes">
<img class="gallery_img" src="newsletter/news/images/4-3735717817.jpg" alt="img" />
<span class="view_btn"> Prep School 2022 Swimming Prizes </span>
</a>
<a href="newsletter/news/images/5-4404149725.jpg" title="Prep School 2022 Swimming Prizes">
<img class="gallery_img" src="newsletter/news/images/5-1368327043.jpg" alt="img" />
<span class="view_btn"> Prep School 2022 Swimming Prizes </span>
</a>
<a href="newsletter/news/images/6-1063191189.jpg" title="Prep School 2022 Swimming Prizes">
<img class="gallery_img" src="newsletter/news/images/6-935621180.jpg" alt="img" />
<span class="view_btn"> Prep School 2022 Swimming Prizes </span>
</a>
<a href="newsletter/news/images/7-4272481412.jpg" title="Prep School 2022 Swimming Prizes">
<img class="gallery_img" src="newsletter/news/images/7-2905609609.jpg" alt="img" />
<span class="view_btn"> Prep School 2022 Swimming Prizes </span>
</a>
<a href="newsletter/news/images/8-2947847456.jpg" title="Prep School 2022 Swimming Prizes">
<img class="gallery_img" src="newsletter/news/images/8-4264552858.jpg" alt="img" />
<span class="view_btn"> Prep School 2022 Swimming Prizes </span>
</a>
<a href="newsletter/news/images/9-4331233291.jpg" title="Prep School 2022 Swimming Prizes">
<img class="gallery_img" src="newsletter/news/images/9-7164584188.jpg" alt="img" />
<span class="view_btn"> Prep School 2022 Swimming Prizes </span>
</a>
<a href="newsletter/news/images/10-3486720619.jpg" title="Prep School 2022 Swimming Prizes">
<img class="gallery_img" src="newsletter/news/images/10-6739100755.jpg" alt="img" />
<span class="view_btn"> Prep School 2022 Swimming Prizes </span>
</a>
<a href="newsletter/news/images/11-8733375559.jpg" title="Prep School 2022 Swimming Prizes">
<img class="gallery_img" src="newsletter/news/images/11-8624506252.jpg" alt="img" />
<span class="view_btn"> Prep School 2022 Swimming Prizes </span>
</a>
<a href="newsletter/news/images/12-2871279391.jpg" title="Prep School 2022 Swimming Prizes">
<img class="gallery_img" src="newsletter/news/images/12-3446640655.jpg" alt="img" />
<span class="view_btn"> Prep School 2022 Swimming Prizes </span>
</a>
<a href="newsletter/news/images/13-4720522228.jpg" title="Prep School 2022 Swimming Prizes">
<img class="gallery_img" src="newsletter/news/images/13-675424034.jpg" alt="img" />
<span class="view_btn"> Prep School 2022 Swimming Prizes </span>
</a>
<a href="newsletter/news/images/14-290446647.jpg" title="Prep School 2022 Swimming Prizes">
<img class="gallery_img" src="newsletter/news/images/14-6561962469.jpg" alt="img" />
<span class="view_btn"> Prep School 2022 Swimming Prizes </span>
</a>
<a href="newsletter/news/images/15-841237906.jpg" title="Prep School 2022 Swimming Prizes">
<img class="gallery_img" src="newsletter/news/images/15-9377610066.jpg" alt="img" />
<span class="view_btn"> Prep School 2022 Swimming Prizes </span>
</a>
<a href="newsletter/news/images/16-8491089115.jpg" title="Prep School 2022 Swimming Prizes">
<img class="gallery_img" src="newsletter/news/images/16-705590083.jpg" alt="img" />
<span class="view_btn"> Prep School 2022 Swimming Prizes </span>
</a>
<a href="newsletter/news/images/17-3312626987.jpg" title="Prep School 2022 Swimming Prizes">
<img class="gallery_img" src="newsletter/news/images/17-6073566217.jpg" alt="img" />
<span class="view_btn"> Prep School 2022 Swimming Prizes </span>
</a>
<a href="newsletter/news/images/18-8304586378.jpg" title="Prep School 2022 Swimming Prizes">
<img class="gallery_img" src="newsletter/news/images/18-1614749110.jpg" alt="img" />
<span class="view_btn"> Prep School 2022 Swimming Prizes </span>
</a>
				</div>
			</div>
			
			<div class="tab-pane fade<?php echo ($selectedtab =="tab25")?"  show active":"";?>" id="tab25" role="tabpanel" aria-labelledby="tab25-tab">
				<p class="gtitle0">WALTER ROBINSON CROSS COUNTRY 2022</p>
				<div id="gallerySLide25" class="sgallery_area4">
					<a href="newsletter/news/images/37-993775421.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/37-6343300979.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/38-265799050.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/38-468886006.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/3-2070163171.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/3-8248766528.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/4-5127910557.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/4-5352898999.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/5-2515796007.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/5-8191092891.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/6-4465660715.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/6-5330613994.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/7-6670674226.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/7-7746404649.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/8-2826219800.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/8-4784671613.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/9-6316004029.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/9-2588433833.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/10-6200250175.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/10-1286007642.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/11-6336037901.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/11-9572951959.jpg" alt="img" />
 <span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/12-3285086506.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/12-7467293463.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/13-8066017171.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/13-2265987492.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/14-5747839345.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/14-7729593130.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/15-9061430099.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/15-86030188.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/16-7292839431.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/16-7757111131.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/17-5877478372.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/17-8205210303.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/18-8040433280.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/18-2035408301.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/19-7749496484.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/19-590099311.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/20-7651532704.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
 <img class="gallery_img" src="newsletter/news/images/20-5435819701.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/21-7550644319.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/21-1211458147.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/22-8016543132.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/22-1017922019.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/23-4189526067.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/23-5722894696.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/24-7813543090.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/24-253303081.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/25-2493618133.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/25-5405950970.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/26-3968727884.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/26-8964437728.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/27-6199141736.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/27-1527689233.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/28-5281376114.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/28-8822424864.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
 <a href="newsletter/news/images/29-3118527939.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/29-6899792305.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/30-6273191732.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/30-653374896.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/31-3192015522.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/31-2987261882.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/32-7271912244.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/32-669444191.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/33-595010251.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/33-5636030029.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/34-5808602483.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/34-713966367.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/35-1662047925.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/35-6783597605.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/36-8875490725.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/36-2935242129.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/1-3909088041.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/1-9916959669.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/2-3258158799.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/2-4742699197.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/75-839183349.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/75-8671963309.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/40-4750121049.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/40-8091347955.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/41-1756685737.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/41-8662981795.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/42-1197072265.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/42-4701996560.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/43-621491485.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/43-123931582.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/44-4904117821.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/44-1819037888.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/45-404631837.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/45-92783184.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/46-9608937804.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/46-6421775083.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/47-2094482344.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/47-353646278.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/48-5182354606.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/48-3494439958.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/49-6806912043.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/49-3198058192.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/50-2317371641.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/50-3625786614.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/51-9783748060.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/51-9790165426.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/52-1393873137.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/52-8489838757.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/53-3607830937.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/53-7327080641.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/54-3546898826.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/54-1253493597.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/55-2016998392.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/55-2710422772.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/56-1334824693.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/56-9870163891.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/57-6491165968.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/57-9160525139.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/58-7286273264.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/58-963839025.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/59-8816796931.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/59-3611708907.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/60-861889046.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/60-6168006135.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/61-851334271.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/61-8954265154.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/62-3535521539.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/62-2906203103.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/63-709034149.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/63-7627869877.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
 </a>
<a href="newsletter/news/images/64-2065889286.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/64-2380757373.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/65-5502217635.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/65-8461813970.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/66-8807256552.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/66-5455949940.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/67-8133559181.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/67-4915522809.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/68-7783540568.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/68-8567318494.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/69-5932671939.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/69-7212045552.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/70-412219822.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/70-7194319181.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/71-8782547401.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/71-730673422.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/72-7401078321.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/72-4937999427.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/73-1819888929.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/73-7823236848.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/74-6925998757.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/74-4089867368.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
</a>
<a href="newsletter/news/images/39-470349672.jpg" title="WALTER ROBINSON CROSS COUNTRY 2022">
<img class="gallery_img" src="newsletter/news/images/39-1306029231.jpg" alt="img" />
<span class="view_btn"> WALTER ROBINSON CROSS COUNTRY 2022 </span>
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


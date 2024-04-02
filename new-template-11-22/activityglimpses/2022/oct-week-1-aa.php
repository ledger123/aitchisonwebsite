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
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab1")?" active":"";?>" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="<?php echo ($selectedtab =="tab1")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Tennis Championship</button>
            </li>
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab2")?" active":"";?>" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="<?php echo ($selectedtab =="tab2")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Scrabble Championship</button>
            </li>
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab3")?" active":"";?>" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="<?php echo ($selectedtab =="tab3")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Hockey Match (Young Colts vs Older Dar Academy)</button>
            </li>
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab4")?" active":"";?>" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="<?php echo ($selectedtab =="tab4")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Annual Cartoon Competition </button>
            </li>
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab5")?" active":"";?>" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="tab5" aria-selected="<?php echo ($selectedtab =="tab5")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Hockey Match (Junior Boys Hockey XI Draw 1-1 With Rana Women's Academy)</button>
            </li>
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab6")?" active":"";?>" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab" aria-controls="tab6" aria-selected="<?php echo ($selectedtab =="tab6")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">Tour To KALAMKAAR</button>
            </li>
			<li class="nav-item btn" role="presentation">
                <button class="nav-link<?php echo ($selectedtab =="tab7")?" active":"";?>" id="tab7-tab" data-bs-toggle="tab" data-bs-target="#tab7" type="button" role="tab" aria-controls="tab7" aria-selected="<?php echo ($selectedtab =="tab7")?"true":"false";?>" style="width: 100%;height: 100%;vertical-align: middle;">JS Swimming Gala</button>
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
				<p class="gtitle0">Tennis Championship (Age Group: O/13) Prep School</p>
				<div id="gallerySLide1" class="sgallery_area4">
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
<a href="newsletter/news/images/17-2334175971.jpg" title="Tennis Championship (Age Group: O/13) Prep School">
<img class="gallery_img" src="newsletter/news/images/17-2801437902.jpg" alt="img" />
<span class="view_btn"> Tennis Championship </span>
</a>
				</div>
			</div>					
			<div class="tab-pane fade<?php echo ($selectedtab =="tab2")?"  show active":"";?>" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
				<p class="gtitle0">Prep School Engages Our Biggest Ever Scrabble Event

				</p>
				<div id="gallerySLide2" class="sgallery_area4">
					<a href="newsletter/news/images/1-4773950298.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/1-6813755519.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/2-1637266419.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/2-7333074670.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/3-2342534487.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/3-5237641961.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/4-4490121925.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/4-1707891627.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/5-8143972103.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/5-2252104326.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/6-9219510474.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/6-9662411273.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/7-5882836290.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/7-8638966217.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/8-1338773001.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/8-368786303.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/9-5576255480.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/9-1961504632.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/10-5265431971.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/10-1635341828.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/11-4262397285.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/11-9380030290.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/12-5122388659.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/12-2565693950.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/13-6531824756.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/13-2001576931.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/14-6888471106.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/14-6999742134.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/15-6085478763.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/15-4863268782.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/16-6496255653.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/16-6307965815.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/17-3658183850.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/17-9749324045.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/18-1763793903.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/18-1214996788.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/19-1486239670.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/19-7040923238.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/20-8520812255.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/20-4002281645.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/21-7083459649.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/21-7867096882.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/22-1036189308.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/22-1380315677.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/23-3647346405.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/23-4354197205.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/24-2033710949.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/24-9883749013.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/25-6323223460.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/25-4317948906.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/26-1971884499.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/26-2947562109.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/27-6656675497.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/27-3717552466.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/28-4974705632.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/28-1955745734.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/29-3311030616.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/29-8460449550.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/30-5946863638.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/30-1500615226.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
 <a href="newsletter/news/images/31-8537888283.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/31-4147323071.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/32-4164744195.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/32-1527467595.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/33-9430887263.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/33-773452831.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/34-2468739205.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/34-6457829140.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/35-745295894.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/35-7561350918.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/36-7011204562.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/36-3045375755.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/37-1053360958.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/37-6510844820.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/38-7062756708.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/38-7778854785.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
<a href="newsletter/news/images/39-9344689624.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/39-4251628919.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
 </a>
<a href="newsletter/news/images/40-4519219283.jpg" title="Prep School Engages Our Biggest Ever Scrabble Event">
<img class="gallery_img" src="newsletter/news/images/40-6381144558.jpg" alt="img" />
<span class="view_btn"> Scrabble Event </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab3")?"  show active":"";?>" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
				<p class="gtitle0">Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy</p>
				<div id="gallerySLide3" class="sgallery_area4">
					<a href="newsletter/news/images/1-5612280116.jpg" title="Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy">
<img class="gallery_img" src="newsletter/news/images/1-6044856889.jpg" alt="img" />
<span class="view_btn"> Young Hockey Colts </span>
</a>
<a href="newsletter/news/images/2-5718954207.jpg" title="Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy">
<img class="gallery_img" src="newsletter/news/images/2-1395318654.jpg" alt="img" />
<span class="view_btn"> Young Hockey Colts </span>
</a>
<a href="newsletter/news/images/3-280176038.jpg" title="Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy">
<img class="gallery_img" src="newsletter/news/images/3-280124388.jpg" alt="img" />
<span class="view_btn"> Young Hockey Colts </span>
</a>
<a href="newsletter/news/images/4-4754774268.jpg" title="Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy">
<img class="gallery_img" src="newsletter/news/images/4-526986637.jpg" alt="img" />
<span class="view_btn"> Young Hockey Colts </span>
</a>
<a href="newsletter/news/images/5-3444585817.jpg" title="Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy">
<img class="gallery_img" src="newsletter/news/images/5-218899882.jpg" alt="img" />
<span class="view_btn"> Young Hockey Colts </span>
</a>
<a href="newsletter/news/images/6-1359140434.jpg" title="Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy">
<img class="gallery_img" src="newsletter/news/images/6-6565962177.jpg" alt="img" />
<span class="view_btn"> Young Hockey Colts </span>
</a>
<a href="newsletter/news/images/7-2295292746.jpg" title="Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy">
<img class="gallery_img" src="newsletter/news/images/7-619597800.jpg" alt="img" />
<span class="view_btn"> Young Hockey Colts </span>
</a>
<a href="newsletter/news/images/8-8734970403.jpg" title="Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy">
<img class="gallery_img" src="newsletter/news/images/8-5868741670.jpg" alt="img" />
<span class="view_btn"> Young Hockey Colts </span>
</a>
<a href="newsletter/news/images/9-5818334854.jpg" title="Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy">
<img class="gallery_img" src="newsletter/news/images/9-4282218420.jpg" alt="img" />
<span class="view_btn"> Young Hockey Colts </span>
</a>
<a href="newsletter/news/images/10-1505392490.jpg" title="Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy">
<img class="gallery_img" src="newsletter/news/images/10-3434399196.jpg" alt="img" />
<span class="view_btn"> Young Hockey Colts </span>
</a>
<a href="newsletter/news/images/11-5236929314.jpg" title="Young Hockey Colts Narrowly Down (6-5) Against Older Dar Academy">
<img class="gallery_img" src="newsletter/news/images/11-4948142853.jpg" alt="img" />
<span class="view_btn"> Young Hockey Colts </span>
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
				<p class="gtitle0">Junior Boys Hockey XI Draw 1-1 With Rana Women's Academy</p>
				<div id="gallerySLide5" class="sgallery_area4">
					<a href="newsletter/news/images/1-4339348843.jpg" title="Junior Boys Hockey XI Draw 1-1 With Rana Women's Academy">
<img class="gallery_img" src="newsletter/news/images/1-6792757670.jpg" alt="img" />
<span class="view_btn"> Junior Boys Hockey </span>
</a>
<a href="newsletter/news/images/2-9963740754.jpg" title="Junior Boys Hockey XI Draw 1-1 With Rana Women's Academy">
<img class="gallery_img" src="newsletter/news/images/2-3582587523.jpg" alt="img" />
<span class="view_btn"> Junior Boys Hockey </span>
</a>
<a href="newsletter/news/images/3-1496730551.jpg" title="Junior Boys Hockey XI Draw 1-1 With Rana Women's Academy">
<img class="gallery_img" src="newsletter/news/images/3-2075331390.jpg" alt="img" />
<span class="view_btn"> Junior Boys Hockey </span>
</a>
<a href="newsletter/news/images/4-9748824060.jpg" title="Junior Boys Hockey XI Draw 1-1 With Rana Women's Academy">
<img class="gallery_img" src="newsletter/news/images/4-2841190342.jpg" alt="img" />
<span class="view_btn"> Junior Boys Hockey </span>
</a>
<a href="newsletter/news/images/5-2339155231.jpg" title="Junior Boys Hockey XI Draw 1-1 With Rana Women's Academy">
<img class="gallery_img" src="newsletter/news/images/5-3127062087.jpg" alt="img" />
<span class="view_btn"> Junior Boys Hockey </span>
</a>
<a href="newsletter/news/images/6-4087588850.jpg" title="Junior Boys Hockey XI Draw 1-1 With Rana Women's Academy">
<img class="gallery_img" src="newsletter/news/images/6-7156341710.jpg" alt="img" />
<span class="view_btn"> Junior Boys Hockey </span>
</a>
<a href="newsletter/news/images/7-5386853996.jpg" title="Junior Boys Hockey XI Draw 1-1 With Rana Women's Academy">
<img class="gallery_img" src="newsletter/news/images/7-1963890262.jpg" alt="img" />
<span class="view_btn"> Junior Boys Hockey </span>
</a>
<a href="newsletter/news/images/8-8730219727.jpg" title="Junior Boys Hockey XI Draw 1-1 With Rana Women's Academy">
<img class="gallery_img" src="newsletter/news/images/8-5107231502.jpg" alt="img" />
<span class="view_btn"> Junior Boys Hockey </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab6")?"  show active":"";?>" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
				<p class="gtitle0">Study Tour To KALAMKAAR</p>
				<div id="gallerySLide6" class="sgallery_area4">
					<a href="newsletter/news/images/1-4741288422.jpg" title="Study Tour To KALAMKAAR">
<img class="gallery_img" src="newsletter/news/images/1-5949594870.jpg" alt="img" />
<span class="view_btn"> Study Tour To KALAMKAAR </span>
</a>
<a href="newsletter/news/images/2-6137378406.jpeg" title="Study Tour To KALAMKAAR">
<img class="gallery_img" src="newsletter/news/images/2-5446712338.jpeg" alt="img" />
<span class="view_btn"> Study Tour To KALAMKAAR </span>
</a>
<a href="newsletter/news/images/3-7425365741.jpg" title="Study Tour To KALAMKAAR">
<img class="gallery_img" src="newsletter/news/images/3-1523994375.jpg" alt="img" />
<span class="view_btn"> Study Tour To KALAMKAAR </span>
</a>
<a href="newsletter/news/images/4-5912798362.jpeg" title="Study Tour To KALAMKAAR">
<img class="gallery_img" src="newsletter/news/images/4-1441557019.jpeg" alt="img" />
<span class="view_btn"> Study Tour To KALAMKAAR </span>
</a>

<a href="newsletter/news/images/5-1474303332.jpeg" title="Study Tour To KALAMKAAR">
<img class="gallery_img" src="newsletter/news/images/5-3500554279.jpeg" alt="img" />
<span class="view_btn"> Study Tour To KALAMKAAR </span>
</a>
<a href="newsletter/news/images/6-2393522823.jpg" title="Study Tour To KALAMKAAR">
<img class="gallery_img" src="newsletter/news/images/6-8758623531.jpg" alt="img" />
<span class="view_btn"> Study Tour To KALAMKAAR </span>
</a>
<a href="newsletter/news/images/7-3326519957.jpeg" title="Study Tour To KALAMKAAR">
<img class="gallery_img" src="newsletter/news/images/7-9442199054.jpeg" alt="img" />
<span class="view_btn"> Study Tour To KALAMKAAR </span>
</a>
<a href="newsletter/news/images/8-7423419684.jpeg" title="Study Tour To KALAMKAAR">
<img class="gallery_img" src="newsletter/news/images/8-5416758578.jpeg" alt="img" />
<span class="view_btn"> Study Tour To KALAMKAAR </span>
</a>
				</div>
			</div>
			<div class="tab-pane fade<?php echo ($selectedtab =="tab7")?"  show active":"";?>" id="tab7" role="tabpanel" aria-labelledby="tab7-tab">
				<p class="gtitle0">JS Swimming Gala
				</p>
				<div id="gallerySLide7" class="sgallery_area4">
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
<a href="newsletter/news/images/65-1149454800.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/65-1069334285.jpg" alt="img" />
<span class="view_btn"> JS Swimming Gala </span>
</a>
<a href="newsletter/news/images/66-4848130851.jpg" title="JS Swimming Gala">
<img class="gallery_img" src="newsletter/news/images/66-5903006294.jpg" alt="img" />
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


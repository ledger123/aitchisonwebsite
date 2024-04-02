<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Sports Activities"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/gallery.jpg';
?>
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>resources/css/gallery-style.css?v=1">
<style>
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: darkblue;	
	margin: 10px 1px 0px 1px;
    background-color: #ffc845/*#00205b*/;
	/*border-color: #00205b*/
	border-color: transparent;
	border-top-left-radius: 0rem;
    border-top-right-radius: 0rem;
	}
	.nav-tabs .nav-link {
	color: white;
	margin: 10px 1px 0px 1px;	
    background-color: #00205b/*#00205b*/;	
		border-color: transparent;
	border-top-left-radius: 0rem;
    border-top-right-radius: 0rem;	
	}


#loading {
    position: fixed;
    display: block;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    text-align: center;
    opacity: 0.7;
    background-color: #fff;
    z-index: 9999;
}

#loading-image {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 10000;

    border: 16px solid #00205b;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
    border-top: 16px solid #ffc845;

    border-radius: 50%;
    width: 120px;
    height: 120px;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

</style>
<body>
<?php include_once ($path.'top-menu-bar.php'); ?>

<?php include_once ($path.'logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>

<div class="container-fluid">

    <div class="row mx-lg-5 mt-2">
        <div class="col-lg-9 col-md-6 col-sm-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo $path;?>gallery/event-gallery">Gallery</a></li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div style="height: 60px;"></div>
        </div>
    </div>
</div>


<div class="container">

    <div class="row">
        <?php include_once ('right-panel-links.php'); ?>
    </div>

</div>

<div class="container-fluid">

    <div class="col-lg-9 col-md-12 col-sm-12">
        <div class="col-12 page-title">
            <h1><?php echo $title; ?></h1>
			<p style="font-size:1.5rem;color:#800000;">The first week of September at a Glance</p>
        </div>

    </div>
</div>

<div class="container">
    <div id="loading">
        <div id="loading-image">

        </div>
    </div>
    <!-- Contents -->
    <div class="row">
		<?php
		$selectedtab="istxicricket";
		?>
        <!-- Left Area -->
        <div class="col-lg-12 col-md-12 col-sm-12">
            <ul class="nav nav-tabs mb-3" id="sportsTab" role="tablist">
				<li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="istxicricket")?" active":"";?>" id="istxicricket-tab" data-bs-toggle="tab" data-bs-target="#istxicricket" type="button" role="tab" aria-controls="istxicricket" aria-selected="false">1<sup>st</sup> XI Cricket</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="u13cricket")?" active":"";?>" id="u13cricket-tab" data-bs-toggle="tab" data-bs-target="#u13cricket" type="button" role="tab" aria-controls="u13cricket" aria-selected="false">U13 Cricket </button>
                </li>
				<li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="u14cricket")?" active":"";?>" id="u14cricket-tab" data-bs-toggle="tab" data-bs-target="#u14cricket" type="button" role="tab" aria-controls="u14cricket" aria-selected="false">U14 Cricket</button>
                </li>
				
				<li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="u16cricket")?" active":"";?>" id="u16cricket-tab" data-bs-toggle="tab" data-bs-target="#u16cricket" type="button" role="tab" aria-controls="u16cricket" aria-selected="false">U16 Cricket</button>
                </li>
				<li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="actennis")?" active":"";?>" id="actennis-tab" data-bs-toggle="tab" data-bs-target="#actennis" type="button" role="tab" aria-controls="actennis" aria-selected="false">Tennis</button>
                </li>		 
                
                
                <li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="acbasketball")?" active":"";?>" id="acbasketball-tab" data-bs-toggle="tab" data-bs-target="#acbasketball" type="button" role="tab" aria-controls="acbasketball" aria-selected="false">Basketball</button>
                </li>
                
                <li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="interhouseswimming")?" active":"";?>" id="interhouseswimming-tab" data-bs-toggle="tab" data-bs-target="#interhouseswimming" type="button" role="tab" aria-controls="acclubactivity" aria-selected="true">Swimming</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="acfootball")?" active":"";?>" id="acfootball-tab" data-bs-toggle="tab" data-bs-target="#acfootball" type="button" role="tab" aria-controls="acfootball" aria-selected="false">Football</button>
                </li>
				<li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="achockey")?" active":"";?>" id="achockey-tab" data-bs-toggle="tab" data-bs-target="#achockey" type="button" role="tab" aria-controls="achockey" aria-selected="false">Hockey </button>
                </li>
				<li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="acwaterpolo")?" active":"";?>" id="acwaterpolo-tab" data-bs-toggle="tab" data-bs-target="#acwaterpolo" type="button" role="tab" aria-controls="acwaterpolo" aria-selected="false">Water Polo </button>
                </li>
				
            </ul>
            <div class="tab-content" id="sportsTabContent">
				<div class="tab-pane fade<?php echo ($selectedtab =="istxicricket")?"  show active":"";?>" id="istxicricket" role="tabpanel" aria-labelledby="istxicricket-tab">
					<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Aitchison 1st XI vs Lahore School System</p>
                    <div id="gallerySLide" class="sgallery_area4">
                        <a href="newsletter/news/images/1-6257483817.jpg" title="Aitchison 1st XI vs Lahore School System">
						<img class="gallery_img" src="newsletter/news/images/1-2899603445.jpg" alt="img" />
						<span class="view_btn"> Aitchison 1st XI </span>
						</a>
						<a href="newsletter/news/images/2-3014535224.jpg" title="Aitchison 1st XI vs Lahore School System">
						<img class="gallery_img" src="newsletter/news/images/2-7657392899.jpg" alt="img" />
						<span class="view_btn"> Aitchison 1st XI </span>
						</a>
						<a href="newsletter/news/images/3-9541517084.jpg" title="Aitchison 1st XI vs Lahore School System">
						<img class="gallery_img" src="newsletter/news/images/3-9643522044.jpg" alt="img" />
						<span class="view_btn"> Aitchison 1st XI </span>
						</a>
						<a href="newsletter/news/images/4-8687725056.jpg" title="Aitchison 1st XI vs Lahore School System">
						<img class="gallery_img" src="newsletter/news/images/4-5043136437.jpg" alt="img" />
						<span class="view_btn"> Aitchison 1st XI </span>
						</a>

						<a href="newsletter/news/images/5-2423789892.jpg" title="Aitchison 1st XI vs Lahore School System">
						<img class="gallery_img" src="newsletter/news/images/5-3789990720.jpg" alt="img" />
						<span class="view_btn"> Aitchison 1st XI </span>
						</a>
						<a href="newsletter/news/images/6-887036400.jpg" title="Aitchison 1st XI vs Lahore School System">
						<img class="gallery_img" src="newsletter/news/images/6-5649697204.jpg" alt="img" />
						<span class="view_btn"> Aitchison 1st XI </span>
						</a>
						<a href="newsletter/news/images/7-1576436983.jpg" title="Aitchison 1st XI vs Lahore School System">
						<img class="gallery_img" src="newsletter/news/images/7-1042367808.jpg" alt="img" />
						<span class="view_btn"> Aitchison 1st XI </span>
						</a>
						<a href="newsletter/news/images/8-1962115924.jpg" title="Aitchison 1st XI vs Lahore School System">
						<img class="gallery_img" src="newsletter/news/images/8-9126600308.jpg" alt="img" />
						<span class="view_btn"> Aitchison 1st XI </span>
						</a>
						<a href="newsletter/news/images/9-6699458049.jpg" title="Aitchison 1st XI vs Lahore School System">
						<img class="gallery_img" src="newsletter/news/images/9-4962584613.jpg" alt="img" />
						<span class="view_btn"> Aitchison 1st XI </span>
						</a>
						<a href="newsletter/news/images/10-1622548384.jpg" title="Aitchison 1st XI vs Lahore School System">
						<img class="gallery_img" src="newsletter/news/images/10-7059045908.jpg" alt="img" />
						<span class="view_btn"> Aitchison 1st XI </span>
						</a>
						<a href="newsletter/news/images/11-7804066913.jpg" title="Aitchison 1st XI vs Lahore School System">
						<img class="gallery_img" src="newsletter/news/images/11-7908322477.jpg" alt="img" />
						<span class="view_btn"> Aitchison 1st XI </span>
						</a>
						<a href="newsletter/news/images/12-5273499847.jpg" title="Aitchison 1st XI vs Lahore School System">
						<img class="gallery_img" src="newsletter/news/images/12-2274526450.jpg" alt="img" />
						<span class="view_btn"> Aitchison 1st XI </span>
						</a>
						<a href="newsletter/news/images/13-1127582684.jpg" title="Aitchison 1st XI vs Lahore School System">
						<img class="gallery_img" src="newsletter/news/images/13-789028297.jpg" alt="img" />
						<span class="view_btn"> Aitchison 1st XI </span>
						</a>

						<a href="newsletter/news/images/14-9821822132.jpg" title="Aitchison 1st XI vs Lahore School System">
						<img class="gallery_img" src="newsletter/news/images/14-8581981554.jpg" alt="img" />
						<span class="view_btn"> Aitchison 1st XI </span>
						</a>
						<a href="newsletter/news/images/15-8857931705.jpg" title="Aitchison 1st XI vs Lahore School System">
						<img class="gallery_img" src="newsletter/news/images/15-2965372809.jpg" alt="img" />
						<span class="view_btn"> Aitchison 1st XI </span>
						</a>
                    </div>
                </div>
                <div class="tab-pane fade<?php echo ($selectedtab =="u14cricket")?"  show active":"";?>" id="u14cricket" role="tabpanel" aria-labelledby="u14cricket-tab">
					<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Aitchison Under 14 probables take to the field</p>
                    <div id="gallerySLide" class="sgallery_area4">
                        <a href="newsletter/news/images/1-8061897333.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/1-4516995154.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/2-1291859208.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/2-2921943506.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/3-4674833777.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/3-5670955800.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/4-8476587844.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/4-8960415708.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/5-6086419112.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/5-2181032206.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/6-2447064072.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/6-6955032951.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/7-1869253749.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/7-7791843154.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/8-4317453751.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/8-6881350052.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/9-6118813140.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/9-6209235198.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/10-9506344444.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/10-8138894763.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/11-1320880868.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/11-3655572766.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/12-6811124911.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/12-319041784.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/13-4545601242.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/13-2340941862.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/14-612307908.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/14-4457083808.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/15-7194004822.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/15-2175295339.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/16-8449193599.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/16-1317840771.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/17-7060042576.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/17-9094520096.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/18-1160278981.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/18-1233290184.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/19-3421663786.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/19-2797279920.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/20-6316603816.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/20-7824780079.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/21-178553497.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/21-8131777671.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/22-5171121632.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/22-3649827046.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/23-6564344652.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/23-9998122292.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/24-6941856246.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/24-6008906396.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/25-5652657528.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/25-2640010865.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/26-3616788565.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/26-3229505477.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/27-7343822135.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/27-240477112.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/28-9799368476.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/28-594104638.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/29-9425434341.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/29-3342238542.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/30-3541915793.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/30-6572862651.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/31-5146525808.jpg" title="Aitchison Under 14 probables take to the field">
						 <img class="gallery_img" src="newsletter/news/images/31-6038645306.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/32-6414646682.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/32-1845892907.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/33-7000902131.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/33-432114253.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/34-9078059912.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/34-8283999397.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/35-7268009297.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/35-2857499573.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/36-1195775255.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/36-9636579958.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/37-6136001599.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/37-1009721642.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/38-3785982919.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/38-3936915856.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/39-5808932313.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/39-1042854857.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/40-8512264943.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/40-5586204872.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/41-3165068201.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/41-8606452451.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/42-5267312363.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/42-607549590.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
						<a href="newsletter/news/images/43-4225817446.jpg" title="Aitchison Under 14 probables take to the field">
						<img class="gallery_img" src="newsletter/news/images/43-4557589680.jpg" alt="img" />
						<span class="view_btn"> Under 14 Cricket </span>
						</a>
                    </div>
                </div>
                <div class="tab-pane fade<?php echo ($selectedtab =="actennis")?"  show active":"";?>" id="actennis" role="tabpanel" aria-labelledby="actennis-tab">
					<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Aitchison Tennis hits off</p>
                    <div id="gallerySLide" class="sgallery_area4">
                        <a href="newsletter/news/images/1-64274528.jpeg" title="Aitchison Tennis hits off">
						<img class="gallery_img" src="newsletter/news/images/1-474853692.jpeg" alt="img" />
						<span class="view_btn"> Aitchison Tennis </span>
						</a>
						<a href="newsletter/news/images/2-9159847820.jpeg" title="Aitchison Tennis hits off">
						<img class="gallery_img" src="newsletter/news/images/2-9536565323.jpeg" alt="img" />
						<span class="view_btn"> Aitchison Tennis </span>
						</a>
						<a href="newsletter/news/images/3-7746981970.jpeg" title="Aitchison Tennis hits off">
						<img class="gallery_img" src="newsletter/news/images/3-4892563809.jpeg" alt="img" />
						<span class="view_btn"> Aitchison Tennis </span>
						</a>
						<a href="newsletter/news/images/4-5262248326.jpeg" title="Aitchison Tennis hits off">
						<img class="gallery_img" src="newsletter/news/images/4-6217122475.jpeg" alt="img" />
						<span class="view_btn"> Aitchison Tennis </span>
						</a>
						 <a href="newsletter/news/images/5-2849787042.jpeg" title="Aitchison Tennis hits off">
						<img class="gallery_img" src="newsletter/news/images/5-761796279.jpeg" alt="img" />
						<span class="view_btn"> Aitchison Tennis </span>
						</a>
						<a href="newsletter/news/images/6-4332168160.jpeg" title="Aitchison Tennis hits off">
						<img class="gallery_img" src="newsletter/news/images/6-1970939296.jpeg" alt="img" />
						<span class="view_btn"> Aitchison Tennis </span>
						</a>
						<a href="newsletter/news/images/7-4478002724.jpeg" title="Aitchison Tennis hits off">
						<img class="gallery_img" src="newsletter/news/images/7-1233389796.jpeg" alt="img" />
						<span class="view_btn"> Aitchison Tennis </span>
						</a>
						<a href="newsletter/news/images/8-4483244618.jpeg" title="Aitchison Tennis hits off">
						<img class="gallery_img" src="newsletter/news/images/8-3970340769.jpeg" alt="img" />
						<span class="view_btn"> Aitchison Tennis </span>
						</a>
						<a href="newsletter/news/images/9-5452951766.jpeg" title="Aitchison Tennis hits off">
						<img class="gallery_img" src="newsletter/news/images/9-982233172.jpeg" alt="img" />
						<span class="view_btn"> Aitchison Tennis </span>
						</a>
						<a href="newsletter/news/images/10-6776631945.jpeg" title="Aitchison Tennis hits off">
						<img class="gallery_img" src="newsletter/news/images/10-1396134666.jpeg" alt="img" />
						<span class="view_btn"> Aitchison Tennis </span>
						</a>
						<a href="newsletter/news/images/11-1212282544.jpeg" title="Aitchison Tennis hits off">
						<img class="gallery_img" src="newsletter/news/images/11-544172227.jpeg" alt="img" />
						<span class="view_btn"> Aitchison Tennis </span>
						</a>
                    </div>
                </div>

                <div class="tab-pane fade<?php echo ($selectedtab =="u13cricket")?"  show active":"";?>" id="u13cricket" role="tabpanel" aria-labelledby="u13cricket-tab">
					<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">U 13 probables fight it out on Zulfiqar ground</p>
                    <div id="gallerySLide" class="sgallery_area4">
                        <a href="newsletter/news/images/1-7772618945.jpg" title="U 13 probables fight it out on Zulfiqar ground">
						<img class="gallery_img" src="newsletter/news/images/1-373621614.jpg" alt="img" />
						<span class="view_btn"> U 13 Cricket </span>
						</a>
						<a href="newsletter/news/images/2-5094454773.jpg" title="U 13 probables fight it out on Zulfiqar ground">
						<img class="gallery_img" src="newsletter/news/images/2-4193960116.jpg" alt="img" />
						<span class="view_btn"> U 13 Cricket </span>
						</a>
						<a href="newsletter/news/images/3-3778718963.jpg" title="U 13 probables fight it out on Zulfiqar ground">
						<img class="gallery_img" src="newsletter/news/images/3-1945285413.jpg" alt="img" />
						<span class="view_btn"> U 13 Cricket </span>
						</a>
						<a href="newsletter/news/images/4-1874027403.jpg" title="U 13 probables fight it out on Zulfiqar ground">
						<img class="gallery_img" src="newsletter/news/images/4-3569878332.jpg" alt="img" />
						<span class="view_btn"> U 13 Cricket </span>
						</a>

						<a href="newsletter/news/images/5-8872150948.jpg" title="U 13 probables fight it out on Zulfiqar ground">
						<img class="gallery_img" src="newsletter/news/images/5-7338510074.jpg" alt="img" />
						<span class="view_btn"> U 13 Cricket </span>
						</a>
						<a href="newsletter/news/images/6-8002635572.jpg" title="U 13 probables fight it out on Zulfiqar ground">
						<img class="gallery_img" src="newsletter/news/images/6-7107285769.jpg" alt="img" />
						<span class="view_btn"> U 13 Cricket </span>
						</a>
						<a href="newsletter/news/images/7-7026838090.jpg" title="U 13 probables fight it out on Zulfiqar ground">
						<img class="gallery_img" src="newsletter/news/images/7-4022910916.jpg" alt="img" />
						<span class="view_btn"> U 13 Cricket </span>
						</a>
						<a href="newsletter/news/images/8-1514372082.jpg" title="U 13 probables fight it out on Zulfiqar ground">
						<img class="gallery_img" src="newsletter/news/images/8-6903988270.jpg" alt="img" />
						<span class="view_btn"> U 13 Cricket </span>
						</a>
						<a href="newsletter/news/images/9-8584289609.jpg" title="U 13 probables fight it out on Zulfiqar ground">
						<img class="gallery_img" src="newsletter/news/images/9-8079448041.jpg" alt="img" />
						<span class="view_btn"> U 13 Cricket </span>
						</a>
						<a href="newsletter/news/images/10-6640520945.jpg" title="U 13 probables fight it out on Zulfiqar ground">
						<img class="gallery_img" src="newsletter/news/images/10-5406933106.jpg" alt="img" />
						<span class="view_btn"> U 13 Cricket </span>
						</a>
						<a href="newsletter/news/images/11-6768881844.jpg" title="U 13 probables fight it out on Zulfiqar ground">
						<img class="gallery_img" src="newsletter/news/images/11-2304608948.jpg" alt="img" />
						<span class="view_btn"> U 13 Cricket </span>
						</a>
                    </div>
                </div>
                <div class="tab-pane fade<?php echo ($selectedtab =="acbasketball")?"  show active":"";?>" id="acbasketball" role="tabpanel" aria-labelledby="acbasketball-tab">
					<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Aitchison Basketball gets underway on the Dawood Basketball Centre</p>
                    <div id="gallerySLide" class="sgallery_area4">
                        <a href="newsletter/news/images/1-2099491478.jpg" title="Aitchison Basketball gets underway on the Dawood Basketball Centre">
						<img class="gallery_img" src="newsletter/news/images/1-6700969001.jpg" alt="img" />
						<span class="view_btn"> Aitchison Basketball </span>
						</a>
						<a href="newsletter/news/images/2-4090219010.jpg" title="Aitchison Basketball gets underway on the Dawood Basketball Centre">
						<img class="gallery_img" src="newsletter/news/images/2-4245569807.jpg" alt="img" />
						<span class="view_btn"> Aitchison Basketball </span>
						</a>
						<a href="newsletter/news/images/3-9694849095.jpg" title="Aitchison Basketball gets underway on the Dawood Basketball Centre">
						<img class="gallery_img" src="newsletter/news/images/3-9844441339.jpg" alt="img" />
						<span class="view_btn"> Aitchison Basketball </span>
						</a>
						<a href="newsletter/news/images/4-7127954444.jpg" title="Aitchison Basketball gets underway on the Dawood Basketball Centre">
						<img class="gallery_img" src="newsletter/news/images/4-855343067.jpg" alt="img" />
						<span class="view_btn"> Aitchison Basketball </span>
						</a>
						 <a href="newsletter/news/images/5-5131141502.jpg" title="Aitchison Basketball gets underway on the Dawood Basketball Centre">
						<img class="gallery_img" src="newsletter/news/images/5-1406282972.jpg" alt="img" />
						<span class="view_btn"> Aitchison Basketball </span>
						</a>
						<a href="newsletter/news/images/6-2691612736.jpg" title="Aitchison Basketball gets underway on the Dawood Basketball Centre">
						<img class="gallery_img" src="newsletter/news/images/6-637269330.jpg" alt="img" />
						<span class="view_btn"> Aitchison Basketball </span>
						</a>
						<a href="newsletter/news/images/7-4145700386.jpg" title="Aitchison Basketball gets underway on the Dawood Basketball Centre">
						<img class="gallery_img" src="newsletter/news/images/7-5849487803.jpg" alt="img" />
						<span class="view_btn"> Aitchison Basketball </span>
						</a>
						<a href="newsletter/news/images/8-8993913484.jpg" title="Aitchison Basketball gets underway on the Dawood Basketball Centre">
						<img class="gallery_img" src="newsletter/news/images/8-4756465644.jpg" alt="img" />
						<span class="view_btn"> Aitchison Basketball </span>
						</a>
						<a href="newsletter/news/images/9-5456655313.jpg" title="Aitchison Basketball gets underway on the Dawood Basketball Centre">
						<img class="gallery_img" src="newsletter/news/images/9-4594256664.jpg" alt="img" />
						<span class="view_btn"> Aitchison Basketball </span>
						</a>
						<a href="newsletter/news/images/10-8169442899.jpg" title="Aitchison Basketball gets underway on the Dawood Basketball Centre">
						<img class="gallery_img" src="newsletter/news/images/10-4397380313.jpg" alt="img" />
						<span class="view_btn"> Aitchison Basketball </span>
						</a>
                    </div>
                </div>
                <div class="tab-pane fade<?php echo ($selectedtab =="u16cricket")?"  show active":"";?>" id="u16cricket" role="tabpanel" aria-labelledby="u16cricket-tab">
					<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Under 16 Cricket Opens its Season</p>
                    <div id="gallerySLide" class="sgallery_area4">
                        <a href="newsletter/news/images/1-5560291833.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/1-4100200311.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/2-4968987981.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/2-4614286787.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/4-2355306790.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/4-4383047611.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/3-7001089696.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/3-8737297146.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/5-8747814587.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/5-1198879851.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/6-8750409043.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/6-5604277932.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/8-3191277497.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/8-1678832933.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/7-6536069147.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/7-5925386000.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/9-16744256.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/9-2149146507.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/13-1349862045.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/13-9621264383.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/11-3703153832.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/11-3081648003.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/12-8585689756.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/12-5527341070.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/10-8057552850.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/10-27063154.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/14-6490947898.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/14-2095599395.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/16-220268678.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/16-1161504851.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/15-6788126268.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/15-700980726.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/18-1890442940.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/18-5034526574.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/17-1889416514.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/17-9757513260.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/19-35815414.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/19-2123311040.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/20-6621112706.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/20-1564695027.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						 </a>
						<a href="newsletter/news/images/21-9903645132.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/21-2982595324.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/22-5096745819.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/22-7506870.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/23-6792502703.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/23-2935210885.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/24-8477572643.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/24-6212816319.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/25-9283201038.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/25-1636202222.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/26-7652818965.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/26-6582102902.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/27-1062243668.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/27-2975383045.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/28-5972783930.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/28-6618744444.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/29-6510732187.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/29-819537716.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>

						<a href="newsletter/news/images/30-5251803799.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/30-5898311372.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/31-8922771034.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/31-3123873919.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
						<a href="newsletter/news/images/32-4718135132.jpg" title="Under 16 Cricket Opens its Season">
						<img class="gallery_img" src="newsletter/news/images/32-8447293959.jpg" alt="img" />
						<span class="view_btn"> Under 16 Cricket </span>
						</a>
                    </div>
                </div>

                <div class="tab-pane fade<?php echo ($selectedtab =="interhouseswimming")?"  show active":"";?>" id="interhouseswimming" role="tabpanel" aria-labelledby="interhouseswimming-tab">
					<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter House Swimming Competition Prep School
</p>
                    <div id="gallerySLide" class="sgallery_area4">
                    	<a href="newsletter/news/images/1-7393103506.jpeg" title="Inter House Swimming Competition Prep School">
						<img class="gallery_img" src="newsletter/news/images/1-5706246425.jpeg" alt="img" />
						<span class="view_btn"> Inter House Swimming </span>
						</a>
						<a href="newsletter/news/images/2-6328714400.jpeg" title="Inter House Swimming Competition Prep School">
						<img class="gallery_img" src="newsletter/news/images/2-5044790561.jpeg" alt="img" />
						<span class="view_btn"> Inter House Swimming </span>
						</a>
						<a href="newsletter/news/images/3-557006363.jpeg" title="Inter House Swimming Competition Prep School">
						<img class="gallery_img" src="newsletter/news/images/3-5667668749.jpeg" alt="img" />
						<span class="view_btn"> Inter House Swimming </span>
						</a>
						<a href="newsletter/news/images/4-9528658502.jpeg" title="Inter House Swimming Competition Prep School">
						<img class="gallery_img" src="newsletter/news/images/4-3695478262.jpeg" alt="img" />
						<span class="view_btn"> Inter House Swimming </span>
						</a>
						 <a href="newsletter/news/images/5-3973384885.jpeg" title="Inter House Swimming Competition Prep School">
						<img class="gallery_img" src="newsletter/news/images/5-7189763736.jpeg" alt="img" />
						<span class="view_btn"> Inter House Swimming </span>
						</a>
						<a href="newsletter/news/images/6-5675937456.jpeg" title="Inter House Swimming Competition Prep School">
						<img class="gallery_img" src="newsletter/news/images/6-5973025612.jpeg" alt="img" />
						<span class="view_btn"> Inter House Swimming </span>
						</a>
						<a href="newsletter/news/images/7-5877965138.jpeg" title="Inter House Swimming Competition Prep School">
						<img class="gallery_img" src="newsletter/news/images/7-9704986477.jpeg" alt="img" />
						<span class="view_btn"> Inter House Swimming </span>
						</a>
						<a href="newsletter/news/images/8-8363344207.jpeg" title="Inter House Swimming Competition Prep School">
						<img class="gallery_img" src="newsletter/news/images/8-8894726764.jpeg" alt="img" />
						<span class="view_btn"> Inter House Swimming </span>
						</a>
						<a href="newsletter/news/images/9-5118970760.jpeg" title="Inter House Swimming Competition Prep School">
						<img class="gallery_img" src="newsletter/news/images/9-4527319940.jpeg" alt="img" />
						<span class="view_btn"> Inter House Swimming </span>
						</a>
						<a href="newsletter/news/images/10-7016744198.jpeg" title="Inter House Swimming Competition Prep School">
						<img class="gallery_img" src="newsletter/news/images/10-7361801900.jpeg" alt="img" />
						<span class="view_btn"> Inter House Swimming </span>
						</a>
						<a href="newsletter/news/images/11-9243438182.jpeg" title="Inter House Swimming Competition Prep School">
						<img class="gallery_img" src="newsletter/news/images/11-1477653985.jpeg" alt="img" />
						<span class="view_btn"> Inter House Swimming </span>
						</a>
						<a href="newsletter/news/images/12-5887297081.jpeg" title="Inter House Swimming Competition Prep School">
						<img class="gallery_img" src="newsletter/news/images/12-4442858665.jpeg" alt="img" />
						<span class="view_btn"> Inter House Swimming </span>
						</a>
						<a href="newsletter/news/images/13-9841943181.jpeg" title="Inter House Swimming Competition Prep School">
						<img class="gallery_img" src="newsletter/news/images/13-5156544840.jpeg" alt="img" />
						<span class="view_btn"> Inter House Swimming </span>
						</a>
						<a href="newsletter/news/images/14-2426769373.jpeg" title="Inter House Swimming Competition Prep School">
						<img class="gallery_img" src="newsletter/news/images/14-7255085465.jpeg" alt="img" />
						<span class="view_btn"> Inter House Swimming </span>
						</a>
						<a href="newsletter/news/images/15-1562472238.jpeg" title="Inter House Swimming Competition Prep School">
						<img class="gallery_img" src="newsletter/news/images/15-8612793420.jpeg" alt="img" />
						<span class="view_btn"> Inter House Swimming </span>
						</a>
						<a href="newsletter/news/images/16-1594125738.jpeg" title="Inter House Swimming Competition Prep School">
						<img class="gallery_img" src="newsletter/news/images/16-9929882842.jpeg" alt="img" />
						<span class="view_btn"> Inter House Swimming </span>
						</a>
						<a href="newsletter/news/images/17-3731756810.jpeg" title="Inter House Swimming Competition Prep School">
						<img class="gallery_img" src="newsletter/news/images/17-8413858281.jpeg" alt="img" />
						<span class="view_btn"> Inter House Swimming </span>
						</a>    
					</div>
                </div>
                <div class="tab-pane fade<?php echo ($selectedtab =="acfootball")?"  show active":"";?>" id="acfootball" role="tabpanel" aria-labelledby="acfootball-tab">
					<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">AC Blue vs AC Yellow - A Football Match</p>
                    <div id="gallerySLide" class="sgallery_area4">
                        <a href="newsletter/news/images/1-8789435539.jpg" title="AC Blue vs AC Yellow - A Football Match">
						<img class="gallery_img" src="newsletter/news/images/1-7003604712.jpg" alt="img" />
						<span class="view_btn"> A Football Match </span>
						</a>
						<a href="newsletter/news/images/2-1021599477.jpg" title="AC Blue vs AC Yellow - A Football Match">
						<img class="gallery_img" src="newsletter/news/images/2-7606150955.jpg" alt="img" />
						<span class="view_btn"> A Football Match </span>
						 </a>
						<a href="newsletter/news/images/3-9575569293.jpg" title="AC Blue vs AC Yellow - A Football Match">
						<img class="gallery_img" src="newsletter/news/images/3-7877408.jpg" alt="img" />
						<span class="view_btn"> A Football Match </span>
						</a>
						<a href="newsletter/news/images/4-391336556.jpg" title="AC Blue vs AC Yellow - A Football Match">
						<img class="gallery_img" src="newsletter/news/images/4-2169914659.jpg" alt="img" />
						<span class="view_btn"> A Football Match </span>
						</a>
						<a href="newsletter/news/images/5-9008695151.jpg" title="AC Blue vs AC Yellow - A Football Match">
						<img class="gallery_img" src="newsletter/news/images/5-893888753.jpg" alt="img" />
						<span class="view_btn"> A Football Match </span>
						</a>
						<a href="newsletter/news/images/6-6965858913.jpg" title="AC Blue vs AC Yellow - A Football Match">
						<img class="gallery_img" src="newsletter/news/images/6-7454755450.jpg" alt="img" />
						<span class="view_btn"> A Football Match </span>
						</a>
						<a href="newsletter/news/images/7-5119265049.jpg" title="AC Blue vs AC Yellow - A Football Match">
						<img class="gallery_img" src="newsletter/news/images/7-2981860356.jpg" alt="img" />
						<span class="view_btn"> A Football Match </span>
						</a>
						<a href="newsletter/news/images/8-1817034819.jpg" title="AC Blue vs AC Yellow - A Football Match">
						<img class="gallery_img" src="newsletter/news/images/8-2512209709.jpg" alt="img" />
						<span class="view_btn"> A Football Match </span>
						</a>
						<a href="newsletter/news/images/9-1409995398.jpg" title="AC Blue vs AC Yellow - A Football Match">
						<img class="gallery_img" src="newsletter/news/images/9-9323853568.jpg" alt="img" />
						<span class="view_btn"> A Football Match </span>
						</a>
						<a href="newsletter/news/images/10-4982661139.jpg" title="AC Blue vs AC Yellow - A Football Match">
						<img class="gallery_img" src="newsletter/news/images/10-2016952491.jpg" alt="img" />
						<span class="view_btn"> A Football Match </span>
						</a>
						<a href="newsletter/news/images/11-5694367585.jpg" title="AC Blue vs AC Yellow - A Football Match">
						<img class="gallery_img" src="newsletter/news/images/11-5872903778.jpg" alt="img" />
						<span class="view_btn"> A Football Match </span>
						 </a>
						<a href="newsletter/news/images/12-4639748122.jpg" title="AC Blue vs AC Yellow - A Football Match">
						<img class="gallery_img" src="newsletter/news/images/12-95704946.jpg" alt="img" />
						<span class="view_btn"> A Football Match </span>
						</a>
						<a href="newsletter/news/images/13-7106278173.jpg" title="AC Blue vs AC Yellow - A Football Match">
						<img class="gallery_img" src="newsletter/news/images/13-8299386048.jpg" alt="img" />
						<span class="view_btn"> A Football Match </span>
						</a>
						<a href="newsletter/news/images/14-6447417810.jpg" title="AC Blue vs AC Yellow - A Football Match">
						<img class="gallery_img" src="newsletter/news/images/14-9021710095.jpg" alt="img" />
						<span class="view_btn"> A Football Match </span>
						</a>
						<a href="newsletter/news/images/15-3757773548.jpg" title="AC Blue vs AC Yellow - A Football Match">
						<img class="gallery_img" src="newsletter/news/images/15-4960727639.jpg" alt="img" />
						<span class="view_btn"> A Football Match </span>
						</a>
						<a href="newsletter/news/images/16-3224432297.jpg" title="AC Blue vs AC Yellow - A Football Match">
						<img class="gallery_img" src="newsletter/news/images/16-8248359003.jpg" alt="img" />
						<span class="view_btn"> A Football Match </span>
						</a>
						<a href="newsletter/news/images/17-3726190050.jpg" title="AC Blue vs AC Yellow - A Football Match">
						<img class="gallery_img" src="newsletter/news/images/17-4753257052.jpg" alt="img" />
						<span class="view_btn"> A Football Match </span>
						</a>
						<a href="newsletter/news/images/18-6600675548.jpg" title="AC Blue vs AC Yellow - A Football Match">
						<img class="gallery_img" src="newsletter/news/images/18-3113018542.jpg" alt="img" />
						<span class="view_btn"> A Football Match </span>
						</a>
                    </div>
                </div>
				<div class="tab-pane fade<?php echo ($selectedtab =="achockey")?"  show active":"";?>" id="achockey" role="tabpanel" aria-labelledby="achockey-tab">
					<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Practice Hockey Match - Aitchison College vs Aitchison U/17</p>
                    <div id="gallerySLide" class="sgallery_area4">
                        <a href="newsletter/news/images/1-4733314486.jpg" title="Practice Hockey Match - Aitchison College vs Aitchison U/17">
						<img class="gallery_img" src="newsletter/news/images/1-2395954259.jpg" alt="img" />
						<span class="view_btn"> Practice Hockey Match </span>
						</a>
						<a href="newsletter/news/images/2-9216857468.jpg" title="Practice Hockey Match - Aitchison College vs Aitchison U/17">
						<img class="gallery_img" src="newsletter/news/images/2-9073424230.jpg" alt="img" />
						<span class="view_btn"> Practice Hockey Match </span>
						</a>
						<a href="newsletter/news/images/3-8877035841.jpg" title="Practice Hockey Match - Aitchison College vs Aitchison U/17">
						<img class="gallery_img" src="newsletter/news/images/3-6047867876.jpg" alt="img" />
						<span class="view_btn"> Practice Hockey Match </span>
						</a>
						<a href="newsletter/news/images/4-5793513701.jpg" title="Practice Hockey Match - Aitchison College vs Aitchison U/17">
						<img class="gallery_img" src="newsletter/news/images/4-953549867.jpg" alt="img" />
						<span class="view_btn"> Practice Hockey Match </span>
						 </a>
						<a href="newsletter/news/images/5-2350492982.jpg" title="Practice Hockey Match - Aitchison College vs Aitchison U/17">
						<img class="gallery_img" src="newsletter/news/images/5-1758639589.jpg" alt="img" />
						<span class="view_btn"> Practice Hockey Match </span>
						</a>
						<a href="newsletter/news/images/6-9198534853.jpg" title="Practice Hockey Match - Aitchison College vs Aitchison U/17">
						<img class="gallery_img" src="newsletter/news/images/6-6132414629.jpg" alt="img" />
						<span class="view_btn"> Practice Hockey Match </span>
						</a>
						<a href="newsletter/news/images/7-2354013652.jpg" title="Practice Hockey Match - Aitchison College vs Aitchison U/17">
						<img class="gallery_img" src="newsletter/news/images/7-5443525828.jpg" alt="img" />
						<span class="view_btn"> Practice Hockey Match </span>
						</a>
						<a href="newsletter/news/images/8-2987952365.jpg" title="Practice Hockey Match - Aitchison College vs Aitchison U/17">
						<img class="gallery_img" src="newsletter/news/images/8-6187860773.jpg" alt="img" />
						<span class="view_btn"> Practice Hockey Match </span>
						</a>
						<a href="newsletter/news/images/9-9300777805.jpg" title="Practice Hockey Match - Aitchison College vs Aitchison U/17">
						<img class="gallery_img" src="newsletter/news/images/9-7633332598.jpg" alt="img" />
						<span class="view_btn"> Practice Hockey Match </span>
						</a>
						<a href="newsletter/news/images/10-1992750854.jpg" title="Practice Hockey Match - Aitchison College vs Aitchison U/17">
						<img class="gallery_img" src="newsletter/news/images/10-8870578858.jpg" alt="img" />
						<span class="view_btn"> Practice Hockey Match </span>
						</a>
                    </div>
                </div>
				<div class="tab-pane fade<?php echo ($selectedtab =="acwaterpolo")?"  show active":"";?>" id="acwaterpolo" role="tabpanel" aria-labelledby="acwaterpolo-tab">
					<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter House Water Polo Competition</p>
                    <div id="gallerySLide" class="sgallery_area4">
                        <a href="newsletter/news/images/1-4518595156.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/1-7113470390.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
						<a href="newsletter/news/images/2-1902400255.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/2-5086312253.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
						<a href="newsletter/news/images/3-7706175008.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/3-4423778227.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
						<a href="newsletter/news/images/4-2580901705.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/4-3498301032.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
						<a href="newsletter/news/images/5-1543118632.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/5-8149386149.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
						<a href="newsletter/news/images/6-4050170540.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/6-3539480869.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
						<a href="newsletter/news/images/7-1918191856.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/7-1781999086.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
						<a href="newsletter/news/images/8-8029817170.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/8-3692167150.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
						<a href="newsletter/news/images/9-2750433084.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/9-8748480731.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
						<a href="newsletter/news/images/10-6605204793.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/10-695000055.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
						<a href="newsletter/news/images/11-6909708106.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/11-4136832354.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
						<a href="newsletter/news/images/12-1474990649.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/12-7396848791.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
						<a href="newsletter/news/images/13-6368222130.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/13-5384917084.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
						 <a href="newsletter/news/images/14-7245525072.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/14-5669801133.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
						<a href="newsletter/news/images/15-2093912259.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/15-327075027.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
						<a href="newsletter/news/images/16-6651410790.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/16-4851442562.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
						<a href="newsletter/news/images/17-8497836448.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/17-1080385007.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
						<a href="newsletter/news/images/18-2548613757.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/18-9713635436.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
						<a href="newsletter/news/images/19-212159818.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/19-5841193749.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
						<a href="newsletter/news/images/20-4415263677.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/20-5955258318.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
						<a href="newsletter/news/images/21-9752369034.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/21-4136294351.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
						<a href="newsletter/news/images/22-1433364861.jpg" title="Inter House Water Polo Competition">
						<img class="gallery_img" src="newsletter/news/images/22-593570511.jpg" alt="img" />
						<span class="view_btn"> Inter House Water Polo </span>
						</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Left Area -->


    </div>
    <!-- End Contents -->

</div>

<div class="divider"></div>

<!-- Footer -->

<?php include_once($path."footer.php");?>

<!-- End Footer -->


<!-- End Footer Includes -->
<?php include_once($path."footer-includes.php");?>

<!-- End Footer Includes -->
<script>

    $(document).ready(function() {
        $('#loading').hide();
    });


</script>

</body>



</html>

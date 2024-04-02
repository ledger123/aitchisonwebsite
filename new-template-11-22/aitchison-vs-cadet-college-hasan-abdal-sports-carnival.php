<?php
	$page_name=basename($_SERVER['REQUEST_URI']);
	if($page_name == "activityglimpse.php"){
		header("location: activity-glimpse");
		exit();
	}


?>
<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Aitchison College v Cadet College Hasan Abdal Sports Carnival"; include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/gallery.jpg';
$page_header = $title;
?>
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>resources/css/gallery-style.css?v=1">
<style>
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: white;	
	margin: 5px 1px 0px 4px;
    background-color: #00205b/*#00205b*/;
	/*border-color: #00205b*/
	border-color: transparent;
	border-top-left-radius: 0rem;
    border-top-right-radius: 0rem;
	}
	.nav-tabs .nav-link {
	color: #00205b;
	margin: 5px 1px 0px 4px;	
    /*background-color: #00205b/*#00205b*/;	
	border-color: #00205b;
	border-top-left-radius: 0rem;
    border-top-right-radius: 0rem;	
	}
	.nav-link:hover {
		color: white;
		background-color: #00205b
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
.gtitle0{
		font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;
	}
	.gtitle1{
		font-size: 1.2rem;
	}
@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
</style>
<body>

<?php include_once ($path.'logo-page-banner.php'); ?>
<?php include_once("mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">

        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="./news-room">News and Events</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Aitchison College v Cadet College Hasan Abdal Sports Carnival</li>
                </ol>
            </nav>

        </div>
    </div>
</div>


<div class="container">
	<div id="loading">
		<div id="loading-image">
		</div>
	</div>
    <div class="row">
        <?php include_once ('right-panel-links.php'); ?>
    </div>

</div>

<div class="container-fluid">

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="col-12 page-title">
			<?php /*?><p style="font-size:1.5rem;color:#800000;">The first week of September at a Glance</p><?php */?>
        </div>

    </div>
</div>

<div class="container">

    <!-- Contents -->
    <div class="row page-contents">
		<?php
		$selectedtab="tab1";
		?>
        <!-- Left Area -->
        <div class="col-lg-12 col-md-12 col-sm-12">
            <ul class="nav nav-tabs mb-3" id="sportsTab" role="tablist">
				<li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="tab1")?" active":"";?>" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="<?php echo ($selectedtab =="tab1")?"true":"false";?>">Athletic - Day 1</button>
                </li>
				<li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="tab5")?" active":"";?>" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="tab5" aria-selected="<?php echo ($selectedtab =="tab5")?"true":"false";?>">Athletic - Day 2</button>
                </li>
				<li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="tab2")?" active":"";?>" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="<?php echo ($selectedtab =="tab2")?"true":"false";?>">Basketball</button>
                </li>
				<li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="tab3")?" active":"";?>" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="<?php echo ($selectedtab =="tab3")?"true":"false";?>">Cricket</button>
                </li>
				<li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="tab4")?" active":"";?>" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="<?php echo ($selectedtab =="tab4")?"true":"false";?>">Hockey</button>
                </li>
				<li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="tab6")?" active":"";?>" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab" aria-controls="tab6" aria-selected="<?php echo ($selectedtab =="tab6")?"true":"false";?>">Football</button>
                </li>
				 
            </ul>
            <div class="tab-content" id="sportsTabContent">
				<div class="tab-pane fade<?php echo ($selectedtab =="tab1")?"  show active":"";?>" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
					<p class="gtitle0">Athletics Fixture - Day-1 Senior School

						<br><span  class="gtitle1">800M, Discus Throw, Long Jump &amp; 200M</span>
					</p>
					<div id="gallerySLide1" class="sgallery_area4">
						<a href="newsletter/news/images/1-5848633254.jpg" title="Athletics Fixture - Day-1  Senior School">
<img class="gallery_img" src="newsletter/news/images/1-4906873550.jpg" alt="img" />
<span class="view_btn"> Athletics Fixture </span>
</a>
<a href="newsletter/news/images/2-4573391410.jpg" title="Athletics Fixture - Day-1  Senior School">
<img class="gallery_img" src="newsletter/news/images/2-5487422517.jpg" alt="img" />
<span class="view_btn"> Athletics Fixture </span>
</a>
<a href="newsletter/news/images/3-6213948710.jpg" title="Athletics Fixture - Day-1  Senior School">
<img class="gallery_img" src="newsletter/news/images/3-9986779105.jpg" alt="img" />
<span class="view_btn"> Athletics Fixture </span>
</a>
<a href="newsletter/news/images/4-5417318702.jpg" title="Athletics Fixture - Day-1  Senior School">
<img class="gallery_img" src="newsletter/news/images/4-8289320708.jpg" alt="img" />
<span class="view_btn"> Athletics Fixture </span>
</a>
 <a href="newsletter/news/images/5-8451679687.jpg" title="Athletics Fixture - Day-1  Senior School">
<img class="gallery_img" src="newsletter/news/images/5-8324234993.jpg" alt="img" />
<span class="view_btn"> Athletics Fixture </span>
</a>
<a href="newsletter/news/images/6-467550179.jpg" title="Athletics Fixture - Day-1  Senior School">
<img class="gallery_img" src="newsletter/news/images/6-4408513774.jpg" alt="img" />
<span class="view_btn"> Athletics Fixture </span>
</a>
<a href="newsletter/news/images/7-3597015074.jpg" title="Athletics Fixture - Day-1  Senior School">
<img class="gallery_img" src="newsletter/news/images/7-4791261037.jpg" alt="img" />
<span class="view_btn"> Athletics Fixture </span>
</a>
<a href="newsletter/news/images/8-8957016346.jpg" title="Athletics Fixture - Day-1  Senior School">
<img class="gallery_img" src="newsletter/news/images/8-6036432598.jpg" alt="img" />
<span class="view_btn"> Athletics Fixture </span>
</a>
<a href="newsletter/news/images/9-9971390088.jpg" title="Athletics Fixture - Day-1  Senior School">
<img class="gallery_img" src="newsletter/news/images/9-4632372785.jpg" alt="img" />
<span class="view_btn"> Athletics Fixture </span>
</a>
<a href="newsletter/news/images/10-6423095041.jpg" title="Athletics Fixture - Day-1  Senior School">
<img class="gallery_img" src="newsletter/news/images/10-5631497035.jpg" alt="img" />
<span class="view_btn"> Athletics Fixture </span>
</a>
<a href="newsletter/news/images/11-1238421708.jpg" title="Athletics Fixture - Day-1  Senior School">
<img class="gallery_img" src="newsletter/news/images/11-5466091795.jpg" alt="img" />
<span class="view_btn"> Athletics Fixture </span>
</a>
					</div>
				</div>
				<div class="tab-pane fade<?php echo ($selectedtab =="tab5")?"  show active":"";?>" id="tab5" role="tabpanel" aria-labelledby="tab1-tab">
					<p class="gtitle0">Aitchison Wins Athletics Meet Against Cadet College Hasan Abdal</p>
					<div id="gallerySLide5" class="sgallery_area4">
					<a href="newsletter/news/images/1-8272852148.jpg" title="Aitchison Wins Athletics Meet Against Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/1-6357968385.jpg" alt="img" />
<span class="view_btn"> Aitchison Wins Athletics </span>
</a>
<a href="newsletter/news/images/2-9745631796.jpg" title="Aitchison Wins Athletics Meet Against Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/2-9713846656.jpg" alt="img" />
<span class="view_btn"> Aitchison Wins Athletics </span>
</a>
<a href="newsletter/news/images/03-4871737321.jpg" title="Aitchison Wins Athletics Meet Against Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/03-1757642765.jpg" alt="img" />
<span class="view_btn"> Aitchison Wins Athletics </span>
</a>
<a href="newsletter/news/images/3-604626193.jpg" title="Aitchison Wins Athletics Meet Against Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/3-8212580308.jpg" alt="img" />
<span class="view_btn"> Aitchison Wins Athletics </span>
</a>
<a href="newsletter/news/images/04-486463717.jpg" title="Aitchison Wins Athletics Meet Against Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/04-1138408705.jpg" alt="img" />
<span class="view_btn"> Aitchison Wins Athletics </span>
</a>
<a href="newsletter/news/images/4-2197199596.jpg" title="Aitchison Wins Athletics Meet Against Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/4-3769229122.jpg" alt="img" />
<span class="view_btn"> Aitchison Wins Athletics </span>
</a>
<a href="newsletter/news/images/5-5071328036.jpg" title="Aitchison Wins Athletics Meet Against Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/5-1028038104.jpg" alt="img" />
<span class="view_btn"> Aitchison Wins Athletics </span>
</a>
<a href="newsletter/news/images/6-7213880474.jpg" title="Aitchison Wins Athletics Meet Against Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/6-2428551331.jpg" alt="img" />
<span class="view_btn"> Aitchison Wins Athletics </span>
</a>
<a href="newsletter/news/images/7-8287171108.jpg" title="Aitchison Wins Athletics Meet Against Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/7-9890558033.jpg" alt="img" />
<span class="view_btn"> Aitchison Wins Athletics </span>
</a>
<a href="newsletter/news/images/8-4079239200.jpg" title="Aitchison Wins Athletics Meet Against Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/8-2010532496.jpg" alt="img" />
<span class="view_btn"> Aitchison Wins Athletics </span>
</a>
<a href="newsletter/news/images/9-4041373309.jpg" title="Aitchison Wins Athletics Meet Against Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/9-895748123.jpg" alt="img" />
<span class="view_btn"> Aitchison Wins Athletics </span>
</a>
<a href="newsletter/news/images/10-8737303318.jpg" title="Aitchison Wins Athletics Meet Against Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/10-3454933469.jpg" alt="img" />
<span class="view_btn"> Aitchison Wins Athletics </span>
</a>
<a href="newsletter/news/images/11-914456183.jpg" title="Aitchison Wins Athletics Meet Against Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/11-730621053.jpg" alt="img" />
<span class="view_btn"> Aitchison Wins Athletics </span>
</a>
<a href="newsletter/news/images/13-5037078694.jpg" title="Aitchison Wins Athletics Meet Against Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/13-4306028321.jpg" alt="img" />
<span class="view_btn"> Aitchison Wins Athletics </span>
</a>	
				</div>
				</div>
				<div class="tab-pane fade<?php echo ($selectedtab =="tab2")?"  show active":"";?>" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
					<p class="gtitle0">Big Crowd Sees Aitchison Senior Basketballers Too Strong for Cadet College Hasan Abdal</p>
					<div id="gallerySLide2" class="sgallery_area4">
					<a href="newsletter/news/images/1-9149063469.jpg" title="Big Crowd Sees Aitchison Senior Basketballers Too Strong for Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/1-3204450726.jpg" alt="img" />
<span class="view_btn"> Aitchison Senior Basketballers </span>
</a>
<a href="newsletter/news/images/2-3847083686.jpg" title="Big Crowd Sees Aitchison Senior Basketballers Too Strong for Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/2-4596539253.jpg" alt="img" />
<span class="view_btn"> Aitchison Senior Basketballers </span>
</a>
<a href="newsletter/news/images/3-6411828434.jpg" title="Big Crowd Sees Aitchison Senior Basketballers Too Strong for Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/3-7037722015.jpg" alt="img" />
<span class="view_btn"> Aitchison Senior Basketballers </span>
</a>
<a href="newsletter/news/images/4-4867396910.jpg" title="Big Crowd Sees Aitchison Senior Basketballers Too Strong for Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/4-1119470040.jpg" alt="img" />
<span class="view_btn"> Aitchison Senior Basketballers </span>
</a>
<a href="newsletter/news/images/5-3644800128.jpg" title="Big Crowd Sees Aitchison Senior Basketballers Too Strong for Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/5-4291942715.jpg" alt="img" />
<span class="view_btn"> Aitchison Senior Basketballers </span>
</a>
<a href="newsletter/news/images/6-4766036293.jpg" title="Big Crowd Sees Aitchison Senior Basketballers Too Strong for Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/6-7555964628.jpg" alt="img" />
<span class="view_btn"> Aitchison Senior Basketballers </span>
</a>
<a href="newsletter/news/images/7-7002929149.jpg" title="Big Crowd Sees Aitchison Senior Basketballers Too Strong for Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/7-8893670280.jpg" alt="img" />
<span class="view_btn"> Aitchison Senior Basketballers </span>
</a>
<a href="newsletter/news/images/8-4891144674.jpg" title="Big Crowd Sees Aitchison Senior Basketballers Too Strong for Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/8-283588522.jpg" alt="img" />
<span class="view_btn"> Aitchison Senior Basketballers </span>
</a>
<a href="newsletter/news/images/9-7796758350.jpg" title="Big Crowd Sees Aitchison Senior Basketballers Too Strong for Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/9-71282246.jpg" alt="img" />
<span class="view_btn"> Aitchison Senior Basketballers </span>
</a>
<a href="newsletter/news/images/10-5752576198.jpg" title="Big Crowd Sees Aitchison Senior Basketballers Too Strong for Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/10-7848899954.jpg" alt="img" />
<span class="view_btn"> Aitchison Senior Basketballers </span>
</a>
<a href="newsletter/news/images/11-2965503369.jpg" title="Big Crowd Sees Aitchison Senior Basketballers Too Strong for Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/11-5426578092.jpg" alt="img" />
<span class="view_btn"> Aitchison Senior Basketballers </span>
</a>
<a href="newsletter/news/images/12-2060576933.jpg" title="Big Crowd Sees Aitchison Senior Basketballers Too Strong for Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/12-5078839680.jpg" alt="img" />
<span class="view_btn"> Aitchison Senior Basketballers </span>
</a>
<a href="newsletter/news/images/14-1893637625.jpg" title="Big Crowd Sees Aitchison Senior Basketballers Too Strong for Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/14-6021067384.jpg" alt="img" />
<span class="view_btn"> Aitchison Senior Basketballers </span>
</a>
<a href="newsletter/news/images/15-1287672550.jpg" title="Big Crowd Sees Aitchison Senior Basketballers Too Strong for Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/15-1123619993.jpg" alt="img" />
<span class="view_btn"> Aitchison Senior Basketballers </span>
</a>
<a href="newsletter/news/images/16-4569346984.jpg" title="Big Crowd Sees Aitchison Senior Basketballers Too Strong for Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/16-2425141527.jpg" alt="img" />
<span class="view_btn"> Aitchison Senior Basketballers </span>
</a>
<a href="newsletter/news/images/17-4728782433.jpg" title="Big Crowd Sees Aitchison Senior Basketballers Too Strong for Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/17-414985047.jpg" alt="img" />
<span class="view_btn"> Aitchison Senior Basketballers </span>
</a>
<a href="newsletter/news/images/18-7548351547.jpg" title="Big Crowd Sees Aitchison Senior Basketballers Too Strong for Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/18-3670246546.jpg" alt="img" />
<span class="view_btn"> Aitchison Senior Basketballers </span>
</a>
<a href="newsletter/news/images/19-3365967644.jpg" title="Big Crowd Sees Aitchison Senior Basketballers Too Strong for Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/19-9137925252.jpg" alt="img" />
<span class="view_btn"> Aitchison Senior Basketballers </span>
</a>
<a href="newsletter/news/images/20-7194445640.jpg" title="Big Crowd Sees Aitchison Senior Basketballers Too Strong for Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/20-7168582257.jpg" alt="img" />
<span class="view_btn"> Aitchison Senior Basketballers </span>
</a>
				</div>
				</div>
				<div class="tab-pane fade<?php echo ($selectedtab =="tab3")?"  show active":"";?>" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
					<p class="gtitle0">I<sup>st</sup> Cricket XI Cruises to Victory over Cadet College Hasan Abdal
					</p>
					<div id="gallerySLide3" class="sgallery_area4">
						<a href="newsletter/news/images/01-3301514806.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/01-6414121243.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/02-908925787.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/02-9853100037.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/03-8264872688.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
 <img class="gallery_img" src="newsletter/news/images/03-5363495127.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/04-7063571808.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/04-5274045209.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/05-5445887814.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/05-5311750044.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/06-9265790245.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/06-3466465511.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/07-749777855.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/07-69411718.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/08-3872277443.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/08-6310770840.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/09-2867592163.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/09-3473341676.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/10-3636045307.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/10-5098984563.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/11-3950469252.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/11-7481313636.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/12-6960573644.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/12-8103993620.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/13-5739172976.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/13-2659698912.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/14-6973636760.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/14-286001453.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/15-1230482775.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/15-3786527946.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/16-5728383545.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/16-8014350768.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/17-230414098.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/17-6149880586.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/18-6228959691.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/18-1653845337.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/19-3476178194.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/19-7091490034.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/21-1675451392.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/21-505953690.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/25-5208295890.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/25-4196284488.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/26-3226035110.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/26-1641413200.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/27-966419053.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/27-5535362653.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/28-2263159495.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/28-6048352918.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/29-4134890542.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/29-106521470.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/30-8828319784.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/30-8600749550.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/31-5389093280.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/31-3418271808.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/32-5545961622.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/32-8477592235.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/33-2953135231.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/33-1290298944.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/34-1087087147.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/34-6971812141.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/35-6631668720.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/35-2433385766.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/36-6647019981.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/36-2135180862.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/37-2814089585.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/37-9262993980.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/38-2508552161.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/38-3936095303.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
<a href="newsletter/news/images/39-5114611353.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/39-1542882127.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>

<a href="newsletter/news/images/41-9828314569.jpg" title="Ist Cricket XI Cruises to Victory over Cadet College Hasan Abdal">
<img class="gallery_img" src="newsletter/news/images/41-9846226296.jpg" alt="img" />
<span class="view_btn"> Ist Cricket XI Cruises </span>
</a>
					</div>
				</div>
				<div class="tab-pane fade<?php echo ($selectedtab =="tab4")?"  show active":"";?>" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
					<p class="gtitle0">Aitchison Ist Hockey Triumphs 3-1
						<br><span  class="gtitle1">Aitchison College vs Cadet College Hasan Abdal

</span>
					</p>
					<div id="gallerySLide4" class="sgallery_area4">
						<a href="newsletter/news/images/14-6921173715.jpg" title="Aitchison Ist Hockey Triumphs 3-1">
<img class="gallery_img" src="newsletter/news/images/14-2006393805.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Hockey Triumphs 3-1 </span>
</a>
<a href="newsletter/news/images/13-2366832321.jpg" title="Aitchison Ist Hockey Triumphs 3-1">
<img class="gallery_img" src="newsletter/news/images/13-3225811647.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Hockey Triumphs 3-1 </span>
</a>
<a href="newsletter/news/images/3-5239948935.jpg" title="Aitchison Ist Hockey Triumphs 3-1">
<img class="gallery_img" src="newsletter/news/images/3-6331361225.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Hockey Triumphs 3-1 </span>
</a>
<a href="newsletter/news/images/4-2307478853.jpg" title="Aitchison Ist Hockey Triumphs 3-1">
<img class="gallery_img" src="newsletter/news/images/4-378777286.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Hockey Triumphs 3-1 </span>
</a>
<a href="newsletter/news/images/5-2196069846.jpg" title="Aitchison Ist Hockey Triumphs 3-1">
<img class="gallery_img" src="newsletter/news/images/5-8520431302.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Hockey Triumphs 3-1 </span>
</a>
<a href="newsletter/news/images/6-4867177673.jpg" title="Aitchison Ist Hockey Triumphs 3-1">
<img class="gallery_img" src="newsletter/news/images/6-187280432.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Hockey Triumphs 3-1 </span>
</a>
<a href="newsletter/news/images/7-1853250716.jpg" title="Aitchison Ist Hockey Triumphs 3-1">
<img class="gallery_img" src="newsletter/news/images/7-8323551762.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Hockey Triumphs 3-1 </span>
</a>
<a href="newsletter/news/images/8-8714152532.jpg" title="Aitchison Ist Hockey Triumphs 3-1">
<img class="gallery_img" src="newsletter/news/images/8-8872509715.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Hockey Triumphs 3-1 </span>
</a>
<a href="newsletter/news/images/9-2990171582.jpg" title="Aitchison Ist Hockey Triumphs 3-1">
<img class="gallery_img" src="newsletter/news/images/9-4213115894.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Hockey Triumphs 3-1 </span>
</a>
<a href="newsletter/news/images/10-7755804186.jpg" title="Aitchison Ist Hockey Triumphs 3-1">
<img class="gallery_img" src="newsletter/news/images/10-2203976850.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Hockey Triumphs 3-1 </span>
</a>
<a href="newsletter/news/images/11-3495615300.jpg" title="Aitchison Ist Hockey Triumphs 3-1">
<img class="gallery_img" src="newsletter/news/images/11-9925892602.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Hockey Triumphs 3-1 </span>
</a>
<a href="newsletter/news/images/2-1246466010.jpg" title="Aitchison Ist Hockey Triumphs 3-1">
<img class="gallery_img" src="newsletter/news/images/2-4536003161.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Hockey Triumphs 3-1 </span>
</a>
<a href="newsletter/news/images/1-9412724522.jpg" title="Aitchison Ist Hockey Triumphs 3-1">
<img class="gallery_img" src="newsletter/news/images/1-6678371355.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Hockey Triumphs 3-1 </span>
</a>
<a href="newsletter/news/images/12-2052655471.jpg" title="Aitchison Ist Hockey Triumphs 3-1">
<img class="gallery_img" src="newsletter/news/images/12-3231035473.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Hockey Triumphs 3-1 </span>
</a>
<a href="newsletter/news/images/15-1428523190.jpg" title="Aitchison Ist Hockey Triumphs 3-1">
<img class="gallery_img" src="newsletter/news/images/15-7425476228.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Hockey Triumphs 3-1 </span>
</a>
<a href="newsletter/news/images/16-4415965782.jpg" title="Aitchison Ist Hockey Triumphs 3-1">
<img class="gallery_img" src="newsletter/news/images/16-3807873158.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Hockey Triumphs 3-1 </span>
</a>
</div>
</div>
				<div class="tab-pane fade<?php echo ($selectedtab =="tab6")?"  show active":"";?>" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
					<p class="gtitle0">Aitchison I<sup>st</sup> Football Team Win 3-1</p>
					<div id="gallerySLide6" class="sgallery_area4">
						<a href="newsletter/news/images/01-1656122522.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/01-9672929507.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/1-589676244.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/1-2776581323.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/2-1710080783.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/2-3295997589.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/3-6922889975.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/3-3751619702.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/4-8065484300.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/4-641922865.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/5-302676611.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/5-9634933539.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/6-8002881237.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/6-4956257058.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/7-3141351769.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/7-7849991782.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/8-9544299815.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/8-2474713292.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/9-1393558425.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/9-7562176339.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/10-8518743537.jpg" title="Aitchison Ist Football Team Win 3-1">
 <img class="gallery_img" src="newsletter/news/images/10-9479445463.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/11-545450458.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/11-4736758037.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/12-9721949275.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/12-5433944698.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/13-7711276321.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/13-8506844773.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/14-5335504308.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/14-2424005544.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/015-1780395913.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/015-2616199639.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/15-4863374347.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/15-4233501717.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/016-5498525710.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/016-9795537650.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/16-2806085535.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/16-4787734258.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
 <a href="newsletter/news/images/17-5023027280.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/17-1087908530.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/018-5026433550.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/018-4078619009.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/18-6261875248.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/18-6421589901.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/19-9276088353.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/19-4985140491.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/20-7009467217.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/20-1672430758.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/21-8242106950.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/21-4377648886.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/22-2806146556.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/22-4414880504.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/23-2323639449.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/23-6679568302.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/24-965031540.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/24-5518791476.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/25-9247887834.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/25-4633896282.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/26-8014687260.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/26-3141486809.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/27-3104674404.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/27-9428418295.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/28-4872276964.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/28-755044559.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
</a>
<a href="newsletter/news/images/33-759948704.jpg" title="Aitchison Ist Football Team Win 3-1">
<img class="gallery_img" src="newsletter/news/images/33-284196857.jpg" alt="img" />
<span class="view_btn"> Aitchison Ist Football Team Win 3-1 </span>
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

<?php
	$page_name=basename($_SERVER['REQUEST_URI']);
	if($page_name == "activityglimpse-sept-2-2022.php"){
		header("location: sports-cocurricular-activities-second-week-sept-2022");
		exit();
	}
?>
<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

$title = "Sports & Co-Curricular Activities"; include_once($path."header-includes.php");

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
                    <li class="breadcrumb-item active" aria-current="page">News</li>
                </ol>
            </nav>

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
			<p style="font-size:1.5rem;color:#800000;">The second week of September at a Glance</p>
        </div>

    </div>
</div>

<div class="container">
    <div id="loading">
        <div id="loading-image">

        </div>
    </div>
    <!-- Contents -->
    <div class="row page-contents">
		<?php
		$selectedtab="tab4";
		?>
        <!-- Left Area -->
        <div class="col-lg-12 col-md-12 col-sm-12">
            <ul class="nav nav-tabs mb-3" id="sportsTab" role="tablist">
				<li class="nav-item" role="presentation">
					<button class="nav-link<?php echo ($selectedtab =="tab4")?" active":"";?>" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="false">Swimming</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link<?php echo ($selectedtab =="tab2")?" active":"";?>" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="false">Water Polo</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link<?php echo ($selectedtab =="tab3")?" active":"";?>" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="false">Basketball</button>
				</li>				
				<li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="tab1")?" active":"";?>" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="false">Qiraat Competition</button>
                </li>
            </ul>
            <div class="tab-content" id="sportsTabContent">
				<div class="tab-pane fade<?php echo ($selectedtab =="tab1")?"  show active":"";?>" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
					<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter-House Qiraat Competition</p>
                    <div id="gallerySLide" class="sgallery_area4">
                        <a href="newsletter/news/images/1-381788279.jpg" title="Inter-House Qiraat Competition ">
						<img class="gallery_img" src="newsletter/news/images/1-127844033.jpg" alt="img" />
						<span class="view_btn"> Qiraat Competition </span>
						 </a>
						<a href="newsletter/news/images/2-2179951608.jpg" title="Inter-House Qiraat Competition ">
						<img class="gallery_img" src="newsletter/news/images/2-9509759239.jpg" alt="img" />
						<span class="view_btn"> Qiraat Competition </span>
						</a>
						<a href="newsletter/news/images/3-8217592353.jpg" title="Inter-House Qiraat Competition ">
						<img class="gallery_img" src="newsletter/news/images/3-3769413265.jpg" alt="img" />
						<span class="view_btn"> Qiraat Competition </span>
						</a>
						<a href="newsletter/news/images/4-6555292956.jpg" title="Inter-House Qiraat Competition ">
						<img class="gallery_img" src="newsletter/news/images/4-3620853881.jpg" alt="img" />
						<span class="view_btn"> Qiraat Competition </span>
						</a>
						<a href="newsletter/news/images/5-8175242453.jpg" title="Inter-House Qiraat Competition ">
						<img class="gallery_img" src="newsletter/news/images/5-2962820913.jpg" alt="img" />
						<span class="view_btn"> Qiraat Competition </span>
						</a>
						<a href="newsletter/news/images/6-362358363.jpg" title="Inter-House Qiraat Competition ">
						<img class="gallery_img" src="newsletter/news/images/6-8827856973.jpg" alt="img" />
						<span class="view_btn"> Qiraat Competition </span>
						</a>
						<a href="newsletter/news/images/7-9184386271.jpg" title="Inter-House Qiraat Competition ">
						<img class="gallery_img" src="newsletter/news/images/7-516683630.jpg" alt="img" />
						<span class="view_btn"> Qiraat Competition </span>
						</a>
						<a href="newsletter/news/images/9-5126909297.jpg" title="Inter-House Qiraat Competition ">
						<img class="gallery_img" src="newsletter/news/images/9-4002483093.jpg" alt="img" />
						<span class="view_btn"> Qiraat Competition </span>
						</a>
						<a href="newsletter/news/images/12-8179412816.jpg" title="Inter-House Qiraat Competition ">
						<img class="gallery_img" src="newsletter/news/images/12-4331877734.jpg" alt="img" />
						<span class="view_btn"> Qiraat Competition </span>
						</a>
						<a href="newsletter/news/images/13-6622623856.jpg" title="Inter-House Qiraat Competition ">
						<img class="gallery_img" src="newsletter/news/images/13-5066117490.jpg" alt="img" />
						<span class="view_btn"> Qiraat Competition </span>
						</a>

						<a href="newsletter/news/images/15-5079092053.jpg" title="Inter-House Qiraat Competition ">
						<img class="gallery_img" src="newsletter/news/images/15-5638984085.jpg" alt="img" />
						<span class="view_btn"> Qiraat Competition </span>
						</a>
						<a href="newsletter/news/images/16-3122826299.jpg" title="Inter-House Qiraat Competition ">
						<img class="gallery_img" src="newsletter/news/images/16-3545739504.jpg" alt="img" />
						<span class="view_btn"> Qiraat Competition </span>
						</a>
						<a href="newsletter/news/images/20-4082861183.jpg" title="Inter-House Qiraat Competition ">
						<img class="gallery_img" src="newsletter/news/images/20-6935484321.jpg" alt="img" />
						<span class="view_btn"> Qiraat Competition </span>
						</a>
						<a href="newsletter/news/images/21-5859174055.jpg" title="Inter-House Qiraat Competition ">
						<img class="gallery_img" src="newsletter/news/images/21-2334447530.jpg" alt="img" />
						<span class="view_btn"> Qiraat Competition </span>
						</a>
						<a href="newsletter/news/images/22-7705972165.jpg" title="Inter-House Qiraat Competition ">
						<img class="gallery_img" src="newsletter/news/images/22-8501618449.jpg" alt="img" />
						<span class="view_btn"> Qiraat Competition </span>
						</a>
						<a href="newsletter/news/images/23-6733470107.jpg" title="Inter-House Qiraat Competition ">
						<img class="gallery_img" src="newsletter/news/images/23-4270699262.jpg" alt="img" />
						<span class="view_btn"> Qiraat Competition </span>
						</a>
						<a href="newsletter/news/images/24-9052473388.jpg" title="Inter-House Qiraat Competition ">
						<img class="gallery_img" src="newsletter/news/images/24-156680940.jpg" alt="img" />
						<span class="view_btn"> Qiraat Competition </span>
						</a>
						<a href="newsletter/news/images/25-4821358418.jpg" title="Inter-House Qiraat Competition ">
						<img class="gallery_img" src="newsletter/news/images/25-2243094052.jpg" alt="img" />
						<span class="view_btn"> Qiraat Competition </span>
						</a>
						<a href="newsletter/news/images/26-1424446200.jpg" title="Inter-House Qiraat Competition ">
						<img class="gallery_img" src="newsletter/news/images/26-204761397.jpg" alt="img" />
						<span class="view_btn"> Qiraat Competition </span>
						</a>
						 <a href="newsletter/news/images/28-3058237861.jpg" title="Inter-House Qiraat Competition ">
						<img class="gallery_img" src="newsletter/news/images/28-918070486.jpg" alt="img" />
						<span class="view_btn"> Qiraat Competition </span>
						</a>
						<a href="newsletter/news/images/29-8987702059.jpg" title="Inter-House Qiraat Competition ">
						<img class="gallery_img" src="newsletter/news/images/29-574172980.jpg" alt="img" />
						<span class="view_btn"> Qiraat Competition </span>
						</a>
                    </div>
                </div>
                <div class="tab-pane fade<?php echo ($selectedtab =="tab2")?"  show active":"";?>" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
					<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter-House Water Polo Competition -Senior School</p>
                    <div id="gallerySLide" class="sgallery_area4">
                        <a href="newsletter/news/images/1-4783200410.jpg" title="Inter-House Water Polo Competition -Senior School">
						<img class="gallery_img" src="newsletter/news/images/1-1996417285.jpg" alt="img" />
						<span class="view_btn"> Water Polo Competition </span>
						</a>

						<a href="newsletter/news/images/2-9778907306.jpg" title="Inter-House Water Polo Competition -Senior School">
						<img class="gallery_img" src="newsletter/news/images/2-8153594143.jpg" alt="img" />
						<span class="view_btn"> Water Polo Competition </span>
						</a>
						<a href="newsletter/news/images/3-8953667557.jpg" title="Inter-House Water Polo Competition -Senior School">
						<img class="gallery_img" src="newsletter/news/images/3-5831830515.jpg" alt="img" />
						<span class="view_btn"> Water Polo Competition </span>
						</a>
						<a href="newsletter/news/images/4-990720028.jpg" title="Inter-House Water Polo Competition -Senior School">
						<img class="gallery_img" src="newsletter/news/images/4-9800078401.jpg" alt="img" />
						<span class="view_btn"> Water Polo Competition </span>
						</a>
						<a href="newsletter/news/images/5-7288262670.jpg" title="Inter-House Water Polo Competition -Senior School">
						<img class="gallery_img" src="newsletter/news/images/5-7771665428.jpg" alt="img" />
						<span class="view_btn"> Water Polo Competition </span>
						</a>
						<a href="newsletter/news/images/6-5704330377.jpg" title="Inter-House Water Polo Competition -Senior School">
						<img class="gallery_img" src="newsletter/news/images/6-5772868221.jpg" alt="img" />
						<span class="view_btn"> Water Polo Competition </span>
						</a>
						<a href="newsletter/news/images/7-4875650245.jpg" title="Inter-House Water Polo Competition -Senior School">
						<img class="gallery_img" src="newsletter/news/images/7-4803221373.jpg" alt="img" />
						<span class="view_btn"> Water Polo Competition </span>
						</a>
						<a href="newsletter/news/images/8-469101458.jpg" title="Inter-House Water Polo Competition -Senior School">
						<img class="gallery_img" src="newsletter/news/images/8-1373479683.jpg" alt="img" />
						<span class="view_btn"> Water Polo Competition </span>
						</a>
						<a href="newsletter/news/images/9-4499786142.jpg" title="Inter-House Water Polo Competition -Senior School">
						<img class="gallery_img" src="newsletter/news/images/9-1213642275.jpg" alt="img" />
						<span class="view_btn"> Water Polo Competition </span>
						</a>
						<a href="newsletter/news/images/10-6911180114.jpg" title="Inter-House Water Polo Competition -Senior School">
						<img class="gallery_img" src="newsletter/news/images/10-2256565209.jpg" alt="img" />
						<span class="view_btn"> Water Polo Competition </span>
						</a>
						<a href="newsletter/news/images/11-3288555385.jpg" title="Inter-House Water Polo Competition -Senior School">
						<img class="gallery_img" src="newsletter/news/images/11-3961067792.jpg" alt="img" />
						<span class="view_btn"> Water Polo Competition </span>
						</a>
						<a href="newsletter/news/images/12-9546506630.jpg" title="Inter-House Water Polo Competition -Senior School">
						<img class="gallery_img" src="newsletter/news/images/12-5193685764.jpg" alt="img" />
						<span class="view_btn"> Water Polo Competition </span>
						</a>
						<a href="newsletter/news/images/13-993915913.jpg" title="Inter-House Water Polo Competition -Senior School">
						<img class="gallery_img" src="newsletter/news/images/13-6115188585.jpg" alt="img" />
						<span class="view_btn"> Water Polo Competition </span>
						</a>
						<a href="newsletter/news/images/14-8967175814.jpg" title="Inter-House Water Polo Competition -Senior School">
						<img class="gallery_img" src="newsletter/news/images/14-7636445476.jpg" alt="img" />
						<span class="view_btn"> Water Polo Competition </span>
						</a>
						<a href="newsletter/news/images/15-2151052616.jpg" title="Inter-House Water Polo Competition -Senior School">
						<img class="gallery_img" src="newsletter/news/images/15-3942519995.jpg" alt="img" />
						<span class="view_btn"> Water Polo Competition </span>
						</a>
						<a href="newsletter/news/images/16-7786052999.jpg" title="Inter-House Water Polo Competition -Senior School">
						<img class="gallery_img" src="newsletter/news/images/16-1359417772.jpg" alt="img" />
						<span class="view_btn"> Water Polo Competition </span>
						</a>
						<a href="newsletter/news/images/17-482267745.jpg" title="Inter-House Water Polo Competition -Senior School">
						<img class="gallery_img" src="newsletter/news/images/17-631585152.jpg" alt="img" />
						<span class="view_btn"> Water Polo Competition </span>
						</a>
						<a href="newsletter/news/images/18-9994245038.jpg" title="Inter-House Water Polo Competition -Senior School">
						<img class="gallery_img" src="newsletter/news/images/18-8215558524.jpg" alt="img" />
						<span class="view_btn"> Water Polo Competition </span>
						</a>
						<a href="newsletter/news/images/19-3435826309.jpg" title="Inter-House Water Polo Competition -Senior School">
						<img class="gallery_img" src="newsletter/news/images/19-806326430.jpg" alt="img" />
						<span class="view_btn"> Water Polo Competition </span>
						</a>
                    </div>
                </div>
				<div class="tab-pane fade<?php echo ($selectedtab =="tab3")?"  show active":"";?>" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
					<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Basketball Practice Match -Senior School</p>
                    <div id="gallerySLide" class="sgallery_area4">
                        <a href="newsletter/news/images/1-6291328838.jpg" title="Basketball Practice Match -Senior School">
						<img class="gallery_img" src="newsletter/news/images/1-3492311329.jpg" alt="img" />
						<span class="view_btn"> Basketball Match </span>
						</a>

						<a href="newsletter/news/images/2-491719019.jpg" title="Basketball Practice Match -Senior School">
						<img class="gallery_img" src="newsletter/news/images/2-9173206241.jpg" alt="img" />
						<span class="view_btn"> Basketball Match </span>
						</a>
						<a href="newsletter/news/images/3-5207855853.jpg" title="Basketball Practice Match -Senior School">
						<img class="gallery_img" src="newsletter/news/images/3-1046308126.jpg" alt="img" />
						<span class="view_btn"> Basketball Match </span>
						</a>
						<a href="newsletter/news/images/4-8691746975.jpg" title="Basketball Practice Match -Senior School">
						<img class="gallery_img" src="newsletter/news/images/4-7303334174.jpg" alt="img" />
						<span class="view_btn"> Basketball Match </span>
						</a>
						<a href="newsletter/news/images/5-1489020223.jpg" title="Basketball Practice Match -Senior School">
						<img class="gallery_img" src="newsletter/news/images/5-8472608747.jpg" alt="img" />
						<span class="view_btn"> Basketball Match </span>
						</a>
						<a href="newsletter/news/images/6-7014308810.jpg" title="Basketball Practice Match -Senior School">
						<img class="gallery_img" src="newsletter/news/images/6-7589311678.jpg" alt="img" />
						<span class="view_btn"> Basketball Match </span>
						</a>
						<a href="newsletter/news/images/7-4007630635.jpg" title="Basketball Practice Match -Senior School">
						<img class="gallery_img" src="newsletter/news/images/7-9610300259.jpg" alt="img" />
						<span class="view_btn"> Basketball Match </span>
						</a>
						<a href="newsletter/news/images/8-3768094314.jpg" title="Basketball Practice Match -Senior School">
						<img class="gallery_img" src="newsletter/news/images/8-7020441793.jpg" alt="img" />
						<span class="view_btn"> Basketball Match </span>
						</a>
						<a href="newsletter/news/images/9-3410228932.jpg" title="Basketball Practice Match -Senior School">
						<img class="gallery_img" src="newsletter/news/images/9-7244613907.jpg" alt="img" />
						<span class="view_btn"> Basketball Match </span>
						</a>
						<a href="newsletter/news/images/10-6502575070.jpg" title="Basketball Practice Match -Senior School">
						<img class="gallery_img" src="newsletter/news/images/10-2961439872.jpg" alt="img" />
						<span class="view_btn"> Basketball Match </span>
						</a>

						<a href="newsletter/news/images/11-4404658312.jpg" title="Basketball Practice Match -Senior School">
						<img class="gallery_img" src="newsletter/news/images/11-8545132648.jpg" alt="img" />
						<span class="view_btn"> Basketball Match </span>
						</a>
						<a href="newsletter/news/images/12-1643867044.jpg" title="Basketball Practice Match -Senior School">
						<img class="gallery_img" src="newsletter/news/images/12-1804340579.jpg" alt="img" />
						<span class="view_btn"> Basketball Match </span>
						</a>
						<a href="newsletter/news/images/13-9825930492.jpg" title="Basketball Practice Match -Senior School">
						<img class="gallery_img" src="newsletter/news/images/13-3761919812.jpg" alt="img" />
						<span class="view_btn"> Basketball Match </span>
						</a>
						<a href="newsletter/news/images/14-5796878397.jpg" title="Basketball Practice Match -Senior School">
						<img class="gallery_img" src="newsletter/news/images/14-5336631414.jpg" alt="img" />
						<span class="view_btn"> Basketball Match </span>
						</a>
						<a href="newsletter/news/images/15-9350564487.jpg" title="Basketball Practice Match -Senior School">
						<img class="gallery_img" src="newsletter/news/images/15-5819906771.jpg" alt="img" />
						<span class="view_btn"> Basketball Match </span>
						</a>
						<a href="newsletter/news/images/16-8602585378.jpg" title="Basketball Practice Match -Senior School">
						<img class="gallery_img" src="newsletter/news/images/16-4879836621.jpg" alt="img" />
						<span class="view_btn"> Basketball Match </span>
						</a>
						<a href="newsletter/news/images/17-3508008126.jpg" title="Basketball Practice Match -Senior School">
						<img class="gallery_img" src="newsletter/news/images/17-5447792895.jpg" alt="img" />
						<span class="view_btn"> Basketball Match </span>
						</a>
						<a href="newsletter/news/images/18-2489225040.jpg" title="Basketball Practice Match -Senior School">
						<img class="gallery_img" src="newsletter/news/images/18-9546009171.jpg" alt="img" />
						<span class="view_btn"> Basketball Match </span>
						</a>
						<a href="newsletter/news/images/19-6629924739.jpg" title="Basketball Practice Match -Senior School">
						<img class="gallery_img" src="newsletter/news/images/19-5566937996.jpg" alt="img" />
						<span class="view_btn"> Basketball Match </span>
						 </a>
                    </div>
                </div>
				<div class="tab-pane fade<?php echo ($selectedtab =="tab4")?"  show active":"";?>" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
					<p style="font-size:1.5rem;color:#00205b; padding-top: 10px; text-align: center;">Inter-House Swimming Competition - Prep School</p>
                    <div id="gallerySLide" class="sgallery_area4">
                        <a href="newsletter/news/images/1-8800744810.jpg" title="Inter-House Swimming Competition - Prep School (Age Group U11, U12, U13 &amp; O13)">
						<img class="gallery_img" src="newsletter/news/images/1-4854368082.jpg" alt="img" />
						<span class="view_btn"> Inter-House Swimming </span>
						 </a>
						<a href="newsletter/news/images/2-4084441548.jpg" title="Inter-House Swimming Competition - Prep School (Age Group U11, U12, U13 &amp; O13)">
						<img class="gallery_img" src="newsletter/news/images/2-66953882.jpg" alt="img" />
						<span class="view_btn"> Inter-House Swimming </span>
						</a>
						<a href="newsletter/news/images/3-8927950546.jpg" title="Inter-House Swimming Competition - Prep School (Age Group U11, U12, U13 &amp; O13)">
						<img class="gallery_img" src="newsletter/news/images/3-681260320.jpg" alt="img" />
						<span class="view_btn"> Inter-House Swimming </span>
						</a>
						<a href="newsletter/news/images/4-6696210310.jpg" title="Inter-House Swimming Competition - Prep School (Age Group U11, U12, U13 &amp; O13)">
						<img class="gallery_img" src="newsletter/news/images/4-1016918812.jpg" alt="img" />
						<span class="view_btn"> Inter-House Swimming </span>
						</a>
						<a href="newsletter/news/images/5-4356929439.jpg" title="Inter-House Swimming Competition - Prep School (Age Group U11, U12, U13 &amp; O13)">
						<img class="gallery_img" src="newsletter/news/images/5-3289338701.jpg" alt="img" />
						<span class="view_btn"> Inter-House Swimming </span>
						</a>
						<a href="newsletter/news/images/6-1318706962.jpg" title="Inter-House Swimming Competition - Prep School (Age Group U11, U12, U13 &amp; O13)">
						<img class="gallery_img" src="newsletter/news/images/6-8467283386.jpg" alt="img" />
						<span class="view_btn"> Inter-House Swimming </span>
						</a>
						<a href="newsletter/news/images/7-3115331014.jpg" title="Inter-House Swimming Competition - Prep School (Age Group U11, U12, U13 &amp; O13)">
						<img class="gallery_img" src="newsletter/news/images/7-8361411957.jpg" alt="img" />
						<span class="view_btn"> Inter-House Swimming </span>
						</a>
						<a href="newsletter/news/images/8-1552019829.jpg" title="Inter-House Swimming Competition - Prep School (Age Group U11, U12, U13 &amp; O13)">
						<img class="gallery_img" src="newsletter/news/images/8-3391048675.jpg" alt="img" />
						<span class="view_btn"> Inter-House Swimming </span>
						</a>
						<a href="newsletter/news/images/9-6862754706.jpg" title="Inter-House Swimming Competition - Prep School (Age Group U11, U12, U13 &amp; O13)">
						<img class="gallery_img" src="newsletter/news/images/9-1473397995.jpg" alt="img" />
						<span class="view_btn"> Inter-House Swimming </span>
						</a>
						 <a href="newsletter/news/images/10-4025853687.jpg" title="Inter-House Swimming Competition - Prep School (Age Group U11, U12, U13 &amp; O13)">
						<img class="gallery_img" src="newsletter/news/images/10-8345000884.jpg" alt="img" />
						<span class="view_btn"> Inter-House Swimming </span>
						</a>
						<a href="newsletter/news/images/11-604697377.jpg" title="Inter-House Swimming Competition - Prep School (Age Group U11, U12, U13 &amp; O13)">
						<img class="gallery_img" src="newsletter/news/images/11-9207051739.jpg" alt="img" />
						<span class="view_btn"> Inter-House Swimming </span>
						</a>
						<a href="newsletter/news/images/12-8199415073.jpg" title="Inter-House Swimming Competition - Prep School (Age Group U11, U12, U13 &amp; O13)">
						<img class="gallery_img" src="newsletter/news/images/12-7099296871.jpg" alt="img" />
						<span class="view_btn"> Inter-House Swimming </span>
						</a>
						<a href="newsletter/news/images/13-9573662725.jpg" title="Inter-House Swimming Competition - Prep School (Age Group U11, U12, U13 &amp; O13)">
						<img class="gallery_img" src="newsletter/news/images/13-4222515029.jpg" alt="img" />
						<span class="view_btn"> Inter-House Swimming </span>
						</a>
						<a href="newsletter/news/images/14-879495696.jpg" title="Inter-House Swimming Competition - Prep School (Age Group U11, U12, U13 &amp; O13)">
						<img class="gallery_img" src="newsletter/news/images/14-3088863832.jpg" alt="img" />
						<span class="view_btn"> Inter-House Swimming </span>
						</a>
						<a href="newsletter/news/images/15-1483525624.jpg" title="Inter-House Swimming Competition - Prep School (Age Group U11, U12, U13 &amp; O13)">
						<img class="gallery_img" src="newsletter/news/images/15-7636220625.jpg" alt="img" />
						<span class="view_btn"> Inter-House Swimming </span>
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

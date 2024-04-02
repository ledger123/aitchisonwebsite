<?php


?>
<!DOCTYPE html>
<html>
<?php
$path = '../';
include_once("../../../path-settings.php");

$title = "Aitchison College vs Lawrence College"; include_once($path."header-includes.php");
$banner_url = $path.'resources/assets/images/banners/gallery.jpg';
$page_header = $title;
?>


<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>resources/css/gallery-style.css?v=1">
<style>
    #loading {
        /*position: fixed;
        display: block;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        text-align: center;
        opacity: 0.7;
        background-color: #fff;
        z-index: 9999;*/
        display: inline-block;
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

    .loading-image-small {
        border: 16px solid #00205b;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
        border-top: 16px solid #ffc845;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        display: inline-block;
    }

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
<?php include_once ($path.'new-logo-page-banner.php'); ?>

<?php include_once($path."mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="sports">Sports</a></li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div></div>
        </div>
    </div>
</div>
<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page"><a href="<?php echo $path; ?>news-room">News and Events</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Aitchison College v Lawrence College Sports</li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div></div>
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
            <p style="font-size:1rem;color:#800000;">
                13th to 16th October, 2022<br>
                Once again, we thank Lawrence College for continuing a long tradition of friendly competition between our two schools in sports.
                This year, Aitchison had the good fortune to win the fixture with decisive victories in Cricket, Hockey, Basketball, and Athletics. Soccer ended in a draw.
                Importantly, boys and staff from both schools enjoyed each other's company. A summary of the carnival is shown below.
            </p>
            <ul class="nav nav-tabs mb-3" id="sportsTab" role="tablist">
				<li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="tab1")?" active":"";?>" id="tab1-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="tab1" aria-selected="<?php echo ($selectedtab =="tab1")?"true":"false";?>">Cricket</button>
                </li>
		
				<li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="tab2")?" active":"";?>" id="tab2-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="tab2" aria-selected="<?php echo ($selectedtab =="tab2")?"true":"false";?>">Hockey</button>
                </li>
				<li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="tab3")?" active":"";?>" id="tab3-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="tab3" aria-selected="<?php echo ($selectedtab =="tab3")?"true":"false";?>">Soccer</button>
                </li>
				<li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="tab4")?" active":"";?>" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="tab4" aria-selected="<?php echo ($selectedtab =="tab4")?"true":"false";?>">Basketball</button>
                </li>

				<li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="tab6")?" active":"";?>" id="tab6-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab" aria-controls="tab6" aria-selected="<?php echo ($selectedtab =="tab6")?"true":"false";?>">Athletics Day 1</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link<?php echo ($selectedtab =="tab5")?" active":"";?>" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="tab5" aria-selected="<?php echo ($selectedtab =="tab5")?"true":"false";?>">Athletics Day 2</button>
                </li>
				 
            </ul>
            <div class="tab-content" id="sportsTabContent">
				<div class="tab-pane fade<?php echo ($selectedtab =="tab1")?"  show active":"";?>" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
					<p class="gtitle0">Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence</p>
                    <p>
                    Aitchison College batted first after offering Lawrence the choice to bat or bowl. We scored 248 runs for the loss of 5 wickets in 30 overs. In reply, Lawrence College was all out on 66 runs in 16 overs.
                    (Aitchison College won the match by 182 runs).</p>

                    <strong>Key Performers:</strong>
                    <table class="table w-auto">
                        <tr>
                            <td>Faham Ul Haq Khan:</td><td>76* runs (60 balls)</td>
                        </tr>
                        <tr>
                            <td>Ali Husnain Badshah:</td><td>67 runs (41 balls)</td>
                        </tr>
                        <tr>
                            <td>Usman Khan:</td><td>4 wickets (took hat-trick) for 4 runs in 1 over.</td>
                        </tr>
                    </table>
                    <br>
					
                    <div id="gallerySLide1" class="sgallery_area4">
                        <a href="<?php echo $path; ?>newsletter/news/images/1-9246217363.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/1-1929107109.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/2-9099658284.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/2-9096005958.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/3-4772507876.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/3-5583948281.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/4-8229716872.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/4-6267232674.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/5-4677175664.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/5-8226327992.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/6-1110136893.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/6-8543273022.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/7-1196652972.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/7-2934450109.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/8-1521063027.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/8-3741495106.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/9-3153736556.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/9-2500958316.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/10-6180654883.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/10-1483426548.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/11-2460100006.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/11-5804846159.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/12-4754607227.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/12-8523938575.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/13-8442433576.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/13-1419587914.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/14-9395600179.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/14-7059209491.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/15-4844030293.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/15-7791357139.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/16-5220105392.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/16-4211088060.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/17-3120933761.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/17-9923987192.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/18-532548386.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/18-7174878171.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/19-7829701686.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/19-7379158520.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/20-9649532071.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/20-6600840455.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/21-4608243054.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/21-2134814313.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/22-9208654461.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/22-1932003586.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/23-1784060754.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/23-8731852490.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/24-8002496922.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/24-9149678271.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/25-572209300.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/25-2342922830.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/26-8950228491.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/26-4689818660.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/27-4641005828.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/27-7771274933.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/28-615024772.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/28-9266345501.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/29-2827597986.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/29-4013858493.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/30-3899105983.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/30-3845481707.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/31-297652320.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/31-3963267447.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/32-2901788008.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/32-8415344734.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/33-3599365171.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/33-7467001100.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/34-8756184605.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/34-7107154787.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/35-4921000542.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/35-7629442000.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/36-8080252672.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/36-6564372126.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/37-8356545106.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/37-2207202922.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/38-7947123212.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/38-2484718378.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/39-508882805.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/39-4699752519.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/40-2022883580.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/40-3792583711.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/41-4308272797.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/41-4416999402.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/42-4712210382.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/42-2918981165.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/43-9432240138.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/43-4054370589.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/44-8620376870.jpg" title="Aitchison Cricket Ist XI Proves Far Too Strong For Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/44-4609650066.jpg" alt="img">
                            <span class="view_btn"> Aitchison Cricket Ist XI </span>
                        </a>
                    </div>
				</div>
				<div class="tab-pane fade<?php echo ($selectedtab =="tab5")?"  show active":"";?>" id="tab5" role="tabpanel" aria-labelledby="tab1-tab">
					<p class="gtitle0">Aitchison Convincing Winner in Athletics Against Lawrence College</p>
                    <div id="gallerySLide2" class="sgallery_area4">
                        <a href="<?php echo $path; ?>newsletter/news/images/1-1161466728.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/1-6220929486.jpg" alt="img">
                            <span class="view_btn"> Aitchison Winner in Athletics </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/2-7098538169.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/2-1367219229.jpg" alt="img">
                            <span class="view_btn"> Aitchison Winner in Athletics </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/3-5064525479.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/3-9603025427.jpg" alt="img">
                            <span class="view_btn"> Aitchison Winner in Athletics </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/4-1860327053.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/4-6558658369.jpg" alt="img">
                            <span class="view_btn"> Aitchison Winner in Athletics </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/5-3201039431.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/5-8073363355.jpg" alt="img">
                            <span class="view_btn"> Aitchison Winner in Athletics </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/6-5701443007.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/6-4190183012.jpg" alt="img">
                            <span class="view_btn"> Aitchison Winner in Athletics </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/7-1647016761.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/7-5784037090.jpg" alt="img">
                            <span class="view_btn"> Aitchison Winner in Athletics </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/8-7537061723.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/8-7415971028.jpg" alt="img">
                            <span class="view_btn"> Aitchison Winner in Athletics </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/9-104054246.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/9-402739503.jpg" alt="img">
                            <span class="view_btn"> Aitchison Winner in Athletics </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/10-2232740265.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/10-6145814277.jpg" alt="img">
                            <span class="view_btn"> Aitchison Winner in Athletics </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/11-7595453704.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/11-3162448180.jpg" alt="img">
                            <span class="view_btn"> Aitchison Winner in Athletics </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/12-8915767314.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/12-6672293031.jpg" alt="img">
                            <span class="view_btn"> Aitchison Winner in Athletics </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/13-7034128756.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/13-1843541899.jpg" alt="img">
                            <span class="view_btn"> Aitchison Winner in Athletics </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/14-9837012990.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/14-5608783434.jpg" alt="img">
                            <span class="view_btn"> Aitchison Winner in Athletics </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/15-4018811672.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/15-970511120.jpg" alt="img">
                            <span class="view_btn"> Aitchison Winner in Athletics </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/16-9986223601.jpg" title="Aitchison Convincing Winner in Athletics Against Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/16-3931621299.jpg" alt="img">
                            <span class="view_btn"> Aitchison Winner in Athletics </span>
                        </a>
                    </div>
				</div>
				<div class="tab-pane fade<?php echo ($selectedtab =="tab2")?"  show active":"";?>" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
					<p class="gtitle0">Aitchison Hockey Ist XI Downs Lawrence 6-2</p>
                    <p>Aitchison College won the match by 6 to 2 goals. This was a commanding performance.</p>
                    <strong>Goal Scorers:</strong>
                    <table class="table w-auto">
                        <tr>
                            <td>Majid Mahmood:</td><td>2 Goals</td><td>Niaz Ahmed:</td><td>1 Goal</td>
                        </tr>
                        <tr>
                            <td>Haseeb Ismail:</td><td>1 Goal</td><td>Muhammad Faisal:</td><td>1 Goal</td>
                        </tr>
                        <tr>
                            <td>Mir Bewergh:</td><td>1 Goal</td><td></td><td></td>
                        </tr>
                    </table>

                    <div id="gallerySLide3" class="sgallery_area4">

                        <a href="<?php echo $path; ?>newsletter/news/images/1-8004505682.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/1-31404729.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/2-3647427546.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/2-3388205552.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/3-950648508.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/3-2773789940.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/4-6331638243.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/4-5565886694.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/5-5016203657.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/5-2814688313.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/6-7102716041.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/6-116233896.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/7-1532508183.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/7-8346312394.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/8-2493206784.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/8-8059698737.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/9-4894184084.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/9-4958484778.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/10-7654229824.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/10-671327656.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/11-2732232254.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/11-5089569269.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/12-6382508940.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/12-3233439706.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/13-4388024059.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/13-6459837087.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/14-9126609865.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/14-7895604254.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/15-3216181366.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/15-6603456235.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/16-3532595043.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/16-8743738562.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/17-2359641744.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/17-2958979076.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/18-5298968250.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/18-8484190776.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/19-7522430539.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/19-3365053895.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/20-8392174268.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/20-4819726969.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/21-8957462125.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/21-6491643226.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/22-3355233000.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/22-9580998262.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/23-9201526673.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/23-5746860336.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/24-6327523694.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/24-6844501847.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/25-3614207025.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/25-4697622825.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/26-9949545766.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/26-7616591635.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/27-2639135342.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/27-6952849217.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/28-7714753527.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/28-3311729085.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/29-6374481522.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/29-4008431460.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>

                        <a href="<?php echo $path; ?>newsletter/news/images/30-3433000886.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/30-4740328891.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/31-6880638266.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/31-5118673139.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/32-9407177222.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/32-1256629889.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/33-7486033422.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/33-9642539507.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/34-5960723200.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/34-9078064997.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/35-2391227513.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/35-9771151101.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/36-7167041148.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/36-9439876258.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/37-3800656855.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/37-6667841622.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/38-4968120842.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/38-8232383716.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/39-5397530945.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/39-8322219380.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/40-8137906947.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/40-7094797733.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/41-4250217503.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/41-6551306388.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/42-4405467894.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/42-1901559757.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/43-202960339.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/43-4793282494.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/44-5118688851.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/44-1517310352.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/45-9332660370.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/45-1163966060.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/46-6712747810.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/46-3662600634.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/47-3577460103.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/47-7409794465.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/48-5026585585.jpg" title="Aitchison Hockey Ist XI Downs Lawrence 6-2">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/48-1602123144.jpg" alt="img">
                            <span class="view_btn"> AC Hockey Ist XI </span>
                        </a>
                    </div>
				</div>
				<div class="tab-pane fade<?php echo ($selectedtab =="tab3")?"  show active":"";?>" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
					<p class="gtitle0">Aitchison and Lawrence College Draw Soccer Nil All</p>
                    <p>Match ended in a goalless draw.</p>

                    <div id="gallerySLide4" class="sgallery_area4">

                        <a href="<?php echo $path; ?>newsletter/news/images/001-8858370779.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/001-7233792051.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/01-919822934.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/01-8277499213.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/1-6647021117.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/1-5906694516.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/2-4845928039.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/2-8220515411.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/3-7462581309.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/3-5400066210.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/4-1004284038.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/4-5819857498.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/5-71141626.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/5-4562546535.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/6-9093804206.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/6-7577914936.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/7-4625276689.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/7-4634919206.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/8-9950048845.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/8-7971481673.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/9-6763146087.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/9-1850470016.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/10-8770203988.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/10-3427614212.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/11-2523061840.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/11-738605992.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/12-3554255838.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/12-3522828486.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/13-7845140146.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/13-9986980741.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/14-2959740738.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/14-6793877748.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/15-3670908959.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/15-8666296968.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/16-8765274693.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/16-3400699934.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/17-5852275456.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/17-580060031.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/18-9717891601.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/18-1164201567.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/19-7827907398.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/19-3287833280.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/20-2721461128.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/20-1146295261.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/21-1997717533.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/21-7820019091.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/22-8251345803.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/22-3230326746.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/23-9815814699.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/23-3696703120.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/24-8961774867.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/24-3823145409.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/26-4577408606.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/26-5970388719.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/27-2330042383.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/27-537548209.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/28-5008448803.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/28-7428221971.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/29-7624996505.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/29-181006562.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/30-712580106.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/30-398959556.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/31-5191122013.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/31-8185505948.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/32-812796615.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/32-7364861105.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/33-6602285167.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/33-5461401783.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/34-537819912.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/34-1769230504.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/35-778198237.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/35-839490804.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/36-2355422952.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/36-9608586928.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/37-3432556940.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/37-8694815311.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/38-135334514.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/38-6855564676.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/39-9588886750.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/39-1627873786.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/40-4808246015.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/40-4956284130.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/41-8070104865.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/41-6532732313.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/42-7243966115.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/42-4292189554.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/43-3219716707.jpg" title="Aitchison and Lawrence College Draw Soccer Nil All">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/43-9491149466.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                    </div>
				</div>
				<div class="tab-pane fade<?php echo ($selectedtab =="tab4")?"  show active":"";?>" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                    <p class="gtitle0">Aitchison I<sup style="text-transform: lowercase;">st</sup> Basketball Triumph Over Lawrence College</p>

                    <p>Aitchison College won the match by 48-31 scores.</p>
                    <strong>Highest Scorer:</strong>
                    <table class="table w-auto">
                        <tr>
                            <td>Abdul Wahab:</td><td>14 points, took good rebounds and excellent defense.</td>
                        </tr>
                    </table>

                    <div id="gallerySLide5" class="sgallery_area4">

                        <a href="<?php echo $path; ?>newsletter/news/images/001-6550940393.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/001-5042148388.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/01-4531066646.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/01-3663095283.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/3-2201278852.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/3-7408719496.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/4-7025205268.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/4-3078793756.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/5-6938791596.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/5-4402209306.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/6-6655400175.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/6-5819499401.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/7-5399776774.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/7-9172772697.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/8-2631539450.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/8-3168634928.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/9-6748187443.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/9-9513605552.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/10-3426557506.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/10-6806306714.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/11-4155436759.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/11-4459515002.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/12-3774358232.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/12-3583353021.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/13-1967148892.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/13-6276982778.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/14-2806887224.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/14-6014283100.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/15-9149203049.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/15-1982810608.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/16-1293544227.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/16-6792588062.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/17-2054853033.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/17-490400585.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/18-2371896608.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/18-329370138.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/19-7145677326.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/19-9638388799.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/20-9363380162.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/20-1537507185.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/21-9898192395.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/21-6892043521.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/22-5564938812.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/22-541501090.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/23-7155597614.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/23-9498368854.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/24-6803789697.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/24-2005543898.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/25-6600509031.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/25-1219441388.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/26-9212326346.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/26-2581656322.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/27-3609780333.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/27-3024792687.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/29-8926838190.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/29-4727498176.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/30-5497339453.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/30-4033160506.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/32-1547884699.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/32-6478591646.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/33-1938110801.jpg" title="Aitchison Ist Basketball Triumph Over Lawrence College">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/33-9962359856.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                    </div>
                </div>
				<div class="tab-pane fade<?php echo ($selectedtab =="tab6")?"  show active":"";?>" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
					<p class="gtitle0">Aitchison Dominates First Day's Athletics Against Lawrence</p>
                    <table class="table table-bordered text-center">

                        <tbody>
                        <tr>
                            <th>Event</th>
                            <th>1<sup>st</sup> Position</th>
                            <th>2<sup>nd</sup> Position</th>
                            <th>3<sup>rd</sup> Position</th>
                        </tr>
                        <tr>
                            <td>200 M</td>
                            <td>Bilal Hamid (AC)</td>
                            <td>Khudadad Usman Virk (AC)</td>
                            <td>Syed Danyal Hussain Rizvi (AC)</td>
                        </tr>
                        <tr>
                            <td>800 M</td>
                            <td>Abuzar Suhaib&nbsp;(AC)
                            </td>
                            <td>M. Ibrahim Tarar&nbsp;(AC)
                            </td>
                            <td>M. Altamash Abbas&nbsp;(AC)</td>
                        </tr>
                        <tr>
                            <td>4x100 M Relay</td>
                            <td>Aitchison College</td>
                            <td>----------------</td>
                            <td>----------------</td>
                        </tr>
                        <tr>
                            <td>
                                Discus Throw
                            </td>
                            <td>
                                Asad Pasha Chaudhry&nbsp;
                                (AC)
                            </td>
                            <td>
                                M. Ammar Qaiyum&nbsp;
                                (AC)
                            </td>
                            <td>
                                Abdul Wahab&nbsp;
                                (AC)
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Long Jump
                            </td>
                            <td>
                                M. Nausherwan Pattal&nbsp;
                                (AC)
                            </td>
                            <td>
                                Taha Nawaz&nbsp;
                                (LC)
                            </td>
                            <td>
                                Asfandyar Younas&nbsp;
                                (AC)
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div id="gallerySLide6" class="sgallery_area4">

                        <a href="<?php echo $path; ?>newsletter/news/images/1-1636836071.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/1-3698123365.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/4-1846209825.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/4-8353325820.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/2-2794320703.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/2-2967144022.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>

                        <a href="<?php echo $path; ?>newsletter/news/images/3-5129400598.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/3-4759166994.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/5-9817426898.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/5-4324680732.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/6-2924810745.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/6-9856869948.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/7-8999502582.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/7-836698182.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/8-3358203374.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/8-4624228573.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/9-9264123884.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/9-2279688087.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/10-59773123.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/10-9090400100.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/11-7964330430.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/11-2314540540.jpg" alt="img">
                            <span class="view_btn"> </span>
                        </a>
                        <a href="<?php echo $path; ?>newsletter/news/images/12-424479166.jpg" title="Aitchison Dominates First Day's Athletics Against Lawrence">
                            <img class="gallery_img" loading="lazy" src="<?php echo $path; ?>newsletter/news/images/12-2423277301.jpg" alt="img">
                            <span class="view_btn"> </span>
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

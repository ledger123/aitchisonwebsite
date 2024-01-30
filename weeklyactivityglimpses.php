<?php
	$path = '';
	$imagePath = '';
	$include_path = '';

	//include_once $include_path.'standard/redirect.php';
	include_once($include_path."newsletter/classes/functions.php");
	include_once($include_path."newsletter/classes/dataCenter.php");
	//include_once($include_path."newsletter/news/newsrepository.php");
	include_once($include_path."newsletter/news/weeklyactivityrepository.php");
													
	include("resources/php/utils.php");

	$dc = new DataCenter();

	$dc->Connect();

	$weeklyRepo = new WeeklyActivityGlimpses($dc);
	//echo $weeklyRepo;
	$pagenumber=isset($_GET['pagenumber'])?(int)$_GET['pagenumber']:0;
	$tNews = $weeklyRepo->GetWeeklyGlimpses($pagenumber);//GetNews($newsId, "", "", "", 0, 0, 1, 1, defined("USER_ID")?USER_ID:0);
	if($tNews->rowsCount() <= 0){
		header("location: news-room");
		exit();
	}
	if($tNews->rowsCount()){
		$firstRow=$tNews->Rows[0];		
		$startDate=getSuperScript(date("j S F, Y", strtotime($firstRow->Date)));		
		$lastRow=$tNews->Rows[$tNews->rowsCount()-1];
		$lastDate=getSuperScript(date("j S F", strtotime($lastRow->Date)));
		if(date("Y", strtotime($firstRow->Date)) != date("Y", strtotime($lastRow->Date))){
			$lastDate=getSuperScript(date("j S F, Y", strtotime($lastRow->Date)));
		}
		$lastNewsId=$lastRow->NewsId;//;122
	}
	if($firstRow->Date == $lastRow->Date){
		$subtitle="".$startDate;
	}else{
		$subtitle="".$lastDate." to ".$startDate."";	
	}
	
	//$tNews->PrintTable();
	$page_name=basename($_SERVER['REQUEST_URI']);
	if($page_name == "weeklyactivityglimpse.php"){
		header("location: news-room");
		exit();
	}
	$page_glimse_name="activityglimpses/2022/oct-week-9.php";
	if(!file_exists($page_glimse_name)){
		header("location: news-room");
		exit();
	}
	include_once ("resources/php/Mobile_Detect.php");
	$mobile = new Mobile_Detect();
	function getSuperScript($ydate){
		if(strpos($ydate, " st "))
		$ydate=str_replace(" st ", "<sup>st</sup> ",$ydate);
		elseif(strpos($ydate, " nd "))
		$ydate=str_replace(" nd ", "<sup>nd</sup> ",$ydate);
		elseif(strpos($ydate, " th "))
		$ydate=str_replace(" th ", "<sup>th</sup> ",$ydate);
		elseif(strpos($ydate, " rd "))
		$ydate=str_replace(" rd ", "<sup>rd</sup> ",$ydate);
		return $ydate;		
	}
?>
<!DOCTYPE html>
<html>
<?php
include_once("../path-settings.php");
include_once("activityglimpses/functions.php");
$title = "Sports & Co-Curricular Activities"; 
$second_title="The ".getWeek(intval($_GET['weekNumber']))." week of ".getMonth($_GET['monthName'])." at a Glance";
$page_glimse_name_title=str_replace(".php", "-title.php", $page_glimse_name);		
if(file_exists($page_glimse_name_title)){		
	include_once($page_glimse_name_title);
}
include_once($path."header-includes.php");

$banner_url = $path.'resources/assets/images/banners/scoreboard-20230902.jpg';
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
    top: calc(50% - 60px);
    left: calc(50% - 60px);
    z-index: 10000;

    border: 16px solid #00205b;
    -webkit-animation: spin 2s linear infinite;
    animation: spin 2s linear infinite;
    border-top: 16px solid #ffc845;

    border-radius: 50%;
    width: 120px;
    height: 120px;
}

@media (max-width: 570px) {
    #loading-image {

        border: 12px solid #00205b;
        -webkit-animation: spin 2s linear infinite;
        animation: spin 2s linear infinite;
        border-top: 12px solid #ffc845;


        top: calc(50% - 40px);
        left: calc(50% - 40px);
        width: 80px;
        height: 80px;
    }
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
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="./news-room">News and Events</a></li>
                    <li class="breadcrumb-item active" aria-current="page">News</li>
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
			<p style="font-size:1.5rem;color:#800000;text-align: left;"><?php echo $second_title;?></p>
        </div>

    </div>
</div>

<div class="container">
    <?php /*?><div id="loading">
        <div id="loading-image">

        </div>
    </div><?php */?>
    <!-- Contents -->
    <?php
		if(file_exists($page_glimse_name)){
			include_once($page_glimse_name);
            //echo $pexists="<br>".$page_glimse_name." Is Exists";

		}
	?>
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

        //hiding the page loader
        $('#loading').hide();

        // collapse the accordion
        $('#tab1-tab, #tab2-tab, #tab3-tab, #tab4-tab, #tab5-tab, #tab6-tab, #tab7-tab, #tab8-tab,  #tab9-tab, #tab10-tab, #tab11-tab, #tab12-tab, #tab13-tab, #tab14-tab, #tab15-tab, #tab16-tab, #tab17-tab, #tab18-tab, #tab19-tab, #tab20-tab, #tab21-tab, #tab22-tab, #tab23-tab, #tab24-tab, #tab25-tab, #tab26-tab, #tab27-tab, #tab28-tab, #tab29-tab, #tab30-tab').click( function (e){
            e.preventDefault();

            let btn = $('.accordion-button');
            btn.addClass('collapsed');
            btn.attr('aria-expanded', 'false');


            $('#collapseOne').removeClass('show');


            //$('#collapseOne').removeClass('accordion-collapse collapse show');
            //$('#collapseOne').addClass('accordion-collapse collapse');
        });


    });

</script>

</body>

</html>

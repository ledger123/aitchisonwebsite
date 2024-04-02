<!DOCTYPE html>
<html>
<?php

include_once("../path-settings.php");

include_once($path."resources/php/utils.php");


$banner_url = $path.'resources/assets/images/banners/gallery.jpg';
$page_header = $title;


$banner_image_url="img/banner.jpg";


$gal_name=array(
    "general"			=>  "Gallery",
    "events"			=>  "Events",
    "buildings"			=>  "Buildings",
    "sports"			=>  "Sports",
    "groundfields"		=>  "Grounds & Fields"
);
$gal_folder=array(
    "1"		=>  "galimages\Buildings\collegebuilding",
    "2"		=>  "galimages\Events\General Assembly",
    "3"		=>  "Senior School Assembly",
    "4"		=>  "Prep School Tape Ball Match",
    "5"		=>  "Flag hoisting  On Pakistan Day",
    "9"		=>  "JS MINI SPORTS DAY",
    "7"		=>  "130<sup>th</sup> FOUNDERS' DAY ACADEMICS",
    "8"		=>  "130<sup>th</sup> FOUNDERS' DAY SPORTS",
    /*"10"	=>  "Prep School Assembly",*/
    "11"	=>  "Junior School Assembly",
    "16"	=>  "131<sup>st</sup> FOUNDERS' DAY ACADEMICS 2017",
    "17"	=>  "Founders' Day Sports (Junior School) 2017",
    "18"	=>  "Founders' Day Sports (Prep School) 2017",
    "19"	=>  "Founders' Day Sports (Senior School) 2017",
    "20"	=>  "Walter A . Robinson Challenge Cup 2018",
    "21"	=>  "GENERAL ASSEMBLY",
    /*"22"	=>  "132<sup>nd</sup> FOUNDERS' DAY ACADEMICS 2018",*/
    "23"	=>  "Founders' Day Sports (Junior School) 2018",
    "24"	=>  "Founders' Day Sports (Prep School) 2018",
    "25"	=>  "Founders' Day Sports (Senior School) 2018",
    "28"	=>  "Sports Day",
    "29"	=>  "Founders' Day Academics 2019",
    "30"	=>  "Founders' Day Sports 2019"

);
$gal_array["general"]["count"]=array(
    "3"		=>  15,
    "4"		=>  30,
    "5"		=>  9,
    "6"		=>  20,
    "9"		=>  20,
    "7"		=>  30,
    "8"		=>  24,
    /*"10"	=>  4,*/
    "11"	=> 8,
    "12"	=> 8,
    "13"	=> 8,
    "14"	=> 36,
    "15"	=> 8,
    "16"	=> 32,
    "17"	=> 40,
    "18"	=> 12,
    "19"	=> 28,
    "20"	=> 48,
    "21"	=>  20,
    /*"22"	=>  6,*/
    "23"	=>  15,
    "24"	=>  22,
    "25"	=>  18,
    "26"	=>  15,
    "28"	=>  19,
    "29"	=>  18,
    "30"	=>  25,
    "31"	=>  9,
    "32"	=>  19,
    "33"	=>  16,
    "34"	=>  16,
    "35"	=>  12,
    "36"	=>  20,
    "37"	=>  29,
    "38"	=>  48,
    "39"	=>  14,
    "40"	=>  9,
    "41"	=>  18,
    "42"	=>  27,
    "43"	=>  12,
    "44"	=>  12,
    "45"	=>  11,
    "46"    =>  52,
	"47"    =>  15,
	"48"    =>  29,
	"49"    =>  43,
	"50"	=>  5,
	"51"	=>  9,
	"52"	=>  39,
	"53"	=>	40,
	"54"	=>	41,
	"55"	=>	37,
	"56"	=>	23

);

$gal_array["general"]["title"]=array(
    "3"		=>  "Senior School Assembly",
    "4"		=>  "Prep School Tape Ball Cricket Match",
    "5"		=>  "Flag hoisting  On Pakistan Day",
    "6"		=>  "Unity Night",
    "9"		=>  "JS MINI SPORTS DAY",
    "7"		=>  "130<sup>th</sup> FOUNDERS' DAY ACADEMICS",
    "8"		=>  "130<sup>th</sup> FOUNDERS' DAY SPORTS",
    /*"10"	=>  "Prep School Assembly",*/
    "11"	=>  "Junior School Assembly",
    "12"	=> "Flag Hoisting on Independence Day",
    "13"	=>  "Independence Day Sports",
    "14"	=> "ACMUN",
    "15"	=>  "CROSS COUNTRY RACES 2017",
    "16"	=>  "131<sup><span style=\"text-transform: lowercase; vertical-align: super;\">st</span></sup> FOUNDERS' DAY ACADEMICS 2017",
    "17"	=>  "Founders' Day Sports (Junior School) 2017",
    "18"	=>  "Founders' Day Sports (Prep School) 2017",
    "19"	=>  "Founders' Day Sports (Senior School) 2017",
    "20"	=>  "Walter A . Robinson Challenge Cup 2018",
    "21"	=>  "GENERAL ASSEMBLY",
    /*"22"	=>  "132<sup><span style=\"text-transform: lowercase; vertical-align: super;\">nd</span></sup> FOUNDERS' DAY ACADEMICS 2018",*/
    "23"	=>  "Founders' Day Sports (Junior School) 2018",
    "24"	=>  "Founders' Day Sports (Prep School) 2018",
    "25"	=>  "Founders' Day Sports (Senior School) 2018",
    "26"	=>  "Founders' Day Sports 2018",
    "28"	=>  "Sports Day",
    "29"	=>  "Founders' Day Academics 2019",
    "30"	=>  "Founders' Day Sports 2019",
    "31"    =>  "Annual Urdu Play (Senior School)",
    "32"    =>  "English Play (Prep School)",
    "33"    =>  "English Play (Senior School)",
    "34"    =>  "LJ House Dinner",
    "35"    =>  "Godley House Dinner",
    "36"    =>  "kelly House Dinner",
    "37"    =>  "Saigol & Bahawalpur House Dinner",
    "38"    =>  "Summer Camp",
    "39"    =>  "ROBOTICS SUMMER CAMP",
    "40"    =>  "INDEPENDENCE DAY",
    "41"    =>  "ACMUN X",
    "42"    =>  "Performing Arts Fest",
    "43"    =>  "Cross Country Race 2020",
    "44"    =>  "MAKERS' FAIR",
    "45"    =>  "Sports Day 2022",
    "46"    =>  "Cross Country Race - Junior School 2022",
	"47"    =>  "Senior School Drama 2022",
	"48"    =>  "Inter-House Cross Country Race 2022",
	"49"    =>  "Art Exhibition",
	"50"	=>  "Founders' Day Academics 2022",
	"51"	=>  "Arena Polo",
	"52"	=>  "PS Science Exhibition",
	"53"	=>  "ACLAC 2022 - German French Language Festival",
	"54"	=>  "ACMUN 2022",
	"55"	=>  "Prep School English Play 2022",
	"56"	=>  "Founders' Day 2022"
	

);

$gal_array["events"]["title"]=array(
    "3"		=>  "Senior School Assembly",
    "4"		=>  "Prep School Tape Ball Cricket Match",
    "5"		=>  "Flag hoisting  On Pakistan Day",
    "6"		=>  "Unity Night",
    "9"		=>  "JS MINI SPORTS DAY",
    "7"		=>  "130<sup>th</sup> FOUNDERS' DAY ACADEMICS",
    "8"		=>  "130<sup>th</sup> FOUNDERS' DAY SPORTS",
    "10"	=>  "Prep School Assembly",
    "11"	=>  "Junior School Assembly",
    "12"	=> "Flag Hoisting on Independence Day",
    "13"	=>  "Independence Day Sports",
    "14"	=> "ACMUN",
    "15"	=>  "CROSS COUNTRY RACES 2017",
    "16"	=>  "131<sup><span style=\"text-transform: lowercase; vertical-align: super;\">st</span></sup> FOUNDERS' DAY ACADEMICS 2017",
    "17"	=>  "Founders' Day Sports (Junior School) 2017",
    "18"	=>  "Founders' Day Sports (Prep School) 2017",
    "19"	=>  "Founders' Day Sports (Senior School) 2017",
    "20"	=>  "Walter A . Robinson Challenge Cup 2018",
    "21"	=>  "GENERAL ASSEMBLY",
    "23"	=>  "Founders' Day Sports (Junior School) 2018",
    "24"	=>  "Founders' Day Sports (Prep School) 2018",
    "25"	=>  "Founders' Day Sports (Senior School) 2018",
    "26"	=>  "Founders' Day Sports 2018",
    "28"	=>  "Sports Day",
    "29"	=>  "Founders' Day Academics 2019",
    "30"	=>  "Founders' Day Sports 2019",
    "31"    =>  "Annual Urdu Play (Senior School)",
    "32"    =>  "English Play (Prep School)",
    "33"    =>  "English Play (Senior School)",
    "34"    =>  "LJ House Dinner",
    "35"    =>  "Godley House Dinner",
    "36"    =>  "kelly House Dinner",
    "37"    =>  "Saigol & Bahawalpur House Dinner",
    "38"    =>  "Summer Camp",
    "39"    =>  "ROBOTICS SUMMER CAMP",
    "40"    =>  "INDEPENDENCE DAY",
    "41"    =>  "ACMUN X",
    "42"    =>  "ART AND PERFORMING ARTS FEST",
    "43"    =>  "WALTER A. ROBINSON CROSS COUNTRY RACE 2020",
    "44"    =>  "MAKERS' FAIR AT JUNIOR SCHOOL",
    "45"    =>  "Sports Day 2022",
    "46"    =>  "Cross Country Race - Junior School 2022",
	"47"    =>  "Senior School Drama 2022",
	"48"    =>  "Inter-House Cross Country Race 2022",
	"49"    =>  "Art Exhibition",
	"50"	=>  "Founders' Day Academics 2022",
	"51"	=>  "Arena Polo",
	"52"	=>  "PS Science Exhibition",
	"53"	=>  "ACLAC 2022 - German French Language Festival",
	"54"	=>  "ACMUN 2022",
	"55"	=>  "Prep School English Play 2022",
	"56"	=>  "Founders' Day 2022"
);



if(!isset($_GET['gal_id'])){
    header("location: picture-gallery");
    exit();
}
/*echo $_GET['gal_id']."<br>";
echo $_GET['gal_name']."<br>";*/
$gal_id=$_GET['gal_id'];//$purifier->purify($_GET['gal_id']);
$gal_name=$_GET['gal_name']; //$purifier->purify($_GET['gal_name']);
/*echo $_GET['gal_id']."<br>";
	echo $_GET['gal_name']."<br>";*/
if(!($gal_name==makeSlug($gal_array["general"]["title"][$gal_id]))){
    header("location: picture-gallery");
    exit();
}
if($gal_id == 14){
    $banner_image_url=$image_path."img/acmum-gal-2016.jpg";
}elseif($gal_id == 20){
    $banner_image_url=$image_path."img/gal-20.jpg";
}elseif($gal_id == 21){
    $banner_image_url=$image_path."img/pageimages/misc.jpg";
}


$title = $gal_array["events"]["title"][$gal_id]; include_once($path."header-includes.php");
?>
<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>resources/css/gallery-style.css?v=1">

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent nav-home">

    <div class="logo-left">

    </div>

</nav>

<section class="page-banner" style="background: url('<?php echo $banner_url; ?>')">

    <div class="container banner-text">
        <div class="banner-heading">

        </div>
    </div>
</section>

<?php include_once($path."mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">

        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="event-gallery">Gallery</a></li>
                </ol>
            </nav>

        </div>
    </div>
</div>
<div class="container-fluid">

    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="col-12 page-title">
            <h1><?php echo $gal_array["events"]["title"][$gal_id]; ?></h1>
        </div>

    </div>
</div>

<div class="container">

    <!-- Contents -->
    <div class="row page-contents">

        <!-- Content Area -->
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div id="gallerySLide" class="sgallery_area4">
                <?php
                $foldername=$image_path."galimages/images/".$gal_id."/";

                $dh  = opendir($foldername);

                for($i=1; $i <= intval($gal_array["general"]["count"][$gal_id]); $i++){
                    $cfile=$foldername.$i.".jpg";
                    $cfile=$foldername."small/".$i.".jpg";
                    $filename=$i.".jpg";
                    if(!file_exists($cfile)) {
                        continue;

                    } else {
                        ?>
                        <a href="<?php echo $foldername.$filename;?>" title="<?php echo strip_tags($gal_array["general"]["title"][$gal_id]);?>">
                            <img class="gallery_img" src="<?php echo $foldername."small/".$filename;?>" alt="img" />
                            <span class="view_btn"><?php //echo $gal_array["general"]["title"][$gal_id];?></span>
                        </a>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <!-- End Content Area -->


        
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

</body>

</html>


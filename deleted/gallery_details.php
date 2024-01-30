<?php
	include("standard/main.php"); 
	$config = HTMLPurifier_Config::createDefault();
	$config->set('Core.Encoding', 'UTF-8'); // replace with your encoding
	$config->set('HTML.Doctype', 'XHTML 1.0 Transitional'); // replace with your doctype
	$purifier = new HTMLPurifier($config);
	$banner_image_url="img/banner.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=2;
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
											"40"	=>  9	
											
											
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
											"38"    =>  "Summer Camp 2019",
											"39"    =>  "ROBOTICS SUMMER CAMP - 2019",
											"40"    =>  "INDEPENDENCE DAY"
											
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
											"28"	=>  "Sports Day",
											"29"	=>  "Founders' Day Academics 2019",
											"30"	=>  "Founders' Day Sports 2019",
											"31"    =>  "Annual Urdu Play (Senior School)",
											"32"    =>  "English Play (Prep School)",
											"33"    =>  "English Play (Senior School)",
											"34"    =>  "LJ House Dinner",
											"35"    =>  "Godley House Dinner",
											"36"    =>  "kelly House Dinner",
											"37"    =>  "Saigol & Bahawalpur House Dinner"
										  );
	
	if(!isset($_GET['gal_id'])){
		header("location: gallery.php");
		exit();
	}
	$gal_id=$purifier->purify($_GET['gal_id']);
	if($gal_id == 14){
		$banner_image_url="img/acmum-gal-2016.jpg";	
	}elseif($gal_id == 20){
		$banner_image_url="img/gal-20.jpg";	
	}elseif($gal_id == 21){
		$banner_image_url="img/pageimages/misc.jpg";	
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aitchison College : Gallery</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <link rel="shortcut icon" href="/nne_logo.ico" type="image/x-icon">
    <link rel="icon" href="/nne_logo.ico" type="image/x-icon">	
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include_once("phpinclude/headercontrol.php");  ?>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link href='//fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> 
    <link rel='stylesheet' href='css/circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css"> 
    <!-- preloader 
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/aitchison-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='//fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='//fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <?php include("phpinclude/header.php");?>
    <!--=========== END HEADER SECTION ================--> 

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner" style=" background-image: url(<?php echo $banner_image_url;?>);">
      <h2></h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN GALLERY SECTION ================-->
    <!--<div class="container" style="padding: 0; margin: 0; height: 100px !important; border: #E3171B thin solid;">
        <div class="aboutus_area wow fadeInLeft">
                <h2 class="titlewithoutborder colorblue hrplace border-blue" style="position: relative; display: inline-block;">Aitchisonians win UNSW gold medals</h2><br />
        </div>
      </div>-->
    <section id="courseArchive" style="min-height: auto; padding: 0; margin: 0; background: none;">
      <div class="container">
        <div class="aboutus_area wow fadeInLeft">
        <?php 
		if($gal_id != 20){
		?>
                <br><br><div align="center"><h2 class="titlewithoutborder colorblue hrplace border-blue" style="position: relative; display: inline-block;"><?php echo $gal_array["general"]["title"][$gal_id];?></h2></div>
        <?php 
		}
		?>
        </div>
      </div>
    </section>
    <section id="gallery" style="padding-top: 20px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div id="gallerySLide" class="gallery_area">
            	<?php
				$foldername="galimages/images/".$gal_id."/";
				//echo $foldername;
                //foreach($gal_array[$cat]["title"] as $key => $keyval){
					$dh  = opendir($foldername);
					//echo "AkhtarRafiq".$gal_array["general"]["count"][$gal_id];
					for($i=1; $i <= intval($gal_array["general"]["count"][$gal_id]); $i++){
						$cfile=$foldername.$i.".jpg";
						$cfile=$foldername."small/".$i.".jpg";
						$filename=$i.".jpg";
						if(!file_exists($cfile)){
							//echo "Akhtar".$i."<br>";
							continue;
							
						/*}	
					}
					while (false !== ($filename = readdir($dh))) {
						//echo "<br>".$filename."Akhtar Rafiq<br>";
							if($filename =="." || $filename ==".."){
								continue;	
							}*/
							
								//continue;
							
							//$files[] = $dir.$filename;
					//}
					
					//thumb.php?file=../products/768f35a1.jpg&size=100	
						 }else{ //if(is_file($foldername.$filename)){	
				?>
                <a href="<?php echo $foldername.$filename;?>" title="<?php echo strip_tags($gal_array["general"]["title"][$gal_id]);?>">
                  <img class="gallery_img" src="<?php echo $foldername."small/".$filename;?>" alt="img" />
                <span class="view_btn"><?php echo $gal_array["general"]["title"][$gal_id];?></span>
                </a>
                <?php
				}
				}
				?>                
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=========== END GALLERY SECTION ================-->
    
    <!--=========== BEGIN FOOTER SECTION ================-->
    <?php include("phpinclude/footer.php");?>
     
    <!--=========== END FOOTER SECTION ================--> 

  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file 
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script language="javascript" src='js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <?php
	if(empty($_SESSION['mynotify'])){
		$_SESSION['mynotify']="Show Me.";
    	if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')){
	?>
    		<script src="js/notifications.js"></script>
    <?php
		}
	}
	?>
    <script src="js/custom1.js"></script>
  

  </body>
</html>
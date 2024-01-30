<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);

	//include("../standard/main.php"); 
	$banner_image_url="../img/banner.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=2;
	

	date_default_timezone_set("Asia/Karachi");

	define( 'TIMEBEFORE_NOW',         'now' );
    define( 'TIMEBEFORE_MINUTE',      '{num} minute ago' );
    define( 'TIMEBEFORE_MINUTES',     '{num} minutes ago' );
    define( 'TIMEBEFORE_HOUR',        '{num} hour ago' );
    define( 'TIMEBEFORE_HOURS',       '{num} hours ago' );
    define( 'TIMEBEFORE_YESTERDAY',   'yesterday' );

	define( 'TIMEBEFORE_DAYS',    	'{num} days ago' );
	define( 'TIMEBEFORE_WEEK',    	'{num} week ago' );
	define( 'TIMEBEFORE_WEEKS',   	'{num} weeks ago' );
	define( 'TIMEBEFORE_MONTH',   	'{num} month ago' );
	define( 'TIMEBEFORE_MONTHS',  	'{num} months ago' );

    define( 'TIMEBEFORE_FORMAT',      '%e %b' );
    define( 'TIMEBEFORE_FORMAT_YEAR', '%e %b, %Y' );

    function time_ago( $time )
    {
        $out    = ''; // what we will print out
        $now    = time(); // current time
        $diff   = $now - strtotime( $time ); // difference between the current and the provided dates
		
		$diff   = (int)$diff;
		
		//echo "asim: ".$time . '  '. date( 'Y', strtotime( $time ) );
        if( $diff < 60 ) // it happened now
            return TIMEBEFORE_NOW;

        elseif( $diff < 3600 ) // it happened X minutes ago
            return str_replace( '{num}', ( $out = round( $diff / 60 ) ), $out == 1 ? TIMEBEFORE_MINUTE : TIMEBEFORE_MINUTES );

        elseif( $diff < 3600 * 24 ) // it happened X hours ago
            return str_replace( '{num}', ( $out = round( $diff / 3600 ) ), $out == 1 ? TIMEBEFORE_HOUR : TIMEBEFORE_HOURS );

        elseif( $diff < 3600 * 24 * 2 ) // it happened yesterday
            return TIMEBEFORE_YESTERDAY;

		elseif( $diff < 3600 * 24 * 7 )
			return str_replace( '{num}', round( $diff / ( 3600 * 24 ) ), TIMEBEFORE_DAYS );

		elseif( $diff < 3600 * 24 * 7 * 4 )
			return str_replace( '{num}', ( $out = round( $diff / ( 3600 * 24 * 7 ) ) ), $out == 1 ? TIMEBEFORE_WEEK : TIMEBEFORE_WEEKS );

		elseif( $diff < 3600 * 24 * 7 * 4 * 12 )
			return str_replace( '{num}', ( $out = round( $diff / ( 3600 * 24 * 7 * 4 ) ) ), $out == 1 ? TIMEBEFORE_MONTH : TIMEBEFORE_MONTHS );

		
        else // falling back on a usual date format as it happened later than yesterday
            return strftime( date( 'Y', strtotime( $time ) ) == date( 'Y' ) ? TIMEBEFORE_FORMAT : TIMEBEFORE_FORMAT_YEAR, strtotime( $time ) );
    }


?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aitchison College : Principal's Speechs</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <link rel="shortcut icon" href="../nne_logo.ico" type="image/x-icon">
    <link rel="icon" href="../nne_logo.ico" type="image/x-icon">	
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include_once("../phpinclude/headercontrol.php");  ?>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="../css/superslides.css">
    <!-- Slick slider css file -->
    <link href="../css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link href='//fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> 
    <link rel='stylesheet' href='../css/circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="../css/animate.css"> 
    <!-- preloader 
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="../css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="../css/themes/aitchison-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="../style.css" rel="stylesheet">
	  
    <!--<link rel="stylesheet" href="videogallery.css" />-->
	  
	<link rel="stylesheet" href="css/videolightbox.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/overlay-minimal.css"/>
	  
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
    <?php include("../phpinclude/header.php");?>
    <!--=========== END HEADER SECTION ================--> 

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner" style=" background-image: url(<?php echo $banner_image_url;?>);">
      <h2></h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN GALLERY SECTION ================-->
	 
    <section id="gallery">
      <div class="container">
		  <h2 class="titile">Principal's Speechs</h2>
		  <br />
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
					
        	<div class="videogallery">
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					<div class="video-card">
						<a class="voverlay" href="js/video/vdbplayer.swf?volume=100&url=../../../videos/principal-speech-518.mp4" title="Principal Speech">
							<img src="../videos/principal-speech-518.jpg" alt="Principal Speech" />
							<span class="video-play"></span>
							<span class="video-time">1:18</span>
						</a>
						<div>Principal Speech</div>
						<span>“Freedom is hammered out on the anvil of discussion, dissent, and debate.”</span>
						<div class="video-duration"><?php echo time_ago('9/28/2020 08:46'); ?></div>
						
					</div>
				</div>
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					<div class="video-card">
						<a class="voverlay" href="js/video/vdbplayer.swf?volume=100&url=../../../videos/imran-khan-speech-518.mp4" title="Imran Khan Speech">
							<img src="../videos/imran-khan-speech-518.jpg" alt="Imran Khan Speech" />
							<span class="video-play"></span>
							<span class="video-time">2:03</span>
						</a>
						<div>Independence Day</div>
						<span>Over the course of Pakistan’s history, Aitchison College has produced some of the country’s finest, including former presidents and prime ministers, sportsmen and renowned artists.</span>
						<div class="video-duration"><?php echo time_ago('08/22/2019 08:46'); ?></div>
					</div>
				</div>

				
			</div>
			  
          </div>
        </div>
		
      </div>
    </section>
    <!--=========== END GALLERY SECTION ================-->
    
    <!--=========== BEGIN FOOTER SECTION ================-->
    <?php include("../phpinclude/footer.php");?>
     
	  
    <!--=========== END FOOTER SECTION ================--> 

  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file 
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="../js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="../js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/jquery.animate-enhanced.min.js"></script>
    <script src="../js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script language="javascript" src='../js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="../js/jquery.tosrus.min.all.js"></script>   
   
	
	<script src="js/video/swfobject.js" type="text/javascript"></script>
	<script src="js/video/jquery.tools.min.js" type="text/javascript"></script>
	<script src="js/video/videolightbox.js" type="text/javascript"></script>
	
    <!-- Custom js-->
    <?php
	if(empty($_SESSION['mynotify'])){
		$_SESSION['mynotify']="Show Me.";
    	if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')){
	?>
    		<script src="../js/notifications.js"></script>
    <?php
		}
	}
	?>
    <script src="../js/custom1.js"></script>

  </body>
</html>
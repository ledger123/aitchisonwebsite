<?php
//session_start();
//include("phpinclude/main.php");
include_once("phpinclude/redirect.php");
header('X-Content-Type-Options: nosniff');
header("X-XSS-Protection: 1; mode=block;");
header("Pragma: no-cache");
header("Cache-Control: no-cache, no-store, must-revalidate, private");
header('X-Frame-Options: SAMEORIGIN');
header("strict-transport-security: max-age=0");	

include("../newsletter/classes/dataCenter.php");
include("../newsletter/news/newsrepository.php");


$dc = new DataCenter();

$dc->Connect();

$newsRepo = new NewsRepository($dc);

$newsId	  = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$newsTitle=isset($_GET['title']) ? $_GET['title'] : "";
	//linkNewsUrl($Id, $title, $section)

if($newsId>0)
{
	//GetNews($newsId, $newsType, $fromDate, $toDate, $approvedById, $offset = 0, $recordsPerPage = 1, $active = -1, $userId)
	$tNews = $newsRepo->GetNews($newsId, "", "", "", 0, 0, 1, 1, 0);
	
	if($tNews && $tNews->rowsCount() > 0)
	{
		$row = $tNews->Rows[0];

		$slug = makeSlug($row->Heading); 
		if(strlen($newsTitle) <= 3){
			$rdurl="location:".linkNewsUrl($newsId, $slug, "alumni");
			header($rdurl);
			exit;
		}
		// preg_replace("/[^a-zA-Z0-9-]+/", "", preg_replace('!\s+!',"-", ( trim($row->Heading))));

        //echo $_GET['title'] . "<br/>";
        //echo $slug . "<br/>";

		if (strtolower($_GET['title']) === strtolower($slug)) {

            $TxtNewsDate = $row->Date;
            $TxtNewsTitle = $row->Title;
            $TxtNewsHeading = $row->Heading;
            $ChkShowHeading = $row->ShowHeading;
            $TxtNewsSubheading = $row->Subheading;
            $OptNewsType = $row->NewsType;
            $OptNewsFor = $row->NewsFor;
            $OpenAccess = $row->OpenAccess;
            $active = $row->Active;
        }
	}
	
	$title = $TxtNewsHeading;
}

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include_once("phpinclude/headercontrol.php");  ?>
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $purifier->purify(htmlentities(stripslashes(utf8_decode($title)))); ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>  
    <!-- Bootstrap progressbar  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css"/> 
    
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="../css/jquery.tosrus.all.css" />    

     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css?v=31" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <!-- Lato for Title -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"> 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->
  <!-- Start header -->
  <?php 
  	include("phpinclude/header.php");
  ?>
  <!-- End header -->
  <!-- Start login modal window -->
  <?php 
  	include("phpinclude/login_modal_window.php");
  ?>
  <!-- End login modal window -->
  <!-- BEGIN MENU -->
  <?php 
  	include("phpinclude/menuarea.php");
  ?>
  <!-- END MENU -->   
  <!-- Start single page header -->
  <section id="single-page-header">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-8 col-xs-12">
            <div class="single-page-header-left">
              <h2><?php echo $purifier->purify(htmlentities(stripslashes(utf8_decode($TxtNewsTitle)))); ?></h2>
              
            </div>
          </div>
         
          </div>
        </div>
      </div>
      </section>
  <!-- End single page header -->
  
  <!-- Start blog archive -->
  <section id="blog-archive">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-archive-area">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="blog-archive-left">
                  <!-- Start blog news single -->
                  <article class="blog-news-single">
                    
                    <div class="blog-news-details blog-single-details">
					<?php
                    if($newsId>0)
                    {
                        $response = true;

						//echo "OpenAccess: ".$OpenAccess."<br/>";
						if ($OpenAccess == 0) {
							$response = false;
							if( count($_SESSION['stdportal']) > 0 || 
								count($_SESSION['boarder']) > 0 || 
								count($_SESSION['parents']) > 0 || 
								count($_SESSION['stfportal']) > 0) {

								$response = true;
							}
						}

						if ( $response )
						{
							$_GET['mode']="view";
							$_GET['imagesPath'] = "../newsletter/news/";
							$templatePath = "../";

							include($templatePath."newsletter/news/templates/addtemplate.php");
						}
						else
						{
							//echo "response: " . $response;
							
						?>
							<div class="alert alert-info" role="alert">
								<h2 class="alert-heading">Note:</h2>
								<p>This page has been moved to Portal and no longer available offline.</p>

								<p>Please visit the Portal to see the required web-page.</p>

								<p>&nbsp;</p>
								<p>Thank You,</p>
								<br />
								<p>IT Department</p>
							</div>
						<?php
							//header("location: index.php");

						}


						
                    }?>
                    
                      <div class="blog-single-bottom">
                        <div class="row">
                          <div class="col-md-8">
                            <div class="blog-single-tag">
                             
                            </div>
                          </div> 
                          <div class="col-md-4">
                            <?php //include("sociallinks.php"); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                  <!-- Start blog navigation -->
      
					
                </div>
              </div>
              <div class="col-md-2"></div>             
            </div>
          </div>
        </div>
      </div>
    </div> 
	  
  </section>
  <!-- End blog archive -->
  <!-- Start footer -->
  <?php 
  	include("phpinclude/footer.php");
  ?>
  <!-- End footer -->
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>    
  <!-- mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
 <!-- counter -->
  <script src="assets/js/waypoints.js"></script>
  <script src="assets/js/jquery.counterup.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 
  <!-- progress bar   -->
  <script type="text/javascript" src="assets/js/bootstrap-progressbar.js"></script>  
  
 <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="../js/jquery.tosrus.min.all.js"></script>
    
  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>

<script>

jQuery(function($){
/*  11. GALLERY SLIDER
/* ----------------------------------------------------------- */
 $('#gallerySLide a').tosrus({
	  buttons: 'inline',
	  pagination  : {
		add     : true,
		type    : 'thumbnails'            
	  },
	  caption   : {
		add     : true
	  }
	});
});

</script>

  </body>
</html>
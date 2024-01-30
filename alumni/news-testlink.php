<?php
header('X-Frame-Options: SAMEORIGIN');
header('X-Content-Type-Options: nosniff');
header("X-XSS-Protection: 1");
header("Pragma: no-cache");
header("Cache-Control: no-cache, no-store, must-revalidate, private");
header("strict-transport-security: max-age=0");


//include("../newsletter/classes/functions.php");
include("../newsletter/classes/dataCenter.php");
include("../newsletter/news/newsrepository.php");


$dc = new DataCenter();

$dc->Connect();

$newsRepo = new NewsRepository($dc);

$newsId	  = isset($_REQUEST['id']) ? (int)$_REQUEST['id'] : 0;

if($newsId>0)
{
						//GetNews($newsId, $newsType, $fromDate, $toDate, $approvedById, $offset = 0, $recordsPerPage = 1, $active = -1, $userId)
	$tNews = $newsRepo->GetNews($newsId, "", "", "", 0, 0, 1, 1, 0);
	
	if($tNews && $tNews->rowsCount() > 0)
	{
		$row = $tNews->Rows[0];
		
		$TxtNewsDate 	   = $row->Date;
		$TxtNewsTitle	   = $row->Title;
		$TxtNewsHeading	   = $row->Heading;
		$ChkShowHeading	   = $row->ShowHeading;
		$TxtNewsSubheading = $row->Subheading;
		$OptNewsType	   = $row->NewsType;
		$active    	  	   = $row->Active;
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
    <title><?php echo htmlentities(stripslashes(utf8_decode($title))); ?></title>
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
    <link href="style.css" rel="stylesheet">

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
  	//include("phpinclude/login_modal_window.php");
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
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2><?php echo htmlentities(stripslashes(utf8_decode($TxtNewsTitle))); ?></h2>
              
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
                        $_GET['mode']="view";
                        $_GET['imagesPath'] = "../newsletter/news/";
						$templatePath = "../";
						
						include($templatePath."newsletter/news/templates/addtemplate.php");
						
                    }?>
                    
                      <div class="blog-single-bottom">
                        <div class="row">
                          <div class="col-md-8">
                            <div class="blog-single-tag">
                             <!-- <span class="fa fa-tags"></span>
                              <a href="#">Design,</a>
                              <a href="#">Photoshop,</a>
                              <a href="#">Development</a>https://aitchison.edu.pk/alumni/assets/images/careersevening2016-29112016/2.jpg-->
                            </div>
                          </div> 
                          <div class="col-md-4">
                            <div class="blog-single-social"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                  <!-- Start blog navigation -->
                  
                  <!-- Start Comment box 
                  <div class="comments-box-area">
                    <h2>Leave a Comment</h2>
                    <p>Your email address will not be published.</p>
                    <form action="" class="comments-form">
                       <div class="form-group">                        
                        <input type="text" class="form-control" placeholder="Your Name">
                      </div>
                      <div class="form-group">                        
                        <input type="email" class="form-control" placeholder="Email">
                      </div>
                       <div class="form-group">                        
                        <textarea placeholder="Comment" rows="3" class="form-control"></textarea>
                      </div>
                      <button class="comment-btn">Submit Comment</button>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-2"></div>             
            </div>
          </div>
        </div>
      </div>
    </div>  -->
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
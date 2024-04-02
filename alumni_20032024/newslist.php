<?php
include("phpinclude/main.php");
$title="Aitchison's Alumni News";


include("../newsletter/classes/functions.php");
include("../newsletter/classes/dataCenter.php");
include("../newsletter/news/newsrepository.php");


$dc = new DataCenter();

$dc->Connect();

$newsRepo = new NewsRepository($dc);

$tNews = $newsRepo->GetPublishedNewsForAlumniByLocationId( NewsLocations::Alumni );
//$tNews->PrintTable();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include_once("phpinclude/headercontrol.php");  ?>
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $title;?></title>
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
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2>News</h2>
            <!--  <p>The College organizes various events for you to reconnect with the Old Boys and the College, even long after you’ve left. <br><br>
Look out for upcoming events and mark your calendars in advance!
</p>-->
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
             <!-- <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Blog Archive</li>
              </ol> -->
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
              <div class="col-md-8">
                <div class="blog-archive-left">
                
                
				  <?php 
                    $imagesPath = "../newsletter/news/";
                    //$fileName = basename( $_SERVER['SCRIPT_FILENAME'] );
                    
                    if($tNews)
                    foreach($tNews->Rows as $row)
                    {
						$content1 = mysql_real_escape_string ( $row->Content1 );
						$content1 = strip_tags ( $content1 );
						$content  = $content1;
						
						$content2 = mysql_real_escape_string ( $row->Content2 );
						$content2 = strip_tags ( $content2 );
						
						if($content1==""||strlen($content1)==0) $content = $content2;
						
						if (strlen($content) > 300) {
							
							// truncate string
							$stringCut = substr($content, 0, 300);
							
							// make sure it ends in a word so assassinate doesn't become ass...
							$content = substr($stringCut, 0, strrpos($stringCut, ' ')). "..."; 
							$content = str_replace( "\\r\\n", "", $content );
						}
						
						$iconURL = $imagesPath.$row->NewsIcon;
						
						if ($row->NewsIconLink != "")
							$iconURL = $row->NewsIconLink;
						
                  ?>
                  <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img" style="height: auto;">
                      <a href="#" onClick="javascript:onViewNews(<?php echo $row->NewsId;?>);"><img src="<?php echo $iconURL; ?>" width="640" height="428" alt="<?php echo htmlentities(stripslashes(utf8_decode( $row->Subheading ))); ?>" class="img-responsive"></a>
                    </div>
                    <div class="blog-news-title">
                      <h2><a href="#" onClick="javascript:onViewNews(<?php echo $row->NewsId;?>);"><?php echo htmlentities(stripslashes(utf8_decode( $row->Heading ))); ?></a></h2>
                      <!--<p></p>-->
                      <p><?php echo htmlentities(stripslashes(utf8_decode( $row->Subheading ))); ?></p>
                      <p><span class="blog-date">|<?php echo $row->Date; ?></span></p>
                    </div>
                    <div class="blog-news-details">
                      <p align="justify"><?php echo $functions->replaceQuote($content); ?></p>
                 		<a class="blog-more-btn" href="#" onClick="javascript:onViewNews(<?php echo $row->NewsId;?>);">Read More<i class="fa fa-long-arrow-right"></i></a>
                    </div>
                  </article>
                  
			<?php } ?>
                 
                </div>
              </div>
              <div class="col-md-4">
                <aside class="blog-side-bar">
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                    <!-- Start blog search
                    <form>                    
                      <div class="search-group">                        
                        <button type="button" class="blog-search-btn"><span class="fa fa-search"></span></button>
                        <input type="search" placeholder="Search">
                      </div>                    
                    </form> -->
                    <!-- End blog search -->                                
                  </div>
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                    <h4 class="widget-title">Bulletin</h4>
                    <ul class="widget-catg">                      
                      <li><a href="#">News</a></li>
                      <li><a href="reminiscence.php">Reminiscence</a></li>
                      <!--<li><a href="contribute.php">Contribute</a></li>-->
                      <li><a href="alumni_profiles.php">Alumni Profiles</a></li>
                      <li><a href="shareyourstory.php">Share your Story</a></li>  
                	  
                    </ul>
                  </div>
                 
                
                </aside>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section>
  <!-- End blog archive -->

  <!-- Start subscribe us
  <section id="subscribe">
    <div class="subscribe-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subscribe-area">
              <h2>Subscribe Newsletter</h2>
              <form action="" class="subscrib-form">
                <input type="text" placeholder="Enter Your E-mail..">
                <button class="subscribe-btn" type="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- End subscribe us -->
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
    
   
  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>


<script>

function onViewNews(id)
{
	//$("#id").val(id);
	//document.forms["newsForm"].submit();
	
	//window.location = "ac-principal-news.php?id="+id;
	window.open("news-new.php?id="+id,'_blank');
}

</script>

  </body>
</html>
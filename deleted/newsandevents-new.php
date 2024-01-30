<?php
//include("standard/main.php"); 
$banner_image_url="img/pageimages/misc.jpg";
//$banner_text="About Aitchison College";
$banner_text="";
$default_open=0;


include("newsletter/classes/functions.php");
include("newsletter/classes/dataCenter.php");
include("newsletter/news/newsrepository.php");


//$functions = new Functions();
$dc = new DataCenter();

$dc->Connect();

$newsRepo = new NewsRepository($dc);

$newsId	   = isset($_REQUEST['id']) ? (int)$_REQUEST['id'] : 0;

if ($newsId > 0)
{
					//GetNews($newsId, $newsType, $fromDate, $toDate, $approvedById, $offset, $recordsPerPage, $active, $userId)
	$tNews = $newsRepo->GetNews($newsId, "", "", "", 0, 0, 1, 1, USER_ID);
	
	if($tNews && $tNews->rowsCount() > 0)
	{
		$row = $tNews->Rows[0];
		
		$TxtNewsDate 	   = $row->Date;
		$TxtNewsHeading	   = $row->Heading;
		$ChkShowHeading	   = $row->ShowHeading;
		$TxtNewsSubheading = $row->Subheading;
		$OptNewsType	   = $row->NewsType;
		$active    	  	   = $row->Active;
	}
	
}
else
{
	$tNews = $newsRepo->GetPublishedNewsByLocationId( NewsLocations::NewsEvents );
	//$tNews->PrintTable();
	$news = $tNews->Select(array("NewsType"=>array("News")));
	$notices = $tNews->Select(array("NewsType"=>array("Notice")));
	$events = $tNews->Select(array("NewsType"=>array("Event")));
	
	//$tParentMeetings = $newsRepo->GetParentMeetingsByLocationId( NewsLocations::NewsEvents );
	
	$tPrNewsletter = $newsRepo->GetPublishedNewsByLocationId( NewsLocations::PrNewsletter );
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- News & Events.</title>

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
    <link rel='stylesheet prefetch' href='css/circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css"> 
    <!-- preloader 
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
    <link href="css/sidemenu.css" rel="stylesheet">
    
   
    <!-- Google fonts -->
    <link href='//fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='//fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/sidemenu.js"></script>

<style>
	.feed_tabs li a {font-size: 16px;}
		  
</style>

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
      <h2><?php echo $banner_text;?></h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
	
    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
      <div class="container">
        <div class="row" style="min-height: 300px;">
          <!-- start course content -->
          <div class="col-lg-3 col-md-3 col-sm-3">
          <script>
				$(document).ready(function () {
				
					//active state  
					$(function () {
						$('a').click(function (e) {
							$('a').removeClass('active');
							$(this).addClass('active');
						});
					});
					$(function () {
						if (location.pathname.length > '1') {
							$('a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
						}
					});
					
					$(".submenu").hover(function () {
						if($(this).is(":visible")) {
							$(".glossymenu a").removeClass("active");
							$(this).prev().addClass("active");
						}
					},
					function(){    
						//$(this).prev().removeClass("active");            
					});
				});    
			</script>
			
            <?php include("phpinclude/sidmenu.php");?>
            <script type="text/javascript">            
				ddaccordion.init({
					headerclass: "submenuheader", //Shared CSS class name of headers group
					contentclass: "submenu", //Shared CSS class name of contents group
					revealtype: "mouseover", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
					mouseoverdelay: 400, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
					collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
					defaultexpanded: ["<?php echo $default_open;?>"], //index of content(s) open by default [index1, index2, etc] [] denotes no content
					onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
					animatedefault: false, //Should contents open by default be animated into view?
					persiststate: false, //persist state of opened contents within browser session?
					toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
					togglehtml: ["suffix", "<img src='img/plus.png' class='statusicon' />", "<img src='img/minus.png' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
					animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
					oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
						//do nothing
					},
					onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
						//do nothing
					}
				});
			</script>
          </div>
          <div class="col-lg-9 col-md-9 col-sm-9">
          	<div class="newsfeed_area wow fadeInRight">
            
            <?php
				if($newsId>0)
				{
					$_GET['mode']="view";
					$_GET['imagesPath'] = "newsletter/news/";
					$templatePath = "";
					
					include($templatePath."newsletter/news/templates/addtemplate.php");
					
				} else { ?>
                
            
            <ul class="nav nav-tabs feed_tabs" id="myTab2">
              <li class="active"><a href="#news" data-toggle="tab">News</a></li>
              <li><a href="#notice" data-toggle="tab">Notices</a></li>
              <li><a href="#events" data-toggle="tab">Events</a></li>
              <li><a href="#prnewsletter" data-toggle="tab">Principal's Newsletters</a></li>
              <li><a href="#alumninews" data-toggle="tab">Alumni Newsletters</a></li>
            </ul>
			
            <!-- Tab panes -->
            <div class="tab-content">
              
              <!-- Start news tab content -->
              <div class="tab-pane fade in active" id="news">
              	
                <ul class="news_tab">
                  
                  <?php 
					$imagesPath = "newsletter/news/";
                  	if($news)
				  	foreach($news as $row)
					{
						if ( $row->TemplateId == "6" && $row->Downloadable != "1" ) {
							$href = $row->Content1;
							//echo $href;
							$target = "_blank";
						}
						else {
							$href = "newsandevents-new.php?id=".$row->NewsId;
							$target = "";
						}
						
						if ($row->NewsIconLink == "")
							$newsIconLink = $imagesPath.$row->NewsIcon;
						else $newsIconLink = $row->NewsIconLink;
						
						$date = "";
						if ($row->ShowDate)
							$date = $row->Date;
						
						if ($row->Subheading2 != "")
							$date = $functions->replaceQuote($row->Subheading2);
						
				  ?>
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                        	<a class="news_img" href="<? echo $href; ?>" target="<? echo $target; ?>">
                              <img class="media-object" src="<?php echo $newsIconLink;?>" alt="img" class="img-responsive">
                            </a>
                        </div>
                        <div class="media-body">
                           <a href="<? echo $href; ?>" target="<? echo $target; ?>"><?php echo htmlentities(stripslashes(utf8_decode($row->Heading)));?></a>
                           <span class="feed_date"><?php echo $date;?></span>
                        </div>
                      </div>
                  </li>
                  
                  <?php } ?>
                  
                </ul>                
                	
                  <br /><br />
                  <div class="row">
                     <a style="padding: 2px 10px;" href="news-archive-new.php" rel="noopener noreferrer" class="btn btn-primary" role="button">News Archive</a>
                 </div>
              
              </div>
              
              <!-- Start notice tab content -->  
              <div class="tab-pane fade " id="notice">
                <div class="single_notice_pane">
                  <ul class="news_tab">
                    
                    <?php 
					
                  	if($notices)
				  	foreach($notices as $row)
					{
						if ($row->TemplateId == "6" && $row->Downloadable != "1" ) {
							$href = $row->Content1;
							//echo $href;
							$target = "_blank";
						}
						else {
							$href = "newsandevents-new.php?id=".$row->NewsId;
							$target = "";
						}
						
						if ($row->NewsIconLink == "")
							$newsIconLink = $imagesPath.$row->NewsIcon;
						else $newsIconLink = $row->NewsIconLink;
						
						
						$date = "";
						if ($row->ShowDate)
							$date = $row->Subheading2 == "" ? $row->Date : $functions->replaceQuote($row->Subheading2);
						
				  ?>
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="<? echo $href; ?>" target="<? echo $target; ?>">
                          <img class="media-object" src="<?php echo $newsIconLink;?>" alt="img" class="img-responsive">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="<? echo $href; ?>" target="<? echo $target; ?>"><?php echo htmlentities(stripslashes(utf8_decode($row->Heading)));?></a>
                           <span class="feed_date"><?php echo $date;?></span>
                        </div>
                      </div>
                  </li>
                  
                  <?php } ?>
                    
                  </ul>
                  
                </div>               
              </div>
              
              <!-- STARTED PARENTS MEETING CONTENTS  -->
              <div class="tab-pane fade" id="prnewsletter">                
                <ul class="news_tab">
                	
                    <?php 
					
                  	if($tPrNewsletter)
				  	foreach($tPrNewsletter->Rows as $row)
					{
						if ($row->NewsType == "URL") {
						$href = $row->Content1;
						$target = "_blank";
					}
					else {
						$href = "ac-principal-news.php?id=".$row->NewsId;
						$target = "";
					}
					$date = "&nbsp;";
					if ($row->ShowDate)
						$date = $row->Date;
					?>
					<div class="col-lg-12 col-md-12 col-sm-12 media" style="vertical-align:top; padding-left:0px">
						<a href="<? echo $href; ?>" target="<? echo $target; ?>" style="text-decoration:none;">
							<img class="img-thumbnail" style="display: inline-block;vertical-align:top; margin-right:10px;padding: 0px;" src="img/nl-img50x50.png" />
							<div style="display: inline-block;font-size:18px;"><?php echo htmlentities(stripslashes(utf8_decode($row->Heading)));?><br />
							<span style="font-size:16px;color:#818181;"><?php echo $date;?></span></div>
						</a>
						
					</div>
                  
                  <?php } ?>
                    
                </ul>
                
                <div class="row" style="text-align: right;">
                    <a style=" margin-top: 40px; padding: 2px 10px;" href="ac-ppast_newsletter.php" rel="noopener noreferrer" class="btn btn-primary" role="button">Newsletter Archive</a>
                </div>
                
              </div>
              <!-- ENDED PARENTS MEETING CONTENTS  -->
              
              <!-- Start events tab content -->
              <div class="tab-pane fade " id="events">
                <ul class="news_tab">
                	
                    
                    <?php 
					
                  	if($events)
				  	foreach($events as $row)
					{
						if ($row->TemplateId == "6" && $row->Downloadable != "1" ) {
							$href = $row->Content1;
							//echo $href;
							$target = "_blank";
						}
						else {
							$href = "newsandevents-new.php?id=".$row->NewsId;
							$target = "";
						}
						
						if ($row->NewsIconLink == "")
							$newsIconLink = $imagesPath.$row->NewsIcon;
						else $newsIconLink = $row->NewsIconLink;
						
						$date = "";
						if ($row->ShowDate)
							$date = $row->Subheading2 == "" ? $row->Date : $functions->replaceQuote($row->Subheading2);
						
				  ?>
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="<? echo $href; ?>" target="<? echo $target; ?>">
                          <img class="media-object" src="<?php echo $newsIconLink;?>" alt="img" class="img-responsive">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="<? echo $href; ?>" target="<? echo $target; ?>"><?php echo htmlentities(stripslashes(utf8_decode($row->Heading)));?></a>
                           <span class="feed_date"><?php echo $date;?></span>
                        </div>
                      </div>
                  </li>
                  
                  <?php } ?>
                    
               		<!--<li style="border: none !important;">
                    	<div class="media-body">
                       		<a href="ac-parents-login.php">To see latest events, please login to portals.</sup></a>
                      </div>
                    </li>   -->      
                </ul>
              </div>
              <!-- ENDED events CONTENTS  -->
              
              <!-- Start alumni newsletter tab content -->
              <div class="tab-pane fade" id="alumninews">                
                <ul class="news_tab">
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="aalumni/newsletter.php">
                          	<img class="media-object" src="./img/nne_logo.png" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                           <a href="alumni/newsletters/newsletter-july-2017.pdf" target="_blank">Alumni Newsletter July 2017</a>
                           <!--<span class="feed_date" style="color:rgba(47,44,44,1.00);"></span>-->
                        </div>
                      </div>
                  </li>
                  
                </ul>                
                
              </div>
              <!-- ENDED alumni newsletter CONTENTS  -->
              
            </div>
            <?php } ?>
            
          </div> <!--wow-->
          </div>
          <!-- End course content -->
			
          <!-- start course archive sidebar -->
          
          <!-- start course archive sidebar -->
        </div>
      </div>
    </section>
    
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN FOOTER SECTION ================-->
    <?php include("phpinclude/footer.php");?>
    <!--=========== END FOOTER SECTION ================--> 

  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    
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
    <script language="javascript" src='/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <?php
    /*
	if(empty($_SESSION['mynotify'])){
		$_SESSION['mynotify']="Show Me.";
    	if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')){
	?>
    		<script src="js/notifications.js"></script>
    <?php
		}
  }
  */
	?>
    <script src="js/custom1.js"></script>
    
    
  </body>
</html>
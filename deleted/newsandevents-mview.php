<?php
session_start();

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
		$OpenAccess		   = $row->OpenAccess;
		$active    	  	   = $row->Active;
	}
	
}
else
{
	$tNews = $newsRepo->GetPublishedNewsByLocationId( NewsLocations::NewsTestLink );
	//$tNews->PrintTable();
	$news = $tNews->Select(array("NewsType"=>array("News", "URL")));
	$notices = $tNews->Select(array("NewsType"=>"Notice"));
	
	$tParentMeetings = $newsRepo->GetParentMeetingsByLocationId( NewsLocations::NewsTestLink );
	
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- News &amp; Events.</title>

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

  </head>
  <body> 

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->
    
    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive" style="padding: 10px 0px;">
      <div class="container">
        <div class="row" style="min-height: 300px;padding-left: 20px;padding-right: 20px;">
          <!-- start course content -->
          
          	<div class="newsfeed_area wow fadeInRight">
            
            <?php
				if($newsId>0)
				{
					$response = true;
					
					//echo "OpenAccess: ".$OpenAccess."<br/>";
					if ($OpenAccess == 0) {
						$response = false;
						
					}
					
					if ( $response )
					{
						$_GET['mode']="view";
						$_GET['imagesPath'] = "newsletter/news/";
						$templatePath = "";
						
						include($templatePath."newsletter/news/templates/addtemplate.php");
					}
					
				} else { ?>
                
            
            <ul class="nav nav-tabs feed_tabs" id="myTab2">
              <li class="active"><a href="#news" data-toggle="tab">News</a></li>
              <li><a href="#notice" data-toggle="tab">Notices</a></li>
              <li><a href="#events" data-toggle="tab">Events</a></li>
              <li><a href="#pmeeting" data-toggle="tab">Parents' Meetings</a></li>
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
						if ($row->NewsType == "URL") {
							$href = $row->Content1;
							$target = "_blank";
						}
						else {
							$href = "newsandevents-testlink.php?id=".$row->NewsId;
							$target = "";
						}
				  ?>
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                        	<a class="news_img" href="<? echo $href; ?>" target="<? echo $target; ?>">
                              <img class="media-object" src="<?php echo $imagesPath.$row->NewsIcon;?>" alt="img" class="img-responsive">
                            </a>
                        </div>
                        <div class="media-body">
                           <a href="<? echo $href; ?>" target="<? echo $target; ?>"><?php echo $row->Heading;?></a>
                           <span class="feed_date"><?php echo $row->Date;?></span>
                        </div>
                      </div>
                  </li>
                  
                  <?php } ?>
                  
                </ul>                
                	
                  <br />
                  
              </div>
              
              <!-- Start notice tab content -->  
              <div class="tab-pane fade " id="notice">
                <div class="single_notice_pane">
                  <ul class="news_tab">
                    
                    <?php 
					
                  	if($notices)
				  	foreach($notices as $row)
					{
				  ?>
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="newsandevents-testlink.php?id=<? echo $row->NewsId; ?>">
                          <img class="media-object" src="<?php echo $imagesPath.$row->NewsIcon;?>" alt="img" class="img-responsive">
                        </a>
                        </div>
                        <div class="media-body">
                           <a href="newsandevents-testlink.php?id=<? echo $row->NewsId; ?>"><?php echo $row->Heading;?></a>
                           <span class="feed_date"><?php echo $row->Date;?></span>
                        </div>
                      </div>
                  </li>
                  
                  <?php } ?>
                    
                  </ul>
                  
                </div>               
              </div>
              
              <!-- STARTED PARENTS MEETING CONTENTS  -->
              <div class="tab-pane fade" id="pmeeting">                
                <ul class="news_tab">
                	
                    <?php 
					
                  	if($tParentMeetings)
				  	foreach($tParentMeetings->Rows as $row)
					{
				  ?>
                  
                  <li>
                      <div class="media">
                        <div class="media-left">
                          <a target="_blank" class="news_img" href="javascript:void(0);">
                          	<img class="media-object" src="<?php echo $imagesPath.$row->NewsIcon;?>" alt="img" class="img-responsive">
                          </a>
                        </div>
                        <div class="media-body">
                        	<a target="_blank" href="javascript:void(0);"><?php echo $row->Content1; ?></a>
                        </div>
                      </div>
                  </li>
                  
                  <?php } ?>
                    
                </ul>
              </div>
              <!-- ENDED   PARENTS MEETING CONTENTS  -->
              
              <!-- Start events tab content -->
              <div class="tab-pane fade " id="events">
                <ul class="news_tab">
               		<li style="border: none !important;">
                    	<div class="media-body">
                       		<a href="ac-parents-login.php">To see latest events, please login to portals.</sup></a>
                      </div>
                    </li>         
                </ul>
              </div>
            </div>
            <?php } ?>
            
          </div> <!--wow-->
          
          <!-- End course content -->
			
        </div>
      </div>
    </section>
    
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
    
    <script src="js/custom1.js"></script>
    
    
  </body>
</html>
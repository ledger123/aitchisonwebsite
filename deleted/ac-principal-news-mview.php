<?php

include("newsletter/classes/functions.php");
include("newsletter/classes/dataCenter.php");
include("newsletter/news/newsrepository.php");


//$functions = new Functions();
$dc = new DataCenter();

$dc->Connect();

$newsRepo = new NewsRepository($dc);

$newsId = isset($_REQUEST['id']) ? (int)$_REQUEST['id']	: 0;


if($newsId>0)
{
	$tNews = $newsRepo->GetNews($newsId, "", "", "", 0, 0, 1, 1, USER_ID );
	//$news = $newsRepo->GetNews( $id, "", "", "", 0, 0, 1, 1, USER_ID );
	
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
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aitchison College:- Principal's Newsletter</title>
	
    <!-- Mobile Specific Metas
    ================================================== -->
    <link rel="shortcut icon" href="/nne_logo.ico" type="image/x-icon">
    <link rel="icon" href="/nne_logo.ico" type="image/x-icon">	
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    
    <!-- Circle counter cdn css file -->
    <link href='//fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> 
    
    <link rel="stylesheet" href="css/animate.css">
    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
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
          
          
          <?php
			if($newsId>0)
			{
				$_GET['mode']="view";
				$_GET['imagesPath'] = "newsletter/news/";
				$templatePath = "";
				
				include($templatePath."newsletter/news/templates/addtemplate.php");
				
			}?>
            
          </div>
      </div>
      
    </section>
    
    
    <!-- Javascript Files
    ================================================== -->
	
    <!-- initialize jQuery Library -->
    
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/jquery.easing.1.3.js"></script>
    
    <!-- Custom js-->
    <script src="js/custom.js"></script>
    
  </body>
</html>
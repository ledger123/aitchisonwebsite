<?php
	include("phpinclude/main.php");
	$p_id=!empty($_GET['p_id'])?intval($_GET['p_id']):0;
	$title_get=!empty($_GET['title'])?$_GET['title']:"";
	//alumni_profiles.php
	if(strlen(trim($_GET['p_id'])) != strlen(intval($p_id))){
		header("location: alumni_profiles.php");
		exit();	
	}
	$record=$db->getSingleRow("SELECT * FROM alumnistdprofiles where id='$p_id' and status='Active' and delstatus='Not Deleted'");
	if(count($record) <= 0){
		header("location: alumni_profiles.php");
		exit();
	}
	if($title_get != makeSlug($record['name'])){		
		header("location: alumni_profiles.php");
		exit();
	}
	$title="Aitchisonian's Alumni Profiles :- ".$record['name'];
	
?><!DOCTYPE html>
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
    <style>
    .divarea{
		width: 90%;
		margin: auto;
		padding: 0px 0 4px 0;
		/*border: #0B52E3 solid thin;*/	
	}
	.divarea  img{
		width: 260px;
		height: 260px;
		padding: 4px 0 14px 0;
			
	}
	.std_name{
		color: red;
		font-size: 2.0em;
		font-weight: bold;
		overflow: hidden;
		padding: 8px 0 8px 0;	
	}
	.std_name1{
		font-size: 1.2em;
		font-weight: bold;
		overflow: hidden;
		padding: 28px 0 8px 0;	
	}
	.contents{
		border-top: #858585 solid thin;
		border-bottom: #858585 solid thin;
		font-size: 12px;
		font-weight: bold;
		width: 95%;
		padding: 8px 0 8px 0;
	}
	.mycontents{
		width: 95%;
		padding: 28px 0 8px 0;	
	}
	.mycontents p{
		text-align: justify;
		line-height: 2.0em;	
	}
	.whereareyounow{
		border: #EDD00D thin solid;
		border-radius: 35px 0px 35px 0px;
		padding: 5px 25px 5px 15px;
		margin-left: 10px;
		width: 90%;
	}
    </style>
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
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2>ALUMNI PROFILES</h2>
              <p></p>
            </div>
          </div>
          <!--<div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Contact</li>
              </ol>
            </div>
          </div>-->
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->
  <!-- Start contact section  -->
  <section id="contact">
     <div class="container">
     	<div class="row">
        	<div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-12">
            	<div class="row">
                   <div class="std_name"><?php echo $record['name'];?></div>
                    <div class="col-lg-8 col-md-8 col-sm-12">
                    
                        <div class="row">
                           
                           <div class="contents">
                                <?php echo $record['designation'];?>
                           </div>
                           <div class="mycontents">
                           		<?php echo $record['description'];?>
                           </div>
                           <div class="row" style="padding-top: 30px;">
                              <div class="col-md-8">
                                <div class="blog-single-tag">
                                 <!-- <span class="fa fa-tags"></span>
                                  <a href="#">Design,</a>
                                  <a href="#">Photoshop,</a>
                                  <a href="#">Development</a>-->
                                </div>
                              </div> 
                              <div class="col-md-4">
                                
                              </div>
                            </div>
                       </div>
                    </div>
                   <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="divarea">
                        <img src="studentpics/<?php echo $record['sypicture'];?>"/>
                        <!--<div class="std_name">Sheheryar Hafeez</div>
                        <div class="contents">
                            Software Engineer, Aitchison College.
                        </div>-->
                    </div>
                    <div class="whereareyounow">
                       <h4 class="std_name1">Where Are You Now?</h4>
                       <p align="justify">Send in 100 – 200 words about your accomplishments, along with your picture, and we will share your story. <a href="shareyourstory.php">Click here</a> to make your submission. </p>
                       <p align="justify">Alternatively, &nbsp;you can send us an email at alumniofficer@aitchison.edu.pk </p>
                    </div>  
                    
                   </div>
                   <!--<div class="row" id="mypagination">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                        PAGINATION PAGE:
                        </div>
                   </div>-->
                 </div>
                 
            </div>
        </div>
     </div>
  </section>
  <!-- End contact section  -->
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
    
  </body>
</html>
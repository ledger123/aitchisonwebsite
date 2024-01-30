<?php
	include("standard/main.php"); 
	$banner_image_url="img/banner.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=2;
	
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
<style>
  	.sport-gallery-menu{
	  display: inline;
	  float: left;
	  text-align: center;
	  padding: 0 20px;
	  width: 100%;
	}
	
	.sport-gallery-menu ul li {
	  border: 1px solid #ccc;
	  cursor: pointer;
	  display: inline-block;
	  margin: 0 5px;
	  padding: 6px 15px;
	  text-transform: uppercase;
	  -webkit-transition: all 0.5s;
	  -o-transition: all 0.5s;
	  transition: all 0.5s;
	}
	
	.sport-gallery-menu ul li:hover,
	.sport-gallery-menu ul li.active{  
	  color: #fff;
	}

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
      <h2></h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN GALLERY SECTION ================-->
    <section id="gallery">
      <div class="container">
      	<!--<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            	<div class="sport-gallery-menu">
                     <ul>
                       <li class="filter" data-filter="all"><a onClick="showDiv('gallerySLide')">All</a></li>
                       <li class="filter" data-filter=".cricket"><a onClick="showDiv('gallerySLideCricket')">Cricket</a></li>
                       <li class="filter" data-filter=".hockey"><a onClick="showDiv('gallerySLideHockey')">Hockey</a></li>
                       <li class="filter" data-filter=".football"><a onClick="showDiv('gallerySLideFootball')">Football</a></li>
                       <li class="filter" data-filter=".riding"><a onClick="showDiv('gallerySLideRiding')">Riding</a></li>
                       <li class="filter" data-filter=".swimming"><a onClick="showDiv('gallerySLideSwimming')">Swimming</a></li>
                       <li class="filter" data-filter=".others"><a onClick="showDiv('gallerySLideOthers')">Others</a></li>
                     </ul>
                   </div>
            </div><br><br><br>

        </div>-->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div id="gallerySLide" class="gallery_area">
            	<?php
				$gal_title="Around the Schools";	
				for($i=1; $i <= 12; $i ++){
				?>
                <a href="sportsgal/aboutschools/<?php echo $i;?>.jpg" title="<?php echo $gal_title;?>">
                       <img class="gallery_img" src="sportsgal/aboutschools/small/<?php echo $i;?>.jpg" alt="img" />
                       <span class="view_btn"><?php echo $gal_title;?></span>
                </a>
                <?php
				}
				?>                
            </div>
            <div id="gallerySLideCricket" class="gallery_area">
            	<?php	
				for($i=1; $i <= 20; $i ++){
				?>
                <a href="sportsgal/cricket/small/<?php echo $i;?>.jpg" title="Cricket">
                       <img class="gallery_img" src="sportsgal/cricket/small/<?php echo $i;?>.jpg" alt="img" />
                       <span class="view_btn">Cricket</span>
                </a>
                <?php
				}
				?>
            </div>
            <div id="gallerySLideHockey" class="gallery_area">
            	<?php	
				for($i=1; $i <= 8; $i ++){
				?>
                <a href="sportsgal/hockey/small/<?php echo $i;?>.jpg" title="Hockey">
                       <img class="gallery_img" src="sportsgal/hockey/small/<?php echo $i;?>.jpg" alt="img" />
                       <span class="view_btn">Hockey</span>
                </a>
                <?php
				}
				?>
            </div>
            <div id="gallerySLideFootball" class="gallery_area">
            	<?php	
				for($i=1; $i <= 16; $i ++){
				?>
                <a href="sportsgal/football/small/<?php echo $i;?>.jpg" title="Football">
                       <img class="gallery_img" src="sportsgal/football/small/<?php echo $i;?>.jpg" alt="img" />
                       <span class="view_btn">Football</span>
                </a>
                <?php
				}
				?>
            </div>
            <div id="gallerySLideRiding" class="gallery_area">
            	<?php	
				for($i=1; $i <= 8; $i ++){
				?>
                <a href="sportsgal/riding/small/<?php echo $i;?>.jpg" title="Riding">
                       <img class="gallery_img" src="sportsgal/riding/small/<?php echo $i;?>.jpg" alt="img" />
                       <span class="view_btn">Riding</span>
                </a>
                <?php
				}
				?>
            </div>
            <div id="gallerySLideSwimming" class="gallery_area">
            	<?php	
				for($i=1; $i <= 8; $i ++){
				?>
                <a href="sportsgal/swimming/small/<?php echo $i;?>.jpg" title="Swimming">
                       <img class="gallery_img" src="sportsgal/swimming/small/<?php echo $i;?>.jpg" alt="img" />
                       <span class="view_btn">Swimming</span>
                </a>
                <?php
				}
				?>
            </div>            
            <div id="gallerySLideOthers" class="gallery_area">
            	<?php	
				for($i=1; $i <= 20; $i ++){
				?>
                <a href="sportsgal/others/small/<?php echo $i;?>.jpg" title="Others">
                       <img class="gallery_img" src="sportsgal/others/small/<?php echo $i;?>.jpg" alt="img" />
                       <span class="view_btn">Others</span>
                </a>
                <?php
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
    <script src="js/custom_sports.js"></script>
    <script language="javascript">
    	function showDiv(slidearea){
			//alert("a"+slidearea);
			/*
				gallerySLideCricket
				gallerySLide
				gallerySLideCricket
				gallerySLideHockey
				gallerySLideFootball
				gallerySLideRiding
				gallerySLideSwimming
				gallerySLideOthers
				document.getElementById('training-'+ids).style.display="none";
			*/
			//alert("AAA"+slidearea);
			document.getElementById("gallerySLide").style.display="none";
			document.getElementById("gallerySLideCricket").style.display="none";
			document.getElementById("gallerySLideHockey").style.display="none";
			document.getElementById("gallerySLideFootball").style.display="none";
			document.getElementById("gallerySLideRiding").style.display="none";
			document.getElementById("gallerySLideSwimming").style.display="none";			
			document.getElementById("gallerySLideOthers").style.display="none";
			document.getElementById(slidearea).style.display="table-row";
			//alert(slidearea);
		}
		showDiv("gallerySLide");
    </script>

  </body>
</html>
<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/ps.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=1;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Prep School</title>

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

	.image-right {
		float:right;
		margin: 0px 0px 35px 30px;
		width: 180px;
		height: 234px;
	}
	.image-right > img {
		width: 180px;
		height: 234px;
	}
@media(max-width:767px ){
	.image-right {
		float:right;
		margin: 0px 0px 35px 15px;
		width: 200px;
		height: 260px;
	}
	.image-right > img {
		width:100%;
		height: 100%;
	}
}
@media(max-width:320px ){
	.image-right {
		float:right;
		margin: 0px 0px 50px 0px;
		width: 262px;
		height: 325px;
	}
	.image-right > img {
		width:100%;
		height: 100%;
	}
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
          	<div class="aboutus_area wow fadeInLeft">
            <h2 class="titile">Prep School</h2>
            <div class="row">
            <div class="col-sm-12" align="justify">
  <div class="image-right">
  <img src="img/pageimages/raja_hmps.jpg" class="img-rounded" alt="Cinque Terre">
  <br>
	  <div align="center">
  		<em style="font-size: 13px;">Raja Ashfaq<br/>Headmaster Prep School</em>
	  </div>
  </div>
  
    <p>Prep School is an inspiring environment for boys who are quickly maturing and eager to express opinions. We aim to set our boys on the path toward being lifelong learners with inquisitive, objective minds. We emphasise mastery of subjects and a strong basis in knowledge and concepts from which to launch into senior studies. Equally, we strive to instill the values of an ethical person; a young gentleman - <em>an Aitchisonian</em>.</p>
    
    <p>Subjects offered at Prep School include: Cambridge core studies in English, Mathematics, Science, added to which are the compulsory studies of Urdu, Islamyiat and Pakistan Studies (History and Geography), Art, and choices of classical and modern languages: Arabic, Persian, Mandarin, German and French. Computer studies is integrated into core subjects. Coding is compulsory and we offer robotics. </p>
    

    <p>We have a purpose built academic block with spacious classrooms, covered walkways, and four well-equipped Science Labs and Prep Room. Three state of the art Computer Studies labs have multimedia, 3-D printers and interactive smart boards, while all classrooms offer digital projection facilities. In addition to the <em>Syed Babar Ali Library</em>, Prep School has its own library which is enjoyed by pupils on a daily basis in private research and reading groups in Literature. Modern canteens provides fresh food items during two daily breaks from class. </p>
    
    
    <p>In addition to formative testing or progression testing, the Prep School conducts major Examinations each calendar year in Terms 1 and  3 making it an effective semester system of 18 weeks each. </p>
    
    
    <p>Debating (English &amp; Urdu), Recitation (English &amp; Urdu), Qira`t, Quiz competitions, Essay writing (English &amp; Urdu), Hand writing (English &amp; Urdu) are some of the competitions held among Houses on a regular basis. In addition, boys are encouraged to join at least two clubs/societies from among choices of Dramatics Club, Computer Society, Mathematics Society, Quiz Society, Chess Society, Debating Society, Music Society, Nature Club, Foreign Language Club, Art &amp; Photo Clubs, and Aero-Modeling Club.<br>
    </p>
    
    
    <p>In the field of Games and Sports, we offer Athletics, Cricket, Swimming, Horse Riding, Lawn and Hardcourt Tennis, Squash, Table Tennis, Badminton, Basketball, Football, and Hockey. With the exception of compulsory swimming, at least two other games must be played. Sport is compulsory in weekly PE lessons. </p>
    
    
    <p>Prep School boys organize and conduct Annual Inter-School competitions for English Debates, Urdu Debates and General Knowledge Quizzes. The young writers of Prep School publish an annual School Magazine called <em>PREPPY </em>in which are published student articles in English, Urdu and Foreign languages. To enhance aesthetic and artistic values, boys take part in an Annual Art Competition. Boys produce annual English and Urdu plays. With the guidance of staff they manage the adaptation, sets, lighting, sound and direction –and of course acting.  </p>
    
    
    <p>Prep School is a broad, busy experience in the vital years of young adolescence. Our discipline is strong but compassionate. We expect boys to uphold Aitchison's code of honour whereby bullying and harassment are banished as utterly unworthy of an Aitchisonian. <br>
    </p>
            </div>
            <div>
			<div class="" align="center" style="margin-top: 15px;">
					<div id="gallerySLide" class="sgallery_area">
						
						<?php
						$imgPath = "img/pageimages/gallery/pschool/";
						$imgPathSmall = "img/pageimages/gallery/pschool/small/";
						
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$imgTitle[] = array("Prep School", "Prep School");
						$school_arrays = array("1", "4", "2", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "16",  "19", "24", "17", "21", "22", "25", "27", "31", "34" , "35", "30", "29", "32", "33");
							
						//for ($i = 1; $i < 28; $i++) {						
						foreach($school_arrays as $value){
							$i=intval($value);
							if(!file_exists($imgPath.$i.".jpg")){
								continue;
							}
						?>
						<a href="<?php echo $imgPath . $i . ".jpg"; ?>" title="Prep School">
                          <img class="gallery_img" src="<?php echo $imgPathSmall . $i . ".jpg"; ?>" alt="img">
                          <span class="view_btn">Prep School</span>
                        </a>
                        
						<?php
						}
						?>
                    </div>
					
				</div>	
             
              
            </div><div>
            </div>
            <p>&nbsp;</p>
          	</div>
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
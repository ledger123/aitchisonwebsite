<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=0;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Archive</title>

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
    <link rel='stylesheet prefetch' href='css/circliful.css'><!-- smooth animate css file -->
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
body { color: #000; }

p { text-align:justify; }
	#lstArchive {
	  display: flex;
	  flex-wrap: wrap;
	  padding-left: 0;
		
	}
#lstArchive li { margin-bottom:15px; flex: 0 0 30%;}
	@media (max-width: 1024px) {
		#lstArchive li { margin-bottom:15px; flex: 0 0 45%;}
		#header {
			height: 6.0em;
			background-color: #000033;
		}
	}
	@media (max-width: 767px) {
		#lstArchive li { margin-bottom:15px; flex: 0 0 90%;}
		.navbar-brand {
			max-width: 120px;
		}
	}
	
	@media (max-width: 480px) {
		#lstArchive li { margin-bottom:15px; flex: 0 0 90%;}
		#header {
			height: 4.8em;
		}
	}
	
	@media (max-width: 991px) {
		#header {
			height: 10.0em;
		}
	}
	
	
	
.videos {
  margin: 0 auto;  
}
.videos video {
  width: 65%;
  display: block;
  margin-top: 5px;
  border:2px #939393 solid;
}
.videos:before {
  content: '';
  background: #000;
  border-radius: 5px;
}

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
	
	#gallery {
    	padding: 0;
	}
	
	#gallery {
		/*background-image: url(img/pageimages/misc.jpg);
		background-repeat: no-repeat;
		background-color:rgba(0,0,0,0.5);*/
		
		/*background: rgba(1,1,1,0.1) url("img/archives/background-trans.jpg") no-repeat center;
		opacity: 1.0;
		background-size: auto auto;*/
	}
	
	.container {
		/*opacity: 1.0;*/
	}	
</style>
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/full-slider.css" rel="stylesheet">
  <?php 
	include_once("phpinclude/cssfiles.php"); 
  ?>	  
  </head>
  <body> 

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <?php include("phpinclude/header.php");?>
    <!--=========== END HEADER SECTION ================--> 
	
    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <!--<section id="imgBanner" style=" background-image: url(<?php //echo $banner_image_url; ?>);">
      <h2><?php //echo $banner_text; ?></h2>
    </section>-->
    
    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 300px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 300px; overflow: hidden;">            
            <div data-p="225.00" style="display: none;">            	
                <img data-u="image" src="img/archives/banners/1.png" />                
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/archives/banners/2.png" />                
            </div>
            
            <div data-p="225.00" style="display: none;">            	
                <img data-u="image" src="img/archives/banners/3.png" />                
            </div>
            <div data-p="225.00" style="display: none;">            	
                <img data-u="image" src="img/archives/banners/4.png" />                
            </div>
            <div data-p="225.00" style="display: none;">            	
                <img data-u="image" src="img/archives/banners/5.png" />                
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/archives/banners/6.png" />                
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/archives/banners/7.png" />                
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/archives/banners/8.jpg" />                
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="img/archives/banners/9.jpg" />                
            </div>

 		</div>
           

 	</div>

	<div>
        
        
    </div>            

    
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
        
        <!--=========== BEGIN Tabs SECTION ================-->
        <section id="gallery">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="sport-gallery-menu">
                         <ul id="lstArchive" style="flex-wrap: wrap;">
                           <li class="filter" data-filter="DepartmentSlide" style=""><a id="lnkDepartment" onClick="showDiv('DepartmentSlide')">Archives Department</a></li>
                           <li class="filter" data-filter="ContributeSlide"><a onClick="showDiv('ContributeSlide')">Contribute to Archives</a></li>
                           <li class="filter" data-filter="MuseumSlide"><a onClick="showDiv('MuseumSlide')">College Museum</a></li>
						   <li class="filter" data-filter="ArchivesSocietySlide">
							   <a onClick="showDiv('ArchivesSocietySlide')">College Archives Society</a>
						   </li>  	 
                           <li class="filter" data-filter="CollectionsSlide"><a onClick="showDiv('CollectionsSlide')">Available Collections</a></li>
                           <!--<li class="filter" data-filter="AGallerySlide"><a onClick="showDiv('AGallerySlide')">Gallery</a></li>-->                           
                           <li class="filter" data-filter="HelpupSlide"><a onClick="showDiv('HelpupSlide')">Can you Help us? </a></li>
						   <li class="filter" data-filter="FaqSlide"><a onClick="showDiv('FaqSlide')">FAQ’s</a></li>	 
                           <li class="filter" data-filter="ContactSlide"><a onClick="showDiv('ContactSlide')">Contact</a></li>
                         </ul>
                     </div>
                </div>
                <br><br><br>
    		
            </div>
            <br>
			
            <div id="runningcontent" class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div id="DepartmentSlide" class="gallery_area">
                	<h2>Archives Department</h2>
                	<p style="display:none;">After the Annexation of the Punjab by the East India Company, a proposal was laid down in 1864 by a Captain Tighe (then Deputy Commissioner, Umballa, Punjab) to build an institution for the Punjabi Sardars. This suggestion was later reformed into a School for Wards of Court continuing the foundational basis of teaching the young Sardars. The proposal fell into the hands of the Lieutenant-Governor Sir Charles Aitchison in May 1885, who further developed the ideology by laying the foundations of the school. It has been reported that the school was to serve education to young men from the ruling families, good families, and the minors under the guardianship of Wards of Court. It was named the Punjab Chief’s College which was later renamed as the Aitchison College in 1886. The history of the College can be traced 'unofficially' to 1868, although the foundation stone of this building was laid on the 3rd November, 1886, by Viceroy Lord Dufferin and Ava.</p>
                    <p>Aitchison College has a rich past that is vital to preserve, conserve and exhibit, including invaluable historical narratives as well as documents in all forms. To honor and preserve the heritage of this astounding institute, the Archives Department has been setup to restore archive material since the College’s inception.</p>
                    <p>One of our chief aims is to collect and save personal experiences of the Alumni, Faculty and Staff in regards to their time spent in/with the College. These experiences will be documented in the shape of Oral Histories. We also wish to collect photographs, manuscripts, letters, medals or any other archival material which is related to your past in Aitchison. The Archives Centre seeks to become a bridge that connects the past with the present. It is our aim therefore that Aitchison’s Archive Centre will serve as a beacon of guidance and knowledge for the years to come.</p>
                </div>
				<div id="ArchivesSocietySlide" class="gallery_area">
                	<h2>College Archives Society</h2>
                	
                    <p>The College Archives Society is currently examining Principals' letters from 1911 to 1933, which were personally written by Frederick Leslie-Jones and James Kelly, among other examples from key staff of the period. Kelly served as Leslie-Jones' vice for 13 years prior to assuming the reins. The original school farm occupied much of their time and concerns as it was a vital component of the school's early financial viability. 'Diseases, discipline and directives' might be a way of summing up much of the early days focussed solely on boarding life. Our Archives team is preparing a special exhibition in 2021.

 </p>
                </div>  
                <div id="ContributeSlide" class="gallery_area">
                	<h2>Contribute to Archives</h2>
                	<p>Our Archives department keeps all available records and displays many of these in the New Archives Centre. The Collection is revised as more material is processed, donated or collected. Great efforts are being made to preserve and conserve our archival material as we are aware of their invaluable significance. We have also started to digitize our archives and aim to continue this process as it is vital for preservation. A vast amount of material exists in our storage such as photographs, records, manuscripts, medals, cups, trophies, letters (typed and hand written), along with various other objects and documents.</p>
                    <p>If you wish to donate/loan out or give copies of your collections to the Archives Department or make an appointment for our Oral History Interview segment, kindly email at <span style="color:#000099;">archivist@aitchison.edu.pk</span>.</p>
                </div>
                <div id="MuseumSlide" class="gallery_area">
                	<h2>College Museum</h2>
                    <div class="row" style="margin-bottom:20px;">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <p>On Monday 13<sup>th</sup> November, 2017, the newly established Archives’ Display Centre was officially inaugurated at the Aitchison College <em>Mandir</em>. The building has been sensitively utilized for showcasing Archival material. The inaugural exhibition showcased some of the earliest pieces of the College’s history from 1886 to 1953. The selected pieces provided a glimpse into life at Aitchison College before and after the 1947 Partition. The Archives Centre has been established to preserve, conserve and exhibit invaluable historical narratives and artefacts that reflect the rich past of Aitchison College. Aitchison’s Archive Centre is now a permanent feature of the College.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6" style="margin-bottom: 15px;">
                            <img src="img/archives/archives-display-center-2.png" alt="Archives’ Display Centre" class="img-responsive" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6" style="margin-bottom: 15px;">
                            <img src="img/archives/mandir.jpg" alt="Archives’ Display Centre" class="img-responsive" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6" style="margin-top: 15px;">
                            <img src="img/archives/archives-1.jpg" alt="Archives’ Display Centre" class="img-responsive" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6" style="margin-top: 15px;">
                            <img src="img/archives/archives-2.jpg" alt="Archives’ Display Centre" class="img-responsive" />
                        </div>
                    </div>

                </div>
                <div id="CollectionsSlide" class="gallery_area">
                	<h2>Available Collections</h2>
                	<ul style="list-style:disc; margin-left:25px; margin-bottom:15px; line-height:1.8;">
                    	<li>Selected Student Records (dating back to 1886)</li>
                        <li>Aitchisonian Magazines (dating back to 1936)</li>
                        <li>Prefect Books (dating back to 1950’s)</li>
                        <li>The Civil and Military Gazette (1940)</li>
                        <li>College Directories</li>
                        <li>Attendance Registers (dating back to 1886)</li>
                        <li>Photographs of faculty and rare photographs of Alumni</li>
                    </ul>
                    <p>(The collection is increasing with time and categories are not limited to above)</p>
                </div>
                
				<?php /* ?>
                <div id="AGallerySlide" class="gallery_area">
                	<div class="row">
                        <h3 style="padding:0px 15px;">Video</h3>
                        <div id="gallerySLide" class="gallery_area" align="center">
                            <div class="col-lg-12 col-md-12 col-sm-12 videos" align="center">
                                <span style="font-size: 16px;"><strong>Princess Beatrix Visit To Aitchison College, Lahore C. 1962</strong></span>
                                <video controls poster="galimages\collegearchive\videos\prinses-beatrix-poster.png">
                                    <source src="galimages\collegearchive\videos\prinses-beatrix-pakistan-1962.mp4" type="video/mp4">
                                    <source src="galimages\collegearchive\videos\prinses-beatrix-pakistan-1962.ogg" type="video/ogg">
                                    Your browser does not support HTML5 video.
                                </video>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                      <h3 style="padding:0px 15px;">Photo Gallery</h3>
                      <div class="col-lg-12 col-md-12 col-sm-12" align="center">
                        <div id="gallerySLide" class="gallery_area">
                            <?php
                            //"", "Aitchison Stamp", "A Medal for Excellence", "An Old Cup", "Aitchison Ties", "Mahd Bin Faisal Challenge Cup", "For the Best Candidate in HSC", "A Cup for Best in Co-curriculum", "A Cup" ,"Aitchison Stamp", "A View of Pre-independence", "The Aitchisonian Connections", "A Class of Pre-independence", "A Class of Pre-independence", "A Lab View – Pre-independence", "A View of Aitchison Hall", "Library Pre-Independence", "Library Pre-Independence", "A Group Photo", "A Medal", "A picture of Pre-independence", "A Class of Pre-independence", "The College republic", "The College republic", "A Medal", "Rivaz Medal", "Aitchison College", "President Gold Medal"
                            $titles=array("", "Aitchison Stamp", "Syed Ali Dayan Hasan Medal", "An Old Cup", "Aitchison Ties", "Mahd Bin Faisal Challenge Cup", "Muhammad Abdullah Khan Muhammad Medal", "A Cup for Best in Co-curriculum", "Jubilee Cup" ,"Aitchison Stamp", "A View of Pre-independence", "The Aitchisonian Connections", "A Class of Pre-independence", "A Class of Pre-independence", "A Lab View – Pre-independence", "A View of Aitchison Hall", "Library Pre-Independence", "Library Pre-Independence", "A Group Photo", "Dane Bhima Medal", "A picture of Pre-independence", "A Class of Pre-independence", "The College republic", "The College republic", "Haji Suleman Gold Medal", "Rivaz Medal", "Aitchison College", "President Gold Medal");
                            for($i=1; $i <= 27; $i++){
                            ?>
                            <a href="galimages/collegearchive/<?php echo $i;?>.jpg" title="<?php echo strip_tags($titles[$i]);?>">
                              <img class="gallery_img" src="galimages/collegearchive/small/<?php echo $i;?>.jpg" alt="img" />
                            <span class="view_btn"><?php echo $titles[$i];?></span>
                            </a>
                            <?php
                            }				
                            ?>                
                        </div>
                      </div>
                    </div>
                    
                	<!--<div class="row">
                        <div class="col-lg-12  col-lg-offset-1 col-md-12 col-md-offset-1 col-sm-12 col-sm-offset-1">
                            <div id="gallerySLide" class="sgallery_area">
                                <?php
                                    $titles=array("", "", "", "", "", "", "", "");
                                    for($i=1 ; $i <=8; $i++){
                                ?>
                                <a href="img/archives/gallery/<?php echo $i;?>.jpg" title="<?php echo $titles[$i];?>">
                                  <img class="gallery_img" src="img/archives/gallery/small/<?php echo $i;?>.jpg" alt="<?php echo $titles[$i];?>" />
                                  <span class="view_btn"><?php echo $titles[$i];?></span>
                                </a>
                                <?php
                                    }
                                ?>                                       
                            </div>
                        </div>
                    </div>-->
                </div>
                <?php */ ?>
                
                <div id="FaqSlide" class="gallery_area stdpadding">
                	<h2 class="nopadding">FAQ’s</h2>
                	<ul class="nopadding">
                    	<li><strong>How can I donate my collection?</strong></li>
                        <p class="nopadding">We believe that each collection is invaluable and holds great significance. Please schedule a meeting with our College Archivist to review and discuss the process of donating. You can also email at: <span style="color:#000099;">archivist@aitchison.edu.pk</span></p>
                        <li><strong>How can I share my personal time and experience at Aitchison and be a part of the Oral History segment?</strong></li>
                        <p class="nopadding">We believe that each story and experience is precious. These oral histories are your personal narrations of events and experiences which you have lived at Aitchison College. These take you on a trip down the memory lane and help others to learn about the past. Please email us to schedule an appointment for the interview at: <span style="color:#000099;">archivist@aitchison.edu.pk</span> or call between 8:00 am to 1:00 pm (Mon to Thurs) and 8:00 am to 12:00 pm (Fri to Sat) at:  [92 42] 111 363 063 / Ext 431</p>
                        <li><strong>Who will use my collection?</strong></li>
                        <p class="nopadding">Your collection or Oral History Interviews will be safe in our archives. These could be exhibited on our social media page or website. The archives center aims to set up exhibitions from time to time and your collections can be chosen for exhibition displays as well. Your name as the donor of the material will always be mentioned in our records. This material will not be used for profit or marketing purposes but will only be used for the purpose of College’s archive display and research. The records of the archival material given to us in any form will be securely kept in our repository. However, if you don’t want your collection or narration to be displayed or shared with the public, you may inform us accordingly.</p>
                        <li><strong>Can I donate copies and keep my originals?</strong></li>
                        <p class="nopadding">We prefer to collect original records and materials rather than copies. It is preferred to use originals both for the purpose of readability of the document and for the proof of authenticity. We will provide to <strong>donors</strong>, free of charge, photocopies of any collection donated. In exceptional cases, the Archives will accept high-quality copies of very significant materials should a donor be unable to donate the originals.</p>
                    </ul>
                </div>

                  <div id="HelpupSlide" class="gallery_area">
                      <h2>Can you Help us?</h2>
                      <p>As part of building school records, Archives, at this stage, seeks the names of boys who went from Aitchison to the following universities for <strong>undergraduate studies</strong> prior to 2013.</p>
                      <ol><li>University of Oxford</li>
                          <li>University of Cambridge</li>
                          <li>Imperial College London</li>
                          <li>UCL</li>
                          <li>London School of Economics</li>
                          <li>Harvard University</li>
                          <li>Stanford University</li>
                          <li>MIT</li>
                          <li>Columbia University</li>
                          <li>Yale</li>
                      </ol>
                      <p>Please provide your name, year of <strong>graduation</strong> from Aitchison College, and <strong>the name of the University</strong>. In the case of the University of Oxford and University of Cambridge, please provide the name of your college.</p>
                      <p>Kindly send the information at <span style="color:#0000ff;">alumniofficer@aitchison.edu.pk</span></p>
					  <p>OR</p>
					  <p>
						  <a href="https://forms.gle/LiYtwgx2QzmbACtE8" target="_blank" style="width: auto;">
							  <span class="btn btn-primary" style="overflow: visible;">Submit Your Information</span></a>
					  </p>

                  </div>

                <div id="ContactSlide" class="gallery_area">
                	<h2>Contact</h2>
                	<p>Tel: [92 42] 111 363 063 / Ext 431</p>
                    <p>Email: <span style="color:#000099;">archivist@aitchison.edu.pk</span></p>
                    <p>College Museum Visiting Hours: Saturday 9:00 am to 12:00 pm</p>
                    <p>For visit appointments, please send an email to the Archives Department.</p>
                </div>
                
              </div>
            </div>
        </section>
        <!--=========== END Tabs SECTION ================-->
        
          </div>
         
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
    
    <!--STARTED FOR JS SLIDER-->
    
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 600,
			  $PauseOnHover: 0,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
    
    
  <script language="javascript">
  
    	function showDiv(slidearea) {
			document.getElementById("DepartmentSlide").style.display="none";
			document.getElementById("ContributeSlide").style.display="none";
			document.getElementById("MuseumSlide").style.display="none";
			document.getElementById("ArchivesSocietySlide").style.display="none";			
			document.getElementById("CollectionsSlide").style.display="none";
			//document.getElementById("AGallerySlide").style.display="none";
			document.getElementById("FaqSlide").style.display="none";
            document.getElementById("HelpupSlide").style.display="none";
			document.getElementById("ContactSlide").style.display="none";
			document.getElementById(slidearea).style.display="table-row";
			//alert(slidearea);

			//$(obj).parent().parent().css("bakground","#8ABDE3");
			//obj.parentNode.style.backgroundColor = "#8ABDE3";
			
			document.querySelector("li[data-filter='DepartmentSlide']").style.backgroundColor = "#fff";
			document.querySelector("li[data-filter='ContributeSlide']").style.backgroundColor = "#fff";
			document.querySelector("li[data-filter='MuseumSlide']").style.backgroundColor = "#fff";
			document.querySelector("li[data-filter='ArchivesSocietySlide']").style.backgroundColor = "#fff";
			document.querySelector("li[data-filter='CollectionsSlide']").style.backgroundColor = "#fff";
			//document.querySelector("li[data-filter='AGallerySlide']").style.backgroundColor = "#fff";
			document.querySelector("li[data-filter='FaqSlide']").style.backgroundColor = "#fff";
            document.querySelector("li[data-filter='HelpupSlide']").style.backgroundColor = "#fff";
			document.querySelector("li[data-filter='ContactSlide']").style.backgroundColor = "#fff";
			
			document.querySelector("li[data-filter='" + slidearea + "']").style.backgroundColor = "#8ABDE3";
			
			//var obj = document.querySelector("li[data-filter='" + slidearea + "']");
			
			//obj.style.backgroundColor = "#8ABDE3";
			//alert(obj.style.backgroundColor);
		}
		showDiv("DepartmentSlide");
    </script>

    
    <!--ENDED   FOR JS SLIDER -->
    
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
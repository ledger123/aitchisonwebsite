<?php
	$banner_image_url="img/pageimages/misc.jpg";
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
     <title>Aitchison College:- Admission Results 2016</title>

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
		.success1{
			background-color: #090F42;	
			color: #EBE4E4;
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
              <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="aboutus_area wow fadeInLeft">
                          <h2 class="titile"> Admission Results 2016 </h2>
                                <p>The Board of Governors is pleased to announce that the following boys have been admitted to the College after Admissions testing and interview.</p>
                        </div>
                     </div>
               </div>
               <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    	<div class="newsfeed_area wow fadeInRight">
                            <ul class="nav nav-tabs feed_tabs" id="myTab2">
                              <li class="active"><a href="#k2" data-toggle="tab">K2</a></li>
                              <li><a href="#k3" data-toggle="tab">K3</a></li>
                              <li><a href="#k4" data-toggle="tab">K4</a></li>
                              <li><a href="#k5" data-toggle="tab">K5</a></li>         
                              <li><a href="#e1" data-toggle="tab">E1</a></li>
                              <li><a href="#e2" data-toggle="tab">E2</a></li>
                              <li><a href="#m1" data-toggle="tab">M1</a></li>
                              <li><a href="#m2" data-toggle="tab">M2</a></li>
                            </ul>
                          </div>
                    </div>
                    
               </div>
               <div class="tab-content">
               		<div class="tab-pane fade in active" id="k2">
                    <!--K2 Results Started -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                              <h3> <span style="font-weight: bold;">K2 Admission Results 2016</span> </h3>
                                 <table width="95%" border="1" cellspacing="0" cellpadding="0" align="center" class="table table-bordered">
                                      <tbody>
                                        <tr class="success1">
                                          <th width="6%" scope="col">S. #</th>
                                          <th width="10%" scope="col">Reg. No.</th>
                                          <th width="10%" scope="col">Class</th>
                                          <th width="37%" scope="col">Name</th>
                                          <th width="37%" scope="col">Father's Name</th>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                        </tr>
                                      </tbody>
                                    </table>
                         </div>
                   </div>
                    <!--K2 Results Ended   -->
                    </div>
                    <div class="tab-pane fade" id="k3">
                    <!--K3 Results Started -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                              <h3> <span style="font-weight: bold;">K3 Admission Results 2016</span> </h3>
                                 <table width="95%" border="1" cellspacing="0" cellpadding="0" align="center" class="table table-bordered">
                                      <tbody>
                                        <tr class="success1">
                                          <th width="6%" scope="col">S. #</th>
                                          <th width="10%" scope="col">Reg. No.</th>
                                          <th width="10%" scope="col">Class</th>
                                          <th width="37%" scope="col">Name</th>
                                          <th width="37%" scope="col">Father's Name</th>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                        </tr>
                                      </tbody>
                                    </table>
                         </div>
                   </div>
                    <!--K3 Results Ended   -->
                    </div>
                    <div class="tab-pane fade" id="k4">
                    <!--K4 Results Started-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                              <h3> <span style="font-weight: bold;">K4 Admission Results 2016</span> </h3>
                                 <table width="95%" border="1" cellspacing="0" cellpadding="0" align="center" class="table table-bordered">
                                      <tbody>
                                        <tr class="success1">
                                          <th width="6%" scope="col">S. #</th>
                                          <th width="10%" scope="col">Reg. No.</th>
                                          <th width="10%" scope="col">Class</th>
                                          <th width="37%" scope="col">Name</th>
                                          <th width="37%" scope="col">Father's Name</th>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                        </tr>
                                      </tbody>
                                    </table>
                         </div>
                   </div>
                    <!--K4 Results   Ended-->
                    </div>
                    <div class="tab-pane fade" id="k5">
                    <!--K5 Results Started-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                              <h3> <span style="font-weight: bold;">K5 Admission Results 2016</span> </h3>
                                 <table width="95%" border="1" cellspacing="0" cellpadding="0" align="center" class="table table-bordered">
                                      <tbody>
                                        <tr class="success1">
                                          <th width="6%" scope="col">S. #</th>
                                          <th width="10%" scope="col">Reg. No.</th>
                                          <th width="10%" scope="col">Class</th>
                                          <th width="37%" scope="col">Name</th>
                                          <th width="37%" scope="col">Father's Name</th>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                        </tr>
                                      </tbody>
                                    </table>
                         </div>
                   </div>
                    <!--K5 Results   Ended-->
                    </div>
                    <div class="tab-pane fade" id="e1">
                    <!--E1 Results Started-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                              <h3> <span style="font-weight: bold;">E1 Admission Results 2016</span> </h3>
                                 <table width="95%" border="1" cellspacing="0" cellpadding="0" align="center" class="table table-bordered">
                                      <tbody>
                                        <tr class="success1">
                                          <th width="6%" scope="col">S. #</th>
                                          <th width="10%" scope="col">Reg. No.</th>
                                          <th width="10%" scope="col">Class</th>
                                          <th width="37%" scope="col">Name</th>
                                          <th width="37%" scope="col">Father's Name</th>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                        </tr>
                                      </tbody>
                                    </table>
                         </div>
                   </div>
                    <!--E1 Results   Ended-->
                    </div>
                    <div class="tab-pane fade" id="e2">
                    <!--E2 Results Started-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                              <h3> <span style="font-weight: bold;">E2 Admission Results 2016</span> </h3>
                                 <table width="95%" border="1" cellspacing="0" cellpadding="0" align="center" class="table table-bordered">
                                      <tbody>
                                        <tr class="success1">
                                          <th width="6%" scope="col">S. #</th>
                                          <th width="10%" scope="col">Reg. No.</th>
                                          <th width="10%" scope="col">Class</th>
                                          <th width="37%" scope="col">Name</th>
                                          <th width="37%" scope="col">Father's Name</th>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                        </tr>
                                      </tbody>
                                    </table>
                         </div>
                   </div>
                    <!--E2 Results   Ended-->
                    </div>
                    <div class="tab-pane fade" id="m1">
                    <!--M1 Results Started-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                              <h3> <span style="font-weight: bold;">M1 Admission Results 2016</span> </h3>
                                 <table width="95%" border="1" cellspacing="0" cellpadding="0" align="center" class="table table-bordered">
                                      <tbody>
                                        <tr class="success1">
                                          <th width="6%" scope="col">S. #</th>
                                          <th width="10%" scope="col">Reg. No.</th>
                                          <th width="10%" scope="col">Class</th>
                                          <th width="37%" scope="col">Name</th>
                                          <th width="37%" scope="col">Father's Name</th>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                        </tr>
                                      </tbody>
                                    </table>
                         </div>
                   </div>
                    <!--M1 Results   Ended-->
                    </div>
                    <div class="tab-pane fade" id="m2">
                    <!--M2 Results Started-->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                              <h3> <span style="font-weight: bold;">M2 Admission Results 2016</span> </h3>
                                 <table width="95%" border="1" cellspacing="0" cellpadding="0" align="center" class="table table-bordered">
                                      <tbody>
                                        <tr class="success1">
                                          <th width="6%" scope="col">S. #</th>
                                          <th width="10%" scope="col">Reg. No.</th>
                                          <th width="10%" scope="col">Class</th>
                                          <th width="37%" scope="col">Name</th>
                                          <th width="37%" scope="col">Father's Name</th>
                                        </tr>
                                        <tr>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                          <td>&nbsp;</td>
                                        </tr>
                                      </tbody>
                                    </table>
                         </div>
                   </div>
                    <!--M2 Results   Ended-->
                    </div>
               </div>  
             <div class="row">
            	<div class="col-lg-12  col-lg-offset-1 col-md-12 col-md-offset-1 col-sm-12 col-sm-offset-1">
                
                </div>
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
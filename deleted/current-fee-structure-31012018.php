<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=5;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Current Fee Structure</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <link rel="shortcut icon" href="/nne_logo.ico" type="image/x-icon">
    <link rel="icon" href="/nne_logo.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
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
	.ptm_mtitle{
		/*background-color: #08112F;*/
		background-color: #293594;
		color: #FFF;	
		font-size: 16px;
		/*width: 25% !important;*/
	}
	.ptm_mtitle2{
		/*background-color: #08112F;*/
		background-color: #369;
		color: #FFF;	
		font-size: 16px;
		/*width: 25% !important;*/
	}
	.ptm_tborder{
		border-bottom: #121212 thick solid;
	}
	.ptm_schooltitle1{
		background-color: #1B1CB2;
		color: #F9F9F9;	
		font-size: 16px;
	}
	.ptm_row1{
		/*background-color: #E4E32D;
		background-color: #efe;
		color: #000000;*/
		background-color: #FFF;
		color: #000000;
	}
	.ptm_row2{
		background-color: #FFF;
		color: #000000;
	}
	
#tbl1 td:first-child {
     text-align:left;
}

#tbl2 td:first-child {
     text-align:left;
}

#tbl2 td:last-child {
     text-align:left;
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
                    <a style="padding: 2px 10px;" href="ac-admissions201819.php" rel="noopener noreferrer" class="btn btn-primary" role="button">Back</a><br><br>
                </div>
          </div>
          	<div class="aboutus_area wow fadeInLeft">
            <h2 class="titlewithoutborder colorblue hrplace border-blue" style="position: relative; display: inline-block;">Present Fee Structure 2017-18</h2><br /><br /><br />
            <?php /*?><h3 class="titile" style="font-weight: bold;">2 <sup><span style="text-transform: lowercase;">nd</span></sup> Teacher Parent Meeting</h3><?php */?>
                  		<div class="table-responsive">
                	<!--<table border="1" align="center" cellspacing="6" class="table table-striped" style="border: thin solid #ddd;">-->
                    <table id="tbl1" border="1" align="center" cellspacing="6" class="table table-hover" style="border: thin solid #CBCBCB; width: 99%;">
                        <tbody>
                          <tr>
                            <th width="30%" align="center" class="ptm_mtitle2"><div align="center"><strong>Classes</strong></div></th>
                            <th width="23%" align="center" class="ptm_mtitle2"><div align="center"><strong>Tuition Fee (per month)</strong></div></th>
                            <th width="23%" align="center" class="ptm_mtitle2"><div align="center"><strong>Boarding Charges<br/>(per month)</strong></div></th>
                          </tr>
                          <tr class="ptm_row1">
                          	<td align="center">K1, K2, K3, K4, K5</td>
                            <td align="center">31,000</td>
                            <td align="center">20,500<br></td>
                          </tr>
                          <tr class="ptm_row1">
                            <td align="center">K6, E2, M1</td>
                            <td align="center" nowrap>34,000</td>
                            <td align="center">22,500</td>
                          </tr>
                          <tr class="ptm_row1">
                            <td align="center">M2, C1, C2</td>
                            <td align="center">37,500</td>
                            <td align="center">24,500</td>
                          </tr>
                          <tr class="ptm_row1">
                            <td align="center">H1, H2</td>
                            <td align="center">43,000</td>
                            <td align="center">25,500</td>
                          </tr>
                        </tbody>
                      </table>   
                      
                      <h3>Revision of Admission Related Charges</h3>
                      <table id="tbl2" border="1" align="center" cellspacing="6" class="table table-hover" style="border: thin solid #CBCBCB; width: 99%;">
                        <tbody>
                          <tr>
                            <th width="30%" align="center" class="ptm_mtitle2"><div align="center"><strong>Particulars</strong></div></th>
                            <th width="23%" align="center" class="ptm_mtitle2"><div align="center"><strong>Amount (Rs)</strong></div></th>
                            <th width="23%" align="center" class="ptm_mtitle2"><div align="center"><strong>Remarks</strong></div></th>
                          </tr>
                          <tr class="ptm_row1">
                          	<td align="center">Admission Fee (Govt.)</td>
                            <td align="center">30,000</td>
                            <td align="center">At the time of Admission</td>
                          </tr>
                          <tr class="ptm_row1">
                          	<td align="center">Admission Fee (Non-Govt.)</td>
                            <td align="center">60,000</td>
                            <td align="center">At the time of Admission</td>
                          </tr>
                          <tr class="ptm_row1">
                          	<td align="center">Security Deposit</td>
                            <td align="center">Equivalent to one month<br/>tuition fee</td>
                            <td align="center">Refundable</td>
                          </tr>
                          <tr class="ptm_row1">
                          	<td align="center">Prospectus Fee</td>
                            <td align="center">4,000</td>
                            <td align="center">-</td>
                          </tr>
                          <tr class="ptm_row1">
                          	<td align="center">Registration Fee</td>
                            <td align="center">6,000</td>
                            <td align="center">-</td>
                          </tr>
                        </tbody>
                      </table>
                      
            		  </div>
			
           
           
           
           <!--<div class="col-xs-12 col-md-12">
 <div class="row">
  <div class="col-xs-6 col-md-6">
  <img src="img/vp.jpg" alt="Logo" width="350" height="250" class="img-responsive">
  
  </div>
  <div class="col-xs-6 col-md-6">
  <img src="img/mafzal.jpg" alt="Logo" width="350" height="250" class="img-responsive">
  </div>
 
 </div>
</div>-->
           
           
           
           
           
           
           
            
            
          </div>
</p>
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
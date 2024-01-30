<?php
	include("phpinclude/config.php");
	$banner_image_url="img/pageimages/misc.jpg";
	/*header("location: ac-admission-policy.php");
	exit();*/
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=-1;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aitchison College:- Making A Gift</title>

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
	<style class="cp-pen-styles">
		body {
          /*font-family: Helvetica;*/
        }
        
        .donation-meter {
          /*margin-left: 30px;*/
          width: 100%;
          
        }
        .donation-meter .glass {
          background: #e5e5e5;
          border-radius: 100px 100px 0 0;
          display: block;
          height: 180px;
          margin: 0 35px 10px;
          padding: 5px;
          position: relative;
          width: 30px;
          
        }
        .donation-meter .amount {
          background: #5cb85c ;
          border-radius: 100px;
          display: block;
          width: 20px;
          position: absolute;
          bottom: 5px;
          
          
        }
        .donation-meter strong {
          display: block;
          text-align: center;
        }
        .donation-meter .goal {
          font-size: 24px;
        }
        .donation-meter .total {
          font-size: 16px;
          position: absolute;
          right: 35px;
         
        }
        
        .bulb {
          background: #e5e5e5;
          border-radius: 100px;
          display: block;
          height: 60px;
          padding: 4px;
          right: 15px;
          width: 60px;
        }
        .bulb .red-circle {
          background: #5cb85c ;
          border-radius: 100px;
          display: block;
          height: 50px;
          width: 50px;
          left: 0px;
          
        }
        .bulb .filler {
          background: #5cb85c ;
          border-radius: 100px 100px 0 0;
          display: block;
          height: 30px;
          width: 20px;
          position: relative;
          top: -65px;
          right: 0px;
          z-index: 30;
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
            <div class="aboutus_area wow fadeInLeft ">
            	
            	<!--SETTINGS For News and Events-->
                                    
                    <!--SETTING TITLE -->
                                        <!--<h2 class="titile"></h2>-->
                    <h2 class="titlewithoutborder colorblue hrplace border-blue" style="display: inline-block;">MAKING A GIFT</h2>
                    <br /><p>&nbsp;</p>
                                        <!--END SETTING TITLE-->
                    
                                        
                    <!--SETTING SUB TITLE-->
                                    	
                <!--SETTINGS For Alumni-->
                                
                
                
                <div class="row">
<div class="col-lg-8 col-md-8 col-sm-12" style="padding-right: 15px;">
<p>From the earliest contributions to the more recent acts of philanthropy, Aitchison College has benefited greatly from the generous support of Old Boys and others who believe in the advancement of education. If you would like to support the College&rsquo;s high standards of education or simply give back as an Old Aitchisonian, there are several ways for you to support us. Gifts to Aitchison College can be made for any of the following purposes:</p>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12">
    	
		<h4 style="color:#07095B; font-weight: bold; text-align: left;">The Old Building Fund</h4>
    	<div style="float: right; margin-left: 45px; ">
    	<div align="center">
        	<?php
				$totalamount=90;
				//$gained=13.875;
				$gained= 70;
				/*
				$totalamount=80;
				$gained= 69;*/
				$percentagegained=intval($gained/$totalamount*100);
			?>
           <div class="donation-meter">
              <strong>Our Goal</strong>
              <strong class="goal">Rs. <?php echo $totalamount;?>M</strong>
              <span class="glass" >
                  <strong class="total" style="bottom: <?php echo $percentagegained-20;?>%">Rs. <?php echo $gained;?>M</strong>
                  <span class="amount" style="height: <?php echo $percentagegained;?>%"></span>
              </span>
              <div class="bulb" style="margin-top:-18px;">
                  <span class="red-circle"></span>
                  <span class="filler">
                      <span></span>
                  </span>
              </div>
            </div>
        </div>
        </div>
        
        <p>Our donation drive for the Old Building has so far raised <?php echo $gained; ?> million rupees and we thank all those who came to the rescue. The amount has allowed us to make an immediate start but we have a long way to go. Donations are still welcome and needed. The anticipated total cost of the project is estimated to be <?php echo $totalamount;?> million rupees.</p>
		<p>In order to be renovated and returned to its former glory, the Old Building has been closed until at least March 2020. It is a long time to be without our iconic building, but the end result will ensure that it stands strong and tall for another century. This is a masterful, ambitious and time consuming project.</p>
		<p>Old Boy architect Raees Faheem has been overseeing the entire project and the Board subcommittee has been receiving regular updates. &nbsp;</p>
		<p>One of the key observations made was that the building must be used to ensure its long term survival. To this end, we have plans to have the &lsquo;Old Building&rsquo; operated as a Music School in 2020.</p>
        <p><a href="d-one.php" style="color: #07095B;"><u>Donate Now</u></a></p>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12">
    	<div class="row" style="padding: 0px; margin: 0px;">
    		<div class="col-lg-3 col-md-3 col-sm-6" style="padding: 2px;">
                <img src="img/corporate-partners/oldbuildings/1.jpg" style="width: 100%; height: auto; text-align: center;" />        
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6" style="padding: 2px;">
                <img src="img/corporate-partners/oldbuildings/2.jpg" style="width: 100%; height: auto; text-align: center;" />        
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6" style="padding: 2px;">
                <img src="img/corporate-partners/oldbuildings/3.jpg" style="width: 100%; height: auto; text-align: center;" />        
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6" style="padding: 2px;">
                <img src="img/corporate-partners/oldbuildings/4.jpg" style="width: 100%; height: auto; text-align: center;" />        
            </div>    
        </div>
    </div>
    
</div>

<br/>
<h4 style="color:#07095B; font-weight: bold; text-align: left;">Student Bursaries</h4>

<p>Financial constraints should not become a hurdle in the completion of a boy&#39;s education at Aitchison College. To this end, we wish to establish a Bursary Fund to help students in need. Bursaries are extremely important for extending the life-changing experience of an Aitchison education to boys (including new enrolments) from diverse and often remote backgrounds. By contributing to our Bursary Fund, you are helping some of the brightest young minds in the country. A bursary can be arranged individually or among a group of old boy donors. The Principal notes that &ldquo;bursaries will be applied to help boys from outside the Punjab and who come from areas either remote or poor. Aitchison has a role to play here.&rdquo;</p>

<p><a href="d-one.php" style="color: #07095B;"><u>Donate Now</u></a></p>
<br/>
<h4 style="color:#07095B; font-weight: bold; text-align: left;">The Sports Master Plan</h4>

<p>The Board of Governors has approved the Sporting Master Plan and formed a committee for the purpose of implementing one of the largest projects since our foundation. The project will bring about massive change in the quality of our sporting facilities. Naming rights will be considered. You may fund any of the following Sports Projects at the College:</p>

<ul style="list-style: disc; padding-left: 25px;">
	<li>Jafar Memorial Hockey Pitch</li>
	<li>New basketball courts</li>
	<li>New Tennis Centre</li>
	<li>Diving Pool at Senior Swimming and modernized pool with electronic touch pads and results board</li>
	<li>Multi-Purpose Gymnasium &nbsp;</li>
</ul>

<p style="padding-top: 15px;">Our plan for a new multi-purpose gymnasium is available on the College website. We aim to raise 4 million USD.</p>

<p><a href="d-one.php" style="color: #07095B;"><u>Donate Now</u></a></p>
<br/>
<h4 style="color:#07095B; font-weight: bold; text-align: left;">Bequests</h4>

<p>A bequest can provide support for strengthening the College into the future. To continue our legacy and to build the base for future achievements, we look to our alumni community for support. By naming Aitchison as the beneficiary of a portion of y our estate, or of particular assets in y our estate, you will be making a consequential contribution to the future of the College. A bequest left to Aitchison College can be either named or made anonymously. It can be made in a variety of ways to reflect a person&rsquo;s particular wishes. Bequests in support of Aitchison College should be left ideally for use at the College&rsquo;s own discretion, for these will help the College meet its most pressing needs. Bequests will not be applied to running costs, salaries or other operating expenses, but in support of specific areas of the College&rsquo;s operation such as libraries, bursaries, building projects or other areas of specific interest.</p>
</div>

<div class="col-lg-4 col-md-4 col-sm-12" style="padding-right: 5px; border-left: 1px #ccc solid;">
<p style="color:#07095B; font-weight: bold; text-align: left;"><strong>DONORS &amp; PARTNERS</strong></p>

<p><a href="newsandevents-testlink.php?id=387" style="color: #07095B;"><u>Old Building Donors</u></a><br />
<a href="corporate-partners.php" style="color: #07095B;"><u>Corporate Partners</u></a></p>

<p style="color:#07095B; font-weight: bold; text-align: left;"><strong>DONOR RECOGNITION</strong></p>

<p>We are grateful to all our donors and partners for their support. All donors are sent an acknowledgement letter by the Principal.</p>
	<p>We also show our appreciation for generous contributions by inviting donors to College events and special luncheons. Their names / company logos are also published in the Aitchison College alumni newsletter and on the College website.</p>
<p>Naming rights can be offered to those who fully fund a major capital project.</p>
	<p><em>Donors who have given a minimum of 5 lacs to the Old Building Renovation Fund will have their names remembered forever on a plaque in the Hall of Honour. This is a highly significant historical gesture. There will be a ‘cut-off’ date for the plaque, after which no further names will be added.</em></p>

<p style="color:#07095B; font-weight: bold; text-align: left;"><strong>HOW TO DONATE </strong></p>

<p>Online Donation: Please click <a href="d-one.php" style="color: #07095B;"><strong><u>here</u></strong></a> to donate online.</p>

<p>Cheque/Bank Draft: Please send your bank drafts or cheques (Payee: Principal Aitchison College) to the: Bursar, Aitchison College, Shahrah-e-Quaid-eAzam, Lahore &ndash; 54000.</p>
	
	
	
<p style="color:#07095B; font-weight: bold; text-align: left;"><strong>CONTACT US</strong></p>

<p>For any queries or information, please email</p>

<p>bursar@aitchison.edu.pk</p>

<p>alumniofficer@aitchison.edu.pk</p>

<p>111-363-063 (Ext. 333 or 427)</p>
	
</div>
</div>
<br />
                
                <div class="row form-group" align="center">
					                </div>
                
                <!--SETTINGS For News and Events-->
                                    
                                                    
                <br />
                
            </div>
            
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
   
    <script src="js/custom1.js"></script>
    

  </body>
</html>
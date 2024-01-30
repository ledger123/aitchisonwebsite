<?php
	include("standard/main.php"); 
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
     <title>Aitchison College:- Gifts</title>

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
          	<div class="aboutus_area wow fadeInLeft">
            <h2 class="titlewithoutborder colorblue hrplace border-blue" style="display: inline-block;">MAKE A GIFT</h2>
            <p>&nbsp;</p>
            <p>From the earliest contributions to the more recent acts of philanthropy, Aitchison College has benefited greatly from the generous support of Old Boys and others who believe in the advancement of education.</p>
			<p>If you would like to support the College&rsquo;s high standards of education or simply give back as an Old Aitchisonian, there are several ways for you to support us. Gifts to Aitchison College can be made for any of the following purposes:</p>
			<h2 class="titlewithoutborder colorblue hrplace border-blue" style="display: inline-block; font-size: 20px;">Student Bursaries</h2>
            <p>&nbsp;</p>
            <p>Financial constraints should not become a hurdle in the completion of a boy&#39;s education at Aitchison College. To this end, we have established a Bursary Fund for helping students in need. Bursaries are extremely important for extending the life-changing experience of an Aitchison education to boys from diverse and often remote backgrounds.&nbsp;</p>
			<p>By contributing to our Bursary Fund, you are helping some of the brightest young minds in the country. A bursary can be arranged individually or among a group of old boy donors.</p>
            <p><a href="makeagift-one.php" class="c0000FF"><span style="color: #000099; ">Donate Now</a></p>
            <h2 class="titlewithoutborder colorblue hrplace border-blue" style="display: inline-block; font-size: 20px;">The Sports Master Plan</h2>
            <p>&nbsp;</p>
            <p>The Board of Governors has approved the Sporting Master Plan and formed a committee for the purpose of implementing one of the largest projects since our foundation. The project will bring about massive change in the quality of our sporting facilities. Mr. Mustafa Ramday is chairing the Committee and it is currently appointing a project consultant and architect.</p>
			<p>You may fund any of the following Sports Projects at the College:</p>
            <?php
			$totalrecords=$db->selectRecord1("select proj_id, proj_name, proj_cost from ac_projects where status='Active' and proj_category='Sports'");
			//print_r($totalrecords);
			?>
            <?php /*?><h2 class="titile">Admissions 2018</h2><?php */?>
            
            	<ul style="line-height: 1.0em; text-align: justify; padding-left: 30px !important;list-style-type: disc;">
                	<?php 					
						foreach($totalrecords as $record){
					?>
                			<li class="c0000FF"><a href="ac-gift_details.php?proj_id=<?php echo $record['proj_id'];?>" class="c0000FF"><strong><p style="color:blue"><span style="color: #000099; "><?php echo $record['proj_name'];?> (<?php echo $record['proj_cost'];?>)</span></strong></a></li>
                    <?php 
						}
					?>
                    <?php /*?><li class="c0000FF"><a href="ac-principal-admission-letter-201819.php" class="c0000FF"><strong><p style="color:blue"><span style="color: #000099; font-size: 16px;">Donors list in the old building fund</span></strong></a></li><?php */?>
  					<?php /*?><li class="c0000FF"><a href="ac-principal-admission-letter-201819.php" class="c0000FF"><strong><p style="color:blue"><span style="color: #000099; font-size: 16px;">New Tennis Centre (0.6 m USD)</span></strong></a></li>              	
                    <li class="c0000FF"><a href="ac-general-admission-info-201819.php" class="c0000FF"><strong><p style="color:blue"><span style="color: #000099; font-size: 16px;">Multi-Purpose Gymnasium (3 m USD)</span></strong></a></li>
                    <li class="c0000FF"><a href="ac-admissions-faq-201819.php" class="c0000FF"><strong><p style="color:blue"><span style="color: #000099; font-size: 16px;">Diving Pool at Senior Swimming ( 0.5 m USD)</span></strong></a></li><?php */?>
                </ul>
			<p><a href="makeagift-one.php" class="c0000FF"><span style="color: #000099; ">Donate Now</a></p>
            <h2 class="titlewithoutborder colorblue hrplace border-blue" style="display: inline-block; font-size: 20px;">The Old Building Fund</h2>
            <p>&nbsp;</p>
            <p>The &#39;Old Building&#39; is our greatest architectural treasure: standing iconic as an &#39;educational mother&#39;; the keeper of memories and boyhoods&#39; past. Its conservation and preservation is of utmost importance to us all.</p>
            <div class="row">
            	<div class="col-lg-10 col-md-8 col-sm-12">
                	<p>We already know that extreme termite damage has to be treated and possibly a new roof constructed, along with renovating marble and intricate decorations that make this a national treasure.</p>
                    <p>The Old Building's integrity will be preserved and maintained. Funding has begun, but we have a long way to go. This is a fine way for Old Boys to show their gratitude and tangible connection with the College.</p>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-12" align="center">
                		<?php
                    	$totalamount=50;
						//$gained=13.875;
						$gained=15.8;
						$percentagegained=intval($gained/$totalamount*100);
						?>
                		<div class="donation-meter" style="-ms-transform: scale(0.5, 0.5); -webkit-transform: scale(0.5, 0.5); transform: scale(0.5, 0.5); margin-top: -6.0em;">
                          <strong>Our Goal<?php //echo $totalamount."<br>Akhtar".$gained;?></strong>
                          <strong class="goal">RS <?php echo $totalamount;?>M</strong>
                          <span class="glass" >
                              <strong class="total" style="bottom: <?php echo $percentagegained;?>%"><?php echo "Rs"; ?> <?php echo $gained;?> <?php echo "M"; ?></strong>
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
            <p><a href="old-building-donors.php" class="c0000FF"><span style="color: #000099; ">List of Donors </a></p>
            <p><a href="makeagift-one.php" class="c0000FF"><span style="color: #000099; ">Donate Now</a></p>
            <h2 class="titlewithoutborder colorblue hrplace border-blue" style="display: inline-block; font-size: 20px;">Bequests</h2>
            <p>&nbsp;</p>
            <p>A bequest can provide support for strengthening the College into the future. To continue our legacy and to build the base for future achievements, we look to our alumni community for support. By naming Aitchison as the beneficiary of a portion of your estate, or of particular assets in your estate, you will be making a consequential contribution to the future of the College.</p>
			<p>A bequest left to Aitchison College can be either named or made anonymously. It can be made in a variety of ways to reflect a person&rsquo;s particular wishes. Bequests in support of Aitchison College should be left ideally for use at the College&rsquo;s own discretion, for these will help the College meet its most pressing needs. Bequests will not be applied to running costs, salaries or other operating expenses, but in support of specific areas of the College&rsquo;s operation such as libraries, bursaries, building projects or other areas of specific interest.</p>
			<p>A bequest is an enduring way of supporting the future of the College. To plan a bequest, please contact the College Bursar at bursar@aitchison.edu.pk or call at 111-363-063 Ext. 333</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

            <h2 class="titlewithoutborder colorblue hrplace" style="display: inline-block; font-size: 20px; color: black !important;">Donor Recognition</h2>
            <p>&nbsp;</p>
            <p>We are grateful to all our donors for their support. We show our appreciation by inviting them to College events and special luncheons. All donors are sent an acknowledgement letter by the Principal. Their names are also mentioned in the Aitchison College alumni newsletter and on the College website.</p>
			<p>Naming rights will be offered to those who fully fund a capital project.</p>

            <h2 class="titlewithoutborder colorblue hrplace" style="display: inline-block; font-size: 20px; color: black !important;">How to Donate</h2>
            <p>&nbsp;</p>
            <p><strong>Online:</strong> Donate online at this <a href="makeagift-one.php" class="c0000FF"><span style="color: #000099; ">link</a>.</p>
			<p><strong>Cheque/Bank Draft:</strong> Please send your bank drafts or cheques (Payee: Principal Aitchison College) at the following address:</p>
			<p>Bursar, Aitchison College, Shahrah-e-Quaid-eAzam, Lahore &ndash; 54000.</p>

            <h2 class="titlewithoutborder colorblue hrplace" style="display: inline-block; font-size: 20px; color: black !important;">Contact:</h2>
            <p>&nbsp;</p>
            <p>For any queries or information, please email bursar@aitchison.edu.pk or call on 111-363-063 (Ext. 333)</p>         
                 
            
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
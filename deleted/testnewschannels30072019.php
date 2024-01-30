<?php
	include("standard/main.php");
	$banner_image_url="img/pageimages/misc.jpg";
	/*header("location: ac-admission-policy.php");
	exit();*/
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
     <title>Aitchison College:- ADMISSION INFORMATION 2019-20</title>

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
	<?php /*?><link rel="stylesheet" href="css/staff_portal.css"><?php */?>
	

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
          	<div class="aboutus_area wow fadeInLeft" style="color: #000000;">
				<div class="row"  style="padding: 0px; margin: 0px;">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div align="center" style="padding-bottom: 20px;"><img alt="Aitchison College, Lahore." height="130" src="img/ac_logo130x130.png" width="130" /></div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px; margin: 0px;">
						<h2 align="center" style="padding-left: 0px; padding-bottom: 0px;margin-left: 0px; margin-bottom: 0px;">Aitchison College, Prep School</h2>
						<h3 align="center"><span style="font-size:20px">Tour to China June 2019<br />
								Report</span></h3>
					</div>	
					<div class="col-lg-12 col-md-12 col-sm-12">
					<p>We arranged a 10 days recreational and educational <strong>Tour to China</strong> from <strong>6<sup>th</sup> to 16<sup>th</sup> June, 2019</strong>.</p>
					</div>	
					<div class="col-lg-2 col-md-2 col-sm-4" style="padding: 0px; margin: 0px;">
						<strong><u>Teachers:</u></strong>
					</div>
					<div class="col-lg-10 col-md-10 col-sm-8">
						Ms. Sarah Liu<br />Mr. Muhammad Usman
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px; margin: 0px;">
						<p style="padding-top: 20px;"><strong><u>Educational Aspects of the Tour:</u></strong></p>

						<ul style="list-style: disc; padding-left: 30px;">
							<li>Interaction with the Native Speakers of China (In terms of Chinese Language)</li>
							<li>Make our boys aware of Chinese culture, traditions and heritage</li>
							<li>Visit historical places, museums &amp; parks</li>
							<li>Knowing History of China</li>
						</ul>

						<p style="padding-top: 20px;"><strong><u>Air Journeys:</u></strong></p>

						<div class="table-responsive">
						<table border="0" cellpadding="0" cellspacing="0" class="borderless table table" style="width:400px">
							<tbody>
								<tr>
									<td style=" padding-left: 0.2em; width: 50%;">Pakistan to Dubai</td>
									<td style=" padding-left: 0.2em; width: 50%;">by Emirates EK623</td>
								</tr>
								<tr>
									<td style=" padding-left: 0.2em;">Dubai to Beijing</td>
									<td style=" padding-left: 0.2em;">by Emirates EK308</td>
								</tr>
								<tr>
									<td style=" padding-left: 0.2em;">Beijing to Dubai</td>
									<td style=" padding-left: 0.2em;">by Emirates EK309</td>
								</tr>
								<tr>
									<td style=" padding-left: 0.2em;">Dubai to Pakistan</td>
									<td style=" padding-left: 0.2em;">by Emirates EK622</td>
								</tr>
							</tbody>
						</table>
						</div>

						<p style="padding-top: 20px;"><strong><u>High-speed Train Journeys</u></strong></p>

						<div class="table-responsive">
<table border="0" cellpadding="0" cellspacing="0" style="width:400px">
	<tbody>
		<tr>
			<td style=" padding-left: 0.2em; width: 40%;">Beijing to Xi&rsquo;an</td>
			<td style=" padding-left: 0.2em; width: 20%;">1,216 km</td>
			<td style=" padding-left: 0.2em; width: 40%;">by <em>maglev Train</em></td>
		</tr>
		<tr>
			<td style=" padding-left: 0.2em;">Xian to Luoyang</td>
			<td style=" padding-left: 0.2em;">380 km</td>
			<td style=" padding-left: 0.2em;">by <em>maglev Train</em></td>
		</tr>
		<tr>
			<td style=" padding-left: 0.2em;">Zhengzhou to Beijing</td>
			<td style=" padding-left: 0.2em;">700 km</td>
			<td style=" padding-left: 0.2em;">by <em>maglev Train</em></td>
		</tr>
	</tbody>
</table>
</div>

						<p style="padding-top: 20px;"><strong><u>Discipline</u></strong></p>

						<p>Being ambassadors of Aitchison College, our boys displayed an exemplary discipline in their manners, language and behavior throughout the journey.</p>

						<p style="padding-top: 20px;"><strong><u>Food:</u></strong></p>

						<p>We experienced traditional &ldquo;Halal&rdquo; Chinese food. We selected only <strong>Certified Halal</strong> Restaurants, the boys and teachers like it a lot.</p>

						<p style="padding-top: 20px;"><strong><u>Interaction with Native Speakers:</u></strong></p>

						<p>Our boys got excellent opportunity to interact with native Chinese speakers in their local vernacular during shopping and day to day interaction. It was a wonderful opportunity.</p>

						<p style="padding-top: 20px;"><strong><u>E-info (We Chat):</u></strong></p>

						<p>We updated parents on daily basis. Actually they were with us throughout the journey, we shared pictures and videos of our destinations, travelling, food, hotels and even shopping malls and updated them throughout the journey.`</p>

						<p style="padding-top: 20px;"><strong><u>Security Concerns:</u></strong></p>

						<p>Safety and security is our first concerns for every international tour. One tourist guides and two security guards were with us throughout the journey. They had issued us Identity cards with ribbons to put on. They told us the safety precautions as prior hand knowledge.</p>

						<p style="padding-top: 20px;"><strong><u>Tourist Guides:</u></strong></p>

						<p>Tourist Guides shared educational information before each place we visited.</p>

						<p style="padding-top: 20px;"><strong><u>Hotels:</u></strong></p>

						<div class="table-responsive">
						<table border="0" cellpadding="0" cellspacing="0" style="width:400px">
							<tbody>
								<tr>
									<td style=" padding-left: 0.2em; width: 70%;">Days Hotel Beijing Guomen,</td>
									<td style=" padding-left: 0.2em; width: 30%;"><strong>Beijing</strong></td>
								</tr>
								<tr>
									<td style=" padding-left: 0.2em;">Grand Dynasty Cultural Hotel,</td>
									<td style=" padding-left: 0.2em;"><strong>Xi&rsquo;an</strong></td>
								</tr>
								<tr>
									<td style=" padding-left: 0.2em;">Luoyang Friendship Guest House,</td>
									<td style=" padding-left: 0.2em;"><strong>Luoyang</strong></td>
								</tr>
								<tr>
									<td style=" padding-left: 0.2em;">Zheng Zhou Guangdong Hotel,</td>
									<td style=" padding-left: 0.2em;"><strong>Zheng Zhou</strong></td>
								</tr>
								<tr>
									<td style=" padding-left: 0.2em;">Shanshui Trends Hotel</td>
									<td style=" padding-left: 0.2em;"><strong>Beijing</strong></td>
								</tr>
							</tbody>
						</table>
						</div>

						<h3 align="left"><strong><u>The Journey</u></strong></h3>

						<p style="padding-top: 20px;"><strong>Pakistan to Dubai:</strong></p>

						<div class="row" style="padding: 0px; margin: 0px;margin-bottom: 20px;">
						<div class="col-lg-8 col-md-8 col-sm-6" style="padding: 0px; margin: 0px;">
						<p><strong><u>Departure:</u></strong></p>

						<p>On Wednesday, 5<sup>th</sup> June, 2019 all the boys reported at Old Building, Aitchison College as per schedule sharp at 10:00 pm and left for the airport in the school bus. The Headmaster, Raja Ashfaq Ahmad addressed the boys and bid them farewell for the journey.</p>

						<p>The group boarded on the plane for Dubai at 3:00 am.</p>

						<div class="table-responsive" style="padding-left: 0px;">
						<table border="0" cellpadding="0" cellspacing="0" style="width:400px">
							<tbody style="vertical-align: top;">
								<tr>
									<td style=" padding-left: 0.2em; width: 45%;"><strong><em>Departure from Pakistan:</em></strong></td>
									<td style=" padding-left: 0.2em; width: 55%;"><em>Thursday, 6<sup>th</sup> June, 2019 at 3:30 am </em></td>
								</tr>
								<tr>
									<td style=" padding-left: 0.2em;"><strong><em>Arrival at Dubai:</em></strong></td>
									<td style=" padding-left: 0.2em;"><em>Thursday, 6<sup>th</sup> June, 2019 at 5:50 am</em></td>
								</tr>
								<tr>
									<td style=" padding-left: 0.2em;"><strong><em>Flight:</em></strong></td>
									<td style=" padding-left: 0.2em;"><em>Emirates EK623</em></td>
								</tr>
								<tr>
									<td style=" padding-left: 0.2em;"><strong><em>Stay at Dubai Airport:</em></strong></td>
									<td style=" padding-left: 0.2em;"><em>5 hours</em></td>
								</tr>
							</tbody>
						</table>
						</div>
</div>

						<div class="col-lg-4 col-md-4 col-sm-6" style="padding: 0px; margin: 0px;">
								<img src="https://aitchison.edu.pk/img/china_tour2019/tour1.jpg" style="padding-left: 20px; width: 100%; height: auto;" />
							</div>
</div>


<p style="padding-top: 20px;"><strong>Dubai to China:</strong></p>

<p>The group reached Dubai on Thursday, 6<sup>th</sup> June, 2019 at 5:50 am. We had 5 hours stay at Dubai International Airport. We boarded on plane for Beijing at 10:00 am and reached Beijing at 22:20 pm.</p>

<div class="table-responsive" style="padding-left: 0px;">
<table border="0" cellpadding="0" cellspacing="0" style="width:400px">
	<tbody>
		<tr>
			<td style=" padding-left: 0.2em; width: 35%;"><strong><em>Departure from Dubai:</em></strong></td>
			<td style=" padding-left: 0.2em; width: 60%;"><em>Thursday, 6<sup>th</sup> June, 2019 at 10:50 am </em></td>
		</tr>
		<tr>
			<td style=" padding-left: 0.2em;"><strong><em>Arrival at Beijing, China:</em></strong></td>
			<td style=" padding-left: 0.2em;"><em>Thursday, 6<sup>th</sup> June, 2019 at 22:20 pm</em></td>
		</tr>
		<tr>
			<td style=" padding-left: 0.2em;"><strong><em>Flight:</em></strong></td>
			<td style=" padding-left: 0.2em;"><em>Emirates EK308</em></td>
		</tr>
	</tbody>
</table>
</div>	


</div>
</div>
				<div class="row">
				<div class="row" id="day1" style="padding: 0px; margin: 0px; padding-top: 30px;">
<div class="col-lg-8 col-md-8 col-sm-12" style="padding: 0px; margin: 0px;">
<p><strong>Day-1<br />
Beijing, China:<br />
June 6, 2019</strong></p>

<p>We reached Beijing on Thursday, 6<sup>th</sup> June, 2019 at 22:20 pm. On the first day, the tour guide and the Security Staff picked the delegation at the Beijing Airport and moved towards the hotel.&nbsp; We checked in the Days Hotel Beijing Guomen by bus.</p>

<p style="padding-top: 30px;"><strong>Stay:</strong> checked in Days Hotel Beijing Guomen</p>
</div>

<div class="col-lg-4 col-md-4 col-sm-12" style="padding: 0px; margin: 0px;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour2.jpg" style="padding-left: 20px; width: 100%; height: auto;" /></div>
</div>
				
				<div class="row" id="day2" style="padding: 0px; margin: 0px; padding-top: 30px;">
<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px; margin: 0px;">
<p><strong>Day-2<br />
Beijing to Xian China:<br />
June 6, 2019</strong></p>

<p>After the Breakfast, we took a six hour high speed Maglev train from Beijing to Xi&rsquo;an (reference time: 13:50- 20:00&nbsp;hours.)&nbsp;&nbsp;The group reached&nbsp;&nbsp; Xi&#39;an North Railway Station and took the bus to the city. We checked in Dynasty Cultural Hotel</p>

<div class="table-responsive" style="padding-left: 0px;">
<table border="0" cellpadding="0" cellspacing="0" style="width:500px">
	<tbody>
		<tr>
			<td style=" padding-left: 0.2em; width: 45%;"><strong><em>High Speed Train:</em></strong></td>
			<td style=" padding-left: 0.2em; width: 55%;"><em>350 km/Hours</em></td>
		</tr>
		<tr>
			<td style=" padding-left: 0.2em;"><strong><em>Departure Beijing to Xi&rsquo;an: &nbsp;&nbsp; </em></strong></td>
			<td style=" padding-left: 0.2em;"><em>13:50 pm</em></td>
		</tr>
		<tr>
			<td style=" padding-left: 0.2em;"><strong><em>Arrival at Xi&rsquo;an:</em></strong></td>
			<td style=" padding-left: 0.2em;"><em>20:00 pm<strong> &nbsp;</strong></em></td>
		</tr>
	</tbody>
</table>

<div align="center"><img class="img-responsive" height="640" src="https://aitchison.edu.pk/img/china_tour2019/tour3.jpg" style="padding: 10px;" width="481" /></div>

<p><strong>Stay: </strong>checked in Grand Dynasty Cultural Hotel, Xi&rsquo;an.</p>
</div>
</div>
</div>

				<div class="row" id="day3" style="padding: 0px; margin: 0px; padding-top: 30px;">
<p><strong>Day-3<br />
Xi&rsquo;an, China<br />
June 8, 2019</strong></p>

<div class="col-lg-8 col-md-8 col-sm-12" style="padding: 0px; margin: 0px;">
<p>After&nbsp;breakfast,&nbsp;we drove to the Linyi (<em><strong>Linyi</strong></em>&nbsp;is a city in the south of Shandong province, China.) There we visited <strong>Qinshihuang Emperor&#39;s Mausoleum Museum</strong>, which is the &ldquo;World&#39;s Eighth Wonder&rdquo; in Beibei, Lushan. The <strong>Museum of Terra-cotta Warriors</strong> which is located 37 km east of Xi&rsquo;an&nbsp;city. The&nbsp;underground terracotta army found in the First Emperor&rsquo;s burial complex is undoubtedly one of the most remarkable and mysterious discoveries from the ancient world.&nbsp;A&nbsp;mausoleum attended by an army including over 7,000 terracotta warriors and horses.&nbsp;</p>

<p>We went for shopping to a <strong>Muslim market in Xi&rsquo;an</strong> which stretched for over two kilometres.</p>
</div>

<div class="col-lg-4 col-md-4 col-sm-12" style="padding: 0px; margin: 0px;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour4.jpg" style="padding-left: 20px; width: 100%; height: auto;" /></div>

<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px; margin: 0px;">
<p style="color: red;"><strong><em>NOTE: Our boys got the opportunity to meet the farmer who discovered Terra-cotta Warriors. </em></strong></p>
</div>

<div class="col-lg-7 col-md-7 col-sm-12" style="padding: 0px; margin: 0px;">
<p>After lunch, we visited <strong>Zhonggulou Square</strong>.&nbsp; We visited <strong>Bell and Drum Tower</strong>, which is at the east side of the Zhonggulou Square. It has a history of more than 600 years. The Bell Tower and Drum Tower of Xi&rsquo;an date back to the Ming dynasty (1368-1644). The two are located in the Centre of the Xi&rsquo;an city, connecting the four roads from East, South, West and North within the city wall. On the top of the Bell Tower, we witnessed the panoramic view of the Xi&rsquo;an city</p>
</div>

<div align="center" class="col-lg-5 col-md-5 col-sm-12" style="padding: 0px; margin: 0px;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour5.jpg" style="padding-left: 20px; width: 95%; height: auto;" /></div>

<div>
<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px; margin: 0px;">
<p>Strolling through the <strong>Islamic halal pedestrian street</strong> (<strong>Hui Min Jie</strong>)<strong>,</strong> the most characteristic of the Northwestern ethnic minority, we enjoyed the most distinctive halal snacks in <strong>Hui Min Jie.</strong></p>
</div>

<div align="center"><img class="img-responsive" src="https://aitchison.edu.pk/img/china_tour2019/tour6.jpg" style="padding: 10px;" /></div>

<p><strong>Stay:</strong> Grand Dynasty Cultural Hotel, Xi&rsquo;an.</p>
</div>
</div>

				<div class="row" id="day4" style="padding: 0px; margin: 0px; padding-top: 30px;">
<p><strong>Day 4:<br />
Xi&rsquo;an, China<br />
June 9, 2019</strong></p>

<div class="col-lg-8 col-md-8 col-sm-12" style="padding: 0px; margin: 0px;">
<p>After Breakfast, the group visited the Royal Temple of China &nbsp;(<strong>Da Ci En Temple for blessing</strong>) also known as the <strong>Big Wild Goose Pagoda</strong>, Giant Wild Goose Pagoda is a Buddhist pagoda located in southern Xi&#39;an, Shaanxi province. It is the landmark building of Xi&#39;an City. We also visited Big<strong> Wild Goose Pagoda Music Fountain Square</strong>.</p>

<p>In the afternoon, we visited Xi&rsquo;an<strong> Museum</strong>. A museum of Xi&rsquo;an is a collection of museums, historical sites and urban gardens. They were opened to the outside world in 2007 to display the precious artifacts. We visited the millennium ancient tower in the Tang Dynasty, the melodious Yanta morning bell, and the beautiful garden landscape. We experienced the paper-cutting activities with Chinese characteristics, and then went to the Xi&rsquo;an City Wall.</p>
</div>

<div class="col-lg-4 col-md-4 col-sm-12" style="padding: 0px; margin: 0px;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour7.jpg" style="padding-left: 20px; width: 100%; height: auto;" /></div>

<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px; margin: 0px;">
<p>We visited the millennium ancient tower in the Tang Dynasty, the melodious Yanta morning bell, and the beautiful garden landscape. We experienced the paper-cutting activities with Chinese characteristics, and then went to the Xi&rsquo;an City Wall.</p>

<p>Xi&#39;an <strong>Ming City Wall</strong> is the largest and most preserved ancient city in China. &nbsp;This is an ancient city of China and they have preserved it completely.</p>
</div>

<div class="col-lg-8 col-md-8 col-sm-12" style="padding: 0px; margin: 0px;">
<p>Use the high-speed train to Luoyang <em>(Xi&#39;an)</em></p>

<div class="table-responsive" style="padding-left: 0px;">
<table border="0" cellpadding="0" cellspacing="0" style="width:500px">
	<tbody>
		<tr>
			<td style=" padding-left: 0.2em; width: 45%;"><strong><em>High Speed Train:</em></strong></td>
			<td style=" padding-left: 0.2em; width: 55%;"><em>350 km/Hours</em></td>
		</tr>
		<tr>
			<td style=" padding-left: 0.2em;"><strong><em>Distance: </em></strong><em> </em></td>
			<td style=" padding-left: 0.2em;"><em>376 km</em></td>
		</tr>
		<tr>
			<td style=" padding-left: 0.2em;"><strong><em>Departure Xian to Luoyang: </em></strong><em> </em></td>
			<td style=" padding-left: 0.2em;"><em>17:43 pm</em></td>
		</tr>
		<tr>
			<td style=" padding-left: 0.2em;"><strong><em>Arrival at Luoyang:</em></strong></td>
			<td style=" padding-left: 0.2em;"><em>19:15 pm</em></td>
		</tr>
	</tbody>
</table>

<p><strong>Stay:</strong> <em>Checked in the hotel and stayed in </em>Luoyang Friendship Guest House,</p>
</div>
</div>

<div align="center" class="col-lg-4 col-md-4 col-sm-12" style="padding: 0px; margin: 0px;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour8.jpg" style="padding-left: 20px; width: 95%; height: auto;" /></div>
</div>

				<div class="row" id="day5" style="padding: 0px; margin: 0px; padding-top: 30px;">
<p><strong>Day5:<br />
Luoyang, Henan<br />
June 10, 2019</strong></p>

<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px; margin: 0px;">
<p><strong>After breakfast,</strong> we went to one of the three treasures of stone carving art in China <strong>Longmen Grottoes</strong> The <strong>Longmen Grottoes</strong> or <strong>Longmen Caves</strong> are some of the finest examples of Chinese Buddhist art. Housing tens of thousands of statues of Buddha and his disciples, they are located 12 kilometres (7.5 mi) south of present day Luoyang in Henan province, China. The images, many once painted were carved as outside rock reliefs and inside artificial caves excavated from the limestone cliffs of the Xiangshan and Longmenshan, running east and west. The Yi River (Chinese: flows northward between them and the area used to be called <strong>Yique</strong>; &#39;The Gate of the Yi River&#39;). The alternative name of &quot;Dragon&#39;s Gate Grottoes&quot; derives from the resemblance of the two hills that check the flow of the Yi River to the typical &quot;Chinese gate towers&quot; that once marked the entrance to Luoyang from the south. (The <em><strong>Longmen Grottoes</strong></em> or <em><strong>Longmen Caves</strong></em> are some of the finest examples of <em><strong>Chinese</strong></em> Buddhist art. Housing thousands of statues of Buddha. We saw <strong>Xixi Grottoes </strong>such as <strong>Qianxi Temple, Binyang Cave, Wanfo Cave,</strong> <strong>Lotus Cave, Fengxian Temple</strong>.)</p>
</div>

<div class="col-lg-6 col-md-6 col-sm-12" style="padding: 0px; margin: 0px;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour9.jpg" style="padding-right: 20px; width: 95%; height: auto;" /></div>

<div class="col-lg-6 col-md-6 col-sm-12" style="padding: 0px; margin: 0px;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour10.jpg" style="padding-left: 20px; width: 95%; height: auto;" /></div>

<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px; margin: 0px; padding-top: 30px;">
<p>The bus took us to the ancient capital of the 13th Dynasty &ndash; Luoyang. We visited the antique <strong>Lijingmen Street</strong> and explored the old <strong>Luoyang City.</strong><br />
<strong><em>Travel distance by Bus from Luoyang to Dengfeng: </em></strong>90 km <em>Dengfeng</em><strong><u>, Zhengzhou</u></strong></p>
</div>

<div class="col-lg-8 col-md-8 col-sm-12" style="padding: 0px; margin: 0px;">
<p>Took the bus to <strong>Dengfeng</strong> (90KM, 1.5 hours) and visited <strong>Shaolin Temple,</strong> inside the Shaolin Temple we saw the play <em>&quot;the world is working hard to get Shaolin&quot;.</em></p>

<p>Afternoon, We visited the birthplace of Shaolin Kungfu, and also got the opportunity <strong>to see Live</strong>&nbsp; <strong>Shaolin Martial Arts Performance </strong>to appreciate the authentic Shaolin Kung Fu, one must go to <strong>Dengfeng Temple in Dengfeng</strong>, <strong>Henan.</strong> We also visited <strong>Tallinn (Dengfeng Temple in Dengfeng</strong>) which has more than 240 existing pagodas. After visit the <strong>Changwan </strong><strong>Temple</strong>, take a bus to Zhengzhou.</p>
</div>

<div class="col-lg-4 col-md-4 col-sm-12" style="padding: 0px; margin: 0px;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour11.jpg" style="padding-left: 20px; width: 95%; height: auto;" /></div>

<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px; margin: 0px;">
<p><strong>Stay:</strong> <em>Checked in the </em>Zheng Zhou Guangdong Hotel <em>and stayed in </em>Zhengzhou</p>
</div>
</div>
				
				<div class="row" id="day6" style="padding: 0px; margin: 0px; padding-top: 30px;">
<p><strong>Day6:<br />
Dengfeng, Zhengzhou<br />
June 11, 2019 </strong></p>

<div class="col-lg-6 col-md-6 col-sm-12" style="padding: 0px; margin: 0px;">
<p>We visited the <strong>Erqi Square</strong> (Zhengzhou), the appearance of <strong>the 27<sup>th</sup> Memorial Tower</strong>, The <strong>Erqi Memorial Tower</strong> or called <strong>Erqi Tower</strong> is located in the Centre of Zhengzhou city, Henan province, China. It was historically the tallest tower in the city, but not anymore.</p>

<p>It is steel and concrete structure erected as a memorial to the heroes who lost their life during the February 27<sup>th</sup> strike. This double-parallel-bodied tower contains a spiral staircase running up one side, and an exhibition hall in the other. One of the best features of this tower, however, is the view of the city as seen from the top, which makes the climb well worth the effort. We took the bus from Zhengzhou took the high-speed train to Beijing, and arrived at the hotel by bus.</p>

<p><strong>Stay:</strong> Zheng Zhou Guangdong Hotel.</p>

<div class="table-responsive" style="padding-left: 0px;">
<table border="0" cellpadding="0" cellspacing="0" style="width:500px">
	<tbody>
		<tr>
			<td style=" padding-left: 0.2em; width: 45%;"><strong><em>High Speed Train:</em></strong></td>
			<td style=" padding-left: 0.2em; width: 55%;"><em>350 km/Hours</em></td>
		</tr>
		<tr>
			<td style=" padding-left: 0.2em;"><strong><em>Distance: </em></strong><em> </em></td>
			<td style=" padding-left: 0.2em;"><em>692 km</em></td>
		</tr>
		<tr>
			<td style=" padding-left: 0.2em;"><strong><em>Departure Zhengzhou: </em></strong><em> </em></td>
			<td style=" padding-left: 0.2em;"><em>13:39 pm </em></td>
		</tr>
		<tr>
			<td style=" padding-left: 0.2em;"><strong><em>Arrival at Beijing:</em></strong></td>
			<td style=" padding-left: 0.2em;"><em>16:25 pm</em></td>
		</tr>
	</tbody>
</table>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12" style="padding: 0px; margin: 0px;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour12.jpg" style="padding-left: 20px; width: 95%; height: auto;" />
<p style="text-align: center; padding-left: 0 20px 0 20px;"><strong>Stay:</strong> Checked in the Days Hotel Beijing Guomen, Beijing.</p>
</div>
</div>

				<div class="row" id="day7" style="padding: 0px; margin: 0px; padding-top: 30px;">
<p><strong>Day7:<br />
Beijing, China<br />
June 12, 2019</strong></p>

<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px; margin: 0px;">
<p>After breakfast, the group proceeded to <strong>&quot;Tiananmen Square&quot;,</strong> <strong>&quot;Mao Chairman Memorial Hall&quot;</strong> and the Forbidden City.<br />
We visited the Western District of the Forbidden City <strong>Shoukang Palace</strong>, <strong>Cienning Palace. </strong>We explored the <strong>&quot;</strong><strong>Zhen Huan&rsquo;s</strong> <strong>Residence</strong>&rdquo; to see the essence of ancient architectural art, and listened to the story of 24 emperors of the Ming and Qing Dynasties. The legendary story is about the profound Chinese culture. The Forbidden City is the <strong>Royal Palace of the</strong> <strong>Ming and Qing Dynasties </strong>and the largest and most existing in China.<br />
The palace is a complete Royal Architectural complex. The Forbidden Palace is grand in scale, with a neat layout, exquisite architecture, rich and luxurious, and a collection of rare cultural relics.<br />
The essence of ancient architecture, culture and art. We went to <strong>Nanzhao Ancient Lane</strong>, <strong>Beijing</strong></p>

<p><strong>Stay:</strong> &nbsp;Days Hotel Beijing Guomen, Beijing</p>

<p>&nbsp;</p>

</div>

<div class="col-lg-6 col-md-6 col-sm-12" style="padding: 0px; margin: 0px;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour13.jpg" style="padding-right: 20px; width: 95%; height: auto;" /></div>

<div class="col-lg-6 col-md-6 col-sm-12" style="padding: 0px; margin: 0px;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour15.jpg" style="padding-left: 20px; width: 95%; height: auto;" /></div>

<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px; margin: 0px; text-align: center;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour16.jpg" style="width: 95%; height: auto;" /></div>
</div>
					
				<div class="row" id="day8" style="padding: 0px; margin: 0px; padding-top: 30px;">
<p><strong>Day8:<br />
Beijing, China<br />
June 13, 2019</strong></p>

<div class="col-lg-8 col-md-8 col-sm-12" style="padding: 0px; margin: 0px;">
<p>After breakfast we proceeded to <strong>Badaling Great Wall</strong>. &nbsp;The Great Wall is a symbol of the Chinese Nation. It is more than 12,000 miles long and is one of the greatest buildings in the world. The <strong>Badaling</strong> <strong>Great Wall</strong> is the best preserved section of the Ming Great Wall and is the most representative. The section of the Great Wall is steep and condescending. It is an important military barrier in the Ming Dynasty and an important barrier to the capital Beijing.</p>
</div>

<div class="col-lg-4 col-md-4 col-sm-12" style="padding: 0px; margin: 0px;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour17.jpg" style="padding-left: 20px; width: 95%; height: auto;" /></div>

<div class="col-lg-4 col-md-4 col-sm-12" style="padding: 0px; margin: 0px;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour18.jpg" style="padding-right: 20px; width: 95%; height: auto;" /></div>

<div class="col-lg-8 col-md-8 col-sm-12" style="padding: 0px; margin: 0px;">
<p>After breakfast we proceeded to <strong>Badaling Great Wall</strong>. &nbsp;The Great Wall is a symbol of the Chinese Nation. It is more than 12,000 miles long and is one of the greatest buildings in the world. The <strong>Badaling</strong> <strong>Great Wall</strong> is the best preserved section of the Ming Great Wall and is the most representative. The section of the Great Wall is steep and condescending. It is an important military barrier in the Ming Dynasty and an important barrier to the capital Beijing.</p>
</div>

<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px; margin: 0px;">
<p>In the afternoon, we visited <strong>Olympic Park </strong>in the north of North Fourth Ring Road. Here we saw <strong>Bird&#39;s Nest, </strong>which is the main stadium of the 29th Olympic Games in 2008. (After the Olympic Games, it became a large-scale professional place for Beijing citizens to participate in sports activities and enjoyed sports and entertainment.) We went to Beijing<strong> Water Cube</strong></p>

<p><strong>Stay:</strong> Days Hotel Beijing Guomen, Beijing<br />
&nbsp;</p>
</div>

<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px; margin: 0px; text-align: center;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour19.jpg" style="width: 95%; height: auto;" /></div>
</div>

				<div class="row" id="day9" style="padding: 0px; margin: 0px; padding-top: 30px;">
<p><strong>Day9:<br />
Beijing, China<br />
June 14, 2019</strong></p>

<div class="col-lg-8 col-md-8 col-sm-12" style="padding: 0px; margin: 0px;">
<p>After breakfast we visited The Beijing Museum of Natural History which is located at 126 Tian Qiao Nan Street, Dongcheng District Beijing. This is the most popular natural history museum in China. The Gallery of Ancient Reptiles presents the landscape of more than 200 million years ago to the audience and demonstrates the complicated process in which the vertebrates moved from the oceans to the lands, the representative animals being the crossopterygii, the ichthyostega, the caecilian, and the Dimetrodon. At the center of the exhibition hall are the life-like dinosaur skeleton groups, such as the first dinosaur found in China- Lufengosaurus huenei, the 26-meter-long Mamenchisaurus Jingyanebsis, the dominant Tyrannosaurus rex, small and slim Deinonychus, the Tuojiangosaurus which had lancet plates cover its back, the commanding Yangchuanosaurus, the pterosaurs which has long wings, and the ichthyosaurs which dominated the oceans.</p>
</div>

<div class="col-lg-4 col-md-4 col-sm-12" style="padding: 0px; margin: 0px;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour21.jpg" style="padding-left: 20px; width: 95%; height: auto;" /></div>

<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px; margin: 0px;">
<p><strong>After Lunch:</strong> We proceeded to <strong>&quot;Tiantan Park&quot;</strong> to visit The <strong>Temple of Heaven</strong>, which is an imperial complex of religious buildings situated in the southeastern part of central Beijing. The complex was visited by the Emperors of the Ming and Qing dynasties for annual ceremonies of prayer to Heaven for good harvest.</p>
</div>

<div class="col-lg-8 col-md-8 col-sm-12" style="padding: 0px; margin: 0px;">
<p>The temple complex was constructed from 1406 to 1420 during the reign of the Yongle Emperor, who was also responsible for the construction of the Forbidden City in Beijing. The complex was extended and renamed Temple of Heaven during the reign of the Jiajing Emperor in the 16th century. Jiajing also built three other prominent temples in Beijing, the Temple of the Sun in the east, the Temple of Earth in the north, and the Temple of Moon in the west. The Temple of Heaven was renovated in the 18th century under the Qianlong Emperor. By then, the state budget was insufficient, so this was the last large-scale renovation of the temple complex in imperial times.<br />
&nbsp;</p>

<p><strong>Stay:</strong> Days Hotel Beijing Guomen, Beijing</p>
</div>

<div class="col-lg-4 col-md-4 col-sm-12" style="padding: 0px; margin: 0px;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour22.jpg" style="padding-left: 20px; width: 95%; height: auto;" /></div>
</div>

				<div class="row" id="day10" style="padding: 0px; margin: 0px; padding-top: 30px;">
<p><strong>Day10:<br />
Beijing, China<br />
June 15, 2019</strong></p>

<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px; margin: 0px;">
<p>After breakfast we visited <strong>Beijing World Park</strong> is a theme park that attempts to give visitors the chance to see the world without having to leave Beijing. The park covers 46.7 hectares and is located in the southwestern Fengtai District of Beijing. It is about 17 km from Tiananmen, the City center, and 40 km from the Capital International Airport. The park opened in 1993 and is estimated to receive 1.5 million visitors annually.</p>

<p>&nbsp;</p>

<p>After lunch we visited China Porcelain Museum. Our boys were also taught the art of making Clay pots.</p>
</div>

<div class="col-lg-4 col-md-4 col-sm-12" style="padding: 0px; margin: 0px;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour23.jpg" style="padding-right: 2px; width: 95%; height: auto;" /></div>

<div class="col-lg-4 col-md-4 col-sm-12" style="padding: 0px; margin: 0px;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour24.jpg" style="padding-left: 2px; padding-right: 2px; width: 95%; height: auto;" /></div>

<div class="col-lg-4 col-md-4 col-sm-12" style="padding: 0px; margin: 0px;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour25.jpg" style="padding-left: 2px; width: 95%; height: auto;" /></div>

<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px; margin: 0px;">
<p style="color: red;"><strong>Change of Hotel </strong></p>

<p>We checked out <strong>Days Hotel Beijing Guomen</strong> for another hotel. This hotel was near the airport however we found that hotel, which we booked only for 9 hours, was beyond satisfactory for the students. Thus, without compromising we immediately changed our hotel, and within 30 minutes we checked-in to <strong>Shanshui Trends Hotel</strong> Beijing Branch.</p>
</div>
</div>

				<div class="row" id="day11" style="padding: 0px; margin: 0px; padding-top: 10px;">
<p><strong>Beijing Airport<br />
June 16, 2019</strong></p>

<div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0px; margin: 0px;">
<p>We checked out from <strong>Shanshui Trends Hotel</strong> on Sunday, 16<sup>th</sup> June, 2019 at 3:30 am.</p>

<p>We took our bus towards Beijing International Airport and boarded on plane at 6:30 am. &nbsp;</p>
</div>

<div class="col-lg-8 col-md-8 col-sm-12" style="padding: 0px; margin: 0px;">
<div class="table-responsive" style="padding-left: 3px;">
<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td style=" padding-left: 0.2em; width: 50%;"><strong><em>Departure from Beijing:</em></strong></td>
			<td style=" padding-left: 0.2em; width: 50%;"><em>Sunday, 16<sup>th</sup> June, 2019 at 7:20 am Beijing time</em></td>
		</tr>
		<tr>
			<td style=" padding-left: 0.2em;"><strong><em>Arrival at Dubai:</em></strong></td>
			<td style=" padding-left: 0.2em;"><em>Sunday, 16<sup>th</sup> June, 2019 at 11:20 am Dubai time</em></td>
		</tr>
		<tr>
			<td style=" padding-left: 0.2em;"><strong><em>Flight:</em></strong></td>
			<td style=" padding-left: 0.2em;"><em>Emirates EK309</em></td>
		</tr>
		<tr>
			<td style=" padding-left: 0.2em;"><strong><em>Stay at Dubai Airport:</em></strong></td>
			<td style=" padding-left: 0.2em;"><em>10 hours</em></td>
		</tr>
	</tbody>
</table>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12" style="padding: 0px; margin: 0px;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour26.jpg" style="padding-left: 20px; width: 95%; height: auto;" /></div>

<p><strong>Dubai Airport<br />
June 16, 2019</strong></p>

<div class="col-lg-8 col-md-8 col-sm-12" style="padding: 0px; margin: 0px;">
<p>We reached Dubai&nbsp;after eight hours flight; we had to stay for 10 hours. Boys did shopping at Dubai Duty Free shops. We reached Lahore on Monday, 17<sup>th</sup> June, 2019.</p>
</div>

<div class="col-lg-4 col-md-4 col-sm-12" style="padding: 0px; margin: 0px;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour26.jpg" style="padding-left: 20px; width: 95%; height: auto;" /></div>

<div class="col-lg-8 col-md-8 col-sm-12" style="padding: 0px; margin: 0px;">
<div class="table-responsive" style="padding-left: 3px;">
<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
	<tbody>
		<tr>
			<td style=" padding-left: 0.2em; width: 50%;"><strong><em>Departure from Dubai:</em></strong></td>
			<td style=" padding-left: 0.2em; width: 50%;"><em>Sunday, 16<sup>th</sup> June, 2019 at 9:50 pm Dubai time</em></td>
		</tr>
		<tr>
			<td style=" padding-left: 0.2em;"><strong><em>Arrival at Lahore:</em></strong></td>
			<td style=" padding-left: 0.2em;"><em>Sunday, 17<sup>th</sup> June, 2019 at 1:50 am Pakistan time</em></td>
		</tr>
		<tr>
			<td style=" padding-left: 0.2em;"><strong><em>Flight:</em></strong></td>
			<td style=" padding-left: 0.2em;"><em>Emirates EK622</em></td>
		</tr>
	</tbody>
</table>
</div>
</div>

<div class="col-lg-4 col-md-4 col-sm-12" style="padding: 0px; margin: 0px;"><img src="https://aitchison.edu.pk/img/china_tour2019/tour27a.jpg" style="padding-left: 20px; width: 95%; height: auto;" /></div>

<div class="col-lg-12 col-md-12 col-sm-12">
<p><strong>Old Building, Aitchison College</strong></p>

<p>The College transport was already at the airport. After the immigration clearance, we reached at Old Building after 40 minutes, and the happy&nbsp;journey came to its end.&nbsp;All the parents were already there to pick up their sons.</p>

<p>&nbsp;</p>

<p>Submitted by:</p>

<p>&nbsp;</p>

<p><strong>Sarah Liu </strong></p>

<p>Head of Chinese Department</p>

<p>The Prep School</p>

<p>Aitchison College</p>

<p>Lahore.</p>
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
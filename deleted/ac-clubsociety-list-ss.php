<?php
	include("standard/main.php"); 
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=3;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Clubs &amp; Societies</title>

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
    <link rel='stylesheet prefetch' href='css/circliful.css'>
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
                    <div class="aboutus_area wow fadeInLeft" align="center">
                            <h2 class="titile" style="text-align: center;">Clubs &amp; SociEties - Senior School</h2>
                            <p></p>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
            	<table class="jambo_jable table table-bordered" style="width:100%">
					<thead>
						<tr style="color: #FFFFFF; background-color: #07095B; text-align: center;">
							<th>Sr#</th>
							<th>Club &amp; Society</th>
							<th>Staff Advisor</th>
							<th>Presidents</th>
							<th>General Secretaries</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Art &amp; Media Society</td>
							<td>Ms. Sara Ahmer</td>
							<td>Hamza Waris</td>
							<td>Sheikh Muhammad Ishaq</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Bazm-e-Adab Society</td>
							<td>Mr. Khalid Mehmood Atta<br />
							Mr. Ali Jamal</td>
							<td>Hamd&nbsp; Azan</td>
							<td>Umer Azeem<br />
							Muhammad Wasif Farrukh</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Chess Club</td>
							<td>Mr. M. Haider Hassan<br />
							Mr. Muhammad Yaqoob</td>
							<td>Syed Ali Ahmad Shah</td>
							<td>Sher Shah Mir</td>
						</tr>
						<tr>
							<td>4</td>
							<td>Computer Society</td>
							<td>Mr. Abdul Wahhab</td>
							<td>Asher Javaid</td>
							<td>Nahayan Hussain Minhas</td>
						</tr>
						<tr>
							<td>5</td>
							<td>English Debating Society</td>
							<td>Ms. Halima Altaf</td>
							<td>Reza Muhammad Khan</td>
							<td>Shahmeer Mohammad Nawaz<br />
							Muhammad Rafay Azhar</td>
						</tr>
						<tr>
							<td>6</td>
							<td>Dramatics Club</td>
							<td>Samara Salahuddin</td>
							<td>Sadiq Karim Soofi</td>
							<td>Faraz Imran Butt<br />
							Rohaan Inaam Qazi</td>
						</tr>
						<tr>
							<td>7</td>
							<td>Entrepreneurial Society</td>
							<td>Syed Shahmir Raza</td>
							<td>Salman Abdullah</td>
							<td>Muhammad Omer Sajid<br />
							Hassan Sohail</td>
						</tr>
						<tr>
							<td>8</td>
							<td>French Club</td>
							<td>Ms. Mehar Mansoor</td>
							<td>Hyder Ali Bokhari</td>
							<td>Hassan Ali</td>
						</tr>
						<tr>
							<td>9</td>
							<td>Geography Society</td>
							<td>Ms. Zahra Shahid</td>
							<td>Mohammad Shahmeer<br />
							Chaudhry</td>
							<td>Shams Ahmed Qureshi<br />
							Ali Bilal</td>
						</tr>
						<tr>
							<td>10</td>
							<td>German Club</td>
							<td>Ms. Andleeb Zahra Syed</td>
							<td>Saif Ahmed</td>
							<td>Senan Khawaja<br />
							Schazain Babar</td>
						</tr>
						<tr>
							<td>11</td>
							<td>Humanitarian and<br />
							&nbsp;Environment Society</td>
							<td>Ms. Satia Tazyeen</td>
							<td>Muhammad Dawood Khan</td>
							<td>Chaudhry Muhammad Ali Bhoon<br />
							Noor Ullah</td>
						</tr>
						<tr>
							<td>12</td>
							<td>Islamic Society</td>
							<td>Mr. Khalid Saifullah</td>
							<td>Abdur Rehman</td>
							<td>Myer Afzaal</td>
						</tr>
						<tr>
							<td>13</td>
							<td>Law Society</td>
							<td>Mr. Shoaib Bin Hassan</td>
							<td>Muhammad Danial<br />
							Khan Khichi</td>
							<td>Shamil Khan<br />
							Muhammad Hayat Lak</td>
						</tr>
						<tr>
							<td>14</td>
							<td>Literary Society</td>
							<td>Mr. Muhammad Tariq<br />
							Mr. Ahmer Ibrahim</td>
							<td>Yet to decide</td>
							<td>Yet to decide</td>
						</tr>
						<tr>
							<td>15</td>
							<td>Mathematics Society</td>
							<td>Ms. Tasneem<br />
							Aslam Zaeem</td>
							<td>Syed Mustafa Haroon</td>
							<td>Arsum Nadeem Chaudhary<br />
							M. Abdullah</td>
						</tr>
						<tr>
							<td>16</td>
							<td>Model United Nations<br />
							&nbsp;Society</td>
							<td>Ms. Shazia Habib</td>
							<td>Rafay Fawad Shamsi</td>
							<td>Muhammad Wasay Mir<br />
							Abbas Fateh ud Din</td>
						</tr>
						<tr>
							<td>17</td>
							<td>Music Society</td>
							<td>Ms. Sara Ahmer<br />
							Mr. Ali Shehroze Qizalbash</td>
							<td>Rafae Ali Bokhari</td>
							<td>Adeen Qasim<br />
							Azmaraiy Hyder</td>
						</tr>
						<tr>
							<td>18</td>
							<td>Pakistan Studies &amp;<br />
							Archicve Society</td>
							<td>Mr. Tariq Yasin</td>
							<td>Ahad Ahmad Bajwa</td>
							<td>Syed Faizan Ali Kirmani<br />
							Murtaza Yar Hiraj</td>
						</tr>
						<tr>
							<td>19</td>
							<td>Quiz Society</td>
							<td>Ms. Maham<br />
							Hammad Malik</td>
							<td>Abdullah Bin Muhammad</td>
							<td>Aamir Shahid Javed</td>
						</tr>
						<tr>
							<td>20</td>
							<td>Science Society</td>
							<td>Mr. Muhammad Kamran</td>
							<td>Sheharyar Tariq</td>
							<td>Muhammad Huzaifa Ali<br />
							Muhammad Abdullah Khurram<br />
							Mustafa Ihsan</td>
						</tr>
					</tbody>
				</table>

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
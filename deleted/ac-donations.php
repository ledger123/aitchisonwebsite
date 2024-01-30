<?php
	include("standard/main.php"); 
	require_once('recaptchalib.php');
	$banner_image_url="img/pageimages/misc.jpg";
	//$banner_text="About Aitchison College";
	$banner_text="";
	$default_open=0;
	
	$publickey = "6Le88wYUAAAAAL2MkelJtp5OkOLWpU5-3Yw1gS5o";
	$privatekey = "6Le88wYUAAAAAHNniflCDr1OGRJn77TVoCg7ZS5J";
	if(isset($_POST['btnSSubmit'])){
		$resp = recaptcha_check_answer ($privatekey,
                                        $_SERVER["REMOTE_ADDR"],
                                        $_POST["recaptcha_challenge_field"],
                                        $_POST["recaptcha_response_field"]);
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Donations</title>

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
    <link href="style23012017-small.css" rel="stylesheet">
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

</style>
<style class="cp-pen-styles">

.donation-meter {
  /*margin-left: 30px;*/
  width: 150px;
  
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
    <?php include("phpinclude/header23012017.php");?>
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
                        <h2 class="titile">Donations</h2>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-left: 0px;">
                                <h2 class="title" style="color:#000000; text-align: center; padding-left: -5px; margin-left: 0px; font-size: 28px; padding-left: 0px; margin-left: 0px;">Priority Project</h2>
                                <h2 class="title" style="color:#000000; text-align: center; padding-left: -5px; margin-left: 0px; font-size: 20px;">The Old Building: Conservation and Preservation</h2><br>
                            
                            </</div>
                         </div>
                         <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                            <img src="./alumni/img/makeagift-pic/makeagift-pic31.jpg" style="width: 100%"></div>
                            <div class="col-lg-4 col-md-4 col-sm-12" style="padding-bottom: 40px; text-align: justify; font-size: 15px;">
                                <p>The 'Old Building' is our greatest architectural treasure: standing iconic as an educational 'mother'; the keeper of memories and boyhoods' past. Its conservation and preservation is of utmost importance to us all.</p>
                                    </div>
                            <div class="col-lg-4 col-md-4 col-sm-12"><img src="./alumni/img/makeagift-pic/makeagift-pic1.jpg" style="width: 100%"></div>
                         </div>
                         <div class="row">
                         	<div class="col-lg-12 col-md-12 col-sm-12">
                            	<p>Honoured architect Mr. Kamil Khan Mumtaz has agreed to oversee the building's care and attention. Thus, its integrity will be preserved and maintained. Funding this on-going task is a fine way for Old Boys to show their gratitude and tangible connection with the College. </p> 
                            </div>
                         </div>
                         <div class="row">
                           <div class="col-md-offset-1 col-md-10">
                           <div align="center"> </div>
                           
                           <div class="contact-area-center">
                            
                            <div align="center">
                                <?php
                                    $totalamount=50;
                                    $gained=13.825;
                                    $percentagegained=intval($gained/$totalamount*100);
                                ?>
                               <div class="donation-meter">
                                  <strong>Our Goal</strong>
                                  <strong class="goal">Rs. <?php echo $totalamount;?>M</strong>
                                  <span class="glass" >
                                      <strong class="total" style="bottom: <?php echo $percentagegained;?>%">Rs. <?php echo $gained;?>M</strong>
                                      <span class="amount" style="height: <?php echo $percentagegained;?>%"></span>
                                  </span>
                                  <div class="bulb" style="margin-top:-18px;">
                                      <span class="red-circle"></span>
                                      <span class="filler">
                                          <span></span>
                                      </span>
                                  </div>
                                </div>
                               <!--<img src="img/br1.jpg" style="width:182px; height:218px; margin-top:15px;" /> &nbsp;
                                                  <img src="img/br4.png" style="width:200px; height:350px; margin-top:15px;" /> &nbsp;-->
                              
                              </div>
            
                               <h2 class="title" style="color:#000000;">&nbsp;</h2>
                               <h2 class="title" style="color:#000000;">How to Donate</h2>
                               <p>If you would like to donate, please send a pay order or cheque made payable to Principal Aitchison College, to the Alumni Office, Aitchison College, Shahrah-e-Quaid-e-Azam, Lahore – 54000, Pakistan.
            </p>
                               <p>Funds for the Old Building will be lodged into a special Endowment Fund. </p>
            <h2 class="title" style="color:#000000;">&nbsp;</h2>
                               <h2 class="title" style="color:#000000;">Contact</h2>
                               <!--<h3>Contact</h3>-->
                               <p>For any queries or information, you may send us an email at <a href="mailto:alumniofficer@aitchison.edu.pk" target="_blank">alumniofficer@aitchison.edu.pk</a></p><address class="single-address">
                               <p>or call us on <a href="tel:%2B92-42-111-363-063" value="+9242111363063" target="_blank">+92-42-111-363-063</a> (Ext. 427).</p>
                               </address> 
                               <?php /*?><div class="footer-right contact-social">
                                  <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/uas/login"><i class="fa fa-linkedin"></i></a>
                        <a href="https://www.pinterest.com"><i class="fa fa-pinterest"></i></a>
                        
                       
                                </div><?php */?> 
                                             
                             </div>
                             
                         
                         <div class="col-md-12" align="center">
                           <?php 
            $action=$_REQUEST['action']; 
            if ($action=="")    /* display the contact form */ 
                { 
                ?> 
                <form  action="" method="POST" enctype="multipart/form-data"> 
                <input type="hidden" name="action" value="submit"> 
                Your name:<br> 
                <input name="name" type="text" value="" size="34"/><br> 
                Your email:<br> 
                <input name="email" type="text" value="" size="34"/><br> 
                Your message:<br> 
                <textarea name="message" rows="7" cols="32"></textarea><br>
                Verification Code:<br>
                <?php //echo recaptcha_get_html($publickey, $error); 
                    echo recaptcha_get_html($publickey,null,1);
                ?><br> 
                <input type="submit" name="btnSSubmit" value="Send email"/> 
                </form> 
                <?php 
                }  
            else                /* send the submitted data */ 
                { 
                $name=$_REQUEST['name']; 
                $email=$_REQUEST['email']; 
                $message=$_REQUEST['message'];
                if ($resp->is_valid) { 
                if (($name=="")||($email=="")||($message=="")) { 
                    echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
                }else{         
                    $from="From: $name<$email>\r\nReturn-path: $email"; 
                    $subject="Message sent using your contact form"; 
                    mail("alumniofficer@aitchison.edu.pk", $subject, $message, $from); 
                    //mail("web@aitchison.edu.pk", $subject, $message, $from); 
                    echo "Email sent!"; 
                 }
                 }else{
                    echo $login_msg="Sorry! You have entered Wrong varification code. please fill <a href=\"\">the form</a> again.";	
                 } 
                }   
            ?> 
                </div>
                         </div>
                           
                           
                           
                           
                           
                           
                           
                           </div>
                    </div>
                </div>
            </div>
            
            <div class="clearfix"></div>
            
            
            
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
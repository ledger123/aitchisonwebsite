<?php
	include("phpinclude/main.php");
	//require_once('../recaptchalib.php');
	//$publickey = "6Le88wYUAAAAAL2MkelJtp5OkOLWpU5-3Yw1gS5o";
	//$privatekey = "6Le88wYUAAAAAHNniflCDr1OGRJn77TVoCg7ZS5J";
	if(isset($_POST['btnSSubmit'])){
		/*$resp = recaptcha_check_answer ($privatekey,
                                        $_SERVER["REMOTE_ADDR"],
                                        $_POST["recaptcha_challenge_field"],
                                        $_POST["recaptcha_response_field"]);*/
		
		$resp = false;
		 
		if ( isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["captchaCode"]==$_POST["captcha"] ) {
			$resp = true;
		}
	}
	$title="Overseas Alumni Branches";
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include_once("phpinclude/headercontrol.php");  ?>
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $title;?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>  
    <!-- Bootstrap progressbar  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css"/> 
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <!-- Lato for Title -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"> 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    	.h3{
			color: #000000 !important;
			font-size: 20px !important; 
			text-align: left;
			margin: 3px;
		}
		.padd0{
			margin: 0px;
			padding: 0px;	
		}
    </style>
    
  </head>
  <body> 

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->
  <!-- Start header -->
  <?php 
  	include("phpinclude/header.php");
  ?>
  <!-- End header -->
  <!-- Start login modal window -->
  <?php 
  	include("phpinclude/login_modal_window.php");
  ?>
  <!-- End login modal window -->
  <!-- BEGIN MENU -->
  <?php 
  	include("phpinclude/menuarea.php");
  ?>
  <!-- END MENU -->   
  <!-- Start single page header -->
  <section id="single-page-header">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="single-page-header-left">
              <h2>Overseas Alumni</h2>
              <p></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->
  <!-- Start contact section  -->
  <section id="contact">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="title-area">
             <h2 class="title" style="color:#000000; text-align: left; padding-bottom: 35px;">Overseas Alumni Branches on the march</h2>
              <!--<span class="line"></span>-->
              <img src="img/overseas-alumni.jpg" width="400" height="400" class="img-responsive" align="right" style="padding-left: 40px;">
              <p align="justify">
              		Are you an Old Boy who lives abroad? Do you wish to connect with other Old Boys in your city or region?
              </p>
              <p align="justify">
              		Then join us in developing overseas branches of Old Boys that will organize their own networking, social and fundraising events, connecting the alumni with each other and the College.
              </p>
              <p align="justify">
              		Tell us where you are and we will try to connect you with Aitchisonians in your area. Our alumni are spread across the globe and you will surely find many Old Boys where you least expected.
              </p>
              <h2 class="title" style="color:#000000; text-align: left; margin-top:20px; font-size: 24px; ">OVERSEAS BRANCHES</h2>
              <p style="margin-top:0px;" align="justify">We have Old Boys acting as Volunteer Conveners for gatherings in New York, San Francisco, Pacific Northwest, London, Toronto and Ottawa. If you are in any of these areas, please contact your respective Volunteer Convener to get in touch with fellow Aitchisonians.
              </p>
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="table-responsive">
                    <table class="table" width="100%" cellspacing="1" border="1" style="border: thin solid #ddd">
                        <tbody>
                            <tr>
                                <td width="50%">
                                    <h3 class="h3 title">New York</h3>
                                     <p align="justify">
                                                Sheheryar Hafeez<br>
                                                + 1 718 702 8953 <br>
                                                sheheryar.hafeez@gmail.com<br>
                                
                                     </p>
                                </td>
                                <td width="50%">
                                    <h3 class="h3 title">San Francisco Bay Area </h3>
                                    <p align="justify">
                                                Fahim Shafi<br>
                                                +1-925-567-3625<br>
                                                fahimshafi@hotmail.com<br>

                                    </p>

                                </td>
                                
                            </tr>
                            <tr>
                              <td>
                                    <h3 class="h3 title">Pacific Northwest</h3>
                                    <p align="justify">
                                                Hamza Masood<br>
                                                +1-609-379-9060<br>
                                                hamzamasood@gmail.com<br>
                                    </p>
</td>
                              <td>
                                    <h3 class="h3 title">London</h3>
                                    <p align="justify">
                                                Humza Aasim Yousuf<br>
                                                +44 7788 231565 <br>
                                                humzaay@gmail.com<br>
                                    
                                    </p>

                              </td>
                          </tr>
                            <tr>
                              <td>
                                    <h3 class="h3 title">Toronto </h3>
                                    <p align="justify">
                                                Shikoh Atif<br>
                                                +1-9055693583<br>
                                                shikoh@hotmail.com<br>

                                    </p>
                              </td>
                              <td>
                                    <h3 class="h3 title">Ottawa </h3>
                                    <p align="justify">
                                                Shahbaz Syed<br>
                                                +1-613-883-3821 <br> 
                                                s.shahbaz@gmail.com<br>

                                </p>

                              </td>
                          </tr>
                            <tr>
                              <td>
                              		<h3 class="h3 title">Istanbul </h3>
                                    <p align="justify">
                              			Shahmeer Ghiasuddin Khan<br>
                                        +905054171237<br>
                                        shahmeergkhan@gmail.com<br></p> 
                              </td>
                              <td>
                              		<h3 class="h3 title">Bremen, Germany</h3>
                                    <p align="justify">
                                    	Ahmad Saeed<br>
                                        +491749982014<br>
                                        ahmed_saeed493@hotmail.com<br>
                                    </p>
                              </td>
                              
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
     </div>
                                
	
     
     
     <h2 class="title" style="color:#000000; text-align: left;  font-size: 24px;">Strengthen your existing network</h2>
	 <p align="justify" style="margin-top:0px;">In case you are already part of an overseas alumni network, please inform us at the alumni office. The College can increase exposure for your branch and its activities through its official alumni portal.</h3>
     <h2 class="title" style="color:#000000; text-align: left; margin-top:25px; font-size: 24px;">Contact the Alumni Office</h2>
	 <p align="justify" style="margin-top:0px;">
     	You may send us an email at <a href="mailto:alumniofficer@aitchison.edu.pk">alumniofficer@aitchison.edu.pk</a> or call us on +92-42-36363063 (Ext: 427).
     </p>
     		
   		   </div>
         </div>
         <div class="col-md-12">
           <div class="cotact-area">
             <div class="row">
               <div class="col-md-4">
                 <div class="contact-area-left">
                  <!-- <h4>Contact Info</h4>
                   <p>For any queries or suggestions, please contact us.</p>
                   <address class="single-address">
                     <p>Alumni Office, Aitchison College, Shahrah-e- Quaid-e-Azam, Lahore – 54000, Pakistan
</p>
                     <p> alumniofficer@aitchison.edu.pk</p>
                     <p>(042) 111-363-063 (427)</p>
                   </address> 
                   <div class="footer-right contact-social">
                      <a href="index.html"><i class="fa fa-facebook"></i></a>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                      <a href="#"><i class="fa fa-google-plus"></i></a>
                      <a href="#"><i class="fa fa-linkedin"></i></a>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>      -->          
                 </div>
               </div>
               <div class="col-md-8">
                 <div class="contact-area-right">
               <!--    <form action="" class="comments-form contact-form">
                    <div class="form-group">                        
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">                        
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                     <div class="form-group">                        
                      <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">                        
                      <textarea placeholder="Comment" rows="3" class="form-control"></textarea>
                    </div>
                    <button class="comment-btn">Submit Comment</button>
                  </form>-->
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       
     </div>
  </section>
  <!-- End contact section  -->
  <!-- Start footer -->
  <?php 
  	include("phpinclude/footer.php");
  ?>
  <!-- End footer -->
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>    
  <!-- mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
 <!-- counter -->
  <script src="assets/js/waypoints.js"></script>
  <script src="assets/js/jquery.counterup.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 
  <!-- progress bar   -->
  <script type="text/javascript" src="assets/js/bootstrap-progressbar.js"></script>  
  
 
  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
    
  </body>
</html>
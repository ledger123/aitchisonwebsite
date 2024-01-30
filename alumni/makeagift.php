<?php
	include("phpinclude/main.php");
	header("location: ../make-a-gift");
	exit();
	
	require_once('../recaptchalib.php');
	$publickey = "6Le88wYUAAAAAL2MkelJtp5OkOLWpU5-3Yw1gS5o";
	$privatekey = "6Le88wYUAAAAAHNniflCDr1OGRJn77TVoCg7ZS5J";
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
	
	$title="Aitchison : Make A Gift";
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
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript">
    	var RecaptchaOptions = {
    			theme : 'white'
    	};
	</script>

<style class="cp-pen-styles">body {
  font-family: Helvetica;
}

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
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2>Make a Gift</h2>
              
            </div>
          </div>
          <!--<div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Contact</li>
              </ol>
            </div>-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->
  <!-- Start contact section  -->
  <section id="contact">
     <div class="container">
     	<div class="col-md-12" align="center">
       <!--<div class="row">
         <div class="col-md-12">           
              <h2 class="title" style="color:#000000;">Make a Gift</h2>
              <div class="row">
              	<div class="col-lg-12 col-md-12 col-sm-12">
                	<p style="text-align: justify; color: #0F19D9;">Our Old Boys cherish their memories of an exceptional and fulfilling school life at Aitchison. Giving back to Aitchison is a meaningful way to show appreciation for your alma mater. The College needs funds for various projects to continue to provide the best learning facilities for a transformative Aitchison experience. </p>
                	<p style="text-align: justify;">We appreciate the way our alumni cherish their time at Aitchison and how they tend to owe their success to this great institution.Express your fondness for Aitchison by giving back and supporting the advancement of your alma mater’s mission. The College needs funds for various projects to further advance its quality of education and to facilitate the Aitchison community.</p>
                </div>
              </div>
              
            </div>
         </div>-->
         <div class="col-md-12" align="center">
           <div class="cotact-area">
           	 <div class="row">
             	<div class="col-lg-12 col-md-12 col-sm-12" style="padding-left: 0px;">
               		<h2 class="title" style="color:#000000; text-align: center; padding-left: -5px; margin-left: 0px; font-size: 28px; padding-left: 0px; margin-left: 0px;">Priority Project</h2>
               		<h2 class="title" style="color:#000000; text-align: center; padding-left: -5px; margin-left: 0px; font-size: 20px;">The Old Building: Conservation and Preservation</h2><br>
				
                </</div>
             </div>
           	 <div class="row">
             	<div class="col-lg-4 col-md-4 col-sm-12"><img src="./img/makeagift-pic/makeagift-pic1.jpg" style="width: 100%"></div>
             	<div class="col-lg-4 col-md-4 col-sm-12" style="padding-bottom: 40px; text-align: justify; font-size: 15px;padding: 0px 40px;">
                	<p>The 'Old Building' is our greatest architectural treasure: standing iconic as an educational 'mother'; the keeper of memories and boyhoods' past. Its conservation and preservation is of utmost importance to us all.</p>
                    <p>The Old Building's integrity will be preserved and maintained. Funding this on-going task is a fine way for Old Boys to show their gratitude and tangible connection with the College.</p>
                    <br/>
                    <div align="center">
                	<?php
                    	$totalamount=60;
						//$gained=13.875;
						$gained=20.4;
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
                    
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12" style=" font-size: 15px; text-align:left;">
                	<p style="text-align: justify;">We would like to thank the following donors for their contributions to the Old Building Endowment Fund.</p>
                	<ul style="list-style:disc; margin-left: 20px;line-height: 1.6em;">
                    	<li>Syed Babar Ali</li>
                        <li>Syed Mohammad Mohsin</li>
                        <li>Mrs. Sitwat Mohsin</li>
                        <li>Mr. Nauman Ahmed Khan</li>
                        <li>Mr. Adnan Ahmed Khan</li>
                        <li>Mr. Abdul Razak Dawood</li>
                        <li>Syed Aslam Mehdi</li>
                        <li>Mr. Yousuf Abdullah (Sapphire Group)</li>
                        <li>Mr. Bilal Rashid</li>
                        <li>Mr. Atif Aslam Bajwa</li>
                        <li>Mr. Yawar Shah</li>
                        <li>Syed Shehryar Ali</li>
                        <li>Mr. Asfandyar Qureshi</li>
                        <li>Mr. Shahzad Husain</li>
                        <li>Mr. Khalid Yacob</li>
                        <li>Syed Mohammed Hussain</li>
                        <li>Syed Muhammad Kamal</li>
                        <li>Syed Zahir Hassan Bokhari</li>
                        <li>Mr. Hasan Abdullah</li>
                        <li>Plus, donors who have chosen to remain anonymous</li>
                    </ul>
                </div>
             </div>
             <div class="row">
               <div class="col-md-offset-1 col-md-10">
               <div align="center"> </div>
               
               <div class="contact-area-center">
                
                

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
        //echo recaptcha_get_html($publickey,null,1);
    ?>
    <div align="center" style="margin-top:15px;">
        <img src="phpinclude/captcha.php" /><br>
        <input type="text" name="captcha" id="captcha" autocomplete="off" style="margin:16px 0px;" placeholder="Enter security code">
    </div>
    
    <br> 
    <input type="submit" name="btnSSubmit" value="Send"/> 
    </form> 
    <?php 
    }  
else                /* send the submitted data */ 
    { 
    $name=$_REQUEST['name']; 
    $email=$_REQUEST['email']; 
    $message=$_REQUEST['message'];
	//if ($resp->is_valid) { 
	if ($resp) { 
		if (($name=="")||($email=="")||($message=="")) { 
			echo "All fields are required, please fill <a href=\"\">the form</a> again."; 
		}
		else{
			$from="From: $name<$email>\r\nReturn-path: $email"; 
			$subject="Message sent using your contact form"; 
			mail("alumniofficer@aitchison.edu.pk", $subject, $message, $from); 
			//mail("web@aitchison.edu.pk", $subject, $message, $from); 
			echo "<span  style='color:#f00;'>Email has been received. Thank you.</span>"; 
		 }
		 }else{
			echo $login_msg="<span  style='color:#f00;'>Sorry! You have entered Wrong varification code. please fill <a href=\"\">the form</a> again.</span>";	
		 } 
    }   
?> 
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
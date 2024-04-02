<?php
header('location: contactus.php');
exit;
	include("phpinclude/main.php");
	require_once('../recaptchalib.php');
	$publickey = "6Le88wYUAAAAAL2MkelJtp5OkOLWpU5-3Yw1gS5o";
	$privatekey = "6Le88wYUAAAAAHNniflCDr1OGRJn77TVoCg7ZS5J";
	
	$classes = array("Grade 1","Grade 2","Grade 3","Grade 4","Grade 5","Grade 6","Grade 7","Grade 8","Grade 9","Grade 10","Grade 11","Grade 12","Grade 13");
	
	function executeQuery($query){
		$result=mysql_query($query);	
	}
	$disMessage="";
	if(!empty($_GET['process'])){
		if($_GET['process']==1)
			$message="Thank you. We have received your request.	";
		elseif($_GET['process']==2)
			$message="Please provide your Firstname, Father Name";
	}
	if(strpos($_SERVER['HTTP_REFERER'], "aitchison.edu.pk") > 1)
	if(!empty($_POST['submit'])){				
		
		if ( isset($_POST["captcha"])&&$_POST["captcha"]!=""&&$_SESSION["captchaCode"]==$_POST["captcha"] )
		{ 	
		if(strlen($_POST['firstname']) < 2 || strlen($_POST['father']) < 2 ){
			header("location: alumni_registration.php?process=2");	
			exit();
		}
		if(true){
			
			$cnoresults=$db->getSingleRow("select * from alumni_registration where ( aemail='".$purifier->purify($_POST['email'])."') and delstatus!='Active'");
			$cnoresults=array("0", 1);
			if(count($cnoresults) <= 0){
				include("phpinclude/alumni_proc.php");
				if($alm_id > 0){					
					$to=$_POST['email'];
					$subject="Confirmation of Alumni Registration";
					/* HEADERS FOR GMAIL: STARTED*/
					$headers = "From: Aitchison College<alumniofficer@aitchison.edu.pk>\n";
					$headers .= "Reply-To: alumniofficer@aitchison.edu.pk\n";
					$headers .= "MIME-Version: 1.0\n";
					$headers .= "Content-type: text/html; charset=iso-8859-1";
	
					/* HEADERS FOR GMAIL: ENDED*/
					$from=$headers; //"From: $recRec[pName]  <aitchison@aitchison.edu.pk>";	
					$body="Dear Alumni,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This is an auto-generated confirmation of your Alumni Registration through Aitchison College Website.<br />Thank You,<br />Aitchison College Lahore";	
					$mailsend=mail($to,$subject,$body,$from);
					$emailtoburser="iftikharahmadmalik@hotmail.com, mazhar@aitchison.edu.pk, rajasab@aitchison.edu.pk";
					$msgtxt=file_get_contents("http://aitchison.edu.pk/arms/application_detail_2.php?id=$alm_id");
					//$mailsend1=mail($emailtoburser,$subject, $msgtxt, $from);
					$furl="alumni_registration.php?process=1&mailsend=$mailsend";
					header("location: $furl");
					exit();
				}else{
					$message="Sorry! There is some error while processing your request. Try Again!";			
				}
			}else{
				//$message="We have already received your Data. Your Email is already registered.";	
				$message="We have received your Data. ";	
			}		
		}else{
			$message="Sorry! You have already Submitted the Application.";
		}
		}else{
			$message="Sorry! You have entered Wrong verification code. Try again.";	
     	} 		
	}
	$title="Aitchison : Alumni Registration";
 ?>
<!DOCTYPE html>
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
     <link href="css/alumni_registration.css" rel="stylesheet">    
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
    
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/smoothness/jquery-ui.css">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script language="JavaScript">
	var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i 
	var regexp=/^\s+/
		function validate()
			{  		
				if(document.frmApp.firstname.value.replace(regexp, "") =="" /*|| (document.frmApp.firstname.value.length < 3)*/){
					alert("First Name is compulsory and must be greater than two charactors ");
					document.frmApp.firstname.focus();
					return false;
				}
				else if(document.frmApp.lastname.value.replace(regexp, "") ==""){
					alert("Last Name is compulsory and must be greater than two characters.");
					document.frmApp.lastname.focus();
					return false;
				}
				else if(document.frmApp.father.value.replace(regexp, "") ==""){
					alert("Father's Name is compulsory and must be greater than two characters.");
					document.frmApp.father.focus();
					return false;
				}/*else if(document.frmApp.cno.value.replace(regexp, "") =="" || isNaN(document.frmApp.cno.value)){
					alert("College Number is compulsory and must be a number.");
					document.frmApp.cno.focus();
					return false;
				}*/else if(document.frmApp.jclass.value.replace(regexp, "") =="" || (document.frmApp.jclass.value.length < 2)){
					alert("Please Enter Correct Joining Class.");
					document.frmApp.jclass.focus();
					return false;
				}else if(document.frmApp.lclass.value.replace(regexp, "") =="" || (document.frmApp.lclass.value.length < 2)){
					alert("Please Enter Correct Leaving Class.");
					document.frmApp.lclass.focus();
					return false;
				}
				else if(document.frmApp.jyear.value.replace(regexp, "") =="" ){
					alert("Please Enter Correct Joining Year.");
					document.frmApp.jyear.focus();
					return false;
				}else if(document.frmApp.lyear.value.replace(regexp, "") ==""){
					alert("Please Enter Correct Leaving Year.");
					document.frmApp.lyear.focus();
					return false;
				}
				/*else if(document.frmApp.homephone.value.replace(regexp, "") =="" || (document.frmApp.homephone.value.length < 7) || isNaN(document.frmApp.homephone.value)){
					alert("Please Enter Your Correct Home Phone/Contact Number.");
					document.frmApp.homephone.focus();
					return false;
				}*/
				else if(document.frmApp.mobile.value.replace(regexp, "") ==""){
					alert("Please Enter Your Correct Mobile/Cell Number.");
					document.frmApp.mobile.focus();
					return false;
				}
				else if(!document.frmApp.email.value.match(filter)) {
					alert("Please enter Correct Email Address");
					document.frmApp.email.focus()
					return false;
				}
				else if(document.frmApp.address_c1.value.replace(regexp, "") ==""){
					alert("Please Enter Your Correct Current Address.");
					document.frmApp.address_c1.focus();
					return false;
				}
				else if(document.frmApp.qualification.value.replace(regexp, "") ==""){
					alert("Please Enter Your Current Qualification.");
					document.frmApp.qualification.focus();
					return false;
				}else if(document.frmApp.university.value.replace(regexp, "") =="" ){
					alert("Please Enter Your Current/Last University.");
					document.frmApp.university.focus();
					return false;
				}else if(document.frmApp.country.value.replace(regexp, "") =="" ){
					alert("Please Enter Your Current Country.");
					document.frmApp.country.focus();
					return false;
				}else if(document.frmApp.occupation.value.replace(regexp, "") =="" ){
					alert("Please Enter Your Current Occupation.");
					document.frmApp.occupation.focus();
					return false;
				}else if(document.frmApp.designation.value.replace(regexp, "") =="" ){
					alert("Please Enter Your Designation.");
					document.frmApp.designation.focus();
					return false;
				}else if(document.frmApp.organization.value.replace(regexp, "") =="" ){
					alert("Please Enter Your Current Organization.");
					document.frmApp.organization.focus();
					return false;
				}
				else if(document.frmApp.captcha.value =="" || (document.frmApp.captcha.value.length < 4)){
					alert("Security code required and must be four characters long.");
					document.frmApp.captcha.focus();
					return false;
				}
				else{
					return true;	
				}
				return false;		
			}
	</script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
    <script type="text/javascript">
    	var RecaptchaOptions = {
    		theme : 'white'
    	};
	</script>
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
              <h2>ALUMNI REGISTRATION</h2>
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
       <form name="frmApp" action="" method="post" onsubmit="return validate()" enctype="multipart/form-data">
       <div class="row">
         <div class="col-md-12">
           <div class="title-area">
              <h2 class="title" style="color:#000000">ALUMNI REGISTRATION</h2>
              <div>
              	  <p>Please fill out the form below to update your College record and to receive the alumni e-newsletter issued by the College.</p>
                  <p>Please note: Registration on this website does not imply ACOBA membership. For ACOBA membership, please contact ACOBA’s coordinator Tassawar Shah at 111-363-063 (ext 335) or email <span style="color: #000099">tassawar@aitchison.edu.pk</span>.</p>
	              <h4>(All fields marked with <span class="mandatory_norm">*</span> are mandatory)</h4>
              </div>
              <?php 
			  		//echo $message.strlen($message).!empty($message);
					if(!empty($message) && strlen($message) > 20){
              ?>
              		<div align="center">
                    	<p style="color: #990000; text-align: left; font-weight: bold;"><?php echo $message; ?>&nbsp;</p>
                    </div>
              <?php
					}
              ?>
              <!--<span class="line"></span>
                <p>1The Aitchison College Old Boys' Association (ACOBA) is the prime body that works to retain and reinforce the spirit of fraternity amongst the alumni. It is an excellent forum for the Old Boys to unite and keep in touch. </p>-->
            </div>
         </div>
         <!--ALUMNI FORM REGISTRATION BASIC INFORMATION: STARTED-->
         <div class="col-lg-12 col-md-12 col-sm-12">
         <h3 class="title" style="color:#000000">PERSONAL INFORMATION:</h3>
         <table cellpadding="0" cellspacing="4" border="0" width="100%" class="table-hover">
            <tr>
              <td class="fld_td" width="15%" style="width: 15% !important;">First Name:<span class="mandatory_norm">*</span></td>
                <td class="fld_texttd" width="35%"><input type="input" name="firstname" id="firstname" class="fld_text" /></td>
                <td class="fld_td_right" width="15%" style="width: 15% !important;">Last Name:<span class="mandatory_norm">*</span></td>
              <td class="fld_texttd" width="35%"><input type="input" name="lastname" id="lastname" class="fld_text" /></td>
            </tr>
            <tr>
              <td class="fld_td">Father's Name:<span class="mandatory_norm">*</span></td>
              <td class="fld_texttd"><input type="input" name="father" id="father" class="fld_text" /></td>
              <td class="fld_td_right">College No.:<!--<span class="mandatory_norm">*</span>--></td>
              <td class="fld_texttd"><input type="input" name="cno" id="cno" class="fld_text" /></td>
            </tr>
            <tr>
              <td class="fld_td">Date Of Birth:<span class="mandatory_norm">*</span></td>
              <td class="fld_texttd"><input type="date" id="dob" name="dob" class="fld_text" required></td>
              <td class="fld_td_right">&nbsp;</td>
              <td class="fld_texttd">&nbsp;</td>
            </tr>
            <tr>
              <td class="fld_td">Joining Class:<span class="mandatory_norm">*</span></td>
              <td class="fld_texttd">
              	<input type="input" name="jclass" id="jclass" class="fld_text" />
                <!--<select name="jclass" id="jclass" class="fld_text2" style="width:95%;">
                	<?php foreach($classes as $class) {?>
                    <option value="<?php echo $class; ?>"><?php echo $class; ?></option>
                    <?php }?>
                </select>-->
              </td>
              <td class="fld_td_right">Leaving Class:<span class="mandatory_norm">*</span></td>
              <td class="fld_texttd">
              	<input type="input" name="lclass" id="lclass" class="fld_text" />
                <!--<select name="lclass" id="lclass" class="fld_text2" style="width:95%;">
                	<?php foreach($classes as $class) {?>
                    <option value="<?php echo $class; ?>"><?php echo $class; ?></option>
                    <?php }?>
                </select>-->
              </td>
            </tr>
            <tr>
              <td class="fld_td">Joining Year:<span class="mandatory_norm">*</span></td>
              <td class="fld_texttd"><input type="input" name="jyear" id="jyear" class="fld_text" placeholder="Year"/></td>
              <td class="fld_td_right"> Leaving Year:<span class="mandatory_norm">*</span></td>
              <td class="fld_texttd"><input type="input" name="lyear" id="lyear" class="fld_text" placeholder="Year"/></td>
            </tr>
            <tr></tr>
           </table>
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12">
         <h3 class="title" style="color:#000000">CONTACT DETAILS:</h3>
         <table cellpadding="0" cellspacing="4" border="0" width="100%" class="table-hover">
            <tr></tr>
            <tr>
              <td width="15%" class="fld_td">Tel. No.(Home):</td>
                <td width="35%" class="fld_texttd"><input type="input" name="homephone" id="homephone" class="fld_text" /></td>
                <td width="15%" class="fld_td_right">Tel. No.(Work):</td>
              <td width="35%" class="fld_texttd"><input type="input" name="workphone" id="workphone" class="fld_text" /></td>
            </tr>
            <tr>
              <td class="fld_td">Mobile:<span class="mandatory_norm">*</span></td>
                <td class="fld_texttd"><input type="input" name="mobile" id="mobile" class="fld_text" /></td>
                <td class="fld_td_right">Email:<span class="mandatory_norm">*</span></td>
              <td class="fld_texttd"><input type="input" name="email" id="email" class="fld_text" /></td>
            </tr>
            <tr>
              <td class="fld_td" valign="top">Address(Current):<span class="mandatory_norm">*</span></td>
              <td colspan="3" class="fld_texttd"><input type="input" name="address_c1" id="address_c1" class="fld_text1" />
</td>
            </tr>
            <tr>
              <td class="fld_td" valign="top">&nbsp;</td>
              <td colspan="3" class="fld_texttd"><input type="input" name="address_c2" id="address_c2" class="fld_text1" /></td>
            </tr>
            <tr>
              <td class="fld_td" valign="top">Address(Permanent):</td>
              <td colspan="3" class="fld_texttd"><input type="input" name="address_p1" id="address_p1" class="fld_text1" /></td>
            </tr>
            <tr>
              <td class="fld_td" valign="top">&nbsp;</td>
              <td colspan="3" class="fld_texttd"><input type="input" name="address_p2" id="address_p2" class="fld_text1" /></td>
            </tr>                                      
         </table>
         </div>
         <!--ALUMNI FORM REGISTRATION BASIC INFORMATION:   ENDED-->
         <!--CURRENT STATUS: STARTED-->
         <div class="col-lg-12 col-md-12 col-sm-12">
         	<h3 class="title" style="color:#000000">CURRENT STATUS:</h3>            
            <table width="99.3%" border="0" cellspacing="0" cellpadding="0" class="table-hover">             
              <tr>
                <td width="15%">Qualification:<span class="mandatory_norm">*</span></td>
                <td class="fld_texttd"><input type="input" name="qualification" id="qualification" class="fld_text" /></td>
                <td width="15%" align="right">University:<span class="mandatory_norm">*</span></td>
                <td class="fld_texttd"><input type="input" name="university" id="university" class="fld_text" /></td>
                <td width="15%" align="right">Country:<span class="mandatory_norm">*</span></td>
                <td class="fld_texttd"><input type="input" name="country" id="country" class="fld_text" /></td>
              </tr>
              <tr>
                <td>Occupation:<span class="mandatory_norm">*</span></td>
                <td class="fld_texttd"><input type="input" name="occupation" id="occupation" class="fld_text" /></td>
                <td align="right">Designation:<span class="mandatory_norm">*</span></td>
                <td class="fld_texttd"><input type="input" name="designation" id="designation" class="fld_text" /></td>
                <td align="right">Organization:<span class="mandatory_norm">*</span></td>
                <td class="fld_texttd"><input type="input" name="organization" id="organization" class="fld_text" /></td>
              </tr>
            </table>
         </div>
         <!--CURRENT STATUS:   ENDED-->
         <!--DETAILS: STARTED-->
         <div class="col-lg-12 col-md-12 col-sm-12">
         	<h3 class="title" style="color:#000000">DETAILS:</h3>
             <table width="99.3%" border="0" cellspacing="0" cellpadding="0" class="table-hover">             
              <tr>
              	<td><textarea name="odetails" id="odetails" style="width: 99%; min-height: 100px;"></textarea></td>
              </tr>
             </table>
            
         </div>
         <!--DETAILS:   ENDED-->
         <!--HOUSE INFORMATION: STARTED-->
         <div class="col-lg-12 col-md-12 col-sm-12">
       	   <h3 class="title" style="color:#000000">HOUSE INFORMATION:</h3>
            <table cellpadding="0" cellspacing="4" border="0" width="99.3%" id="houses" class="table-hover">
                <tr>
                  <th width="30%">School</th>
                  <th width="30%">House</th>
                  <th width="20%">From Year</th>
                  <th width="20%">To Year</th>
                </tr>
                <tr>
                  <td>
                    <select name="hs_school[]" id="hs_school[]" class="fld_text2">
                        <option value="Junior School">Junior School</option>
                        <option value="Prep School">Prep School</option>
                        <option value="Senior School">Senior School</option>
                    </select>
                  </td>
                  <td><input type="input" name="hs_name[]" id="hs_name[]" class="fld_text" /></td>
                  <td><input type="input" name="hs_from[]" id="hs_from[]" class="fld_text" /></td>
                  <td class="fld_texttd"><input type="input" name="hs_to[]" id="hs_to[]" class="fld_text" /></td>
                </tr>
                <tr>
                  <td colspan="4"><a onclick="addHousesDetails();" class="DA5522 font12">Click here to add more  details</a></td>
                </tr>
              </table>
         </div>
         <!--HOUSE INFORMATION:   ENDED-->
         <!--PERFORMANCE PROFILE: STARTED-->
         <div class="col-lg-12 col-md-12 col-sm-12">
         	<h3 class="title" style="color:#000000">PERFORMANCE PROFILE:</h3>
            <table cellpadding="0" cellspacing="0" border="0" width="99.3%" id="performance_profile" class="table-hover">
                <tr>
                  <th width="30%" style="margin: 0px; padding: 0px" class="font11">School</th>
                  <th width="30%" style="margin: 0px; padding: 0px" class="font11">Performance Type</th>
                  <th width="20%" style="margin: 0px; padding: 0px" class="font11">Year</th>
                  <th width="20%" style="margin: 0px; padding: 0px" class="font11">College Color/Details</th>
                </tr>
                <tr>
                  <td><select name="perf_school[]" id="perf_school[]" class="fld_text2">
                    <option value="Junior School">Junior School</option>
                    <option value="Prep School">Prep School</option>
                    <option value="Senior School">Senior School</option>
                  </select></td>
                  <td><select name="perf_profile[]" id="perf_profile[]" class="fld_text2">
                    <option value="Academics">Academics</option>
                    <option value="Sports">Sports</option>
                    <option value="Extra-Curricular">Extra-Curricular</option>
                    <option value="Best Leaving Boarder">Best Leaving Boarder</option>
                    <option value="Best Leaving Sportsman">Best Leaving Sportsman</option>
                    <option value="Other">Other</option>
                  </select></td>
                  <td><input type="input" name="perf_year[]" id="perf_year[]" class="fld_text" /></td>
                  <td><input type="input" name="perf_color[]" id="perf_color[]" class="fld_text" /></td>
                </tr>
                <tr>
                  <td colspan="4"><a onclick="addPerformanceDetails();" class="DA5522 font12">Click here to add more  details</a></td>
                </tr>
              </table>
         </div>
         <!--PERFORMANCE PROFILE:   ENDED-->
         <!--APPOINTMENTS: STARTED-->
         <div class="col-lg-12 col-md-12 col-sm-12">
         	<h3 class="title" style="color:#000000">APPOINTMENTS:</h3>
            <table cellpadding="0" cellspacing="0" border="0" width="99.3%" id="appointments" class="table-hover">
                <tr>
                  <th width="30%" style="margin: 0px; padding: 0px" class="font11">School</th>
                  <th width="30%" style="margin: 0px; padding: 0px" class="font11">Appointment</th>
                  <th width="20%" style="margin: 0px; padding: 0px" class="font11">Year</th>
                  <th width="20%" style="margin: 0px; padding: 0px" class="font11">House/Details</th>
                </tr>
                <tr>
                  <td><select name="app_school[]" id="app_school[]"  class="fld_text2">
                    <option value="Junior School">Junior School</option>
                    <option value="Prep School">Prep School</option>
                    <option value="Senior School">Senior School</option>
                  </select></td>
                  <td><select name="app_type[]" id="app_type[]" class="fld_text2">
                    <option value="Head Boy">Head Boy</option>
                    <option value="Deputy Head Boy">Deputy Head Boy</option>
                    <option value="College Prefect">College Prefect</option>
                    <option value="School Prefect">School Prefect</option>
                    <option value="House Prefect/Captain">House Prefect/Captain</option>
                    <option value="Sports Team Captain">Sports Team Captain</option>
                    <option value="Society President">Society President</option>
                    <option value="Society General Secretary">Society General Secretary</option>
                   <!-- Head Boy
Deputy Head Boy
College Prefect
School Prefect
House Prefect/Captain
Sports Team Captain
Society President
Society General Secretary

-->
                  </select></td>
                  <td><input type="input" name="app_year[]" id="app_year[]" class="fld_text" /></td>
                  <td><input type="input" name="app_house[]" id="app_house[]" class="fld_text" /></td>
                </tr>
                <tr>
                  <td colspan="4"><a onclick="addAppointmentsDetails();" class="DA5522 font12">Click here to add more  details</a></td>
                </tr>
              </table>
         </div>
         <!--APPOINTMENTS:   ENDED-->
         <!--DISTINCTIONS: STARTED-->
         <div class="col-lg-12 col-md-12 col-sm-12">
         	<h3 class="title" style="color:#000000">DISTINCTIONS:</h3>
            <table cellpadding="0" cellspacing="0" border="0" width="99.3%" id="distinctions" class="table-hover">
                <tr>
                  <th width="30%" style="margin: 0px; padding: 0px" class="font11">School</th>
                  <th width="30%" style="margin: 0px; padding: 0px" class="font11">Type</th>
                  <th width="20%" style="margin: 0px; padding: 0px" class="font11">Year</th>
                  <th width="20%" style="margin: 0px; padding: 0px" class="font11">House</th>
                </tr>
                <tr>
                  <td><select name="dist_school[]" id="dist_school[]" class="fld_text2">
                    <option value="Junior School">Junior School</option>
                    <option value="Prep School">Prep School</option>
                    <option value="Senior School">Senior School</option>
                  </select></td>
                  <td><select name="dist_type[]" id="dist_type[]" class="fld_text2">
                    <option value="Academic Blazer">Academic Blazer</option>
                    <option value="Sports Blazer">Sports Blazer</option>
                    <option value="Extra-Curricular Blazer">Extra-Curricular Blazer</option>                                        
                  </select></td>
                  <td><input type="input" name="dist_year[]" id="dist_year[]" class="fld_text" /></td>
                  <td><input type="input" name="dist_house[]" id="dist_house[]" class="fld_text" /></td>
                </tr>
                <tr>
                  <td colspan="4"><a onclick="addDistinctionDetails();" class="DA5522 font12">Click here to add more  details</a></td>
                </tr>
              </table>
         </div>
         <!--DISTINCTIONS:   ENDED-->
         <!--AWARDS: STARTED-->
         <div class="col-lg-12 col-md-12 col-sm-12">
         	<h3 class="title" style="color:#000000">AWARDS:</h3>
            <table cellpadding="0" cellspacing="0" border="0" width="99.3%" id="awards" class="table-hover">
                <tr>
                  <th width="30%" style="margin: 0px; padding: 0px" class="font11">School</th>
                  <th width="30%" style="margin: 0px; padding: 0px" class="font11">Type</th>
                  <th width="20%" style="margin: 0px; padding: 0px" class="font11">Year</th>
                  <th width="20%" style="margin: 0px; padding: 0px" class="font11">House</th>
                </tr>
                <tr>
                  <td><select name="award_school[]" id="award_school[]" class="fld_text2">
                    <option value="Junior School">Junior School</option>
                    <option value="Prep School">Prep School</option>
                    <option value="Senior School">Senior School</option>
                  </select></td>
                  <td><select name="award_type[]" id="award_type[]" class="fld_text2">
                    <option value="Local">Local</option>
                    <option value="National">National</option>
                    <option value="International">International</option>                                        
                  </select></td>
                  <td><input type="input" name="award_year[]" id="award_year[]" class="fld_text" /></td>
                  <td><input type="input" name="award_house[]" id="award_house[]" class="fld_text" /></td>
                </tr>
                <tr>
                  <td colspan="4"><a onclick="addAwardDetails();" class="DA5522 font12">Click here to add more  details</a></td>
                </tr>
              </table>
         </div>
         <!--AWARDS:   ENDED-->
         <!--TOURS/VISITS: STARTED-->
         <div class="col-lg-12 col-md-12 col-sm-12">
         	<h3 class="title" style="color:#000000">TOURS/VISITS:</h3>
            <table cellpadding="0" cellspacing="0" border="0" width="99.3%" id="tourvisit" class="table-hover">
                <tr>
                  <th width="30%" style="margin: 0px; padding: 0px" class="font11">School</th>
                  <th width="30%" style="margin: 0px; padding: 0px" class="font11">Country</th>
                  <th width="20%" style="margin: 0px; padding: 0px" class="font11">Year</th>
                  <th width="20%" style="margin: 0px; padding: 0px" class="font11">Event</th>
                </tr>
                <tr>
                  <td><select name="tour_school[]" id="tour_school[]" class="fld_text2">
                    <option value="Junior School">Junior School</option>
                    <option value="Prep School">Prep School</option>
                    <option value="Senior School">Senior School</option>
                  </select></td>
                  <td><input type="input" name="tour_country[]" id="tour_country[]" class="fld_text" /></td>
                  <td><input type="input" name="tour_year[]" id="tour_year[]" class="fld_text" /></td>
                  <td><input type="input" name="tour_event[]" id="tour_event[]" class="fld_text" /></td>
                </tr>
                <tr>
                  <td colspan="4"><a onclick="addTourDetails();" class="DA5522 font12">Click here to add more  details</a></td>
                </tr>
              </table>
         </div>
         
         <!--TOURS/VISITS:   ENDED-->
         <!--SUBMIT BUTTON: STARTED-->
         <div class="col-lg-12 col-md-12 col-sm-12">
         	<br>
            <?php //echo recaptcha_get_html($publickey, $error); 
				//echo recaptcha_get_html($publickey,null,1);
			?>
            <label for="name">Type the security code given below: </label><br>
            <img src="phpinclude/captcha.php" /><br>
            <input type="text" name="captcha" id="captcha" style="margin:16px 0px;" placeholder="Enter security code">
			
            <br>
         	<div align="left">
         	<input type="submit" name="submit" value="Submit Information" style="background-color: #000000; color: #AAAAAA; padding: 5px; padding-left: 25px; padding-right: 25px;" />
            
            </div>
         </div>
         <!--SUBMIT BUTTON:   ENDED-->
       </div>
       
       </form>
     </div>
  </section>
  <!-- End contact section  -->
<script language="javascript" type="text/javascript">
	function addHousesDetails(){
		var tbl_name=document.getElementById("houses");
		var rowCount = tbl_name.rows.length;		
		var row=tbl_name.insertRow(rowCount-1);
		var cell1 = row.insertCell(0);
		cell1.innerHTML="<select name=\"hs_school[]\" id=\"hs_school[]\" class=\"fld_text2\"><option value=\"Junior School\">Junior School</option><option value=\"Prep School\">Prep School</option><option value=\"Senior School\">Senior School</option></select>";
		var cell2 = row.insertCell(1);
		cell2.innerHTML="<input type=\"input\" name=\"hs_name[]\" id=\"hs_name[]\" class=\"fld_text\" />";
		var cell3 = row.insertCell(2);
		cell3.innerHTML="<input type=\"input\" name=\"hs_from[]\" id=\"hs_from[]\" class=\"fld_text\" />";		
		var cell4 = row.insertCell(3);
		//cell4.style="height:  2.0 em;";
		cell4.innerHTML="<input type=\"input\" name=\"hs_to[]\" id=\"hs_to[]\" class=\"fld_text\" />";		
	}	
	/*peformance_profile*/	
	function addPerformanceDetails(){
		var tbl_name=document.getElementById("performance_profile");
		var rowCount = tbl_name.rows.length;		
		var row=tbl_name.insertRow(rowCount-1);
		var cell1 = row.insertCell(0);
		cell1.innerHTML="<select name=\"perf_school[]\" id=\"perf_school[]\" class=\"fld_text2\"><option value=\"Junior School\">Junior School</option><option value=\"Prep School\">Prep School</option><option value=\"Senior School\">Senior School</option></select>";
		var cell2 = row.insertCell(1);
		cell2.innerHTML="<select name=\"perf_profile[]\" id=\"perf_profile[]\" class=\"fld_text2\"><option value=\"Academics\">Academics</option><option value=\"Sports\">Sports</option><option value=\"Extra-Curricular\">Extra-Curricular</option><option value=\"Best Leaving Boarder\">Best Leaving Boarder</option><option value=\"Best Leaving Sportsman\">Best Leaving Sportsman</option><option value=\"?Other\">Other</option></select>";
		var cell3 = row.insertCell(2);
		cell3.innerHTML="<input type=\"input\" name=\"perf_year[]\" id=\"perf_year[]\" class=\"fld_text\" />";		
		var cell4 = row.insertCell(3);
		cell4.innerHTML="<input type=\"input\" name=\"perf_color[]\" id=\"perf_color[]\" class=\"fld_text\" />";		
	}
	function addAppointmentsDetails(){
		var tbl_name=document.getElementById("appointments");
		var rowCount = tbl_name.rows.length;		
		var row=tbl_name.insertRow(rowCount-1);
		var cell1 = row.insertCell(0);
		cell1.innerHTML="<select name=\"app_school[]\" id=\"app_school[]\" class=\"fld_text2\"><option value=\"Junior School\">Junior School</option><option value=\"Prep School\">Prep School</option><option value=\"Senior School\">Senior School</option></select>";
		var cell2 = row.insertCell(1);
		cell2.innerHTML="<select name=\"app_type[]\" id=\"app_type[]\" class=\"fld_text2\"><option value=\"Head Boy\">Head Boy</option><option value=\"College Prefect\">College Prefect</option><option value=\"School/House Prefect\">School/House Prefect</option><option value=\"House/School Captain\">House/School Captain</option></select>";
		var cell3 = row.insertCell(2);
		cell3.innerHTML="<input type=\"input\" name=\"app_year[]\" id=\"app_year[]\" class=\"fld_text\" />";		
		var cell4 = row.insertCell(3);
		cell4.innerHTML="<input type=\"input\" name=\"app_house[]\" id=\"app_house[]\" class=\"fld_text\" />";		
	}
	function addDistinctionDetails(){
		var tbl_name=document.getElementById("distinctions");
		var rowCount = tbl_name.rows.length;		
		var row=tbl_name.insertRow(rowCount-1);
		var cell1 = row.insertCell(0);
		cell1.innerHTML="<select name=\"dist_school[]\" id=\"dist_school[]\" class=\"fld_text2\"><option value=\"Junior School\">Junior School</option><option value=\"Prep School\">Prep School</option><option value=\"Senior School\">Senior School</option></select>";
		var cell2 = row.insertCell(1);
		cell2.innerHTML="<select name=\"dist_type[]\" id=\"dist_type[]\" class=\"fld_text2\"><option value=\"Academic Blazer\">Academic Blazer</option><option value=\"Sports Blazer\">Sports Blazer</option><option value=\"Extra-Curricular Blazer\">Extra-Curricular Blazer</option>";
		var cell3 = row.insertCell(2);
		cell3.innerHTML="<input type=\"input\" name=\"dist_year[]\" id=\"dist_year[]\" class=\"fld_text\" />";		
		var cell4 = row.insertCell(3);
		cell4.innerHTML="<input type=\"input\" name=\"dist_house[]\" id=\"dist_house[]\" class=\"fld_text\" />";		
	}		
	function addAwardDetails(){
		var tbl_name=document.getElementById("awards");
		var rowCount = tbl_name.rows.length;		
		var row=tbl_name.insertRow(rowCount-1);
		var cell1 = row.insertCell(0);
		cell1.innerHTML="<select name=\"award_school[]\" id=\"award_school[]\" class=\"fld_text2\"><option value=\"Junior School\">Junior School</option><option value=\"Prep School\">Prep School</option><option value=\"Senior School\">Senior School</option></select>";
		var cell2 = row.insertCell(1);
		cell2.innerHTML="<select name=\"award_type[]\" id=\"award_type[]\" class=\"fld_text2\"><option value=\"Local\">Local</option><option value=\"National\">National</option><option value=\"International\">International</option></select>";
		var cell3 = row.insertCell(2);
		cell3.innerHTML="<input type=\"input\" name=\"award_year[]\" id=\"award_year[]\" class=\"fld_text\" />";		
		var cell4 = row.insertCell(3);
		cell4.innerHTML="<input type=\"input\" name=\"award_house[]\" id=\"award_house[]\" class=\"fld_text\" />";				
	}
	function addTourDetails(){
		var tbl_name=document.getElementById("tourvisit");
		var rowCount = tbl_name.rows.length;		
		var row=tbl_name.insertRow(rowCount-1);
		var cell1 = row.insertCell(0);
		cell1.innerHTML="<select name=\"tour_school[]\" id=\"tour_school[]\" class=\"fld_text2\"><option value=\"Junior School\">Junior School</option><option value=\"Prep School\">Prep School</option><option value=\"Senior School\">Senior School</option></select>";
		var cell2 = row.insertCell(1);
		cell2.innerHTML="<input type=\"input\" name=\"tour_country[]\" id=\"tour_country[]\" class=\"fld_text\" />";
		var cell3 = row.insertCell(2);
		cell3.innerHTML="<input type=\"input\" name=\"tour_year[]\" id=\"tour_year[]\" class=\"fld_text\" />";		
		var cell4 = row.insertCell(3);
		cell4.innerHTML="<input type=\"input\" name=\"tour_event[]\" id=\"tour_event[]\" class=\"fld_text\" />";						
	}
	
	
</script>
  <!-- Start footer -->
  <?php 
  	include("phpinclude/footer.php");
  ?>
  <!-- End footer -->
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
  
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
    
<script>
	/*$( function() {
		$( "#dob" ).datepicker({
		  changeMonth: true,
		  changeYear: true
		});
	  } );
	*/
	
	
	
</script>
  </body>
</html>
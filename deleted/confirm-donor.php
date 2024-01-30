<?php
	include("standard/main.php");
	include("security_hbl.php");
	$session_id= session_id(); 
	
	date_default_timezone_set('Asia/Karachi');
	$con = new mysqli($db->hostname,$db->username,$db->password,$db->dbname);
	if (mysqli_connect_errno()){
		echo "Failed to connect to MySQL: ";
		//echo mysqli_connect_error();
  	}
	if(count($_POST) > 0){
		
		if($_SERVER['HTTP_REFERER']=="https://aitchison.edu.pk/d-one.php" || $_SERVER['HTTP_REFERER']=="https://www.aitchison.edu.pk/d-one.php"){			
			foreach($_POST as $key=>$value){
				//$_POST[$key]="AAAA".addslashes($value);
			}			
		}else{			
			header("location: d-one.php");
			exit();
		}
		$amount=intval($_POST['amount']);
		$currency=strip_tags(trim($_POST['currency']));
		$proj_name=strip_tags(trim($_POST['proj_name']));
		$anonymous=(strlen($_POST['anonymous']) > 3)?"Yes":"No";		
		$ac_aff=strip_tags(implode(", ", $_POST['affiliation']));
		$fname=strip_tags($_POST['fname']);
		$lname=strip_tags($_POST['lname']);
		$name=$fname." ".$lname;
		$email=strip_tags($_POST['email']);
		$phone=strip_tags($_POST['phone']);
		$country=strip_tags($_POST['country']);
		$state=strip_tags($_POST['state']);
		$city=strip_tags($_POST['city']);
		/*if(strpos("0".$name,"'") || strpos("0".$email,"'") || strpos("0".$phone,"'")){
			header("location: d-one.php");
			exit();			
		}*/
		$address=strip_tags($_POST['address']);
		$postalcode=strip_tags($_POST['postalcode']);
		$sess_id=strip_tags($session_id);
		$ddate=date("Y-m-d");
		$timestamp=date("Y-m-d H:i:s");
		$timestamp2=time();
		//COALESCE(SUM(column),0)
		$token=$timestamp2.$db->countRecord("select (COALESCE(count(info_id),0)+1) as maxid from donor_information", "maxid");
		//print_r($_POST);
		//$=$_POST[''];
		$stmt = $con->prepare("INSERT INTO donor_information (amount, currency, proj_name, anonymous, ac_aff, fname, lname, name, email, phone, address, token, sess_id, ddate,  `timestamp`, country, state, city, postalcode) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		
		//$query="INSERT INTO donor_information (amount, currency, proj_name, anonymous, ac_aff, fname, lname, name, email, phone, address, token, sess_id, ddate,  `timestamp`, country, state, city, postalcode) VALUES (".$amount.", '".$currency."', '". $proj_name."', '". $anonymous."', '". $ac_aff."', '". $fname."', '". $lname."', '". $lname."', '". $email."', '". $phone."', '". $address."', '".$token."', '". $sess_id."', '". $ddate."', '". $timestamp."', '". $country."', '". $state."', '". $city."', '". $postalcode."')";
		//echo "Akhtar"."<br><br>".$query."<br><br>";
		/*
		if ($con->query($query) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $query . "<br>" . $con->error;
		}
		*/
		
		if($stmt){
			$stmt->bind_param("issssssssssisssssss", $amount, $currency, $proj_name, $anonymous, $ac_aff, $fname, $lname, $name, $email, $phone, $address, $token, $sess_id, $ddate, $timestamp, $country, $state, $city, $postalcode);
			$stmt->execute();	
			
			header("location: confirm-donor.php");
			exit();
		}	
		
	}
	$record_exists=$db->getSingleRow("select * from donor_information where sess_id='".$session_id."' ORDER BY  `donor_information`.`info_id` DESC");
	if(count($record_exists) > 0){
		$record_exists['ac_aff']="akhtar " .$record_exists['ac_aff'];
	}else{
		header("location: d-one.php");
		exit();
	}
	/*
	print_r($record_exists);
	*/
	$banner_image_url="img/pageimages/misc.jpg";
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
     <title>Aitchison College:- Aitchison Donations</title>

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
	<script>
	function showHideAlumniStdDiv()
	{
		std=$('#chkStudent').is(":checked")
		alu=$('#chkAlumni').is(":checked")
		
		if ((std==true) || (alu==true))
			$( "#div_alumni_student" ).show();
		else
			$( "#div_alumni_student" ).hide();

		
	}
</script>
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
            <?php /*?><div class="row">
            	<div class="col-lg-12 col-md-12 col-sm-12">
                	<div align="center">
                    	<img src="./img/nne_logo.png" alt="img" width="120" height="80"><br>
                        <h2 class="titlewithoutbordercenter" style="font-size: 26px; ">Aitchison College<span style=" margin: 0px; padding: 0px; display: block; position: relative; top: -10; font-size: 26px;">Donations Form</span></h2>
                    </div>
                
                </div>
            </div><?php */?>
            <h2 class="titile">Please confirm your information!</h2>
			
            <h2 class="titlewithoutbordercenter" style="font-size: 20px;">Donations Information</h2>
            
            <br>

		 
            <form name="myform" id="myform" role="form" method="post" action="https://secureacceptance.cybersource.com/pay" class="form-horizontal" novalidate>
			
			
			<div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="amount">Amount: <?php /*?><span style="color:red;"> *</span><?php */?></label>
				</div>
                <?php //print_r($record_exists);?>
				<div class="col-md-8">
					<?php echo $record_exists['currency'];?> <?php echo $record_exists['amount'];?>
                    
					<span class="error"></span>
				</div>
			</div>
					 
			<div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="fundType">I want to donate for: <?php /*?><span style="color:red;"> *</span><?php */?></label>
				</div>
				<div class="col-md-6">
                	<?php echo $record_exists['proj_name'];  ?>
				</div>
				
				
			</div>
			<div class="form-group">
				<div class="col-md-4 text-right-cus">
					<label class="control-label" for="affiliation"><?php /*?>Your <?php */?>affiliation with Aitchison College? <?php /*?><span style="color:red;"> *</span><?php */?></label>
				</div>
				<div class="col-md-6" style="text-align: left;">
					<?php
						//print_r($record_exists);
                    	if(strpos($record_exists['ac_aff'], "Alumnus")){
							echo "Alumnus<br>";	
						}
						if(strpos($record_exists['ac_aff'], "Faculty/Staff")){
							echo "Faculty/Staff<br>";	
						}
						if(strpos($record_exists['ac_aff'], "Friend")){
							echo "Friend<br>";	
						}
						if(strpos($record_exists['ac_aff'], "Parent")){
							echo "Parent<br>";	
						}
						if(strpos($record_exists['ac_aff'], "Student")){
							echo "Student<br>";	
						}						
						if(strpos($record_exists['ac_aff'], "Other")){
							echo "Other<br>";	
						}
					?>
				</div><br>
			</div>
			<div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="name">First Name:<?php /*?><span style="color:red;"> *</span><?php */?></label>
				</div>
				<div class="col-md-3">
					<?php echo $record_exists['fname']; ?>
				</div>
			</div>
            <div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="name">Last Name(Sur Name):<?php /*?><span style="color:red;"> *</span><?php */?></label>
				</div>
				<div class="col-md-3">
					<?php echo $record_exists['lname']; ?>
				</div>
			</div>
                        
			<div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="email">Email:<?php /*?><span style="color:red;"> *</span><?php */?></label>
				</div>
				<div class="col-md-3">
					<?php echo $record_exists['email']; ?>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="phone">Phone:<?php /*?><span style="color:red;"> *</span><?php */?></label>
				</div>
				<div class="col-md-3">
					<?php echo $record_exists['phone']; ?>
				</div>
			</div>
            <div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="name">Country:<?php /*?><span style="color:red;"> *</span><?php */?></label>
				</div>
				<div class="col-md-3">
					<?php echo $db->getSingleCol("select name from countryiso where iso_code='".$record_exists['country']."'", "name");//$record_exists['country']; ?>
				</div>
			</div>
            <div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="name">State:<?php /*?><span style="color:red;"> *</span><?php */?></label>
				</div>
				<div class="col-md-3">
					<?php echo $db->getSingleCol("select name from stateiso where iso_country_code='".$record_exists['country']."' and iso_code='".$record_exists['state']."'", "name");//$record_exists['country']; ?>
				</div>
			</div>
            <div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="phone">City:</label>
				</div>
				<div class="col-md-3">
					<?php echo $record_exists['city']; ?>
				</div>
			</div>
            <div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="phone">Postal Code:</label>
				</div>
				<div class="col-md-3">
					<?php echo $record_exists['postalcode']; ?>
				</div>
			</div>
            <div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="address">Address:<?php /*?><span style="color:red;"> *</span><?php */?></label>
				</div>
				<div class="col-md-3">
                	<?php echo $record_exists['address']; ?>
				</div>
			
			</div>
			
			 
						 
			<div class="form-group" style="display:block;">
				<div class="col-md-offset-3 col-md-3 text-right" style="padding-bottom:10px;">
                	<a href="d-one.php" class="btn btn-primary">Back</a>
                </div>
                <div class="col-md-4" style="padding-bottom:10px;">
                	<input class="btn btn-primary" type="submit" id="submit" name="submit" value="Proceed to Payment"/>
				</div>
                
			</div>
            <?php
				//echo "<!--Akhtar".$record_exists['info_id']."-->";
            	/*$params['access_key'] = '75b0aaac82dc3ed2999a32eca38b8721';
				$params['profile_id'] = 'B2E4E2ED-D078-4FDF-89B5-4BBD7AC1B725';*/
				$params['access_key'] = '3192c80424983d9790ed99a82e683098';
				$params['profile_id'] = 'C7A1C328-F32D-463F-89F8-2B55CFDB4868';
				
				$params['transaction_uuid'] = uniqid();
				//$params['signed_field_names'] = 'access_key,profile_id,transaction_uuid,signed_field_names,unsigned_field_names,signed_date_time,locale,transaction_type,reference_number,amount,currency';
				$params['signed_field_names'] = 'access_key,profile_id,transaction_uuid,signed_field_names,unsigned_field_names,signed_date_time,locale,transaction_type,reference_number,amount,currency,bill_to_address_city,bill_to_address_country,bill_to_address_line1,bill_to_address_postal_code,bill_to_address_state,bill_to_email,bill_to_forename,bill_to_surname,merchant_defined_data1,customer_ip_address,bill_to_phone,consumer_id';
				$params['unsigned_field_names'] = '';
				$params['signed_date_time'] = gmdate("Y-m-d\TH:i:s\Z");;
				$params['locale'] = 'en';
				$params['transaction_type'] = 'sale';
				$params['reference_number'] = $record_exists['token'];
				$params['amount'] = $record_exists['amount'];
				$params['currency'] = $record_exists['currency'];
				$params['bill_to_address_city'] = $record_exists['city'];
				$params['bill_to_address_country'] = $record_exists['country'];
				$params['bill_to_address_line1'] = $record_exists['address'];
				$params['bill_to_address_postal_code'] = $record_exists['postalcode'];
				$params['bill_to_address_state'] = $record_exists['state'];
				$params['bill_to_email'] = $record_exists['email'];
				$params['bill_to_forename'] = $record_exists['fname'];
				$params['bill_to_surname'] = $record_exists['lname'];
				$params['merchant_defined_data1'] = 'wc';
				$params['customer_ip_address'] = $_SERVER['REMOTE_ADDR'];
				$params['bill_to_phone'] = $record_exists['phone'];
				$mycustom_id=$params['reference_number']."-".trim($params['bill_to_email']);
				$params['consumer_id'] = $record_exists['info_id'];
				/*$params['bill_to_phone'] = $record_exists['phone'];;
				$params['consumer_id'] = '4321';
				$params['customer_ip_address'] = $_SERVER['REMOTE_ADDR'];*/
				         //customer_ip_address
				//, , bill_to_surname, 
			?>
            <?php /*?><input type="hidden" id="access_key" name="access_key" value="<REPLACE WITH ACCESS KEY>"/>
            <input type="hidden" id="profile_id" name="profile_id" value="<REPLACE WITH PROFILE ID>"/>
            <input type="hidden" id="transaction_uuid" name="transaction_uuid" value="5a66ad599e835"/>
            <input type="hidden" id="signed_field_names" name="signed_field_names" value="access_key,profile_id,transaction_uuid,signed_field_names,unsigned_field_names,signed_date_time,locale,transaction_type,reference_number,amount,currency"/>
            <input type="hidden" id="unsigned_field_names" name="unsigned_field_names" value=""/>
            <input type="hidden" id="signed_date_time" name="signed_date_time" value="2018-01-23T03:34:49Z"/>
            <input type="hidden" id="locale" name="locale" value="en"/>
            <input type="hidden" id="transaction_type" name="transaction_type" value="CVN"/>
            <input type="hidden" id="reference_number" name="reference_number" value="aa"/>
            <input type="hidden" id="amount" name="amount" value="1500"/>
            <input type="hidden" id="currency" name="currency" value="PKR"/>
            <input type="hidden" id="submit" name="submit" value="Submit"/><?php 
            <input type="hidden" id="signature" name="signature" value="<?php echo sign($params);?>"/>		*/?>	
            <?php
				foreach($params as $name => $value) {
					echo "<input type=\"hidden\" id=\"" . $name . "\" name=\"" . $name . "\" value=\"" . $value . "\"/>\n";
				}
				echo "<input type=\"hidden\" id=\"signature\" name=\"signature\" value=\"" . sign($params) . "\"/>\n";
			?>
            <!--<?php echo strlen($params['consumer_id']); ?>-->
		</form>
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
    <script type="text/javascript">
		$(document).ready(function(){
			$("#continue1").on("click", function(e){
			
				var en_email = $('#email').val();
				if(!validateEmail(en_email))
				{
					$('#emailErr').html("Please enter valid email.");
					return false;
				}
				else
				{
					$('#emailErr').html("");
					
					$.ajax({
						url: 'check_email.php',
						type: 'post',
						data: {email : en_email},
						async: false,
						success: function(data) {
							if(data == 1)
							{
								$('#action').val(1);
								$('#myform').submit();
							}
							else
							{
								$('#action').val(2);
								$('#continue1').hide();
								$('#hiddeninfo').show();
								e.preventDefault();
							}
						},
						error: function() {
							console.log('There has been an error, please alert us immediately');
						}
					});
				}
			});
		});
		</script>
        <script>
			showHideAlumniStdDiv();
		</script>

  </body>
</html>
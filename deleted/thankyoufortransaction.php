<?php
	include("standard/main.php"); 
	include("security_hbl.php");
	$http_referer=$_SERVER['HTTP_REFERER'];
	if(strpos($http_referer, "cybersource.com/") <= 0){
		header("location: /");
		exit();	
	}
	$session_id= session_id();
	$banner_image_url="img/pageimages/misc.jpg";
	$banner_text="";
	$default_open=-1;
		$cvn_array_message=array(
			"D"		=> "The transaction was considered to be suspicious by the issuing bank.",
			"I"		=> "The CVN failed the processor's data validation.",
			"M"		=> "The CVN matched.",
			"N"		=> "The CVN did not match.",
			"P"		=> "The CVN was not processed by the processor for an unspecified reason.",
			"S"		=> "The CVN is on the card but was not included in the request.",
			"U"		=> "Card verification is not supported by the issuing bank.",
			"X"		=> "Card verification is not supported by the card association.",
			"1"		=> "Card verification is not supported for this processor or card type.",
			"2"		=> "An unrecognized result code was returned by the processor for the card verification response.",
			"3"		=> "No result code was returned by the processor.",
			"130"	=> "Transaction Decision Variable did not received."
			);
	$fieldslength="utf8,auth_cv_result,req_locale,decision_case_priority,auth_trans_ref_no,req_bill_to_surname,score_rcode,auth_amount,auth_time,decision_early_return_code,score_device_fingerprint_true_ipaddress_attributes,transaction_id,score_device_fingerprint_javascript_enabled,payer_authentication_pares_status,score_ip_city,payer_authentication_cavv,req_merchant_defined_data1,req_consumer_id,auth_code,req_bill_to_address_country,auth_cv_result_raw,score_device_fingerprint_cookies_enabled,score_suspicious_info,decision_rcode,score_rmsg,score_device_fingerprint_browser_language,req_bill_to_address_line1,req_card_number,score_device_fingerprint_true_ipaddress,signature,score_identity_info,request_token,req_amount,payer_authentication_reason_code,decision_velocity_info,decision,decision_return_code,req_customer_ip_address,signed_field_names,decision_reason_code,payer_authentication_eci,score_time_local,req_transaction_type,payer_authentication_xid,score_internet_info,req_reference_number,score_device_fingerprint_flash_enabled,score_device_fingerprint_images_enabled,score_score_result,req_card_type_selection_indicator,payer_authentication_enroll_veres_enrolled,payer_authentication_proof_xml,req_card_expiry_date,score_rflag,score_card_issuer,req_bill_to_phone,auth_response,bill_trans_ref_no,req_payment_method,score_device_fingerprint_true_ipaddress_city,req_card_type,score_velocity_info,auth_avs_code,score_address_info,score_factors,score_phone_info,score_model_used,decision_rmsg,req_profile_id,score_device_fingerprint_hash,decision_rflag,signed_date_time,payer_authentication_validate_e_commerce_indicator,score_ip_state,score_ip_country,score_card_scheme,score_device_fingerprint_true_ipaddress_country,score_bin_country,req_bill_to_address_city,req_bill_to_address_postal_code,score_reason_code,reason_code,req_bill_to_forename,req_device_fingerprint_id,score_card_account_type,req_bill_to_email,auth_avs_code_raw,req_currency,score_device_fingerprint_smart_id_confidence_level,message,req_transaction_uuid,score_device_fingerprint_smart_id,score_return_code,score_host_severity,req_access_key,decision_early_reason_code,payer_authentication_validate_result,req_bill_to_address_state,decision_early_rcode";
	$fields_arr = explode(",", $fieldslength);
	$insert_array=array();
	for($i=0 ; $i < count($fieldslength) ; $i++){
		$fieldvalue=trim($fields_arr[$i]);
		if(isset($_POST[$fieldvalue])){
			$insert_array[$fieldvalue]=$_POST[$fieldvalue];
		}
	}
	/*$insert_array['cvn_desc']=isset($_POST['auth_cv_result'])?$cvn_array_message[trim($_POST['auth_cv_result'])]:$cvn_array_message['130'];
	$hbl_donations_query="INSERT INTO hbl_transactions (`amount`, `currency`, `proj_name`, `anonymous`, `ac_aff`, `name`, `fname`, `lname`, `email`, `phone`, `country`, `state`, `city`, `postalcode`, `address`, `token`, `sess_id`, `ddate`, `timestamp`, `status`, `delstatus`) SELECT `amount`, `currency`, `proj_name`, `anonymous`, `ac_aff`, `name`, `fname`, `lname`, `email`, `phone`, `country`, `state`, `city`, `postalcode`, `address`, `token`, `sess_id`, `ddate`, `timestamp`, `status`, `delstatus` FROM `donor_information` WHERE `token`='".$_POST['req_reference_number']."'";
	$db->insertRecord("hbl_transaction" , $insert_array);
	$db->executeQuery($hbl_donations_query);*/
	if(!empty($_POST)){
		$pagename="thankyou4transaction.php";
		$varlist= implode(",", array_keys($_POST));
		$response= implode(",", $_POST);
		$query="insert into `bank_reture` (page, varlist, response) values('".$pagename."','".$varlist."','".$response."')";
		$db->executeQuery($query);
	}
	session_destroy();
	if(trim($_POST['auth_cv_result'])=="M"){
		$message="Thank You for your donation."	;
	}else{
		$message="Your Transaction is not successful. Try Again.";
	}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- <?php echo $message;?> </title>

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
	
<style>
.error{
	color: red;	
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
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div align="center">
                            <img src="./img/nne_logo.png" alt="img" width="120" height="80"><br>
                            <h2 class="titlewithoutbordercenter" style="font-size: 26px; ">Aitchison College<span style=" margin: 0px; padding: 0px; display: block; position: relative; top: -10; font-size: 26px;">Donations Form</span></h2>
                        </div>                    
                    </div>
                </div>
                <div class="row">
                	<div class="col-md-offset-1" style="margin-top:15px;">
                      <div class="welcome-msg"> <?php echo $message;?>.</div>
                      <?php /*?><div class="welcome-msg"> <?php print_r($record_exists);?></div><?php */?>
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
    <script type="text/javascript">
		//alert("Akhtar Rafique-set it one.");
		$(document).ready(function(){
			$("#continue").on("click", function(e){
				validateForm();   
			});
			function validateForm(){
				var nameReg = /^[A-Z a-z]+$/;
				var postReg = /^[A-Z a-z 0-9]+$/;
				var numberReg =  /^[0-9]+$/;
				var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
				
				var amount = ($('#amount').val()).trim();
				var chkAlumni = $('#chkAlumni').is(':checked');
				var chkStaff = $('#chkStaff').is(':checked');
				var chkFriend = $('#chkFriend').is(':checked');
				var chkParent = $('#chkParent').is(':checked');
				var chkStudent = $('#chkStudent').is(':checked');
				var chkOther = $('#chkOther').is(':checked');				
				var fname = ($('#fname').val()).trim();
				var lname = ($('#lname').val()).trim();
				var city = ($('#city').val()).trim();
				var postalcode = ($('#postalcode').val()).trim();				
				var email = ($('#email').val()).trim();
				var phone = ($('#phone').val()).trim();
				var address = ($('#address').val()).trim();
				
				$('.error').remove();
				if(amount === ""){
					$('#amount').after('<span class="error"> Please enter correct amount</span>');					
				}
				if(!nameReg.test(fname)){
						$('#fname').after('<span class="error"> Please enter a valid First Name</span>');
				}
				if(!nameReg.test(lname)){
						$('#lname').after('<span class="error"> Please enter a valid Last Name</span>');
				}
				if(email=== "" || !emailReg.test(email)){
						$('#email').after('<span class="error"> Please enter a valid email address</span>');
				}
				if(phone=== "" || !numberReg.test(phone) || phone.length <= 9){
						$('#phone').after('<span class="error"> Please enter a valid phone </span>');
				}
				if(!nameReg.test(city)){	//if(city=== "" || !numberReg.test(city) || city.length <= 3){
						$('#city').after('<span class="error"> Please enter a valid city </span>');
				}
				if(!postReg.test(postalcode)){	//if(city=== "" || !numberReg.test(city) || city.length <= 3){
						$('#postalcode').after('<span class="error"> Please enter a Postal Code </span>');
				}
				if(address === ""){
					$('#address').after('<span class="error"> Please enter your address</span>');					
				}
				if(chkAlumni != true && chkStaff != true && chkFriend != true && chkParent != true && chkStudent != true && chkOther != true ){
					$('#affiliation_error').after('<span class="error"> Please select your affiliation with the college.</span>');
				}
				if((!$('.error').length > 0)){
					$("#myform").on("submit", function(e){
						return true;   
					});
				}else{
					$("#myform").on("submit", function(e){
						return false;   
					});
				}
			}  
		});
	</script>
    <script>
		function getState(val) {
			$("#state-list").html('');
			$.ajax({
			type: "POST",
			url: "get_iso_states.php",
			data:'country_id='+val,
			success: function(data){
				$("#state-list").html(data);
			}
			});
		}
		
		function selectCountry(val) {
		$("#search-box").val(val);
		$("#suggesstion-box").hide();
		}
	</script>
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
    <script src="js/menufix.js"></script>

  </body>
</html>
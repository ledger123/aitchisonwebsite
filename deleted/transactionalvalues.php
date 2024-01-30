<?php
	include("standard/main.php"); 
	include("security_hbl.php");
	$http_referer=$_SERVER['HTTP_REFERER'];
	if(strpos($http_referer, "cybersource.com/") >= 0){
		/*header("location: /");
		exit();	*/
	
	$session_id= session_id();
	$banner_image_url="img/pageimages/misc.jpg";
	$banner_text="";
	$default_open=-1;
	if(!empty($_POST)){
		$pagename="transactionalvalues.php";
		$varlist= implode(",", array_keys($_POST));
		$response= implode(",", $_POST);
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
		//print_r($fields_arr);
		$insert_array=array();
		for($i=0 ; $i < count($fields_arr) ; $i++){
			$fieldvalue=trim($fields_arr[$i]);
			//echo "fieldvalue:\t".$fieldvalue."<br><br><br>";
			if(isset($_POST[$fieldvalue]) && strlen($fieldvalue) > 3){
				$insert_array[$fieldvalue]=$_POST[$fieldvalue];
			}
		}
		$insert_array['cvn_desc']=isset($_POST['auth_cv_result'])?$cvn_array_message[trim($_POST['auth_cv_result'])]:$cvn_array_message['130'];
		$hbl_donations_query="INSERT INTO hbl_donations (`amount`, `currency`, `proj_name`, `anonymous`, `ac_aff`, `name`, `fname`, `lname`, `email`, `phone`, `country`, `state`, `city`, `postalcode`, `address`, `token`, `sess_id`, `ddate`, `timestamp`, `status`, `delstatus`) SELECT `amount`, `currency`, `proj_name`, `anonymous`, `ac_aff`, `name`, `fname`, `lname`, `email`, `phone`, `country`, `state`, `city`, `postalcode`, `address`, `token`, `sess_id`, `ddate`, `timestamp`, `status`, `delstatus` FROM `donor_information` WHERE `token`='".$_POST['req_reference_number']."'";
		$db->insertRecordNoAuto("hbl_transaction" , $insert_array);
		$db->executeQuery($hbl_donations_query);
		$query="insert into `bank_reture` (page, varlist, response) values('".$pagename."','".$varlist."','".$response."')";
		$db->executeQuery($query);
		
	}else{
		echo "No Post Variables are provided"	;
	}
	}
	
?>

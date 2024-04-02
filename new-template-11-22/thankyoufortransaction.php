<!DOCTYPE html>
<html>
<?php
$path = '';

$title = "Transaction Status"; include_once("header-includes.php");

$banner_url = $path.'resources/assets/images/banners/contacts.jpg';
$page_header = $title;
?>
<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);	
$pathdonation="";
include($pathdonation."portal/classes/usersession2.php");
include_once("resources/php/security_hbl.php");		
$session_id= session_id();	
$http_referer= $_SERVER['HTTP_REFERER']; //"https://cybersource.com/";
if(strpos($http_referer, "cybersource.com/") <= 0){
	header("location: /");
	exit();	
}	
/*****/
	$signature_verify="False";
	$params=array();
	foreach($_REQUEST as $name => $value) {
		$params[$name] = $value;        
	}
    if (isset($params["signature"]) && strcmp($params["signature"], sign($params))==0) {
		$signature_verify="True";
	} else {
		$signature_verify="False";
	}
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
	for($i=0 ; $i < count($fields_arr) ; $i++){
		$fieldvalue=trim($fields_arr[$i]);
		if(isset($_POST[$fieldvalue])){
			$insert_array[$fieldvalue]=$_POST[$fieldvalue];
		}
	}
	if(!empty($_POST)){
		$params_db = array();
		$pagename="thankyou4transaction.php";
			$params_db[] = array("datatype"=>"s", "value"=>$pagename);
		$varlist= implode(",", array_keys($_POST));
			$params_db[] = array("datatype"=>"s", "value"=>$varlist);
		$response= implode(",", $_POST);
			$params_db[] = array("datatype"=>"s", "value"=>$response);
		$query="insert into `bank_reture` (page, varlist, response) values(?, ?, ?)";
		$lastInsertId = $dc->ExecuteNonQuery($insert_qry, $params_db, true);
	}
	session_destroy();
	if(isset($_POST['auth_cv_result']) && trim($_POST['auth_cv_result'])=="M" && $signature_verify=="True"){
		$title="Thank You for your donation."	;
	}else{
		$title="Transaction failed. Try Again.";
	}
	
/*****/	
?>
	<style>
.error{
	color: red;	
}
@media only screen and (max-width: 1023px){	
	.control-label{
		text-align: left;
	}
	.text-right{
		text-align: left;
	}
}
</style>
<body>

<?php include_once ($path.'logo-page-banner.php'); ?>

<?php include_once("mega-menu.php");?>

<div class="breadcrumb-bar">
    <div class="container">

        <div class="row">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo $path;?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="d-one.php">Donate Now</a></li>
                </ol>
            </nav>

        </div>
    </div>
</div>
	

<div class="container">
	
    
</div>

<div class="divider"></div>

<!-- Footer -->

<?php include_once($path."footer.php");?>

<!-- End Footer -->


<!-- End Footer Includes -->
<?php include_once($path."footer-includes.php");?>

<!-- End Footer Includes -->
</body>
 
</html>
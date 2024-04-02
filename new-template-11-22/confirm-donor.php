<!DOCTYPE html>
<html>
<?php
$path = '';

$title = "PLEASE CONFIRM YOUR INFORMATION"; include_once("header-includes.php");

$banner_url = $path.'resources/assets/images/banners/contacts.jpg';
$page_header = $title;
?>
<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);	
$pathdonation="";
include($pathdonation."portal/classes/usersession2.php");
include_once("resources/php/security_hbl.php");	
$session_id= session_id();
	
/*****/
	date_default_timezone_set('Asia/Karachi');
	$params = array();
		
	if(count($_POST) > 0){		
		if($_SERVER['HTTP_REFERER']=="https://aitchison.edu.pk/d-one.php" || $_SERVER['HTTP_REFERER']=="https://www.aitchison.edu.pk/d-one.php"){			
			foreach($_POST as $key=>$value){				
				$_POST[$key]=str_replace('"',"&quot;",$_POST[$key]);
			}			
		}else{			
			header("location: d-one.php");
			exit();
		}
		$amount=intval($_POST['amount']);
			$params[] = array("datatype"=>"i", "value"=>$amount);
		$currency=strip_tags(trim($_POST['currency']));
			$params[] = array("datatype"=>"s", "value"=>$currency);
		$proj_name=strip_tags(trim($_POST['proj_name']));
			$params[] = array("datatype"=>"s", "value"=>$proj_name);
		$anonymous=(isset($_POST['anonymous']) && strlen($_POST['anonymous']) > 3)?"Yes":"No";		
			$params[] = array("datatype"=>"s", "value"=>$anonymous);
		$ac_aff=strip_tags(implode(", ", $_POST['affiliation']));
			$params[] = array("datatype"=>"s", "value"=>$ac_aff);
		$fname=strip_tags($_POST['fname']);
			$params[] = array("datatype"=>"s", "value"=>$fname);
		$lname=strip_tags($_POST['lname']);
			$params[] = array("datatype"=>"s", "value"=>$lname);
		$name=$fname." ".$lname;
			$params[] = array("datatype"=>"s", "value"=>$name);
		$email=strip_tags($_POST['email']);
			$params[] = array("datatype"=>"s", "value"=>$email);
		$phone=strip_tags($_POST['phone']);
			$params[] = array("datatype"=>"s", "value"=>$phone);
		$country=strip_tags($_POST['country-list']);
			$params[] = array("datatype"=>"s", "value"=>$country);
		$state=strip_tags($_POST['state-list']);
			$params[] = array("datatype"=>"s", "value"=>$state);
		$city=strip_tags($_POST['city']);
			$params[] = array("datatype"=>"s", "value"=>$city);		
		$address=strip_tags($_POST['address']);
			$params[] = array("datatype"=>"s", "value"=>$address);
		$postalcode=strip_tags($_POST['postalcode']);
			$params[] = array("datatype"=>"s", "value"=>$postalcode);
		$sess_id=strip_tags($session_id);
			$params[] = array("datatype"=>"s", "value"=>$sess_id);
		$ddate=date("Y-m-d");
			$params[] = array("datatype"=>"s", "value"=>$ddate);
		$timestamp=date("Y-m-d H:i:s");
			$params[] = array("datatype"=>"s", "value"=>$timestamp);
		$timestamp2=time();		

		//COALESCE(SUM(column),0)
		//$token=$timestamp2.$db->countRecord("select (COALESCE(count(info_id),0)+1) as maxid from donor_information", "maxid");
		$token_table=$dc->ExecuteQuery("select (COALESCE(count(info_id),0)+1) as maxid from donor_information", true);
		$token_row=$token_table->Rows[0];
		$token=$token_row->maxid;		
		$params[] = array("datatype"=>"i", "value"=>$token);
		$insert_qry="INSERT INTO donor_information (amount, currency, proj_name, anonymous, ac_aff, fname, lname, name, email, phone, country, state, city, address, postalcode, sess_id, ddate,  `timestamp`, token) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$lastInsertId = $dc->ExecuteNonQuery($insert_qry, $params, true);		
		if($lastInsertId > 0){
			header("location: confirm-donor.php");
			exit();
		}
		/*********
	
		$qry = "INSERT INTO portal_syllabus (Title, SyllabusDate, Active, UserId)
		VALUES (?,?,?,?)";
		
		$params = array(
			array("datatype"=>"s", "value"=>$title),
			array("datatype"=>"s", "value"=>$syllabusDate),
			array("datatype"=>"i", "value"=>$active),
			array("datatype"=>"i", "value"=>$userId)
		);
		
		//echo $qry;
		
		$lastInsertId = $this->dc->ExecuteNonQuery($qry, $params, true);
		//echo "last id: ".$lastInsertId;
		
		return $lastInsertId;
	********/
		//$stmt = $con->prepare("INSERT INTO donor_information (amount, currency, proj_name, anonymous, ac_aff, fname, lname, name, email, phone, address, token, sess_id, ddate,  `timestamp`, country, state, city, postalcode) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		
		//$query="INSERT INTO donor_information (amount, currency, proj_name, anonymous, ac_aff, fname, lname, name, email, phone, address, token, sess_id, ddate,  `timestamp`, country, state, city, postalcode) VALUES (".$amount.", '".$currency."', '". $proj_name."', '". $anonymous."', '". $ac_aff."', '". $fname."', '". $lname."', '". $lname."', '". $email."', '". $phone."', '". $address."', '".$token."', '". $sess_id."', '". $ddate."', '". $timestamp."', '". $country."', '". $state."', '". $city."', '". $postalcode."')";
		//echo "Akhtar"."<br><br>".$query."<br><br>";
		/*
		if ($con->query($query) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $query . "<br>" . $con->error;
		}
		*/
		
		/*if($stmt){
			$stmt->bind_param("issssssssssisssssss", $amount, $currency, $proj_name, $anonymous, $ac_aff, $fname, $lname, $name, $email, $phone, $address, $token, $sess_id, $ddate, $timestamp, $country, $state, $city, $postalcode);
			$stmt->execute();
			
			header("location: confirm-donor.php");
			exit();
		}*/	
		
	}
	/*$record_exists=$db->getSingleRow("select * from donor_information where sess_id='".$session_id."' ORDER BY  `donor_information`.`info_id` DESC");*/
	$qry="select * from donor_information where sess_id='".$session_id."' ORDER BY  `donor_information`.`info_id` DESC Limit 0, 1";
	//$qry="select * from donor_information ORDER BY  `donor_information`.`info_id` DESC Limit 0, 1";
	$d_table=$dc->ExecuteQuery($qry, true);

	if($d_table->rowsCount() > 0){
		$record_exists=$d_table->Rows[0];
		//print_r($dataRow);
		//$d_table->PrintTable();
		//echo "true";
	}else{
		header("location: d-one.php");
		exit();	
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
                    <li class="breadcrumb-item" aria-current="page"><a href="d-one.php">Donate Now</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="confirm-donor.php">Confirm Information</a></li>
                </ol>
            </nav>

        </div>
    </div>
</div>


<div class="container">
	<?php /*?><div class="row">
		<div class="col-md-offset-1" style="margin-top:15px;">
			  <div class="welcome-msg"> Thank you for considering a donation.</div>			
		</div>
	</div>
	<br><?php */?>
	<form name="myform" id="myform" role="form" method="post" action="https://secureacceptance.cybersource.com/pay" class="form-horizontal" novalidate>		
			<div class="row page-contents">
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
						<div class="mb-1">
						<label class="control-label" for="amount" id="amountLabel"><strong>Amount:</strong> <span style="color:red;"> </span></label>
						</div>
						<div class="mb-3">
							<?php echo $record_exists['currency']; ?>&nbsp;<?php echo $record_exists['amount']; ?>
						</div>	
					</div>	
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
						<div class="mb-1">
						<label class="control-label" for="currency"><strong>I want to donate for:</strong> <span style="color:red;"> </span></label>
						</div>
						<div class="mb-3">
							<?php echo $record_exists['proj_name'];?>
						</div>	
					</div>	
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
							<div class="mb-1">
							<label class="control-label" for="name"><strong>Affiliation with Aitchison College?</strong></label>
							</div>	
							<div class="mb-3">
								<?php echo $record_exists['ac_aff'];?>
							</div>									
					</div>	
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">							
							<div class="mb-1">
							<label class="control-label" for="name"><strong>First Name</strong></label>						
							</div>	
							<div class="mb-3">	
								<?php echo $record_exists['fname'];?>
							</div>										
					</div>	
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">					<div class="mb-1">
						<label class="control-label" for="email"><strong>Last Name(Sur Name):</strong></label>
						</div>	
						<div class="mb-3">
							<?php echo $record_exists['lname'];?>
						</div>									
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
							<div class="mb-1">
							<label class="control-label" for="phone"><strong>Email</strong></label>
							</div>	
							<div class="mb-3">
							<?php echo $record_exists['email'];?>
							</div>								
					</div>	
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
						<div class="mb-1">
							<label class="control-label" for="country"><strong>Phone</strong></label>
						</div>	
						<div class="mb-3">
							<?php echo $record_exists['phone'];?>
						</div>	
					</div>	
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
						<div class="mb-1">
							<label class="control-label" for="country"><strong>Country</strong></label>
						</div>	
						<div class="mb-3">
							<?php echo $record_exists['country'];?>
						</div>	
					</div>	
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
						<div class="mb-1">
							<label class="control-label" for="country"><strong>State</strong></label>
						</div>	
						<div class="mb-3">
							<?php echo $record_exists['state'];?>
						</div>	
					</div>	
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
						<div class="mb-1">
							<label class="control-label" for="country"><strong>City</strong></label>
						</div>	
						<div class="mb-3">
							<?php echo $record_exists['city'];?>
						</div>	
					</div>	
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
						<div class="mb-1">
							<label class="control-label" for="country"><strong>Postal Code</strong></label>
						</div>	
						<div class="mb-3">
							<?php echo $record_exists['postalcode'];?>
						</div>	
					</div>	
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
						<div class="mb-1">
							<label class="control-label" for="country"><strong>Address</strong></label>
						</div>	
						<div class="mb-3">
							<?php echo $record_exists['address'];?>
						</div>	
					</div>	
				</div>				
			</div>
		<?php /*?>BANK TRANSACTION STARTED FROM HERE.<?php */?>
		<?php				
				$params['access_key'] = '4f722bdef82d3b9e9bed98a7ee1e7175';
				$params['profile_id'] = 'C7A1C328-F32D-463F-89F8-2B55CFDB4868';
				
				$params['transaction_uuid'] = uniqid();				
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
				foreach($params as $name => $value) {
					echo "<input type=\"hidden\" id=\"" . $name . "\" name=\"" . $name . "\" value=\"" . $value . "\"/>\n";
				}
				echo "<input type=\"hidden\" id=\"signature\" name=\"signature\" value=\"" . sign($params) . "\"/>\n";
			?>
            <!--<?php echo strlen($params['consumer_id']); ?>-->
		<?php /*?>BANK TRANSACTION ENDED   FROM HERE.<?php */?>
			<div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-12">
				<div class="form-group">
					<div class="mt-4" align="right">
						<div class="form-group" style="display:block;">
							<div class="col-md-offset-4 col-md-8 text-right" style="padding-bottom:10px;">
								
									<a href="d-one.php" class="btn btn-primary">Back</a>
								&nbsp;&nbsp;
								<input class="btn btn-primary" type="submit" id="submit" name="submit" value="Proceed to Payment"/>								
							</div>                
						</div>
					</div>
					
				</div>
			</div>	
			
			
	</form>	
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
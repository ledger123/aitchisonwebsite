<!DOCTYPE html>
<html>
<?php
$path = '';

$title = "Donations Form"; 
include_once("header-includes.php");
$banner_url = $path.'resources/assets/images/banners/contacts.jpg';
?>
<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
//$pathdonation="../";
include("portal/classes/usersession2.php");
$session_id= session_id();
$qry="select * from donor_information where sess_id='$session_id' ORDER BY  `donor_information`.`info_id` DESC Limit 0, 1";
//$qry="select * from donor_information ORDER BY  `donor_information`.`info_id` DESC Limit 0, 1";
$d_table=$dc->ExecuteQuery($qry, true);
$record_exists=array();
if($d_table->rowsCount() > 0){
	$record_exists=$d_table->Rows[0];
	//print_r($dataRow);
	//$d_table->PrintTable();
	//echo "true";
}
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

.form-control {
    height: 38px;
    -webkit-appearance: menulist!important;
    -moz-appearance: menulist!important;
    -ms-appearance: menulist!important;
    -o-appearance: menulist!important;
    appearance: menulist!important;
}

</style>
<body>
<?php include_once ('top-menu-bar.php'); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent nav-home">

    <div class="logo-left">

    </div>

</nav>

<section style="background: url(<?php echo $banner_url; ?>); background-repeat: no-repeat;background-size: cover;" class="page-banner">

    <div class="container banner-text">
        <div class="banner-heading">

        </div>
    </div>
</section>

<?php include_once("mega-menu.php");?>


<div class="container">


	<div class="row mt-2">
        <div class="col-lg-9 col-md-6 col-sm-12">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="d-one.php">Donate Now</a></li>
                </ol>
            </nav>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 text-lg-start text-sm-center">
            <div></div>
        </div>
    </div>

	<div class="col-lg-12 col-md-12 col-sm-12">
        <div class="col-12 page-title page-title2">
            <h1><?php echo $title; ?></h1>
        </div>
    </div>

	<div class="row">
		<div class="col-md-offset-1" style="margin-top:15px;">
			  <div class="welcome-msg"> Thank you for considering a donation.</div>
			  <?php /*?><div class="welcome-msg"> <?php print_r($record_exists);?></div><?php */?>
		</div>
	</div>
	<br>
	<form name="myform" id="myform" role="form" method="post" action="confirm-donor.php" class="form-horizontal" novalidate>
		<input type="hidden" name="action" id="action" value="2">
			<div class="row">
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
						<div class="mb-1">
						<label class="control-label" for="amount" id="amountLabel">Amount: <span style="color:red;"> *</span></label>
						</div>
						<div class="mb-3">
						<input class="form-control" type="number" name="amount" id="amount" min="1" value="<?php echo (count($record_exists) > 0)?$record_exists['amount']:'';?>" style="width:100%;" maxlength="10" placeholder="Enter Amount">				</div>	
					</div>	
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
						<div class="mb-1">
						<label class="control-label" for="currency">Currency: <span style="color:red;"> *</span></label>
						</div>
						<div class="mb-3">
						<select class="form-control" name="currency" id="currency" style="width:100%">
                    	<option value="PKR"<?php echo ((count($record_exists) > 0) && $record_exists['currency']=="PKR")?' selected':'';?>>Pakistani Rupees</option>
                        <option value="USD"<?php echo ((count($record_exists) > 0) && $record_exists['currency']=="USD")?' selected':'';?>>US Dollar</option>
                        <option value="GBP"<?php echo ((count($record_exists) > 0) && $record_exists['currency']=="GBP")?' selected':'';?>>Great British Pound</option>
                        <option value="EUR"<?php echo ((count($record_exists) > 0) && $record_exists['currency']=="EUR")?' selected':'';?>>Euro</option>
                        <option value="AED"<?php echo ((count($record_exists) > 0) && $record_exists['currency']=="AED")?' selected':'';?>>United Arab Emirates Dirham</option>
                    </select>
						</div>	
					</div>	
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
							<div class="mb-1">
							<label class="control-label" for="name">First Name:<span style="color:red;"> *</span></label>
							</div>	
							<div class="mb-3">
							<input required="" type="text" name="fname" id="fname" class="form-control" value="<?php echo (count($record_exists) > 0)?$record_exists['fname']:'';?>" style="width: 100%;">
							</div>									
					</div>	
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">							
							<div class="mb-1">
							<label class="control-label" for="name">Last Name:<span style="color:red;"> *</span></label>						
							</div>	
							<div class="mb-3">	
							<input required="" type="text" name="lname" id="lname" class="form-control" value="<?php echo (count($record_exists) > 0)?$record_exists['lname']:'';?>" style="width: 100%;">						</div>										
					</div>	
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">					<div class="mb-1">
						<label class="control-label" for="email">Email:<span style="color:red;"> *</span></label>
						</div>	
						<div class="mb-3">
						<input required="" type="email" name="email" id="email" class="form-control" value="<?php echo (count($record_exists) > 0)?$record_exists['email']:'';?>" style="width: 100%;">
						</div>									
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
							<div class="mb-1">
							<label class="control-label" for="phone">Phone:<span style="color:red;"> *</span></label>
							</div>	
							<div class="mb-3">
							<input required="" type="text" name="phone" id="phone" class="form-control" value="<?php echo (count($record_exists) > 0)?$record_exists['phone']:'';?>" style="width: 100%;">						
							</div>								
					</div>	
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
						<div class="mb-1">
							<label class="control-label" for="country">Country:<span style="color:red;"> *</span></label>
						</div>	
						<div class="mb-3">
							<?php
								if(count($record_exists) > 0)
									$country=$record_exists['country'];
								else
									$country='PK';
								$country_query="select iso_code, name from countryiso where status='Active'";
								$countrieslist=$dc->ExecuteQuery($country_query, true);
								$countryCombo = new ComboBox("country-list", "class='form-control' onChange='getState(this.value);' style='width:100%'", $countrieslist);
								$countryCombo->valueField = "iso_code";
								$countryCombo->textField = "name";
								$countryCombo->SetSelectedValue($country);
								$countryCombo->Bind();
							?>
						</div>	
					</div>	
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
						<div class="mb-1">
							<label class="control-label" for="state">State:<span style="color:red;"> *</span></label>
						</div>	
						<div class="mb-3">
							<?php
								if(count($record_exists) > 0){
									$state=$record_exists['state'];
								}else{
									$state='PB';
								}
								$state_query="select iso_code, name from stateiso where iso_country_code='$country' ORDER BY `name`";
								$statelist=$dc->ExecuteQuery($state_query, true);
								$stateCombo = new ComboBox("state-list", "class='form-control' style='width:100%'", $statelist);
								$stateCombo->valueField = "iso_code";
								$stateCombo->textField = "name";
								$stateCombo->SetSelectedValue($state);
								$stateCombo->Bind();

							?>
						</div>
					</div>	
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
						<div class="mb-1"><label class="control-label" for="name">City:<span style="color:red;"> *</span></label></div>
						<div class="mb-3"><input required="" type="text" name="city" id="city" class="form-control" value="<?php echo (count($record_exists) > 0)?$record_exists['city']:'';?>" style="width: 100%;"></div>
					</div>
				</div>	
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
						<div class="mb-1"><label class="control-label" for="name">Postal Code:<span style="color:red;"> *</span></label></div>
						<div class="mb-3"><input required="" type="text" name="postalcode" id="postalcode" class="form-control" value="<?php echo (count($record_exists) > 0)?$record_exists['postalcode']:'';?>" style="width: 100%;"></div>
					</div>
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
						<div class="mb-1"><label class="control-label" for="fundType">I want to donate to: <span style="color:red;"> *</span></label></div>
						<div class="mb-3"><select class="form-control" name="proj_name" id="proj_name" style="width:100%">
						<!--<?php echo ((count($record_exists) > 0) && $record_exists['currency']=="PKR")?' selected':'';?>-->
                        <option value="Student bursaries Annual Giving"<?php echo ((count($record_exists) > 0) && $record_exists['proj_name']=="Student bursaries Annual Giving")?' selected':'';?>>Student bursaries Annual Giving</option>
						<option value="Students bursaries Langlands' Trust"<?php echo ((count($record_exists) > 0) && $record_exists['proj_name']=="Students bursaries Langlands' Trust")?' selected':'';?>>Students bursaries Langlands' Trust</option>

                                <option value="Friends of Aitchison Trust"<?php echo ((count($record_exists) > 0) && $record_exists['proj_name']=="Friends of Aitchison Trust")?' selected':'';?>>Friends of Aitchison Trust</option>

						<option value="Capital Projects"<?php echo ((count($record_exists) > 0) && $record_exists['proj_name']=="Capital Projects")?' selected':'';?>>Capital Projects</option>
						<option value="Old Building Maintenance Fund"<?php echo ((count($record_exists) > 0) && $record_exists['proj_name']=="Old Building Maintenance Fund")?' selected':'';?>>Old Building Maintenance Fund</option>
						<option value="Grounds and Gardens"<?php echo ((count($record_exists) > 0) && $record_exists['proj_name']=="Grounds and Gardens")?' selected':'';?>>Grounds and Gardens</option>
						<option value="Reliving Aitchison"<?php echo ((count($record_exists) > 0) && $record_exists['proj_name']=="Reliving Aitchison")?' selected':'';?>>Reliving Aitchison</option>
                        <option value="Other"<?php echo ((count($record_exists) > 0) && $record_exists['proj_name']=="Other")?' selected':'';?>>Other</option>
						
											</select></div>
					</div>
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
						<div class="mb-3"><label class="control-label label-margin" for="anonymous">Anonymous: <span>&nbsp;</span></label></div>
						<div class="mb-3">
								<input type="checkbox" name="anonymous" value="anonymous"<?php echo ((count($record_exists) > 0) && $record_exists['anonymous']=="Yes")?" Checked":"";?>/>
						&nbsp;&nbsp;I wish my gift to be anonymous</div>
					</div>
				</div>					
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
						<div class="mb-1"><label class="control-label" for="affiliation">
						What is your affiliation with Aitchison College? <span style="color:red;"> *</span></label></div>
						<div class="mb-3">
							<label class="checkbox-inline">
						<?php
							if((count($record_exists) > 0) && isset($record_exists['ac_aff'])){	
								$record_exists['ac_aff']="akhtarrafiq, ".$record_exists['ac_aff'];
							}	
								?>
						<input type="checkbox" name="affiliation[]" id="chkAlumni" value="Alumnus"<?php echo ((count($record_exists) > 0) && strpos($record_exists['ac_aff'], 'Alumnus') > 0)?' checked':'';?>>&nbsp;&nbsp;Alumnus</label><br>
					<label class="checkbox-inline">
						<input type="checkbox" name="affiliation[]" id="chkStaff" value="Faculty/Staff"<?php echo ((count($record_exists) > 0) && strpos($record_exists['ac_aff'], 'Faculty/Staff') > 0)?' checked':'';?>>&nbsp;&nbsp;Faculty/Staff
					</label><br>
					<label class="checkbox-inline">
						<input type="checkbox" name="affiliation[]" id="chkFriend" value="Friend"<?php echo ((count($record_exists) > 0) && strpos($record_exists['ac_aff'], 'Friend') > 0)?' checked':'';?>>&nbsp;&nbsp;Friend
					</label><br>
					<label class="checkbox-inline">
						<input type="checkbox" name="affiliation[]" id="chkParent" value="Parent"<?php echo ((count($record_exists) > 0) && strpos($record_exists['ac_aff'], 'Parent') > 0)?' checked':'';?>>&nbsp;&nbsp;Parent
					</label><br>
					<label class="checkbox-inline">
						<input type="checkbox" name="affiliation[]" id="chkStudent" value="Student"<?php echo ((count($record_exists) > 0) && strpos($record_exists['ac_aff'], 'Student') > 0)?' checked':'';?>>&nbsp;&nbsp;Student
					</label> <br>
                    <label class="checkbox-inline" id="endchk">
						<input type="checkbox" name="affiliation[]" id="chkOther" value="Other"<?php echo ((count($record_exists) > 0) && strpos($record_exists['ac_aff'], 'Other') > 0)?' checked':'';?>>&nbsp;&nbsp;Other
					</label>
						</div>
					</div>
				</div>
				<div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12">
					<div class="form-group">
						<div class="mb-1"><label class="control-label" for="address">Address:<span style="color:red;"> *</span></label></div>
						<div class="mb-3"><textarea required type="text" name="address" id="address" class="form-control" rows="6" style="width: 100%;"><?php echo (count($record_exists) > 0 && isset($record_exists['address']))?$record_exists['address']:'';?></textarea></div>
					</div>
				</div>			
				<div class="col-lg-offset-1 col-lg-10 col-md-offset-1 col-md-10 col-sm-12">
				<div class="form-group">
					<div class="mt-4" align="right">
						<div class="form-group" style="display:block;">
							<div class="col-md-offset-4 col-md-3 text-right" style="padding-bottom:10px;">
								<button class="btn btn-primary" id="continue">Continue</button>
							</div>                
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
				var processmyform="false";
				$('.error').remove();
				
				
				if(amount === ""){
					$('#amount').after('<span class="error"> Please enter correct amount</span>');					
				}
				/*if(parseInt(amount) > 0){
					$('#amount').after('<span class="error"> Please enter correct amount. Amount must be greater than Zero</span>');					
				}*/
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
				/*alert(document.getElementsByClassName("error").length);
				alert(document.getElementsByClassName("error").length <= 0);*/
				if((document.getElementsByClassName("error").length <= 0)){
					//alert("Akhtar");
					var test="test";
					document.getElementById("myform").submit();
					//alert("Truee");
					$("#myform").on("submit", function(e){
						return true;   
					});
				}else{
					$("#myform").on("submit", function(e){
						return false;   
					});
				}
				
				/*if(!($('.error').length >= 0)){
					var test="test";
					$("#myform").on("submit", function(e){
						return true;   
					});
				}else{
					$("#myform").on("submit", function(e){
						return false;   
					});
				}*/
			}  
		});
	</script>	
 <script>
		function getState(val) {			
			$("#state-list").html('');			
			$.ajax({
			type: "POST",
			url: "resources/php/get_iso_states.php",
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
</body>
 
</html>
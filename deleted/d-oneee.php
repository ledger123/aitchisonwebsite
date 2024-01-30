<?php
	include("standard/main.php"); 
	$session_id= session_id();
	$banner_image_url="img/pageimages/misc.jpg";
	$banner_text="";
	$default_open=-1;
	$record_exists=$db->getSingleRow("select * from donor_information where sess_id='$session_id' ORDER BY  `donor_information`.`info_id` DESC");
	if(count($record_exists) > 0){
		$record_exists['ac_aff']="akhtar " .$record_exists['ac_aff'];
	}
	/*foreach($_SERVER as $dkey=>$dvalue){
		echo $dkey."aa<br>".$dvalue;
		echo "<br><br>";
	}*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Aitchison College:- Aitchison Donations </title>

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
                      <div class="welcome-msg"> Thank you for considering a donation.</div>
                      <?php /*?><div class="welcome-msg"> <?php print_r($record_exists);?></div><?php */?>
                </div>
            </div>
            <br>

		 
            <form name="myform" id="myform" role="form" method="post" action="confirm-donor.php" class="form-horizontal" novalidate>
			<input type="hidden" name="action" id="action" value="2">
			
			<div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="amount" id="amountLabel">Amount: <span style="color:red;"> *</span></label>
				</div>
				<div class="col-md-8">
					<input class="form-control" type="text" name="amount" id="amount" value="<?php echo (count($record_exists) > 0)?$record_exists['amount']:'';?>" style="width:45%;" maxlength="10" placeholder="Enter Amount">					
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="currency">Currency: <span style="color:red;"> *</span></label>
				</div>
				<div class="col-md-8">
					<select class="form-control" name="currency" id="currency" style="width:45%">
                    	<option value="PKR"<?php echo ((count($record_exists) > 0) && $record_exists['currency']=="PKR")?' selected':'';?>>Pakistani Rupees</option>
                        <option value="USD"<?php echo ((count($record_exists) > 0) && $record_exists['currency']=="USD")?' selected':'';?>>US Dollar</option>
                        <option value="GBP"<?php echo ((count($record_exists) > 0) && $record_exists['currency']=="GBP")?' selected':'';?>>Great British Pound</option>
                        <option value="EUR"<?php echo ((count($record_exists) > 0) && $record_exists['currency']=="EUR")?' selected':'';?>>Euro</option>
                        <option value="AED"<?php echo ((count($record_exists) > 0) && $record_exists['currency']=="AED")?' selected':'';?>>United Arab Emirates Dirham</option>
                        
                        
                        
                    </select>
					
				</div>
			</div>			 
			<div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="fundType">I want to donate to: <span style="color:red;"> *</span></label>
				</div>
				<div class="col-md-8">
					<select class="form-control" name="proj_name" id="proj_name" style="width:45%">
						<!--<?php echo ((count($record_exists) > 0) && $record_exists['currency']=="PKR")?' selected':'';?>-->						
						<option value="Student Bursaries"<?php echo ((count($record_exists) > 0) && $record_exists['proj_name']=="Student Bursaries")?' selected':'';?>>Student Bursaries</option>
						<option value="Jafar Memorial Hockey Pitch"<?php echo ((count($record_exists) > 0) && $record_exists['proj_name']=="Jafar Memorial Hockey Pitch")?' selected':'';?>>Jafar Memorial Hockey Pitch</option>
						<option value="New Tennis Centre"<?php echo ((count($record_exists) > 0) && $record_exists['proj_name']=="New Tennis Centre")?' selected':'';?>>New Tennis Centre</option>			
						<option value="Multi Purpose Gymnasium"<?php echo ((count($record_exists) > 0) && $record_exists['proj_name']=="Multi Purpose Gymnasium")?' selected':'';?>>Multi Purpose Gymnasium</option>
						<option value="Diving Pool at Senior Swimming"<?php echo ((count($record_exists) > 0) && $record_exists['proj_name']=="Diving Pool at Senior Swimming")?' selected':'';?>>Diving Pool at Senior Swimming</option>
						<option value="Old Building Fund"<?php echo ((count($record_exists) > 0) && $record_exists['proj_name']=="Old Building Fund")?' selected':'';?>>Old Building Fund</option>
                        <option value="Other"<?php echo ((count($record_exists) > 0) && $record_exists['proj_name']=="Other")?' selected':'';?>>Other</option>
						
											</select>
					
				</div>
				
				
			</div>
			 
			
			 
			<div class="form-group">
				<div class="col-md-4 text-right">
					 <label class="control-label label-margin" for="anonymous">Anonymous: <span>&nbsp;</span></label>
				</div>
				<div class="col-md-4">
					<label class="checkbox-inline"><input type="checkbox" name="anonymous" value="anonymous">I wish my gift to be anonymous</label><br>

				</div>
			</div>
			
			<div class="form-group">
				<div class="col-md-4 text-right-cus">
					<label class="control-label" for="affiliation">What is your affiliation with Aitchison College? <span style="color:red;"> *</span></label>
				</div>
								<div class="col-md-3">
					<label class="checkbox-inline">
						<input type="checkbox" name="affiliation[]" id="chkAlumni" value="Alumnus"<?php echo ((count($record_exists) > 0) && strpos($record_exists['ac_aff'], 'Alumnus') > 0)?' checked':'';?>>Alumnus</label><br>
					<label class="checkbox-inline">
						<input type="checkbox" name="affiliation[]" id="chkStaff" value="Faculty/Staff"<?php echo ((count($record_exists) > 0) && strpos($record_exists['ac_aff'], 'Faculty/Staff') > 0)?' checked':'';?>>Faculty/Staff
					</label><br>
					<label class="checkbox-inline">
						<input type="checkbox" name="affiliation[]" id="chkFriend" value="Friend"<?php echo ((count($record_exists) > 0) && strpos($record_exists['ac_aff'], 'Friend') > 0)?' checked':'';?>>Friend
					</label><br>
					<label class="checkbox-inline">
						<input type="checkbox" name="affiliation[]" id="chkParent" value="Parent"<?php echo ((count($record_exists) > 0) && strpos($record_exists['ac_aff'], 'Parent') > 0)?' checked':'';?>>Parent
					</label><br>
					<label class="checkbox-inline">
						<input type="checkbox" name="affiliation[]" id="chkStudent" value="Student"<?php echo ((count($record_exists) > 0) && strpos($record_exists['ac_aff'], 'Student') > 0)?' checked':'';?>>Student
					</label> <br>
                    <label class="checkbox-inline" id="endchk">
						<input type="checkbox" name="affiliation[]" id="chkOther" value="Other"<?php echo ((count($record_exists) > 0) && strpos($record_exists['ac_aff'], 'Other') > 0)?' checked':'';?>>Other
					</label> <br>
					
				</div><br>
			</div>
			<div class="form-group">
				<div class="col-md-4 text-right"></div>
				<div class="col-md-3"><span id="affiliation_error" style="color:red;"></span></div>
			</div>
            
            
            
            
            
			
			<div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="name">First Name:<span style="color:red;"> *</span></label>
				</div>
				<div class="col-md-8">
					<input required="" type="text" name="fname" id="fname" class="form-control" value="<?php echo (count($record_exists) > 0)?$record_exists['fname']:'';?>" style="width: 45%;">
				</div>				
			</div>
            <div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="name">Last Name:<span style="color:red;"> *</span></label>
				</div>
				<div class="col-md-8">
					<input required="" type="text" name="lname" id="lname" class="form-control" value="<?php echo (count($record_exists) > 0)?$record_exists['lname']:'';?>" style="width: 45%;">
				</div>				
			</div>
			<div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="email">Email:<span style="color:red;"> *</span></label>
				</div>
				<div class="col-md-8">
					<input required="" type="text" name="email" id="email" class="form-control" value="<?php echo (count($record_exists) > 0)?$record_exists['email']:'';?>" style="width: 45%;">
				</div>
				
			</div>
			<div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="phone">Phone:<span style="color:red;"> *</span></label>
				</div>
				<div class="col-md-8">
					<input required="" type="text" name="phone" id="phone" class="form-control" value="<?php echo (count($record_exists) > 0)?$record_exists['phone']:'';?>" style="width: 45%;">
				</div>
				
			</div>
            <div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="country">Country:<span style="color:red;"> *</span></label>
				</div>
				<div class="col-md-8">
					
                    <select class="form-control" name="country" id="country-list" style="width:45%" onChange="getState(this.value);">
                    <?php
						if(count($record_exists) > 0)
							$country=$record_exists['country'];
						else
							$country='PK';
						$country_query="select iso_code, name from countryiso where status='Active'";	
                    	echo $db->fillCombo($country_query,$country);
					?>
                    </select>
                    
				</div>				
			</div>
            <div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="state">State:<span style="color:red;"> *</span></label>
				</div>
				<div class="col-md-8">
					<select class="form-control" name="state" id="state-list" style="width:45%">
                    <?php
						if(count($record_exists) > 0){
							$state=$record_exists['state'];
						}else{
							$state='PB';
						}
						$state_query="select iso_code, name from stateiso where iso_country_code='$country'";	
                    	echo $db->fillCombo($state_query,$state);
					?>
                    </select>                    
				</div>				
			</div>
            <div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="name">City:<span style="color:red;"> *</span></label>
				</div>
				<div class="col-md-8">
					<input required="" type="text" name="city" id="city" class="form-control" value="<?php echo (count($record_exists) > 0)?$record_exists['city']:'';?>" style="width: 45%;">
				</div>
				
			</div>
            <div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="name">Postal Code:<span style="color:red;"> *</span></label>
				</div>
				<div class="col-md-8">
					<input required="" type="text" name="postalcode" id="postalcode" class="form-control" value="<?php echo (count($record_exists) > 0)?$record_exists['postalcode']:'';?>" style="width: 45%;">
				</div>
				
			</div>
            <div class="form-group">
				<div class="col-md-4 text-right">
					<label class="control-label" for="address">Address:<span style="color:red;"> *</span></label>
				</div>
				<div class="col-md-8">
                	<textarea required type="text" name="address" id="address" class="form-control" rows="6" style="width: 45%;"><?php echo (count($record_exists) > 0)?$record_exists['address']:'';?></textarea>
				</div>
				
			</div>
			<!--<div class="form-group">
				<div class="col-md-offset-4 col-md-6">
					<p>Note: A confirmation email with your passcode will be sent to this address</p>
				</div>
			</div>-->
			 
						 
			<div class="form-group" style="display:block;">
				<div class="col-md-offset-4 col-md-3 text-right" style="padding-bottom:10px;">
					<button class="btn btn-primary" id="continue">Continue</button>
				</div>
                <?php
                if(count($record_exists) > 0){
				?>
                <?php /*?><div class="col-md-4" style="padding-bottom:10px;">
                	<a href="confirm-donor.php"><button class="btn btn-primary" id="continue2">Proceed For Donation</button></a>
                </div><?php */?>
                <?php
				}
				?>
			</div>
			
			
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
    

  </body>
</html>
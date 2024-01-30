<?php ob_start();
session_start();
if( isset($_POST['CmdSubmit']) )
{
	$captcha = true;
	$message = "";
	
	
	if( isset($_SESSION['wrong_pword_count']) && (int)$_SESSION['wrong_pword_count'] >= 2 ) {
		if ( isset($_POST["captcha"]) &&
			$_POST["captcha"] != "" &&
			$_SESSION["captchaCode"] == $_POST["captcha"] )
		{
			$captcha = true;
		}
		else
		{
			$message="Varification code is invalid.";
			$captcha = false;
		}
	}
	
	if ( $captcha ) {
		
		include("classes/dataCenter.php");
		include("classes/settings.php");
		
		$dc = new DataCenter();
		$dc->Connect();
		$settings = new Settings($dc, $purifier);
		
		$TxtUserName	= $_POST['TxtUserName'];
		$TxtPassword	= $_POST['TxtPassword'];
		
		$result = $settings->AuthenticateStaff( $TxtUserName, $TxtPassword );
		
		
		if ($result)
		{
			#do nothing
		}
		else
		{
			$message = "Invalid username or password.";
			
			if( isset($_SESSION['wrong_pword_count']) ) {
				$_SESSION['wrong_pword_count'] = (int)$_SESSION['wrong_pword_count']+1;
			}
			else
			{
				$_SESSION['wrong_pword_count'] = 1;
			}
		}
	}
	
}
?>
<!DOCTYPE html>
<html lang="en">
	
<?php $title = "Staff Login"; include("includes.php"); ?>
  <body class="super-login" onLoad="javascript:ready();">
    <div>
      
      <div class="login_wrapper" style="margin-top: 7%;">
        <div class="animate form login_form" style="">
          <section class="login_content">
		  <img src="images/ac_logo130x130.png" alt="Aitchison College">
            <form action="stafflogin.php" onsubmit="return validate()" method="post">
			
            <h1 style="font-size:30px; letter-spacing:1px;">Staff Portal</h1>

            <div class="form-group has-feedback">
              <input type="text" class="form-control has-feedback-left" id="TxtUserName" name="TxtUserName" placeholder="Username"  autocomplete="off" required="">
              <span class="fa fa-user form-control-feedback left" style="left:1px; color:#4caf50;" aria-hidden="true"></span>
            </div>
            
            <div class="form-group has-feedback">
              <input type="password" class="form-control has-feedback-left" id="TxtPassword" name="TxtPassword" autocomplete="off" placeholder="Password" required="" />
              <span class="fa fa-key form-control-feedback left" style="left:1px; color:#4caf50;" aria-hidden="true"></span>
            </div>
				
			  <?php 
				
				if(isset($_SESSION['wrong_pword_count']) && (int)$_SESSION['wrong_pword_count'] >= 2) {
				?>
				<div style="text-align: left">
					<img src="classes/captcha.php" /><br>
					<input class="form-control" type="text" name="captcha" id="captcha" autocomplete="off" placeholder="Varification Code" required="" />
					
				</div>
					
				<?php
				}
			  ?>

              <?php if(isset($message) && strlen($message) > 0) { ?>
              <div class="alert alert-danger">
    	          <?php echo $message; ?>
	          </div>
              <?php } ?>
              <div>
                <input class="btn btn-default submit form-control" id="CmdSubmit" name="CmdSubmit" type="submit" value="Login" />
              </div>
              <!--<div>
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>-->

              <div class="clearfix"></div>

              <div class="separator">
			  <div style="font-size: 12px;text-shadow: none;">
                  Beta version 1.0, developed by IT Department<br>For technical assistance, please email at <span style="">helpdesk@aitchison.edu.pk</span>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    
<script>

	function validate() {
		
		return true;
	}
	function ready()
	{
		document.getElementById("TxtUserName").focus();
	}

</script>
  </body>
  
</html>

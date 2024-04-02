<?php ob_start();
session_start();

$token = isset($_SESSION['_tokenm']) ? $_SESSION['_tokenm'] : "";

if( isset($_POST['CmdSubmit']) )
{
	$captcha = true;
	$message = "";
	
	if ( isset($_SESSION['_login_activitym']) &&
		 (time() - $_SESSION['_login_activitym'] < 60) && 
		 hash_equals( $_SESSION['_tokenm'], $_POST['token'] ) )
	{
	
		if( isset($_SESSION['wrong_pword_count']) && (int)$_SESSION['wrong_pword_count'] >= 2 ) {
			if ( isset($_POST["captcha"]) &&
				$_POST["captcha"] != "" &&
				$_SESSION["captchaCode"] == $_POST["captcha"] )
			{
				$captcha = true;
			}
			else
			{
				$message="Verification code is invalid.";
				$captcha = false;
			}
		}
		
		if ( $captcha ) {
			
			include("classes/dataCenter.php");
			include("classes/settings.php");

			$dc = new DataCenter();
			$dc->Connect();
			$settings = new Settings( $dc, $purifier);

			$TxtUserName = $purifier->purify($_POST['TxtUserName']);
			$TxtPassword = $purifier->purify($_POST['TxtPassword']);
			
			$result = $settings->AuthenticateAdmin($TxtUserName, $TxtPassword);


            //var_dump($result);
			//exit;
			if ($result)
			{
				$row = $result[0];
				$_SESSION['LAST_ACTIVITY']		= time();
				$_SESSION['portal_SchoolNo']    = $row['schoolNo'];
				$_SESSION['portal_user_id']	    = $row['Id'];
				$_SESSION['portal_userTitle']   = $row['studentName'];
				$_SESSION['portal_isUserAdmin'] = $row['Admin'];
				$_SESSION['portal_School']		= $row['school'];
				$_SESSION['portal_ClassIn']		= $row['classIn'];
				$_SESSION['portal_House']		= $row['house'];
				$_SESSION['portal_Boarder']		= $row['boarder'];


				$currentClass = substr($row['studing'], 0, 2);
				$currentSection = substr($row['studing'], 2, 1);

				$_SESSION['portal_CurrentClass']		= $currentClass;
				$_SESSION['portal_CurrentSection']		= $currentSection;

				if ($row['school'] == "JSD") $_SESSION['portal_SchoolName'] = "Junior School";
				else if ($row['school'] == "PSD") $_SESSION['portal_SchoolName'] = "Prep School";
				else if ($row['school'] == "SSD") $_SESSION['portal_SchoolName'] = "Senior School";
				
				
				$_SESSION['PORTAL_ID']			= "administrator";
				$_SESSION['PORTAL_NAME'] = "Admin's Portal";
				
				unset ( $_SESSION['wrong_pword_count'] );
				
				$settings->userLog();
				
				header("Location: welcome-note.php");
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
	} else {
		$message = "Sorry login timeout expired.";
	}
}

$_SESSION['_login_activitym'] = time();

$_SESSION['_tokenm'] = bin2hex(random_bytes(32));

$token = $_SESSION['_tokenm'];

?>
<!DOCTYPE html>
<html lang="en">
	
<?php $title = "Admin Login"; include("includes.php"); ?>
  <body class="login" onLoad="javascript:ready();">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form" style="">
          <section class="login_content">
            <form action="adminlogin.php" onsubmit="return validate()" method="post">
				<input type="hidden" name="token" value="<?php echo $token; ?>" />
				
			  <div>
                <input type="text" class="form-control" id="TxtUserName" name="TxtUserName" placeholder="Username" autocomplete="off" required="" />
              </div>
              <div>
                <input type="password" class="form-control" id="TxtPassword" name="TxtPassword" autocomplete="off" placeholder="Password" required="" />
              </div>
				
			  <?php 
				
				if((int)$_SESSION['wrong_pword_count'] >= 2) {
				?>
				<div style="text-align: left">
					<img src="classes/captcha.php" /><br>
					<input class="form-control" type="text" name="captcha" id="captcha" autocomplete="off" placeholder="Verification Code" required="" />
					
				</div>
					
				<?php
				}
			  ?>

              <?php if(strlen($message) > 0) { ?>
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
                <div>
                  <p>Copyright © All Rights Reserved</p>
                </div>
              </div>
            </form>
          </section>
        </div>
		
        <!--<div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>Copyright © All Rights Reserved</p>
                </div>
              </div>
            </form>
          </section>
        </div>-->
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

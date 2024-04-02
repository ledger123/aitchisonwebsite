<?php ob_start();
session_start();
if( isset($_POST['CmdSubmit']) )
{
	$captcha = true;
	$message = "";

    $portal = isset($_GET['portal']) ? $_GET['portal'] : "";
    $class = isset($_GET['class']) ? $_GET['class'] : "";
    $pageid = isset($_GET['pageid']) ? (int)$_GET['pageid'] : 0;


    if ($portal == "parent") $portal = "ParentPortal";
    elseif ($portal == "student") $portal = "StudentPortal";
    elseif ($portal == "boarder") $portal = "BoarderPortal";
	
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
		$settings = new Settings($dc, $purifier);
		
		$TxtUserName	= $purifier->purify($_POST['TxtUserName']);
		$TxtPassword	= $purifier->purify($_POST['TxtPassword']);
		
		$result = $settings->AuthenticateSuper2( $TxtUserName, $TxtPassword );


		
		
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
	
<?php $title = "Super Login"; include("includes.php"); ?>
  <body class="super-login" onLoad="javascript:ready();">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form" style="">
          <section class="login_content">
            <form action="superlogin.php" onsubmit="return validate()" method="post">
				
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

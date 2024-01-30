<?php 
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
ob_start();
session_start();

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if(strpos($actual_link, "login.php")){
	header("location: acportal");
	exit();
}

$token = isset($_SESSION['_tokenm']) ? $_SESSION['_tokenm'] : "";


$bg = array('bglink1', 'bglink2', 'bglink3');
$i = rand(0, count($bg)-1);
$selectedBg = $bg[$i];

$sel_portal = isset($_GET['p']) ? $_GET['p'] : "";

if ( $sel_portal == "") {

    if ($_POST['optPortal'] == 'ParentPortal') $sel_portal = "p";
    if ($_POST['optPortal'] == 'StudentPortal') $sel_portal = "s";
    if ($_POST['optPortal'] == 'BoarderPortal') $sel_portal = "b";
    if ($_POST['optPortal'] == 'SuperPortal') $sel_portal = "a";
}

////**** if [remember me] cookie found then auto login ********/////////

if( false && isset($_COOKIE['TxtRememberme'] ) ) {
	
	include("classes/dataCenter.php");
	include("classes/settings.php");
	
	$dc = new DataCenter();
	$dc->Connect();
	$settings = new Settings($dc);
	
	$functions = new Functions();

	// Decrypt cookie variables value
	$userName = $functions->simple_crypt( $_COOKIE['TxtRememberme'], "d" );
	$portal = $functions->simple_crypt( $_COOKIE['Rememberme-portal'], "d" );

	
	$password = $dc->GetObject("SELECT spassword FROM students_login WHERE schoolNo = '". $userName ."'");
	
	$result = $settings->Authenticate($userName, $password, $portal, "");
	
	if ($result)
	{
		// do nothing
	}
	else
	{
		$message = "Invalid username or password.";
		
		if( isset($_SESSION['wrong_pword_count']) ) {
			$_SESSION['wrong_pword_count'] = (int)$_SESSION['wrong_pword_count']+1;
		}
		else
		{
			$_SESSION['wrong_pword_count'] = 0;
		}
	}
	
}

////**** End of- if [remember me] cookie found then auto login ********/////////

if( isset($_POST['CmdSubmit']) && !empty($_POST['token']) )
{
	$captcha = true;
	$message = "";
	
	if ( isset($_SESSION['_login_activitym']) &&
		 (time() - $_SESSION['_login_activitym'] < 300) &&
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
		
		//$portals = array("ParentPortal", "StudentPortal", "BoarderPortal");
		
		if ( $captcha )
		{
			include("classes/dataCenter.php");
			include("classes/settings.php");
			
			$dc = new DataCenter();
			$dc->Connect();
			$settings = new Settings($dc, $purifier);
			
			$TxtUserName = $purifier->purify($_POST['TxtUserName']);
			$TxtPassword = $purifier->purify($_POST['TxtPassword']);

			$TxtUserName = str_replace("'", "''", $TxtUserName);
			$TxtPassword = str_replace("'", "''", $TxtPassword);
            $TxtPassword = str_replace("&amp;", "&", $TxtPassword);
            $TxtPassword = str_replace("&gt;", ">", $TxtPassword);


			$rememberMe = false; // $_POST['TxtRememberme'];

			//$rememberMe = ($rememberMe === "on") ? "True" : "False";
            
			$result = false;

            $portal = $_POST['optPortal'];


            if( $portal == "ParentPortal" ) {   //parents portal

                $TxtUserName = (int)$TxtUserName;
                if (strlen(trim($TxtUserName)) == 5 && strlen(trim($TxtPassword)) > 7 && strlen(trim($TxtPassword)) < 21) {

                    //$portal = "ParentPortal";

                    $result = $settings->Authenticate($TxtUserName, $TxtPassword, $portal, $rememberMe);

                }
            }
            elseif( $portal == "SuperPortal" ) {    //management

                if ( strlen(trim($TxtPassword)) > 7 && strlen(trim($TxtPassword)) < 21 ) {

                    $result = $settings->AuthenticateSuper2($TxtUserName, $TxtPassword);
                }
            }

			if ($result)
			{
				// do nothing
                $message = "Invalid username or password.";
			}
			else
			{
				$message = "Invalid username or password.";
				
				if( isset($_SESSION['wrong_pword_count']) ) {
					$_SESSION['wrong_pword_count'] = (int)$_SESSION['wrong_pword_count']+1;
				}
				else
				{
					$_SESSION['wrong_pword_count'] = 0;
				}
			}
		} //end $captcha
	} else {
		$message = "Sorry login time expired. Please retry.";
	}
}

$_SESSION['_login_activitym'] = time();

$_SESSION['_tokenm'] = bin2hex(random_bytes(32));

$token = $_SESSION['_tokenm'];

?>
<!DOCTYPE html>
<html lang="en" xml:lang="en">
	
<style>
	.login2 {
		background: url(img/backgrounds/7.jpg) no-repeat;
		-webkit-background-size: cover;
	  -moz-background-size: cover;
	  -o-background-size: cover;
	  background-size: cover;
	}
	
</style>
	
<?php $title = "Login"; include("includes.php"); ?>
  <body class="login2" onLoad="javascript:ready();">
	  
    <div id="login" align="right">
      <div class="login_wrapper" style="margin: 0 0; margin-top: 6%;">
        <div class="animate form login_form" style="background-color: rgb(34, 145, 224, 41%);">
          <section class="login_content">
			  <div>
				  <img src="images/ac_logo130x130.png" />
				  <div style="font-size: 24px; color: #fff;">Aitchison College</div>
			  </div> 
			<form action="acportal" onsubmit="return validate()" method="post">
				<input type="hidden" name="token" value="<?php echo $token; ?>" />
				<div align="right" style="margin-bottom: 5px;">
					<a style="font-size: 14px;text-shadow: none; text-decoration: none; color: #fff; margin: 0;" href="help.php" target="new">Help</a>
				</div>
				<div>
				<?php if (true) { ?>
					<select id="optPortal" name="optPortal" class="form-control" style="margin: 0 0 20px;" required aria-required="true">
						<option value="">Select Portal</option>
						<option <?php if($sel_portal=="p") echo " selected ";?> value="ParentPortal">Parents' Portal</option>
						<?php if (false) { ?>
						<option <?php if($sel_portal=="s") echo " selected ";?> value="StudentPortal">Students' Portal</option>
						<option <?php if($sel_portal=="b") echo " selected ";?> value="BoarderPortal">Boarders' Portal</option>
						<?php } ?>
						<option <?php if($sel_portal=="a") echo " selected ";?> value="SuperPortal">Management Portal</option>
					</select>

					<?php } ?>
				</div>
				
				
			  <div>
                <input type="text" class="form-control" id="TxtUserName" name="TxtUserName" placeholder="Username" autocomplete="off" required="" maxlength="10" />
              </div>
              <div>
                <input type="password" class="form-control" id="TxtPassword" name="TxtPassword" autocomplete="off" placeholder="Password" required="" maxlength="20"/>
			  </div>
			  <?php if(false) { ?>
			  <div class="checkbox" style="float:left; margin-top:0;">
				  <label style="text-shadow: none; color: #fff;">
					<input type="checkbox" id="TxtRememberme" name="TxtRememberme" style="margin-top:8px;" />Remember Me
				  </label>
			  </div>
			  <?php } ?>

			  <?php 
				
				if(isset($_SESSION['wrong_pword_count']) && ((int)$_SESSION['wrong_pword_count'] >= 2)) {
				?>
				<br/><br/>
				<div style="text-align: left">
					<img src="classes/captcha.php" /><br>
					<input class="form-control" type="text" name="captcha" id="captcha" autocomplete="off" placeholder="Verification Code" required="" />
					
				</div>
					
				<?php
				}
			  ?>
				
			  <?php if(isset($message) && strlen($message) > 0) { ?>
				<br/>
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
                <div style="font-size: 12px;text-shadow: none;color: #fff;">
                  version 1.6, developed by IT Department<br />For technical assistance, please email at <span style="color: #fff;">helpdesk@aitchison.edu.pk</span>
                </div>
              </div>
            </form>
          </section>
        </div>
		
      </div>
    </div>
    

  </body>
<script>

    function portalChanged(value) {


        if(value == "ParentPortal") {

            document.getElementById('TxtUserName').setAttribute('maxlength',5);
        }
        else
        {
            document.getElementById('TxtUserName').setAttribute('maxlength',10);
        }



    }

	function validate() {
		var e = document.getElementById("optPortal");
		var portal = e.options[e.selectedIndex].value;
		
		if (portal == "" || portal == "0") {
			alert("Please select the portal.");
			e.focus();
			return false;
		}
		
		return true;
	}
	function ready()
	{
		loginAlign();
		
		document.getElementById("optPortal").focus();

	}

	window.onresize = function(event) {

		loginAlign();

	};

	function loginAlign() {
		
		var login = document.getElementById("login");

		var width = window.innerWidth
			|| document.documentElement.clientWidth
			|| document.body.clientWidth
			|| window.screen.width;

		if (width < 426) {

			login.setAttribute("align", "center");

		}
		else {
			login.setAttribute("align", "right");
		}
	}

</script>
</html>

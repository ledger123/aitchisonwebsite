<?php ob_start();
session_start();

$token = isset($_SESSION['_tokenm']) ? $_SESSION['_tokenm'] : "";

if( isset($_REQUEST['CmdSubmit']) && !empty($_POST['token']) )
{
  if ( isset($_SESSION['_login_activitym']) &&
		 (time() - $_SESSION['_login_activitym'] < 60) && 
     hash_equals( $_SESSION['_tokenm'], $_POST['token'] ) )
  {  
    include("classes/dataCenter.php");
    include("classes/settings.php");
    
    $dc = new DataCenter();
    $dc->Connect();
    $settings = new Settings($dc);
    
    $TxtUserName = $purifier->purify ($_REQUEST['TxtUserName']);
    $TxtPassword = $purifier->purify ($_REQUEST['TxtPassword']);
    
    $result = $settings->Authenticate($TxtUserName, $TxtPassword);
    $message = "";
    
    if ($result)
    {
      $row = $result[0];
      $_SESSION['LAST_ACTIVITY'] = time();
      $_SESSION['n_userNames']   = $row['Username'];
      $_SESSION['n_user_id']	   = $row['Id'];
      $_SESSION['n_userTitle']   = $row['Title'];
      $_SESSION['n_isUserAdmin'] = $row['Admin'];
      $_SESSION['n_GroupName']   = $row['GroupName'];
      $_SESSION['n_UserGroupId'] = $row['GroupId'];
      $_SESSION['n_UserPicture'] = $row['Picture'];
      
      header("Location: news/createnews.php");
    }
    else
    {
      $message = "Invalid username or password.";
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
<?php $title = "Login"; include("includes.php"); ?>
  <body class="login" onLoad="javascript:ready();">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form" style="">
          <section class="login_content">
            <form action="login.php" method="post">
              <input type="hidden" name="token" value="<?php echo $token; ?>" />
              <div>
                <input type="text" class="form-control" id="TxtUserName" name="TxtUserName" placeholder="Username" autocomplete="off" required="" />
              </div>
              <div>
                <input type="password" class="form-control" id="TxtPassword" name="TxtPassword" autocomplete="off" placeholder="Password" required="" />
              </div>
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

function ready()
{
	document.getElementById("TxtUserName").focus();
}

</script>
  </body>
  
</html>

<html>
  <body>
  <script src='https://www.google.com/recaptcha/api.js'></script>
    <form action="" method="post">
<?php

require_once('recaptchalib.php');

// Get a key from https://www.google.com/recaptcha/admin/create
$publickey = "6Le88wYUAAAAAL2MkelJtp5OkOLWpU5-3Yw1gS5o";
$privatekey = "6Le88wYUAAAAAHNniflCDr1OGRJn77TVoCg7ZS5J";

# the response from reCAPTCHA
$resp = null;
# the error code from reCAPTCHA, if any
$error = null;

# was there a reCAPTCHA response?
if ($_POST["recaptcha_response_field"]) {
        $resp = recaptcha_check_answer ($privatekey,
                                        $_SERVER["REMOTE_ADDR"],
                                        $_POST["recaptcha_challenge_field"],
                                        $_POST["recaptcha_response_field"]);

        if ($resp->is_valid) {
                echo "You got it!";
        } else {
                # set the error code so that we can display it
                echo "You have not got it!";
        }
}
echo recaptcha_get_html($publickey, $error);
?>
	<!--<div class="g-recaptcha" data-sitekey="6Le88wYUAAAAAL2MkelJtp5OkOLWpU5-3Yw1gS5o"></div>-->
    <br/>
    <input type="submit" value="submit" />
    </form>
  </body>
</html>

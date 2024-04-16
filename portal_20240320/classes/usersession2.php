<?php
ob_start();
if(!function_exists('session_status'))
{
	if (defined('SID')==false){ session_start(); }
}
else
{
	if(session_status()!=PHP_SESSION_ACTIVE) session_start();
}


if (true) {

	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
		// last request was more than 30 minutes ago
		//session_unset();     // unset $_SESSION variable for the run-time 
		//session_destroy();   // destroy session data in storage
		//header("location: " . $path . "logout.php");
		session_destroy();
	}
	$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

	##
	#Updating the session data with every request also changes the session file's modification date so that the session is not removed by the garbage collector prematurely.
	#
	#You can also use an additional time stamp to regenerate the session ID periodically to avoid attacks on sessions like session fixation:
	##

	if (!isset($_SESSION['CREATED'])) {
		$_SESSION['CREATED'] = time();
	} else if (time() - $_SESSION['CREATED'] > 1800) {
		// session started more than 30 minutes ago
		session_regenerate_id(true);    // change session ID for the current session and invalidate old session ID
		$_SESSION['CREATED'] = time();  // update creation time
	}

}

//echo $_SESSION['portal_user_id'];






include_once("dataCenter.php");




$dc = new DataCenter();

$dc->Connect();

?>
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
    $session_time = 5400;   // session time 90 minutes

	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $session_time)) {
		// last request was more than 90 minutes ago
		//session_unset();     // unset $_SESSION variable for the run-time 
		//session_destroy();   // destroy session data in storage
		header("location: " . $path . "logout.php");
	}
	$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

	##
	#Updating the session data with every request also changes the session file's modification date so that the session is not removed by the garbage collector prematurely.
	#
	#You can also use an additional time stamp to regenerate the session ID periodically to avoid attacks on sessions like session fixation:
	##

	if (!isset($_SESSION['CREATED'])) {
		$_SESSION['CREATED'] = time();
	} else if (time() - $_SESSION['CREATED'] > $session_time) {
		// session started more than 90 minutes ago
		session_regenerate_id(true);    // change session ID for the current session and invalidate old session ID
		$_SESSION['CREATED'] = time();  // update creation time
	}

}

//echo $_SESSION['portal_user_id'];

if($_SESSION['portal_user_id'] == "" || !isset($_SESSION['portal_user_id']))
{
	header("Location: https://aitchison.edu.pk/portal/logout.php");
	//header("Location: http://localhost/portal/logout.php");
}

$filename = basename( $_SERVER['SCRIPT_FILENAME'] );
if ( $filename != "changepassword.php" && isset($_SESSION['portal_TempPassword']) && $_SESSION['portal_TempPassword'] == 1)
{
    header("Location: ".$path."users/changepassword.php");
}


/*
define(USER_ID, $_SESSION['portal_user_id']);
define(IS_USER_ADMIN, $_SESSION['n_isUserAdmin']);

define(PORTAL_ID, $_SESSION['PORTAL_ID']);
define(PORTAL_NAME, $_SESSION['PORTAL_NAME']);
*/
define("USER_ID", $_SESSION['portal_user_id']);
define("IS_USER_ADMIN", isset($_SESSION['n_isUserAdmin'])?$_SESSION['n_isUserAdmin']:0);

define("PORTAL_ID", $_SESSION['PORTAL_ID']);
define("PORTAL_NAME", $_SESSION['PORTAL_NAME']);


include($path."classes/dataCenter.php");




$dc = new DataCenter();

$dc->Connect();

if ( isset($_GET['ab']) ) {
//	error_reporting(E_ALL);
//	ini_set('display_errors', TRUE); //ini_set('display_startup_errors', TRUE);
//	require_once("settings.php");

//$settings = new Settings($dc);
//$settings->userLogoutLog();
}


//$settings = new Settings($dc);

//$settings->CheckSession();

?>
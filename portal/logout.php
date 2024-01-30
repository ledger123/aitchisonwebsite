<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
session_start();
include_once("classes/variables.php");
include("classes/dataCenter.php");
include("classes/settings.php");

$dc = new DataCenter();
$dc->Connect();
$settings = new Settings($dc, $purifier);
//$settings->userLogoutLog(); does not need to call because calling in the constructor

unset( $_SESSION['portal_UserLogId'] );



//$portals = array("ParentPortal", "StudentPortal", "BoarderPortal");

unset( $_SESSION['LAST_ACTIVITY'] );
unset( $_SESSION['portal_SchoolNo'] );
unset( $_SESSION['portal_user_id'] );
unset( $_SESSION['portal_userTitle'] );
unset( $_SESSION['portal_isUserAdmin'] );
unset( $_SESSION['portal_School'] );
unset( $_SESSION['portal_ClassIn'] );
unset( $_SESSION['portal_House'] );
unset( $_SESSION['portal_Boarder'] );
unset( $_SESSION['portal_CurrentClass'] );
unset( $_SESSION['portal_CurrentSection'] );
unset( $_SESSION['portal_SchoolName'] );
unset( $_SESSION['PORTAL_NAME'] );

unset( $_SESSION['portal_temp_pageid'] );
unset( $_SESSION['portal_temp_pageurl'] );

if ( isset($_SESSION['portal_sup_name']) &&
     in_array($_SESSION['PORTAL_ID'], $Portals) ) {
	
	
	$_SESSION['portal_user_id'] = $_SESSION['portal_sup_user_id'];
	$_SESSION['portal_School'] = "SuperUser";
	$_SESSION['PORTAL_ID']	 = "SuperUser";
	$_SESSION['PORTAL_NAME'] = "Super User";
	
	if ( $_SESSION['portal_isHouseMaster'] )
		header("Location: hmaster-home.php");
	else
		header("Location: superhome.php");
	
}
else {
	
	if ( in_array($_SESSION['PORTAL_ID'], $Portals) ) {
		
		unset( $_SESSION['PORTAL_ID'] );
		
		session_destroy();

		# Remove cookies variables
		//setcookie ("TxtRememberme", "", time() - (30 * 24 * 60 * 60 * 1000));
		//setcookie ("Rememberme-portal", "", time() - (30 * 24 * 60 * 60 * 1000));
		
		header("Location: login.php");
		
	}
	else if ( $_SESSION['PORTAL_ID'] == "administrator" ) {
		
		unset( $_SESSION['PORTAL_ID'] );
		
		session_destroy();

		# Remove cookies variables
		//setcookie ("TxtRememberme", "", time() - (30 * 24 * 60 * 60 * 1000));
		//setcookie ("Rememberme-portal", "", time() - (30 * 24 * 60 * 60 * 1000));
		
		header("Location: adminlogin.php");
		
	}
	else if ( $_SESSION['PORTAL_ID'] == "StaffPortal" ) {
		
		unset( $_SESSION['PORTAL_ID'] );
		unset( $_SESSION['portal_sams_user_id'] );
		
		session_destroy();

		# Remove cookies variables
		//setcookie ("TxtRememberme", "", time() - (30 * 24 * 60 * 60 * 1000));
		//setcookie ("Rememberme-portal", "", time() - (30 * 24 * 60 * 60 * 1000));
		
		header("Location: stafflogin.php");
		
	}
	else {
		
		unset ( $_SESSION['portal_sup_user_id'] );
		unset( $_SESSION['portal_School'] );
		unset( $_SESSION['PORTAL_ID'] );
		unset( $_SESSION['PORTAL_NAME'] );
		
		
		if ( $_SESSION['portal_isHouseMaster'] ) {
			
			unset( $_SESSION['portal_isHouseMaster'] );
			session_destroy();
			
			header("Location: superlogin.php");
		}
		else {
			
			session_destroy();
			//header("Location: superlogin.php");

			# Remove cookies variables
			//setcookie ("TxtRememberme", "", time() - (30 * 24 * 60 * 60 * 1000));
			//setcookie ("Rememberme-portal", "", time() - (30 * 24 * 60 * 60 * 1000));
			
			header("Location: login.php");
		}
	}
}



?>
<?php
	ini_set('session.cookie_httponly', 1);
	// **PREVENTING SESSION FIXATION**
	// Session ID cannot be passed through URLs
	ini_set('session.use_only_cookies', 1);

	// Uses a secure connection (HTTPS) if possible
	ini_set('session.cookie_secure', 1);

	header('X-Content-Type-Options: nosniff');
	header("X-XSS-Protection: 1; mode=block;");
	header("Pragma: no-cache");
	header("Cache-Control: no-cache, no-store, must-revalidate, private");
	header('X-Frame-Options: SAMEORIGIN');
	header("strict-transport-security: max-age=0");
	include_once 'redirect.php';
	session_start();
	include_once("fix_mysql.inc.php");
	include("classes/db.php");
	
	$_SESSION['mynotify']="Show Me.";
	$db=new DB();
	/*if(isset($_SESSION['stdportal']) && count($_SESSION['stdportal']) > 0){
		$thisportal="stdportal";		
	}elseif(isset($_SESSION['boarder']) && count($_SESSION['boarder']) > 0){
		$thisportal="boarder";		
	}elseif(isset($_SESSION['parents']) && count($_SESSION['parents']) > 0){
		$thisportal="parents";		
	}
	if(isset($_SESSION['parents']) && count($_SESSION['parents']) > 0 ){
		if($_SESSION['parents']['stuSchool'] == "JSD"){
			$ccdates="school_doc/std_pdf/cc_dates_new_js.pdf";
			$gdes="newsletter-final-js-12022016.php";
			$sportscalender="school_doc/std_pdf/SportsEvents-js.pdf";
		}elseif($_SESSION['parents']['stuSchool'] == "PSD"){
			$ccdates="school_doc/std_pdf/ccdates_ps.pdf";
			$gdes="newsletter-final-ps-12022016.php";
			$sportscalender="school_doc/std_pdf/SportsEvents-ps.pdf";
		}elseif($_SESSION['parents']['stuSchool'] == "SSD"){
			$ccdates="school_doc/std_pdf/ccdates_ss.pdf";
			$gdes="newsletter-final-ss-12022016.php";
			$sportscalender="school_doc/std_pdf/SportsEvents-ss.pdf";
		}	
	}*/
	require_once 'xss-library/HTMLPurifier.auto.php';
	//include_once("mysql_fix.inc.php");
	/*if(isset($_SESSION['parents']) && count($_SESSION['parents']) > 1){
		include("standard/stnd_login_functions.php");
	}*/

	/*
	$config = HTMLPurifier_Config::createDefault();
	$config->set('Core.Encoding', 'UTF-8'); // replace with your encoding
	$config->set('HTML.Doctype', 'XHTML 1.0 Transitional'); // replace with your doctype
	$purifier = new HTMLPurifier($config);
	*/

	
	$totalnewslettershow=6;
	/*function getSchool(){
		echo "A";
		if($_SESSION[$thisportal]['stuSchool'] =="SSD")
			return "Senior School";
		elseif($_SESSION[$thisportal]['stuSchool'] =="PSD")
			return "Middle School";
		elseif($_SESSION[$thisportal]['stuSchool'] =="JSD")
			return "Junior School";
	}*/

 ?>
<?php
	header('X-Frame-Options: SAMEORIGIN');
	header('X-Content-Type-Options: nosniff');
	header("X-XSS-Protection: 1");
	header("Pragma: no-cache");
	header("Cache-Control: no-cache, no-store, must-revalidate, private");
	header("strict-transport-security: max-age=0");
	if(!session_id()){
		session_start();
		include_once("phpinclude/redirect.php");
	}
    $fullurl=$_SERVER['REQUEST_URI'];
	$fullurl_start=strpos($fullurl, ".php")-4;
	if((strpos($fullurl, "<") > 0) || (strpos($fullurl, "/", strpos($fullurl, ".php")-4) > 0)){
		header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: https://www.aitchison.edu.pk/alumni/"); 
		exit();
	}
	/*echo "<!--".$_SERVER['REQUEST_URI']."-->";*/
	include_once("./phpinclude/fix_mysql.inc.php");
	include("../classes/db.php");
	
	
	$db=new DB();
	/* STARTED: CODE ADDED FOR PURIFIERS */
	require_once '../xss-library/HTMLPurifier.auto.php';	
	$config = HTMLPurifier_Config::createDefault();
	$config->set('Core.Encoding', 'UTF-8'); // replace with your encoding
	$config->set('HTML.Doctype', 'XHTML 1.0 Transitional'); // replace with your doctype
	$purifier = new HTMLPurifier($config);
	/* ENDED  : CODE ADDED FOR PURIFIERS */
	/*function restrict_QueryString($variable, $dtypes){
			
	}*/
 ?>
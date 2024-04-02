<?php
	$currenturl="akhtar".$_SERVER["REQUEST_URI"];
	/*echo $currenturl;
	echo "<br>Akhtar Rafiq<br>".strpos($currenturl, "admission/");
	exit();
	*/
	$req_page_name=basename($_SERVER["REQUEST_URI"]);
	$fld_homepage="support-college";
	$page_arr=array(
		"support-college-offline"			=>	"supportcollege-offline.php",
		"support-college"					=>	"supportcollege.php",
		"support-college-offline"			=>	"supportcollege-offline.php",
		"old-building-donors"				=>	"old-buildingdonors.php",
		"golden-donors"						=>	"goldendonors.php",
		"corporate-partners"				=>	"corporatepartners.php"
	);
	if(strpos($currenturl, "support/")){
		
		if(isset($page_arr[$req_page_name])){
			include_once($page_arr[$req_page_name]);
		}else{
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: $fld_homepage");
			exit();	
		}
	}else{
		//echo "hello";
	}
	
?>
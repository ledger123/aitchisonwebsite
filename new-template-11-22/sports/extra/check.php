<?php
	$currenturl="akhtar".$_SERVER[REQUEST_URI];
	$req_page_name=basename($_SERVER[REQUEST_URI]);
	if(str_replace("/new-template-1", "", $_SERVER[REQUEST_URI])==="/sports/"){
		$req_page_name="sportsaa";		
	}	
	$fld_homepage="sports";
	$page_arr=array(
		"aitchison-college-vs-lawrence-college-sports-2022"						=>	"aitchison-vs-lawrence-college-sports-2022.php",

	);
	/*echo "<br><br>".$req_page_name."<br>".$page_arr[$req_page_name]."AAA";
	exit();*/
	if(strpos($currenturl, "sports/extra/")) {
		
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
<?php
	$currenturl="akhtar".$_SERVER[REQUEST_URI];
	/*echo $currenturl;
	echo "<br>Akhtar Rafiq<br>".strpos($currenturl, "admission/");*/
	$req_page_name=basename($_SERVER[REQUEST_URI]);	
	$fld_homepage="my-library";
	$page_arr=array(
		"my-library"				=>	"introduction-offline.php",
		"digital-resources"			=>	"digital-resources-offline.php",
		"audio-video-tutorials"		=>	"audio-video-tutorials-offline.php",
		"video-tutorials"			=>	"video-tutorials-offline.php",
		"faqs"						=>	"faqs-offline.php",
		"library-hours"				=>	"library-hours-offline.php",
		"helpdesk"					=>	"helpdesk-offline.php",
		"sba-video"					=>  "sba-video-offline.php",
	);
    
	//echo $req_page_name."<br>".$page_arr['principal'];
	if(strpos($currenturl, "library/")){
		
		if(isset($page_arr[$req_page_name])){
			include_once($page_arr[$req_page_name]);
		}else{
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: $fld_homepage");
			exit();	
		}
	}else{
		//echo "hello";library/introduction-offline.php
	}	
	
?>
<?php
	$currenturl="akhtar".$_SERVER[REQUEST_URI];	
	$req_page_name=basename($_SERVER[REQUEST_URI]);
	$fld_homepage="our-schools";
	$page_arr=array(
		"our-schools"						=>	"our-school.php",
		"student-leadership"				=>	"students-leadership.php",
		"pastoral-care"						=>	"pastoral-care-counseling.php",		
		"senior-school"						=>	"senior_school.php",
		"prep-school"						=>	"prep_school.php",		
		"junior-school"						=>	"junior_school.php",		
		"clubs-and-societies"				=>	"clubs-societies.php",
		"clubs-and-societies-offline"		=>	"clubs-societies-offline.php",
		"debating"							=>	"debate.php",
		"aitchison-campus-schools"			=>	"campus_schools.php",
		"art"								=>	"school-art.php",		
		"music"								=>	"school-music.php",
        "theatre"							=>	"school-theatre.php",
        "theatre-offline"					=>	"school-theatre-offline.php",
        "prep-school-offline"				=>	"prep_school-offline.php",
	);


	if(strpos($currenturl, "schools/")){
		
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
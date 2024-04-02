<?php
	$currenturl="akhtar".$_SERVER[REQUEST_URI];
	/*echo $currenturl;
	echo "<br>Akhtar Rafiq<br>".strpos($currenturl, "admission/");*/
	$req_page_name=basename($_SERVER[REQUEST_URI]);
	$fld_homepage="boarding-houses";
	$page_arr=array(
		"boarding-houses"						=>	"boarding_houses.php",
		"benefits-of-boarding"					=>	"benifits_of_boarding.php",
		"boarding-ten-basic-questions"			=>	"ten-basic-questions.php",
		"boarding-admissions"					=>	"admissions.php",		
		"boarding-pastoralcare"					=>	"pastoral_care.php",		
		"boardingmedical"						=>	"medical.php",		
		"boarding-weekendactivities"			=>	"weekend-activities.php",		
		"dining"								=>	"boarding_dining.php",		
		"international-enrolment"				=>	"international-enrolments.php",
		"boarding-routine"						=>	"routine.php",		
		"boarding-handbook"						=>	"boarding_handbook.php"
	);
	if(strpos($currenturl, "boarding/")){
		
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
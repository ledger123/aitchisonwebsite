<?php
	$currenturl="akhtar".$_SERVER[REQUEST_URI];
	/*echo $currenturl;
	echo "<br>Akhtar Rafiq<br>".strpos($currenturl, "admission/");*/
	$req_page_name=basename($_SERVER[REQUEST_URI]);	
	$fld_homepage="about-us";
	$page_arr=array(
		"about-us"						=>	"about_us.php",
		"history"						=>	"school_history.php",
		"archive"						=>	"archives.php",
		"board-of-governors"			=>	"board_of_governors.php",
		"principal-office"				=>	"principal.php",
		"leading-staff"					=>	"leading_staff.php",
		"all-boys-schooling"			=>	"all_boys_schooling.php",
		"school-organization"			=>	"school_orginization.php",
		"past-principals"				=>	"past_principals.php",		
		"core-purpose"					=>	"core_purpose.php",
		"university-counseling"			=>	"university_counseling.php",
		"university-placements"			=>	"university_placements.php",
		"aitchison-publications"		=>	"publications.php",
		"facilities"					=>	"ac-facilities.php",
		"environment"					=>	"environment_clubs.php",		
		"an-aitchison-education"		=>	"an_aitchison_education.php"
	);
	//echo $req_page_name."<br>".$page_arr['principal'];
	if(strpos($currenturl, "school/")){
		
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
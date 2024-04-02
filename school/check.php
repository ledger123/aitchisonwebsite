<?php
	$currenturl="akhtar".$_SERVER[REQUEST_URI];
	/*echo $currenturl;
	echo "<br>Akhtar Rafiq<br>".strpos($currenturl, "admission/");*/
	$req_page_name=basename($_SERVER[REQUEST_URI]);	
	$fld_homepage="about-us";
	$page_arr=array(
		"about-us"						=>	"about_us.php",
		"history"						=>	"school_history.php",
		"history-offline"				=>	"school_history_offline.php",
        "history2-offline"				=>	"school_history2_offline.php",
		"archive"						=>	"archives.php",
		//"board-of-governors"			=>	"board_of_governors.php",
		"principal-office"				=>	"principal.php",
		"leading-staff"					=>	"leading_staff.php",
		"leading-staff1-offline"			=>	"leading_staff_offline.php",
		"all-boys-schooling"			=>	"all_boys_schooling.php",
		"school-organization"			=>	"school_orginization.php",
		"past-principals"				=>	"past_principals.php",
        "code-of-conduct"				=>	"codeofconduct.php",
		"core-purpose"					=>	"core_purpose.php",
		"university-counseling"			=>	"university_counseling.php",
		"university-counseling-offline1"			=>	"university_counseling-offline.php",
		"university-counseling-offline2"			=>	"university_counseling-offline2.php",
		"university-placements"			=>	"university_placements.php",
		"aitchison-publications"		=>	"publications.php",
		"facilities"					=>	"ac-facilities.php",
		"environment"					=>	"environment_clubs.php",
        "environment-of-aitchison"		=>	"environmet_aitchison.php",
		"an-aitchison-education"		=>	"an_aitchison_education.php",
		"old-building"		            =>	"oldbuilding.php",
        "facilities-offline"			=>	"ac-facilities-offline.php",
		"school-organization-offline"	=>	"school_orginization-offline.php",
        "principal-office-offline1"		=>	"principal-offline.php",
        "teachers-wall"		=>	"teachers_wall.php",
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
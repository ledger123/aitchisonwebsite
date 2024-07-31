<?php
	$currenturl="akhtar".$_SERVER[REQUEST_URI];
	/*echo $currenturl;
	echo "<br>Akhtar Rafiq<br>".strpos($currenturl, "admission/");*/
	$req_page_name=basename($_SERVER[REQUEST_URI]);
	$fld_homepage="points-of-entry-into-aitchison";
	$page_arr=array(
		"admissions-info-2024-25"	=>	"admissions-2024-25.php",
		"admissions-info"	=>	"admissions.php",
		"procedure-and-requirements"	=>	"procedure-requirements.php",
		"senior-admissions-to-aitchison-college" => "senior-admissions-ac.php",
        "senior-admissions-to-aitchison-college-offline" => "senior-admissions-ac-offline.php",
        "a-level-fsc-application-forms" => "a_level_fsc_application_forms.php",
        //"procedure-and-requirements-offline"	=>	"procedure-requirements-offline.php",
		


		"download-application-forms"	=>	"application-forms.php",
		// //"applications-forms-offline"	=>	"application-forms-offline.php",
		
		// "a-level-and-fsc-entrance-test-schedule"	=>	"a_levels_entrance_test_schedule.php",
		"admissions-testing-schedule"	=>	"admission_testing_schedule.php",

        "available-seats"	=>	"availableseats.php",
		"points-of-entry-into-aitchison"	=>	"points-of-entry.php",
        "important-dates-admissions"	=>	"table-of-important-dates.php",
        // //"important-dates-admissions-offline"	=>	"table-of-important-dates-offline.php",
		"age-guidelines-for-admissions"	=>	"age-guidelines.php",
		"guide-to-syllabus-and-admission-testing"	=>	"guide-syllabus-and-admission-testing.php",
		

		"admissions-faqs"	=>	"faqs.php",		
		"fee-structure"	=>	"feestructure.php",
		//"fee-structure-offline"	=>	"feestructure.php",
        //"international-enrolment-application-form"	=>	"intl-enrolment-application-forms-till-20231004.php",
		"international-enrolment-application-form"	=>	"intl-enrolment-application-forms.php",
		//"guidance-for-admissions"	=>	"guidance-for-admissions-2022.php",		
		"guidance-for-admissions"	=>	"guidance-for-admissions-2023.php",
		
        "international-fee"	=>	"internationalfee.php",
        //"international-fee-offline"	=>	"internationalfee-offline.php",
	);

	if(strpos($currenturl, "admission/")){
		
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
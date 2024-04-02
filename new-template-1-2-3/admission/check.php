<?php
	$currenturl="akhtar".$_SERVER[REQUEST_URI];
	/*echo $currenturl;
	echo "<br>Akhtar Rafiq<br>".strpos($currenturl, "admission/");*/
	$req_page_name=basename($_SERVER[REQUEST_URI]);
	$fld_homepage="admissions-info";
	$page_arr=array(
		"admissions-info"	=>	"admissions.php",
		"procedure-and-requirements"	=>	"procedure-requirements.php",
        "procedure-and-requirements-offline"	=>	"procedure-requirements-offline.php",
		"download-application-forms"	=>	"application-forms.php",
		"applications-forms-offline"	=>	"application-forms-offline.php",
		"points-of-entry-into-aitchison"	=>	"points-of-entry.php",
		"a-level-and-fsc-entrance-test-schedule"	=>	"a_levels_entrance_test_schedule.php",
		//"admissions-testing-schedule"	=>	"admissiontestingschedule.php",
        "important-dates-admissions"	=>	"table-of-important-dates.php",
        "important-dates-admissions-offline"	=>	"table-of-important-dates-offline.php",
		"age-guidelines-for-admissions"	=>	"age-guidelines.php",
		"guide-to-syllabus-and-admission-testing"	=>	"guide-syllabus-and-admission-testing.php",
		"admissions-faqs"	=>	"faqs.php",		
		"fee-structure"	=>	"feestructure.php",
		"fee-structure-offline"	=>	"feestructure.php",
		"guidance-for-admissions"	=>	"guidance-for-admissions-2022.php",
        "international-enrolment-application-form"	=>	"intl-enrolment-application-forms.php",
        "international-fee"	=>	"internationalfee.php",
        "available-seats"	=>	"availableseats.php",
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
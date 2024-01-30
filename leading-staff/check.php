<?php
	$currenturl="a".$_SERVER[REQUEST_URI];
	/*echo $currenturl;
	echo "<br>Akhtar Rafiq<br>".strpos($currenturl, "admission/");*/
	$req_page_name=basename($_SERVER[REQUEST_URI]);	
	$fld_homepage="school-heads";
	if(str_replace("/new-template-1", "", $_SERVER[REQUEST_URI])==="/leading-staff/"){
		$req_page_name="school-heads";		
	}
	$page_arr=array(
        "school-heads"				=>	"school_heads.php",
        "management-committee"		=>	"management_committee.php",
		"management-committee-offline"		=>	"management_committee_offline.php",
        "year-heads-ss"				=>	"year_heads_ss.php",
        "heads-of-department-ss"    =>  "heads_department_ss.php",
        "heads-of-department-ps"    =>  "heads_department_ps.php",
        "heads-of-department-js"    =>  "headsdepartmentjs.php",
        "co-curricular-head"        =>  "cocurricular_head.php",
        "head-of-discipline-and-welfare"    =>  "head_of_discipline_and_welfare.php",
        "head-of-key-annual-events"         =>  "head_of_key_annual_events.php",
        "house-heads-ss"         =>  "house_heads_ss.php",
        "house-heads-ps"         =>  "house_heads_ps.php",
        "house-heads-js"         =>  "house_heads_js.php",
        "games-department"   =>  "games_department.php",
        "controller-examinations"   =>  "controller_examinations.php",
        "college-doctors"			=>	"college_doctors.php",
        "administration"			=>	"admin.php",
	);

	if(strpos($currenturl, "leading-staff/")) {
		
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
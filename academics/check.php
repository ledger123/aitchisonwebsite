<?php
	$currenturl="akhtar".$_SERVER[REQUEST_URI];
	//echo "AA"; exit();
	/*echo $currenturl;
	echo "<br>Akhtar Rafiq<br>".strpos($currenturl, "admission/");*/
	$req_page_name=basename($_SERVER[REQUEST_URI]);
	$fld_homepage="ac-academics";
	
	if(str_replace("/new-template-1", "", $_SERVER[REQUEST_URI])==="/academics/"){
		$req_page_name="ac-academics";		
	}
	//echo $req_page_name."<br>".$fld_homepage;
	//exit();
	$page_arr=array(
		
		"ac-academics"					=>	"acacademics.php",
		"ac-academics-offline"					=>	"acacademics-offline.php",
		"academics-overview"			=>	"overview.php",
        //"important-dates"       		=>	"importantdates.php",
		"harkness-table"				=>	"harknesstable.php",
		"aj-science-innovation-centre"	=>  "AJScienceInnovationCentre.php",
		"sat-centre"					=>	"satcentre.php",
		"meta-cognition"				=>	"metacognition.php",
		"student-recognition"			=>	"studentrecognition.php",
        "a2-level"          			=>	"a2level.php",
        "oxford-summer-academy-2016"	=>	"oxford-summer-academy.php",
        "summer-school"					=>	"summerschool-2023.php"
	);
	if(strpos($currenturl, "academics/")){
		
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
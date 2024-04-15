<?php
	$currenturl="akhtar".$_SERVER[REQUEST_URI];
	$req_page_name=basename($_SERVER[REQUEST_URI]);
	if(str_replace("/new-template-1", "", $_SERVER[REQUEST_URI])==="/sports/"){
		$req_page_name="sportsaa";		
	}	
	$fld_homepage="sports";
	$page_arr=array(
		"sports"						=>	"sports-home.php",
		"sporting-philosophy"			=>	"sporting_philosophy.php",
		"sports-ideals"					=>	"ideals-sports.php",
		"sporting-heroes"				=>	"sporting-heroes-sports.php",
		"sporting-heroes-offline"		=>	"sporting-heroes-sports-offline.php",
		"sports-academies"				=>	"sportsacademies.php",
		"sports-academies-offline"		=>	"sportsacademies-offline.php",
		"athletics"						=>	"athletics-sports.php",
		"cricket"						=>	"cricket-sports.php",
		"cricket-offline"						=>	"cricket-sports-offline.php",
		"hockey"						=>	"hockey-sports.php",
		"swimming"						=>	"swimming-sports.php",	
		"squash"						=>	"squash-sports.php",
		"riding"						=>	"riding-sports.php",
		"rugby"							=>	"rugby-sports.php",
		"shooting"						=>	"shooting-sports.php",
		"tennis"						=>	"tennis-sports.php",
		"ss-athletic-records"			=>	"athletic-records-ss.php",
		"ss-swimming-records"			=>	"swimming-records-ss.php",
        "ss-swimming-records-offline"	=>	"swimming-records-ss-offline.php",
		"college-records"				=>	"college-records-sports.php",
        "invitational-sports-tours"		=>	"invitational-sports.php",
        //"cricket-live-scoreboard"		=>	"cricket-livescoreboard.php",
		//"cricket-live-scoreboard-offline"		=>	"cricket-livescoreboardol.php",
        "sports-with-danish-schools-jan-2022"		=>	"danish-schools.php",
        "live-sports"							=>	"live_sports.php",
        "aitchison-vs-lawrence-college-sports-2022" => "extra/aitchison-vs-lawrence-college-sports-2022.php",
	);
	/*echo "<br><br>".$req_page_name."<br>".$page_arr[$req_page_name]."AAA";
	exit();*/
	if(strpos($currenturl, "sports/")){
		
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
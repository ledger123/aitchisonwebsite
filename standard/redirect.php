<?php
/*****************************START CUSTOM REDIRECTS**************************************/
$redirect_arr=array(
					"index.php"									=> "",
					"gallery.php"								=> "picture-gallery",
					"gallery.php?cat=events"					=> "event-gallery",
					"gallery_schools.php"						=> "gallery-schools",
					"gallery_all_sports.php"					=> "gallery-sports",
					"gallery_architect.php"						=> "gallery-architect",
					"ac-contact-info.php"						=> "contact-info",
					"gallery_ground_and_fields.php"				=> "gallery-ground-and-fields",	
					"ac-principal_newsletter.php"				=> "principal-recent-newsletter",
					"ac-ppast_newsletter.php"					=> "principal-past-newsletter",
					"principal_past_newsletter"					=> "principal-past-newsletter",		
					"ac-college-records.php"					=> "college-records",
					"age-guidelines-admissions.php"				=> "age-guidelines-for-admissions",
					"alevel-applications.php"					=> "a-level-applications",	
					"alevel-applications-2022.php"				=> "a-level-applications",
					"reliving-aitchison.php"					=> "relivingaitchison",
					/*"ac-admission-application-form-2022.php"	=> "admission-application-form",*/
					"ac-guide-to-available-seats.php"			=> "guide-to-available-seats",
					"ac-ss-athletics-records.php"				=> "ss-athletics-records",	
					"ac-ss-swimming-records.php"				=> "ss-swimming-records",
					"ac-dining.php"								=> "dining",
					"ac-boarding-routine.php"					=> "boarding-routine",
					"ac-boardinghandbook.php"					=> "boarding-handbook",
					"ac-boarding-faq.php"						=> "boarding-faq",
					"boarding-faq"								=> "boarding-ten-basic-questions",
					"ac-ten-basic-questions.php"				=> "boarding-ten-basic-questions",
					"ac-sports.php"								=> "sports",
					"ac-sports.php?p=athletesprayer"			=> "sports-athletesprayer",
					"ac-sports.php?p=ideals"					=> "sports-ideals",
					"ac-sports.php?p=sheroes"					=> "sports-sheroes",				
					"ac-sportsacademies.php"					=> "sportsacademies",
					"ac-tennis.php"								=> "tennis",
					"ac-rugby.php"								=> "rugby",
					"ac-cocurricular.php"						=> "cocurricular",
					"ac-shooting.php"							=> "shooting",
					"ac-cricket-academy.php"					=> "cricket",
					"ac-hockey.php"								=> "hockey",
                    "ac-athletics.php"							=> "athletics",
					"ac-sports-with-danish-schools.php"			=> "sports-with-danish-schools-jan-2022",
					"ac-swimming.php"							=> "swimming",
					"ac-riding.php"								=> "riding",
                    "ac-shooting.php"							=> "shooting",
                    "ac-tennis.php"							    => "tennis",
					"ac-student-recognition.php"				=> "student-recognition",
					"ac-ourschools.php"							=> "our-schools",
					"ac-student-leadership.php"					=> "student-leadership",
					"ac-all-boys-schooling.php"					=> "all-boys-schooling",
					"ac-pastoralcare.php"						=> "pastoral-care",
					"ac-sschool.php"							=> "senior-school",
					"ac-pschool.php"							=> "prep-school",
					"ac-jschool.php"							=> "junior-school",
					"ac-clubsociety.php"						=>	"clubs-and-societies",
					"ac-debating.php"							=>	"debating",
					"ac-art.php"								=>	"art",
					"ac-music.php"								=>	"music",
					"ac-drama.php"								=>	"theatre",
					"ac-photo-of-week.php"						=>	"photo-of-the-week",
					"ac-theatre.php"							=>	"theatre",
					"ac-boarding-houses.php"					=>	"boarding-houses",
					"ac-benefitsofboarding.php"					=>	"benefits-of-boarding",
					"ac-boarding-admissions1.php"				=>	"boarding-admissions",
					"ac-boarding-admissions.php"				=>	"boarding-admissions",
					"boarding-pastoral-care.php"				=>	"boarding-pastoralcare",
					"boarding-medical.php"						=>	"boardingmedical",
					"boarding-weekend-activities.php"			=>	"boarding-weekendactivities",
					"year-level-new-admissions.php"				=>	"year-level-admissions",
					"admission-test-timetable-notice-202021.php"	=>	"admission-test-timetable-notice-2020-21",
					"ac-admissions-faq-2020.php"				=>	"ac-admissions-faq-2020-21",
					"ac-admissions-faq-2020-21"					=>  "admissions-faqs",
					"ac-admission-announcement.php"				=> 	"admission-announcement",
					"ac-admissions-faq-2022.php"				=>  "admissions-faqs",	
					"ac-admission-policy-new.php"				=>	"ac-admission-policy",
					"ac-admission-policy-process.php"			=>	"ac-admission-policy",
					"ac-procedure-and-requirements.php"			=>	"procedure-and-requirements",
					"ac-points-of-entry-into-aitchison.php"		=>	"points-of-entry-into-aitchison",
					"ac-important-dates-admissions.php"			=>	"important-dates-admissions",
					"age-guidelines-admissions-2022.php"			=>	"age-guidelines-for-admissions",
	
					"regulations-for-admissions-testing-2020.php"		=>	"regulations-for-admissions-testing-2020-21",
					"regulations-for-admissions-testing-2020-21"	=> "regulations-for-admissions-testing",
					"prospective-information-2020-21.php"		=>	"prospective-parents-information",
					"guidance-for-admissions-2020.php"			=>	"guidance-for-admissions-2020-21",
					"guidance-for-admissions-2020-21"			=>	"guidance-for-admissions",
					"newsandevents-live.php?id=523"				=>	"age-guidelines-for-admissions-2020-21",
					"newsandevents-testlink.php?id=418"			=>	"admissions-info",
                    "news-1107-available-seats"                 =>  "admissions-info",
					"newsandevents-live.php?id=567"				=>	"fee-structure-2019-20",
					"international-enrolments.php"				=>	"international-enrolment",
					"ac-availablepositions.php"					=>	"available-positions",
					"ac-ac.php"									=>	"academics",					
					"ac-admission.php"							=>  "admissions-info",
					"ac-academics-overview.php"					=>	"academics-overview",
					"ac-harkness-table.php"						=>	"harkness-table",
					"sat_centre.php"							=>	"sat-centre",
					"ac-meta-cognition.php"						=>	"meta-cognition",
					"about-us.php"								=>	"aboutus",
					"newsandevents.php"							=>	"news-and-events",
					"news-list.php"								=>	"news-and-events",
					"news-list-archive.php"						=>	"news-and-events-archive",
					"ac-international-fee.php"					=>	"international-fee",
					"ac-application-form.php"					=>	"international-enrolment-application-form",
					"ac-history.php"							=>	"history",
					"corporate-partners.php"					=>	"corporate-partner",
					"ac-archive.php"							=>	"archive",
					"bog.php"									=>	"board-of-governors",
					"ac-principal-office.php"					=>	"principal-office",
					"leading-staff.php"							=>	"leadingstaff",
					"ac-school-organization.php"				=>	"school-organization",
					"ac-principals.php"							=>	"past-principals",
					"ac-aceducation.php"						=>	"an-aitchison-education",
					"ac-core-purpose.php"						=>	"core-purpose",
					"ac-career-guidance.php"					=>	"higher-education-careers",
					"ac-university-placements.php"				=>	"university-placements",
					"newsandevents-testlink.php?id=615"			=>	"aitchison-publications",
					"ac-facilities.php"							=>	"facilities",
					"ac-environment.php"						=>	"environment",
					"ac-total-cricket-score.php"				=>	"cricket-live-scoreboard",
					"applications-forms-2023.php"				=>	"download-application-forms-2022-23",
					"download-application-forms-2023"			=>	"download-application-forms-2022-23",
					"ac-procedure-and-requirements-2021-22.php"	=>  "admissions-info",
					"news-1032-new-admissions-2022-23"			=>  "admissions-info",
					"a-level-applications"						=>  "admissions-info",
					"news-523-age-guidelines-for-admissions-2020-21"		=>  "admissions-info",
					"ac-makeagift.php"							=>	"make-a-gift",
					"ac-oxford-summer-academy.php"				=>  "oxford-summer-academy-2016",
					"news-1222-revised-admissions-testing-schedule-2022-23"		=>  "admissions-info",
					"ac-invitational-sports.php"		=>  "invitational-sports-tours",
					
					"ac-oxford-summar-academy.php"				=>  "oxford-summer-academy-2016"
			);
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
	$servername = "https://";   
else  
	$servername = "http://";
$servername.=$_SERVER['SERVER_NAME']."/";
if($_SERVER['SERVER_NAME'] == "localhost"){
	$servername.="aitchison20200701/";	
}
$baseurl=$servername;
getUrl();
$url=getUrl();
$pageaddress=explode("/",$url);
//echo $url;
function getUrl(){	
	global $redirect_arr,$baseurl;
	if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
		 $url = "https://";   
	else  
		 $url = "http://";   
	// Append the host(domain name, ip) to the URL.   
	$url.= $_SERVER['HTTP_HOST'];   	
	// Append the requested resource location to the URL   
	$url.= $_SERVER['REQUEST_URI'];   	
	$pageaddress_arr=explode("/",$url);	
	$pageaddress=$pageaddress_arr[count($pageaddress_arr)-1];	
	//echo $pageaddress."AAA";	
	if(array_key_exists($pageaddress,$redirect_arr)){
		$redirecttopage=$baseurl.$redirect_arr[$pageaddress];
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: $redirecttopage");
		exit();				
	}
	if(strpos($pageaddress,".php")){
		$phpindex=strpos($pageaddress,".php");			
		$pageaddress=substr($pageaddress,0,$phpindex+4);

		if(isset($redirect_arr[$pageaddress])){
			//echo "AkhtarRafiq";
			$redirecttopage=$baseurl.$redirect_arr[$pageaddress];
			if(isset($_GET['p'])){
				$redirecttopage.="-".$_GET['p'];
			}
			if(isset($_GET['cat'])){
				$redirecttopage.="-".$_GET['cat'];
			}
			if(isset($_GET['id'])){
				if($_GET['id']==615){

				}else{
					$redirecttopage.=intval($_GET['id']);
				}
			}			
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: $redirecttopage");
			exit();				
		}
}	
		//return $pageaddress;
		
	}
/*****************************ENDED CUSTOM REDIRECTS**************************************/

	function makeSlug($section){
		$section=strtolower(trim($section));
		$section=str_replace("<br/>"," ",$section);
		if(strpos($section, "&")){
			//$section="akhtar";
			$section = preg_replace("/&#?[a-z0-9]+;/i","",$section); 
			//$section=str_replace("&amp;","",$section);
		}
		$slugtitle=preg_replace("/[^a-zA-Z0-9-]+/", "", preg_replace('!\s+!',"-", $section));
		$slugtitle=str_replace("&", "-", $slugtitle);
		while(strpos($slugtitle, "--"))
			$slugtitle=str_replace("--", "-", $slugtitle);
		return $slugtitle;
	}
	function abc($section){
		return makeSlug($section);	
	}
	function linkNewsUrl($Id, $title, $section){
		$title=makeSlug($title);
		if($section=="alumni"){			
			$urllink="alumni/news-".intval($Id)."-".$title;
			$urllink="alumni/news-".intval($Id)."-".$title;
		}elseif($section=="alumniprofile"){
			$urllink="alumni/alumni-profile-".intval($Id).$title;
			$urllink="alumni/alumni-profile-".intval($Id).$title;
		}elseif($section=="alumnievents"){			
			$urllink="alumni/events-".intval($Id).$title;
			$urllink="alumni/events-".intval($Id).$title;
		}elseif($section=="alumninews"){			
			$urllink="alumni/news-".intval($Id).$title;
			$urllink="alumni/news-".intval($Id).$title;
		}elseif($section=="gallerydetails"){			
			$urllink="gallerydetails-".intval($Id)."-".$title;
			$urllink="gallerydetails-".intval($Id)."-".$title;
		}
		return $urllink;
	}
	echo "<!--";	
	echo "-->";
?>
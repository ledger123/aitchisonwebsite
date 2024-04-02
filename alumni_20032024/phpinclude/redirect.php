<?php
	$redirect_arr=array(
		"index.php"									=> "",
		"news.php"									=> "news-bulletin",
		"alumni-news.php"							=> "news-bulletin",		
		"famousaitchisonian.php"					=> "famous-aitchisonians",
		"accoba.php"								=> "acoba",
		"events.php"								=> "upcoming-events",
		"reminiscence.php"							=> "reminiscence",
		"reminiscences.php"							=> "reminiscence",
		"alumni_profiles.php"						=> "alumni-profiles",
		"alumni_profile.php"						=> "alumni-profiles",
		"gallery.php"								=> "alumni-gallery",
		"overseas-alumni.php"						=> "overseas-ac-alumni",
		"overseasalumni.php"						=> "overseas-ac-alumni",
		"shareyourstory.php"						=> "share-your-story",
		"biodataupdate.php"							=> "biodata-update",
		"contactus.php"								=> "contact-us",
		"alumni_profile_details.php"				=> "alumni-profile-",
		"poem-by-mehdi-mohsin-2017.php"				=> "poem-by-mehdi-mohsin_2017",
		"interview-with-syed-fahd-husain.php"		=> "an-interview-with-syed-fahd-husain",
		"iftikhar-ahmad-malik-passed-away.php"		=> "iftikhar-ahmad-malik-passed-away-20170313",
		"session-with-omer-saeed-27012017.php"		=> "session-with-omer-saeed-20170127",
		"alumni-reunion-2001-2005-15012017.php"		=> "alumni-reunion-2001-2005-20170115",
		"justice-yahya-becomes-PHC-chief-justice-07012017.php"	=> "justice-yahya-becomes-phc-chief-justice-20170107",
		"interview-with-jazib-zahir-15122016.php"	=> "interview-with-jazib-zahir-20161215",
		"robinson-challenge-cup-02122016.php"		=> "robinson-challenge-cup-20161202",
		"careers-evening-2016-29112016.php"			=> "careers-evening-2016-20161129",
		"yawar-hayat-passes-away-04112016.php"		=> "yawar-hayat-passes-away-20161104",
		"session-with-salman-akram-raja28102016.php"=> "session-with-salman-akram-raja20161028",
		"an-interview-with-aitzaz-ahsan-28092016.php"=> "an-interview-with-aitzaz-ahsan-20160928",
		"an-interview-with-humayun-mazhar.php"		=> "an-interview-with-humayun-mazhar-20160611",
		"annual_dinner2016.php"						=> "annual-dinner-2016",
		"newsfoundersday.php" 						=> "founders-day-20160401",
		"lunch-19092016.php"						=> "lunch-20160919",
		"newsfootball.php"							=> "football-20160225",
		"newscricket.php"							=> "cricket-20160221",
		"newshockey.php"							=> "hockey-20160219",
		"newstent.php"								=> "tent-pegging-20160227",
		"alumni-swimming-programme-2017.php"		=> "alumni-swimming-programme-20170601",		
		"old-tree-2016.php"							=> "old-tree_2016",
		"news-new.php"								=> "news-",
		"news-testlink.php"							=> "news-",
		"FamousAitchisonians.php"					=> "famous-aitchisonians"
	);
//overseas-alumni.php
	$baseurl="https://aitchison.edu.pk/alumni/";
	getUrl();
	/*$url=getUrl();
	$pageaddress=explode("/",$url);
    echo $url;*/

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
		//echo $url;
		$pageaddress_arr=explode("/",$url);
		$pageaddress=$pageaddress_arr[count($pageaddress_arr)-1];
		//echo $pageaddress."AAA";
		if(strpos($pageaddress,".php")){
			$phpindex=strpos($pageaddress,".php");			
			$pageaddress=substr($pageaddress,0,$phpindex+4);
						
			if(isset($redirect_arr[$pageaddress])){
				//echo "AkhtarRafiq";
				$redirecttopage=$baseurl.$redirect_arr[$pageaddress];
				if(isset($_GET['p_id'])){
					$redirecttopage.=intval($_GET['p_id']);
				}
				if(isset($_GET['id'])){
					$redirecttopage.=intval($_GET['id']);
				}
				
				header("HTTP/1.1 301 Moved Permanently");
				header("Location: $redirecttopage");
				exit();				
			}
		}	
		//return $pageaddress;
		
	}
	function makeSlug($section){
		$section=strtolower(trim($section));
		$slugtitle=preg_replace("/[^a-zA-Z0-9-]+/", "", preg_replace('!\s+!',"-", $section));		
		while(strpos($slugtitle, "--"))
			$slugtitle=str_replace("--", "-", $slugtitle);
		return $slugtitle;
	}	
	
	function linkNewsUrl($Id, $title, $section){
		$title=makeSlug($title);
		if($section=="alumni"){			
			$urllink="news-".intval($Id)."-".preg_replace("/[^a-zA-Z0-9-]+/", "", preg_replace('!\s+!',"-", $title));
			$urllink="news-".intval($Id)."-".preg_replace("/[^a-zA-Z0-9-]+/", "", preg_replace('!\s+!',"-", $title));
		}elseif($section=="alumniprofile"){
			$urllink="alumni-profile-".intval($Id)."-".preg_replace("/[^a-zA-Z0-9-]+/", "", preg_replace('!\s+!',"-", $title));
			$urllink="alumni-profile-".intval($Id)."-".preg_replace("/[^a-zA-Z0-9-]+/", "", preg_replace('!\s+!',"-", $title));
		}elseif($section=="alumnievents"){			
			$urllink="events-".intval($Id)."-".preg_replace("/[^a-zA-Z0-9-]+/", "", preg_replace('!\s+!',"-", $title));
			$urllink="events-".intval($Id)."-".preg_replace("/[^a-zA-Z0-9-]+/", "", preg_replace('!\s+!',"-", $title));
		}elseif($section=="alumninews"){			
			$urllink="news-".intval($Id)."-".preg_replace("/[^a-zA-Z0-9-]+/", "", preg_replace('!\s+!',"-", $title));
			$urllink="news-".intval($Id)."-".preg_replace("/[^a-zA-Z0-9-]+/", "", preg_replace('!\s+!',"-", $title));
		}
		return $urllink;
	}

  ?>   
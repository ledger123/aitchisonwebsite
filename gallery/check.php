<?php
	$currenturl="akhtar".$_SERVER[REQUEST_URI];
	/*echo $currenturl;
	echo "<br>Akhtar Rafiq<br>".strpos($currenturl, "admission/");*/
	$req_page_name=basename($_SERVER[REQUEST_URI]);
	//echo $req_page_name;
	$fld_homepage="event-gallery";
	$page_arr=array(
		"event-gallery"				=>	"events.php",
		"gallery-schools"			=>	"schools.php",
		"gallery-sports"			=>	"sports.php",
		"gallery-architect"			=>	"architecture.php",
		"gallery-ground-and-fields"	=>	"ground-and-fields.php",
		"gallery-ground-and-fields-offline2"	=>	"ground-and-fields-offline.php"
	);
    //gallery.php?gal_id=$1&gal_name=$2
	//gallerydetails
	if(strpos($currenturl, "gallerydetails-")){
		//echo "akhtar<br>";
		$req_page_name1=$req_page_name;
		$req_page_name1=str_replace("gallerydetails-", "", $req_page_name1);		
		$_GET['gal_id']=substr($req_page_name1, 0, strpos($req_page_name1,"-"));
		$galid1=$_GET['gal_id']."-";
		$_GET['gal_name']=str_replace($galid1, "", $req_page_name1);
		//echo "<br><br>".$gal_id."<br><br>";
		//$gal_id=
		//$page_arr[$req_page_name]="gallery.php?gal_id=".$gal_id."&gal_name=".$gal_name."";
		$page_arr[$req_page_name]="gallery.php";
		//echo $page_arr[$req_page_name];
	}	
	if(strpos($currenturl, "gallery/")){
		if(isset($page_arr[$req_page_name])){			
			//echo $page_arr[$req_page_name];
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
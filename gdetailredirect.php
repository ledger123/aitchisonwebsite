<?php
	$gal_id=$_GET['gal_id'];
	$gal_name=$_GET['gal_name'];

	if(intval($gal_id) > 0 && strlen($gal_name) > 3){
		$urlredirect="https://aitchison.edu.pk/gallery/gallerydetails-".$gal_id."-".$gal_name."";
		header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: $urlredirect"); 
		exit();
	}else{
		$urlredirect="https://aitchison.edu.pk/";
		header("HTTP/1.1 301 Moved Permanently"); 
		header("Location: $urlredirect"); 
		exit();
	}
?>
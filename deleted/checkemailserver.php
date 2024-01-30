<?php
	include("standard/main.php"); 
	$to = "web@aitchison.edu.pk";
	$subject = "Email Server Response";
	$txt = "Email Server Running";
	$headers = "From: info@aitchison.edu.pk" . "\r\n" .
	"CC: sd@aitchison.edu.pk";

	if(mail($to,$subject,$txt,$headers)){
		echo "Email Server Running";		
	}else{
		echo "Email Server Not Running";		
	}
	
?>

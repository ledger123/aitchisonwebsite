<?php 
date_default_timezone_set("Asia/Karachi");
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");
$Name = "Aitchison College"; //senders name 
$email = "info@aitchison.edu.pk"; //senders e-mail adress 
$recipient = "web@aitchison.edu.pk"; //recipient 
$mail_body = "The text for the mail..."; //mail body 
$subject = "Subject for reviever".date("Y-m-d h:m:s"); //subject 
$header = "From: ". $Name . " <" . $email . ">\r\n"; //optional headerfields 

mail($recipient, $subject, $mail_body, $header); //mail command :) 
?>
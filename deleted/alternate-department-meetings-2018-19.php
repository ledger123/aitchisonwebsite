<?php
session_start();
if(!(strpos("AAA".$_SERVER['HTTP_REFERER'], "pnotices-archive.php"))){
	header("location: ac-pnotices.php");
	exit();	
}
if(empty($_GET['download'])){
	header("location: ac-pnotices.php");
	exit();		
}

if(count($_SESSION['parents']) > 0 && ($_SESSION["parents"]['stuSchool'] == "SSD")){
	$thisportal="parents";	
	$mainpage="pmain.php";	
}else{
	header("location: /");	
	exit();
}

$fileName = "school_doc/2018-2019/alternate-department-meetings-2018.pdf";
//echo $fileName;
if (file_exists($fileName)) {
	//echo $sportscalender;
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($fileName).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($fileName));
    readfile($fileName);
    exit;
}else{
	header("location: $mainpage");	
}
//
?>
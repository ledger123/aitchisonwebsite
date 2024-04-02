<?php



if(!("AAA".strpos($_SERVER['HTTP_REFERER'], "newsandevents.php"))){
	header("location: ../newsandevents.php");
	exit();	
}
if(empty($_GET['download'])){
	header("location: ../newsandevents.php");
	exit();		
}
if(empty($_GET['m'])){
	header("location: ../newsandevents.php");
	exit();		
}

$month = $_GET['m'];

switch($month)
{
	case "82017": $fileName="newsletters/newsletter-july-2017.pdf"; break;
	
	
}


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
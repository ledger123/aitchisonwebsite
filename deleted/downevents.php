<?php

if($_REQUEST['s'] == "js"){
		$importantevent="school_doc/std_newpdf/sports-events-JS-2016-17.pdf";		
}elseif($_REQUEST['s'] == "ps"){
		$importantevent="school_doc/std_newpdf/sports-events-PS-2016-17.pdf";
}elseif($_REQUEST['s'] == "ss"){
		$importantevent="school_doc/std_newpdf/sports-events-SS-2016-17.pdf";
}
//echo $importantevent;
if (file_exists($importantevent)) {
	//echo $sportscalender;
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($importantevent).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($importantevent));
    readfile($importantevent);
    exit;
}

?>
<?php
$path = "";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include("accounts/syllabusrepository.php");
include($path."classes/filing.php");

$syllabusRepo = new SyllabusRepository($dc);

$group = $_SESSION['PORTAL_ID'];

if ($_SESSION['PORTAL_ID'] == "StaffPortal") {
	
	include("syllabus-staff.php");
}
else {
	//exit;	
	include("syllabus-parents.php");
}

?>

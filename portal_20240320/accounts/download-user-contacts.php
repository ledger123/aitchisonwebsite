<?php
$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");
include("accountrepository.php");
include("download-csv.php");

$accountRepo = new AccountRepository($dc);

//$tContacts = $accountRepo->GetAllStudentContacts($_SESSION['portal_sup_school']);

$p = isset($_GET['p'])?$_GET['p']:0;

$file = '';
if($p==1) {
    $file= 'students_contacts_till_28May.csv';
    $tContacts = $accountRepo->GetStudentContactsTill28May($_SESSION['portal_sup_school']);
}
elseif($p==2) {
    $file= 'students_contacts_from_28May_todate.csv';
    $tContacts = $accountRepo->GetLatestStudentContacts($_SESSION['portal_sup_school']);
}
elseif($p==3) {
    $file= 'students_contacts_all.csv';
    $tContacts = $accountRepo->GetAllStudentContacts($_SESSION['portal_sup_school']);
}
elseif($p==4) {
    $file= 'students_contacts_updated_all.csv';
    $tContacts = $accountRepo->GetAllUpdatedStudentContacts($_SESSION['portal_sup_school']);
}



$download = new DownloadFile();
$download->CSV($tContacts, $file);

?>

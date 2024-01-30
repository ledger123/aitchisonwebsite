<?php
session_start();
error_reporting(E_ALL);
include_once("classes/filing.php");

$key = Filing::GetFileKey("Term-wise Sports Events 2019-20", "sports-calendar-ss-201920-21062019", "../data/2019-20/sports-calendar-ss-201920-21062019.pdf");

//echo $key;

?>

<a href="<?php echo "filing/test1.php?d=".$key; ?>">Term-wise Sports Events 2019-20</a>
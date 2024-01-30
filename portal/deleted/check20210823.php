<?php
//echo $_SERVER['PHP_SELF']."<br>";
$url = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url1 = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
echo $url."<br>";
echo $url1."<br>";
?>
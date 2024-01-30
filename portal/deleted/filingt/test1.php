<?php
session_start();
error_reporting(E_ALL);
include_once("../classes/filing.php");

//$key = Filing::GetFileKey("Term-wise Sports Events 2019-20", "sports-calendar-ss-201920-21062019", "../data/2019-20/sports-calendar-ss-201920-21062019.pdf");


if( is_array($_REQUEST)) {

    $keys = array_keys($_REQUEST);
    
    if( is_array($keys)) {
        
        if ($keys[0] == "d") {
            
            Filing::DownloadFile( $_REQUEST[ $keys[0] ], basename(  $_SERVER['HTTP_REFERER']) );
        }
    }
}

?>

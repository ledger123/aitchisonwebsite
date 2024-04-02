<?php
session_start();

//error_reporting(E_ALL);

$path = "../";
include($path."classes/usersession.php");
include($path."classes/settings.php");

include_once($path."classes/filing.php");

//$key = Filing::GetFileKey("Term-wise Sports Events 2019-20", "sports-calendar-ss-201920-21062019", "../data/2019-20/sports-calendar-ss-201920-21062019.pdf");


if( is_array($_REQUEST)) {

    $keys = array_keys($_REQUEST);
    
    if( is_array($keys)) {
        
        if ($keys[0] == "d") {

            $platform = $functions->getPlatform();

            if ($platform == 'Android' && !isset( $_SERVER['HTTP_REFERER'] )) $ref = $platform;

            else $ref = basename( $_SERVER['HTTP_REFERER'] );

            Filing::DownloadFile( $_REQUEST[ $keys[0] ], $ref, $dc);
        }
    }
}


/*
include_once('filesarray.php');
include_once('filestream.php');

if( is_array($_REQUEST)) {

    $keys = array_keys($_REQUEST);

    if( is_array($keys)) {

        if ($keys[0] == "d") {

            $url = FilesArray::GetUrl( $_REQUEST[ $keys[0] ] );
            //echo $url. "<br>";
            FileStream::download_file( $url );
        }
    }
}
*/
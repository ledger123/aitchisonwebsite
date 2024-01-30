<?php
session_start();

//error_reporting(E_ALL);

$path = "";

include_once("filing.php");

//echo $key = Filing::GetURL("", 'Request Form for Registration', '../school_doc/admission-2021/admissions-2021-22-request-form.pdf');
//echo basename ($_SERVER['HTTP_REFERER']).'<br>';
if( is_array($_REQUEST)) {

    $keys = array_keys($_REQUEST);
    
    if( is_array($keys)) {
        
        if ($keys[0] == "d") {

            /*
            $platform = $functions->getPlatform();
            if ($platform == 'Android' && !isset( $_SERVER['HTTP_REFERER'] )) $ref = $platform;
            else $ref = basename( $_SERVER['HTTP_REFERER'] );
            */
            //echo '<br>';
            //echo 'referer: '. $_SERVER['HTTP_REFERER'];
            //echo '<br>';
            $ref = basename( $_SERVER['HTTP_REFERER'] );
            Filing::DownloadFile( $_REQUEST[ $keys[0] ], $ref);
        }
    }
}


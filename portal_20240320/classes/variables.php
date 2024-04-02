<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
class App
{

	#remote server variables
	public static $userName		= "aitchisonuser2";
	public static $password		= "poc!DravOuk2_";
	public static $server		= "localhost";
	public static $databaseName = "aitchison_db2";
	public static $databaseName2 = "aitchison_db5";




	
	public static $ReportHeader = "";
	
	public static $logoUrl = "../images/logo100x70.png";
    public static $logoUrl400x266 = "../images/logo400x266.png";
	#public static $logoUrl = "https://aitchison.edu.pk/img/logo100x70.png";
	
}

#old setting
/*
$domainName = "/portal/";
//$domainName = "/aitchison.edu.pk";
*/
#end old setting


//$portalDomainName = "/aitchison/portal/";
$portalDomainName = "/portal/";

//$domainName = "/aitchison/";
//$domainName = "/";



$environment = "development"; // "production"


$url = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

$from = '/'.preg_quote($portalDomainName, '/').'/';

$requestedPageUrl = preg_replace($from, "", parse_url($url, PHP_URL_PATH), 1);



$url = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

$from = '/'.preg_quote($portalDomainName, '/').'/';

$requestedPage = preg_replace($from, "", parse_url($url, PHP_URL_PATH), 1);


//$requestedPage = str_replace('/portal/','',$requestedPage);


//current requested file name
$fileName = basename( $_SERVER['SCRIPT_FILENAME'] );

$logoUrl = "../images/logo100x70.png";
#$logoUrl = "https://aitchison.edu.pk/img/logo100x70.png";

$Portals = array("ParentPortal", "StudentPortal", "BoarderPortal");

require_once("functions.php");

$functions = new Functions();






require_once('htmlpurifier/HTMLPurifier.auto.php');
//require_once ('htmlpurifier412/library/HTMLPurifier.auto.php');

$config = HTMLPurifier_Config::createDefault();


$config->set('HTML.DefinitionRev', 1);
$def = $config->getHTMLDefinition(true);


$def->addElement(   // add video tag
    'video',   // name
    'Block',  // content set
    'Flow', // allowed children
    'Common', // attribute collection
    array( // attributes
        'style' => 'style',
        'src' => 'URI',
        'preload' => 'Enum#auto,metadata,none',
        'controls' => 'Bool',
        'muted' => 'Text',
        'id' => 'Text',
        'autoplay' => 'Text',
        'width' => 'Length',
        'height' => 'Length',
        'style' => 'CDATA'
    )
);

$def->addElement(   // add video tag
    'source',   // name
    'Block',  // content set
    'Flow', // allowed children
    'Common', // attribute collection
    array( // attributes
        'src' => 'URI',
        'type' => 'Text',
    )
);

$def->addAttribute('div', 'id', 'Text');
$def->addAttribute('div', 'style', 'Text');
$def->addAttribute('img', 'style', 'Text');
$def->addAttribute('img', 'id', 'Text');
$def->addAttribute('a', 'target', 'Text');

$purifier = new HTMLPurifier($config);

//$config->set('HTML.AllowedElements', 'p,b,strong,i,em,u,a,ol,ul,li,hr,blockquote,img,table,tr,td,th,span,h1,h2,h3,h4,h5,h6');
//$config->set('HTML.AllowedAttributes', 'a.href,a.class,a.rel,a.class,a.style,img.src,img.width,img.height,img.alt,img.title');
$elementsPurifier = new HTMLPurifier($config);


?>
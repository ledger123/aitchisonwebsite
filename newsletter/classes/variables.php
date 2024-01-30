<?php
class App
{
	#local server variables
	public static $userName		= "aitchisonuser2";
	public static $password		= "poc!DravOuk2_";
	public static $server		= "localhost";
	public static $databaseName = "aitchison_db5";
	//public static $databaseName = "newsletter";
	
	public static $ReportHeader = "";
	
	public static $logoUrl = "../images/logo100x70.png";
    public static $logoUrl400x266 = "../images/logo400x266.png";
	#public static $logoUrl = "https://aitchison.edu.pk/img/logo100x70.png";
}

$domainName = "/newsletter/";
#$domainName = "/aitchison.edu.pk";

$environment = "production"; //"development"; // "production"

$url = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
//echo parse_url($url, PHP_URL_PATH)."<br />";
//$requestedPage = str_replace("/", "", parse_url($url, PHP_URL_PATH));

//current requested file name
$fileName = basename( $_SERVER['SCRIPT_FILENAME'] );

require_once("functions.php");

$functions = new Functions();

require_once ('htmlpurifier412/library/HTMLPurifier.auto.php');

$config = HTMLPurifier_Config::createDefault();

#configuration documentation link
//http://htmlpurifier.org/live/configdoc/plain.html

$config->set('HTML.DefinitionRev', 1);
$def = $config->getHTMLDefinition(true);
//$def->addElement('video', 'Block', 'Inline', 'Common', array());
//$def->addElement('source', 'Block', 'Inline', 'Common', array());



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


$def->addElement(   // add video tag
    'button',   // name
    'Block',  // content set
    'Flow', // allowed children
    'Common', // attribute collection
    array( // attributes
        'class' => 'Text',
        'id' => 'Text',
        'data-bs-toggle' => 'Text',
        'data-bs-target' => 'Text',
        'type' => 'Text',
        'role' => 'Text',
        'aria-controls' => 'Text',
        'aria-selected' => 'Bool',
    )
);


$def->addAttribute('a', 'href', 'Text');
$def->addAttribute('a', 'target', 'Text');
$def->addAttribute('a', 'id', 'Text');
$def->addAttribute('span', 'style', 'Text');
$def->addAttribute('img', 'style', 'Text');
$def->addAttribute('img', 'id', 'Text');
$def->addAttribute('div', 'id', 'Text');
$def->addAttribute('div', 'style', 'Text');

$def->addAttribute('ol', 'style', 'Text');
$def->addAttribute('ul', 'style', 'Text');
$def->addAttribute('ul', 'id', 'Text');
$def->addAttribute('ul', 'role', 'Text');
$def->addAttribute('li', 'role', 'Text');


$purifier = new HTMLPurifier($config);






//$config->set('HTML.AllowedElements', 'p,b,strong,i,em,u,a,ol,ul,li,hr,blockquote,img,table,tbody,tr,td,th,span,h1,h2,h3,h4,h5,h6,style');
//$config->set('HTML.AllowedAttributes', 'a.href,a.class,a.rel,a.class,a.style,img.src,img.width,img.height,img.alt,img.title,span.class,span.style');
//$elementsPurifier = new HTMLPurifier($config);

?>
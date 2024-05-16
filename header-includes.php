<?php
ini_set('session.cookie_httponly', 1);
// **PREVENTING SESSION FIXATION**
// Session ID cannot be passed through URLs
ini_set('session.use_only_cookies', 1);

// Uses a secure connection (HTTPS) if possible
ini_set('session.cookie_secure', 1);

header('X-Content-Type-Options: nosniff');
header("X-XSS-Protection: 1; mode=block;");
header("Pragma: no-cache");
header("Cache-Control: no-cache, no-store, must-revalidate, private");
header('X-Frame-Options: SAMEORIGIN');
header("strict-transport-security: max-age=0");

/*
$url_ = $path.'../newsletter/classes/htmlpurifier412/library/HTMLPurifier.auto.php';

require_once ($url_);
$config = HTMLPurifier_Config::createDefault();
$config->set('HTML.DefinitionRev', 1);


$config->set('Core.Encoding', 'UTF-8'); // replace with your encoding
$config->set('HTML.Doctype', 'XHTML 1.0 Transitional'); // replace with your doctype


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

$def->addAttribute('a', 'href', 'Text');
$def->addAttribute('a', 'target', 'Text');
$def->addAttribute('a', 'id', 'Text');
$def->addAttribute('img', 'style', 'Text');
$def->addAttribute('img', 'id', 'Text');

$purifier = new HTMLPurifier($config);
*/

$server = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

//$server = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];


$fileName = basename($_SERVER["SCRIPT_FILENAME"], '.php');

//include_once('path-settings.php');

$title = str_replace(['<br/>', '<br />'], ' ', $title);

?>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title><?php echo $title;?> - Aitchison College</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $title;?> - Aitchison College">
    <?php
    $robotsval="NOINDEX, NOFOLLOW";
    if(strpos($_SERVER['REQUEST_URI'], ".php") || strpos($_SERVER['REQUEST_URI'], "offline") || strpos($_SERVER['REQUEST_URI'], "library/")){
        $robotsval="NOINDEX, NOFOLLOW";
    }
    ?>
    <meta name="robots" content="<?php echo $robotsval;?>">

    <link rel="shortcut icon" href="<?php echo $path;?>favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo $path;?>favicon.png" type="image/x-icon">

    <!-- Font Awesome -->
    <link href="<?php echo $path;?>resources/assets/fontawesome-web/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- bootstrap -->
    <link href="<?php echo $path;?>resources/vendors/bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- mega menu -->
    <link rel="stylesheet" type="text/css" href="<?php echo $path;?>resources/vendors/slidermenu/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $path;?>resources/vendors/slidermenu/slidermenu.css?v=11">

    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="<?php echo $path;?>resources/vendors/OwlCarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $path;?>resources/vendors/OwlCarousel2/dist/assets/owl.theme.default.min.css">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500&family=Playball&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,300&display=swap" rel="stylesheet">

    <!-- red menu -->
    <link href="<?php echo $path;?>resources/vendors/redmenu/style2.css?v=3" rel="stylesheet">

    <!-- Swiper Slider -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- page style -->
    <link rel="stylesheet" type="text/css" href="<?php echo $path;?>resources/style.css?v=35">

    <link rel="stylesheet" href="<?php echo $path;?>resources/css/jquery.tosrus.all.css">

    <link rel="stylesheet" href="<?php echo $path;?>resources/css/photo-gallery.css?v=27">

    <link rel="stylesheet" type="text/css" href="<?php echo $path;?>resources/custom.css?v=32">

    <?php if (false && $fileName === 'index') {?>
    <!-- page style -->
    
    <?php }?>

</head>

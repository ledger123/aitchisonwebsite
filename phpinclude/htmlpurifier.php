<?php
require_once ('newsletter/classes/htmlpurifier412/library/HTMLPurifier.auto.php');

$config = HTMLPurifier_Config::createDefault();


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

/*$def->addElement(   // add video tag
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
*/

$purifier = new HTMLPurifier($config);
//$TxtNewsHeading    = $purifier->purify($TxtNewsHeading);
?>
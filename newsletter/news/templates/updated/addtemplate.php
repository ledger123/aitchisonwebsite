<?php
function strr($str) {
    return str_replace('&amp;', '&', $str);
}

switch( $purifier->purify($row->Template) )
{
	case "Standard" 	 : include($templatePath . "newsletter/news/templates/updated/template1.php"); break;
	
	case "Image Gallery" : include($templatePath . "newsletter/news/templates/updated/template2.php"); break;
	
	case "Simple" 		 : include($templatePath . "newsletter/news/templates/updated/template3.php"); break;

    case "NewsLetter" 	 : include($templatePath . "newsletter/news/templates/updated/template7.php"); break;

    case "NewsLetter2" 	 : include($templatePath . "newsletter/news/templates/updated/template4.php"); break;

	case "Image Gallery2": include($templatePath . "newsletter/news/templates/updated/template5.php"); break;
		
	case "URL"			 : include($templatePath . "newsletter/news/templates/updated/template6.php"); break;
}
?>
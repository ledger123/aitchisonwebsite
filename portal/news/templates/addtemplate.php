<?php
if ( isset($row) )
switch( $purifier->purify($row->Template) )
{
	case "Standard" 	 : include($templatePath . "news/templates/template1.php"); break;
	
	case "Image Gallery" : include($templatePath . "news/templates/template2.php"); break;
	
	case "Simple" 		 : include($templatePath . "news/templates/template3.php"); break;
	
	case "NewsLetter2" 	 : include($templatePath . "news/templates/template4.php"); break;

    case "NewsLetter" 	 : include($templatePath . "news/templates/template7.php"); break;

	case "Image Gallery2": include($templatePath . "news/templates/template5.php"); break;
		
	case "URL"			 : include($templatePath . "news/templates/template6.php"); break;
}
?>
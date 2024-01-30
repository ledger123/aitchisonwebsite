<?php
switch( $purifier->purify($row->Template) )
{
	case "Standard" 	 : include($templatePath . "newsletter/news/templates/template1.php"); break;
	
	case "Image Gallery" : include($templatePath . "newsletter/news/templates/template2.php"); break;
	
	case "Simple" 		 : include($templatePath . "newsletter/news/templates/template3.php"); break;
	
	case "NewsLetter" 	 : include($templatePath . "newsletter/news/templates/template4.php"); break;
		
	case "Image Gallery2": include($templatePath . "newsletter/news/templates/template5.php"); break;
		
	case "URL"			 : include($templatePath . "newsletter/news/templates/template6.php"); break;
}
?>
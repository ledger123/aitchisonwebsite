<?php
switch($row->Template)
{
	case "Standard" 	 : include($templatePath . "news/templates-new/template1.php"); break;
	
	case "Image Gallery" : include($templatePath . "news/templates-new/template2.php"); break;
	
	case "Simple" 		 : include($templatePath . "news/templates-new/template3.php"); break;
	
	case "NewsLetter" 	 : include($templatePath . "news/templates-new/template4.php"); break;
		
	case "Image Gallery2": include($templatePath . "news/templates-new/template5.php"); break;
		
	case "URL"			 : include($templatePath . "news/templates-new/template6.php"); break;
}
?>
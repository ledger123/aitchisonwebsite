<?php
ini_set('display_errors', 'On');
$file ="images/nl-img150x32.png";

if(file_exists($file))
{
	try
	{
		echo "file exists<br />";
		
		//chmod($file, 644);
		
		//if ( rename($file, "images/nl-img150x32.png") )
		if ( unlink($file) )
			echo "<br />file deleted.<br />";
		else echo "<br />file not deleted.<br />";
	}
	catch (Exception $ex)
	{
		echo $ex->getMessage()."<br />";
	}
}
else
{
	echo "file does not exists.";
}
?>
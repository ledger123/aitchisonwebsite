<?php
class Functions
{
	
	function formatDate($dateValue, $format = "Y-m-d H:i:s")
	{
		date_default_timezone_set('Asia/Karachi');
		
		$date = date_create($dateValue);
		return date_format($date, $format);
		
		//$myDateTime = DateTime::createFromFormat('Y-m-d', $dateString);
		//$newDateString = date_format($myDateTime,"Y-m-d H:i:s");
	}
	
	function placeQuote( $str )
	{
		return str_replace( '"', '&quot;', $str );
	}
	
	function replaceQuote( $str )
	{
		return str_replace( '&quot;', '"', $str );
	}
	
	
	function makeRandomFileName( $fileName )
	{
		$randomNum   = rand(0, 9999999999);
		
		$fileExt = substr($fileName, strrpos($fileName, '.'));
		
		$fileExt = str_replace('.','',$fileExt);
		
		$fileName = preg_replace("/\.[^.\s]{3,4}$/", "", $fileName);
		
		//Create new image name (with random number added).
		$fileName = $fileName.'-'.$randomNum.'.'.$fileExt;
		
		return $fileName;
		
	}
	
	function isImage ( $imgControlName, $fileName, $key = "" )
	{
		//echo "key: ".$key."<br />";
		
		// never assume the upload succeeded
		if ($key === "")
		{
			if ($_FILES[$imgControlName]['error'] !== UPLOAD_ERR_OK)
			die("Upload failed with error code1 " . $_FILES[$imgControlName]['error']);
		}
		else if ($_FILES[$imgControlName]['error'][$key] !== UPLOAD_ERR_OK) {
			$code = $_FILES[$imgControlName]['error'][$key];
			die("Upload failed with error code " . $code);
		}
		
		$info = getimagesize( $fileName );
		if ($info === FALSE) {
		   die("Unable to determine image type of uploaded file");
		}
		
		if (($info[2] !== IMAGETYPE_GIF) && ($info[2] !== IMAGETYPE_JPEG) && ($info[2] !== IMAGETYPE_PNG) && ($info[2] !== IMAGETYPE_WEBP)) {
		   die("Not a gif/jpeg/png/webp");
		}
		
		return getimagesize( $fileName );
	}
}

function str_replace_first($from, $to, $subject)
{
	$from = '/'.preg_quote($from, '/').'/';

	return preg_replace($from, $to, $subject, 1);
}

if (!function_exists('array_column')) {
    function array_column($input, $column_key, $index_key = NULL) {
        if (!is_array($input)) {
            trigger_error(__FUNCTION__ . '() expects parameter 1 to be array, ' . gettype($input) . ' given', E_USER_WARNING);
            return FALSE;
        }
        
        $ret = array();
        foreach ($input as $k => $v) {        
            $value = NULL;
            if ($column_key === NULL) {
                $value = $v;
            }
            else {
                $value = $v[$column_key];
            }
            
            if ($index_key === NULL || !isset($v[$index_key])) {
                $ret[] = $value;
            }
            else {
                $ret[$v[$index_key]] = $value;
            }   
        }
        
        return $ret;
    }
}
?>
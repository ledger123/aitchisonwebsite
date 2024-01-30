<?php
session_start();
class Filing {
	
	static function GetFileKey( $slug = "", $fileName, $url, $ref ) {

		$filesArray = self::GetFilesArray( );
		//$slug = "";
		if($slug == "")
			$slug = uniqid();

		$filesArray[$slug] = array ( "fileName"=>$fileName, "url"=>$url, "ref"=> basename($_SERVER['SCRIPT_FILENAME']) );
		
		self::SetFilesArray ( $filesArray );
		
		return $slug;
	}

	static function GetURL( $slug = "", $fileName, $url, $caption ="" ) {

		return "filing/?d=" . self::GetFileKey( $slug, $fileName, $url, $caption );

	}

	static function GetURL2( $slug = "", $fileName, $url, $caption ="", $functions ) {

		$platform = $functions->getPlatform();
		if ($platform == 'Android' && !isset( $_SERVER['HTTP_REFERER'] )) return str_replace('../', '', $url);
		else return "filing/?d=" . self::GetFileKey( $slug, $fileName, $url, $caption );

	}
	
	static function DownloadFile( $fileKey, $ref )
	{
		
		$filesArray = self::GetFilesArray();

		$arr = $filesArray[ $fileKey ];
		var_dump($filesArray);
//echo '<br>';
		echo $fileUrl = $arr["url"];
//		echo '<br>';
		echo strlen($arr['ref']). ' == '. strlen($ref);
//		echo '<br>';

		if (file_exists($fileUrl) && ($arr['ref'] == $ref || $ref == 'Android') ) {
			echo '<br>ok';
			header('Content-Description: File Transfer');
			header('Content-Type: application/octet-stream');
			header('Content-Disposition: attachment; filename=' . basename($fileUrl));
			header('Content-Transfer-Encoding: binary');
			header('Expires: 0');
			header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
			header('Pragma: public');
			header('Content-Length: ' . filesize($fileUrl));
			ob_clean();
			flush();
			readfile($fileUrl);

			//self::saveDownloadLink($dc, $fileUrl, $arr["caption_"]);
			//self::saveTestDownloadLink($dc, $fileUrl, $arr["caption_"]);

			exit;
		}

	}
	
	private static function GetFilesArray( ) {
		if ( isset ( $_SESSION['non_portal_FilesArray'] ) ) return $_SESSION['non_portal_FilesArray'];
		else return array();
	}
	
	private static function SetFilesArray( $filesArray ) {
		$_SESSION['non_portal_FilesArray'] = $filesArray;
	}

	private static function GetRefFileName()
	{
		/*
		$key = array_search(__FUNCTION__, array_column(debug_backtrace(), 'function'));

		$db = debug_backtrace();
		$url = $db[$key]['file'];
		return basename ( $url );
		*/

		return  basename( $_SERVER['HTTP_REFERER'] );
	}

}
/*
if ( isset( $_GET['fileid'] ) ) {
	
	Filing::DownloadFile( $_GET['fileid'] );
}
*/
?>

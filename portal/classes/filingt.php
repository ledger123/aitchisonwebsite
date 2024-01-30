<?php
class Filing {
	
	static function GetFileKey( $slug = "", $fileName, $url, $caption ="" ) {
		
		$filesArray = self::GetFilesArray( );
		$slug = "";
		if($slug == "")
			$slug = uniqid();

		$filesArray[$slug] = array ( "fileName"=>$fileName, "url"=>$url, "ref"=> self::GetRefFileName(), "caption_"=>$caption );
		
		self::SetFilesArray ( $filesArray );
		
		return $slug;
	}

	static function GetURL( $slug = "", $fileName, $url, $caption ="" ) {

		return "filingt/?d=" . self::GetFileKey( $slug, $fileName, $url, $caption );

	}
	
	static function DownloadFile( $fileKey, $ref, $dc )
	{
		
		$filesArray = self::GetFilesArray();
		
		$arr = $filesArray[ $fileKey ];
		//var_dump($arr);
		$fileUrl = $arr["url"];

		
		if (file_exists($fileUrl) && ($arr['ref'] == $ref || $ref == 'Android') ) {

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

			self::saveDownloadLink($dc, $fileUrl, $arr["caption_"]);
			//self::saveTestDownloadLink($dc, $fileUrl, $arr["caption_"]);

			exit;
		}

	}
	
	private static function GetFilesArray( ) {
		if ( isset ( $_SESSION['portal_FilesArray'] ) ) return $_SESSION['portal_FilesArray'];
		else return array();
	}
	
	private static function SetFilesArray( $filesArray ) {
		$_SESSION['portal_FilesArray'] = $filesArray;
	}

	private static function GetRefFileName()
	{
		/*
		$key = array_search(__FUNCTION__, array_column(debug_backtrace(), 'function'));

		$db = debug_backtrace();
		$url = $db[$key]['file'];
		return basename ( $url );
		*/

		return  basename( $_SERVER['SCRIPT_NAME'] );
	}

	static function saveDownloadLink($dc, $fileUrl, $caption) {
/*
		$path = "../";
		include($path."classes/usersession.php");
		include($path."classes/settings.php");
		//include($path."classes/functions.php");
*/

		$functions = new Functions();


		$userName	= $_SESSION['portal_SchoolNo'] ?: $_SESSION['portal_sup_username'];

		$portal		= $_SESSION['PORTAL_ID'];

		$school		= $_SESSION['portal_School'] ?: $_SESSION['portal_sup_school'] ?: "0";

		$class		= $_SESSION['portal_CurrentClass'] ?: $_SESSION['portal_sup_class'] ?: "0";

		$platform	= $functions->getPlatform();

		$browser	= $functions->getBrowserName();

		$ip			= $functions->getIp();

		$url        = $fileUrl; // $_GET["url"];


		$pageTitle  = $caption;// $_GET["pageTitle"];

		$fileName   = basename($fileUrl); // basename( $_SERVER['SCRIPT_NAME'] ); // self::GetRefFileName(); // $_GET["fileName"];

		$entryTime  = date("Y-m-d H:i:s");

		$qry =
			"INSERT INTO portal_files_download_logs (UserName, Portal, School, Class, Platform, Browser, IpAddress, Url, PageTitle, FileName, EntryTime)
		 VALUES(?,?,?,?,?,?,?,?,?,?,?)";

		$params = array (
			array("datatype"=>"s", "value"=>$userName),
			array("datatype"=>"s", "value"=>$portal),
			array("datatype"=>"s", "value"=>$school),
			array("datatype"=>"s", "value"=>$class),
			array("datatype"=>"s", "value"=>$platform),
			array("datatype"=>"s", "value"=>$browser),
			array("datatype"=>"s", "value"=>$ip),
			array("datatype"=>"s", "value"=>$url),
			array("datatype"=>"s", "value"=>$pageTitle),
			array("datatype"=>"s", "value"=>$fileName),
			array("datatype"=>"s", "value"=>$entryTime)
		);

		$response = $dc->ExecuteNonQuery($qry, $params);


	}


	static function saveTestDownloadLink($dc, $fileUrl, $caption) {
		/*
                $path = "../";
                include($path."classes/usersession.php");
                include($path."classes/settings.php");
                //include($path."classes/functions.php");
        */

		$functions = new Functions();


		$userName	= ""; // $_SESSION['portal_SchoolNo'] ?: $_SESSION['portal_sup_username'];

		$portal		= ""; // $_SESSION['PORTAL_ID'];

		$school		= ""; // $_SESSION['portal_School'] ?: $_SESSION['portal_sup_school'] ?: "0";

		$class		= ""; // $_SESSION['portal_CurrentClass'] ?: $_SESSION['portal_sup_class'] ?: "0";

		$platform	= $functions->getPlatform();

		$browser	= $functions->getBrowserName();

		$ip			= $functions->getIp();

		$url        = $fileUrl; // $_GET["url"];


		$pageTitle  = $caption;// $_GET["pageTitle"];

		$fileName   = basename($fileUrl); // basename( $_SERVER['SCRIPT_NAME'] ); // self::GetRefFileName(); // $_GET["fileName"];

		$entryTime  = date("Y-m-d H:i:s");

		$qry =
			"INSERT INTO portal_files_download_logs_test (UserName, Portal, School, Class, Platform, Browser, IpAddress, Url, PageTitle, FileName, EntryTime)
		 VALUES(?,?,?,?,?,?,?,?,?,?,?)";

		$params = array (
			array("datatype"=>"s", "value"=>$userName),
			array("datatype"=>"s", "value"=>$portal),
			array("datatype"=>"s", "value"=>$school),
			array("datatype"=>"s", "value"=>$class),
			array("datatype"=>"s", "value"=>$platform),
			array("datatype"=>"s", "value"=>$browser),
			array("datatype"=>"s", "value"=>$ip),
			array("datatype"=>"s", "value"=>$url),
			array("datatype"=>"s", "value"=>$pageTitle),
			array("datatype"=>"s", "value"=>$fileName),
			array("datatype"=>"s", "value"=>$entryTime)
		);

		$response = $dc->ExecuteNonQuery($qry, $params);


	}

}
/*
if ( isset( $_GET['fileid'] ) ) {
	
	Filing::DownloadFile( $_GET['fileid'] );
}
*/
?>

<?php
class Functions
{
	function __construct()
	{
		date_default_timezone_set('Asia/Karachi');
		//$this->LoadStartups();
	}
	
	function __destruct()
	{	
    }
	
	
	/*
	private $DayNamesArray = array("1"=> "Monday", "2"=>"Tuesday", "3"=>"Wednesday", "4"=>"Thursday", "5"=>"Friday", "6"=>"Saturday", "7"=>"Sunday");
	
	public $DayNames;
	
	public $MonthNames;
	
	public $MonthNamesArray;
	
	function LoadStartups()
	{
		$this->DayNames = new DataTable();
		$this->DayNames->SetColumns(array("Id", "Name"));
		foreach($this->DayNamesArray as $key => $value)
			$this->DayNames->addRow(array($key, $value));
		
        
		$this->MonthNamesArray = array("1"=>"January", "2"=>"February", "3"=>"March", "4"=>"April", "5"=>"May", "6"=>"June", "7"=>"July", "8"=>"August", "9"=>"September", "10"=>"October", "11"=>"November", "12"=>"December");
		$this->MonthNames = new DataTable();
		$this->MonthNames->SetColumns(array("Value", "Month"));
		
		$value = 1;
		foreach($this->MonthNamesArray as $key=>$month)
			$this->MonthNames->addRow(array($value++, $month));
		
		
		$start    = new DateTime($this->fiscalYear["start_date"]);
		$start->modify('first day of this month');
		$end      = new DateTime($this->fiscalYear["end_date"]);
		$end->modify('first day of next month');
		
		$interval = DateInterval::createFromDateString('1 month');
		$this->FiscalYearMonths = new DatePeriod( $start, $interval, $end);
		
	}
	
	
	function GetDateByMonth($month)
	{
		foreach ($this->FiscalYearMonths as $dt) {
			if ($dt->format("m") == $month)
				return $dt->format("Y-m-d");
		}
	}
	
	function GetLastDateByMonth( $month )
	{
		$start = new DateTime( $this->GetDateByMonth( $month ) );
		$start->modify('last day of this month');
		return $start->format("Y-m-d");
	}
	
	function GetMonthsByTwoDates($fromDate, $toDate)
	{
		$fromDate  = new DateTime($fromDate);
		$toDate    = new DateTime($toDate);
		
		$months = "";
		$match = false;
		foreach ($this->FiscalYearMonths as $dt)
		{
			if ($dt->format("m") == $fromDate->format("m")) $match = true;
			
			//if start month matched
			if ($match == true)
			{
				//set false when end month matched
				if ($dt->format("m") == $toDate->format("m")) $match = false;
				
				$months .= ((int)$dt->format("m")) . ",";
			}
		}
		
		//remove comma at last position
		if (strlen($months) > 0)
		{
			$months = substr($months, 0, strlen($months)-1);
		}
		
		return $months;
	}
	*/
	
	
	function getBrowserName()
	{
		$user_agent = $_SERVER["HTTP_USER_AGENT"];
		
		if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
		elseif (strpos($user_agent, 'Edge')) return 'Edge';
		elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
		elseif (strpos($user_agent, 'Safari')) return 'Safari';
		elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
		elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';
		return 'Other';
	}
	
	
	function getPlatform() {
		
		$user_agent = $_SERVER["HTTP_USER_AGENT"];
		
		$os_platform = "Unknown OS Platform";
		$os_array    = array(
								'/windows nt 10/i'      =>  'Windows 10',
								'/windows nt 6.3/i'     =>  'Windows 8.1',
								'/windows nt 6.2/i'     =>  'Windows 8',
								'/windows nt 6.1/i'     =>  'Windows 7',
								'/windows nt 6.0/i'     =>  'Windows Vista',
								'/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
								'/windows nt 5.1/i'     =>  'Windows XP',
								'/windows xp/i'         =>  'Windows XP',
								'/windows nt 5.0/i'     =>  'Windows 2000',
								'/windows me/i'         =>  'Windows ME',
								'/win98/i'              =>  'Windows 98',
								'/win95/i'              =>  'Windows 95',
								'/win16/i'              =>  'Windows 3.11',
								'/macintosh|mac os x/i' =>  'Mac OS X',
								'/mac_powerpc/i'        =>  'Mac OS 9',
								'/linux/i'              =>  'Linux',
								'/ubuntu/i'             =>  'Ubuntu',
								'/slackware/i'          =>  'Linux Slackware',
								'/kali/i'               =>  'Linux Kali',
								'/fedora/i'             =>  'Linux Fedora',
								'/mint/i'               =>  'Linux Mint',
								'/iphone/i'             =>  'iPhone',
								'/ipod/i'               =>  'iPod',
								'/ipad/i'               =>  'iPad',
								'/android/i'            =>  'Android',
								'/blackberry/i'         =>  'BlackBerry',
								'/webos/i'              =>  'Mobile'

							);

		foreach ($os_array as $regex => $value) { 
			if (preg_match($regex, $user_agent)) {
				$os_platform    =   $value;
			}
		}
		
		return $os_platform;
	}
	
	function getIp() {
		$ip =
			getenv('HTTP_CLIENT_IP')?:
			getenv('HTTP_X_FORWARDED_FOR')?:
			getenv('HTTP_X_FORWARDED')?:
			getenv('HTTP_FORWARDED_FOR')?:
			getenv('HTTP_FORWARDED')?:
			getenv('REMOTE_ADDR');

		return $ip;
	}

	// Encrypt value
    function encrypt( $value ) {
        
        $key = '1-265-cipher-29-256';

        $newvalue = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $key ), $value, MCRYPT_MODE_CBC, md5( md5( $key ) ) ) );
        
        return( $newvalue );
    }

    // Decrypt value
    function decrypt( $value ) {
        
        $key = '1-265-cipher-29-256';

        $newvalue = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $key ), base64_decode( $value ), MCRYPT_MODE_CBC, md5( md5( $key ) ) ), "\0");
        
        return( $newvalue );
	}
	
	function getPercentage($value, $total) {


		$percentage = 0;
		
		if( is_numeric($value) && is_numeric($total) && $value > 0 )

			$percentage = ($value * 100) / $total;
		
		return $percentage;
	}
	
	function formatDate($dateValue, $format = "Y-m-d H:i:s")
	{
		date_default_timezone_set('Asia/Karachi');
		
		$date = date_create($dateValue);
		return date_format($date, $format);
		
		//$myDateTime = DateTime::createFromFormat('Y-m-d', $dateString);
		//$newDateString = date_format($myDateTime,"Y-m-d H:i:s");
	}
	function getCurrentDateTime()
    {
        date_default_timezone_set('Asia/Karachi');
        $date = date('Y-m-d H:i:s');
        //echo $date;

        return $date;
    }
	/*
	function validateDate($date, $format = 'Y-m-d H:i:s')
	{
		$d = DateTime::createFromFormat($format, $date);
		return $d && $d->format($format) == $date;
	}
	
	function Now($format = "m/d/Y")
	{
		// set the default timezone to use. Available since PHP 5.1
		date_default_timezone_set('Asia/Karachi');
		
		return date($format);
	}
	
	function monthAdd( $effectiveDate )
	{
		date_default_timezone_set('Asia/Karachi');
		
		return date('Y-m-d', strtotime("+1 months", strtotime($effectiveDate)));
	}
	
	function dateAdd( $date, $interval, $expr )
	{
		date_default_timezone_set('Asia/Karachi');
		
		if		( $expr == "m" ) $expression = "months";
		else if ( $expr == "d" ) $expression = "days";
		else if ( $expr == "i" ) $expression = "minutess";
		
		//date('Y-m-d', strtotime("+1 months", strtotime($date)));
		
		return date('Y-m-d', strtotime($interval . " " . $expr, strtotime( $date )));
	}
	
	function monthName( $monthValue )
	{
		if($monthValue < 1 || $monthValue > 12) return "null";
		
		$dt = DateTime::createFromFormat('!m', $monthValue);
		return $dt->format('F');
	}
	
	function monthValue( $monthName )
	{
		$monthValue = date("m", strtotime($monthName . "-" . $this->Now("Y")));
		return (int)$monthValue;
	}
	
	function dayName($dayValue)
	{
		if($dayValue < 1 || $dayValue > 7) return "null";
		
		if($dayValue == 1) return "Monday";
		if($dayValue == 2) return "Tuesday";
		if($dayValue == 3) return "Wednesday";
		if($dayValue == 4) return "Thursday";
		if($dayValue == 5) return "Friday";
		if($dayValue == 6) return "Saturday";
		if($dayValue == 7) return "Sunday";
	}
	
	
	function addOrdinalNumberSuffix($num) {
		if (!is_numeric($num)) return $num;
		if (!in_array(($num % 100),array(11,12,13))){
			switch ($num % 10) {
				// Handle 1st, 2nd, 3rd
				case 1:  return $num.'st';
				case 2:  return $num.'nd';
				case 3:  return $num.'rd';
			}
		}
		return $num.'th';
	}
	*/
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
	
	
	
	function isFileValid ( $imgControlName, $fileName, $key = "" )
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
		
		$fileType = pathinfo($fileName, PATHINFO_EXTENSION);
		if ($fileType === FALSE) {
		   die("Unable to determine type of uploaded file");
		}
		
		echo $fileName. "<br />";
		echo $fileType. "<br />";
		
		if($fileType !== "doc" && $fileType !== "docx" && $fileType !== "pdf" ) {
			die("Not a doc/docx/pdf");
		}
		/*
		if (($info[2] !== IMAGETYPE_GIF) && ($info[2] !== IMAGETYPE_JPEG) && ($info[2] !== IMAGETYPE_PNG)) {
		   die("Not a gif/jpeg/png");
		}*/
		
		return true;
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
		
		if (($info[2] !== IMAGETYPE_GIF) && ($info[2] !== IMAGETYPE_JPEG) && ($info[2] !== IMAGETYPE_PNG)) {
		   die("Not a gif/jpeg/png");
		}
		
		return getimagesize( $fileName );
	}
	
	
	

	function convert_number_to_words($number) {
		$hyphen      = '-';
		/*$conjunction = ' and ';
		$separator   = ', ';*/
		$conjunction = ' ';
		$separator   = ' ';
		$negative    = 'negative ';
		$decimal     = ' point ';
		$dictionary  = array(
			0                   => 'zero',
			1                   => 'one',
			2                   => 'two',
			3                   => 'three',
			4                   => 'four',
			5                   => 'five',
			6                   => 'six',
			7                   => 'seven',
			8                   => 'eight',
			9                   => 'nine',
			10                  => 'ten',
			11                  => 'eleven',
			12                  => 'twelve',
			13                  => 'thirteen',
			14                  => 'fourteen',
			15                  => 'fifteen',
			16                  => 'sixteen',
			17                  => 'seventeen',
			18                  => 'eighteen',
			19                  => 'nineteen',
			20                  => 'twenty',
			30                  => 'thirty',
			40                  => 'fourty',
			50                  => 'fifty',
			60                  => 'sixty',
			70                  => 'seventy',
			80                  => 'eighty',
			90                  => 'ninety',
			100                 => 'hundred',
			1000                => 'thousand',
			1000000             => 'million',
			1000000000          => 'billion',
			1000000000000       => 'trillion',
			1000000000000000    => 'quadrillion',
			1000000000000000000 => 'quintillion'
		);

		if (!is_numeric($number)) {
			return false;
		}

		if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
			// overflow
			trigger_error(
				'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
				E_USER_WARNING
			);
			return false;
    	}

		if ($number < 0) {
			return $negative . $this->convert_number_to_words(abs($number));
		}

		$string = $fraction = null;

		if (strpos($number, '.') !== false) {
			list($number, $fraction) = explode('.', $number);
		}

		switch (true) {
			case $number < 21:
				$string = $dictionary[$number];
				//echo $string."Akhtar Rafiq<br>";
				break;
			case $number < 100:
				$tens   = ((int) ($number / 10)) * 10;
				$units  = $number % 10;
				$string = $dictionary[$tens];
				if ($units) {
					$string .= $hyphen . $dictionary[$units];
				}
				//echo $string."Akhtar Rafiq Hundred<br>";
				break;
			case $number < 1000:
				$hundreds  = $number / 100;
				$remainder = $number % 100;
				$string = $dictionary[$hundreds] . ' ' . $dictionary[100];
				if ($remainder) {
					$string .= $conjunction . $this->convert_number_to_words($remainder);
				}
				break;
			default:
				$baseUnit = pow(1000, floor(log($number, 1000)));
				$numBaseUnits = (int) ($number / $baseUnit);
				$remainder = $number % $baseUnit;
				$string = $this->convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
				if ($remainder) {
					$string .= $remainder < 100 ? $conjunction : $separator;
					//echo $string."Akhtar Rafiq <br> $conjunction :conjunction<br> $separator :separator<br>";
					$string .= $this->convert_number_to_words($remainder);
				}
				break;
		}
		//echo " AAA <br>".$string." AAA <br>";
		if (null !== $fraction && is_numeric($fraction)) {
			$string .= $decimal;
			$words = array();
			foreach (str_split((string) $fraction) as $number) {
				$words[] = $dictionary[$number];
			}
			$string .= implode(' ', $words);
		}
		
		return $string;
	}
	
	
	function simple_crypt( $string, $action = 'e' ) {
		// you may change these values to your own
		$secret_key = '6690_2146_key'; // 'simple_2146_key';
		$secret_iv = 'iv_6412_5909'; //'simple_6412_iv';

		$output = false;
		$encrypt_method = "AES-256-CBC";
		$key = hash( 'sha256', $secret_key );
		$iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );

		if( $action == 'e' ) {
			$output = base64_encode( openssl_encrypt( $string, $encrypt_method, $key, 0, $iv ) );
		}
		else if( $action == 'd' ){
			$output = openssl_decrypt( base64_decode( $string ), $encrypt_method, $key, 0, $iv );
		}

		return $output;
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
<?php
class IpGeolocation {
	
    private $apiKey = "5c18adce764f47d9b2e03042d1ff8d20";
	private $fields = "country_code3,country_name,state_prov,city,organization";
	private $excludes = "";
	
    //$ip = "CLIENT_IP_ADDRESS";
    //$location = get_geolocation($apiKey, $ip);
    //$decodedLocation = json_decode($location, true);
    
    //echo "<pre>";
    //print_r($decodedLocation);
    //echo "</pre>";
	
	function getLocation( $ip, $lang = "en" ) {
		
		$url = "https://api.ipgeolocation.io/ipgeo?apiKey=".$this->apiKey."&ip=".$ip."&lang=".$lang;
		
		$location = file_get_contents($url);
		return $location;
	}
	
    function get_geolocation($ip, $lang = "en") {
        $url = "https://api.ipgeolocation.io/ipgeo?apiKey=".$this->apiKey."&ip=".$ip."&lang=".$lang;
        $cURL = curl_init();
		
		
        curl_setopt($cURL, CURLOPT_URL, $url);
        curl_setopt($cURL, CURLOPT_HTTPGET, true);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Accept: application/json'
        ));
		echo "call curl_exec() <br />";
        $output = curl_exec($cURL);
		
		if (curl_errno ( $cURL )) {
			echo curl_error ( $cURL );
			curl_close ( $cURL );
		}

		curl_close($cURL);
		return $output;
		
		
    }
	
}

?>
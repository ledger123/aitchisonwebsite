<?php
//header("Location: https://aitchison.edu.pk/newsandevents-testlink.php?id=350");
//die();

$path = "";
//include($path."classes/usersession.php");
//include($path."classes/settings.php");

function get_browser_name($user_agent)
{
    if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
    elseif (strpos($user_agent, 'Edge')) return 'Edge';
    elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
    elseif (strpos($user_agent, 'Safari')) return 'Safari';
    elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
    elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';
    return 'Other';
}
?>

<!DOCTYPE html>
<html lang="en">


<?php $title = "FAQs"; include($path."includes.php"); ?>
<style>

	.question {
		font-weight: bold;
    	padding-top: 15px;
	}
	
</style>
<body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        
		<?php include($path."empty_leftheader.php"); ?>
        
        <!-- page content -->
        <div class="right_col" role="main">
          
            <div class="container">
				<div class="row" id="newsletter">
				  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
					  <div class="x_content">
						 
<?php

						//echo $_SERVER['HTTP_USER_AGENT'] . "<br />";
						  
						  //echo 'Current script owner: ' . get_current_user() . "<br />";
						  
						  echo "Browser: ". get_browser_name($_SERVER['HTTP_USER_AGENT'])  . "<br />";
						  
						//$browser = get_browser();
						//print_r("browser: ".$browser);
						  
						  
						  
						$user_agent = $_SERVER["HTTP_USER_AGENT"];
						function getOS() { 
							global $user_agent;
							$os_platform    =   "Unknown OS Platform";
							$os_array       =   array(
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
						  
						echo "Operating system: " . getOS() . "<br />";
						//echo "Understood from: " . $_SERVER["HTTP_USER_AGENT"];

						  $ip = getenv('HTTP_CLIENT_IP')?:
								getenv('HTTP_X_FORWARDED_FOR')?:
								getenv('HTTP_X_FORWARDED')?:
								getenv('HTTP_FORWARDED_FOR')?:
								getenv('HTTP_FORWARDED')?:
								getenv('REMOTE_ADDR');
						  
						  echo $ip . "<br />";
						  
						  //session_start();
						  //echo "session_id: " . session_id() . "<br />";
						  
						  
						  
						  
							include_once("classes/ip-geolocation-api.php");
							$ipLocation = new IpGeolocation();
						  
						  
						  	$ip = "43.245.10.93";

							$location = $ipLocation->getLocation( $ip );
						  
						  
							$data = json_decode($location, true);
						  
						  echo "call json_decode() <br />";

							//var_dump( $data );
						  
						  //echo $data["country_name"];
						  
						  echo $data["country_name"] . " (". $data["country_code3"]. ")" . "<br />";
						  echo $data["state_prov"] . "<br />";
						  echo $data["city"] . "<br />";
						  echo $data["isp"] . "<br />";
						  echo $data["organization"] . "<br />";

?>						  


					  </div>
					</div>
				  </div>
				  <!--<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
					  <?php //include($path."rightpanel.php"); ?>
				  </div>-->
				</div>
            </div>
            
          	<!-- footer content -->
        	
        	<?php include($path."footer.php"); ?>
            
        	<!-- /footer content -->
          
        </div>
        <!-- /page content -->
        
      </div>
    </div>
	<?php include($path."footerincludes.php"); ?>

</body>
</html>

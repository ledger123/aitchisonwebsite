<?php
class Settings
{
	private $dc;
	
	function __construct(DataCenter $datacenter)
	{
		$this->dc = $datacenter;
	}
	
	function __destruct()
	{
		
    }
	
	public function CheckSession()
	{
		ob_start();
		
		if(!function_exists('session_status'))
		{
			if (defined('SID')==false) session_start();
		}
		else
		{
			if(session_status()!=PHP_SESSION_ACTIVE) session_start();
		}
		
		
		$user_id = $_SESSION['n_user_id'];
		
		if($_SESSION['n_user_id'] == "")
		{
			header("location: " . $path . "login.php");
		}
	}
	
	function Authenticate( $userName, $password )
	{
		$qry =
			"SELECT u.Id, Title, Username, Password, GroupId, g.GroupName, Admin, u.Picture 
			 FROM n_users u INNER JOIN
				n_groups g ON g.Id = GroupId
			 WHERE u.Active = 1 AND g.Active = 1 AND Username = ? AND Password = Password(?)";
		
		$params = array(
			array("datatype"=>"s", "value"=>$userName),
			array("datatype"=>"s", "value"=>$password)
		);
		//echo $qry;
		
		return $this->dc->ExecuteParamQuery($qry, $params);
		//return $this->dc->Login( $qry, $userName, $password );
	}
}
?>
<?php
//require_once("newslocations.php");
class PermissionRepository
{
	private $dc;
	
	function __construct(DataCenter $dataCenter)
	{
		$this->dc = $dataCenter;
	}
	
	function __destruct()
	{
		
    }
	
	
	public function GetPageLocations( $navigationTreeId )
	{
		$qry = "SELECT CONCAT(Id, ' - ', Title, ' - ', Node) Node FROM portal_navigation_tree WHERE Id = " . $navigationTreeId;
		$heading = $this->dc->GetObject($qry);
		
		$heading = strlen($heading) > 0 ? $heading : "Not Selected";
		
		$qry = "SELECT Id, 
				  IFNULL((SELECT PortalCode 
					  FROM portal_portal_links
					  WHERE NavigationTreeId = ". $navigationTreeId ." AND PortalCode = pp.Code), 0) AS PortalCode,
					  CODE `Code`, `Group`, SubGroup, Location, Details
				FROM portal_portals pp
				WHERE LENGTH(`Group`) > 0
				ORDER BY `Group`, `Group`";
		
		//echo $qry;
		
		$dTable = $this->dc->ExecuteQuery($qry, true);
		
		return array($heading, $dTable);
	}
	
	
	public function UpdatePageLocations($navigationTreeId, $portalCodes, $userId)
	{
		$navigationTreeId = (int)$navigationTreeId;
		$userId = (int)$userId;
		
		if ( is_array($portalCodes) )
			$portalCodes = implode(',', $portalCodes);
		else
			$portalCodes = 0;
		
		
		$qry = "DELETE FROM portal_portal_links WHERE NavigationTreeId=? AND PortalCode NOT IN(".$portalCodes.")";
		
		$params = array(
				array("datatype"=>"i", "value"=>$navigationTreeId)
			);
		
		if ( $this->dc->ExecuteNonQuery($qry, $params) )
		{
			$qry = 
				"INSERT INTO portal_portal_links (NavigationTreeId, PortalCode, PermissionDate, UserId) 
				 SELECT ".$navigationTreeId.", l.Code, Now(), ".$userId." FROM portal_portals l 
				 WHERE 
					l.Code IN(".$portalCodes.") AND 
					l.Code NOT IN(SELECT PortalCode FROM portal_portal_links WHERE NavigationTreeId=? AND PortalCode IN(".$portalCodes."))";
			
			$params = array(
				array("datatype"=>"i", "value"=>$navigationTreeId)
			);
			
			return $this->dc->ExecuteNonQuery($qry, $params);
			
		}
		
	}
}
?>
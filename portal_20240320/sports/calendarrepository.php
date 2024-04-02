<?php

class CalendarRepository
{
	private $dc;
	
	function __construct(DataCenter $dataCenter)
	{
		$this->dc = $dataCenter;
	}
	
	function __destruct()
	{
		
    }
	
	
	public function Get($id)
	{
		$id = (int)$id;
		
		$qry = "SELECT * FROM portal_sports_calendars WHERE Id = " . $id;
		
		
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	public function GetList( $offset, $recordsPerPage )
	{
		$offset 		= (int)$offset;
		$recordsPerPage = (int)$recordsPerPage;
		
		$qry = "SELECT COUNT(*) FROM portal_sports_calendars ";
		
		$counts = (int)$this->dc->GetObject( $qry );
		
		$qry =
			"SELECT Id, Title, DATE_FORMAT(ContentDate, '%e %M, %Y') ContentDate, Tab, UserId,
			CASE WHEN Active = 1 THEN 'Yes' ELSE 'No' END Active
			FROM portal_sports_calendars";
		
		$dTable = $this->dc->ExecuteQuery($qry, true);
		
		return array( $counts, $dTable );
	}
	
	
	
	public function Save($title, $contentDate, $tab, $subTab, $content, $active, $userId)
	{
		$active	  = (int)$active;
		$userId	  = (int)$userId;
		
		$qry = "INSERT INTO portal_sports_calendars (Title, ContentDate, Tab, SubTab, Content, Active, UserId)
		VALUES (?,?,?,?,'". $content ."',?,?)";
		
		$params = array(
			array("datatype"=>"s", "value"=>$title),
			array("datatype"=>"s", "value"=>$contentDate),
			array("datatype"=>"s", "value"=>$tab),
			array("datatype"=>"s", "value"=>$subTab),
			array("datatype"=>"i", "value"=>$active),
			array("datatype"=>"i", "value"=>$userId)
		);
		
		//echo $qry;
		
		$lastInsertId = $this->dc->ExecuteNonQuery($qry, $params, true);
		//echo "last id: ".$lastInsertId;
		
		return $lastInsertId;
	}
	
	
	public function Update($id, $title, $contentDate, $tab, $subTab, $content, $active, $userId)
	{
		$id	  	  = (int)$id;
		$active	  = (int)$active;
		$userId	  = (int)$userId;
		
		$qry = "UPDATE portal_sports_calendars SET Title = ?, ContentDate = ?, Tab = ?, SubTab = ?, Content = '" . $content ."', Active = ?, UserId = ?
		WHERE Id = ?";
		
		$params = array(
			array("datatype"=>"s", "value"=>$title),
			array("datatype"=>"s", "value"=>$contentDate),
			array("datatype"=>"s", "value"=>$tab),
			array("datatype"=>"s", "value"=>$subTab),
			array("datatype"=>"i", "value"=>$active),
			array("datatype"=>"i", "value"=>$userId),
			array("datatype"=>"i", "value"=>$id)
		);
		
		//echo $qry;
		
		return $this->dc->ExecuteNonQuery($qry, $params);
	}
	
	
	public function GetLocations( $sportsCalendarId )
	{
		$qry = "SELECT Title FROM portal_sports_calendars WHERE Id = " . $sportsCalendarId;
		$heading = $this->dc->GetObject($qry);
		
		$heading = strlen($heading) > 0 ? $heading : "Not Selected";
		
		$qry = "SELECT Id, 
				  IFNULL((SELECT PortalCode 
					  FROM portal_sports_calendar_links
					  WHERE SportsCalendarId = ". $sportsCalendarId ." AND PortalCode = pp.Code), 0) AS PortalCode,
					  Code, `Group`, SubGroup, Location, Details
				FROM portal_portals pp
				WHERE LENGTH(`Group`) > 0
				ORDER BY `Group`";
		
		//echo $qry;
		
		$dTable = $this->dc->ExecuteQuery($qry, true);
		
		return array($heading, $dTable);
	}
	
	
	public function UpdateLocations($sportsCalendarId, $portalCodes, $userId)
	{
		$sportsCalendarId = (int)$sportsCalendarId;
		$userId = (int)$userId;
		
		if ( is_array($portalCodes) )
			$portalCodes = implode(',', $portalCodes);
		else
			$portalCodes = 0;
		
		
		$qry = "DELETE FROM portal_sports_calendar_links WHERE SportsCalendarId=? AND PortalCode NOT IN(".$portalCodes.")";
		
		$params = array(
				array("datatype"=>"i", "value"=>$sportsCalendarId)
			);
		$this->dc->ExecuteNonQuery($qry, $params);
		
		if ( true )
		{
			$qry = 
				"INSERT INTO portal_sports_calendar_links (PortalCode, SportsCalendarId, LinkDate, UserId) 
				 SELECT l.Code, ".$sportsCalendarId.", Now(), ".$userId." FROM portal_portals l 
				 WHERE 
					l.Code IN(".$portalCodes.") AND 
					l.Code NOT IN(SELECT PortalCode FROM portal_sports_calendar_links WHERE SportsCalendarId=? AND PortalCode IN(".$portalCodes."))";
			//echo $qry;
			$params = array(
				array("datatype"=>"i", "value"=>$sportsCalendarId)
			);
			
			return $this->dc->ExecuteNonQuery($qry, $params);
			
		}
		
	}
	
	function GetPublishedCalendar( $group, $subGroup, $location, $game = "" )
	{
		if ( $game !== "" )
			$game = " AND s.`SubTab` = '". $game ."' ";
		
		$qry = 
			"SELECT s.Id, s.`Title`, s.`Tab`, s.`SubTab`, s.Content 
				FROM portal_sports_calendars s INNER JOIN
				portal_sports_calendar_links sfl ON sfl.`SportsCalendarId` = s.`Id` INNER JOIN
				portal_portals p ON p.Code = sfl.`PortalCode`
			WHERE s.Active = 1 AND 
				  p.Group = '".$group."' AND 
				  p.SubGroup = '".$subGroup."' AND 
				  p.Location = '".$location."' 
				  ". $game ."
			ORDER BY s.Id DESC, s.`Tab` ASC";
		
		//echo $qry;
		
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	
	
}

?>
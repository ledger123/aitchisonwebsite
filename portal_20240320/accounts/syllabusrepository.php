<?php

class SyllabusRepository
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
		
		$qry = "SELECT * FROM portal_syllabus WHERE Id = " . $id;
		
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	public function GetList( $offset, $recordsPerPage )
	{
		$offset 		= (int)$offset;
		$recordsPerPage = (int)$recordsPerPage;
		
		$qry = "SELECT COUNT(*) FROM portal_syllabus ";
		
		$counts = (int)$this->dc->GetObject( $qry );
		
		$qry =
			"SELECT Id, Title, SyllabusDate sDate, DATE_FORMAT(SyllabusDate, '%e %M, %Y') SyllabusDate, UserId,
			CASE WHEN Active = 1 THEN 'Yes' ELSE 'No' END Active
			FROM portal_syllabus
			ORDER BY sDate DESC, Id ASC limit $offset,$recordsPerPage";
		
		$dTable = $this->dc->ExecuteQuery($qry, true);
		
		return array( $counts, $dTable );
	}
	
	
	
	public function Save($title, $syllabusDate, $active, $userId)
	{
		$active	  = (int)$active;
		$userId	  = (int)$userId;
		
		$qry = "INSERT INTO portal_syllabus (Title, SyllabusDate, Active, UserId)
		VALUES (?,?,?,?)";
		
		$params = array(
			array("datatype"=>"s", "value"=>$title),
			array("datatype"=>"s", "value"=>$syllabusDate),
			array("datatype"=>"i", "value"=>$active),
			array("datatype"=>"i", "value"=>$userId)
		);
		
		//echo $qry;
		
		$lastInsertId = $this->dc->ExecuteNonQuery($qry, $params, true);
		//echo "last id: ".$lastInsertId;
		
		return $lastInsertId;
	}
	
	
	public function Update($id, $title, $syllabusDate, $active, $userId)
	{
		$id	  	  = (int)$id;
		$active	  = (int)$active;
		$userId	  = (int)$userId;
		
		$qry = "UPDATE portal_syllabus SET Title = ?, SyllabusDate = ?, Active = ?, UserId = ?
		WHERE Id = ?";
		
		$params = array(
			array("datatype"=>"s", "value"=>$title),
			array("datatype"=>"s", "value"=>$syllabusDate),
			array("datatype"=>"i", "value"=>$active),
			array("datatype"=>"i", "value"=>$userId),
			array("datatype"=>"i", "value"=>$id)
		);
		
		//echo $qry;
		
		return $this->dc->ExecuteNonQuery($qry, $params);
	}
	
	
	public function GetLocations( $syllabusId )
	{
		$qry = "SELECT Title FROM portal_syllabus WHERE Id = " . $syllabusId;
		$heading = $this->dc->GetObject($qry);
		
		$heading = strlen($heading) > 0 ? $heading : "Not Selected";
		
		$qry = "SELECT Id, 
				  IFNULL((SELECT PortalCode 
					  FROM portal_syllabus_files_links
					  WHERE SyllabusId = ". $syllabusId ." AND PortalCode = pp.Code), 0) AS PortalCode,
					  Code, `Group`, SubGroup, Location, Details
				FROM portal_portals pp
				WHERE LENGTH(`Group`) > 0
				ORDER BY `Group`";
		
		//echo $qry;
		
		$dTable = $this->dc->ExecuteQuery($qry, true);
		
		return array($heading, $dTable);
	}
	
	
	public function UpdateLocations($syllabusId, $portalCodes, $userId)
	{
		$syllabusId = (int)$syllabusId;
		$userId = (int)$userId;
		
		if ( is_array($portalCodes) )
			$portalCodes = implode(',', $portalCodes);
		else
			$portalCodes = 0;
		
		
		$qry = "DELETE FROM portal_syllabus_files_links WHERE SyllabusId=? AND PortalCode NOT IN(".$portalCodes.")";
		
		$params = array(
				array("datatype"=>"i", "value"=>$syllabusId)
			);
		
		if ( $this->dc->ExecuteNonQuery($qry, $params) )
		{
			$qry = 
				"INSERT INTO portal_syllabus_files_links (SyllabusId, PortalCode, LinkDate, UserId, SyllabusFileId) 
				 SELECT ".$syllabusId.", l.Code, Now(), ".$userId.", 0 FROM portal_portals l 
				 WHERE 
					l.Code IN(".$portalCodes.") AND 
					l.Code NOT IN(SELECT PortalCode FROM portal_syllabus_files_links WHERE SyllabusId=? AND PortalCode IN(".$portalCodes."))";
			
			$params = array(
				array("datatype"=>"i", "value"=>$syllabusId)
			);
			
			return $this->dc->ExecuteNonQuery($qry, $params);
			
		}
		
	}
	
	
	function GetPublishedSyllabus( $group, $subGroup, $location )
	{
		$qry = 
			"SELECT DISTINCT s.Id, s.`Title`, sf.`Caption`, sf.`FileUrl` 
				FROM portal_syllabus s INNER JOIN
				portal_syllabus_files sf ON sf.`SyllabusId` = s.`Id` INNER JOIN
				portal_syllabus_files_links sfl ON sfl.`SyllabusId` = s.`Id` INNER JOIN
				portal_portals p ON p.Code = sfl.`PortalCode`
			WHERE s.Active = sf.`Active` = 1 ";
		
		if( strlen($group) > 0 ) {
			$qry .= " AND p.Group = '".$group."' ";
		}
		
		$qry .=
			" AND p.SubGroup = '".$subGroup."' AND p.Location = '".$location."' 
			ORDER BY s.Id DESC, sf.`Caption` ASC";
		
		//echo "<!--";
		//echo $qry;
		//echo "-->";
		
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	
	public function GetSections($teacherName)
	{
		$qry = 
			"SELECT DISTINCT substr(t.`Section`, 1, 2) Section
			FROM portal_teacher_classes t INNER JOIN
				portal_subjects s ON s.`Id` = t.`SubjectId`
			WHERE TeacherFullName = '". $teacherName ."'";
		
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	
	public function GetFilesList( $syllabusId, $active = -1 )
	{
		$active 	= (int)$active;
		$syllabusId = (int)$syllabusId;
		
		$qry = "SELECT Id, SyllabusId, Caption, FileUrl, Active FROM portal_syllabus_files WHERE SyllabusId = ". $syllabusId;
		
		if ( $active > -1 ) {
			$qry .= " active = " . $active;
		}
		//echo $qry;
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	
	public function GetSyllabusFile( $syllabusFileId )
	{
		$syllabusFileId = (int)$syllabusFileId;
		
		$qry = "SELECT SyllabusId, Caption, FileUrl, Active FROM portal_syllabus_files WHERE Id = ". $syllabusFileId;
		
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	
	public function DeleteSyllabusFile( $syllabusFileId )
	{
		$qry = "DELETE FROM portal_syllabus_files_links WHERE Id=?";
		
		$qry = "DELETE FROM portal_syllabus_files WHERE Id=?";
		
		$params = array(
			array("datatype"=>"i", "value"=>$syllabusFileId)
		);
		
		return $this->dc->ExecuteNonQuery($qry, $params);
	}
	
	
	public function SaveFile($syllabusId, $caption, $fileUrl, $active)
	{
		$active	  	  = (int)$active;
		$syllabusId	  = (int)$syllabusId;
		
		$qry = "INSERT INTO portal_syllabus_files (SyllabusId, Caption, FileUrl, Active)
		VALUES (?,?,?,?)";
		
		$params = array(
			array("datatype"=>"i", "value"=>$syllabusId),
			array("datatype"=>"s", "value"=>$caption),
			array("datatype"=>"s", "value"=>$fileUrl),
			array("datatype"=>"i", "value"=>$active)
		);
		
		//echo $qry;
		
		$lastInsertId = $this->dc->ExecuteNonQuery($qry, $params, true);
		//echo "last id: ".$lastInsertId;
		
		return $lastInsertId;
	}
	
	
	public function UpdateFile($id, $syllabusId, $caption, $fileUrl, $active)
	{
		$id	  	  = (int)$id;
		$active	  	  = (int)$active;
		$syllabusId	  = (int)$syllabusId;
		
		$qry = "UPDATE portal_syllabus_files SET SyllabusId = ?, Caption = ?, FileUrl = ?, Active = ?)
		WHERE Id = ?";
		
		$params = array(
			array("datatype"=>"i", "value"=>$syllabusId),
			array("datatype"=>"s", "value"=>$caption),
			array("datatype"=>"s", "value"=>$fileUrl),
			array("datatype"=>"i", "value"=>$active),
			array("datatype"=>"i", "value"=>$id)
		);
		
		//echo $qry;
		
		return $this->dc->ExecuteNonQuery($qry, $params);
	}
	
	
}

?>
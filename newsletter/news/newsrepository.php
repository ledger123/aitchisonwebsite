<?php
require_once("newslocations.php");
class NewsRepository
{
	private $dc;
	

	function __construct(DataCenter $dataCenter)
	{
		$this->dc = $dataCenter;
	}
	
	function __destruct()
	{
		
    }

    public function GetNextPreviousNews($newsId, $locationId) {
	    /*
	    $qrySample =
            "SELECT Id FROM n_news_news
                WHERE (
                    
                    Id = IFNULL((SELECT MIN(Id) FROM n_news_news WHERE Id > ".$newsId."),0) 
                    OR  Id = IFNULL((SELECT MAX(Id) FROM n_news_news WHERE Id < ".$newsId."),0)
                )
            ";
	    */

	    $qry =
            "SELECT n.Id
            FROM n_news_news n INNER JOIN
            n_news_publish_locations pl ON (n.Id = pl.NewsId) INNER JOIN 
            n_news_templates t ON ( t.Id = n.TemplateId ) 
            WHERE (
                n.Id = IFNULL((
                    SELECT MIN(n1.Id)
                    FROM n_news_news n1 INNER JOIN
                    n_news_publish_locations pl ON (n1.Id = pl.NewsId) INNER JOIN 
                    n_news_templates t ON ( t.Id = n1.TemplateId ) 
                    WHERE n1.Id > ".$newsId." AND n1.Active = 1 AND t.Name <> 'URL' AND pl.LocationCode = '$locationId'
                    ), 0)
                OR n.Id = IFNULL((
                    SELECT MAX(n2.Id)
                    FROM n_news_news n2 INNER JOIN
                    n_news_publish_locations pl ON (n2.Id = pl.NewsId) INNER JOIN 
                    n_news_templates t ON ( t.Id = n2.TemplateId ) 
                    WHERE n2.Id < ".$newsId." AND n2.Active = 1 AND t.Name <> 'URL' AND pl.LocationCode = '$locationId'
                    ), 0)
            )
            AND n.Active = 1 AND t.Name <> 'URL' AND pl.LocationCode = '$locationId'";

	    $dTable = $this->dc->ExecuteQuery($qry, true);

	    $next = 0;
	    $previous = 0;

	    foreach ($dTable->Rows as $row) {
	        if($row->Id < $newsId) $previous = $row->Id;

            if($row->Id > $newsId) $next = $row->Id;
        }

	    return array("previous" => $previous, "next" => $next);
    }
	
	public function GetNews($newsId, $newsType, $fromDate, $toDate, $approvedById, $offset = 0, $recordsPerPage = 1, $active = -1, $userId)
	{
		$newsId		  = (int)$newsId;
		$approvedById = (int)$approvedById;
		$active		  = (int)$active;
		$offset		  = (int)$offset;
		
		/*$qry = "
			SELECT n.Id, TemplateId, t.Name Template, Date, ShowDate, REPLACE(Heading, '\'\'', '\'') Heading, REPLACE(Subheading, '\'\'', '\'') Subheading, NewsType, 
				ShowHeading, IFNULL(n_users2.Title, '') ApprovedBy, NewsIcon,
				CASE WHEN n.Active = 1 THEN 'Yes' ELSE 'No' END Active, n_users1.Title UserTitle,
				SmallImageTitle, LargeImageTitle
			FROM n_news_news n INNER JOIN
				n_news_templates t ON t.Id = TemplateId INNER JOIN
				n_news_contents nc ON nc.NewsId = n.Id INNER JOIN
				n_users n_users1 ON n.UserId = n_users1.Id LEFT JOIN
				n_users n_users2 ON n.ApprovedById = n_users2.Id 
			WHERE 1=1 ";*/
		
		
		$qry = "
			SELECT n.Id, TemplateId, t.Name Template, Date, ShowDate, REPLACE(n.Title, '\'\'', '\'') Title, REPLACE(Heading, '\'\'', '\'') Heading, 
				REPLACE(Subheading, '\'\'', '\'') Subheading, REPLACE(Subheading2, '\'\'', '\'') Subheading2, NewsType, NewsFor,
				ShowHeading, IFNULL(n_users2.Title, '') ApprovedBy, NewsIcon, NewsIconLink,
				CASE WHEN n.Active = 1 THEN 'Yes' ELSE 'No' END Active, n_users1.Title UserTitle,
				SmallImageTitle, LargeImageTitle, OpenAccess, Archived, DATE_FORMAT(CreateDate, '%d-%m-%Y %H:%i') CreateDate
			FROM n_news_news n INNER JOIN
				n_news_templates t ON t.Id = TemplateId LEFT JOIN
				n_news_contents nc ON nc.NewsId = n.Id INNER JOIN
				n_users n_users1 ON n.UserId = n_users1.Id LEFT JOIN
				n_users n_users2 ON n.ApprovedById = n_users2.Id 
			WHERE 1=1 ";
		
		#if user not admin
		if ( defined("IS_USER_ADMIN") && IS_USER_ADMIN == 0)
		{
			$qry .= " AND n.UserId = ". $userId;
		}
		
		
		if( $active > -1 )
			$qry .= " AND n.Active = ". $active;
		
		if( $newsId > 0 )
			$qry .= " AND n.Id = ". $newsId;
		
		if( strlen($newsType) > 0 )
			$qry .= " AND NewsType = '". $newsType . "'";
		
		if( strlen($fromDate) > 0 )
			$qry .= " AND Date >= '". $fromDate . "'";
		
		if( strlen($toDate) > 0 )
			$qry .= " AND Date <= '". $toDate . "'";
		
		if( $approvedById > 0 )
			$qry .= " AND ApprovedById = ". $approvedById;
		
		$qry .= " ORDER BY CreateDate DESC LIMIT ".$offset.", ".$recordsPerPage;
		
		//echo "<!--".$qry."-->";
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	
	public function SaveNews($templateId, $date, $showDate, $title, $heading, $subHeading, $subHeading2, $newsType, $newsFor, $showHeading, $active, $userId, $txtNewsIconLink, $openAccess, $archived)
	{
		$newsFor  = (int)$newsFor;
		$active   = (int)$active;
		$userId   = (int)$userId;
		$showDate = (int)$showDate;
		$openAccess  = (int)$openAccess;
		$archived	 = (int)$archived;
		$approvedById = 0;
		
		$title	 	= $this->toString( $title );
		$heading	= $this->toString( $heading );
		$subHeading = $this->toString( $subHeading );
		
		
		$qry = 
			"INSERT INTO n_news_news (TemplateId, Date, ShowDate, Title, Heading, Subheading, Subheading2, NewsType, NewsFor, ShowHeading, CreateDate, ApprovedById, NewsIcon, NewsIconLink, OpenAccess, Archived, Active, UserId) 
			 VALUES (?,?,?,?,?,?,'".$subHeading2."',?,?,?,NOW(),?,?,?,?,?,?,?)";
		
		$params = array(
			array("datatype"=>"i", "value"=>$templateId),
			array("datatype"=>"s", "value"=>$date),
			array("datatype"=>"i", "value"=>$showDate),
			array("datatype"=>"s", "value"=>$title),
			array("datatype"=>"s", "value"=>$heading),
			array("datatype"=>"s", "value"=>$subHeading),
			//array("datatype"=>"s", "value"=>$subHeading2),
			array("datatype"=>"s", "value"=>$newsType),
			array("datatype"=>"i", "value"=>$newsFor),
			array("datatype"=>"i", "value"=>$showHeading),
			array("datatype"=>"i", "value"=>$approvedById),
			array("datatype"=>"s", "value"=>App::$logoUrl400x266),
			array("datatype"=>"s", "value"=>$txtNewsIconLink),
			array("datatype"=>"i", "value"=>$openAccess),
			array("datatype"=>"i", "value"=>$archived),
			array("datatype"=>"i", "value"=>$active),
			array("datatype"=>"i", "value"=>$userId)
		);
		/*echo $qry;
		echo "<br /><pre>";
		var_dump($params);
		echo "</pre>";*/
		
		return $this->dc->ExecuteNonQuery($qry, $params);
	}
	
	public function UpdateNews($newsId, $templateId, $date, $showDate, $title, $heading, $subHeading, $subHeading2, $newsType, $newsFor, $showHeading, $newsIcon, $txtNewsIconLink, $openAccess, $archived)
	{
		$newsId = (int)$newsId;
		$active = (int)$active;
		$userId = (int)$userId;
		$newsIcon    = (int)$newsIcon;
		$showHeading = (int)$showHeading;
		$showDate	 = (int)$showDate;
		$openAccess  = (int)$openAccess;
		$archived	 = (int)$archived;
		
		
		$title	 	= $this->toString( $title );
		$heading 	= $this->toString( $heading );
		$subHeading = $this->toString( $subHeading );
		
		
		$qry = 
			"UPDATE n_news_news SET TemplateId=?, Date=?, ShowDate=?, Title=?, Heading=?, Subheading=?, Subheading2='".$subHeading2."', NewsType=?, NewsFor=?, ShowHeading=?, NewsIconLink=?, OpenAccess=?, Archived=?";
		
		#for default news icon
		if ($newsIcon == 1)		
			$qry .= ", NewsIcon=?";
		
		$qry .= " WHERE Id=?";
		
		$params = array(
			array("datatype"=>"i", "value"=>$templateId),
			array("datatype"=>"s", "value"=>$date),
			array("datatype"=>"i", "value"=>$showDate),
			array("datatype"=>"s", "value"=>$title),
			array("datatype"=>"s", "value"=>$heading),
			array("datatype"=>"s", "value"=>$subHeading),
			//array("datatype"=>"s", "value"=>$subHeading2),
			array("datatype"=>"s", "value"=>$newsType),
			array("datatype"=>"i", "value"=>$newsFor),
			array("datatype"=>"i", "value"=>$showHeading),
			array("datatype"=>"s", "value"=>$txtNewsIconLink),
			array("datatype"=>"i", "value"=>$openAccess),
			array("datatype"=>"i", "value"=>$archived)
		);
		
		#for default news icon
		if ($newsIcon == 1)	
			$params[] = array("datatype"=>"s", "value"=>App::$logoUrl400x266);
		
		$params[] = array("datatype"=>"i", "value"=>$newsId);
		
		return $this->dc->ExecuteNonQuery($qry, $params);
	}
	
	
	
	public function SearchNews($searchText, $offset = 0, $recordsPerPage = 1, $active = -1, $userId)
	{
		$active = (int)$active;
		$offset = (int)$offset;
		$userId = (int)$userId;
		
		$searchText = $this->toString( $searchText );
		
		$qry = "
			FROM n_news_news n INNER JOIN
				n_news_templates t ON t.Id = TemplateId INNER JOIN
				n_users n_users1 ON n.UserId = n_users1.Id LEFT JOIN
				n_users n_users2 ON n.ApprovedById = n_users2.Id
			WHERE 1=1 ";
		
		#if user not admin
		if ( defined("IS_USER_ADMIN") && IS_USER_ADMIN == 0)
		{
			$qry .= " AND n.UserId = ". $userId;
		}
		
		
		if( $active > -1 )
			$qry .= " AND n.Active = ". $active;
		
		if( strlen($searchText) > 0 ) {
			if ( intval( trim($searchText) ) > 0 )
				$qry .=  " AND n.Id 		 = ". intval( trim($searchText) );
			else
			$qry .= " AND (n.Heading LIKE '%". $searchText . "%'
					 OR n.Subheading LIKE '%". $searchText . "%'
					 OR t.Name       LIKE '%". $searchText . "%'
					 OR NewsType     LIKE '%". $searchText . "%')";
			
		
		}
		
		$counts = (int)$this->dc->GetObject("SELECT COUNT(*) ".$qry);
		
		$qry = "SELECT DISTINCT n.Id, TemplateId, t.Name Template, Date, REPLACE(Heading, '\'\'', '\'') Heading, REPLACE(Subheading, '\'\'', '\'') Subheading, NewsType, ShowHeading, IFNULL(n_users2.Title, '') ApprovedBy, NewsIcon,
				CASE WHEN n.Active = 1 THEN 'Yes' ELSE 'No' END Active, n_users1.Title UserTitle, CreateDate, OpenAccess, Archived " . $qry;
		
		$qry .= " ORDER BY CreateDate DESC LIMIT ".$offset.", ".$recordsPerPage;
		
		//echo $qry;
		
		$dTable = $this->dc->ExecuteQuery($qry, true);
		
		return array($dTable, $counts);
	}
	
	
	
	public function IsNewsHeadingExists($newsId, $heading)
	{
		$newsId = (int)$newsId;
		$heading = $this->toString( $heading );
		
		$qry = 
			"SELECT COUNT(*) FROM n_news_news
			 WHERE Active=1 AND Heading='".$heading."' ";
		
		if ($newsId > 0)
		{
			$qry .= "AND Id<>". $newsId;
		}
		
		return $this->dc->GetObject($qry);
	}
	
	
	
	public function SetActiveNews($newsId, $active, $userId)
	{
		$newsId = (int)$newsId;
		$active = (int)$active;
		$userId = (int)$userId;
		
		$qry = 
			"UPDATE n_news_news SET Active=?, UserId=?
			 WHERE Id=?";
		
		$params = array(
			array("datatype"=>"i", "value"=>$active),
			array("datatype"=>"i", "value"=>$userId),
			array("datatype"=>"i", "value"=>$newsId)
		);
		//echo $qry;
		return $this->dc->ExecuteNonQuery($qry, $params);
	}
	
	
	public function GetNewsCounts($active, $userId)
	{
		$active = (int)$active;
		$userId = (int)$userId;
		
		
		$qry = "SELECT COUNT(*) FROM n_news_news WHERE Active = " . $active;
		
		#if user not admin
		if ( defined("IS_USER_ADMIN") && IS_USER_ADMIN == 0)
		{
			$qry .= " AND UserId = ". $userId;
		}
		
		return (int)$this->dc->GetObject($qry);
	}
	
	
	public function GetNewsContents( $newsId )
	{
		$newsId = (int)$newsId;
		
		$qry = "
			SELECT n.Id, t.Name Template, Date, ShowDate, REPLACE(n.Title, '\'\'', '\'') Title, REPLACE(Heading, '\'\'', '\'') Heading, 
				REPLACE(Subheading, '\'\'', '\'') Subheading, REPLACE(Subheading2, '\'\'', '\'') Subheading2, NewsType, NewsFor,
				ShowHeading, IFNULL(n_users.Title, '') ApprovedBy, NewsIcon, 
				CASE WHEN n.Active = 1 THEN 'Yes' ELSE 'No' END Active, n.ShowSignature,
				IFNULL(c.SmallImageTitle,'') SmallImageTitle, IFNULL(c.LargeImageTitle,'') LargeImageTitle,
				IFNULL(c.Content1,'') Content1, IFNULL(c.Content2,'') Content2, IFNULL(c.Content3,'') Content3, 
				IFNULL(c.Content4,'') Content4, IFNULL(c.Content5,'') Content5, IFNULL(c.Content6,'') Content6 
			FROM n_news_news n LEFT JOIN
				n_news_contents c ON c.NewsId = n.Id INNER JOIN
				n_news_templates t ON t.Id = n.TemplateId LEFT JOIN
				n_users ON n.ApprovedById = n_users.Id
			WHERE n.Active = 1 AND n.Id = " . $newsId;
		
		//echo $qry;
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	
	public function GetNewsFiles( $newsId, $fileId = 0 )
	{
		$newsId = (int)$newsId;
		$fileId = (int)$fileId;
		
		$qry = "
			SELECT nf.Id, nf.NewsId, n.Heading, FileName1, FileType1, Width1, Height1, Title1, FileName2, FileType2, Width2, Height2, Title2,
					IFNULL(c.SmallImageTitle,'') SmallImageTitle, IFNULL(c.LargeImageTitle,'') LargeImageTitle, IFNULL(nf.Title1, '') Title1, IFNULL(nf.Title2, '') Title2
			FROM n_news_files nf INNER JOIN
				 n_news_news n ON n.Id = nf.NewsId LEFT JOIN
				 n_news_contents c ON c.NewsId = n.Id
			WHERE 1=1";
			
		if ($fileId > 0)
			$qry .= " AND nf.Id = " . $fileId;
			
		if ($newsId > 0)
			$qry .= " AND nf.NewsId = " . $newsId;
		
		
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	
	public function GetNewsFiles__( $newsId, $fileId = 0 )
	{
		$newsId = (int)$newsId;
		$fileId = (int)$fileId;
		
		$qry = "
			SELECT nf.Id, n.Id NewsId, n.Heading, FileName1, FileType1, Width1, Height1, Title1, FileName2, FileType2, Width2, Height2, Title2,
					IFNULL(c.SmallImageTitle,'') SmallImageTitle, IFNULL(c.LargeImageTitle,'') LargeImageTitle
			FROM n_news_news n LEFT JOIN 
				n_news_contents c ON c.NewsId = n.Id LEFT JOIN
				n_news_files nf ON n.Id = nf.NewsId 
			WHERE 1=1";
			
		if ($fileId > 0)
			$qry .= " AND nf.Id = " . $fileId;
			
		if ($newsId > 0)
			$qry .= " AND n.Id = " . $newsId;
		
		//echo $qry;
		
		return $this->dc->ExecuteQuery($qry, true);
	}


    public function GetPublishNews($searchText = "", $offset, $recordsPerPage, $userId)
	{
		$offset = (int)$offset;
		$userId = (int)$userId;
		$recordsPerPage = (int)$recordsPerPage;
		
		$searchText = $this->toString( $searchText );
		
		$qry = "
			FROM n_news_news n LEFT JOIN
				v_news_publish_locations pl ON pl.NewsId = n.Id INNER JOIN
				n_news_templates nt ON nt.Id = n.TemplateId LEFT JOIN
				n_users u ON u.Id = pl.UserId
			WHERE n.Active = 1 ";
		
		
		#if user not admin
		if ( defined("IS_USER_ADMIN") && IS_USER_ADMIN == 0)
		{
			$qry .= " AND n.UserId = ". $userId;
		}
		
		
		if( strlen($searchText) > 0 )
			$qry .= " AND (Heading 	 LIKE '%". $searchText . "%'
					 OR n.Id 		 LIKE '%". $searchText . "%'
					 OR n.Subheading LIKE '%". $searchText . "%'
					 OR nt.Name      LIKE '%". $searchText . "%'
					 OR NewsType     LIKE '%". $searchText . "%')";
		
		
		$counts = (int)$this->dc->GetObject("SELECT COUNT(*) ".$qry);
		
		
		$qry = "SELECT n.Id, DATE_FORMAT(Date,'%m/%d/%Y') Date, REPLACE(Heading, '\'\'', '\'') Heading, NewsType, nt.Name Template, IFNULL(Locations, 'Pending') PublishLocations, IFNULL(u.Title, '') Title "
			   . $qry
			   . " ORDER BY CreateDate DESC"
			   . " LIMIT " .$offset.", ".$recordsPerPage;
		
		
		//echo $qry;
		$dTable = $this->dc->ExecuteQuery($qry, true);
		
		return array( $counts, $dTable );
	}
	
	
	public function GetPublishNewsLocations( $newsId )
	{
		$newsId = (int)$newsId;
		
		$qry = "SELECT CONCAT(REPLACE(Heading, '\'\'', '\''), ' (', NewsType, ')') heading FROM n_news_news WHERE Id = " . $newsId;
		$heading = $this->dc->GetObject($qry);
		
		$qry = "SELECT
				  Id, 
				  IFNULL((SELECT NewsId 
					  FROM n_news_publish_locations 
					  WHERE NewsId = ".$newsId." AND LocationCode = l.Code), 0) AS NewsId,
				  Location, Code, `Group`, SubGroup
				FROM n_news_locations l
				ORDER BY FIELD( l.Group,  'Principal',  'News',  'Alumni',  'ParentPortal',  'BoarderPortal',  'StudentPortal',  'StaffPortal',  'TestLinks' ), l.Id";
		
		//echo $qry;
		
		$dTable = $this->dc->ExecuteQuery($qry, true);
		
		return array($heading, $dTable);
	}
	
	
	public function UpdateNewsLocations($newsId, $locationCodes, $userId)
	{
		$newsId = (int)$newsId;
		$userId = (int)$userId;
		
		if ( is_array($locationCodes) )
			$locationCodes = implode(',', $locationCodes);
		else
			$locationCodes = 0;
		
		
		$qry = "DELETE FROM n_news_publish_locations WHERE NewsId=? AND LocationCode NOT IN(".$locationCodes.")";
		
		$params = array(
				array("datatype"=>"i", "value"=>$newsId)
			);
		
		if ( $this->dc->ExecuteNonQuery($qry, $params) )
		{
			$qry = 
				"INSERT INTO n_news_publish_locations (NewsId, LocationCode, PublishDate, UserId) 
				 SELECT ".$newsId.", l.Id, Now(), ".$userId." FROM n_news_locations l 
				 WHERE 
					l.Code IN(".$locationCodes.") AND 
					l.Code NOT IN(SELECT LocationCode FROM n_news_publish_locations WHERE NewsId=? AND LocationCode IN(".$locationCodes."))";
			
			$params = array(
				array("datatype"=>"i", "value"=>$newsId)
			);
			
			return $this->dc->ExecuteNonQuery($qry, $params);
			
		}
		
	}
	
	
	public function UpdateNewsContents($newsId, $smallImageTitle, $largeImageTitle, $content1, $content2, $content3, $content4, $content5, $content6)
	{
		$newsId = (int)$newsId;
		
		if ( $this->IsNewsContentExists( $newsId ) )
		{
			$qry = 
				"UPDATE n_news_contents 
				SET 
					SmallImageTitle=?, LargeImageTitle=?, Content1='".$content1."', Content2='".$content2."', 
					Content3=?, Content4=?, Content5=?, Content6=?
				 WHERE NewsId=?";
			
			$params = array(
				array("datatype"=>"s", "value"=>$smallImageTitle),
				array("datatype"=>"s", "value"=>$largeImageTitle),
				//array("datatype"=>"s", "value"=>$content1),
				//array("datatype"=>"s", "value"=>$content2),
				array("datatype"=>"s", "value"=>$content3),
				array("datatype"=>"s", "value"=>$content4),
				array("datatype"=>"s", "value"=>$content5),
				array("datatype"=>"s", "value"=>$content6),
				array("datatype"=>"i", "value"=>$newsId)
			);
			//echo $qry;
			//exit;
			return $this->dc->ExecuteNonQuery($qry, $params);
		}
		else
		{
			return $this->AddNewsContents( $newsId, $smallImageTitle, $largeImageTitle, $content1, $content2, $content3, $content4, $content5, $content6 );
		}
	}
	
	
	private function AddNewsContents($newsId, $smallImageTitle, $largeImageTitle, $content1, $content2, $content3, $content4, $content5, $content6)
	{
		$newsId = (int)$newsId;
		
		$qry = 
			"INSERT INTO n_news_contents (
				NewsId, SmallImageTitle, LargeImageTitle, 
				Content1, Content2, Content3, Content4, Content5, Content6)
			 VALUES(?,?,?,'".$content1."','".$content2."',?,?,?,?)";
		
		$params = array(
			array("datatype"=>"i", "value"=>$newsId),
			array("datatype"=>"s", "value"=>$smallImageTitle),
			array("datatype"=>"s", "value"=>$largeImageTitle),
			//array("datatype"=>"s", "value"=>$content1),
			//array("datatype"=>"s", "value"=>$content2),
			array("datatype"=>"s", "value"=>$content3),
			array("datatype"=>"s", "value"=>$content4),
			array("datatype"=>"s", "value"=>$content5),
			array("datatype"=>"s", "value"=>$content6)
		);
		
		return $this->dc->ExecuteNonQuery($qry, $params);
		
	}
	
	private function IsNewsContentExists($newsId)
	{
		$newsId = (int)$newsId;
		
		$qry = "SELECT COUNT(*) FROM n_news_contents WHERE NewsId = " . $newsId;
		
		if ((int)$this->dc->GetObject($qry) > 0)
			return true;
		else return false;
		
	}
	
	function AddNewsFile($newsId, $fileName1, $fileType1, $width1, $height1, $title1)
	{
		$newsId = (int)$newsId;
		$width1 = (int)$width1;
		$height1= (int)$height1;
		$width2 = 0;
		$height2= 0;
		
		$qry = 
			"INSERT INTO n_news_files (NewsId, FileName1, FileType1, Width1, Height1, Title1, FileName2, FileType2, Width2, Height2, Title2)
			 VALUES(?,?,?,?,?,?,?,?,?,?,?)";
		
		$params = array(
			array("datatype"=>"i", "value"=>$newsId),
			array("datatype"=>"s", "value"=>$fileName1),
			array("datatype"=>"s", "value"=>$fileType1),
			array("datatype"=>"i", "value"=>$width1),
			array("datatype"=>"i", "value"=>$height1),
			array("datatype"=>"s", "value"=>$title1),
			array("datatype"=>"s", "value"=>""),
			array("datatype"=>"s", "value"=>""),
			array("datatype"=>"i", "value"=>$width2),
			array("datatype"=>"i", "value"=>$height2),
			array("datatype"=>"s", "value"=>"")
		);
		
		return $this->dc->ExecuteNonQuery($qry, $params);
	}
	
	
	function AddNewsFile2($newsId, $fileName2, $fileType2, $width2, $height2, $title2)
	{
		$newsId = (int)$newsId;
		$width2 = (int)$width2;
		$height2= (int)$height2;
		
		$qry = "SELECT Id FROM n_news_files WHERE FileName2 = '' AND NewsId = " . $newsId . " LIMIT 0,1";
		
		$id = (int)$this->dc->GetObject($qry);
		
		if ( $id > 0 )
		{
			$qry = 
				"UPDATE n_news_files SET FileName2=?, FileType2=?, Width2=?, Height2=?, Title2=?
				 WHERE Id=?";
			
			$params = array(
				array("datatype"=>"s", "value"=>$fileName2),
				array("datatype"=>"s", "value"=>$fileType2),
				array("datatype"=>"i", "value"=>$width2),
				array("datatype"=>"i", "value"=>$height2),
				array("datatype"=>"s", "value"=>$title2),
				array("datatype"=>"i", "value"=>$id)
			);
			
			return $this->dc->ExecuteNonQuery($qry, $params);
		}
		else
		{
			return "Can not updated.";
		}
	}
	
	
	
	function AddNewsIcon($newsId, $newsIcon)
	{
		$newsId = (int)$newsId;
		
		$qry = 
			"SELECT NewsIcon FROM n_news_news 
			 WHERE Id=". $newsId;
		
		$newsIcon_ = $this->dc->GetObject($qry);
		//echo $logoUrl;
		#if user change icon from old icon than we delete old icon file
		if (strlen(trim($newsIcon_)) > 0 && $newsIcon_ != $logoUrl)
		{
			unlink( $newsIcon_ );
		}
		
		$qry = 
			"UPDATE n_news_news SET NewsIcon=?
			 WHERE Id=?";
		
		$params = array(
			array("datatype"=>"s", "value"=>$newsIcon),
			array("datatype"=>"i", "value"=>$newsId)
		);
		
		return $this->dc->ExecuteNonQuery($qry, $params);
	}
	
	
	function GetPublishedNewsForAlumniByLocationId( $locationId )
	{
		$locationId = (int)$locationId;
		
		$qry = 
			"SELECT DISTINCT n.Id NewsId, DATE_FORMAT(n.Date, '%d %M, %Y') Date, REPLACE(n.Title, '\'\'', '\'') Title, REPLACE(n.Heading, '\'\'', '\'') Heading, REPLACE(n.Subheading, '\'\'', '\'') Subheading, n.NewsIcon, NewsIconLink, n.NewsType, n.NewsFor, c.Content1, c.Content2 
			FROM n_news_news n INNER JOIN
				n_news_publish_locations pl ON (n.Id = pl.NewsId) LEFT JOIN
				n_news_contents c ON c.NewsId = n.Id
			WHERE n.Active = 1 AND pl.LocationCode = '" . $locationId . "' 
			ORDER BY n.Date DESC";
		//echo $qry;
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	
	function GetPublishedNewsByLocationId( $locationId, $offset = 0, $recordsPerPage = 0 )
	{
		$locationId = (int)$locationId;
		$offset		= (int)$offset;
		
		/*$qry = 
			"SELECT DISTINCT n.Id NewsId, DATE_FORMAT(n.Date, '%d %M, %Y') Date, REPLACE(n.Heading, '\'\'', '\'') Heading, REPLACE(n.Subheading, '\'\'', '\'') Subheading, n.NewsIcon, n.NewsType, '' Content1 
			FROM n_news_news n INNER JOIN
				n_news_publish_locations pl ON (n.Id = pl.NewsId)
			WHERE n.Active = 1 AND n.NewsType IN('News', 'Notice') AND pl.LocationCode = '" . $locationId . "' ";
		
		$qry .= 
			"UNION ALL
			SELECT DISTINCT n.Id NewsId, DATE_FORMAT(n.Date, '%d %M, %Y') Date, REPLACE(n.Heading, '\'\'', '\'') Heading, REPLACE(n.Subheading, '\'\'', '\'') Subheading, n.NewsIcon, n.NewsType, c.Content1 
			FROM n_news_news n INNER JOIN
				n_news_publish_locations pl ON (n.Id = pl.NewsId) INNER JOIN
				n_news_contents c ON c.NewsId = n.Id
			WHERE n.Active = 1 AND n.NewsType = 'URL' AND pl.LocationCode = '" . $locationId . "' ";
		
		$qry .= "ORDER BY Date DESC";*/
		
		$qry = 
			"SELECT DISTINCT n.Id NewsId, n.TemplateId as TemplateId, DATE_FORMAT(n.Date, '%e %M, %Y') Date, n.ShowDate, n.Date nDate, 
			REPLACE(n.Heading, '\'\'', '\'') Heading, REPLACE(n.Subheading, '\'\'', '\'') Subheading, REPLACE(n.Subheading2, '\'\'', '\'') Subheading2, 
			n.NewsIcon, n.NewsIconLink, n.NewsType, '' Content1, '' Downloadable, `NewsFor`
			FROM n_news_news n INNER JOIN
				n_news_publish_locations pl ON (n.Id = pl.NewsId) INNER JOIN 
				n_news_templates t ON ( t.Id = n.TemplateId ) 
			WHERE n.Active = 1 AND t.Name <> 'URL' AND pl.LocationCode = '" . $locationId . "' ";
		
		$qry .= 
			"UNION ALL
			SELECT  DISTINCT n.Id NewsId,  n.TemplateId as TemplateId, DATE_FORMAT(n.Date, '%e %M, %Y') Date, n.ShowDate, n.Date nDate, 
			REPLACE(n.Heading, '\'\'', '\'') Heading, REPLACE(n.Subheading, '\'\'', '\'') Subheading, REPLACE(n.Subheading2, '\'\'', '\'') Subheading2, 
			n.NewsIcon, n.NewsIconLink, n.NewsType, REPLACE(c.Content1, '\'\'', '\'') Content1, c.Content1 Downloadable, `NewsFor` 
			FROM n_news_news n INNER JOIN
				n_news_publish_locations pl ON (n.Id = pl.NewsId) INNER JOIN
				n_news_contents c ON c.NewsId = n.Id INNER JOIN 
				n_news_templates t ON ( t.Id = n.TemplateId ) 
			WHERE n.Active = 1 AND t.Name = 'URL' AND pl.LocationCode = '" . $locationId . "' ";
		
		$qry .= "ORDER BY nDate DESC, NewsId DESC ";
		
		if ( $recordsPerPage > 0 )
		{
			//echo $qry;
			$rows_count = $this->dc->GetObject( "SELECT COUNT(*) FROM (". $qry .") AS rows_count" );
			
			$qry .= "LIMIT $offset, $recordsPerPage";
			
			return array( $rows_count, $this->dc->ExecuteQuery($qry, true));
		}

		//echo "<!-- ";
		//echo $qry;
        //echo " -->";
		return $this->dc->ExecuteQuery($qry, true);
	}



    function GetPublishedNewsForNewsroom( $locationIds, $month, $year, $offset = 0, $recordsPerPage = 0, $excludeId = 0 )
    {
        $month		= (int)$month;
        $year		= (int)$year;
        $recordsPerPage = (int)$recordsPerPage;
        $offset		= (int)$offset;



        $qry =
            "SELECT DISTINCT n.Id NewsId, n.TemplateId as TemplateId, DATE_FORMAT(n.Date, '%e %M, %Y') Date, n.ShowDate, n.Date nDate, 
			REPLACE(n.Heading, '\'\'', '\'') Heading, REPLACE(n.Subheading, '\'\'', '\'') Subheading, REPLACE(n.Subheading2, '\'\'', '\'') Subheading2, 
			n.NewsIcon, n.NewsIconLink, n.NewsType, '' Content1, '' Downloadable, 
			IFNULL( CONCAT( LEFT( EXTRACTVALUE(REPLACE( REPLACE( REPLACE(c.Content1, '&quot;', '\"'), '&lsquo;', '\''), '&rsquo;', '\''), '//p'), 265), '...'), '...') Content4,
			`NewsFor`
			FROM n_news_news n INNER JOIN
				n_news_publish_locations pl ON (n.Id = pl.NewsId) INNER JOIN
                n_news_templates t ON ( t.Id = n.TemplateId ) LEFT JOIN 
                n_news_contents c ON c.NewsId = n.Id
			WHERE n.Active = 1 AND t.Name <> 'URL' AND pl.LocationCode IN(" . implode(',', $locationIds) . ") ";


        if($excludeId > 0) {
            $qry .= "AND n.Id <> $excludeId ";
        }

        if($month > 0 && $year > 0) {
            $qry .= "AND YEAR(`Date`) = $year AND MONTH(`Date`) = $month ";
        }

        $qry .=
            "UNION ALL
			SELECT  DISTINCT n.Id NewsId,  n.TemplateId as TemplateId, DATE_FORMAT(n.Date, '%e %M, %Y') Date, n.ShowDate, n.Date nDate, 
			REPLACE(n.Heading, '\'\'', '\'') Heading, REPLACE(n.Subheading, '\'\'', '\'') Subheading, REPLACE(n.Subheading2, '\'\'', '\'') Subheading2, 
			n.NewsIcon, n.NewsIconLink, n.NewsType, REPLACE(c.Content1, '\'\'', '\'') Content1, c.Content1 Downloadable, IFNULL(c.Content4, '...') Content4, `NewsFor` 
			FROM n_news_news n INNER JOIN
				n_news_publish_locations pl ON (n.Id = pl.NewsId) INNER JOIN
                n_news_templates t ON ( t.Id = n.TemplateId ) LEFT JOIN 
                n_news_contents c ON c.NewsId = n.Id
			WHERE n.Active = 1 AND t.Name = 'URL' AND pl.LocationCode IN(" . implode(',', $locationIds) . ") ";

        if($excludeId > 0) {
            $qry .= "AND n.Id <> $excludeId ";
        }

        if($month > 0 && $year > 0) {
            $qry .= "AND YEAR(`Date`) = $year AND MONTH(`Date`) = $month ";
        }

        $qry .= "ORDER BY nDate DESC, NewsId DESC ";

        if ( $recordsPerPage > 0 )
        {
            //echo $qry;
            $rows_count = $this->dc->GetObject( "SELECT COUNT(*) FROM (". $qry .") AS rows_count" );

            $qry .= "LIMIT $offset, $recordsPerPage";

            return array( $rows_count, $this->dc->ExecuteQuery($qry, true));
        }

        //echo "<!-- ";
        //echo $qry;
        //echo " -->";
        return $this->dc->ExecuteQuery($qry, true);
    }


    function GetParentMeetingsByLocationId( $locationId )
	{
		$locationId = (int)$locationId;
		
		$qry = 
			"SELECT DISTINCT n.Id NewsId, DATE_FORMAT(n.Date, '%d %M, %Y') Date, REPLACE(n.Heading, '\'\'', '\'') Heading, n.NewsIcon, n.NewsIconLink, n.NewsType, c.Content1
			FROM n_news_news n INNER JOIN
				n_news_publish_locations pl ON (n.Id = pl.NewsId) INNER JOIN
				n_news_contents c ON c.NewsId = n.Id
			WHERE n.Active = 1 AND n.NewsType = 'ParentMeeting' AND CAST(n.Date AS Date) >= CAST(Now() AS Date) AND pl.LocationCode = '" . $locationId ."'
			ORDER BY n.Date DESC";
		
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	
	function GetPublishedNews( $group, $subGroup, $location )
	{
		$qry = 
			"SELECT DISTINCT n.Id NewsId, n.TemplateId, DATE_FORMAT(n.Date, '%d %M, %Y') Date, ShowDate, REPLACE(n.Heading, '\'\'', '\'') Heading, n.Subheading2, n.NewsIcon, n.NewsIconLink, n.NewsType, '' Content1 
			FROM
				n_news_news n INNER JOIN
				n_news_publish_locations pl ON (n.Id = pl.NewsId) INNER JOIN
				n_news_locations l ON (l.Code = pl.LocationCode)
			WHERE n.Active = 1 AND n.NewsType IN('News', 'Notice') AND n.TemplateId <> 6 AND
				  l.Group = '".$group."' AND l.SubGroup = '".$subGroup."' AND l.Location = '".$location."' ";
		
		$qry .= 
			"UNION ALL
			SELECT DISTINCT n.Id NewsId, n.TemplateId, DATE_FORMAT(n.Date, '%d %M, %Y') Date, ShowDate, REPLACE(n.Heading, '\'\'', '\'') Heading, n.Subheading2, n.NewsIcon, n.NewsIconLink, n.NewsType, c.Content1 
			FROM
				n_news_news n INNER JOIN
				n_news_publish_locations pl ON (n.Id = pl.NewsId) INNER JOIN
				n_news_locations l ON (l.Code = pl.LocationCode) INNER JOIN
				n_news_contents c ON c.NewsId = n.Id
			WHERE n.Active = 1 AND n.TemplateId = 6 AND l.Group = '".$group."' AND l.SubGroup = '".$subGroup."' AND l.Location = '".$location."' ";
		
		$qry .= "ORDER BY Date DESC";
		
		//echo $qry;
		
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	
	function GetParentMeetings( $group, $subGroup, $location )
	{
		$qry = 
			"SELECT DISTINCT n.Id NewsId, DATE_FORMAT(n.Date, '%d %M, %Y') Date, REPLACE(n.Heading, '\'\'', '\'') Heading, n.Subheading2, n.NewsIcon, n.NewsIconLink, n.NewsType, c.Content1
			FROM n_news_news n INNER JOIN
				n_news_publish_locations pl ON (n.Id = pl.NewsId) INNER JOIN
				n_news_locations l ON (l.Code = pl.LocationCode) INNER JOIN
				n_news_contents c ON c.NewsId = n.Id
			WHERE n.Active = 1 AND n.NewsType = 'ParentMeeting' AND CAST(n.Date AS Date) >= CAST(Now() AS Date) AND 
				  l.Group = '".$group."' AND l.SubGroup = '".$subGroup."' AND l.Location = '".$location."'
			ORDER BY n.Date DESC";
		
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	
	function GetDetailedPublishedNewsByLocationId( $locationId )
	{
		$locationId = (int)$locationId;
		
		$qry = 
			"SELECT DISTINCT n.Id NewsId, n.TemplateId as TemplateId, t.Name Template, DATE_FORMAT(n.Date, '%d %b, %Y') Date, n.Date nDate, 
			REPLACE(n.Heading, '\'\'', '\'') Heading, REPLACE(n.Subheading, '\'\'', '\'') Subheading, REPLACE(n.Subheading2, '\'\'', '\'') Subheading2, 
			n.NewsIcon, n.NewsIconLink, n.NewsType, '' Content1, NewsFor, u1.Title CreatedBy, u2.Title PublishedBy, vpl.Locations, pl.UserId 
			FROM n_news_news n INNER JOIN
				n_news_publish_locations pl ON (n.Id = pl.NewsId) INNER JOIN 
				n_news_templates t ON ( t.Id = n.TemplateId ) INNER JOIN 
				n_users u1 ON ( u1.Id = n.UserId ) INNER JOIN 
				n_users u2 ON ( u2.Id = pl.UserId ) LEFT JOIN
				v_news_publish_locations vpl ON vpl.NewsId = n.Id  
			WHERE n.Active = 1 AND t.Name <> 'URL' AND pl.LocationCode = '" . $locationId . "' ";
		
		$qry .= 
			"UNION ALL
			SELECT  DISTINCT n.Id NewsId,  n.TemplateId as TemplateId, t.Name Template, DATE_FORMAT(n.Date, '%d %b, %Y') Date, n.Date nDate, 
			REPLACE(n.Heading, '\'\'', '\'') Heading, REPLACE(n.Subheading, '\'\'', '\'') Subheading, REPLACE(n.Subheading2, '\'\'', '\'') Subheading2, 
			n.NewsIcon, n.NewsIconLink, n.NewsType, REPLACE(c.Content1, '\'\'', '\'') Content1, NewsFor, u1.Title CreatedBy, u2.Title PublishedBy, vpl.Locations, pl.UserId 
			FROM n_news_news n INNER JOIN
				n_news_publish_locations pl ON (n.Id = pl.NewsId) INNER JOIN
				n_news_contents c ON c.NewsId = n.Id INNER JOIN 
				n_news_templates t ON ( t.Id = n.TemplateId ) INNER JOIN 
				n_users u1 ON ( u1.Id = n.UserId ) INNER JOIN 
				n_users u2 ON ( u2.Id = pl.UserId ) LEFT JOIN
				v_news_publish_locations vpl ON vpl.NewsId = n.Id   
			WHERE n.Active = 1 AND t.Name = 'URL' AND pl.LocationCode = '" . $locationId . "' ";
		
		$qry .= "ORDER BY nDate DESC, NewsId DESC ";
		
		//echo $qry;
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	
	function toString( $str )
	{
		if ( strlen( $str ) == 0 ) return $str;
		
		$tokens = array("’","\'","'");
		
		//$str = stripslashes( $str );
		$str = str_replace('\"','"',$str);
		$str = str_replace($tokens,"'",$str);
		
		return addslashes( $str );
		
		
		
		
		/*
		if(is_array($inp)) 
			return array_map(__METHOD__, $inp); 
	
		if(!empty($inp) && is_string($inp)) { 
			return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp); 
		} 
		
		return $inp;
		*/
	}
}
?>
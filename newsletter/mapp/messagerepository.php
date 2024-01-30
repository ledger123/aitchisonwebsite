<?php
class MessageRepository
{
	private $dc;
	
	function __construct(DataCenter $dataCenter)
	{
		$this->dc = $dataCenter;
	}
	
	function __destruct()
	{
		
    }
	
	public function GetAll()
	{
		$qry = "SELECT
					app_messages.Id, MsgDateTime, app_messages.Subject, Message, ServerMessageId, n_users.Title AS UserTitle
				FROM
					n_users INNER JOIN 
					app_messages ON (n_users.Id = app_messages.UserId)
				ORDER BY MsgDateTime DESC";
		
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	public function Save($data, $messageId, $userId)
	{
		$qry = 
			"INSERT INTO app_messages (`SenderId`, `MsgDateTime`, `Subject`, `Message`, `Url`, `ServerMessageId`, `UserId`) 
			 VALUES (?,?,?,?,?,?,?)";
		
		$params = array(
			array("datatype"=>"i", "value"=> "1"),
			array("datatype"=>"s", "value"=> $data['timestamp'] ),
			array("datatype"=>"s", "value"=> $data['title'] ),
			array("datatype"=>"s", "value"=> $data['body'] ),
			array("datatype"=>"s", "value"=> $data['url'] ),
			array("datatype"=>"s", "value"=> $messageId),
			array("datatype"=>"i", "value"=> $userId)
		);

		return $this->dc->ExecuteNonQuery($qry, $params);

		/*
		$qry = 
			"INSERT INTO app_messages (`SenderId`, `MsgDateTime`, `Subject`, `Message`, `ServerMessageId`, `UserId`) 
			 VALUES (1,'".$data['timestamp']."','".$data['title']."','".$data['body']."',$messageId,$userId)";
		
		echo "<pre>";
		var_dump($params);
		echo "</pre>";

		echo $qry;
		//return $this->dc->ExecuteNonQuery1($qry);
		*/

		
	}
	
	
	public function GetNewsEvents($id)
	{
		$id = (int)$id;
		
		$qry = "SELECT
					n.Id, PostDate, NewsType, NewsUrl, Image, Heading, SubHeading, n_users.Title AS UserTitle,
					CASE WHEN n.Active = 1 THEN 'Yes' ELSE 'No' END Active
				FROM
					n_users INNER JOIN 
					app_newsandevents n ON (n_users.Id = n.UserId)";
		
		if( $id > 0 )
			$qry .= " WHERE n.Id = " . $id;
		
		$qry .= " ORDER BY n.Id DESC";
		
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	
	public function IsNewsHeadingExists($newsEventsId, $heading)
	{
		$newsEventsId = (int)$newsEventsId;
		$heading = $this->toString( $heading );
		
		$qry = 
			"SELECT COUNT(*) FROM app_newsandevents
			 WHERE Active=1 AND Heading='".$heading."' ";
		
		if ($newsEventsId > 0)
		{
			$qry .= "AND Id<>". $newsEventsId;
		}
		
		return $this->dc->GetObject($qry);
	}
	
	
	public function UpdateNewsEvents($newsEventsId, $postDate, $newsType, $newsUrl, $image, $heading, $subHeading, $active)
	{
		$newsEventsId = (int)$newsEventsId;
		
		$heading 	= $this->toString( $heading );
		$subHeading = $this->toString( $subHeading );
		
		if ( $active == "Yes" ) $active = "1";
		elseif ( $active == "No" ) $active = "0";
		
		$qry = 
			"UPDATE app_newsandevents SET PostDate=?, NewsType=?, NewsUrl=?, Image=?, Heading=?, Subheading=?, Active=? WHERE Id=?";
		
		$params = array(
			array("datatype"=>"s", "value"=>$postDate),
			array("datatype"=>"s", "value"=>$newsType),
			array("datatype"=>"s", "value"=>$newsUrl),
			array("datatype"=>"s", "value"=>$image),
			array("datatype"=>"s", "value"=>$heading),
			array("datatype"=>"s", "value"=>$subHeading),
			array("datatype"=>"i", "value"=>$active),
			array("datatype"=>"i", "value"=>$newsEventsId)
		);
		
		
		return $this->dc->ExecuteNonQuery($qry, $params);
	}
	
	
	public function SaveNewsEvents($postDate, $newsUrl, $newsType, $image, $heading, $subHeading, $active, $userId)
	{
		$userId   = (int)$userId;
		
		$archived = 0;
		
		$heading	= $this->toString( $heading );
		$subHeading = $this->toString( $subHeading );
		
		if ( $active == "Yes" ) $active = "1";
		elseif ( $active == "No" ) $active = "0";
		
		$qry = 
			"INSERT INTO app_newsandevents (PostDate, NewsType, NewsUrl, Image, Heading, Subheading, Active, Archived, UserId) 
			 VALUES (?,?,?,?,?,?,?,?,?)";
		
		$params = array(
			array("datatype"=>"s", "value"=>$postDate),
			array("datatype"=>"s", "value"=>$newsType),
			array("datatype"=>"s", "value"=>$newsUrl),
			array("datatype"=>"s", "value"=>$image),
			array("datatype"=>"s", "value"=>$heading),
			array("datatype"=>"s", "value"=>$subHeading),
			array("datatype"=>"i", "value"=>$active),
			array("datatype"=>"i", "value"=>$archived),
			array("datatype"=>"i", "value"=>$userId)
		);
		//echo $qry;
		return $this->dc->ExecuteNonQuery($qry, $params);
	}
	
	
	public function ArchiveNewsEvents($id, $userId)
	{
		$id = (int)$id;
		
		#convert into 1 to 0, 0 to 1 = (3+Archived)%2
		
		$qry = 
			"UPDATE app_newsandevents SET Archived=(3+Archived)%2, UserId=? WHERE Id=?";
		
		$params = array(
			array("datatype"=>"i", "value"=>$userId),
			array("datatype"=>"i", "value"=>$id)
		);
		
		
		return $this->dc->ExecuteNonQuery($qry, $params);
	}
	
	
	public function SearchNewsEvents()
	{
		$id = (int)$id;
		
		$qry = "FROM
					n_users INNER JOIN 
					app_newsandevents n ON (n_users.Id = n.UserId)";
		
		$counts = (int)$this->dc->GetObject("SELECT COUNT(*) ".$qry);
		
		
		$qry = "SELECT
					n.Id, PostDate, NewsType, NewsUrl, Image, Heading, SubHeading, Archived, n_users.Title AS UserTitle,
					CASE WHEN n.Active = 1 THEN 'Yes' ELSE 'No' END Active ". $qry;
		
		$qry .= " ORDER BY n.Id DESC";
		
		$dTable = $this->dc->ExecuteQuery($qry, true);
		
		return array($dTable, $counts);
	}
	
	public function SearchNewsEvents2($newsType)
	{
		$newsType = (int)$newsType;
		
		switch($newsType)
		{
			case 1: $newsType = "News"; break;
			case 2: $newsType = "Notice"; break;
			case 3: $newsType = "Letter"; break;
			case 4: $newsType = "Alumni"; break;
		}
		
		$qry = "SELECT
					NewsUrl newsurl, Image img, Heading heading, SubHeading subheading
				FROM
					app_newsandevents n
				WHERE Archived = 0 AND Active = 1 AND n.NewsType='". $newsType ."'
				ORDER BY n.Id DESC";
		/*
		$params = array(
			array("datatype"=>"s", "value"=>$newsType)
		);*/
		
		//echo $qry;
		
		//return $this->dc->ExecuteParamQuery($qry, $params);
		
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	function toString( $str )
	{
		$tokens = array("’","\'","'");
		
		//$str = stripslashes( $str );
		$str = str_replace('\"','"',$str);
		$str = str_replace($tokens,"'",$str);
		
		return addslashes( $str );
		
	}
}
?>
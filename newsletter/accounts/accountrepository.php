<?php

class AccountRepository
{
	private $dc;
	public $userAvatar;

	function __construct(DataCenter $dataCenter)
	{
		$this->dc = $dataCenter;
		
		$this->userAvatar = "images/user-avatar.png";
	}
	
	function __destruct()
	{
		
    }
	
	
	public function GetUsers()
	{
		$qry = "
			SELECT u.Id, GroupName, Title, Username,
			CASE WHEN u.Active = 1 THEN 'Yes' ELSE 'No' END Active
			FROM n_users u INNER JOIN
			n_groups g ON u.GroupId = g.Id ORDER BY Title";
		
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	
	public function GetUserById($userId = 0)
	{
		$userId = (int)$userId;
		
		$qry = "
			SELECT Id, GroupId, Title, Username, Picture, Active
			FROM n_users WHERE Id = ".$userId." ORDER BY Title";
		
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	
	public function IsUserExist($userId = 0, $userName)
	{
		$userId = (int)$userId;
		
		$qry = "SELECT COUNT(*)	FROM n_users WHERE Username = '".$userName."' ";
		
		if ($userId > 0)
			$qry .= "AND Id <> ". $userId;
		
		return $this->dc->GetObject($qry, true);
	}
	
	
	public function SaveUser($groupId, $title, $userName, $password, $active)
	{
		$groupId  = (int)$groupId;
		$active = (int)$active;
		
		$qry = "INSERT INTO n_users (GroupId, Title, Username, Password, Picture, Active) VALUES (?,?,?,Password(?),'".$this->userAvatar."',?)";
		
		$params = array(
			array("datatype"=>"i", "value"=>$groupId),
			array("datatype"=>"s", "value"=>$title),
			array("datatype"=>"s", "value"=>$userName),
			array("datatype"=>"s", "value"=>$password),
			array("datatype"=>"i", "value"=>$active)
		);
		
		return $this->dc->ExecuteNonQuery($qry, $params);
	}
	
	
	public function UpdateUser($userId, $groupId, $title, $userName, $active)
	{
		$userId   = (int)$userId;
		$groupId  = (int)$groupId;
		$active   = (int)$active;
		
		$qry = "
			UPDATE n_users SET GroupId = ?, Title = ?, Username = ?, Active = ? WHERE Id = ?";
		
		$params = array(
			array("datatype"=>"i", "value"=>$groupId),
			array("datatype"=>"s", "value"=>$title),
			array("datatype"=>"s", "value"=>$userName),
			array("datatype"=>"i", "value"=>$active),
			array("datatype"=>"i", "value"=>$userId)
		);
		
		return $this->dc->ExecuteNonQuery($qry, $params);
	}
	
	
	
	public function UpdateUserPassword($userId, $password)
	{
		$userId   = (int)$userId;
		
		$qry = "
			UPDATE n_users SET Password = Password(?) WHERE Id =?";
		
		$params = array(
			array("datatype"=>"s", "value"=>$password),
			array("datatype"=>"i", "value"=>$userId)
		);
		
		//return $this->dc->ExecuteNonQuery($qry, $params);
		return true;
	}
	
	
	public function VerifyUserPassword($userId, $password)
	{
		$userId   = (int)$userId;
		
		$qry = "
			SELECT COUNT(*) counts FROM n_users WHERE Password = Password(?) AND Id =" . $userId;
		
		
		$params = array(
			array("datatype"=>"s", "value"=>$password)
		);
		//echo $qry;
		
		$result = $this->dc->ExecuteParamQuery($qry, $params);
		$row = mysqli_fetch_assoc($result);
		if($row == true)
		{
			$v = array_values($row);
			return ( (int)$v[0] == 1 );
		}
		
		return false;
		
		/*
		
		$qry = "
			SELECT COUNT(*) FROM n_users WHERE Password = Password('".$password."') AND Id =" . $userId;
		
		return ((int)$this->dc->GetObject( $qry ) == 1);
		
		*/
		
	}
	
	
	public function UpdateUserProfile($userId, $title, $password)
	{
		$userId   = (int)$userId;
		
		$qry = "
			UPDATE n_users SET Title = ?, Password = Password(?) WHERE Id =?";
		
		$params = array(
			array("datatype"=>"s", "value"=>$title),
			array("datatype"=>"s", "value"=>$password),
			array("datatype"=>"i", "value"=>$userId)
		);
		
		return $this->dc->ExecuteNonQuery($qry, $params);
	}
	
	
	function AddUserPicture( $userId, $picture )
	{
		$userId = (int)$userId;
		
		$qry = 
			"SELECT Picture FROM n_users 
			 WHERE Id=". $userId;
		
		$picture_ = $this->dc->GetObject($qry);
		
		#if user change icon from old icon than we delete old icon file
		if (strlen(trim($picture_)) > 0 && $picture_ != $this->userAvatar)
		{
			unlink( $picture_ );
		}
		
		$qry = 
			"UPDATE n_users SET Picture=?
			 WHERE Id=?";
		
		$params = array(
			array("datatype"=>"s", "value"=>$picture),
			array("datatype"=>"i", "value"=>$userId)
		);
		
		return $this->dc->ExecuteNonQuery($qry, $params);
	}
	
	
	public function GetUserGroups()
	{
		$qry = "
			SELECT Id, GroupName, 
			CASE WHEN Admin = 1 THEN 'Yes' ELSE 'No' END Admin,
			CASE WHEN Active = 1 THEN 'Yes' ELSE 'No' END Active
			FROM n_groups ORDER BY GroupName";
		
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	public function GetUserGroupById($userGroupId = 0)
	{
		$userGroupId = (int)$userGroupId;
		
		$qry = "
			SELECT Id, GroupName, Admin, Active
			FROM n_groups WHERE Id = ".$userGroupId." ORDER BY GroupName";
		
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	public function IsUserGroupExist($userGroupId = 0, $groupName)
	{
		$userGroupId = (int)$userGroupId;
		
		$qry = "SELECT COUNT(*)	FROM n_groups WHERE GroupName = '".$groupName."' ";
		
		if ($userGroupId > 0)
			$qry .= "AND Id <> ". $userGroupId;
		
		return $this->dc->GetObject($qry, true);
	}
	
	public function SaveUserGroup($groupName, $admin, $active)
	{
		$admin  = (int)$admin;
		$active = (int)$active;
		
		$qry = "INSERT INTO n_groups (GroupName, Admin, Active) VALUES (?,?,?)";
		
		$params = array(
			array("datatype"=>"s", "value"=>$groupName),
			array("datatype"=>"i", "value"=>$admin),
			array("datatype"=>"i", "value"=>$active)
		);
		
		return $this->dc->ExecuteNonQuery($qry, $params);
	}
	
	
	public function UpdateUserGroup($userGroupId, $groupName, $admin, $active)
	{
		$userGroupId = (int)$userGroupId;
		$admin 		 = (int)$admin;
		$active 	 = (int)$active;
		
		$qry = "
			UPDATE groups SET n_GroupName = ?, Admin = ?, Active = ? WHERE Id = ?";
		
		$params = array(
			array("datatype"=>"s", "value"=>$groupName),
			array("datatype"=>"i", "value"=>$admin),
			array("datatype"=>"i", "value"=>$active),
			array("datatype"=>"i", "value"=>$userGroupId)
		);
		
		return $this->dc->ExecuteNonQuery($qry, $params);
	}
	
	
	function GetUserGroupRights( $userGroupId = 0 )
	{
		if ($userGroupId == 0)
			return array(new DataTable(), new DataTable());
		
		
		$qry = "SELECT nt.Id, Title AS `AllForms`
                  FROM n_navigation_tree nt 
                  WHERE Active = 1 AND Title <> '' AND (nt.Id NOT IN 
                                            (SELECT IFNULL(NavigationTreeId, '0') AS NavigationTreeId 
                                              FROM n_user_group_rights 
                                              WHERE (UserGroupId = $userGroupId)))
				  ORDER BY Level, ParentId, DisplayOrder";
		//echo $qry;
		$tAllNodes = $this->dc->ExecuteQuery($qry, true);
		
		$qry = "SELECT nt.Id, Title AS `SelectedForms`
                  FROM n_navigation_tree nt 
                  WHERE Active = 1 AND Title <> '' AND (nt.Id IN 
						(SELECT IFNULL(NavigationTreeId, '0') AS NavigationTreeId 
						  FROM n_user_group_rights 
						  WHERE (UserGroupId = $userGroupId)))
				  ORDER BY Level, ParentId, DisplayOrder";
		
		$tSelectedNodes = $this->dc->ExecuteQuery($qry, true);
		
		return array($tAllNodes, $tSelectedNodes);
	}
	
	
	function UpdateUserGroupRights( $userGroupId, $selectedFormsIds )
	{
		$qry = "DELETE FROM n_user_group_rights WHERE UserGroupId = ?";
		
		$params = array(
			array("datatype"=>"i", "value"=>$userGroupId)
		);
		
		$response = $this->dc->ExecuteNonQuery($qry, $params);
		
		if ($response == 1 )
		{
			$qry = "INSERT INTO n_user_group_rights (UserGroupId, NavigationTreeId) 
					SELECT ". $userGroupId .", Id FROM n_navigation_tree WHERE Id IN(".$selectedFormsIds.")";
			
			/*$params = array(
				array("datatype"=>"s", "value"=>$selectedFormsIds)
			);*/
			
			//return $qry;
			$response = $this->dc->ExecuteNonQuery1($qry);
			if ($response != 1 )
			{
				return $response;
			}
		}
		else
		{
			return $response;
		}
		
		return true;
	}
	
}
?>
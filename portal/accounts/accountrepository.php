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
			FROM portal_users u INNER JOIN
			portal_groups g ON u.GroupId = g.Id ORDER BY Title";

        return $this->dc->ExecuteQuery($qry, true);
    }


    public function GetUserById($userId = 0)
    {
        $userId = (int)$userId;

        $qry = "
			SELECT Id, GroupId, Title, Username, Picture, Active
			FROM portal_users WHERE Id = ".$userId." ORDER BY Title";

        return $this->dc->ExecuteQuery($qry, true);
    }


    public function GetStudent($schoolNo = "")
    {
        $qry = "
			SELECT studentName, fatherName, school, studing, house
			FROM students WHERE schoolNo = ".$schoolNo;

        return $this->dc->ExecuteQuery($qry, true);
    }


    public function IsUserExist($userId = 0, $userName)
    {
        $userId = (int)$userId;

        $qry = "SELECT COUNT(*)	FROM portal_users WHERE Username = '".$userName."' ";

        if ($userId > 0)
            $qry .= "AND Id <> ". $userId;

        return $this->dc->GetObject($qry, true);
    }


    public function SaveUser($groupId, $title, $userName, $password, $active)
    {
        $groupId  = (int)$groupId;
        $active = (int)$active;

        $qry = "INSERT INTO portal_users (GroupId, Title, Username, Password, Picture, Active) VALUES (?,?,?,Password(?),'".$this->userAvatar."',?)";

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
			UPDATE portal_users SET GroupId = ?, Title = ?, Username = ?, Active = ? WHERE Id = ?";

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
			UPDATE portal_users SET Password = Password(?) WHERE Id =?";

        $params = array(
            array("datatype"=>"s", "value"=>$password),
            array("datatype"=>"i", "value"=>$userId)
        );

        return $this->dc->ExecuteNonQuery($qry, $params);
    }


    public function VerifyUserPassword($userId, $password)
    {
        $userId = (int)$userId;

        $qry = "
			SELECT COUNT(*) FROM portal_users WHERE Password = Password('".$password."') AND Id =" . $userId;


        return ((int)$this->dc->GetObject( $qry ) == 1);
    }


    public function UpdateUserProfile($userId, $title, $password)
    {
        $userId   = (int)$userId;

        $qry = "
			UPDATE portal_users SET Title = ?, Password = Password(?) WHERE Id =?";

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
            "SELECT Picture FROM portal_users 
			 WHERE Id=". $userId;

        $picture_ = $this->dc->GetObject($qry);

        #if user change icon from old icon than we delete old icon file
        if (strlen(trim($picture_)) > 0 && $picture_ != $this->userAvatar)
        {
            unlink( $picture_ );
        }

        $qry =
            "UPDATE portal_users SET Picture=?
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
			FROM portal_groups ORDER BY GroupName";

        return $this->dc->ExecuteQuery($qry, true);
    }

    public function GetUserGroupById($userGroupId = 0)
    {
        $userGroupId = (int)$userGroupId;

        $qry = "
			SELECT Id, GroupName, Admin, Active
			FROM portal_groups WHERE Id = ".$userGroupId." ORDER BY GroupName";

        return $this->dc->ExecuteQuery($qry, true);
    }

    public function IsUserGroupExist($userGroupId = 0, $groupName)
    {
        $userGroupId = (int)$userGroupId;

        $qry = "SELECT COUNT(*)	FROM portal_groups WHERE GroupName = '".$groupName."' ";

        if ($userGroupId > 0)
            $qry .= "AND Id <> ". $userGroupId;

        return $this->dc->GetObject($qry, true);
    }

    public function SaveUserGroup($groupName, $admin, $active)
    {
        $admin  = (int)$admin;
        $active = (int)$active;

        $qry = "INSERT INTO portal_groups (GroupName, Admin, Active) VALUES (?,?,?)";

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
			UPDATE portal_groups SET n_GroupName = ?, Admin = ?, Active = ? WHERE Id = ?";

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
                  FROM portal_navigation_tree nt 
                  WHERE Active = 1 AND Title <> '' AND (nt.Id NOT IN 
                                            (SELECT IFNULL(NavigationTreeId, '0') AS NavigationTreeId 
                                              FROM portal_user_group_rights 
                                              WHERE (UserGroupId = $userGroupId)))
				  ORDER BY Level, ParentId, DisplayOrder";
        //echo $qry;
        $tAllNodes = $this->dc->ExecuteQuery($qry, true);

        $qry = "SELECT nt.Id, Title AS `SelectedForms`
                  FROM portal_navigation_tree nt 
                  WHERE Active = 1 AND Title <> '' AND (nt.Id IN 
						(SELECT IFNULL(NavigationTreeId, '0') AS NavigationTreeId 
						  FROM portal_user_group_rights 
						  WHERE (UserGroupId = $userGroupId)))
				  ORDER BY Level, ParentId, DisplayOrder";

        $tSelectedNodes = $this->dc->ExecuteQuery($qry, true);

        return array($tAllNodes, $tSelectedNodes);
    }


    function UpdateUserGroupRights( $userGroupId, $selectedFormsIds )
    {
        $qry = "DELETE FROM portal_user_group_rights WHERE UserGroupId = ?";

        $params = array(
            array("datatype"=>"i", "value"=>$userGroupId)
        );

        $response = $this->dc->ExecuteNonQuery($qry, $params);

        if ($response == 1 )
        {
            $qry = "INSERT INTO portal_user_group_rights (UserGroupId, NavigationTreeId) 
					SELECT ". $userGroupId .", Id FROM portal_navigation_tree WHERE Id IN(".$selectedFormsIds.")";

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


    public function GetTreeParents()
    {
        $qry = "SELECT Id, Node FROM portal_navigation_tree WHERE LEVEL = 1 AND Active = 1";

        return $this->dc->ExecuteQuery($qry, true);
    }


    public function GetNavigationTree($id, $offset, $recordsPerPage, $parentId = 0)
    {
        $id = (int)$id;

        $qry =
            "
			FROM `portal_navigation_tree` t1 INNER JOIN
				`portal_navigation_tree` t2 ON t1.`ParentId` = t2.`Id`";

        if ($id > 0)
            $qry .= " WHERE t1.`Id` = ". $id;

        if ($parentId > 0)
            $qry .= " AND t1.`ParentId` = ". $parentId;

        $counts = (int)$this->dc->GetObject("SELECT COUNT(*) ".$qry);

        $qry =
            "SELECT t1.`Id`, t2.`Id` ParentId, t2.`Node` Parent, t1.`Level`, t1.`Title`, t1.`Node`, t1.`Address`, t1.`Address2`, t1.`Icon`, t1.`DisplayOrder`,
			CASE WHEN t1.`Show` = 1 THEN 'Yes' ELSE 'No' END `Show`,
			CASE WHEN t1.`Active` = 1 THEN 'Yes' ELSE 'No' END Active " . $qry;


        $qry .= " ORDER BY t1.`ParentId`, t1.`Level`, t1.`DisplayOrder` ASC
			LIMIT ".$offset.", ".$recordsPerPage;

        //echo $qry;
        $dTable = $this->dc->ExecuteQuery($qry, true);

        return array($counts, $dTable);
    }


    public function IsNodeExist($treeId, $node)
    {
        $treeId = (int)$treeId;
        $node = str_replace($node, "'", "''");
        $qry = "SELECT COUNT(*)	FROM portal_navigation_tree WHERE Node = '".$node."' ";

        if ($treeId > 0)
            $qry .= "AND Id <> ". $treeId;

        return $this->dc->GetObject($qry, true);
    }


    public function SaveNode($parentId, $level, $title, $node, $address, $address2, $icon, $displayOrder, $show, $active)
    {
        $parentId = (int)$parentId;
        $level	  = (int)$level;

        $displayOrder	  = (int)$displayOrder;
        $show	  = (int)$show;
        $active	  = (int)$active;

        $qry = "INSERT INTO portal_navigation_tree (ParentId, `Level`, Title, Node, Address, Address2, Icon, DisplayOrder, `Show`, Active)
		VALUES (?,?,?,?,?,?,?,?,?,?)";

        $params = array(
            array("datatype"=>"i", "value"=>$parentId),
            array("datatype"=>"i", "value"=>$level),
            array("datatype"=>"s", "value"=>$title),

            array("datatype"=>"s", "value"=>$node),
            array("datatype"=>"s", "value"=>$address),
            array("datatype"=>"s", "value"=>$address2),
            array("datatype"=>"s", "value"=>$icon),

            array("datatype"=>"i", "value"=>$displayOrder),
            array("datatype"=>"i", "value"=>$show),
            array("datatype"=>"i", "value"=>$active)
        );

//        echo "<!--";
//        echo $qry;
//
//        var_dump($params);
//        echo "-->";

        $lastInsertId = $this->dc->ExecuteNonQuery($qry, $params, true);
        //echo "last id: ".$lastInsertId;

        if ($parentId == 0) {
            $qry =
                "UPDATE portal_navigation_tree SET ParentId = ? 
				WHERE Id =". $lastInsertId;


            $params = array(
                array("datatype"=>"i", "value"=>$lastInsertId)
            );

            return $this->dc->ExecuteNonQuery($qry, $params);
        }

        return $lastInsertId;
    }


    public function UpdateNode($id, $parentId, $level, $title, $node, $address, $address2, $icon, $displayOrder, $show, $active)
    {
        $id = (int)$id;
        $parentId = (int)$parentId;
        $level	  = (int)$level;

        $displayOrder = (int)$displayOrder;
        $show	  = (int)$show;
        $active	  = (int)$active;

        $parent_id_ = $parentId > 0 ? $parentId : $id;

        $qry =
            "UPDATE portal_navigation_tree 
			SET ParentId = ?, `Level` = ?, Title = ?, Node = ?, Address = ?, Address2 = ?, Icon = ?, DisplayOrder = ?, `Show` = ?, Active = ?
			WHERE Id = ?";

        $params = array(
            array("datatype"=>"i", "value"=>$parent_id_),
            array("datatype"=>"i", "value"=>$level),
            array("datatype"=>"s", "value"=>$title),

            array("datatype"=>"s", "value"=>$node),
            array("datatype"=>"s", "value"=>$address),
            array("datatype"=>"s", "value"=>$address2),
            array("datatype"=>"s", "value"=>$icon),

            array("datatype"=>"i", "value"=>$displayOrder),
            array("datatype"=>"i", "value"=>$show),
            array("datatype"=>"i", "value"=>$active),

            array("datatype"=>"i", "value"=>$id)
        );

        //echo $qry;

        return $this->dc->ExecuteNonQuery($qry, $params);

    }



    public function GetEvent($id)
    {
        $id = (int)$id;

        $qry =
            "SELECT pe.`Id`, `SessionId`, `Title`, pe.`StartDate`, IFNULL(pe.`EndDate`, '') EndDate, `IsDelete`, pe.`Active`
			FROM portal_events pe INNER JOIN
				portal_session ps ON ps.`Id` = pe.`SessionId`
			WHERE ps.`Active` = 1 AND pe.`Id` = ". $id;

        //echo $qry;
        $dTable = $this->dc->ExecuteQuery($qry, true);

        $qry =
            "SELECT
				`portal_head_tags`.`HeadTag`, `portal_tags`.`Id` TagId, `portal_tags`.`Tag`, IFNULL(et.Id, '0') EventId
			FROM
				`portal_head_tags` INNER JOIN
				`portal_tags` ON (`portal_head_tags`.`Id` = `portal_tags`.`HeadTagId`) LEFT JOIN
				portal_events_tags et ON (et.TagId = portal_tags.Id AND et.`EventId` = ". $id .")
			WHERE (`portal_head_tags`.`Active` = 1 AND `portal_tags`.`Active` = 1)
			ORDER BY `portal_head_tags`.`Id`, `portal_tags`.`Id`";

        //echo $qry;
        $tTags = $this->dc->ExecuteQuery($qry, true);

        return array( $dTable, $tTags );
    }


    public function GetTags()
    {
        $qry =
            "SELECT
				`portal_head_tags`.`HeadTag`, `portal_tags`.`Id` TagId, `portal_tags`.`Tag`, 0 EventId
			FROM
				`portal_head_tags` INNER JOIN
				`portal_tags` ON (`portal_head_tags`.`Id` = `portal_tags`.`HeadTagId`)
			WHERE (`portal_head_tags`.`Active` = 1 AND `portal_tags`.`Active` = 1)";

        return $this->dc->ExecuteQuery($qry, true);
    }


    public function SaveEvent($eventId, $title, $startDate, $endDate, $active, $show, $userId, $locations)
    {
        $eventId = (int)$eventId;
        $show	 = (int)$show;
        $active	 = (int)$active;


        if ( is_array($locations) )
            $locations = implode(',', $locations);
        else
            $locations = "";

        $qry = "SELECT Id FROM portal_session WHERE Active = 1";

        $sessionId = $this->dc->GetObject($qry);

        #check end date is null
        $end_date_null = false;
        if(strlen($endDate) == 0) $end_date_null = true;


        $qry =
            "INSERT INTO portal_events 
			(`SessionId`, `Title`, `StartDate`,";

        if( !$end_date_null )
            $qry .= " `EndDate`, ";

        $qry .=
            " `Active`, `IsDelete`, `EntryDate`, `UserId`)
			VALUES (?,?,?,";

        if( !$end_date_null )
            $qry .= " ?,";

        $qry .= "?,?, NOW(),?)";

        $params = array(
            array("datatype"=>"i", "value"=>$sessionId),
            array("datatype"=>"s", "value"=>$title),

            array("datatype"=>"s", "value"=>$startDate)
        );

        if( !$end_date_null )
            $params[] = array("datatype"=>"s", "value"=>$endDate);

        $params[] = array("datatype"=>"i", "value"=>$active);

        $params[] = array("datatype"=>"i", "value"=>$show);
        $params[] = array("datatype"=>"i", "value"=>$userId);


        //echo $qry;

        $lastInsertId = $this->dc->ExecuteNonQuery($qry, $params, true);
        //echo "last id: ".$lastInsertId;

        if ($lastInsertId > 0 && strlen($locations) > 0) {
            $qry =
                "INSERT INTO portal_events_tags (EventId, TagId)
				SELECT ?, Id FROM portal_tags WHERE Id IN(". $locations .")";


            $params = array(
                array("datatype"=>"i", "value"=>$lastInsertId)
            );

            return $this->dc->ExecuteNonQuery($qry, $params);
        }

        return $lastInsertId;
    }


    public function UpdateEvent($eventId, $title, $startDate, $endDate, $active, $show, $userId, $locations)
    {
        $eventId = (int)$eventId;
        $show	 = (int)$show;
        $active	 = (int)$active;


        if ( is_array($locations) )
            $locations = implode(',', $locations);
        else
            $locations = "";

        #check end date is null
        $end_date_null = false;
        if(strlen($endDate) == 0) $end_date_null = true;


        $qry =
            "UPDATE portal_events SET `Title` = ?, `StartDate` = ?,";

        if( !$end_date_null )
            $qry .= " `EndDate` = ?, ";

        $qry .=
            " `Active` = ?, `IsDelete` = ?
			WHERE Id = ?";


        $params = array(
            array("datatype"=>"s", "value"=>$title),
            array("datatype"=>"s", "value"=>$startDate)
        );

        if( !$end_date_null )
            $params[] = array("datatype"=>"s", "value"=>$endDate);

        $params[] = array("datatype"=>"i", "value"=>$active);
        $params[] = array("datatype"=>"i", "value"=>$show);
        $params[] = array("datatype"=>"i", "value"=>$eventId);


        /*echo $qry."<br/>";

        echo "<br/><pre>";
        var_dump($params);

        echo "</pre><br/>";*/

        $response = $this->dc->ExecuteNonQuery($qry, $params);

        if ( $response > 0 ) {

            #if tags already exists then check which tags should be deleted.
            if ( strlen( $locations ) > 0 ) {
                $qry =
                    "DELETE FROM `portal_events_tags` WHERE EventId = ? AND TagId NOT IN (". $locations .")";

                $params = array(
                    array("datatype"=>"i", "value"=>$eventId)
                );
                //echo $qry."<br/>";
                $response = $this->dc->ExecuteNonQuery($qry, $params);
            }

            #insert event tags those are selected by the user
            $qry =
                "INSERT INTO portal_events_tags (EventId, TagId)
				SELECT ?, t.Id 
				FROM portal_tags t
				WHERE t.Id IN (". $locations .") AND 
				t.Id NOT IN(SELECT TagId FROM portal_events_tags WHERE EventId = ?)";


            $params = array(
                array("datatype"=>"i", "value"=>$eventId),
                array("datatype"=>"i", "value"=>$eventId)
            );
            //echo $qry."<br/>";
            return $this->dc->ExecuteNonQuery($qry, $params);
        }

        return $response;
    }



    public function GetAllStudentContacts($school)
    {
        $qry = "
			SELECT
			    studentName `Student Name`, fatherName `Father Name`, 
			    school `School`, studing `Class`, c.`SchoolNo` `School No`, `Email_Gmail` `Email`, `Mobile`
            FROM students s INNER JOIN
                portal_students_contacts c ON s.schoolNo = c.SchoolNo
			WHERE 1 ";

        if($school != "0")
            $qry .= "AND school = '$school' ";


        $qry .= "ORDER by c.Id";

        return $this->dc->ExecuteQuery($qry, true);
    }


    public function GetAllUpdatedStudentContacts($school)
    {
        $qry = "
			SELECT
			    studentName `Student Name`, fatherName `Father Name`, 
			    school `School`, studing `Class`, c.`SchoolNo` `School No`, `Email_Gmail` `Old Email`, `Mobile` `Old Mobile`, `Email_Gmail2` `Updated Email`, `Mobile2` `Updated Mobile`
            FROM students s INNER JOIN
                portal_students_contacts c ON s.schoolNo = c.SchoolNo
			WHERE `Email_Gmail2` <> '' ";

        if($school != "0")
            $qry .= "AND school = '$school' ";


        $qry .= "ORDER by c.Id";

        return $this->dc->ExecuteQuery($qry, true);
    }

    public function GetStudentContactsTill28May($school)
    {
        $qry = "
			SELECT
			    studentName `Student Name`, fatherName `Father Name`, 
			    school `School`, studing `Class`, c.`SchoolNo` `School No`, `Email_Gmail` `Email`, `Mobile`
            FROM students s INNER JOIN
                portal_students_contacts c ON s.schoolNo = c.SchoolNo
			WHERE c.Id < 2121 ";

        if($school != "0")
            $qry .= "AND school = '$school' ";


        $qry .= "ORDER by c.Id";

        return $this->dc->ExecuteQuery($qry, true);
    }


    public function GetLatestStudentContacts($school)
    {
        $qry = "
			SELECT
			    studentName `Student Name`, fatherName `Father Name`, 
			    school `School`, studing `Class`, c.`SchoolNo` `School No`, `Email_Gmail` `Email`, `Mobile`,
			    IFNULL( DATE_FORMAT(`DateTime`, '%m/%d/%Y %H:%i'), 'N/A') `DateTime`
            FROM students s INNER JOIN
                portal_students_contacts c ON s.schoolNo = c.SchoolNo
			WHERE c.Id > 2120  ";

        if($school != "0")
            $qry .= "AND school = '$school' ";


        $qry .= "ORDER by c.Id";

        return $this->dc->ExecuteQuery($qry, true);
    }

    
    public function GetStudentContacts($schoolNo = "")
    {
        $qry = "
			SELECT studentName, fatherName, school, SUBSTR(`studing`, 1, 2) studing, house,
			            IFNULL(c.`Id`, 0) ContactId,
			            IFNULL(c.`SchoolNo`, '') SchoolNo, IFNULL(`Email_Gmail`, '') Email_Gmail, 
			            IFNULL(`Mobile`, '') Mobile, IFNULL(c.`Email_Gmail2`, '') Email_Gmail2, 
			            IFNULL(`Mobile2`, '') Mobile2, IFNULL(`DateTime`, '') DateTime, 
			            IFNULL(`UpdateDateTime`,'') UpdateDateTime
            FROM students s LEFT JOIN
            portal_students_contacts c ON s.schoolNo = c.SchoolNo
			WHERE s.schoolNo = ".$schoolNo;


        return $this->dc->ExecuteQuery($qry, true);
    }


    public function SaveStudentContacts($contactId, $schoolNo, $email, $mobile, $address, $street, $city, $province, $postalZipCode, $permanentAddress, $addressSame, $dateTime)
    {
        $isExists = $this->dc->GetObject("SELECT COUNT(*) FROM portal_students_contacts WHERE SchoolNo = ". $schoolNo);

        if ($isExists == 0) {

            $qry = "INSERT INTO portal_students_contacts (`SchoolNo`,`Email_Gmail`,`Mobile`, DateTime) 
                VALUES (?,?,?,?)";

            $params = array(
                array("datatype" => "s", "value" => $schoolNo),
                array("datatype" => "s", "value" => $email),
                array("datatype" => "s", "value" => $mobile),
                array("datatype" => "s", "value" => $dateTime)
            );

            return $this->dc->ExecuteNonQuery($qry, $params);
        }
        else {
            $qry = "UPDATE portal_students_contacts SET `Email_Gmail2`=?,`Mobile2`=?,`UpdateDateTime`=?
                            WHERE Id=?";

            $params = array(
                array("datatype" => "s", "value" => $email),
                array("datatype" => "s", "value" => $mobile),
                array("datatype" => "s", "value" => $dateTime),
                array("datatype" => "i", "value" => $contactId)
            );

            return $this->dc->ExecuteNonQuery($qry, $params);
        }


    }
	public function getStudentGroupCycle($schoolNo= "")
    {
        $qry = "SELECT cycle FROM studentgroupc where schoolNo=".$schoolNo;

        return $this->dc->ExecuteQuery($qry, true);
    }
}
?>
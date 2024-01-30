<?php


#using in account/view_events.php for fetching the events
if(isset($_REQUEST["select"]) && (int)$_REQUEST["select"] == 1)
{
	header('Content-type: application/json');
	
	$path = "../";
	include($path."classes/usersession.php");
	include($path."classes/settings.php");
	
	$qry = 
		"SELECT
			pe.Id, pe.`Title` title, 
			CASE
				WHEN DATE_FORMAT(pe.`StartDate`, '%H:%i:%s') = '00:00:00' 
				THEN DATE_FORMAT(pe.`StartDate`, '%Y-%m-%d')
				ELSE DATE_FORMAT(pe.`StartDate`, '%Y-%m-%dT%H:%i')
			END AS `start`,
			CASE
				WHEN pe.`EndDate` > pe.`StartDate`
				THEN DATE_FORMAT( DATE_ADD(pe.`EndDate`, INTERVAL 1 DAY), '%Y-%m-%d')
				WHEN pe.`EndDate` IS NOT NULL 
				THEN DATE_FORMAT(pe.`EndDate`, '%Y-%m-%dT%H:%i')
				ELSE ''
			END AS `end`,
			CASE
				WHEN pe.Active = 0 AND pe.IsDelete = 1 THEN 'purple'
				WHEN pe.Active = 0 THEN 'orange'
				WHEN pe.IsDelete = 1 THEN 'red'
				ELSE ''
			END AS color, vet.Schools

		FROM
			`portal_session` ps  INNER JOIN
			`portal_events` pe ON (ps.`Id` = pe.`SessionId`) INNER JOIN
			`portal_events_tags` et ON et.EventId = pe.Id INNER JOIN
			`portal_tags` t ON t.Id = et.TagId INNER JOIN
			`portal_head_tags` ht ON ht.Id = t.HeadTagId INNER JOIN
	        `v_event_tags` vet ON vet.EventId = pe.Id
		WHERE ps.Active = 1
		GROUP BY et.EventId";
	
	$tEvents = $dc->ExecuteQuery($qry, true);
	
	foreach ($tEvents->Rows as $row) {
		$row->title = htmlentities(stripslashes(utf8_decode($row->title)));
	}
	
	//echo '[{"Id":"1","title":"New Test Event","start":"2019-03-25"}]';
	echo $purifier->purify(json_encode($tEvents->Rows));
}



#using in important-events.php for fetching the events
if(isset($_REQUEST["select"]) && (int)$_REQUEST["select"] == 2)
{
	header('Content-type: application/json');
	
	$path = "../";
	include($path."classes/usersession.php");
	include($path."classes/settings.php");
	
	$qry = 
		"SELECT	pe.Id, pe.`Title` title,
			CASE
				WHEN DATE_FORMAT(pe.`StartDate`, '%H:%i:%s') = '00:00:00' 
				THEN DATE_FORMAT(pe.`StartDate`, '%Y-%m-%d')
				ELSE DATE_FORMAT(pe.`StartDate`, '%Y-%m-%dT%H:%i')
			END AS `start`,
			CASE
				WHEN pe.`EndDate` > pe.`StartDate`
				THEN DATE_FORMAT( DATE_ADD(pe.`EndDate`, INTERVAL 1 DAY), '%Y-%m-%d')
				WHEN pe.`EndDate` IS NOT NULL 
				THEN DATE_FORMAT(pe.`EndDate`, '%Y-%m-%dT%H:%i')
				ELSE ''
			END AS `end`
		FROM
			`portal_session` ps  INNER JOIN
			`portal_events` pe ON (ps.`Id` = pe.`SessionId`) INNER JOIN
			`portal_events_tags` et ON et.EventId = pe.Id
		WHERE
			ps.Active = 1 AND 
			pe.Active = 1 AND pe.IsDelete = 0 AND 
			pe.Id IN (
				SELECT et.EventId
				FROM portal_tags pt INNER JOIN portal_events_tags et ON pt.Id = et.TagId INNER JOIN portal_head_tags pht ON pt.HeadTagId = pht.Id 
				WHERE pt.Active = 1 AND HeadTag = 'Important'
				)
		GROUP BY et.EventId";
	
	$tEvents = $dc->ExecuteQuery($qry, true);
	
	foreach ($tEvents->Rows as $row) {
		$row->title = htmlentities(stripslashes(utf8_decode($row->title)));
	}
	
	//echo '[{"Id":"1","title":"New Test Event","start":"2019-03-25"}]';
	echo $purifier->purify(json_encode($tEvents->Rows));
}



#using in general-events.php for fetching the events
if(isset($_REQUEST["select"]) && (int)$_REQUEST["select"] == 3)
{
	header('Content-type: application/json');

    $path = "../";
    include($path."classes/usersession.php");
    include($path."classes/settings.php");

	$school = isset($_REQUEST["school"]) ? $_REQUEST["school"] : "";

    $school = $purifier->purify($school);

	$qry = 
		"SELECT	pe.Id, pe.`Title` title,
			CASE
				WHEN DATE_FORMAT(pe.`StartDate`, '%H:%i:%s') = '00:00:00' 
				THEN DATE_FORMAT(pe.`StartDate`, '%Y-%m-%d')
				ELSE DATE_FORMAT(pe.`StartDate`, '%Y-%m-%dT%H:%i')
			END AS `start`,
			CASE
				WHEN pe.`EndDate` > pe.`StartDate`
				THEN DATE_FORMAT( DATE_ADD(pe.`EndDate`, INTERVAL 1 DAY), '%Y-%m-%d')
				WHEN pe.`EndDate` IS NOT NULL 
				THEN DATE_FORMAT(pe.`EndDate`, '%Y-%m-%dT%H:%i')
				ELSE ''
			END AS `end`,
            (
                SELECT 
                       CASE 
                           WHEN pt.Id = 25 THEN 'blue'
                           WHEN pt.Id = 26 THEN 'green'
                           WHEN pt.Id = 27 THEN 'red'
                		   ELSE ''
                	   END
                FROM 
                     portal_events_tags et INNER JOIN 
                     portal_tags pt ON et.TagId = pt.Id  
                WHERE 
                      et.TagId = pt.Id AND 
                      et.EventId = pe.Id AND 
                      pt.Id IN(25,26,27))
                As `color`
		FROM
			`portal_session` ps INNER JOIN
			`portal_events` pe ON (ps.`Id` = pe.`SessionId`) INNER JOIN
			`portal_events_tags` et ON et.EventId = pe.Id
		WHERE
			ps.Active = 1 AND 
			pe.Active = 1 AND pe.IsDelete = 0 AND
			pe.Id IN (
				SELECT et.EventId
				FROM portal_tags pt INNER JOIN portal_events_tags et ON pt.Id = et.TagId 
				WHERE pt.Active = 1 AND Tag = '". $school ."'	
			)
			AND
			et.TagId NOT IN (
					SELECT pt.Id 
					FROM portal_tags pt INNER JOIN portal_head_tags pht ON pt.HeadTagId = pht.Id 
					WHERE HeadTag IN('Important', 'Sports')
					)
		GROUP BY et.EventId";
	
	$tEvents = $dc->ExecuteQuery($qry, true);
	
	foreach ($tEvents->Rows as $row) {
		$row->title = htmlentities(stripslashes(utf8_decode($row->title)));
	}
	
	//echo '[{"Id":"1","title":"New Test Event","start":"2019-03-25"}]';
	echo $purifier->purify(json_encode($tEvents->Rows));
}


#using in sports-calendars.php for fetching the events
if(isset($_REQUEST["select"]) && (int)$_REQUEST["select"] == 4)
{
	header('Content-type: application/json');
	
	$school = isset($_REQUEST["school"]) ? $_REQUEST["school"] : "";
	
	$path = "../";
	include($path."classes/usersession.php");
	include($path."classes/settings.php");
	
	$qry = 
		"SELECT	pe.Id, pe.`Title` title,
			CASE
				WHEN DATE_FORMAT(pe.`StartDate`, '%H:%i:%s') = '00:00:00' 
				THEN DATE_FORMAT(pe.`StartDate`, '%Y-%m-%d')
				ELSE DATE_FORMAT(pe.`StartDate`, '%Y-%m-%dT%H:%i')
			END AS `start`,
			CASE
				WHEN pe.`EndDate` > pe.`StartDate`
				THEN DATE_FORMAT( DATE_ADD(pe.`EndDate`, INTERVAL 1 DAY), '%Y-%m-%d')
				WHEN pe.`EndDate` IS NOT NULL 
				THEN DATE_FORMAT(pe.`EndDate`, '%Y-%m-%dT%H:%i')
				ELSE ''
			END AS `end`
		FROM
			`portal_session` ps  INNER JOIN
			`portal_events` pe ON (ps.`Id` = pe.`SessionId`) INNER JOIN
			`portal_events_tags` et ON et.EventId = pe.Id
		WHERE
			ps.Active = 1 AND 
			pe.Active = 1 AND pe.IsDelete = 0 AND 
			pe.Id IN (
				SELECT et.EventId
				FROM portal_tags pt INNER JOIN portal_events_tags et ON pt.Id = et.TagId 
				WHERE pt.Active = 1 AND Tag = '". $school ."'	
			) AND
			et.TagId IN (
				SELECT pt.Id
				FROM portal_tags pt INNER JOIN portal_head_tags pht ON pt.HeadTagId = pht.Id 
				WHERE pt.Active = pht.Active = 1 AND HeadTag = 'Sports'
				)
		GROUP BY et.EventId";
	
	$tEvents = $dc->ExecuteQuery($qry, true);
	
	foreach ($tEvents->Rows as $row) {
		$row->title = htmlentities(stripslashes(utf8_decode($row->title)));
	}
	
	//echo '[{"Id":"1","title":"New Test Event","start":"2019-03-25"}]';
	echo $purifier->purify(json_encode($tEvents->Rows));
}



#using in accounts/upload.php for updating syllabus file title
if(isset($_REQUEST["select"]) && (int)$_REQUEST["select"] == 5)
{
	$path = "../";
	include($path."classes/usersession.php");
	include($path."classes/settings.php");
	
	
	$fileId = (int)$_GET["fileId"];
	$title  = $_GET["title"];
	
	$qry = 
		"UPDATE portal_syllabus_files SET Caption=? WHERE Id=?";
	
	$params = array (
		array("datatype"=>"s", "value"=>$title),
		array("datatype"=>"i", "value"=>$fileId)
	);
	
	$response = $dc->ExecuteNonQuery($qry, $params);
	
	if ($response == true)
		echo "1,File title updated.";
	else
	{
		echo "0,File title not updated.";
	}
	
}



#using in accounts/upload.php for delete the file
if(isset($_REQUEST["select"]) && (int)$_REQUEST["select"] == 6)
{//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
	$path = "../";
	include($path."classes/usersession.php");
	include($path."classes/settings.php");
	
	include($path."accounts/syllabusrepository.php");
	$syllabusRepo = new SyllabusRepository( $dc );
	
	$fileId = (int)$_GET["fileId"];
	
	$tFiles = $syllabusRepo->GetSyllabusFile( $fileId );
	
	$Destination = $_SERVER['DOCUMENT_ROOT'] . $portalDomainName . "accounts/"; // "http://localhost/newsletter/news/";
	//echo $Destination = $portalDomainName . "news/"; // "http://localhost/newsletter/news/";
	//$Destination = "https://aitchison.edu.pk/newsletter/news/";
	//$Destination = "/../news/";
	
	//exit;
	if ($tFiles->rowsCount() > 0)
	{
		$row = $tFiles->Rows[0];
		$fileName = $Destination.$row->FileUrl;
		//echo "0,".$fileName;
		//exit;
		//if ( file_exists( $fileName ) )
		if ( true )
		{
			//delet db record
			
			$response = $syllabusRepo->DeleteSyllabusFile ( $fileId );
			
			#database response			
			if ($response == true)
			{
				//echo $fileName;
				
				chmod($fileName, 0777);
				
				unlink( $fileName );
				
				echo "1,File deleted.";
			}
			else
			{
				echo "0,".$response;
			}
		}
		else
		{
			echo "0,File doesn't exist.";
		}
	}
	else
	{
		echo "0,File not found.";
	}
	
}



#using in examination/monthly-test-add.php for fetching the subject name by classid
if(isset($_REQUEST["select"]) && (int)$_REQUEST["select"] == 7)
{
	$path = "../";
	include($path."classes/usersession.php");
	include($path."classes/settings.php");
	
	
	$classId = (int)$_GET["classId"];
	
	$qry = 
		"SELECT s.`Subject`
		FROM portal_teacher_classes t INNER JOIN
			portal_subjects s ON s.`Id` = t.`SubjectId`
		WHERE t.`Id` = ". $classId;
	
	echo $dc->GetObject( $qry );
	
}



#using in examination/add-marks.php for add/updating marks
if(isset($_REQUEST["select"]) && (int)$_REQUEST["select"] == 8)
{
	$path = "../";
	include($path."classes/usersession.php");
	include($path."classes/settings.php");
	include($path."examination/examinationrepository.php");
	
	$examRepo = new ExaminationRepository($dc);
	
	$monthlyTestId  = (int)$_GET['testid'];
	$totalMarks		= (int)$_GET['total'];

	
	
	$d = $_POST['data'];
	//$data = stripslashes($data);
	$data = substr($d, 2, (strlen($d)-4));
	
	$peices = explode("},{", $data);
	
	$insertQueries =
		"INSERT INTO portal_monthly_test_marks (MonthlyTestId, SchoolNo, ObtainedMarks, Percentage, Grade) VALUES ";
	
	$updateQueries = "";
	
	$marks = array();
	$schoolNos = array();
	foreach ($peices as $val) {
		
		$token = explode(":", $val);
		
		$schoolNos[] = $token[0];
		$marks[]	 = $token[1];
		
	}
	
	
	$newSchoolNos = $examRepo->GetNewSchoolNosInTest($monthlyTestId, $schoolNos);
	
	for ($i = 0; $i < count($schoolNos); $i++) {
		
		if ( in_array($schoolNos[$i], $newSchoolNos) ) {
			
			if( $marks[ $i ] < 0 ) {
				$percentage = 0;
			}
			else {
				$percentage = $functions->getPercentage($marks[ $i ], $totalMarks);
			}
			//$percentage = number_format((float)$percentage, 2, '.', '') . '%';

			$insertQueries .= "(". $monthlyTestId .", ". $schoolNos[$i] .", ". $marks[ $i ] .", ". $percentage .", ''),";
		}
		else {

			if( $marks[ $i ] < 0 ) {
				$percentage = 0;
			}
			else {
				$percentage = $functions->getPercentage($marks[ $i ], $totalMarks);
			}

			$updateQueries .= 
				"UPDATE portal_monthly_test_marks SET ObtainedMarks = " . $marks[ $i ] . ", Percentage = ". $percentage ." 
				WHERE MonthlyTestId = ". $monthlyTestId ." AND SchoolNo = " . $schoolNos[$i] . "; ";
		}
	}
	
	$insertQueries = substr($insertQueries, 0, strlen( $insertQueries ) -1);
	//echo $insertQueries;
	
	$insert_bool = true;
	$update_bool = true;
	
	
	#run the insert queries
	if( count( $newSchoolNos ) > 0 ) {
		$insert_bool = $examRepo->SaveTestMarks ( $insertQueries );
	}
	
	//$str = "no: ". count( $newSchoolNos ). " -- insert: ". $insert_bool . "<br/>";
	
	#run the update queries
	if( strlen( $updateQueries ) > 0 ) {
		$update_bool = $examRepo->UpdateTestMarks ( $updateQueries );
	}
	
	//$str .= "update: ". strlen( $updateQueries ). " -- update bool: ". ( $update_bool ) . "<br/>";
	
	if ( $insert_bool && $update_bool ) $str = "1,Marks saved successfully.";
	else $str = "0,Something is worng Marks not saved, please reload the page and Save Marks again.";
	
	echo $str;
}



#using in examination/monthly-tests.php for updating test status to publish the test
if(isset($_REQUEST["select"]) && (int)$_REQUEST["select"] == 9)
{
	$path = "../";
	include($path."classes/usersession.php");
	include($path."classes/settings.php");
	
	
	$testId = (int)$_GET["testid"];
	
	$teacherName = $_SESSION['portal_sup_name'];
	
	$qry = 
		"UPDATE portal_monthly_tests m INNER JOIN
				portal_teacher_classes t ON t.SubjectId = m.SubjectId AND t.Section = m.Section
		SET Status='Published' 
		WHERE m.Id=? AND TeacherFullName=?";
	
	$params = array (
		array("datatype"=>"i", "value"=>$testId),
		array("datatype"=>"s", "value"=>$teacherName)
	);
	
	$response = $dc->ExecuteNonQuery($qry, $params);
	
	if ($response == true)
		echo "1,Test has been published successfully.";
	else
	{
		echo "0,Test not published.";
	}
	
}

#using in homework.php for download logs
if(isset($_REQUEST["select"]) && (int)$_REQUEST["select"] == 10)
{
    $path = "../";
    include($path."classes/usersession.php");
    include($path."classes/settings.php");
    //include($path."classes/functions.php");


    $functions = new Functions();


    $userName	= $_SESSION['portal_SchoolNo'] ?: $_SESSION['portal_sup_username'];

    $portal		= $_SESSION['PORTAL_ID'];

    $school		= $_SESSION['portal_School'] ?: $_SESSION['portal_sup_school'] ?: "0";

    $class		= $_SESSION['portal_CurrentClass'] ?: $_SESSION['portal_sup_class'] ?: "0";

    $platform	= $functions->getPlatform();

    $browser	= $functions->getBrowserName();

    $ip			= $functions->getIp();

    $url       = $_GET["url"];


    $pageTitle = $_GET["pageTitle"];

    $fileName  = $_GET["fileName"];

    $entryTime = date("Y-m-d H:i:s");


    $qry =
        "INSERT INTO portal_files_download_logs (UserName, Portal, School, Class, Platform, Browser, IpAddress, Url, PageTitle, FileName, EntryTime)
		 VALUES(?,?,?,?,?,?,?,?,?,?,?)";

    $params = array (
        array("datatype"=>"s", "value"=>$userName),
        array("datatype"=>"s", "value"=>$portal),
        array("datatype"=>"s", "value"=>$school),
        array("datatype"=>"s", "value"=>$class),
        array("datatype"=>"s", "value"=>$platform),
        array("datatype"=>"s", "value"=>$browser),
        array("datatype"=>"s", "value"=>$ip),
        array("datatype"=>"s", "value"=>$url),
        array("datatype"=>"s", "value"=>$pageTitle),
        array("datatype"=>"s", "value"=>$fileName),
        array("datatype"=>"s", "value"=>$entryTime)
    );

    $response = $dc->ExecuteNonQuery($qry, $params);

    //$record = $dc->GetObject('Select Count(*) from portal_homeworks');

    echo "1,$response.";exit;
    if ($response == true)
        echo "1,Data Saved.";
    else
    {
        echo "0,Data not saved.";
    }

}


#using in account/my-view-events.php for fetching the events
if(isset($_REQUEST["select"]) && (int)$_REQUEST["select"] == 11)
{
    header('Content-type: application/json');

    $path = "../";
    include($path."classes/usersession.php");
    include($path."classes/settings.php");

    $tag = isset($_GET['tag']) ? $_GET['tag'] : '';

    $qry =
        "SELECT
			pe.Id, pe.`Title` title, 
			CASE
				WHEN DATE_FORMAT(pe.`StartDate`, '%H:%i:%s') = '00:00:00' 
				THEN DATE_FORMAT(pe.`StartDate`, '%Y-%m-%d')
				ELSE DATE_FORMAT(pe.`StartDate`, '%Y-%m-%dT%H:%i')
			END AS `start`,
			CASE
				WHEN pe.`EndDate` > pe.`StartDate`
				THEN DATE_FORMAT( DATE_ADD(pe.`EndDate`, INTERVAL 1 DAY), '%Y-%m-%d')
				WHEN pe.`EndDate` IS NOT NULL 
				THEN DATE_FORMAT(pe.`EndDate`, '%Y-%m-%dT%H:%i')
				ELSE ''
			END AS `end`,
			CASE
				WHEN pe.Active = 0 AND pe.IsDelete = 1 THEN 'purple'
				WHEN pe.Active = 0 THEN 'orange'
				WHEN pe.IsDelete = 1 THEN 'red'
				ELSE ''
			END AS color,
			(SELECT GROUP_CONCAT(t.Tag SEPARATOR ', ')
			FROM	`portal_events_tags` et INNER JOIN
				`portal_tags` t ON t.Id = et.TagId INNER JOIN
				`portal_head_tags` ht ON ht.Id = t.HeadTagId
			WHERE   et.EventId = pe.Id AND ht.HeadTag = 'School'
			GROUP BY et.EventId) schools

		FROM
			`portal_session` ps  INNER JOIN
			`portal_events` pe ON (ps.`Id` = pe.`SessionId`) INNER JOIN
			`portal_events_tags` et ON et.EventId = pe.Id INNER JOIN
			`portal_tags` t ON t.Id = et.TagId INNER JOIN
			`portal_head_tags` ht ON ht.Id = t.HeadTagId
		WHERE ps.Active = 1 AND t.Tag = '$tag'
		GROUP BY et.EventId";

    $tEvents = $dc->ExecuteQuery($qry, true);

    foreach ($tEvents->Rows as $row) {
        $row->title = htmlentities(stripslashes(utf8_decode($row->title)));
    }

    //echo '[{"Id":"1","title":"New Test Event","start":"2019-03-25"}]';
    echo $purifier->purify(json_encode($tEvents->Rows));
}


?>
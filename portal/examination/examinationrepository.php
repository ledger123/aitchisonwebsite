<?php

class ExaminationRepository
{
	private $dc;
	
	function __construct(DataCenter $dataCenter)
	{
		$this->dc = $dataCenter;
	}
	
	function __destruct()
	{
		
    }
	
	
	public function GetMonthlyTest($id)
	{
		$id = (int)$id;
		
		$qry = 
			"SELECT m.Id, m.TeacherClassId, `TestMonth`, TestDate, `TestName`, TotalMarks, `Details`, m.Section, s.Subject, m.Active
			FROM portal_monthly_tests m INNER JOIN
				portal_subjects s ON s.Id = m.SubjectId
			WHERE m.Id = ". $id;
		
		//echo $qry;
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	public function GetMonthlyTestsList( $teacherName, $offset, $recordsPerPage )
	{
		$offset 		= (int)$offset;
		$recordsPerPage = (int)$recordsPerPage;
		
		$qry = "SELECT `Section`, `SubjectId` FROM portal_teacher_classes WHERE TeacherFullName = '". $teacherName . "'";

		$data = $this->dc->ExecuteQuery($qry, true);
		$dRow = $data->Rows[0];
		$section = $dRow->Section;
		$subjectId = $dRow->SubjectId;
		
		$qry = 
			"SELECT COUNT(*) 
			FROM portal_monthly_tests m INNER JOIN
				portal_teacher_classes c ON c.Section = m.Section AND c.SubjectId = m.SubjectId
			WHERE c.TeacherFullName = '". $teacherName . "'";
		
		$counts = (int)$this->dc->GetObject( $qry );
		
		$qry =
			"SELECT DISTINCT m.Id, MONTHNAME(STR_TO_DATE(TestMonth, '%m')) `TestMonth`, TestDate sDate, DATE_FORMAT(TestDate, '%e %M, %Y') `TestDate`, `TestName`, TotalMarks, `Details`, m.Status, m.Section, s.Subject,
			CASE WHEN Active = 0 THEN 'No' ELSE 'Yes' END Active
			FROM
				`portal_monthly_tests` m INNER JOIN
				portal_subjects s ON s.Id = m.SubjectId INNER JOIN
				portal_teacher_classes c ON c.Section = m.Section AND c.SubjectId = m.SubjectId
			WHERE c.TeacherFullName = '". $teacherName . "'
			ORDER BY `TestMonth`, sDate DESC";
		
		
		echo "<!-- ";
		echo $qry;

		echo "-->";
		

		$dTable = $this->dc->ExecuteQuery($qry, true);
		
		return array( $counts, $dTable );
	}
	
	
	public function GetSections($teacherName)
	{
		$qry = 
			"SELECT t.`Id`, CONCAT(t.`Section`, ' - ', s.`Subject`) Section
			FROM portal_teacher_classes t INNER JOIN
				portal_subjects s ON s.`Id` = t.`SubjectId`
			WHERE TeacherFullName = '". $teacherName ."'";
		
		echo "<!-- ";
		echo $qry;

		echo "-->";

		return $this->dc->ExecuteQuery($qry, true);
	}
	
	public function IsTestExist ( $id, $teacherClassId, $month, $teacherName )
	{
		$id	   = (int)$id;
		$month = (int)$month;
		$teacherClassId = (int)$teacherClassId;
		
		
		$qry = 
			"SELECT COUNT(*) 
			FROM 
				portal_monthly_tests m INNER JOIN 
				portal_teacher_classes c ON c.`Id` = m.`TeacherClassId` AND m.Section = c.Section AND c.SubjectId = m.SubjectId
			WHERE TeacherFullName = '". $teacherName ."' AND TeacherClassId = ".$teacherClassId." AND TestMonth = " . $month;
		
		if ( $id > 0 ) {
			$qry .= " AND m.Id <>" . $id;
		}
		/*
		echo "<!-- ";
		echo $qry;

		echo "-->";
		*/
		return $this->dc->GetObject($qry, true);
	}
	
	public function SaveTest($teacherClassId, $testMonth, $testDate, $testName, $totalMarks, $details, $testStatus, $teacherName, $active)
	{
		$teacherClassId	  = (int)$teacherClassId;
		$testMonth	  	  = (int)$testMonth;
		$totalMarks		  = (int)$totalMarks;
		$active		  	  = (int)$active;

		$data = $this->getSection_SubjectId( $teacherClassId );
		$section = $data->Section;
		$subjectId = $data->SubjectId;
		
		$qry = "INSERT INTO portal_monthly_tests (TeacherClassId, Section, SubjectId, TestMonth, TestDate, TestName, TotalMarks, Details, Status, CreatedBy, Active)
		VALUES (?,?,?,?,?,?,?,?,?,?,?)";
		
		$params = array (
			array("datatype"=>"i", "value"=>$teacherClassId),
			array("datatype"=>"s", "value"=>$section),
			array("datatype"=>"i", "value"=>$subjectId),
			array("datatype"=>"i", "value"=>$testMonth),
			array("datatype"=>"s", "value"=>$testDate),
			array("datatype"=>"s", "value"=>$testName),
			array("datatype"=>"i", "value"=>$totalMarks),
			array("datatype"=>"s", "value"=>$details),
			array("datatype"=>"s", "value"=>$testStatus),
			array("datatype"=>"s", "value"=>$teacherName),
			array("datatype"=>"i", "value"=>$active)
		);
		
		//echo $qry;
		
		$lastInsertId = $this->dc->ExecuteNonQuery($qry, $params, true);
		//echo "last id: ".$lastInsertId;
		
		return $lastInsertId;
	}
	
	function getSection_SubjectId($teacherClassId) {
		$qry = "SELECT `Section`, `SubjectId` FROM portal_teacher_classes WHERE Id = ". $teacherClassId;

		$dTable = $this->dc->ExecuteQuery($qry, true);

		return $dTable->Rows[0];

	}
	
	public function UpdateTest($id, $teacherClassId, $testMonth, $testDate, $testName, $totalMarks, $details, $testStatus, $active)
	{
		$teacherClassId	  = (int)$teacherClassId;
		$testMonth	  	  = (int)$testMonth;
		$totalMarks		  = (int)$totalMarks;
		$active		  	  = (int)$active;
		
		
		$data = $this->getSection_SubjectId( $teacherClassId );
		$section = $data->Section;
		$subjectId = $data->SubjectId;
		
		$qry =
			"UPDATE portal_monthly_tests SET Section = ?, SubjectId = ?, TestMonth = ?, TestDate = ?, TestName = ?, TotalMarks = ?, Details = ?, Status = ?, Active = ?
			WHERE Id = ?";
		
		$params = array(
			array("datatype"=>"s", "value"=>$section),
			array("datatype"=>"i", "value"=>$subjectId),
			array("datatype"=>"i", "value"=>$testMonth),
			array("datatype"=>"s", "value"=>$testDate),
			array("datatype"=>"s", "value"=>$testName),
			array("datatype"=>"i", "value"=>$totalMarks),
			array("datatype"=>"s", "value"=>$details),
			array("datatype"=>"s", "value"=>$testStatus),
			array("datatype"=>"i", "value"=>$active),
			array("datatype"=>"i", "value"=>$id)
		);
		
		//echo $qry;
		
		return $this->dc->ExecuteNonQuery($qry, $params);
	}
	
	
	
	
	public function GetStudentsOfSubjet( $monthlyTestId, $teacherName )
	{
		$qry =
			"SELECT m.Section, Code SubjectCode, TestName, TestDate, TestMonth, TotalMarks, Subject
			FROM
				portal_monthly_tests m INNER JOIN 
				portal_subjects s ON s.`Id` = m.`SubjectId` 
			WHERE m.`Id` = ". $monthlyTestId . "";
		
		//echo $qry;
		
		$dTable1 = $this->dc->ExecuteQuery($qry, true);
		
		$Section = "";
		$Subject = "";
		
		if ($dTable1->rowsCount() > 0) {
			$dRow = $dTable1->Rows[0];
			
			$Section = $dRow['Section'];
			$Subject = $dRow['SubjectCode'];
		}
		
		echo "<!-- ";
		echo "optional: ". strpos(strtolower($Section), 'optional') ."<br/>";
		echo $Section;

		echo "-->";

		

		if (strpos(strtolower($Section), 'optional')) {
			
			$qry =
				"SELECT DISTINCT os.SchoolNo, studentName, m.ObtainedMarks
				FROM
					portal_optionalstudent os INNER JOIN
					students s ON s.schoolNo = os.SchoolNo LEFT JOIN
					portal_monthly_test_marks m ON m.SchoolNo = os.schoolNo AND m.MonthlyTestId  = ". $monthlyTestId . "
				WHERE
					os.Subject='". $Subject ."' AND os.OptClass='". $Section ."'
				ORDER BY studentName";

			//echo $qry;
		}else {
			/*$qry =
				"SELECT schoolNo SchoolNo, studentName
				FROM
					students
				WHERE
					studing='". $Section ."' OR house='". $Section ."'
				ORDER BY studentName";*/
			
			$qry =
				"SELECT DISTINCT
					s.schoolNo SchoolNo, s.studentName, m.ObtainedMarks
				FROM 
					
					portal_monthly_tests t  INNER JOIN
					portal_monthly_test_marks m ON t.Id = m.MonthlyTestId AND t.`Id` = ". $monthlyTestId . " INNER JOIN
					portal_subjects sb ON sb.Id = t.SubjectId AND sb.Code = '". $Subject ."' RIGHT JOIN
					students s ON m.SchoolNo = s.schoolNo
					
				WHERE
					(studing='". $Section ."' OR house='". $Section ."')
				ORDER BY studentName";
		}
		
		
		echo "<!-- ";
		echo $qry;

		echo "-->";
		
		$dTable2 = $this->dc->ExecuteQuery($qry, true);
		
		return array($dTable1, $dTable2);
		
	}
	
	
	
	public function GetStudentsOfSubjet222( $monthlyTestId, $teacherName )
	{
		$qry =
			"SELECT m.Section, Code SubjectCode, TestName, TestDate, TestMonth, TotalMarks, Subject
			FROM
				portal_monthly_tests m INNER JOIN 
				portal_subjects s ON s.`Id` = m.`SubjectId` 
			WHERE m.`Id` = ". $monthlyTestId . "";
		
		//echo $qry;
		
		$dTable1 = $this->dc->ExecuteQuery($qry, true);
		
		$Section = "";
		$Subject = "";
		
		if ($dTable1->rowsCount() > 0) {
			$dRow = $dTable1->Rows[0];
			
			$Section = $dRow['Section'];
			$Subject = $dRow['SubjectCode'];
		}
		
		echo "<!-- ";
		echo "optional: ". strpos(strtolower($Section), 'optional') ."<br/>";
		echo $Section;

		echo "-->";

		

		if (strpos($Section, 'optional')) {
			
			$qry =
				"SELECT DISTINCT
					os.SchoolNo, studentName, m.ObtainedMarks
				FROM
					portal_optionalstudent os INNER JOIN
					students s ON s.schoolNo = os.SchoolNo LEFT JOIN
					portal_monthly_test_marks m ON m.SchoolNo = s.schoolNo
				WHERE
					os.Subject='". $Subject ."' AND os.OptClass='". $Section ."'
				ORDER BY studentName";

			//echo $qry;
		}else {
			/*$qry =
				"SELECT schoolNo SchoolNo, studentName
				FROM
					students
				WHERE
					studing='". $Section ."' OR house='". $Section ."'
				ORDER BY studentName";*/
			
			$qry =
				"SELECT  DISTINCT
					s.schoolNo SchoolNo, s.studentName, m.ObtainedMarks
				FROM 
					
					portal_monthly_tests t  INNER JOIN
					portal_monthly_test_marks m ON t.Id = m.MonthlyTestId AND t.`Id` = ". $monthlyTestId . " INNER JOIN
					portal_subjects sb ON sb.Id = t.SubjectId AND sb.Code = '". $Subject ."' RIGHT JOIN
					students s ON m.SchoolNo = s.schoolNo
					
				WHERE
					(studing='". $Section ."' OR house='". $Section ."')
				ORDER BY studentName";
		}
		
		
		echo "<!-- ";
		echo $qry;

		echo "-->";
		
		$dTable2 = $this->dc->ExecuteQuery($qry, true);
		
		return array($dTable1, $dTable2);
		
	}
	
	
	public function GetStudentSubjects( $studing ) {
		$qry = "
			SELECT DISTINCT s.Id, s.Subject
			FROM portal_subjects s INNER JOIN
				 portal_teacher_classes tc ON s.Id = tc.SubjectId
			WHERE tc.Section = '". $studing ."'
			ORDER BY s.Subject";
		//echo $qry;
		
		return $this->dc->ExecuteQuery($qry, true);
		
	}
	
	public function GetNewSchoolNosInTest( $monthlyTestId, $schoolNos ) {
		$qry =
			"SELECT SchoolNo 
			FROM portal_monthly_test_marks 
			WHERE MonthlyTestId = ". $monthlyTestId;
		
		$resultSet = $this->dc->ExecuteQuery($qry);
		
		
		$schoolNos_ResultSet = array();
		while($row = mysqli_fetch_array($resultSet)) {
			$schoolNos_ResultSet[] = $row['SchoolNo'];
		}
		
		$newSchoolNos = array_diff($schoolNos, $schoolNos_ResultSet);
		
		return $newSchoolNos;
	}
	
	public function SaveTestMarks( $queries ) {
		
		return $this->dc->ExecuteNonQuery1 ( $queries );
	}
	
	public function UpdateTestMarks ( $queries ) {
		
		return $this->dc->ExecuteMultiQuery ( $queries );
	}
	
	public function TestsMarksBySchoolNo( $schoolNo, $status = "Published" ) {
		$qry =
			"SELECT
				t.`Id`, MONTHNAME(STR_TO_DATE(CONCAT(t.TestMonth, '-1-1970'), '%m-%e-%Y')) `TestMonth`, t.TestDate sDate, DATE_FORMAT(t.TestDate, '%e %b, %Y') `TestDate`, t.`TestName`, t.`TotalMarks`, t.`Details`, m.ObtainedMarks, m.Percentage, t.CreatedBy, s.Subject, t.Active
			FROM
				portal_monthly_tests t INNER JOIN
				portal_monthly_test_marks m ON m.MonthlyTestId = t.Id INNER JOIN
				portal_subjects s ON s.Id = t.SubjectId
			WHERE t.`Active` = 1 AND m.SchoolNo =" . $schoolNo;

		if( strlen($status) > 0) {
			$qry .= " AND t.`Status` = '$status' ";
		}

		$qry .= " ORDER BY s.Subject, t.TestMonth, t.TestDate  ";

		//echo $qry;
		$dTable = $this->dc->ExecuteQuery($qry, true);

		$qry =
			"SELECT studentName, studing, 
			CASE 
				WHEN school = 'JSD' THEN 'Junior School'
				WHEN school = 'PSD' THEN 'Prep School'
				WHEN school = 'SSD' THEN 'Senior School'
				ELSE 'School' END school
			FROM students
			WHERE schoolNo =" . $schoolNo;
		
		$tStudent = $this->dc->ExecuteQuery($qry, true);

		return array($tStudent, $dTable);
	}

	
	public function GetTests( ) {
		$qry =
			"SELECT
				t.`Id`, m.SchoolNo, t.TestMonth, t.TestDate sDate, DATE_FORMAT(t.TestDate, '%e %b, %Y') `TestDate`, 
				t.`TestName`, t.`TotalMarks`, m.ObtainedMarks, m.Percentage, c.TeacherFullName, s.Subject, c.Section
			FROM
				portal_monthly_tests t INNER JOIN
				portal_monthly_test_marks m ON m.MonthlyTestId = t.Id INNER JOIN
				portal_teacher_classes c ON c.Section = t.Section AND c.SubjectId = t.SubjectId INNER JOIN
				portal_subjects s ON s.Id = t.SubjectId
			WHERE t.`Active` = 1 
			ORDER BY t.TestMonth, t.Id ASC";

		//echo $qry;
		$dTable = $this->dc->ExecuteQuery($qry, true);
		return $dTable;

		//return array(1, $dTable);
	}

	//t.`Id`, t.TestMonth, m.SchoolNo, GROUP_CONCAT( CONCAT('<tr><th>',t.Section,'</th><td>',s.Subject,'</td><td>', t.`TotalMarks`,'</td><td>', m.ObtainedMarks,'</td><td>', m.Percentage, '%</td></tr>' ) SEPARATOR '' ) 'Month'
	public function GetTests2() {
		$qry =
			"SELECT TestMonth, SchoolNo, GROUP_CONCAT(`Month`  SEPARATOR '||') 'MarksData'
			, (SELECT studentName FROM students s WHERE tbl.SchoolNo = s.Schoolno) StudentName
		   FROM
		   (
		   SELECT DISTINCT
		   t.`Id`, t.TestMonth, m.SchoolNo, GROUP_CONCAT( CONCAT('',t.Section,'||',s.Subject,'||', t.`TotalMarks`,'||', m.ObtainedMarks,'||', m.Percentage, '' ) SEPARATOR '||' ) 'Month'
			   
		   FROM
			   portal_monthly_tests t INNER JOIN
			   portal_monthly_test_marks m ON m.MonthlyTestId = t.Id INNER JOIN
			   portal_teacher_classes c ON c.Section = t.Section AND c.SubjectId = t.SubjectId INNER JOIN
			   portal_subjects s ON s.Id = t.SubjectId
		   -- WHERE m.`SchoolNo` IN(17504, 17505, 17506) -- c.Section like 'C1%'  and m.`SchoolNo` = 17377
		   GROUP BY m.`SchoolNo`, t.`Id`, TestMonth
		   ORDER BY m.`SchoolNo`, TestMonth
		   ) tbl
		   GROUP BY TestMonth, `SchoolNo`";

		
		//echo $qry;
		$dTable = $this->dc->ExecuteQuery($qry, true);
		return $dTable;
	}
	
	public function GetTests3() {

		$qry =
			"SELECT TestMonth, SchoolNo, Section, GROUP_CONCAT(`Month`  SEPARATOR ',') 'MarksData'
			, (SELECT studentName FROM students s WHERE tbl.SchoolNo = s.Schoolno) studentName
		   FROM
		   (
		   SELECT
		   t.`Id`, t.TestMonth, m.SchoolNo, c.Section, 
			COALESCE(
				GROUP_CONCAT(
			   		CONCAT('{',
							'\"m\": \"', (TestMonth), '\", ',
							'\"s\": \"', (s.Subject), '\", ',
							'\"t\": \"', (t.`TotalMarks`), '\", ',
							'\"o\": \"', (m.ObtainedMarks), '\", ',
							'\"p\": \"', (m.Percentage), '\" '
							'}' )
					SEPARATOR ',' ) , ''
					) 'Month' 
			   
		   FROM
			   portal_monthly_tests t INNER JOIN
			   portal_monthly_test_marks m ON m.MonthlyTestId = t.Id INNER JOIN
			   portal_teacher_classes c ON c.Section = t.Section AND c.SubjectId = t.SubjectId INNER JOIN
			   portal_subjects s ON s.Id = t.SubjectId
		   -- WHERE  m.`SchoolNo` IN(20048, 15811, 15812) -- c.Section LIKE 'C1%'
		   GROUP BY m.`SchoolNo`, t.`Id`, TestMonth
		   ORDER BY m.`SchoolNo`, TestMonth
		   ) tbl
		   GROUP BY `SchoolNo`";

		
		//echo $qry;
		$dTable = $this->dc->ExecuteQuery($qry, true);
		return $dTable;
	}

	public function GetTests4() {
		$qry =
			"SELECT TestMonth, tbl.SchoolNo, std.StudentName, std.Section, GROUP_CONCAT(`Month`  SEPARATOR '||') 'MarksData'
		   FROM
		   (
			SELECT DISTINCT
			t.`Id`, t.TestMonth, m.SchoolNo, t.Section, GROUP_CONCAT( CONCAT( s.Subject,'||', m.Percentage ) SEPARATOR '||' ) 'Month'
				
			FROM
				portal_monthly_tests t INNER JOIN
				portal_monthly_test_marks m ON m.MonthlyTestId = t.Id INNER JOIN
				portal_teacher_classes c ON c.Section = t.Section AND c.SubjectId = t.SubjectId INNER JOIN
				portal_subjects s ON s.Id = t.SubjectId
			WHERE t.TestMonth = 9 -- m.`SchoolNo` IN(17504, 17505, 17506) -- c.Section like 'C1%'  and m.`SchoolNo` = 17377
			GROUP BY m.`SchoolNo`, t.`Id`, TestMonth
			ORDER BY m.`SchoolNo`, TestMonth
			) tbl INNER JOIN
		   (SELECT schoolNo, studentName StudentName, studing Section FROM students) std ON tbl.SchoolNo = std.schoolNo
		   GROUP BY TestMonth, `SchoolNo`";

		
		//echo $qry;
		$dTable = $this->dc->ExecuteQuery($qry, true);
		return $dTable;
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
			"SELECT s.Id, s.`Title`, sf.`Caption`, sf.`FileUrl` 
				FROM portal_syllabus s INNER JOIN
				portal_syllabus_files sf ON sf.`SyllabusId` = s.`Id` INNER JOIN
				portal_syllabus_files_links sfl ON sfl.`SyllabusId` = s.`Id` INNER JOIN
				portal_portals p ON p.Code = sfl.`PortalCode`
			WHERE s.Active = sf.`Active` = 1 AND p.Group = '".$group."' AND p.SubGroup = '".$subGroup."' AND p.Location = '".$location."' ORDER BY s.Id DESC, sf.`Caption` ASC";
		
		//echo $qry;
		
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


    public function GetCambridgeCode( $schoolNo )
    {
        $qry = "SELECT cambridgeCode FROM portal_students_cambridge_code WHERE schoolNo = ". $schoolNo;

        return $this->dc->GetObject( $qry );
    }


    function GetPredictedGrades($class, $schoolNo) {

        $qry = 'SELECT 1;';

	    if($class == 'C211') {
	        $qry =
                "SELECT fatherName, SUBSTRING(Class, 1, 2) studing, DATE_FORMAT(birthDate, '%d-%m-%Y') birthDate, g.SchoolNo, CardNo, Islamiyat, Pakistan_studies `Pakistan Studies`
                FROM portal_predicted_grades g INNER JOIN 
                    students s ON s.schoolNo = g.SchoolNo
                WHERE g.SchoolNo = ". $schoolNo;
        }
	    elseif($class == 'H1' || $class == 'C2') {
            $qry =
                "SELECT fatherName, SUBSTRING(Class, 1, 2) studing, DATE_FORMAT(birthDate, '%d-%m-%Y') birthDate, g.SchoolNo, CardNo, English_language `English Language`, First_language_urdu `First Language Urdu`, Second_language_urdu `Second Language Urdu`, Accounting, Additional_mathematics `Additional Mathematics`,Art_design `Art and Design`,Biology, Business_studies `Business Studies`,Chemistry,Computer_science `Computer Science`,Economics, French, German, History,Islamiyat, English_literature `English Literature`,Mathematics, Pakistan_studies `Pakistan Studies`,Physics
                FROM portal_predicted_grades g INNER JOIN 
                    students s ON s.schoolNo = g.SchoolNo
                WHERE g.SchoolNo = ". $schoolNo;
        }
	    elseif($class == 'H2') {
            $qry =
                "SELECT fatherName, SUBSTRING(Class, 1, 2) studing, DATE_FORMAT(birthDate, '%d-%m-%Y') birthDate, g.SchoolNo, CardNo, Accounting, Biology, Business_studies `Business Studies`,Chemistry,Computer_science `Computer Science`,Economics,English_general_paper `English General Paper`, Further_mathematics `Further Mathematics`,German,History, Law, English_literature `English Literature`,Mathematics,Physics, Sociology,Urdu 
                FROM portal_predicted_grades g INNER JOIN 
                    students s ON s.schoolNo = g.SchoolNo
                WHERE g.SchoolNo = ". $schoolNo;
        }
        //echo $qry;

        $qry =
            "SELECT fatherName, SUBSTRING(Class, 1, 2) studing, DATE_FORMAT(birthDate, '%d-%m-%Y') birthDate, g.SchoolNo, CardNo, Biology, English_language `English Language`, First_language_urdu `First Language Urdu`, Second_language_urdu `Second Language Urdu`, Accounting, Additional_mathematics `Additional Mathematics`,Art_design `Art and Design`, Business_studies `Business Studies`,Chemistry,Computer_science `Computer Science`,Economics, French, English_general_paper `English General Paper`, Further_mathematics `Further Mathematics`, German, History, Law, Islamiyat, English_literature `English Literature`,Mathematics, Pakistan_studies `Pakistan Studies`,Physics, Sociology,Urdu
                FROM portal_predicted_grades g INNER JOIN 
                    students s ON s.schoolNo = g.SchoolNo
                WHERE g.SchoolNo = ". $schoolNo;

        return $this->dc->ExecuteQuery($qry, true);

    }


    function IsGradePredictedExists($schoolNo) {
        $qry = "SELECT COUNT(*) counts FROM portal_predicted_grades WHERE schoolNo = ". $schoolNo;

        $count = $this->dc->GetObject( $qry );

        return ($count == 1);
    }


    function GetPredictedGradesAll($class) {

        $qry = 'SELECT 1;';

        if($class == 'C2') {
            $qry =
                "SELECT SchoolNo, CardNo, Islamiyat, Pakistan_studies `Pakistan Studies`
                FROM portal_predicted_grades 
                WHERE Id < 269";
        }
        elseif($class == 'H1') {
            $qry =
                "SELECT SchoolNo, CardNo, English_language `English Language`, First_language_urdu `First Language Urdu`, Second_language_urdu `Second Language Urdu`, Accounting, Additional_mathematics `Additional Mathematics`,Art_design `Art and Design`,Biology, Business_studies `Business Studies`,Chemistry,Computer_science `Computer Science`,Economics, French, German, History,Islamiyat, English_literature `English Literature`,Mathematics, Pakistan_studies `Pakistan Studies`,Physics
                FROM portal_predicted_grades 
                WHERE Id > 268 AND Id < 504";
        }
        elseif($class == 'H2') {
            $qry =
                "SELECT SchoolNo, CardNo, Accounting, Biology, Business_studies `Business Studies`,Chemistry,Computer_science `Computer Science`,Economics,English_general_paper `English General Paper`, Further_mathematics `Further Mathematics`,German,History, Law, English_literature `English Literature`,Mathematics,Physics, Sociology,Urdu 
                FROM portal_predicted_grades 
                WHERE Id > 503";
        }
        //echo $qry;
        return $this->dc->ExecuteQuery($qry, true);

    }


    function GetPredictedGradesBySchoolNo($schoolNo) {

        $qry = 'SELECT SUBSTRING(studing, 1, 2) studing FROM students WHERE schoolNo = '. $schoolNo;

        $class = $this->dc->GetObject($qry);

        if($class == 'C2') {
            $qry =
                "SELECT s.studentName, SUBSTRING(studing, 1, 2) studing, g.SchoolNo, CardNo, Islamiyat, Pakistan_studies `Pakistan Studies`
                FROM portal_predicted_grades g INNER JOIN 
                    students s ON s.schoolNo = g.SchoolNo
                WHERE g.SchoolNo = ". $schoolNo;
        }
        elseif($class == 'H1') {
            $qry =
                "SELECT s.studentName, SUBSTRING(studing, 1, 2) studing, g.SchoolNo, CardNo, English_language `English Language`, First_language_urdu `First Language Urdu`, Second_language_urdu `Second Language Urdu`, Accounting, Additional_mathematics `Additional Mathematics`,Art_design `Art and Design`,Biology, Business_studies `Business Studies`,Chemistry,Computer_science `Computer Science`,Economics, French, German, History,Islamiyat, English_literature `English Literature`,Mathematics, Pakistan_studies `Pakistan Studies`,Physics
                FROM portal_predicted_grades g INNER JOIN 
                    students s ON s.schoolNo = g.SchoolNo
                WHERE g.SchoolNo = ". $schoolNo;
        }
        elseif($class == 'H2') {
            $qry =
                "SELECT s.studentName, SUBSTRING(studing, 1, 2) studing, g.SchoolNo, CardNo, Accounting, Biology, Business_studies `Business Studies`,Chemistry,Computer_science `Computer Science`,Economics,English_general_paper `English General Paper`, Further_mathematics `Further Mathematics`,German,History, Law, English_literature `English Literature`,Mathematics,Physics, Sociology,Urdu 
                FROM portal_predicted_grades g INNER JOIN 
                    students s ON s.schoolNo = g.SchoolNo
                WHERE g.SchoolNo = ". $schoolNo;
        }

        $qry =
            "SELECT s.studentName, SUBSTRING(Class, 1, 2) studing, g.SchoolNo, CardNo, Biology, English_language `English Language`, First_language_urdu `First Language Urdu`, Second_language_urdu `Second Language Urdu`, Accounting, Additional_mathematics `Additional Mathematics`,Art_design `Art and Design`, Business_studies `Business Studies`,Chemistry,Computer_science `Computer Science`,Economics, French, English_general_paper `English General Paper`, Further_mathematics `Further Mathematics`, German, History, Law, Islamiyat, English_literature `English Literature`,Mathematics, Pakistan_studies `Pakistan Studies`,Physics, Sociology,Urdu
                FROM portal_predicted_grades g INNER JOIN 
                    students s ON s.schoolNo = g.SchoolNo
                WHERE g.SchoolNo = ". $schoolNo;
        //echo $qry;
        return $this->dc->ExecuteQuery($qry, true);

    }

	public function GetAnnualExams($schoolNo) {
		$qry =
            "SELECT
				*
			FROM
				portal_annualexam m 
			WHERE m.SchoolNo =" . $schoolNo .
                " AND m.ExamId = 'A2022' 
                ORDER BY m.subject";
		$dTable = $this->dc->ExecuteQuery($qry, true);

        return $dTable;
		
	}

    public function TestsMockMarksBySchoolNo( $schoolNo ) {
        $qry =
            "SELECT
				m.`Id`, s.Subject, m.Grade
			FROM
				portal_me2021 m INNER JOIN
				portal_subjects s ON s.Code = m.Subject
			WHERE m.SchoolNo =" . $schoolNo .
                " AND m.ExamId = 'ME2021' 
                ORDER BY s.Subject";


        //echo $qry;
        $dTable = $this->dc->ExecuteQuery($qry, true);

        return $dTable;
    }

    function PrintTable(DataTable $dTable)
	{
		$html = "<div style='display:table; border:1px lightgray solid; width:100%;'>";
		
		$html .= "<div style='display:table-row; border:1px lightgray solid;'>";
		foreach($dTable->Columns as $col)
		{
			$html .= "<div style='display:table-cell; border:1px lightgray solid; background-color:#4b6c9e; color:#fff;'>";
			$html .= $col;
			$html .= "</div>";
		}
		
		$html .= "</div>";
		
		foreach($dTable->Rows as $row)
		{
			$html .= "<div style='display:table-row; border:1px lightgray solid;'>";
			foreach($dTable->Columns as $col)
			{
				$html .= "<div style='display:table-cell; border:1px lightgray solid;'>";

				$html .= is_array( $row[$col] ) ? $this->getTableRow( $row[$col] ) : $row[$col];
				//$html .= $row[$col];
				$html .= "</div>";
			}
			
			$html .= "</div>";
		}
		
		$html .= "<div style='display:table-row; border:1px lightgray solid;'>";
			$html .= "<div style='display:table-cell; border:1px lightgray solid; color:000;' class='colspan'>";
			$html .= "<div><div>Total Records: " . $dTable->rowsCount() . "</div></div>";
			$html .= "</div>";
		$html .= "</div>";
		
		$html .= "</div>";
		
		echo $html;
	}

	function getTableRow ($data) {

		//var_dump ($data);
		//return "";

		$html = "";

		$columns = array_keys($data);
		

		$html .= "<div style='display:table-row; border:1px lightgray solid;'>";
		foreach($columns as $col)
		{
			$html .= "<div style='display:table-cell; border:1px lightgray solid; background-color:#4b6c9e; color:#fff;'>";
			$html .= $col;
			$html .= "</div>";
		}
		
		$html .= "</div>";

		foreach($data as $row => $val)
		{
			$html .= "<div style='display:table-row; border:1px lightgray solid;'>";
			foreach($columns as $col)
			{
				$html .= "<div style='display:table-cell; border:1px lightgray solid;'>";
				$html .= $val;
				$html .= "</div>";
			}
			
			$html .= "</div>";
		}
		return $html;
	}

	
}

?>
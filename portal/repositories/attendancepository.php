<?php

class AttendanceRepository
{
	private $dc;

	function __construct(DataCenter $dataCenter)
	{
		$this->dc = $dataCenter;
	}
	
	function __destruct()
	{
		
    }
	
	public function GetAttendanceBySchoolNo($schoolNo)
	{
		//$qry = "SELECT `Id`, `SchoolNo`, `TotalDays`, `Present`, `Percentage`, `StudyHours`, `Absent`, `Leave`, `Subject` FROM portal_attendance WHERE SchoolNo = " . $schoolNo;
		$qry = "SELECT `Id`, `SchoolNo`, `TotalDays`, `Present`, `Percentage`, `StudyHours`, `Absent`, `Leave`, `Subject` FROM portal_attendance WHERE SchoolNo = " . $schoolNo." and `Subject` IN (SELECT distinct `Subject` FROM `v_StudentActiveSubjects` WHERE (`SchoolNo`='".$schoolNo."' and LENGTH(`Subject`) > 1) or (SchoolNo = " . $schoolNo." and `Subject`!='Study Class'))";
		//echo $qry;Study Class
		return $this->dc->ExecuteQuery($qry, true);

	}
	
}
?>
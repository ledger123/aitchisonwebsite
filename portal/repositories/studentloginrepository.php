<?php

class StudentLoginRepository
{
	private $dc;
	private $start_id=30511;
	function __construct(DataCenter $dataCenter)
	{
		$this->dc = $dataCenter;
	}
	
	function __destruct()
	{
		
    }
	
	function GetStudentLoginStats($class, $from, $to, $school,  $bd, $offset = 0, $recordsPerPage = 1, $house = 1 ) {
		$classcriteria="";
		if($class!="0"){
			$classcriteria.=" and `portal_students_login_logs`.`Class`='".trim($class)."'";
		}
		if($school!="0"){
			$classcriteria.=" and `students`.`school`='".trim($school)."'";
		}
		if($bd!="0"){
			$classcriteria.=" and `students`.`bD`='".trim($bd)."'";
		}
		$portal="ParentPortal";
		
		$qry_login_stats_count="SELECT COUNT(`portal_students_login_logs`.`Id`) as Id  FROM `portal_students_login_logs` INNER JOIN `students` ON `students`.`schoolNo`=`portal_students_login_logs`.`UserName` WHERE `portal_students_login_logs`.`Portal`='ParentPortal' and `portal_students_login_logs`.`Id` > ".$this->start_id." and `portal_students_login_logs`.`LoginTime` >= '".$from."' and `portal_students_login_logs`.`LoginTime` <= '".$to."'".$classcriteria;
		//echo $qry_login_stats_count;
		$dTable = $this->dc->ExecuteQuery($qry_login_stats_count, true);
		
		$totalRecords = $dTable->Compute(array("Sum"=>"Id"), "");
		
		
		$qry_login_stats="SELECT `portal_students_login_logs`.`UserName`, `portal_students_login_logs`.`School`, `portal_students_login_logs`.`Class`, `portal_students_login_logs`.`LoginTime`, `portal_students_login_logs`.`LogoutTime`, `students`.`studing`, `students`.`bD`, `students`.`house`, `students`.`studentName` FROM `portal_students_login_logs` INNER JOIN `students` ON `students`.`schoolNo`=`portal_students_login_logs`.`UserName` WHERE `portal_students_login_logs`.`Portal`='ParentPortal' and `portal_students_login_logs`.`Id` > ".$this->start_id." and `portal_students_login_logs`.`LoginTime` >= '".$from."' and `portal_students_login_logs`.`LoginTime` <= '".$to."'".$classcriteria;
		
		$qry_login_stats .= "ORDER BY `portal_students_login_logs`.`Class` , `students`.`house` , `portal_students_login_logs`.`LoginTime` DESC LIMIT ".$offset.", ".$recordsPerPage;;
		
		//echo "<br><br><br>".$qry_login_stats;
		$dTable = $this->dc->ExecuteQuery($qry_login_stats, true);
		
		return array( $totalRecords, $dTable );
		
	}
	function GetStudentNotLogin($class, $from, $to, $school,  $bd, $offset = 0, $recordsPerPage = 1, $house = 1 ) {
		$classcriteria="";
		$classcriteria1="";
		if($class!="0"){
			if($class=="Pre C1"){
				$classcriteria.=" and `students`.`studing` like '%Pre%'";
				$classcriteria1.=" and `students`.`studing` like '%Pre%'";
			}else{
				$classcriteria.=" and `students`.`studing` like '".trim($class)."%'";
				$classcriteria1.=" and `students`.`studing` like '".trim($class)."%'";
			}
			//$classcriteria.=" and `portal_students_login_logs`.`Class`='".trim($class)."'";
		}
		if($school!="0"){
			$classcriteria.=" and `students`.`school`='".trim($school)."'";
			$classcriteria1.=" and `students`.`school`='".trim($school)."'";
		}
		if($bd!="0"){
			$classcriteria.=" and `students`.`bD`='".trim($bd)."'";
			$classcriteria1.=" and `students`.`bD`='".trim($bd)."'";
		}
		$portal="ParentPortal";
		$query_login_stats="SELECT `portal_students_login_logs`.`UserName` FROM `portal_students_login_logs` WHERE `portal_students_login_logs`.`Portal`='ParentPortal' and `portal_students_login_logs`.`Id` > ".$this->start_id." and `portal_students_login_logs`.`LoginTime` >= '".$from."' and `portal_students_login_logs`.`LoginTime` <= '".$to."'  and `portal_students_login_logs`.`UserName` IN (select `students`.`schoolNo` from `students` where 1=1 ".$classcriteria1." ) GROUP BY `portal_students_login_logs`.`UserName`";
		
		//$query_login_stats_new="SELECT GROUP_CONCAT(`UserName`) as `UserName` FROM (".$query_login_stats.") as `mytable`";
		//echo "<br>".$query_login_stats."<br><br>";
		//echo "<br>".$query_login_stats_new."<br><br>";
		$dTable_allstudents = $this->dc->ExecuteQuery($query_login_stats, true);
		$allstudentsSchoolNo=0;
		if(count($dTable_allstudents->Rows) > 0){
			foreach($dTable_allstudents->Rows as $row){
				$allstudentsSchoolNo.=",".$row->UserName;		
			}
		}
		$qry_login_stats_count="SELECT COUNT(`students`.`schoolNo`) as Id  FROM `students`  WHERE `students`.`schoolNo` NOT IN(".$allstudentsSchoolNo.")".$classcriteria1;
		//echo $qry_login_stats_count;
		$dTable = $this->dc->ExecuteQuery($qry_login_stats_count, true);
		
		$totalRecords = $dTable->Compute(array("Sum"=>"Id"), "");
		
		
		$qry_login_stats="SELECT *  FROM `students`  WHERE `students`.`schoolNo` NOT IN(".$allstudentsSchoolNo.")".$classcriteria1;
		
		$qry_login_stats .= "ORDER BY `students`.`studing` , `students`.`house` ,`students`.`schoolNo` DESC LIMIT ".$offset.", ".$recordsPerPage;;
		
		//echo "<br><br><br>".$qry_login_stats;
		$dTable = $this->dc->ExecuteQuery($qry_login_stats, true);
		
		return array( $totalRecords, $dTable );
		
	}
	function getInactiveStudent($class, $school,  $bd, $offset = 0, $recordsPerPage = 1, $house = 1 ) {
		$classcriteria="";
		$classcriteria1="";
		if($class!="0"){
			if($class=="Pre C1"){
				$classcriteria.=" and `students`.`studing` like '%Pre%'";
				$classcriteria1.=" and `students`.`studing` like '%Pre%'";
			}else{
				$classcriteria.=" and `students`.`studing` like '".trim($class)."%'";
				$classcriteria1.=" and `students`.`studing` like '".trim($class)."%'";
			}
			//$classcriteria.=" and `portal_students_login_logs`.`Class`='".trim($class)."'";
		}
		if($school!="0"){
			$classcriteria.=" and `students`.`school`='".trim($school)."'";
			$classcriteria1.=" and `students`.`school`='".trim($school)."'";
		}
		if($bd!="0"){
			$classcriteria.=" and `students`.`bD`='".trim($bd)."'";
			$classcriteria1.=" and `students`.`bD`='".trim($bd)."'";
		}
		$portal="ParentPortal";
		$query_login_stats="SELECT `portal_students_login_logs`.`UserName` FROM `portal_students_login_logs` WHERE `portal_students_login_logs`.`Portal`='ParentPortal' and `portal_students_login_logs`.`Id` > ".$this->start_id." and  `portal_students_login_logs`.`UserName` IN (select `students`.`schoolNo` from `students` where 1=1 ".$classcriteria1." ) GROUP BY `portal_students_login_logs`.`UserName`";
		//echo $query_login_stats;
		//$query_login_stats_new="SELECT GROUP_CONCAT(`UserName`) as `UserName` FROM (".$query_login_stats.") as `mytable`";
		$dTable_allstudents = $this->dc->ExecuteQuery($query_login_stats, true);
		$allstudentsSchoolNo=0;
		if(count($dTable_allstudents->Rows) > 0){
			foreach($dTable_allstudents->Rows as $row){
				$allstudentsSchoolNo.=",".$row->UserName;		
			}
		}		
		//echo "<br>".$query_login_stats."<br><br>";
		//echo "<br><br>".$query_login_stats_new."<br><br>";
	
		$qry_login_stats_count="SELECT COUNT(`students`.`schoolNo`) as Id  FROM `students`  WHERE `students`.`schoolNo` NOT IN(".$allstudentsSchoolNo.")".$classcriteria1;
		//echo $qry_login_stats_count;
		$dTable = $this->dc->ExecuteQuery($qry_login_stats_count, true);
		
		$totalRecords = $dTable->Compute(array("Sum"=>"Id"), "");
		
		
		$qry_login_stats="SELECT *  FROM `students`  WHERE `students`.`schoolNo` NOT IN(".$allstudentsSchoolNo.")".$classcriteria1;
		
		//echo "<br><br><br>".$qry_login_stats."<br><br><br>";
		$qry_login_stats .= "ORDER BY `students`.`studing` , `students`.`house` ,`students`.`schoolNo` DESC LIMIT ".$offset.", ".$recordsPerPage;;
		
		//echo "<br><br><br>".$qry_login_stats;
		$dTable = $this->dc->ExecuteQuery($qry_login_stats, true);
		
		return array( $totalRecords, $dTable );
		
	}
	function GetStudentActivePercentage($class, $from, $to) {
		$lengthchk="";
		if($class=="Pre"){
			$class="%".$class."%";
		}else{
			$class=$class."%";
			$lengthchk=" and LENGTH(`studing`) <= 6";
		}
		$qry_total_std="select count(*) as  `Id` from `students` where `studing` like '".$class."' ".$lengthchk;
		//$qry_active_std="SELECT COUNT(DISTINCT `UserName`) as  `Id` FROM `portal_students_login_logs` WHERE `portal_students_login_logs`.`Id` > ".$this->start_id." and `portal_students_login_logs`.`LoginTime` >= '".$from."' and `portal_students_login_logs`.`LoginTime` <= '".$to."' and `Class` like '".$class."'";
		$qry_active_std="SELECT COUNT(DISTINCT `UserName`) as  `Id` FROM `portal_students_login_logs` WHERE `portal_students_login_logs`.`Id` > ".$this->start_id." and `portal_students_login_logs`.`LoginTime` >= '".$from."' and `portal_students_login_logs`.`LoginTime` <= '".$to."' and `UserName` IN (select `schoolNo` as  `Id` from `students` where `studing` like '".$class."') ";
		//echo "<br><br><br><br>".$qry_active_std."<br><br><br><br>";
		$dTable = $this->dc->ExecuteQuery($qry_total_std, true);
		$totalStudents = $dTable->Compute(array("Sum"=>"Id"), "");
		$dTable = $this->dc->ExecuteQuery($qry_active_std, true);
		$activeStudents = $dTable->Compute(array("Sum"=>"Id"), "");
		$inactiveStudents=$totalStudents-$activeStudents;
		$percentage=$this->getPercentage($totalStudents, $activeStudents);
		return array($totalStudents, $activeStudents, $inactiveStudents, $percentage);
	}
	
	function getPercentage($totalval, $obtaind){
		$percentage=0;
		if(intval($totalval) > 0){
			$percentage=intval($obtaind)/intval($totalval)*100;	
			//number_format()
		}
		return number_format($percentage,2);
	}
}
?>
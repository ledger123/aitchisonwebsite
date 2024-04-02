<?php

class AdminRepository
{
	private $dc = null;
	public function __construct(DataCenter $dataCenter)
	{
		$this->dc = $dataCenter;
	}

	public function PortalAccessLog()
	{
		$qry =
			"SELECT `Country`, `City`, COUNT( * ) Counts
			FROM `portal_students_login_logs` 
			WHERE
				`City` <> '' AND 
				( INET_ATON( IpAddress ) NOT BETWEEN INET_ATON( '202.59.75.2' ) AND INET_ATON( '202.59.75.14' ) OR 
				INET_ATON( IpAddress ) NOT BETWEEN INET_ATON( '202.59.76.114' ) AND INET_ATON('202.59.76.126' ) )
			GROUP BY `Country`, `City`
			ORDER BY `Country`, `City`";
		
		//echo $qry;
		return $this->dc->ExecuteQuery($qry, true);
	}

	public function GetDownloadFilesLogs($class, $from, $to, $school, $bd, $offset, $recordsPerPage) {

	    $qry =
            "FROM `portal_files_download_logs` l INNER JOIN
            students s ON s.schoolNo = l.`UserName`
            WHERE l.`EntryTime` >= '$from' AND l.`EntryTime` <= '$to'";

	    if($school != "0")
            $qry .= "AND l.`School` = '$school' ";

        if($class != "0")
            $qry .= "AND l.`Class` = '$class' ";


        if($bd != "0")
            $qry .= "AND s.`bD` = '$bd' ";
        

        $counts = $this->dc->GetObject('SELECT COUNT(*) '. $qry);


        $selectQry =
            "SELECT l.`UserName`, l.`School`,
            CASE WHEN LOCATE(\"worksheets\", l.`Url`) THEN 'Worksheets'
             WHEN LOCATE(\"sampleqa\", l.`Url`) THEN 'Question Papers'
             WHEN LOCATE(\"syllabus\", l.`Url`) THEN 'Syllabus'
             WHEN LOCATE(\"homework\", l.`Url`) THEN 'Homework'
             ELSE '' END PageTitle, 
            l.`FileName`, s.studentName, s.fatherName, s.studing Class, s.bD, DATE_FORMAT(l.`EntryTime`, '%m/%d/%Y %H:%i:%s') EntryDate ";

        $selectQry .= $qry;

        $selectQry .= "ORDER by l.`School`, s.studing, l.`UserName` ";

        $selectQry .= "LIMIT ".$offset.", ".$recordsPerPage;

        //echo $selectQry;

        $dTable = $this->dc->ExecuteQuery($selectQry, true);

        return array($counts, $dTable);
    }
}

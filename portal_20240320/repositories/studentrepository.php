<?php

class StudentRepository
{
	private $dc;

	function __construct(DataCenter $dataCenter)
	{
		$this->dc = $dataCenter;
	}
	
	function __destruct()
	{
		
    }
	
	public function GetStudents( $school, $class, $section, $house )
	{
		$qry = "
			SELECT st.schoolNo, st.studentName, st.fatherName, st.studing, 
				CASE
					WHEN st.bD = 'D' THEN 'Day Boy'
					WHEN st.bD = 'B' THEN 'Boarder'
					ELSE ''
				END bD
			FROM
				`students` AS st INNER JOIN 
				students_login AS stl ON stl.schoolNo = st.schoolNo
			WHERE status = 'Active' AND delstatus = 'Not Deleted' AND st.`school` = '". $school ."' ";
		
		
		if ( strlen( $class ) > 0 )
			$qry .= " AND SUBSTRING(st.studing, 1, 2) = '". $class ."' ";
		
		if ( strlen( $section ) > 0 )
			$qry .= " AND st.studing = '". $section ."' ";
		
		if ( strlen( $house ) > 0 )
			$qry .= " AND st.house = '". $house ."' ";
		
		
		$qry .= "ORDER BY st.studing, st.schoolNo";
		
		//echo $qry;
		//exit;
		return $this->dc->ExecuteQuery($qry, true);

	}

	public function SearchStudents($schoolNos)
	{
		$qry =
			"SELECT schoolNo, studentName, studing, school FROM students
			WHERE schoolNo IN(?)";

        $params = array(
            array("datatype"=>"s", "value"=>$schoolNos)
        );

		//echo $qry;
		//exit;
        return $this->dc->ExecuteParamQuery($qry, $params, true);
		//return $this->dc->ExecuteQuery($qry, true);
	}
	
}
?>
<?php
class MySportsRepository
{
	private $dc;
	
	function __construct(DataCenter $dataCenter)
	{
		$this->dc = $dataCenter;
	}
	
	function __destruct()
	{
		
    }

	public function GetMySports($school_no)
	{
		$qry = "
                SELECT `StudentName`,`School`,`Class`,`House`,`Game`,`Facility`,`Day`
                FROM portal_my_sports WHERE SchoolNo = " . $school_no;
		
		
		return $this->dc->ExecuteQuery($qry, true);
	}

    public function GetMySportsDetails($school)
    {
        $qry = "
                SELECT `FieldNo`, `Facility`, `Games`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`
                FROM portal_my_sports_details WHERE School = '$school'";


        return $this->dc->ExecuteQuery($qry, true);
    }




}

?>
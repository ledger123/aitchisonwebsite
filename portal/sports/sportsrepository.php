<?php
class SportsRepository
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

	
	
}

?>
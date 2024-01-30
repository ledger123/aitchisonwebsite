<?php

class FeeRepository
{
	private $dc;

	function __construct(DataCenter $dataCenter)
	{
		$this->dc = $dataCenter;
		
	}
	
	function __destruct()
	{
		
    }
	
	
	public function GetFeeBill($schoolNo)
	{
		$qry = "
			SELECT `Term1`, `FeeBillNo`, `FeeBillDate`, `SubCode_Student`, `DueDate`, `Amount_Total`, `Amount_Bill`, `Amount_Tax`, `BillStatus`, `SectionCode` 
			FROM `wp_feebillchallan_new` 
			WHERE SubCode_Student = '". $schoolNo ."'
			ORDER BY `FeeBillNo` DESC";
		
		$tFeeBill = $this->dc->ExecuteQuery($qry, true);
		
		$qry = "
			SELECT  withdrawn
			FROM  `wp_feebill_new`
			WHERE FeeBillNo =  '". $schoolNo ."'";
		
		$withdrawn = $this->dc->GetObject($qry);
		
		return array($tFeeBill, $withdrawn);
	}
	
	
	public function GetFeeBillSummary($schoolNo, $billNo)
	{
		$qry = 
			"SELECT `Term1`, `Term2`, `FeeBillNo`, `FeeBillDate`, `SubCode_Student`, `DueDate`, `Amount_Total`, `Amount_Bill`, `Amount_Tax`, `BillStatus`, `SectionCode`
			FROM `wp_feebillchallan_new`
			WHERE SubCode_Student = '". $schoolNo ."' AND `FeeBillNo` = '". $billNo ."'
			ORDER BY `FeeBillNo` DESC";
		
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	
	public function GetFeeBillDetails($schoolNo, $billNo)
	{
		$qry = 
			"SELECT `BranchCode`, `DueDate`, `AmountFee1`, `UnBillSqNo`, `BranchCode`, IFNULL(TrRef, '-') TrRef, `TrDate`, `DetailCOde_Income`, `DetailCodeDescription`, `Narration`, `AmountFee3` 
			FROM `wp_feebilldetail_new` 
			WHERE FeeBillNo = '$billNo' AND SchoolNo = '".$schoolNo."' 
			ORDER BY TrRef Desc, AmountFee3 Desc, BranchCode Desc";
		//echo $qry;
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	public function GetFeeChallan($schoolNo, $billNo)
	{
		$qry = 
			"SELECT `Term1`, `StudentName`, `FeeBillNo`, `FeeBillDate`, `SubCode_Student`, `DueDate`, `Amount_Total`, `Amount_Bill`,  `Amount_Tax`, `BillStatus`, `SectionCode`
			FROM `wp_feebillchallan_new`
			WHERE SubCode_Student = '". $schoolNo ."' AND `FeeBillNo` = '$billNo'
			ORDER BY `FeeBillNo` DESC";
		
		//echo $qry;
		return $this->dc->ExecuteQuery($qry, true);
	}
	
	function GetTotalBillAmount($schoolNo, $billNo){
		
		$qry = 
			"SELECT SUM(AmountFee3) AmountFee3
			FROM wp_feebilldetail_new
			WHERE SubCode_Student = '$schoolNo' AND FeeBillNo = '$billNo'";
		
		return $this->dc->GetObject( $qry );
		
	}
	
	function GetTermName($term) {
		
		if(strpos($term, "1st") > 0) {
			return str_replace("1st", "1<sup>st</sup>", $term);
		}
		else if(strpos($term, "2nd") > 0)
		{
			return str_replace("2nd", "2<sup>nd</sup>", $term);
		}
		else if(strpos($term, "3rd") > 0) {
			return str_replace("3rd", "3<sup>rd</sup>", $term);
		}
		return $term;
	}
	
	function GetBlockedNos() {					
		//$block_SchoolNo=array(20902, 21264, 21265, 21263, 20458, 20243, 19262, 20785, 20786, 20787, 20791, 21266, 18404, 18718, 501, 17138, 17561, 17727, 17964, 18838, 18996, 18997, 19266, 20792, 20793, 20794, 20756, 21212, 21251, 19641, 18222, 18629, 80444, 99933);
		//$block_SchoolNo=array(20902, 21264, 21265, 21263, 20458, 20243, 19262, 20785, 20786, 20787, 20791, 21266, 18404, 18718, 17138, 17561, 17727, 17964, 18838, 18996, 18997, 19266, 20792, 20793, 20794, 20756, 21212, 21251, 19641, 18222, 18629, 17520);
		//$block_SchoolNo=array(501, 19201, 19266, 19382, 19471, 19472, 19569, 19575, 19641, 20106, 20458, 20785, 20786, 20787, 20791, 20792, 20793, 20794, 20824, 20978, 21089, 21251, 21263, 21264, 21265, 21266, 21517, 21520, 21522, 21591, 21613, 21625, 21627, 80441, 99933);
		$block_SchoolNo=array(19382, 20785, 20786, 21263, 21264, 21265, 21517, 21520, 21522, 21591, 21625, 19142, 501, 19266, 20787, 20791, 20792, 20793, 20794, 21266, 21613, 21627, 21674, 21667, 20106, 21609, 19641, 21666, 80441, 99933);
		return $block_SchoolNo;
	}
}
?>
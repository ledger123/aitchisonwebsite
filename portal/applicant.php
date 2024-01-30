<?php
class Applicant
{
	public $cn;
	public $Tcolumns;
	public $Tapplication;
	public $Temployment;
	public $Teducation;
	public $Ttraining;
	public $Trefrees;
	
	public $TapplicationColumns;
	public $TemploymentColumns;
	public $TeducationColumns;
	public $TtrainingColumns;
	public $TrefreesColumns;
	
	
	function __construct($from, $to)
	{
		$conn = new mysqli("192.168.0.141","root","vertrigo", "aitchison_db2");
		
		$this->cn = $conn;
		
		mysqli_set_charset($conn, "utf8");
		
		$dc = new DataCenter();
		
		$this->Tapplication = new DataTable();
		$this->Temployment = new DataTable();
		$this->Teducation = new DataTable();
		$this->Ttraining = new DataTable();
		$this->Trefrees = new DataTable();
		
		
		$this->Tcolumns = array("Id","POST OF","Hear from post","Current Position","Subject Specialization ","Experience","Title","Sur Name","First Name","Middle Name","Last Name","Birth Date","Father Name","Gender","Children","Marital Status","Religion","City","Nationality","Passport","NIC Number","Home Phone","Work Phone","Mobile","Email","Current Address1","Current Address2","Permanent Address1","Permanent Address2","rtapply","Current Salary","Expacted Salary","Notice Period","Apply Date","Joining Date","Availability","Status","Active",
			"Degree","Commenced","Completed","School","Division",
			"Training Date","Training Details",
			"Employment Title","Employment Detail","Employment From","Employment To",
			"Ref Name","Ref Position","Ref Address","Ref Email","Ref Telephone","Ref Relation");
		
		
		$this->TapplicationColumns = array("car_id","jobpost","jobsource","cposition","subject","experience","title","surname","firstname","middlename","lastname","dob","father","gender","children","maritalstatus","religion","city","nationality","passport","nicnumber","homephone","workphone","mobile","email","address_c1","address_c2","address_p1","address_p2","rtapply","csalary","esalary","nperiod","applydate","doj","avail4int","status","delstatus");
		$this->TemploymentColumns = array("empl_title","cempl_detail","cempl_from","cempl_to");
		$this->TeducationColumns = array("degree","commenced","completed","school","division");
		$this->TtrainingColumns = array("tdate","tdetails");
		$this->TrefreesColumns = array("cref_name","cref_position","cref_address","cref_email","cref_telephone","cref_relation");
		
		
		
		$query = "SELECT car_id, app_number, jobpost, jobsource, cposition, subject, experience
			, title, surname, firstname, middlename, lastname, dob
			, father, gender, children, maritalstatus, religion, city
			, nationality, passport, nicnumber, homephone, workphone
			, mobile, email, address_c1, address_c2, address_p1, address_p2
			, rtapply, csalary, esalary, nperiod, applydate, doj
			, avail4int, status, delstatus FROM careers_application where car_id > 29 LIMIT $from,$to";
		
		$result = mysqli_query($conn, $query) or die("Query Could not Execute Due to " . mysqli_error($conn));
		
		$this->Tapplication->SetDataSource($result);
		
		
		$query = "SELECT car_id, cempl_from, cempl_to, cempl_detail, empl_title FROM career_employment";
		
		$result = mysqli_query($conn, $query) or die("Query Could not Execute Due to " . mysqli_error($conn));
		
		$this->Temployment->SetDataSource($result);
		
		
		$query = "SELECT car_id, tdate, tdetails FROM career_training";
		
		$result = mysqli_query($conn, $query) or die("Query Could not Execute Due to " . mysqli_error($conn));
		
		$this->Ttraining->SetDataSource($result);
		

	}
	
	function __destruct()
	{
		
    }
	
	
	public function GetData($dTable, $id)
	{
		return $dTable->Select(array("car_id"=>(int)$id));
	}
	
	public function GetMaxRows($Temployment,$Teducation, $Ttraining ,$Trefrees)
	{
		 $rowsCount = 1;
		 
		 if ($rowsCount < count($Temployment)) $rowsCount = count($Temployment);
		 if ($rowsCount < count($Teducation)) $rowsCount = count($Teducation);
		 if ($rowsCount < count($Ttraining)) $rowsCount = count($Ttraining);
		 if ($rowsCount < count($Trefrees)) $rowsCount = count($Trefrees);
		 
		 return $rowsCount;
	}
	
	public function GetEducation($id)
	{
		$query = "SELECT car_id, commenced, completed, school, degree, division FROM career_education WHERE car_id =" .$id;
		
		$result = mysqli_query($this->cn, $query) or die("Query Could not Execute Due to " . mysqli_error($this->cn));
		
		$this->Teducation = new DataTable();
		
		$this->Teducation->SetDataSource($result);
		//$dTable->PrintTable();
		
		//var_dump($dTable->Rows);
		
		return $this->GetData($this->Teducation, $id);
		
	}
	
	
	public function GetRefrees($id)
	{
		$query = "SELECT car_id, cref_name, cref_position, cref_address, cref_email, cref_telephone, cref_relation FROM career_refrees WHERE car_id =" .$id;
		
		$result = mysqli_query($this->cn, $query) or die("Query Could not Execute Due to " . mysqli_error($this->cn));
		
		$this->Trefrees = new DataTable();
		
		$this->Trefrees->SetDataSource($result);
		//$dTable->PrintTable();
		return $this->GetData($this->Trefrees, $id);
	}
}
?>
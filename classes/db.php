<?php
class DB{
	/*var $username="aitchison";
	var $password="Drybbig3";*/
	var $username="aitchisonuser2";
	var $password="poc!DravOuk2_";
	
	var $hostname="localhost";
	var $dbname="aitchison_db2";
	
	/*
	//For offline
	var $username="root";
	var $password="";
	var $hostname="localhost";
	var $dbname="aitchison";
	*/
		
	
	var $connection="null";
	/*$connection is the variable which is used as the middle tier b/w your project and database;*/
	var $resultset;	
	/* $resultset is the pointer which is used to iterate through the record you have only one resultset throughout the project; */
	var $insertedid;
	/* $insertedid  will be used to check whether a given record has been added into database or not.*/
	var $idlist;
	function __construct(){
		if(!$this->connection=mysql_connect($this->hostname,$this->username,$this->password)){
				die('Could not connect to MySql Server: '); //; . mysql_error());
		}else if(!mysql_select_db($this->dbname , $this->connection)){
				die('Could not connect to Database: '); // . mysql_error());
		}
	}
	function connectDb(){
		if(!$this->connection=mysql_connect($this->hostname,$this->username,$this->password)){
				die('Could not connect to MySql Server: '); // . mysql_error());
		}else if(!mysql_select_db($this->dbname , $this->connection)){
				die('Could not connect to Database: ' ); // . mysql_error());
		}	
	}
	
		/* START OF FUNCTION WHICH WILL UPDATE THE RECORD IN THE DATABASE BY GIVING 
			THE TABLENAME, 
			ARRAY OF TABLE VALUES 
			ALONG WITH THE WHERE CLAUSE
		*/
	function selectDB($hostname, $username, $password, $dbname){
		if(!$this->connection=mysql_connect($hostname,$username,$password)){
				die('Could not connect to MySql Server: ');// . mysql_error());
		}else if(!mysql_select_db($dbname , $this->connection)){
				die('Could not connect to Database: ' );//. mysql_error());
		}
	}	
	function updateRecord($strTableName , $arr , $where=''){
		$strQuery = "update ". $strTableName . " set " ;
		/*while(list($key,$val) =each($arr)){
			$strQuery = $strQuery .$key. " = '" .$this->insertDateVaue($val) . "',";
		}*/
		foreach($arr as $key=>$val){
			$strQuery = $strQuery .$key. " = '" .$this->insertDateVaue($val) . "',";
		}
		$strQuery = substr($strQuery ,0,(strlen($strQuery)-1));
		if(!empty($where)){
			$strQuery = $strQuery." WHERE ".$where;
		}
		//echo "<br />".$strQuery."<br />";
		$this->resultset=mysql_query($strQuery , $this->connection);
		return mysql_affected_rows();
	}
	/**********************  FUNCTIONS FOR LOGS OF PORTALS: STARTED  **********************/


	function insertLogStatus($portalname, $username, $userid, $school){
		date_default_timezone_set ("Asia/Karachi");
		$sessionid=session_id();
		//lst_id, lst_area, lst_name, lst_lid, lst_school, lst_super, logindate, logoutdate, lst_sessid
		$arr=array(
			"lst_area"			=> $portalname,
			"lst_name"			=> $username,
			"lst_lid"			=> $userid,
			"lst_school"		=> $school,
			"lst_super"			=> "No",
			"lst_sessid"		=> $sessionid,
			"logindate"			=> date("Y-m-d H:i:s")
			
		);
		if((count($_SESSION['superuser']) > 0) && $portalname !="Super User"){
			$arr['lst_super']=$_SESSION['superuser']['sup_uname'];
		}
		$this->insertRecordNoAuto("login_stats",  $arr);
	}
	
	function insertlogoutStatus($myloginarea="Super User"){
		date_default_timezone_set ("Asia/Karachi");
		$sessionid=session_id();
		$thistime=date("Y-m-d H:i:s");
		if($myloginarea=="Super User"){
			$this->updateRecord1("update login_stats set logoutdate='".$thistime."' where lst_sessid='".$sessionid."' and logoutdate='0000-00-00 00:00:00'");
		}else{
			$this->updateRecord1("update login_stats set logoutdate='".$thistime."' where lst_sessid='".$sessionid."' and lst_area='".$myloginarea."'  and logoutdate='0000-00-00 00:00:00'");
		}
	}
	
	/**********************  FUNCTIONS FOR LOGS OF PORTALS: ENDED    **********************/
	/****************************STARTED STUDENT AUTHENTICATION FOR STUDENT LOGIN :STARTED*******************************/
	function varifyFBStudent4Parent1($user, $password) {
		$user=mysql_real_escape_string(str_replace(' ', '', $user)); 
		//echo $user;
		$password=mysql_real_escape_string(str_replace(' ', '', $password)); 
		//str_replace(' ', '', $string);
		$qry="SELECT * FROM students AS st INNER JOIN students_login AS stl ON stl.schoolNo = st.schoolNo WHERE st.schoolNo =  '".$user."' AND stl.spassword =  '$password' and status='Active' and delstatus='Not Deleted'";
		//echo $qry;
		if(strlen($user) <= 7){
		$result=mysql_query($qry) ; //or die("Query Could not Exexute Due to ".mysql_error());
		$records=mysql_fetch_array($result);	
			if($records) {
				$_SESSION['parents']['sUserName']=$records['studentName'];
				$_SESSION['parents']['sUserPass']=$records['schoolNo'];
				$_SESSION['parents']['spassword']=$records['spassword'];
				$_SESSION['parents']['uid']=$records['sid'];
				$_SESSION['parents']['email']=$records['email'];
				$_SESSION['parents']['semail']=$records['semail'];
				$_SESSION['parents']['contact']=$records['contact'];
				$_SESSION['parents']['sphone']=$records['sphone'];
				$_SESSION['parents']['parentName']=$records['fatherName'];
				$_SESSION['parents']['studing']=$records['studing'];
				$_SESSION['parents']['uType']='s';
				$_SESSION['parents']['stuSchool']=$records['school'];
				$this->insertLogStatus("Parents", $records['studentName'], $records['schoolNo'], $records['school']);
				header("Location: pmain.php");
		}
		else { 
			return "Invalid User Name or Password";
		}
		}else{
			return "Invalid User Name or Password";
		}
	}
	function varifyFBStudent4Parent($user, $password) {
		$user=mysql_real_escape_string(str_replace(' ', '', $user)); 
		$password=mysql_real_escape_string(str_replace(' ', '', $password));
		//$user = (int)$user;
		$qry="SELECT * FROM students AS st INNER JOIN students_login AS stl ON stl.schoolNo = st.schoolNo WHERE st.schoolNo =  '$user' AND stl.spassword =  '$password' and status='Active' and delstatus='Not Deleted'";
		//echo $qry;
		if(strlen($user) <= 7){
		$result=mysql_query($qry) ; //or die("Query Could not Exexute Due to ".mysql_error());
		$records=mysql_fetch_array($result);	
			if($records) {
				$_SESSION['parents']['sUserName']=$records['studentName'];
				$_SESSION['parents']['sUserPass']=$records['schoolNo'];
				$_SESSION['parents']['spassword']=$records['spassword'];
				$_SESSION['parents']['uid']=$records['sid'];
				$_SESSION['parents']['email']=$records['email'];
				$_SESSION['parents']['semail']=$records['semail'];
				$_SESSION['parents']['contact']=$records['contact'];
				$_SESSION['parents']['sphone']=$records['sphone'];
				$_SESSION['parents']['bD']=$records['bD'];
				$_SESSION['parents']['parentName']=$records['fatherName'];
				$_SESSION['parents']['studing']=$records['studing'];
				if(strpos($records['studing'], "Pre") && strpos("a".$records['studing'], "C1")){
					$_SESSION['parents']['st_class']="Pre C1";	
				}else{
					$_SESSION['parents']['st_class']=substr($records['studing'], 0, 2);	
				}
				$_SESSION['parents']['uType']='s';
				$_SESSION['parents']['stuSchool']=$records['school'];
				$this->insertLogStatus("Parents", $records['studentName'], $records['schoolNo'], $records['school']);
				unset( $_SESSION['wrong_pword_count'] );
				
				header("Location: pmain.php");
		}
		else { 
			return "Invalid user name or password";
		}
		}else{
			return "Invalid user name or password";
		}
	}
	/****************************STARTED STUDENT AUTHENTICATION FOR STUDENT LOGIN   :ENDED*******************************/
	/****************************STARTED AUTHENTICATION FOR SUPER LOGIN : STARTED*******************************/
	function varifySuperUser($user, $password) {
		$user=mysql_real_escape_string(str_replace(' ', '', $user)); 
		$password=mysql_real_escape_string(str_replace(' ', '', $password));
		//$qry="SELECT * FROM students AS st INNER JOIN studentsloginsdetails AS stl ON stl.schoolNo = st.schoolNo WHERE st.schoolNo =  '$user' AND stl.stdpassword =  password('$password') and status='Active' and delstatus='Not Deleted'";
		$qry="SELECT * FROM superuserdetails WHERE sup_uname =  '".$user."' AND sup_upassword =  '".$password."' and status='Active' and delstatus='Not Deleted'";
		//echo $qry;
		//if(strlen($user) <= 7) {
			$result=mysql_query($qry);// or die("Query Could not Exexute Due to ".mysql_error());
			$records=mysql_fetch_array($result);	
			if($records) {
				//sup_fname				
				//echo "Akhtar";
				$_SESSION['superuser']['sup_fname']=$records['sup_fname'];
				$_SESSION['superuser']['sup_uname']=$records['sup_uname'];
				$_SESSION['superuser']['sup_upassword']=$records['sup_upassword'];				
				$_SESSION['superuser']['school']=$records['school'];
				$this->insertLogStatus("Super User", $records['sup_fname'], $records['sup_uname'], $records['school']);
				unset( $_SESSION['wrong_pword_count_student'] );
				header("Location: super_main.php");
			}else{ 
				return "Invalid User Name or Password";
			}
		/*}else{
			return "Invalid User Name or Password";
		}*/
	}
	/****************************STARTED AUTHENTICATION FOR SUPER LOGIN :  ENDED*******************************/
	/****************************STARTED STUDENT AUTHENTICATION FOR STUDENTS' BOARDER LOGIN :STARTED*******************************/
	function varifyFBStudent4Boarder($user, $password) {
		$user=mysql_real_escape_string(str_replace(' ', '', $user)); 
		$password=mysql_real_escape_string(str_replace(' ', '', $password));
		//$qry="SELECT * FROM students AS st INNER JOIN studentsloginsdetails AS stl ON stl.schoolNo = st.schoolNo WHERE st.schoolNo =  '$user' AND stl.stdpassword =  '$password' and st.bD='B' and status='Active' and delstatus='Not Deleted'";
		//$qry="SELECT * FROM students AS st INNER JOIN studentsloginsdetails AS stl ON stl.schoolNo = st.schoolNo WHERE st.schoolNo =  '$user' AND stl.stdpassword =  password('$password') and st.bD='B' and status='Active' and delstatus='Not Deleted'";
		$qry="SELECT * FROM students AS st INNER JOIN students_login AS stl ON stl.schoolNo = st.schoolNo WHERE st.schoolNo =  '$user' AND stl.spassword =  '$password' and st.bD='B' and status='Active' and delstatus='Not Deleted'";
		//echo $qry;
		if(strlen($user) <= 7){
		$result=mysql_query($qry)  ; //or die("Query Could not Exexute Due to ".mysql_error());
		$records=mysql_fetch_array($result);	
			if($records) {
				$_SESSION['boarder']['sUserName']=$records['studentName'];
				$_SESSION['boarder']['sUserPass']=$records['schoolNo'];
				$_SESSION['boarder']['spassword']=$records['stdpassword'];
				$_SESSION['boarder']['uid']=$records['sid'];
				$_SESSION['boarder']['email']=$records['email'];
				$_SESSION['boarder']['semail']=$records['semail'];
				$_SESSION['boarder']['contact']=$records['contact'];
				$_SESSION['boarder']['sphone']=$records['sphone'];
				$_SESSION['boarder']['parentName']=$records['fatherName'];
				$_SESSION['boarder']['studing']=$records['studing'];
				if(strpos($records['studing'], "Pre") && strpos("a".$records['studing'], "C1")){
					$_SESSION['boarder']['st_class']="Pre C1";	
				}else{
					$_SESSION['boarder']['st_class']=substr($records['studing'], 0, 2);	
				}
				$_SESSION['boarder']['bD']=$records['bD'];
				$_SESSION['boarder']['uType']='s';
				$_SESSION['boarder']['stuSchool']=$records['school'];
				$this->insertLogStatus("Boarder", $records['studentName'], $records['schoolNo'], $records['school']);
				unset( $_SESSION['wrong_pword_count_boarder'] );
				
				header("Location: b_main.php");
		}
		else { 
			return "Invalid User Name or Password";
		}
		}else{
			return "Invalid User Name or Password";
		}
	}
	/****************************STARTED STUDENT AUTHENTICATION FOR STUDENTS' BOARDER LOGIN :  ENDED*******************************/
	/****************************STARTED STUDENT AUTHENTICATION FOR STAFF' PORTAL LOGIN :STARTED*******************************/
	function varifyStaffPortal($user, $password) {
		$user=mysql_real_escape_string(str_replace(' ', '', $user)); 
		$password=mysql_real_escape_string(str_replace(' ', '', $password));
		$qry="SELECT * FROM staff_login WHERE stf_staffid =  '".$user."' AND stf_lpassword =  '".$password."' and status='Active' and delstatus='Not Deleted'";
		//echo $qry;
		if(strlen($user) <= 7) {
			$result=mysql_query($qry);// or die("Query Could not Exexute Due to ".mysql_error());
			$records=mysql_fetch_array($result);	
			if($records) {				
				$_SESSION['stfportal']['stf_id']=$records['stf_id'];
				$_SESSION['stfportal']['stf_staffid']=$records['stf_staffid'];
				$_SESSION['stfportal']['stf_lpassword']=$records['stf_lpassword'];
				$_SESSION['stfportal']['stf_name']=$records['stf_name'];
				$_SESSION['stfportal']['stf_desig']=$records['stf_desig'];
				$_SESSION['stfportal']['stuSchool']=$records['stf_school'];
				$this->insertLogStatus("Staff", $records['stf_name'], $records['stf_staffid'], $records['school']);
				unset( $_SESSION['wrong_pword_count_staff'] );
				header("Location: stf_main.php");
			}
			else { 
				return "Invalid User Name or Password";
			}
		}else{
			return "Invalid User Name or Password";
		}
	}
	
	
	/****************************STARTED STUDENT AUTHENTICATION FOR STAFF' PORTAL LOGIN :  ENDED*******************************/
	/****************************STARTED STUDENT AUTHENTICATION FOR STUDENTS' PORTAL LOGIN :STARTED*******************************/
	function varifyFBStudent4StdPortal($user, $password) {
		$user=mysql_real_escape_string(str_replace(' ', '', $user)); 
		$password=mysql_real_escape_string(str_replace(' ', '', $password));
		//$qry="SELECT * FROM students AS st INNER JOIN studentsloginsdetails AS stl ON stl.schoolNo = st.schoolNo WHERE st.schoolNo =  '$user' AND stl.stdpassword =  password('$password') and status='Active' and delstatus='Not Deleted'";
		$qry="SELECT * FROM students AS st INNER JOIN students_login AS stl ON stl.schoolNo = st.schoolNo WHERE st.schoolNo =  '".$user."' AND stl.spassword =  '$password' and status='Active' and delstatus='Not Deleted'";
		//echo $qry;
		if(strlen($user) <= 7) {
			$result=mysql_query($qry);// or die("Query Could not Exexute Due to ".mysql_error());
			$records=mysql_fetch_array($result);	
			if($records) {
				
				$_SESSION['stdportal']['sUserName']=$records['studentName'];
				$_SESSION['stdportal']['sUserPass']=$records['schoolNo'];
				$_SESSION['stdportal']['spassword']=$records['stdpassword'];
				$_SESSION['stdportal']['uid']=$records['sid'];
				$_SESSION['stdportal']['email']=$records['email'];
				$_SESSION['stdportal']['semail']=$records['semail'];
				$_SESSION['stdportal']['contact']=$records['contact'];
				$_SESSION['stdportal']['sphone']=$records['sphone'];
				$_SESSION['stdportal']['parentName']=$records['fatherName'];
				$_SESSION['stdportal']['studing']=$records['studing'];
				if(strpos($records['studing'], "Pre") && strpos("a".$records['studing'], "C1")){
					$_SESSION['stdportal']['st_class']="Pre C1";	
				}else{
					$_SESSION['stdportal']['st_class']=substr($records['studing'], 0, 2);	
				}
				$_SESSION['stdportal']['uType']='s';
				$_SESSION['stdportal']['stuSchool']=$records['school'];
				$this->insertLogStatus("Student", $records['studentName'], $records['schoolNo'], $records['school']);
				unset( $_SESSION['wrong_pword_count_student'] );
				
				header("Location: std_main.php");
			}
			else { 
				return "Invalid User Name or Password";
			}
		}else{
			return "Invalid User Name or Password";
		}
	}
	/****************************STARTED STUDENT AUTHENTICATION FOR STUDENTS' PORTAL LOGIN :  ENDED*******************************/
	function status_query(){
		$query_string="";
		if(!empty($_GET['fldorder'])){
			$query_string.="fldorder=".$_GET['fldorder']."&opattern=".$_GET['opattern'];
		}
		if(!empty($_GET['pageid'])){
			if(strlen($query_string) > 5){
				$query_string.="&";
			}
			$query_string.="pageid=".$_GET['pageid'];
		}
		if(!empty($_GET['fldid'])){
			if(strlen($query_string) > 5){
				$query_string.="&";
			}
			$query_string.="fldid=".$_GET['fldid']."&operate=".$_GET['operate']."&fldvalue=".$_GET['fldvalue']."";
		}
		if(strlen($query_string) > 5)
			$query_string="?".$query_string;
		else
			$query_string="";
		return $query_string;	
	}
	function updateRecord1($strQuery){		
		//echo $strQuery."<br />";
		$this->resultset=mysql_query($strQuery , $this->connection);
		return mysql_affected_rows();
	}
		/* END OF FUNCTION WHICH WILL UPDATE THE RECORD IN THE DATABASE BY GIVING 
			THE TABLENAME, 
			ARRAY OF TABLE VALUES 
			ALONG WITH THE WHERE CLAUSE
		*/
		
		
		
		
		/* START OF FUNCTION WHICH WILL INSERT THE RECORD IN THE DATABASE BY GIVING 
			THE TABLENAME, 
			ARRAY OF TABLE VALUES 
		*/
	function executeQuery($query){
		$this->resultset=mysql_query($query , $this->connection);
	}
	function insertRecord($strTableName , $arr){
		$arr=$this->getAutoTable($strTableName, $arr);
		foreach($arr as $key=>$value){
			$arr[$key]=$this->insertDateVaue($arr[$key]);
		}
		$FieldList = implode("`,`", array_keys($arr));
		$FieldList = "`".$FieldList."`";
		
		$ValueList = implode("','", array_values($arr));		
		$ValueList = "'".$ValueList."'";

		$strQuery  = "INSERT INTO ".$strTableName."(".$FieldList.") VALUES (".$ValueList.")";	
		//echo $strQuery;		
		$this->insertedid=0;
		$this->resultset=mysql_query($strQuery , $this->connection);
		$this->insertedid=mysql_insert_id();
		
		if($this->insertedid > 0){
			return true;
		}else{
			return false;
		}		
	}
	function insertRecordNoAuto($strTableName , $arr){
		//$arr=$this->getAutoTable($strTableName, $arr);
		foreach($arr as $key=>$value){
			$arr[$key]=$this->insertDateVaue($arr[$key]);
		}
		$FieldList = implode("`,`", array_keys($arr));
		$FieldList = "`".$FieldList."`";
		
		$ValueList = implode("','", array_values($arr));		
		$ValueList = "'".$ValueList."'";

		$strQuery  = "INSERT INTO ".$strTableName."(".$FieldList.") VALUES (".$ValueList.")";	
		//echo $strQuery."<br />";		
		$this->insertedid=0;
		$this->resultset=mysql_query($strQuery , $this->connection);
		$this->insertedid=mysql_insert_id();
		
		if($this->insertedid > 0){
			return true;
		}else{
			return false;
		}		
	}
		/* END OF FUNCTION WHICH WILL INSERT THE RECORD IN THE DATABASE BY GIVING 
			THE TABLENAME, 
			ARRAY OF TABLE VALUES 
		*/	
		
	
		
		
		
		/* START OF FUNCTION WHICH WILL SELECT THE RECORD AGAINST THE QUERY 		*/
	function selectRecord1($query){
			return $this->selectRecord($query);
		}
	function countRecord($query, $fldname){
			$names=$this->selectRecord($query);
			return $names[0][$fldname];
		}
	function checkUnique($table, $fldname, $fldvalue, $where=''){
			//echo "<br />".$where."<br />";
			if(strlen($where) > 4)
				$statement="select $fldname from $table where $fldname='$fldvalue' and $where";
			else
				$statement="select $fldname from $table where $fldname='$fldvalue'";
			//echo $statement;
			if(strlen($where) > 4){
				$statement.=" and $where";
			}						
			//echo $statement;
			$names=$this->selectRecord1($statement);
			if(count($names) > 0){
				return false;
			}else{
				return true;
			}			
		}
	function selectRecord($query){
							//echo $query;
							if($this->resultset != null)
								@mysql_free_result($this->resultset);
							$this->resultset=mysql_query($query , $this->connection);
							//echo $this->resultset;
							while ($Row = @mysql_fetch_assoc($this->resultset)){
								$Rows[] = $Row;
							}
							
							if (isset($Rows) && count($Rows) > 0){
									@mysql_free_result($this->resultset);
									return $Rows;
							}
							else{
									@mysql_free_result($this->resultset);
									return array() ;
							}
	}	
		/* END OF FUNCTION WHICH WILL SELECT THE RECORD AGAINST THE QUERY 		*/



	/*STARTED: FUNCTION GIVES OUTPUT IN COMBO BOX BASED ON GIVEN QUERY.*/
	function fillCombo($statement,$selected=-1){
			$str="";
			$this->resultset=mysql_query($statement , $this->connection);			
			while ($row=mysql_fetch_row($this->resultset)){
					if($row[0]==$selected)
						$str.="<option value='".$row[0]."' selected >".$row[1]."</option>" ;
					else
						$str.="<option value='".$row[0]."'>".$row[1]."</option>" ;
			}
			return $str;
	}
	
	/*STARTED: FUNCTION GIVES OUTPUT IN COMBO BOX BASED ON GIVEN QUERY.*/
	function fillCombo3($statement, $defaultItem, $selectedvalue=-1){ 
			$str="";
			$str.="<option value='0'>".$defaultItem."</option>" ;
			$this->resultset=mysql_query($statement , $this->connection);			
			while ($row=mysql_fetch_row($this->resultset)){
				$selected=($selectedvalue==$row[0])?" selected":"";
				$str.="<option value=\"".$row[0]."\" ".$row[2]."$selected >".$row[1]."</option>" ;
			}
			return $str;
	}
	function fillCombo2($statement, $defaultItem){ 
			$str="";
			$str.="<option value='0'>".$defaultItem."</option>" ;
			$this->resultset=mysql_query($statement , $this->connection);			
			while ($row=mysql_fetch_row($this->resultset)){
				$str.="<option value=\"".$row[0]."\" ".$row[2]." >".$row[1]."</option>" ;
			}
			return $str;
	}
	
	/*STARTED: FUNCTION GIVES OUTPUT IN COMBO BOX BASED ON GIVEN QUERY.*/
	function getSingleCol($query, $col){
		$statement=$query." LIMIT 0, 1";
			$names=$this->selectRecord($statement);
			if(count($names) > 0 )
				return $names[0][$col];
			else 
				return "";	
	}		
	function getSingleRow($query){
			$statement=$query." LIMIT 0, 1";
			//echo $statement;
			$names=$this->selectRecord($statement);
			//print_r($names);
			if(count($names) > 0 ){
				return $names[0];
			}else{ 
				return array();	
			}
	}	
	function insertDateVaue($str){
		return $str;
	}
	function getAutoTable($tablename, $arr, $increment=1){
		$query="select * from autotable where tablename='".$tablename."'";
		$myrow=$this->getSingleRow($query);
		$value=intval($myrow['value'])+intval($increment);
		$id=$myrow['id'];
		$this->updateRecord("autotable", array("value"=>$value), "id=$id");
		$arr[$myrow['clname']]=$value;
		return $arr;
	}
	function getUpdatingRow($table, $where){
		$statement="select * from $table where $where Limit 0,1";		
		//echo $statement;	
		$names=$this->selectRecord1($statement);
		return $names[0];
	}
	function getRow($fldname, $fldvalue, $table){
			$statement="select * from $table where $fldname=$fldvalue";			
			$names=$this->selectRecord1($statement);
			return $names[0];
	}
	function is_exists($tablename, $where, $col='*'){
		$query="select ".$col." from ".$tablename." where ".$where;
		//echo $query;
		$resultset=mysql_query($query , $this->connection);
		//echo $resultset;
		if(!$resultset)
			$numofRecords=0;
		else
			$numofRecords=mysql_num_rows($resultset);
		if($numofRecords > 0)
			return true;
		else 
			return false;		
		//echo $query.$numofRecords;
	}
	function getTotal($query, $colname='total'){	
		$myrow=array();
		$myrow=$this->getSingleRow($query);	
		$totalrecord=$myrow[$colname];		
		return $totalrecord;
	}
	function closeDatabase(){
		mysql_close($this->connection);
	}
	function getFieldValue($name){
			$namea=!empty($_GET[$name])?trim(stripslashes($_GET[$name])):"";
			return !empty($namea)?mysql_real_escape_string($namea):"";
			
		}
	function postFieldValue($name){	
			$namea=!empty($_POST[$name])?trim(stripslashes($_POST[$name])):"";
			return !empty($namea)?mysql_real_escape_string($namea):"";
	}
	function printData($name){

		if(is_array($name)){

			foreach($name as $key => $value){

				$name[$key]=stripslashes($value);				
			}
			return $name; 
		}else{

			return stripslashes($name);
		}
	}
	function checkMyLink(){
		//echo "Akhtar";	
	}
}
?>
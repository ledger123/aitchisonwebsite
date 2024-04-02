<?php	
	ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
	include_once("../../path-settings.php");
	$dpath=$donation_path."../../";
	include($dpath."portal/classes/usersession2.php");
	$session_id= session_id();
	$_SESSION['mynotify']="Show Me.";
	$ref_server="";
	if(isset($_SERVER['HTTP_REFERER'])){
		$ref_server=$_SERVER['HTTP_REFERER'];
	}	
	$server_index_check=strpos($ref_server, "aitchison.edu.pk/");
	if($server_index_check < 13 && $server_index_check > 7){
		if(!empty($_POST["country_id"])) {
			$_POST["country_id"]=str_replace(" ", "", $_POST["country_id"]);
			$state_query="select iso_code, name from stateiso where iso_country_code='" . $_POST["country_id"] . "' ORDER BY `name`";
			$d_table=$dc->ExecuteQuery($state_query, true);
			$str="";
			foreach($d_table->Rows as $Row){
				$str.='<option value="'.$Row->iso_code.'">'.$Row->name.'</option>';
			}
			echo $str;
			//echo $db->fillCombo($state_query,$state);
		}

	}
	/*$qry="select * from donor_information where sess_id='$session_id' ORDER BY  `donor_information`.`info_id` DESC Limit 0, 1";
	$qry="select * from donor_information ORDER BY  `donor_information`.`info_id` DESC Limit 0, 1";
	$d_table=$dc->ExecuteQuery($qry, true);
	$d_table->PrintTable();*/


	/*include_once("fix_mysql.inc.php");
	include("classes/db.php");
	$_SESSION['mynotify']="Show Me.";
	$db=new DB();
	$ref_server=$_SERVER['HTTP_REFERER'];
	$server_index_check=strpos($ref_server, "aitchison.edu.pk/");
	if($server_index_check < 13 && $server_index_check > 7){
		
		if(!empty($_POST["country_id"])) {
			$_POST["country_id"]=str_replace(" ", "", $_POST["country_id"]);
			$state_query="select iso_code, name from stateiso where iso_country_code='" . $_POST["country_id"] . "'";	
			echo $db->fillCombo($state_query,$state);
		}
	}*/
?>
   
<?php
	//include("standard/main.php");
	include_once("fix_mysql.inc.php");
	include("classes/db.php");
	$_SESSION['mynotify']="Show Me.";
	$db=new DB();
	$ref_server=$_SERVER['HTTP_REFERER'];
	$server_index_check=strpos($ref_server, "aitchison.edu.pk/");
	if($server_index_check < 13 && $server_index_check > 7){
		/*echo '<option value="">'.strpos($ref_server, "aitchison.edu.pk/").'</option>';*/
		if(!empty($_POST["country_id"])) {
			$_POST["country_id"]=str_replace(" ", "", $_POST["country_id"]);
			$state_query="select iso_code, name from stateiso where iso_country_code='" . $_POST["country_id"] . "'";	
			echo $db->fillCombo($state_query,$state);
		}
	}
?>
   
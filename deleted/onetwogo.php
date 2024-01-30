<?php
	session_start();
	//echo "AAA".$_SERVER['HTTP_REFERER'];
	phpinfo(); 
	/*if(strpos($_SERVER['HTTP_REFERER'], "aitchison.edu.pk") > 1){
		
	}*/
	include("classes/db.php");
	$totalnewslettershow=6;
	$db=new DB();
	//header("location: ../");
	$table="testone";
	if(!empty($_POST)){
		$arr=array(
			"name"	=> strip_tags($_POST['mytext'])
			);
		$db->insertRecordNoAuto($table , $arr);
	}
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ONE TWO GO</title>
</head>

<body>
<?php
	$records=$db->selectRecord1("select * from testone");
	foreach($records as $record){
		echo $record['name']."<br>Record Ended<br><br><br>";	
	}
?>

<form method="post">
<a href="onetwogo.php">One Two Go</a>
<textarea name="mytext" id="mytext">

</textarea>
<input type="submit">
</form>
</body>
</html>

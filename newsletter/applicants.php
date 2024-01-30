<?php
ini_set('memory_limit', '-1');

include("classes/dataCenter.php");

include("applicant.php");

$from = 0;
$to = 0;

if ( isset($_REQUEST['CmdSubmit']) )
{
	$from = (int)$_REQUEST['TxtFrom'];
	$to   = (int)$_REQUEST['TxtTo'];
	
}

$app = new Applicant($from, $to);

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Applicants Data</title>
</head>

<style>
td,th{vertical-align:top;}
th{ background-color:#2D58E2; color:#fff;}
</style>

<body>

<a href="#" id='exportcsv' align='left' onclick="javascript:exportToExcel('printableArea', 'data')">Make CSV</a>
<br />
<form action="applicants.php" method="post">
    <label>From:</label>&nbsp;&nbsp;<input type="text" id="TxtFrom" name="TxtFrom" value="<?php if($from>0) echo $from; else echo "1"; ?>" />&nbsp;&nbsp;&nbsp;&nbsp;
    <label>Counts:</label>&nbsp;&nbsp;<input type="text" id="TxtTo" name="TxtTo" value="<?php if($to>0) echo $to; else echo "1"; ?>" />&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" id="CmdSubmit" name="CmdSubmit" value="Load Data" />
</form>
<br />

<div style=" width:100%; height:720px; overflow: auto;">
<table border="1" cellspacing="0" cellpadding="2" id='printableArea'>
<tr>
<?php foreach($app->Tcolumns as $col) { ?>
	
	<th><?php echo $col; ?></th>
<?php } ?>
</tr>

<?php



foreach($app->Tapplication->Rows as $appli)
{
	$Temployment = $app->GetData($app->Temployment, $appli->car_id);
	$Teducation = $app->GetEducation($appli->car_id);
	$Ttraining = $app->GetData($app->Ttraining, $appli->car_id);
	$Trefrees = $app->GetRefrees($appli->car_id);
	
	$rowsCount = $app->GetMaxRows($Temployment, $Teducation, $Ttraining ,$Trefrees);
	
	//var_dump($Teducation);
	/*echo count($Temployment)."<br />";
	echo count($Teducation)."<br />";
	echo count($Ttraining)."<br />";
	echo count($Trefrees)."<br />";
	*/
	//echo $Teducation[0]["commenced"]."<br />";
?>



<?php for($i = 0; $i <$rowsCount; $i++) { ?>
	<tr>
    	
    	<?php foreach($app->TapplicationColumns as $col) { ?>
			<td><?php if($i == 0) echo $appli[$col]; ?></td>
        <?php } ?>
        
        <?php foreach($app->TeducationColumns as $col3) { ?>
			<td><?php if ($i<=count($Teducation)) echo $Teducation[$i][$col3]; else echo ""; ?></td>
        <?php } ?>
        
        <?php foreach($app->TtrainingColumns as $col4) { ?>
			<td><?php if ($i<=count($Ttraining)) echo $Ttraining[$i][$col4]; else echo ""; ?></td>
        <?php } ?>
        
        <?php foreach($app->TemploymentColumns as $col2) { ?>
			<td><?php if ($i<=count($Temployment)) echo $Temployment[$i][$col2]; else echo ""; ?></td>
        <?php } ?>
        
        <?php foreach($app->TrefreesColumns as $col5)  { ?>
			<td><?php if ($i<=count($Trefrees)) echo $Trefrees[$i][$col5]; else echo ""; ?></td>
        <?php } ?>
	</tr>
<?php } ?>
	

<?php } ?>

</table>

</div>

</body>
</html>

<script type='text/javascript' src='js/export-excel.js'></script>
<script src="vendors/jquery/dist/jquery.min.js"></script>


<script>

</script>
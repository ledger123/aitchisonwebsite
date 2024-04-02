<?php session_start(); ?>
<?php ob_start(); ?>
<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // date in the past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
header("Cache-Control: no-store, no-cache, must-revalidate"); // HTTP/1.1 
header("Cache-Control: post-check=0, pre-check=0", false); 
header("Cache-Control: private");
header("Pragma: no-cache"); // HTTP/1.0 
?>
<?php
$ewCurSec = 0; // Initialise

// User levels
define("ewAllowadd", 1, true);
define("ewAllowdelete", 2, true);
define("ewAllowedit", 4, true);
define("ewAllowview", 8, true);
define("ewAllowlist", 8, true);
define("ewAllowreport", 8, true);
define("ewAllowsearch", 8, true);
define("ewAllowadmin", 16, true);
?>
<?php
if (@$_SESSION["aitchison_status"] <> "login") {
	header("Location:  login.php");
	exit();
}
?>
<?php

// Initialize common variables
$x_id = Null; 
$ox_id = Null;
$x_request_date = Null; 
$ox_request_date = Null;
$x_requestor_name = Null; 
$ox_requestor_name = Null;
$x_requestor_email = Null; 
$ox_requestor_email = Null;
$x_relation_with_student = Null; 
$ox_relation_with_student = Null;
$x_sticker_num = Null; 
$ox_sticker_num = Null;
$x_car_num1 = Null; 
$ox_car_num1 = Null;
$x_car_num2 = Null; 
$ox_car_num2 = Null;
$x_car_pool_period = Null; 
$ox_car_pool_period = Null;
$x_car_pool_amount = Null; 
$ox_car_pool_amount = Null;
$x_school_num1 = Null; 
$ox_school_num1 = Null;
$x_school_num2 = Null; 
$ox_school_num2 = Null;
$x_school_num3 = Null; 
$ox_school_num3 = Null;
$x_school_num4 = Null; 
$ox_school_num4 = Null;
$x_school_num5 = Null; 
$ox_school_num5 = Null;
$x_driver1_name = Null; 
$ox_driver1_name = Null;
$x_driver1_relation = Null; 
$ox_driver1_relation = Null;
$x_driver2_name = Null; 
$ox_driver2_name = Null;
$x_driver2_relation = Null; 
$ox_driver2_relation = Null;
$x_driver3_name = Null; 
$ox_driver3_name = Null;
$x_driver3_relation = Null; 
$ox_driver3_relation = Null;
$x_driver4_name = Null; 
$ox_driver4_name = Null;
$x_driver4_relation = Null; 
$ox_driver4_relation = Null;
$x_driver5_name = Null; 
$ox_driver5_name = Null;
$x_driver5_relation = Null; 
$ox_driver5_relation = Null;
$x_issued = Null; 
$ox_issued = Null;
$x_received = Null; 
$ox_received = Null;
$x_user = Null; 
$ox_user = Null;
?>
<?php include ("db.php") ?>
<?php include ("gurufn.php") ?>
<?php

// Get key
$x_id = @$_GET["id"];
if (($x_id == "") || ((is_null($x_id)))) {
	ob_end_clean(); 
	header("Location: car_stickerslist.php"); 
	exit();
}

//$x_id = (get_magic_quotes_gpc()) ? stripslashes($x_id) : $x_id;
// Get action

$sAction = @$_POST["a_view"];
if (($sAction == "") || ((is_null($sAction)))) {
	$sAction = "I";	// Display with input box
}

// Open connection to the database
$conn = guru_db_connect(HOST, USER, PASS, DB, PORT);
switch ($sAction)
{
	case "I": // Get a record to display
		if (!LoadData($conn)) { // Load Record based on key
			$_SESSION["ewmsg"] = "No records found";
			guru_db_close($conn);
			ob_end_clean();
			header("Location: car_stickerslist.php");
			exit();
		}
}
?>
<?php include ("header.php") ?>
<script type="text/javascript" src="ew.js"></script>
<p><span class="guru">View TABLE: Car Stickers<br><br>
<a href="car_stickerslist.php">Back to List</a>&nbsp;
<a href="<?php if ($x_id <> "") {echo "car_stickersdelete.php?id=" . urlencode($x_id); } else { echo "javascript:alert('Invalid Record! Key is null');";} ?>">Delete</a>&nbsp;
</span></p>
<p>
<form>
<table border="0" cellspacing="1" cellpadding="4" bgcolor="#CCCCCC">
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Id</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_id; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Date</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo FormatDateTime($x_request_date,7); ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Requestor's Name</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_requestor_name; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Requestor's Email</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_requestor_email; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Relation with Student</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_relation_with_student; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Num of Stickers</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php
switch ($x_sticker_num) {
	case "1":
		$sTmp = "One";
		break;
	case "2":
		$sTmp = "Two";
		break;
	default:
		$sTmp = "";
}
$ox_sticker_num = $x_sticker_num; // Backup Original Value
$x_sticker_num = $sTmp;
?>
<?php echo $x_sticker_num; ?>
<?php $x_sticker_num = $ox_sticker_num; // Restore Original Value ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Car Registration#</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_car_num1; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Car Registration#</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_car_num2; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Please Select</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php
switch ($x_car_pool_period) {
	case "1 Month Rs.1&#44;000/-":
		$sTmp = "1 Month Rs.1&#44;000/-";
		break;
	case "2 Months Rs.2&#44;000/-":
		$sTmp = "2 Months Rs.2&#44;000/-";
		break;
	case "3 Months Rs.3&#44;000/-":
		$sTmp = "3 Months Rs.3&#44;000/-";
		break;
	case "4 Months or above Rs.5&#44;000/-":
		$sTmp = "4 Months or above Rs.5&#44;000/-";
		break;
	default:
		$sTmp = "";
}
$ox_car_pool_period = $x_car_pool_period; // Backup Original Value
$x_car_pool_period = $sTmp;
?>
<?php echo $x_car_pool_period; ?>
<?php $x_car_pool_period = $ox_car_pool_period; // Restore Original Value ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Car Pool Amount</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<div align="right"><?php echo (is_numeric($x_car_pool_amount)) ? FormatNumber($x_car_pool_amount,0,-2,-2,-2) : $x_car_pool_amount; ?></div>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">1. Name of boy</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_school_num1; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">2. Name of boy</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_school_num2; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">3. Name of boy</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_school_num3; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">4. Name of boy</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_school_num4; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">5. Name of boy</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_school_num5; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">1. Name of Driver</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_driver1_name; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Relationship</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_driver1_relation; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">2. Name of Driver</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_driver2_name; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Relationship</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_driver2_relation; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">3. Name of Driver</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_driver3_name; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Relationship</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_driver3_relation; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">4. Name of Driver</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_driver4_name; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Relationship</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_driver4_relation; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">5. Name of Driver</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_driver5_name; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Relationship</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_driver5_relation; ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Issued</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php
$ar_x_issued = explode(",", @$x_issued);
$sTmp = "";
$rowcntwrk = 0;
foreach($ar_x_issued as $cnt_x_issued) {
	switch (trim($cnt_x_issued)) {
		case "Y":
			$sTmp .= "Y";
			$sTmp1 = ViewOptionSeparator($rowcntwrk);
			$sTmp .= $sTmp1;
			break;
	}
	$rowcntwrk++;
}
if (strlen($sTmp) > 0) { $sTmp = substr($sTmp, 0, strlen($sTmp)-strlen($sTmp1)); }
$ox_issued = $x_issued; // Backup Original Value
$x_issued = $sTmp;
?>
<?php echo $x_issued; ?>
<?php $x_issued = $ox_issued; // Restore Original Value ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Received</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php
$ar_x_received = explode(",", @$x_received);
$sTmp = "";
$rowcntwrk = 0;
foreach($ar_x_received as $cnt_x_received) {
	switch (trim($cnt_x_received)) {
		case "Y":
			$sTmp .= "Y";
			$sTmp1 = ViewOptionSeparator($rowcntwrk);
			$sTmp .= $sTmp1;
			break;
	}
	$rowcntwrk++;
}
if (strlen($sTmp) > 0) { $sTmp = substr($sTmp, 0, strlen($sTmp)-strlen($sTmp1)); }
$ox_received = $x_received; // Backup Original Value
$x_received = $sTmp;
?>
<?php echo $x_received; ?>
<?php $x_received = $ox_received; // Restore Original Value ?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">User</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_user; ?>
</span></td>
	</tr>
</table>
</form>
<p>
<?php include ("footer.php") ?>
<?php
guru_db_close($conn);
?>
<?php

//-------------------------------------------------------------------------------
// Function LoadData
// - Load Data based on Key Value sKey
// - Variables setup: field variables

function LoadData($conn)
{
	global $x_id;
	$sSql = "SELECT * FROM `car_stickers`";
	$sWhere = "";
	$sGroupBy = "";
	$sHaving = "";
	$sOrderBy = "";
	if ($sWhere <> "") { $sWhere .= " AND "; }
	$sTmp =  (get_magic_quotes_gpc()) ? stripslashes($x_id) : $x_id;
	$sWhere .= "(`id` = " . addslashes($sTmp) . ")";
	$sSql .= " WHERE " . $sWhere;
	if ($sGroupBy <> "") {
		$sSql .= " GROUP BY " . $sGroupBy;
	}
	if ($sHaving <> "") {
		$sSql .= " HAVING " . $sHaving;
	}
	if ($sOrderBy <> "") {
		$sSql .= " ORDER BY " . $sOrderBy;
	}
	$rs = guru_query($sSql,$conn) or die("Failed to execute query: " . guru_error() . '<br>SQL: ' . $sSql);
	if (guru_num_rows($rs) == 0) {
		$bLoadData = false;
	}else{
		$bLoadData = true;
		$row = guru_fetch_array($rs);

		// Get the field contents
		$GLOBALS["x_id"] = $row["id"];
		$GLOBALS["x_request_date"] = $row["request_date"];
		$GLOBALS["x_requestor_name"] = $row["requestor_name"];
		$GLOBALS["x_requestor_email"] = $row["requestor_email"];
		$GLOBALS["x_relation_with_student"] = $row["relation_with_student"];
		$GLOBALS["x_sticker_num"] = $row["sticker_num"];
		$GLOBALS["x_car_num1"] = $row["car_num1"];
		$GLOBALS["x_car_num2"] = $row["car_num2"];
		$GLOBALS["x_car_pool_period"] = $row["car_pool_period"];
		$GLOBALS["x_car_pool_amount"] = $row["car_pool_amount"];
		$GLOBALS["x_school_num1"] = $row["school_num1"];
		$GLOBALS["x_school_num2"] = $row["school_num2"];
		$GLOBALS["x_school_num3"] = $row["school_num3"];
		$GLOBALS["x_school_num4"] = $row["school_num4"];
		$GLOBALS["x_school_num5"] = $row["school_num5"];
		$GLOBALS["x_driver1_name"] = $row["driver1_name"];
		$GLOBALS["x_driver1_relation"] = $row["driver1_relation"];
		$GLOBALS["x_driver2_name"] = $row["driver2_name"];
		$GLOBALS["x_driver2_relation"] = $row["driver2_relation"];
		$GLOBALS["x_driver3_name"] = $row["driver3_name"];
		$GLOBALS["x_driver3_relation"] = $row["driver3_relation"];
		$GLOBALS["x_driver4_name"] = $row["driver4_name"];
		$GLOBALS["x_driver4_relation"] = $row["driver4_relation"];
		$GLOBALS["x_driver5_name"] = $row["driver5_name"];
		$GLOBALS["x_driver5_relation"] = $row["driver5_relation"];
		$GLOBALS["x_issued"] = $row["issued"];
		$GLOBALS["x_received"] = $row["received"];
		$GLOBALS["x_user"] = $row["user"];
	}
	guru_free_result($rs);
	return $bLoadData;
}
?>

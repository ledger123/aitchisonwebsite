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
$x_sticker_num = Null; 
$ox_sticker_num = Null;
$x_car_num1 = Null; 
$ox_car_num1 = Null;
$x_car_num2 = Null; 
$ox_car_num2 = Null;
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
$x_issued = Null; 
$ox_issued = Null;
$x_sticker_for = Null; 
$ox_sticker_for = Null;
$x_car_pool_amount = Null; 
$ox_car_pool_amount = Null;
?>
<?php include ("db.php") ?>
<?php include ("gurufn.php") ?>
<?php

// Load key from QueryString
$x_id = @$_GET["id"];

//if (!empty($x_id )) $x_id  = (get_magic_quotes_gpc()) ? stripslashes($x_id ) : $x_id ;
// Get action

$sAction = @$_POST["a_edit"];
if (($sAction == "") || (is_null($sAction))) {
	$sAction = "I";	// Display with input box
} else {

	// Get fields from form
	$x_id = @$_POST["x_id"];
	$x_request_date = @$_POST["x_request_date"];
	$x_sticker_num = @$_POST["x_sticker_num"];
	$x_car_num1 = @$_POST["x_car_num1"];
	$x_car_num2 = @$_POST["x_car_num2"];
	$x_school_num1 = @$_POST["x_school_num1"];
	$x_school_num2 = @$_POST["x_school_num2"];
	$x_school_num3 = @$_POST["x_school_num3"];
	$x_school_num4 = @$_POST["x_school_num4"];
	$x_school_num5 = @$_POST["x_school_num5"];
	$x_issued = @$_POST["x_issued"];
	$x_sticker_for = @$_POST["x_sticker_for"];
	$x_car_pool_amount = @$_POST["x_car_pool_amount"];
}

// Check if valid key
if (($x_id == "") || (is_null($x_id))) {
	ob_end_clean();
	header("Location: issued_markinglist.php");
	exit();
}
$conn = guru_db_connect(HOST, USER, PASS, DB, PORT);
switch ($sAction)
{
	case "I": // Get a record to display
		if (!LoadData($conn)) { // Load Record based on key
			$_SESSION["ewmsg"] = "No records found";
			guru_db_close($conn);
			ob_end_clean();
			header("Location: issued_markinglist.php");
			exit();
		}
		break;
	case "U": // Update
		if (EditData($conn)) { // Update Record based on key
			$_SESSION["ewmsg"] = "Update Record Successful";
			guru_db_close($conn);
			ob_end_clean();
			header("Location: issued_markinglist.php");
			exit();
		}
		break;
}
?>
<?php include ("header.php") ?>
<script type="text/javascript" src="ew.js"></script>
<script type="text/javascript">
<!--
EW_dateSep = "/"; // set date separator	

//-->
</script>
<script type="text/javascript">
<!--
function EW_checkMyForm(EW_this) {
if (EW_this.x_request_date && !EW_checkeurodate(EW_this.x_request_date.value)) {
	if (!EW_onError(EW_this, EW_this.x_request_date, "TEXT", "Incorrect date, format = dd/mm/yyyy - Date"))
		return false; 
}
if (EW_this.x_school_num1 && !EW_hasValue(EW_this.x_school_num1, "TEXT" )) {
	if (!EW_onError(EW_this, EW_this.x_school_num1, "TEXT", "Please enter required field - 1. Name of boy"))
		return false;
}
if (EW_this.x_school_num1 && !EW_checkinteger(EW_this.x_school_num1.value)) {
	if (!EW_onError(EW_this, EW_this.x_school_num1, "TEXT", "Incorrect integer - 1. Name of boy"))
		return false; 
}
if (EW_this.x_school_num2 && !EW_checkinteger(EW_this.x_school_num2.value)) {
	if (!EW_onError(EW_this, EW_this.x_school_num2, "TEXT", "Incorrect integer - 2. Name of boy"))
		return false; 
}
if (EW_this.x_car_pool_amount && !EW_checknumber(EW_this.x_car_pool_amount.value)) {
	if (!EW_onError(EW_this, EW_this.x_car_pool_amount, "TEXT", "Incorrect floating point number - Amount"))
		return false; 
}
return true;
}

//-->
</script>
<script type="text/javascript">
<!--
var EW_HTMLArea;

//-->
</script>
<!--script type="text/javascript" src="popcalendar.js"></script-->
<!-- New popup calendar -->
<link rel="stylesheet" type="text/css" media="all" href="jscalendar/calendar-win2k-1.css" title="win2k-1" />
<script type="text/javascript" src="jscalendar/calendar.js"></script>
<script type="text/javascript" src="jscalendar/lang/calendar-en.js"></script>
<script type="text/javascript" src="jscalendar/calendar-setup.js"></script>
<p><span class="guru"><h2>Edit Mark Issued</h2><br><a href="issued_markinglist.php">Back to List</a></span></p>
<form name="issued_markingedit" id="issued_markingedit" action="issued_markingedit.php" method="post" onSubmit="return EW_checkMyForm(this);">
<p>
<input type="hidden" name="a_edit" value="U">
<table border="0" cellspacing="1" cellpadding="4" bgcolor="#CCCCCC">
<?php

	// armaghan: denorm from hdr to dtl (like item_name etc) 
	// move this code under the MasterKey line above
	// $sSql = "SELECT item_id, item_name FROM master_table WHERE id = $x_fk_id";
	// guru_query("BEGIN", $conn);
	// $rs = guru_query($sSql,$conn) or die("Error: " . guru_error() . '<br>SQL: ' . $sSql);
	// if (guru_num_rows($rs) == 0) {
	//	echo("Cannot find the row in master table");
	// }else{
	//	$row = guru_fetch_array($rs);
	//	$x_item_id = $row["item_id"];
	//}
	// guru_query("COMMIT", $conn);
	// guru_query("ROLLBACK", $conn);
	// guru_free_result($rs);

?>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Id</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php echo $x_id; ?><input type="hidden" id="x_id" name="x_id" value="<?php echo htmlspecialchars(@$x_id); ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Date</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_request_date" id="x_request_date" value="<?php echo FormatDateTime(@$x_request_date,7); ?>">
&nbsp;<img src="images/ew_calendar.gif" id="cx_request_date" alt="Pick a Date" style="cursor:pointer;cursor:hand;">
<script type="text/javascript">
Calendar.setup(
{
inputField : "x_request_date", // ID of the input field
ifFormat : "%d/%m/%Y", // the date format
button : "cx_request_date" // ID of the button
}
);
</script>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Stickers</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php
$x_sticker_numList = "<select name=\"x_sticker_num\">";
$x_sticker_numList .= "<option value=''>Please Select</option>";
	$x_sticker_numList .= "<option value=\"1\"";
	if (@$x_sticker_num == "1") {
		$x_sticker_numList .= " selected";
	}
	$x_sticker_numList .= ">" . "One" . "</option>";
	$x_sticker_numList .= "<option value=\"2\"";
	if (@$x_sticker_num == "2") {
		$x_sticker_numList .= " selected";
	}
	$x_sticker_numList .= ">" . "Two" . "</option>";
$x_sticker_numList .= "</select>";
echo $x_sticker_numList;
?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Car 1#</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_car_num1" id="x_car_num1" size="10" maxlength="10" value="<?php echo htmlspecialchars(@$x_car_num1) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Car 2#</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_car_num2" id="x_car_num2" size="10" maxlength="10" value="<?php echo htmlspecialchars(@$x_car_num2) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">1. Name of boy</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_school_num1" id="x_school_num1" size="10" value="<?php echo htmlspecialchars(@$x_school_num1) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">2. Name of boy</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_school_num2" id="x_school_num2" size="10" value="<?php echo htmlspecialchars(@$x_school_num2) ?>">
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Issued</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php 
$ar_x_issued = explode(",",@$x_issued);
$x_issuedChk = "";
$x_issuedChk .= "<input type=\"checkbox\" name=\"x_issued[]\" value=\"Y\"";
foreach ($ar_x_issued as $cnt_x_issued) {
	if (trim($cnt_x_issued) == "Y") {
		$x_issuedChk .= " checked";
		break;
	}
}
	$x_issuedChk .= ">" . "Y" . EditOptionSeparator(0);
echo $x_issuedChk;
?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Sticker For</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<?php
$x_sticker_forList = "<select name=\"x_sticker_for\">";
$x_sticker_forList .= "<option value=''>Please Select</option>";
	$x_sticker_forList .= "<option value=\"Prep School\"";
	if (@$x_sticker_for == "Prep School") {
		$x_sticker_forList .= " selected";
	}
	$x_sticker_forList .= ">" . "Prep School" . "</option>";
	$x_sticker_forList .= "<option value=\"Junior School\"";
	if (@$x_sticker_for == "Junior School") {
		$x_sticker_forList .= " selected";
	}
	$x_sticker_forList .= ">" . "Junior School" . "</option>";
	$x_sticker_forList .= "<option value=\"Senior School\"";
	if (@$x_sticker_for == "Senior School") {
		$x_sticker_forList .= " selected";
	}
	$x_sticker_forList .= ">" . "Senior School" . "</option>";
	$x_sticker_forList .= "<option value=\"All Schools\"";
	if (@$x_sticker_for == "All Schools") {
		$x_sticker_forList .= " selected";
	}
	$x_sticker_forList .= ">" . "All Schools" . "</option>";
$x_sticker_forList .= "</select>";
echo $x_sticker_forList;
?>
</span></td>
	</tr>
	<tr>
		<td bgcolor="#666666"><span class="guru" style="color: #FFFFFF;">Amount</span></td>
		<td bgcolor="#F5F5F5"><span class="guru">
<input type="text" name="x_car_pool_amount" id="x_car_pool_amount" size="10" value="<?php echo htmlspecialchars(@$x_car_pool_amount) ?>">
</span></td>
	</tr>
</table>
<p>
<input type="submit" name="Action" value="EDIT">
</form>
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
	$sSql = "SELECT car_stickers.id, car_stickers.request_date, car_stickers.sticker_num, car_stickers.car_num1, car_stickers.car_num2, car_stickers.school_num1, car_stickers.school_num2, car_stickers.school_num4, car_stickers.school_num3, car_stickers.school_num5, car_stickers.issued, car_stickers.sticker_for, car_stickers.car_pool_amount FROM car_stickers";
	$sWhere = "(car_stickers.issued = 'N')";
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
		$GLOBALS["x_sticker_num"] = $row["sticker_num"];
		$GLOBALS["x_car_num1"] = $row["car_num1"];
		$GLOBALS["x_car_num2"] = $row["car_num2"];
		$GLOBALS["x_school_num1"] = $row["school_num1"];
		$GLOBALS["x_school_num2"] = $row["school_num2"];
		$GLOBALS["x_school_num3"] = $row["school_num3"];
		$GLOBALS["x_school_num4"] = $row["school_num4"];
		$GLOBALS["x_school_num5"] = $row["school_num5"];
		$GLOBALS["x_issued"] = $row["issued"];
		$GLOBALS["x_sticker_for"] = $row["sticker_for"];
		$GLOBALS["x_car_pool_amount"] = $row["car_pool_amount"];
	}
	guru_free_result($rs);
	return $bLoadData;
}
?>
<?php

//-------------------------------------------------------------------------------
// Function EditData
// - Edit Data based on Key Value sKey
// - Variables used: field variables

function EditData($conn)
{
	global $x_id;
	$sSql = "SELECT car_stickers.id, car_stickers.request_date, car_stickers.sticker_num, car_stickers.car_num1, car_stickers.car_num2, car_stickers.school_num1, car_stickers.school_num2, car_stickers.school_num4, car_stickers.school_num3, car_stickers.school_num5, car_stickers.issued, car_stickers.sticker_for, car_stickers.car_pool_amount FROM car_stickers";
	$sWhere = "(car_stickers.issued = 'N')";
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
		$bEditData = false; // Update Failed
	}else{
		$theValue = ($GLOBALS["x_request_date"] != "") ? " '" . ConvertDateToMysqlFormat($GLOBALS["x_request_date"]) . "'" : "Null";
		$fieldList["`request_date`"] = $theValue;
		$theValue = ($GLOBALS["x_sticker_num"] != "") ? intval($GLOBALS["x_sticker_num"]) : "NULL";
		$fieldList["`sticker_num`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_car_num1"]) : $GLOBALS["x_car_num1"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`car_num1`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_car_num2"]) : $GLOBALS["x_car_num2"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`car_num2`"] = $theValue;
		$theValue = ($GLOBALS["x_school_num1"] != "") ? intval($GLOBALS["x_school_num1"]) : "NULL";
		$fieldList["`school_num1`"] = $theValue;
		$theValue = ($GLOBALS["x_school_num2"] != "") ? intval($GLOBALS["x_school_num2"]) : "NULL";
		$fieldList["`school_num2`"] = $theValue;
		$theValue = ($GLOBALS["x_issued"] != "") ? implode(",", $GLOBALS["x_issued"]) : "";
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`issued`"] = $theValue;
		$theValue = (!get_magic_quotes_gpc()) ? addslashes($GLOBALS["x_sticker_for"]) : $GLOBALS["x_sticker_for"]; 
		$theValue = ($theValue != "") ? " '" . $theValue . "'" : "NULL";
		$fieldList["`sticker_for`"] = $theValue;
		$theValue = ($GLOBALS["x_car_pool_amount"] != "") ? " '" . doubleval($GLOBALS["x_car_pool_amount"]) . "'" : "NULL";
		$fieldList["`car_pool_amount`"] = $theValue;

		// armaghan: 17-jan-2006. Update this table summaries from detail records (optional but useful)
		// 	This will take care of any deletes done outside the application but just editing/saving the row.
		// guru_query("BEGIN", $conn);
		// $updateSQL = "SELECT sum(po_qty) AS rec_qty FROM po ";
		// $updateSQL .= " WHERE lc_id = $x_id" ;
		// $rs = guru_query($updateSQL,$conn) or die("Error: " . guru_error() . '<br>SQL: ' . $updateSQL);
		// $row = guru_fetch_array($rs);
		// $fieldList["`rec_qty`"] = $row["rec_qty"];
		// guru_free_result($rs);
		// update

		$sSql = "UPDATE `car_stickers` SET ";
		foreach ($fieldList as $key=>$temp) {
			$sSql .= "$key = $temp, ";
		}
		if (substr($sSql, -2) == ", ") {
			$sSql = substr($sSql, 0, strlen($sSql)-2);
		}
		$sSql .= " WHERE " . $sWhere;

		// armaghan: 17-jan-2006. Retrieve old TRANS value and update
		// $updateSQL = "SELECT qty FROM `car_stickers` WHERE id = $x_id";
		// $rs = guru_query($updateSQL,$conn) or die("Error: " . guru_error() . '<br>SQL: ' . $updateSQL);
		// if (guru_num_rows($rs) == 0) { 
		//	echo("Cannot find the old record"); 
		// }else{
		// 	$row = guru_fetch_array($rs);
		//	$x_old_qty = $row["qty"];
		// }
		// guru_free_result($rs);
		// $updateSQL = "UPDATE master_table SET ";
		// $updateSQL .= " onhand = onhand + " . $fieldList["`qty`"] . " - " . $x_old_qty;
		// $updateSQL .= " WHERE id = " . $fieldList["`fk_id`"];
		// guru_query($updateSQL,$conn) or die("Error: " . guru_error() . '<br>SQL: ' . $updateSQL);

		guru_query($sSql,$conn) or die("Failed to execute query: " . guru_error() . '<br>SQL: ' . $sSql);

		//guru_query("ROLLBACK", $conn);
		//guru_query("COMMIT", $conn);

		$bEditData = true; // Update Successful
	}
	return $bEditData;
}
?>
